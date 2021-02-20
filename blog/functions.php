<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


/* 后台设置 */
function themeConfig($form) {

	echo '<p style="font-size:14px;" id="use-intro"><span style="display: block;margin-bottom: 10px;    margin-top: 10px;font-size: 16px;">感谢您使用 zane 主题</span></p>';
	//Favicon
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', NULL, NULL, _t('Favicon 地址'), _t('博客 Favicon 的地址, 默认则使用主题自带'));
    $form->addInput($favicon);
	//Logo
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点Logo地址'), _t('Logo图片URL地址, 推荐250x60, 默认则使用主题自带'));
	$form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	//bgUrl
    $bgUrl = new Typecho_Widget_Helper_Form_Element_Text('bgUrl', NULL, NULL, _t('背景地址'), _t('背景图片URL地址, 默认则使用主题自带'));
    $form->addInput($bgUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    //welcome
    $welcome = new Typecho_Widget_Helper_Form_Element_Text('welcome', NULL, NULL, _t('欢迎辞'));
    $form->addInput($welcome);
    //header Text
    $headerText = new Typecho_Widget_Helper_Form_Element_Textarea('headerText', NULL, NULL, _t('标题文字'), _t('请按 &lt;b&gt;You words&lt;/b&gt; 格式添加，设置默认显示可以加样式 CLASS="is-visible", 可以填写多个<br/>默认值如下:<br/>&lt;b CLASS=&#x27;is-visible&#x27;&gt;Zane&lt;/b&gt;<br/>&lt;b&gt;Web Designer&lt;/b&gt;<br />&lt;b&gt;Photography&lt;/b&gt;'));
    $form->addInput($headerText);
    //skills
    $skills = new Typecho_Widget_Helper_Form_Element_Text('skills', NULL, NULL, _t('技能'), _t('请按[{&quot;技能&quot;:&quot;熟练度&quot;}]格式添加<br/>默认值如下:<br/>[[&quot;Web Development&quot;,&quot;90%&quot;],[&quot;Game Development&quot;,&quot;90%&quot;]]'));
    $form->addInput($skills);
    //profile
    $profile = new Typecho_Widget_Helper_Form_Element_Text('profile', NULL, NULL, _t('形象'), _t('形象图片URL地址, 推荐600x690, 默认则使用主题自带'));
    $form->addInput($profile->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    //about Text
    $aboutText = new Typecho_Widget_Helper_Form_Element_Textarea('aboutText', NULL, NULL, _t('关于我'), _t('支持HTML格式添加, 默认值如下:<br/>&lt;h6&gt;Who am i&lt;/h6&gt;<br/>&lt;h4&gt;Zane Deng.&lt;/h4&gt;<br/>&lt;h5&gt;Professional Web Designer&lt;/h5&gt;<br/>&lt;p CLASS=&#x27;mb-10&#x27;&gt;Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora.&lt;/p&gt;<br/>&lt;p&gt;Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent metus metus ullamcorper vel tincidunt sed class aptent taciti sociosqu ad litora .&lt;/p&gt;'));
    $form->addInput($aboutText);
    //Services
    $services = new Typecho_Widget_Helper_Form_Element_Textarea('services', NULL, NULL, _t('提供服务'), _t('支持HTML格式添加, 默认值如下:<br/>&lt;div CLASS=&#x27;col-lg-3 col-md-6&#x27;&gt;<br/>                    &lt;div CLASS=&#x27;item mb-md50&#x27;&gt;<br/>                        &lt;!-- Services Section Icon --&gt;<br/>                        &lt;i CLASS=&#x27;fa fa-pencil&#x27;&gt;&lt;/i&gt;<br/>                        &lt;!-- Services Section Title --&gt;<br/>                        &lt;h6&gt;Web Design&lt;/h6&gt;<br/>                        &lt;!-- Services Section Content --&gt;<br/>                        &lt;p&gt;Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat&lt;/p&gt;<br/>                    &lt;/div&gt;<br/>                &lt;/div&gt;<br/>                &lt;div CLASS=&#x27;col-lg-3 col-md-6&#x27;&gt;<br/>                    &lt;div CLASS=&#x27;item mb-md50&#x27;&gt;<br/>                        &lt;i CLASS=&#x27;fa fa-codepen&#x27;&gt;&lt;/i&gt;<br/>                        &lt;h6&gt;Development&lt;/h6&gt;<br/>                        &lt;p&gt;Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat&lt;/p&gt;<br/>                    &lt;/div&gt;<br/>                &lt;/div&gt;<br/>                &lt;div CLASS=&#x27;col-lg-3 col-md-6&#x27;&gt;<br/>                    &lt;div CLASS=&#x27;item mb-sm50&#x27;&gt;<br/>                        &lt;i CLASS=&#x27;fa fa-send-o&#x27;&gt;&lt;/i&gt;<br/>                        &lt;h6&gt;Branding&lt;/h6&gt;<br/>                        &lt;p&gt;Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat&lt;/p&gt;<br/>                    &lt;/div&gt;<br/>                &lt;/div&gt;<br/>                &lt;div CLASS=&#x27;col-lg-3 col-md-6&#x27;&gt;<br/>                    &lt;div CLASS=&#x27;item&#x27;&gt;<br/>                        &lt;i CLASS=&#x27;fa fa-area-chart&#x27;&gt;&lt;/i&gt;<br/>                        &lt;h6&gt;Marketing&lt;/h6&gt;<br/>                        &lt;p&gt;Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat&lt;/p&gt;<br/>                    &lt;/div&gt;<br/>                &lt;/div&gt;'));
    $form->addInput($services);
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
    
	$footlink = new Typecho_Widget_Helper_Form_Element_Textarea('footlink', null, null, _t('页脚链接'), _t('页脚处链接列表，可以用来放置友情链接，留空时为页面列表<br/>请按 &lt;li&gt;&lt;a href=&quot;https://go-to.html&quot;&gt;You words&lt;/a&gt;&lt;/li&gt; 格式添加，可以填写多个'));
    $form->addInput($footlink);
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
    $thumb = empty($thumb) ? $options->themeUrl.'/images/thumb.jpg' : $thumb;
	
    if($link){
        return $thumb;
    }
	else{
		$thumb='<img src="'.$thumb.'">';
		return $thumb;
	}
	
}