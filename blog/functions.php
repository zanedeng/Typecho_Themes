<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


/* 后台设置 */
function themeConfig($form) {

    $options = Typecho_Widget::widget('Widget_Options');
    echo '<link href="'.$options->themeUrl.'/css/prism.css" rel="stylesheet" />';
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
    $headerText = new Typecho_Widget_Helper_Form_Element_Textarea(
        'headerText', 
        NULL, 
        NULL, 
        _t('标题文字'), 
        _t('请按 &lt;b&gt;You words&lt;/b&gt; 格式添加，设置默认显示可以加样式 CLASS="is-visible", 可以填写多个<br/>
        默认值如下:<br/>
        <pre><code class="language-html">
&lt;span class=&quot;blc&quot;&gt;我是&lt;/span&gt;
&lt;span class=&quot;cd-words-wrapper&quot;&gt;
    &lt;b class=&quot;is-visible&quot;&gt;赞恩&lt;/b&gt;
    &lt;b&gt;一名前端工程师&lt;/b&gt;
    &lt;b&gt;一名游戏开发者&lt;/b&gt;
&lt;/span&gt;
        </code></pre>')
    );
    $form->addInput($headerText);
    //skills
    $skills = new Typecho_Widget_Helper_Form_Element_Text(
        'skills', 
        NULL, 
        NULL, 
        _t('技能'), 
        _t('请按[{&quot;技能&quot;:&quot;熟练度&quot;}]格式添加<br/>
        默认值如下:<br/>
        <pre><code class="language-javascript">
[[&quot;Web Development&quot;,&quot;90%&quot;],[&quot;Game Development&quot;,&quot;90%&quot;]]
        </code></pre>')
    );
    $form->addInput($skills);
    //profile
    $profile = new Typecho_Widget_Helper_Form_Element_Text('profile', NULL, NULL, _t('形象'), _t('形象图片URL地址, 推荐600x690, 默认则使用主题自带'));
    $form->addInput($profile->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
    //about Text
    $aboutText = new Typecho_Widget_Helper_Form_Element_Textarea(
        'aboutText', 
        NULL, 
        NULL, 
        _t('关于我'), 
        _t('支持HTML格式添加, 默认值如下:<br/>
        <pre><code class="language-html">
&lt;h6&gt;我的档案&lt;/h6&gt;
&lt;h4&gt;邓宗恒&lt;/h4&gt;
&lt;h5&gt;资深前端开发工程师&lt;/h5&gt;
&lt;p CLASS=&#39;mb-10&#39;&gt;艺术设计类专业毕业，有很好的美术素养。&lt;/p&gt;
&lt;p&gt;爱编码&lt;/p&gt;
        </code></pre>')
    );
    $form->addInput($aboutText);
    //Services
    $services = new Typecho_Widget_Helper_Form_Element_Textarea(
        'services', 
        NULL, 
        NULL, 
        _t('提供服务'), 
        _t('支持HTML格式添加, 默认值如下:<br/>
        <pre><code class="language-html">
&lt;div CLASS=&#39;col-lg-4 col-md-6&#39;&gt;
    &lt;div CLASS=&#39;item mb-md50&#39;&gt;
        &lt;i CLASS=&#39;fa fa-file-audio-o&#39;&gt;&lt;/i&gt;
        &lt;h6&gt;JS音频转换器&lt;/h6&gt;
        &lt;p&gt;免费的在线音频工具。采用HTML5和FFMPEG.JS技术，直接在浏览器转换。保护数据不会被窃取。无需等待，转换速度更快。流量开销更小。&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div CLASS=&#39;col-lg-4 col-md-6&#39;&gt;
    &lt;div CLASS=&#39;item mb-md50&#39;&gt;
        &lt;i CLASS=&#39;fa fa-file-movie-o&#39;&gt;&lt;/i&gt;
        &lt;h6&gt;视频转换工具&lt;/h6&gt;
        &lt;p&gt;免费，在线，安全，快速的视频转码，剪切工具。采用HTML5和FFMPEG.JS技术，直接运行在浏览器里。视频文件不上传到服务器，节省时间，节省带宽，保证视频数据不被窃取。&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div CLASS=&#39;col-lg-4 col-md-6&#39;&gt;
    &lt;div CLASS=&#39;item mb-sm50&#39;&gt;
        &lt;i CLASS=&#39;fa fa-file-image-o&#39;&gt;&lt;/i&gt;
        &lt;h6&gt;PNG转ICO&lt;/h6&gt;
        &lt;p&gt;一个免费的转换器。可以把你的PNG文件（也支持其他图片格式）转换成Windows ICO图标格式。ico图标格式可以用在软件中，或作为网站的图标（favicon.ico）显示在浏览器里。&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
        </code></pre>')
    );
    $form->addInput($services);
    //社交
    $socialgithub = new Typecho_Widget_Helper_Form_Element_Text('socialgithub', NULL, NULL, _t('<p style="color:green;">↓↓↓以下为页脚社交图标部分，框内留空则不输出图标</p>输入Github链接'), _t('在这里输入Github主页链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialgithub->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));

	$socialgitee = new Typecho_Widget_Helper_Form_Element_Text('socialgitee', NULL, NULL, _t('输入码云链接'), _t('在这里输入码云主页链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialgitee->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

    $socialcodepen = new Typecho_Widget_Helper_Form_Element_Text('socialcodepen', NULL, NULL, _t('输入CodePen链接'), _t('在这里输入CodePen主页链接,支持 http:// 或 https:// 或 //<p style="color:green;"><b>↑↑↑以上为页脚社交图标部分，框内留空则不输出图标</b></p>'));
    $form->addInput($socialcodepen->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));

	$footlink = new Typecho_Widget_Helper_Form_Element_Textarea('footlink', null, null, _t('页脚链接'), _t('页脚处链接列表，可以用来放置友情链接，留空时为页面列表<br/>请按 &lt;li&gt;&lt;a href=&quot;https://go-to.html&quot;&gt;You words&lt;/a&gt;&lt;/li&gt; 格式添加，可以填写多个'));
    $form->addInput($footlink);

    echo '<script src="'.$options->themeUrl.'/js/prism.js"></script>';
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
    if (isset($obj->fields->thumbUrl)) {
        $thumb = $obj->fields->thumbUrl;
    }elseif (isset($attach->isImage) && $attach->isImage == 1){
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