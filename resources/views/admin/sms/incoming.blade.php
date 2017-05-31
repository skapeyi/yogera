@extends('layouts.admin')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Incoming Messages</div>

        <div class="panel-body">
          	<table class="table table-bordered" id="incoming">
            	<thead>
              		<tr>
                		<th>From</th>
                		<th>Text</th>
                		<th>Date</th>
              		</tr>
            	</thead>
          </table>
		</div>
    </div>
@endsection
@push('scripts')	
	<script>
		jQuery(document).ready(function($){
      		$('#blogs-table').DataTable({
		        processing: true,
		        serverSide: true,
         		ajax: '{!! url('get_incoming_sms') !!}',
         		columns: [
            		{ data: 'from', name: 'from' },
            		{ data: 'text', name: 'text' },
            		{ data: 'date', name: 'date'}
          		]
      		});
    	});    
    </script>
@endpush