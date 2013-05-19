<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="span8">
	<form class="form-horizontal" action="<?php echo site_url('room'); ?>/check_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<legend>Fill in the from to create a new room</legend>
		<div class="control-group">
			<label class="control-label" for="room-no" >Room no</label>
			<div class="span4">
				<input name="room-no" id="room-no" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="block" >Block</label>
			<div class="span4">
				<input name="block" id="block" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="floor" >Floor</label>
			<div class="span4">
				<input name="floor" id="floor" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="form-actions"> 
			<button type="submit" class="btn btn-primary">Create</button>
		</div>
	</form>
</div>


