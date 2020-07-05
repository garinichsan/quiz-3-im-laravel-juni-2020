@extends('layouts.master') 

@section('content')

<a class="btn btn-primary ml-3 mt-3" href="/artikel"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Daftar Artikel</a>

<br>

<label class="ml-3 mt-3">Detail Artikel</label>
<a class="btn btn-outline-primary float-right" href="/artikel/{{$artikel ->id}}/edit "> <i class="right fas fa-edit"></i> &nbsp Edit Artikel</a>
<div m-3>

    <!-- /.card-header -->
    <div class="card-body p-0 ml-3 mt-3">
    <table class="table table-striped text-gray-900" style="white-space: pre-wrap">
        <thead>
        <tr>
            <th>Komponen</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="width: 10px">Id</td>
            <td>{{$artikel->id}}</td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>{{$artikel->judul}}</td>
        </tr>
        <tr>
            <td>Slug</td>
            <td>{{$artikel->slug}}</td>
        </tr>
        <tr>
            <td>Isi</td>
            <td>{{$artikel->isi}}</td>
        </tr>
        <tr>
            <td>Tag</td>
            <td>{{$artikel->tag}}</td>
        </tr>
        <tr>
            <td>Dibuat</td>
            <td>{{$artikel->created_at}}</td>
        </tr> 
        <tr>
            <td>Diperbaharui</td>
            <td>{{$artikel->updated_at}}</td>
        </tr>
        </tbody>
    </table>
    </div>    

</div>

@endsection
