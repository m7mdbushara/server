@extends('layouts.dashboard')


@section('content')

<div class="col-xl-12">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{ __('الطلبات المقدمة') }}</span>
                
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
                            
                            <th class="">{{ __('أسم الأب') }}</th>
                            <th class="">{{ __('أسم اﻷبن') }}</th>
                            <th>{{ __('التاريخ') }}</th>
                            <th>{{ __('المبلغ') }}</th>
                            <th class="">{{ __('الحالة') }}</th>
                            <th>{{ __('التفاصيل') }}</th>
                            <th class="">{{ __('التحكم') }}</th>
                        </tr>
                    </thead>
               
                    <tbody>

                       
                       
                        @forelse ($financeRequests as  $financeRequest) 
                        <tr>
                           
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $financeRequest->parentChild->parent_name }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $financeRequest->kid->name }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $financeRequest->getFormtedDate() }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $financeRequest->amount }}</span>
                            </td>
                            <td>
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">{{ $financeRequest->status }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.finance-requests.financeRequestDetails',$financeRequest->id) }}" class="btn btn-success">{{ __('عرض') }}</a>
                            </td>
                            <td class="">
                                <a href="#" class="d-block btn btn-block btn-light btn-active-light-danger show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" style="position: relative !important">
                                    {{ __('التحكم') }}
                              
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                               </a>
                            
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true" style="z-index: 105; position: fixed; inset: auto 0px 0px auto; margin: 0px; transform: translate(-219px, -122px);" data-popper-placement="top-end">
                                    
                                    <div class="menu-item px-3">
                                        <a href="{{ route('admin.finance-requests.accepted',$financeRequest->id) }}" class="menu-link px-3">{{ __('قبول') }}</a>
                                    </div>
                                  
                                    <div class="menu-item px-3">
                                        <a href="{{ route('admin.finance-requests.rejected',$financeRequest->id) }}" class="menu-link px-3">{{ __('رفض') }}</a>
                                    </div>
                                   
                                </div>
                        
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