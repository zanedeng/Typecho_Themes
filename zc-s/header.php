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
    <!-- dns prefetch -->
    <meta http-equiv="x-dns-prefetch-control" content="on">
	
	<!-- Meta & Info -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
	<meta name="author" content="<?php $this->options->title(); ?>">
	<meta name="description" itemprop="description" content="<?php $this->options->description(); ?>">
	<meta name="keywords" content="<?php $this->options->keywords(); ?>">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php empty($this->options->favicon)?$this->options->themeUrl('favicon.ico'):$this->options->favicon; ?>">
	<link rel="icon" sizes="192x192" href="<?php empty($this->options->favicon)?$this->options->themeUrl('favicon.ico'):$this->options->favicon; ?>">
	<link rel="apple-touch-icon" href="<?php empty($this->options->favicon)?$this->options->themeUrl('favicon.ico'):$this->options->favicon; ?>">
	
	<!--iOS -->
	<meta name="apple-mobile-web-app-title" content="Title">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="480">
	
	<!-- The Open Graph protocol -->
	<?php if($this->is('post')||$this->is('page')): ?>
	<meta property="og:url" content="<?php $this->permalink(); ?>" />
	<meta property="og:type" content="blog" />
	<meta property="og:release_date" content="<?php $this->date('Y-m-j'); ?>" />
	<meta property="og:title" content="<?php $this->options->title(); ?>" />
	<meta property="og:image" content="<?php echo showThumb($this,true); ?>" />
	<meta property="og:description" content="<?php $this->description() ?>" />
	<meta property="og:author" content="<?php $this->author(); ?>" />
	<meta property="article:published_time" content="<?php $this->date('Y-m-j'); ?>" />
	<meta property="article:modified_time" content="<?php $this->date('Y-m-j'); ?>" />
	<?php endif; ?>

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
				<img src="<?php echo empty($this->options->logoUrl)?$this->options->themeUrl.'/images/logo.png':$this->options->logoUrl; ?>" width="250" alt="<?php $this->options->title(); ?>" />
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
