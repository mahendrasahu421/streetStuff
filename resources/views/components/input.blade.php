
    @props(['type', 'name', 'label', 'value' => null])

    <div class="form-group">
        <label for="{{ $name }}">{{ $label }}</label>
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}" class="form-control">
    </div>
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror


