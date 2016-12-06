<?php echo form_dropdown("province",$provinces,'','id="province" class="select23 province" style="width: 100%" data-placeholder="Choose One" required="required"'); ?>
<label class="error" for="province"></label>
<script>

  $('.select23').select2({
	  id: function(obj) {
		  return obj.slug; // use slug field for id
		}
  });
  
  $(".province").on("select2:select", function (e) { logs(e); });
  
  function logs(evt) {
		if (!evt) {
			var args = "{}";
		} else {
			var args = JSON.stringify(evt.params, function (key, value) {
			  if (value && value.nodeName) return "[DOM node]";
			  if (value instanceof $.Event) return "[$.Event]";
			  return value;
			});
		}
		var obj = JSON.parse(args);
		//var ae = $("<li>" + obj['data']['id'] + "</li>");
		//$eventLog.append(ae);
		console.log(obj['data']['id']);
		
		var id = obj['data']['id'];
		
		$(".city").select2().val("").trigger("change");
	
		$.ajax({
			type: "GET",
			url : "<?php echo site_url(); ?>profile/select_city/"+id,
			success: function(msg){
				$('#ajcity').html(msg);
			}
		});
		
		
		
	}

</script>