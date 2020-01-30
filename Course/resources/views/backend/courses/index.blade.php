@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.courses.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.courses.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.courses.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.courses.partials.courses-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="courses-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.courses.table.id') }}</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Batch</th>
                            <th>Fee</th>
                            <th>Place</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>{{ trans('labels.backend.courses.table.createdat') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        //Below written line is short form of writing $(document).ready(function() { })
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var dataTable = $('#courses-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.courses.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.courses.table')}}.id'},
                    {data: 'name', name: '{{config('module.courses.table')}}.name'},
                    {data: 'code', name: '{{config('module.courses.table')}}.code'},
                    {data: 'start_date', name: '{{config('module.courses.table')}}.start_date'},
                    {data: 'end_date', name: '{{config('module.courses.table')}}.end_date'},
                    {data: 'batch', name: '{{config('module.courses.table')}}.batch'},
                    {data: 'fee', name: '{{config('module.courses.table')}}.fee'},
                    {data: 'place', name: '{{config('module.courses.table')}}.place'},
                    {data: 'city', name: '{{config('module.courses.table')}}.city'},
                    {data: 'state', name: '{{config('module.courses.table')}}.state'},
                    {data: 'pincode', name: '{{config('module.courses.table')}}.pincode'},
                    {data: 'created_at', name: '{{config('module.courses.table')}}.created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1 ]  }}
                    ]
                }
            });

            Backend.DataTableSearch.init(dataTable);
        });
    </script>
@endsection
