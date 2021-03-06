<header id="sctop">
    <div class="main_div" id="head1">
        <div class="s_div navbarContainer">
            <div class="innerContainer">
                <div class="logo" id="lgo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/logow.png') }}" alt="home" />
                    </a>
                </div>
                <div class="tabss">
                    {{-- @if (Route::current()->getName() == '')
                    @endif --}}
                    <p></p>
                    <ul>
                        {{-- <a class="text-decoration-none" href="{{ route('home') }}">
                            <li id="home" style="color: #fff" @if (Route::current()->getName() == 'home') class="activeNav" @endif class="lif">
                                <span>Home</span>
                            </li>
                        </a> --}}
                        <a class="text-decoration-none" href="{{ route('property') }}">
                            <li id="property" style="color: #fff" @if (Route::current()->getName() == 'property' || Route::current()->getName() == 'explorer.search' || Route::current()->getName() == 'property.search' || Route::current()->getName() == 'single.property'||Route::current()->getName() == 'more.property'||Route::current()->getName() == 'popular.property'||Route::current()->getName() =='description' ) class="activeNav" @endif class="lis">
                                <span>Properties</span>
                            </li>
                        </a>
                        <a class="text-decoration-none" href="{{ route('buy.property') }}">
                            <li id="home" style="color: #fff" @if (Str::contains(Route::current()->getName(), 'buy.property')|| Str::contains(Route::current()->getName(), 'invest')||Str::contains(Route::current()->getName(), 'single.project')) class="activeNav" @endif class="lis">
                                <span>Projects</span>
                            </li>
                        </a>

                        <a class="text-decoration-none" href="{{ route('agency') }}">

                            <li id="agencies" style="color: #fff" @if (Route::current()->getName() == 'agency' || Route::current()->getName() == 'single.agency') class="activeNav" @endif class="lis">
                                <span>Agencies</span>
                            </li>
                        </a>

                        <a class="text-decoration-none" href="{{ route('maps') }}">
                            <li id="home" style="color: #fff" @if (Str::contains(Route::current()->getName(), 'maps')) class="activeNav" @endif class="lis">
                                <span>Maps</span>
                            </li>
                        </a>
                        <a class="text-decoration-none" href="{{ route('contact') }}">
                            <li id="contact" style="color: #fff" @if (Route::current()->getName() == 'contact') class="activeNav" @endif class="lis">
                                <span>Contact Us</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('headercontent')
    <div style="position: absolute; top: 1%; left: 50%; transform: translateX(-50%); width: 8%; height: auto;">
        <img style="width: 100%;"
            src="{{ asset('assets/Bismillah-3D-White-Wallpaper-340x220-removebg-preview.png') }}" alt="">
    </div>

    <script>
        const homebtn = document.getElementById("home");
        const propertybtn = document.getElementById("property");
        const agenciesbtn = document.getElementById("agencies");
        const contactbtn = document.getElementById("contact");

        // const Home = () => {
        //     homebtn.classList.add("lif");
        //     propertybtn.classList.remove("lif");
        //     agenciesbtn.classList.remove("lif");
        //     contactbtn.classList.remove("lif");
        //     window.location='{{ route('home') }}';
        // };


        // const Property = () => {
        //     // propertybtn.classList.add("lif");
        //     // homebtn.classList.remove("lif");
        //     // agenciesbtn.classList.remove("lif");
        //     // contactbtn.classList.remove("lif");
        //     window.location='{{ route('property') }}';
        // };
        // const commercial = () => {
        //     getListdata("commercial");
        //     btn3.classList.add("active_bestProperties");
        //     btn1.classList.remove("active_bestProperties");
        //     btn2.classList.remove("active_bestProperties");
        //     btn4.classList.remove("active_bestProperties");
        // };
        // const industrial = () => {
        //     getListdata("industrial");
        //     btn4.classList.add("active_bestProperties");
        //     btn1.classList.remove("active_bestProperties");
        //     btn2.classList.remove("active_bestProperties");
        //     btn3.classList.remove("active_bestProperties");
        // };
    </script>
</header>
