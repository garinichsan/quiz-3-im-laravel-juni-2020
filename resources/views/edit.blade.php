@extends('layouts.master')

@section('content')
<a class="btn btn-primary mt-3 ml-3" href="/artikel/{{$artikel->id}}"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Detail Artikel</a>

<form role="form" class="mx-3" action="/artikel/{{$artikel->id}}" method="POST">
    @csrf
    @method("PUT")
    <!-- text input -->
    <label class="mt-3">Judul Artikel</label>
    <input type="text" class="form-control mb-3" name="judul" value="{{$artikel->judul}}">

    <!-- textarea -->
    <label>Isi Artikel</label>
    <textarea class="form-control" rows="5" name="isi">{{$artikel->isi}}</textarea>

    <!-- tag input -->
    <label class="mt-3">Tag</label>
    <input type="text" class="form-control mb-3" name="tag" value="{{$artikel->tag}}">

    <button class="btn btn-primary my-3" type="submit">Ubah</a>

</form>

@endsection