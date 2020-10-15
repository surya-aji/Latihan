@extends('admin.layout.master') @section('content')
<link rel="apple-touch-icon" href="apple-icon.png" />
<link rel="shortcut icon" href="favicon.ico" />

<link rel="stylesheet" href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/vendors/themify-icons/css/themify-icons.css')}}" />
<link rel="stylesheet" href="{{asset('public/vendors/flag-icon-css/css/flag-icon.min.css')}}" />
<link rel="stylesheet" href="{{asset('public/vendors/selectFX/css/cs-skin-elastic.css')}}" />

<link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css" />

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          
            <div class="col-lg-12">
                <div class="card">
               
                    <div class="card-header"><strong>{{$pagename}}</strong></div>
                    <div class="card-body card-block">



                    @if($errors->any())
                        <div class="alert alert-danger">
                            <div class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group item">
                                        {{$error}}
                                    </li>
                                @endforeach
                            </div>
                        </div>
                     @endif



                        <form action="{{route('task.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama Tugas</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_tugas" value="{{$data_task->nama_tugas}}" placeholder="Text" class="form-control" /><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="SLT_kategori_tugas" class="form-control-label">Kategori Tugas</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kategori_tugas" id="SLT_kategori_tugas" class="form-control">

                                    @foreach($kategori as $data_kategori)
                                    <option value={{$data_kategori->id}}
                                        @if($data_kategori->id == $data_task->id_kategori)
                                            selected
                                        @endif
                                    
                                    >{{$data_kategori->nama_kategori}}</option>
                                        
                                    @endforeach()
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Keterangan Tugas</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="keterangan_tugas" value="{{$data_task->ket_tugas}}" placeholder="Text" class="form-control" /><small class="form-text text-muted">This is a help text</small></div>
                            </div>
                           
                        
                            <div class="row form-group">
                                <div class="col col-md-3"><label class="form-control-label">Status Tugas</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label"> <input type="radio" id="inline-radio1" name="status_tugas" value="0"{{$data_task->status_tugas==0?'checked':''}} class="form-check-input" />Masih Berjalan</label>
                                        <label for="inline-radio2" class="form-check-label"> <input type="radio" id="inline-radio2" name="status_tugas" value="1"{{$data_task->status_tugas==1?'checked':''}} class="form-check-input" />Selesai</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
                            </div>
                           
                        </form>
                    </div>
                   
                </div>
            </div>

        </div>
    </div>
    <!-- .animated -->
</div>
<!-- .content -->

<script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

<script src="{{asset('public/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('public/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

<script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/js/main.js"></script>

@endsection('content')
