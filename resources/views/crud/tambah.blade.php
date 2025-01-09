@extends('index')

@section('content')

<form action="{{ route('store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" class="form-control" placeholder="input nama lengkap" name="nama">
    </div>
    <div class="form-group">
      <label for="no_hp">No Handhone:</label>
      <input type="text" class="form-control" placeholder="input no HP" name="no_hp">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" placeholder="input email" name="email">
    </div>
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>  
</form>

@endsection