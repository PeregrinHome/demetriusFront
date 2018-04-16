<div class="{{ $errors->has($name) ? ' has-danger' : '' }}">
    @isset($label)
    <label  for="input_{{ $type  ?? 'text'
     }}_{{ (str_slug($name)) }}">
        {!!  $label !!}
    </label><br>

        <label class="custom-file"
               for="input_{{ $type  ?? 'text'
     }}_{{ (str_slug($name)) }}">
    @endisset
    {{ Form::file(
    $name,
    [
    'required'=>(isset($required) ? 'required' : null),
    'id'=>'input_'.($type ?? 'text').'_'.str_slug($name),
    'class'=>'custom-file-input'
    .($errors->has($name) ? ' is-invalid ' : '')
    .($class ?? ''),
    'placeholder'=>($placeholder ?? null),
    'autocomplete'=>($autocomplete ?? 'on'),
    'data-value'=>($value ?? null),
    ]+($attributes ?? [])
    ) }}
        <span class="custom-file-control form-control-file"></span>
        </label>

    @if(isset($feedback) || $errors->has($name) === true)
        <div class="invalid-feedback">{{ $feedback ?? $errors->first($name) }}</div>
    @endif

    @isset($text)
        <small class="form-text text-muted"> {!! $text   !!}</small>
    @endisset
</div>
