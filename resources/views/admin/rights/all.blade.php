@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3>Human Rights</h3>
</div>
<div class="panel pane-primary">
    <div class="panel-heading clearfix">
        <div class="btn-group pull-right">
            <a href="/articles/create" class="btn btn-primary btn-sm">
              New Right
          </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped" id="opinions-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
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
      $('#opinions-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('get_rights')!!}',
        columns: [
          { data: 'title', name: 'title' },
          { data: 'content', name: 'content'},
          { data: 'created_at', name: 'created_at'},
          { data: 'edit', name: 'edit'}
        ]
      });
    });
  </script>
@endpush
