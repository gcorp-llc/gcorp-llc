<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">
                    سوالات متداول
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a wire:navigate href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">سوالات متداول</li>
                    <!--end::Item-->
                    <!--begin::Item-->
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
            <!--begin::FAQ card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-15">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 me-lg-20">
                            <!--begin::Search blog-->
                            <div class="mb-16">
                                <!--begin::Input group-->
                                <div class="position-relative">
                                    <i wire:click="search"  class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text" wire:keydown.enter="search"  class="form-control form-control-solid ps-10" name="search" value="" placeholder="جستجو" wire:model="query">
                                    <span wire:loading>در حال جستجو .. </span>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Search blog-->
                            <!--begin::Recent posts-->
                            <div class="m-0">
                                <h4 class="text-dark mb-7">آخرین مقالات</h4>
                                @forelse($posts as $item)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack mb-7">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <div class="symbol-label" style="background-image: url('{{Storage::url($item->cover)}}')"></div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="m-0">
                                            <p class="text-gray-600 fw-semibold d-block pt-1 fs-7">{{$item->title}}</p>
                                            <a href="{{route('article-show',$item->slug)}}" class="text-dark fw-bold text-hover-primary fs-6 ">نمایش</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                @empty



                                @endforelse


                            </div>
                            <!--end::Recent posts-->
                        </div>
                        <!--end::Sidebar-->
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid">
                            <!--begin::Extended content-->
                            <div class="mb-13">
                                <!--begin::Content-->
                                <div class="mb-15">
                                    <!--begin::Title-->
                                    <h4 class="fs-2x text-gray-800 w-bolder mb-6">سوالات متداول</h4>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <p class="fw-semibold fs-4 text-gray-600 mb-2">
                                        صفحه سوالات متداول، گلچینی از پُر تکرارترین پرسش‌های هر کسب و کاری را به خود اختصاص داده است. این پرسش‌ها که از سوی کاربران هر کسب و کار پرسیده می‌شوند
                                    </p>
                                    <!--end::Text-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Item-->
                                <div class="mb-15">

                                    @forelse($data as $item)
                                    <!--begin::Section-->
                                    <div class="m-0">
                                        <!--begin::Heading-->
                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_8_2_{{$item->id}}">
                                            <!--begin::Icon-->
                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">{{$item->question}}</h4>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div id="kt_job_8_2_{{$item->id}}" class="collapse fs-6 ms-1">
                                            <!--begin::Text-->
                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                {!! $item->response !!}
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed"></div>
                                        <!--end::Separator-->
                                    </div>

                                        @empty
                                        <!--begin::Alert-->
                                        <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row p-5 mb-10">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-search-list fs-2hx text-light me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                                <!--begin::Title-->
                                                <h4 class="mb-2">موردی یافت نشد</h4>
                                                <!--end::Title-->

                                                <!--begin::Content-->
                                                <span>
                                                    در صورتی که سوال مد نظر خود را نیافتید با ما تماس بگیرید
                                                </span>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->

                                            <!--begin::Close-->

                                            <!--end::Close-->
                                        </div>
                                        <!--end::Alert-->
                                    @endforelse


                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Extended content-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                    <!--begin::Card-->

                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::FAQ card-->
        </div>
        <!--end::Post-->
    </div>

</div>
