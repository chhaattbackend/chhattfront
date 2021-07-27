@php
$devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
@endphp

@if ($devicecheck == 1)
@include('frontend.construction.store.mob.single')
@else
@include('frontend.construction.store.web.single')
@endif
