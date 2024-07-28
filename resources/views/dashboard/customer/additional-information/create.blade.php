@extends('layouts.dashboard')


@section('content')

<div>
    <div class="col-lg-12">
       <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper" data-kt-stepper="true">
          <!--begin::Aside-->
          <div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
             <!--begin::Wrapper-->
             <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                <!--begin::Nav-->
                <div class="stepper-nav">
                   <!--begin::Step 1-->
                   <div class="stepper-item current" data-kt-stepper-element="nav">
                      <!--begin::Line-->
                      <div class="stepper-line w-40px"></div>
                      <!--end::Line-->
                      <!--begin::Icon-->
                      <div class="stepper-icon w-40px h-40px">
                         <i class="stepper-check fas fa-check"></i>
                         <span class="stepper-number">1</span>
                      </div>
                      <!--end::Icon-->
                      <!--begin::Label-->
                      <div class="stepper-label">
                         <h3 class="stepper-title">{{ __('بيانات التواصل') }}</h3>
                      </div>
                      <!--end::Label-->
                   </div>
                   <!--end::Step 1-->
                   <!--begin::Step 2-->
                   <div class="stepper-item" data-kt-stepper-element="nav">
                      <!--begin::Line-->
                      <div class="stepper-line w-40px"></div>
                      <!--end::Line-->
                      <!--begin::Icon-->
                      <div class="stepper-icon w-40px h-40px">
                         <i class="stepper-check fas fa-check"></i>
                         <span class="stepper-number">2</span>
                      </div>
                      <!--end::Icon-->
                      <!--begin::Label-->
                      <div class="stepper-label">
                         <h3 class="stepper-title">{{ __('عنوانك') }}</h3>
                      </div>
                      <!--end::Label-->
                   </div>
                   <!--end::Step 2-->
                   <!--begin::Step 3-->
                   <div class="stepper-item" data-kt-stepper-element="nav">
                      <!--begin::Line-->
                      <div class="stepper-line w-40px"></div>
                      <!--end::Line-->
                      <!--begin::Icon-->
                      <div class="stepper-icon w-40px h-40px">
                         <i class="stepper-check fas fa-check"></i>
                         <span class="stepper-number">3</span>
                      </div>
                      <!--end::Icon-->
                      <!--begin::Label-->
                      <div class="stepper-label">
                         <h3 class="stepper-title">{{ __('بيانات البنك') }}</h3>
                      </div>
                      <!--end::Label-->
                   </div>
                   <!--end::Step 3-->
               
                   <!--end::Step 5-->
                </div>
                <!--end::Nav-->
             </div>
             <!--end::Wrapper-->
          </div>
          <!--begin::Aside-->
          <!--begin::Content-->
          <div class="card d-flex flex-row-fluid flex-center">
             <!--begin::Form-->
             <form action="{{ route('additional-information.store') }}" method="POST">
                @csrf
             <div class="card-body py-20 w-100 w-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework" >
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                   <!--begin::Wrapper-->
                   <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-10 pb-lg-15">
                         <!--begin::Title-->
                         <h2 class="fw-bolder d-flex align-items-center text-dark">{{ __('بيانات التواصل') }}
                            {{-- <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="هذه النافذه لتعبئة البيانات الاساسية للكورس" aria-label="هذه النافذه لتعبئة البيانات الاساسية للكورس"></i> --}}
                         </h2>
                      </div>
                      <!--end::Heading-->
                      <!--begin::Input group-->
                      <div class="fv-row fv-plugins-icon-container">
                         <!--begin::Row-->
                         <div class="row">
                            <div class="col-xl-10">
                                
                               <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                  <!--begin::Label-->
                                  <label class="d-flex align-items-center fs-6 fw-bold ">
                                  <span class="required">{{ __('رقم الهاتف المنزلي') }}</span>
                                  </label>
                                  <input type="text" class="form-control"
                                     name="home_phone_number">
                                     @error('home_phone_number')
                                       <div class="fv-plugins-message-container invalid-feedback">
                                           {{ $message }}
                                       </div>
                                      @enderror
                               </div>
                               <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                  <!--begin::Label-->
                                  <label class="d-flex align-items-center fs-6 fw-bold ">
                                  <span class="required">{{ __('رقم الجوال') }}</span>
                                  </label>
                                  <input type="mobile_number" class="form-control" name="mobile_number"
                                     >
                                     @error('mobile_number')
                                     <div class="fv-plugins-message-container invalid-feedback">
                                         {{ $message }}
                                     </div>
                                    @enderror
                               </div>
    
     
                               <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                  <!--begin::Label-->
                                  <label class="d-flex align-items-center fs-6 fw-bold ">
                                  <span class="required">{{ __('البريد الالكتروني') }}</span>
                                  </label>
                                  <input type="email" class="form-control"
                                    name="email">
                                    @error('email')
                                    <div class="fv-plugins-message-container invalid-feedback">
                                        {{ $message }}
                                    </div>
                                   @enderror
                               </div>
                              
                            </div>
                         </div>
                         <!--end::Row-->
                      </div>
                      <!--end::Input group-->
                   </div>
                   <!--end::Wrapper-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div data-kt-stepper-element="content">
                   <!--begin::Wrapper-->
                   <div class="w-100">
                    
                      <div class="pb-10 pb-lg-15">
                        
                         <div class="row">
                            <div class="col-lg-4">
                               <h2 class="fw-bolder text-dark">{{ __('عنوانك') }}</h2>
                            </div>
                           
                         </div>
                      </div>
                   
                        
                       
                            <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold ">
                                <span class="required">{{ __('أسم الجهة') }}</span>
                                </label>
                                <input type="text" class="form-control"
                                  name="company_name">
                                  @error('company_name')
                                  <div class="fv-plugins-message-container invalid-feedback">
                                      {{ $message }}
                                  </div>
                                 @enderror
                             </div>

                             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold ">
                                <span class="required">{{ __('هاتف العمل') }}</span>
                                </label>
                                <input type="text" class="form-control"
                                  name="phone_work">
                                  @error('phone_work')
                                  <div class="fv-plugins-message-container invalid-feedback">
                                      {{ $message }}
                                  </div>
                                 @enderror
                             </div>


                             <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold ">
                                <span class="required">{{ __('المسمى الوظيفي') }}</span>
                                </label>
                                <input type="text" class="form-control"
                                  name="job_title">
                                  @error('job_title')
                                  <div class="fv-plugins-message-container invalid-feedback">
                                      {{ $message }}
                                  </div>
                                 @enderror
                             </div>
                      
    
                        
                      <!--end::Input group-->
                   </div>
                   <!--end::Wrapper-->
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">
                       <!--begin::Heading-->
                       <div class="pb-10 pb-lg-15">
                          <!--begin::Title-->
                          <h2 class="fw-bolder text-dark">{{ __('بيانات البنك') }}</h2>
                       </div>
                       <div class="mb-0 fv-row fv-plugins-icon-container">
                          <div class="fv-row mb-10 fv-plugins-icon-container">
                             <!--begin::Label-->
                             <label class="form-label required">{{ __('أسم البنك') }}</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <input type="text" class="form-control"
                             name="bank_name" />
                          
                             <!--end::Input-->
                             @error('bank_name')
                             <div class="fv-plugins-message-container invalid-feedback">
                                 {{ $message }}
                             </div>
                            @enderror
                             
                          </div>

                          <div class="fv-row mb-10 fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="form-label required">{{ __('رقم الأيبان') }}</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control"
                            name="iban" />
                         
                            <!--end::Input-->
                            @error('iban')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                           @enderror
                            
                         </div>
                       </div>
                       
                       <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                 </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
               
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div data-kt-stepper-element="content">
                   <!--begin::Wrapper-->
                   <div class="w-100">
                      <!--begin::Heading-->
                      <div class="pb-8 pb-lg-10">
                         <!--begin::Title-->
                         <h2 class="fw-bolder text-dark">Your Are Done!</h2>
                         <!--end::Title-->
                         <!--begin::Notice-->
                         <div class="text-muted fw-bold fs-6">If you need more info, please
                            <a href="../../demo1/dist/authentication/sign-in/basic.html" class="link-primary fw-bolder">Sign In</a>.
                         </div>
                         <!--end::Notice-->
                      </div>
                      <!--end::Heading-->
                      <!--begin::Body-->
                      <div class="mb-0">
                         <!--begin::Text-->
                         <div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great &amp; amazing audience.</div>
                         <!--end::Text-->
                         <!--begin::Alert-->
                         <!--begin::Notice-->
                         <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                  <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                  <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                               </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                               <!--begin::Content-->
                               <div class="fw-bold">
                                  <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                                  <div class="fs-6 text-gray-700">To start using great tools, please, please
                                     <a href="#" class="fw-bolder">Create Team Platform</a>
                                  </div>
                               </div>
                               <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                         </div>
                         <!--end::Notice-->
                         <!--end::Alert-->
                      </div>
                      <!--end::Body-->
                   </div>
                   <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-10">
                   <!--begin::Wrapper-->
                   <div class="mr-2">
                      <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                         <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                         <span class="svg-icon svg-icon-4 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                               <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"></rect>
                               <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor"></path>
                            </svg>
                         </span>
                         <!--end::Svg Icon-->رجوع
                      </button>
                   </div>
                   <!--end::Wrapper-->
                   <!--begin::Wrapper-->
                   <div>
                      <button  type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" @click="createCourse">
                         <span class="indicator-label">
                            حفظ
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-3 ms-2 me-0">
                               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                  <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                                  <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                               </svg>
                            </span>
                            <!--end::Svg Icon-->
                         </span>
                         <span class="indicator-progress">Please wait...
                         <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      </button>
                      <loader :loading="load"></loader>
                      <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                         التالي
                         <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                         <span class="svg-icon svg-icon-4 ms-1 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                               <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                               <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                            </svg>
                         </span>
                         <!--end::Svg Icon-->
                      </button>
                   </div>
                   <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
                <div></div>
                <div></div>
                <div></div>
                <div></div>
             </div>
            </form>
             <!--end::Form-->
          </div>
          <!--end::Content-->
       </div>
  
    
       </div>

</div>

@endsection