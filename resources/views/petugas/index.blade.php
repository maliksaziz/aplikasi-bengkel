@extends('layouts.index')
@section('title', 'Petugas')

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
                                    <h3 class="panel-title">User</h3>
                                </div>
                                <div class="panel-body">
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr  align="center">
                                              <th>Role</th>
                                              <th>Nama</th>
                                              <th>Email</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody  align="center">
                                            <tr>
                                                @forelse($ndata as $data)
                                                <tr>
                                                  <td>{{$data->role}}</td>
                                                  <td>{{$data->name}}</td>
                                                  <td>{{$data->email}}</td>
                                                  <td>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-warning btn-sm" 
                                                      href="/petugas/edit/{{$data->id}}" role="button">
                                                      <span class="opacity-7"><i class="fa fa-edit"></i></span>    
                                                    </a>
                                                    <!-- Button Hapus -->
                                                    <a class="btn btn-danger btn-sm" 
                                                      href="/petugas/delete/{{$data->id}}" role="button">
                                                      <span class="opacity-7"><i class="fa fa-trash"></i></span>     
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
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">PETUGAS AREA
                        </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="/dashboard" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Petugas</li>
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
                                <h4 class="card-title">Petugas</h4>
                                <div class="table-responsive-xl">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr  align="center">
                                              <th>Role</th>
                                              <th>Nama</th>
                                              <th>Email</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody  align="center">
                                            <tr>
                                                @forelse($ndata as $data)
                                                <tr>
                                                  <td>{{$data->role}}</td>
                                                  <td>{{$data->name}}</td>
                                                  <td>{{$data->email}}</td>
                                                  <td>
                                                    <!-- Button Detail -->
                                                    <a class="btn btn-warning btn-sm" 
                                                      href="/petugas/edit/{{$data->id}}" role="button">
                                                      <span class="opacity-7"><i data-feather="edit"></i></span>    
                                                    </a>
                                                    <!-- Button Hapus -->
                                                    <a class="btn btn-danger btn-sm" 
                                                      href="/petugas/delete/{{$data->id}}" role="button">
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