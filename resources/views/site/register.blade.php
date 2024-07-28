@extends('layouts.site')


@section('content')
 

<section class="login">
          @include('global.lang')
    <div class="login-box">
    
      <img src="{{ asset('asset/images/logo.png') }}" class="logo mx-auto d-block" alt="">
      <h2>{{ __('إنشاء حساب') }}</h2>
      <!-- <h4>{{ __('الرجاء إنشاء حساب جديد') }}</h4> -->
      <form action="{{ route('parents.store') }}" method="POST">
        @csrf
        <label for="">{{ __('أسم ولي الامر') }}</label>
        @error('parent_name')
            <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
        @enderror
        <input type="text" name="parent_name" />
       

        <label for="">{{ __('اسم مستخدم') }}</label>
        @error('username')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
       @enderror
        <input type="text" name="username" />
     
        <label for="">{{ __('رقم الهوية') }}</label>
        @error('id_number')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
       @enderror
        <input type="text" name="id_number" />
       
        <label for="">{{ __('الجنسية') }}</label>
        @error('nationality')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
       @enderror
        
        <select name="nationality" id="">
          <option value="سعودي">{{ __('سعودي') }}</option>
          <option value="مصري">{{ __('مصري') }}</option>
          <option value="سوري">{{ __('سوري') }}</option>
          <option value="سوداني">{{ __('سوداني') }}</option>
          <option value="أردني">{{ __('أردني') }}</option>
          <option value="فلسطيني">{{ __('فلسطيني') }}</option>
          <option value="لبناني">{{ __('لبناني') }}</option>
          <option value="عراقي">{{ __('عراقي') }}</option>
          <option value="هندي">{{ __('هندي') }}</option>
          <option value="أخرى">{{ __('أخرى') }}</option>
        </select>
     
        <label for="">{{ __('النوع') }}</label>
        @error('gender')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
       @enderror
        <div class="d-flex">

          <div class="me-5 d-flex" >
            <input type="radio" name="gender" id="male" value="male" style="width:unset; margin-top: 5px">
            <label for="male" class="ms-2" for="">{{ __('ذكر') }}</label>
          </div>
          
          <div class="d-flex">
            <input type="radio" name="gender" id="female" value="female" style="width:unset; margin-top: 5px">
            <label for="female" class="ms-2" for="">{{ __('أنثى') }}</label>
          </div>
        </div>

       
             
        <label for="">{{ __('كلمة المرور') }}</label>
        @error('password')
        <span class="text-danger d-block mb-2" style="font-size:14px;">{{ $message }}</span>
       @enderror
        <input type="password" name="password">

        <label for="">{{ __('تأكيد كلمة المرور') }}</label>
        <input type="password"  name="password_confirmation">
     

       
        <button>{{ __('تسجيل') }}</button>
        <h5>{{ __('لديك حساب بالفعل') }}   ! {{ __('الرجاء') }} <a href="{{ route('parents.login') }}">{{ __('الدخول') }}</a></h5>
      </form>
    </div>
</section>

@endsection