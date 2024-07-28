@extends('front_end.blood_bank.layouts.app')

@section('header-links')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/css/select2.min.css" rel="stylesheet" />


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/fontawesome-free/css/all.min.css') }}">
    {{-- page Loader --}}
    <link rel="stylesheet" href="{{ asset('pageloader/style.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/dist/css/adminlte.min.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/dd3a80201f.js" crossorigin="anonymous"></script>
    <!-- dynamic Dependent Dropdown List js -->
    {{-- <script src="{{ asset('js/dynamicDependent.js') }}"></script> --}}
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/toastr/toastr.min.css') }}">
@endsection

@section('main-content')
    {{-- <div class="container">

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 card">
                <form role="form" action="{{ route('blood-bank.store') }}" method="post" id="quickForm"
                    enctype="multipart/form-data" id="quickForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Enter First Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name"
                                placeholder="Enter Last Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob"
                                placeholder="Enter Last Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="gender" class="required">Gender</label>
                            <select name="gender" id="gender" class="form-control select2">
                                <option disabled selected>--Gender--</option>
                                <option @if (old('gender') == 'male') { selected } @endif value="male">Male</option>
                                <option @if (old('gender') == 'female') { selected } @endif value="female">Female</option>
                                <option @if (old('gender') == 'other') { selected } @endif value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="phone1">Phone Number 1</label>
                            <input type="number" class="form-control" name="phone1" id="phone1"
                                placeholder="Enter Phone Number 1">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="phone2">Phone Number 2</label>
                            <input type="number" class="form-control" name="phone2" id="phone2"
                                placeholder="Enter Phone Number 2">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter Email">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="blood_id" class="required">Blood
                                Group</label>
                            <select name="blood_id" id="blood_id" class="form-control select2">
                                <option disabled selected>--Blood Group--</option>
                                @foreach ($bloods as $blood)
                                    <option {{ old('blood_id') == $blood->id ? 'selected' : '' }}
                                        value="{{ $blood->id }}">
                                        {{ $blood->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="weight">Weight (kg)</label>
                            <input type="number" class="form-control" name="weight" id="weight"
                                placeholder="Enter Weight">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="last_donated_at">Last Donated Date</label>
                            <input type="date" class="form-control" name="last_donated_at" id="last_donated_at"
                                placeholder="Enter Last Name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="country" class="required col-form-label">Select
                                Country</label>
                            <select name="country" id="country" class="form-control select2 dynamic"
                                data-dependent="state">
                                <option value="">Select Country</option>
                                @foreach ($country_list as $country)
                                    <option value="{{ $country->country }}">
                                        {{ $country->country }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="state" class="required col-form-label">Select
                                State</label>
                            <select name="state" id="state" class="form-control select2 dynamic"
                                data-dependent="district">
                                <option value="">Select State</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="district" class="required col-form-label">Select
                                District</label>
                            <select name="district" id="district" class="form-control select2 dynamic"
                                data-dependent="city">
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="city" class="required col-form-label">Select
                                City</label>
                            <select name="city" id="city" class="form-control select2 dynamic"
                                data-dependent="zip_code">
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="zip_code" class="required col-form-label">Select Zip
                                Code</label>
                            <select name="zip_code" id="zip_code" class="form-control select2">
                                <option value="">Select Zip Code</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <input class="form-check m-5" type="checkbox" value="" id="contact_only_admin"
                                name="contact_only_admin">
                            <label class="p-6" for="contact_only_admin"> Contact Access Only Admins</label>
                        </div>


                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary float-right ml-1">Save</button>
                            <a type="button" href="{{ route('blood-bank.index') }}"
                                class="btn btn-warning float-right ml-1">Back</a>
                            <br>
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>



    </div> --}}

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter email" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" />
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-links')
    <x-message.message />

    <!-- jQuery -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('back_end_links/adminLinks/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('back_end_links/adminLinks/dist/js/demo.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/toastr/toastr.min.js') }}"></script>

    <!-- Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>
    {{-- <x-script.dependent-dropdown-zip-code /> --}}

    <script type="text/javascript">
        $(document).ready(function() {

            $('.dynamic').change(function() {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('blood-bank.csdcs.get') }}",
                        method: "POST",
                        data: {
                            select: select,
                            value: value,
                            _token: _token,
                            dependent: dependent
                        },
                        success: function(result) {
                            $('#' + dependent).html(result);
                        }

                    })
                }
            });

            $('#country').change(function() {
                $('#state').val('');
                $('#district').val('');
                $('#city').val('');
                $('#zip_code').val('');
            });

            $('#state').change(function() {
                $('#district').val('');
                $('#city').val('');
                $('#zip_code').val('');
            });

            $('#district').change(function() {
                $('#city').val('');
                $('#zip_code').val('');
            });

            $('#district').change(function() {
                $('#zip_code').val('');
            });


        });
    </script>
@endsection
