@extends('back_end.layouts.app')

@section('PageHead', 'Price List Create')

@section('PageTitle', 'Price List Create')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="{{ route('back-end.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('price-lists.index') }}">Price Lists</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('headLinks')
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('actionTitle', 'Price List Create')
@section('mainContent')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1">

            </div>
            <!-- left column -->
            <div class="col-md-10">
                @can('Price List Edit')
                    <form role="form" action="{{ route('price-lists.update', $priceList->id) }}" method="post"
                        enctype="multipart/form-data" id="quickForm">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="card-body">
                            <!-- /.card-header -->
                            <div class="row">

                                <x-form.form-group-label-input div_class="col-sm-4" label_for="code" lable_class="required"
                                    label_name="Code" input_type="text" input_name="code" input_class=""
                                    input_style="text-transform: uppercase" input_id="code" input_value="{{ $priceList->code }}"
                                    input_placeholder="Enter Code" />

                                <x-form.form-group-label-input div_class="col-sm-4" label_for="name" lable_class="required"
                                    label_name="Name" input_type="text" input_name="name" input_class=""
                                    input_style="text-transform: uppercase" input_id="name" input_value="{{ $priceList->name }}"
                                    input_placeholder="Enter Name" />
                                <div class="col-sm-4">

                                </div>


                                <x-form.form-group-label-input div_class="col-sm-4" label_for="group" lable_class="required"
                                    label_name="Group" input_type="text" input_name="group" input_class=""
                                    input_style="text-transform: uppercase" input_id="group"
                                    input_value="{{ $priceList->group }}" input_placeholder="Enter Group" />

                                <x-form.form-group-label-input div_class="col-sm-4" label_for="packing" lable_class="required"
                                    label_name="Packing" input_type="text" input_name="packing" input_class=""
                                    input_style="text-transform: uppercase" input_id="packing"
                                    input_value="{{ $priceList->packing }}" input_placeholder="Enter Packing" />

                                <x-form.form-group-label-input div_class="col-sm-4" label_for="uom" lable_class="required"
                                    label_name="Uom" input_type="text" input_name="uom" input_class=""
                                    input_style="text-transform: uppercase" input_id="uom" input_value="{{ $priceList->uom }}"
                                    input_placeholder="Enter uom" />

                                <x-form.form-group-label-input div_class="col-sm-2" label_for="packet_price"
                                    lable_class="required" label_name="Box Price" input_type="number" input_name="packet_price"
                                    input_class="" input_style="text-transform: uppercase" input_id="packet_price"
                                    input_value="{{ $priceList->packet_price }}" input_placeholder="0.00" />

                                <x-form.form-group-label-input div_class="col-sm-2" label_for="half_packet_price"
                                    lable_class="required" label_name="Half Box Price" input_type="number"
                                    input_name="half_packet_price" input_class="" input_style="text-transform: uppercase"
                                    input_id="half_packet_price" input_value="{{ $priceList->half_packet_price }}"
                                    input_placeholder="0.00" />

                                <x-form.form-group-label-input div_class="col-sm-2" label_for="wholesale_price"
                                    lable_class="required" label_name="Wholesale Price" input_type="number"
                                    input_name="wholesale_price" input_class="" input_style="text-transform: uppercase"
                                    input_id="wholesale_price" input_value="{{ $priceList->wholesale_price }}"
                                    input_placeholder="0.00" />

                                <x-form.form-group-label-input div_class="col-sm-2" label_for="cash_price"
                                    lable_class="required" label_name="Cash Price" input_type="number"
                                    input_name="cash_price" input_class="" input_style="text-transform: uppercase"
                                    input_id="cash_price" input_value="{{ $priceList->cash_price }}"
                                    input_placeholder="0.00" />

                                <x-form.form-group-label-input div_class="col-sm-2" label_for="credit_price"
                                    lable_class="required" label_name="Credit Price" input_type="number"
                                    input_name="credit_price" input_class="" input_style="text-transform: uppercase"
                                    input_id="credit_price" input_value="{{ $priceList->credit_price }}"
                                    input_placeholder="0.00" />

                                <x-form.form-group-label-input div_class="col-sm-4" label_for="description"
                                    lable_class="required" label_name="Description" input_type="text"
                                    input_name="description" input_class="" input_style="text-transform: uppercase"
                                    input_id="description" input_value="{{ $priceList->description }}"
                                    input_placeholder="Enter Description" />
                            </div>


                        </div>

                        <!-- /.row -->
                </div>

                <div class="card-body">
                    <!-- /.card-header -->
                    <div class="col-sm-10 pl-5 pt-2">
                        <input type="checkbox" class="form-check-input" name="status" value="1" id="status"
                            @if ($priceList->status == 1) {{ 'checked' }} @endif />
                        <label class="form-check-label" for="status">Active</label>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="">
                    @can('Price List Update')
                        <button type="submit" class="btn btn-primary float-right ml-1">Update</button>
                    @endcan
                    <a type="button" href="{{ route('price-lists.index') }}"
                        class="btn btn-warning float-right ml-1">Back</a>
                </div>
                <!-- /.card-footer -->
                </form>
            @endcan

        </div>
        <!--/.col (left) -->

    </div>

    <!-- /.row -->
    </div><!-- /.container-fluid -->


@endsection
@section('actionFooter', 'Footer')
@section('footerLinks')



    <x-message.message />

    <x-links.footer-link-jquery-validation />

    <script>
        $(function() {
            // $.validator.setDefaults({
            //     submitHandler: function() {
            //         alert("Form successful submitted!");
            //     }
            // });
            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    parent: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please Enter First Name",
                    },
                    parent: {
                        required: "Please Enter Parent Name",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>


@endsection
