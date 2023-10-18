<div>
    @guest
        <div class="flex-shrink-0 p-4 p-lg-0 me-lg-2">
            <a href="{{route('sign-in')}}" class="btn btn-sm btn-light-success fw-bold w-100 w-lg-auto">ورود</a>
        </div>
    @else
        <!--begin::User-->
        <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
            <!--begin::Menu- wrapper-->
            <!--begin::User icon(remove this button to use user avatar as menu toggle)-->
            <div
                class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px"
                data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-user fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::User icon-->
            <!--begin::User account menu-->
            <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true" style="">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="/assets/media/avatars/avatar.png">
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">{{auth()->user()->name}}
                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">@</span></div>
                            <a href="#"
                               class="fw-semibold text-muted text-hover-primary fs-7">{{Str::limit(auth()->user()->email,7)}}</a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{route('user.profile')}}" class="menu-link px-5">پروفایل</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="{{route('user.projects')}}" class="menu-link px-5">
                        <span class="menu-text">پروژها</span>
                        <span class="menu-badge">
						<span class="badge badge-light-danger badge-circle fw-bold fs-7">0</span>
												</span>
                    </a>
                </div>
                <!--end::Menu item-->

                <!--begin::Menu item-->
{{--                <div class="menu-item px-5">--}}
{{--                    <a href="{{route('user.activity')}}" class="menu-link px-5">فعالیت ها</a>--}}
{{--                </div>--}}
                <div class="menu-item px-5">
                    <a href="{{route('user.payments')}}" class="menu-link px-5">تراکنش ها</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->

                <!--begin::Menu item-->
                <div class="menu-item px-5 my-1">
                    <a href="{{route('user.setting')}}" class="menu-link px-5">تنظیمات</a>
                </div>
                <div class="menu-item px-5 my-1">
                    <a href="{{route('user.tickets')}}" class="menu-link px-5">تیکت ها</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="#" wire:click="singOut" class="menu-link px-5">خروج</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
            <!--end::Menu wrapper-->
        </div>

    @endguest
</div>
