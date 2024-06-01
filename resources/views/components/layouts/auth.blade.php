<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href=""/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <script>
        // Add offline support
        function addOfflineSupport() {
            // Add a service worker
            navigator.serviceWorker.register("serviceworker.js");
        }

        // Load the service worker
        addOfflineSupport();

        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        });
        document.addEventListener("keydown", function (e) {
            if (e.keyCode === 123) {
                e.preventDefault();
            }
        });
    </script>
    <!-- Google tag (gtag.js) -->
    <script data-navigate-track async src="https://www.googletagmanager.com/gtag/js?id=G-FGYYZBW4LB"></script>
    <script data-navigate-track>window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag("js", new Date());
        gtag("config", "G-FGYYZBW4LB");</script>
    <!-- Google Tag Manager -->
    <script data-navigate-track>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({"gtm.start": new Date().getTime(), event: "gtm.js"});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NZNFCPN");
    </script>
    <!-- End Google Tag Manager -->
    <script type="text/javascript" data-navigate-track>
        (function (c, l, a, r, i, t, y) {
            c[a] = c[a] || function () {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "66bf6i7cpn");
    </script>

    <!-- MINIFIED -->
    {!! SEO::generate(true) !!}


    <meta property="og:locale" content="fa_IR"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="GCORP LLC"/>
    <meta property="og:url" content="https://gcorp.cc"/>
    <meta property="og:site_name" content="GCORP LLC | Hossein Eftekharrad"/>

    <link rel="shortcut icon" href="{{asset('favicon.png')}}"/>

    <!--begin::Page Vendor Stylesheets(used by this page)-->
    @stack('links')
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <script
        data-navigate-track>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    <link rel="stylesheet" href="{{asset('css/font.css')}}">

    <!---end GOFTINO code--->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}" data-navigate-track></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}" data-navigate-track></script>


</head>
<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NZNFCPN"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    >
</noscript>
<!-- End Google Tag Manager (noscript) -->


<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page bg image-->
    <style>body {
            background-image: url('assets/media/auth/bg4.jpg');
        }

        [data-bs-theme="dark"] body {
            background-image: url('assets/media/auth/bg4-dark.jpg');
        }</style>
    <!--end::Page bg image-->
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->

                <a href="{{route('home')}}" wire:navigate class="mb-5 text-center">
                    {{--                    <img alt="GCORP LLC" src="{{asset('assets/media/logos/demo11.svg')}}" class="theme-light-show h-90px h-lg-70px" />--}}
                    <img alt="GCORP LLC" src="{{asset('assets/media/logos/demo11-dark.svg')}}"
                         class=" h-60px h-lg-70px"/>
                </a>
                <!--end::Logo-->
                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">گروه فن آوری جهان نوین راد، با مدیریت مهندس حسین افتخارراد، پیشگام
                    در تولید نرم افزارهای نوآورانه و با کیفیت است.</h2>
                @if(Route::is('dr-login'))
                    <div class="card border-transparent mt-5">
                        <!--begin::Body-->
                        <div class="card-body ">
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <div class="position-relative fs-3 z-index-2 fw-bold text-white mb-7">
                                    <h2 class="text-white fw-normal my-5">
                                        سیستم احراز هویت بر اساس شماره همراه موجود در سیستم می باشد ابتدا نام خود را جستجو و سپس بر روی اکانت خود کلیک و اقدام به ورود نمایید
                                        <!--begin::Separator-->
                                    </h2>
                                     <p>
                                         در صورت نبود شماره و هر گونه سوال در سیستم با پشتیبانی  تماس حاصل نمایید
                                     </p>
                                    <div class="d-grid my-5">
                                        <a href="tel:02191694601" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label"> تماس : 02191694901 </span>

                                        </a>

                                    </div>

                                    <div class="d-grid my-5">
                                        <a href="tel:09370290168" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label"> تماس : 09370290168 </span>

                                        </a>

                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Action-->

                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->
                            <!--begin::Illustration-->

                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    @else
                    <div class="card border-transparent mt-5">
                        <!--begin::Body-->
                        <div class="card-body ">
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <div class="position-relative fs-3 z-index-2 fw-bold text-white mb-7">
                                    <h3 class="text-white fw-normal my-5">
                                        پزشک گرامی جهت دسترسی به پنل مدیریت خود از لینک زیر استفاده کنید
                                        <!--begin::Separator-->
                                    </h3>
                                    <div class="d-grid my-10">
                                        <a href="{{route('dr-login')}}" class="btn btn-primary">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label"> ورود پزشک </span>

                                        </a>
                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Action-->

                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->
                            <!--begin::Illustration-->

                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>

                @endif

                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->

        <main>
            {{ $slot }}
        </main>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>

<!--end::Root-->


<!--begin::Javascript-->


@stack('scripts')
<!--end::Javascript-->
</body>
</html>
