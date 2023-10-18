<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        });
        document.addEventListener("keydown", function(e) {
            if (e.keyCode === 123) {
                e.preventDefault();
            }
        });
    </script>
    <!--end::Global Javascript Bundle-->



    <!-- MINIFIED -->
    {!! SEO::generate(true) !!}


    <meta property="og:locale" content="fa_IR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="GCORP LLC" />
    <meta property="og:url" content="https://gcorp.cc" />
    <meta property="og:site_name" content="GCORP LLC | Hossein Eftekharrad" />

    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
    <!--begin::Fonts(mandatory for all pages)-->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> --}}

    @stack('links')
    {{-- <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" /> --}}
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <link rel="stylesheet" href="{{ asset('css/font.css') }}">

    <script data-navigate-once src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script data-navigate-once src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NZNFCPN');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZNFCPN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <livewire:components.layout.navbar />
                <!--end::Header-->
                <main>
                    {{ $slot }}
                </main>

                <!--begin::Footer-->
                <livewire:components.layout.footer />

                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--end::Custom Javascript-->
    @stack('scripts')
    <!--end::Javascript-->

</body>

</html>
