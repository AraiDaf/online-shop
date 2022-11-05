@extends('backend.cdn')

@section('content')
<form method="POST" action="{{ route('category.store') }}" class="mt-3" enctype="multipart/form-data">
    @csrf

<h1>Create Category</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
    <div class="col-lg-6">
    <div class="mb-3">
      <label for="nama" class="form-label">Name category</label>
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
      <label for="gambar" class="form-label">Upload File</label>
      <input type="file" class="form-control" id="gambar" name="gambar">
    </div>
    </div>
    </div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
 </div>
  </form>
@endsection
