<script>

function ftDeleteImage(img) {
    $('#img-'+img).css("display","none");
    var t = $('#delete_img').val();
    $('#delete_img').val(t+img+';');
}

// Preview upload image
function readURL(input) {
var preview = $(input).attr('data-preview');
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.'+preview).attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
$(".img_upload").change(function() {
  readURL(this);
});

// Preview multi image
function previewImages() {
  var $preview = $('#preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {

    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
      return alert(file.name +" is not an image");
    } // else...

    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);

  }
}
$('#photos').on("change", previewImages);


// Default initialization
$('.summernote').summernote();



function deleteConfirm(){
  return confirm('Bạn muốn xóa nội dung này?');
}


</script>


<script>
  function change_alias(alias) {
      var str = alias;
      str = str.toLowerCase();
      str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
      str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
      str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
      str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
      str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
      str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
      str = str.replace(/đ/g,"d");
      str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
      str = str.replace(/ + /g," ");
      str = str.trim();
      return str;
  }
  function convertToSlug(str)
  {
      str = change_alias(str);
      return str
          .toLowerCase()
          .replace(/[^\w ]+/g,'')
          .replace(/ +/g,'-')
          ;
  }
  $("input[name='title[vi]']").on('keyup keydown', function(){
      var text = $(this).val();
      var slug = convertToSlug(text);
      $("input[name='slug']").val(slug);
  });
</script>




@include('back.module.ckeditor')
@include('back.module.alert')



<script>
    $('.form-check-input-switch').bootstrapSwitch();
    $('.tags-input,  [name=tags]').tagsinput();
    $('select').select2();
</script>

