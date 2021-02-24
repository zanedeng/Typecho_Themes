<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!-- /main-wrapper -->
<div class="sidebar-wrapper">
    <div class="sidebar section" id="sidebar">
        <div class="widget Search" data-version="1" id="Search1">
            <form method="post" action="<?php $this->options->siteUrl(); ?>" class="search-form">
                <div class="form-group">
                    <span class="icon fa fa-search"></span>
                    <input type="text" id="s" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>">
                </div>
            </form>
        </div>

        <div class="widget Categories" data-version="1" id="Categories1">
            <h2><?php _e('分类'); ?></h2>
            <div class="widget-content categories">
                <ul>
                <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" title="{description}">{name} <span>({count})</span></a></li>'); ?>
                </ul>
            </div>
        </div>

        <div class="widget RecentPosts" data-version="1" id="RecentPosts1">
            <h2><?php _e('最新文章'); ?></h2>
            <div class="widget-content recent-posts">
                <ul>
                    <?php $this->widget('Widget_Contents_Post_Recent')->to($archives); ?>
                    <? while($archives->next()): ?>
                    <li>
                        <div class="item-thumbnail-only">
                            <div class="item-thumbnail">
                                <a href="<?php $archives->permalink() ?>" target="_blank">
                                    <img alt="" height="72" src="<?php echo showThumb($archives, true); ?>" width="72">
                                </a>
                            </div>
                            <div class="item-title">
                                <a href="<?php $archives->permalink() ?>"><?php $archives->title(22,'...'); ?></a>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
        <!--
        <div class="widget PopularPosts" data-version="1" id="PopularPosts1">
            <h2>Popular Posts</h2>
            <div class="widget-content popular-posts">
                <ul>
                    <li>
                        <div class="item-thumbnail-only">
                            <div class="item-thumbnail">
                                <a href="home.html" target="_blank">
                                    <img alt="" border="0" height="72" src="peace_bentch_city.jpg" width="72">
                                </a>
                            </div>
                            <div class="item-title">
                                <a href="home.html">Leave Your Shoes At Home</a>
                            </div>
                        </div>
                        <div style="clear: both;"></div>
                    </li>
                </ul>
            </div>
        </div>
        -->
        <div class="widget Label" data-version="1" id="Label1">
            <h2><?php _e('标签云'); ?></h2>
            <div class="widget-content cloud-label-widget-content">
                <?php $this->widget('Widget_Metas_Tag_Cloud', 'sort=mid&ignoreZeroCount=1&desc=0')->to($tags); ?>
                <?php if($tags->have()): ?>
                    <?php while ($tags->next()): ?>
                    <span class="label-size label-size-4">
                        <a dir="ltr" href="<?php $tags->permalink(); ?>" title="<?php $tags->count(); ?> 个话题"><?php $tags->name(); ?></a>
                    </span>
                    <?php endwhile; ?>
                <?php else: ?>
                    <span class="label-size label-size-4"><?php _e('没有任何标签'); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- /sidebar-wrapper -->