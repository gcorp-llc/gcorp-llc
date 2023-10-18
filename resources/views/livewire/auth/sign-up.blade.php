<div>


    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <!--begin::Card-->
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <!--begin::Wrapper-->
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                <!--begin::Form-->
                <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                      id="kt_sign_up_form"
                      data-kt-redirect-url="../../demo11/dist/authentication/layouts/creative/sign-in.html" action="#">
                    <!--begin::Heading-->
                    <div class="text-center mb-11">
                        <!--begin::Title-->
                        <h1 class="text-dark fw-bolder mb-3">ثبت نام</h1>
                        <!--end::Title-->
                        <!--begin::Subtitle-->
                        <div class="text-gray-500 fw-semibold fs-6"> با شبکه های اجتماعی</div>
                        <!--end::Subtitle=-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Login options-->
                    <livewire:auth.components.socialite/>
                    <!--end::Login options-->
                    <!--begin::Separator-->
                    <div class="separator separator-content my-14">
                        <span class="w-125px text-gray-500 fw-semibold fs-7">یا از طریق ایمیل</span>
                    </div>
                    <!--end::Separator-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Email-->
                        <input wire:model="name" type="text" placeholder="نام و نام خانوادگی" name="name" autocomplete="off"
                               class="form-control bg-transparent">
                        <!--end::Email-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        <div class="text-danger">@error('name') {{ $message }} @enderror</div>
                    </div>
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Email-->
                        <input wire:model="email" type="text" placeholder="ایمیل" name="email" autocomplete="off"
                               class="form-control bg-transparent">
                        <!--end::Email-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        <div class="text-danger">@error('email') {{ $message }} @enderror</div>
                    </div>
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Email-->
                        <input wire:model="phone" type="text" placeholder="شماره تماس" name="phone" autocomplete="off"
                               class="form-control bg-transparent">
                        <!--end::Email-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--begin::Input group-->
                    <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input wire:model="password" class="form-control bg-transparent" type="password"
                                       placeholder="رمز عبور" name="password" autocomplete="off">
                                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                      data-kt-password-meter-control="visibility">
												<i class="ki-duotone ki-eye-slash fs-2"></i>
												<i class="ki-duotone ki-eye fs-2 d-none"></i>
											</span>
                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                            <div class="text-danger">@error('password') {{ $message }} @enderror</div>
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Hint-->
                        <div class="text-muted">از 8 یا بیشتر کاراکتر با ترکیبی از حروف، اعداد و نمادها استفاده کنید.
                        </div>
                        <!--end::Hint-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Input group=-->
                    <!--end::Input group=-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Repeat Password-->
                        <input placeholder="تکرار رمز عبور" wire:model="confirm_password" name="confirm-password"
                               type="password" autocomplete="off" class="form-control bg-transparent">
                        <!--end::Repeat Password-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        <div class="text-danger">@error('confirm_password') {{ $message }} @enderror</div>
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Accept-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" wire:model="toc" name="toc" value="1">
                            <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">تایید
										<a href="#" class="ms-1 link-primary">قوانین و مقررات</a></span>
                        </label>
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        <div class="text-danger">@error('toc') {{ $message }} @enderror</div>

                    </div>
                    <!--end::Accept-->
                    <!--begin::Submit button-->
                    <div class="d-grid mb-10">
                        <a id="kt_sign_up_submit" wire:click="signup" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">ثبت نام</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span wire:loading class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </a>
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
                    <!--end::Submit button-->
                    <!--begin::Sign up-->
                    <div class="text-gray-500 text-center fw-semibold fs-6">از قبل یک حساب دارید؟
                        <a href="{{route('sign-in')}}" class="link-primary fw-semibold">ورود</a></div>
                    <!--end::Sign up-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Footer-->

            <!--end::Footer-->
        </div>
        <!--end::Card-->
    </div>
</div>
