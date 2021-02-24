<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class='v2' dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
    <head>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
        <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
        <title>
		<?php $this->archiveTitle(array(
			'category'  =>  _t('分类 %s 下的文章'),
			'search'    =>  _t('包含关键字 %s 的文章'),
			'tag'       =>  _t('标签 %s 下的文章'),
			'author'    =>  _t('%s 发布的文章')
			), '', ' - '); ?><?php $this->options->title(); ?>
	    </title>
        <!-- Chrome, Firefox OS and Opera -->
        <meta content='' name='theme-color'/>
        <!-- Windows Phone -->
        <meta content='' name='msapplication-navbutton-color'/>
        <!--iOS -->
        <meta name="apple-mobile-web-app-title" content="Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="480">
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

        <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700|Rubik:300,400,500,700,900&subset=latin-ext' rel='stylesheet'/>
	    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/font-awesome.min.css">
	    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/bootstrap-4.0.0.min.css">
	    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/style.css">
        <?php if ($this->is('index')==false) : ?>
	    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>css/blog.css">
        <?php endif; ?>
        
        <script src='<?php $this->options->themeUrl(); ?>js/jquery-3.0.0.min.js' type='text/javascript'></script>
        <script src='<?php $this->options->themeUrl(); ?>js/jquery-migrate-3.0.0.min.js' type='text/javascript'></script>
        <script src='<?php $this->options->themeUrl(); ?>js/jquery-1.7.32.min.js'></script>
        <?php $this->header(); ?>

        <style id='template-skin-1' type='text/css'>
            
        </style>

        <script type='text/javascript'>
            (function($){'use strict';Date.now=Date.now||function(){return+new Date()};$.ias=function(g){var h=$.extend({},$.ias.defaults,g);var i=new $.ias.util();var j=new $.ias.paging(h.scrollContainer);var k=(h.history?new $.ias.history():false);var l=this;function init(){var d;j.onChangePage(function(a,b,c){if(k){k.setPage(a,c)}h.onPageChange.call(this,a,c,b)});reset();if(k&&k.havePage()){stop_scroll();d=k.getPage();i.forceScrollTop(function(){var a;if(d>1){paginateToPage(d);a=get_scroll_threshold(true);$('html, body').scrollTop(a)}else{reset()}})}return l}init();function reset(){hide_pagination();h.scrollContainer.scroll(scroll_handler)}function scroll_handler(){var a,scrThreshold;a=i.getCurrentScrollOffset(h.scrollContainer);scrThreshold=get_scroll_threshold();if(a>=scrThreshold){if(get_current_page()>=h.triggerPageThreshold){stop_scroll();show_trigger(function(){paginate(a)})}else{paginate(a)}}}function stop_scroll(){h.scrollContainer.unbind('scroll',scroll_handler)}function hide_pagination(){$(h.pagination).hide()}function get_scroll_threshold(a){var b,threshold;b=$(h.container).find(h.item).last();if(b.size()===0){return 0}threshold=b.offset().top+b.height();if(!a){threshold+=h.thresholdMargin}return threshold}function paginate(d,e){var f;f=$(h.next).attr('href');if(!f){if(h.noneleft){$(h.container).find(h.item).last().after(h.noneleft)}return stop_scroll()}if(h.beforePageChange&&$.isFunction(h.beforePageChange)){if(h.beforePageChange(d,f)===false){return}}j.pushPages(d,f);stop_scroll();show_loader();loadItems(f,function(a,b){var c=h.onLoadItems.call(this,b),curLastItem;if(c!==false){$(b).hide();curLastItem=$(h.container).find(h.item).last();curLastItem.after(b);$(b).fadeIn()}f=$(h.next,a).attr('href');$(h.pagination).replaceWith($(h.pagination,a));remove_loader();hide_pagination();if(f){reset()}else{stop_scroll()}h.onRenderComplete.call(this,b);if(e){e.call(this)}})}function loadItems(b,c,d){var e=[],container,startTime=Date.now(),diffTime,self;d=d||h.loaderDelay;$.get(b,null,function(a){container=$(h.container,a).eq(0);if(0===container.length){container=$(a).filter(h.container).eq(0)}if(container){container.find(h.item).each(function(){e.push(this)})}if(c){self=this;diffTime=Date.now()-startTime;if(diffTime<d){setTimeout(function(){c.call(self,a,e)},d-diffTime)}else{c.call(self,a,e)}}},'html')}function paginateToPage(a){var b=get_scroll_threshold(true);if(b>0){paginate(b,function(){stop_scroll();if((j.getCurPageNum(b)+1)<a){paginateToPage(a);$('html,body').animate({'scrollTop':b},400,'swing')}else{$('html,body').animate({'scrollTop':b},1000,'swing');reset()}})}}function get_current_page(){var a=i.getCurrentScrollOffset(h.scrollContainer);return j.getCurPageNum(a)}function get_loader(){var a=$('.loader');if(a.size()===0){a=$('<div class="loader">'+h.loader+'</div>');a.hide()}return a}function show_loader(){var a=get_loader(),el;if(h.customLoaderProc!==false){h.customLoaderProc(a)}else{el=$(h.container).find(h.item).last();el.after(a);a.fadeIn()}}function remove_loader(){var a=get_loader();a.remove()}function get_trigger(a){var b=$('.trigger');if(b.size()===0){b=$('<div class="loadmore"><a href="">'+h.trigger+'Load More</a></div>');b.hide()}$('a',b).off('click').on('click',function(){remove_trigger();a.call();return false});return b}function show_trigger(a){var b=get_trigger(a),el;el=$(h.container).find(h.item).last();el.after(b);b.fadeIn()}function remove_trigger(){var a=get_trigger();a.remove()}};$.ias.defaults={container:'.blog-posts',scrollContainer:$(window),item:'.date-outer',pagination:'#blog-pager',next:'#blog-pager-older-link a',loader:'<div class="preloader"> <div class="double-bounce1"></div> <div class="double-bounce2"></div> </div>',loaderDelay:1000,triggerPageThreshold:2,trigger:'<i class="fa fa-plus"></i>',thresholdMargin:-500,history:true,onPageChange:function(){},beforePageChange:function(){},onLoadItems:function(){},onRenderComplete:function(){FB.XFBML.parse();},customLoaderProc:false};$.ias.util=function(){var c=false;var d=false;var e=this;function init(){$(window).load(function(){c=true})}init();this.forceScrollTop=function(a){$('html,body').scrollTop(0);if(!d){if(!c){setTimeout(function(){e.forceScrollTop(a)},1)}else{a.call();d=true}}};this.getCurrentScrollOffset=function(a){var b,wndHeight;if(a.get(0)===window){b=a.scrollTop()}else{b=a.offset().top}wndHeight=a.height();return b+wndHeight}};$.ias.paging=function(){var c=[[0,document.location.toString()]];var d=function(){};var e=1;var f=new $.ias.util();function init(){$(window).scroll(scroll_handler)}init();function scroll_handler(){var a,curPageNum,curPagebreak,scrOffset,urlPage;a=f.getCurrentScrollOffset($(window));curPageNum=getCurPageNum(a);curPagebreak=getCurPagebreak(a);if(e!==curPageNum){scrOffset=curPagebreak[0];urlPage=curPagebreak[1];d.call({},curPageNum,scrOffset,urlPage)}e=curPageNum}function getCurPageNum(a){for(var i=(c.length-1);i>0;i--){if(a>c[i][0]){return i+1}}return 1}this.getCurPageNum=function(a){a=a||f.getCurrentScrollOffset($(window));return getCurPageNum(a)};function getCurPagebreak(a){for(var i=(c.length-1);i>=0;i--){if(a>c[i][0]){return c[i]}}return null}this.onChangePage=function(a){d=a};this.pushPages=function(a,b){c.push([a,b])}};$.ias.history=function(){var e=false;var f=false;function init(){f=!!(window.history&&history.pushState&&history.replaceState);f=false}init();this.setPage=function(a,b){this.updateState({page:a},'',b)};this.havePage=function(){return(this.getState()!==false)};this.getPage=function(){var a;if(this.havePage()){a=this.getState();return a.page}return 1};this.getState=function(){var a,stateObj,pageNum;if(f){stateObj=history.state;if(stateObj&&stateObj.ias){return stateObj.ias}}else{a=(window.location.hash.substring(0,7)==='/');if(a){pageNum=parseInt(window.location.hash.replace('/',''),10);return{page:pageNum}}}return false};this.updateState=function(a,b,c){if(e){this.replaceState(a,b,c)}else{this.pushState(a,b,c)}};this.pushState=function(a,b,c){var d;if(f){history.pushState({ias:a},b,c)}else{d=(a.page>0?'/'+a.page:'')}e=true};this.replaceState=function(a,b,c){if(f){history.replaceState({ias:a},b,c)}else{this.pushState(a,b,c)}}}})(jQuery);
        </script>
        <script type='text/javascript'>
            $(document).ready(function() {$('.item-thumbnail img , .avatar-image-container img').attr('src', function(i, src) {return src.replace( 's72-c', 's500' ).replace( 'w72-h72-p-nu', 's500' ).replace( 's35-c', 's100' );});});
        </script>
    </head>
    <body>
        <!-- ====== Preloader ====== -->
        <div CLASS='loading'>
            <div CLASS='gooey'>
                <span CLASS='dot'></span>
                <div CLASS='dots'>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ======End Preloader ====== -->
        <!-- ====== Navgition ====== -->
        <nav class='navbar navbar-expand-lg'>
            <div CLASS='container'>
                <!-- Logo -->
                <div class='header section' id='header'>
                    <div class='widget Header' data-version='1' id='Header1'>
                        <div id='header-inner'>
                            <div class='titlewrapper'>
                                <h1 class='navbar-brand'><?php $this->options->title(); ?></h1>
                            </div>
                            <div class='descriptionwrapper'>
                                <p class='description'>
                                    <span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button 
                    CLASS='navbar-toggler' 
                    TYPE='button' 
                    aria-controls='navbarSupportedContent' 
                    aria-expanded='false' 
                    aria-label='Toggle navigation' 
                    data-target='#navbarSupportedContent' 
                    data-toggle='collapse'
                >
                    <span CLASS='icon-bar'><i CLASS='fa fa-bars'></i></span>
                </button>
                <!-- Top Menu -->
                <div CLASS='collapse navbar-collapse' id='navbarSupportedContent'>
                    <ul CLASS='navbar-nav ml-auto'>
                        <?php if ($this->is('index')) : ?>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link active' HREF='#' data-scroll-nav='0'>首页</a>
                        </li>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='#' data-scroll-nav='1'>关于</a>
                        </li>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='#' data-scroll-nav='2'>服务</a>
                        </li>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='#' data-scroll-nav='3'>博客</a>
                        </li>
                        <?php else: ?>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='/#home'>首页</a>
                        </li>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='/#about'>关于</a>
                        </li>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='/#services'>服务</a>
                        </li>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link active' HREF='#' data-scroll-nav='3'>博客</a>
                        </li>
                        <?php endif; ?>
                        <li CLASS='nav-item'>
                            <a CLASS='nav-link' HREF='#' data-scroll-nav='4'>联系</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== End Navgition ====== -->
        <?php if ($this->is('index')) : ?>
        <!-- ====== Header ====== -->
        <!-- Header Background -->
        <?php if(empty($this->options->bgUrl)): ?>
        <header class='jumbo valign bg-img' data-background='<?php $this->options->themeUrl('images/background.jpeg'); ?>' data-overlay-dark='4' data-scroll-index='0' id='home'>
        <?php else: ?>
        <header class='jumbo valign bg-img' data-background='<?php echo $this->options->bgUrl; ?>' data-overlay-dark='4' data-scroll-index='0' id='home'>
        <?php endif; ?>
            <div CLASS='container'>
                <div CLASS='row'>
                    <div CLASS='full-width text-center caption mt-50'>
                        <h2><?php echo empty($this->options->welcome)?_t('Welcome!'):$this->options->welcome; ?></h2>
                        <h1 CLASS='cd-headline push'>
                            <span CLASS='blc'>I am</span>
                            <span CLASS='cd-words-wrapper'>
                                <!-- ====== Header Text====== -->
                                <?php if(empty($this->options->headerText)): ?>
                                <b CLASS='is-visible'>Zane</b>
                                <b>Web Designer</b>
                                <b>Photography</b>
                                <?php else:?>
                                <?php echo $this->options->headerText ?>
                                <?php endif; ?>
                            </span>
                        </h1>
                        <a CLASS='butn butn-bord mt-30' HREF='#blog' data-scroll-nav='3'>
                            <span>浏览我的作品</span>
                        </a>
                        <a CLASS='butn butn-light mt-30' HREF='#contact' data-scroll-nav='4'>
                            <span>聘请我！</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- ====== End Header ====== -->
        <?php endif; ?>


