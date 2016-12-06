</section>

<script src="<?= base_url('assets/dashboard'); ?>/lib/jquery/jquery.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/jquery-ui/jquery-ui.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/bootstrap/js/bootstrap.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/jquery-toggles/toggles.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/jquery.steps/jquery.steps.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/select2/select2.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/jquery-validate/jquery.validate.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/wysihtml5x/wysihtml5x.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/wysihtml5x/wysihtml5x-toolbar.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/bootstrap3-wysihtml5-bower/bootstrap3-wysihtml5.all.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<script src="<?= base_url('assets/dashboard'); ?>/lib/raphael/raphael.js"></script>

<script src="<?= base_url('assets/dashboard'); ?>/lib/flot/jquery.flot.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/flot/jquery.flot.resize.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/flot-spline/jquery.flot.spline.js"></script>

<script src="<?= base_url('assets/dashboard'); ?>/lib/jquery-knob/jquery.knob.js"></script>

<script src="<?= base_url('assets/dashboard'); ?>/lib/dropzone/dropzone.js"></script>
<script src="<?= base_url('assets/dashboard'); ?>/lib/summernote/summernote.js"></script>

<script src="<?= base_url('assets/dashboard'); ?>/js/quirk.js"></script>

<script>
	function postForm() {
		$('textarea[name="projectdetail"]').html($('#summernote').val());
	}
$(document).ready(function(){

  'use strict';
  
	<?php if($this->router->class == 'profile') { ?>
		// Basic Form
		$('#basicForm').validate({
			highlight: function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			},
			success: function(element) {
			  $(element).closest('.form-group').removeClass('has-error');
			}
		});
		
	<?php } ?>  
		
	<?php if($this->router->class == 'donate') { ?>
	  $('#dataTable1').DataTable();
	  $('#dataTable2').DataTable();
	  $('#dataTable3').DataTable();
	<?php } ?>  

	<?php if($this->router->class == 'userlist') { ?>
	  $('#dataTable1').DataTable();
	  $('#dataTable2').DataTable();
	  $('#dataTable3').DataTable();
	<?php } ?>
	<?php if($this->router->class == 'project') { ?>
	  $('#dataTable1').DataTable();
	  $('#dataTable2').DataTable();
	  $('#dataTable3').DataTable();
	<?php } ?>
  
  

  <?php if($this->router->class == 'project') { ?>
  var form = $('#wizard-basic2');
  form.steps({
    headerTag: 'h3',
    bodyTag: 'div',
    transitionEffect: 'slideLeft',
    onStepChanging: function (event, currentIndex, newIndex) {

      // Allways allow previous action even if the current form is not valid!
      if (currentIndex > newIndex) { return true; }

      // Needed in some cases if the user went back (clean up)
      if (currentIndex < newIndex) {
        // To remove error styles
        form.find('.body:eq(' + newIndex + ') label.error').remove();
        form.find('.body:eq(' + newIndex + ') .error').removeClass('error');
      }

      form.validate().settings.ignore = ':disabled,:hidden';
      return form.valid();
    },
    onFinishing: function (event, currentIndex) {
      form.validate().settings.ignore = ':disabled';
      return form.valid();
    },
    onFinished: function (event, currentIndex) {
		form.submit();
    }
  }).validate({
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      $(element).closest('.form-group').removeClass('has-error');
    }
  });
  
	$('#isAgeSelected').click(function() {
		$("#txtAge").toggle(this.checked);
	});
  <?php } ?>
  
  <?php if($this->router->class == 'profile' || $this->router->class == 'project') { ?>
  
  var selectedDate = "";
  
  $("#datepickerfrom").datepicker({
      changeMonth: true,
	  changeYear: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#datepickerto" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $("#datepickerto").datepicker({
      changeMonth: true,
	  changeYear: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#datepickerfrom" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
	
	var $eventLog = $("#logs");
	
	$(".country").on("select2:select", function (e) { logs(e); });
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
		
		if(id == "korsel"){ 
			id = 35; 
			$('#indo').hide();
			$(".province").select2().val("").trigger("change");
			
			$.ajax({
				type: "GET",
				url : "<?php echo site_url(); ?>profile/select_city/"+id,
				success: function(msg){
					$('#ajcity').html(msg);
				}
			});
		}else if(id == "indonesia"){
			$('#indo').show();
			$(".province").select2().val("").trigger("change");
			
			$.ajax({
				type: "GET",
				url : "<?php echo site_url(); ?>profile/select_province/"+id,
				success: function(msg){
					$('#ajprovince').html(msg);
				}
			});
		}else if(id < 35){ // select city untuk indonesia, selain 35 (korsel)
			$(".city").select2().val("").trigger("change");
		
			$.ajax({
				type: "GET",
				url : "<?php echo site_url(); ?>profile/select_city/"+id,
				success: function(msg){
					$('#ajcity').html(msg);
				}
			});
		} else if(id == 35){ // select city untuk indonesia, selain 35 (korsel)
			$(".city").select2().val("").trigger("change");
		
			$.ajax({
				type: "GET",
				url : "<?php echo site_url(); ?>profile/select_city/"+id,
				success: function(msg){
					$('#ajcity').html(msg);
				}
			});

		}
		
		
	}
  
	$('#datepicker').datepicker({
		changeMonth: true,
		changeYear: true
	});
	
	// HTML5 WYSIWYG Editor
	$('#wysiwyg').wysihtml5({
		toolbar: {
			fa: true
		}
	});
	
	$('#summernote').summernote({
		height: 400
	});
	
  <?php } ?>
  
  <?php if($this->router->class == 'dashboard' || $this->router->class == 'profile' || $this->router->class == 'project') { ?>
	$('.select2').select2({
	  id: function(obj) {
		  return obj.slug; // use slug field for id
		}
	});
  <?php } ?>

  <?php if($this->router->class == 'profile') { ?>
	
	
	Dropzone.autoDiscover = false;
	
	var wrapperThis;
    $("#dzupload").dropzone({
		uploadMultiple: false,
		maxFiles: 1,
		acceptedFiles: "image/*",
        url: "<?php echo site_url('profile/updatephoto');?>",
        addRemoveLinks: true,
		autoProcessQueue: true,
		autoQueue: true,
		success: function (file, response) {
            var imgName = response;
            file.previewElement.classList.add("dz-success");
            console.log("Successfully uploaded :" + imgName);
			location.reload();
        },
        error: function (file, response) {
            file.previewElement.classList.add("dz-error");
        },
		
		init: function () {
		}
    });
	<?php } ?>
	
	$('.input-hide').hide();
	$('.second').hide();
	$('#chk-uang').click(function() {
		if($('#chk-uang').prop('checked')) {
			// something when checked
			$('.input-hide').show();
			console.log("Yay");
		} else {
			// something else when not
			$('.input-hide').hide();
			console.log("Huh");
		}
	});
	
	$('#joinnext').click(function() {
		var am = $('#am').val();
		$(".second").show( "slow", function() {
			// Animation complete.
			var amount = $('#amount').val(am);
		});
	});
	
	$("#am").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

});
	
</script>

</body>
</html>