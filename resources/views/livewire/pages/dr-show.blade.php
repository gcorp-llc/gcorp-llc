<div>

    <div class="app-content  flex-column-fluid app-container  container-xxl ">
        <div class="card my-5 mb-xl-10">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($doctor->avatar)}}"
                                 alt="{{$doctor->name}}">
                            <div
                                class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>

                    <!--end::Pic-->

                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#"
                                       class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$doctor->name}}</a>
                                    <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                                class="path1"></span><span class="path2"></span></i></a>
                                </div>
                                <!--end::Name-->

                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#"
                                       class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-profile-circle fs-4 me-1"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                        {{$doctor->data->code}}
                                    </a>

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->

                        </div>
                        <!--end::Title-->

                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-pointers m-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500"> {{$doctor->data->state}}</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <div
                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <i class="ki-duotone ki-teacher m-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fw-semibold fs-6 text-gray-500"> {{$doctor->data->experience}}</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->

                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->
            </div>

        </div>
        @if($doctor->data->websites)
            <div class="m-10 d-flex">
                <h5>
                    <a href="{{$doctor->data->websites}}" class="" target="_blank">  مشاهده وب سایت
                        {{$doctor->name}}</a>
                </h5>
            </div>
        @endif

        <div class="card mb-5 mb-xl-10">
            <!--begin::Body-->
            <div class="card-body py-10">
                <h2 class="mb-9">
                    درباره
                    {{$doctor->name}}
                </h2>

                <!--begin::Overview-->
                <div class="row m-10 ">
                    <p class="text-justify">
                        {!! str_replace('مشاهده بیشتر ...','',$doctor->data->description ) !!}

{{--                        {{str_replace('مشاهده بیشتر ...','',$doctor->data->description ) }}--}}
                    </p>

                </div>
                <!--end::Overview-->
                <h2 class="my-5">
                   نشانی :
                </h2>
                <p class="mx-10">{{$doctor->data->address}}</p>
                <!--begin::Stats-->
                <h2 class="my-5">
                    شماره های تماس
                </h2>
                <div class="d-flex justify-content-center align-items-start flex-wrap mb-2">
                    <!--begin::User-->

                    @foreach($doctor->data->numbers as $item)
                        <!--begin::Col-->
                        <div class="col-md-3 col-6">
                            <div class="rounded border-primary border border-dashed p-6 mx-2 d-flex justify-content-center">
                            <a href="tel:{{$item->call}}"
                               class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                <i class="ki-duotone ki-phone m-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                {{$item->call}}
                            </a>
                            </div>
                        </div>
                        <!--end::Col-->
                    @endforeach

                </div>
                <!--end::Stats-->

                @if($doctor->data->instagram)
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-instagram m-2 fs-5x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>      <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h4 class="text-gray-900 fw-bold">پیج اینستاگرام</h4>

                                <div class="fs-6 text-gray-700 pe-7">
                                    در اینستاگرام شما میتوانید جدید ترین پست ها مطالب را مشاهده نمایید
                                </div>
                            </div>
                            <!--end::Content-->

                            <!--begin::Action-->
                            <a href="{{$doctor->data->instagram}}" target="_blank"
                               class="btn btn-primary px-6 align-self-center text-nowrap">
                                مشاهده پیج اینستاگرام </a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                @endif

            </div>
            <!--end::Body-->
        </div>

    </div>
    <div class="py-10">
        <livewire:components.home.posts/>
    </div>
</div>
