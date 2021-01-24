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
                            <li class="breadcrumb-item active" aria-current="page">User Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @include('home.message')
    <div class="container">
        <form class="form-horizontal" action="{{route('admin_user_role_add',['id' => $data->id])}}" method="POST"
            enctype="multipart/form-data">
            @csrf
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
                                            style="width: 20px;">ID</th>
                                        <td style="line-height: 40px;" class="sorting_1">{{ $data->id }}
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 54px;">Name
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->name }} </td>
                                    </tr>

                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 54px;">Email </th>
                                        <td style="line-height: 40px"> {{ $data->email }} </td>

                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 100px;">Phone
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->phone }} </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 100px;">Address
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->address }} </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 100px;">Address
                                        </th>
                                        <td style="line-height: 40px"> {{ $data->created_ad }} </td>
                                    </tr>

                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 100px;">Roles
                                        </th>
                                        <td style="line-height: 40px">
                                            <table>
                                                @foreach ($data->roles as $row)
                                                    <tr>
                                                        <td>{{ $row->name }}</td>
                                                        <td>
                                                            <a href="{{ route('admin_user_role_delete', ['userid' => $data->id, 'roleid' => $row->id]) }}"
                                                                onclick="return confirm('Are you sure?')">
                                                                <i class="fa fa-trash fa-lg"
                                                                    style="margin-top: 3px"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 100px;">Add Role
                                        </th>
                                        <td style="line-height: 40px">
                                            <form class="form-horizontal"
                                                action="{{ route('admin_user_role_add', ['id' => $data->id]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                
                                                <select name="roleid" >
                                                    @foreach ($dataList as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>

                                                <button type="submit" class="btn btn-primary" style="width: 200px">Add
                                                    Role</button>
                                            </form>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="col-sm-2 text-right control-label col-form-label card-body">
                        <button type="submit" class="btn btn-primary" style="width: 200px">Update Message</button>
                    </div>
                </div>
        </form>
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
