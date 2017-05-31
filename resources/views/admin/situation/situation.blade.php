@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3>Situations</h3>
</div>
<div class="panel pane-primary">
    <div class="panel-heading clearfix">
        <div class="btn-group pull-right">
            <a href="/situation" class="btn btn-primary btn-sm">
              New Situation
          </a>
      </div>
  </div>
  <div class="panel-body">
    <table class="table table-striped" id="situations-table">
        <thead>
            <tr>                
                <th>Name</th>
                <th>Reason</th>
                <th>Category</th>
                <th>Report To</th>
                <th>Created</th>
                <th>Status</th>
            </tr>
        </thead>        
    </table>
   </div>

</div>

@endsection

@push('scripts')
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('#situations-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('get_situations')!!}',
        columns: [
          { data: 'name', name: 'name' },
          { data: 'reason', name: 'reason'},
          { data: 'category', 'name': 'category'},
          { data: 'report_to', 'name': 'report_to'},
          { data: 'created_at', name: 'created_at'},
          { data: 'status', name: 'status'}
        ]
      });
    });
  </script>
@endpush
