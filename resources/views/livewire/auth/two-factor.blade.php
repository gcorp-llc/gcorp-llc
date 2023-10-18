<div>
    <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
        <!--begin::Card-->
        <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
            <!--begin::Wrapper-->
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                <!--begin::Form-->
                <form class="form w-100 mb-13" novalidate="novalidate" data-kt-redirect-url="../../demo11/dist/index.html" id="kt_sing_in_two_factor_form">
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-3">تایید شماره تماس</h1>
                        <!--end::Title-->
                        <!--begin::Sub-title-->
                        <div class="text-muted fw-semibold fs-5 mb-5">کد تایید شده را وارد نمایید</div>
                        <!--end::Sub-title-->
                        <!--begin::Mobile no-->
                        <div class="fw-bold text-dark fs-3">**** {{Str::limit($phone,5,' ')}} </div>
                        <!--end::Mobile no-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Section-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <div class="fw-bold text-start text-dark fs-6 mb-1 ms-1">کد امنیتی 6 رقمی خود را تایپ کنید</div>
                        <!--end::Label-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-wrap flex-stack" >
                            <input type="text" wire:model="code" maxlength="6"  class="form-control bg-transparent  fs-2qx text-center mx-1 my-2" >
                        </div>
                        <!--begin::Input group-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Submit-->
                    <div class="d-flex flex-center">
                        <button wire:click="signUp" type="button" id="kt_sing_in_two_factor_submit" class="btn btn-lg btn-primary fw-bold">
                            <span class="indicator-label">ثبت و ورود</span>
                            <span id="timer"></span>
                            <span wire:loading class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Submit-->
                </form>
                <!--end::Form-->

                <!--begin::Notice-->
                <div class="text-center fw-semibold fs-5" id="resend" style="display: none">
                    <span class="text-muted me-1">کد را دریافت نکردید؟</span>
                    <a href="{{route('two-factor',$phone)}}"  class="link-primary fs-5 me-1 " >دریافت مجدد کد</a>
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Wrapper-->
            <script>
                document.getElementById('timer').innerHTML =
                    002 + ":" + 00;
                startTimer();

                function startTimer() {
                    var presentTime = document.getElementById('timer').innerHTML;
                    var timeArray = presentTime.split(/[:]+/);
                    var m = timeArray[0];
                    var s = checkSecond((timeArray[1] - 1));
                    if(s==59){m=m-1}
                    if(m> -1){
                        document.getElementById('timer').innerHTML =
                            m + ":" + s;
                        console.log(m)
                        setTimeout(startTimer, 1000);
                    }
                    else{
                        document.getElementById('resend').style.display = "block";
                    }

                }

                function checkSecond(sec) {
                    if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
                    if (sec < 0) {sec = "59"};
                    return sec;
                }
            </script>
        </div>
        <!--end::Card-->
    </div></div>
