@extends('layouts.admin')

@section('content')
<div class="page-header">
    <h3>Parliment Discussions</h3>
</div>

<div class="panel pane-primary">
    <div class="panel-heading clearfix">
        <div class="btn-group pull-right">
            <a href="/articles/create" class="btn btn-primary btn-sm">
              New Parliament Dicussion
            </a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped" id="pariliament-table">
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
      $('#pariliament-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('get_blogs')!!}',
        columns: [
          { data: 'title', name: 'title' },
          { data: 'content', name: 'content'},
          { data: 'created_at', name: 'created_at'}
        ]
      });
    });
  </script>
@endpush

