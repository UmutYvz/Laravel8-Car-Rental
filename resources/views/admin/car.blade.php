@extends('layouts.admin')


@section('title', 'Car List')

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
                                <li class="breadcrumb-item active" aria-current="page">Car</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <h4 class="page-title">Cars</h4>

                <div class="card-header border">
                    <div class="row">
                        <h3 class="card-title col-8">Car List</h3>
                        <button type="button" class="col-4 btn btn-success"><a style="text-decoration: none;color:white"
                                href="{{ route('admin_car_add') }}">Add Car</a> </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="zero_config"
                                            class="table table-sm table-striped table-bordered dataTable" role="grid"
                                            aria-describedby="zero_config_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                                        style="width: 54px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                                        style="width: 100px;">Admin Info</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                                        style="width: 54px;">Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                                        style="width: 54px;">Brand</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                                        style="width: 45px;">Model</th>


                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                                        style="width: 69px;">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                                        style="width: 50px;">Image</th>
                                                    <th class="sorting w-25" tabindex="0" aria-controls="zero_config"
                                                        rowspan="1" colspan="4"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 57px;color:black;text-align:center">Actions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($dataList as $item)
                                                    <tr role="row" class="odd">
                                                        <td style="line-height: 40px;" class="sorting_1"> {{ $item->id }}
                                                        </td>
                                                        <td style="line-height: 40px;" class="sorting_1">
                                                            <a href="{{ route('admin_user_show', ['id' => $item->user_id]) }}"
                                                                onclick="return !window.open(this.href,'','top=50,left=100,width=800,height=600')">
                                                                {{ $item->user->name }}
                                                            </a>
                                                        </td>

                                                        <td style="line-height: 40px;width: 180px;" class="sorting_1">
                                                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($item->category, $item->category->title) }}
                                                        </td>
                                                        <td style="line-height: 40px"> {{ $item->brand }} </td>
                                                        <td style="line-height: 40px"> {{ $item->model }} </td>

                                                        <td style="line-height: 40px"> {{ $item->status }} </td>
                                                        <td style="line-height: 40px;text-align: center;">
                                                            @if ($item->image)
                                                                <img src="{{ Storage::url($item->image) }}"
                                                                    style="width: 30px;height: 30px;">
                                                            @endif
                                                        </td>
                                                        <td style="line-height: 40px"><a
                                                                class="btn btn-outline-success w-100 "
                                                                style="text-decoration: none;color:black;border-radius:7px"
                                                                href="{{ route('admin_car_detail', ['id' => $item->id]) }}"
                                                                onclick="return !window.open(this.href,'','top=50,left=100,width=800,height=600')">Car
                                                                Detail</a>
                                                        </td>
                                                        <td style="line-height: 40px">
                                                            <a class="btn btn-outline-info w-100"
                                                                style="text-decoration: none;color:black;border-radius:7px"
                                                                href="{{ route('admin_image_add', ['car_id' => $item->id]) }}"
                                                                onclick="return !window.open(this.href,'','width=700px height=700px')">
                                                                Add Image</a>
                                                        </td>

                                                        <td style="line-height: 40px"><a
                                                                class="btn btn-outline-warning w-100 "
                                                                style="text-decoration: none;color:black;border-radius:7px"
                                                                href="{{ route('admin_car_edit', ['id' => $item->id]) }}">Edit</a>
                                                        </td>
                                                        <td style="line-height: 40px"><a
                                                                class="btn btn-outline-danger w-100 "
                                                                style="text-decoration: none;color:black;border-radius:7px"
                                                                href="{{ route('admin_car_delete', ['id' => $item->id]) }}"
                                                                onclick="return confirm('Are you sure?')">Delete</a></td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body border">


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
