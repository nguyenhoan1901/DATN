
<div class="form-group row">
    <div class="col-md-12">
        <div class="row">
            <div class="offset-md-3 col-9">
                @php
                    $file_exist = file_exists($src);
                @endphp
                <img style="max-width:100%;max-height:100px" class="img_upload_preview_{{\Illuminate\Support\Str::slug($name)}} mx-auto d-block" src="{{$file_exist ? $src : 'no-image.webp'}}">
            </div>
        </div>
        <div class="row">
            <label class="col-form-label col-lg-4  @error('title') text-danger @enderror">{{$title}}</label>
            <div class="col-lg-8">
                <input type="file" name="{{$name}}" class="img_upload form-control-uniform  @error('title') border-danger @enderror" data-preview="img_upload_preview_{{\Illuminate\Support\Str::slug($name)}}" data-fouc  accept="image/*">
                @error($name)
                <span class="form-text text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>
