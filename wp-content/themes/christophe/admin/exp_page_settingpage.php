<div class="wrap">
	<h2>Experience Page</h2>
	<form id="key-form" action="?page=EXP_Page_Settings" method="post"> <!-- please don't change the id -->
		<table class="form-table">			
			<tr>
				<td><strong>FROM</strong></td>
				<td>
				<input type="text" name="exp_from" value="<?php echo '';?>" style="width: 500px;">
				</td>
			</tr>			
			<tr>
				<td><strong>TO</strong></td>
				<td>
				<input type="text" name="exp_to" value="<?php echo ''; ?>" style="width: 500px;">
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
		<p class="submit"><input type="submit" value="Save Changes" class="button button-primary" id="submit" name="keysubmit"></p>
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
