<!-- resources/views/components/input.blade.php -->
@props([
    'label',
    'name',
    'id',
    'type' => 'text',
    'value' => '',
    'pre' => null,
    'post' => null,
    'required' => false,
    'placeholder' => '',
    'min' => null,
    'max' => null,
    'size' => null,
    'dataType' => null,
    'pattern' => null,
    'maxlength' => null
])

<div class="mb-3" @if($type == 'password') x-data="{ show: false }" @endif>
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    <div class="input-group @if($errors->first($name)) is-invalid @endif">
        @if($pre)
            <span class="input-group-text">{{ $pre }}</span>
        @endif
        <input
            @if($required) required @endif
            class="form-control @if($errors->first($name)) is-invalid @endif"
            name="{{ $name }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            type="{{ $type }}"
            value="{{ old($name, $value) }}"
            @if($min) min="{{ $min }}" @endif
            @if($max) max="{{ $max }}" @endif
            @if($size) size="{{ $size }}" @endif
            @if($dataType) data-type="{{ $dataType }}" @endif
            @if($pattern) pattern="{{ $pattern }}" @endif
            @if($maxlength) maxlength="{{ $maxlength }}" @endif
            @if($type == 'password') :type="show ? 'text' : 'password'" @endif
        >
        @if($post)
            <span class="input-group-text">{{ $post }}</span>
        @endif
        @if($type === 'password')
            <button @click="show = !show" class="btn btn-outline-secondary @if($errors->first($name)) btn-outline-danger @endif" type="button">
                <i :class="show ? 'fa fa-eye-slash' : 'fa fa-eye'" aria-hidden="true"></i>
            </button>
        @endif
    </div>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
