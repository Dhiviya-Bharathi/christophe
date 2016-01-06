<div class="wrap">
	<form id="key-form" action="?page=Home_Page_Settings" method="post" enctype="multipart/form-data"> <!-- please don't change the id -->
		<table class="form-table">			
			<tr>
				<td><h2>Header</h2><hr></td>
			</tr>
			<tr>
				<td><strong>Header Text</strong></td>
				<td>
				<input type="text" name="header_txt" value="<?php echo get_option("header_txt");?>" style="width: 500px;">
				</td>
			</tr>				
			<tr>
				<td><h2>Footer</h2><hr></td>
			</tr>
			<tr>
				<td><strong>Copyrigth text</strong></td>
				<td>
				<input type="text" name="foot_copy" value="<?php echo get_option("foot_copy");?>" style="width: 500px;">
				</td>
			</tr>
			<!-- <tr>
				<td><strong>Face Book Url</strong></td>
				<td>
				<input type="text" placeholder="https://" name="fb_url" value="<?php echo get_option("fb_url");?>" style="width: 500px;">
				</td>
		</tr> -->
			<tr>
				<td><strong>Xing Url</strong></td>
				<td>
				<input type="text" placeholder="https://" name="twt_url" value="<?php echo get_option("twt_url");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>LikedIn Url</strong></td>
				<td>
				<input type="text" placeholder="https://" name="link_url" value="<?php echo get_option("link_url");?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><h2>Home Page</h2><hr></td>
			</tr>		
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
				<td><strong>Button url</strong></td>
				<td>
				<input type="text" placeholder="pagename" name="home_btn_url" value="<?php echo get_option("home_btn_url");?>" style="width: 500px;">
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
			<tr>
				<td><h2>Contact Page</h2><hr></td>
			</tr>
			<tr>
				<td><strong>Contact Page head title</strong></td>
				<td>
				<textarea type="text" placeholder="Contact Page head title" name="contact_text" style="width: 500px;"><?php echo get_option("contact_text");?></textarea>
				</td>
			</tr>
			<tr>
				<td><h2>Portfolio</h2><hr></td>
			</tr>
			<tr>
				<td><strong>Portfolio Page head title</strong></td>
				<td>
				<textarea type="text" placeholder="Portfolio Page head title" name="portfolio_text" style="width: 500px;"><?php echo get_option("portfolio_text");?></textarea>
				</td>
			</tr>			
		</table>
		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="keysubmit"></p>
	</form>
</div>






