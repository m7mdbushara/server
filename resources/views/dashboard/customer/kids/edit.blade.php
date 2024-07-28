@extends('layouts.dashboard')

@section('content')

<div class="col-12">
    <div class="card shadow-sm">
       <div class="card-header">
          <h3 class="card-title">{{ __('الاطفال') }}</h3>
       </div>
       <div class="card-body">
          <div class="col-7">
            <form action="{{ route('kids.update',$kid->id) }}" method="POST">
                @csrf
                @method('PUT')
             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                <!--begin::Label-->
                <label class="d-flex align-items-center fs-6 fw-bold ">
                <span class="required">{{ __('أسم الطفل') }}</span>
                </label>
                <input type="text" class="form-control" name="name"
                  value="{{ $kid->name }}"
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
                <input type="text" class="form-control" name="nationality"
                value="{{ $kid->nationality }}"
                   >
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
                value="{{ $kid->id_number }}"
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
                value="{{ $kid->birth_date }}"
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
                <select name="gender" class="form-control" id="">
                    <option value="ذكر" {{ $kid->gender == 'ذكر' ? 'selected' : '' }}>{{ __('ذكر') }}</option>
                    <option value="أنثى" {{ $kid->gender == 'أنثى' ? 'selected' : '' }}>{{ __('أنثى') }}</option>
                </select>
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
                <input type="text" class="form-control" name="school_name"
                value="{{ $kid->school_name }}"
                   >
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
                        <option value="أبتدائي" {{ $kid->level == 'أبتدائي' ? 'selected' : '' }}>{{ __('أبتدائي') }}</option>
                        <option value="متوسط" {{ $kid->level == 'متوسط' ? 'selected' : '' }}>{{ __('متوسط') }}</option>
                        <option value="ثانوي" {{ $kid->level == 'ثانوي' ? 'selected' : '' }}>{{ __('ثانوي') }}</option>
                    </select>
                   @error('level')
                   <div class="fv-plugins-message-container invalid-feedback">
                       {{ $message }}
                   </div>
                  @enderror
             </div>

             <div class="form-group">
                <button  class="btn btn-primary">{{ __('تعديل') }}</button>
             </div>
            </form>
          </div>
       </div>
    </div>
 </div>
@endsection