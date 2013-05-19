<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="span8 offset1">
	<form class="form-horizontal" action="<?php echo site_url('student'); ?>/check_create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<legend>Fill in the from to add a student</legend>
		<div class="control-group">
			<label class="control-label" for="name" >Name of the student</label>
			<div class="span4">
				<input name="name" id="name" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="student-no" >Student no</label>
			<div class="span4">
				<input name="student-no" id="student-no" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="dept" >Department</label>
			<div class="span4">
				<input name="dept" id="dept" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="level" >Level</label>
			<div class="span3">
				<input name="level" id="level" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="term" >Term</label>
			<div class="span3">
				<input name="term" id="term" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="room" >Room No.</label>
			<div class="span3">
				<input name="room" id="room" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="contact" >Contact No.</label>
			<div class="span3">
				<input name="contact" id="contact" type="text" class="input-xlarge"/>
			</div>
		</div>
		<div class="form-actions"> 
			<button type="submit" class="btn btn-primary">Add student</button>
		</div>
	</form>
</div>

