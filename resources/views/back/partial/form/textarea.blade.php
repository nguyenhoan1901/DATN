<div class="form-group row">
    <label class="col-form-label col-lg-{{$col1}}">{{ $label }}</label>
    <div class="col-lg-10">
        <textarea name="{{$name}}" rows="3" cols="3" class="form-control" placeholder="">{{ $value ?? old($name)}}</textarea>
    </div>
</div>
