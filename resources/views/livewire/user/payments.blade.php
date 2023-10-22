<div>
    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">تراکنش ها</h1>
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
                    <li class="breadcrumb-item text-gray-500">تراکنش ها</li>
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
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->

                <!--end::Card header-->
                <!--begin::Tab content-->
                <div id="kt_billing_payment_tab_content" class="card-body tab-content">
                    <!--begin::Tab panel-->
                    <div id="kt_billing_creditcard" class="tab-pane fade active show" role="tabpanel"
                         aria-labelledby="kt_billing_creditcard_tab">
                        <!--begin::Title-->
                        <h3 class="mb-5">روشهای پرداخت</h3>
                        <p>
                            جهت پرداخت فاکتور های خود مبلغ مورد نظر را به یکی از شماره حساب های زیر واریز نمایید و شماره
                            تراکنش به همراه بانک و مبلغ را به شماره 09370290168 ارسال نمایید
                        </p>
                        <!--end::Title-->
                        <!--begin::Row-->
                        <div class="row gx-9 gy-6">
                            <!--begin::Col-->
                            <div class="col-xl-6" data-kt-billing-element="card">
                                <!--begin::Card-->
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column py-2">
                                        <!--begin::Owner-->
                                        <div class="d-flex align-items-center fs-4 fw-bold mb-5">بانک ملت</div>
                                        <!--end::Owner-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <img src="{{asset('assets/media/bank/melat.png')}}" width="45" height="45"
                                                 alt="" class="me-4">
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div>
                                                <div class="fs-4 fw-bold" dir="ltr">6104 - 3377 - 6617 - 2751</div>
                                                <div class="fs-6 fw-semibold text-gray-400">حسین افتخارراد</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Col-->
                            <div class="col-xl-6" data-kt-billing-element="card">
                                <!--begin::Card-->
                                <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column py-2">
                                        <!--begin::Owner-->
                                        <div class="d-flex align-items-center fs-4 fw-bold mb-5">بانک شهر</div>
                                        <!--end::Owner-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <img src="{{asset('assets/media/bank/shahr.png')}}" width="45" height="45"
                                                 alt="" class="me-4">
                                            <!--end::Icon-->
                                            <!--begin::Details-->
                                            <div>
                                                <div class="fs-4 fw-bold" dir="ltr">5047 - 0610 - 7397 - 7510</div>
                                                <div class="fs-6 fw-semibold text-gray-400">حسین افتخارراد</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Card-->
                            </div>
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel"
                         aria-labelledby="kt_billing_paypal_tab">
                        <!--begin::Title-->
                        <h3 class="mb-5">My Paypal</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-600 fs-6 fw-semibold mb-5">To use PayPal as your payment method, you will
                            need to make pre-payments each month before your bill is due.
                        </div>
                        <!--end::Description-->
                        <!--begin::Form-->
                        <form class="form">
                            <!--begin::Input group-->
                            <div class="mb-7 mw-350px">
                                <select name="timezone" data-control="select2" data-placeholder="Select an option"
                                        data-hide-search="true"
                                        class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700 select2-hidden-accessible"
                                        data-select2-id="select2-data-9-m816" tabindex="-1" aria-hidden="true"
                                        data-kt-initialized="1">
                                    <option data-select2-id="select2-data-11-z0ar">Select an option</option>
                                    <option value="25">US $25.00</option>
                                    <option value="50">US $50.00</option>
                                    <option value="100">US $100.00</option>
                                    <option value="125">US $125.00</option>
                                    <option value="150">US $150.00</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
                                               data-select2-id="select2-data-10-rn57" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-timezone-hh-container"
                                            aria-controls="select2-timezone-hh-container"><span
                                                class="select2-selection__rendered" id="select2-timezone-hh-container"
                                                role="textbox" aria-readonly="true" title="Select an option">Select an option</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <!--end::Input group-->
                            <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Tab panel-->
                </div>
                <!--end::Tab content-->
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Table Widget 5-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Card header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">تراکنش های مالی</span>

                            </h3>
                            <!--end::Title-->
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
                                                style="width: 150px;">Item
                                            </th>
                                            <th class="text-end pe-3 min-w-100px sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="Product ID" style="width: 100px;">Product ID
                                            </th>
                                            <th class="text-end pe-3 min-w-150px sorting" tabindex="0"
                                                aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                aria-label="Date Added: activate to sort column ascending"
                                                style="width: 150px;">Date Added
                                            </th>
                                            <th class="text-end pe-3 min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                aria-label="Price: activate to sort column ascending"
                                                style="width: 100px;">Price
                                            </th>
                                            <th class="text-end pe-3 min-w-100px sorting" tabindex="0"
                                                aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 106.391px;">Status
                                            </th>
                                            <th class="text-end pe-0 min-w-75px sorting" tabindex="0"
                                                aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1"
                                                aria-label="Qty: activate to sort column ascending"
                                                style="width: 75px;">Qty
                                            </th>
                                        </tr>
                                        <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">


                                        <tr class="odd">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">Macbook Air M1</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#XGY-356</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-04-20T00:00:00+03:30">02 Apr, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$1,230</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="58">
                                                <span class="text-dark fw-bold">58 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr class="even">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">Surface Laptop 4</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#YHD-047</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-04-20T00:00:00+03:30">01 Apr, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span
                                                    class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="0">
                                                <span class="text-dark fw-bold">0 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr class="odd">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">Logitech MX 250</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#SRR-678</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-03-20T00:00:00+03:30">24 Mar, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$64</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="290">
                                                <span class="text-dark fw-bold">290 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr class="even">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">AudioEngine HD3</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#PXF-578</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-03-20T00:00:00+03:30">24 Mar, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span
                                                    class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="46">
                                                <span class="text-dark fw-bold">46 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr class="odd">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">HP Hyper LTR</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#PXF-778</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-01-20T00:00:00+03:30">16 Jan, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$4500</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="78">
                                                <span class="text-dark fw-bold">78 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr class="even">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#XGY-356</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-12-20T00:00:00+03:30">22 Dec, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="8">
                                                <span class="text-dark fw-bold">8 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
                                        <tr class="odd">
                                            <!--begin::Item-->
                                            <td>
                                                <a href="../../demo11/dist/apps/ecommerce/catalog/edit-product.html"
                                                   class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
                                            </td>
                                            <!--end::Item-->
                                            <!--begin::Product ID-->
                                            <td class="text-end">#XVR-425</td>
                                            <!--end::Product ID-->
                                            <!--begin::Date added-->
                                            <td class="text-end" data-order="2023-12-20T00:00:00+03:30">27 Dec, 2023
                                            </td>
                                            <!--end::Date added-->
                                            <!--begin::Price-->
                                            <td class="text-end">$1,060</td>
                                            <!--end::Price-->
                                            <!--begin::Status-->
                                            <td class="text-end">
                                                <span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
                                            </td>
                                            <!--end::Status-->
                                            <!--begin::Qty-->
                                            <td class="text-end" data-order="124">
                                                <span class="text-dark fw-bold">124 PCS</span>
                                            </td>
                                            <!--end::Qty-->
                                        </tr>
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
            </div>


        </div>
        <!--end::Post-->
    </div>


</div>
