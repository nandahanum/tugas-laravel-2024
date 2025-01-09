@extends('index')

@section('content')

<form action="{{ route('update',['id' => $id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" class="form-control" name="nama" placeholder="input nama lengkap" value="{{ $one->nama }}" required>
      </div>
      <div class="form-group">
        <label for="no_hp">No Handhone:</label>
        <input type="text" class="form-control" name="no_hp" placeholder="input no HP" value="{{ $one->no_hp }}" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" placeholder="input email" value="{{ $one->email }}" required>
      </div>
      <br/>
      <button type="submit" class="btn btn-primary">Submit</button>     
</form>

@endsection