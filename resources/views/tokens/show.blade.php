@extends('layouts.app')

@section('content')
  <div class="col-md-8 mx-auto">
    <div class="card card-body text-center">
      <p>This is your API Token, copy it before leaving this page.</p>
      <p class="text-info">{{ $token->plainTextToken }}</p>
    </div>
  </div>
  </div>
  </div>
@endsection
