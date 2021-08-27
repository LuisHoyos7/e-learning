<!DOCTYPE html>

<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>E-learning</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <!-- <link href="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.4') }}"
        rel="stylesheet" type="text/css" /> -->
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <!-- <link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.css?v=7.0.4') }}" rel="stylesheet"
        type="text/css" /> -->
    <!-- <link href="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.4') }}" rel="stylesheet"
        type="text/css" /> -->
    <!-- <link href="{{ asset('metronic/assets/css/style.bundle.css?v=7.0.4') }}" rel="stylesheet" type="text/css" /> -->
    <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url({{ asset('metronic/assets/media/bg/bg-10.jpg') }}"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">

    <div id="app">

        @include('layouts.metronic.header_mobile')

        @yield('content')

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                        <path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <!--end::Scrolltop-->
    </div>
    <script>
        var HOST_URL = "https://keenthemes.com/metronic/tools/preview";

    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };

    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <!-- <script src="{{ asset('metronic/assets/plugins/global/plugins.bundle.js?v=7.0.4') }}"></script> -->
    <!-- {{-- <script src="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4') }}"></script> --}} -->
    <!-- <script src="{{ asset('metronic/assets/js/scripts.bundle.js?v=7.0.4') }}"></script> -->
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <!-- <script src="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.4') }}"></script> -->
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <!-- <script src="{{ asset('metronic/assets/js/pages/widgets.js?v=7.0.4') }}"></script> -->

    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
