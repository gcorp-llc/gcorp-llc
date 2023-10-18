<div class="row g-3 mb-9">
    <!--begin::Col-->
    <div class="col-md-6">
        <!--begin::Google link=-->
        <a href="{{ route('auth.redirect', 'google') }}"
            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3">ورود به سیستم با
            Google
            <span wire:loading class="indicator-progress">
			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

        </a>
        <!--end::Google link=-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-md-6">
        <!--begin::Github link=-->
        <a href="{{ route('auth.redirect', 'github') }}"
            class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <img alt="Logo" src="assets/media/svg/brand-logos/github.svg" class="theme-light-show h-15px me-3">
            <img alt="Logo" src="assets/media/svg/brand-logos/github.svg"
                class="theme-dark-show h-15px me-3">ورود به سیستم با Github
        </a>
        <!--end::Google link=-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    {{--    <div class="col-md-6"> --}}
    {{--        <!--begin::Linkedin link=--> --}}
    {{--        <a href="{{route('auth.redirect','linkedin')}}" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100"> --}}
    {{--            <img alt="Logo" src="assets/media/svg/brand-logos/linkedin-2.svg" class="theme-light-show h-15px me-3"> --}}
    {{--            <img alt="Logo" src="assets/media/svg/brand-logos/linkedin-2-black-dark.svg" class="theme-dark-show h-15px me-3">ورود به سیستم با Linkedin</a> --}}
    {{--        <!--end::Google link=--> --}}
    {{--    </div> --}}
    <!--end::Col-->
    @if(session()->has('error-so'))
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
                <span>{{session('error-so')}}</span>
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
</div>
