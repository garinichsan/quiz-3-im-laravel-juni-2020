@extends('layouts.master')

@section('content')
<a class="btn btn-primary m-3" href="/artikel/create"> <i class="nav-icon fas fa-edit"></i> Buat Artikel Baru </a>

  @empty($artikel[0])
    
  <div class="card mb-3">
    <div class="card-body">
      <h4 class="card-title font-weight-bold mb-1">Belum Terdapat Artikel</h4>
      <h6 class="card-subtitle mb-2 text-muted">--------------------</h6>
      <a class="btn btn-sm btn-primary m-3" href="/artikel/create"> Buat Artikel Baru <i class="nav-icon fas fa-angle-right"></i> </a>
    </div>
  </div>

  @endempty


  @foreach ($artikel as $key => $item)

  <div class="card mb-3">
    <div class="card-body">
      
      <div class="float-right"> 
        <form action="/artikel/{{ $item -> id }}" method="POST" style="display: inline">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
        <a href="/artikel/{{ $item -> id }} " class="btn btn-primary">Detail <i class="fas fa-angle-right"></i> </a>
      </div>
      
      <h4 class="card-title text-gray-900 font-weight-bold mb-1">{{ $item -> judul }}</h4>
      <h6 class="card-subtitle mb-2 text-muted">{{ $item -> slug }}</h6>
      <p class="card-text text-gray-900" style="white-space: pre-wrap">{{ $item -> isi }}</p>

      @foreach(explode(',',$item->tag) as $row)
        <a href="#" class="btn btn-sm btn-outline-secondary"> {{ $row }} </a>
      @endforeach
      
    </div>
  </div>

  @endforeach
    
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