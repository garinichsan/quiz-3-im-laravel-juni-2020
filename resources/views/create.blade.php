@extends('layouts.master')

@section('content')
<a class="btn btn-primary mt-3 ml-3" href="/artikel"> <i class="right fas fa-angle-left"></i> &nbsp Kembali ke Daftar Artikel</a>

<form role="form" class="mx-3" action="/artikel" method="POST">
    @csrf
    <!-- text input -->
    <label class="mt-3">Judul Artikel</label>
    <input type="text" class="form-control mb-3" name="judul" placeholder="Masukkan Judul ...">

    <!-- textarea -->
    <label>Isi Artikel</label>
    <textarea class="form-control" rows="5" name="isi" placeholder="Masukkan Isi ..."></textarea>

    <!-- tag input -->
    <label class="mt-3">Tag</label>
    <input type="text" class="form-control mb-3" name="tag" placeholder="Masukkan Tag ...">

    <button class="btn btn-primary my-3" type="submit">Publish</a>

</form>

@endsection