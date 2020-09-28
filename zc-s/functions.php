<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


/* 后台设置 */
function themeConfig($form) {
	
	echo '<p style="font-size:14px;" id="use-intro"><span style="display: block;margin-bottom: 10px;    margin-top: 10px;font-size: 16px;">感谢您使用 zane 主题</span></p>';
	
	//Favicon
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', null, null, _t('Favicon 地址'), _t('博客 Favicon 的地址, 默认则使用主题自带'));
    $form->addInput($favicon);
	//Logo
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点Logo地址'), _t('Logo图片URL地址, 推荐218x68, 默认则使用主题自带'));
	$form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	
	//社交
    $socialweixin = new Typecho_Widget_Helper_Form_Element_Text('socialweixin', NULL, NULL, _t('<p style="color:green;">↓↓↓以下为页脚社交图标部分，框内留空则不输出图标</p>微信二维码链接'), _t('在这里输入微信二维码链接,图片格式,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialweixin->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	$socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialweibo->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('输入Twitter链接'), _t('在这里输入twitter链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialtwitter->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
	$socialfacebook = new Typecho_Widget_Helper_Form_Element_Text('socialfacebook', NULL, NULL, _t('输入Facebook链接'), _t('在这里输入Facebook链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialfacebook->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
	$socialrss = new Typecho_Widget_Helper_Form_Element_Text('socialrss', NULL, NULL, _t('输入RSS链接'), _t('在这里输入rss链接,留空不输出，站点原版请输入off,支持 http:// 或 https:// 或 //<p style="color:green;"><b>↑↑↑以上为页脚社交图标部分，框内留空则不输出图标</b></p>'));
    $form->addInput($socialrss->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
		
	//图片CDN
    $srcAddress = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('图片CDN替换前地址'), _t('即你的附件存放链接，一般为http://www.yourblog.com/usr/uploads/'));
    $form->addInput($srcAddress->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $cdnAddress = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('图片CDN替换后地址'), _t('即你的七牛云存储域名，一般为http://yourblog.qiniudn.com/，可能也支持其他有镜像功能的CDN服务'));
    $form->addInput($cdnAddress->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
	
	$footlink = new Typecho_Widget_Helper_Form_Element_Textarea('footlink', null, null, _t('页脚链接'), _t('页脚处链接列表，可以用来放置友情链接，留空时为页面列表<br/>请按 &lt;li&gt;&lt;a href=&quot;https://go-to.html&quot;&gt;You words&lt;/a&gt;&lt;/li&gt; 格式添加，可以填写多个'));
    $form->addInput($footlink);
    
	

}



/**
 * 解析内容以实现附件加速
 * @access public
 * @param string $content 文章正文
 * @param Widget_Abstract_Contents $obj
 */
function parseContent($obj) {
    $options = Typecho_Widget::widget('Widget_Options');
    if (!empty($options->src_add) && !empty($options->cdn_add)) {
        $obj->content = str_ireplace($options->src_add, $options->cdn_add, $obj->content);
    }
    echo trim($obj->content);
}


/*文章阅读次数统计*/
function get_post_view($archive) {
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $views = Typecho_Cookie::get('extend_contents_views');
        if (empty($views)) {
            $views = array();
        } else {
            $views = explode(',', $views);
        }
        if (!in_array($cid, $views)) {
            $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
            array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
            
        }
    }
    echo $row['views'];
}



//缩略图调用
function showThumb($obj,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $attach = $obj->attachments(1)->attachment; 
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;   //附件是图片 输出附件
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];  //文章内容中抓到了图片 输出链接
    }
    $options = Typecho_Widget::widget('Widget_Options');
    $thumb = empty($thumb) ? $options->themeUrl.'/images/thumb'.rand(0, 3).'.jpg' : $thumb;
	
    if($link){
        return $thumb;
    }
	else{
		$thumb='<img src="'.$thumb.'">';
		return $thumb;
	}
	
}