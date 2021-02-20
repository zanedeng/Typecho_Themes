<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="ftco-footer ftco-section">
	<?php if ($this->is('index')) : ?>
	
	<?php else: ?>
	<div class="degree-footer-top"></div>
	<?php endif; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>版权所有 <script>document.write(new Date().getFullYear());</script>&copy;广州筑宸数码科技有限公司 All rights reserved</p>
				<p>This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://zanejs.com" target="_blank">zane</a></p>
				<p><a href="http://beian.miit.gov.cn" target="_blank">粤ICP备2020130837号</a></p>
			</div>
		</div>
	</footer>
	
	

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	<script src="<?php $this->options->themeUrl(); ?>js/jquery.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/jquery-migrate-3.0.1.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/popper.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/bootstrap.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/jquery.easing.1.3.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/jquery.waypoints.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/jquery.stellar.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/owl.carousel.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/jquery.animateNumber.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/scrollax.min.js"></script>
	<script src="<?php $this->options->themeUrl(); ?>js/main.js"></script>
	<?php $this->footer(); ?>
</body>
</html>
