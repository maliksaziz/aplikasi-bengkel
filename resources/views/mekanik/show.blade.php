@extends('layouts.index')
@section('title', 'Detail Mekanik')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Detail Data Mekanik</h3>
                                </div>
                                <div class="panel-body">
                                @foreach($datamk as $mk)
                                <form action="/mekanik/show/{{$mk->id_mekanik}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>ID Mekanik </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="id_mekanik" value="{{$mk->id_mekanik}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="mekanik" value="{{$mk->mekanik}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Telepon </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="telp" value="{{$mk->telp}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Jalan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nama" value="{{$mk->alamat->jalan}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            <label>Kelurahan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mk->alamat->kelurahan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label>Kecamatan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mk->alamat->kecamatan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label>Kota </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mk->alamat->kota}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-sm pull-right" 
                                      href="/mekanik" role="button">
                                      Kembali     
                                    </a>
                                </form>
                                @endforeach
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('content1')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">INPUT DATA BENGKEL</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Data Mekanik</li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Detail Data Mekanik</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail Data Mekanik</h4>
                                @foreach($datamk as $mk)
                                <form action="/mekanik/show/{{$mk->id_mekanik}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>ID Mekanik </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="id_mekanik" value="{{$mk->id_mekanik}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="mekanik" value="{{$mk->mekanik}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <label>Telepon </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="telp" value="{{$mk->telp}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Jalan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nama" value="{{$mk->alamat->jalan}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            <label>Kelurahan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mk->alamat->kelurahan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label>Kecamatan </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mk->alamat->kecamatan}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <label>Kota </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mk->alamat->kota}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-sm pull-right" 
                                      href="/mekanik" role="button">
                                      Kembali     
                                    </a>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection