<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		<?php $this->archiveTitle(array(
			'category'  =>  _t('分类 %s 下的文章'),
			'search'    =>  _t('包含关键字 %s 的文章'),
			'tag'       =>  _t('标签 %s 下的文章'),
			'author'    =>  _t('%s 发布的文章')
			), '', ' - '); ?><?php $this->options->title(); ?>
	</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/animate.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/flaticon.css">
	<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/style.css">
	<?php $this->header(); ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>">
				<img src="<?php $this->options->themeUrl(); ?>/images/logo.png" width="250" alt="<?php $this->options->title(); ?>" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> 菜单
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="<?php $this->options->siteUrl(); ?>" class="nav-link">首页</a></li>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					<li class="nav-item"><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" class="nav-link"><?php $pages->title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
