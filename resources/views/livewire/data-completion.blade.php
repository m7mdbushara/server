

<div>

   <form class="form">
<div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
      <h3 class="card-title">{{ __('بيانات التواصل') }}</h3>
      <div class="card-toolbar">
         <div class="example-tools justify-content-center">
            <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
            <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
         </div>
      </div>
   </div>
   <!--begin::Form-->

      <div class="card-body">
         <div class="form-group row">
            <div class="col-lg-6">
               <label>{{ __('الهاتف المنزلي') }}</label>
               @error('home_phone_number')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
               @enderror
               <input type="text" class="form-control"  wire:model="home_phone_number">
              
            </div>
            <div class="col-lg-6">
               <label>{{ __('رقم الجوال') }}</label>
               @error('mobile_number')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
               @enderror
               <input type="phone" class="form-control" wire:model="mobile_number" >

              
            </div>
         </div>
         <div class="form-group row">
            <div class="col-lg-6">
               <label>{{ __('البريد الالكتروني') }}</label>
              
                  @error('email')
                  <span class="text-danger d-block mb-2" style="font-size:14px;">
                     {{ $message }}
                  </span>
                  @enderror
                  <input type="email" class="form-control" wire:model="email">
                  
            </div>

            <div class="col-lg-6">
               <label>{{ __('تاريخ أنتهاء الهوية') }}</label>
              
                  @error('id_expiration_date')
                  <span class="text-danger d-block mb-2" style="font-size:14px;">
                     {{ $message }}
                  </span>
                  @enderror
                  <input type="date" class="form-control" wire:model="id_expiration_date">
                  
            </div>
            
         </div>
         
       
      </div>

      
      
  
   <!--end::Form-->
</div>

<div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
      <h3 class="card-title">{{ __('عنوانك') }}</h3>
      <div class="card-toolbar">
         <div class="example-tools justify-content-center">
            <span class="example-toggle" data-toggle="tooltip" title="" data-original-title="View code"></span>
            <span class="example-copy" data-toggle="tooltip" title="" data-original-title="Copy code"></span>
         </div>
      </div>
   </div>
   <!--begin::Form-->
 
      <div class="card-body">
         <div class="form-group row">
            <div class="col-lg-6">
               <label>{{ __('أسم الجهة') }}</label>
               @error('company_name')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
               @enderror
               <input type="text" class="form-control" wire:model="company_name">

              
            </div>
            <div class="col-lg-6">
               <label>{{ __('هاتف العمل') }}</label>
               @error('phone_work')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
               @enderror
               <input type="phone_work" class="form-control" wire:model="phone_work" >
              
            </div>
         </div>
         <div class="form-group row">
            <div class="col-lg-6">
               <label>{{ __('المسمى الوظيفي') }}</label>
               @error('job_title')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
               @enderror
               <div class="input-group">
                  <input type="text" class="form-control" wire:model="job_title" >
            
               </div>
            </div>
            
         </div>
         
       
      </div>

      
      
  
   <!--end::Form-->
</div>

<div class="card card-custom gutter-b example example-compact">
   <div class="card-header">
      <h3 class="card-title">{{ __('بيانات البنك') }}</h3>
      
   </div>
   <!--begin::Form-->
  
      <div class="card-body">
         <div class="form-group row">
            <div class="col-lg-6">
               <label>{{ __('أسم البنك') }}</label>
             
               @error('bank_name')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
               @enderror
                <select name="" id="" class="form-control" wire:model="bank_name">
                  <option value=""></option>
                   <option value="الراجحي">{{ __('الراجحي') }}</option>
                   <option value="البلاد">{{ __('البلاد') }}</option>
                   <option value="الأنماء">{{ __('الأنماء') }}</option>
                   <option value="اﻷهلي">{{ __('اﻷهلي') }}</option>
                   <option value="الرياض">{{ __('الرياض') }}</option>
                </select>
              
            </div>
            <div class="col-lg-6">
               <label>{{ __('رقم الأيبان') }}</label>
               @error('iban')
               <span class="text-danger d-block mb-2" style="font-size:14px;">
                  {{ $message }}
               </span>
              @enderror
               <input  type="text" class="form-control" wire:model="iban" style="direction: ltr" placeholder="SA12**************************">
              
              
            </div>
         </div>
        
         
       
      </div>

      
      
      <!--end::Form-->
   </div>
   <button wire:click.prevent="store()" class="btn btn-success mt-5">{{ __('حفظ') }}</button>
</form>

</div>