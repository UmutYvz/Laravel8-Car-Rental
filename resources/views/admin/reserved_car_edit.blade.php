@extends('layouts.admin')

@section('title', 'Edit Reservation')

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
                                <li class="breadcrumb-item active" aria-current="page">Edit Reservation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header border">
                    <h3 class="card-title">Edit Reservation</h3>
                </div>

                <div class="card-body border">
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('admin_reserved_car_update', ['id' => $data->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">



                                <div class="form-group row">
                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label">Car
                                        ID</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->car_id }}" type="text" name="car_id" class="form-control"
                                            id="brand" placeholder="Car ID Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname"
                                        class="col-sm-2 text-right control-label col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->phone }}" type="text" name="phone" class="form-control"
                                            id="model" placeholder="Model Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label">Reservation
                                        S.D.</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->r_start_date }}" type="date" name="r_start_date"
                                            class="form-control" id="r_start_date" placeholder="Price Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label">Reservation
                                        E.D.</label>
                                    <div class="col-sm-9">
                                        <input value="{{ $data->r_end_date }}" type="date" name="r_end_date"
                                            class="form-control" id="r_end_date" placeholder="Reservation E.D. Here">
                                    </div>
                                </div>


                                <div class="form-group row" data-select2-id="12">
                                    <label class="col-sm-2 text-right control-label col-form-label">Status</label>
                                    <div class="col-md-9" data-select2-id="11">
                                        <select value="{{ $data->payment_method }}" name="payment_method"
                                            class="select2 form-control custom-select select2-hidden-accessible"
                                            style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="Paypal">Paypal</option>
                                            <option value="Cash">Payoneer</option>
                                            <option value="Visacard">Visa Card</option>
                                        </select>
                                    </div>
                                </div>



                            </div>
                            <div class="border-top">
                                <div class="col-sm-2 text-right control-label col-form-label card-body">
                                    <button type="submit" class="btn btn-primary">Edit Reservation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-footer border">Footer

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
