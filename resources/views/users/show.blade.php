@extends('layouts.app')

@section('title', $user->first_name . $user->last_name . '的个人中心')

@section('content')

  <div class="row user-center">
    @include('users._nav')

    <div class="users">
      <div class="user-info">
        <img src="{{ $user->gravatar(140) }}" class="img-responsive img-circle" />
        <div class="user-info-content">
          {{ $user->first_name }} {{ $user->last_name }}</div>
      </div>
    </div>
  </div>
@stop
