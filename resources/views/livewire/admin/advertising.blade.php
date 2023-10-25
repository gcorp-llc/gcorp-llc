<div>
    <form wire:submit="addAdvertising">

        <div class="form-group">
            <label for="exampleFormControlSelect1">استان</label>
            <select wire:model.live="state" class="form-control" id="exampleFormControlSelect1">
                <option selected>انتخاب استان</option>
                @foreach($states as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>
        @if(isset($cites))
            <div class="form-group">
                <label for="exampleFormControlSelect1">شهر</label>
                <select wire:model.blur="city" class="form-control" id="exampleFormControlSelect1">
                    <option selected>انتخاب شهر</option>
                    @foreach($cites as $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
        @endif
        <div class="form-group">
            <label for="exampleFormControlSelect1">پلتفرم</label>
            <select wire:model.blur="platform" class="form-control" id="exampleFormControlSelect1">
                <option selected>انتخاب پلتفرم</option>
                @foreach($pleatformes as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">دسته بندی</label>
            <select wire:model.blur="category" class="form-control" id="exampleFormControlSelect1">
                <option selected>انتخاب دسته بندی</option>
                @foreach($categories as $item)
                    <option value="{{$item}}">{{$item}}</option>
                @endforeach
            </select>
        </div>


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

        <div class="form-group">
            <label for="experrience" >تخصص</label>
            <input wire:model="experrience" type="text" class="form-control" id="experrience">
            @error('experrience')
            <small  class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="website" wire:model="website">وبسایت</label>
            <input wire:model="website" type="text" class="form-control" id="website">
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
