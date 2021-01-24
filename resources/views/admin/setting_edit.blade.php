@extends('layouts.admin')

@section('title', 'Settings')

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
                                <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header border">
                    <h3 class="card-title">Edit Setting</h3>
                </div>

                <div class="card-body border">
                    <div class="card">

                        <form class="form-horizontal" action="{{ route('admin_setting_update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#general"
                                        role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">General</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#smtp" role="tab"
                                        aria-selected="false"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">SMTP</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#social-media" role="tab"
                                        aria-selected="true"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">Social Media</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#aboutus" role="tab"
                                        aria-selected="true"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">About Us</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#contact" role="tab"
                                        aria-selected="true"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">Contact Us</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#references" role="tab"
                                        aria-selected="true"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">References</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="general" role="tabpanel">
                                    <div class="p-20">
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">ID</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->id }}" type="text" name="id" class="form-control"
                                                    id="id" placeholder="ID Here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Title</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->title }}" type="text" name="title"
                                                    class="form-control" id="title" placeholder="Title Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Keywords</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->keywords }}" type="text" name="keywords"
                                                    class="form-control" id="keywords" placeholder="Keywords Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Description</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->description }}" type="text" name="description"
                                                    class="form-control" id="description" placeholder="Description Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Company</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->company }}" type="text" name="company"
                                                    class="form-control" id="company" placeholder="Company Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->address }}" type="text" name="address"
                                                    class="form-control" id="address" placeholder="Address Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Phone </label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->phone }}" type="text" name="phone"
                                                    class="form-control" id="phone" placeholder="Brand Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Fax</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->fax }}" type="text" name="fax" class="form-control"
                                                    id="fax" placeholder="Fax Here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">E-mail</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->email }}" type="email" name="email"
                                                    class="form-control" id="fax" placeholder="E-mail Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="smtp" role="tabpanel">
                                    <div class="p-20">
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">SMTP
                                                Server</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->smtpserver }}" type="text" name="smtpserver"
                                                    class="form-control" id="smtpserver" placeholder="SMTPServer Here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">SMTP
                                                Email</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->smtpemail }}" type="text" name="smtpemail"
                                                    class="form-control" id="fax" placeholder="SMTP Email Here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">SMTP
                                                Password</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->smtppassword }}" type="password" name="smtppassword"
                                                    class="form-control" id="smtppassword" placeholder="SMTP Password Here">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-2 text-right control-label col-form-label">SMTP
                                                Port</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->smtpport }}" type="number" name="smtpport"
                                                    class="form-control" id="smtpport" placeholder="SMTP Port Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="social-media" role="tabpanel">
                                    <div class="p-20">
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Facebook</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->facebook }}" type="text" name="facebook"
                                                    class="form-control" id="facebook" placeholder="Facebook Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Instagram</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->instagram }}" type="text" name="instagram"
                                                    class="form-control" id="instagram" placeholder="Instagram Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">Twitter</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->twitter }}" type="text" name="twitter"
                                                    class="form-control" id="twitter" placeholder="Twitter Here">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-2 text-right control-label col-form-label">YouTube</label>
                                            <div class="col-sm-9">
                                                <input value="{{ $data->youtube }}" type="text" name="youtube"
                                                    class="form-control" id="youtube" placeholder="YouTube Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="aboutus" role="tabpanel">
                                    <div class="p-20">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <textarea type="text" name="aboutus" class="form-control" id="editor1"
                                                    rows="10" cols="100" placeholder="About Us Here">
                                                {{ $data->aboutus }}
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor1');

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="contact" role="tabpanel">
                                    <div class="p-20">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <textarea type="text" name="contact" class="form-control" id="editor2"
                                                    rows="10" cols="100" placeholder="Contact Here">
                                                {{ $data->contact }}
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor2');

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane p-20" id="references" role="tabpanel">
                                    <div class="p-20">
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <textarea type="text" name="references" class="form-control" id="editor3"
                                                    rows="10" cols="100" placeholder="References Here">
                                                {{ $data->references }}
                                                </textarea>
                                                <script>
                                                    CKEDITOR.replace('editor3');

                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="border-top">
                                <div class="col-sm-2 text-right control-label col-form-label card-body">
                                    <button type="submit" class="btn btn-primary">Edit Setting</button>
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
