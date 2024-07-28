@extends('layouts.dashboard')

@section('content')

<div class="col-12">
    <div class="card shadow-sm">
       <div class="card-header">
          <h3 class="card-title">{{ __('الاطفال') }}</h3>
       </div>
       <div class="card-body">
          <div class="col-7">
            <form action="{{ route('kids.store') }}" method="POST">
                @csrf
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('أسم الطفل') }}</span>
                </label>
                <input type="text" class="form-control" name="name"
                   >
                   @error('name')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>

             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('الجنسية') }}</span>
                </label>
                
                   <select type="text" class="form-control" name="nationality">
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
                   @error('nationality')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('رقم الهوية') }}</span>
                </label>
                <input type="text" class="form-control" name="id_number"
                   >
                   @error('id_number')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('تاريخ الميلاد') }}</span>
                </label>
                <input type="date" class="form-control" name="birth_date"
                   >
                   @error('birth_date')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('النوع') }}</span>
                </label>
                {{-- <select name="gender" class="form-control" id="">
                    <option value="ذكر">{{ __('ذكر') }}</option>
                    <option value="أنثى">{{ __('أنثى') }}</option>
                </select> --}}
                <div class="d-flex mb-5">

                  <div class="me-20 d-flex" >
                    <input type="radio" name="gender" id="male" value="male" style="width:unset; margin-top: 0px">
                    <label for="male" class="ms-2" for="">{{ __('ذكر') }}</label>
                  </div>
                  
                  <div class="d-flex">
                    <input type="radio" name="gender" id="female" value="female" style="width:unset; margin-top: 0px">
                    <label for="female" class="ms-2" for="">{{ __('أنثى') }}</label>
                  </div>
                </div>
                   @error('gender')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>
             
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('أسم المدرسة') }}</span>
                </label>

                <select name="school_name" id="" class="form-control">
                  <option value="مدرسة العلياء العالمية">{{ __('مدرسة العلياء العالمية') }}</option>
                  <option value="مدارس الرواد العالمية">{{ __('مدارس الرواد العالمية') }}</option>
                  <option value="أخرى">{{ __('أخرى') }}</option>
                </select>
                
                   @error('school_name')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror 
             </div>
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('المستوى') }}</span>
                </label>
                    <select name="level" class="form-control" id="">
                        <option value="أبتدائي">{{ __('أبتدائي') }}</option>
                        <option value="متوسط">{{ __('متوسط') }}</option>
                        <option value="ثانوي">{{ __('ثانوي') }}</option>
                    </select>
                   @error('level')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>

             <div class="form-group">
                <button  class="btn btn-primary">{{ __('حفظ') }}</button>
             </div>
            </form>
          </div>
       </div>
    </div>
 </div>
@endsection