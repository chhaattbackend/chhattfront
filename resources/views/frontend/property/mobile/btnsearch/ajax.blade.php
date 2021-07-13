<form action="{{ route('property.search') }}">
    <div class="position-relative">
        <div class="search_container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Location </label>
                        <br />
                        <input class="w-100" style="border: 1px solid rgb(252, 252, 252)" type="text"
                            placeholder="search" />
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Property Type </label>
                        <br />
                        <select class="w-100" name="property_type">
                            <option selected disabled value="">Property Type </option>

                            @foreach ($propertytype as $item)
                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> City </label>
                        <br />
                        <select class="w-100" name="city">
                            @foreach ($city as $item)
                                <option @if (@$inputcity_id == @$item->id) selected @endif value="{{ $item->name }}">
                                    {{ $item->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Area Type </label>
                        <br />
                        <select class="w-100" name="area_type">
                            <option selected disabled value="">Area Type </option>

                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Industrial">Industrial</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Beds </label>
                        <br />
                        <select class="w-100" name="bed">
                            <option selected disabled value="">Beds</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="+10">+10</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Baths </label>
                        <br />
                        <select class="w-100" name="bath">
                            <option selected disabled value="">Baths</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="+10">+10</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Min Price </label>
                        <br />
                        <select class="w-100" name="min_price">
                            <option selected disabled value="">Min Price </option>
                            <option value="500000">500,000</option>
                            <option value="1000000">1,000,000</option>
                            <option value="2000000">2,000,000</option>
                            <option value="3500000">3,500,000</option>
                            <option value="5000000">5,000,000</option>
                            <option value="6500000">6,500,000</option>
                            <option value="8000000">8,000,000</option>
                            <option value="10000000">10,000,000</option>
                            <option value="12500000">12,500,000</option>
                            <option value="15000000">15,000,000</option>
                            <option value="17500000">17,500,000</option>
                            <option value="20000000">20,000,000</option>
                            <option value="30000000">30,000,000</option>
                            <option value="40000000">40,000,000</option>
                            <option value="50000000">50,000,000</option>
                            <option value="75000000">75,000,000</option>
                            <option value="100000000">100,000,000</option>
                            <option value="250000000">250,000,000</option>
                            <option value="500000000">500,000,000</option>
                            <option value="1000000000">1,000,000,000</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Max Price </label>
                        <br />
                        <select class="w-100" name="max_price">
                            <option selected disabled value="">Min Price </option>
                            <option value="500000">500,000</option>
                            <option value="1000000">1,000,000</option>
                            <option value="2000000">2,000,000</option>
                            <option value="3500000">3,500,000</option>
                            <option value="5000000">5,000,000</option>
                            <option value="6500000">6,500,000</option>
                            <option value="8000000">8,000,000</option>
                            <option value="10000000">10,000,000</option>
                            <option value="12500000">12,500,000</option>
                            <option value="15000000">15,000,000</option>
                            <option value="17500000">17,500,000</option>
                            <option value="20000000">20,000,000</option>
                            <option value="30000000">30,000,000</option>
                            <option value="40000000">40,000,000</option>
                            <option value="50000000">50,000,000</option>
                            <option value="75000000">75,000,000</option>
                            <option value="100000000">100,000,000</option>
                            <option value="250000000">250,000,000</option>
                            <option value="500000000">500,000,000</option>
                            <option value="1000000000">1,000,000,000</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Area Min </label>
                        <br />
                        <select class="w-100" name="area_min">
                            <option selected disabled value="">Area Min </option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="3000">3000</option>
                            <option value="3500">3500</option>
                            <option value="4000">4000</option>
                        </select>
                    </div>
                    <div class="col-6 mt-3">
                        <label class="fw-bold mb-1" htmlFor="location"> Area Max </label>
                        <br />
                        <select class="w-100" name="area_max">
                            <option selected disabled value="">Area Max </option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="1500">1500</option>
                            <option value="2000">2000</option>
                            <option value="2500">2500</option>
                            <option value="3000">3000</option>
                            <option value="3500">3500</option>
                            <option value="4000">4000</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="searchBtnSec">
            <button type="submit"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                    </path>
                </svg>&nbsp;Search</button>
            <button type="reset"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12,16c1.671,0,3-1.331,3-3s-1.329-3-3-3s-3,1.331-3,3S10.329,16,12,16z"></path>
                    <path
                        d="M20.817,11.186c-0.12-0.583-0.297-1.151-0.525-1.688c-0.225-0.532-0.504-1.046-0.83-1.531 c-0.324-0.479-0.693-0.926-1.098-1.329c-0.404-0.406-0.853-0.776-1.332-1.101c-0.483-0.326-0.998-0.604-1.528-0.829 c-0.538-0.229-1.106-0.405-1.691-0.526c-0.6-0.123-1.219-0.182-1.838-0.18V2L8,5l3.975,3V6.002C12.459,6,12.943,6.046,13.41,6.142 c0.454,0.094,0.896,0.231,1.314,0.409c0.413,0.174,0.813,0.392,1.188,0.644c0.373,0.252,0.722,0.54,1.038,0.857 c0.315,0.314,0.604,0.663,0.854,1.035c0.254,0.376,0.471,0.776,0.646,1.191c0.178,0.417,0.314,0.859,0.408,1.311 C18.952,12.048,19,12.523,19,13s-0.048,0.952-0.142,1.41c-0.094,0.454-0.23,0.896-0.408,1.315 c-0.175,0.413-0.392,0.813-0.644,1.188c-0.253,0.373-0.542,0.722-0.858,1.039c-0.315,0.316-0.663,0.603-1.036,0.854 c-0.372,0.251-0.771,0.468-1.189,0.645c-0.417,0.177-0.858,0.314-1.311,0.408c-0.92,0.188-1.906,0.188-2.822,0 c-0.454-0.094-0.896-0.231-1.314-0.409c-0.416-0.176-0.815-0.393-1.189-0.645c-0.371-0.25-0.719-0.538-1.035-0.854 c-0.315-0.316-0.604-0.665-0.855-1.036c-0.254-0.376-0.471-0.776-0.646-1.19c-0.178-0.418-0.314-0.86-0.408-1.312 C5.048,13.952,5,13.477,5,13H3c0,0.611,0.062,1.221,0.183,1.814c0.12,0.582,0.297,1.15,0.525,1.689 c0.225,0.532,0.504,1.046,0.831,1.531c0.323,0.477,0.692,0.924,1.097,1.329c0.406,0.407,0.854,0.777,1.331,1.099 c0.479,0.325,0.994,0.604,1.529,0.83c0.538,0.229,1.106,0.405,1.691,0.526C10.779,21.938,11.389,22,12,22s1.221-0.062,1.814-0.183 c0.583-0.121,1.151-0.297,1.688-0.525c0.537-0.227,1.052-0.506,1.53-0.83c0.478-0.322,0.926-0.692,1.331-1.099 c0.405-0.405,0.774-0.853,1.1-1.332c0.325-0.483,0.604-0.998,0.829-1.528c0.229-0.54,0.405-1.108,0.525-1.692 C20.938,14.221,21,13.611,21,13S20.938,11.779,20.817,11.186z">
                    </path>
                </svg>&nbsp;Reset</button>
        </div>
    </div>
</form>
