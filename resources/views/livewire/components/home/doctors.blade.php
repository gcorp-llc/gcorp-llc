<div>
    <div class="h-xl-100 mx-10">
        <div class="card">
            <div class="card-body rounded-3">
                <form wire:submit="search">
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="align-self-center flex-fill mx-5">
                            <label for="exampleFormControlInput1" class="form-label">جستجو پزشک</label>
                            <input wire:model="query" type="text"
                                   class="form-control flex-fill me-2 form-control-solid"/>

                        </div>
                        <div class="align-self-center flex-fill mx-5">
                            <label for="exampleFormControlInput1" class="form-label">انتخاب شهر</label>

                            <select wire:model="state" class="form-select form-select-solid flex-fill"
                                    aria-label="Select example">
                                <option value="">همه</option>
                                @foreach($states as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="align-self-center flex-fill mx-5">
                            <label for="exampleFormControlInput1" class="form-label">انتخاب تخصوص</label>

                            <select wire:model="experience" class="form-select form-select-solid flex-fill"
                                    aria-label="Select example">
                                <option value="">همه</option>
                                @foreach($expertises as $item)
                                    <option value="{{$item}}">{{$item}}</option>
                                @endforeach

                            </select>

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


        <div class="card-body py-10">
            <div class="row" id="paginated-posts">
                @forelse($doctors as $item)
                    <div class="col-md-4">
                        <a href="{{route('dr.show',str_replace(' ','_',$item->name))}}">
                            <div class="d-flex">
                                <div class="symbol symbol-70px symbol-circle me-5 mt-5">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($item->avatar)}}"
                                         alt="{{$item->name}}">
                                </div>
                                <div class="m-5">
                                    <h3 class="my-5">{{$item->name}}</h3>
                                    <span class="m-5 px-5 text-gray-800">{{$item->data->state}}</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center my-5 ">
                                <!--begin::Symbol-->

                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Subtitle-->
                                    <h5 class="fs-3 mb-5">{{$item->data->experience}}</h5>
                                    <h4 class="fw-bold text-gray-800 mb-3"> {{$item->data->code}}</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Items-->
                                    <div class="d-flex d-grid gap-5">
                                        <h5>
                                            {{Str::limit($item->data->description,99)}}
                                        </h5>
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Info-->
                            </div>
                        </a>

                    </div>
                @empty
                    <div class="m-5">
                        <div class="alert alert-primary d-flex align-items-center  p-5">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span
                                    class="path1"></span><span class="path2"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column">
                                <!--begin::Title-->
                                <h4 class="mb-1 text-dark">موردی یافت نشد</h4>

                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </div>
                    <!--begin::Alert-->

                    <!--end::Alert-->
                @endforelse
            </div>

        </div>
        <div class="card-footer">
            <div class="my-5">
                {{$doctors->links('vendor.livewire.bootstrap',data: ['scrollTo' => '#paginated-posts'])}}
            </div>
        </div>
        <!--end::Card body-->
    </div>
</div>
