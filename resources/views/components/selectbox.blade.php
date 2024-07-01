<div class="mb-3">
    <label class="form-label" for="{{ $id }}">{!! $label !!}</label>
    <select class="form-select   @if($errors->first($name)) is-invalid @endif" name="{{ $name }}" id="{{ $id }}">
        <option selected disabled>{{ $disabledOpt }}</option>
        @foreach($options as $key => $option)
            <option value="{{ $key }}" {{ ($key === $value) ? 'selected' : ''  }}>{{ $option }}</option>
        @endforeach
    </select>
    
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>