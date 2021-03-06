@extends('layouts.default')
@section('title', '登陆')
@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card">
    <div class="card-header">
      <h5>登陆</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form method="GET" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="mb-3">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="mb-4">
            <label for="password">密码：</label>
            <input type="password" name='password' class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
          </div>
          <button type="submit" class="btn btn-outline-primary">登陆</button>
      </form>

      <hr>

      <p>还没账号吗？<a href="{{ route('signup') }}">现在注册!</a></p>
    </div>
  </div>
</div>

@endsection
