@extends('layouts.dashboard')
@section('content')
<div class="col-xl-12">
   <div class="card mb-5 mb-xl-8">
      <!--begin::Header-->
      <div class="card-header border-0 pt-5">
         <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-1 mb-1">{{ __('تفاصيل الطلب') }}</span>
         </h3>

         <a class="btn btn-dark" href="{{ route('admin.parents.finance-requests') }}" class="btn-back">{{ __('رجوع') }}</a>
      </div>
      <div class="card-body py-3">
         <div class="row">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('المعلومات الاساسية') }}</span>
            </h3>
            <div class="col-12">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم ولي الامر') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->parent_name }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('النوع') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->gender }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('الجنسية') }}</label>
               <input type="text" class="form-control" readonly value="{{ __($financeRequest->parentChild->nationality) }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->id_number }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('تاريخ أنتهاء الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->id_expiration_date }}">
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('معلومات التواصل') }}</span>
            </h3>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('الهاتف المنزلي') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->ContactInformation?->home_phone_numbe }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الجوال') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->ContactInformation?->mobile_number }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('البريد الالكتروني') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->ContactInformation?->email }}">
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('عنوانك') }}</span>
            </h3>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم الجهة') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->parentAddress?->company_name }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('المسمى الوظيفي') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->parentAddress?->job_title }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('هاتف العمل') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->parentAddress?->phone_work }}">
            </div>
         </div>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-4 mb-1">{{ __('بيانات البنك') }}</span>
            </h3>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم البنك') }}</label>
               <input type="text" class="form-control" readonly value="{{ __($financeRequest->parentChild->bankInformation?->name) }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الأيبان') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->parentChild->bankInformation?->iban }}">
            </div>
           
         </div>
           <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-4 mb-1">{{ __('بيانات اﻷبن') }}</span>
            </h3>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم اﻷبن') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->kid->name }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->kid->id_number }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('تاريخ الميلاد') }}</label>
               <input type="text" class="form-control" readonly value="{{ $financeRequest->kid->birth_date }}">
            </div>

            <div class="col-4">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('النوع') }}</label>
                <input type="text" class="form-control" readonly value="{{ __($financeRequest->kid->gender) }}">
             </div>


            <div class="col-4">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('الجنسية') }}</label>
                <input type="text" class="form-control" readonly value="{{ __($financeRequest->kid->nationality) }}">
             </div>

             <div class="col-4">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('المستوى') }}</label>
                <input type="text" class="form-control" readonly value="{{ __($financeRequest->kid->level) }}">
             </div>

             <div class="col-12">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم المدرسة') }}</label>
                <input type="text" class="form-control" readonly value="{{ __($financeRequest->kid->school_name) }}">
             </div>
             
            </div>
            <hr>
            <div class="row mt-5">
                
                 
                    <div class="col-6">
                       
                     <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('المبلغ') }}</label>
                      <input type="text" class="form-control" name="amount" readonly value="{{ $financeRequest->amount }}">  
                      @error('amount')
                      <span>
                         {{ $message }}
                      </span>
                   @enderror  
                     </div>

                     <div class="col-6">
                        <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('وصف') }}</label>
                        <textarea name="description" class="form-control" id="" rows="4" readonly>
                            {{ $financeRequest->description }}
                        </textarea>
                        @error('description')
                           <span>
                              {{ $message }}
                           </span>
                        @enderror
                     </div>
                     
               
             </div>
      </div>
   </div>
</div>
@endsection