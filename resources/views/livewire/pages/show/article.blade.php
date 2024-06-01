<div>
    @push('links')
        <meta name="author" content=" {{$author->name}}">
    @endpush
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
                        <a wire:navigate href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a wire:navigate href="{{route('articles')}}"
                           class="text-gray-600 text-hover-primary">مقالات</a>
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
                    @if($data->cover)
                        <div class="col-md-6">
                            <img class="rounded-4 shadow text-center img-fluid mt-10" src="{{Storage::url($data->cover)}}"
                                 alt="{{$data->title}}">

                        </div>
                    @endif

                </div>
                <div class="mt-10">
                    <!--begin::Alert-->
                    <div class="alert alert-dismissible bg-light-primary d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-notepad-edit fs-2hx text-primary me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <div id="kt_carousel_3_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="8000">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <!--begin::Label-->
                                    <span class="fs-4 fw-bold pe-2">نویسنده مقاله </span>
                                    <!--end::Label-->

                                    <!--begin::Carousel Indicators-->
                                    <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">

                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                                    </ol>
                                    <!--end::Carousel Indicators-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Carousel-->
                                <div class="carousel-inner pt-8">
                                    <!--begin::Item-->

                                        <div class="carousel-item active">
                                            <div class="symbol symbol-50px">

                                                    <img src="{{Storage::url($author->avatar)}}" alt="{{$author->name}}"/>
                                               <b class="mx-2">{{$author->name}}</b>
                                            </div>
                                            <div class="mt-5">
                                                {!! Str::limit($author->description,220) !!}
                                            </div>
                                        </div>

                                    <!--end::Item-->

                                </div>
                                <!--end::Carousel-->

                            </div>
                        </div>
                        <!--end::Wrapper-->

                    </div>
                    <!--end::Alert-->
                </div>
                <div class="py-2">
                    {!! $data->description !!}
                </div>
                <div class="bg-light-danger m-5 p-5 rounded-4 shadow">
                    @foreach($data->categories as $item)
                        <a class="btn btn-warning position-relative me-2">
                            {{$item->title}}
                        </a>
                    @endforeach


                </div>
            </div>
        </div>

    </div>
    <div class="py-10">
        <livewire:components.home.posts/>
    </div>
</div>
