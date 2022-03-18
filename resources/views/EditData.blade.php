@extends('layout.main')

@section('container')

   <form action="{{ url('/update', $data->id ) }}" method="post">
   {{ csrf_field() }}

      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" value = {{ $data->id }} hidden>

      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="nama" name="nama" value = {{ $data->nama }}>

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input class="form-control" id="password" name="password" value = {{ $data->password }}>
      </div>

      <button type="submit" class="btn btn-primary">Edit</button>

</form>


@endsection