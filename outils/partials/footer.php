    <footer class="rainbow-footer footer-style-default footer-style-3 position-relative">
        <div class="chatenai-separator has-position-top">
            <!-- <img class="w-100" src="<?= $site_url; ?>assets/images/separator/separator-top.svg" alt=""> -->
        </div>
        <div class="footer-top">
            <div class="container">
                <div class="row justify-content-center mb--30">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="rainbow-footer-widget text-center">
                            <div class="logo">
                                <a href="<?= $site_url; ?>">
                                    <img class="logo-light" src="<?= $site_url; ?>assets/images/logo/logo.png" alt="Logo Albert">
                                    <img class="logo-dark" src="<?= $site_url; ?>assets/images/logo/logo-dark.png" alt="Logo Albert">
                                </a>
                            </div>
                            <p class="b1 text-center mt--20 mb--0">Service client spécialisé en location courte durée</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById("sendButtonCaptcha").disabled = true;

        function enableBtn() {
            document.getElementById("sendButtonCaptcha").disabled = false;
        }
    </script>