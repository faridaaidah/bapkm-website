@section('js')
<script>
    $('.ui.dropdown')
        .dropdown();
</script>
@stop @extends('layouts.app-admin') @section('content')

<div class="dashboard-main-wrapper">

    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Master Data - Agenda</h2>
                    <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master Data - Agenda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="event">
            <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <h5 class="card-header">Agenda</h5>
                    <div class="col-lg-12">
                        @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary fa fa-plus mb-4" data-toggle="modal" data-target="#addevent">Tambah</button>
                        @if($event->count())
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">title</th>
                                    <th scope="col">dateofEvent</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                    @foreach($event as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->title}}</td>
                                        <td>{{ $data->dateofEvent }}</td>
                                        <td>
                                            <button class="btn btn-warning fa fa-edit" data-toggle="modal" data-target="#editevent{{ $data->id }}"></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delevent{{ $data->id }}"></button>
                                        </td>
                                    </tr>
                                    <!-- /*modal edit & del*/ -->
                                    <!--edit-->
                                    <div class="modal fade" id="editevent{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editevent{{ $data->id }}">Form Edit</h5>
                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </a>
                                                </div>
                                                {!!Form::model($data,['method'=>'PATCH', 'action'=>['EventController@update',$data->id ]]) !!}

                                                <div class="modal-body">
                                                    <ul style="color: red;font-size: 0.75rem;">
                                                        <li class="fa fa-asterisk">
                                                            <em> Form Wajib diisi </em>
                                                        </li>
                                                    </ul>

                                                    <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="title" class="col-md-6 control-label">Judul</label>
                                                        <div class="col-md-12">
                                                            <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" placeholder="Judul" required> @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                    <strong>{{ $errors->first('title') }}</strong>
                                                                </span> @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group required {{ $errors->has('date') ? ' has-error' : '' }}">
                                                        <label for="date" class="col-md-6 control-label">Tanggal Agenda</label>
                                                        <div class="col-md-12">
                                                            <input id="date" type="date" class="form-control" name="title" value="{{ $data->dateOfEvent }}" placeholder="Tanggal Agenda" required> @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                    <strong>{{ $errors->first('title') }}</strong>
                                                                </span> @endif
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" id="submit">Update</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>

                                            </div>
                                            {!! Form::close()!!}
                                        </div>
                                    </div>

                                    <!--del-->
                                    <div class="modal fade" data-spy="scroll" data-target="#imgModal" id="delevent{{ $data->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delevent{{ $data->id}}"><strong>Hapus Agenda</strong></h5>
                                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! Form::open(array('route' => array('admin.event.destroy', $data->id), 'method' => 'delete')) !!} Anda Yakin Ingin Menghapus data ??
                                                </div>
                                                <div class="modal-footer pull-right" style="margin-right: 12px;">
                                                    {!! Form::button('<i class="fa fa-times-square"></i>'. 'Close', array('type' => 'close', 'class' => 'btn btn-secondary', 'data-dismiss' => 'modal' ))!!} {!! Form::button('<i class="fa fa-trash"></i>'. 'Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))!!} {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle"></i> Data Agenda tidak ditemukan</div>
                        @endif
                    </div>
                    <div class="card-footer">
                        {{ $event->links() }}
                    </div>

                </div>

            </div>

        </div>

        <!--add event-->
        <div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add">Form Tambah</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </a>
                    </div>
                    <form method="POST" action="{{ route('admin.event.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <ul style="color: red;font-size: 0.75rem;">
                                <li class="fa fa-asterisk">
                                    <em> Form Wajib diisi </em>
                                </li>
                            </ul>

                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-6 control-label">Judul</label>
                                <div class="col-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                    <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                </div>
                            </div>

                            <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="dateOfEvent" class="col-md-6 control-label">Waktu Pelaksanaan</label>
                                <div class="col-12">
                                    <input id="dateOfEvent" type="date" class="form-control" name="date" placeholder="Judul Artikel" required> @if ($errors->has('dateOfEvent'))
                                    <span class="help-block">
                                                    <strong>{{ $errors->first('dateOfEvent') }}</strong>
                                                </span> @endif
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>

    @endsection