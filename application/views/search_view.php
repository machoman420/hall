<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<div class="row">
		<div class="span7">
			<p></p>
		</div>
		
		<div class="span5" id="search-area">
			<form class="form-horizontal" method="post" action="#" accept-charset="utf-8" enctype="multipart/form-data">
				<legend>Type to search</legend>
				<div class="control-group">
					<label class="control-label" for="string" >Search for </label>
					<div class="span2">
						<input name="string" id="string" class="input-xlarge" type="text" value="<?php if(isset($string))echo $string;?>"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="type" >In </label>
					<div class="span2">
						<select id="type" name="type">
							<?php if(!isset($type)) $type='';?>
							<option value="room" <?php if($type=="room")echo 'selected="selected"';?>>Room</option>
							<option value="student"<?php if($type=="student")echo 'selected="selected"';?>>Student</option>
						</select>
					</div>
				</div>
			</form>
			<div class="span3">
				<p class="text-right"><button id="search-button" class="btn btn-primary">Search</button></p>
			</div>
		</div>
	</div>
