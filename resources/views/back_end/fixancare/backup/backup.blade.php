@extends('back_end.layouts.app')

@section('PageHead', 'Backup Files')

@section('PageTitle', 'Backup Files')
@section('pageNavHeader')
    <li class="breadcrumb-item"><a href="{{ route('back-end.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('job-types.index') }}">Job Type</a></li>
    <li class="breadcrumb-item active">Index</li>
@endsection

@section('headLinks')
    <x-links.header-links-dataTable />
@endsection

@section('actionTitle', 'Backup Files')
@section('mainContent')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Backup Files</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Files</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($files as $file)
                                            <tr>
                                                <td>{{ basename($file) }}<a
                                                        href="{{ route('backup.download', ['filename' => basename($file)]) }}">
                                                        Download</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
            $("#example1")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["excel", "pdf", "print"],
                })
                .buttons()
                .container()
                .appendTo("#example1_wrapper .col-md-6:eq(0)");
            $("#example2").DataTable({
                paging: true,
                lengthChange: false,
                searching: false,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
            });
        });
    </script>


@endsection
