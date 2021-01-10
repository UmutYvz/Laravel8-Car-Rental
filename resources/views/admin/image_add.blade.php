<html>
    <head>
        <title>Image Gallery</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
    
    
    
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/assets/images/favicon.png">
        <title>@yield('title')</title>
        <!-- Custom CSS -->
        <link href="{{asset('assets')}}/admin/assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('assets')}}/admin/dist/css/style.min.css" rel="stylesheet">
    </head>
<body>

  
   <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div style="background-color: white;margin-left: 0px;" class="page-wrapper">
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
                                <li class="breadcrumb-item active" aria-current="page">Add Images </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-header border">
                    <h3 class="card-title">Add Image for {{$data->brand}}-{{$data->model}}</h3>
                </div>

                <div class="card-body border">
                    <div class="card">
                        <form class="form-horizontal" action="{{ route('admin_image_store',['car_id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf                            
                            <div class="card-body">                              
                                
                
                                <div class="form-group row">
                                    <label for="lname"
                                        class="col-sm-2 text-right control-label col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="Title Here">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" class="form-control"
                                            id="image" placeholder="Brand ID Here">
                                </div>
                            
                            </div>
                            <div class="border-top">
                                <div class="col-sm-2 text-right control-label col-form-label card-body">
                                    <button type="submit" class="btn btn-primary">Add Image</button>
                                </div>
                            </div>
                            <div class="border-top">
                                <div class="col-sm-2 text-right control-label col-form-label card-body">
                                    @foreach ($images as $image)
                                        
                                    @endforeach
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-footer border">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="zero_config"
                                class="table table-sm table-striped table-bordered dataTable" role="grid"
                                aria-describedby="zero_config_info" style="margin-top: 20px">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 54px;">ID</th>
                                        
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 54px;">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 45px;">Image</th>                                                                                       
                                        <th class="sorting w-25" tabindex="0" aria-controls="zero_config"
                                            rowspan="1" colspan="3"
                                            aria-label="Start date: activate to sort column ascending"
                                            style="width: 57px;color:black;text-align:center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($images as $image)
                                        <tr role="row" class="odd" style="text-align: center;margin-top:">
                                            <td style="line-height: 40px;padding-top: 35px;"> {{ $image->id }} </td>
                                            <td style="line-height: 40px;padding-top: 35px;"> {{ $image->title }} </td>
                                            <td style="line-height: 40px">
                                                @if ($image->image)
                                                    <img src="{{ Storage::url($image->image) }}" style="width: 100px;height: 100px;">
                                                @else
                                                    
                                                @endif
                                            </td>
                                            </td>
                                            <td style="line-height: 40px;padding-top: 35px;" class="table-danger"><a
                                                    class="btn btn-danger w-100 text-dange"
                                                    style="text-decoration: none;color:black;"
                                                    href="{{ route('admin_image_delete',  ['id' => $image->id, 'car_id' => $data->id ]) }}"
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

</body>
</html> 


