@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>No.Hp or Email</td>
          <td>Jenis Kelamin</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswa as $mahasiswa)
        <tr>
            <td>{{$mahasiswa->id}}</td>
            <td>{{$mahasiswa->mahasiswa_first_name}}</td>
            <td>{{$mahasiswa->mahasiswa_last_name}}</td>
            <td>{{$mahasiswa->mahasiswa_no_hp_email}}</td>
            <td>{{$mahasiswa->mahasiswa_jenis_kelamin}}</td>
            <td><a href="{{ route('mhs.edit',$mahasiswa->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('mhs.destroy', $mahasiswa->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection