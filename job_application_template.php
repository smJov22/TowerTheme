<?php
/*
Template Name: Job Application Template
*/


get_header();
	
if(true === apply_filters('graduate_filter_frontpage_content_enable', true)) : ?>
	<div class="container">
		<h1>Job Application Form</h1>
		<div class="form-style-5">
			<form role="form" method="post">
				<input id="job_email" type="hidden" name="job_email" value="<?php echo $_POST['apply_email'] ?>">
				<input id="job_title" type="hidden" name="job_title" value="<?php echo $_POST['apply_title'] ?>">
				<input id="first_name" type="text" name="first_name" placeholder="First Name" class="form-control input-sm" required="">
				<input id="last_name" type="text" name="last_name" placeholder="Last Name" class="form-control input-sm" required="">
				<input id="user_email" type="text" name="user_email" placeholder="Email" class="form-control input-sm" required="">
				<input type="submit" value="submit" class="btn btn-info btn-block" name="jobapplicationbtn">
			</form>
		</div>
	</div><!-- #container -->
<?php
endif;
get_footer();