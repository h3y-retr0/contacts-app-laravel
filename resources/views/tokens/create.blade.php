@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create New Contact</div>

          <div class="card-body">
            <form method="POST" action="{{ route('tokens.store') }}">
              @csrf
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" autocomplete="name" autofocus
                    value={{ old('name') }}>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>



              <button type="submit" class="btn btn-primary">
                Submit
              </button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection
