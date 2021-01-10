@extends('layouts.admin')


@section('title','Admin Panel Home Page')

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
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h4 class="page-title">Categories</h4>

            <div class="card-header border">
                <div class="row">
                    <h3 class="card-title col-8">Category List</h3>
                    <button type="button" class="col-4 btn btn-success"><a style="text-decoration: none;color:white" href="{{route('admin_category_add')}}">Add Category</a> </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="zero_config" class="table table-sm table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 54px;">ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 69px;">Parent</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Title(s)</th>
                                                <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;" aria-sort="descending">Status</th>
                                                <th class=" sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="2" aria-label="Salary: activate to sort column ascending" style="width: 57px;color:black;text-align:center">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($dataList as $item)
                                            <tr role="row" class="odd">
                                                <td style="line-height: 40px;" class="sorting_1"> {{$item->id}} </td>
                                                <td style="line-height: 40px"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($item,$item->title)}} </td>
                                                <td style="line-height: 40px"> {{$item->title}} </td>
                                                <td style="line-height: 40px"> {{$item->status}} </td>
                                                <td style="line-height: 40px;width: 61.82222px;" ><a
                                                    class="btn btn-outline-warning w-100 "
                                                    style="text-decoration: none;color:black;border-radius:7px"
                                                    href="{{route('admin_category_edit',['id'=>$item->id])}}">Edit</a>
                                            </td>
                                            <td style="line-height: 40px;width: 61.82222px;"><a
                                                    class="btn btn-outline-danger w-100 "
                                                    style="text-decoration: none;color:black;border-radius:7px"
                                                    href="{{route('admin_category_delete', ['id' => $item->id]) }}"
                                                    onclick="return confirm('Are you sure?')">Delete</a></td></tr>
                                            @endforeach
                                        </tbody>
                                        
                                        {{-- <tfoot>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 54px;">ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 69px;">Parent</th>
                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Title(s)</th>
                                                <th class="sorting_desc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25px;" aria-sort="descending">Status</th>
                                                <th class="table-warning sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 57px;">Edit</th>
                                                <th class="table-danger sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 57px;">Delete</th>
                                            </tr>
                                        </tfoot> --}}

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
    <script src="{{asset('assets')}}/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets')}}/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets')}}/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets')}}/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets')}}/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets')}}/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="{{asset('assets')}}/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{asset('assets')}}/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{asset('assets')}}/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
@endsection


