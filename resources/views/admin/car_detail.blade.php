<link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/favicon.jpg" />
<!-- fontawesome css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/fontawesome.min.css">
<!-- bootstrap css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
<!-- lightcase css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/lightcase.css">
<!-- animate css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
<!-- nice select css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/nice-select.css">
<!-- datepicker css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/datepicker.min.css">
<!-- wickedpicker css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/wickedpicker.min.css">
<!-- jquery ui css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/jquery-ui.min.css">
<!-- owl carousel css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
<!-- main style css link -->
<link rel="stylesheet" href="{{ asset('assets') }}/css/main.css">

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div style="background-color: white" class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-f  lex no-block align-items-center">

                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
            <div class="card-body">
                
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                                        
                                <table id="zero_config" class="table table-sm table-striped table-bordered dataTable"
                                    role="grid" aria-describedby="zero_config_info">

                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 20px;padding-top:15px">Brand</th>
                                        <td style="line-height: 40px;" class="sorting_1">{{ $data->brand }}
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 54px;padding-top:15px">Model
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->model }} </td>
                                    </tr>

                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 54px;padding-top:15px">Price </th>
                                        <td style="line-height: 40px"> {{ $data->price }} </td>

                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 120px;padding-top:15px">Year
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->year }} </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 35px;padding-top:15px">Engine Power
                                        </th>
                                        <td style="line-height: 40px;"> {{ $data->engine_power }} </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 80px;padding-top:15px">Gear Type
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->gear_type }} </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 80px;padding-top:15px">Fuel Type
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->fuel_type }} </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 80px;padding-top:15px">Color
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->color }} </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
       
    </div>
</div>




</div>




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
