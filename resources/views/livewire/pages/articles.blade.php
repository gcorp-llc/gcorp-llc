<div>

    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h2 class="d-flex text-dark fw-bold my-1 fs-3">مقالات</h2>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">
                        <a   href="{{route('home')}}" class="text-gray-600 text-hover-primary">صفحه اصلی</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-gray-600">مقالات</li>
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
            <div class="row g-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Lists Widget 19-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Heading-->
                        <div
                            class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                            style="background-image:url('assets/media/svg/shapes/top-green.png" data-bs-theme="light">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column text-white pt-15">
                                <span class="fw-bold fs-2x mb-3">مقالات</span>

                            </h3>
                            <!--end::Title-->

                        </div>
                        <!--end::Heading-->
                        <!--begin::Body-->
                        <div class="card-body mt-n20">
                            <!--begin::Stats-->
                            <div class="mt-n20 position-relative">
                                <!--begin::Row-->
                                <div class="row g-3 g-lg-6">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-flask fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$data->total()}}</span>
                                                <!--end::Number-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">تعداد مقالات</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-bank fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i>
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$authors}}</span>
                                                <!--end::Number-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">نویسندگان</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-award fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{$categories}}</span>
                                                <!--end::Number-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">گروه بندی </span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Items-->
                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px me-5 mb-8">
																<span class="symbol-label">
																	<i class="ki-duotone ki-timer fs-1 text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Stats-->
                                            <div class="m-0">
                                                <!--begin::Number-->
                                                <span
                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4</span>
                                                <!--end::Number-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-6">خدمات</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Lists Widget 19-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-xl-10">
                            <!--begin::Slider Widget 1-->
                            <div id="kt_sliders_widget_1_slider"
                                 class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 pointer-event"
                                 data-bs-ride="carousel" data-bs-interval="5000">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h4 class="card-title d-flex align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">جدید ترین ها</span>
                                    </h4>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Carousel Indicators-->
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1"
                                                class="ms-1 active" aria-current="true"></li>
                                            <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2"
                                                class="ms-1"></li>
                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-6">
                                    <!--begin::Carousel-->
                                    <div class="carousel-inner">
                                        @foreach($news as $item)
                                            <div class="carousel-item {{$loop->first?'active':''}}">

                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-70px symbol-circle me-5 mt-5">
																	<span class="symbol-label bg-light-info">
																		<i class="ki-duotone ki-rocket  fs-3x text-info">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3"> {{$item->title}}</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <p class="fs-3">{{$item->info}}</p>
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0 d-flex justify-content-end">
                                                    <a href="{{route('article-show',$item->slug)}}"
                                                       class="btn btn-sm btn-light me-2 mb-2"  >مشاهده
                                                        ادامه</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                        @endforeach
                                    </div>
                                    <!--end::Carousel-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Slider Widget 1-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-5 mb-xl-10">
                            <!--begin::Slider Widget 2-->
                            <div id="kt_sliders_widget_2_slider"
                                 class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100 pointer-event"
                                 data-bs-ride="carousel" data-bs-interval="5500">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h4 class="card-title d-flex align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">پر بازدید ترین ها</span>
                                    </h4>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Carousel Indicators-->
                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0"
                                                class="ms-1 active" aria-current="true"></li>
                                            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1"
                                                class="ms-1"></li>
                                            <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2"
                                                class="ms-1"></li>


                                        </ol>
                                        <!--end::Carousel Indicators-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-6">
                                    <!--begin::Carousel-->
                                    <div class="carousel-inner">
                                        @foreach($polar as $item)
                                            <div class="carousel-item {{$loop->first?'active':''}}">

                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mb-9">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-70px symbol-circle me-5 mt-5">
																	<span class="symbol-label bg-light-success">
																		<i class="ki-duotone ki-chart-line-up-2 fs-3x text-success">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Info-->
                                                    <div class="m-0">
                                                        <!--begin::Subtitle-->
                                                        <h4 class="fw-bold text-gray-800 mb-3"> {{$item->title}}</h4>
                                                        <!--end::Subtitle-->
                                                        <!--begin::Items-->
                                                        <div class="d-flex d-grid gap-5">
                                                            <p class="fs-3">{!! $item->info !!}</p>
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                                <!--begin::Action-->
                                                <div class="m-0 d-flex justify-content-end">
                                                    <a href="{{route('article-show',$item->slug)}}"
                                                       class="btn btn-sm btn-light me-2 mb-2"  >مشاهده
                                                        ادامه</a>
                                                </div>
                                                <!--end::Action-->
                                            </div>
                                        @endforeach
                                        <!--end::Item-->

                                    </div>
                                    <!--end::Carousel-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Slider Widget 2-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Engage widget 4-->
                    <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                        <!--begin::Body-->
                        <div class="card-body d-flex ps-xl-15">
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <div class="position-relative fs-3 z-index-2 fw-bold text-white mb-7">
                                    <p class="me-2">
                                        اگر به تکنولوژی علاقه دارید، مطالعه مقالات تکنولوژی می‌تواند یک فعالیت آموزنده و
                                        لذت‌بخش باشد. با مطالعه مقالات تکنولوژی، شما می‌توانید به‌روزترین اطلاعات را در
                                        مورد دنیای تکنولوژی کسب کنید و دیدگاه خود را در این زمینه گسترش دهید.
                                        <!--begin::Separator-->
                                    </p>
                                </div>
                                <!--end::Title-->
                                <!--begin::Action-->

                                <!--begin::Action-->
                            </div>
                            <!--begin::Wrapper-->
                            <!--begin::Illustration-->
                            <img src="assets/media/illustrations/sigma-1/17-dark.png"
                                 class="position-absolute me-3 bottom-0 end-0 h-200px" alt="">
                            <!--end::Illustration-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Engage widget 4-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-10">
                <div class="card">
                    <div class="card-body rounded-3">
                        <form wire:submit="search">
                            <div class="d-flex flex-wrap justify-content-center">
                                <div class="align-self-center flex-fill mx-5">
                                    <label for="exampleFormControlInput1" class="form-label">جستجو مقاله</label>
                                    <input wire:model="query" type="text"
                                           class="form-control flex-fill me-2 form-control-solid"/>

                                </div>

                                <div class="align-self-end">
                                    <button type="submit" wire:key.enter="search"
                                            class="btn btn-primary fw-bold flex-shrink-0 align-self-end mt-5">
                                        جستجو
                                    </button>

                                </div>
                            </div>
                            <!--end::Title-->
                        </form>
                    </div>
                </div>
                <!--begin::Col-->
                <div class="col-xl-12 mb-5 mb-xl-12">
                    <!--begin::Timeline Widget 1-->
                    <div class=" h-xl-100">

                        <div class="card-body pb-10">
                            <div class="row">
                                @foreach($data as $item)
                                    <div class="col-md-4 mb-10" >
                                        <div class="card h-md-100" >
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column flex-center">
                                                <!--begin::Heading-->
                                                <div class="mb-2">

                                                    <!--begin::Illustration-->
                                                    @if($item->cover)
                                                        <div class="pb-5 text-center">
                                                            <img src="{{Storage::url($item->cover)}}" class="rounded-4 img-fluid h-200" alt="{{$item->title}}">
                                                        </div>
                                                    @endif

                                                    <!--end::Illustration-->
                                                    <!--begin::Title-->
                                                    <h2 class="fw-semibold text-gray-800 text-center lh-lg">
                                                        {{$item->title}}
                                                    </h2>
                                                    <!--end::Title-->
                                                    <p>{{$item->info}}</p>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Links-->
                                                <div class="text-center mb-1">

                                                    <!--begin::Link-->
                                                    <a class="btn btn-sm btn-light" href="{{route('article-show',$item->slug)}}"  >مشاهده بیشتر</a>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Links-->
                                            </div>
                                            <!--end::Body-->
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="">
                                {{$data->links('vendor.livewire.bootstrap')}}
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Post-->
    </div>
</div>
