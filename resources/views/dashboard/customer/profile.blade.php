@extends('layouts.dashboard')




@section('content')

<div class="col-xl-12">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ __('المعلومات الاساسية') }}</h2>
                </div>
                @if(!$parent->contactInformation()->exists())
                <a href="{{ route('additional-information.create') }}" class="btn-back btn btn-success mt-5 ">{{ __('إستكمال البيانات') }}</a>
                @else
                <a href="{{ route('additional-information.edit') }}" class="btn-back btn btn-success mt-5 ">{{ __('تعديل البيانات') }}</a>
                @endif
            </div>
            <div class="card-body pt-1">
                <div class="d-flex flex-column text-gray-600">
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span>{{ __('اﻷسم') }}  :  {{ $parent->parent_name }}</div>
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span> {{ __('اسم مستخدم') }} : {{ $parent->username }}</div>
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span>{{ __('الجنسية') }}  :  {{ __($parent->nationality) }}</div>
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span>{{ __('النوع') }} : {{ $parent->gender }}</div>
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span>{{ __('رقم الهوية') }} : {{ $parent->id_number }}</div>
                    <div class="d-flex align-items-center py-2">
                        <span class="bullet bg-primary me-3"></span> {{ __('تاريخ أنتهاء الهوية') }} : {{ $parent->id_expiration_date }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ __('معلومات التواصل') }}</h2>
                </div>
            </div>
            <div class="card-body pt-1">
                <div class="d-flex flex-column text-gray-600">
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span>{{ __('الهاتف المنزلي') }}  :  {{ $parent->contactInformation?->home_phone_numbe }}</div>
                    <div class="d-flex align-items-center py-2">
                        <span class="bullet bg-primary me-3"></span>   {{ __('رقم الجوال') }} :  {{ $parent->contactInformation?->mobile_number }}</div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>  {{ __('البريد الالكتروني') }} :  {{ $parent->contactInformation?->email }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ __('عنوانك') }}</h2>
                </div>
            </div>
            <div class="card-body pt-1">
                <div class="d-flex flex-column text-gray-600">
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span> {{ __('أسم الجهة') }} :  {{ $parent->parentAddress?->company_name }}</div>
                    <div class="d-flex align-items-center py-2">
                        <span class="bullet bg-primary me-3"></span>   {{ __('المسمى الوظيفي') }} :  {{ $parent->parentAddress?->job_title }}</div>

                        <div class="d-flex align-items-center py-2">
                            <span class="bullet bg-primary me-3"></span>  {{ __('هاتف العمل') }} :  {{ $parent->parentAddress?->phone_work }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ __('بيانات البنك') }}</h2>
                </div>
            </div>
            <div class="card-body pt-1">
                <div class="d-flex flex-column text-gray-600">
                    <div class="d-flex align-items-center py-2">
                    <span class="bullet bg-primary me-3"></span> {{ __('أسم البنك') }} :  {{ __($parent->bankInformation?->name) }}</div>
                    <div class="d-flex align-items-center py-2">
                        <span class="bullet bg-primary me-3"></span>  {{ __('رقم الأيبان') }} :  {{ $parent->bankInformation?->iban }}</div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-12">
        <div class="card card-flush h-md-100">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{ __('الأبناء') }}</h2>
                </div>
            </div>
            <div class="card-body pt-1">
                <div class="d-flex flex-column text-gray-600">
                    <table>
                        <thead>
                            <tr>
                                <th>{{ __('أسم اﻷبن') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tbody>
                                @foreach ($parent->kids as $kid )
                                <tr>
                                    <td class="mb-1">   {{ $kid->name }} </td>
                                    <td><a  href="{{ route('kids.apply',$kid->id) }}" class="btn btn-primary btn-sm">{{ __('تقديم') }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection