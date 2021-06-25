@extends('layouts.index')
@section('title', 'Create Dosen')
<?php $subtitle="Create Dosen"; ?>

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Create Data Sparepart</h3>
                                </div>
                                <div class="panel-body">
                                    {{-- menampilkan error validasi --}}
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                <form action="/sparepart/store" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" id="nama" name="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Stock </label>
                                                <div class="form-group">
                                                <input type="text" id="stock" name="stock" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Harga </label>
                                                <div class="form-group">
                                                <input type="text" id="harga" name="harga" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                          <button type="submit" class="btn btn-dark pull-right">Create Data</button>
                                        </div>
                                    </div>
                                </form>   
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
                                    <li class="breadcrumb-item"><a href="/dashboard" class="text-muted">Data Sparepart</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Create</li>
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
                                <h4 class="card-title">Create Data Sparepart</h4>
                                <form action="/sparepart/store" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Nama </label>
                                                <div class="form-group">
                                                <input type="text" id="nama" name="nama" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Stock </label>
                                                <div class="form-group">
                                                <input type="text" id="stock" name="stock" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Harga </label>
                                                <div class="form-group">
                                                <input type="text" id="harga" name="harga" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                          <button type="submit" class="btn btn-dark pull-right">Create Data</button>
                                        </div>
                                    </div>
                                </form>
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