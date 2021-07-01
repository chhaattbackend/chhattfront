@php
$devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
@endphp

@if ($devicecheck == 1)
@include('frontend.construction.home.mobile.index')
@else
@include('frontend.construction.home.web.index')
@endif
