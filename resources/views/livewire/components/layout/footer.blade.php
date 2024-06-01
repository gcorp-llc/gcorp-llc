<div>
    <div class="container-fluid">
        <div class="row g-5 mb-5 mb-lg-15">
            <!--begin::Col-->
            <div class="col-sm-6 pe-lg-10">
                <!--begin::Phone-->
                <div class="bg-light card-rounded rounded-4 shadow d-flex flex-column flex-center flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-telephone-geolocation fs-3tx text-gray-700 fw-semibold">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                    <!--end::Icon-->
                    <!--begin::Subtitle-->
                    <h1 class="text-dark fw-bold my-5">شماره تماس</h1>
                    <!--end::Subtitle-->
                    <!--begin::Number-->
                    <div class="text-gray-700 fw-semibold fs-2">
                        <a class="text-gray-700 fs-3 fw-semibold" href="tel:02191694901">02191694901</a>
                        <br>
                        <a class="text-gray-700 fs-3 fw-semibold" href="tel:09370290168">09370290168</a>
                    </div>
                    <!--end::Number-->
                </div>
                <!--end::Phone-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-sm-6 ps-lg-10">
                <!--begin::Address-->
                <div class="text-center rounded-4 shadow bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                    <!--begin::Icon-->
                    <img src="{{asset('favicon.png')}}" width="66" alt="">

                    <!--end::Icon-->
                    <!--begin::Subtitle-->
                    <h1 class="text-dark fw-bold my-5">GCORP LLC</h1>
                    <!--end::Subtitle-->
                    <!--begin::Description-->
                    <div class="text-gray-700 fs-3 fw-semibold">گروه فن آوری جهان نوین راد
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Address-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Card-->
        <div class="card mb-4 bg-light text-center">
            <!--begin::Body-->
            <div class="card-body py-12">
                <!--begin::Icon-->
                <a href="https://www.instagram.com/gcorp_llc" class="mx-4">
                    <img src="{{asset('assets/media/svg/brand-logos/instagram-2-1.svg')}}" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="https://github.com/gcorp-llc" class="mx-4">
                    <img src="{{asset('assets/media/svg/brand-logos/github.svg')}}" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="https://www.linkedin.com/in/gcorp/" class="mx-4">
                    <img src="{{asset('assets/media/svg/brand-logos/linkedin-2.svg')}}" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->


            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">{{\Carbon\Carbon::now()->format('Y')}}&copy;</span>
                <a href="https://gcorp.cc" target="_blank" class="text-gray-800 text-hover-primary"  >GCORP LLC</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a class="menu-link py-3"
                       href="{{route('products')}}"
                        >
													<span class="menu-icon">
														<i class="ki-duotone ki-package  fs-2">
														    <i class="path1"></i>
                                                            <i class="path2"></i>
                                                            <i class="path3"></i>
														</i>
													</span>
                        <span class="menu-title">محصولات</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a class="menu-link py-3"
                       href="{{route('articles')}}"
                       title="مشاهده مقالات و دانش نامه های برتر"
                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                       data-bs-placement="right"  >
													<span class="menu-icon">
														<i class="ki-duotone ki-book-square fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                        <span class="menu-title">مقالات</span>
                    </a>
                </li>


            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Container-->
    </div>
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
</div>
