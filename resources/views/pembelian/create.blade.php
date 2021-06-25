@extends('layouts.index')
@section('title', 'Create Data Service')
<?php $subtitle="Create Mahasiswa"; ?>

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Transaksi</h3>
                                </div>
                                <div class="panel-body">
                                <form action="/pembelian/store" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Petugas </label>
                                                <div class="form-group">
                                                <input type="text" id="petugas" readonly name="petugas" class="form-control" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>ID Penjualan </label>
                                                <div class="form-group">
                                                @foreach($datatrx as $trx)
                                                <input type="text" id="id_penjualan" readonly name="id_penjualan" class="form-control" value="TRX{{$trx->id + 1}}">
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-3">
                                            <label>Mekanik </label>
                                                <div class="form-group">
                                                <select id="id_mekanik" name="id_mekanik" class="form-control" required>
                                                    <option value="">Pilih Mekanik</option>
                                                    @foreach($datamk as $mk)
                                                    <option value="{{$mk->id_mekanik}}">{{$mk->mekanik}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Sparepart </label>
                                                <div class="form-group">
                                                <select id="id_sparepart" name="id_sparepart" class="form-control" required>
                                                    <option value="">Pilih Sparepart</option>
                                                    @foreach($dataspt as $spt)
                                                    <option value="{{$spt->id_sparepart}}">{{$spt->sparepart}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Harga Sparepart </label>
                                                <div class="form-group">
                                                <input type="text" id="harga_spt" name="harga_spt" class="form-control" value="" onkeyup="pb()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                            <label>Qty </label>
                                                <div class="form-group">
                                                <input type="text" id="qty" name="qty" class="form-control" value="" onkeyup="pb()">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Harga Jasa </label>
                                                <div class="form-group">
                                                <input type="text" id="harga_jasa" name="harga_jasa" class="form-control" value="" onkeyup="pb()">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Total Bayar </label>
                                                <div class="form-group">
                                                <input type="text" id="ttl_bayar" name="ttl_bayar" class="form-control" value="">
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
@endsection
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">INPUT DATA TRANSAKSI</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Data Service</li>
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
                                <h4 class="card-title">Create Data Service</h4>
                                <form action="/pembelian/store" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <label>Petugas </label>
                                                <div class="form-group">
                                                <input type="text" id="petugas" readonly name="petugas" class="form-control" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>ID Penjualan </label>
                                                <div class="form-group">
                                                @foreach($datatrx as $trx)
                                                <input type="text" id="id_penjualan" readonly name="id_penjualan" class="form-control" value="TRX{{$trx->id + 1}}">
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-3">
                                            <label>Mekanik </label>
                                                <div class="form-group">
                                                <select id="id_mekanik" name="id_mekanik" class="form-control" required>
                                                    <option value="">Pilih Mekanik</option>
                                                    @foreach($datamk as $mk)
                                                    <option value="{{$mk->id_mekanik}}">{{$mk->mekanik}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Sparepart </label>
                                                <div class="form-group">
                                                <select id="id_sparepart" name="id_sparepart" class="form-control" required>
                                                    <option value="">Pilih Sparepart</option>
                                                    @foreach($dataspt as $spt)
                                                    <option value="{{$spt->id_sparepart}}">{{$spt->sparepart}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Harga Sparepart </label>
                                                <div class="form-group">
                                                <input type="text" id="harga_spt" name="harga_spt" class="form-control" value="" onkeyup="pb()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                            <label>Qty </label>
                                                <div class="form-group">
                                                <input type="text" id="qty" name="qty" class="form-control" value="" onkeyup="pb()">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Harga Jasa </label>
                                                <div class="form-group">
                                                <input type="text" id="harga_jasa" name="harga_jasa" class="form-control" value="" onkeyup="pb()">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                            <label>Total Bayar </label>
                                                <div class="form-group">
                                                <input type="text" id="ttl_bayar" name="ttl_bayar" class="form-control" value="">
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