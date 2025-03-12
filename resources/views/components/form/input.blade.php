@props(["type" => "text", "name", "label", "placeholder" => "", "error" => false])



<div class="mb-4">
    @isset($label)
        <label for="{{$name}}" class="form-label">{{$label}}</label>
    @endisset
    <input type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" class="form-control" {{$attributes->merge(["class"=>"form-control ".($error ? "is-invalid" : "")])}}>
    @isset($error)
    <div class="invalid-feedback">
        {{$error}}
    </div>
        @endisset
</div>
