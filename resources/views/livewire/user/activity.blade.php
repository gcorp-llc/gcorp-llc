<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">تیکت ها</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">اکانت </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">تیکت ها</li>
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

            <div class="card">
                <!--begin::Card head-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title d-flex align-items-center">
                        <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                        </i>
                        <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2023</h3>
                    </div>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today" aria-selected="true">Today</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week" aria-selected="false" tabindex="-1">Week</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month" aria-selected="false" tabindex="-1">Month</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year" aria-selected="false" tabindex="-1">2023</a>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card head-->
                <!--begin::Card body-->
                <div class="card-body">
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Record-->
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Title-->
                                                <a href="../../demo11/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px pe-2">
                                                    <span class="badge badge-light text-muted">Application Design</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/300-2.jpg" alt="img">
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/300-14.jpg" alt="img">
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Progress-->
                                                <div class="min-w-125px pe-2">
                                                    <span class="badge badge-light-primary">In Progress</span>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Action-->
                                                <a href="../../demo11/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                            <!--begin::Record-->
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                                <!--begin::Title-->
                                                <a href="../../demo11/dist/apps/projects/project.html" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px">
                                                    <span class="badge badge-light text-muted">CRM System Development</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/300-20.jpg" alt="img">
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                                    </div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Users-->
                                                <!--begin::Progress-->
                                                <div class="min-w-125px">
                                                    <span class="badge badge-light-success">Completed</span>
                                                </div>
                                                <!--end::Progress-->
                                                <!--begin::Action-->
                                                <a href="../../demo11/dist/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-1.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-23.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="../../demo11/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Robert Rich" data-bs-original-title="Robert Rich" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-4.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Notice-->
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <!--begin::Content-->
                                                    <div class="mb-3 mb-md-0 fw-semibold">
                                                        <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                                                        <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Action-->
                                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Notice-->
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-1.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-23.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="../../demo11/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Alan Nilson" data-bs-original-title="Alan Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-1.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-23.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="../../demo11/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                        <!--begin::Tab panel-->
                        <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
                            <!--begin::Timeline-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Jan Hummer" data-bs-original-title="Jan Hummer" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-23.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="../../demo11/dist/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="../../demo11/dist/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-semibold">
                                                        <!--begin::Desc-->
                                                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">20mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Icon-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">Task
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Nina Nilson" data-bs-original-title="Nina Nilson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-14.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="Marcus Dotson" data-bs-original-title="Marcus Dotson" data-kt-initialized="1">
                                                    <img src="assets/media/avatars/300-2.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                        </div>
                                        <!--end::Timeline details-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New case
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->
                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-semibold mb-2">New order
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>


        </div>
        <!--end::Post-->
    </div>


</div>
