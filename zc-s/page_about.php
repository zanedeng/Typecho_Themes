<?php
/**
 * 关于页面
 *
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url('<?php $this->options->themeUrl(); ?>images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
            <div class="col-md-9 ftco-animate pb-5 mb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">首页 <i class="fa fa-chevron-right"></i></a></span> <span>关于我们 </span></p>
            </div>
        </div>
    </div>
</section>


<!-- about us -->
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center no-gutters">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<h2 class="mb-2">关于我们</h2>
			</div>
		</div>
		<div class="row wrap-about my-5">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 order-md-last ftco-animate d-flex">
						<div class="img w-100" style="background-image: url(<?php $this->options->themeUrl(); ?>images/about.jpg);"></div>
					</div>
					<div class="col-md-6 ftco-animate">
						<div class="text text-md-right">
							<h3>欢迎来到筑宸空间</h3>
							<p>创立于2016年，由一群挚爱并投身设计行业十几年，充满创新激情，并拥有众多已建成项目实战经验的精英设计师团队组成。公司的核心骨干来自于梁志天设计、CCD、高文安等国内外知名设计公司及管理机构，曾参与主持全国数百个项目。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="text">
					<p>目前主要经营两大版块：效果图表现、室内空间设计，现已为国内多家知名设计公司及品牌发展商提供优质的设计服务工作，其中包括梁志天设计、奥迅设计、陈文栋设计、富力地产、保利地产、美地地产、新天地产，源达集团等。</p>
					<p><a href="#" class="btn btn-primary">查看所有项目</a></p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="services-2 d-flex ftco-animate">
					<span>01</span>
					<div class="text">
						<h3>效果图表现</h3>
						<p>3D效果图和施工图深化设计，成为行业标杆。</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="services-2 d-flex ftco-animate">
					<span>02</span>
					<div class="text">
						<h3>室内空间设计</h3>
						<p>项目涵盖住宅、样板房、销售中心、精装修交楼标准、会所、办公室、商场、商店、酒店、餐厅及酒吧等。</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end about us -->

<?php $this->need('footer.php'); ?>