<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php 

function threadedComments($comments, $options) { 

?>

    <li id="<?php $comments->theId(); ?>" class="comment">
        <div class="vcard bio">
            <?php $comments->gravatar('50', ''); ?>
        </div>
        <div class="comment-body">
            <h3><?php $comments->author(); ?></h3>
            <div class="meta"><time datetime="<?php $comments->date('c'); ?>"><?php $comments->date('Y-m-d h:i a'); ?></time></div>
            <p><?php $comments->content(); ?></p>
            <p class="reply"><?php $comments->reply(); ?></p>
        </div>
        <div class="clearfix"></div>
        <?php if ($comments->children) { ?>
        <div class="children">
        <?php $comments->threadedComments($options); ?>
        </div>
        <?php } ?>
    </li>

<?php 

} 

?>

<?php if($this->allow('comment')): ?>
    <?php $this->comments()->to($comments); ?>
	<h3 class="mb-5"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论'); ?></h3>
    <?php if ($comments->have()): ?>
    
    <?php $comments->listComments(); ?>
    
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    <?php endif; ?>
    
    <div id="<?php $this->respondId(); ?>" class="comment-form-wrap pt-5">
        <div class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
        </div>
        <h3 class="mb-5"><?php _e('发表评论'); ?></h3>
        <form action="#" class="p-5">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?>
                <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>
            </p>
            <?php else: ?>
            <div class="form-group">
                <label for="name"><?php _e('你的名字(*)'); ?></label>
                <input type="text" class="form-control" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
            </div>
            <div class="form-group">
            <label for="email"><?php _e('Email(*)'); ?></label>
            <input type="email" class="form-control" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            </div>
            <div class="form-group">
            <label for="website"><?php _e('网址'); ?></label>
            <input type="url" class="form-control" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            </div>

            <?php endif; ?>
            <div class="form-group">
            <label for="message"><?php _e('内容'); ?></label>
            <textarea rows="8" cols="50" class="form-control" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </div>
            <div class="form-group">
            <input type="submit" value="<?php _e('提交评论'); ?>" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
    </div>
    <?php else: ?>
    <h3 class="comments-title">评论区已关闭</h3>
    <?php endif; ?>