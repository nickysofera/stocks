@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add mahasiswa
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('mhs.store') }}">
          <div class="form-group">
              @csrf
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="mahasiswa_first_name"/>
          </div>
          <div class="form-group">
              <label for="last_name">Last Name :</label>
              <input type="text" class="form-control" name="mahasiswa_last_name"/>
          </div>
          <div class="form-group">
              <label for="no_hp_email">No.Hp or Email:</label>
              <input type="text" class="form-control" name="mahasiswa_no_hp_email"/>
          </div>
          <div class="form-group">
              <label for="Gender">Jenis Kelamin :</label>
              <!-- <label>Pria</label> -->
              <input type="radio" name="gender" value="pria"> Pria
              <!-- <label>Wanita</label> -->
              <input type="radio" name="gender" value="wanita"> Wanita <br>
          </div>
          <!-- <div class="form-group">  
            <label>Agama</label>
                <select name="dropdown">
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Buddha">Buddha</option>  
                </select>
          </div> -->
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection