<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">پروفایل</h1>
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
                    <li class="breadcrumb-item text-gray-500">پروفایل</li>
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


            <!--begin::details View-->

            <!--end::details View-->
            <!--begin::Row-->

            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">پروژه ها</span>

                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="{{route('user.projects')}}"
                                   class="btn btn-sm btn-light">مشاهده پروژه ها</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                                @forelse($projects as $item)
                                    <!--begin::Item-->
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            {!! $item->product->cover !!}
                                            <div class="me-3">
                                                <!--begin::Icon-->


                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                   class="text-gray-800 text-hover-primary fw-bold">{{$item->product->title}}</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-gray-400 fw-bold">
														<a href="{{route('user.projects')}}"
                                                           class="text-gray-800 text-hover-primary fw-bold">مشاهده </a></span>
                                            <!--end::Name-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success">{{$item->state}}</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                    <!--end::Item-->
                                @empty
                                    <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-stack mb-3">
                                            <!--begin::Wrapper-->
                                            <div class="me-3">
                                                <!--begin::Icon-->

                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <a href="{{route('products')}}"
                                                   class="text-gray-800 text-hover-primary fw-bold">در حال حاظر پروژه ای
                                                    وجود ندارد</a>

                                                <!--end::Title-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Action-->

                                            <!--end::Action-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Customer-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Name-->
                                            <span class="text-danger fw-bold">
														         <!--end::Name-->
                                                    <a href="{{route('products')}}"
                                                       class="text-gray-800 text-hover-primary fw-bold">سفارش پروژه</a></span>

                                            <!--begin::Label-->

                                            <!--end::Label-->
                                        </div>
                                        <!--end::Customer-->
                                    </div>
                                @endforelse


                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 5-->
                </div>

                <div class="col-xl-8">
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">مشخصات پروفایل</h3>
                            </div>
                            <!--end::Card title-->
                            <!--begin::Action-->
                            <a href="{{route('user.setting')}}" class="btn btn-sm btn-primary align-self-center my-5">ویرایش
                                پروفایل</a>
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">نام و نام خانوادگی</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{auth()->user()->name}}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">ایمیل</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{auth()->user()->email}}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">شماره تماس
                                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                                          data-bs-original-title="Phone number must be active" data-kt-initialized="1">
											<i class="ki-duotone ki-information fs-7">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
											</i>
										</span></label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2">{{auth()->user()->phone}}</span>
                                    <span class="badge badge-success"> {{auth()->user()->accpeted?"تایید شده":"در انتظار تایید"}}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-6">
                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">تراکنش های مالی</span>

                            </h3>
                            <!--end::Title-->
                            <!--begin::Actions-->
                            <div class="card-toolbar">
                                <!--begin::Filters-->
                                <div class="d-flex flex-stack flex-wrap gap-4">

                                    <!--begin::Search-->
                                    <a href="{{route('user.payments')}}"
                                       class="btn btn-light btn-sm">مشاهده تراکنش ها</a>
                                    <!--end::Search-->
                                </div>
                                <!--begin::Filters-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table-->
                            <div id="kt_table_widget_5_table_wrapper"
                                 class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer"
                                           id="kt_table_widget_5_table">
                                        <!--begin::Table head-->
                                        <thead>
                                        <!--begin::Table row-->
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-150px sorting" tabindex="0"
                                                aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                aria-label="Item: activate to sort column ascending"
                                                style="width: 150px;">کد پیگیری
                                            </th>
                                            <th class="text-center pe-3 min-w-100px sorting" rowspan="1"
                                                colspan="1" aria-label="Product ID" style="width: 100px;">مبلغ
                                            </th>
                                            <th class="text-end pe-3 min-w-150px sorting" tabindex="0"
                                                aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                aria-label="Date Added: activate to sort column ascending"
                                                style="width: 150px;">وضعیت پرداخت
                                            </th>

                                        </tr>
                                        <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">

                                        @forelse($payments as $item)
                                            <tr class="odd">
                                                <!--begin::Item-->
                                                <td>
                                                    <p class="text-dark text-hover-primary">{{$item->mergen_id??"فاقد کد پیگیری"}}</p>
                                                </td>
                                                <!--end::Item-->

                                                <!--begin::Price-->
                                                <td class="text-end">{{number_format($item->amount)}}  تومان </td>
                                                <!--end::Price-->
                                                <!--begin::Status-->
                                                <td class="text-end">
                                                    <a href="{{route('user.payments')}}"
                                                        class="badge py-3 px-4 fs-7 {{$item->status=="pending"?"badge-light-primary":"badge-light-success"}}  ">{{$item->status=="pending"?" پرداخت":"پرداخت شده"}}</a>
                                                </td>
                                                <!--end::Status-->
                                                <!--begin::Qty-->

                                                <!--end::Qty-->
                                            </tr>
                                        @empty
                                            <tr class="red">
                                                <p>تراکنشی ثبت نشده</p>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <div class="row">
                                    <div
                                        class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                                    <div
                                        class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div>
                                </div>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Table Widget 5-->
                </div>
                <!--end::Col-->



{{--                <div class="col-xl-6">--}}
{{--                    <div class="card mb-5 mb-xxl-8">--}}
{{--                        <!--begin::Header-->--}}
{{--                        <div class="card-header align-items-center border-0 mt-4">--}}
{{--                            <h3 class="card-title align-items-start flex-column">--}}
{{--                                <span class="fw-bold mb-2 text-dark">Activities</span>--}}
{{--                                <span class="text-muted fw-semibold fs-7">890,344 Sales</span>--}}
{{--                            </h3>--}}
{{--                            <div class="card-toolbar">--}}
{{--                                <!--begin::Menu-->--}}
{{--                                <button type="button"--}}
{{--                                        class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"--}}
{{--                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">--}}
{{--                                    <i class="ki-duotone ki-category fs-6">--}}
{{--                                        <span class="path1"></span>--}}
{{--                                        <span class="path2"></span>--}}
{{--                                        <span class="path3"></span>--}}
{{--                                        <span class="path4"></span>--}}
{{--                                    </i>--}}
{{--                                </button>--}}
{{--                                <!--begin::Menu 1-->--}}
{{--                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"--}}
{{--                                     id="kt_menu_64b776c0bd482">--}}
{{--                                    <!--begin::Header-->--}}
{{--                                    <div class="px-7 py-5">--}}
{{--                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Header-->--}}
{{--                                    <!--begin::Menu separator-->--}}
{{--                                    <div class="separator border-gray-200"></div>--}}
{{--                                    <!--end::Menu separator-->--}}
{{--                                    <!--begin::Form-->--}}
{{--                                    <div class="px-7 py-5">--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="mb-10">--}}
{{--                                            <!--begin::Label-->--}}
{{--                                            <label class="form-label fw-semibold">Status:</label>--}}
{{--                                            <!--end::Label-->--}}
{{--                                            <!--begin::Input-->--}}
{{--                                            <div>--}}
{{--                                                <select class="form-select form-select-solid select2-hidden-accessible"--}}
{{--                                                        multiple="" data-kt-select2="true" data-close-on-select="false"--}}
{{--                                                        data-placeholder="Select option"--}}
{{--                                                        data-dropdown-parent="#kt_menu_64b776c0bd482"--}}
{{--                                                        data-allow-clear="true" data-select2-id="select2-data-11-tzup"--}}
{{--                                                        tabindex="-1" aria-hidden="true" data-kt-initialized="1">--}}
{{--                                                    <option></option>--}}
{{--                                                    <option value="1">Approved</option>--}}
{{--                                                    <option value="2">Pending</option>--}}
{{--                                                    <option value="2">In Process</option>--}}
{{--                                                    <option value="2">Rejected</option>--}}
{{--                                                </select><span--}}
{{--                                                    class="select2 select2-container select2-container--bootstrap5"--}}
{{--                                                    dir="ltr" data-select2-id="select2-data-12-dbgg"--}}
{{--                                                    style="width: 100%;"><span class="selection"><span--}}
{{--                                                            class="select2-selection select2-selection--multiple form-select form-select-solid"--}}
{{--                                                            role="combobox" aria-haspopup="true" aria-expanded="false"--}}
{{--                                                            tabindex="-1" aria-disabled="false"><ul--}}
{{--                                                                class="select2-selection__rendered"--}}
{{--                                                                id="select2-xwsk-container"></ul><span--}}
{{--                                                                class="select2-search select2-search--inline"><textarea--}}
{{--                                                                    class="select2-search__field" type="search"--}}
{{--                                                                    tabindex="0" autocorrect="off" autocapitalize="none"--}}
{{--                                                                    spellcheck="false" role="searchbox"--}}
{{--                                                                    aria-autocomplete="list" autocomplete="off"--}}
{{--                                                                    aria-label="Search"--}}
{{--                                                                    aria-describedby="select2-xwsk-container"--}}
{{--                                                                    placeholder="Select option"--}}
{{--                                                                    style="width: 100%;"></textarea></span></span></span><span--}}
{{--                                                        class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Input-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="mb-10">--}}
{{--                                            <!--begin::Label-->--}}
{{--                                            <label class="form-label fw-semibold">Member Type:</label>--}}
{{--                                            <!--end::Label-->--}}
{{--                                            <!--begin::Options-->--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <!--begin::Options-->--}}
{{--                                                <label--}}
{{--                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="1">--}}
{{--                                                    <span class="form-check-label">Author</span>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Options-->--}}
{{--                                                <!--begin::Options-->--}}
{{--                                                <label--}}
{{--                                                    class="form-check form-check-sm form-check-custom form-check-solid">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="2"--}}
{{--                                                           checked="checked">--}}
{{--                                                    <span class="form-check-label">Customer</span>--}}
{{--                                                </label>--}}
{{--                                                <!--end::Options-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Options-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Input group-->--}}
{{--                                        <div class="mb-10">--}}
{{--                                            <!--begin::Label-->--}}
{{--                                            <label class="form-label fw-semibold">Notifications:</label>--}}
{{--                                            <!--end::Label-->--}}
{{--                                            <!--begin::Switch-->--}}
{{--                                            <div--}}
{{--                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">--}}
{{--                                                <input class="form-check-input" type="checkbox" value=""--}}
{{--                                                       name="notifications" checked="checked">--}}
{{--                                                <label class="form-check-label">Enabled</label>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Switch-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Input group-->--}}
{{--                                        <!--begin::Actions-->--}}
{{--                                        <div class="d-flex justify-content-end">--}}
{{--                                            <button type="reset"--}}
{{--                                                    class="btn btn-sm btn-light btn-active-light-primary me-2"--}}
{{--                                                    data-kt-menu-dismiss="true">Reset--}}
{{--                                            </button>--}}
{{--                                            <button type="submit" class="btn btn-sm btn-primary"--}}
{{--                                                    data-kt-menu-dismiss="true">Apply--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Actions-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Form-->--}}
{{--                                </div>--}}
{{--                                <!--end::Menu 1-->--}}
{{--                                <!--end::Menu-->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::Header-->--}}
{{--                        <!--begin::Body-->--}}
{{--                        <div class="card-body pt-5">--}}
{{--                            <!--begin::Timeline-->--}}
{{--                            <div class="timeline-label">--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-warning fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Text-->--}}
{{--                                    <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest.--}}
{{--                                        And keep structure--}}
{{--                                    </div>--}}
{{--                                    <!--end::Text-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-success fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Content-->--}}
{{--                                    <div class="timeline-content d-flex">--}}
{{--                                        <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Content-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-danger fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Desc-->--}}
{{--                                    <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit--}}
{{--                                        <a href="#" class="text-primary">USD 700</a>. to ESL--}}
{{--                                    </div>--}}
{{--                                    <!--end::Desc-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-primary fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Text-->--}}
{{--                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving--}}
{{--                                        and keep structure keep great--}}
{{--                                    </div>--}}
{{--                                    <!--end::Text-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-danger fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Desc-->--}}
{{--                                    <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed--}}
{{--                                        <a href="#" class="text-primary">#XF-2356</a>.--}}
{{--                                    </div>--}}
{{--                                    <!--end::Desc-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-primary fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Text-->--}}
{{--                                    <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving--}}
{{--                                        and keep structure keep great--}}
{{--                                    </div>--}}
{{--                                    <!--end::Text-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-danger fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Desc-->--}}
{{--                                    <div class="timeline-content fw-semibold text-gray-800 ps-3">New order placed--}}
{{--                                        <a href="#" class="text-primary">#XF-2356</a>.--}}
{{--                                    </div>--}}
{{--                                    <!--end::Desc-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                                <!--begin::Item-->--}}
{{--                                <div class="timeline-item">--}}
{{--                                    <!--begin::Label-->--}}
{{--                                    <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>--}}
{{--                                    <!--end::Label-->--}}
{{--                                    <!--begin::Badge-->--}}
{{--                                    <div class="timeline-badge">--}}
{{--                                        <i class="fa fa-genderless text-success fs-1"></i>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Badge-->--}}
{{--                                    <!--begin::Text-->--}}
{{--                                    <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app--}}
{{--                                        launch preparion meeting--}}
{{--                                    </div>--}}
{{--                                    <!--end::Text-->--}}
{{--                                </div>--}}
{{--                                <!--end::Item-->--}}
{{--                            </div>--}}
{{--                            <!--end::Timeline-->--}}
{{--                        </div>--}}
{{--                        <!--end: Card Body-->--}}
{{--                    </div>--}}
{{--                </div>--}}



            </div>
            <!--end::Row-->

        </div>
        <!--end::Post-->
    </div>
</div>
