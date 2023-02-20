@extends('layouts.app')

@section('content')
    <dashboard/>
@endsection

@push('scripts')
    @vite('resources/js/pages/dashboard/dashboard.js')
@endpush
