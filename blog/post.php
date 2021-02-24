<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="clr"></div>
<section class="blog section-padding" data-scroll-index="3" id="blog">
    <div class="container">
        <div class="work-inner">
            <!-- START SINGLE WORK DESIGN AREA -->
            <div class="outer-wrapper">
                <div class="main-wrapper">
                    <div class="content section" id="content">
                        <div class="widget Blog" data-version="1" id="Blog1">
                            <div class="big_post_image" id="pic1">
                                <center>
                                    <img src="<?php echo showThumb($this, true); ?>" class="first_post_img">
                                </center>
                            </div>
                            <div class="blog-posts hfeed row work-posts grid">
                                <!--Can't find substitution for tag [defaultAdStart]-->
                                <h2 class="date-header"><span><?php $this->date('Y-m-d'); ?></span></h2>
                                <div class="date-outer col-md-4 col-sm-4">
                                    <div class="sjps entry-content">
                                        <div class="category-title">
                                            <div class="aisa-btn">
                                                <?php $this->category(','); ?>
                                            </div>
                                        </div>
                                        <div style="text-align: center;">
                                            <h5 align="center" class="tc-title tc-title-center" style="margin-bottom: 0;">
                                                <?php $this->title() ?>
                                            </h5>
                                        </div>
                                        <div class="post-body entry-content" itemprop="description articleBody">
                                            <div class="entry-title"></div>
                                            <div dir="ltr" style="text-align: left;" trbidi="on">
                                                <div class="separator" style="clear: both; text-align: center;">
                                                    <a href="<?php echo showThumb($this, true); ?>" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"></a>
                                                </div>
                                                <?php $this->content(); ?>
                                            </div>
                                            <div style="clear: both;"></div>
                                        </div>
                                        <div class="metabypost" style="display:none;">
                                            <span><?php $this->title() ?></span>
                                            <img alt="<?php $this->title() ?>" src="<?php echo showThumb($this, true); ?>">
                                            <span><?php $this->author(); ?></span>
                                            <?php $this->date('Y-m-d'); ?>
                                            <span title="<?php $this->date('Y-m-d'); ?>"></span>
                                        </div>
                                        <div class="post-footer">
                                            <span class="group" id="post-tags">
                                                <span id="tags-name">标签: </span>
                                                <?php $this->tags('', true, '暂无标签'); ?>
                                            </span>
                                            <ul class="single-share social-pop group">
                                                <li><a data-text="<?php $this->title() ?>" data-via="zane" href="http://twitter.com/share?url=<?php $this->permalink(); ?>&amp;title=<?php $this->title() ?>" onclick="window.open(this.href, 'windowName', 'width=550, height=600, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="http://www.facebook.com/sharer.php?u=<?php $this->permalink(); ?>&amp;title=<?php $this->title() ?>" onclick="window.open(this.href, 'windowName', 'width=550, height=600, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://plus.google.com/u/0/share?url=<?php $this->permalink(); ?>" onclick="window.open(this.href, 'windowName', 'width=550, height=600, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="http://pinterest.com/pin/create/button/?url=<?php $this->permalink(); ?>&amp;media=<?php echo showThumb($this, true); ?>&amp;description=<?php $this->excerpt(90, '...'); ?>" onclick="window.open(this.href, 'windowName', 'width=550, height=600, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <?php $this->need('comments.php'); ?>
                                    
                                <div style="clear: both;"></div>
                            </div>
                            <!--Can't find substitution for tag [adEnd]-->
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->need('sidebar.php'); ?>
            <div class="clr"></div>
            <!-- END SINGLE WORK DESIGN AREA -->
            </div>
        </div>
    </div>
</section>

<?php $this->need('footer.php'); ?>