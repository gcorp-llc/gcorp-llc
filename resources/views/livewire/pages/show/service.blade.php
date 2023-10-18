<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">{{$data->title}}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a   href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a   href="{{route('services')}}"
                           class="text-gray-600 text-hover-primary">خدمات</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">{{$data->title}}</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-center container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="container-fluid shadow-sm">
                <div class="d-flex justify-content-center ">
                    <div class="col-md-6">
                        <img class="rounded-4 shadow text-center img-fluid mt-10" src="{{Storage::url($data->cover)}}"
                             alt="{{$data->title}}">

                    </div>

                </div>
                <div class="py-10">
                    {!! $data->description !!}
                </div>
            </div>
        </div>

    </div>
    <div class="py-10">
        <livewire:components.home.services/>
    </div>
</div>
