<footer class="footer footer-dark">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <img src="assets/images/Untitled-2.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                        <p>kleine online store wo man tunesischen lebensmittel bestellen. </p>

                        <div class="social-icons">
                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">3attar Store</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{ url('faq')}}" target="_blank">FAQ</a></li>
                            <li><a href="{{ url('contact')}}" target="_blank">über uns</a></li>
                            <li><a href="{{ url('login')}}" data-toggle="modal">Anmelden</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">WICHTIGE SEITEN</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{ url('agb')}}" target="_blank">AGB</a></li>
                            <li><a href="{{ url('Datenschutzerklärung')}}" target="_blank">Datenschutzerklärung</a></li>
                            <li><a href="{{ url('Impressum')}}" target="_blank">Impressum</a></li>
                            <li><a href="{{ url('Kundenumfrage')}}" target="_blank">Kundenumfrage</a></li>
                            <li><a href="{{ url('Versandarten')}}" target="_blank">Versandarten</a></li>
                            <li><a href="{{ url('Widerrufsbelehrung')}}" target="_blank">Widerrufsbelehrung</a></li>
                            <li><a href="{{ url('ZahlungMethod')}}" target="_blank">ZahlungMethod</a></li>
                        
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">KONTAK</h4><!-- End .widget-title -->

                        <ul class="widget-list">
         
                            <li><a href="#" target="_blank">+49 0000000000000</a></li>
                            <li><a href="#" target="_blank">info@3attar.de</a></li>
                            <li><a href="{{ url('/')}}" target="_blank">https://3attar.de/</a></li>
                            <li><a href="#" target="_blank">Mo- Do: 8:00 – 17:00 Uhr <br>Fr: 08:00 – 13:00 Uhr
                                </a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © {{ date('Y') }}  3attar. Alle Rechte vorbehalten Datenschutzerklärung.</p><!-- End .footer-copyright -->
            <figure class="footer-payments">
                <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
            </figure><!-- End .footer-payments -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->