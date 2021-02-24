<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <div class='clr'></div>
    <section class="blog section-padding" data-scroll-index="3" id="blog">
        <div class="container">
            <div class="section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <h1 class="mb-3 bread">
                    <?php $this->archiveTitle(array(
                        'category'  =>  _t('分类<span class="archiveTitle">%s</span>下的文章'),
                        'search'    =>  _t('包含关键字<span class="archiveTitle">%s</span>的文章'),
                        'tag'       =>  _t('标签<span class="archiveTitle">%s</span>下的文章'),
                        'author'    =>  _t('<span class="archiveTitle">%s</span>发布的文章')
                    ), '', ''); ?>
                </h1>
            </div>
            <div class="work-inner">
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class="outer-wrapper">
                    <div>
                        <div class="content section" id="content">
                            <div class="widget Blog" data-version="1" id="Blog1">
                                <div class="blog-posts hfeed row work-posts">
                                    <?php if ($this->have()): ?>
                                    <!--Can't find substitution for tag [defaultAdStart]-->
                                    <?php while($this->next()): ?>
                                    <div class="date-outer col-md-4 col-sm-4">
                                        <div class="sjps entry-content">
                                            <div class="post-body entry-content" itemprop="description articleBody">
                                                <div class="entry-title">
                                                    <h3 itemprop="name" style="display:none;">
                                                        <a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a>
                                                    </h3>
                                                </div>
                                                <div class="body-post">
                                                    <span>
                                                        <div class="item">
                                                            <div class="post-img position-re o-hidden">
                                                                <img src="<?php echo showThumb($this,true); ?>" alt="<?php $this->title() ?>" title="<?php $this->title() ?>">
                                                            </div>
                                                            <div class="content">
                                                                <span class="data">
                                                                    <a href="#0" class="undecro"><?php $this->author(); ?></a>
                                                                    <a href="#0" class="undecro"><?php $this->date('Y-m-d'); ?></a>
                                                                </span>
                                                                <h5>
                                                                    <a href="<?php $this->permalink(); ?>" class="undecro"><?php $this->title() ?></a>
                                                                </h5>
                                                                <a href="<?php $this->permalink(); ?>" class="more mt-30">
                                                                    <span><?php _e('阅读全文'); ?></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </span>
                                                </div>
                                                <div style="clear: both;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                    <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
                                    <?php endif; ?>
                                    <!--Can't find substitution for tag [adEnd]-->
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    <div class="clr"></div>
                    <!-- END SINGLE WORK DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
<?php $this->need('footer.php'); ?>