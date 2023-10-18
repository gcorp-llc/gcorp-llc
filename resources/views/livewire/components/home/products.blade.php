<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">محصولات برگزیده</h1>
                <!--end::Title-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-2 py-md-1">

                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="{{route('products')}}" class="btn btn-primary fw-bold" wire:navigate>مشاهده محصولات بیشتر</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    <!-- Swiper -->
    <div class="swiper productSwiper py-5">
        <div class="swiper-wrapper" >
            @foreach($data as $item)
                <div class="swiper-slide" data-swiper-autoplay="3000">
                    <div class="card h-md-100" dir="ltr" >
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                    {{$item->title}}
                                </h1>
                                <!--end::Title-->
                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="{{Storage::url($item->cover)}}" class="rounded-4 img-fluid h-200" alt="{{$item->title}}">
                                </div>
                                <!--end::Illustration-->
                                <p>{{$item->info}}</p>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Links-->
                            <div class="text-center mb-1">

                                <!--begin::Link-->
{{--                                <a class="btn btn-sm btn-light" href="{{route('article-show',$item->slug)}}" wire:navigate>مشاهده بیشتر</a>--}}
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>

                </div>
            @endforeach

        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" data-navigate-track></script>

    <!-- Initialize Swiper -->
    <script data-navigate-track>
        var swiper = new Swiper(".productSwiper", {
            autoplay: {
                delay: 3000,
            },
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>
</div>
