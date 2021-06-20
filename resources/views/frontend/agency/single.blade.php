@php
$devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
@endphp

@if ($devicecheck == 1)
    @include('frontend.agency.mobile.single')
@else
    @include('frontend.agency.web.single')
@endif
