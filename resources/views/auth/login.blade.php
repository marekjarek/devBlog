@extends('layouts.app')

@section('content')
  {{-- <div class="columns"> --}}
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title">Log In</h1>
          <form class="" action="{{route('login')}}" method="post" role="form">
            {{csrf_field()}}

          <div class="field">
            <label for="email" class="label">Email Address</label>
            <p class="control">
              <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" value="" id="email" placeholder="name@example.com" value="{{old('email')}}">
            </p>
            @if ($errors->has('email'))
              <div class="help is-danger">{{$errors->first('email')}}
              </div>
            @endif
          </div>
          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" value="" id="password">
            </p>
            @if ($errors->has('password'))
              <div class="help is-danger">{{$errors->first('password')}}
              </div>
            @endif

          </div>
          <b-checkbox name="remember" class="m-t-15">Remember Me</b-checkbox>
          <button type="submit" name="button" class="button is-primary is-outlined is-fullwidth m-t-30">Log In</button>
          </form>


        </div>{{--  end of card content --}}

      </div>
      <h5 class="has-text-centered m-t-20" ><a href="{{route('password.request')}}" class="is-muted">Forgot Your Password?</a></h5>
    </div>
  
@endsection
