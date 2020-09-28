<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url('<?php $this->options->themeUrl(); ?>images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end">
			<div class="col-md-9 ftco-animate pb-5 mb-5">
				<p class="breadcrumbs">
					<span class="mr-2"><a href="<?php $this->options->siteUrl(); ?>">首页 <i class="fa fa-chevron-right"></i></a></span> 
					<span class="mr-2"><?php $this->category(','); ?><i class="fa fa-chevron-right"></i></span> 
					<span><?php $this->title() ?> </span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ftco-animate">
				<?php $this->content(); ?>
				<div class="tag-widget post-tag-container mb-5 mt-5">
					<div class="tagcloud">
						<?php $this->tags(', ', true, 'none'); ?>
					</div>
				</div>
			
				<div class="pt-5 mt-5">
					<?php $this->need('comments.php'); ?>
				</div>
			</div>
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
</section>	

<?php $this->need('footer.php'); ?>
