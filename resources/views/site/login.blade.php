@extends('layouts.site')


@section('content')

 <section class="login">
  @include('global.lang')
    <div class="login-box">
      <img src="{{ ('asset/images/logo.png') }}" class="logo mx-auto d-block" alt="">
      <h2> {{ __('مرحبًا بك') }} </h2>
      <h4>{{ __('قم بتسجيل الدخول') }}</h4>
      <form action="{{ route('parents.login') }}" method="POST">
        @csrf
        
        @error('username')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
    @enderror
        <input type="text" placeholder="{{ __('اسم مستخدم') }}" name="username">
      


    @error('password')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
    @enderror
        <input type="password" placeholder="{{ __('كلمة المرور') }}" name="password">
       
       
        <button type="submit">{{ __('تسجيل دخول') }}</button>
        <h5>  {{ __('ليس لديك حساب') }} ؟  <a href="{{ route('parents.register') }}">{{ __('التسجيل') }}</a></h5>
      </form>
    </div>
</section>

@endsection