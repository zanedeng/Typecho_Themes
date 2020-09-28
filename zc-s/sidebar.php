<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<div class="col-md-4 sidebar ftco-animate">
    <div class="sidebar-box">
        <form method="post" action="<?php $this->options->siteUrl(); ?>" class="search-form">
        <div class="form-group">
            <span class="icon fa fa-search"></span>
            <input type="text" id="s" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>">
        </div>
        </form>
    </div>
    <div class="sidebar-box ftco-animate">
        <div class="categories">
        <h3><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" title="{description}">{name} <span>({count})</span></a></li>'); ?>
        </div>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3><?php _e('最新文章'); ?></h3>
        <?php $this->widget('Widget_Contents_Post_Recent')->to($archives); ?>
        <? while($archives->next()): ?>
        <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(<?php echo showThumb($archives, true); ?>);"></a>
            <div class="text">
                <h3 class="heading"><a href="<?php $archives->permalink() ?>"><?php $archives->title(22,'...'); ?></a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php $archives->date('Y-m-d'); ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php $this->author(); ?></a></div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <div class="sidebar-box ftco-animate">
        <h3><?php _e('标签云'); ?></h3>
        <div class="tagcloud">
        <?php $this->tags(',', true, 'none'); ?>
        </div>
    </div>
</div>
