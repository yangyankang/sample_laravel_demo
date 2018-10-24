@extends('layouts.default');
@section('title',$user->name);
@section('content')
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <div class="col-md-12">
        <div class="col-md-offset-2 col-md-8">
          <section class="user_info">
            {{--为什么有问题--}}
            @include('shared._user_info', ['users' => $user])
          </section>
        </div>
      </div>
    </div>
  </div>
@stop