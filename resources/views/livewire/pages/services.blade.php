<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">خدمات</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a   href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">خدمات</li>
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


    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class=" shadow-sm">
                <div class="row ">
                    @foreach($data as  $item)
                        <div class="col-md-6">
                            <div class="card shadow-sm mb-5">

                                <div class="card-body p-0">
                                    <div class="text-center px-4">
                                        <img class="mw-100 mh-300px card-rounded-bottom rounded-4 shadow"
                                             alt="{{$item->title}}"
                                             src="{{Storage::url($item->cover)}}"/>
                                    </div>
                                    <h3 class="card-title mt-5">{{$item->title}}</h3>
                                    <div class="card-p mb-10">
                                        {{$item->info}}
                                    </div>
                                    <div class="text-end mb-5">
                                        <a href="{{route('service-show',$item->slug)}}" class="btn btn-primary"  >مشاهده
                                            بیشتر</a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>
</div>
