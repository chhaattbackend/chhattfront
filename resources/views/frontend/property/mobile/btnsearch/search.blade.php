@extends('layouts.mobile.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('mobile/property/btnsearch.css') }}" />
@endsection

@section('content')
@include('frontend.property.mobile.btnsearch.ajax')
@endsection
