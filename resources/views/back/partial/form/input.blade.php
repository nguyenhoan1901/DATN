<div class="form-group row">
    <label class="col-form-label col-lg-{{$col1}}">{{$label}}</label>
    <div class="col-lg-{{$col2}}">
        <input name="{{$name}}" type="text" class="form-control @error($name) border-danger @enderror" value="{{ $value }}"  maxlength="255">
        @error($name)
        <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
