<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5">@yield('title')</h2>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    @if (Request::is('home'))
                        <a href="{{ route('home') }}"
                            class="text-white text-hover-white opacity-75 hover-opacity-100 active">
                            <i class="flaticon2-shelter text-white icon-1x"></i> Home
                        </a>
                    @else
                        <a class="text-white text-hover-white opacity-75 hover-opacity-100"
                            href="{{ route('home') }}">Home</a></li>
                    @endif
                    <!--end::Item-->
                    <!--begin::Item-->

                    @yield('breadcrumb')
                    <!--end::Item-->
                </div>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Info-->
    </div>
</div>
