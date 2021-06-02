<div class="form-group row">
    <label class="col-form-label col-lg-2">Tiêu đề</label>
    <div class="col-lg-10">
        <input name="title" type="text" class="form-control" value="{{ $isEdit ? $result->title : old('title')}}"  maxlength="255">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">Mô tả</label>
    <div class="col-lg-10">
        <textarea name="description" rows="3" cols="3" class="form-control" placeholder="">{{ $isEdit ? $result->description : old('description')}}</textarea>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-lg-2">Nội dung</label>
    <div class="col-lg-10">
        <textarea name="content" rows="3" cols="3" class="form-control summernote" placeholder="">{{ $isEdit ? $result->content : old('content')}}</textarea>
    </div>
</div>