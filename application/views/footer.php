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
<script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
<script>
	$(document).ready(function(){
		$("#rm-create").click(function(){
			$.get("<?php echo site_url('room');?>/create",function(data){
				$("#content-area").html(data);
				});
			});
		
		$("#rm-list").click(function(){
			$.get("<?php echo site_url('room');?>/show",function(data){
				$("#content-area").html(data);
				});
		});
		
		$("#rm-update").click(function(){
			$.get("<?php echo site_url('room');?>/show",function(data){
				$("#content-area").html(data);
				});
		});
		
		$("#rm-delete").click(function(){
			$.get("<?php echo site_url('room');?>/show",function(data){
				$("#content-area").html(data);
				});
		});
		
		
		$("#std-list").click(function(){
			$.get("<?php echo site_url('student');?>/show",function(data){
				$("#content-area").html(data);
				});
		});
		
		
		$("#std-create").click(function(){
			$.get("<?php echo site_url('student');?>/create",function(data){
				$("#content-area").html(data);
				});
			});
		
		$("#std-update").click(function(){
			$.get("<?php echo site_url('student');?>/show",function(data){
				$("#content-area").html(data);
				});
			});
		
		$("#std-delete").click(function(){
			$.get("<?php echo site_url('student');?>/show",function(data){
				$("#content-area").html(data);
				});
			});
		
		$("#std-swap").click(function(){
			$.get("<?php echo site_url('student')?>/swap",function(data){
				$("#content-area").html(data);
				});
			});
		
		$("#search-button").click(function(){
			var t = $("#type").val();
			var x = $("#string").val();
			$.get("<?php echo site_url('room');?>?t="+t+"&q="+x,function(data){
				$("#content-area").html(data);
				});
		});
		
			
		});
</script>


</body>
</html>
