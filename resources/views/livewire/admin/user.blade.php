<div>
    <h2>افزودن کاربران</h2>
    <form wire:submit="addAdvertising">

        <div class="form-group">
            <label for="state">استان</label>
            <select wire:model.live="state" class="form-control  " id="state">
                <option selected>انتخاب استان</option>
                @foreach($states as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>

        @if(isset($cites))
            <div class="form-group">
                <label for="city">شهر</label>
                <select wire:model.blur="city" class="form-control  " id="city">
                    <option selected>انتخاب تخصص </option>
                    @foreach($cites as $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
        @endif

        <div class="form-group">
            <label for="platform">پلتفرم</label>
            <select wire:model.blur="platform" class="form-control  " id="platform">
                <option selected>انتخاب پلتفرم</option>
                @foreach($pleatformes as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="category">دسته بندی</label>
            <select wire:model.live="category" class="form-control  " id="category">
                <option selected>انتخاب دسته بندی</option>
                @foreach($categories as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>

        @if(isset($experiences))
            <div class="form-group">
                <label for="experience">تخصص</label>
                <select wire:model.blur="experience" class="form-control " id="experience">
                    <option selected>انتخاب تخصص</option>
                    @foreach($experiences as $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
        @endif


        <div class="form-group">
            <label for="name" >نام و نام خانوادگی</label>
            <input wire:model="name" type="text" class="form-control" id="name">
            @error('name')
            <small  class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="number" >شماره تماس</label>
            <input wire:model="number" type="text" class="form-control" id="number">
            @error('number')
            <small  class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

{{--        <div class="form-group">--}}
{{--            <label for="experience" >تخصص</label>--}}
{{--            <input wire:model="experience" type="text" class="form-control" id="experience">--}}
{{--            @error('experience')--}}
{{--            <small  class="form-text text-danger">{{ $message }}</small>--}}
{{--            @enderror--}}
{{--        </div>--}}

        <div class="form-group">
            <label for="website" wire:model="website">وبسایت</label>
            <input wire:model="website" type="text" class="form-control" id="website">
            @error('website')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="instagram" wire:model="instagram">اینستاگرام</label>
            <input wire:model="instagram" type="text" class="form-control" id="instagram">
            @error('website')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>


        <button type="submit" class="btn btn-success ">ذخیره</button>
        <div wire:loading>
            <svg>...</svg> <!-- SVG loading spinner -->
        </div>
    </form>
</div>
