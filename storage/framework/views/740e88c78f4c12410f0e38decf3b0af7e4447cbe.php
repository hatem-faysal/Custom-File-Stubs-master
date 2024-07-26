<div style="display: none">
<textarea class="form-control description" id="description[en]" value="" name="<?php echo e('description'); ?>"/></textarea>
<textarea class="form-control description" id="description[ar]" value="" name="<?php echo e('description'); ?>"/></textarea>
<textarea class="form-control sub_description" id="sub_description[en]" value="" name="<?php echo e('sub_description'); ?>"/></textarea>
<textarea class="form-control sub_description" id="sub_description[ar]" value="" name="<?php echo e('sub_description'); ?>"/></textarea>
</div>
<script>
CKEDITOR.replace('description[en]', {
    height: 300,
    filebrowserUploadUrl: "<?php echo e(Route('upload.image',['_token'=>csrf_token()])); ?>"
, });
</script>
<script>
CKEDITOR.replace('description[ar]', {
    height: 300,
    filebrowserUploadUrl: "<?php echo e(Route('upload.image',['_token'=>csrf_token()])); ?>"
, });
</script>



<script>
CKEDITOR.replace('sub_description[en]', {
    height: 300,
    filebrowserUploadUrl: "<?php echo e(Route('upload.image',['_token'=>csrf_token()])); ?>"
, });
</script>
<script>
CKEDITOR.replace('sub_description[ar]', {
    height: 300,
    filebrowserUploadUrl: "<?php echo e(Route('upload.image',['_token'=>csrf_token()])); ?>"
, });
</script><?php /**PATH /home/hatem/Desktop/CMS(hatem)/resources/views/admin/CKEDITOR.blade.php ENDPATH**/ ?>