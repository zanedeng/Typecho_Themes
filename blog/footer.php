<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    <footer class='text-center'>
        <div CLASS='container'>
            <!-- Footer -->
            <a HREF='/'><h3><?php $this->options->title(); ?></h3></a>
            <!-- Footer Social Links-->
            <div CLASS='social'>
                <a HREF='<?php echo empty($this->options->socialgithub) ? '#0' : $this->options->socialgithub ?>'><span class="iconfont">&#xe605;</span></a>
                <a HREF='<?php echo empty($this->options->socialgitee) ? '#0' : $this->options->socialgitee ?>'><span class="iconfont">&#xe604;</span></a>
                <a HREF='<?php echo empty($this->options->socialcodepen) ? '#0' : $this->options->socialcodepen ?>'><span class="iconfont">&#xe606;</span></a>
            </div>
            <p>Copyright &#169; 2020 zane.</p>
        </div>
    </footer>

    <script src='<?php $this->options->themeUrl(); ?>js/bootstrap-4.0.0.min.js'></script>
    <script src='<?php $this->options->themeUrl(); ?>js/jquery.stellar-0.6.2.js'></script>
    <script language='javascript' type='text/javascript'>
    //<![CDATA[
        /*-------------------------------------------*/
        (function(e){"use strict";var t="ScrollIt",n="1.0.3";var r={upKey:38,downKey:40,easing:"linear",scrollTime:600,activeClass:"active",onPageChange:null,topOffset:0};e.scrollIt=function(t){var n=e.extend(r,t),i=0,s=e("[data-scroll-index]:last").attr("data-scroll-index");var o=function(t){if(t<0||t>s)return;var r=e("[data-scroll-index="+t+"]").offset().top+n.topOffset+1;e("html,body").animate({scrollTop:r,easing:n.easing},n.scrollTime)};var u=function(t){var n=e(t.target).closest("[data-scroll-nav]").attr("data-scroll-nav")||e(t.target).closest("[data-scroll-goto]").attr("data-scroll-goto");o(parseInt(n))};var a=function(t){var r=t.which;if(e("html,body").is(":animated")&&(r==n.upKey||r==n.downKey)){return false}if(r==n.upKey&&i>0){o(parseInt(i)-1);return false}else if(r==n.downKey&&i<s){o(parseInt(i)+1);return false}return true};var f=function(t){if(n.onPageChange&&t&&i!=t)n.onPageChange(t);i=t;e("[data-scroll-nav]").removeClass(n.activeClass);e("[data-scroll-nav="+t+"]").addClass(n.activeClass)};var l=function(){var t=e(window).scrollTop();var r=e("[data-scroll-index]").filter(function(r,i){return t>=e(i).offset().top+n.topOffset&&t<e(i).offset().top+n.topOffset+e(i).outerHeight()});var i=r.first().attr("data-scroll-index");f(i)};e(window).on("scroll",l).scroll();e(window).on("keydown",a);e("body").on("click","[data-scroll-nav], [data-scroll-goto]",function(e){e.preventDefault();u(e)})}})(jQuery)

        /*-------------------------------------------*/
        jQuery(document).ready(function($){
            //set animation timing
            var animationDelay = 2500,
                //loading bar effect
                barAnimationDelay = 3800,
                barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
                //letters effect
                lettersDelay = 50,
                //type effect
                typeLettersDelay = 150,
                selectionDuration = 500,
                typeAnimationDelay = selectionDuration + 800,
                //clip effect 
                revealDuration = 600,
                revealAnimationDelay = 1500;
            
            initHeadline();
            

            function initHeadline() {
                //insert <i> element for each letter of a changing word
                singleLetters($('.cd-headline.letters').find('b'));
                //initialise headline animation
                animateHeadline($('.cd-headline'));
            }

            function singleLetters($words) {
                $words.each(function(){
                    var word = $(this),
                        letters = word.text().split(''),
                        selected = word.hasClass('is-visible');
                    for (i in letters) {
                        if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
                        letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
                    }
                    var newLetters = letters.join('');
                    word.html(newLetters).css('opacity', 1);
                });
            }

            function animateHeadline($headlines) {
                var duration = animationDelay;
                $headlines.each(function(){
                    var headline = $(this);
                    
                    if(headline.hasClass('loading-bar')) {
                        duration = barAnimationDelay;
                        setTimeout(function(){ headline.find('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
                    } else if (headline.hasClass('clip')){
                        var spanWrapper = headline.find('.cd-words-wrapper'),
                            newWidth = spanWrapper.width() + 10
                        spanWrapper.css('width', newWidth);
                    } else if (!headline.hasClass('type') ) {
                        //assign to .cd-words-wrapper the width of its longest word
                        var words = headline.find('.cd-words-wrapper b'),
                            width = 0;
                        words.each(function(){
                            var wordWidth = $(this).width();
                            if (wordWidth > width) width = wordWidth;
                        });
                        headline.find('.cd-words-wrapper').css('width', width);
                    };

                    //trigger animation
                    setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
                });
            }

            function hideWord($word) {
                var nextWord = takeNext($word);
                
                if($word.parents('.cd-headline').hasClass('type')) {
                    var parentSpan = $word.parent('.cd-words-wrapper');
                    parentSpan.addClass('selected').removeClass('waiting');	
                    setTimeout(function(){ 
                        parentSpan.removeClass('selected'); 
                        $word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
                    }, selectionDuration);
                    setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
                
                } else if($word.parents('.cd-headline').hasClass('letters')) {
                    var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
                    hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
                    showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

                }  else if($word.parents('.cd-headline').hasClass('clip')) {
                    $word.parents('.cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
                        switchWord($word, nextWord);
                        showWord(nextWord);
                    });

                } else if ($word.parents('.cd-headline').hasClass('loading-bar')){
                    $word.parents('.cd-words-wrapper').removeClass('is-loading');
                    switchWord($word, nextWord);
                    setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
                    setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);

                } else {
                    switchWord($word, nextWord);
                    setTimeout(function(){ hideWord(nextWord) }, animationDelay);
                }
            }

            function showWord($word, $duration) {
                if($word.parents('.cd-headline').hasClass('type')) {
                    showLetter($word.find('i').eq(0), $word, false, $duration);
                    $word.addClass('is-visible').removeClass('is-hidden');

                }  else if($word.parents('.cd-headline').hasClass('clip')) {
                    $word.parents('.cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
                        setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
                    });
                }
            }

            function hideLetter($letter, $word, $bool, $duration) {
                $letter.removeClass('in').addClass('out');
                
                if(!$letter.is(':last-child')) {
                    setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
                } else if($bool) { 
                    setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
                }

                if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
                    var nextWord = takeNext($word);
                    switchWord($word, nextWord);
                } 
            }

            function showLetter($letter, $word, $bool, $duration) {
                $letter.addClass('in').removeClass('out');
                
                if(!$letter.is(':last-child')) { 
                    setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
                } else { 
                    if($word.parents('.cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('waiting'); }, 200);}
                    if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
                }
            }

            function takeNext($word) {
                return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
            }

            function takePrev($word) {
                return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
            }

            function switchWord($oldWord, $newWord) {
                $oldWord.removeClass('is-visible').addClass('is-hidden');
                $newWord.removeClass('is-hidden').addClass('is-visible');
            }
        });

        /*-------------------------------------------*/
    //]]>
    </script>
    <script class='java' type='text/javascript'>
      //<![CDATA[ 
      $(document).ready(function () {
        jQuery.ias();
      });
      //]]>
    </script>
    <script language='javascript' type='text/javascript'>
    //<![CDATA[
        $(function() {

            "use strict";

            var wind = $(window);

            // scrollIt
            $.scrollIt({
            upKey: 38,                // key code to navigate to the next section
            downKey: 40,              // key code to navigate to the previous section
            easing: 'swing',          // the easing function for animation
            scrollTime: 600,          // how long (in ms) the animation takes
            activeClass: 'active',    // class given to the active nav element
            onPageChange: null,       // function(pageIndex) that is called when page is changed
            topOffset: -80            // offste (in px) for fixed top navigation
            });

            // navbar scrolling background
            wind.on("scroll",function () {
                var bodyScroll = wind.scrollTop(),
                    navbar = $(".navbar")

                if(bodyScroll > 100){

                    navbar.addClass("nav-scroll");

                }else{

                    navbar.removeClass("nav-scroll");
                }
            });


            // close navbar-collapse when a  clicked
            $(".navbar-nav a").on('click', function () {
                $(".navbar-collapse").removeClass("show");
            });


            // progress bar
            wind.on('scroll', function () {
                $(".skill-progress .progres").each(function () {
                    var bottom_of_object = 
                    $(this).offset().top + $(this).outerHeight();
                    var bottom_of_window = 
                    $(window).scrollTop() + $(window).height();
                    var myVal = $(this).attr('data-value');
                    if(bottom_of_window > bottom_of_object) {
                        $(this).css({
                        width : myVal
                        });
                    }
                });
            });


            // sections background image from data background
            var pageSection = $(".bg-img, section");
            pageSection.each(function(indx){
                
                if ($(this).attr("data-background")){
                    $(this).css("background-image", "url(" + $(this).data("background") + ")");
                }
            });

        });


        // === window When Loading === //

        $(window).on("load",function (){

            var wind = $(window);

            // Preloader
            $(".loading").fadeOut(500);


            // stellar
            wind.stellar();

        });
    //]]>
    </script>
    <?php $this->footer(); ?>
</body>
</html>