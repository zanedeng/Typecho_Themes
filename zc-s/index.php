<?php
/**
 * 该主题适用于室内设计行业
 * 
 * @package zc-s
 * @author zane.deng
 * @version 1.0
 * @link zanedeng.github.io
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<!-- carousel -->
<section class="hero-wrap degree-right js-fullheight">
	<div class="home-slider js-fullheight owl-carousel">
		<div class="slider-item js-fullheight" style="background-image:url(<?php $this->options->themeUrl(); ?>images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center">
					<div class="col-md-12 ftco-animate">
						<div class="absolute">
							<h4 class="number" data-number="400">0</h4>
							<p>百余个成功项目</p>
						</div>
						<div class="text">
							<h1 class="mb-4">DESIGN CONCEPT</h1>
							<p>匠心筑品质，初心致未来</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item js-fullheight" style="background-image:url(<?php $this->options->themeUrl(); ?>images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center">
					<div class="col-md-12 ftco-animate">
						<div class="absolute">
							<h4 class="number" data-number="15">0</h4>
							<p>十余年设计经验</p>
						</div>
						<div class="text">
							<h1 class="mb-4">DESIGN CONCEPT</h1>
							<p>匠心筑品质，初心致未来</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end carousel -->

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

<!-- Our Works -->
<section class="ftco-section ftco-portfolio bg-light">
	<div class="row justify-content-center no-gutters">
		<div class="col-md-12 heading-section text-center ftco-animate mb-5">
			<h2 class="mb-2">我们的作品</h2>
		</div>
	</div>

	<div class="container">
		<div class="row no-gutters pb-5">
<?php if($this->have()):?>
	<?php $index = 0; $leftFlag = true;?>
	<?php while($this->next()): ?>
		<?php $index++; ?>
		<?php if($leftFlag):?>
			<?php $leftFlag = !$leftFlag ?>
			<!-- post item -->
			<div class="col-md-12 portfolio-wrap <?php if($index == 0) echo 'mt-0'?>">
				<div class="row no-gutters align-items-center">
					<div class="col-md-5 img" style="background-image: url(<?php echo showThumb($this,true); ?>);">
						
					</div>
					<div class="col-md-7">
						<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
							<div class="px-4 px-lg-4">
								<div class="desc">
									<div class="top">
										<span class="subheading"><?php $this->category(','); ?></span>
										<h2 class="mb-2"><a href="<?php $this->permalink(); ?>"><?php $this->title(26); ?></a></h2>
									</div>
									<div class="absolute">
										<p><?php $this->excerpt(90, '...'); ?></p>
										<div class="icon d-flex align-items-center mb-4">
											<?php echo $this->author->gravatar('60', '', true); ?>
											<div class="position pl-3">
												<h4 class="mb-0"><?php $this->author(); ?></h4>
												<span><?php $this->date('Y-m-d'); ?></span>
											</div>
										</div>
										<p><a href="<?php $this->permalink(); ?>" class="custom-btn">继续阅读</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php else:?>
			<div class="col-md-12 portfolio-wrap">
				<div class="row no-gutters align-items-center">
					<div class="col-md-5 order-md-last img" style="background-image: url(<?php echo showThumb($this,true); ?>);">
						
					</div>
					<div class="col-md-7">
						<div class="text pt-5 pr-md-5 ftco-animate">
							<div class="px-4 px-lg-4">
								<div class="desc text-md-right">
									<div class="top">
										<span class="subheading"><?php $this->category(','); ?></span>
										<h2 class="mb-2"><a href="<?php $this->permalink(); ?>"><?php $this->title(26); ?></a></h2>
									</div>
									<div class="absolute">
										<p><?php $this->excerpt(90, '...'); ?></p>
										<div class="d-flex w-100">
											<div class="icon d-flex align-items-center ml-md-auto mb-4">
												<?php echo $this->author->gravatar('60', '', true); ?>
												<div class="position pl-3 text-left">
													<h4 class="mb-0"><?php $this->author(); ?></h4>
													<span><?php $this->date('Y-m-d'); ?></span>
												</div>
											</div>
										</div>
										<p><a href="<?php $this->permalink(); ?>" class="custom-btn">继续阅读</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
			<!-- end post item -->
	<?php endwhile; ?>
<?php endif; ?>
		
	</div>
	<div class="degree-left"></div>
</section>

<!-- End Our Works -->

<!-- Clients Says About Us -->
<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-3">客户对我们的评价？</h2>
			</div>
		</div>
		<div class="row ftco-animate mb-4">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<span class="fa fa-quote-left"></span>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<span class="fa fa-quote-left"></span>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<span class="fa fa-quote-left"></span>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<span class="fa fa-quote-left"></span>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="text">
								<span class="fa fa-quote-left"></span>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- End Clients Says About Us -->

<!-- Expert Team -->
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center no-gutters">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<h2 class="mb-2">专家团队</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-1.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">John <br>Wilson</h3>
							<span class="position mb-4">Web Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-2.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">Robert <br>Wills</h3>
							<span class="position mb-4">Web Developer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-3.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">Mike <br>Smith</h3>
							<span class="position mb-4">Graphic Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-4.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">Adrian <br>Henderson</h3>
							<span class="position mb-4">System Analyst</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-5.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">John <br>Wilson</h3>
							<span class="position mb-4">Web Programmer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-6.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">Robert <br>Wills</h3>
							<span class="position mb-4">Web Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-7.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">Mike <br>Smith</h3>
							<span class="position mb-4">Graphic Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch justify-content-end">
						<div class="img align-self-stretch" style="background-image: url(<?php $this->options->themeUrl(); ?>images/team-8.jpg);">
							
						</div>
					</div>
					<div class="text d-flex align-items-center pt-3">
						<div class="desc">
							<h3 class="mb-2">Adrian <br>Henderson</h3>
							<span class="position mb-4">SEO</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="degree-left-footer"></div>
</section>

<!-- End Expert Team -->
<?php $this->need('footer.php'); ?>