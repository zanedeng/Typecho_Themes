<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url('<?php $this->options->themeUrl(); ?>images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end">
			<div class="col-md-9 ftco-animate pb-5 mb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php $this->options->siteUrl(); ?>">首页 <i class="fa fa-chevron-right"></i></a></span> <span><?php $this->title() ?> </span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center no-gutters">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<h2 class="mb-2"><?php $this->title() ?></h2>
			</div>
		</div>
		<div class="row">
			<?php $this->content(); ?>
		</div>
	</div>
</section>
<?php $this->need('footer.php'); ?>