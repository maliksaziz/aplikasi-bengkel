@extends('layouts.index')
@section('title', 'Edit Mekanik')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Data Mekanik</h3>
                                </div>
                                <div class="panel-body">
                                @foreach($datamk as $data)
                                <form action="/mekanik/update/{{$data->id_mekanik}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>ID Mekanik </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" id="id_mekanik" name="id_mekanik" readonly class="form-control" value="{{$data->id_mekanik}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Mekanik </label>
                                                <div class="form-group">
                                                <input type="text" id="mekanik" name="mekanik" class="form-control" value="{{$data->mekanik}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Telepon </label>
                                                <div class="form-group">
                                                <input type="text" id="telp" name="telp" class="form-control" value="{{$data->telp}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-warning pull-right">Edit Data</button>
                                        </div>
                                    </div>
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
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit Data Mekanik</li>
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
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Data Mekanik</h4>
                                @foreach($datamk as $data)
                                <form action="/mekanik/update/{{$data->id_mekanik}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>ID Mekanik </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" id="id_mekanik" name="id_mekanik" readonly class="form-control" value="{{$data->id_mekanik}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Mekanik </label>
                                                <div class="form-group">
                                                <input type="text" id="mekanik" name="mekanik" class="form-control" value="{{$data->mekanik}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Telepon </label>
                                                <div class="form-group">
                                                <input type="text" id="telp" name="telp" class="form-control" value="{{$data->telp}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-warning pull-right">Edit Data</button>
                                        </div>
                                    </div>
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