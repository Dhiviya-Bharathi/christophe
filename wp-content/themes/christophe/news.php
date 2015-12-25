<?php
/**
 * Template Name: News Pages
 *
 * @package WordPress
 * @subpackage Christophe Buecher
 * @since Christophe Buecher 1.0
 */

get_header(); ?>
<section class="news-section">	
	<div class="container">
		<h6>News</h6>		
		<article class="row">
			<div class="col-lg-4 new-article">
				<img class="news-article-img" src="../wp-content/themes/christophe/images/news-img.png"></img>
				<h3 class="news-article-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
				<p class="news-article-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="news-read-more" data-toggle="modal" data-target="#myModal">Read more</button>
			</div>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal title</h4>
				  </div>
				  <div class="modal-body">
						Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

						Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

						Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

						Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

						Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

						Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.

						Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.

						Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.

						Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-lg-4 new-article">
				<img class="news-article-img" src="../wp-content/themes/christophe/images/news-img.png"></img>
				<h3 class="news-article-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
				<p class="news-article-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="news-read-more">Read more</button>
			</div>
			<div class="col-lg-4 new-article">
				<img class="news-article-img" src="../wp-content/themes/christophe/images/news-img.png"></img>
				<h3 class="news-article-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
				<p class="news-article-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="news-read-more">Read more</button>
			</div>
			<div class="col-lg-4 new-article">
				<img class="news-article-img" src="../wp-content/themes/christophe/images/news-img.png"></img>
				<h3 class="news-article-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
				<p class="news-article-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="news-read-more">Read more</button>
			</div>
			<div class="col-lg-4 new-article">
				<img class="news-article-img" src="../wp-content/themes/christophe/images/news-img.png"></img>
				<h3 class="news-article-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
				<p class="news-article-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="news-read-more">Read more</button>
			</div>
			<div class="col-lg-4 new-article">
				<img class="news-article-img" src="../wp-content/themes/christophe/images/news-img.png"></img>
				<h3 class="news-article-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
				<p class="news-article-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button class="news-read-more">Read more</button>
			</div>
		</article>
	</div>
</section>
<script>
$('.open-icon').addClass('hide-icon');
$('.close-icon').removeClass('hide-icon');
$('#menu').show();
$('#menu .news img').attr("src","../wp-content/themes/christophe/images/news-dark.png");
$('#menu .news .menu-item').addClass('active');
</script>
<?php get_footer(); ?>