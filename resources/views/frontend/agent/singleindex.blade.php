@php
$devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
@endphp

@if ($devicecheck == 1)
@include('frontend.agent.mobile.singlerealtor')
@else
@include('frontend.agent.web.singlerealtor')
@endif
