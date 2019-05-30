@section('js')

<script type="text/javascript">
    $(document).ready(function() {
        $(".users").select2();
    });
</script>

<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $(".uploads").change(readURL)
        $("#f").submit(function() {
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })
</script>
@stop @extends('layouts.app-admin') @section('content')
<div class="page-header">
    <!-- <h4><strong>Tabel Artikel</strong></h4> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <h4><strong>Tambah Artikel <i class="fa fa-angle-right" style="margin-left: 4px;margin-right: 4px;"></i> </strong></h4> 
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.article.index') }}">Tabel Artikel</a></strong></li>
            <li class="breadcrumb-item active" aria-current="page"><strong>Tambah Artikel</strong></li>
        </ol>
    </nav>
</div>

<form method="POST" action="{{ route('admin.article.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body"> 
                        <ul style="color: red;font-size: 0.75rem;">
                            <li class="fa fa-asterisk">
                                <em> Form Wajib diisi </em>
                            </li>
                        </ul>  
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group required {{ $errors->has('title') ? ' has-error' : '' }}">
                                            <label for="title" class="col-md-6 control-label">Judul</label>
                                            <div class="col-md-11">
                                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Judul Artikel" required> @if ($errors->has('title'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('title') }}</strong>
                                                </span> @endif
                                            </div>

                                        </div>

                                        <div class="form-group required {{ $errors->has('jenis') ? ' has-error' : '' }}">
                                            <label for="jenis" class="col-md-6 control-label">Jenis</label>
                                            <div class="col-md-11">
                                                <select class="form-control" name="jenis" required="">
                                                    <option>Jenis Artikel</option>
                                                    <option value="0">Umum</option>
                                                    <option value="1">Beasiswa</option>
                                                    <option value="2">Kemahasiswaan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                                            <label for="url" class="col-md-6 control-label">Url</label>
                                            <div class="col-md-11">
                                                <input id="Url" type="url" class="form-control" name="url" value="{{ old('url') }}" placeholder="Url/Tautan (ex: www.ac.id)"> @if ($errors->has('url'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('url') }}</strong>
                                                </span> @endif
                                            </div>

                                        </div>
                                        <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                                            <div class="col-11">
                                                {!! Form::label('description', 'Deskripsi') !!} {!! Form::textarea('description',null, array('class' => 'form-control','placeholder'=>'Artikel ini tentang ... ', 'required')) !!} @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span> @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">Gambar <i style="content:'*';color:'red';" aria-hidden="true"></i></label>
                                            <div class="col-md-10">
                                                <img width="300" height="250" />
                                                <input type="file" class="uploads form-control" style="margin-top: 20px;" name="fileImg">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">filePdf</label>
                                            <div class="col-md-10">
                                                <input type="file" class="uploads form-control" name="filePdf" accept=".pdf">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer" >
                            <div class="pull-right" style="margin-right: 103px;">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection