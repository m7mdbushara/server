@extends('layouts.dashboard')

@section('content')


<div class="col-xl-12">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{ __('أولياء الامور') }}</span>
                
            </h3>
          
           
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
                            
                            <th class="">{{ __('أسم ولي الامر') }}</th>
                            <th class="">{{ __('الجنسية') }}</th>
                            <th class="">{{ __('النوع') }}</th>
                            <th class="">{{ __('رقم الهوية') }}</th>
                            <th class="">{{ __('تاريخ أنتهاء الهوية') }}</th>
                            <th>{{ __('التفاصيل') }}</th>
                        </tr>
                    </thead>
               
                    <tbody> 

                        @forelse ($parents as $key => $parent) 
                        <tr>
                           
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $parent->parent_name }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ __($parent->nationality) }}</span>
                            </td>
                            
                           
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ __($parent->gender) }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $parent->id_number }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $parent->id_expiration_date }}</span>
                            </td>
                            
                            <td>
                                {{-- {{ $parent->id }} --}}
                                <a href="{{ route('admin.parents.details',$parent->id) }}" class="btn btn-success">{{ __('عرض') }}</a>
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