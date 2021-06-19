<header id="sctop">
    <div class="main_div" id="head1">
        <div class="s_div navbarContainer">
            <div class="innerContainer">
                <div class="logo" id="lgo">
                    <img src="{{ asset('assets/logow.png') }}" alt="home" />
                </div>
                <div class="tabss">
                    <ul>
                        <li id="home" onclick="window.location='{{ route('home') }}'" style="color: #fff" class="lif">
                            <span>Home</span>
                        </li>
                        <li id="property" onclick="window.location='{{ route('property') }}'" style="color: #fff" class="lis">
                            <span>Property</span>
                        </li>

                        <li id="agencies" onclick="window.location='{{ route('agency') }}'" style="color: #fff" class="lis">
                            <span>Agencies</span>
                        </li>
                        <li id="contact" onclick="window.location='{{ route('contact') }}'" style="color: #fff" class="lis">
                            <span>Contact Us</span>
                        </li>
                        {{-- <li id="home" onclick="window.location='{{ route('wanted') }}'" style="color: #fff" class="lit">
                            <span>Wanted</span>
                        </li> --}}
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
