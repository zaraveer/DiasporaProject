<?php echo form_dropdown("city",$cities,'','id="city" class="select22" style="width: 100%" data-placeholder="Choose One" required="required"'); ?>
<label class="error" for="city"></label>
<script>

  $('.select22').select2({
	  id: function(obj) {
		  return obj.slug; // use slug field for id
		}
  });

</script>