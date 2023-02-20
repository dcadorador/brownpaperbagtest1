@extends('layouts.guest')

@section('content')
    <login/>
@endsection

@push('scripts')
    @vite('resources/js/pages/login/login.js')
@endpush
