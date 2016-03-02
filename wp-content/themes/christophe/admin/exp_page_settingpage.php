  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> 
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="//cdn.ckeditor.com/4.5.5/basic/ckeditor.js"></script>

  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<div class="wrap">
	<h2>Experience Page</h2>
	<form id="expform" action="?page=EXP_Page_Settings" method="post"> <!-- please don't change the id -->
		<table class="form-table">			
			<tr>
				<td><strong>FROM</strong></td>
				<td>
				<input placeholder="mm/dd/yyy" id="from" type="text" name="exp_from" value="<?php if ($olddata['exp_from']) echo date('m/d/Y',strtotime($olddata['exp_from'])); ?>" style="width: 500px;">
				</td>
			</tr>			
			<tr>
				<td><strong>TO</strong></td>
				<td>
				<input placeholder="mm/dd/yyy" id="to" type="text" name="exp_to" value="<?php if ($olddata['exp_to'] == '0000-00-00 00:00:00') {} elseif ($olddata['exp_to']) { echo date('m/d/Y',strtotime($olddata['exp_to'])); } ?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<?php $exp_title = json_decode($olddata['exp_title']);  ?>
				<td><strong>EXP Title Eng</strong></td>
				<td>
					<input type="text" class="exp_title_en" name="exp_title_en" value="<?php echo $exp_title->en; ?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>EXP Title French</strong></td>
				<td>
					<input type="text" class="exp_title_fr" name="exp_title_fr" value="<?php echo $exp_title->fr; ?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>EXP Title Dutch</strong></td>
				<td>
					<input type="text" class="exp_title_de" name="exp_title_de" value="<?php echo $exp_title->de; ?>" style="width: 500px;">
				</td>
			</tr>
			<tr>
				<td><strong>DESCRIPTION</strong></td>
				<td>					
					<?php $exp_desc = json_decode($olddata['exp_desc']);  ?>
					<div id="tabs" class="col-md-12">
					      <ul>
						    <li><a href="#tabs-1">EN</a></li>
						    <li><a href="#tabs-2">FR</a></li>
						    <li><a href="#tabs-3">DE</a></li>
						  </ul>   
					      <div id="tabs-1" class="form-group">
					        <textarea class="exp_desc_en" name="exp_desc_en" ><?php echo $exp_desc->en; ?></textarea>					
					      </div>
					      <div id="tabs-2" class="form-group">
					        <textarea class="exp_desc_fr" name="exp_desc_fr" ><?php echo $exp_desc->fr; ?></textarea>					
					      </div>
					      <div id="tabs-3" class="form-group">
					        <textarea class="exp_desc_de" name="exp_desc_de" ><?php echo $exp_desc->de; ?></textarea>					
					      </div>
		    		</div>					
				</td>
			</tr>
		</table>
		<input type="hidden" name="old" value="<?php echo $olddata['id']; ?>" >
		<p class="hidden"><input class="button button-primary" id="realsubmit" type="submit">Save Changes</button></p>
		<p class="submit"><button class="button button-primary" id="submit" >Save Changes</button></p>
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
		<?php foreach ($fulldata as $key => $value) { ?>			
		<tr>
			<td><?php echo date('F, dS Y', strtotime($value['exp_from']));?></td>
			<td><?php if(strtotime($value['exp_to'])){ echo date('F, dS Y', strtotime($value['exp_to']));} else { echo 'Maintenant'; } ?></td>
			<td>
				<?php $tit = json_decode($value['exp_title']); 
					echo "<b>ENG</b><br/> "; print_r($tit->en); echo "<hr><br/>";
					echo "<b>FR</b><br/>"; print_r($tit->fr); echo "<hr><br/>";
					echo "<b>DE</b><br/>"; print_r($tit->de); echo "<hr><br/>";
				?>
			</td>
			<td>
				<?php $desc = json_decode($value['exp_desc']); 
					echo "<b>ENG</b><br/> "; print_r($desc->en); echo "<hr><br/>";
					echo "<b>FR</b><br/>"; print_r($desc->fr); echo "<hr><br/>";
					echo "<b>DE</b><br/>"; print_r($desc->de); echo "<hr><br/>";
				?>
			</td>			
			<td>
				<span><a href="../wp-admin/themes.php?page=EXP_Page_Settings&edit=<?php echo $value['id'];?>">Edit</a></span><br/>
				<span><a href="../wp-admin/themes.php?page=EXP_Page_Settings&del=<?php echo $value['id'];?>">Del</a></span>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<script type="text/javascript">	
	jQuery( "#from" ).datepicker();
	jQuery( "#to" ).datepicker();

    CKEDITOR.replace( 'exp_desc_en' );
	CKEDITOR.replace( 'exp_desc_fr' );
	CKEDITOR.replace( 'exp_desc_de' );

	jQuery(document).on('click','#submit', function(event){
		event.preventDefault();
		var from = jQuery( "#from" ).val();
		var to = jQuery( "#to" ).val();
		var exptitle = jQuery.trim(jQuery( ".exp_title_en" ).val());
		var expdesc = CKEDITOR.instances['exp_desc_en'].getData();
		if(!from || !exptitle || !expdesc){
			jQuery('.error').removeClass('hidden');
		}else{
			jQuery('#realsubmit').click();
		}
	});	
</script>