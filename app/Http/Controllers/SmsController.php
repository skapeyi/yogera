<?php

namespace App\Http\Controllers;

use App\Sms;
use Excel;
use Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\AfricasTalkingGateway;

class SmsController extends Controller
{
    //
	public function send_single_sms(Request $request){
		    $username   = env('AIT_USERNAME');
      	$apikey     = env('AIT_KEY');

      	$recipients = $request->telephone;
      	$recipients = substr($recipients,1);
      	$recipients = "+".$recipients;
      	Log::info($recipients);
      	$message = $request->message;

      	$log = new BulkLog();
      	$log->message = $message;
      	$log->recipients = $recipients;
      	$log->save();

      	$gateway    = new AfricasTalkingGateway($username, $apikey);
      	$results = $gateway->sendMessage($recipients, $message);

      	foreach($results as $result) {
        	$sms = Sms::create([
          		'from' => 'Yogera',
          		'to' => $result->number,
          		'text' => $request->message,
          		'type' => 'outgoing',
          		'status' => $result->status,
          		'message_id' => $result->messageId,
          		'cost' => $result->cost
        	]);
      	}
      	return redirect('/sms-ougoing');
	}

	public function send_bulk_sms(Request $request){
		$username   = env('AIT_USERNAME');
      	$apikey     = env('AIT_KEY');
      	$recipients = "";

      	if($request->hasFile('import_file')){
        	$path = $request->file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {})->get();
        
			if(!empty($data)){
          		foreach ($data->toArray() as $key => $value) {
            		if(!empty($value)){
              			foreach ($value as $v) {
                			//Some cells can be empty, so we need to eliminate these.
                			if(strlen($v['phone'] >1)){
                  				$recipients = $recipients.',+256'.$v['phone'];
                			}
                		}
            		}
          		}
        	}
        	$recipients = substr($recipients, 1);
        	$message = $request->message;

        	$log = new BulkLog();
        	$log->message = $message;
        	$log->recipients = $recipients;
        	$log->save();

        	$gateway    = new AfricasTalkingGateway($username, $apikey);
        	$results = $gateway->sendMessage($recipients, $message);

        	foreach($results as $result){
          		$sms = Sms::create([
          			'from' => 'Yogera',
            		'to' => $result->number,
            		'text' => $request->message,
            		'type' => 'outgoing',
            		'status' => $result->status,
            		'message_id' => $result->messageId,
            		'cost' => $result->cost
          		]);
        	}
        	return redirect('/sms-ougoing');
      	}
      	else{
        	flash("No file attached saved","success");
        	return redirect('/sms-ougoing');
      	}
	}

	public function ait_delivery_call_back(Request $request){
		$message = Sms::where(['message_id' => $request['message_id']])->first();
      	$message->status = $request['status'];
      	$message->save();
	}

	public function shortcode_message_call_back(Request $request){
		$sms = Sms::create([
        	'from' => $request->from,
        	'to' => $request->to,
        	'text' => $request->text,
        	'date' => $request->date,
        	'aft_id' => $request->id,
        	'link_id' => $request->link_id,
        	'type' => 'incoming'
      	]);
	}

  public function incoming_sms(){
    return view('admin.sms.incoming');
  }

  public function outgoing_sms(){
    return view('admin.sms.outgoing');
  }

}
