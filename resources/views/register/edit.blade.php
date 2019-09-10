@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Register
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
      <form method="post" action="{{ route('test.update',$test->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="fisrt_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" value={{ $register->First Name }} />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name :</label>
          <input type="text" class="form-control" name="last_name" value={{ $register->Last Name }} />
        </div>
        <div class="form-group">
          <label for="no_hp_email">No.Hp or Email:</label>
          <input type="text" class="form-control" name="no_hp_email" value={{ $register->No.Hp or Email }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection