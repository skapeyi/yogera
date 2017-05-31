<?php

namespace App\Http\Controllers;

use App\Sms;
use Excel;
use Datatables;
use Illuminate\Http\Request;
use App\Http\Controllers\AfricasTalkingGateway;
use Illuminate\Support\Facades\Response;
use Log;
use App\BulkLog;

class SmsController extends Controller
{
    //
	public function send_single_sms(Request $request){
		    $username   = env('AIT_USERNAME');
      	$apikey     = env('AIT_KEY');

      	$recipients = $request->telephone;      	
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
          		'message' => $request->message,
          		'type' => 'Outgoing',
          		'status' => $result->status,
          		'messageId' => $result->messageId,
          		'cost' => $result->cost
        	]);
      	}
      	return redirect('/admin/outgoing-sms');
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
                  				$recipients = $recipients.',+'.$v['phone'];
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

        	//$gateway    = new AfricasTalkingGateway($username, $apikey);
        	$results = $gateway->sendMessage($recipients, $message);

        	foreach($results as $result){
          		$sms = Sms::create([
                  'from' => 'Yogera',
                  'to' => $result->number,
                  'message' => $request->message,
                  'type' => 'Outgoing',
                  'status' => $result->status,
                  'messageId' => $result->messageId,
                  'cost' => $result->cost
              ]);
        	}
        	return redirect('/admin/outgoing-sms');
      	}
      	else{
        	flash("No file attached saved","success");
        	return redirect('/admin/outgoing-sms');
      	}
	}

	public function ait_delivery_call_back(Request $request){
		$message = Sms::where(['id' => $request['messageId']])->first();
      	$message->status = $request['status'];
      	$message->save();
	}

	public function shortcode_message_call_back(Request $request){
    Log::info($request);
		$sms = new Sms();
    $sms->from = $request->from;
    $sms->to = $request->to;
    $sms->type = "Incoming";
    $sms->date = $request->date;
    $sms->aft_id = $request->id;
    $sms->message = $request->text;

    if($sms->save()){
      return Response::json(
        "ok"
      );
    }else{
      return Response::json(
        "failed"
      );
    }

  
	}

  public function incoming_sms(){
    return view('admin.sms.incoming');
  }

  public function outgoing_sms(){
    return view('admin.sms.outgoing');
  }

}
