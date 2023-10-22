<div>

    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bold my-1 fs-3">محصولات</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>


    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div>
                    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl mb-20">

                        <!--begin::Post-->
                        <div class="content flex-row-fluid" id="kt_content">

                            <!--begin::Row-->
                            <div class="row gy-0 gx-10">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::General Widget 1-->
                                    <div class="mb-10">
                                        <!--begin::Tabs-->
                                        <ul class="nav row mb-10">
                                            @foreach($services as $item)
                                                <li class="nav-item col-6 col-lg mb-5 mb-lg-0">
                                                    <a class="nav-link btn btn-flex btn-color-gray-400 btn-outline btn-active-primary d-flex flex-grow-1 flex-column flex-center  py-5 {{$loop->first?'active':''}}"
                                                       data-bs-toggle="tab" href="#service-{{$item->slug}}">
                                                        <div class="card shadow-sm">

                                                            <div class="card-body p-0">
                                                                <div class="card-p mb-10">
                                                                    <div class="text-center px-4">
                                                                        <img class="mw-100 mh-300px card-rounded-bottom"
                                                                             alt=" {{$item->title}}و"
                                                                             src="{{Storage::url($item->icon)}}"/>
                                                                    </div>
                                                                    <span class="fs-6 fw-bold">
                                                    {{$item->title}}
                                                    </span>


                                                                </div>
                                                            </div>

                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            @foreach($services as $item)
                                                <div class="tab-pane fade show active" id="service-{{$item->slug}}">
                                                    <!--begin::Tables Widget 2-->

                                                    <div class="row g-10">
                                                        @foreach($item->products as $item)
                                                            <div class="col-xl-6">
                                                                <div class="d-flex h-100 align-items-center">

                                                                    <div
                                                                        class="shadow-sm ribbon ribbon-top ribbon-vertical w-100 d-flex flex-column flex-center rounded-4 bg-light bg-opacity-75 py-15 px-10">

                                                                        <div class="mb-7 text-center">
                                                                            {!! $item->cover !!}

                                                                            <h2 class="text-dark mb-5 fw-bolder">{{$item->title}}</h2>


                                                                            <div class="text-center fs-2">
                                                                                {{$item->info}}
                                                                            </div>

                                                                        </div>


                                                                        {!! $item->description !!}

                                                                        <div wire:loading wire:target="addCart">
                                                                            افزودن به سبد خرید...
                                                                        </div>

                                                                        <a href="#" wire:click="addCart({{$item->id}})"
                                                                           class="btn btn-sm btn-primary">ثبت سفارش</a>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <!--end::Tables Widget 2-->
                                                </div>
                                            @endforeach


                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::General Widget 1-->
                                    <!--begin::Charts Widget 1-->

                                    <!--end::Charts Widget 1-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->

                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Post-->
                    </div>


                </div>


                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-row-auto w-xl-350px">
                    <!--begin::Pos order-->
                    <div class="card card-flush bg-body" id="kt_pos_form">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <h3 class="card-title fw-bold text-gray-800 fs-2qx">سبد خرید</h3>
                            <!--begin::Toolbar-->
                            @if($carts->count())

                                <div class="card-toolbar" wire:loading.remove wire:target="cartClear">
                                    <a href="#" wire:click="cartClear" class="btn btn-light-primary fs-4 fw-bold py-4">
                                        پاک کردن همه
                                    </a>
                                </div>
                                <div wire:loading class="spinner-border text-success" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>

                            @endif
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Table container-->
                            <div class="table-responsive mb-8">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4 my-0">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr>
                                        <th class="min-w-175px"></th>
                                        <th class="w-125px"></th>
                                        <th class="w-60px"></th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    @forelse ($carts as $item)
                                        <tr data-kt-pos-element="item" data-kt-pos-item-price="33">
                                            <td class="pe-0">
                                                <div class="d-flex align-items-center">

                                                   {!!  $item->product->cover !!}
                                                    <span class="mx-2 fw-bold text-gray-800 cursor-pointer text-hover-primary fs-6 me-1">   {{$item->product->title}}</span>
                                                    {{number_format($item->amount)}} تومان
                                                </div>
                                            </td>
                                            <td class="pe-0">
                                                <!--begin::Dialer-->
                                                <div class="position-relative d-flex align-items-center" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="10" data-kt-dialer-step="1" data-kt-dialer-decimals="0">
                                                    <!--begin::Decrease control-->
                                                    <button type="button" wire:click="orderMines({{$item->id}})" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="decrease">
                                                        <i class="ki-duotone ki-minus fs-3x"></i>
                                                    </button>
                                                    <!--end::Decrease control-->
                                                    <!--begin::Input control-->
                                                    <input type="text" class="form-control border-0 text-center px-0 fs-3 fw-bold text-gray-800 w-30px" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="readonly" value="{{$item->quantity}}">
                                                    <!--end::Input control-->
                                                    <!--begin::Increase control-->
                                                    <button type="button" wire:click="orderPlus({{$item->id}})" class="btn btn-icon btn-sm btn-light btn-icon-gray-400" data-kt-dialer-control="increase">
                                                        <i class="ki-duotone ki-plus fs-3x"></i>
                                                    </button>
                                                    <!--end::Increase control-->
                                                </div>
                                                <!--end::Dialer-->
                                            </td>

                                        </tr>


                                    @empty
                                        <tr  data-kt-pos-element="item" data-kt-pos-item-price="13.5">
                                            <p class="mt-3">
                                                محصولی وارد نشده
                                            </p>

                                        </tr>
                                    @endforelse

                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                            <!--begin::Summary-->

                            <!--end::Summary-->
                            <!--begin::Payment Method-->
                            <div class="mt-2">
                                <!--begin::Title-->
                                <h1 class="fw-bold text-gray-800 mb-5">
                                    هزینه کل :
                                    {{number_format($carts->sum('amount'))}}
                                    تومان
                                </h1>
                                <!--end::Title-->
                                <!--begin::Radio group-->
                                {{--                <div class="d-flex flex-equal gap-5 gap-xxl-9 px-0 mb-12" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]" data-kt-initialized="1">--}}
                                {{--                    <!--begin::Radio-->--}}
                                {{--                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">--}}
                                {{--                        <!--begin::Input-->--}}
                                {{--                        <input class="btn-check" type="radio" name="method" value="0">--}}
                                {{--                        <!--end::Input-->--}}
                                {{--                        <!--begin::Icon-->--}}
                                {{--                        <i class="ki-duotone ki-dollar fs-2hx mb-2 pe-0">--}}
                                {{--                            <span class="path1"></span>--}}
                                {{--                            <span class="path2"></span>--}}
                                {{--                            <span class="path3"></span>--}}
                                {{--                        </i>--}}
                                {{--                        <!--end::Icon-->--}}
                                {{--                        <!--begin::Title-->--}}
                                {{--                        <span class="fs-7 fw-bold d-block">Cash</span>--}}
                                {{--                        <!--end::Title-->--}}
                                {{--                    </label>--}}
                                {{--                    <!--end::Radio-->--}}
                                {{--                    <!--begin::Radio-->--}}
                                {{--                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4 active" data-kt-button="true">--}}
                                {{--                        <!--begin::Input-->--}}
                                {{--                        <input class="btn-check" type="radio" name="method" value="1">--}}
                                {{--                        <!--end::Input-->--}}
                                {{--                        <!--begin::Icon-->--}}
                                {{--                        <i class="ki-duotone ki-credit-cart fs-2hx mb-2 pe-0">--}}
                                {{--                            <span class="path1"></span>--}}
                                {{--                            <span class="path2"></span>--}}
                                {{--                        </i>--}}
                                {{--                        <!--end::Icon-->--}}
                                {{--                        <!--begin::Title-->--}}
                                {{--                        <span class="fs-7 fw-bold d-block">Card</span>--}}
                                {{--                        <!--end::Title-->--}}
                                {{--                    </label>--}}
                                {{--                    <!--end::Radio-->--}}
                                {{--                    <!--begin::Radio-->--}}
                                {{--                    <label class="btn bg-light btn-color-gray-600 btn-active-text-gray-800 border border-3 border-gray-100 border-active-primary btn-active-light-primary w-100 px-4" data-kt-button="true">--}}
                                {{--                        <!--begin::Input-->--}}
                                {{--                        <input class="btn-check" type="radio" name="method" value="2">--}}
                                {{--                        <!--end::Input-->--}}
                                {{--                        <!--begin::Icon-->--}}
                                {{--                        <i class="ki-duotone ki-paypal fs-2hx mb-2 pe-0">--}}
                                {{--                            <span class="path1"></span>--}}
                                {{--                            <span class="path2"></span>--}}
                                {{--                        </i>--}}
                                {{--                        <!--end::Icon-->--}}
                                {{--                        <!--begin::Title-->--}}
                                {{--                            <span class="fs-7 fw-bold d-block">کیف پول</span>--}}
                                {{--                        <!--end::Title-->--}}
                                {{--                    </label>--}}
                                {{--                    <!--end::Radio-->--}}
                                {{--                </div>--}}
                                <!--end::Radio group-->
                                <!--begin::Actions-->
                                <a href="#" wire:click="setPayment" class="btn btn-primary fs-1 w-100 py-4">پرداخت</a>
                                <!--end::Actions-->
                            </div>
                            <!--end::Payment Method-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Pos order-->
                </div>

                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Post-->
    </div>

    <livewire:components.home.posts/>
</div>
