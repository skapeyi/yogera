@extends('layouts.admin')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Users</h4>            
        </div>

        <div class="panel-body">
            <table class="table table-striped" id="users-table">
                <thead>
                    <tr>                        
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>                    
                    </tr>
                </thead>
             
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! url('get_users') !!}',
            columns: [
              { data: 'name', name: 'name'},
              { data: 'email', name: 'email' },
              { data: 'created_at', name: 'created_at' },            
            ]
          });
      });
</script>
@endpush
