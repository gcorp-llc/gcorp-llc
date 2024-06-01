<div>
        <div class="app-content  flex-column-fluid app-container  container-xxl ">
            <div class="card my-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Details-->
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">


                        <!--end::Pic-->

                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <!--begin::Title-->
                            <div
                                class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <!--begin::User-->
                                <div class="d-flex flex-column">


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">آدرس</label>
                                        <input type="text" class="form-control" wire:model="address">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">وبسایت</label>
                                        <input type="text" class="form-control" wire:model="websites">
                                    </div>
                                    <!--begin::Info-->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">کد نظام پزشکی</label>
                                        <input type="text" class="form-control" wire:model="code">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">تخصص</label>
                                        <input type="text" class="form-control" wire:model="experience">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">اینستاگرام</label>
                                        <input type="text" class="form-control" wire:model="instagram">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">درباره پزشک</label>
                                        <textarea class="form-control richTextBox" id="basic-example"  wire:model="description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <a href="#" class="btn btn-info" wire:click="userUpdate">
                                            <span wire:loading>
                                                در حال پردازش
                                            </span>
                                            <span wire:loading.remove>
                                              بروز رسانی
                                            </span>
                                            </a>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->

                            </div>
                            <!--end::Title-->

                            <!--begin::Stats-->

                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Details-->
                </div>

            </div>



        </div>
    </div>
</div>
