@extends('layouts.index')
@section('title', 'Laporan Transaksi')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Riwayat Transaksi</h3>
                                </div>
                                <div class="panel-body">
                                <form action="/pembelian/search" method="POST">
                                @csrf
                                <table>
                                                        <tr>
                                                            <td>
                                                                <div class="customize-input">
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="customize-input">
                                                                    
                                                            </td>
                                                            <td style="padding-left: 50em;">
                                                                <a class="btn btn-sm" href="/pembelian/cetakpdf" id="PdfData" role="button">
                                                                    <i class="fa fa-download"></i>
                                                                    <b>Export Pdf</b>
                                                                </a>
                                                            </td>
                                                            <td style="padding-left: 1em;">
                                                                <a class="btn btn-sm" href="/pembelian/exportexcel" id="PdfData" role="button">
                                                                    <i class="fa fa-download"></i>
                                                                    <b>Export Excel</b>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table> 
                                </form>
                                <table class="table table-hover">
                                        <thead>
                                            <tr>
                                              <th>ID Penjualan</th>
                                              <th>Nama Mekanik</th>
                                              <th>Sparepart</th>
                                              <th>Qty</th>
                                              <th>Total Pembelian</th>
                                              <th>Tanggal Beli</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @forelse($ndata as $data)
                                                <tr>
                                                  <td>{{$data->id_penjualan}}</td>
                                                  <td>{{$data->mekanik->mekanik}}</td>
                                                  <td>{{$data->sparepart->sparepart}}</td>
                                                  <td>{{$data->qty}}</td>
                                                  <td>{{$data->ttl_bayar}}</td>
                                                  <td>{{$data->created_at}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                  <td colspan="7" style="text-align: center">Data Tidak Ada</td>
                                                </tr>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
             </div>
        </div>
    </div>
</div>

@stop

@section('content1')
	         <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">INPUT DATA TRANSAKSI
                        </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Laporan Transaksi</li>
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
                @if(session()->get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> success - </b> {{ session()->get('success')}} !!
                    </span>
                  </div>
                @endif
                <div class="row">
                    <div class="col-lg-15">
                        <div class="card" style="width: 66rem;">
                            <div class="card-body">
                                <h4 class="card-title">Laporan Transaksi</h4>
                                <div>
                                    <ul class="navbar-nav float-left">
                                        <li class="nav-item d-none d-md-block">
                                            <a class="nav-link">
                                                <form action="/msmenu/search" method="POST">
                                                @csrf
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <div class="customize-input">
                                                                    
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="customize-input">
                                                                    
                                                            </td>
                                                            <td style="padding-left: 55.5em;">
                                                                <a class="btn btn-sm" href="/pembelian/cetakpdf" role="button">
                                                                    <i data-feather="download"></i>
                                                                    <b>Cetak Pdf</b>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                              <th>ID Penjualan</th>
                                              <th>Nama Mekanik</th>
                                              <th>Sparepart</th>
                                              <th>Qty</th>
                                              <th>Total Pembelian</th>
                                              <th>Tanggal Beli</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @forelse($ndata as $data)
                                                <tr>
                                                  <td>{{$data->id_penjualan}}</td>
                                                  <td>{{$data->mekanik->mekanik}}</td>
                                                  <td>{{$data->sparepart->sparepart}}</td>
                                                  <td>{{$data->qty}}</td>
                                                  <td>{{$data->ttl_bayar}}</td>
                                                  <td>{{$data->created_at}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                  <td colspan="7" style="text-align: center">Data Tidak Ada</td>
                                                </tr>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                      {!! $ndata->links('pagination::bootstrap-4') !!}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        
      </div>
@endsection