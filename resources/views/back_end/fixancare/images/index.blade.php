@extends('back_end.layouts.app')

@section('PageHead', 'Image Index')

@section('PageTitle', 'Image Index')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="{{ route('back-end.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('images.index') }}">Mobile Services</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
    <x-links.header-links-dataTable />
@endsection

@section('actionTitle', 'Image Index')
@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @can('Image Read')
                                <x-layouts.div-clearfix>
                                    @can('Image Create')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-primary btn-sm"
                                            href="{{ route('images.create') }}" button_icon="fa fa-add" button_name="Add" />
                                    @endcan {{-- Image Create End --}}
                                    @can('Image Import')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-warning btn-sm"
                                            href="{{ route('images.import') }}" button_icon="fa fa-upload" button_name="Import" />
                                    @endcan {{-- Image Create End --}}
                                    @can('Image Settings')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-default btn-sm"
                                            href="" button_icon="fa fa-cog" button_name="Settings" />
                                    @endcan {{-- Image Settings End --}}
                                    @can('Image Table')
                                        <x-form.button button_type="" button_oneclick="Refresh()"
                                            button_class="btn btn-success btn-sm" button_icon="fa fa-refresh"
                                            button_name="Refresh" />
                                    @endcan {{-- Image Table --}}
                                </x-layouts.div-clearfix>
                                @can('Image Read')
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                @can('Image Read')
                                                    <th>Sn</th>
                                                @endcan
                                                @can('Image Read Code')
                                                    <th>code</th>
                                                @endcan
                                                @can('Image Read Name')
                                                    <th>Name</th>
                                                @endcan
                                                @can('Image Read Brand')
                                                    <th>Brand</th>
                                                @endcan
                                                @can('Image Read Status')
                                                    <th>Status</th>
                                                @endcan
                                                @can('Image Read Created At')
                                                    <th>Created At</th>
                                                @endcan
                                                @can('Image Read Updated At')
                                                    <th>Updated At</th>
                                                @endcan
                                                @can('Image Read Created By')
                                                    <th>Created By</th>
                                                @endcan
                                                @can('Image Read Updated By')
                                                    <th>Updated By</th>
                                                @endcan
                                                @can('Image Edit')
                                                    <th>Edit</th>
                                                @endcan
                                                @can('Image Delete')
                                                    <th>Delete</th>
                                                @endcan
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- ---- --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                @can('Image Read')
                                                    <th>Sn</th>
                                                @endcan
                                                @can('Image Read Code')
                                                    <th>code</th>
                                                @endcan
                                                @can('Image Read Name')
                                                    <th>Name</th>
                                                @endcan
                                                @can('Image Read Brand')
                                                    <th>Brand</th>
                                                @endcan
                                                @can('Image Read Status')
                                                    <th>Status</th>
                                                @endcan
                                                @can('Image Read Created At')
                                                    <th>Created At</th>
                                                @endcan
                                                @can('Image Read Updated At')
                                                    <th>Updated At</th>
                                                @endcan
                                                @can('Image Read Created By')
                                                    <th>Created By</th>
                                                @endcan
                                                @can('Image Read Updated By')
                                                    <th>Updated By</th>
                                                @endcan
                                                @can('Image Edit')
                                                    <th>Edit</th>
                                                @endcan
                                                @can('Image Delete')
                                                    <th>Delete</th>
                                                @endcan
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @endcan{{-- Image Table end --}}
                                @endcan {{-- Image Read end --}}
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

    @endsection
@section('actionFooter', 'Footer')
@section('footerLinks')


    <x-message.message />
    <x-message.table-update />

    <x-links.footer-links-dataTable />

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": true,
                "processing": true,

                // "paging": true,
                // "searching": false,
                // "ordering": true,
                // "info": true,

                // dom: 'Bfrtip',
                dom: '<"html5buttons"B>lTftigp',
                "fnDrawCallback": function(oSettings) {
                    $('.delete-priceLists').on('click', function() {
                        var priceListsID = $(this).data('priceLists_id');
                        var isReady = confirm("Are you sure" + priceListsID);
                        var myHeaders = new Headers({
                            "X-CSRF-TOKEN": $("input[name='_token']").val()
                        });
                        if (isReady) {
                            fetch("/admin/users-management/job-types/" + priceListsID, {
                                method: 'DELETE',
                                headers: myHeaders,
                            }).then(function(response) {
                                return response.json();
                            });
                            $('#example1').DataTable().ajax.reload();
                        }

                    });
                },

                // "buttons": ["excel", "pdf", "print", "colvis"],
                buttons: [
                    @can('Image Table Export Excel')
                        'excel',
                    @endcan
                    @can('Image Table Export PDF')
                        'pdf',
                    @endcan
                    @can('Image Table Print')
                        'print',
                    @endcan
                    @can('Image Table Copy')
                        'copy',
                    @endcan
                    @can('Image Table Column Visible')
                        'colvis',
                    @endcan
                ],
                select: true,
                scrollY: '80vh',
                scrollX: true,
                scrollCollapse: true,
                // lengthMenu: [
                //     [10, 25, 50, 100, 10, 25, 50, 100, 10, 25, 50, 100],
                //     // [10, 25, 50, 100, "All"]
                // ],
                pagingType: "full_numbers",
                processing: true,
                serverSide: true,

                ajax: '{!! route('images.get') !!}',

                columns: [
                    @can('Image Read')
                        {
                            data: 'id',
                            name: 'id',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Code')
                        {
                            data: 'code',
                            name: 'code',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Code')
                        {
                            data: 'name',
                            name: 'name',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Code')
                        {
                            data: 'mobileBrand',
                            name: 'mobileBrand',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Status')
                        {
                            data: 'status',
                            name: 'status',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Created At')
                        {
                            data: 'created_at',
                            name: 'created_at',
                            width: '100%',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Updated At')
                        {
                            data: 'updated_at',
                            name: 'updated_at',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Created By')
                        {
                            data: 'created_by',
                            name: 'created_by',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Read Updated By')
                        {
                            data: 'updated_by',
                            name: 'updated_by',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Edit')
                        {
                            data: 'editLink',
                            name: 'editLink',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Image Delete')
                        {
                            data: 'deleteLink',
                            name: 'deleteLink',
                            defaultContent: ''
                        },
                    @endcan
                ]
            });
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>

@endsection
