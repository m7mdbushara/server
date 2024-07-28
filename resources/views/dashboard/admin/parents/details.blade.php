@extends('layouts.dashboard')
@section('content')
<div class="col-xl-12">
   <div class="card mb-5 mb-xl-8">
      <!--begin::Header-->
      <div class="card-header border-0 pt-5">
         <h3 class="card-title align-items-start flex-column">
         </h3>

         <a href="{{ route('admin.parents.index') }}" class="btn btn-dark">{{ __('رجوع') }}</a>
      </div>
      <div class="card-body py-3">
         <div class="row">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('المعلومات الاساسية') }}</span>
            </h3>
            <div class="col-4">
               <label for="">{{ __('أسم ولي الامر') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->parent_name }}">
            </div>
            <div class="col-4">
               <label for="">{{ __('النوع') }}</label>
               <input type="text" class="form-control" readonly value="{{ __($parent->gender) }}">
            </div>
            <div class="col-4">
               <label for="">{{ __('الجنسية') }}</label>
               <input type="text" class="form-control" readonly value="{{ __($parent->nationality) }}">
            </div>
            <div class="col-6">
               <label for="">{{ __('رقم الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->id_number }}">
            </div>
            <div class="col-6">
               <label for="">{{ __('تاريخ أنتهاء الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->id_expiration_date }}">
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('معلومات التواصل') }}</span>
            </h3>
            <div class="col-4">
               <label for="">{{ __('الهاتف المنزلي') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->ContactInformation?->home_phone_numbe }}">
            </div>
            <div class="col-4">
               <label for="">{{ __('رقم الجوال') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->ContactInformation?->mobile_number }}">
            </div>
            <div class="col-4">
               <label for="">{{ __('البريد الالكتروني') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->ContactInformation?->email }}">
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('عنوانك') }}</span>
            </h3>
            <div class="col-4">
               <label for="">{{ __('أسم الجهة') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->parentAddress?->company_name }}">
            </div>
            <div class="col-4">
               <label for="">{{ __('المسمى الوظيفي') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->parentAddress?->job_title }}">
            </div>
            <div class="col-4">
               <label for="">{{ __('هاتف العمل') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->parentAddress?->phone_work }}">
            </div>
         </div>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-4 mb-1">{{ __('بيانات البنك') }}</span>
            </h3>
            <div class="col-6">
               <label for="">{{ __('أسم البنك') }}</label>
               <input type="text" class="form-control" readonly value="{{ __($parent->bankInformation?->name) }}">
            </div>
            <div class="col-6">
               <label for="">{{ __('رقم الأيبان') }}</label>
               <input type="text" class="form-control" readonly value="{{ $parent->bankInformation?->iban }}">
            </div>
           
         </div>
      </div>
   </div>
</div>
@endsection