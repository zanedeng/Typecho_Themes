<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
		<!-- content section -->
        <section class="content-top-margin no-padding-bottom border-top wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-8 col-xs-11 text-center center-col">
                        <p class="not-found-title black-text">404!</p>
                        <p class="text-med text-uppercase letter-spacing-2">The page you were looking<br> for could not be found.</p>
                        <a class="highlight-button-dark btn btn-small no-margin-right" href="<?php $this->options ->siteUrl(); ?>">Go to home page</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-sm-8 col-xs-11 center-col">
                        <img src="<?php $this->options->themeUrl('images/404.jpg'); ?>" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- end content section -->
<?php $this->need('footer.php'); ?>