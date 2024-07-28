

@extends('layouts.dashboard')

@section('content')

@livewire('update-data',['parent' => $parent])

@endsection

@section('style')
@livewireStyles
@endsection

@section('script')
@livewireScripts
@endsection