@extends('layouts.admin')

@section('content')
  <div class="page-header">
    <h3>Campaigns</h3>
  </div>

  <div class="panel panel-default">
      <div class="panel-heading clearfix">
          <div class="btn-group pull-right">
              <a href="/articles/create"  class="btn btn-primary btn-sm">
                  Add Campaign
              </a>
          </div>
      </div>

      <div class="panel-body">
          <table class="table table-striped" id="campaign-table">
              <thead>
              <tr>                  
                  <th>Title</th>
                  <th>Content</th>
                  <th>Created</th>
              </tr>
              </thead>
             
          </table>
      </div>
  </div>

@endsection

@push('scripts')
  <script type="text/javascript">
    jQuery(document).ready(function($){
      $('#campaign-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('get_campaigns')!!}',
        columns: [
          { data: 'title', name: 'title' },
          { data: 'content', name: 'content'},
          { data: 'created_at', name: 'created_at'}
        ]
      });
    });
  </script>
@endpush
