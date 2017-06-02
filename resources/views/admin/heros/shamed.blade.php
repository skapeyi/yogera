@extends('layouts.admin')

@section('content')
<div class="page-header">
  <h3>Shamed persons</h3>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <table class="table table-striped table-responsive" id="heroes-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Organization</th>
          <th>Sector</th>
          <th>Gender</th>
          <th>Region</th>
          <th>Created</th>
          <th>Edit</th>
        </tr>
      </thead>    
    </table>
  </div>  
</div>

@endsection

@push('scripts')
  <script type="text/javascript">
    jQuery(document).ready(function($){
      $('#heroes-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('get_shames')!!}',
        columns: [
          { data: 'person', name: 'person' },
          { data: 'organisation', name: 'organisation'},
          { data: 'sector', name: 'sector'},
          { data: 'gender', name: 'gender'},
          { data: 'region', name: 'region'},
          { data: 'created_at', name: 'created_at'},
          { data: 'edit', name: 'edit'}
        ]
      });
    });
  </script>
@endpush
