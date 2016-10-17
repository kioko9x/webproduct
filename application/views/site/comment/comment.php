<?php $this->load->view('site/head');?>
<div class="">
	<form method="post">
		<span class="label label-default">Name</span><input type="text" name="username"><br/>
		<span class="label label-default">Email</span><input type="text" name="email"><br/>
		<span class="label label-default">Content</span><textarea name="content"></textarea><br/>
		<input type="submit" name="cmt" value="Submit">
		<input type="reset" value="Reset">
	</form>
</div>