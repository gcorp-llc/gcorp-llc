<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">پروژه ها</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">اکانت</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">پروژه ها</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->

            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>


    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Navbar-->
            <livewire:components.user.tools-bar/>
            <!--end::Navbar-->
            <h2 class="text-center my-10">لیست پروژه های </h2>
            <div class="row g-6 g-xl-9">
                @forelse($projects as $item)
                    <!--begin::Col-->
                    <div class="col-md-6 col-xl-4">
                        <!--begin::Card-->
                        <a href="#" class="card border-hover-primary">

                            <!--begin:: Card body-->
                            <div class="card-body p-9 ribbon ribbon-top ribbon-vertical">
                                <!--begin::Name-->

                                {!! $item->product->cover !!}


                                <div class="fs-3 fw-bold text-dark">{{$item->product->title}}</div>
                                <!--end::Name-->
                                <!--begin::Description-->
                                <p class="text-gray-900 fw-semibold fs-5 mt-1 mb-7">{{$item->product->info}}</p>
                                <!--end::Description-->
                                <!--begin::Info-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Due-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                        <div
                                            class="fs-6 text-gray-800 fw-bold">{{$item->start_date ? verta($item->start_date)->format('Y/m/d') : "در لیست انتظار"}}</div>
                                        <div class="fw-semibold text-gray-400">زمان آغاز پروژه</div>

                                    </div>
                                    <!--end::Due-->
                                    <!--begin::Budget-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                        <div
                                            class="fs-6 text-gray-800 fw-bold">{{$item->start_date ? verta($item->end_date)->format('Y/m/d') : "در لیست انتظار"}}</div>
                                        <div class="fw-semibold text-gray-400">زمان پایان پروژه</div>
                                    </div>
                                    <!--end::Budget-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end:: Card body-->
                        </a>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                @empty
                    <p class="text-center"> پروژه ای ثبت نگردیده</p>
                @endforelse

            </div>
            <div class="d-flex flex-stack flex-wrap py-10">
                {{$projects->links('vendor.livewire.bootstrap')}}
            </div>


        </div>
        <!--end::Post-->
    </div>


</div>
