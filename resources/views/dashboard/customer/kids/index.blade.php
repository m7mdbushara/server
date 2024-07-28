@extends('layouts.dashboard')


@section('content')

<div class="col-xl-12">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header--> 
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{ __('الأبناء') }}</span>
                
            </h3>
          
           <a href="{{ route('kids.create') }}" class="btn btn-success">{{ __('أضافة') }}</a>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="kt_datatable_example_5">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted">
                            
                            <th class="">{{ __('أسم اﻷبن') }}</th>
                            <th class="">{{ __('رقم الهوية') }}</th>
                            <th class="">{{ __('تاريخ الميلاد') }}</th>
                            <th class="">{{ __('أسم المدرسة') }}</th>
                            <th class="">{{ __('المستوى') }}</th>
                            <th>{{ __('تقديم طلب') }}</th>
                        </tr>
                    </thead>
               
                 
                    <tbody>

                        @forelse ($parent->kids as $key => $kid) 
                        <tr>
                           
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $kid->name }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $kid->id_number }}</span>
                            </td>
                            
                           
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $kid->birth_date }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ __($kid->school_name) }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ __($kid->level) }}</span>
                            </td>
                            
                            <td>
                                <a class="btn btn-dark" href="{{ route('kids.apply',$kid->id) }}">{{ __('تقديم') }}</a>
                            </td>
                            
                        </tr>
                        @empty
                        <tr><td colspan="4">{{ __('لاتوجد بيانات') }}</td></tr>
                        @endforelse
                        

                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
</div>



@endsection