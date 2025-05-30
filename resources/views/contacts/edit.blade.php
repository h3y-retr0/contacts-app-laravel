@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Create New Contact</div>

          <div class="card-body">
            <div class="d-flex justify-content-center mb-4">
              <img class="profile-picture"
                src="{{ Storage::url($contact->profile_picture) }}"></a>
            </div>
            <form method="POST"
              action="{{ route('contacts.update', $contact->id) }}"
              enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="name"
                  class="col-md-4 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                  <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    name="name" autocomplete="name" autofocus
                    value={{ old('name') ?? $contact->name }}>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone_number"
                  class="col-md-4 col-form-label text-md-right">Phone
                  Number</label>
                <div class="col-md-6">
                  <input id="phone_number" type="tel"
                    class="form-control @error('phone_number') is-invalid @enderror"
                    name="phone_number" autocomplete="phone_number"
                    value={{ old('phone_number') ?? $contact->phone_number }}>
                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="email"
                  class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input id="email" type="text"
                    class="form-control @error('email') is-invalid @enderror"
                    name="email" autocomplete="email"
                    value={{ old('email') ?? $contact->email }}>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="age"
                  class="col-md-4 col-form-label text-md-right">Age</label>
                <div class="col-md-6">
                  <input id="age" type="text"
                    class="form-control @error('age') is-invalid @enderror"
                    name="age" autocomplete="age"
                    value={{ old('age') ?? $contact->age }}>
                  @error('age')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="img"
                  class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                  <input id="profile_picture" type="file"
                    class="form-control @error('profile_picture') is-invalid @enderror"
                    name="profile_picture">
                  @error('profile_picture')
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
