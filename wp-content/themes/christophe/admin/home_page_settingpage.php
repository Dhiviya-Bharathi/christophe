<div class="wrap">
	<form id="key-form" action="?page=Home_Page_Settings" method="post"> <!-- please don't change the id -->
		<table class="form-table">			
			<tr>
				<td><strong>logo</strong></td>
				<td>
				<input type="file" name="logo" value="<?php echo get_option("logo");?>" style="width: 500px;">
				</td>
			</tr>			
			<tr>
				<td><strong>Name</strong></td>
				<td>
				<input type="text" name="home_name" value="<?php echo get_option("fb_app_key");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>Title</strong></td>
				<td>
				<input type="text" name="home_title" value="<?php echo get_option("twt_key");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>Button text</strong></td>
				<td>
				<input type="text" name="twt_sec_key" value="<?php echo get_option("twt_sec_key");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>Backroung image</strong></td>
				<td>
				<input type="file" name="ga_id" value="<?php echo get_option("ga_id");?>" style="width: 500px;">
				</td>
			</tr>			
		</table>
		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="keysubmit"></p>
	</form>
</div>






