<div class="navbar nabar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<ul class="nav">
				<li class="active"><a class="brand" herf="#">Hall management</a></li>
			</ul>
			<ul class="nav">
				<li><a href="<?php echo base_url();?>">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Student
						 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#content-area" id="std-list">Student List</a></li>
						<li><a href="#content-area" id="std-create">Add student</a></li>
						<li><a href="#content-area" id="std-delete">Delete Student</a></li>
						<li><a href="#content-area" id="std-update">Update </a></li>
						<li><a href="#content-area" id="std-swap">Swap Students</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Room
						 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#content-area" id="rm-list">Room List</a></li>
						<li><a href="#content-area" id="rm-create">Create Room</a></li>
						<li><a href="#content-area" id="rm-delete">Clear Room</a></li>
						<li><a href="#content-area" id="rm-update">Update </a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav pull-right">
				<li><a href="<?php echo site_url('home');?>/logout">Logout</a></li>
			</ul>
		</div>
	</div>
</div>
