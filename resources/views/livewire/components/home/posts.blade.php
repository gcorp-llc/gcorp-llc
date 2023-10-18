<div>
    @push('links')
        <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
        <script src="{{asset('js/swiper.min.js')}}"></script>
    @endpush
    @push('scripts')
    @endpush

        <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column me-3">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bold my-1 fs-3">آخرین مقالات</h1>
                    <!--end::Title-->

                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2 py-md-1">

                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <a href="{{route('articles')}}" class="btn btn-primary fw-bold" wire:navigate>مشاهده مقالات بیشتر</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>




        <div class="d-flex flex-column-fluid align-items-start container-xxl">
        <!-- Swiper -->
        <div class="swiper postSwiper py-5">
            <div class="swiper-wrapper" >
                @foreach($data as $item)
                    <a href="{{route('article-show',$item->slug)}}" class="text-hover-primary text-dark lh-base">
                        <div class="swiper-slide" >
                            <div class="card h-md-100"  >
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column flex-center">
                                    <!--begin::Heading-->
                                    <div class="mb-2">

                                        <!--begin::Illustration-->
                                        <div class="pb-5 text-center">
                                            <img src="{{Storage::url($item->cover)}}" class="rounded-4 img-fluid h-200" alt="{{$item->title}}">
                                        </div>
                                        <!--begin::Title-->
                                        <h2 class="fw-semibold text-gray-800 text-center lh-lg ki-text-bold">
                                            {{$item->title}}
                                        </h2>
                                        <!--end::Title-->
                                        <!--end::Illustration-->
                                        <p>{{$item->info}}</p>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Links-->
                                    <div class="text-center mb-1">

                                        <!--begin::Link-->
                                        <a class="btn btn-sm btn-light" href="{{route('article-show',$item->slug)}}">مشاهده بیشتر</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                </div>
                                <!--end::Body-->
                            </div>

                        </div>
                    </a>

                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Initialize Swiper -->
        <script data-navigate-track>
            var swiper = new Swiper(".postSwiper", {
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
    </div> {{-- In work, do what you enjoy. --}}
</div>
