<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
</div>

<div class="navbar">
	<p class="text-center muted">
		&copy; 2013 Hall management
	</p>
</div>
</div>
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
<script>
	$(document).ready(function(){
		$("#rm-create").click(function(){
			$.get("<?php echo site_url('room');?>/create",function(data){
				$("#content-area").html(data);
				});
			});
		
		$("#std-create").click(function(){
			$.get("<?php echo site_url('student');?>/create",function(data){
				$("#content-area").html(data);
				});
			});
			
			
		});
</script>


</body>
</html>
