<div class="wrap">
	<form id="key-form" action="?page=Home_Page_Settings" method="post" enctype="multipart/form-data"> <!-- please don't change the id -->
		<table class="form-table">	
			<tr>
				<td><strong>Name</strong></td>
				<td>
				<input type="text" name="home_name" value="<?php echo get_option("home_name");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>Title</strong></td>
				<td>
				<input type="text" name="home_title" value="<?php echo get_option("home_title");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>Button text</strong></td>
				<td>
				<input type="text" name="home_btn" value="<?php echo get_option("home_btn");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>Backroung image</strong></td>
				<td>
					<input type="file" accept="image/*" name="home_bg">
					<br/>
					<span>Recommended size 1200 * 700</span>
				</td>
			</tr>
			<tr>
				<td><img style="width:150px;" src="../wp-content/themes/christophe/images/<?php echo get_option("home_bg"); ?>" /></td>
			</tr>			
		</table>
		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="keysubmit"></p>
	</form>
</div>






