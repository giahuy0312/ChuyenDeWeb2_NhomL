<!-- Footer -->
<div class="tm-footer">

    <!-- Instagram Photos -->
    <ul id="instafeed" class="tm-instaphotos"></ul>
    <!--// Instagram Photos -->

    <!-- Footer Top Area -->
    <div class="tm-footer-toparea tm-padding-section">
        <div class="container">
            <div class="widgets widgets-footer row">

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-info">
                        <a class="widget-info-logo" href="{{ url('index') }}"><img src="{{ asset('images/logo.png') }}"
                                alt="logo"></a>
                        <ul>
                            <li><b>Address :</b>72 Nguyen Cu Trinh, Pham Ngu Lao Ward, District 1</li>
                            <li><b>Phone :</b><a href="tel:123456789">1900 111 999</a></li>
                            <li><b>Email :</b><a href="mailto:info@example.com">luxury@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <!--// Single Widget -->

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h6 class="widget-title">Về chúng tôi</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Câu chuyện luxury</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                        </ul>
                    </div>
                </div>
                <!--// Single Widget -->

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-quicklinks">
                        <h6 class="widget-title">Tài khoản của tôi</h6>
                        <ul>
                            <li><a href="#">Tài khoản của tôi</a></li>
                            <li><a href="#">Danh sách yêu thích</a></li>
                            <li><a href="#">Bản tin</a></li>
                            <li><a href="#">Thủ tục thanh toán</a></li>
                        </ul>
                    </div>
                </div>
                <!--// Single Widget -->

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-newsletter">
                        <h6 class="widget-title">Phản hồi về chúng tôi</h6>
                        <form id="tm-mailchimp-form" class="widget-newsletter-form">
                            <input id="mc-email" type="text" placeholder="Nhap email ngay">
                            <button id="mc-submit" type="submit" class="tm-button">Gửi
                                <b></b></button>
                        </form>
                        <!-- Mailchimp Alerts -->
                        <div class="tm-mailchimp-alerts">
                            <div class="tm-mailchimp-submitting"></div>
                            <div class="mailchimp-success"></div>
                            <div class="tm-mailchimp-error"></div>
                        </div>
                        <!--// Mailchimp Alerts -->
                    </div>
                </div>
                <!--// Single Widget -->

            </div>
        </div>
    </div>
    <!--// Footer Top Area -->

    <!-- Footer Bottom Area -->
    <div class="tm-footer-bottomarea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <p class="tm-footer-copyright">©
                        2023. Designed by <a href="#">Nhóm L</a></p>
                </div>
                <div class="col-md-5">
                    <div class="tm-footer-payment">
                        <img src="{{ asset('images/payment-methods.png') }}" alt="payment methods">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Footer Bottom Area -->

</div>
<!--// Footer -->
