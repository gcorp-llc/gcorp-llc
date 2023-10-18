<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">Mixed</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a href="../../demo11/dist/index.html" class="text-gray-600 text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">Widgets</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-500">Mixed</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-2 py-md-1">
                <!--begin::Wrapper-->
                <div class="me-3">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-light-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e1f3a46">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e1f3a46" data-allow-clear="true" data-select2-id="select2-data-7-vsvv" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-nf8f" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-k3rh-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-k3rh-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1">
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>


    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                                    <div class="ms-1">
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-6">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-semibold fs-7">You Balance</span>
                                    <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-compass fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                            <div class="text-gray-400 fw-semibold fs-7">100 Regions</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-element-11 fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                            <div class="text-gray-400 fw-semibold fs-7">Quarter 2/3</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-graph-up fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                                            <div class="text-gray-400 fw-semibold fs-7">80% Rate</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-document fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                                            <div class="text-gray-400 fw-semibold fs-7">3090 Refunds</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-danger">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                                    <div class="ms-1">
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-6">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-semibold fs-7">You Balance</span>
                                    <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-compass fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                            <div class="text-gray-400 fw-semibold fs-7">100 Regions</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-element-11 fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                            <div class="text-gray-400 fw-semibold fs-7">Quarter 2/3</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-graph-up fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                                            <div class="text-gray-400 fw-semibold fs-7">80% Rate</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-document fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                                            <div class="text-gray-400 fw-semibold fs-7">3090 Refunds</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-success">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bold fs-3">Sales Summary</h3>
                                    <div class="ms-1">
                                        <!--begin::Menu-->
                                        <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Create Invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                    <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-6">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Generate Bill</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Plans</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                                <!--end::Input-->
                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                        <!--end::Menu-->
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-semibold fs-7">You Balance</span>
                                    <span class="fw-bold fs-2x pt-1">$37,562.00</span>
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-compass fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Sales</a>
                                            <div class="text-gray-400 fw-semibold fs-7">100 Regions</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$2,5b</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-element-11 fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Revenue</a>
                                            <div class="text-gray-400 fw-semibold fs-7">Quarter 2/3</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$1,7b</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-graph-up fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Growth</a>
                                            <div class="text-gray-400 fw-semibold fs-7">80% Rate</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$8,8m</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45px w-40px me-5">
														<span class="symbol-label bg-lighten">
															<i class="ki-duotone ki-document fs-1">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">Dispute</a>
                                            <div class="text-gray-400 fw-semibold fs-7">3090 Refunds</div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Label-->
                                        <div class="d-flex align-items-center">
                                            <div class="fw-bold fs-5 text-gray-800 pe-1">$270m</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-info py-5">
                            <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-info" data-kt-color="info" style="height: 200px; min-height: 200px;"><div id="apexcharts3wgjhy1o" class="apexcharts-canvas apexcharts3wgjhy1o apexcharts-theme-light" style="width: 375px; height: 200px;"><svg id="SvgjsSvg2780" width="375" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><g id="SvgjsG2838" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2782" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2781"><clipPath id="gridRectMask3wgjhy1o"><rect id="SvgjsRect2784" width="382" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask3wgjhy1o"></clipPath><clipPath id="nonForecastMask3wgjhy1o"></clipPath><clipPath id="gridRectMarkerMask3wgjhy1o"><rect id="SvgjsRect2785" width="379" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2791" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2792" flood-color="#4c13c4" flood-opacity="0.5" result="SvgjsFeFlood2792Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2793" in="SvgjsFeFlood2792Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2793Out"></feComposite><feOffset id="SvgjsFeOffset2794" dx="0" dy="5" result="SvgjsFeOffset2794Out" in="SvgjsFeComposite2793Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2795" stdDeviation="3 " result="SvgjsFeGaussianBlur2795Out" in="SvgjsFeOffset2794Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2796" result="SvgjsFeMerge2796Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2797" in="SvgjsFeGaussianBlur2795Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2798" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2799" in="SourceGraphic" in2="SvgjsFeMerge2796Out" mode="normal" result="SvgjsFeBlend2799Out"></feBlend></filter><filter id="SvgjsFilter2801" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2802" flood-color="#4c13c4" flood-opacity="0.5" result="SvgjsFeFlood2802Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2803" in="SvgjsFeFlood2802Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2803Out"></feComposite><feOffset id="SvgjsFeOffset2804" dx="0" dy="5" result="SvgjsFeOffset2804Out" in="SvgjsFeComposite2803Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2805" stdDeviation="3 " result="SvgjsFeGaussianBlur2805Out" in="SvgjsFeOffset2804Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2806" result="SvgjsFeMerge2806Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2807" in="SvgjsFeGaussianBlur2805Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2808" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2809" in="SourceGraphic" in2="SvgjsFeMerge2806Out" mode="normal" result="SvgjsFeBlend2809Out"></feBlend></filter></defs><g id="SvgjsG2810" class="apexcharts-grid"><g id="SvgjsG2811" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2814" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2815" x1="0" y1="20" x2="375" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2816" x1="0" y1="40" x2="375" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2817" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2818" x1="0" y1="80" x2="375" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2819" x1="0" y1="100" x2="375" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2820" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2821" x1="0" y1="140" x2="375" y2="140" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2822" x1="0" y1="160" x2="375" y2="160" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2823" x1="0" y1="180" x2="375" y2="180" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2824" x1="0" y1="200" x2="375" y2="200" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2812" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2826" x1="0" y1="200" x2="375" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2825" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2786" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2787" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2790" d="M 0 200 L 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100C 375 100 375 100 375 200M 375 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3wgjhy1o)" filter="url(#SvgjsFilter2791)" pathTo="M 0 200 L 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100C 375 100 375 100 375 200M 375 100z" pathFrom="M -1 200 L -1 200 L 62.5 200 L 125 200 L 187.5 200 L 250 200 L 312.5 200 L 375 200"></path><path id="SvgjsPath2800" d="M 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100" fill="none" fill-opacity="1" stroke="#4c13c4" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3wgjhy1o)" filter="url(#SvgjsFilter2801)" pathTo="M 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100" pathFrom="M -1 200 L -1 200 L 62.5 200 L 125 200 L 187.5 200 L 250 200 L 312.5 200 L 375 200" fill-rule="evenodd"></path><g id="SvgjsG2788" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2842" r="0" cx="0" cy="0" class="apexcharts-marker wdq5ieiap no-pointer-events" stroke="#4c13c4" fill="#7239ea" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2789" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2813" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine2827" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2828" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2829" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2830" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2839" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2840" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2841" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: transparent;"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                        <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                        <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                                        <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                                        <i class="ki-duotone ki-sms fs-2x text-success my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px; min-height: 200px;"><div id="apexchartsvj0d54kf" class="apexcharts-canvas apexchartsvj0d54kf apexcharts-theme-light" style="width: 375px; height: 200px;"><svg id="SvgjsSvg2844" width="375" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><g id="SvgjsG2902" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2846" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2845"><clipPath id="gridRectMaskvj0d54kf"><rect id="SvgjsRect2848" width="382" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskvj0d54kf"></clipPath><clipPath id="nonForecastMaskvj0d54kf"></clipPath><clipPath id="gridRectMarkerMaskvj0d54kf"><rect id="SvgjsRect2849" width="379" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2855" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2856" flood-color="#cb1b46" flood-opacity="0.5" result="SvgjsFeFlood2856Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2857" in="SvgjsFeFlood2856Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2857Out"></feComposite><feOffset id="SvgjsFeOffset2858" dx="0" dy="5" result="SvgjsFeOffset2858Out" in="SvgjsFeComposite2857Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2859" stdDeviation="3 " result="SvgjsFeGaussianBlur2859Out" in="SvgjsFeOffset2858Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2860" result="SvgjsFeMerge2860Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2861" in="SvgjsFeGaussianBlur2859Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2862" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2863" in="SourceGraphic" in2="SvgjsFeMerge2860Out" mode="normal" result="SvgjsFeBlend2863Out"></feBlend></filter><filter id="SvgjsFilter2865" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2866" flood-color="#cb1b46" flood-opacity="0.5" result="SvgjsFeFlood2866Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2867" in="SvgjsFeFlood2866Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2867Out"></feComposite><feOffset id="SvgjsFeOffset2868" dx="0" dy="5" result="SvgjsFeOffset2868Out" in="SvgjsFeComposite2867Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2869" stdDeviation="3 " result="SvgjsFeGaussianBlur2869Out" in="SvgjsFeOffset2868Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2870" result="SvgjsFeMerge2870Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2871" in="SvgjsFeGaussianBlur2869Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2872" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2873" in="SourceGraphic" in2="SvgjsFeMerge2870Out" mode="normal" result="SvgjsFeBlend2873Out"></feBlend></filter></defs><g id="SvgjsG2874" class="apexcharts-grid"><g id="SvgjsG2875" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2878" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2879" x1="0" y1="20" x2="375" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2880" x1="0" y1="40" x2="375" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2881" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2882" x1="0" y1="80" x2="375" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2883" x1="0" y1="100" x2="375" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2884" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2885" x1="0" y1="140" x2="375" y2="140" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2886" x1="0" y1="160" x2="375" y2="160" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2887" x1="0" y1="180" x2="375" y2="180" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2888" x1="0" y1="200" x2="375" y2="200" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2876" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2890" x1="0" y1="200" x2="375" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2889" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2850" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2851" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2854" d="M 0 200 L 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100C 375 100 375 100 375 200M 375 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvj0d54kf)" filter="url(#SvgjsFilter2855)" pathTo="M 0 200 L 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100C 375 100 375 100 375 200M 375 100z" pathFrom="M -1 200 L -1 200 L 62.5 200 L 125 200 L 187.5 200 L 250 200 L 312.5 200 L 375 200"></path><path id="SvgjsPath2864" d="M 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100" fill="none" fill-opacity="1" stroke="#cb1b46" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvj0d54kf)" filter="url(#SvgjsFilter2865)" pathTo="M 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100" pathFrom="M -1 200 L -1 200 L 62.5 200 L 125 200 L 187.5 200 L 250 200 L 312.5 200 L 375 200" fill-rule="evenodd"></path><g id="SvgjsG2852" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2906" r="0" cx="0" cy="0" class="apexcharts-marker w5toh6scs no-pointer-events" stroke="#cb1b46" fill="#f1416c" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2853" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2877" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine2891" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2892" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2893" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2894" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2903" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2904" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2905" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: transparent;"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                        <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                        <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                                        <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                                        <i class="ki-duotone ki-sms fs-2x text-success my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 2-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-primary py-5">
                            <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 200px; min-height: 200px;"><div id="apexchartscjus27pvh" class="apexcharts-canvas apexchartscjus27pvh apexcharts-theme-light" style="width: 375px; height: 200px;"><svg id="SvgjsSvg2908" width="375" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><g id="SvgjsG2966" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2910" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2909"><clipPath id="gridRectMaskcjus27pvh"><rect id="SvgjsRect2912" width="382" height="203" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcjus27pvh"></clipPath><clipPath id="nonForecastMaskcjus27pvh"></clipPath><clipPath id="gridRectMarkerMaskcjus27pvh"><rect id="SvgjsRect2913" width="379" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><filter id="SvgjsFilter2919" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2920" flood-color="#2b055b" flood-opacity="0.5" result="SvgjsFeFlood2920Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2921" in="SvgjsFeFlood2920Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2921Out"></feComposite><feOffset id="SvgjsFeOffset2922" dx="0" dy="5" result="SvgjsFeOffset2922Out" in="SvgjsFeComposite2921Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2923" stdDeviation="3 " result="SvgjsFeGaussianBlur2923Out" in="SvgjsFeOffset2922Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2924" result="SvgjsFeMerge2924Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2925" in="SvgjsFeGaussianBlur2923Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2926" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2927" in="SourceGraphic" in2="SvgjsFeMerge2924Out" mode="normal" result="SvgjsFeBlend2927Out"></feBlend></filter><filter id="SvgjsFilter2929" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2930" flood-color="#2b055b" flood-opacity="0.5" result="SvgjsFeFlood2930Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2931" in="SvgjsFeFlood2930Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2931Out"></feComposite><feOffset id="SvgjsFeOffset2932" dx="0" dy="5" result="SvgjsFeOffset2932Out" in="SvgjsFeComposite2931Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2933" stdDeviation="3 " result="SvgjsFeGaussianBlur2933Out" in="SvgjsFeOffset2932Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2934" result="SvgjsFeMerge2934Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2935" in="SvgjsFeGaussianBlur2933Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2936" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2937" in="SourceGraphic" in2="SvgjsFeMerge2934Out" mode="normal" result="SvgjsFeBlend2937Out"></feBlend></filter></defs><g id="SvgjsG2938" class="apexcharts-grid"><g id="SvgjsG2939" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2942" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2943" x1="0" y1="20" x2="375" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2944" x1="0" y1="40" x2="375" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2945" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2946" x1="0" y1="80" x2="375" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2947" x1="0" y1="100" x2="375" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2948" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2949" x1="0" y1="140" x2="375" y2="140" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2950" x1="0" y1="160" x2="375" y2="160" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2951" x1="0" y1="180" x2="375" y2="180" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2952" x1="0" y1="200" x2="375" y2="200" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2940" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2954" x1="0" y1="200" x2="375" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2953" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2914" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2915" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2918" d="M 0 200 L 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100C 375 100 375 100 375 200M 375 100z" fill="transparent" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcjus27pvh)" filter="url(#SvgjsFilter2919)" pathTo="M 0 200 L 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100C 375 100 375 100 375 200M 375 100z" pathFrom="M -1 200 L -1 200 L 62.5 200 L 125 200 L 187.5 200 L 250 200 L 312.5 200 L 375 200"></path><path id="SvgjsPath2928" d="M 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100" fill="none" fill-opacity="1" stroke="#2b055b" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskcjus27pvh)" filter="url(#SvgjsFilter2929)" pathTo="M 0 125C 21.875 125 40.625 87.5 62.5 87.5C 84.375 87.5 103.125 120 125 120C 146.875 120 165.625 25 187.5 25C 209.375 25 228.125 100 250 100C 271.875 100 290.625 100 312.5 100C 334.375 100 353.125 100 375 100" pathFrom="M -1 200 L -1 200 L 62.5 200 L 125 200 L 187.5 200 L 250 200 L 312.5 200 L 375 200" fill-rule="evenodd"></path><g id="SvgjsG2916" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2970" r="0" cx="0" cy="0" class="apexcharts-marker wwm7h80mz no-pointer-events" stroke="#2b055b" fill="#512b81" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2917" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2941" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine2955" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2956" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2957" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2958" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2967" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2968" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2969" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: transparent;"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-p mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                        <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                        <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                                        <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                                        <i class="ki-duotone ki-sms fs-2x text-success my-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 12-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-info py-5">
                            <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-12-chart card-rounded-bottom bg-info" data-kt-color="info" style="height: 250px; min-height: 250px;"><div id="apexchartsaex66rib" class="apexcharts-canvas apexchartsaex66rib apexcharts-theme-light" style="width: 375px; height: 250px;"><svg id="SvgjsSvg3901" width="375" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="250"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 125px;"></div></foreignObject><g id="SvgjsG3976" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3903" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0)"><defs id="SvgjsDefs3902"><linearGradient id="SvgjsLinearGradient3905" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3906" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3907" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3908" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskaex66rib"><rect id="SvgjsRect3910" width="340" height="251" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskaex66rib"></clipPath><clipPath id="nonForecastMaskaex66rib"></clipPath><clipPath id="gridRectMarkerMaskaex66rib"><rect id="SvgjsRect3911" width="339" height="254" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3909" width="7.178571428571428" height="250" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3905)" class="apexcharts-xcrosshairs" y2="250" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3949" class="apexcharts-grid"><g id="SvgjsG3950" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3953" x1="0" y1="0" x2="335" y2="0" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3954" x1="0" y1="25" x2="335" y2="25" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3955" x1="0" y1="50" x2="335" y2="50" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3956" x1="0" y1="75" x2="335" y2="75" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3957" x1="0" y1="100" x2="335" y2="100" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3958" x1="0" y1="125" x2="335" y2="125" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3959" x1="0" y1="150" x2="335" y2="150" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3960" x1="0" y1="175" x2="335" y2="175" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3961" x1="0" y1="200" x2="335" y2="200" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3962" x1="0" y1="225" x2="335" y2="225" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3963" x1="0" y1="250" x2="335" y2="250" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3951" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3965" x1="0" y1="250" x2="335" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3964" x1="0" y1="1" x2="0" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3912" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3913" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath3918" d="M 16.75 248.001 L 16.75 164.501 C 16.75 163.501 17.75 162.501 18.75 162.501 L 20.928571428571427 162.501 C 21.928571428571427 162.501 22.928571428571427 163.501 22.928571428571427 164.501 L 22.928571428571427 248.001 C 22.928571428571427 249.001 21.928571428571427 250.001 20.928571428571427 250.001 L 18.75 250.001 C 17.75 250.001 16.75 249.001 16.75 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 16.75 248.001 L 16.75 164.501 C 16.75 163.501 17.75 162.501 18.75 162.501 L 20.928571428571427 162.501 C 21.928571428571427 162.501 22.928571428571427 163.501 22.928571428571427 164.501 L 22.928571428571427 248.001 C 22.928571428571427 249.001 21.928571428571427 250.001 20.928571428571427 250.001 L 18.75 250.001 C 17.75 250.001 16.75 249.001 16.75 248.001 Z " pathFrom="M 16.75 250.001 L 16.75 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 16.75 250.001 Z" cy="162.5" cx="64.10714285714286" j="0" val="35" barHeight="87.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3920" d="M 64.60714285714286 248.001 L 64.60714285714286 89.501 C 64.60714285714286 88.501 65.60714285714286 87.501 66.60714285714286 87.501 L 68.78571428571429 87.501 C 69.78571428571429 87.501 70.78571428571429 88.501 70.78571428571429 89.501 L 70.78571428571429 248.001 C 70.78571428571429 249.001 69.78571428571429 250.001 68.78571428571429 250.001 L 66.60714285714286 250.001 C 65.60714285714286 250.001 64.60714285714286 249.001 64.60714285714286 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 64.60714285714286 248.001 L 64.60714285714286 89.501 C 64.60714285714286 88.501 65.60714285714286 87.501 66.60714285714286 87.501 L 68.78571428571429 87.501 C 69.78571428571429 87.501 70.78571428571429 88.501 70.78571428571429 89.501 L 70.78571428571429 248.001 C 70.78571428571429 249.001 69.78571428571429 250.001 68.78571428571429 250.001 L 66.60714285714286 250.001 C 65.60714285714286 250.001 64.60714285714286 249.001 64.60714285714286 248.001 Z " pathFrom="M 64.60714285714286 250.001 L 64.60714285714286 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 64.60714285714286 250.001 Z" cy="87.5" cx="111.96428571428572" j="1" val="65" barHeight="162.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3922" d="M 112.46428571428572 248.001 L 112.46428571428572 64.501 C 112.46428571428572 63.501000000000005 113.46428571428572 62.501 114.46428571428572 62.501 L 116.64285714285715 62.501 C 117.64285714285715 62.501 118.64285714285715 63.501000000000005 118.64285714285715 64.501 L 118.64285714285715 248.001 C 118.64285714285715 249.001 117.64285714285715 250.001 116.64285714285715 250.001 L 114.46428571428572 250.001 C 113.46428571428572 250.001 112.46428571428572 249.001 112.46428571428572 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 112.46428571428572 248.001 L 112.46428571428572 64.501 C 112.46428571428572 63.501000000000005 113.46428571428572 62.501 114.46428571428572 62.501 L 116.64285714285715 62.501 C 117.64285714285715 62.501 118.64285714285715 63.501000000000005 118.64285714285715 64.501 L 118.64285714285715 248.001 C 118.64285714285715 249.001 117.64285714285715 250.001 116.64285714285715 250.001 L 114.46428571428572 250.001 C 113.46428571428572 250.001 112.46428571428572 249.001 112.46428571428572 248.001 Z " pathFrom="M 112.46428571428572 250.001 L 112.46428571428572 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 112.46428571428572 250.001 Z" cy="62.5" cx="159.82142857142858" j="2" val="75" barHeight="187.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3924" d="M 160.32142857142858 248.001 L 160.32142857142858 114.501 C 160.32142857142858 113.501 161.32142857142858 112.501 162.32142857142858 112.501 L 164.5 112.501 C 165.5 112.501 166.5 113.501 166.5 114.501 L 166.5 248.001 C 166.5 249.001 165.5 250.001 164.5 250.001 L 162.32142857142858 250.001 C 161.32142857142858 250.001 160.32142857142858 249.001 160.32142857142858 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 160.32142857142858 248.001 L 160.32142857142858 114.501 C 160.32142857142858 113.501 161.32142857142858 112.501 162.32142857142858 112.501 L 164.5 112.501 C 165.5 112.501 166.5 113.501 166.5 114.501 L 166.5 248.001 C 166.5 249.001 165.5 250.001 164.5 250.001 L 162.32142857142858 250.001 C 161.32142857142858 250.001 160.32142857142858 249.001 160.32142857142858 248.001 Z " pathFrom="M 160.32142857142858 250.001 L 160.32142857142858 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 160.32142857142858 250.001 Z" cy="112.5" cx="207.67857142857144" j="3" val="55" barHeight="137.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3926" d="M 208.17857142857144 248.001 L 208.17857142857144 139.501 C 208.17857142857144 138.501 209.17857142857144 137.501 210.17857142857144 137.501 L 212.35714285714286 137.501 C 213.35714285714286 137.501 214.35714285714286 138.501 214.35714285714286 139.501 L 214.35714285714286 248.001 C 214.35714285714286 249.001 213.35714285714286 250.001 212.35714285714286 250.001 L 210.17857142857144 250.001 C 209.17857142857144 250.001 208.17857142857144 249.001 208.17857142857144 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 208.17857142857144 248.001 L 208.17857142857144 139.501 C 208.17857142857144 138.501 209.17857142857144 137.501 210.17857142857144 137.501 L 212.35714285714286 137.501 C 213.35714285714286 137.501 214.35714285714286 138.501 214.35714285714286 139.501 L 214.35714285714286 248.001 C 214.35714285714286 249.001 213.35714285714286 250.001 212.35714285714286 250.001 L 210.17857142857144 250.001 C 209.17857142857144 250.001 208.17857142857144 249.001 208.17857142857144 248.001 Z " pathFrom="M 208.17857142857144 250.001 L 208.17857142857144 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 208.17857142857144 250.001 Z" cy="137.5" cx="255.53571428571428" j="4" val="45" barHeight="112.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3928" d="M 256.0357142857143 248.001 L 256.0357142857143 102.001 C 256.0357142857143 101.001 257.0357142857143 100.001 258.0357142857143 100.001 L 260.2142857142857 100.001 C 261.2142857142857 100.001 262.2142857142857 101.001 262.2142857142857 102.001 L 262.2142857142857 248.001 C 262.2142857142857 249.001 261.2142857142857 250.001 260.2142857142857 250.001 L 258.0357142857143 250.001 C 257.0357142857143 250.001 256.0357142857143 249.001 256.0357142857143 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 256.0357142857143 248.001 L 256.0357142857143 102.001 C 256.0357142857143 101.001 257.0357142857143 100.001 258.0357142857143 100.001 L 260.2142857142857 100.001 C 261.2142857142857 100.001 262.2142857142857 101.001 262.2142857142857 102.001 L 262.2142857142857 248.001 C 262.2142857142857 249.001 261.2142857142857 250.001 260.2142857142857 250.001 L 258.0357142857143 250.001 C 257.0357142857143 250.001 256.0357142857143 249.001 256.0357142857143 248.001 Z " pathFrom="M 256.0357142857143 250.001 L 256.0357142857143 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 256.0357142857143 250.001 Z" cy="100" cx="303.3928571428571" j="5" val="60" barHeight="150" barWidth="7.178571428571428"></path><path id="SvgjsPath3930" d="M 303.8928571428571 248.001 L 303.8928571428571 114.501 C 303.8928571428571 113.501 304.8928571428571 112.501 305.8928571428571 112.501 L 308.07142857142856 112.501 C 309.07142857142856 112.501 310.07142857142856 113.501 310.07142857142856 114.501 L 310.07142857142856 248.001 C 310.07142857142856 249.001 309.07142857142856 250.001 308.07142857142856 250.001 L 305.8928571428571 250.001 C 304.8928571428571 250.001 303.8928571428571 249.001 303.8928571428571 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 303.8928571428571 248.001 L 303.8928571428571 114.501 C 303.8928571428571 113.501 304.8928571428571 112.501 305.8928571428571 112.501 L 308.07142857142856 112.501 C 309.07142857142856 112.501 310.07142857142856 113.501 310.07142857142856 114.501 L 310.07142857142856 248.001 C 310.07142857142856 249.001 309.07142857142856 250.001 308.07142857142856 250.001 L 305.8928571428571 250.001 C 304.8928571428571 250.001 303.8928571428571 249.001 303.8928571428571 248.001 Z " pathFrom="M 303.8928571428571 250.001 L 303.8928571428571 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 303.8928571428571 250.001 Z" cy="112.5" cx="351.24999999999994" j="6" val="55" barHeight="137.5" barWidth="7.178571428571428"></path><g id="SvgjsG3915" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3917" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3919" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3921" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3923" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3925" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3927" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3929" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g></g><g id="SvgjsG3916" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3931" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath3936" d="M 23.928571428571427 248.001 L 23.928571428571427 152.001 C 23.928571428571427 151.001 24.928571428571427 150.001 25.928571428571427 150.001 L 28.107142857142854 150.001 C 29.107142857142854 150.001 30.107142857142854 151.001 30.107142857142854 152.001 L 30.107142857142854 248.001 C 30.107142857142854 249.001 29.107142857142854 250.001 28.107142857142854 250.001 L 25.928571428571427 250.001 C 24.928571428571427 250.001 23.928571428571427 249.001 23.928571428571427 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 23.928571428571427 248.001 L 23.928571428571427 152.001 C 23.928571428571427 151.001 24.928571428571427 150.001 25.928571428571427 150.001 L 28.107142857142854 150.001 C 29.107142857142854 150.001 30.107142857142854 151.001 30.107142857142854 152.001 L 30.107142857142854 248.001 C 30.107142857142854 249.001 29.107142857142854 250.001 28.107142857142854 250.001 L 25.928571428571427 250.001 C 24.928571428571427 250.001 23.928571428571427 249.001 23.928571428571427 248.001 Z " pathFrom="M 23.928571428571427 250.001 L 23.928571428571427 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 23.928571428571427 250.001 Z" cy="150" cx="71.28571428571429" j="0" val="40" barHeight="100" barWidth="7.178571428571428"></path><path id="SvgjsPath3938" d="M 71.78571428571429 248.001 L 71.78571428571429 77.001 C 71.78571428571429 76.001 72.78571428571429 75.001 73.78571428571429 75.001 L 75.96428571428572 75.001 C 76.96428571428572 75.001 77.96428571428572 76.001 77.96428571428572 77.001 L 77.96428571428572 248.001 C 77.96428571428572 249.001 76.96428571428572 250.001 75.96428571428572 250.001 L 73.78571428571429 250.001 C 72.78571428571429 250.001 71.78571428571429 249.001 71.78571428571429 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 71.78571428571429 248.001 L 71.78571428571429 77.001 C 71.78571428571429 76.001 72.78571428571429 75.001 73.78571428571429 75.001 L 75.96428571428572 75.001 C 76.96428571428572 75.001 77.96428571428572 76.001 77.96428571428572 77.001 L 77.96428571428572 248.001 C 77.96428571428572 249.001 76.96428571428572 250.001 75.96428571428572 250.001 L 73.78571428571429 250.001 C 72.78571428571429 250.001 71.78571428571429 249.001 71.78571428571429 248.001 Z " pathFrom="M 71.78571428571429 250.001 L 71.78571428571429 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 71.78571428571429 250.001 Z" cy="75" cx="119.14285714285715" j="1" val="70" barHeight="175" barWidth="7.178571428571428"></path><path id="SvgjsPath3940" d="M 119.64285714285715 248.001 L 119.64285714285715 52.001 C 119.64285714285715 51.001 120.64285714285715 50.001 121.64285714285715 50.001 L 123.82142857142858 50.001 C 124.82142857142858 50.001 125.82142857142858 51.001 125.82142857142858 52.001 L 125.82142857142858 248.001 C 125.82142857142858 249.001 124.82142857142858 250.001 123.82142857142858 250.001 L 121.64285714285715 250.001 C 120.64285714285715 250.001 119.64285714285715 249.001 119.64285714285715 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 119.64285714285715 248.001 L 119.64285714285715 52.001 C 119.64285714285715 51.001 120.64285714285715 50.001 121.64285714285715 50.001 L 123.82142857142858 50.001 C 124.82142857142858 50.001 125.82142857142858 51.001 125.82142857142858 52.001 L 125.82142857142858 248.001 C 125.82142857142858 249.001 124.82142857142858 250.001 123.82142857142858 250.001 L 121.64285714285715 250.001 C 120.64285714285715 250.001 119.64285714285715 249.001 119.64285714285715 248.001 Z " pathFrom="M 119.64285714285715 250.001 L 119.64285714285715 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 119.64285714285715 250.001 Z" cy="50" cx="167" j="2" val="80" barHeight="200" barWidth="7.178571428571428"></path><path id="SvgjsPath3942" d="M 167.5 248.001 L 167.5 102.001 C 167.5 101.001 168.5 100.001 169.5 100.001 L 171.67857142857142 100.001 C 172.67857142857142 100.001 173.67857142857142 101.001 173.67857142857142 102.001 L 173.67857142857142 248.001 C 173.67857142857142 249.001 172.67857142857142 250.001 171.67857142857142 250.001 L 169.5 250.001 C 168.5 250.001 167.5 249.001 167.5 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 167.5 248.001 L 167.5 102.001 C 167.5 101.001 168.5 100.001 169.5 100.001 L 171.67857142857142 100.001 C 172.67857142857142 100.001 173.67857142857142 101.001 173.67857142857142 102.001 L 173.67857142857142 248.001 C 173.67857142857142 249.001 172.67857142857142 250.001 171.67857142857142 250.001 L 169.5 250.001 C 168.5 250.001 167.5 249.001 167.5 248.001 Z " pathFrom="M 167.5 250.001 L 167.5 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 167.5 250.001 Z" cy="100" cx="214.85714285714286" j="3" val="60" barHeight="150" barWidth="7.178571428571428"></path><path id="SvgjsPath3944" d="M 215.35714285714286 248.001 L 215.35714285714286 127.001 C 215.35714285714286 126.001 216.35714285714286 125.001 217.35714285714286 125.001 L 219.53571428571428 125.001 C 220.53571428571428 125.001 221.53571428571428 126.001 221.53571428571428 127.001 L 221.53571428571428 248.001 C 221.53571428571428 249.001 220.53571428571428 250.001 219.53571428571428 250.001 L 217.35714285714286 250.001 C 216.35714285714286 250.001 215.35714285714286 249.001 215.35714285714286 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 215.35714285714286 248.001 L 215.35714285714286 127.001 C 215.35714285714286 126.001 216.35714285714286 125.001 217.35714285714286 125.001 L 219.53571428571428 125.001 C 220.53571428571428 125.001 221.53571428571428 126.001 221.53571428571428 127.001 L 221.53571428571428 248.001 C 221.53571428571428 249.001 220.53571428571428 250.001 219.53571428571428 250.001 L 217.35714285714286 250.001 C 216.35714285714286 250.001 215.35714285714286 249.001 215.35714285714286 248.001 Z " pathFrom="M 215.35714285714286 250.001 L 215.35714285714286 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 215.35714285714286 250.001 Z" cy="125" cx="262.7142857142857" j="4" val="50" barHeight="125" barWidth="7.178571428571428"></path><path id="SvgjsPath3946" d="M 263.2142857142857 248.001 L 263.2142857142857 89.501 C 263.2142857142857 88.501 264.2142857142857 87.501 265.2142857142857 87.501 L 267.39285714285717 87.501 C 268.39285714285717 87.501 269.39285714285717 88.501 269.39285714285717 89.501 L 269.39285714285717 248.001 C 269.39285714285717 249.001 268.39285714285717 250.001 267.39285714285717 250.001 L 265.2142857142857 250.001 C 264.2142857142857 250.001 263.2142857142857 249.001 263.2142857142857 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 263.2142857142857 248.001 L 263.2142857142857 89.501 C 263.2142857142857 88.501 264.2142857142857 87.501 265.2142857142857 87.501 L 267.39285714285717 87.501 C 268.39285714285717 87.501 269.39285714285717 88.501 269.39285714285717 89.501 L 269.39285714285717 248.001 C 269.39285714285717 249.001 268.39285714285717 250.001 267.39285714285717 250.001 L 265.2142857142857 250.001 C 264.2142857142857 250.001 263.2142857142857 249.001 263.2142857142857 248.001 Z " pathFrom="M 263.2142857142857 250.001 L 263.2142857142857 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 263.2142857142857 250.001 Z" cy="87.5" cx="310.57142857142856" j="5" val="65" barHeight="162.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3948" d="M 311.07142857142856 248.001 L 311.07142857142856 102.001 C 311.07142857142856 101.001 312.07142857142856 100.001 313.07142857142856 100.001 L 315.25 100.001 C 316.25 100.001 317.25 101.001 317.25 102.001 L 317.25 248.001 C 317.25 249.001 316.25 250.001 315.25 250.001 L 313.07142857142856 250.001 C 312.07142857142856 250.001 311.07142857142856 249.001 311.07142857142856 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskaex66rib)" pathTo="M 311.07142857142856 248.001 L 311.07142857142856 102.001 C 311.07142857142856 101.001 312.07142857142856 100.001 313.07142857142856 100.001 L 315.25 100.001 C 316.25 100.001 317.25 101.001 317.25 102.001 L 317.25 248.001 C 317.25 249.001 316.25 250.001 315.25 250.001 L 313.07142857142856 250.001 C 312.07142857142856 250.001 311.07142857142856 249.001 311.07142857142856 248.001 Z " pathFrom="M 311.07142857142856 250.001 L 311.07142857142856 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 311.07142857142856 250.001 Z" cy="100" cx="358.4285714285714" j="6" val="60" barHeight="150" barWidth="7.178571428571428"></path><g id="SvgjsG3933" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3935" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3937" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3939" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3941" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3943" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3945" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g><g id="SvgjsG3947" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskaex66rib)"></g></g><g id="SvgjsG3934" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3914" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG3932" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><g id="SvgjsG3952" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3966" x1="0" y1="0" x2="335" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3967" x1="0" y1="0" x2="335" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3968" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3969" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3977" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3978" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3979" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                                <!--begin::Row-->
                                <div class="row g-0 mb-7">
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Avarage Sale</div>
                                        <div class="fs-2 fw-bold text-gray-800">$650</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Comissions</div>
                                        <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Revenue</div>
                                        <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Expenses</div>
                                        <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 12-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 12-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-12-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 250px; min-height: 250px;"><div id="apexchartsiyf3bjyg" class="apexcharts-canvas apexchartsiyf3bjyg apexcharts-theme-light" style="width: 375px; height: 250px;"><svg id="SvgjsSvg3980" width="375" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="250"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 125px;"></div></foreignObject><g id="SvgjsG4055" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3982" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0)"><defs id="SvgjsDefs3981"><linearGradient id="SvgjsLinearGradient3984" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3985" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3986" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3987" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskiyf3bjyg"><rect id="SvgjsRect3989" width="340" height="251" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskiyf3bjyg"></clipPath><clipPath id="nonForecastMaskiyf3bjyg"></clipPath><clipPath id="gridRectMarkerMaskiyf3bjyg"><rect id="SvgjsRect3990" width="339" height="254" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3988" width="7.178571428571428" height="250" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3984)" class="apexcharts-xcrosshairs" y2="250" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG4028" class="apexcharts-grid"><g id="SvgjsG4029" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4032" x1="0" y1="0" x2="335" y2="0" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4033" x1="0" y1="25" x2="335" y2="25" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4034" x1="0" y1="50" x2="335" y2="50" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4035" x1="0" y1="75" x2="335" y2="75" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4036" x1="0" y1="100" x2="335" y2="100" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4037" x1="0" y1="125" x2="335" y2="125" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4038" x1="0" y1="150" x2="335" y2="150" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4039" x1="0" y1="175" x2="335" y2="175" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4040" x1="0" y1="200" x2="335" y2="200" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4041" x1="0" y1="225" x2="335" y2="225" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4042" x1="0" y1="250" x2="335" y2="250" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4030" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4044" x1="0" y1="250" x2="335" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4043" x1="0" y1="1" x2="0" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3991" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3992" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath3997" d="M 16.75 248.001 L 16.75 164.501 C 16.75 163.501 17.75 162.501 18.75 162.501 L 20.928571428571427 162.501 C 21.928571428571427 162.501 22.928571428571427 163.501 22.928571428571427 164.501 L 22.928571428571427 248.001 C 22.928571428571427 249.001 21.928571428571427 250.001 20.928571428571427 250.001 L 18.75 250.001 C 17.75 250.001 16.75 249.001 16.75 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 16.75 248.001 L 16.75 164.501 C 16.75 163.501 17.75 162.501 18.75 162.501 L 20.928571428571427 162.501 C 21.928571428571427 162.501 22.928571428571427 163.501 22.928571428571427 164.501 L 22.928571428571427 248.001 C 22.928571428571427 249.001 21.928571428571427 250.001 20.928571428571427 250.001 L 18.75 250.001 C 17.75 250.001 16.75 249.001 16.75 248.001 Z " pathFrom="M 16.75 250.001 L 16.75 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 16.75 250.001 Z" cy="162.5" cx="64.10714285714286" j="0" val="35" barHeight="87.5" barWidth="7.178571428571428"></path><path id="SvgjsPath3999" d="M 64.60714285714286 248.001 L 64.60714285714286 89.501 C 64.60714285714286 88.501 65.60714285714286 87.501 66.60714285714286 87.501 L 68.78571428571429 87.501 C 69.78571428571429 87.501 70.78571428571429 88.501 70.78571428571429 89.501 L 70.78571428571429 248.001 C 70.78571428571429 249.001 69.78571428571429 250.001 68.78571428571429 250.001 L 66.60714285714286 250.001 C 65.60714285714286 250.001 64.60714285714286 249.001 64.60714285714286 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 64.60714285714286 248.001 L 64.60714285714286 89.501 C 64.60714285714286 88.501 65.60714285714286 87.501 66.60714285714286 87.501 L 68.78571428571429 87.501 C 69.78571428571429 87.501 70.78571428571429 88.501 70.78571428571429 89.501 L 70.78571428571429 248.001 C 70.78571428571429 249.001 69.78571428571429 250.001 68.78571428571429 250.001 L 66.60714285714286 250.001 C 65.60714285714286 250.001 64.60714285714286 249.001 64.60714285714286 248.001 Z " pathFrom="M 64.60714285714286 250.001 L 64.60714285714286 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 64.60714285714286 250.001 Z" cy="87.5" cx="111.96428571428572" j="1" val="65" barHeight="162.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4001" d="M 112.46428571428572 248.001 L 112.46428571428572 64.501 C 112.46428571428572 63.501000000000005 113.46428571428572 62.501 114.46428571428572 62.501 L 116.64285714285715 62.501 C 117.64285714285715 62.501 118.64285714285715 63.501000000000005 118.64285714285715 64.501 L 118.64285714285715 248.001 C 118.64285714285715 249.001 117.64285714285715 250.001 116.64285714285715 250.001 L 114.46428571428572 250.001 C 113.46428571428572 250.001 112.46428571428572 249.001 112.46428571428572 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 112.46428571428572 248.001 L 112.46428571428572 64.501 C 112.46428571428572 63.501000000000005 113.46428571428572 62.501 114.46428571428572 62.501 L 116.64285714285715 62.501 C 117.64285714285715 62.501 118.64285714285715 63.501000000000005 118.64285714285715 64.501 L 118.64285714285715 248.001 C 118.64285714285715 249.001 117.64285714285715 250.001 116.64285714285715 250.001 L 114.46428571428572 250.001 C 113.46428571428572 250.001 112.46428571428572 249.001 112.46428571428572 248.001 Z " pathFrom="M 112.46428571428572 250.001 L 112.46428571428572 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 112.46428571428572 250.001 Z" cy="62.5" cx="159.82142857142858" j="2" val="75" barHeight="187.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4003" d="M 160.32142857142858 248.001 L 160.32142857142858 114.501 C 160.32142857142858 113.501 161.32142857142858 112.501 162.32142857142858 112.501 L 164.5 112.501 C 165.5 112.501 166.5 113.501 166.5 114.501 L 166.5 248.001 C 166.5 249.001 165.5 250.001 164.5 250.001 L 162.32142857142858 250.001 C 161.32142857142858 250.001 160.32142857142858 249.001 160.32142857142858 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 160.32142857142858 248.001 L 160.32142857142858 114.501 C 160.32142857142858 113.501 161.32142857142858 112.501 162.32142857142858 112.501 L 164.5 112.501 C 165.5 112.501 166.5 113.501 166.5 114.501 L 166.5 248.001 C 166.5 249.001 165.5 250.001 164.5 250.001 L 162.32142857142858 250.001 C 161.32142857142858 250.001 160.32142857142858 249.001 160.32142857142858 248.001 Z " pathFrom="M 160.32142857142858 250.001 L 160.32142857142858 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 160.32142857142858 250.001 Z" cy="112.5" cx="207.67857142857144" j="3" val="55" barHeight="137.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4005" d="M 208.17857142857144 248.001 L 208.17857142857144 139.501 C 208.17857142857144 138.501 209.17857142857144 137.501 210.17857142857144 137.501 L 212.35714285714286 137.501 C 213.35714285714286 137.501 214.35714285714286 138.501 214.35714285714286 139.501 L 214.35714285714286 248.001 C 214.35714285714286 249.001 213.35714285714286 250.001 212.35714285714286 250.001 L 210.17857142857144 250.001 C 209.17857142857144 250.001 208.17857142857144 249.001 208.17857142857144 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 208.17857142857144 248.001 L 208.17857142857144 139.501 C 208.17857142857144 138.501 209.17857142857144 137.501 210.17857142857144 137.501 L 212.35714285714286 137.501 C 213.35714285714286 137.501 214.35714285714286 138.501 214.35714285714286 139.501 L 214.35714285714286 248.001 C 214.35714285714286 249.001 213.35714285714286 250.001 212.35714285714286 250.001 L 210.17857142857144 250.001 C 209.17857142857144 250.001 208.17857142857144 249.001 208.17857142857144 248.001 Z " pathFrom="M 208.17857142857144 250.001 L 208.17857142857144 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 208.17857142857144 250.001 Z" cy="137.5" cx="255.53571428571428" j="4" val="45" barHeight="112.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4007" d="M 256.0357142857143 248.001 L 256.0357142857143 102.001 C 256.0357142857143 101.001 257.0357142857143 100.001 258.0357142857143 100.001 L 260.2142857142857 100.001 C 261.2142857142857 100.001 262.2142857142857 101.001 262.2142857142857 102.001 L 262.2142857142857 248.001 C 262.2142857142857 249.001 261.2142857142857 250.001 260.2142857142857 250.001 L 258.0357142857143 250.001 C 257.0357142857143 250.001 256.0357142857143 249.001 256.0357142857143 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 256.0357142857143 248.001 L 256.0357142857143 102.001 C 256.0357142857143 101.001 257.0357142857143 100.001 258.0357142857143 100.001 L 260.2142857142857 100.001 C 261.2142857142857 100.001 262.2142857142857 101.001 262.2142857142857 102.001 L 262.2142857142857 248.001 C 262.2142857142857 249.001 261.2142857142857 250.001 260.2142857142857 250.001 L 258.0357142857143 250.001 C 257.0357142857143 250.001 256.0357142857143 249.001 256.0357142857143 248.001 Z " pathFrom="M 256.0357142857143 250.001 L 256.0357142857143 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 256.0357142857143 250.001 Z" cy="100" cx="303.3928571428571" j="5" val="60" barHeight="150" barWidth="7.178571428571428"></path><path id="SvgjsPath4009" d="M 303.8928571428571 248.001 L 303.8928571428571 114.501 C 303.8928571428571 113.501 304.8928571428571 112.501 305.8928571428571 112.501 L 308.07142857142856 112.501 C 309.07142857142856 112.501 310.07142857142856 113.501 310.07142857142856 114.501 L 310.07142857142856 248.001 C 310.07142857142856 249.001 309.07142857142856 250.001 308.07142857142856 250.001 L 305.8928571428571 250.001 C 304.8928571428571 250.001 303.8928571428571 249.001 303.8928571428571 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 303.8928571428571 248.001 L 303.8928571428571 114.501 C 303.8928571428571 113.501 304.8928571428571 112.501 305.8928571428571 112.501 L 308.07142857142856 112.501 C 309.07142857142856 112.501 310.07142857142856 113.501 310.07142857142856 114.501 L 310.07142857142856 248.001 C 310.07142857142856 249.001 309.07142857142856 250.001 308.07142857142856 250.001 L 305.8928571428571 250.001 C 304.8928571428571 250.001 303.8928571428571 249.001 303.8928571428571 248.001 Z " pathFrom="M 303.8928571428571 250.001 L 303.8928571428571 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 303.8928571428571 250.001 Z" cy="112.5" cx="351.24999999999994" j="6" val="55" barHeight="137.5" barWidth="7.178571428571428"></path><g id="SvgjsG3994" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3996" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG3998" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4000" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4002" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4004" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4006" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4008" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g></g><g id="SvgjsG3995" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG4010" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath4015" d="M 23.928571428571427 248.001 L 23.928571428571427 152.001 C 23.928571428571427 151.001 24.928571428571427 150.001 25.928571428571427 150.001 L 28.107142857142854 150.001 C 29.107142857142854 150.001 30.107142857142854 151.001 30.107142857142854 152.001 L 30.107142857142854 248.001 C 30.107142857142854 249.001 29.107142857142854 250.001 28.107142857142854 250.001 L 25.928571428571427 250.001 C 24.928571428571427 250.001 23.928571428571427 249.001 23.928571428571427 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 23.928571428571427 248.001 L 23.928571428571427 152.001 C 23.928571428571427 151.001 24.928571428571427 150.001 25.928571428571427 150.001 L 28.107142857142854 150.001 C 29.107142857142854 150.001 30.107142857142854 151.001 30.107142857142854 152.001 L 30.107142857142854 248.001 C 30.107142857142854 249.001 29.107142857142854 250.001 28.107142857142854 250.001 L 25.928571428571427 250.001 C 24.928571428571427 250.001 23.928571428571427 249.001 23.928571428571427 248.001 Z " pathFrom="M 23.928571428571427 250.001 L 23.928571428571427 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 23.928571428571427 250.001 Z" cy="150" cx="71.28571428571429" j="0" val="40" barHeight="100" barWidth="7.178571428571428"></path><path id="SvgjsPath4017" d="M 71.78571428571429 248.001 L 71.78571428571429 77.001 C 71.78571428571429 76.001 72.78571428571429 75.001 73.78571428571429 75.001 L 75.96428571428572 75.001 C 76.96428571428572 75.001 77.96428571428572 76.001 77.96428571428572 77.001 L 77.96428571428572 248.001 C 77.96428571428572 249.001 76.96428571428572 250.001 75.96428571428572 250.001 L 73.78571428571429 250.001 C 72.78571428571429 250.001 71.78571428571429 249.001 71.78571428571429 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 71.78571428571429 248.001 L 71.78571428571429 77.001 C 71.78571428571429 76.001 72.78571428571429 75.001 73.78571428571429 75.001 L 75.96428571428572 75.001 C 76.96428571428572 75.001 77.96428571428572 76.001 77.96428571428572 77.001 L 77.96428571428572 248.001 C 77.96428571428572 249.001 76.96428571428572 250.001 75.96428571428572 250.001 L 73.78571428571429 250.001 C 72.78571428571429 250.001 71.78571428571429 249.001 71.78571428571429 248.001 Z " pathFrom="M 71.78571428571429 250.001 L 71.78571428571429 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 71.78571428571429 250.001 Z" cy="75" cx="119.14285714285715" j="1" val="70" barHeight="175" barWidth="7.178571428571428"></path><path id="SvgjsPath4019" d="M 119.64285714285715 248.001 L 119.64285714285715 52.001 C 119.64285714285715 51.001 120.64285714285715 50.001 121.64285714285715 50.001 L 123.82142857142858 50.001 C 124.82142857142858 50.001 125.82142857142858 51.001 125.82142857142858 52.001 L 125.82142857142858 248.001 C 125.82142857142858 249.001 124.82142857142858 250.001 123.82142857142858 250.001 L 121.64285714285715 250.001 C 120.64285714285715 250.001 119.64285714285715 249.001 119.64285714285715 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 119.64285714285715 248.001 L 119.64285714285715 52.001 C 119.64285714285715 51.001 120.64285714285715 50.001 121.64285714285715 50.001 L 123.82142857142858 50.001 C 124.82142857142858 50.001 125.82142857142858 51.001 125.82142857142858 52.001 L 125.82142857142858 248.001 C 125.82142857142858 249.001 124.82142857142858 250.001 123.82142857142858 250.001 L 121.64285714285715 250.001 C 120.64285714285715 250.001 119.64285714285715 249.001 119.64285714285715 248.001 Z " pathFrom="M 119.64285714285715 250.001 L 119.64285714285715 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 119.64285714285715 250.001 Z" cy="50" cx="167" j="2" val="80" barHeight="200" barWidth="7.178571428571428"></path><path id="SvgjsPath4021" d="M 167.5 248.001 L 167.5 102.001 C 167.5 101.001 168.5 100.001 169.5 100.001 L 171.67857142857142 100.001 C 172.67857142857142 100.001 173.67857142857142 101.001 173.67857142857142 102.001 L 173.67857142857142 248.001 C 173.67857142857142 249.001 172.67857142857142 250.001 171.67857142857142 250.001 L 169.5 250.001 C 168.5 250.001 167.5 249.001 167.5 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 167.5 248.001 L 167.5 102.001 C 167.5 101.001 168.5 100.001 169.5 100.001 L 171.67857142857142 100.001 C 172.67857142857142 100.001 173.67857142857142 101.001 173.67857142857142 102.001 L 173.67857142857142 248.001 C 173.67857142857142 249.001 172.67857142857142 250.001 171.67857142857142 250.001 L 169.5 250.001 C 168.5 250.001 167.5 249.001 167.5 248.001 Z " pathFrom="M 167.5 250.001 L 167.5 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 167.5 250.001 Z" cy="100" cx="214.85714285714286" j="3" val="60" barHeight="150" barWidth="7.178571428571428"></path><path id="SvgjsPath4023" d="M 215.35714285714286 248.001 L 215.35714285714286 127.001 C 215.35714285714286 126.001 216.35714285714286 125.001 217.35714285714286 125.001 L 219.53571428571428 125.001 C 220.53571428571428 125.001 221.53571428571428 126.001 221.53571428571428 127.001 L 221.53571428571428 248.001 C 221.53571428571428 249.001 220.53571428571428 250.001 219.53571428571428 250.001 L 217.35714285714286 250.001 C 216.35714285714286 250.001 215.35714285714286 249.001 215.35714285714286 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 215.35714285714286 248.001 L 215.35714285714286 127.001 C 215.35714285714286 126.001 216.35714285714286 125.001 217.35714285714286 125.001 L 219.53571428571428 125.001 C 220.53571428571428 125.001 221.53571428571428 126.001 221.53571428571428 127.001 L 221.53571428571428 248.001 C 221.53571428571428 249.001 220.53571428571428 250.001 219.53571428571428 250.001 L 217.35714285714286 250.001 C 216.35714285714286 250.001 215.35714285714286 249.001 215.35714285714286 248.001 Z " pathFrom="M 215.35714285714286 250.001 L 215.35714285714286 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 215.35714285714286 250.001 Z" cy="125" cx="262.7142857142857" j="4" val="50" barHeight="125" barWidth="7.178571428571428"></path><path id="SvgjsPath4025" d="M 263.2142857142857 248.001 L 263.2142857142857 89.501 C 263.2142857142857 88.501 264.2142857142857 87.501 265.2142857142857 87.501 L 267.39285714285717 87.501 C 268.39285714285717 87.501 269.39285714285717 88.501 269.39285714285717 89.501 L 269.39285714285717 248.001 C 269.39285714285717 249.001 268.39285714285717 250.001 267.39285714285717 250.001 L 265.2142857142857 250.001 C 264.2142857142857 250.001 263.2142857142857 249.001 263.2142857142857 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 263.2142857142857 248.001 L 263.2142857142857 89.501 C 263.2142857142857 88.501 264.2142857142857 87.501 265.2142857142857 87.501 L 267.39285714285717 87.501 C 268.39285714285717 87.501 269.39285714285717 88.501 269.39285714285717 89.501 L 269.39285714285717 248.001 C 269.39285714285717 249.001 268.39285714285717 250.001 267.39285714285717 250.001 L 265.2142857142857 250.001 C 264.2142857142857 250.001 263.2142857142857 249.001 263.2142857142857 248.001 Z " pathFrom="M 263.2142857142857 250.001 L 263.2142857142857 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 263.2142857142857 250.001 Z" cy="87.5" cx="310.57142857142856" j="5" val="65" barHeight="162.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4027" d="M 311.07142857142856 248.001 L 311.07142857142856 102.001 C 311.07142857142856 101.001 312.07142857142856 100.001 313.07142857142856 100.001 L 315.25 100.001 C 316.25 100.001 317.25 101.001 317.25 102.001 L 317.25 248.001 C 317.25 249.001 316.25 250.001 315.25 250.001 L 313.07142857142856 250.001 C 312.07142857142856 250.001 311.07142857142856 249.001 311.07142857142856 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskiyf3bjyg)" pathTo="M 311.07142857142856 248.001 L 311.07142857142856 102.001 C 311.07142857142856 101.001 312.07142857142856 100.001 313.07142857142856 100.001 L 315.25 100.001 C 316.25 100.001 317.25 101.001 317.25 102.001 L 317.25 248.001 C 317.25 249.001 316.25 250.001 315.25 250.001 L 313.07142857142856 250.001 C 312.07142857142856 250.001 311.07142857142856 249.001 311.07142857142856 248.001 Z " pathFrom="M 311.07142857142856 250.001 L 311.07142857142856 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 311.07142857142856 250.001 Z" cy="100" cx="358.4285714285714" j="6" val="60" barHeight="150" barWidth="7.178571428571428"></path><g id="SvgjsG4012" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4014" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4016" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4018" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4020" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4022" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4024" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g><g id="SvgjsG4026" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiyf3bjyg)"></g></g><g id="SvgjsG4013" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3993" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG4011" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><g id="SvgjsG4031" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4045" x1="0" y1="0" x2="335" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4046" x1="0" y1="0" x2="335" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4047" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4048" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4056" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4057" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4058" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                                <!--begin::Row-->
                                <div class="row g-0 mb-7">
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Avarage Sale</div>
                                        <div class="fs-2 fw-bold text-gray-800">$650</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Comissions</div>
                                        <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Revenue</div>
                                        <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Expenses</div>
                                        <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 12-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 12-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-primary py-5">
                            <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Chart-->
                            <div class="mixed-widget-12-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 250px; min-height: 250px;"><div id="apexchartsqzi6977i" class="apexcharts-canvas apexchartsqzi6977i apexcharts-theme-light" style="width: 375px; height: 250px;"><svg id="SvgjsSvg4059" width="375" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="250"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 125px;"></div></foreignObject><g id="SvgjsG4134" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4061" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0)"><defs id="SvgjsDefs4060"><linearGradient id="SvgjsLinearGradient4063" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4064" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop4065" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop4066" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskqzi6977i"><rect id="SvgjsRect4068" width="340" height="251" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskqzi6977i"></clipPath><clipPath id="nonForecastMaskqzi6977i"></clipPath><clipPath id="gridRectMarkerMaskqzi6977i"><rect id="SvgjsRect4069" width="339" height="254" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect4067" width="7.178571428571428" height="250" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient4063)" class="apexcharts-xcrosshairs" y2="250" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG4107" class="apexcharts-grid"><g id="SvgjsG4108" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4111" x1="0" y1="0" x2="335" y2="0" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4112" x1="0" y1="25" x2="335" y2="25" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4113" x1="0" y1="50" x2="335" y2="50" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4114" x1="0" y1="75" x2="335" y2="75" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4115" x1="0" y1="100" x2="335" y2="100" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4116" x1="0" y1="125" x2="335" y2="125" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4117" x1="0" y1="150" x2="335" y2="150" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4118" x1="0" y1="175" x2="335" y2="175" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4119" x1="0" y1="200" x2="335" y2="200" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4120" x1="0" y1="225" x2="335" y2="225" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4121" x1="0" y1="250" x2="335" y2="250" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4109" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4123" x1="0" y1="250" x2="335" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4122" x1="0" y1="1" x2="0" y2="250" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4070" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG4071" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath4076" d="M 16.75 248.001 L 16.75 164.501 C 16.75 163.501 17.75 162.501 18.75 162.501 L 20.928571428571427 162.501 C 21.928571428571427 162.501 22.928571428571427 163.501 22.928571428571427 164.501 L 22.928571428571427 248.001 C 22.928571428571427 249.001 21.928571428571427 250.001 20.928571428571427 250.001 L 18.75 250.001 C 17.75 250.001 16.75 249.001 16.75 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 16.75 248.001 L 16.75 164.501 C 16.75 163.501 17.75 162.501 18.75 162.501 L 20.928571428571427 162.501 C 21.928571428571427 162.501 22.928571428571427 163.501 22.928571428571427 164.501 L 22.928571428571427 248.001 C 22.928571428571427 249.001 21.928571428571427 250.001 20.928571428571427 250.001 L 18.75 250.001 C 17.75 250.001 16.75 249.001 16.75 248.001 Z " pathFrom="M 16.75 250.001 L 16.75 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 22.928571428571427 250.001 L 16.75 250.001 Z" cy="162.5" cx="64.10714285714286" j="0" val="35" barHeight="87.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4078" d="M 64.60714285714286 248.001 L 64.60714285714286 89.501 C 64.60714285714286 88.501 65.60714285714286 87.501 66.60714285714286 87.501 L 68.78571428571429 87.501 C 69.78571428571429 87.501 70.78571428571429 88.501 70.78571428571429 89.501 L 70.78571428571429 248.001 C 70.78571428571429 249.001 69.78571428571429 250.001 68.78571428571429 250.001 L 66.60714285714286 250.001 C 65.60714285714286 250.001 64.60714285714286 249.001 64.60714285714286 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 64.60714285714286 248.001 L 64.60714285714286 89.501 C 64.60714285714286 88.501 65.60714285714286 87.501 66.60714285714286 87.501 L 68.78571428571429 87.501 C 69.78571428571429 87.501 70.78571428571429 88.501 70.78571428571429 89.501 L 70.78571428571429 248.001 C 70.78571428571429 249.001 69.78571428571429 250.001 68.78571428571429 250.001 L 66.60714285714286 250.001 C 65.60714285714286 250.001 64.60714285714286 249.001 64.60714285714286 248.001 Z " pathFrom="M 64.60714285714286 250.001 L 64.60714285714286 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 70.78571428571429 250.001 L 64.60714285714286 250.001 Z" cy="87.5" cx="111.96428571428572" j="1" val="65" barHeight="162.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4080" d="M 112.46428571428572 248.001 L 112.46428571428572 64.501 C 112.46428571428572 63.501000000000005 113.46428571428572 62.501 114.46428571428572 62.501 L 116.64285714285715 62.501 C 117.64285714285715 62.501 118.64285714285715 63.501000000000005 118.64285714285715 64.501 L 118.64285714285715 248.001 C 118.64285714285715 249.001 117.64285714285715 250.001 116.64285714285715 250.001 L 114.46428571428572 250.001 C 113.46428571428572 250.001 112.46428571428572 249.001 112.46428571428572 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 112.46428571428572 248.001 L 112.46428571428572 64.501 C 112.46428571428572 63.501000000000005 113.46428571428572 62.501 114.46428571428572 62.501 L 116.64285714285715 62.501 C 117.64285714285715 62.501 118.64285714285715 63.501000000000005 118.64285714285715 64.501 L 118.64285714285715 248.001 C 118.64285714285715 249.001 117.64285714285715 250.001 116.64285714285715 250.001 L 114.46428571428572 250.001 C 113.46428571428572 250.001 112.46428571428572 249.001 112.46428571428572 248.001 Z " pathFrom="M 112.46428571428572 250.001 L 112.46428571428572 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 118.64285714285715 250.001 L 112.46428571428572 250.001 Z" cy="62.5" cx="159.82142857142858" j="2" val="75" barHeight="187.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4082" d="M 160.32142857142858 248.001 L 160.32142857142858 114.501 C 160.32142857142858 113.501 161.32142857142858 112.501 162.32142857142858 112.501 L 164.5 112.501 C 165.5 112.501 166.5 113.501 166.5 114.501 L 166.5 248.001 C 166.5 249.001 165.5 250.001 164.5 250.001 L 162.32142857142858 250.001 C 161.32142857142858 250.001 160.32142857142858 249.001 160.32142857142858 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 160.32142857142858 248.001 L 160.32142857142858 114.501 C 160.32142857142858 113.501 161.32142857142858 112.501 162.32142857142858 112.501 L 164.5 112.501 C 165.5 112.501 166.5 113.501 166.5 114.501 L 166.5 248.001 C 166.5 249.001 165.5 250.001 164.5 250.001 L 162.32142857142858 250.001 C 161.32142857142858 250.001 160.32142857142858 249.001 160.32142857142858 248.001 Z " pathFrom="M 160.32142857142858 250.001 L 160.32142857142858 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 166.5 250.001 L 160.32142857142858 250.001 Z" cy="112.5" cx="207.67857142857144" j="3" val="55" barHeight="137.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4084" d="M 208.17857142857144 248.001 L 208.17857142857144 139.501 C 208.17857142857144 138.501 209.17857142857144 137.501 210.17857142857144 137.501 L 212.35714285714286 137.501 C 213.35714285714286 137.501 214.35714285714286 138.501 214.35714285714286 139.501 L 214.35714285714286 248.001 C 214.35714285714286 249.001 213.35714285714286 250.001 212.35714285714286 250.001 L 210.17857142857144 250.001 C 209.17857142857144 250.001 208.17857142857144 249.001 208.17857142857144 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 208.17857142857144 248.001 L 208.17857142857144 139.501 C 208.17857142857144 138.501 209.17857142857144 137.501 210.17857142857144 137.501 L 212.35714285714286 137.501 C 213.35714285714286 137.501 214.35714285714286 138.501 214.35714285714286 139.501 L 214.35714285714286 248.001 C 214.35714285714286 249.001 213.35714285714286 250.001 212.35714285714286 250.001 L 210.17857142857144 250.001 C 209.17857142857144 250.001 208.17857142857144 249.001 208.17857142857144 248.001 Z " pathFrom="M 208.17857142857144 250.001 L 208.17857142857144 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 214.35714285714286 250.001 L 208.17857142857144 250.001 Z" cy="137.5" cx="255.53571428571428" j="4" val="45" barHeight="112.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4086" d="M 256.0357142857143 248.001 L 256.0357142857143 102.001 C 256.0357142857143 101.001 257.0357142857143 100.001 258.0357142857143 100.001 L 260.2142857142857 100.001 C 261.2142857142857 100.001 262.2142857142857 101.001 262.2142857142857 102.001 L 262.2142857142857 248.001 C 262.2142857142857 249.001 261.2142857142857 250.001 260.2142857142857 250.001 L 258.0357142857143 250.001 C 257.0357142857143 250.001 256.0357142857143 249.001 256.0357142857143 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 256.0357142857143 248.001 L 256.0357142857143 102.001 C 256.0357142857143 101.001 257.0357142857143 100.001 258.0357142857143 100.001 L 260.2142857142857 100.001 C 261.2142857142857 100.001 262.2142857142857 101.001 262.2142857142857 102.001 L 262.2142857142857 248.001 C 262.2142857142857 249.001 261.2142857142857 250.001 260.2142857142857 250.001 L 258.0357142857143 250.001 C 257.0357142857143 250.001 256.0357142857143 249.001 256.0357142857143 248.001 Z " pathFrom="M 256.0357142857143 250.001 L 256.0357142857143 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 262.2142857142857 250.001 L 256.0357142857143 250.001 Z" cy="100" cx="303.3928571428571" j="5" val="60" barHeight="150" barWidth="7.178571428571428"></path><path id="SvgjsPath4088" d="M 303.8928571428571 248.001 L 303.8928571428571 114.501 C 303.8928571428571 113.501 304.8928571428571 112.501 305.8928571428571 112.501 L 308.07142857142856 112.501 C 309.07142857142856 112.501 310.07142857142856 113.501 310.07142857142856 114.501 L 310.07142857142856 248.001 C 310.07142857142856 249.001 309.07142857142856 250.001 308.07142857142856 250.001 L 305.8928571428571 250.001 C 304.8928571428571 250.001 303.8928571428571 249.001 303.8928571428571 248.001 Z " fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 303.8928571428571 248.001 L 303.8928571428571 114.501 C 303.8928571428571 113.501 304.8928571428571 112.501 305.8928571428571 112.501 L 308.07142857142856 112.501 C 309.07142857142856 112.501 310.07142857142856 113.501 310.07142857142856 114.501 L 310.07142857142856 248.001 C 310.07142857142856 249.001 309.07142857142856 250.001 308.07142857142856 250.001 L 305.8928571428571 250.001 C 304.8928571428571 250.001 303.8928571428571 249.001 303.8928571428571 248.001 Z " pathFrom="M 303.8928571428571 250.001 L 303.8928571428571 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 310.07142857142856 250.001 L 303.8928571428571 250.001 Z" cy="112.5" cx="351.24999999999994" j="6" val="55" barHeight="137.5" barWidth="7.178571428571428"></path><g id="SvgjsG4073" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4075" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4077" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4079" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4081" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4083" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4085" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4087" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g></g><g id="SvgjsG4074" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG4089" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath4094" d="M 23.928571428571427 248.001 L 23.928571428571427 152.001 C 23.928571428571427 151.001 24.928571428571427 150.001 25.928571428571427 150.001 L 28.107142857142854 150.001 C 29.107142857142854 150.001 30.107142857142854 151.001 30.107142857142854 152.001 L 30.107142857142854 248.001 C 30.107142857142854 249.001 29.107142857142854 250.001 28.107142857142854 250.001 L 25.928571428571427 250.001 C 24.928571428571427 250.001 23.928571428571427 249.001 23.928571428571427 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 23.928571428571427 248.001 L 23.928571428571427 152.001 C 23.928571428571427 151.001 24.928571428571427 150.001 25.928571428571427 150.001 L 28.107142857142854 150.001 C 29.107142857142854 150.001 30.107142857142854 151.001 30.107142857142854 152.001 L 30.107142857142854 248.001 C 30.107142857142854 249.001 29.107142857142854 250.001 28.107142857142854 250.001 L 25.928571428571427 250.001 C 24.928571428571427 250.001 23.928571428571427 249.001 23.928571428571427 248.001 Z " pathFrom="M 23.928571428571427 250.001 L 23.928571428571427 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 30.107142857142854 250.001 L 23.928571428571427 250.001 Z" cy="150" cx="71.28571428571429" j="0" val="40" barHeight="100" barWidth="7.178571428571428"></path><path id="SvgjsPath4096" d="M 71.78571428571429 248.001 L 71.78571428571429 77.001 C 71.78571428571429 76.001 72.78571428571429 75.001 73.78571428571429 75.001 L 75.96428571428572 75.001 C 76.96428571428572 75.001 77.96428571428572 76.001 77.96428571428572 77.001 L 77.96428571428572 248.001 C 77.96428571428572 249.001 76.96428571428572 250.001 75.96428571428572 250.001 L 73.78571428571429 250.001 C 72.78571428571429 250.001 71.78571428571429 249.001 71.78571428571429 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 71.78571428571429 248.001 L 71.78571428571429 77.001 C 71.78571428571429 76.001 72.78571428571429 75.001 73.78571428571429 75.001 L 75.96428571428572 75.001 C 76.96428571428572 75.001 77.96428571428572 76.001 77.96428571428572 77.001 L 77.96428571428572 248.001 C 77.96428571428572 249.001 76.96428571428572 250.001 75.96428571428572 250.001 L 73.78571428571429 250.001 C 72.78571428571429 250.001 71.78571428571429 249.001 71.78571428571429 248.001 Z " pathFrom="M 71.78571428571429 250.001 L 71.78571428571429 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 77.96428571428572 250.001 L 71.78571428571429 250.001 Z" cy="75" cx="119.14285714285715" j="1" val="70" barHeight="175" barWidth="7.178571428571428"></path><path id="SvgjsPath4098" d="M 119.64285714285715 248.001 L 119.64285714285715 52.001 C 119.64285714285715 51.001 120.64285714285715 50.001 121.64285714285715 50.001 L 123.82142857142858 50.001 C 124.82142857142858 50.001 125.82142857142858 51.001 125.82142857142858 52.001 L 125.82142857142858 248.001 C 125.82142857142858 249.001 124.82142857142858 250.001 123.82142857142858 250.001 L 121.64285714285715 250.001 C 120.64285714285715 250.001 119.64285714285715 249.001 119.64285714285715 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 119.64285714285715 248.001 L 119.64285714285715 52.001 C 119.64285714285715 51.001 120.64285714285715 50.001 121.64285714285715 50.001 L 123.82142857142858 50.001 C 124.82142857142858 50.001 125.82142857142858 51.001 125.82142857142858 52.001 L 125.82142857142858 248.001 C 125.82142857142858 249.001 124.82142857142858 250.001 123.82142857142858 250.001 L 121.64285714285715 250.001 C 120.64285714285715 250.001 119.64285714285715 249.001 119.64285714285715 248.001 Z " pathFrom="M 119.64285714285715 250.001 L 119.64285714285715 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 125.82142857142858 250.001 L 119.64285714285715 250.001 Z" cy="50" cx="167" j="2" val="80" barHeight="200" barWidth="7.178571428571428"></path><path id="SvgjsPath4100" d="M 167.5 248.001 L 167.5 102.001 C 167.5 101.001 168.5 100.001 169.5 100.001 L 171.67857142857142 100.001 C 172.67857142857142 100.001 173.67857142857142 101.001 173.67857142857142 102.001 L 173.67857142857142 248.001 C 173.67857142857142 249.001 172.67857142857142 250.001 171.67857142857142 250.001 L 169.5 250.001 C 168.5 250.001 167.5 249.001 167.5 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 167.5 248.001 L 167.5 102.001 C 167.5 101.001 168.5 100.001 169.5 100.001 L 171.67857142857142 100.001 C 172.67857142857142 100.001 173.67857142857142 101.001 173.67857142857142 102.001 L 173.67857142857142 248.001 C 173.67857142857142 249.001 172.67857142857142 250.001 171.67857142857142 250.001 L 169.5 250.001 C 168.5 250.001 167.5 249.001 167.5 248.001 Z " pathFrom="M 167.5 250.001 L 167.5 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 173.67857142857142 250.001 L 167.5 250.001 Z" cy="100" cx="214.85714285714286" j="3" val="60" barHeight="150" barWidth="7.178571428571428"></path><path id="SvgjsPath4102" d="M 215.35714285714286 248.001 L 215.35714285714286 127.001 C 215.35714285714286 126.001 216.35714285714286 125.001 217.35714285714286 125.001 L 219.53571428571428 125.001 C 220.53571428571428 125.001 221.53571428571428 126.001 221.53571428571428 127.001 L 221.53571428571428 248.001 C 221.53571428571428 249.001 220.53571428571428 250.001 219.53571428571428 250.001 L 217.35714285714286 250.001 C 216.35714285714286 250.001 215.35714285714286 249.001 215.35714285714286 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 215.35714285714286 248.001 L 215.35714285714286 127.001 C 215.35714285714286 126.001 216.35714285714286 125.001 217.35714285714286 125.001 L 219.53571428571428 125.001 C 220.53571428571428 125.001 221.53571428571428 126.001 221.53571428571428 127.001 L 221.53571428571428 248.001 C 221.53571428571428 249.001 220.53571428571428 250.001 219.53571428571428 250.001 L 217.35714285714286 250.001 C 216.35714285714286 250.001 215.35714285714286 249.001 215.35714285714286 248.001 Z " pathFrom="M 215.35714285714286 250.001 L 215.35714285714286 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 221.53571428571428 250.001 L 215.35714285714286 250.001 Z" cy="125" cx="262.7142857142857" j="4" val="50" barHeight="125" barWidth="7.178571428571428"></path><path id="SvgjsPath4104" d="M 263.2142857142857 248.001 L 263.2142857142857 89.501 C 263.2142857142857 88.501 264.2142857142857 87.501 265.2142857142857 87.501 L 267.39285714285717 87.501 C 268.39285714285717 87.501 269.39285714285717 88.501 269.39285714285717 89.501 L 269.39285714285717 248.001 C 269.39285714285717 249.001 268.39285714285717 250.001 267.39285714285717 250.001 L 265.2142857142857 250.001 C 264.2142857142857 250.001 263.2142857142857 249.001 263.2142857142857 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 263.2142857142857 248.001 L 263.2142857142857 89.501 C 263.2142857142857 88.501 264.2142857142857 87.501 265.2142857142857 87.501 L 267.39285714285717 87.501 C 268.39285714285717 87.501 269.39285714285717 88.501 269.39285714285717 89.501 L 269.39285714285717 248.001 C 269.39285714285717 249.001 268.39285714285717 250.001 267.39285714285717 250.001 L 265.2142857142857 250.001 C 264.2142857142857 250.001 263.2142857142857 249.001 263.2142857142857 248.001 Z " pathFrom="M 263.2142857142857 250.001 L 263.2142857142857 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 269.39285714285717 250.001 L 263.2142857142857 250.001 Z" cy="87.5" cx="310.57142857142856" j="5" val="65" barHeight="162.5" barWidth="7.178571428571428"></path><path id="SvgjsPath4106" d="M 311.07142857142856 248.001 L 311.07142857142856 102.001 C 311.07142857142856 101.001 312.07142857142856 100.001 313.07142857142856 100.001 L 315.25 100.001 C 316.25 100.001 317.25 101.001 317.25 102.001 L 317.25 248.001 C 317.25 249.001 316.25 250.001 315.25 250.001 L 313.07142857142856 250.001 C 312.07142857142856 250.001 311.07142857142856 249.001 311.07142857142856 248.001 Z " fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskqzi6977i)" pathTo="M 311.07142857142856 248.001 L 311.07142857142856 102.001 C 311.07142857142856 101.001 312.07142857142856 100.001 313.07142857142856 100.001 L 315.25 100.001 C 316.25 100.001 317.25 101.001 317.25 102.001 L 317.25 248.001 C 317.25 249.001 316.25 250.001 315.25 250.001 L 313.07142857142856 250.001 C 312.07142857142856 250.001 311.07142857142856 249.001 311.07142857142856 248.001 Z " pathFrom="M 311.07142857142856 250.001 L 311.07142857142856 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 317.25 250.001 L 311.07142857142856 250.001 Z" cy="100" cx="358.4285714285714" j="6" val="60" barHeight="150" barWidth="7.178571428571428"></path><g id="SvgjsG4091" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4093" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4095" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4097" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4099" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4101" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4103" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g><g id="SvgjsG4105" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskqzi6977i)"></g></g><g id="SvgjsG4092" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG4072" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG4090" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><g id="SvgjsG4110" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4124" x1="0" y1="0" x2="335" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4125" x1="0" y1="0" x2="335" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4126" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4127" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4135" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4136" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4137" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                                <!--begin::Row-->
                                <div class="row g-0 mb-7">
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Avarage Sale</div>
                                        <div class="fs-2 fw-bold text-gray-800">$650</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Comissions</div>
                                        <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Revenue</div>
                                        <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col mx-5">
                                        <div class="fs-6 text-gray-400">Expenses</div>
                                        <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 12-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 8-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin:Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin:Image-->
                                    <div class="symbol symbol-60px me-5">
														<span class="symbol-label bg-danger-light">
															<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
														</span>
                                    </div>
                                    <!--end:Image-->
                                    <!--begin:Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-5">Monthly Subscription</a>
                                        <span class="text-muted fw-bold">Due: 27 Apr 2020</span>
                                    </div>
                                    <!--end:Title-->
                                </div>
                                <!--begin:Info-->
                                <!--begin:Menu-->
                                <div class="ms-1">
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-category fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin:Stats-->
                            <div class="d-flex flex-column w-100 mt-12">
                                <span class="text-dark me-2 fw-bold pb-3">Progress</span>
                                <div class="progress h-5px w-100">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end:Stats-->
                            <!--begin:Team-->
                            <div class="d-flex flex-column mt-10">
                                <div class="text-dark me-2 fw-bold pb-4">Team</div>
                                <div class="d-flex">
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Ana Stone" data-bs-original-title="Ana Stone" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-6.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Mark Larson" data-bs-original-title="Mark Larson" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-5.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Sam Harris" data-bs-original-title="Sam Harris" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-9.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" aria-label="Alice Micto" data-bs-original-title="Alice Micto" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!--end:Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 8-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 8-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin:Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin:Image-->
                                    <div class="symbol symbol-60px me-5">
														<span class="symbol-label bg-primary-light">
															<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
														</span>
                                    </div>
                                    <!--end:Image-->
                                    <!--begin:Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-5">Monthly Subscription</a>
                                        <span class="text-muted fw-bold">Due: 27 Apr 2020</span>
                                    </div>
                                    <!--end:Title-->
                                </div>
                                <!--begin:Info-->
                                <!--begin:Menu-->
                                <div class="ms-1">
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-category fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin:Stats-->
                            <div class="d-flex flex-column w-100 mt-12">
                                <span class="text-dark me-2 fw-bold pb-3">Progress</span>
                                <div class="progress h-5px w-100">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end:Stats-->
                            <!--begin:Team-->
                            <div class="d-flex flex-column mt-10">
                                <div class="text-dark me-2 fw-bold pb-4">Team</div>
                                <div class="d-flex">
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Ana Stone" data-bs-original-title="Ana Stone" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-6.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Mark Larson" data-bs-original-title="Mark Larson" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-5.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Sam Harris" data-bs-original-title="Sam Harris" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-9.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" aria-label="Alice Micto" data-bs-original-title="Alice Micto" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!--end:Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 8-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 8-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin:Info-->
                                <div class="d-flex align-items-center">
                                    <!--begin:Image-->
                                    <div class="symbol symbol-60px me-5">
														<span class="symbol-label bg-success-light">
															<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
														</span>
                                    </div>
                                    <!--end:Image-->
                                    <!--begin:Title-->
                                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-5">Monthly Subscription</a>
                                        <span class="text-muted fw-bold">Due: 27 Apr 2020</span>
                                    </div>
                                    <!--end:Title-->
                                </div>
                                <!--begin:Info-->
                                <!--begin:Menu-->
                                <div class="ms-1">
                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-category fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu 2-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mb-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <!--begin::Menu item-->
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">New Group</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <!--end::Menu item-->
                                            <!--begin::Menu sub-->
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu sub-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator mt-3 opacity-75"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu 2-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin:Stats-->
                            <div class="d-flex flex-column w-100 mt-12">
                                <span class="text-dark me-2 fw-bold pb-3">Progress</span>
                                <div class="progress h-5px w-100">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end:Stats-->
                            <!--begin:Team-->
                            <div class="d-flex flex-column mt-10">
                                <div class="text-dark me-2 fw-bold pb-4">Team</div>
                                <div class="d-flex">
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Ana Stone" data-bs-original-title="Ana Stone" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-6.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Mark Larson" data-bs-original-title="Mark Larson" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-5.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Sam Harris" data-bs-original-title="Sam Harris" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-9.jpg" alt="">
                                    </a>
                                    <a href="#" class="symbol symbol-35px" data-bs-toggle="tooltip" aria-label="Alice Micto" data-bs-original-title="Alice Micto" data-kt-initialized="1">
                                        <img src="assets/media/avatars/300-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!--end:Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 8-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 9-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column pb-10 pb-lg-15">
                            <div class="flex-grow-1">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center pe-2 mb-5">
                                    <span class="text-muted fw-bold fs-5 flex-grow-1">7 hours ago</span>
                                    <div class="symbol symbol-50px">
														<span class="symbol-label bg-light">
															<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
														</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <!--begin::Link-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-4">PitStop - Multiple Email Generator</a>
                                <!--end::Link-->
                                <!--begin::Desc-->
                                <p class="py-3">Pitstop creates quick email campaigns.
                                    <br>We help to strengthen your brand
                                    <br>for your every purpose.</p>
                                <!--end::Desc-->
                            </div>
                            <!--begin::Team-->
                            <div class="d-flex align-items-center">
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Ana Stone" data-bs-original-title="Ana Stone" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-6.jpg" alt="">
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Mark Larson" data-bs-original-title="Mark Larson" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-5.jpg" alt="">
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Sam Harris" data-bs-original-title="Sam Harris" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-9.jpg" alt="">
                                </a>
                            </div>
                            <!--end::Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 9-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 9-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column pb-10 pb-lg-15">
                            <div class="flex-grow-1">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center pe-2 mb-5">
                                    <span class="text-muted fw-bold fs-5 flex-grow-1">10 days ago</span>
                                    <div class="symbol symbol-50px">
														<span class="symbol-label bg-light">
															<img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
														</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <!--begin::Link-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-4">ReactJS Admin Theme</a>
                                <!--end::Link-->
                                <!--begin::Desc-->
                                <p class="py-3">Keenthemes uses the latest and greatest frameworks
                                    <br>with ReactJS for complete modernization and
                                    <br>future.</p>
                                <!--end::Desc-->
                            </div>
                            <!--begin::Team-->
                            <div class="d-flex align-items-center">
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Ana Stone" data-bs-original-title="Ana Stone" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-6.jpg" alt="">
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Mark Larson" data-bs-original-title="Mark Larson" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-5.jpg" alt="">
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Sam Harris" data-bs-original-title="Sam Harris" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-9.jpg" alt="">
                                </a>
                            </div>
                            <!--end::Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 9-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 9-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column pb-10 pb-lg-15">
                            <div class="flex-grow-1">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center pe-2 mb-5">
                                    <span class="text-muted fw-bold fs-5 flex-grow-1">2 weeks ago</span>
                                    <div class="symbol symbol-50px">
														<span class="symbol-label bg-light">
															<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
														</span>
                                    </div>
                                </div>
                                <!--end::Info-->
                                <!--begin::Link-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-4">KT.com - High Quality Templates</a>
                                <!--end::Link-->
                                <!--begin::Desc-->
                                <p class="py-3">Easy to use, incredibly flexible and secure
                                    <br>with in-depth documentation that outlines
                                    <br>everything for you</p>
                                <!--end::Desc-->
                            </div>
                            <!--begin::Team-->
                            <div class="d-flex align-items-center">
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Ana Stone" data-bs-original-title="Ana Stone" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-6.jpg" alt="">
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Mark Larson" data-bs-original-title="Mark Larson" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-5.jpg" alt="">
                                </a>
                                <a href="#" class="symbol symbol-35px me-2" data-bs-toggle="tooltip" aria-label="Sam Harris" data-bs-original-title="Sam Harris" data-kt-initialized="1">
                                    <img src="assets/media/avatars/300-9.jpg" alt="">
                                </a>
                            </div>
                            <!--end::Team-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 9-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                                <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e2001ba">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e2001ba" data-allow-clear="true" data-select2-id="select2-data-9-udeq" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-10-erx8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-5j4k-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-5j4k-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-p pt-5 bg-body flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">$650</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Commission</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bold">$233,600</div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0 mt-8">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bold">$29,004</div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">$1,480,00</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px; min-height: 150px;"><div id="apexchartsh5qp3920j" class="apexcharts-canvas apexchartsh5qp3920j apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg2972" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3011" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2974" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2973"><clipPath id="gridRectMaskh5qp3920j"><rect id="SvgjsRect2976" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskh5qp3920j"></clipPath><clipPath id="nonForecastMaskh5qp3920j"></clipPath><clipPath id="gridRectMarkerMaskh5qp3920j"><rect id="SvgjsRect2977" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2984" class="apexcharts-grid"><g id="SvgjsG2985" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2988" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2989" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2990" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2991" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2992" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2993" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2994" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2995" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2996" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2997" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2998" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2986" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3000" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2999" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2978" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2979" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2982" d="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh5qp3920j)" pathTo="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath2983" d="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" fill="none" fill-opacity="1" stroke="#512b81" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskh5qp3920j)" pathTo="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG2980" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3015" r="0" cx="0" cy="0" class="apexcharts-marker wqxeojju4h no-pointer-events" stroke="#512b81" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2981" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG2987" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3001" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3002" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3003" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3004" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3012" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3013" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3014" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(251, 203, 10, 0.71);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                                <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e2001e3">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e2001e3" data-allow-clear="true" data-select2-id="select2-data-11-fcgo" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-12-8jsu" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-hf3v-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-hf3v-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-p pt-5 bg-body flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">$650</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Commission</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bold">$233,600</div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0 mt-8">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bold">$29,004</div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">$1,480,00</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px; min-height: 150px;"><div id="apexchartsbi2ru6ub" class="apexcharts-canvas apexchartsbi2ru6ub apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3017" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3056" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3019" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3018"><clipPath id="gridRectMaskbi2ru6ub"><rect id="SvgjsRect3021" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbi2ru6ub"></clipPath><clipPath id="nonForecastMaskbi2ru6ub"></clipPath><clipPath id="gridRectMarkerMaskbi2ru6ub"><rect id="SvgjsRect3022" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3029" class="apexcharts-grid"><g id="SvgjsG3030" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3033" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3034" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3035" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3036" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3037" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3038" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3039" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3040" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3041" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3042" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3043" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3031" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3045" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3044" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3023" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3024" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3027" d="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" fill="rgba(255,245,248,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbi2ru6ub)" pathTo="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3028" d="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbi2ru6ub)" pathTo="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3025" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3060" r="0" cx="0" cy="0" class="apexcharts-marker wffejsxkrh no-pointer-events" stroke="#f1416c" fill="#fff5f8" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3026" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3032" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3046" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3047" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3048" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3049" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3057" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3058" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3059" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 245, 248);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 3-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
                                <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e20020b">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e20020b" data-allow-clear="true" data-select2-id="select2-data-13-kba4" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-dlbm" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-papv-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-papv-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-p pt-5 bg-body flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Average Sale</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">$650</div>
                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Commission</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bold">$233,600</div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0 mt-8">
                                    <!--begin::Col-->
                                    <div class="col mr-8">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Annual Taxes 2019</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="fs-4 fw-bold">$29,004</div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Label-->
                                        <div class="fs-7 text-muted fw-bold">Annual Income</div>
                                        <!--end::Label-->
                                        <!--begin::Stat-->
                                        <div class="d-flex align-items-center">
                                            <div class="fs-4 fw-bold">$1,480,00</div>
                                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Stat-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px; min-height: 150px;"><div id="apexchartshwlscr46" class="apexcharts-canvas apexchartshwlscr46 apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3062" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3101" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3064" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3063"><clipPath id="gridRectMaskhwlscr46"><rect id="SvgjsRect3066" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskhwlscr46"></clipPath><clipPath id="nonForecastMaskhwlscr46"></clipPath><clipPath id="gridRectMarkerMaskhwlscr46"><rect id="SvgjsRect3067" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3074" class="apexcharts-grid"><g id="SvgjsG3075" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3078" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3079" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3080" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3081" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3082" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3083" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3084" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3085" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3086" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3087" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3088" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3076" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3090" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3089" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3068" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3069" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3072" d="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhwlscr46)" pathTo="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3073" d="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" fill="none" fill-opacity="1" stroke="rgba(160, 132, 232, 0.8156862745)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhwlscr46)" pathTo="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3070" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3105" r="0" cx="0" cy="0" class="apexcharts-marker wig4x5cl4 no-pointer-events" stroke="rgba(160, 132, 232, 0.8156862745)" fill="#f1faff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3071" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3077" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3091" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3092" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3093" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3094" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3102" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3103" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3104" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 250, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 3-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                                <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e2002a4">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e2002a4" data-allow-clear="true" data-select2-id="select2-data-15-fvsq" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-liqj" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-bk4b-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-bk4b-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px; min-height: 178.7px;"><div id="apexcharts8a4zch3t" class="apexcharts-canvas apexcharts8a4zch3t apexcharts-theme-light" style="width: 351px; height: 178.7px;"><svg id="SvgjsSvg3106" width="351" height="178.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="178.7"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG3108" class="apexcharts-inner apexcharts-graphical" transform="translate(88.5, 0)"><defs id="SvgjsDefs3107"><clipPath id="gridRectMask8a4zch3t"><rect id="SvgjsRect3109" width="182" height="200" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8a4zch3t"></clipPath><clipPath id="nonForecastMask8a4zch3t"></clipPath><clipPath id="gridRectMarkerMask8a4zch3t"><rect id="SvgjsRect3110" width="180" height="202" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3111" class="apexcharts-radialbar"><g id="SvgjsG3112"><g id="SvgjsG3113" class="apexcharts-tracks"><g id="SvgjsG3114" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 87.98928506193984 26.607927764323023" fill="none" fill-opacity="1" stroke="rgba(251, 203, 10, 0.7098039216)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.97439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 87.98928506193984 26.607927764323023"></path></g></g><g id="SvgjsG3116"><g id="SvgjsG3120" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3121" d="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 26.757474833957374 92.28249454023158" fill="none" fill-opacity="0.85" stroke="rgba(81,43,129,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.97439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="266" data:value="74" index="0" j="0" data:pathOrig="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 26.757474833957374 92.28249454023158"></path></g><circle id="SvgjsCircle3117" r="56.9048780487805" cx="88" cy="88" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG3118" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText3119" font-family="inherit" x="88" y="100" text-anchor="middle" dominant-baseline="auto" font-size="30px" font-weight="700" fill="#4b5675" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">74%</text></g></g></g></g><line id="SvgjsLine3122" x1="0" y1="0" x2="176" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3123" x1="0" y1="0" x2="176" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                            </div>
                            <div class="pt-5">
                                <p class="text-center fs-6 pb-5">
                                    <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
                                    <br>to approve newly amended policies</p>
                                <a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 4-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                                <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e2002bc">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e2002bc" data-allow-clear="true" data-select2-id="select2-data-17-gdos" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-18-ntww" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-8wbu-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-8wbu-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <div class="mixed-widget-4-chart" data-kt-chart-color="success" style="height: 200px; min-height: 178.7px;"><div id="apexchartsec6upg4v" class="apexcharts-canvas apexchartsec6upg4v apexcharts-theme-light" style="width: 351px; height: 178.7px;"><svg id="SvgjsSvg3124" width="351" height="178.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="178.7"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG3126" class="apexcharts-inner apexcharts-graphical" transform="translate(88.5, 0)"><defs id="SvgjsDefs3125"><clipPath id="gridRectMaskec6upg4v"><rect id="SvgjsRect3127" width="182" height="200" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskec6upg4v"></clipPath><clipPath id="nonForecastMaskec6upg4v"></clipPath><clipPath id="gridRectMarkerMaskec6upg4v"><rect id="SvgjsRect3128" width="180" height="202" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3129" class="apexcharts-radialbar"><g id="SvgjsG3130"><g id="SvgjsG3131" class="apexcharts-tracks"><g id="SvgjsG3132" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 87.98928506193984 26.607927764323023" fill="none" fill-opacity="1" stroke="rgba(241,250,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.97439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 87.98928506193984 26.607927764323023"></path></g></g><g id="SvgjsG3134"><g id="SvgjsG3138" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3139" d="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 26.757474833957374 92.28249454023158" fill="none" fill-opacity="0.85" stroke="rgba(160, 132, 232, 0.8156862745)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.97439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="266" data:value="74" index="0" j="0" data:pathOrig="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 26.757474833957374 92.28249454023158"></path></g><circle id="SvgjsCircle3135" r="56.9048780487805" cx="88" cy="88" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG3136" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText3137" font-family="inherit" x="88" y="100" text-anchor="middle" dominant-baseline="auto" font-size="30px" font-weight="700" fill="#4b5675" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">74%</text></g></g></g></g><line id="SvgjsLine3140" x1="0" y1="0" x2="176" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3141" x1="0" y1="0" x2="176" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                            </div>
                            <div class="pt-5">
                                <p class="text-center fs-6 pb-5">
                                    <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
                                    <br>to approve newly amended policies</p>
                                <a href="#" class="btn btn-success w-100 py-3">Take Action</a>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 4-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                                <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e2002d3">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e2002d3" data-allow-clear="true" data-select2-id="select2-data-19-l3dk" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-20-jsu7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-yh3g-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-yh3g-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <div class="flex-grow-1">
                                <div class="mixed-widget-4-chart" data-kt-chart-color="danger" style="height: 200px; min-height: 178.7px;"><div id="apexcharts9oujloyo" class="apexcharts-canvas apexcharts9oujloyo apexcharts-theme-light" style="width: 351px; height: 178.7px;"><svg id="SvgjsSvg3142" width="351" height="178.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="178.7"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG3144" class="apexcharts-inner apexcharts-graphical" transform="translate(88.5, 0)"><defs id="SvgjsDefs3143"><clipPath id="gridRectMask9oujloyo"><rect id="SvgjsRect3145" width="182" height="200" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask9oujloyo"></clipPath><clipPath id="nonForecastMask9oujloyo"></clipPath><clipPath id="gridRectMarkerMask9oujloyo"><rect id="SvgjsRect3146" width="180" height="202" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3147" class="apexcharts-radialbar"><g id="SvgjsG3148"><g id="SvgjsG3149" class="apexcharts-tracks"><g id="SvgjsG3150" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 87.98928506193984 26.607927764323023" fill="none" fill-opacity="1" stroke="rgba(255,245,248,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.97439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 87.98928506193984 26.607927764323023"></path></g></g><g id="SvgjsG3152"><g id="SvgjsG3156" class="apexcharts-series apexcharts-radial-series" seriesName="Progress" rel="1" data:realIndex="0"><path id="SvgjsPath3157" d="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 26.757474833957374 92.28249454023158" fill="none" fill-opacity="0.85" stroke="rgba(241,65,108,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="8.97439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="266" data:value="74" index="0" j="0" data:pathOrig="M 88 26.60792682926828 A 61.39207317073172 61.39207317073172 0 1 1 26.757474833957374 92.28249454023158"></path></g><circle id="SvgjsCircle3153" r="56.9048780487805" cx="88" cy="88" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG3154" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText3155" font-family="inherit" x="88" y="100" text-anchor="middle" dominant-baseline="auto" font-size="30px" font-weight="700" fill="#4b5675" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">74%</text></g></g></g></g><line id="SvgjsLine3158" x1="0" y1="0" x2="176" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3159" x1="0" y1="0" x2="176" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                            </div>
                            <div class="pt-5">
                                <p class="text-center fs-6 pb-5">
                                    <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp; Current sprint requires stakeholders
                                    <br>to approve newly amended policies</p>
                                <a href="#" class="btn btn-danger w-100 py-3">Take Action</a>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                                <span class="text-muted fw-semibold fs-7">Latest trends</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Chart-->
                            <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="primary" style="height: 150px; min-height: 150px;"><div id="apexchartsbyrn73cy" class="apexcharts-canvas apexchartsbyrn73cy apexcharts-theme-light" style="width: 351px; height: 150px;"><svg id="SvgjsSvg3161" width="351" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3200" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3163" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3162"><clipPath id="gridRectMaskbyrn73cy"><rect id="SvgjsRect3165" width="358" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskbyrn73cy"></clipPath><clipPath id="nonForecastMaskbyrn73cy"></clipPath><clipPath id="gridRectMarkerMaskbyrn73cy"><rect id="SvgjsRect3166" width="355" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3173" class="apexcharts-grid"><g id="SvgjsG3174" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3177" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3178" x1="0" y1="15" x2="351" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3179" x1="0" y1="30" x2="351" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3180" x1="0" y1="45" x2="351" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3181" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3182" x1="0" y1="75" x2="351" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3183" x1="0" y1="90" x2="351" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3184" x1="0" y1="105" x2="351" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3185" x1="0" y1="120" x2="351" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3186" x1="0" y1="135" x2="351" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3187" x1="0" y1="150" x2="351" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3175" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3189" x1="0" y1="150" x2="351" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3188" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3167" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3168" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3171" d="M 0 150 L 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769C 351 57.69230769230769 351 57.69230769230769 351 150M 351 57.69230769230769z" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbyrn73cy)" pathTo="M 0 150 L 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769C 351 57.69230769230769 351 57.69230769230769 351 150M 351 57.69230769230769z" pathFrom="M -1 150 L -1 150 L 70.2 150 L 140.4 150 L 210.6 150 L 280.8 150 L 351 150"></path><path id="SvgjsPath3172" d="M 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769" fill="none" fill-opacity="1" stroke="#512b81" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskbyrn73cy)" pathTo="M 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769" pathFrom="M -1 150 L -1 150 L 70.2 150 L 140.4 150 L 210.6 150 L 280.8 150 L 351 150" fill-rule="evenodd"></path><g id="SvgjsG3169" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3204" r="0" cx="0" cy="0" class="apexcharts-marker wpycz3oif no-pointer-events" stroke="#512b81" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3170" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3176" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3190" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3191" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3192" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3193" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3201" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3202" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3203" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(251, 203, 10, 0.71);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="mt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="py-1">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                                <span class="text-muted fw-semibold fs-7">Latest trends</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Chart-->
                            <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px; min-height: 150px;"><div id="apexcharts0lgtufxa" class="apexcharts-canvas apexcharts0lgtufxa apexcharts-theme-light" style="width: 351px; height: 150px;"><svg id="SvgjsSvg3206" width="351" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3245" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3208" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3207"><clipPath id="gridRectMask0lgtufxa"><rect id="SvgjsRect3210" width="358" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0lgtufxa"></clipPath><clipPath id="nonForecastMask0lgtufxa"></clipPath><clipPath id="gridRectMarkerMask0lgtufxa"><rect id="SvgjsRect3211" width="355" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3218" class="apexcharts-grid"><g id="SvgjsG3219" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3222" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3223" x1="0" y1="15" x2="351" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3224" x1="0" y1="30" x2="351" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3225" x1="0" y1="45" x2="351" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3226" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3227" x1="0" y1="75" x2="351" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3228" x1="0" y1="90" x2="351" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3229" x1="0" y1="105" x2="351" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3230" x1="0" y1="120" x2="351" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3231" x1="0" y1="135" x2="351" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3232" x1="0" y1="150" x2="351" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3220" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3234" x1="0" y1="150" x2="351" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3233" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3212" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3213" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3216" d="M 0 150 L 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769C 351 57.69230769230769 351 57.69230769230769 351 150M 351 57.69230769230769z" fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lgtufxa)" pathTo="M 0 150 L 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769C 351 57.69230769230769 351 57.69230769230769 351 150M 351 57.69230769230769z" pathFrom="M -1 150 L -1 150 L 70.2 150 L 140.4 150 L 210.6 150 L 280.8 150 L 351 150"></path><path id="SvgjsPath3217" d="M 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769" fill="none" fill-opacity="1" stroke="rgba(160, 132, 232, 0.8156862745)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lgtufxa)" pathTo="M 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769" pathFrom="M -1 150 L -1 150 L 70.2 150 L 140.4 150 L 210.6 150 L 280.8 150 L 351 150" fill-rule="evenodd"></path><g id="SvgjsG3214" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3249" r="0" cx="0" cy="0" class="apexcharts-marker wwndhp0nm no-pointer-events" stroke="rgba(160, 132, 232, 0.8156862745)" fill="#f1faff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3215" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3221" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3235" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3236" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3237" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3238" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3246" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3247" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3248" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 250, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="mt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="py-1">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 5-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Trends</span>
                                <span class="text-muted fw-semibold fs-7">Latest trends</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Chart-->
                            <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="danger" style="height: 150px; min-height: 150px;"><div id="apexchartsu1qs239r" class="apexcharts-canvas apexchartsu1qs239r apexcharts-theme-light" style="width: 351px; height: 150px;"><svg id="SvgjsSvg3251" width="351" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3290" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3253" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3252"><clipPath id="gridRectMasku1qs239r"><rect id="SvgjsRect3255" width="358" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasku1qs239r"></clipPath><clipPath id="nonForecastMasku1qs239r"></clipPath><clipPath id="gridRectMarkerMasku1qs239r"><rect id="SvgjsRect3256" width="355" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3263" class="apexcharts-grid"><g id="SvgjsG3264" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3267" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3268" x1="0" y1="15" x2="351" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3269" x1="0" y1="30" x2="351" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3270" x1="0" y1="45" x2="351" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3271" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3272" x1="0" y1="75" x2="351" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3273" x1="0" y1="90" x2="351" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3274" x1="0" y1="105" x2="351" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3275" x1="0" y1="120" x2="351" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3276" x1="0" y1="135" x2="351" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3277" x1="0" y1="150" x2="351" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3265" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3279" x1="0" y1="150" x2="351" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3278" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3257" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3258" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3261" d="M 0 150 L 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769C 351 57.69230769230769 351 57.69230769230769 351 150M 351 57.69230769230769z" fill="rgba(255,245,248,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasku1qs239r)" pathTo="M 0 150 L 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769C 351 57.69230769230769 351 57.69230769230769 351 150M 351 57.69230769230769z" pathFrom="M -1 150 L -1 150 L 70.2 150 L 140.4 150 L 210.6 150 L 280.8 150 L 351 150"></path><path id="SvgjsPath3262" d="M 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasku1qs239r)" pathTo="M 0 80.76923076923077C 24.57 80.76923076923077 45.63 80.76923076923077 70.2 80.76923076923077C 94.77000000000001 80.76923076923077 115.83000000000001 11.538461538461547 140.4 11.538461538461547C 164.97 11.538461538461547 186.03 92.3076923076923 210.6 92.3076923076923C 235.17 92.3076923076923 256.23 92.3076923076923 280.8 92.3076923076923C 305.37 92.3076923076923 326.43 57.69230769230769 351 57.69230769230769" pathFrom="M -1 150 L -1 150 L 70.2 150 L 140.4 150 L 210.6 150 L 280.8 150 L 351 150" fill-rule="evenodd"></path><g id="SvgjsG3259" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3294" r="0" cx="0" cy="0" class="apexcharts-marker w3gcfack5 no-pointer-events" stroke="#f1416c" fill="#fff5f8" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3260" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3266" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3280" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3281" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3282" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3283" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3291" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3292" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3293" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 245, 248);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                            <!--begin::Items-->
                            <div class="mt-5">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Authors</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">Ricky Hunt, Sandra Trepp</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-5">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/figma-1.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Sales</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">PitStop Emails</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-50px me-3">
                                            <div class="symbol-label bg-light">
                                                <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50" alt="">
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="py-1">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Top Engagement</a>
                                            <div class="fs-7 text-muted fw-semibold mt-1">KT.com</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Label-->
                                    <div class="badge badge-light fw-semibold py-4 px-3">+82$</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 5-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 17-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin::Title-->
                                <h4 class="fw-bold text-gray-800 m-0">User Base</h4>
                                <!--end::Title-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Chart-->
                            <div class="d-flex flex-center w-100">
                                <div class="mixed-widget-17-chart" data-kt-chart-color="primary" style="height: 300px; min-height: 178.469px;"><div id="apexchartsgdni39eb" class="apexcharts-canvas apexchartsgdni39eb apexcharts-theme-light" style="width: 300px; height: 178.469px;"><svg id="SvgjsSvg4513" width="300" height="178.46875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="300" height="178.46875"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG4515" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs4514"><clipPath id="gridRectMaskgdni39eb"><rect id="SvgjsRect4516" width="282" height="300" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskgdni39eb"></clipPath><clipPath id="nonForecastMaskgdni39eb"></clipPath><clipPath id="gridRectMarkerMaskgdni39eb"><rect id="SvgjsRect4517" width="280" height="302" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4518" class="apexcharts-radialbar"><g id="SvgjsG4519"><g id="SvgjsG4520" class="apexcharts-tracks"><g id="SvgjsG4521" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138" fill="none" fill-opacity="1" stroke="rgba(219,223,233,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="23.942682926829274" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138"></path></g></g><g id="SvgjsG4523"><g id="SvgjsG4528" class="apexcharts-series apexcharts-radial-series" seriesName="TotalxOrders" rel="1" data:realIndex="0"><path id="SvgjsPath4529" d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 200.02749307821824 75.97250692178176" fill="none" fill-opacity="0.85" stroke="rgba(81,43,129,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="23.942682926829274" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="135" data:value="75" index="0" j="0" data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 200.02749307821824 75.97250692178176"></path></g><circle id="SvgjsCircle4524" r="75.7487804878049" cx="138" cy="138" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG4525" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText4526" font-family="inherit" x="138" y="133" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="700" fill="#99a1b7" class="apexcharts-text apexcharts-datalabel-label" style="font-family: inherit;">Total Orders</text><text id="SvgjsText4527" font-family="inherit" x="138" y="114" text-anchor="middle" dominant-baseline="auto" font-size="24px" font-weight="600" fill="#071437" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">8,346</text></g></g></g></g><line id="SvgjsLine4530" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4531" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Content-->
                            <div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
                                <!--begin::Text-->
                                <p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
                                    <br>make sure you breathe</p>
                                <!--end::Text-->
                                <!--begin::Action-->
                                <div class="mb-9 mb-xxl-1">
                                    <a href="#" class="btn btn-danger fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
                                </div>
                                <!--ed::Action-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-center py-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <span class="fw-semibold text-gray-400 fs-6">Amount X</span>
                                <!--end::Label-->
                            </div>
                            <!--ed::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
                                <!--end::Label-->
                            </div>
                            <!--ed::Item-->
                        </div>
                        <!--ed::Info-->
                    </div>
                    <!--end::Mixed Widget 17-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 17-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin::Title-->
                                <h4 class="fw-bold text-gray-800 m-0">User Base</h4>
                                <!--end::Title-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Chart-->
                            <div class="d-flex flex-center w-100">
                                <div class="mixed-widget-17-chart" data-kt-chart-color="success" style="height: 300px; min-height: 178.469px;"><div id="apexchartszc6qbcjw" class="apexcharts-canvas apexchartszc6qbcjw apexcharts-theme-light" style="width: 300px; height: 178.469px;"><svg id="SvgjsSvg4532" width="300" height="178.46875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="300" height="178.46875"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG4534" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs4533"><clipPath id="gridRectMaskzc6qbcjw"><rect id="SvgjsRect4535" width="282" height="300" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzc6qbcjw"></clipPath><clipPath id="nonForecastMaskzc6qbcjw"></clipPath><clipPath id="gridRectMarkerMaskzc6qbcjw"><rect id="SvgjsRect4536" width="280" height="302" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4537" class="apexcharts-radialbar"><g id="SvgjsG4538"><g id="SvgjsG4539" class="apexcharts-tracks"><g id="SvgjsG4540" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138" fill="none" fill-opacity="1" stroke="rgba(219,223,233,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="23.942682926829274" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138"></path></g></g><g id="SvgjsG4542"><g id="SvgjsG4547" class="apexcharts-series apexcharts-radial-series" seriesName="TotalxOrders" rel="1" data:realIndex="0"><path id="SvgjsPath4548" d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 200.02749307821824 75.97250692178176" fill="none" fill-opacity="0.85" stroke="rgba(160, 132, 232, 0.8156862745)" stroke-opacity="1" stroke-linecap="round" stroke-width="23.942682926829274" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="135" data:value="75" index="0" j="0" data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 200.02749307821824 75.97250692178176"></path></g><circle id="SvgjsCircle4543" r="75.7487804878049" cx="138" cy="138" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG4544" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText4545" font-family="inherit" x="138" y="133" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="700" fill="#99a1b7" class="apexcharts-text apexcharts-datalabel-label" style="font-family: inherit;">Total Orders</text><text id="SvgjsText4546" font-family="inherit" x="138" y="114" text-anchor="middle" dominant-baseline="auto" font-size="24px" font-weight="600" fill="#071437" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">8,346</text></g></g></g></g><line id="SvgjsLine4549" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4550" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Content-->
                            <div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
                                <!--begin::Text-->
                                <p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
                                    <br>make sure you breathe</p>
                                <!--end::Text-->
                                <!--begin::Action-->
                                <div class="mb-9 mb-xxl-1">
                                    <a href="#" class="btn btn-info fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
                                </div>
                                <!--ed::Action-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-center py-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <span class="fw-semibold text-gray-400 fs-6">Amount X</span>
                                <!--end::Label-->
                            </div>
                            <!--ed::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
                                <!--end::Label-->
                            </div>
                            <!--ed::Item-->
                        </div>
                        <!--ed::Info-->
                    </div>
                    <!--end::Mixed Widget 17-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 17-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Heading-->
                            <div class="d-flex flex-stack">
                                <!--begin::Title-->
                                <h4 class="fw-bold text-gray-800 m-0">User Base</h4>
                                <!--end::Title-->
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
															<i class="ki-duotone ki-information fs-6">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
															</i>
														</span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications">
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Chart-->
                            <div class="d-flex flex-center w-100">
                                <div class="mixed-widget-17-chart" data-kt-chart-color="danger" style="height: 300px; min-height: 178.469px;"><div id="apexchartsght5jemt" class="apexcharts-canvas apexchartsght5jemt apexcharts-theme-light" style="width: 300px; height: 178.469px;"><svg id="SvgjsSvg4551" width="300" height="178.46875" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="300" height="178.46875"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG4553" class="apexcharts-inner apexcharts-graphical" transform="translate(13, 0)"><defs id="SvgjsDefs4552"><clipPath id="gridRectMaskght5jemt"><rect id="SvgjsRect4554" width="282" height="300" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskght5jemt"></clipPath><clipPath id="nonForecastMaskght5jemt"></clipPath><clipPath id="gridRectMarkerMaskght5jemt"><rect id="SvgjsRect4555" width="280" height="302" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4556" class="apexcharts-radialbar"><g id="SvgjsG4557"><g id="SvgjsG4558" class="apexcharts-tracks"><g id="SvgjsG4559" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138" fill="none" fill-opacity="1" stroke="rgba(219,223,233,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="23.942682926829274" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 225.72012195121954 138"></path></g></g><g id="SvgjsG4561"><g id="SvgjsG4566" class="apexcharts-series apexcharts-radial-series" seriesName="TotalxOrders" rel="1" data:realIndex="0"><path id="SvgjsPath4567" d="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 200.02749307821824 75.97250692178176" fill="none" fill-opacity="0.85" stroke="rgba(241,65,108,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="23.942682926829274" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="135" data:value="75" index="0" j="0" data:pathOrig="M 50.279878048780475 138 A 87.72012195121953 87.72012195121953 0 0 1 200.02749307821824 75.97250692178176"></path></g><circle id="SvgjsCircle4562" r="75.7487804878049" cx="138" cy="138" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG4563" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText4564" font-family="inherit" x="138" y="133" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="700" fill="#99a1b7" class="apexcharts-text apexcharts-datalabel-label" style="font-family: inherit;">Total Orders</text><text id="SvgjsText4565" font-family="inherit" x="138" y="114" text-anchor="middle" dominant-baseline="auto" font-size="24px" font-weight="600" fill="#071437" class="apexcharts-text apexcharts-datalabel-value" style="font-family: inherit;">8,346</text></g></g></g></g><line id="SvgjsLine4568" x1="0" y1="0" x2="276" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4569" x1="0" y1="0" x2="276" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Content-->
                            <div class="text-center w-100 position-relative z-index-1" style="margin-top: -130px">
                                <!--begin::Text-->
                                <p class="fw-semibold fs-4 text-gray-400 mb-6">Long before you sit down to put the
                                    <br>make sure you breathe</p>
                                <!--end::Text-->
                                <!--begin::Action-->
                                <div class="mb-9 mb-xxl-1">
                                    <a href="#" class="btn btn-success fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Increase Users</a>
                                </div>
                                <!--ed::Action-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer d-flex flex-center py-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center flex-shrink-0 me-7 me-lg-12">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <span class="fw-semibold text-gray-400 fs-6">Amount X</span>
                                <!--end::Label-->
                            </div>
                            <!--ed::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <span class="fw-semibold text-gray-400 fs-6">Amount Y</span>
                                <!--end::Label-->
                            </div>
                            <!--ed::Item-->
                        </div>
                        <!--ed::Info-->
                    </div>
                    <!--end::Mixed Widget 17-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 6-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                                <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e200553">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e200553" data-allow-clear="true" data-select2-id="select2-data-21-pmxn" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-22-6pm2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-s75x-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-s75x-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-px pt-5 pb-10 flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0 mt-5 mb-10">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-bucket fs-1 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$2,034</div>
                                                <div class="fs-7 text-muted fw-bold">Author Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <i class="ki-duotone ki-abstract-26 fs-1 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$706</div>
                                                <div class="fs-7 text-muted fw-bold">Commision</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-basket fs-1 text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$49</div>
                                                <div class="fs-7 text-muted fw-bold">Average Bid</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-primary">
                                                    <i class="ki-duotone ki-barcode fs-1 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$5.8M</div>
                                                <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px; min-height: 150px;"><div id="apexchartsmysbf4zah" class="apexcharts-canvas apexchartsmysbf4zah apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3296" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3335" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3298" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3297"><clipPath id="gridRectMaskmysbf4zah"><rect id="SvgjsRect3300" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmysbf4zah"></clipPath><clipPath id="nonForecastMaskmysbf4zah"></clipPath><clipPath id="gridRectMarkerMaskmysbf4zah"><rect id="SvgjsRect3301" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3308" class="apexcharts-grid"><g id="SvgjsG3309" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3312" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3313" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3314" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3315" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3316" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3317" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3318" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3319" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3320" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3321" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3322" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3310" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3324" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3323" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3302" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3303" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3306" d="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmysbf4zah)" pathTo="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3307" d="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" fill="none" fill-opacity="1" stroke="#512b81" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmysbf4zah)" pathTo="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3304" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3339" r="0" cx="0" cy="0" class="apexcharts-marker wgt4dk3cv no-pointer-events" stroke="#512b81" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3305" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3311" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3325" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3326" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3327" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3328" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3336" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3337" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3338" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(251, 203, 10, 0.71);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 6-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 6-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                                <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e20058d">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e20058d" data-allow-clear="true" data-select2-id="select2-data-23-h9ka" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-24-lqa9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-skun-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-skun-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-px pt-5 pb-10 flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0 mt-5 mb-10">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-bucket fs-1 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$2,034</div>
                                                <div class="fs-7 text-muted fw-bold">Author Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <i class="ki-duotone ki-abstract-26 fs-1 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$706</div>
                                                <div class="fs-7 text-muted fw-bold">Commision</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-basket fs-1 text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$49</div>
                                                <div class="fs-7 text-muted fw-bold">Average Bid</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-primary">
                                                    <i class="ki-duotone ki-barcode fs-1 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$5.8M</div>
                                                <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px; min-height: 150px;"><div id="apexcharts0lohqao8" class="apexcharts-canvas apexcharts0lohqao8 apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3341" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3380" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3343" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3342"><clipPath id="gridRectMask0lohqao8"><rect id="SvgjsRect3345" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask0lohqao8"></clipPath><clipPath id="nonForecastMask0lohqao8"></clipPath><clipPath id="gridRectMarkerMask0lohqao8"><rect id="SvgjsRect3346" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3353" class="apexcharts-grid"><g id="SvgjsG3354" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3357" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3358" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3359" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3360" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3361" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3362" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3363" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3364" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3365" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3366" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3367" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3355" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3369" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3368" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3347" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3348" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3351" d="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" fill="rgba(241,250,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lohqao8)" pathTo="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3352" d="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" fill="none" fill-opacity="1" stroke="rgba(160, 132, 232, 0.8156862745)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask0lohqao8)" pathTo="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3349" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3384" r="0" cx="0" cy="0" class="apexcharts-marker w9rb525ky no-pointer-events" stroke="rgba(160, 132, 232, 0.8156862745)" fill="#f1faff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3350" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3356" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3370" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3371" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3372" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3373" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3381" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3382" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3383" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 250, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 6-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 6-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Beader-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                                <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
                            </h3>
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776e2005c6">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776e2005c6" data-allow-clear="true" data-select2-id="select2-data-25-95il" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-3h14" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-asgz-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-asgz-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex flex-column">
                            <!--begin::Stats-->
                            <div class="card-px pt-5 pb-10 flex-grow-1">
                                <!--begin::Row-->
                                <div class="row g-0 mt-5 mb-10">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-info">
                                                    <i class="ki-duotone ki-bucket fs-1 text-info">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$2,034</div>
                                                <div class="fs-7 text-muted fw-bold">Author Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-danger">
                                                    <i class="ki-duotone ki-abstract-26 fs-1 text-danger">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$706</div>
                                                <div class="fs-7 text-muted fw-bold">Commision</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-success">
                                                    <i class="ki-duotone ki-basket fs-1 text-success">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$49</div>
                                                <div class="fs-7 text-muted fw-bold">Average Bid</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-50px me-3">
                                                <div class="symbol-label bg-light-primary">
                                                    <i class="ki-duotone ki-barcode fs-1 text-primary">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                    </i>
                                                </div>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div>
                                                <div class="fs-4 text-dark fw-bold">$5.8M</div>
                                                <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="danger" style="height: 150px; min-height: 150px;"><div id="apexchartsturg3il9" class="apexcharts-canvas apexchartsturg3il9 apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3386" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3425" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3388" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3387"><clipPath id="gridRectMaskturg3il9"><rect id="SvgjsRect3390" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskturg3il9"></clipPath><clipPath id="nonForecastMaskturg3il9"></clipPath><clipPath id="gridRectMarkerMaskturg3il9"><rect id="SvgjsRect3391" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3398" class="apexcharts-grid"><g id="SvgjsG3399" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3402" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3403" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3404" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3405" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3406" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3407" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3408" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3409" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3410" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3411" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3412" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3400" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3414" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3413" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3392" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3393" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3396" d="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" fill="rgba(255,245,248,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskturg3il9)" pathTo="M 0 150 L 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5C 375 12.5 375 12.5 375 150M 375 12.5z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3397" d="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" fill="none" fill-opacity="1" stroke="#f1416c" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskturg3il9)" pathTo="M 0 75C 26.25 75 48.75 87.5 75 87.5C 101.25 87.5 123.75 37.5 150 37.5C 176.25 37.5 198.74999999999997 75 224.99999999999997 75C 251.24999999999997 75 273.75 12.5 300 12.5C 326.25 12.5 348.75 12.5 375 12.5" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3394" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3429" r="0" cx="0" cy="0" class="apexcharts-marker w940cnv3dg no-pointer-events" stroke="#f1416c" fill="#fff5f8" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3395" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3401" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3415" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3416" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3417" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3418" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3426" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3427" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3428" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 245, 248);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 6-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 7-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0">
                            <!--begin::Stats-->
                            <div class="flex-grow-1 card-p pb-0">
                                <div class="d-flex flex-stack flex-wrap">
                                    <div class="me-2">
                                        <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Generate Reports</a>
                                        <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                                    </div>
                                    <div class="fw-bold fs-3 text-info">$24,500</div>
                                </div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="info" style="height: 150px; min-height: 150px;"><div id="apexchartsfa7j7tqhg" class="apexcharts-canvas apexchartsfa7j7tqhg apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3431" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3470" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3433" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3432"><clipPath id="gridRectMaskfa7j7tqhg"><rect id="SvgjsRect3435" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskfa7j7tqhg"></clipPath><clipPath id="nonForecastMaskfa7j7tqhg"></clipPath><clipPath id="gridRectMarkerMaskfa7j7tqhg"><rect id="SvgjsRect3436" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3443" class="apexcharts-grid"><g id="SvgjsG3444" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3447" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3448" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3449" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3450" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3451" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3452" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3453" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3454" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3455" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3456" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3457" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3445" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3459" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3458" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3437" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3438" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3441" d="M 0 150 L 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25C 375 25 375 25 375 150M 375 25z" fill="rgba(248,245,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfa7j7tqhg)" pathTo="M 0 150 L 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25C 375 25 375 25 375 150M 375 25z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3442" d="M 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25" fill="none" fill-opacity="1" stroke="#7239ea" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskfa7j7tqhg)" pathTo="M 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3439" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3474" r="0" cx="0" cy="0" class="apexcharts-marker wtp8bgv8v no-pointer-events" stroke="#7239ea" fill="#f8f5ff" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3440" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3446" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3460" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3461" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3462" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3463" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3471" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3472" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3473" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(248, 245, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 7-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0">
                            <!--begin::Stats-->
                            <div class="flex-grow-1 card-p pb-0">
                                <div class="d-flex flex-stack flex-wrap">
                                    <div class="me-2">
                                        <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Generate Reports</a>
                                        <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                                    </div>
                                    <div class="fw-bold fs-3 text-warning">$24,500</div>
                                </div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="warning" style="height: 150px; min-height: 150px;"><div id="apexchartspegqtyn4" class="apexcharts-canvas apexchartspegqtyn4 apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3476" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3515" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3478" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3477"><clipPath id="gridRectMaskpegqtyn4"><rect id="SvgjsRect3480" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskpegqtyn4"></clipPath><clipPath id="nonForecastMaskpegqtyn4"></clipPath><clipPath id="gridRectMarkerMaskpegqtyn4"><rect id="SvgjsRect3481" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3488" class="apexcharts-grid"><g id="SvgjsG3489" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3492" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3493" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3494" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3495" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3496" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3497" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3498" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3499" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3500" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3501" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3502" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3490" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3504" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3503" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3482" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3483" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3486" d="M 0 150 L 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25C 375 25 375 25 375 150M 375 25z" fill="rgba(255,248,221,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpegqtyn4)" pathTo="M 0 150 L 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25C 375 25 375 25 375 150M 375 25z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3487" d="M 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25" fill="none" fill-opacity="1" stroke="#ffc700" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskpegqtyn4)" pathTo="M 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3484" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3519" r="0" cx="0" cy="0" class="apexcharts-marker w3mrjxbbr no-pointer-events" stroke="#ffc700" fill="#fff8dd" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3485" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3491" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3505" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3506" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3507" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3508" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3516" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3517" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3518" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 248, 221);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 7-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0">
                            <!--begin::Stats-->
                            <div class="flex-grow-1 card-p pb-0">
                                <div class="d-flex flex-stack flex-wrap">
                                    <div class="me-2">
                                        <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Generate Reports</a>
                                        <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                                    </div>
                                    <div class="fw-bold fs-3 text-primary">$24,500</div>
                                </div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px; min-height: 150px;"><div id="apexchartstkn05exi" class="apexcharts-canvas apexchartstkn05exi apexcharts-theme-light" style="width: 375px; height: 150px;"><svg id="SvgjsSvg3521" width="375" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="150"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 75px;"></div></foreignObject><g id="SvgjsG3560" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG3523" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs3522"><clipPath id="gridRectMasktkn05exi"><rect id="SvgjsRect3525" width="382" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasktkn05exi"></clipPath><clipPath id="nonForecastMasktkn05exi"></clipPath><clipPath id="gridRectMarkerMasktkn05exi"><rect id="SvgjsRect3526" width="379" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG3533" class="apexcharts-grid"><g id="SvgjsG3534" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine3537" x1="0" y1="0" x2="375" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3538" x1="0" y1="15" x2="375" y2="15" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3539" x1="0" y1="30" x2="375" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3540" x1="0" y1="45" x2="375" y2="45" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3541" x1="0" y1="60" x2="375" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3542" x1="0" y1="75" x2="375" y2="75" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3543" x1="0" y1="90" x2="375" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3544" x1="0" y1="105" x2="375" y2="105" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3545" x1="0" y1="120" x2="375" y2="120" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3546" x1="0" y1="135" x2="375" y2="135" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3547" x1="0" y1="150" x2="375" y2="150" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3535" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine3549" x1="0" y1="150" x2="375" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3548" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3527" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG3528" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath3531" d="M 0 150 L 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25C 375 25 375 25 375 150M 375 25z" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktkn05exi)" pathTo="M 0 150 L 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25C 375 25 375 25 375 150M 375 25z" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150"></path><path id="SvgjsPath3532" d="M 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25" fill="none" fill-opacity="1" stroke="#512b81" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktkn05exi)" pathTo="M 0 112.5C 26.25 112.5 48.75 87.5 75 87.5C 101.25 87.5 123.75 112.5 150 112.5C 176.25 112.5 198.74999999999997 50 224.99999999999997 50C 251.24999999999997 50 273.75 100 300 100C 326.25 100 348.75 25 375 25" pathFrom="M -1 150 L -1 150 L 75 150 L 150 150 L 224.99999999999997 150 L 300 150 L 375 150" fill-rule="evenodd"></path><g id="SvgjsG3529" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle3564" r="0" cx="0" cy="0" class="apexcharts-marker w0s36dhk6 no-pointer-events" stroke="#512b81" fill="rgba(251, 203, 10, 0.7098039216)" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG3530" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG3536" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine3550" x1="0" y1="0" x2="375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3551" x1="0" y1="0" x2="375" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3552" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3553" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG3561" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3562" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3563" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(251, 203, 10, 0.71);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 7-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 10-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                            <!--begin::Hidden-->
                            <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                <div class="me-2">
                                    <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                                    <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 23</span>
                                </div>
                                <div class="fw-bold fs-3 text-info">$15,300</div>
                            </div>
                            <!--end::Hidden-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-10-chart" data-kt-color="info" style="height: 200px; min-height: 215px;"><div id="apexchartsxtydt56u" class="apexcharts-canvas apexchartsxtydt56u apexcharts-theme-light" style="width: 375px; height: 200px;"><svg id="SvgjsSvg3565" width="375" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><g id="SvgjsG3657" class="apexcharts-yaxis" rel="0" transform="translate(11.8984375, 0)"><g id="SvgjsG3658" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3660" font-family="inherit" x="20" y="41.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3661">80</tspan><title>80</title></text><text id="SvgjsText3663" font-family="inherit" x="20" y="71.78475" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3664">60</tspan><title>60</title></text><text id="SvgjsText3666" font-family="inherit" x="20" y="102.1695" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3667">40</tspan><title>40</title></text><text id="SvgjsText3669" font-family="inherit" x="20" y="132.55425" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3670">20</tspan><title>20</title></text><text id="SvgjsText3672" font-family="inherit" x="20" y="162.939" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3673">0</tspan><title>0</title></text></g></g><g id="SvgjsG3567" class="apexcharts-inner apexcharts-graphical" transform="translate(41.8984375, 40)"><defs id="SvgjsDefs3566"><linearGradient id="SvgjsLinearGradient3570" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3571" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3572" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3573" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskxtydt56u"><rect id="SvgjsRect3575" width="329.1015625" height="123.53899999999999" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskxtydt56u"></clipPath><clipPath id="nonForecastMaskxtydt56u"></clipPath><clipPath id="gridRectMarkerMaskxtydt56u"><rect id="SvgjsRect3576" width="327.1015625" height="125.53899999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3574" width="10.096923828125" height="121.53899999999999" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3570)" class="apexcharts-xcrosshairs" y2="121.53899999999999" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3618" class="apexcharts-grid"><g id="SvgjsG3619" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3623" x1="0" y1="30.384749999999997" x2="323.1015625" y2="30.384749999999997" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3624" x1="0" y1="60.769499999999994" x2="323.1015625" y2="60.769499999999994" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3625" x1="0" y1="91.15424999999999" x2="323.1015625" y2="91.15424999999999" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3620" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3628" x1="0" y1="121.53899999999999" x2="323.1015625" y2="121.53899999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3627" x1="0" y1="1" x2="0" y2="121.53899999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3577" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3578" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath3583" d="M 10.096923828125 117.53999999999999 L 10.096923828125 49.57812499999999 C 10.096923828125 47.57812499999999 12.096923828125 45.57812499999999 14.096923828125 45.57812499999999 L 14.19384765625 45.57812499999999 C 16.19384765625 45.57812499999999 18.19384765625 47.57812499999999 18.19384765625 49.57812499999999 L 18.19384765625 117.53999999999999 C 18.19384765625 119.53999999999999 16.19384765625 121.53999999999999 14.19384765625 121.53999999999999 L 14.096923828125 121.53999999999999 C 12.096923828125 121.53999999999999 10.096923828125 119.53999999999999 10.096923828125 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 10.096923828125 117.53999999999999 L 10.096923828125 49.57812499999999 C 10.096923828125 47.57812499999999 12.096923828125 45.57812499999999 14.096923828125 45.57812499999999 L 14.19384765625 45.57812499999999 C 16.19384765625 45.57812499999999 18.19384765625 47.57812499999999 18.19384765625 49.57812499999999 L 18.19384765625 117.53999999999999 C 18.19384765625 119.53999999999999 16.19384765625 121.53999999999999 14.19384765625 121.53999999999999 L 14.096923828125 121.53999999999999 C 12.096923828125 121.53999999999999 10.096923828125 119.53999999999999 10.096923828125 117.53999999999999 Z " pathFrom="M 10.096923828125 121.53999999999999 L 10.096923828125 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 10.096923828125 121.53999999999999 Z" cy="45.577124999999995" cx="49.484619140625" j="0" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3585" d="M 50.484619140625 117.53999999999999 L 50.484619140625 34.38575 C 50.484619140625 32.38575 52.484619140625 30.385749999999998 54.484619140625 30.385749999999998 L 54.58154296875 30.385749999999998 C 56.58154296875 30.385749999999998 58.58154296875 32.38575 58.58154296875 34.38575 L 58.58154296875 117.53999999999999 C 58.58154296875 119.53999999999999 56.58154296875 121.53999999999999 54.58154296875 121.53999999999999 L 54.484619140625 121.53999999999999 C 52.484619140625 121.53999999999999 50.484619140625 119.53999999999999 50.484619140625 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 50.484619140625 117.53999999999999 L 50.484619140625 34.38575 C 50.484619140625 32.38575 52.484619140625 30.385749999999998 54.484619140625 30.385749999999998 L 54.58154296875 30.385749999999998 C 56.58154296875 30.385749999999998 58.58154296875 32.38575 58.58154296875 34.38575 L 58.58154296875 117.53999999999999 C 58.58154296875 119.53999999999999 56.58154296875 121.53999999999999 54.58154296875 121.53999999999999 L 54.484619140625 121.53999999999999 C 52.484619140625 121.53999999999999 50.484619140625 119.53999999999999 50.484619140625 117.53999999999999 Z " pathFrom="M 50.484619140625 121.53999999999999 L 50.484619140625 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 50.484619140625 121.53999999999999 Z" cy="30.384749999999997" cx="89.872314453125" j="1" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3587" d="M 90.872314453125 117.53999999999999 L 90.872314453125 19.193374999999996 C 90.872314453125 17.193374999999996 92.872314453125 15.193374999999998 94.872314453125 15.193374999999998 L 94.96923828125 15.193374999999998 C 96.96923828125 15.193374999999998 98.96923828125 17.193374999999996 98.96923828125 19.193374999999996 L 98.96923828125 117.53999999999999 C 98.96923828125 119.53999999999999 96.96923828125 121.53999999999999 94.96923828125 121.53999999999999 L 94.872314453125 121.53999999999999 C 92.872314453125 121.53999999999999 90.872314453125 119.53999999999999 90.872314453125 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 90.872314453125 117.53999999999999 L 90.872314453125 19.193374999999996 C 90.872314453125 17.193374999999996 92.872314453125 15.193374999999998 94.872314453125 15.193374999999998 L 94.96923828125 15.193374999999998 C 96.96923828125 15.193374999999998 98.96923828125 17.193374999999996 98.96923828125 19.193374999999996 L 98.96923828125 117.53999999999999 C 98.96923828125 119.53999999999999 96.96923828125 121.53999999999999 94.96923828125 121.53999999999999 L 94.872314453125 121.53999999999999 C 92.872314453125 121.53999999999999 90.872314453125 119.53999999999999 90.872314453125 117.53999999999999 Z " pathFrom="M 90.872314453125 121.53999999999999 L 90.872314453125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 90.872314453125 121.53999999999999 Z" cy="15.192374999999998" cx="130.260009765625" j="2" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3589" d="M 131.260009765625 117.53999999999999 L 131.260009765625 4.001 C 131.260009765625 2.0010000000000003 133.260009765625 0.001 135.260009765625 0.001 L 135.35693359375 0.001 C 137.35693359375 0.001 139.35693359375 2.001 139.35693359375 4.001 L 139.35693359375 117.53999999999999 C 139.35693359375 119.53999999999999 137.35693359375 121.53999999999999 135.35693359375 121.53999999999999 L 135.260009765625 121.53999999999999 C 133.260009765625 121.53999999999999 131.260009765625 119.53999999999999 131.260009765625 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 131.260009765625 117.53999999999999 L 131.260009765625 4.001 C 131.260009765625 2.0010000000000003 133.260009765625 0.001 135.260009765625 0.001 L 135.35693359375 0.001 C 137.35693359375 0.001 139.35693359375 2.001 139.35693359375 4.001 L 139.35693359375 117.53999999999999 C 139.35693359375 119.53999999999999 137.35693359375 121.53999999999999 135.35693359375 121.53999999999999 L 135.260009765625 121.53999999999999 C 133.260009765625 121.53999999999999 131.260009765625 119.53999999999999 131.260009765625 117.53999999999999 Z " pathFrom="M 131.260009765625 121.53999999999999 L 131.260009765625 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 131.260009765625 121.53999999999999 Z" cy="0" cx="170.647705078125" j="3" val="80" barHeight="121.53899999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3591" d="M 171.647705078125 117.53999999999999 L 171.647705078125 34.38575 C 171.647705078125 32.38575 173.647705078125 30.385749999999998 175.647705078125 30.385749999999998 L 175.74462890625 30.385749999999998 C 177.74462890625 30.385749999999998 179.74462890625 32.38575 179.74462890625 34.38575 L 179.74462890625 117.53999999999999 C 179.74462890625 119.53999999999999 177.74462890625 121.53999999999999 175.74462890625 121.53999999999999 L 175.647705078125 121.53999999999999 C 173.647705078125 121.53999999999999 171.647705078125 119.53999999999999 171.647705078125 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 171.647705078125 117.53999999999999 L 171.647705078125 34.38575 C 171.647705078125 32.38575 173.647705078125 30.385749999999998 175.647705078125 30.385749999999998 L 175.74462890625 30.385749999999998 C 177.74462890625 30.385749999999998 179.74462890625 32.38575 179.74462890625 34.38575 L 179.74462890625 117.53999999999999 C 179.74462890625 119.53999999999999 177.74462890625 121.53999999999999 175.74462890625 121.53999999999999 L 175.647705078125 121.53999999999999 C 173.647705078125 121.53999999999999 171.647705078125 119.53999999999999 171.647705078125 117.53999999999999 Z " pathFrom="M 171.647705078125 121.53999999999999 L 171.647705078125 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 171.647705078125 121.53999999999999 Z" cy="30.384749999999997" cx="211.035400390625" j="4" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3593" d="M 212.035400390625 117.53999999999999 L 212.035400390625 49.57812499999999 C 212.035400390625 47.57812499999999 214.035400390625 45.57812499999999 216.035400390625 45.57812499999999 L 216.13232421875 45.57812499999999 C 218.13232421875 45.57812499999999 220.13232421875 47.57812499999999 220.13232421875 49.57812499999999 L 220.13232421875 117.53999999999999 C 220.13232421875 119.53999999999999 218.13232421875 121.53999999999999 216.13232421875 121.53999999999999 L 216.035400390625 121.53999999999999 C 214.035400390625 121.53999999999999 212.035400390625 119.53999999999999 212.035400390625 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 212.035400390625 117.53999999999999 L 212.035400390625 49.57812499999999 C 212.035400390625 47.57812499999999 214.035400390625 45.57812499999999 216.035400390625 45.57812499999999 L 216.13232421875 45.57812499999999 C 218.13232421875 45.57812499999999 220.13232421875 47.57812499999999 220.13232421875 49.57812499999999 L 220.13232421875 117.53999999999999 C 220.13232421875 119.53999999999999 218.13232421875 121.53999999999999 216.13232421875 121.53999999999999 L 216.035400390625 121.53999999999999 C 214.035400390625 121.53999999999999 212.035400390625 119.53999999999999 212.035400390625 117.53999999999999 Z " pathFrom="M 212.035400390625 121.53999999999999 L 212.035400390625 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 212.035400390625 121.53999999999999 Z" cy="45.577124999999995" cx="251.423095703125" j="5" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3595" d="M 252.423095703125 117.53999999999999 L 252.423095703125 19.193374999999996 C 252.423095703125 17.193374999999996 254.423095703125 15.193374999999998 256.423095703125 15.193374999999998 L 256.52001953125 15.193374999999998 C 258.52001953125 15.193374999999998 260.52001953125 17.193374999999996 260.52001953125 19.193374999999996 L 260.52001953125 117.53999999999999 C 260.52001953125 119.53999999999999 258.52001953125 121.53999999999999 256.52001953125 121.53999999999999 L 256.423095703125 121.53999999999999 C 254.423095703125 121.53999999999999 252.423095703125 119.53999999999999 252.423095703125 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 252.423095703125 117.53999999999999 L 252.423095703125 19.193374999999996 C 252.423095703125 17.193374999999996 254.423095703125 15.193374999999998 256.423095703125 15.193374999999998 L 256.52001953125 15.193374999999998 C 258.52001953125 15.193374999999998 260.52001953125 17.193374999999996 260.52001953125 19.193374999999996 L 260.52001953125 117.53999999999999 C 260.52001953125 119.53999999999999 258.52001953125 121.53999999999999 256.52001953125 121.53999999999999 L 256.423095703125 121.53999999999999 C 254.423095703125 121.53999999999999 252.423095703125 119.53999999999999 252.423095703125 117.53999999999999 Z " pathFrom="M 252.423095703125 121.53999999999999 L 252.423095703125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 252.423095703125 121.53999999999999 Z" cy="15.192374999999998" cx="291.810791015625" j="6" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3597" d="M 292.810791015625 117.53999999999999 L 292.810791015625 34.38575 C 292.810791015625 32.38575 294.810791015625 30.385749999999998 296.810791015625 30.385749999999998 L 296.90771484375 30.385749999999998 C 298.90771484375 30.385749999999998 300.90771484375 32.38575 300.90771484375 34.38575 L 300.90771484375 117.53999999999999 C 300.90771484375 119.53999999999999 298.90771484375 121.53999999999999 296.90771484375 121.53999999999999 L 296.810791015625 121.53999999999999 C 294.810791015625 121.53999999999999 292.810791015625 119.53999999999999 292.810791015625 117.53999999999999 Z " fill="rgba(114,57,234,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 292.810791015625 117.53999999999999 L 292.810791015625 34.38575 C 292.810791015625 32.38575 294.810791015625 30.385749999999998 296.810791015625 30.385749999999998 L 296.90771484375 30.385749999999998 C 298.90771484375 30.385749999999998 300.90771484375 32.38575 300.90771484375 34.38575 L 300.90771484375 117.53999999999999 C 300.90771484375 119.53999999999999 298.90771484375 121.53999999999999 296.90771484375 121.53999999999999 L 296.810791015625 121.53999999999999 C 294.810791015625 121.53999999999999 292.810791015625 119.53999999999999 292.810791015625 117.53999999999999 Z " pathFrom="M 292.810791015625 121.53999999999999 L 292.810791015625 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 292.810791015625 121.53999999999999 Z" cy="30.384749999999997" cx="332.198486328125" j="7" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><g id="SvgjsG3580" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3582" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3584" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3586" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3588" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3590" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3592" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3594" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3596" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g></g><g id="SvgjsG3581" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3598" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath3603" d="M 20.19384765625 117.53999999999999 L 20.19384765625 49.57812499999999 C 20.19384765625 47.57812499999999 22.19384765625 45.57812499999999 24.19384765625 45.57812499999999 L 24.290771484375 45.57812499999999 C 26.290771484375 45.57812499999999 28.290771484375 47.57812499999999 28.290771484375 49.57812499999999 L 28.290771484375 117.53999999999999 C 28.290771484375 119.53999999999999 26.290771484375 121.53999999999999 24.290771484375 121.53999999999999 L 24.19384765625 121.53999999999999 C 22.19384765625 121.53999999999999 20.19384765625 119.53999999999999 20.19384765625 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 20.19384765625 117.53999999999999 L 20.19384765625 49.57812499999999 C 20.19384765625 47.57812499999999 22.19384765625 45.57812499999999 24.19384765625 45.57812499999999 L 24.290771484375 45.57812499999999 C 26.290771484375 45.57812499999999 28.290771484375 47.57812499999999 28.290771484375 49.57812499999999 L 28.290771484375 117.53999999999999 C 28.290771484375 119.53999999999999 26.290771484375 121.53999999999999 24.290771484375 121.53999999999999 L 24.19384765625 121.53999999999999 C 22.19384765625 121.53999999999999 20.19384765625 119.53999999999999 20.19384765625 117.53999999999999 Z " pathFrom="M 20.19384765625 121.53999999999999 L 20.19384765625 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 20.19384765625 121.53999999999999 Z" cy="45.577124999999995" cx="59.58154296875" j="0" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3605" d="M 60.58154296875 117.53999999999999 L 60.58154296875 34.38575 C 60.58154296875 32.38575 62.58154296875 30.385749999999998 64.58154296875 30.385749999999998 L 64.678466796875 30.385749999999998 C 66.678466796875 30.385749999999998 68.678466796875 32.38575 68.678466796875 34.38575 L 68.678466796875 117.53999999999999 C 68.678466796875 119.53999999999999 66.678466796875 121.53999999999999 64.678466796875 121.53999999999999 L 64.58154296875 121.53999999999999 C 62.58154296875 121.53999999999999 60.58154296875 119.53999999999999 60.58154296875 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 60.58154296875 117.53999999999999 L 60.58154296875 34.38575 C 60.58154296875 32.38575 62.58154296875 30.385749999999998 64.58154296875 30.385749999999998 L 64.678466796875 30.385749999999998 C 66.678466796875 30.385749999999998 68.678466796875 32.38575 68.678466796875 34.38575 L 68.678466796875 117.53999999999999 C 68.678466796875 119.53999999999999 66.678466796875 121.53999999999999 64.678466796875 121.53999999999999 L 64.58154296875 121.53999999999999 C 62.58154296875 121.53999999999999 60.58154296875 119.53999999999999 60.58154296875 117.53999999999999 Z " pathFrom="M 60.58154296875 121.53999999999999 L 60.58154296875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 60.58154296875 121.53999999999999 Z" cy="30.384749999999997" cx="99.96923828125" j="1" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3607" d="M 100.96923828125 117.53999999999999 L 100.96923828125 19.193374999999996 C 100.96923828125 17.193374999999996 102.96923828125 15.193374999999998 104.96923828125 15.193374999999998 L 105.066162109375 15.193374999999998 C 107.066162109375 15.193374999999998 109.066162109375 17.193374999999996 109.066162109375 19.193374999999996 L 109.066162109375 117.53999999999999 C 109.066162109375 119.53999999999999 107.066162109375 121.53999999999999 105.066162109375 121.53999999999999 L 104.96923828125 121.53999999999999 C 102.96923828125 121.53999999999999 100.96923828125 119.53999999999999 100.96923828125 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 100.96923828125 117.53999999999999 L 100.96923828125 19.193374999999996 C 100.96923828125 17.193374999999996 102.96923828125 15.193374999999998 104.96923828125 15.193374999999998 L 105.066162109375 15.193374999999998 C 107.066162109375 15.193374999999998 109.066162109375 17.193374999999996 109.066162109375 19.193374999999996 L 109.066162109375 117.53999999999999 C 109.066162109375 119.53999999999999 107.066162109375 121.53999999999999 105.066162109375 121.53999999999999 L 104.96923828125 121.53999999999999 C 102.96923828125 121.53999999999999 100.96923828125 119.53999999999999 100.96923828125 117.53999999999999 Z " pathFrom="M 100.96923828125 121.53999999999999 L 100.96923828125 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 100.96923828125 121.53999999999999 Z" cy="15.192374999999998" cx="140.35693359375" j="2" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3609" d="M 141.35693359375 117.53999999999999 L 141.35693359375 4.001 C 141.35693359375 2.0010000000000003 143.35693359375 0.001 145.35693359375 0.001 L 145.453857421875 0.001 C 147.453857421875 0.001 149.453857421875 2.001 149.453857421875 4.001 L 149.453857421875 117.53999999999999 C 149.453857421875 119.53999999999999 147.453857421875 121.53999999999999 145.453857421875 121.53999999999999 L 145.35693359375 121.53999999999999 C 143.35693359375 121.53999999999999 141.35693359375 119.53999999999999 141.35693359375 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 141.35693359375 117.53999999999999 L 141.35693359375 4.001 C 141.35693359375 2.0010000000000003 143.35693359375 0.001 145.35693359375 0.001 L 145.453857421875 0.001 C 147.453857421875 0.001 149.453857421875 2.001 149.453857421875 4.001 L 149.453857421875 117.53999999999999 C 149.453857421875 119.53999999999999 147.453857421875 121.53999999999999 145.453857421875 121.53999999999999 L 145.35693359375 121.53999999999999 C 143.35693359375 121.53999999999999 141.35693359375 119.53999999999999 141.35693359375 117.53999999999999 Z " pathFrom="M 141.35693359375 121.53999999999999 L 141.35693359375 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 141.35693359375 121.53999999999999 Z" cy="0" cx="180.74462890625" j="3" val="80" barHeight="121.53899999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3611" d="M 181.74462890625 117.53999999999999 L 181.74462890625 34.38575 C 181.74462890625 32.38575 183.74462890625 30.385749999999998 185.74462890625 30.385749999999998 L 185.841552734375 30.385749999999998 C 187.841552734375 30.385749999999998 189.841552734375 32.38575 189.841552734375 34.38575 L 189.841552734375 117.53999999999999 C 189.841552734375 119.53999999999999 187.841552734375 121.53999999999999 185.841552734375 121.53999999999999 L 185.74462890625 121.53999999999999 C 183.74462890625 121.53999999999999 181.74462890625 119.53999999999999 181.74462890625 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 181.74462890625 117.53999999999999 L 181.74462890625 34.38575 C 181.74462890625 32.38575 183.74462890625 30.385749999999998 185.74462890625 30.385749999999998 L 185.841552734375 30.385749999999998 C 187.841552734375 30.385749999999998 189.841552734375 32.38575 189.841552734375 34.38575 L 189.841552734375 117.53999999999999 C 189.841552734375 119.53999999999999 187.841552734375 121.53999999999999 185.841552734375 121.53999999999999 L 185.74462890625 121.53999999999999 C 183.74462890625 121.53999999999999 181.74462890625 119.53999999999999 181.74462890625 117.53999999999999 Z " pathFrom="M 181.74462890625 121.53999999999999 L 181.74462890625 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 181.74462890625 121.53999999999999 Z" cy="30.384749999999997" cx="221.13232421875" j="4" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3613" d="M 222.13232421875 117.53999999999999 L 222.13232421875 49.57812499999999 C 222.13232421875 47.57812499999999 224.13232421875 45.57812499999999 226.13232421875 45.57812499999999 L 226.229248046875 45.57812499999999 C 228.229248046875 45.57812499999999 230.229248046875 47.57812499999999 230.229248046875 49.57812499999999 L 230.229248046875 117.53999999999999 C 230.229248046875 119.53999999999999 228.229248046875 121.53999999999999 226.229248046875 121.53999999999999 L 226.13232421875 121.53999999999999 C 224.13232421875 121.53999999999999 222.13232421875 119.53999999999999 222.13232421875 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 222.13232421875 117.53999999999999 L 222.13232421875 49.57812499999999 C 222.13232421875 47.57812499999999 224.13232421875 45.57812499999999 226.13232421875 45.57812499999999 L 226.229248046875 45.57812499999999 C 228.229248046875 45.57812499999999 230.229248046875 47.57812499999999 230.229248046875 49.57812499999999 L 230.229248046875 117.53999999999999 C 230.229248046875 119.53999999999999 228.229248046875 121.53999999999999 226.229248046875 121.53999999999999 L 226.13232421875 121.53999999999999 C 224.13232421875 121.53999999999999 222.13232421875 119.53999999999999 222.13232421875 117.53999999999999 Z " pathFrom="M 222.13232421875 121.53999999999999 L 222.13232421875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 222.13232421875 121.53999999999999 Z" cy="45.577124999999995" cx="261.52001953125" j="5" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3615" d="M 262.52001953125 117.53999999999999 L 262.52001953125 19.193374999999996 C 262.52001953125 17.193374999999996 264.52001953125 15.193374999999998 266.52001953125 15.193374999999998 L 266.616943359375 15.193374999999998 C 268.616943359375 15.193374999999998 270.616943359375 17.193374999999996 270.616943359375 19.193374999999996 L 270.616943359375 117.53999999999999 C 270.616943359375 119.53999999999999 268.616943359375 121.53999999999999 266.616943359375 121.53999999999999 L 266.52001953125 121.53999999999999 C 264.52001953125 121.53999999999999 262.52001953125 119.53999999999999 262.52001953125 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 262.52001953125 117.53999999999999 L 262.52001953125 19.193374999999996 C 262.52001953125 17.193374999999996 264.52001953125 15.193374999999998 266.52001953125 15.193374999999998 L 266.616943359375 15.193374999999998 C 268.616943359375 15.193374999999998 270.616943359375 17.193374999999996 270.616943359375 19.193374999999996 L 270.616943359375 117.53999999999999 C 270.616943359375 119.53999999999999 268.616943359375 121.53999999999999 266.616943359375 121.53999999999999 L 266.52001953125 121.53999999999999 C 264.52001953125 121.53999999999999 262.52001953125 119.53999999999999 262.52001953125 117.53999999999999 Z " pathFrom="M 262.52001953125 121.53999999999999 L 262.52001953125 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 262.52001953125 121.53999999999999 Z" cy="15.192374999999998" cx="301.90771484375" j="6" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3617" d="M 302.90771484375 117.53999999999999 L 302.90771484375 34.38575 C 302.90771484375 32.38575 304.90771484375 30.385749999999998 306.90771484375 30.385749999999998 L 307.004638671875 30.385749999999998 C 309.004638671875 30.385749999999998 311.004638671875 32.38575 311.004638671875 34.38575 L 311.004638671875 117.53999999999999 C 311.004638671875 119.53999999999999 309.004638671875 121.53999999999999 307.004638671875 121.53999999999999 L 306.90771484375 121.53999999999999 C 304.90771484375 121.53999999999999 302.90771484375 119.53999999999999 302.90771484375 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskxtydt56u)" pathTo="M 302.90771484375 117.53999999999999 L 302.90771484375 34.38575 C 302.90771484375 32.38575 304.90771484375 30.385749999999998 306.90771484375 30.385749999999998 L 307.004638671875 30.385749999999998 C 309.004638671875 30.385749999999998 311.004638671875 32.38575 311.004638671875 34.38575 L 311.004638671875 117.53999999999999 C 311.004638671875 119.53999999999999 309.004638671875 121.53999999999999 307.004638671875 121.53999999999999 L 306.90771484375 121.53999999999999 C 304.90771484375 121.53999999999999 302.90771484375 119.53999999999999 302.90771484375 117.53999999999999 Z " pathFrom="M 302.90771484375 121.53999999999999 L 302.90771484375 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 302.90771484375 121.53999999999999 Z" cy="30.384749999999997" cx="342.29541015625" j="7" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><g id="SvgjsG3600" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3602" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3604" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3606" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3608" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3610" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3612" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3614" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g><g id="SvgjsG3616" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskxtydt56u)"></g></g><g id="SvgjsG3601" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3579" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG3599" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><g id="SvgjsG3621" class="apexcharts-grid-borders"><line id="SvgjsLine3622" x1="0" y1="0" x2="323.1015625" y2="0" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3626" x1="0" y1="121.53899999999999" x2="323.1015625" y2="121.53899999999999" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine3629" x1="0" y1="0" x2="323.1015625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3630" x1="0" y1="0" x2="323.1015625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3631" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3632" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText3634" font-family="inherit" x="20.19384765625" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3635">Feb</tspan><title>Feb</title></text><text id="SvgjsText3637" font-family="inherit" x="60.58154296875" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3638">Mar</tspan><title>Mar</title></text><text id="SvgjsText3640" font-family="inherit" x="100.96923828125" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3641">Apr</tspan><title>Apr</title></text><text id="SvgjsText3643" font-family="inherit" x="141.35693359375" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3644">May</tspan><title>May</title></text><text id="SvgjsText3646" font-family="inherit" x="181.74462890625" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3647">Jun</tspan><title>Jun</title></text><text id="SvgjsText3649" font-family="inherit" x="222.13232421875" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3650">Jul</tspan><title>Jul</title></text><text id="SvgjsText3652" font-family="inherit" x="262.52001953125" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3653">Aug</tspan><title>Aug</title></text><text id="SvgjsText3655" font-family="inherit" x="302.90771484375" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3656">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG3674" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3675" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3676" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(219, 223, 233);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 10-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 10-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                            <!--begin::Hidden-->
                            <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                <div class="me-2">
                                    <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                                    <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 23</span>
                                </div>
                                <div class="fw-bold fs-3 text-warning">$15,300</div>
                            </div>
                            <!--end::Hidden-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-10-chart" data-kt-color="warning" style="height: 200px; min-height: 215px;"><div id="apexchartsnvwtx7pu" class="apexcharts-canvas apexchartsnvwtx7pu apexcharts-theme-light" style="width: 375px; height: 200px;"><svg id="SvgjsSvg3677" width="375" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><g id="SvgjsG3769" class="apexcharts-yaxis" rel="0" transform="translate(11.8984375, 0)"><g id="SvgjsG3770" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3772" font-family="inherit" x="20" y="41.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3773">80</tspan><title>80</title></text><text id="SvgjsText3775" font-family="inherit" x="20" y="71.78475" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3776">60</tspan><title>60</title></text><text id="SvgjsText3778" font-family="inherit" x="20" y="102.1695" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3779">40</tspan><title>40</title></text><text id="SvgjsText3781" font-family="inherit" x="20" y="132.55425" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3782">20</tspan><title>20</title></text><text id="SvgjsText3784" font-family="inherit" x="20" y="162.939" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3785">0</tspan><title>0</title></text></g></g><g id="SvgjsG3679" class="apexcharts-inner apexcharts-graphical" transform="translate(41.8984375, 40)"><defs id="SvgjsDefs3678"><linearGradient id="SvgjsLinearGradient3682" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3683" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3684" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3685" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasknvwtx7pu"><rect id="SvgjsRect3687" width="329.1015625" height="123.53899999999999" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasknvwtx7pu"></clipPath><clipPath id="nonForecastMasknvwtx7pu"></clipPath><clipPath id="gridRectMarkerMasknvwtx7pu"><rect id="SvgjsRect3688" width="327.1015625" height="125.53899999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3686" width="10.096923828125" height="121.53899999999999" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3682)" class="apexcharts-xcrosshairs" y2="121.53899999999999" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3730" class="apexcharts-grid"><g id="SvgjsG3731" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3735" x1="0" y1="30.384749999999997" x2="323.1015625" y2="30.384749999999997" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3736" x1="0" y1="60.769499999999994" x2="323.1015625" y2="60.769499999999994" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3737" x1="0" y1="91.15424999999999" x2="323.1015625" y2="91.15424999999999" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3732" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3740" x1="0" y1="121.53899999999999" x2="323.1015625" y2="121.53899999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3739" x1="0" y1="1" x2="0" y2="121.53899999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3689" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3690" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath3695" d="M 10.096923828125 117.53999999999999 L 10.096923828125 49.57812499999999 C 10.096923828125 47.57812499999999 12.096923828125 45.57812499999999 14.096923828125 45.57812499999999 L 14.19384765625 45.57812499999999 C 16.19384765625 45.57812499999999 18.19384765625 47.57812499999999 18.19384765625 49.57812499999999 L 18.19384765625 117.53999999999999 C 18.19384765625 119.53999999999999 16.19384765625 121.53999999999999 14.19384765625 121.53999999999999 L 14.096923828125 121.53999999999999 C 12.096923828125 121.53999999999999 10.096923828125 119.53999999999999 10.096923828125 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 10.096923828125 117.53999999999999 L 10.096923828125 49.57812499999999 C 10.096923828125 47.57812499999999 12.096923828125 45.57812499999999 14.096923828125 45.57812499999999 L 14.19384765625 45.57812499999999 C 16.19384765625 45.57812499999999 18.19384765625 47.57812499999999 18.19384765625 49.57812499999999 L 18.19384765625 117.53999999999999 C 18.19384765625 119.53999999999999 16.19384765625 121.53999999999999 14.19384765625 121.53999999999999 L 14.096923828125 121.53999999999999 C 12.096923828125 121.53999999999999 10.096923828125 119.53999999999999 10.096923828125 117.53999999999999 Z " pathFrom="M 10.096923828125 121.53999999999999 L 10.096923828125 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 10.096923828125 121.53999999999999 Z" cy="45.577124999999995" cx="49.484619140625" j="0" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3697" d="M 50.484619140625 117.53999999999999 L 50.484619140625 34.38575 C 50.484619140625 32.38575 52.484619140625 30.385749999999998 54.484619140625 30.385749999999998 L 54.58154296875 30.385749999999998 C 56.58154296875 30.385749999999998 58.58154296875 32.38575 58.58154296875 34.38575 L 58.58154296875 117.53999999999999 C 58.58154296875 119.53999999999999 56.58154296875 121.53999999999999 54.58154296875 121.53999999999999 L 54.484619140625 121.53999999999999 C 52.484619140625 121.53999999999999 50.484619140625 119.53999999999999 50.484619140625 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 50.484619140625 117.53999999999999 L 50.484619140625 34.38575 C 50.484619140625 32.38575 52.484619140625 30.385749999999998 54.484619140625 30.385749999999998 L 54.58154296875 30.385749999999998 C 56.58154296875 30.385749999999998 58.58154296875 32.38575 58.58154296875 34.38575 L 58.58154296875 117.53999999999999 C 58.58154296875 119.53999999999999 56.58154296875 121.53999999999999 54.58154296875 121.53999999999999 L 54.484619140625 121.53999999999999 C 52.484619140625 121.53999999999999 50.484619140625 119.53999999999999 50.484619140625 117.53999999999999 Z " pathFrom="M 50.484619140625 121.53999999999999 L 50.484619140625 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 50.484619140625 121.53999999999999 Z" cy="30.384749999999997" cx="89.872314453125" j="1" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3699" d="M 90.872314453125 117.53999999999999 L 90.872314453125 19.193374999999996 C 90.872314453125 17.193374999999996 92.872314453125 15.193374999999998 94.872314453125 15.193374999999998 L 94.96923828125 15.193374999999998 C 96.96923828125 15.193374999999998 98.96923828125 17.193374999999996 98.96923828125 19.193374999999996 L 98.96923828125 117.53999999999999 C 98.96923828125 119.53999999999999 96.96923828125 121.53999999999999 94.96923828125 121.53999999999999 L 94.872314453125 121.53999999999999 C 92.872314453125 121.53999999999999 90.872314453125 119.53999999999999 90.872314453125 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 90.872314453125 117.53999999999999 L 90.872314453125 19.193374999999996 C 90.872314453125 17.193374999999996 92.872314453125 15.193374999999998 94.872314453125 15.193374999999998 L 94.96923828125 15.193374999999998 C 96.96923828125 15.193374999999998 98.96923828125 17.193374999999996 98.96923828125 19.193374999999996 L 98.96923828125 117.53999999999999 C 98.96923828125 119.53999999999999 96.96923828125 121.53999999999999 94.96923828125 121.53999999999999 L 94.872314453125 121.53999999999999 C 92.872314453125 121.53999999999999 90.872314453125 119.53999999999999 90.872314453125 117.53999999999999 Z " pathFrom="M 90.872314453125 121.53999999999999 L 90.872314453125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 90.872314453125 121.53999999999999 Z" cy="15.192374999999998" cx="130.260009765625" j="2" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3701" d="M 131.260009765625 117.53999999999999 L 131.260009765625 4.001 C 131.260009765625 2.0010000000000003 133.260009765625 0.001 135.260009765625 0.001 L 135.35693359375 0.001 C 137.35693359375 0.001 139.35693359375 2.001 139.35693359375 4.001 L 139.35693359375 117.53999999999999 C 139.35693359375 119.53999999999999 137.35693359375 121.53999999999999 135.35693359375 121.53999999999999 L 135.260009765625 121.53999999999999 C 133.260009765625 121.53999999999999 131.260009765625 119.53999999999999 131.260009765625 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 131.260009765625 117.53999999999999 L 131.260009765625 4.001 C 131.260009765625 2.0010000000000003 133.260009765625 0.001 135.260009765625 0.001 L 135.35693359375 0.001 C 137.35693359375 0.001 139.35693359375 2.001 139.35693359375 4.001 L 139.35693359375 117.53999999999999 C 139.35693359375 119.53999999999999 137.35693359375 121.53999999999999 135.35693359375 121.53999999999999 L 135.260009765625 121.53999999999999 C 133.260009765625 121.53999999999999 131.260009765625 119.53999999999999 131.260009765625 117.53999999999999 Z " pathFrom="M 131.260009765625 121.53999999999999 L 131.260009765625 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 131.260009765625 121.53999999999999 Z" cy="0" cx="170.647705078125" j="3" val="80" barHeight="121.53899999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3703" d="M 171.647705078125 117.53999999999999 L 171.647705078125 34.38575 C 171.647705078125 32.38575 173.647705078125 30.385749999999998 175.647705078125 30.385749999999998 L 175.74462890625 30.385749999999998 C 177.74462890625 30.385749999999998 179.74462890625 32.38575 179.74462890625 34.38575 L 179.74462890625 117.53999999999999 C 179.74462890625 119.53999999999999 177.74462890625 121.53999999999999 175.74462890625 121.53999999999999 L 175.647705078125 121.53999999999999 C 173.647705078125 121.53999999999999 171.647705078125 119.53999999999999 171.647705078125 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 171.647705078125 117.53999999999999 L 171.647705078125 34.38575 C 171.647705078125 32.38575 173.647705078125 30.385749999999998 175.647705078125 30.385749999999998 L 175.74462890625 30.385749999999998 C 177.74462890625 30.385749999999998 179.74462890625 32.38575 179.74462890625 34.38575 L 179.74462890625 117.53999999999999 C 179.74462890625 119.53999999999999 177.74462890625 121.53999999999999 175.74462890625 121.53999999999999 L 175.647705078125 121.53999999999999 C 173.647705078125 121.53999999999999 171.647705078125 119.53999999999999 171.647705078125 117.53999999999999 Z " pathFrom="M 171.647705078125 121.53999999999999 L 171.647705078125 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 171.647705078125 121.53999999999999 Z" cy="30.384749999999997" cx="211.035400390625" j="4" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3705" d="M 212.035400390625 117.53999999999999 L 212.035400390625 49.57812499999999 C 212.035400390625 47.57812499999999 214.035400390625 45.57812499999999 216.035400390625 45.57812499999999 L 216.13232421875 45.57812499999999 C 218.13232421875 45.57812499999999 220.13232421875 47.57812499999999 220.13232421875 49.57812499999999 L 220.13232421875 117.53999999999999 C 220.13232421875 119.53999999999999 218.13232421875 121.53999999999999 216.13232421875 121.53999999999999 L 216.035400390625 121.53999999999999 C 214.035400390625 121.53999999999999 212.035400390625 119.53999999999999 212.035400390625 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 212.035400390625 117.53999999999999 L 212.035400390625 49.57812499999999 C 212.035400390625 47.57812499999999 214.035400390625 45.57812499999999 216.035400390625 45.57812499999999 L 216.13232421875 45.57812499999999 C 218.13232421875 45.57812499999999 220.13232421875 47.57812499999999 220.13232421875 49.57812499999999 L 220.13232421875 117.53999999999999 C 220.13232421875 119.53999999999999 218.13232421875 121.53999999999999 216.13232421875 121.53999999999999 L 216.035400390625 121.53999999999999 C 214.035400390625 121.53999999999999 212.035400390625 119.53999999999999 212.035400390625 117.53999999999999 Z " pathFrom="M 212.035400390625 121.53999999999999 L 212.035400390625 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 212.035400390625 121.53999999999999 Z" cy="45.577124999999995" cx="251.423095703125" j="5" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3707" d="M 252.423095703125 117.53999999999999 L 252.423095703125 19.193374999999996 C 252.423095703125 17.193374999999996 254.423095703125 15.193374999999998 256.423095703125 15.193374999999998 L 256.52001953125 15.193374999999998 C 258.52001953125 15.193374999999998 260.52001953125 17.193374999999996 260.52001953125 19.193374999999996 L 260.52001953125 117.53999999999999 C 260.52001953125 119.53999999999999 258.52001953125 121.53999999999999 256.52001953125 121.53999999999999 L 256.423095703125 121.53999999999999 C 254.423095703125 121.53999999999999 252.423095703125 119.53999999999999 252.423095703125 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 252.423095703125 117.53999999999999 L 252.423095703125 19.193374999999996 C 252.423095703125 17.193374999999996 254.423095703125 15.193374999999998 256.423095703125 15.193374999999998 L 256.52001953125 15.193374999999998 C 258.52001953125 15.193374999999998 260.52001953125 17.193374999999996 260.52001953125 19.193374999999996 L 260.52001953125 117.53999999999999 C 260.52001953125 119.53999999999999 258.52001953125 121.53999999999999 256.52001953125 121.53999999999999 L 256.423095703125 121.53999999999999 C 254.423095703125 121.53999999999999 252.423095703125 119.53999999999999 252.423095703125 117.53999999999999 Z " pathFrom="M 252.423095703125 121.53999999999999 L 252.423095703125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 252.423095703125 121.53999999999999 Z" cy="15.192374999999998" cx="291.810791015625" j="6" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3709" d="M 292.810791015625 117.53999999999999 L 292.810791015625 34.38575 C 292.810791015625 32.38575 294.810791015625 30.385749999999998 296.810791015625 30.385749999999998 L 296.90771484375 30.385749999999998 C 298.90771484375 30.385749999999998 300.90771484375 32.38575 300.90771484375 34.38575 L 300.90771484375 117.53999999999999 C 300.90771484375 119.53999999999999 298.90771484375 121.53999999999999 296.90771484375 121.53999999999999 L 296.810791015625 121.53999999999999 C 294.810791015625 121.53999999999999 292.810791015625 119.53999999999999 292.810791015625 117.53999999999999 Z " fill="rgba(255,199,0,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 292.810791015625 117.53999999999999 L 292.810791015625 34.38575 C 292.810791015625 32.38575 294.810791015625 30.385749999999998 296.810791015625 30.385749999999998 L 296.90771484375 30.385749999999998 C 298.90771484375 30.385749999999998 300.90771484375 32.38575 300.90771484375 34.38575 L 300.90771484375 117.53999999999999 C 300.90771484375 119.53999999999999 298.90771484375 121.53999999999999 296.90771484375 121.53999999999999 L 296.810791015625 121.53999999999999 C 294.810791015625 121.53999999999999 292.810791015625 119.53999999999999 292.810791015625 117.53999999999999 Z " pathFrom="M 292.810791015625 121.53999999999999 L 292.810791015625 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 292.810791015625 121.53999999999999 Z" cy="30.384749999999997" cx="332.198486328125" j="7" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><g id="SvgjsG3692" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3694" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3696" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3698" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3700" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3702" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3704" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3706" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3708" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g></g><g id="SvgjsG3693" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3710" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath3715" d="M 20.19384765625 117.53999999999999 L 20.19384765625 49.57812499999999 C 20.19384765625 47.57812499999999 22.19384765625 45.57812499999999 24.19384765625 45.57812499999999 L 24.290771484375 45.57812499999999 C 26.290771484375 45.57812499999999 28.290771484375 47.57812499999999 28.290771484375 49.57812499999999 L 28.290771484375 117.53999999999999 C 28.290771484375 119.53999999999999 26.290771484375 121.53999999999999 24.290771484375 121.53999999999999 L 24.19384765625 121.53999999999999 C 22.19384765625 121.53999999999999 20.19384765625 119.53999999999999 20.19384765625 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 20.19384765625 117.53999999999999 L 20.19384765625 49.57812499999999 C 20.19384765625 47.57812499999999 22.19384765625 45.57812499999999 24.19384765625 45.57812499999999 L 24.290771484375 45.57812499999999 C 26.290771484375 45.57812499999999 28.290771484375 47.57812499999999 28.290771484375 49.57812499999999 L 28.290771484375 117.53999999999999 C 28.290771484375 119.53999999999999 26.290771484375 121.53999999999999 24.290771484375 121.53999999999999 L 24.19384765625 121.53999999999999 C 22.19384765625 121.53999999999999 20.19384765625 119.53999999999999 20.19384765625 117.53999999999999 Z " pathFrom="M 20.19384765625 121.53999999999999 L 20.19384765625 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 20.19384765625 121.53999999999999 Z" cy="45.577124999999995" cx="59.58154296875" j="0" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3717" d="M 60.58154296875 117.53999999999999 L 60.58154296875 34.38575 C 60.58154296875 32.38575 62.58154296875 30.385749999999998 64.58154296875 30.385749999999998 L 64.678466796875 30.385749999999998 C 66.678466796875 30.385749999999998 68.678466796875 32.38575 68.678466796875 34.38575 L 68.678466796875 117.53999999999999 C 68.678466796875 119.53999999999999 66.678466796875 121.53999999999999 64.678466796875 121.53999999999999 L 64.58154296875 121.53999999999999 C 62.58154296875 121.53999999999999 60.58154296875 119.53999999999999 60.58154296875 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 60.58154296875 117.53999999999999 L 60.58154296875 34.38575 C 60.58154296875 32.38575 62.58154296875 30.385749999999998 64.58154296875 30.385749999999998 L 64.678466796875 30.385749999999998 C 66.678466796875 30.385749999999998 68.678466796875 32.38575 68.678466796875 34.38575 L 68.678466796875 117.53999999999999 C 68.678466796875 119.53999999999999 66.678466796875 121.53999999999999 64.678466796875 121.53999999999999 L 64.58154296875 121.53999999999999 C 62.58154296875 121.53999999999999 60.58154296875 119.53999999999999 60.58154296875 117.53999999999999 Z " pathFrom="M 60.58154296875 121.53999999999999 L 60.58154296875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 60.58154296875 121.53999999999999 Z" cy="30.384749999999997" cx="99.96923828125" j="1" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3719" d="M 100.96923828125 117.53999999999999 L 100.96923828125 19.193374999999996 C 100.96923828125 17.193374999999996 102.96923828125 15.193374999999998 104.96923828125 15.193374999999998 L 105.066162109375 15.193374999999998 C 107.066162109375 15.193374999999998 109.066162109375 17.193374999999996 109.066162109375 19.193374999999996 L 109.066162109375 117.53999999999999 C 109.066162109375 119.53999999999999 107.066162109375 121.53999999999999 105.066162109375 121.53999999999999 L 104.96923828125 121.53999999999999 C 102.96923828125 121.53999999999999 100.96923828125 119.53999999999999 100.96923828125 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 100.96923828125 117.53999999999999 L 100.96923828125 19.193374999999996 C 100.96923828125 17.193374999999996 102.96923828125 15.193374999999998 104.96923828125 15.193374999999998 L 105.066162109375 15.193374999999998 C 107.066162109375 15.193374999999998 109.066162109375 17.193374999999996 109.066162109375 19.193374999999996 L 109.066162109375 117.53999999999999 C 109.066162109375 119.53999999999999 107.066162109375 121.53999999999999 105.066162109375 121.53999999999999 L 104.96923828125 121.53999999999999 C 102.96923828125 121.53999999999999 100.96923828125 119.53999999999999 100.96923828125 117.53999999999999 Z " pathFrom="M 100.96923828125 121.53999999999999 L 100.96923828125 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 100.96923828125 121.53999999999999 Z" cy="15.192374999999998" cx="140.35693359375" j="2" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3721" d="M 141.35693359375 117.53999999999999 L 141.35693359375 4.001 C 141.35693359375 2.0010000000000003 143.35693359375 0.001 145.35693359375 0.001 L 145.453857421875 0.001 C 147.453857421875 0.001 149.453857421875 2.001 149.453857421875 4.001 L 149.453857421875 117.53999999999999 C 149.453857421875 119.53999999999999 147.453857421875 121.53999999999999 145.453857421875 121.53999999999999 L 145.35693359375 121.53999999999999 C 143.35693359375 121.53999999999999 141.35693359375 119.53999999999999 141.35693359375 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 141.35693359375 117.53999999999999 L 141.35693359375 4.001 C 141.35693359375 2.0010000000000003 143.35693359375 0.001 145.35693359375 0.001 L 145.453857421875 0.001 C 147.453857421875 0.001 149.453857421875 2.001 149.453857421875 4.001 L 149.453857421875 117.53999999999999 C 149.453857421875 119.53999999999999 147.453857421875 121.53999999999999 145.453857421875 121.53999999999999 L 145.35693359375 121.53999999999999 C 143.35693359375 121.53999999999999 141.35693359375 119.53999999999999 141.35693359375 117.53999999999999 Z " pathFrom="M 141.35693359375 121.53999999999999 L 141.35693359375 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 141.35693359375 121.53999999999999 Z" cy="0" cx="180.74462890625" j="3" val="80" barHeight="121.53899999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3723" d="M 181.74462890625 117.53999999999999 L 181.74462890625 34.38575 C 181.74462890625 32.38575 183.74462890625 30.385749999999998 185.74462890625 30.385749999999998 L 185.841552734375 30.385749999999998 C 187.841552734375 30.385749999999998 189.841552734375 32.38575 189.841552734375 34.38575 L 189.841552734375 117.53999999999999 C 189.841552734375 119.53999999999999 187.841552734375 121.53999999999999 185.841552734375 121.53999999999999 L 185.74462890625 121.53999999999999 C 183.74462890625 121.53999999999999 181.74462890625 119.53999999999999 181.74462890625 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 181.74462890625 117.53999999999999 L 181.74462890625 34.38575 C 181.74462890625 32.38575 183.74462890625 30.385749999999998 185.74462890625 30.385749999999998 L 185.841552734375 30.385749999999998 C 187.841552734375 30.385749999999998 189.841552734375 32.38575 189.841552734375 34.38575 L 189.841552734375 117.53999999999999 C 189.841552734375 119.53999999999999 187.841552734375 121.53999999999999 185.841552734375 121.53999999999999 L 185.74462890625 121.53999999999999 C 183.74462890625 121.53999999999999 181.74462890625 119.53999999999999 181.74462890625 117.53999999999999 Z " pathFrom="M 181.74462890625 121.53999999999999 L 181.74462890625 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 181.74462890625 121.53999999999999 Z" cy="30.384749999999997" cx="221.13232421875" j="4" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3725" d="M 222.13232421875 117.53999999999999 L 222.13232421875 49.57812499999999 C 222.13232421875 47.57812499999999 224.13232421875 45.57812499999999 226.13232421875 45.57812499999999 L 226.229248046875 45.57812499999999 C 228.229248046875 45.57812499999999 230.229248046875 47.57812499999999 230.229248046875 49.57812499999999 L 230.229248046875 117.53999999999999 C 230.229248046875 119.53999999999999 228.229248046875 121.53999999999999 226.229248046875 121.53999999999999 L 226.13232421875 121.53999999999999 C 224.13232421875 121.53999999999999 222.13232421875 119.53999999999999 222.13232421875 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 222.13232421875 117.53999999999999 L 222.13232421875 49.57812499999999 C 222.13232421875 47.57812499999999 224.13232421875 45.57812499999999 226.13232421875 45.57812499999999 L 226.229248046875 45.57812499999999 C 228.229248046875 45.57812499999999 230.229248046875 47.57812499999999 230.229248046875 49.57812499999999 L 230.229248046875 117.53999999999999 C 230.229248046875 119.53999999999999 228.229248046875 121.53999999999999 226.229248046875 121.53999999999999 L 226.13232421875 121.53999999999999 C 224.13232421875 121.53999999999999 222.13232421875 119.53999999999999 222.13232421875 117.53999999999999 Z " pathFrom="M 222.13232421875 121.53999999999999 L 222.13232421875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 222.13232421875 121.53999999999999 Z" cy="45.577124999999995" cx="261.52001953125" j="5" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3727" d="M 262.52001953125 117.53999999999999 L 262.52001953125 19.193374999999996 C 262.52001953125 17.193374999999996 264.52001953125 15.193374999999998 266.52001953125 15.193374999999998 L 266.616943359375 15.193374999999998 C 268.616943359375 15.193374999999998 270.616943359375 17.193374999999996 270.616943359375 19.193374999999996 L 270.616943359375 117.53999999999999 C 270.616943359375 119.53999999999999 268.616943359375 121.53999999999999 266.616943359375 121.53999999999999 L 266.52001953125 121.53999999999999 C 264.52001953125 121.53999999999999 262.52001953125 119.53999999999999 262.52001953125 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 262.52001953125 117.53999999999999 L 262.52001953125 19.193374999999996 C 262.52001953125 17.193374999999996 264.52001953125 15.193374999999998 266.52001953125 15.193374999999998 L 266.616943359375 15.193374999999998 C 268.616943359375 15.193374999999998 270.616943359375 17.193374999999996 270.616943359375 19.193374999999996 L 270.616943359375 117.53999999999999 C 270.616943359375 119.53999999999999 268.616943359375 121.53999999999999 266.616943359375 121.53999999999999 L 266.52001953125 121.53999999999999 C 264.52001953125 121.53999999999999 262.52001953125 119.53999999999999 262.52001953125 117.53999999999999 Z " pathFrom="M 262.52001953125 121.53999999999999 L 262.52001953125 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 262.52001953125 121.53999999999999 Z" cy="15.192374999999998" cx="301.90771484375" j="6" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3729" d="M 302.90771484375 117.53999999999999 L 302.90771484375 34.38575 C 302.90771484375 32.38575 304.90771484375 30.385749999999998 306.90771484375 30.385749999999998 L 307.004638671875 30.385749999999998 C 309.004638671875 30.385749999999998 311.004638671875 32.38575 311.004638671875 34.38575 L 311.004638671875 117.53999999999999 C 311.004638671875 119.53999999999999 309.004638671875 121.53999999999999 307.004638671875 121.53999999999999 L 306.90771484375 121.53999999999999 C 304.90771484375 121.53999999999999 302.90771484375 119.53999999999999 302.90771484375 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasknvwtx7pu)" pathTo="M 302.90771484375 117.53999999999999 L 302.90771484375 34.38575 C 302.90771484375 32.38575 304.90771484375 30.385749999999998 306.90771484375 30.385749999999998 L 307.004638671875 30.385749999999998 C 309.004638671875 30.385749999999998 311.004638671875 32.38575 311.004638671875 34.38575 L 311.004638671875 117.53999999999999 C 311.004638671875 119.53999999999999 309.004638671875 121.53999999999999 307.004638671875 121.53999999999999 L 306.90771484375 121.53999999999999 C 304.90771484375 121.53999999999999 302.90771484375 119.53999999999999 302.90771484375 117.53999999999999 Z " pathFrom="M 302.90771484375 121.53999999999999 L 302.90771484375 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 302.90771484375 121.53999999999999 Z" cy="30.384749999999997" cx="342.29541015625" j="7" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><g id="SvgjsG3712" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3714" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3716" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3718" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3720" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3722" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3724" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3726" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g><g id="SvgjsG3728" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMasknvwtx7pu)"></g></g><g id="SvgjsG3713" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3691" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG3711" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><g id="SvgjsG3733" class="apexcharts-grid-borders"><line id="SvgjsLine3734" x1="0" y1="0" x2="323.1015625" y2="0" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3738" x1="0" y1="121.53899999999999" x2="323.1015625" y2="121.53899999999999" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine3741" x1="0" y1="0" x2="323.1015625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3742" x1="0" y1="0" x2="323.1015625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3743" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3744" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText3746" font-family="inherit" x="20.19384765625" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3747">Feb</tspan><title>Feb</title></text><text id="SvgjsText3749" font-family="inherit" x="60.58154296875" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3750">Mar</tspan><title>Mar</title></text><text id="SvgjsText3752" font-family="inherit" x="100.96923828125" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3753">Apr</tspan><title>Apr</title></text><text id="SvgjsText3755" font-family="inherit" x="141.35693359375" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3756">May</tspan><title>May</title></text><text id="SvgjsText3758" font-family="inherit" x="181.74462890625" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3759">Jun</tspan><title>Jun</title></text><text id="SvgjsText3761" font-family="inherit" x="222.13232421875" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3762">Jul</tspan><title>Jul</title></text><text id="SvgjsText3764" font-family="inherit" x="262.52001953125" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3765">Aug</tspan><title>Aug</title></text><text id="SvgjsText3767" font-family="inherit" x="302.90771484375" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3768">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG3786" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3787" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3788" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 199, 0);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(219, 223, 233);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 10-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 10-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                            <!--begin::Hidden-->
                            <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                <div class="me-2">
                                    <span class="fw-bold text-gray-800 d-block fs-3">Sales</span>
                                    <span class="text-gray-400 fw-bold">Oct 8 - Oct 26 23</span>
                                </div>
                                <div class="fw-bold fs-3 text-primary">$15,300</div>
                            </div>
                            <!--end::Hidden-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 200px; min-height: 215px;"><div id="apexchartsw3ev05t8f" class="apexcharts-canvas apexchartsw3ev05t8f apexcharts-theme-light" style="width: 375px; height: 200px;"><svg id="SvgjsSvg3789" width="375" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="375" height="200"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 100px;"></div></foreignObject><g id="SvgjsG3881" class="apexcharts-yaxis" rel="0" transform="translate(11.8984375, 0)"><g id="SvgjsG3882" class="apexcharts-yaxis-texts-g"><text id="SvgjsText3884" font-family="inherit" x="20" y="41.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3885">80</tspan><title>80</title></text><text id="SvgjsText3887" font-family="inherit" x="20" y="71.78475" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3888">60</tspan><title>60</title></text><text id="SvgjsText3890" font-family="inherit" x="20" y="102.1695" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3891">40</tspan><title>40</title></text><text id="SvgjsText3893" font-family="inherit" x="20" y="132.55425" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3894">20</tspan><title>20</title></text><text id="SvgjsText3896" font-family="inherit" x="20" y="162.939" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3897">0</tspan><title>0</title></text></g></g><g id="SvgjsG3791" class="apexcharts-inner apexcharts-graphical" transform="translate(41.8984375, 40)"><defs id="SvgjsDefs3790"><linearGradient id="SvgjsLinearGradient3794" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop3795" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop3796" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop3797" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskw3ev05t8f"><rect id="SvgjsRect3799" width="329.1015625" height="123.53899999999999" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskw3ev05t8f"></clipPath><clipPath id="nonForecastMaskw3ev05t8f"></clipPath><clipPath id="gridRectMarkerMaskw3ev05t8f"><rect id="SvgjsRect3800" width="327.1015625" height="125.53899999999999" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect3798" width="10.096923828125" height="121.53899999999999" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient3794)" class="apexcharts-xcrosshairs" y2="121.53899999999999" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG3842" class="apexcharts-grid"><g id="SvgjsG3843" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine3847" x1="0" y1="30.384749999999997" x2="323.1015625" y2="30.384749999999997" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3848" x1="0" y1="60.769499999999994" x2="323.1015625" y2="60.769499999999994" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3849" x1="0" y1="91.15424999999999" x2="323.1015625" y2="91.15424999999999" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG3844" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine3852" x1="0" y1="121.53899999999999" x2="323.1015625" y2="121.53899999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine3851" x1="0" y1="1" x2="0" y2="121.53899999999999" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG3801" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG3802" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath3807" d="M 10.096923828125 117.53999999999999 L 10.096923828125 49.57812499999999 C 10.096923828125 47.57812499999999 12.096923828125 45.57812499999999 14.096923828125 45.57812499999999 L 14.19384765625 45.57812499999999 C 16.19384765625 45.57812499999999 18.19384765625 47.57812499999999 18.19384765625 49.57812499999999 L 18.19384765625 117.53999999999999 C 18.19384765625 119.53999999999999 16.19384765625 121.53999999999999 14.19384765625 121.53999999999999 L 14.096923828125 121.53999999999999 C 12.096923828125 121.53999999999999 10.096923828125 119.53999999999999 10.096923828125 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 10.096923828125 117.53999999999999 L 10.096923828125 49.57812499999999 C 10.096923828125 47.57812499999999 12.096923828125 45.57812499999999 14.096923828125 45.57812499999999 L 14.19384765625 45.57812499999999 C 16.19384765625 45.57812499999999 18.19384765625 47.57812499999999 18.19384765625 49.57812499999999 L 18.19384765625 117.53999999999999 C 18.19384765625 119.53999999999999 16.19384765625 121.53999999999999 14.19384765625 121.53999999999999 L 14.096923828125 121.53999999999999 C 12.096923828125 121.53999999999999 10.096923828125 119.53999999999999 10.096923828125 117.53999999999999 Z " pathFrom="M 10.096923828125 121.53999999999999 L 10.096923828125 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 18.19384765625 121.53999999999999 L 10.096923828125 121.53999999999999 Z" cy="45.577124999999995" cx="49.484619140625" j="0" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3809" d="M 50.484619140625 117.53999999999999 L 50.484619140625 34.38575 C 50.484619140625 32.38575 52.484619140625 30.385749999999998 54.484619140625 30.385749999999998 L 54.58154296875 30.385749999999998 C 56.58154296875 30.385749999999998 58.58154296875 32.38575 58.58154296875 34.38575 L 58.58154296875 117.53999999999999 C 58.58154296875 119.53999999999999 56.58154296875 121.53999999999999 54.58154296875 121.53999999999999 L 54.484619140625 121.53999999999999 C 52.484619140625 121.53999999999999 50.484619140625 119.53999999999999 50.484619140625 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 50.484619140625 117.53999999999999 L 50.484619140625 34.38575 C 50.484619140625 32.38575 52.484619140625 30.385749999999998 54.484619140625 30.385749999999998 L 54.58154296875 30.385749999999998 C 56.58154296875 30.385749999999998 58.58154296875 32.38575 58.58154296875 34.38575 L 58.58154296875 117.53999999999999 C 58.58154296875 119.53999999999999 56.58154296875 121.53999999999999 54.58154296875 121.53999999999999 L 54.484619140625 121.53999999999999 C 52.484619140625 121.53999999999999 50.484619140625 119.53999999999999 50.484619140625 117.53999999999999 Z " pathFrom="M 50.484619140625 121.53999999999999 L 50.484619140625 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 58.58154296875 121.53999999999999 L 50.484619140625 121.53999999999999 Z" cy="30.384749999999997" cx="89.872314453125" j="1" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3811" d="M 90.872314453125 117.53999999999999 L 90.872314453125 19.193374999999996 C 90.872314453125 17.193374999999996 92.872314453125 15.193374999999998 94.872314453125 15.193374999999998 L 94.96923828125 15.193374999999998 C 96.96923828125 15.193374999999998 98.96923828125 17.193374999999996 98.96923828125 19.193374999999996 L 98.96923828125 117.53999999999999 C 98.96923828125 119.53999999999999 96.96923828125 121.53999999999999 94.96923828125 121.53999999999999 L 94.872314453125 121.53999999999999 C 92.872314453125 121.53999999999999 90.872314453125 119.53999999999999 90.872314453125 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 90.872314453125 117.53999999999999 L 90.872314453125 19.193374999999996 C 90.872314453125 17.193374999999996 92.872314453125 15.193374999999998 94.872314453125 15.193374999999998 L 94.96923828125 15.193374999999998 C 96.96923828125 15.193374999999998 98.96923828125 17.193374999999996 98.96923828125 19.193374999999996 L 98.96923828125 117.53999999999999 C 98.96923828125 119.53999999999999 96.96923828125 121.53999999999999 94.96923828125 121.53999999999999 L 94.872314453125 121.53999999999999 C 92.872314453125 121.53999999999999 90.872314453125 119.53999999999999 90.872314453125 117.53999999999999 Z " pathFrom="M 90.872314453125 121.53999999999999 L 90.872314453125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 98.96923828125 121.53999999999999 L 90.872314453125 121.53999999999999 Z" cy="15.192374999999998" cx="130.260009765625" j="2" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3813" d="M 131.260009765625 117.53999999999999 L 131.260009765625 4.001 C 131.260009765625 2.0010000000000003 133.260009765625 0.001 135.260009765625 0.001 L 135.35693359375 0.001 C 137.35693359375 0.001 139.35693359375 2.001 139.35693359375 4.001 L 139.35693359375 117.53999999999999 C 139.35693359375 119.53999999999999 137.35693359375 121.53999999999999 135.35693359375 121.53999999999999 L 135.260009765625 121.53999999999999 C 133.260009765625 121.53999999999999 131.260009765625 119.53999999999999 131.260009765625 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 131.260009765625 117.53999999999999 L 131.260009765625 4.001 C 131.260009765625 2.0010000000000003 133.260009765625 0.001 135.260009765625 0.001 L 135.35693359375 0.001 C 137.35693359375 0.001 139.35693359375 2.001 139.35693359375 4.001 L 139.35693359375 117.53999999999999 C 139.35693359375 119.53999999999999 137.35693359375 121.53999999999999 135.35693359375 121.53999999999999 L 135.260009765625 121.53999999999999 C 133.260009765625 121.53999999999999 131.260009765625 119.53999999999999 131.260009765625 117.53999999999999 Z " pathFrom="M 131.260009765625 121.53999999999999 L 131.260009765625 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 139.35693359375 121.53999999999999 L 131.260009765625 121.53999999999999 Z" cy="0" cx="170.647705078125" j="3" val="80" barHeight="121.53899999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3815" d="M 171.647705078125 117.53999999999999 L 171.647705078125 34.38575 C 171.647705078125 32.38575 173.647705078125 30.385749999999998 175.647705078125 30.385749999999998 L 175.74462890625 30.385749999999998 C 177.74462890625 30.385749999999998 179.74462890625 32.38575 179.74462890625 34.38575 L 179.74462890625 117.53999999999999 C 179.74462890625 119.53999999999999 177.74462890625 121.53999999999999 175.74462890625 121.53999999999999 L 175.647705078125 121.53999999999999 C 173.647705078125 121.53999999999999 171.647705078125 119.53999999999999 171.647705078125 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 171.647705078125 117.53999999999999 L 171.647705078125 34.38575 C 171.647705078125 32.38575 173.647705078125 30.385749999999998 175.647705078125 30.385749999999998 L 175.74462890625 30.385749999999998 C 177.74462890625 30.385749999999998 179.74462890625 32.38575 179.74462890625 34.38575 L 179.74462890625 117.53999999999999 C 179.74462890625 119.53999999999999 177.74462890625 121.53999999999999 175.74462890625 121.53999999999999 L 175.647705078125 121.53999999999999 C 173.647705078125 121.53999999999999 171.647705078125 119.53999999999999 171.647705078125 117.53999999999999 Z " pathFrom="M 171.647705078125 121.53999999999999 L 171.647705078125 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 179.74462890625 121.53999999999999 L 171.647705078125 121.53999999999999 Z" cy="30.384749999999997" cx="211.035400390625" j="4" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3817" d="M 212.035400390625 117.53999999999999 L 212.035400390625 49.57812499999999 C 212.035400390625 47.57812499999999 214.035400390625 45.57812499999999 216.035400390625 45.57812499999999 L 216.13232421875 45.57812499999999 C 218.13232421875 45.57812499999999 220.13232421875 47.57812499999999 220.13232421875 49.57812499999999 L 220.13232421875 117.53999999999999 C 220.13232421875 119.53999999999999 218.13232421875 121.53999999999999 216.13232421875 121.53999999999999 L 216.035400390625 121.53999999999999 C 214.035400390625 121.53999999999999 212.035400390625 119.53999999999999 212.035400390625 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 212.035400390625 117.53999999999999 L 212.035400390625 49.57812499999999 C 212.035400390625 47.57812499999999 214.035400390625 45.57812499999999 216.035400390625 45.57812499999999 L 216.13232421875 45.57812499999999 C 218.13232421875 45.57812499999999 220.13232421875 47.57812499999999 220.13232421875 49.57812499999999 L 220.13232421875 117.53999999999999 C 220.13232421875 119.53999999999999 218.13232421875 121.53999999999999 216.13232421875 121.53999999999999 L 216.035400390625 121.53999999999999 C 214.035400390625 121.53999999999999 212.035400390625 119.53999999999999 212.035400390625 117.53999999999999 Z " pathFrom="M 212.035400390625 121.53999999999999 L 212.035400390625 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 220.13232421875 121.53999999999999 L 212.035400390625 121.53999999999999 Z" cy="45.577124999999995" cx="251.423095703125" j="5" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3819" d="M 252.423095703125 117.53999999999999 L 252.423095703125 19.193374999999996 C 252.423095703125 17.193374999999996 254.423095703125 15.193374999999998 256.423095703125 15.193374999999998 L 256.52001953125 15.193374999999998 C 258.52001953125 15.193374999999998 260.52001953125 17.193374999999996 260.52001953125 19.193374999999996 L 260.52001953125 117.53999999999999 C 260.52001953125 119.53999999999999 258.52001953125 121.53999999999999 256.52001953125 121.53999999999999 L 256.423095703125 121.53999999999999 C 254.423095703125 121.53999999999999 252.423095703125 119.53999999999999 252.423095703125 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 252.423095703125 117.53999999999999 L 252.423095703125 19.193374999999996 C 252.423095703125 17.193374999999996 254.423095703125 15.193374999999998 256.423095703125 15.193374999999998 L 256.52001953125 15.193374999999998 C 258.52001953125 15.193374999999998 260.52001953125 17.193374999999996 260.52001953125 19.193374999999996 L 260.52001953125 117.53999999999999 C 260.52001953125 119.53999999999999 258.52001953125 121.53999999999999 256.52001953125 121.53999999999999 L 256.423095703125 121.53999999999999 C 254.423095703125 121.53999999999999 252.423095703125 119.53999999999999 252.423095703125 117.53999999999999 Z " pathFrom="M 252.423095703125 121.53999999999999 L 252.423095703125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 260.52001953125 121.53999999999999 L 252.423095703125 121.53999999999999 Z" cy="15.192374999999998" cx="291.810791015625" j="6" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3821" d="M 292.810791015625 117.53999999999999 L 292.810791015625 34.38575 C 292.810791015625 32.38575 294.810791015625 30.385749999999998 296.810791015625 30.385749999999998 L 296.90771484375 30.385749999999998 C 298.90771484375 30.385749999999998 300.90771484375 32.38575 300.90771484375 34.38575 L 300.90771484375 117.53999999999999 C 300.90771484375 119.53999999999999 298.90771484375 121.53999999999999 296.90771484375 121.53999999999999 L 296.810791015625 121.53999999999999 C 294.810791015625 121.53999999999999 292.810791015625 119.53999999999999 292.810791015625 117.53999999999999 Z " fill="rgba(81,43,129,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 292.810791015625 117.53999999999999 L 292.810791015625 34.38575 C 292.810791015625 32.38575 294.810791015625 30.385749999999998 296.810791015625 30.385749999999998 L 296.90771484375 30.385749999999998 C 298.90771484375 30.385749999999998 300.90771484375 32.38575 300.90771484375 34.38575 L 300.90771484375 117.53999999999999 C 300.90771484375 119.53999999999999 298.90771484375 121.53999999999999 296.90771484375 121.53999999999999 L 296.810791015625 121.53999999999999 C 294.810791015625 121.53999999999999 292.810791015625 119.53999999999999 292.810791015625 117.53999999999999 Z " pathFrom="M 292.810791015625 121.53999999999999 L 292.810791015625 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 300.90771484375 121.53999999999999 L 292.810791015625 121.53999999999999 Z" cy="30.384749999999997" cx="332.198486328125" j="7" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><g id="SvgjsG3804" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3806" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3808" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3810" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3812" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3814" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3816" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3818" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3820" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g></g><g id="SvgjsG3805" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3822" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath3827" d="M 20.19384765625 117.53999999999999 L 20.19384765625 49.57812499999999 C 20.19384765625 47.57812499999999 22.19384765625 45.57812499999999 24.19384765625 45.57812499999999 L 24.290771484375 45.57812499999999 C 26.290771484375 45.57812499999999 28.290771484375 47.57812499999999 28.290771484375 49.57812499999999 L 28.290771484375 117.53999999999999 C 28.290771484375 119.53999999999999 26.290771484375 121.53999999999999 24.290771484375 121.53999999999999 L 24.19384765625 121.53999999999999 C 22.19384765625 121.53999999999999 20.19384765625 119.53999999999999 20.19384765625 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 20.19384765625 117.53999999999999 L 20.19384765625 49.57812499999999 C 20.19384765625 47.57812499999999 22.19384765625 45.57812499999999 24.19384765625 45.57812499999999 L 24.290771484375 45.57812499999999 C 26.290771484375 45.57812499999999 28.290771484375 47.57812499999999 28.290771484375 49.57812499999999 L 28.290771484375 117.53999999999999 C 28.290771484375 119.53999999999999 26.290771484375 121.53999999999999 24.290771484375 121.53999999999999 L 24.19384765625 121.53999999999999 C 22.19384765625 121.53999999999999 20.19384765625 119.53999999999999 20.19384765625 117.53999999999999 Z " pathFrom="M 20.19384765625 121.53999999999999 L 20.19384765625 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 28.290771484375 121.53999999999999 L 20.19384765625 121.53999999999999 Z" cy="45.577124999999995" cx="59.58154296875" j="0" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3829" d="M 60.58154296875 117.53999999999999 L 60.58154296875 34.38575 C 60.58154296875 32.38575 62.58154296875 30.385749999999998 64.58154296875 30.385749999999998 L 64.678466796875 30.385749999999998 C 66.678466796875 30.385749999999998 68.678466796875 32.38575 68.678466796875 34.38575 L 68.678466796875 117.53999999999999 C 68.678466796875 119.53999999999999 66.678466796875 121.53999999999999 64.678466796875 121.53999999999999 L 64.58154296875 121.53999999999999 C 62.58154296875 121.53999999999999 60.58154296875 119.53999999999999 60.58154296875 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 60.58154296875 117.53999999999999 L 60.58154296875 34.38575 C 60.58154296875 32.38575 62.58154296875 30.385749999999998 64.58154296875 30.385749999999998 L 64.678466796875 30.385749999999998 C 66.678466796875 30.385749999999998 68.678466796875 32.38575 68.678466796875 34.38575 L 68.678466796875 117.53999999999999 C 68.678466796875 119.53999999999999 66.678466796875 121.53999999999999 64.678466796875 121.53999999999999 L 64.58154296875 121.53999999999999 C 62.58154296875 121.53999999999999 60.58154296875 119.53999999999999 60.58154296875 117.53999999999999 Z " pathFrom="M 60.58154296875 121.53999999999999 L 60.58154296875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 68.678466796875 121.53999999999999 L 60.58154296875 121.53999999999999 Z" cy="30.384749999999997" cx="99.96923828125" j="1" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3831" d="M 100.96923828125 117.53999999999999 L 100.96923828125 19.193374999999996 C 100.96923828125 17.193374999999996 102.96923828125 15.193374999999998 104.96923828125 15.193374999999998 L 105.066162109375 15.193374999999998 C 107.066162109375 15.193374999999998 109.066162109375 17.193374999999996 109.066162109375 19.193374999999996 L 109.066162109375 117.53999999999999 C 109.066162109375 119.53999999999999 107.066162109375 121.53999999999999 105.066162109375 121.53999999999999 L 104.96923828125 121.53999999999999 C 102.96923828125 121.53999999999999 100.96923828125 119.53999999999999 100.96923828125 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 100.96923828125 117.53999999999999 L 100.96923828125 19.193374999999996 C 100.96923828125 17.193374999999996 102.96923828125 15.193374999999998 104.96923828125 15.193374999999998 L 105.066162109375 15.193374999999998 C 107.066162109375 15.193374999999998 109.066162109375 17.193374999999996 109.066162109375 19.193374999999996 L 109.066162109375 117.53999999999999 C 109.066162109375 119.53999999999999 107.066162109375 121.53999999999999 105.066162109375 121.53999999999999 L 104.96923828125 121.53999999999999 C 102.96923828125 121.53999999999999 100.96923828125 119.53999999999999 100.96923828125 117.53999999999999 Z " pathFrom="M 100.96923828125 121.53999999999999 L 100.96923828125 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 109.066162109375 121.53999999999999 L 100.96923828125 121.53999999999999 Z" cy="15.192374999999998" cx="140.35693359375" j="2" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3833" d="M 141.35693359375 117.53999999999999 L 141.35693359375 4.001 C 141.35693359375 2.0010000000000003 143.35693359375 0.001 145.35693359375 0.001 L 145.453857421875 0.001 C 147.453857421875 0.001 149.453857421875 2.001 149.453857421875 4.001 L 149.453857421875 117.53999999999999 C 149.453857421875 119.53999999999999 147.453857421875 121.53999999999999 145.453857421875 121.53999999999999 L 145.35693359375 121.53999999999999 C 143.35693359375 121.53999999999999 141.35693359375 119.53999999999999 141.35693359375 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 141.35693359375 117.53999999999999 L 141.35693359375 4.001 C 141.35693359375 2.0010000000000003 143.35693359375 0.001 145.35693359375 0.001 L 145.453857421875 0.001 C 147.453857421875 0.001 149.453857421875 2.001 149.453857421875 4.001 L 149.453857421875 117.53999999999999 C 149.453857421875 119.53999999999999 147.453857421875 121.53999999999999 145.453857421875 121.53999999999999 L 145.35693359375 121.53999999999999 C 143.35693359375 121.53999999999999 141.35693359375 119.53999999999999 141.35693359375 117.53999999999999 Z " pathFrom="M 141.35693359375 121.53999999999999 L 141.35693359375 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 149.453857421875 121.53999999999999 L 141.35693359375 121.53999999999999 Z" cy="0" cx="180.74462890625" j="3" val="80" barHeight="121.53899999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3835" d="M 181.74462890625 117.53999999999999 L 181.74462890625 34.38575 C 181.74462890625 32.38575 183.74462890625 30.385749999999998 185.74462890625 30.385749999999998 L 185.841552734375 30.385749999999998 C 187.841552734375 30.385749999999998 189.841552734375 32.38575 189.841552734375 34.38575 L 189.841552734375 117.53999999999999 C 189.841552734375 119.53999999999999 187.841552734375 121.53999999999999 185.841552734375 121.53999999999999 L 185.74462890625 121.53999999999999 C 183.74462890625 121.53999999999999 181.74462890625 119.53999999999999 181.74462890625 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 181.74462890625 117.53999999999999 L 181.74462890625 34.38575 C 181.74462890625 32.38575 183.74462890625 30.385749999999998 185.74462890625 30.385749999999998 L 185.841552734375 30.385749999999998 C 187.841552734375 30.385749999999998 189.841552734375 32.38575 189.841552734375 34.38575 L 189.841552734375 117.53999999999999 C 189.841552734375 119.53999999999999 187.841552734375 121.53999999999999 185.841552734375 121.53999999999999 L 185.74462890625 121.53999999999999 C 183.74462890625 121.53999999999999 181.74462890625 119.53999999999999 181.74462890625 117.53999999999999 Z " pathFrom="M 181.74462890625 121.53999999999999 L 181.74462890625 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 189.841552734375 121.53999999999999 L 181.74462890625 121.53999999999999 Z" cy="30.384749999999997" cx="221.13232421875" j="4" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><path id="SvgjsPath3837" d="M 222.13232421875 117.53999999999999 L 222.13232421875 49.57812499999999 C 222.13232421875 47.57812499999999 224.13232421875 45.57812499999999 226.13232421875 45.57812499999999 L 226.229248046875 45.57812499999999 C 228.229248046875 45.57812499999999 230.229248046875 47.57812499999999 230.229248046875 49.57812499999999 L 230.229248046875 117.53999999999999 C 230.229248046875 119.53999999999999 228.229248046875 121.53999999999999 226.229248046875 121.53999999999999 L 226.13232421875 121.53999999999999 C 224.13232421875 121.53999999999999 222.13232421875 119.53999999999999 222.13232421875 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 222.13232421875 117.53999999999999 L 222.13232421875 49.57812499999999 C 222.13232421875 47.57812499999999 224.13232421875 45.57812499999999 226.13232421875 45.57812499999999 L 226.229248046875 45.57812499999999 C 228.229248046875 45.57812499999999 230.229248046875 47.57812499999999 230.229248046875 49.57812499999999 L 230.229248046875 117.53999999999999 C 230.229248046875 119.53999999999999 228.229248046875 121.53999999999999 226.229248046875 121.53999999999999 L 226.13232421875 121.53999999999999 C 224.13232421875 121.53999999999999 222.13232421875 119.53999999999999 222.13232421875 117.53999999999999 Z " pathFrom="M 222.13232421875 121.53999999999999 L 222.13232421875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 230.229248046875 121.53999999999999 L 222.13232421875 121.53999999999999 Z" cy="45.577124999999995" cx="261.52001953125" j="5" val="50" barHeight="75.96187499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3839" d="M 262.52001953125 117.53999999999999 L 262.52001953125 19.193374999999996 C 262.52001953125 17.193374999999996 264.52001953125 15.193374999999998 266.52001953125 15.193374999999998 L 266.616943359375 15.193374999999998 C 268.616943359375 15.193374999999998 270.616943359375 17.193374999999996 270.616943359375 19.193374999999996 L 270.616943359375 117.53999999999999 C 270.616943359375 119.53999999999999 268.616943359375 121.53999999999999 266.616943359375 121.53999999999999 L 266.52001953125 121.53999999999999 C 264.52001953125 121.53999999999999 262.52001953125 119.53999999999999 262.52001953125 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 262.52001953125 117.53999999999999 L 262.52001953125 19.193374999999996 C 262.52001953125 17.193374999999996 264.52001953125 15.193374999999998 266.52001953125 15.193374999999998 L 266.616943359375 15.193374999999998 C 268.616943359375 15.193374999999998 270.616943359375 17.193374999999996 270.616943359375 19.193374999999996 L 270.616943359375 117.53999999999999 C 270.616943359375 119.53999999999999 268.616943359375 121.53999999999999 266.616943359375 121.53999999999999 L 266.52001953125 121.53999999999999 C 264.52001953125 121.53999999999999 262.52001953125 119.53999999999999 262.52001953125 117.53999999999999 Z " pathFrom="M 262.52001953125 121.53999999999999 L 262.52001953125 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 270.616943359375 121.53999999999999 L 262.52001953125 121.53999999999999 Z" cy="15.192374999999998" cx="301.90771484375" j="6" val="70" barHeight="106.34662499999999" barWidth="10.096923828125"></path><path id="SvgjsPath3841" d="M 302.90771484375 117.53999999999999 L 302.90771484375 34.38575 C 302.90771484375 32.38575 304.90771484375 30.385749999999998 306.90771484375 30.385749999999998 L 307.004638671875 30.385749999999998 C 309.004638671875 30.385749999999998 311.004638671875 32.38575 311.004638671875 34.38575 L 311.004638671875 117.53999999999999 C 311.004638671875 119.53999999999999 309.004638671875 121.53999999999999 307.004638671875 121.53999999999999 L 306.90771484375 121.53999999999999 C 304.90771484375 121.53999999999999 302.90771484375 119.53999999999999 302.90771484375 117.53999999999999 Z " fill="rgba(219,223,233,0.85)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskw3ev05t8f)" pathTo="M 302.90771484375 117.53999999999999 L 302.90771484375 34.38575 C 302.90771484375 32.38575 304.90771484375 30.385749999999998 306.90771484375 30.385749999999998 L 307.004638671875 30.385749999999998 C 309.004638671875 30.385749999999998 311.004638671875 32.38575 311.004638671875 34.38575 L 311.004638671875 117.53999999999999 C 311.004638671875 119.53999999999999 309.004638671875 121.53999999999999 307.004638671875 121.53999999999999 L 306.90771484375 121.53999999999999 C 304.90771484375 121.53999999999999 302.90771484375 119.53999999999999 302.90771484375 117.53999999999999 Z " pathFrom="M 302.90771484375 121.53999999999999 L 302.90771484375 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 311.004638671875 121.53999999999999 L 302.90771484375 121.53999999999999 Z" cy="30.384749999999997" cx="342.29541015625" j="7" val="60" barHeight="91.15424999999999" barWidth="10.096923828125"></path><g id="SvgjsG3824" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG3826" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3828" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3830" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3832" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3834" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3836" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3838" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g><g id="SvgjsG3840" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskw3ev05t8f)"></g></g><g id="SvgjsG3825" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG3803" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g><g id="SvgjsG3823" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="1"></g></g><g id="SvgjsG3845" class="apexcharts-grid-borders"><line id="SvgjsLine3846" x1="0" y1="0" x2="323.1015625" y2="0" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine3850" x1="0" y1="121.53899999999999" x2="323.1015625" y2="121.53899999999999" stroke="#f1f1f2" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line></g><line id="SvgjsLine3853" x1="0" y1="0" x2="323.1015625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine3854" x1="0" y1="0" x2="323.1015625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG3855" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG3856" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText3858" font-family="inherit" x="20.19384765625" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3859">Feb</tspan><title>Feb</title></text><text id="SvgjsText3861" font-family="inherit" x="60.58154296875" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3862">Mar</tspan><title>Mar</title></text><text id="SvgjsText3864" font-family="inherit" x="100.96923828125" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3865">Apr</tspan><title>Apr</title></text><text id="SvgjsText3867" font-family="inherit" x="141.35693359375" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3868">May</tspan><title>May</title></text><text id="SvgjsText3870" font-family="inherit" x="181.74462890625" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3871">Jun</tspan><title>Jun</title></text><text id="SvgjsText3873" font-family="inherit" x="222.13232421875" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3874">Jul</tspan><title>Jul</title></text><text id="SvgjsText3876" font-family="inherit" x="262.52001953125" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3877">Aug</tspan><title>Aug</title></text><text id="SvgjsText3879" font-family="inherit" x="302.90771484375" y="150.539" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label " style="font-family: inherit;"><tspan id="SvgjsTspan3880">Sep</tspan><title>Sep</title></text></g></g><g id="SvgjsG3898" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG3899" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG3900" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(81, 43, 129);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(219, 223, 233);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 10-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 13-->
                    <div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Earnings</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;"><div id="apexchartsi9k087gd" class="apexcharts-canvas apexchartsi9k087gd apexcharts-theme-light" style="width: 351px; height: 100px;"><svg id="SvgjsSvg4139" width="351" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="100"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 50px;"></div></foreignObject><g id="SvgjsG4183" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4141" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4140"><clipPath id="gridRectMaski9k087gd"><rect id="SvgjsRect4143" width="358" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaski9k087gd"></clipPath><clipPath id="nonForecastMaski9k087gd"></clipPath><clipPath id="gridRectMarkerMaski9k087gd"><rect id="SvgjsRect4144" width="355" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4149" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4150" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.2"></stop><stop id="SvgjsStop4151" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop4152" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop4153" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1.2"></stop></linearGradient></defs><g id="SvgjsG4156" class="apexcharts-grid"><g id="SvgjsG4157" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4160" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4161" x1="0" y1="10" x2="351" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4162" x1="0" y1="20" x2="351" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4163" x1="0" y1="30" x2="351" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4164" x1="0" y1="40" x2="351" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4165" x1="0" y1="50" x2="351" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4166" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4167" x1="0" y1="70" x2="351" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4168" x1="0" y1="80" x2="351" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4169" x1="0" y1="90" x2="351" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4170" x1="0" y1="100" x2="351" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4158" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4172" x1="0" y1="100" x2="351" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4171" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4145" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG4146" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4154" d="M 0 100 L 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657C 351 16.666666666666657 351 16.666666666666657 351 100M 351 16.666666666666657z" fill="url(#SvgjsLinearGradient4149)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaski9k087gd)" pathTo="M 0 100 L 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657C 351 16.666666666666657 351 16.666666666666657 351 100M 351 16.666666666666657z" pathFrom="M -1 100 L -1 100 L 70.2 100 L 140.4 100 L 210.6 100 L 280.8 100 L 351 100"></path><path id="SvgjsPath4155" d="M 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaski9k087gd)" pathTo="M 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657" pathFrom="M -1 100 L -1 100 L 70.2 100 L 140.4 100 L 210.6 100 L 280.8 100 L 351 100" fill-rule="evenodd"></path><g id="SvgjsG4147" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle4187" r="0" cx="0" cy="0" class="apexcharts-marker wphs35yh3 no-pointer-events" stroke="#dbdfe9" fill="#252f4a" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG4148" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG4159" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4173" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4174" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4175" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4176" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4184" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4185" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4186" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Symbol-->
                                <span class="text-dark fw-bold fs-2x lh-0">$</span>
                                <!--end::Symbol-->
                                <!--begin::Number-->
                                <span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 13-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 13-->
                    <div class="card card-xl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Earnings</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;"><div id="apexcharts8fum1nre" class="apexcharts-canvas apexcharts8fum1nre apexcharts-theme-light" style="width: 351px; height: 100px;"><svg id="SvgjsSvg4189" width="351" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="100"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 50px;"></div></foreignObject><g id="SvgjsG4233" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4191" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4190"><clipPath id="gridRectMask8fum1nre"><rect id="SvgjsRect4193" width="358" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask8fum1nre"></clipPath><clipPath id="nonForecastMask8fum1nre"></clipPath><clipPath id="gridRectMarkerMask8fum1nre"><rect id="SvgjsRect4194" width="355" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4199" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4200" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.2"></stop><stop id="SvgjsStop4201" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop4202" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop4203" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1.2"></stop></linearGradient></defs><g id="SvgjsG4206" class="apexcharts-grid"><g id="SvgjsG4207" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4210" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4211" x1="0" y1="10" x2="351" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4212" x1="0" y1="20" x2="351" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4213" x1="0" y1="30" x2="351" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4214" x1="0" y1="40" x2="351" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4215" x1="0" y1="50" x2="351" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4216" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4217" x1="0" y1="70" x2="351" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4218" x1="0" y1="80" x2="351" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4219" x1="0" y1="90" x2="351" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4220" x1="0" y1="100" x2="351" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4208" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4222" x1="0" y1="100" x2="351" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4221" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4195" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG4196" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4204" d="M 0 100 L 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657C 351 16.666666666666657 351 16.666666666666657 351 100M 351 16.666666666666657z" fill="url(#SvgjsLinearGradient4199)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8fum1nre)" pathTo="M 0 100 L 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657C 351 16.666666666666657 351 16.666666666666657 351 100M 351 16.666666666666657z" pathFrom="M -1 100 L -1 100 L 70.2 100 L 140.4 100 L 210.6 100 L 280.8 100 L 351 100"></path><path id="SvgjsPath4205" d="M 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask8fum1nre)" pathTo="M 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657" pathFrom="M -1 100 L -1 100 L 70.2 100 L 140.4 100 L 210.6 100 L 280.8 100 L 351 100" fill-rule="evenodd"></path><g id="SvgjsG4197" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle4237" r="0" cx="0" cy="0" class="apexcharts-marker wigi112cl no-pointer-events" stroke="#dbdfe9" fill="#252f4a" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG4198" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG4209" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4223" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4224" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4225" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4226" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4234" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4235" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4236" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Symbol-->
                                <span class="text-dark fw-bold fs-2x lh-0">$</span>
                                <!--end::Symbol-->
                                <!--begin::Number-->
                                <span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 13-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 13-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Earnings</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;"><div id="apexchartsw4ulwdxoi" class="apexcharts-canvas apexchartsw4ulwdxoi apexcharts-theme-light" style="width: 351px; height: 100px;"><svg id="SvgjsSvg4239" width="351" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="100"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 50px;"></div></foreignObject><g id="SvgjsG4283" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4241" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs4240"><clipPath id="gridRectMaskw4ulwdxoi"><rect id="SvgjsRect4243" width="358" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskw4ulwdxoi"></clipPath><clipPath id="nonForecastMaskw4ulwdxoi"></clipPath><clipPath id="gridRectMarkerMaskw4ulwdxoi"><rect id="SvgjsRect4244" width="355" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient4249" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop4250" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.2"></stop><stop id="SvgjsStop4251" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop4252" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop4253" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1.2"></stop></linearGradient></defs><g id="SvgjsG4256" class="apexcharts-grid"><g id="SvgjsG4257" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4260" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4261" x1="0" y1="10" x2="351" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4262" x1="0" y1="20" x2="351" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4263" x1="0" y1="30" x2="351" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4264" x1="0" y1="40" x2="351" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4265" x1="0" y1="50" x2="351" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4266" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4267" x1="0" y1="70" x2="351" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4268" x1="0" y1="80" x2="351" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4269" x1="0" y1="90" x2="351" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4270" x1="0" y1="100" x2="351" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4258" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4272" x1="0" y1="100" x2="351" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4271" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4245" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG4246" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath4254" d="M 0 100 L 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657C 351 16.666666666666657 351 16.666666666666657 351 100M 351 16.666666666666657z" fill="url(#SvgjsLinearGradient4249)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw4ulwdxoi)" pathTo="M 0 100 L 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657C 351 16.666666666666657 351 16.666666666666657 351 100M 351 16.666666666666657z" pathFrom="M -1 100 L -1 100 L 70.2 100 L 140.4 100 L 210.6 100 L 280.8 100 L 351 100"></path><path id="SvgjsPath4255" d="M 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657" fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskw4ulwdxoi)" pathTo="M 0 75C 24.57 75 45.63 58.33333333333333 70.2 58.33333333333333C 94.77000000000001 58.33333333333333 115.83000000000001 75 140.4 75C 164.97 75 186.03 33.33333333333333 210.6 33.33333333333333C 235.17 33.33333333333333 256.23 66.66666666666666 280.8 66.66666666666666C 305.37 66.66666666666666 326.43 16.666666666666657 351 16.666666666666657" pathFrom="M -1 100 L -1 100 L 70.2 100 L 140.4 100 L 210.6 100 L 280.8 100 L 351 100" fill-rule="evenodd"></path><g id="SvgjsG4247" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle4287" r="0" cx="0" cy="0" class="apexcharts-marker wz6gbkg62 no-pointer-events" stroke="#dbdfe9" fill="#252f4a" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG4248" class="apexcharts-datalabels" data:realIndex="0"></g></g><g id="SvgjsG4259" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4273" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4274" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4275" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4276" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4284" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4285" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4286" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Symbol-->
                                <span class="text-dark fw-bold fs-2x lh-0">$</span>
                                <!--end::Symbol-->
                                <!--begin::Number-->
                                <span class="text-dark fw-bold fs-3x me-2 lh-0">560</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bold fs-6 lh-0">+ 28% this week</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 13-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Contributors</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-14-chart" style="height: 125px; min-height: 140px;"><div id="apexchartsknjv8uub" class="apexcharts-canvas apexchartsknjv8uub apexcharts-theme-light" style="width: 351px; height: 125px;"><svg id="SvgjsSvg4288" width="351" height="125" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="125"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 62.5px;"></div></foreignObject><g id="SvgjsG4359" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4290" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 19)"><defs id="SvgjsDefs4289"><clipPath id="gridRectMaskknjv8uub"><rect id="SvgjsRect4292" width="355" height="80" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskknjv8uub"></clipPath><clipPath id="nonForecastMaskknjv8uub"></clipPath><clipPath id="gridRectMarkerMaskknjv8uub"><rect id="SvgjsRect4293" width="355" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4329" class="apexcharts-grid"><g id="SvgjsG4330" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4333" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4334" x1="0" y1="20" x2="351" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4335" x1="0" y1="40" x2="351" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4336" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4337" x1="0" y1="80" x2="351" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4331" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4339" x1="0" y1="80" x2="351" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4338" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4294" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG4295" class="apexcharts-series" rel="1" seriesName="Inflation" data:realIndex="0"><path id="SvgjsPath4300" d="M 9.36 77.501 L 9.36 72.501 C 9.36 71.251 10.61 70.001 11.86 70.001 L 11.86 70.001 C 12.95 70.001 14.04 71.251 14.04 72.501 L 14.04 77.501 C 14.04 78.751 12.79 80.001 11.54 80.001 L 11.54 80.001 C 10.45 80.001 9.36 78.751 9.36 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 9.36 77.501 L 9.36 72.501 C 9.36 71.251 10.61 70.001 11.86 70.001 L 11.86 70.001 C 12.95 70.001 14.04 71.251 14.04 72.501 L 14.04 77.501 C 14.04 78.751 12.79 80.001 11.54 80.001 L 11.54 80.001 C 10.45 80.001 9.36 78.751 9.36 77.501 Z " pathFrom="M 9.36 80.001 L 9.36 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 9.36 80.001 Z" cy="70" cx="32.76" j="0" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4302" d="M 32.76 77.501 L 32.76 61.501 C 32.76 60.251 34.01 59.001 35.26 59.001 L 35.26 59.001 C 36.349999999999994 59.001 37.44 60.251 37.44 61.501 L 37.44 77.501 C 37.44 78.751 36.19 80.001 34.94 80.001 L 34.94 80.001 C 33.849999999999994 80.001 32.76 78.751 32.76 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 32.76 77.501 L 32.76 61.501 C 32.76 60.251 34.01 59.001 35.26 59.001 L 35.26 59.001 C 36.349999999999994 59.001 37.44 60.251 37.44 61.501 L 37.44 77.501 C 37.44 78.751 36.19 80.001 34.94 80.001 L 34.94 80.001 C 33.849999999999994 80.001 32.76 78.751 32.76 77.501 Z " pathFrom="M 32.76 80.001 L 32.76 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 32.76 80.001 Z" cy="59" cx="56.16" j="1" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4304" d="M 56.16 77.501 L 56.16 72.501 C 56.16 71.251 57.41 70.001 58.66 70.001 L 58.66 70.001 C 59.75 70.001 60.839999999999996 71.251 60.839999999999996 72.501 L 60.839999999999996 77.501 C 60.839999999999996 78.751 59.589999999999996 80.001 58.339999999999996 80.001 L 58.339999999999996 80.001 C 57.25 80.001 56.16 78.751 56.16 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 56.16 77.501 L 56.16 72.501 C 56.16 71.251 57.41 70.001 58.66 70.001 L 58.66 70.001 C 59.75 70.001 60.839999999999996 71.251 60.839999999999996 72.501 L 60.839999999999996 77.501 C 60.839999999999996 78.751 59.589999999999996 80.001 58.339999999999996 80.001 L 58.339999999999996 80.001 C 57.25 80.001 56.16 78.751 56.16 77.501 Z " pathFrom="M 56.16 80.001 L 56.16 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 56.16 80.001 Z" cy="70" cx="79.56" j="2" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4306" d="M 79.56 77.501 L 79.56 61.501 C 79.56 60.251 80.81 59.001 82.06 59.001 L 82.06 59.001 C 83.15 59.001 84.24000000000001 60.251 84.24000000000001 61.501 L 84.24000000000001 77.501 C 84.24000000000001 78.751 82.99000000000001 80.001 81.74000000000001 80.001 L 81.74000000000001 80.001 C 80.65 80.001 79.56 78.751 79.56 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 79.56 77.501 L 79.56 61.501 C 79.56 60.251 80.81 59.001 82.06 59.001 L 82.06 59.001 C 83.15 59.001 84.24000000000001 60.251 84.24000000000001 61.501 L 84.24000000000001 77.501 C 84.24000000000001 78.751 82.99000000000001 80.001 81.74000000000001 80.001 L 81.74000000000001 80.001 C 80.65 80.001 79.56 78.751 79.56 77.501 Z " pathFrom="M 79.56 80.001 L 79.56 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 79.56 80.001 Z" cy="59" cx="102.96000000000001" j="3" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4308" d="M 102.96000000000001 77.501 L 102.96000000000001 41.501000000000005 C 102.96000000000001 40.251000000000005 104.21000000000001 39.001000000000005 105.46000000000001 39.001000000000005 L 105.46000000000001 39.001000000000005 C 106.55000000000001 39.001000000000005 107.64000000000001 40.251000000000005 107.64000000000001 41.501000000000005 L 107.64000000000001 77.501 C 107.64000000000001 78.751 106.39000000000001 80.001 105.14000000000001 80.001 L 105.14000000000001 80.001 C 104.05000000000001 80.001 102.96000000000001 78.751 102.96000000000001 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 102.96000000000001 77.501 L 102.96000000000001 41.501000000000005 C 102.96000000000001 40.251000000000005 104.21000000000001 39.001000000000005 105.46000000000001 39.001000000000005 L 105.46000000000001 39.001000000000005 C 106.55000000000001 39.001000000000005 107.64000000000001 40.251000000000005 107.64000000000001 41.501000000000005 L 107.64000000000001 77.501 C 107.64000000000001 78.751 106.39000000000001 80.001 105.14000000000001 80.001 L 105.14000000000001 80.001 C 104.05000000000001 80.001 102.96000000000001 78.751 102.96000000000001 77.501 Z " pathFrom="M 102.96000000000001 80.001 L 102.96000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 102.96000000000001 80.001 Z" cy="39.00000000000001" cx="126.36000000000001" j="4" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4310" d="M 126.36000000000001 77.501 L 126.36000000000001 21.50100000000001 C 126.36000000000001 20.25100000000001 127.61000000000001 19.00100000000001 128.86 19.00100000000001 L 128.86 19.00100000000001 C 129.95000000000002 19.00100000000001 131.04000000000002 20.25100000000001 131.04000000000002 21.50100000000001 L 131.04000000000002 77.501 C 131.04000000000002 78.751 129.79000000000002 80.001 128.54000000000002 80.001 L 128.54000000000002 80.001 C 127.45000000000002 80.001 126.36000000000001 78.751 126.36000000000001 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 126.36000000000001 77.501 L 126.36000000000001 21.50100000000001 C 126.36000000000001 20.25100000000001 127.61000000000001 19.00100000000001 128.86 19.00100000000001 L 128.86 19.00100000000001 C 129.95000000000002 19.00100000000001 131.04000000000002 20.25100000000001 131.04000000000002 21.50100000000001 L 131.04000000000002 77.501 C 131.04000000000002 78.751 129.79000000000002 80.001 128.54000000000002 80.001 L 128.54000000000002 80.001 C 127.45000000000002 80.001 126.36000000000001 78.751 126.36000000000001 77.501 Z " pathFrom="M 126.36000000000001 80.001 L 126.36000000000001 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 126.36000000000001 80.001 Z" cy="19.000000000000007" cx="149.76000000000002" j="5" val="6.1" barHeight="60.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4312" d="M 149.76000000000002 77.501 L 149.76000000000002 41.501000000000005 C 149.76000000000002 40.251000000000005 151.01000000000002 39.001000000000005 152.26000000000002 39.001000000000005 L 152.26000000000002 39.001000000000005 C 153.35000000000002 39.001000000000005 154.44000000000003 40.251000000000005 154.44000000000003 41.501000000000005 L 154.44000000000003 77.501 C 154.44000000000003 78.751 153.19000000000003 80.001 151.94000000000003 80.001 L 151.94000000000003 80.001 C 150.85000000000002 80.001 149.76000000000002 78.751 149.76000000000002 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 149.76000000000002 77.501 L 149.76000000000002 41.501000000000005 C 149.76000000000002 40.251000000000005 151.01000000000002 39.001000000000005 152.26000000000002 39.001000000000005 L 152.26000000000002 39.001000000000005 C 153.35000000000002 39.001000000000005 154.44000000000003 40.251000000000005 154.44000000000003 41.501000000000005 L 154.44000000000003 77.501 C 154.44000000000003 78.751 153.19000000000003 80.001 151.94000000000003 80.001 L 151.94000000000003 80.001 C 150.85000000000002 80.001 149.76000000000002 78.751 149.76000000000002 77.501 Z " pathFrom="M 149.76000000000002 80.001 L 149.76000000000002 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 149.76000000000002 80.001 Z" cy="39.00000000000001" cx="173.16000000000003" j="6" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4314" d="M 173.16000000000003 77.501 L 173.16000000000003 41.501000000000005 C 173.16000000000003 40.251000000000005 174.41000000000003 39.001000000000005 175.66000000000003 39.001000000000005 L 175.66000000000003 39.001000000000005 C 176.75000000000003 39.001000000000005 177.84000000000003 40.251000000000005 177.84000000000003 41.501000000000005 L 177.84000000000003 77.501 C 177.84000000000003 78.751 176.59000000000003 80.001 175.34000000000003 80.001 L 175.34000000000003 80.001 C 174.25000000000003 80.001 173.16000000000003 78.751 173.16000000000003 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 173.16000000000003 77.501 L 173.16000000000003 41.501000000000005 C 173.16000000000003 40.251000000000005 174.41000000000003 39.001000000000005 175.66000000000003 39.001000000000005 L 175.66000000000003 39.001000000000005 C 176.75000000000003 39.001000000000005 177.84000000000003 40.251000000000005 177.84000000000003 41.501000000000005 L 177.84000000000003 77.501 C 177.84000000000003 78.751 176.59000000000003 80.001 175.34000000000003 80.001 L 175.34000000000003 80.001 C 174.25000000000003 80.001 173.16000000000003 78.751 173.16000000000003 77.501 Z " pathFrom="M 173.16000000000003 80.001 L 173.16000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 173.16000000000003 80.001 Z" cy="39.00000000000001" cx="196.56000000000003" j="7" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4316" d="M 196.56000000000003 77.501 L 196.56000000000003 61.501 C 196.56000000000003 60.251 197.81000000000003 59.001 199.06000000000003 59.001 L 199.06000000000003 59.001 C 200.15000000000003 59.001 201.24000000000004 60.251 201.24000000000004 61.501 L 201.24000000000004 77.501 C 201.24000000000004 78.751 199.99000000000004 80.001 198.74000000000004 80.001 L 198.74000000000004 80.001 C 197.65000000000003 80.001 196.56000000000003 78.751 196.56000000000003 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 196.56000000000003 77.501 L 196.56000000000003 61.501 C 196.56000000000003 60.251 197.81000000000003 59.001 199.06000000000003 59.001 L 199.06000000000003 59.001 C 200.15000000000003 59.001 201.24000000000004 60.251 201.24000000000004 61.501 L 201.24000000000004 77.501 C 201.24000000000004 78.751 199.99000000000004 80.001 198.74000000000004 80.001 L 198.74000000000004 80.001 C 197.65000000000003 80.001 196.56000000000003 78.751 196.56000000000003 77.501 Z " pathFrom="M 196.56000000000003 80.001 L 196.56000000000003 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 196.56000000000003 80.001 Z" cy="59" cx="219.96000000000004" j="8" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4318" d="M 219.96000000000004 77.501 L 219.96000000000004 41.501000000000005 C 219.96000000000004 40.251000000000005 221.21000000000004 39.001000000000005 222.46000000000004 39.001000000000005 L 222.46000000000004 39.001000000000005 C 223.55000000000004 39.001000000000005 224.64000000000004 40.251000000000005 224.64000000000004 41.501000000000005 L 224.64000000000004 77.501 C 224.64000000000004 78.751 223.39000000000004 80.001 222.14000000000004 80.001 L 222.14000000000004 80.001 C 221.05000000000004 80.001 219.96000000000004 78.751 219.96000000000004 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 219.96000000000004 77.501 L 219.96000000000004 41.501000000000005 C 219.96000000000004 40.251000000000005 221.21000000000004 39.001000000000005 222.46000000000004 39.001000000000005 L 222.46000000000004 39.001000000000005 C 223.55000000000004 39.001000000000005 224.64000000000004 40.251000000000005 224.64000000000004 41.501000000000005 L 224.64000000000004 77.501 C 224.64000000000004 78.751 223.39000000000004 80.001 222.14000000000004 80.001 L 222.14000000000004 80.001 C 221.05000000000004 80.001 219.96000000000004 78.751 219.96000000000004 77.501 Z " pathFrom="M 219.96000000000004 80.001 L 219.96000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 219.96000000000004 80.001 Z" cy="39.00000000000001" cx="243.36000000000004" j="9" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4320" d="M 243.36000000000004 77.501 L 243.36000000000004 61.501 C 243.36000000000004 60.251 244.61000000000004 59.001 245.86000000000004 59.001 L 245.86000000000004 59.001 C 246.95000000000005 59.001 248.04000000000005 60.251 248.04000000000005 61.501 L 248.04000000000005 77.501 C 248.04000000000005 78.751 246.79000000000005 80.001 245.54000000000005 80.001 L 245.54000000000005 80.001 C 244.45000000000005 80.001 243.36000000000004 78.751 243.36000000000004 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 243.36000000000004 77.501 L 243.36000000000004 61.501 C 243.36000000000004 60.251 244.61000000000004 59.001 245.86000000000004 59.001 L 245.86000000000004 59.001 C 246.95000000000005 59.001 248.04000000000005 60.251 248.04000000000005 61.501 L 248.04000000000005 77.501 C 248.04000000000005 78.751 246.79000000000005 80.001 245.54000000000005 80.001 L 245.54000000000005 80.001 C 244.45000000000005 80.001 243.36000000000004 78.751 243.36000000000004 77.501 Z " pathFrom="M 243.36000000000004 80.001 L 243.36000000000004 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 243.36000000000004 80.001 Z" cy="59" cx="266.76000000000005" j="10" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4322" d="M 266.76000000000005 77.501 L 266.76000000000005 51.501 C 266.76000000000005 50.251 268.01000000000005 49.001 269.26000000000005 49.001 L 269.26000000000005 49.001 C 270.35 49.001 271.44000000000005 50.251 271.44000000000005 51.501 L 271.44000000000005 77.501 C 271.44000000000005 78.751 270.19000000000005 80.001 268.94000000000005 80.001 L 268.94000000000005 80.001 C 267.85 80.001 266.76000000000005 78.751 266.76000000000005 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 266.76000000000005 77.501 L 266.76000000000005 51.501 C 266.76000000000005 50.251 268.01000000000005 49.001 269.26000000000005 49.001 L 269.26000000000005 49.001 C 270.35 49.001 271.44000000000005 50.251 271.44000000000005 51.501 L 271.44000000000005 77.501 C 271.44000000000005 78.751 270.19000000000005 80.001 268.94000000000005 80.001 L 268.94000000000005 80.001 C 267.85 80.001 266.76000000000005 78.751 266.76000000000005 77.501 Z " pathFrom="M 266.76000000000005 80.001 L 266.76000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 266.76000000000005 80.001 Z" cy="49" cx="290.16" j="11" val="3.1" barHeight="31" barWidth="4.68"></path><path id="SvgjsPath4324" d="M 290.16 77.501 L 290.16 72.501 C 290.16 71.251 291.41 70.001 292.66 70.001 L 292.66 70.001 C 293.75 70.001 294.84000000000003 71.251 294.84000000000003 72.501 L 294.84000000000003 77.501 C 294.84000000000003 78.751 293.59000000000003 80.001 292.34000000000003 80.001 L 292.34000000000003 80.001 C 291.25 80.001 290.16 78.751 290.16 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 290.16 77.501 L 290.16 72.501 C 290.16 71.251 291.41 70.001 292.66 70.001 L 292.66 70.001 C 293.75 70.001 294.84000000000003 71.251 294.84000000000003 72.501 L 294.84000000000003 77.501 C 294.84000000000003 78.751 293.59000000000003 80.001 292.34000000000003 80.001 L 292.34000000000003 80.001 C 291.25 80.001 290.16 78.751 290.16 77.501 Z " pathFrom="M 290.16 80.001 L 290.16 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 290.16 80.001 Z" cy="70" cx="313.56" j="12" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4326" d="M 313.56 77.501 L 313.56 72.501 C 313.56 71.251 314.81 70.001 316.06 70.001 L 316.06 70.001 C 317.15 70.001 318.24 71.251 318.24 72.501 L 318.24 77.501 C 318.24 78.751 316.99 80.001 315.74 80.001 L 315.74 80.001 C 314.65 80.001 313.56 78.751 313.56 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 313.56 77.501 L 313.56 72.501 C 313.56 71.251 314.81 70.001 316.06 70.001 L 316.06 70.001 C 317.15 70.001 318.24 71.251 318.24 72.501 L 318.24 77.501 C 318.24 78.751 316.99 80.001 315.74 80.001 L 315.74 80.001 C 314.65 80.001 313.56 78.751 313.56 77.501 Z " pathFrom="M 313.56 80.001 L 313.56 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 313.56 80.001 Z" cy="70" cx="336.96" j="13" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4328" d="M 336.96 77.501 L 336.96 61.501 C 336.96 60.251 338.21 59.001 339.46 59.001 L 339.46 59.001 C 340.54999999999995 59.001 341.64 60.251 341.64 61.501 L 341.64 77.501 C 341.64 78.751 340.39 80.001 339.14 80.001 L 339.14 80.001 C 338.04999999999995 80.001 336.96 78.751 336.96 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskknjv8uub)" pathTo="M 336.96 77.501 L 336.96 61.501 C 336.96 60.251 338.21 59.001 339.46 59.001 L 339.46 59.001 C 340.54999999999995 59.001 341.64 60.251 341.64 61.501 L 341.64 77.501 C 341.64 78.751 340.39 80.001 339.14 80.001 L 339.14 80.001 C 338.04999999999995 80.001 336.96 78.751 336.96 77.501 Z " pathFrom="M 336.96 80.001 L 336.96 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 336.96 80.001 Z" cy="59" cx="360.35999999999996" j="14" val="2.1" barHeight="21" barWidth="4.68"></path><g id="SvgjsG4297" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4299" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4301" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4303" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4305" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4307" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4309" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4311" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4313" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4315" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4317" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4319" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4321" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4323" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4325" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g><g id="SvgjsG4327" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskknjv8uub)"></g></g><g id="SvgjsG4298" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG4296" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG4332" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4340" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4341" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4342" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4343" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4360" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4361" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4362" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Number-->
                                <span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Contributors</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-14-chart" style="height: 125px; min-height: 140px;"><div id="apexchartsiov2opji" class="apexcharts-canvas apexchartsiov2opji apexcharts-theme-light" style="width: 351px; height: 125px;"><svg id="SvgjsSvg4363" width="351" height="125" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="125"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 62.5px;"></div></foreignObject><g id="SvgjsG4434" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4365" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 19)"><defs id="SvgjsDefs4364"><clipPath id="gridRectMaskiov2opji"><rect id="SvgjsRect4367" width="355" height="80" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskiov2opji"></clipPath><clipPath id="nonForecastMaskiov2opji"></clipPath><clipPath id="gridRectMarkerMaskiov2opji"><rect id="SvgjsRect4368" width="355" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4404" class="apexcharts-grid"><g id="SvgjsG4405" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4408" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4409" x1="0" y1="20" x2="351" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4410" x1="0" y1="40" x2="351" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4411" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4412" x1="0" y1="80" x2="351" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4406" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4414" x1="0" y1="80" x2="351" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4413" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4369" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG4370" class="apexcharts-series" rel="1" seriesName="Inflation" data:realIndex="0"><path id="SvgjsPath4375" d="M 9.36 77.501 L 9.36 72.501 C 9.36 71.251 10.61 70.001 11.86 70.001 L 11.86 70.001 C 12.95 70.001 14.04 71.251 14.04 72.501 L 14.04 77.501 C 14.04 78.751 12.79 80.001 11.54 80.001 L 11.54 80.001 C 10.45 80.001 9.36 78.751 9.36 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 9.36 77.501 L 9.36 72.501 C 9.36 71.251 10.61 70.001 11.86 70.001 L 11.86 70.001 C 12.95 70.001 14.04 71.251 14.04 72.501 L 14.04 77.501 C 14.04 78.751 12.79 80.001 11.54 80.001 L 11.54 80.001 C 10.45 80.001 9.36 78.751 9.36 77.501 Z " pathFrom="M 9.36 80.001 L 9.36 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 9.36 80.001 Z" cy="70" cx="32.76" j="0" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4377" d="M 32.76 77.501 L 32.76 61.501 C 32.76 60.251 34.01 59.001 35.26 59.001 L 35.26 59.001 C 36.349999999999994 59.001 37.44 60.251 37.44 61.501 L 37.44 77.501 C 37.44 78.751 36.19 80.001 34.94 80.001 L 34.94 80.001 C 33.849999999999994 80.001 32.76 78.751 32.76 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 32.76 77.501 L 32.76 61.501 C 32.76 60.251 34.01 59.001 35.26 59.001 L 35.26 59.001 C 36.349999999999994 59.001 37.44 60.251 37.44 61.501 L 37.44 77.501 C 37.44 78.751 36.19 80.001 34.94 80.001 L 34.94 80.001 C 33.849999999999994 80.001 32.76 78.751 32.76 77.501 Z " pathFrom="M 32.76 80.001 L 32.76 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 32.76 80.001 Z" cy="59" cx="56.16" j="1" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4379" d="M 56.16 77.501 L 56.16 72.501 C 56.16 71.251 57.41 70.001 58.66 70.001 L 58.66 70.001 C 59.75 70.001 60.839999999999996 71.251 60.839999999999996 72.501 L 60.839999999999996 77.501 C 60.839999999999996 78.751 59.589999999999996 80.001 58.339999999999996 80.001 L 58.339999999999996 80.001 C 57.25 80.001 56.16 78.751 56.16 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 56.16 77.501 L 56.16 72.501 C 56.16 71.251 57.41 70.001 58.66 70.001 L 58.66 70.001 C 59.75 70.001 60.839999999999996 71.251 60.839999999999996 72.501 L 60.839999999999996 77.501 C 60.839999999999996 78.751 59.589999999999996 80.001 58.339999999999996 80.001 L 58.339999999999996 80.001 C 57.25 80.001 56.16 78.751 56.16 77.501 Z " pathFrom="M 56.16 80.001 L 56.16 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 56.16 80.001 Z" cy="70" cx="79.56" j="2" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4381" d="M 79.56 77.501 L 79.56 61.501 C 79.56 60.251 80.81 59.001 82.06 59.001 L 82.06 59.001 C 83.15 59.001 84.24000000000001 60.251 84.24000000000001 61.501 L 84.24000000000001 77.501 C 84.24000000000001 78.751 82.99000000000001 80.001 81.74000000000001 80.001 L 81.74000000000001 80.001 C 80.65 80.001 79.56 78.751 79.56 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 79.56 77.501 L 79.56 61.501 C 79.56 60.251 80.81 59.001 82.06 59.001 L 82.06 59.001 C 83.15 59.001 84.24000000000001 60.251 84.24000000000001 61.501 L 84.24000000000001 77.501 C 84.24000000000001 78.751 82.99000000000001 80.001 81.74000000000001 80.001 L 81.74000000000001 80.001 C 80.65 80.001 79.56 78.751 79.56 77.501 Z " pathFrom="M 79.56 80.001 L 79.56 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 79.56 80.001 Z" cy="59" cx="102.96000000000001" j="3" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4383" d="M 102.96000000000001 77.501 L 102.96000000000001 41.501000000000005 C 102.96000000000001 40.251000000000005 104.21000000000001 39.001000000000005 105.46000000000001 39.001000000000005 L 105.46000000000001 39.001000000000005 C 106.55000000000001 39.001000000000005 107.64000000000001 40.251000000000005 107.64000000000001 41.501000000000005 L 107.64000000000001 77.501 C 107.64000000000001 78.751 106.39000000000001 80.001 105.14000000000001 80.001 L 105.14000000000001 80.001 C 104.05000000000001 80.001 102.96000000000001 78.751 102.96000000000001 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 102.96000000000001 77.501 L 102.96000000000001 41.501000000000005 C 102.96000000000001 40.251000000000005 104.21000000000001 39.001000000000005 105.46000000000001 39.001000000000005 L 105.46000000000001 39.001000000000005 C 106.55000000000001 39.001000000000005 107.64000000000001 40.251000000000005 107.64000000000001 41.501000000000005 L 107.64000000000001 77.501 C 107.64000000000001 78.751 106.39000000000001 80.001 105.14000000000001 80.001 L 105.14000000000001 80.001 C 104.05000000000001 80.001 102.96000000000001 78.751 102.96000000000001 77.501 Z " pathFrom="M 102.96000000000001 80.001 L 102.96000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 102.96000000000001 80.001 Z" cy="39.00000000000001" cx="126.36000000000001" j="4" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4385" d="M 126.36000000000001 77.501 L 126.36000000000001 21.50100000000001 C 126.36000000000001 20.25100000000001 127.61000000000001 19.00100000000001 128.86 19.00100000000001 L 128.86 19.00100000000001 C 129.95000000000002 19.00100000000001 131.04000000000002 20.25100000000001 131.04000000000002 21.50100000000001 L 131.04000000000002 77.501 C 131.04000000000002 78.751 129.79000000000002 80.001 128.54000000000002 80.001 L 128.54000000000002 80.001 C 127.45000000000002 80.001 126.36000000000001 78.751 126.36000000000001 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 126.36000000000001 77.501 L 126.36000000000001 21.50100000000001 C 126.36000000000001 20.25100000000001 127.61000000000001 19.00100000000001 128.86 19.00100000000001 L 128.86 19.00100000000001 C 129.95000000000002 19.00100000000001 131.04000000000002 20.25100000000001 131.04000000000002 21.50100000000001 L 131.04000000000002 77.501 C 131.04000000000002 78.751 129.79000000000002 80.001 128.54000000000002 80.001 L 128.54000000000002 80.001 C 127.45000000000002 80.001 126.36000000000001 78.751 126.36000000000001 77.501 Z " pathFrom="M 126.36000000000001 80.001 L 126.36000000000001 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 126.36000000000001 80.001 Z" cy="19.000000000000007" cx="149.76000000000002" j="5" val="6.1" barHeight="60.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4387" d="M 149.76000000000002 77.501 L 149.76000000000002 41.501000000000005 C 149.76000000000002 40.251000000000005 151.01000000000002 39.001000000000005 152.26000000000002 39.001000000000005 L 152.26000000000002 39.001000000000005 C 153.35000000000002 39.001000000000005 154.44000000000003 40.251000000000005 154.44000000000003 41.501000000000005 L 154.44000000000003 77.501 C 154.44000000000003 78.751 153.19000000000003 80.001 151.94000000000003 80.001 L 151.94000000000003 80.001 C 150.85000000000002 80.001 149.76000000000002 78.751 149.76000000000002 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 149.76000000000002 77.501 L 149.76000000000002 41.501000000000005 C 149.76000000000002 40.251000000000005 151.01000000000002 39.001000000000005 152.26000000000002 39.001000000000005 L 152.26000000000002 39.001000000000005 C 153.35000000000002 39.001000000000005 154.44000000000003 40.251000000000005 154.44000000000003 41.501000000000005 L 154.44000000000003 77.501 C 154.44000000000003 78.751 153.19000000000003 80.001 151.94000000000003 80.001 L 151.94000000000003 80.001 C 150.85000000000002 80.001 149.76000000000002 78.751 149.76000000000002 77.501 Z " pathFrom="M 149.76000000000002 80.001 L 149.76000000000002 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 149.76000000000002 80.001 Z" cy="39.00000000000001" cx="173.16000000000003" j="6" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4389" d="M 173.16000000000003 77.501 L 173.16000000000003 41.501000000000005 C 173.16000000000003 40.251000000000005 174.41000000000003 39.001000000000005 175.66000000000003 39.001000000000005 L 175.66000000000003 39.001000000000005 C 176.75000000000003 39.001000000000005 177.84000000000003 40.251000000000005 177.84000000000003 41.501000000000005 L 177.84000000000003 77.501 C 177.84000000000003 78.751 176.59000000000003 80.001 175.34000000000003 80.001 L 175.34000000000003 80.001 C 174.25000000000003 80.001 173.16000000000003 78.751 173.16000000000003 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 173.16000000000003 77.501 L 173.16000000000003 41.501000000000005 C 173.16000000000003 40.251000000000005 174.41000000000003 39.001000000000005 175.66000000000003 39.001000000000005 L 175.66000000000003 39.001000000000005 C 176.75000000000003 39.001000000000005 177.84000000000003 40.251000000000005 177.84000000000003 41.501000000000005 L 177.84000000000003 77.501 C 177.84000000000003 78.751 176.59000000000003 80.001 175.34000000000003 80.001 L 175.34000000000003 80.001 C 174.25000000000003 80.001 173.16000000000003 78.751 173.16000000000003 77.501 Z " pathFrom="M 173.16000000000003 80.001 L 173.16000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 173.16000000000003 80.001 Z" cy="39.00000000000001" cx="196.56000000000003" j="7" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4391" d="M 196.56000000000003 77.501 L 196.56000000000003 61.501 C 196.56000000000003 60.251 197.81000000000003 59.001 199.06000000000003 59.001 L 199.06000000000003 59.001 C 200.15000000000003 59.001 201.24000000000004 60.251 201.24000000000004 61.501 L 201.24000000000004 77.501 C 201.24000000000004 78.751 199.99000000000004 80.001 198.74000000000004 80.001 L 198.74000000000004 80.001 C 197.65000000000003 80.001 196.56000000000003 78.751 196.56000000000003 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 196.56000000000003 77.501 L 196.56000000000003 61.501 C 196.56000000000003 60.251 197.81000000000003 59.001 199.06000000000003 59.001 L 199.06000000000003 59.001 C 200.15000000000003 59.001 201.24000000000004 60.251 201.24000000000004 61.501 L 201.24000000000004 77.501 C 201.24000000000004 78.751 199.99000000000004 80.001 198.74000000000004 80.001 L 198.74000000000004 80.001 C 197.65000000000003 80.001 196.56000000000003 78.751 196.56000000000003 77.501 Z " pathFrom="M 196.56000000000003 80.001 L 196.56000000000003 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 196.56000000000003 80.001 Z" cy="59" cx="219.96000000000004" j="8" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4393" d="M 219.96000000000004 77.501 L 219.96000000000004 41.501000000000005 C 219.96000000000004 40.251000000000005 221.21000000000004 39.001000000000005 222.46000000000004 39.001000000000005 L 222.46000000000004 39.001000000000005 C 223.55000000000004 39.001000000000005 224.64000000000004 40.251000000000005 224.64000000000004 41.501000000000005 L 224.64000000000004 77.501 C 224.64000000000004 78.751 223.39000000000004 80.001 222.14000000000004 80.001 L 222.14000000000004 80.001 C 221.05000000000004 80.001 219.96000000000004 78.751 219.96000000000004 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 219.96000000000004 77.501 L 219.96000000000004 41.501000000000005 C 219.96000000000004 40.251000000000005 221.21000000000004 39.001000000000005 222.46000000000004 39.001000000000005 L 222.46000000000004 39.001000000000005 C 223.55000000000004 39.001000000000005 224.64000000000004 40.251000000000005 224.64000000000004 41.501000000000005 L 224.64000000000004 77.501 C 224.64000000000004 78.751 223.39000000000004 80.001 222.14000000000004 80.001 L 222.14000000000004 80.001 C 221.05000000000004 80.001 219.96000000000004 78.751 219.96000000000004 77.501 Z " pathFrom="M 219.96000000000004 80.001 L 219.96000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 219.96000000000004 80.001 Z" cy="39.00000000000001" cx="243.36000000000004" j="9" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4395" d="M 243.36000000000004 77.501 L 243.36000000000004 61.501 C 243.36000000000004 60.251 244.61000000000004 59.001 245.86000000000004 59.001 L 245.86000000000004 59.001 C 246.95000000000005 59.001 248.04000000000005 60.251 248.04000000000005 61.501 L 248.04000000000005 77.501 C 248.04000000000005 78.751 246.79000000000005 80.001 245.54000000000005 80.001 L 245.54000000000005 80.001 C 244.45000000000005 80.001 243.36000000000004 78.751 243.36000000000004 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 243.36000000000004 77.501 L 243.36000000000004 61.501 C 243.36000000000004 60.251 244.61000000000004 59.001 245.86000000000004 59.001 L 245.86000000000004 59.001 C 246.95000000000005 59.001 248.04000000000005 60.251 248.04000000000005 61.501 L 248.04000000000005 77.501 C 248.04000000000005 78.751 246.79000000000005 80.001 245.54000000000005 80.001 L 245.54000000000005 80.001 C 244.45000000000005 80.001 243.36000000000004 78.751 243.36000000000004 77.501 Z " pathFrom="M 243.36000000000004 80.001 L 243.36000000000004 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 243.36000000000004 80.001 Z" cy="59" cx="266.76000000000005" j="10" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4397" d="M 266.76000000000005 77.501 L 266.76000000000005 51.501 C 266.76000000000005 50.251 268.01000000000005 49.001 269.26000000000005 49.001 L 269.26000000000005 49.001 C 270.35 49.001 271.44000000000005 50.251 271.44000000000005 51.501 L 271.44000000000005 77.501 C 271.44000000000005 78.751 270.19000000000005 80.001 268.94000000000005 80.001 L 268.94000000000005 80.001 C 267.85 80.001 266.76000000000005 78.751 266.76000000000005 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 266.76000000000005 77.501 L 266.76000000000005 51.501 C 266.76000000000005 50.251 268.01000000000005 49.001 269.26000000000005 49.001 L 269.26000000000005 49.001 C 270.35 49.001 271.44000000000005 50.251 271.44000000000005 51.501 L 271.44000000000005 77.501 C 271.44000000000005 78.751 270.19000000000005 80.001 268.94000000000005 80.001 L 268.94000000000005 80.001 C 267.85 80.001 266.76000000000005 78.751 266.76000000000005 77.501 Z " pathFrom="M 266.76000000000005 80.001 L 266.76000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 266.76000000000005 80.001 Z" cy="49" cx="290.16" j="11" val="3.1" barHeight="31" barWidth="4.68"></path><path id="SvgjsPath4399" d="M 290.16 77.501 L 290.16 72.501 C 290.16 71.251 291.41 70.001 292.66 70.001 L 292.66 70.001 C 293.75 70.001 294.84000000000003 71.251 294.84000000000003 72.501 L 294.84000000000003 77.501 C 294.84000000000003 78.751 293.59000000000003 80.001 292.34000000000003 80.001 L 292.34000000000003 80.001 C 291.25 80.001 290.16 78.751 290.16 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 290.16 77.501 L 290.16 72.501 C 290.16 71.251 291.41 70.001 292.66 70.001 L 292.66 70.001 C 293.75 70.001 294.84000000000003 71.251 294.84000000000003 72.501 L 294.84000000000003 77.501 C 294.84000000000003 78.751 293.59000000000003 80.001 292.34000000000003 80.001 L 292.34000000000003 80.001 C 291.25 80.001 290.16 78.751 290.16 77.501 Z " pathFrom="M 290.16 80.001 L 290.16 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 290.16 80.001 Z" cy="70" cx="313.56" j="12" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4401" d="M 313.56 77.501 L 313.56 72.501 C 313.56 71.251 314.81 70.001 316.06 70.001 L 316.06 70.001 C 317.15 70.001 318.24 71.251 318.24 72.501 L 318.24 77.501 C 318.24 78.751 316.99 80.001 315.74 80.001 L 315.74 80.001 C 314.65 80.001 313.56 78.751 313.56 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 313.56 77.501 L 313.56 72.501 C 313.56 71.251 314.81 70.001 316.06 70.001 L 316.06 70.001 C 317.15 70.001 318.24 71.251 318.24 72.501 L 318.24 77.501 C 318.24 78.751 316.99 80.001 315.74 80.001 L 315.74 80.001 C 314.65 80.001 313.56 78.751 313.56 77.501 Z " pathFrom="M 313.56 80.001 L 313.56 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 313.56 80.001 Z" cy="70" cx="336.96" j="13" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4403" d="M 336.96 77.501 L 336.96 61.501 C 336.96 60.251 338.21 59.001 339.46 59.001 L 339.46 59.001 C 340.54999999999995 59.001 341.64 60.251 341.64 61.501 L 341.64 77.501 C 341.64 78.751 340.39 80.001 339.14 80.001 L 339.14 80.001 C 338.04999999999995 80.001 336.96 78.751 336.96 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskiov2opji)" pathTo="M 336.96 77.501 L 336.96 61.501 C 336.96 60.251 338.21 59.001 339.46 59.001 L 339.46 59.001 C 340.54999999999995 59.001 341.64 60.251 341.64 61.501 L 341.64 77.501 C 341.64 78.751 340.39 80.001 339.14 80.001 L 339.14 80.001 C 338.04999999999995 80.001 336.96 78.751 336.96 77.501 Z " pathFrom="M 336.96 80.001 L 336.96 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 336.96 80.001 Z" cy="59" cx="360.35999999999996" j="14" val="2.1" barHeight="21" barWidth="4.68"></path><g id="SvgjsG4372" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4374" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4376" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4378" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4380" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4382" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4384" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4386" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4388" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4390" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4392" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4394" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4396" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4398" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4400" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g><g id="SvgjsG4402" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskiov2opji)"></g></g><g id="SvgjsG4373" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG4371" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG4407" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4415" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4416" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4417" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4418" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4435" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4436" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4437" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Number-->
                                <span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Contributors</a>
                                <!--end::Title-->
                                <!--begin::Chart-->
                                <div class="mixed-widget-14-chart" style="height: 125px; min-height: 140px;"><div id="apexcharts5laifdw" class="apexcharts-canvas apexcharts5laifdw apexcharts-theme-light" style="width: 351px; height: 125px;"><svg id="SvgjsSvg4438" width="351" height="125" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="351" height="125"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 62.5px;"></div></foreignObject><g id="SvgjsG4509" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG4440" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 19)"><defs id="SvgjsDefs4439"><clipPath id="gridRectMask5laifdw"><rect id="SvgjsRect4442" width="355" height="80" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask5laifdw"></clipPath><clipPath id="nonForecastMask5laifdw"></clipPath><clipPath id="gridRectMarkerMask5laifdw"><rect id="SvgjsRect4443" width="355" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG4479" class="apexcharts-grid"><g id="SvgjsG4480" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine4483" x1="0" y1="0" x2="351" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4484" x1="0" y1="20" x2="351" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4485" x1="0" y1="40" x2="351" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4486" x1="0" y1="60" x2="351" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine4487" x1="0" y1="80" x2="351" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG4481" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine4489" x1="0" y1="80" x2="351" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine4488" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG4444" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG4445" class="apexcharts-series" rel="1" seriesName="Inflation" data:realIndex="0"><path id="SvgjsPath4450" d="M 9.36 77.501 L 9.36 72.501 C 9.36 71.251 10.61 70.001 11.86 70.001 L 11.86 70.001 C 12.95 70.001 14.04 71.251 14.04 72.501 L 14.04 77.501 C 14.04 78.751 12.79 80.001 11.54 80.001 L 11.54 80.001 C 10.45 80.001 9.36 78.751 9.36 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 9.36 77.501 L 9.36 72.501 C 9.36 71.251 10.61 70.001 11.86 70.001 L 11.86 70.001 C 12.95 70.001 14.04 71.251 14.04 72.501 L 14.04 77.501 C 14.04 78.751 12.79 80.001 11.54 80.001 L 11.54 80.001 C 10.45 80.001 9.36 78.751 9.36 77.501 Z " pathFrom="M 9.36 80.001 L 9.36 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 14.04 80.001 L 9.36 80.001 Z" cy="70" cx="32.76" j="0" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4452" d="M 32.76 77.501 L 32.76 61.501 C 32.76 60.251 34.01 59.001 35.26 59.001 L 35.26 59.001 C 36.349999999999994 59.001 37.44 60.251 37.44 61.501 L 37.44 77.501 C 37.44 78.751 36.19 80.001 34.94 80.001 L 34.94 80.001 C 33.849999999999994 80.001 32.76 78.751 32.76 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 32.76 77.501 L 32.76 61.501 C 32.76 60.251 34.01 59.001 35.26 59.001 L 35.26 59.001 C 36.349999999999994 59.001 37.44 60.251 37.44 61.501 L 37.44 77.501 C 37.44 78.751 36.19 80.001 34.94 80.001 L 34.94 80.001 C 33.849999999999994 80.001 32.76 78.751 32.76 77.501 Z " pathFrom="M 32.76 80.001 L 32.76 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 37.44 80.001 L 32.76 80.001 Z" cy="59" cx="56.16" j="1" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4454" d="M 56.16 77.501 L 56.16 72.501 C 56.16 71.251 57.41 70.001 58.66 70.001 L 58.66 70.001 C 59.75 70.001 60.839999999999996 71.251 60.839999999999996 72.501 L 60.839999999999996 77.501 C 60.839999999999996 78.751 59.589999999999996 80.001 58.339999999999996 80.001 L 58.339999999999996 80.001 C 57.25 80.001 56.16 78.751 56.16 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 56.16 77.501 L 56.16 72.501 C 56.16 71.251 57.41 70.001 58.66 70.001 L 58.66 70.001 C 59.75 70.001 60.839999999999996 71.251 60.839999999999996 72.501 L 60.839999999999996 77.501 C 60.839999999999996 78.751 59.589999999999996 80.001 58.339999999999996 80.001 L 58.339999999999996 80.001 C 57.25 80.001 56.16 78.751 56.16 77.501 Z " pathFrom="M 56.16 80.001 L 56.16 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 60.839999999999996 80.001 L 56.16 80.001 Z" cy="70" cx="79.56" j="2" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4456" d="M 79.56 77.501 L 79.56 61.501 C 79.56 60.251 80.81 59.001 82.06 59.001 L 82.06 59.001 C 83.15 59.001 84.24000000000001 60.251 84.24000000000001 61.501 L 84.24000000000001 77.501 C 84.24000000000001 78.751 82.99000000000001 80.001 81.74000000000001 80.001 L 81.74000000000001 80.001 C 80.65 80.001 79.56 78.751 79.56 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 79.56 77.501 L 79.56 61.501 C 79.56 60.251 80.81 59.001 82.06 59.001 L 82.06 59.001 C 83.15 59.001 84.24000000000001 60.251 84.24000000000001 61.501 L 84.24000000000001 77.501 C 84.24000000000001 78.751 82.99000000000001 80.001 81.74000000000001 80.001 L 81.74000000000001 80.001 C 80.65 80.001 79.56 78.751 79.56 77.501 Z " pathFrom="M 79.56 80.001 L 79.56 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 84.24000000000001 80.001 L 79.56 80.001 Z" cy="59" cx="102.96000000000001" j="3" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4458" d="M 102.96000000000001 77.501 L 102.96000000000001 41.501000000000005 C 102.96000000000001 40.251000000000005 104.21000000000001 39.001000000000005 105.46000000000001 39.001000000000005 L 105.46000000000001 39.001000000000005 C 106.55000000000001 39.001000000000005 107.64000000000001 40.251000000000005 107.64000000000001 41.501000000000005 L 107.64000000000001 77.501 C 107.64000000000001 78.751 106.39000000000001 80.001 105.14000000000001 80.001 L 105.14000000000001 80.001 C 104.05000000000001 80.001 102.96000000000001 78.751 102.96000000000001 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 102.96000000000001 77.501 L 102.96000000000001 41.501000000000005 C 102.96000000000001 40.251000000000005 104.21000000000001 39.001000000000005 105.46000000000001 39.001000000000005 L 105.46000000000001 39.001000000000005 C 106.55000000000001 39.001000000000005 107.64000000000001 40.251000000000005 107.64000000000001 41.501000000000005 L 107.64000000000001 77.501 C 107.64000000000001 78.751 106.39000000000001 80.001 105.14000000000001 80.001 L 105.14000000000001 80.001 C 104.05000000000001 80.001 102.96000000000001 78.751 102.96000000000001 77.501 Z " pathFrom="M 102.96000000000001 80.001 L 102.96000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 107.64000000000001 80.001 L 102.96000000000001 80.001 Z" cy="39.00000000000001" cx="126.36000000000001" j="4" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4460" d="M 126.36000000000001 77.501 L 126.36000000000001 21.50100000000001 C 126.36000000000001 20.25100000000001 127.61000000000001 19.00100000000001 128.86 19.00100000000001 L 128.86 19.00100000000001 C 129.95000000000002 19.00100000000001 131.04000000000002 20.25100000000001 131.04000000000002 21.50100000000001 L 131.04000000000002 77.501 C 131.04000000000002 78.751 129.79000000000002 80.001 128.54000000000002 80.001 L 128.54000000000002 80.001 C 127.45000000000002 80.001 126.36000000000001 78.751 126.36000000000001 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 126.36000000000001 77.501 L 126.36000000000001 21.50100000000001 C 126.36000000000001 20.25100000000001 127.61000000000001 19.00100000000001 128.86 19.00100000000001 L 128.86 19.00100000000001 C 129.95000000000002 19.00100000000001 131.04000000000002 20.25100000000001 131.04000000000002 21.50100000000001 L 131.04000000000002 77.501 C 131.04000000000002 78.751 129.79000000000002 80.001 128.54000000000002 80.001 L 128.54000000000002 80.001 C 127.45000000000002 80.001 126.36000000000001 78.751 126.36000000000001 77.501 Z " pathFrom="M 126.36000000000001 80.001 L 126.36000000000001 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 131.04000000000002 80.001 L 126.36000000000001 80.001 Z" cy="19.000000000000007" cx="149.76000000000002" j="5" val="6.1" barHeight="60.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4462" d="M 149.76000000000002 77.501 L 149.76000000000002 41.501000000000005 C 149.76000000000002 40.251000000000005 151.01000000000002 39.001000000000005 152.26000000000002 39.001000000000005 L 152.26000000000002 39.001000000000005 C 153.35000000000002 39.001000000000005 154.44000000000003 40.251000000000005 154.44000000000003 41.501000000000005 L 154.44000000000003 77.501 C 154.44000000000003 78.751 153.19000000000003 80.001 151.94000000000003 80.001 L 151.94000000000003 80.001 C 150.85000000000002 80.001 149.76000000000002 78.751 149.76000000000002 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 149.76000000000002 77.501 L 149.76000000000002 41.501000000000005 C 149.76000000000002 40.251000000000005 151.01000000000002 39.001000000000005 152.26000000000002 39.001000000000005 L 152.26000000000002 39.001000000000005 C 153.35000000000002 39.001000000000005 154.44000000000003 40.251000000000005 154.44000000000003 41.501000000000005 L 154.44000000000003 77.501 C 154.44000000000003 78.751 153.19000000000003 80.001 151.94000000000003 80.001 L 151.94000000000003 80.001 C 150.85000000000002 80.001 149.76000000000002 78.751 149.76000000000002 77.501 Z " pathFrom="M 149.76000000000002 80.001 L 149.76000000000002 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 154.44000000000003 80.001 L 149.76000000000002 80.001 Z" cy="39.00000000000001" cx="173.16000000000003" j="6" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4464" d="M 173.16000000000003 77.501 L 173.16000000000003 41.501000000000005 C 173.16000000000003 40.251000000000005 174.41000000000003 39.001000000000005 175.66000000000003 39.001000000000005 L 175.66000000000003 39.001000000000005 C 176.75000000000003 39.001000000000005 177.84000000000003 40.251000000000005 177.84000000000003 41.501000000000005 L 177.84000000000003 77.501 C 177.84000000000003 78.751 176.59000000000003 80.001 175.34000000000003 80.001 L 175.34000000000003 80.001 C 174.25000000000003 80.001 173.16000000000003 78.751 173.16000000000003 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 173.16000000000003 77.501 L 173.16000000000003 41.501000000000005 C 173.16000000000003 40.251000000000005 174.41000000000003 39.001000000000005 175.66000000000003 39.001000000000005 L 175.66000000000003 39.001000000000005 C 176.75000000000003 39.001000000000005 177.84000000000003 40.251000000000005 177.84000000000003 41.501000000000005 L 177.84000000000003 77.501 C 177.84000000000003 78.751 176.59000000000003 80.001 175.34000000000003 80.001 L 175.34000000000003 80.001 C 174.25000000000003 80.001 173.16000000000003 78.751 173.16000000000003 77.501 Z " pathFrom="M 173.16000000000003 80.001 L 173.16000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 177.84000000000003 80.001 L 173.16000000000003 80.001 Z" cy="39.00000000000001" cx="196.56000000000003" j="7" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4466" d="M 196.56000000000003 77.501 L 196.56000000000003 61.501 C 196.56000000000003 60.251 197.81000000000003 59.001 199.06000000000003 59.001 L 199.06000000000003 59.001 C 200.15000000000003 59.001 201.24000000000004 60.251 201.24000000000004 61.501 L 201.24000000000004 77.501 C 201.24000000000004 78.751 199.99000000000004 80.001 198.74000000000004 80.001 L 198.74000000000004 80.001 C 197.65000000000003 80.001 196.56000000000003 78.751 196.56000000000003 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 196.56000000000003 77.501 L 196.56000000000003 61.501 C 196.56000000000003 60.251 197.81000000000003 59.001 199.06000000000003 59.001 L 199.06000000000003 59.001 C 200.15000000000003 59.001 201.24000000000004 60.251 201.24000000000004 61.501 L 201.24000000000004 77.501 C 201.24000000000004 78.751 199.99000000000004 80.001 198.74000000000004 80.001 L 198.74000000000004 80.001 C 197.65000000000003 80.001 196.56000000000003 78.751 196.56000000000003 77.501 Z " pathFrom="M 196.56000000000003 80.001 L 196.56000000000003 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 201.24000000000004 80.001 L 196.56000000000003 80.001 Z" cy="59" cx="219.96000000000004" j="8" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4468" d="M 219.96000000000004 77.501 L 219.96000000000004 41.501000000000005 C 219.96000000000004 40.251000000000005 221.21000000000004 39.001000000000005 222.46000000000004 39.001000000000005 L 222.46000000000004 39.001000000000005 C 223.55000000000004 39.001000000000005 224.64000000000004 40.251000000000005 224.64000000000004 41.501000000000005 L 224.64000000000004 77.501 C 224.64000000000004 78.751 223.39000000000004 80.001 222.14000000000004 80.001 L 222.14000000000004 80.001 C 221.05000000000004 80.001 219.96000000000004 78.751 219.96000000000004 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 219.96000000000004 77.501 L 219.96000000000004 41.501000000000005 C 219.96000000000004 40.251000000000005 221.21000000000004 39.001000000000005 222.46000000000004 39.001000000000005 L 222.46000000000004 39.001000000000005 C 223.55000000000004 39.001000000000005 224.64000000000004 40.251000000000005 224.64000000000004 41.501000000000005 L 224.64000000000004 77.501 C 224.64000000000004 78.751 223.39000000000004 80.001 222.14000000000004 80.001 L 222.14000000000004 80.001 C 221.05000000000004 80.001 219.96000000000004 78.751 219.96000000000004 77.501 Z " pathFrom="M 219.96000000000004 80.001 L 219.96000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 224.64000000000004 80.001 L 219.96000000000004 80.001 Z" cy="39.00000000000001" cx="243.36000000000004" j="9" val="4.1" barHeight="40.99999999999999" barWidth="4.68"></path><path id="SvgjsPath4470" d="M 243.36000000000004 77.501 L 243.36000000000004 61.501 C 243.36000000000004 60.251 244.61000000000004 59.001 245.86000000000004 59.001 L 245.86000000000004 59.001 C 246.95000000000005 59.001 248.04000000000005 60.251 248.04000000000005 61.501 L 248.04000000000005 77.501 C 248.04000000000005 78.751 246.79000000000005 80.001 245.54000000000005 80.001 L 245.54000000000005 80.001 C 244.45000000000005 80.001 243.36000000000004 78.751 243.36000000000004 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 243.36000000000004 77.501 L 243.36000000000004 61.501 C 243.36000000000004 60.251 244.61000000000004 59.001 245.86000000000004 59.001 L 245.86000000000004 59.001 C 246.95000000000005 59.001 248.04000000000005 60.251 248.04000000000005 61.501 L 248.04000000000005 77.501 C 248.04000000000005 78.751 246.79000000000005 80.001 245.54000000000005 80.001 L 245.54000000000005 80.001 C 244.45000000000005 80.001 243.36000000000004 78.751 243.36000000000004 77.501 Z " pathFrom="M 243.36000000000004 80.001 L 243.36000000000004 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 248.04000000000005 80.001 L 243.36000000000004 80.001 Z" cy="59" cx="266.76000000000005" j="10" val="2.1" barHeight="21" barWidth="4.68"></path><path id="SvgjsPath4472" d="M 266.76000000000005 77.501 L 266.76000000000005 51.501 C 266.76000000000005 50.251 268.01000000000005 49.001 269.26000000000005 49.001 L 269.26000000000005 49.001 C 270.35 49.001 271.44000000000005 50.251 271.44000000000005 51.501 L 271.44000000000005 77.501 C 271.44000000000005 78.751 270.19000000000005 80.001 268.94000000000005 80.001 L 268.94000000000005 80.001 C 267.85 80.001 266.76000000000005 78.751 266.76000000000005 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 266.76000000000005 77.501 L 266.76000000000005 51.501 C 266.76000000000005 50.251 268.01000000000005 49.001 269.26000000000005 49.001 L 269.26000000000005 49.001 C 270.35 49.001 271.44000000000005 50.251 271.44000000000005 51.501 L 271.44000000000005 77.501 C 271.44000000000005 78.751 270.19000000000005 80.001 268.94000000000005 80.001 L 268.94000000000005 80.001 C 267.85 80.001 266.76000000000005 78.751 266.76000000000005 77.501 Z " pathFrom="M 266.76000000000005 80.001 L 266.76000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 271.44000000000005 80.001 L 266.76000000000005 80.001 Z" cy="49" cx="290.16" j="11" val="3.1" barHeight="31" barWidth="4.68"></path><path id="SvgjsPath4474" d="M 290.16 77.501 L 290.16 72.501 C 290.16 71.251 291.41 70.001 292.66 70.001 L 292.66 70.001 C 293.75 70.001 294.84000000000003 71.251 294.84000000000003 72.501 L 294.84000000000003 77.501 C 294.84000000000003 78.751 293.59000000000003 80.001 292.34000000000003 80.001 L 292.34000000000003 80.001 C 291.25 80.001 290.16 78.751 290.16 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 290.16 77.501 L 290.16 72.501 C 290.16 71.251 291.41 70.001 292.66 70.001 L 292.66 70.001 C 293.75 70.001 294.84000000000003 71.251 294.84000000000003 72.501 L 294.84000000000003 77.501 C 294.84000000000003 78.751 293.59000000000003 80.001 292.34000000000003 80.001 L 292.34000000000003 80.001 C 291.25 80.001 290.16 78.751 290.16 77.501 Z " pathFrom="M 290.16 80.001 L 290.16 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 294.84000000000003 80.001 L 290.16 80.001 Z" cy="70" cx="313.56" j="12" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4476" d="M 313.56 77.501 L 313.56 72.501 C 313.56 71.251 314.81 70.001 316.06 70.001 L 316.06 70.001 C 317.15 70.001 318.24 71.251 318.24 72.501 L 318.24 77.501 C 318.24 78.751 316.99 80.001 315.74 80.001 L 315.74 80.001 C 314.65 80.001 313.56 78.751 313.56 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 313.56 77.501 L 313.56 72.501 C 313.56 71.251 314.81 70.001 316.06 70.001 L 316.06 70.001 C 317.15 70.001 318.24 71.251 318.24 72.501 L 318.24 77.501 C 318.24 78.751 316.99 80.001 315.74 80.001 L 315.74 80.001 C 314.65 80.001 313.56 78.751 313.56 77.501 Z " pathFrom="M 313.56 80.001 L 313.56 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 318.24 80.001 L 313.56 80.001 Z" cy="70" cx="336.96" j="13" val="1" barHeight="10" barWidth="4.68"></path><path id="SvgjsPath4478" d="M 336.96 77.501 L 336.96 61.501 C 336.96 60.251 338.21 59.001 339.46 59.001 L 339.46 59.001 C 340.54999999999995 59.001 341.64 60.251 341.64 61.501 L 341.64 77.501 C 341.64 78.751 340.39 80.001 339.14 80.001 L 339.14 80.001 C 338.04999999999995 80.001 336.96 78.751 336.96 77.501 Z " fill="rgba(255,255,255,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask5laifdw)" pathTo="M 336.96 77.501 L 336.96 61.501 C 336.96 60.251 338.21 59.001 339.46 59.001 L 339.46 59.001 C 340.54999999999995 59.001 341.64 60.251 341.64 61.501 L 341.64 77.501 C 341.64 78.751 340.39 80.001 339.14 80.001 L 339.14 80.001 C 338.04999999999995 80.001 336.96 78.751 336.96 77.501 Z " pathFrom="M 336.96 80.001 L 336.96 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 341.64 80.001 L 336.96 80.001 Z" cy="59" cx="360.35999999999996" j="14" val="2.1" barHeight="21" barWidth="4.68"></path><g id="SvgjsG4447" class="apexcharts-bar-goals-markers" style="pointer-events: none"><g id="SvgjsG4449" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4451" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4453" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4455" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4457" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4459" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4461" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4463" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4465" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4467" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4469" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4471" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4473" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4475" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g><g id="SvgjsG4477" className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMask5laifdw)"></g></g><g id="SvgjsG4448" class="apexcharts-bar-shadows apexcharts-hidden-element-shown" style="pointer-events: none"></g></g><g id="SvgjsG4446" class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><g id="SvgjsG4482" class="apexcharts-grid-borders" style="display: none;"></g><line id="SvgjsLine4490" x1="0" y1="0" x2="351" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4491" x1="0" y1="0" x2="351" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4492" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4493" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG4510" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4511" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4512" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Stats-->
                            <div class="pt-5">
                                <!--begin::Number-->
                                <span class="text-dark fw-bold fs-3x me-2 lh-0">47</span>
                                <!--end::Number-->
                                <!--begin::Text-->
                                <span class="text-dark fw-bold fs-6 lh-0">- 12% this week</span>
                                <!--end::Text-->
                            </div>
                            <!--end::Stats-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column mb-7">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-42 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$50K</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-45 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$4,5K</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Revenue</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-21 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">40</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Tasks</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-44 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$5.8M</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBF0F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column mb-7">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-42 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$50K</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-45 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$4,5K</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Revenue</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-21 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">40</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Tasks</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-44 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$5.8M</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-xxl-stretch mb-xl-8 theme-dark-bg-body" style="background-color: #CBD4F4">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column mb-7">
                                <!--begin::Title-->
                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3">Summary</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-42 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$50K</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center mb-9 ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-45 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$4,5K</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Revenue</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-21 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">40</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Tasks</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <div class="d-flex align-items-center ms-2">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-3">
                                            <div class="symbol-label bg-light">
                                                <i class="ki-duotone ki-abstract-44 fs-1 text-dark">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div>
                                            <div class="fs-5 text-dark fw-bold lh-1">$5.8M</div>
                                            <div class="fs-7 text-gray-600 fw-bold">Sales</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>
</div>
