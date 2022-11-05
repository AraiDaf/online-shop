
@extends('backend.cdn')

@section('content')
       <div class="row mt-2">
            <div class="col-sm-12 col-md-8">
                <h2>Category</h2>
            </div>
            <div class="col-sm-12 col-md-4">
                <a href="{{ route('category.create') }}" class="btn btn-primary float-end">Add Category</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead class="bg-secondary text-white">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">gambar</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($category as $kategori)
                <tr>
                  <th scope="row">{{ $kategori->nama }}</th>
                  <td>
                    <img src="{{ asset('uploads/' . $kategori->gambar) }}" alt="" class="img-thumbnail" width="100">
                  </td>
                  <td>
                    <form action="{{ route('category.delete', ['id' => $kategori->id]) }}" method="POST">
                        @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a href="{{ route('category.edit', ['id' => $kategori->id]) }}" class="btn btn-warning">Edit</a>
                    </form>
                   
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection

