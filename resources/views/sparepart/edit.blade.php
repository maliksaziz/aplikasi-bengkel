@extends('layouts.index')
@section('title', 'Edit Dosen')
<?php $subtitle="Edit Dosen"; ?>

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Update Data Sparepart</h3>
                                </div>
                                <div class="panel-body">
                                @foreach($data as $data)
                                <form action="/sparepart/update/{{$data->id_sparepart}}" method="POST">
                                @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>ID </label>
                                                <div class="form-group">
                                                <input type="text" id="id_sparepart" name="id_sparepart" readonly class="form-control" value="{{$data->id_sparepart}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Sparepart </label>
                                                <div class="form-group">
                                                <input type="text" id="sparepart" name="sparepart" class="form-control" value="{{$data->sparepart}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                            <label>Stock </label>
                                                <div class="form-group">
                                                <input type="text" id="stock" name="stock" class="form-control" value="{{$data->stock}}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                            <label>Harga </label>
                                                <div class="form-group">
                                                <input type="text" id="harga" name="harga" class="form-control" value="{{$data->harga}}">
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
