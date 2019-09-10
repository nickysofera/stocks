@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add register
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('test.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name"> First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name"> Last Name :</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>
          <div class="form-group">
              <label for="no_hp_email">No.Hp or Email:</label>
              <input type="text" class="form-control" name="no_hp_email"/>
          </div>
          <div class="form-group">
              <label for="jenis_kelamin"> Jenis Kelamin:</label>
              <input type="text" class="form-control" name="jenis_kelamin"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection