<div>
    <div class="col-xl-12 mb-xl-12">
        <!--begin::Slider Widget 1-->
        <div id="dr-slider"
             class="card m-5 card-flush carousel carousel-custom carousel-stretch slide h-xl-100 pointer-event"
             data-bs-ride="carousel" data-bs-interval="5000">
            <!--begin::Header-->
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-5">
                <!--begin::Carousel-->
                <div class="carousel-inner">
                    @foreach($sliders as $item)
                        <div class="carousel-item {{$loop->first?'active':''}}">
                            <div class="symbol symbol-70px symbol-circle me-5 mt-5">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($item->avatar)}}" alt="">
                               <span class="mx-5">{{$item->name}}</span>
                            </div>

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center my-5 ">
                                <!--begin::Symbol-->

                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Subtitle-->
                                    <h5 class="fs-3 mb-5">{{$item->data->experience}}</h5>
                                    <h4 class="fw-bold text-gray-800 mb-3"> {{$item->data->code}}</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Items-->
                                    <div class="d-flex d-grid gap-5">
                                        <p>
                                           {{Str::limit($item->data->description,99)}}
                                        </p>
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Action-->

                            <!--end::Action-->
                        </div>
                    @endforeach
                </div>
                <!--end::Carousel-->
            </div>
            <div class="card-toolbar">
                <!--begin::Carousel Indicators-->
                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                    <li data-bs-target="#dr-slider" data-bs-slide-to="0"
                        class="ms-1"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="1"
                        class="ms-1 active" aria-current="true"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="2"
                        class="ms-1"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="3"
                        class="ms-1"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="4"
                        class="ms-1"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="5"
                        class="ms-1"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="6"
                        class="ms-1"></li>
                    <li data-bs-target="#dr-slider" data-bs-slide-to="7"
                        class="ms-1"></li>
                </ol>
                <!--end::Carousel Indicators-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Slider Widget 1-->
    </div>
</div>
