@extends('layouts.admin')

@section('title', 'Add FAQ')

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
                                <li class="breadcrumb-item active" aria-current="page">Car Add</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header border">
                    <h3 class="card-title">Add Car</h3>
                </div>

                <div class="card-body border">
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('admin_faq_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="fname"
                                        class="col-sm-2 text-right control-label col-form-label">Position</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="position" class="form-control" id="position"
                                            placeholder="Position Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname"
                                        class="col-sm-2 text-right control-label col-form-label">Question</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="question" class="form-control" id="question"
                                            placeholder="Quuestion Here">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="lname"
                                        class="col-sm-2 text-right control-label col-form-label">Answer</label>
                                    <div class="col-sm-9">
                                        <textarea name="answer" class="form-control" id="editor1" rows="10" cols="80"
                                            placeholder="Answer Here"></textarea>
                                        <script>
                                            CKEDITOR.replace('editor1');
                                        </script>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row" data-select2-id="12">
                                    <label class="col-sm-2 text-right control-label col-form-label">Status</label>
                                    <div class="col-md-9" data-select2-id="11">
                                        <select name="status"
                                            class="select2 form-control custom-select select2-hidden-accessible"
                                            style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1"
                                            aria-hidden="true">
                                            <option data-select2-id="3">False</option>
                                            <option value="true" data-select2-id="17">True</option>
                                        </select>

                                    </div>
                                </div>

                                
                            </div>
                            <div class="border-top">
                                <div class="col-sm-2 text-right control-label col-form-label card-body">
                                    <button type="submit" class="btn btn-primary">Add</button>
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
