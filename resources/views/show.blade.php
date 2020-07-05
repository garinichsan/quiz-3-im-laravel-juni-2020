@extends('layouts.master') 

@section('content')

<a class="btn btn-primary ml-3 mt-3" href="/artikel"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Daftar Artikel</a>

<br>

<label class="ml-3 mt-3">Detail Artikel</label>
<a class="btn btn-outline-primary float-right" href="/artikel/{{$artikel ->id}}/edit "> <i class="right fas fa-edit"></i> &nbsp Edit Artikel</a>
<div m-3>

    <!-- /.card-header -->
    <div class="card-body p-0 ml-3 mt-3">
    <table class="table table-striped" style="white-space: pre-wrap">
        <thead>
        <tr>
            <th style="width: 10px">Id</th>
            <th>Judul</th>
            <th>Slug</th>
            <th>Isi</th>
            <th>Tag</th>
            <th>Dibuat</th>
            <th>Diperbaharui</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$artikel->id}}</td>
            <td>{{$artikel->judul}}</td>
            <td>{{$artikel->slug}}</td>
            <td>{{$artikel->isi}}</td>
            <td>{{$artikel->tag}}</td>
            <td>{{$artikel->created_at}}</td>
            <td>{{$artikel->updated_at}}</td>
        </tr>
        </tbody>
    </table>
    </div>    

</div>

@endsection
