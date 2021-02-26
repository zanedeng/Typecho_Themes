<?php
/**
 * 该主题是使用Bootstrap构建的博客，包含作品集、业务、个人单页的多用途模板。模板设计平坦而简单，具有鲜艳的色彩和专门创建的自定义模块，可轻松创建内容。
 * 
 * @package zane-blog
 * @author zane.deng
 * @version 1.0
 * @link https://github.com/zanedeng/Typecho_Themes
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');
?>

    <!-- ====== About ====== -->
    <section class='about' data-scroll-index='1' id='about'>
        <div CLASS='container'>
            <div CLASS='row'>
                <div CLASS='col-lg-4'>
                    <div CLASS='skills'>
                        <div CLASS='section-head'>
                            <h4>ABOUT ME</h4>
                        </div>
                        <!-- Our Skills Section -->
                        <?php if(empty($this->options->skills)): ?>
                        <div CLASS='skill-item mb-30'>
                            <!-- Our Skills Title -->
                            <h6>Web Design</h6>
                            <div CLASS='skill-progress'>
                                <!-- Our Skills Label -->
                                <div CLASS='progres' data-value='90%'></div>
                            </div>
                        </div>
                        <div CLASS='skill-item mb-30'>
                            <h6>Branding</h6>
                            <div CLASS='skill-progress'>
                                <div CLASS='progres' data-value='75%'></div>
                            </div>
                        </div>
                        <div CLASS='skill-item'>
                            <h6>Development</h6>
                            <div CLASS='skill-progress'>
                                <div CLASS='progres' data-value='80%'></div>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php 
                            $skills = json_decode($this->options->skills, true); 
                            foreach ($skills as $value) {
                        ?>
                        <div CLASS='skill-item mb-30'>
                            <h6><?php echo $value[0] ?></h6>
                            <div CLASS='skill-progress'>
                                <div CLASS='progres' data-value='<?php echo $value[1] ?>'></div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(empty($this->options->profile)): ?>
                <div CLASS='col-lg-4 hero-img bg-img' data-background='<?php $this->options->themeUrl('images/profile.jpg'); ?>'></div>
                <?php else: ?>
                <div CLASS='col-lg-4 hero-img bg-img' data-background='<?php echo $this->options->profile; ?>'></div>
                <?php endif; ?>
                <div CLASS='col-lg-4'>
                    <div CLASS='content'>
                        <?php if (empty($this->options->aboutText)): ?>
                            <h6>我的档案</h6>
                            <h4>邓宗恒</h4>
                            <h5>资深前端开发工程师</h5>
                            <p CLASS='mb-10'>艺术设计类专业毕业，有很好的美术素养。</p>
                            <p>爱编码</p>
                        <?php else: ?>
                        <?php echo $this->options->aboutText ?>
                        <?php endif; ?>
                        <div CLASS='social mt-40'>
                            <span class='followMe'>关注我 :</span>
                            <!-- About Section Social Button -->
                            <a HREF='<?php echo empty($this->options->socialgithub) ? '#0' : $this->options->socialgithub ?>'><span class="iconfont">&#xe605;</span></a>
                            <a HREF='<?php echo empty($this->options->socialgitee) ? '#0' : $this->options->socialgitee ?>'><span class="iconfont">&#xe604;</span></a>
                            <a HREF='<?php echo empty($this->options->socialcodepen) ? '#0' : $this->options->socialcodepen ?>'><span class="iconfont">&#xe606;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== End About ====== -->
    <!-- ====== Services ====== -->
    <section class='services section-padding bg-dark' data-scroll-index='2' id='services'>
        <div CLASS='container'>
            <div CLASS='row'>
                <div CLASS='section-head text-center col-md-12'>
                    <h4>SERVICES</h4>
                </div>
                <?php if(empty($this->options->services)): ?>
                    <div CLASS='col-lg-4 col-md-6'>
                        <div CLASS='item mb-md50'>
                            <i CLASS='fa fa-file-audio-o'></i>
                            <h6>JS音频转换器</h6>
                            <p>免费的在线音频工具。采用HTML5和FFMPEG.JS技术，直接在浏览器转换。保护数据不会被窃取。无需等待，转换速度更快。流量开销更小。</p>
                        </div>
                    </div>
                    <div CLASS='col-lg-4 col-md-6'>
                        <div CLASS='item mb-md50'>
                            <i CLASS='fa fa-file-movie-o'></i>
                            <h6>视频转换工具</h6>
                            <p>免费，在线，安全，快速的视频转码，剪切工具。采用HTML5和FFMPEG.JS技术，直接运行在浏览器里。视频文件不上传到服务器，节省时间，节省带宽，保证视频数据不被窃取。</p>
                        </div>
                    </div>
                    <div CLASS='col-lg-4 col-md-6'>
                        <div CLASS='item mb-sm50'>
                            <i CLASS='fa fa-file-image-o'></i>
                            <h6>PNG转ICO</h6>
                            <p>一个免费的转换器。可以把你的PNG文件（也支持其他图片格式）转换成Windows ICO图标格式。ico图标格式可以用在软件中，或作为网站的图标（favicon.ico）显示在浏览器里。</p>
                        </div>
                    </div>
                <?php else: ?>
                <?php echo $this->options->services; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--====== End Services ======-->
    <div class='clr'></div>
    <!-- ====== Work ====== -->
    <section class='blog section-padding' data-scroll-index='3' id='blog'>
        <div class='container'>
            <div CLASS='section-head text-center col-lg-8 offset-lg-2 col-md-10 offset-md-1'>
                <h4>OUR BLOG</h4>
            </div>
            <div class='work-inner'>
                <!-- START SINGLE WORK DESIGN AREA -->
                <div class='outer-wrapper'>
                    <div class='main-wrapper'>
                        <div class='content section' id='content'>
                            <div class='widget Blog' data-version='1' id='Blog1'>
                                <div class='blog-posts hfeed row work-posts grid'>
                                    <!--Can't find substitution for tag [defaultAdStart]-->
                                    <?php if($this->have()):?>
                                        <?php while($this->next()): ?>
                                    <div class='date-outer col-md-4 col-sm-4'>
                                        <div class='sjps entry-content'>
                                            <div class="post-body entry-content" itemprop="description articleBody">
                                                <div class="entry-title">
                                                    <h3 itemprop="name" style="display:none;">
                                                        <a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
                                                    </h3>
                                                </div>
                                                <div class="body-post">
                                                    <span>
                                                        <div class="item">
                                                            <div class="post-img position-re o-hidden">
                                                                <img src="<?php echo showThumb($this,true); ?>" alt="<?php $this->title(); ?>" title="<?php $this->title(); ?>">
                                                            </div>
                                                            <div class="content">
                                                                <span class="data">
                                                                    <a href="#0" class="undecro"><?php $this->author(); ?></a>
                                                                    <a href="#0" class="undecro"><?php $this->date('Y-m-d'); ?></a>
                                                                </span>
                                                                <h5>
                                                                    <a href="<?php $this->permalink(); ?>" class="undecro"><?php $this->title(26); ?></a>
                                                                </h5>
                                                                <a href="<?php $this->permalink(); ?>" class="more mt-30">
                                                                    <span>阅读全文</span>
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
                                    <?php endif; ?>
                                    <!--Can't find substitution for tag [adEnd]-->
                                </div>
                            </div>
                            <!-- /main-wrapper -->
                            <div class='clr'></div>
                            <!-- END SINGLE WORK DESIGN AREA -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->need('contact.php'); ?>
<?php $this->need('footer.php'); ?>