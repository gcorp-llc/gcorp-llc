<div>
    <!--begin::Theme mode setup on page load-->


    <!--end::Theme mode setup on page load-->
    <!--begin::Header-->
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
         data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container-xxl d-flex flex-grow-1 flex-stack">
            <!--begin::Header Logo-->
            <div class="d-flex align-items-center me-5">
                <!--begin::Heaeder menu toggle-->
                <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3"
                     id="kt_header_menu_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Heaeder menu toggle-->
                <a href="{{route('home')}}">
                    <img alt="GCORP LLC" src="{{asset('assets/media/logos/demo11.svg')}}"
                         class="theme-light-show h-20px h-lg-30px"/>
                    <img alt="GCORP LLC" src="{{asset('assets/media/logos/demo11-dark.svg')}}"
                         class="theme-dark-show h-20px h-lg-30px"/>
                </a>

            </div>
            <!--end::Header Logo-->
            <!--begin::Topbar-->
            <div class="d-flex align-items-center flex-shrink-0">
                <!--begin::Actions-->
                <div class="flex-shrink-0 p-4 p-lg-0 me-lg-2">
                    <a href="tel:09370290168" class="btn btn-sm btn-light-primary fw-bold w-100 w-lg-auto"
                       data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                    >تماس بگیرید</a>
                </div>
                <!--end::Actions-->
                <!--begin::Search-->
{{--                <livewire:components.layout.navbar.search/>--}}
                <!--end::Search-->
                <livewire:components.layout.navbar.user/>
                <!--end::Search-->

                <!--begin::Theme mode-->
                <div class="d-flex align-items-center ms-3 ms-lg-4">
                    <!--begin::Menu toggle-->
                    <a href="#"
                       class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px"
                       data-kt-menu-trigger="{default:'click', lg: 'click'}" data-kt-menu-attach="parent"
                       data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->

                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
                                <span class="menu-title">روشن</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                                <span class="menu-title">تاریک</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
                                <span class="menu-title">سیستم</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Theme mode-->


                <!--begin::Sidebar Toggler-->
                <!--end::Sidebar Toggler-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
        <!--begin::Separator-->
        <div class="separator"></div>
        <!--end::Separator-->
        <!--begin::Container-->
        <livewire:components.layout.navbar.menu/>
        <!--end::Container-->
    </div>
    <!--end::Header-->


</div>
