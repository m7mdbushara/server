@extends('layouts.dashboard')

@section('content')

<div class="card-body p-lg-20">
    <!--begin::Layout-->
    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Content-->
        <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
            <!--begin::Invoice 2 content-->
            <div class="mt-n1">
                <!--begin::Top-->
                <div class="d-flex flex-stack pb-10">
                    <!--begin::Logo-->
                    <a href="#">
                        
                    </a>
                    <!--end::Logo-->
                    <!--begin::Action-->
                    <a href="{{ route('admin.finance-requests.get-accepted') }}" class="btn btn-sm btn-success">رجوع</a>
                    <!--end::Action-->
                </div>
                <!--end::Top-->
                <!--begin::Wrapper-->
                <div class="m-0">
                    <!--begin::Label-->
                    <div class="fw-bolder fs-3 text-gray-800 mb-8">رقم الفاتورة #00{{ $financeRequest->invoice->id }}</div>
                    <!--end::Label-->
                    <!--begin::Row-->
                    <div class="row g-5 mb-11">
                        <!--end::Col-->
                        <div class="col-sm-6">
                            <!--end::Label-->
                            <div class="fw-bold fs-7 text-gray-600 mb-1">تاريخ الاصدار:</div>
                            <!--end::Label-->
                            <!--end::Col-->
                            <div class="fw-bolder fs-6 text-gray-800">{{ $financeRequest->invoice->created_at }}</div>
                            <!--end::Col-->
                        </div>
                        <!--end::Col-->
                        <!--end::Col-->
                        <div class="col-sm-6">
                            <!--end::Label-->
                            <div class="fw-bold fs-7 text-gray-600 mb-1">تاريخ الاستحقاق :</div>
                            <!--end::Label-->
                            <!--end::Info-->
                            <div class="fw-bolder fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                <span class="pe-2">{{ $financeRequest->invoice->invoiceLines()->first()->date }}</span>
                                
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 mb-12">
                        <!--end::Col-->
                        <div class="col-sm-6">
                            <!--end::Label-->
                            <div class="fw-bold fs-7 text-gray-600 mb-1">عدد الاشهر</div>
                            <!--end::Label-->
                            <!--end::Text-->
                            <div class="fw-bolder fs-6 text-gray-800">{{ $financeRequest->invoice->number_of_months }} أشهر</div>
                            <!--end::Text-->
                            <!--end::Description-->
                           
                            <!--end::Description-->
                        </div>
                        <!--end::Col-->
                        <!--end::Col-->
                        <div class="col-sm-6">
                            <!--end::Label-->
                            <div class="fw-bold fs-7 text-gray-600 mb-1">عدد الدفعات</div>
                            <!--end::Label-->
                            <!--end::Text-->
                            <div class="fw-bolder fs-6 text-gray-800">{{ $financeRequest->invoice->invoiceLines()->count() }} دفعات</div>
                            <!--end::Text-->
                          
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Content-->
                    <div class="flex-grow-1">
                        <!--begin::Table-->
                        <div class="table-responsive border-bottom mb-9">
                            <table class="table mb-3">
                                <thead>
                                    <tr class="border-bottom fs-6 fw-bolder text-muted">
                                        <th class="min-w-175px pb-2">تاريخ الاستحقاق</th>
                                        <th class="min-w-70px text-end pb-2">المبلغ المستحق</th>
                                        <th class="min-w-80px text-end pb-2">حالة الدفع</th>
                                        <th class="min-w-100px text-end pb-2">تاريخ الدفع</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($financeRequest->invoice->invoiceLines as $line)
                                        
                                    <tr class="fw-bolder text-gray-700 fs-5 text-end">
                                        <td class="d-flex align-items-center pt-6">
                                            {{ $line->date }}</td>
                                            <td class="pt-6">${{ $line->amount }}</td>
                                            <td class="pt-6">{{ $line->status }}</td>
                                            <td class="pt-6 text-dark fw-boldest">3200.00</td>
                                        </tr>
                                     @endforeach
                                    
                                   
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table-->
                       
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Invoice 2 content-->
        </div>
        <!--end::Content-->
        
    </div>
    <!--end::Layout-->
</div>

@endsection