<footer id="footer">

    <div id="newsletter-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
                    <h3>Sing up to receive the latest fashion news</h3>
                    <form id="register-newsletter">
                        <input type="text" name="newsletter" required="" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-custom-3" value="SIGN UP">
                    </form>
                </div><!--End  .col-md-6 -->

            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End #newsletter-container -->

    <div id="inner-footer">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3>MY ACCOUNT</h3>
                    <ul class="links">
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Personal information</a></li>
                        <li><a href="#">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Your Vouchers</a></li>
                    </ul>
                </div><!-- End .widget -->

                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3>INFORMATION</h3>
                    <ul class="links">
                        <li><a href="#">New products</a></li>
                        <li><a href="#">Top sellers</a></li>
                        <li><a href="#">Specials</a></li>
                        <li><a href="#">Manufacturers</a></li>
                        <li><a href="#">Suppliers</a></li>
                        <li><a href="#">Our stores</a></li>
                    </ul>
                </div><!-- End .widget -->

                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3>MY ACCOUNT</h3>

                    <div class="twitter_feed_widget"></div><!-- End .twitter_feed_widget -->
                </div><!-- End .widget -->

                <div class="clearfix visible-sm"></div>

                <div class="col-md-3 col-sm-12 col-xs-12 widget">
                    <h3>FACEBOOK LIKE BOX</h3>

                    <div class="facebook-likebox">
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"></iframe>
                    </div>


                </div><!-- End .widget -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </div><!-- End #inner-footer -->

    <div id="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                    <ul class="social-links clearfix">
                        <li><a href="#" class="social-icon icon-facebook"></a></li>
                        <li><a href="#" class="social-icon icon-twitter"></a></li>
                        <li><a href="#" class="social-icon icon-rss"></a></li>
                        <li><a href="#" class="social-icon icon-delicious"></a></li>
                        <li><a href="#" class="social-icon icon-linkedin"></a></li>
                        <li><a href="#" class="social-icon icon-flickr"></a></li>
                        <li><a href="#" class="social-icon icon-skype"></a></li>
                        <li><a href="#" class="social-icon icon-email"></a></li>
                    </ul>
                </div><!-- End .col-md-7 -->

                <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                    <p>&copy; 2014 Powered by Company&trade;. All Rights Reserved.</p>
                </div><!-- End .col-md-5 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End #footer-bottom -->

</footer><!-- End #footer -->
</div><!-- End #wrapper -->
<a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
<!-- END -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/jquery.debouncedresize.js')}}"></script>
<script src="{{asset('js/retina.min.js')}}"></script>
<script src="{{asset('js/jquery.placeholder.js')}}"></script>
<script src="{{asset('js/jquery.hoverIntent.min.js')}}"></script>
<script src="{{asset('js/twitter/jquery.tweet.min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script>
    $(function() {

        // Slider Revolution
        jQuery('#slider-rev').revolution({
            delay:5000,
            startwidth:870,
            startheight:520,
            onHoverStop:"true",
            hideThumbs:250,
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:15,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:0,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:0,
            soloArrowRightVOffset:0,
            touchenabled:"on",
            stopAtSlide:-1,
            stopAfterLoops:-1,
            dottedOverlay:"none",
            fullWidth:"on",
            spinned:"spinner4",
            shadow:0, // 1 2 3 to change shadows
            hideTimerBar: "on",
            // navigationStyle:"preview2"
        });

        /* This is fix for mobile devices position slider at the top  via absolute pos */
        var fixSliderForMobile = function () {
            var winWidth = $(window).width();

            if (winWidth <= 767 && $('#slider-rev-container').length) {
                var revSliderHeight = $('#slider-rev').height();
                console.log(revSliderHeight);
                $('.slider-position').css('padding-top', revSliderHeight);
                $('.main-content').css('position', 'static');
            } else {
                $('.slider-position').css('padding-top', 0);
                $('.main-content').css('position', 'relative');
            }
        };

        fixSliderForMobile();

        /* Resize fix positionin */
        if($.event.special.debouncedresize) {
            $(window).on('debouncedresize', function() {
                fixSliderForMobile();
            });
        } else {
            $(window).on('resize', function () {
                fixSliderForMobile();
            });
        }


    });
</script>
</body>
</html>