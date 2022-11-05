@extends('backend.cdn')

@section('content')

<h1>Login</h1>
<form method="POST" action="{{ route('login.post')}}" class="mt-3">
@csrf
    <div class="row mt-3">
    <div class="col-lg-6">
    <div class="mb-3">
      <label for="nama" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="mb-3">
      <label for="nama" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    </div>

    </div class="col-lg-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
 </div>
  </form>
@endsection
