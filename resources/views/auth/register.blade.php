@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                         name="email" value="{{ old('email') }}">

                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password"
                         class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                         required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="captcha" class="col-md-4 col-form-label text-md-right">{{ __('Captcha') }}</label>

                <div class="col-md-6">
                  <input id="captcha" class="form-control{{ $errors->has('captcha') ? 'is-invalid' : ''}}"
                         name="captcha">

                  <img class="thumbnail captcha mt-3 mb-2" src="{{ captcha_src('flat') }}"
                       onclick="this.src='/captcha/flag?'+Math.random()"
                       title="{{ __('Click on the picture to retrieve the authentication code') }}">

                  @if ($errors->has('captcha'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                  @endif

                </div>
              </div>

              {{--<div class="form-group row">--}}
              {{--<label for="test" class="col-md-4 col-form-label text-md-right">test</label>--}}

              {{--<div class="col-md-6">--}}
              {{--<input id="test" type="text" class="form-control{{ $errors->has('test') ? ' is-invalid' : '' }}"--}}
              {{--name="test" value="{{ old('test') }}">--}}

              {{--@if ($errors->has('test'))--}}
              {{--<span class="invalid-feedback" role="alert">--}}
              {{--<strong>{{ $errors->first('test') }}</strong>--}}
              {{--</span>--}}
              {{--@endif--}}
              {{--</div>--}}
              {{--</div>--}}

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
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
