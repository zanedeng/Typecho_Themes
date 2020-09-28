<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url('<?php $this->options->themeUrl(); ?>images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end">
			<div class="col-md-9 ftco-animate pb-5 mb-5">
				<p class="breadcrumbs">
					<span class="mr-2"><a href="<?php $this->options->siteUrl(); ?>">首页 <i class="fa fa-chevron-right"></i></a></span> 
					<span class="mr-2"><?php $this->category(','); ?></span> 
                </p>
                <h1 class="mb-3 bread"><?php $this->archiveTitle(array(
                    'category'  =>  _t('分类 %s 下的文章'),
                    'search'    =>  _t('包含关键字 %s 的文章'),
                    'tag'       =>  _t('标签 %s 下的文章'),
                    'author'    =>  _t('%s 发布的文章')
                ), '', ''); ?></h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
        <div class="col-md-3 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <div class="text">
              <h3 class="heading mb-3"><a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></h3>
              <a href="<?php $this->permalink(); ?>" class="block-20 img" style="background-image: url('<?php echo showThumb($this,true); ?>');">
              </a>
              <div class="meta mb-3">
                <div><a href="<?php $this->permalink(); ?>"><?php $this->date('Y-m-d'); ?></a></div>
                <div><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></div>
                <div><a href="<?php $this->permalink() ?>" class="meta-chat"><span class="fa fa-comment"></span> <?php $this->commentsNum('暂无', '1', '%d'); ?></a></div>
              </div>
              <?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
          </div>
        </div>

    	<?php endwhile; ?>
        <?php else: ?>
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        <?php endif; ?>
      </div>
      <div class="row mt-5 pb-5">
        <div class="col text-center">
          <div class="block-27">
            <!-- pagination -->
            <?php $this->pageNav('<li><a href="#">&lt;</a></li>', '<li><a href="#">&gt;</a></li>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
            <!-- end pagination -->
          </div>
        </div>
      </div>
    </div>
  </section>

	<?php $this->need('footer.php'); ?>
