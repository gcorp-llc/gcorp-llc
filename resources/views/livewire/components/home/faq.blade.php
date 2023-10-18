<div>

        <div class="">
            <style>
                .swiper-faq {
                    width:100%;
                    padding:7%;
                }
                .swiper-slide-faq {
                    padding: 15px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .swiper-slide-shadow{
                    background: rgba(229, 224, 221, 0.20) !important;
                    border-radius: 25px!important;

                }
            </style>
            <div class="row justify-content-center mx-3">

                    <div class="col-md-6 col-12">
                        <div dir="auto" class="swiper swiper-faq faqSwiper swiper-cards swiper-3d swiper-initialized swiper-horizontal swiper-rtl swiper-watch-progress">
                            <div class="swiper-wrapper" aria-live="polite" style="cursor: grab;">

                                @foreach($data as $item)
                                <div class="swiper-slide" style="width: 313px; z-index: 11; transform: translate3d(calc(626px - 13%), 0px, -200px) rotateZ(-4deg) scale(1);" role="group" >
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <h2 class="">{{$item->question}}</h2>
                                            <p>
                                               {!! $item->seo_description !!}
                                            </p>

                                        </div>
                                    </div>
                                    <div class="swiper-slide-shadow" style="opacity: 1;"></div></div>
                                @endforeach
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>


            </div>

            <!-- Initialize Swiper -->
            <script data-navigate-track>
                var swiper = new Swiper(".faqSwiper", {
                    effect: "cards",
                    grabCursor: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    },

                });
            </script>
        </div>


</div>
