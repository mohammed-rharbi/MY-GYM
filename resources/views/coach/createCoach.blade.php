@extends('layouts.auth')

@section('title','dashboard')
@section('content')

<div class="d-flex justify-content-center align-items-center vh-100 text-light">
<form  method="POST" action="{{ route('coach.store') }}" style="width: 26rem;"  class="mx-auto">

    @csrf


    <label for="formFileMultiple" name="photo" class="form-label">Multiple files input example</label>
    <input class="form-control mb-4" name="photo" type="file" id="formFileMultiple" multiple />

    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" name="specialization" class="form-control" />
      <label class="form-label" for="form4Example1">Name</label>
    </div>
  
    <!-- Message input -->
    <div data-mdb-input-init class="form-outline mb-4">
      <textarea class="form-control" name="description" rows="4"></textarea>
      <label class="form-label" for="form4Example3">Description</label>
    </div>
  
   
    <!-- Submit button -->
    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Send</button>
  </form>
  </div>

 
@endsection