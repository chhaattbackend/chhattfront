@php
$devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
@endphp

@if ($devicecheck == 1)
@include('frontend.construction.product.mob.searchproductlist')
@else
@include('frontend.construction.product.web.searchproductlist')
@endif