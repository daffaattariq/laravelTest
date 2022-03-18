@extends('layout.main')

@section('container')


    <a href ="{{ route('add') }}" ><button>Tambah</button></a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $count = 1;
        foreach($data as $data)
        {
    ?>
    <tr>
            <th scope="row"><?= $count ?></th>
            <td><?= $data["nama"]?></td>
            <td><?= $data["password"]?></td>
            <td>
                <a href="{{ url('editData' , $data->id) }}" class ="bi bi-trash">Update</a>
                <a href="{{ url('destroy' , $data->id) }}" class ="bi bi-trash">Delete</a>

            </td>
    </tr>
    <?php
    $count++;
        }
    ?>
  


  </tbody>
</table>


@endsection