<div>


    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <!--begin::Card-->
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <!--begin::Wrapper-->
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 ">
                <!--begin::Form-->
                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                      id="kt_sign_in_form" data-kt-redirect-url="../../demo11/dist/index.html" action="#">
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">ورود به پنل پزشک</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->

                        <!--end::Subtitle=-->
                    </div>

                    <div class="separator separator-content my-14">
                        <span class="w-125px text-gray-500 fw-semibold fs-7">نام خود را وارد نمایید</span>
                    </div>
                    <!--end::Separator-->
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Email-->
                        <input type="text" placeholder="ایمیل" wire:model="email" autocomplete="off"
                               class="form-control bg-transparent">
                        <!--end::Email-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-3 fv-plugins-icon-container">
                        <!--begin::Password-->
                        <input type="password" placeholder="رمز عبور" wire:model="password" autocomplete="off"
                               class="form-control bg-transparent">
                        <!--end::Password-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        </div>
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                        <div></div>
                        <!--begin::Link-->
                        <a href="{{ route('reset-password') }}" class="link-primary" >رمز عبور را فراموش
                            کردید ?</a>
                        <!--end::Link-->
                    </div>
                    @if(session()->has('error'))
                        <!--begin::Alert-->
                        <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-notification-bing fs-2hx text-primary me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <!--begin::Title-->

                                <!--end::Title-->

                                <!--begin::Content-->
                                <span>{{session('error')}}</span>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Close-->
                            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                <i class="ki-duotone ki-cross fs-1 text-primary"><span class="path1"></span><span class="path2"></span></i>
                            </button>
                            <!--end::Close-->
                        </div>
                        <!--end::Alert-->

                    @endif
                    <!--end::Wrapper-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <a wire:click="login" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">ورود</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span wire:loading class="indicator-progress">
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </a>
                    </div>

                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">هنوز عضو نشدید؟
                        <a href="{{ route('sign-up') }}" class="link-primary" >ثبت نام</a>
                    </div>
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Card-->
    </div>

</div>
