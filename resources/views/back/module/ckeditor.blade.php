<script src="lib/ckeditor/ckeditor.js?v=2"></script>
<script>

</script>
<script>
   $('.editors').each( function () {
       CKEDITOR.replace(this.id, {
           filebrowserBrowseUrl : 'lib/elFinder-2.1.40/elfinder.html'
       });
   });
   $('textarea[name^="content"], textarea[name^="detail"]').each( function () {
       CKEDITOR.replace(this.id, {
           filebrowserBrowseUrl : 'lib/elFinder-2.1.40/elfinder.html'
       });
   });
</script>
<script src="lib/elFinder-2.1.40/js/elfinder.min.js"></script>
