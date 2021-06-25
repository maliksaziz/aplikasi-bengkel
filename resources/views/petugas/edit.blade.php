@extends('layouts.index')
@section('title', 'Edit Petugas')

@section('content')
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
                                    <li class="breadcrumb-item"><a href="/dashboard" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Petugas</li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Edit Data Petugas</li>
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
                                <h4 class="card-title">Edit Data Petugas</h4>
                                @foreach($ndata as $data)
                                <form action="/petugas/update/{{$data->id}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Role </label>
                                                <div class="form-group">
                                                <input type="text" id="role" name="role" class="form-control" value="{{$data->role}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Email </label>
                                                <div class="form-group">
                                                <input type="text" id="email" name="email" class="form-control" value="{{$data->email}}">
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