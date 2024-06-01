<div>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success" style="margin-top: 15px">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">پیام تبلیغاتی</label>
                    <select wire:model.live="ads_id" class="form-control" id="exampleFormControlSelect1">
                        <option selected>انتخاب پیام</option>
                        @foreach($ads_messages as $item)
                            <option value="{{$item->id}}">{{Str::limit($item->message,30)}}</option>
                        @endforeach
                    </select>
                </div>
                @if($ads_id)
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">استان</label>

                        <select wire:model.live="state" class="form-control" id="exampleFormControlSelect1">
                            <option selected>انتخاب استان</option>
                            @foreach($states as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif


                @if($state)
                    <div class="list-group">
                        <a href="#" style="border-radius: 15px!important;"
                           class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">هزینه ارسال هر نفر
                                    : {{ceil(Str::length(str_replace("%name%", auth()->user()->name, $ads->message))/70)*150   }}
                                    تومان </h5>
                                <small> مجموعه نفرات : {{$ads_count}} عدد </small>
                            </div>
                            <small>مجموعه هزینه :
                                {{number_format(ceil(Str::length(str_replace("%name%", auth()->user()->name, $ads->message))/70)*150 * $ads_count)}}
                                تومان
                            </small>
                            <hr>
                            <p class="mb-1">   {{str_replace("%name%", auth()->user()->name, $ads->message)}}</p>

                        </a>
                    </div>


                    <button wire:click="testMessage" class="btn btn-info btn-block" style="margin-top: 15px">
                        <span wire:loading.remove wire:target="testMessage">
                              ارسال پیام تست
                        </span>
                        <span wire:loading wire:target="testMessage">
                            در حال ارسال
                        </span>

                    </button>
                    <button wire:click="sendMessages" class="btn btn-dark btn-block" style="margin-top: 15px">

                        <span wire:loading.remove wire:target="sendMessages">
                             آغاز ارسال گروهی
                        </span>
                        <span wire:loading wire:target="sendMessages">
                            در حال ارسال
                        </span>
                    </button>

                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="alert alert-warning" style="margin-top: 15px">
                <p>جهت توقف ارسال پیام ها دکمه توقف را فشار دهید</p>
                <button wire:click="stopQueue" class="btn btn-danger" style="margin-top: 15px">
                    توقف
                </button>
            </div>
        </div>
    </div>
    <h2>ارسال پیامک های تبلیغاتی</h2>
    <form wire:submit="addAdvertising">


        <div class="form-group">
            <label for="message" wire:model="message">متن پیام</label>
            <textarea wire:model="message" type="text" class="form-control" id="message" rows="5"></textarea>
            @error('message')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>


        <button type="submit" class="btn btn-success ">ذخیره</button>

    </form>
</div>
