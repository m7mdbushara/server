@extends('layouts.dashboard')
@section('content')
<div class="col-xl-12">
   <div class="card mb-5 mb-xl-8">
      <!--begin::Header-->
      <div class="card-header border-0 pt-5">
         <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-1 mb-1">{{ __('تقديم طلب') }}</span>
         </h3>
      </div>
      <div class="card-body py-3">
         <div class="row">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('المعلومات الاساسية') }}</span>
            </h3>
            <div class="col-12">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم ولي الامر') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->parent_name }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('النوع') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->gender }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('الجنسية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->nationality }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->id_number }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('تاريخ أنتهاء الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->id_expiration_date }}">
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('معلومات التواصل') }}</span>
            </h3>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الهاتف المنزلي') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->ContactInformation?->home_phone_numbe }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الجوال') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->ContactInformation?->mobile_number }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('البريد الالكتروني') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->ContactInformation?->email }}">
            </div>
         </div>
         <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-3 mb-1">{{ __('عنوانك') }}</span>
            </h3>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم الجهة') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->parentAddress?->company_name }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('المسمى الوظيفي') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->parentAddress?->job_title }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('هاتف العمل') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->parentAddress?->phone_work }}">
            </div>
         </div>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-4 mb-1">{{ __('بيانات البنك') }}</span>
            </h3>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم البنك') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->bankInformation?->name }}">
            </div>
            <div class="col-6">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الأيبان') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->parentChild->bankInformation?->iban }}">
            </div>
           
         </div>
           <hr>
         <div class="row mt-5">
            <h3 class="card-title align-items-start flex-column">
               <span class="card-label fw-bolder fs-4 mb-1">{{ __('بيانات اﻷبن') }}</span>
            </h3>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم اﻷبن') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->name }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('رقم الهوية') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->id_number }}">
            </div>
            <div class="col-4">
               <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('تاريخ الميلاد') }}</label>
               <input type="text" class="form-control" readonly value="{{ $kid->birth_date }}">
            </div>

            <div class="col-4">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('النوع') }}</label>
                <input type="text" class="form-control" readonly value="{{ $kid->gender }}">
             </div>


            <div class="col-4">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('الجنسية') }}</label>
                <input type="text" class="form-control" readonly value="{{ $kid->nationality }}">
             </div>

             <div class="col-4">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('المستوى') }}</label>
                <input type="text" class="form-control" readonly value="{{ $kid->level }}">
             </div>

             <div class="col-12">
                <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('أسم المدرسة') }}</label>
                <input type="text" class="form-control" readonly value="{{ $kid->school_name }}">
             </div>
             
            </div>
            <hr>
            <div class="row mt-6">
                <form action="{{ route('kids.sendApply') }}" method="POST">
                  <input type="hidden" value="{{ $kid->id }}" name="kid_id">
                  @csrf
                    <div class="row">
                     <div class="col-6">
                       
                        <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('المبلغ') }}</label>
                        @error('amount')
                        <span class="text-danger d-block mb-2">
                           {{ $message }}
                        </span>
                     @enderror  
                         <input type="text" class="form-control" name="amount">  
                        </div>
   
                        <div class="col-6">
                           <label for="" class="d-flex align-items-center fs-6 fw-bold ">{{ __('وصف') }}</label>
                           @error('description')
                              <span class="text-danger d-block mb-2">
                                 {{ $message }}
                              </span>
                           @enderror
                           <textarea name="description" class="form-control" id="" rows="4"></textarea>
                        </div>
                    </div>
                     <div class="col-2 offset-sm-5">

                        <button class="btn btn-primary mt-15 mb-15 mx-auto w-100 d-block" type="submit">{{ __('تقديم') }}</button>
                     </div>
                  </form>
             </div>
      </div>
   </div>
</div>
@endsection