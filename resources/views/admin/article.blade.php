<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-page/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/admin">ADMIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('admin-page/assets/images/avatar-1.jpg')}}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="button"><i class="fas fa-power-off mr-2"></i>Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        @include('admin.sidebar')
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-10">
                        <!-- ============================================================== -->
                        <!-- pageheader  -->
                        <!-- ============================================================== -->
                        <!-- <div class="row">

                        </div> -->
                        <!-- ============================================================== -->
                        <!-- end pageheader  -->
                        <!-- ============================================================== -->

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header" id="form">Add Article</h5>
                                    <div class="card-body">
                                        <form method="post" action="{{ route('article.store') }}#table" enctype="multipart/form-data" data-parsley-validate="" novalidate="">
                                            @csrf

                                            <div class="form-group">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">File</label>
                                                <div class="col-12 col-sm-8 col-lg-8 custom-file mb-3">
                                                    <img id="output" width="200" height="200" />
                                                    <script>
                                                        var loadFile = function(event) {
                                                            var output = document.getElementById('output');
                                                            output.src = URL.createObjectURL(event.target.files[0]);
                                                        };
                                                    </script>
                                                    <input type="file" class="form-control-file" id="fileImg" name="fileImg" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" onchange="loadFile(event)" style="margin-top: 20px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Title</label>
                                                <div class="col-12 col-sm-8 col-lg-8">
                                                    <input type="text" name="title" required="" data-parsley-minlength="6" placeholder="Min 6 chars." class="form-control">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">URL (Optional) </label>
                                                <div class="col-12 col-sm-8 col-lg-8">
                                                    <input data-parsley-type="url" type="url" required="" placeholder="URL" class="form-control">
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                                <div class="col-12 col-sm-8 col-lg-8">
                                                    <textarea required="" name="description" class="form-control" size="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-space btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- fixed header  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">Data Article</h5>
                                        <ul class="col-xl-4 navbar-nav ml-auto navbar-right-top">
                                            <li class="nav-item">
                                                <div id="custom-search" class="top-search-bar">
                                                    <form>
                                                        <input class="form-control" type="text" placeholder="Search..">
                                                        <!-- <i class="fas fa-search" area-hidden="true"></i> -->
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="card-body">
                                        @if(count($article))
                                        <div class="table-responsive">
                                            <table id="table" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Posting Date</th>
                                                        <th>Status</th>
                                                        <th colspan="3">Menu</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($article as $article)
                                                    <tr>
                                                        <td>{{ $article->id }}</td>
                                                        <td>{{ $article->title }}</td>
                                                        <td>{{ $article->description }}</td>
                                                        <td>{{ $article->tgl_post }}</td>
                                                        <td>{{ $article->status }}</td>
                                                        <td>
                                                            <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{ $article->id}}"><i class="fas fa-edit fa-fw"></i>Edit</a>
                                                        </td>
                                                        <td>
                                                            {!! Form::open(array('route' => array('article.destroy', $article->id), 'method' =>'delete','style' => 'display:inline'))!!}
                                                            <button class="btn btn-danger"> Delete</button>
                                                        </td>
                                                        <td>
                                                            {!! Form::close() !!}
                                                            <button class="btn btn-primary"> View</button>
                                                        </td>
                                                    </tr>
                                                    <!--Modal Edit-->
                                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="edit{{ $article->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="edit{{ $article->id}}">Edit Article</h3>
                                                                    <a class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </a>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {!!Form::model($article,['method'=>'PATCH', 'action'=>['ArticleController@update',$article->id ]]) !!}
                                                                    <div class="row gtr-uniform" style="justify-content: center;">
                                                                        <div class="col-11" id="imgModal" style="min-width:27vw;max-width:27vw;">
                                                                            <img id="outputEdit" width="200" height="200" style="min-width: 25vw; max-width: 25vw; max-height: 80vh;" @if($article->fileImg) src="{{ asset('files/'.$article->fileImg) }}" @endif >
                                                                            <script>
                                                                               
                                                                                var loadFile = function(event) {
                                                                                    var output = document.getElementById('outputEdit');
                                                                                    output.src = URL.createObjectURL(event.target.files[0]);
                                                                                };
                                                                            </script>
                                                                            <input type="file" class="form-control-file" id="fileImg" name="fileImg" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff" onchange="loadFile(event)" style="margin-top: 20px;">
                                                                        </div>

                                                                        <div class="col-11">
                                                                            {!! Form::label('title', 'Title') !!} {!! Form::text('title', $article->title, array('class' => 'form-control','placeholder'=>'Title', 'required')) !!}
                                                                        </div>
                                                                        <div class="col-11">
                                                                            {!! Form::label('description', 'Description') !!} {!! Form::textarea('description', $article->description, array('class' => 'form-control','placeholder'=>'Description', 'required')) !!}
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    {!! Form::button('<i class="fa fa--square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary btn-sm', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-check-square"></i>'. 'Update', array('type' => 'submit', 'class' => 'btn btn-primary btn-sm'))!!} {!! Form::close()!!}
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                </tbody>
                                                <!-- <tfoot>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Posting Date</th>
                                                        <th>Status</th>
                                                        <th>Menu</th>
                                                    </tr>
                                                </tfoot> -->
                                            </table>
                                        </div>
                                        @else
                                        <div class="alert alert-warning">
                                            <i class="fa fa-exclamation-triangle"></i> Data belum ada
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end fixed header  -->
                            <!-- ============================================================== -->
                        </div>

                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                    <!-- ============================================================== -->
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <div class="sidebar-nav-fixed">
                            <ul class="list-unstyled">
                                <li><a href="#overview" class="active">Overview</a></li>
                                <li><a href="#form">Add Article</a></li>
                                <li><a href="#table">Data Article</a></li>
                                <li><a href="#top">Back to Top</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end sidenavbar -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 All rights reserved.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="{{ asset('admin-page/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/parsley/parsley.js') }}"></script>
    <script src="{{ asset('admin-page/assets/libs/js/main-js.js') }}"></script>

    <script>
        $('#form').parsley();
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!--  <script src="{{ asset('admin-page/assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('admin-page/assets/libs/js/main-js.js')}}"></script>
    <script src="../../../../../cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin-page/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin-page/assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin-page/assets/vendor/datatables/js/data-table.js') }}"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="../../../../../cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="../../../../../cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script> -->

</body>

</html>