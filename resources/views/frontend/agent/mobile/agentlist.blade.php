 <!-- MOBILE -->
 <div id="mobile">
     <div class="container-fluid">

         <div id="bestProperty" class="propertylist mapCardContainer mt-4">
             <h5 class="text-end mb-0 fw-bold medium">Showing {{ $members->total() }} Results</h5>
             <br />
             <!--  property slider -->

             <!-- PROPERTY CARD START -->
             <div class="mapCardContainer">
                 <div class="container-fluid px-0 mb-5">
                     <div class="row">
                         @foreach ($members as $item)
                             @if ($item->user != null)

                                 <div class="col-6 mb-3">
                                     <!-- property card start -->
                                     <div class="propertyCard p-2">
                                         <a class="text-decoration-none position-relative" href="#">
                                             <div class="imageSection">
                                                 <img class="slideImg"
                                                 @if (@$item->user->thumbnail == null)
                                                 src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png"
                                                 @else
                                                src="https://chhatt.s3.ap-south-1.amazonaws.com/users/{!! $item->user->thumbnail !!}" @endif
                                                     alt="" />
                                             </div>
                                             <div class="text-dark paraContainer mt-3">
                                                 <div class="mt-1">
                                                     <h6 class="lightColor">{{ $item->user->name }}</h6>
                                                     <div class="name"></div>
                                                     <div class="mt-2 elips">
                                                         <strong class="mt-5">{{ $item->agency->name }}</strong>
                                                     </div>
                                                     <h6 class="mt-0 prop">
                                                         Total Properties:
                                                         <strong>
                                                             {{ count($item->user->properties) }}
                                                         </strong>
                                                     </h6>
                                                     {{-- <p>{{ $item->id }}</p> --}}
                                                     <div class="w-100 d-flex justify-content-center mt-1">
                                                         <a href="{{route('agent.single',['id'=>$item->id])}}">

                                                             <button class="cardBtn rounded-pill px-3 mt-1 border-0">
                                                                 Get in touch
                                                             </button>
                                                         </a>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <!-- property card end -->
                                 </div>
                             @endif

                         @endforeach

                         <!-- property card end -->
                     </div>

                 </div>
             </div>

         </div>
     </div>
     {{-- <div class="d-flex justify-content-center ">
        <nav aria-label="Page navigation example">
            {{ $members->links() }}
        </nav>
    </div> --}}

 </div>
 <!-- MOBILE -->
