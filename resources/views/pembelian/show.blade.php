@extends('layouts.index')
@section('title', 'Detail Mahasiswa')
<?php $subtitle="Detail Mahasiswa"; ?>



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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Grid</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
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
                                <h4 class="card-title">Grid With Row Label</h4>
                                @foreach($datamhs as $mhs)
                                <form action="/mahasiswa/show/{{$mhs->nim}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <label>NIM </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nim" value="{{$mhs->nim}}">
                                                </div>
                                            </div>
                                        </div>
                                        <label>Nama </label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="nama" value="{{$mhs->nama}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Tanggal Lahir </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="tgllahir" value="{{$mhs->tanggal_lahir}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Email </label>
                                                <div class="form-group">
                                                <input type="text" readonly class="form-control" name="email" value="{{$mhs->email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-sm pull-right" 
                                      href="/mahasiswa" role="button">
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
                <div class="col-lg-20">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nilai Mahasiswa</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                            <th>No</th>
                                            <th>Mata Kuliah</th>
                                            <th>Dosen</th>
                                            <th>Tugas</th>
                                            <th>UTS</th>
                                            <th>UAS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @forelse($datanli as $nli)
                                                <tr>
                                                <td>{{$loop->iteration + $datanli->firstItem() - 1}}</td>
                                                <td>{{$nli->matkul->nama}}</td>
                                                <td>{{$nli->dosen->nama}}</td>
                                                <td>{{$nli->tugas}}</td>
                                                <td>{{$nli->uts}}</td>
                                                <td>{{$nli->uas}}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                <td colspan="7" style="text-align: center">mhs Tidak Ada</td>
                                                </tr>
                                                @endforelse
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-sm-flex justify-content-center">
                                      {!! $datanli->links() !!}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
@endsection