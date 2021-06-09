<header id="sctop">
        <div class="main_div" id="head1">
          <div class="s_div navbarContainer">
            <div class="innerContainer">
              <div class="logo" id="lgo">
                <img src="./assets/logow.png" alt="home" />
              </div>
              <div class="tabss">
                <ul>
                  <li onclick="window.location='{{ route('home') }}'" style="color: #fff" class="lif">
                    <span>HOME</span>
                  </li>
                  <li onclick="window.location='{{ route('property') }}'" style="color: #fff" class="lis">
                    <span>Property</span>
                  </li>

                  <li onclick="window.location='{{ route('agency') }}'" style="color: #fff" class="lis">
                    <span>Agencies</span>
                  </li>
                  <li onclick="window.location='{{ route('contact') }}'" style="color: #fff" class="lis">
                    <span>Contact Us</span>
                  </li>
                  <li onclick="window.location='{{ route('wanted') }}'" style="color: #fff" class="lit">
                    <span>Wanted</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @yield('headercontent')
      </header>
