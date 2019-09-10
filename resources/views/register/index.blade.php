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
        @foreach($register as $register)
        <tr>
            <td>{{$register->id}}</td>
            <td>{{$register->first_name}}</td>
            <td>{{$register->last_name}}</td>
            <td>{{$register->no_hp_email}}</td>
            <td>{{$register->jenis_kelamin}}</td>
            <td><a href="{{ route('test.edit',$test->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('test.destroy', $test->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>r.
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

