{{-- @php
$devicecheck = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));
@endphp

@if ($devicecheck == 1)
    @include('frontend.project.mobile.single')

@else
    @include('frontend.project.websingle')

@endif --}}

