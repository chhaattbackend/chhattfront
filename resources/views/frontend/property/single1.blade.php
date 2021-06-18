<div class="maindiv">
    <div class="slider">
        <div class="mapImage">

            <!-- Add images to <div class="fotorama"></div> -->
            <div class="fotorama mt-5" data-nav="thumbs" data-width="100%" data-allowfullscreen="true">
                <!-- ↑ The same as data-ratio="4/3"
   or data-ratio="1.3333333333". -->
        @foreach ($propertyimage as $item)

        <a href=""><img src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/{{ @$item->name }}" width="130"
            height="96"></a>


            @endforeach
            </div>
            <!-- Add images to <div class="fotorama"></div> -->
        </div>

        <!-- OVERVIEW START -->
        <div class="overViewContainer">
            <h3>Overview</h3>
            <div class="overviewItems">
                <div>
                    <h5>Type</h5>
                    <h4>
                        {{@$properties->property_type}}
                    </h4>
                </div>
                <span></span>
                <div>
                    <h5>Price</h5>
                    <h4>
                        {{ convert_rupee(@$properties->price) }} </h4>
                </div>
                <span></span>
                <div>
                    <h5>Area</h5>
                    <h4>
                        {{@$properties->size}} {{@$properties->size_type}}
                    </h4>
                </div>
                <span></span>
                <div>
                    <h5>Purpose</h5>
                    <h4>
                        {{@$properties->property_for}}
                    </h4>
                </div>
                <span></span>
                <div>
                    <h5>Bedroom(s)</h5>
                    <h4>
                        {{@$properties->bed}}
                    </h4>
                </div>
                <span></span>
                <div>
                    <h5>Bath(s)</h5>
                    <h4>
                        {{@$properties->bath}}
                    </h4>
                </div>
            </div>
        </div>
        <!-- OVERVIEW END -->
        <!-- DESCRIPTION START -->
        <div class="descriptionContainer">
            <h3> Description </h3>
        </div>
        <!-- DESCRIPTION END -->

        <!-- MAP START -->
        <div class="mapContainer">
            <h3> Google Map </h3>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462116.6683962556!2d66.87527626848234!3d25.193559924666214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1623671736343!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        <!-- MAP END -->
    </div>


    <!-- {/* HIDDEN FOR MAP PAGE START */} -->

    <!--  HIDDEN FOR MAP PAGE END  -->
    <div class="formContainer">
        <!--  HIDDEN FOR MAP PAGE START  -->
        <div class='saleTagContainer'>
            <h2>
                {{@$properties->property_type}} {{@$properties->property_for}} in {{@$properties->areaOne->name}}
            </h2>
            <h2>
                {{ @convert_rupee($properties->price) }}
            </h2>
            <p>
                {{@$properties->areaOne->name}}, {{@$properties->areaOne->city->name}}
            </p>
        </div>
        <br />
        <!--  HIDDEN FOR MAP PAGE END  -->
        <div class="contactContainer">
            <h2>Contact Us</h2>
            <Button class="showNumber">
                268445848484
            </Button>
            <hr />
            <div class="innerContactform">
                <form>
                    <input class="inpC" type="text" placeholder="Name" />
                    <br />
                    <input class="inpC mt-4" type="text" name="email" placeholder="Email" />
                    <br />
                    <textarea rows="5"></textarea>
                    <br />
                    <Button type="submit">
                        <MdEmail class="text-white" style="font-size: 17px" />
                        &nbsp;Submit
                    </Button>
                </form>
            </div>
        </div>

        <br />
        <!--  <LoginForm />  -->
    </div>
</div>
<!-- BEST PROPERTY START -->
<div class="relatedProperties">
    <br />
    <hr />
    <div class="d-flex justify-content-between">
        <h2 class="fw-bold">Related Properties</h2>
        <div class="d-flex">
            <div class="ms-4">
                <button class="themebtn2 px-3 py-1 ms-1">View all</button>
            </div>
        </div>
    </div>
    <div class="position-relative mt-5">
        <div class="sliderBtnLeft text-right m-auto">
            <i class="scroll-left bi bi-arrow-left-circle-fill"></i>
        </div>
        <!--image allary list-->
        <ul id="box-wrapper" class="boxWrapper ps-0">
            <!--apply loop on this li-->
            @include('frontend.property.relatedlist')

        </ul>
        <div class="sliderBtnRight col-1 m-auto">
            <i class="scroll-right bi bi-arrow-right-circle-fill"></i>
        </div>
    </div>
</div>
