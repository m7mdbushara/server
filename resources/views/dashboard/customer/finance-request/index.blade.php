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
                            
                            <th class="">{{ __('أسم اﻷبن') }}</th>
                            <th>{{ __('التاريخ') }}</th>
                            <th>{{ __('المبلغ') }}</th>
                            <th class="">{{ __('الحالة') }}</th>
                        </tr>
                    </thead>
               
                    <tbody>

                        @forelse ($parent->financeRequests as  $financeRequest) 
                        <tr>
                           
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
                                <span  class="text-dark fw-bolder text-hover-primary fs-6">
                                    @if($financeRequest->getStatus() == 'تم الموافقة')
                                    <span class="badge badge-success">{{ __($financeRequest->getStatus()) }}</span>
                                    @elseif ($financeRequest->getStatus() == 'مرفوض')
                                    <span class="badge badge-danger">{{ __($financeRequest->getStatus()) }}</span>
                                    @else
                                    <span class="badge badge-warning">{{ __($financeRequest->getStatus()) }}</span>
                                    @endif
                                </span>
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