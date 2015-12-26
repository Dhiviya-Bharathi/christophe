  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<div class="wrap">
	<h2>Experience Page</h2>
	<form id="expform" action="?page=EXP_Page_Settings" method="post"> <!-- please don't change the id -->
		<table class="form-table">			
			<tr>
				<td><strong>FROM</strong></td>
				<td>
				<input id="from" type="text" name="exp_from" value="<?php echo '';?>" style="width: 500px;">
				</td>
			</tr>			
			<tr>
				<td><strong>TO</strong></td>
				<td>
				<input id="to" type="text" name="exp_to" value="<?php echo ''; ?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>EXP Title</strong></td>
				<td>
				<input type="text" name="exp_title" value="<?php echo ''; ?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>DESCRIPTION</strong></td>
				<td>
				<textarea name="exp_desc" style="width: 500px;"></textarea>
				</td>
			</tr>					
		</table>
		<p class="submit"><button class="button button-primary" id="submit">Save Changes</button></p>
		<p class="hidden error">All fields are mandatory</p>
	</form>
</div>

<table border="1">
	<thead>
		<th>
			Experience From
		</th>
		<th>
			Experience TO
		</th>
		<th>
			Experience Title
		</th>
		<th>
			Experience Desc
		</th>
		<th>
			Action
		</th>		
	</thead>
	<tbody>
		<tr>
			<td>jhrfd</td>
			<td>zdrh65rh</td>
			<td>jhrfd</td>
			<td>zdrh65rh</td>
			<td>
				<span><a href="../?id=1">Edit</a></span><br/>
				<span><a href="../?id=1">Del</a></span>
			</td>
		</tr>
	</tbody>
</table>
<script type="text/javascript">	
	jQuery( "#from" ).datepicker();
	jQuery( "#to" ).datepicker();
	
	jQuery(document).on('click','#submit', function(event){
		event.preventDefault();
		var from = jQuery( "#from" ).val();
		var to = jQuery( "#to" ).val();
		var exptitle = jQuery.trim(jQuery( ".exp_title" ).val());
		var expdesc = jQuery.trim(jQuery( ".exp_desc" ).val());
		if(!from && !to && !exptitle && !expdesc){
			jQuery('.error').removeClass('hidden');
		}else{
			jQuery('#expform').submit();
		}
	});
</script>