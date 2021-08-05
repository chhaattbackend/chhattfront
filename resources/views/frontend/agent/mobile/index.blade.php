@extends('layouts.mobile.master')

@section('style')
    <title>Browse the Best Real Estate Agencies in Karachi Pakistan | Chhatt.com</title>
    <meta name="title" content="Browse the Best Real Estate Agencies in Karachi Pakistan | Chhatt.com">
    <meta name="description"
        content="Get in touch with the best real estate agencies in Karachi. And Choose yourbest properties like houses, flats, villas and commercial properties at Chhatt.com">
    <link rel="stylesheet" type="text/css" href="{{ asset('mobile/agent/single.css') }}" />

    <style>
        li.page-item {
            display: none;
        }
        .page-item:first-child,
        .page-item:nth-child(2),
        .page-item:nth-last-child(2),
        .page-item:last-child,
        .page-item.active,
        .page-item.disabled {
            display: block;
        }
        }
    </style>
@endsection

@section('content')
    <meta hidden name="csrf-token" content="{{ csrf_token() }}" />

    @include('functions.convert_rupee')

    <!-- BUTTONS START -->
    <div class="brb_buttons">
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-12 mt-2" >
                    <input autocomplete="off" type="text" id="keyword" name="keyword" class="form-control p-2 "
                        placeholder="Search Agents">
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTONS END -->

    <!-- PROPERTIES LIST START -->
    <div class="propertyListMobile">

        <div id="list">
            @include('frontend.agent.mobile.agentlist')
        </div>
    </div>

@endsection

@section('personalscripts')

    <script>
        var members;
        $('#keyword').on('keyup', function() {
            var value = $(this).val();
            var members = @json($members);
            // console.log(members.data)
            $('#list').addClass('animate__animated animate__fadeOut');
            // console.log(value);
            ajaxSearch(value,members)
        });

        function ajaxSearch(value, members,page) {
            // console.log(members);
            $.ajax({
                type: "POST",
                url: "agent/mobileajax" + "?page=" + page,
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    keyword: value,
                    members: members,
                },
                success: function(responese) {
                    // console.log(responese.pagination)
                    $('#list').removeClass('animate__animated animate__fadeOut');

                    // console.log(responese.pagination)
                    $('#list').html(responese.data);
                    $('#list').addClass('animate__animated animate__fadeIn');
                    $('#wow').html(responese.pagination);
                    $('#total').html('Showing ' + responese.total + ' Results');
                },
            });
        }
        //   {{-- ajaxSearch --}}
        //   {{-- ajaxPagination --}}
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            value = $('#keyword').val();
            var href = $(this).attr('href');
            var page = $(this).attr('href').split('page=')[1];
            $('#list').addClass('animate__animated animate__fadeOut');
            ajaxSearch(value, members ,page)
        });
    </script>
@endsection

