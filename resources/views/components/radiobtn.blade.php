<div class="mb-3">
    <h5 class="label required lead font-weight-normal">{{$label}}</h5>

    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" name="{{$name}}" type="radio" id="{{$id1}}" wire:model="{{$name}}" value="{{$val1}}"  {{($val1 === $value)? 'checked' : ''}} >
            <label class="form-check-label" for="{{$id1}}">{{$radio1}}</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" name="{{$name}}" type="radio" id="{{$id2}}" wire:model="{{$name}}" value="{{$val2}}"  {{($val2 === $value)? 'checked' : ''}} >
            <label class="form-check-label" for="{{$id2}}">{{$radio2}}</label>
        </div>
    </div>

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
