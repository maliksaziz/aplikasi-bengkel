@extends('layouts.index')
@section('title', 'Sparepart')
<?php $subtitle="Sparepart"; ?>

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
          @if(session()->get('success'))
          <div class="alert alert-success">
            <span>
              <b> success - </b> {{ session()->get('success')}} !!
            </span>
          </div>
          @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Sparepart</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/sparepart/search" method="POST">
                                        @csrf
                                        <table>
                                                        <tr>
                                                            <td>
                                                                <div class="customize-input">
                                                                    <input type="text" name="cari" value="{{old('cari')}}"  class="form-control" id="cari" placeholder="Cari">
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="customize-input">
                                                                   <span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fa fa-search fa-sm"></i></button></span>
                                                            </td>
                                                            <td style="padding-left: 43em;">
                                                                <!-- Button Edit -->
                                                                <a class="btn btn-dark btn-sm text-white" 
                                                                  href="/sparepart/create" role="button">
                                                                  <i class="fa fa-plus"></i>
                                                                  <b>Tambah Barang</b>      
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                     </form>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Sparepart</th>
                                              <th>Stok</th>
                                              <th>Harga</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @forelse($ndata as $data)
                                                <tr>
                                                  <td>{{$loop->iteration + $ndata->firstItem()-1}}</td>
                                                  <td align="left">{{$data->sparepart}}</td>
                                                  <td>
                                                  @if($data->stock == 0)
                                                  <font color='red'>Kosong</font>
                                                  @else
                                                  {{$data->stock}}
                                                  @endif
                                                  </td>
                                                  <td>{{$data->harga}}</td>
                                                  <td>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-warning btn-sm" 
                                                      href="/sparepart/edit/{{$data->id_sparepart}}" role="button">
                                                      <i class="fa fa-edit"></i>  
                                                    </a>
                                                    <!-- Button Hapus -->
                                                    <a class="btn btn-danger btn-sm" 
                                                      href="/sparepart/delete/{{$data->id_sparepart}}" role="button">  
                                                      <i class="fa fa-trash"></i>   
                                                    </a>
                                                  </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                  <td colspan="7" style="text-align: center">Data Tidak Ada</td>
                                                </tr>
                                                @endforelse
                                        </tbody>
                                    </table>
                                    <br>
                                    <div class="d-flex justify-content-end">
                                      {!! $ndata->links('pagination::bootstrap-4') !!}
                                    </div>
                                    </div>
                                </div>
                            </div>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">INPUT DATA BENGKEL
                        </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="/dashboard" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Data Sparepart</li>
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
                    <button type="button" class="close" dsn-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <b> success - </b> {{ session()->get('success')}} !!
                    </span>
                  </div>
                @endif
                <div class="row">
                    <div class="col-lg-20">
                        <div class="card" style="width: 66rem;">
                            <div class="card-body">
                                <h4 class="card-title">Data Sparepart</h4>
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
                                                                    <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                                                        type="search" placeholder="Search" aria-label="Search">
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                            <div class="customize-input">
                                                                    <button type="submit" class="material-icons"  style="background-color: transparent; border-style: none; padding-top: 0.3em; outline: none;">
                                                                    <i class="form-control-icon" data-feather="search"></i>
                                                                    </button>
                                                            </td>
                                                            <td style="padding-left: 43em;">
                                                                <!-- Button Edit -->
                                                                <a class="btn btn-dark btn-sm text-white" 
                                                                  href="/sparepart/create" role="button">
                                                                  <b>Create</b>      
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr  align="center">
                                              <th>No</th>
                                              <th>Sparepart</th>
                                              <th>Stok</th>
                                              <th>Harga</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody  align="center">
                                            <tr>
                                                @forelse($ndata as $data)
                                                <tr>
                                                  <td>{{$loop->iteration + $ndata->firstItem()-1}}</td>
                                                  <td align="left">{{$data->sparepart}}</td>
                                                  <td>
                                                  @if($data->stock == 0)
                                                  <font color='red'>Kosong</font>
                                                  @else
                                                  {{$data->stock}}
                                                  @endif
                                                  </td>
                                                  <td>{{$data->harga}}</td>
                                                  <td>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-warning btn-sm" 
                                                      href="/sparepart/edit/{{$data->id_sparepart}}" role="button">
                                                      <span class="opacity-7"><i data-feather="edit"></i></span>    
                                                    </a>
                                                    <!-- Button Hapus -->
                                                    <a class="btn btn-danger btn-sm" 
                                                      href="/sparepart/delete/{{$data->id_sparepart}}" role="button">
                                                      <span class="opacity-7"><i data-feather="trash-2"></i></span>     
                                                    </a>
                                                  </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                  <td colspan="7" style="text-align: center">Data Tidak Ada</td>
                                                </tr>
                                                @endforelse
                                            </tr>
                                        </tbody>
                                    </table><br>
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