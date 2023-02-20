@extends('layouts.guest')

@section('content')
    <register/>
@endsection

@push('scripts')
    @vite('resources/js/pages/registration/registration.js')
@endpush
