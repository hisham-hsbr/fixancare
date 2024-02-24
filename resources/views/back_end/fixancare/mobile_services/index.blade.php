@extends('back_end.layouts.app')

@section('PageHead', 'Mobile Services Index')

@section('PageTitle', 'Mobile Services Index')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="{{ route('back-end.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('mobile-services.index') }}">Mobile Services</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
    <x-links.header-links-dataTable />
@endsection

@section('actionTitle', 'Mobile Services Index')
@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @can('Mobile Service Read')
                                <x-layouts.div-clearfix>
                                    @can('Mobile Service Create')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-primary btn-sm"
                                            href="{{ route('mobile-services.create') }}" button_icon="fa fa-add"
                                            button_name="Add" />
                                    @endcan {{-- Mobile Service Create End --}}
                                    @can('Mobile Service Import')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-warning btn-sm"
                                            href="{{ route('mobile-services.import') }}" button_icon="fa fa-upload"
                                            button_name="Import" />
                                    @endcan {{-- Mobile Service Create End --}}
                                    @can('Mobile Service Settings')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-default btn-sm"
                                            href="" button_icon="fa fa-cog" button_name="Settings" />
                                    @endcan {{-- Mobile Service Settings End --}}
                                    @can('Mobile Service Table')
                                        <x-form.button button_type="" button_oneclick="Refresh()"
                                            button_class="btn btn-success btn-sm" button_icon="fa fa-refresh"
                                            button_name="Refresh" />
                                    @endcan {{-- Mobile Service Table --}}
                                </x-layouts.div-clearfix>
                                @can('Mobile Service Read')
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                @can('Mobile Service Read')
                                                    <th>Sn</th>
                                                @endcan
                                                @can('Mobile Service Read Date')
                                                    <th>Date</th>
                                                @endcan
                                                @can('Mobile Service Read Job Number')
                                                    <th>Job Number</th>
                                                @endcan
                                                @can('Mobile Service Read Job Type')
                                                    <th>Job Type</th>
                                                @endcan
                                                @can('Mobile Service Read Work Status')
                                                    <th>Work Status</th>
                                                @endcan
                                                @can('Mobile Service Read Job Status')
                                                    <th>Job Status</th>
                                                @endcan
                                                @can('Mobile Service Read Contact Name')
                                                    <th>Contact Name</th>
                                                @endcan
                                                @can('Mobile Service Read Mobile Model')
                                                    <th>Mobile Model</th>
                                                @endcan
                                                @can('Mobile Service Read Mobile Complaint')
                                                    <th>Mobile Complaint</th>
                                                @endcan
                                                @can('Mobile Service Read Complaint Details')
                                                    <th>Complaint Details</th>
                                                @endcan
                                                @can('Mobile Service Read Work Details')
                                                    <th>Work Details</th>
                                                @endcan
                                                @can('Mobile Service Read Delivered At')
                                                    <th>Delivered At</th>
                                                @endcan
                                                @can('Mobile Service Read Contact Number')
                                                    <th>Contact Number</th>
                                                @endcan
                                                @can('Mobile Service Read Contact Address')
                                                    <th>Contact Address</th>
                                                @endcan
                                                @can('Mobile Service Read IMEI')
                                                    <th>IMEI</th>
                                                @endcan
                                                @can('Mobile Service Read Lock')
                                                    <th>Lock</th>
                                                @endcan
                                                @can('Mobile Service Read Payment')
                                                    <th>Payment</th>
                                                @endcan
                                                @can('Mobile Service Read Advance')
                                                    <th>Advance</th>
                                                @endcan
                                                @can('Mobile Service Read Balance')
                                                    <th>Balance</th>
                                                @endcan
                                                @can('Mobile Service Read Description')
                                                    <th>Description</th>
                                                @endcan
                                                @can('Mobile Service Read Status')
                                                    <th>Status</th>
                                                @endcan
                                                @can('Mobile Service Read Created At')
                                                    <th>Created At</th>
                                                @endcan
                                                @can('Mobile Service Read Updated At')
                                                    <th>Updated At</th>
                                                @endcan
                                                @can('Mobile Service Read Created By')
                                                    <th>Created By</th>
                                                @endcan
                                                @can('Mobile Service Read Updated By')
                                                    <th>Updated By</th>
                                                @endcan
                                                @can('Mobile Service Edit')
                                                    <th>Edit</th>
                                                @endcan
                                                @can('Mobile Service Delete')
                                                    <th>Delete</th>
                                                @endcan
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- ---- --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                @can('Mobile Service Read')
                                                    <th>Sn</th>
                                                @endcan
                                                @can('Mobile Service Read Date')
                                                    <th>Date</th>
                                                @endcan
                                                @can('Mobile Service Read Job Number')
                                                    <th>Job Number</th>
                                                @endcan
                                                @can('Mobile Service Read Job Type')
                                                    <th>Job Type</th>
                                                @endcan
                                                @can('Mobile Service Read Work Status')
                                                    <th>Work Status</th>
                                                @endcan
                                                @can('Mobile Service Read Job Status')
                                                    <th>Job Status</th>
                                                @endcan
                                                @can('Mobile Service Read Contact Name')
                                                    <th>Contact Name</th>
                                                @endcan
                                                @can('Mobile Service Read Mobile Model')
                                                    <th>Mobile Model</th>
                                                @endcan
                                                @can('Mobile Service Read Mobile Complaint')
                                                    <th>Mobile Complaint</th>
                                                @endcan
                                                @can('Mobile Service Read Complaint Details')
                                                    <th>Complaint Details</th>
                                                @endcan
                                                @can('Mobile Service Read Work Details')
                                                    <th>Work Details</th>
                                                @endcan
                                                @can('Mobile Service Read Delivered At')
                                                    <th>Delivered At</th>
                                                @endcan
                                                @can('Mobile Service Read Contact Number')
                                                    <th>Contact Number</th>
                                                @endcan
                                                @can('Mobile Service Read Contact Address')
                                                    <th>Contact Address</th>
                                                @endcan
                                                @can('Mobile Service Read IMEI')
                                                    <th>IMEI</th>
                                                @endcan
                                                @can('Mobile Service Read Lock')
                                                    <th>Lock</th>
                                                @endcan
                                                @can('Mobile Service Read Payment')
                                                    <th>Payment</th>
                                                @endcan
                                                @can('Mobile Service Read Advance')
                                                    <th>Advance</th>
                                                @endcan
                                                @can('Mobile Service Read Balance')
                                                    <th>Balance</th>
                                                @endcan
                                                @can('Mobile Service Read Description')
                                                    <th>Description</th>
                                                @endcan
                                                @can('Mobile Service Read Status')
                                                    <th>Status</th>
                                                @endcan
                                                @can('Mobile Service Read Created At')
                                                    <th>Created At</th>
                                                @endcan
                                                @can('Mobile Service Read Updated At')
                                                    <th>Updated At</th>
                                                @endcan
                                                @can('Mobile Service Read Created By')
                                                    <th>Created By</th>
                                                @endcan
                                                @can('Mobile Service Read Updated By')
                                                    <th>Updated By</th>
                                                @endcan
                                                @can('Mobile Service Edit')
                                                    <th>Edit</th>
                                                @endcan
                                                @can('Mobile Service Delete')
                                                    <th>Delete</th>
                                                @endcan
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @endcan{{-- Mobile Service Table end --}}
                                @endcan {{-- Mobile Service Read end --}}
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
                            fetch("/admin/users-management/mobile-services/" + priceListsID, {
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
                    @can('Mobile Service Table Export Excel')
                        'excel',
                    @endcan
                    @can('Mobile Service Table Export PDF')
                        'pdf',
                    @endcan
                    @can('Mobile Service Table Print')
                        'print',
                    @endcan
                    @can('Mobile Service Table Copy')
                        'copy',
                    @endcan
                    @can('Mobile Service Table Column Visible')
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

                ajax: '{!! route('mobile-services.get') !!}',

                columns: [
                    @can('Mobile Service Read')
                        {
                            data: 'id',
                            name: 'id',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Date')
                        {
                            data: 'date',
                            name: 'date',
                            width: '100%',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Job Number')
                        {
                            data: 'jobNumber',
                            name: 'jobNumber',
                            width: '100%',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Job Type')
                        {
                            data: 'jobType',
                            name: 'jobType',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Work Status')
                        {
                            data: 'workStatus',
                            name: 'workStatus',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Job Status')
                        {
                            data: 'jobStatus',
                            name: 'jobStatus',
                            width: '200%',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Contact Name')
                        {
                            data: 'contact_name',
                            name: 'contact_name',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Mobile Model')
                        {
                            data: 'mobileModel',
                            name: 'mobileModel',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Mobile Complaint')
                        {
                            data: 'mobileComplaint',
                            name: 'mobileComplaint',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Complaint Details')
                        {
                            data: 'complaint_details',
                            name: 'complaint_details',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Work Details')
                        {
                            data: 'work_details',
                            name: 'work_details',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Delivered At')
                        {
                            data: 'delivered_at',
                            name: 'delivered_at',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Contact Number')
                        {
                            data: 'contact_number',
                            name: 'contact_number',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Contact Address')
                        {
                            data: 'contact_address',
                            name: 'contact_address',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read IMEI')
                        {
                            data: 'imei',
                            name: 'imei',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Lock')
                        {
                            data: 'lock',
                            name: 'lock',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Payment')
                        {
                            data: 'payment',
                            name: 'payment',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Advance')
                        {
                            data: 'advance',
                            name: 'advance',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Balance')
                        {
                            data: 'balance',
                            name: 'balance',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Description')
                        {
                            data: 'description',
                            name: 'description',
                            width: '',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Status')
                        {
                            data: 'status',
                            name: 'status',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Created At')
                        {
                            data: 'created_at',
                            name: 'created_at',
                            width: '100%',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Updated At')
                        {
                            data: 'updated_at',
                            name: 'updated_at',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Created By')
                        {
                            data: 'created_by',
                            name: 'created_by',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Read Updated By')
                        {
                            data: 'updated_by',
                            name: 'updated_by',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Edit')
                        {
                            data: 'editLink',
                            name: 'editLink',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Mobile Service Delete')
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
    <script>
        function Refresh() {
            $('#example1').DataTable().ajax.reload();
            toastr.success("Refreshed");
        }
    </script>

@endsection
