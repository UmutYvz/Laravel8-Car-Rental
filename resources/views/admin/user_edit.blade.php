@extends('layouts.admin')

@section('title', 'Edit User')

@section('javascript')
    <script src="{{ asset('assets') }}/js/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div style="background-color: white" class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">

                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header border">
                    <h3 class="card-title">Edit User</h3>
                </div>

                <div class="card-body border">
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('admin_user_update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                               @include('home.message')

                                <div class="form-group row">
                                    <label for="fname"
                                        class="col-sm-2 text-right control-label col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->name }}" type="text" name="name" class="form-control"
                                            id="name" placeholder="Name Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname"
                                        class="col-sm-2 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->email }}" type="email" name="email" class="form-control"
                                            id="email" placeholder="Email Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname"
                                        class="col-sm-2 text-right control-label col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->phone }}"  type="text" name="phone" class="form-control" id="price"
                                            placeholder="Phone Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->address }}" type="text" name="address" class="form-control"
                                            id="address" placeholder="Address Here">
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="lname"
                                        class="col-sm-2 text-right control-label col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control" id="image">
                                        @if ($data->profile_photo_path)
                                            <img src="{{ Storage::url($data->profile_photo_path) }}" style="height: 150px;" alt="">
                                        @endif
                                    </div>
                                </div>

                                

                            </div>
                            <div class="border-top">
                                <div class="col-sm-2 text-right control-label col-form-label card-body">
                                    <button type="submit" class="btn btn-primary">Edit User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>



    </div>
@endsection



@section('footer')
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets') }}/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets') }}/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ asset('assets') }}/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets') }}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('assets') }}/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets') }}/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets') }}/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets') }}/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="{{ asset('assets') }}/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{ asset('assets') }}/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{ asset('assets') }}/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();

    </script>
@endsection
