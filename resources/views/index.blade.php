@extends('layouts.master')

@section('content')
<a class="btn btn-primary m-3" href="/artikel/create"> <i class="nav-icon fas fa-edit"></i> Ajukan Pertanyaan </a>

<table class="table table-hover">
  <thead>
    <tr>
      <th style="width: 150px">Judul Artikel</th>
      <th> Isi Artikel</th>
      <th style="width: 150px"> Tag</th>
      <th style="width: 300px"> Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($artikel as $key => $item)
        
    <tr>
      <td>{{ $item -> judul }}</td>
      <td style="white-space: pre-wrap">{{ $item -> isi }}</td>
      <td>{{ $item -> tag }}</td>
      <td>
        <form action="/artikel/{{ $item -> id }}" method="POST" style="display: inline">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        <a href="/artikel/{{ $item -> id }} " class="btn btn-primary">Detail <i class="fas fa-angle-right"></i> </a>
      </td>
    </tr>
    
    
    @endforeach
  </tbody>
</table>
    
@endsection

@push('scripts')

<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  });
</script>
    
@endpush