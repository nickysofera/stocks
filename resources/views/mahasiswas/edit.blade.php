@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  
</style>
<div class="card uper">
  <div class="card-header">
    Edit Mahasiswa
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
      <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="mahasiswa_first_name" value={{ $mahasiswa->mahasiswa_first_name }} />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name :</label>
          <input type="text" class="form-control" name="mahasiswa_last_name" value={{ $mahasiswa->mahasiswa_last_name }} />
        </div>
        <div class="form-group">
          <label for="no_hp_email">No.Hp or Email:</label>
          <input type="text" class="form-control" name="no_hp_email" value={{ $mahasiswa->mahasiswa_no_hp_email }} />
        </div>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin:</label>
          <input type="text" class="form-control" name="jenis_kelamin" value={{ $mahasiswa->mahasiswa_jenis_kelamin }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection