@extends('layout.admin.layout')
@section('title')
    Category Add
@endsection

@section('content')

    <body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header bg-danger">
                                    <h3 class="card-title">Product ADD</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="{{ route('product') }}">
                                    @csrf

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Parent</label>
                                            <select class="form-control" name="parent_id">
                                                <option value="0">Ana Menu</option>
                                                @foreach($data as $rs)
                                                    @if($rs->parent_id == 0)
                                                        <option value="{{ $rs->id }}">{{ $rs->title }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" name="keywords" class="form-control"
                                                   placeholder="Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="description" class="form-control"
                                                   placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="text" name="image" class="form-control"
                                                   placeholder="Image">
                                        </div>
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" name="slug" class="form-control" placeholder="slug">
                                        </div>



                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="true">true</option>
                                                <option value="false">false</option>

                                            </select>
                                        </div>
                                        <label>Detail</label>
                                        <textarea class="form-control"></textarea>

                                    </div>
                                    <!-- /.card-body -->


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success">ADD</button>
                                    </div>


                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @section('bodyScript')

        <!-- jQuery -->
        <script src="{{ asset('assets') }}/admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('assets') }}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="{{ asset('assets') }}/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('assets') }}/admin/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('assets') }}/admin/dist/js/demo.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                bsCustomFileInput.init();
            });
        </script>
    @endsection
    </body>

@endsection
