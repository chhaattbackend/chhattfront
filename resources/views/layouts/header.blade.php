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
                    @if (Route::current()->getName() == '')
                    @endif
                    <p></p>
                    <ul>
                        <a class="text-decoration-none" href="{{ route('home') }}">
                            <li id="home" style="color: #fff" @if (Route::current()->getName() == 'home') class="activeNav" @endif class="lif">
                                <span>Home</span>
                            </li>
                        </a>
                        <a class="text-decoration-none" href="{{ route('property') }}">
                            <li id="property"  style="color: #fff" @if (Route::current()->getName() == 'property' || Route::current()->getName() == 'explorer.search' || Route::current()->getName() == 'property.search' || Route::current()->getName() == 'single.property') class="activeNav" @endif class="lis">
                                <span>Property</span>
                            </li>
                        </a>
                        <a class="text-decoration-none" href="{{ route('construction.home') }}">
                            <li id="home"  style="color: #fff"
                                @if (Str::contains(Route::current()->getName(), 'construction')) class="activeNav" @endif class="lis">
                                <span>Construction</span>
                            </li>
                        </a>

                        <a class="text-decoration-none" href="{{ route('agency') }}">

                            <li id="agencies"  style="color: #fff" @if (Route::current()->getName() == 'agency' || Route::current()->getName() == 'single.agency') class="activeNav" @endif class="lis">
                                <span>Agencies</span>
                            </li>
                        </a>

                        <a class="text-decoration-none" href="{{ route('contact') }}">
                            <li id="contact"  style="color: #fff" @if (Route::current()->getName() == 'contact') class="activeNav" @endif class="lis">
                                <span>Contact Us</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('headercontent')

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
