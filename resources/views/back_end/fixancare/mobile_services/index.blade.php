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
                            @can('Price List Read')
                                <x-layouts.div-clearfix>
                                    @can('Price List Create')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-primary btn-sm"
                                            href="{{ route('mobile-services.create') }}" button_icon="fa fa-add"
                                            button_name="Add" />
                                    @endcan {{-- Price List Create End --}}
                                    @can('Price List Import')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-warning btn-sm"
                                            href="{{ route('mobile-services.import') }}" button_icon="fa fa-upload"
                                            button_name="Import" />
                                    @endcan {{-- Price List Create End --}}
                                    @can('Price List Settings')
                                        <x-form.button-href button_type="" button_oneclick="" button_class="btn btn-default btn-sm"
                                            href="" button_icon="fa fa-cog" button_name="Settings" />
                                    @endcan {{-- Price List Settings End --}}
                                    @can('Price List Table')
                                        <x-form.button button_type="" button_oneclick="Refresh()"
                                            button_class="btn btn-success btn-sm" button_icon="fa fa-refresh"
                                            button_name="Refresh" />
                                    @endcan {{-- Price List Table --}}
                                </x-layouts.div-clearfix>
                                @can('Price List Read')
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                @can('Price List Read')
                                                    <th>Sn</th>
                                                @endcan
                                                @can('Price List Read Code')
                                                    <th>Code</th>
                                                @endcan
                                                @can('Price List Read Name')
                                                    <th>Name</th>
                                                @endcan
                                                @can('Price List Read Group')
                                                    <th>Group</th>
                                                @endcan
                                                @can('Price List Read Packing')
                                                    <th>Packing</th>
                                                @endcan
                                                @can('Price List Read UOM')
                                                    <th>UOM</th>
                                                @endcan
                                                @can('Price List Read Packet Price')
                                                    <th>Packet Price</th>
                                                @endcan
                                                @can('Price List Read Half Packet Price')
                                                    <th>Half Packet Price</th>
                                                @endcan
                                                @can('Price List Read Wholesale Price')
                                                    <th>Wholesale Price</th>
                                                @endcan
                                                @can('Price List Read Cash Price')
                                                    <th>Cash Price</th>
                                                @endcan
                                                @can('Price List Read Credit Price')
                                                    <th>Credit Price</th>
                                                @endcan
                                                @can('Price List Read Description')
                                                    <th>Description</th>
                                                @endcan
                                                @can('Price List Read Status')
                                                    <th>Status</th>
                                                @endcan
                                                @can('Price List Read Created At')
                                                    <th>Created At</th>
                                                @endcan
                                                @can('Price List Read Updated At')
                                                    <th>Updated At</th>
                                                @endcan
                                                @can('Price List Read Created By')
                                                    <th>Created By</th>
                                                @endcan
                                                @can('Price List Read Updated By')
                                                    <th>Updated By</th>
                                                @endcan
                                                @can('Price List Edit')
                                                    <th>Edit</th>
                                                @endcan
                                                @can('Price List Delete')
                                                    <th>Delete</th>
                                                @endcan
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- ---- --}}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                @can('Price List Read')
                                                    <th>Sn</th>
                                                @endcan
                                                @can('Price List Read Code')
                                                    <th>Code</th>
                                                @endcan
                                                @can('Price List Read Name')
                                                    <th>Name</th>
                                                @endcan
                                                @can('Price List Read Group')
                                                    <th>Group</th>
                                                @endcan
                                                @can('Price List Read Packing')
                                                    <th>Packing</th>
                                                @endcan
                                                @can('Price List Read UOM')
                                                    <th>UOM</th>
                                                @endcan
                                                @can('Price List Read Packet Price')
                                                    <th>Packet Price</th>
                                                @endcan
                                                @can('Price List Read Half Packet Price')
                                                    <th>Half Packet Price</th>
                                                @endcan
                                                @can('Price List Read Wholesale Price')
                                                    <th>Wholesale Price</th>
                                                @endcan
                                                @can('Price List Read Cash Price')
                                                    <th>Cash Price</th>
                                                @endcan
                                                @can('Price List Read Credit Price')
                                                    <th>Credit Price</th>
                                                @endcan
                                                @can('Price List Read Description')
                                                    <th>Description</th>
                                                @endcan
                                                @can('Price List Read Status')
                                                    <th>Status</th>
                                                @endcan
                                                @can('Price List Read Created At')
                                                    <th>Created At</th>
                                                @endcan
                                                @can('Price List Read Updated At')
                                                    <th>Updated At</th>
                                                @endcan
                                                @can('Price List Read Created By')
                                                    <th>Created By</th>
                                                @endcan
                                                @can('Price List Read Updated By')
                                                    <th>Updated By</th>
                                                @endcan
                                                @can('Price List Edit')
                                                    <th>Edit</th>
                                                @endcan
                                                @can('Price List Delete')
                                                    <th>Delete</th>
                                                @endcan
                                            </tr>
                                        </tfoot>
                                    </table>
                                    @endcan{{-- Price List Table end --}}
                                @endcan {{-- Price List Read end --}}
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
                    @can('Price List Table Export Excel')
                        'excel',
                    @endcan
                    @can('Price List Table Export PDF')
                        'pdf',
                    @endcan
                    @can('Price List Table Print')
                        'print',
                    @endcan
                    @can('Price List Table Copy')
                        'copy',
                    @endcan
                    @can('Price List Table Column Visible')
                        'colvis',
                    @endcan
                ],
                select: true,
                scrollY: '80vh',
                scrollX: true,
                scrollCollapse: true,
                // lengthMenu: [
                //     [10, 25, 50, 100, -1],
                //     [10, 25, 50, 100, "All"]
                // ],
                pagingType: "full_numbers",
                processing: true,
                serverSide: true,

                ajax: '{!! route('mobile-services.get') !!}',

                columns: [
                    @can('Price List Read')
                        {
                            data: 'id',
                            name: 'id',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Code')
                        {
                            data: 'code',
                            name: 'code',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Name')
                        {
                            data: 'name',
                            name: 'name',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Group')
                        {
                            data: 'group',
                            name: 'group',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Packing')
                        {
                            data: 'packing',
                            name: 'packing',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read UOM')
                        {
                            data: 'uom',
                            name: 'uom',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Packet Price')
                        {
                            data: 'packet_price',
                            name: 'packet_price',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Half Packet Price')
                        {
                            data: 'half_packet_price',
                            name: 'half_packet_price',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Wholesale Price')
                        {
                            data: 'wholesale_price',
                            name: 'wholesale_price',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Cash Price')
                        {
                            data: 'cash_price',
                            name: 'cash_price',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Credit Price')
                        {
                            data: 'credit_price',
                            name: 'credit_price',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Description')
                        {
                            data: 'description',
                            name: 'description',
                            defaultContent: '',
                        },
                    @endcan
                    @can('Price List Read Status')
                        {
                            data: 'status',
                            name: 'status',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Created At')
                        {
                            data: 'created_at',
                            name: 'created_at',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Updated At')
                        {
                            data: 'updated_at',
                            name: 'updated_at',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Created By')
                        {
                            data: 'created_by',
                            name: 'created_by',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Read Updated By')
                        {
                            data: 'updated_by',
                            name: 'updated_by',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Edit')
                        {
                            data: 'editLink',
                            name: 'editLink',
                            defaultContent: ''
                        },
                    @endcan
                    @can('Price List Delete')
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
