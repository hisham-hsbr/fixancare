<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SnTracker | Search</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="{{ asset('back_end_links/adminLinks/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('back_end_links/adminLinks/plugins/toastr/toastr.min.css') }}">

    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
        }

        table.a {
            table-layout: auto;
            width: 180px;
        }

        table.b {
            table-layout: fixed;
            width: 180px;
        }

        table.c {
            table-layout: auto;
            width: 100%;
        }

        table.d {
            table-layout: fixed;
            width: 100%;
        }
    </style>
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href=""><b>Sn</b>Tracker</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <table class="table table-bordered c">
            <tr>
                <th>No</th>
                <th width="1280px">Product Name</th>
                <th width="480px">Purchase Date</th>
                <th>SerialNumber</th>
            </tr>
            @foreach ($job_numbers as $job_number)
                <tr>
                    <td>{{ $job_number->id }}</td>
                    <td>{{ $job_number->date }}</td>
                    <td>{{ $job_number->jobType->name }}</td>
                    <td>{{ $job_number->imei }}</td>
                </tr>
            @endforeach
        </table>



        <a type="button" href="/" class="btn btn-info">Back</a>


        <div class="help-block text-center">
            <!--Enter your password to retrieve your session -->
        </div>
        <div class="text-center">
            <!-- <a href="login.html">Or sign in as a different user</a> -->
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2021 <b><a href="http://www.hsbr-apps.com/" class="text-black">hsbr-apps</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->

    <script>
        function myFunction() {
            alert("I am an alert box!");
        }
    </script>
    @if (Session::has('message_store'))
        <script>
            toastr.success("{!! Session::get('message_store') !!}");
        </script>
    @endif

    @if (Session::has('message_update'))
        <script>
            toastr.success("{!! Session::get('message_update') !!}");
        </script>
    @endif

    @if ($errors->count() > 0)
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}");
            </script>
        @endforeach
    @endif
    <!-- SweetAlert2 -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/toastr/toastr.min.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('back_end_links/adminLinks/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
