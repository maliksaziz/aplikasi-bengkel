@extends('layouts.index')
@section('title', 'Mekanik')
<?php $subtitle="Mekanik"; ?>

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
                                    <h3 class="panel-title">Data Mekanik</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/mekanik/search" method="POST">
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
                                                                 </div>
                                                            </td>
                                                            <td style="padding-left: 43em;">
                                                                <!-- Button Edit -->
                                                                <a class="btn btn-dark btn-sm text-white" 
                                                                  href="/mekanik/create" role="button">
                                                                  <i class="fa fa-user-plus"></i>
                                                                  <b>Tambah Data</b>     
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                        <!--<div class="input-group">
                                            <input type="text" name="cari" value="{{old('cari')}}"  class="form-control" id="cari" placeholder="Search data">
                                            <span class="input-group-btn"><button type="submit" class="btn btn-primary"><i class="fa fa-search fa-sm"></i></button></span>
                                        </div> -->
                                        
                                    </form>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>Telf</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($ndata as $data)
                                                <tr>
                                                  <td>{{$loop->iteration + $ndata->firstItem()-1}}</td>
                                                  <td>{{$data->mekanik}}</td>
                                                  <td>{{$data->telp}}</td>
                                                  <td>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-primary btn-sm" 
                                                      href="/mekanik/show/{{$data->id_mekanik}}" role="button">
                                                      Detail      
                                                    </a>
                                                    <!-- Button edit -->
                                                    <a class="btn btn-warning btn-sm" 
                                                      href="/mekanik/edit/{{$data->id_mekanik}}" role="button">
                                                      Edit      
                                                    </a>
                                                    <!-- Button Hapus -->
                                                    <a class="btn btn-danger btn-sm" 
                                                      href="/mekanik/delete/{{$data->id_mekanik}}" role="button">
                                                      Delete      
                                                    </a>
                                                  </td>
                                                </tr>
                                                @endforeach
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

@stop
@section('content1')
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
                                <h4 class="card-title">Data Mekanik</h4>
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
                                                                  href="/mekanik/create" role="button">
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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>Telf</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($ndata as $data)
                                                <tr>
                                                  <td>{{$loop->iteration}}</td>
                                                  <td>{{$data->mekanik}}</td>
                                                  <td>{{$data->telp}}</td>
                                                  <td>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-primary btn-sm" 
                                                      href="/mekanik/show/{{$data->id_mekanik}}" role="button">
                                                      Detail      
                                                    </a>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-warning btn-sm" 
                                                      href="/mekanik/edit/{{$data->id_mekanik}}" role="button">
                                                      Edit      
                                                    </a>
                                                    <!-- Button Hapus -->
                                                    <a class="btn btn-danger btn-sm" 
                                                      href="/mekanik/delete/{{$data->id_mekanik}}" role="button">
                                                      Delete      
                                                    </a>
                                                  </td>
                                                </tr>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
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