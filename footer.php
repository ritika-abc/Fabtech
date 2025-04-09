<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Hood Brother’s
                </h5>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-6 my-2">
                        <input type="text" class="form-control name" value="" placeholder="Enter Your Name" />
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <input type="number" class="form-control number" value="" placeholder="Enter Your Number" />
                    </div>
                    <div class="col-12  my-2">
                        <input type="email" class="form-control email" value="" placeholder="Enter Your Email" />
                    </div>



                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="go()" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    function contact() {
        var na = document.querySelector(".name").value;
        var em = document.querySelector(".email").value;
        var phone = document.querySelector(".phone").value;
        var mes = document.querySelector(".message").value;
        var url1 = "https://wa.me/917812887113?text=" +
            "Name: " +
            na + " " +
            "Email: " +
            em + " " +
            "Phone :" + phone +
            "Message :" + mes;
        window.open(url1, "_blank").focus();
    }
</script>

<script>
    function go() {
        var name = document.querySelector(".name").value;
        var email = document.querySelector(".email").value;
        var number = document.querySelector(".number").value;
        var url = "https://wa.me/917812887113?text=" +
            "Name: " +
            name + " " +
            "Number: " +
            number + " " +
            "Email :" + email;
        window.open(url, "_blank").focus();
    }
</script>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="image/logo/1.png" alt=""></a>
                        </div>
                        <a href="about.php">
                        <p>Welcome to Hood Brother’s – your trusted partner in high-quality t-shirt supply and
                        export! Based in Tamil Nadu, India, we are a passionate and forward-thinking company ...</p>
                        </a>

                    </div>
                </div>
                <div class="col-lg-2   col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Pages</h6>
                        <ul>
                            <li><a href="#">✔️ Home</a></li>
                            <li><a href="#">✔️ About Us</a></li>
                            <li><a href="#">✔️ Contact Us</a></li>
                            <li><a href="#">✔️ Services</a></li>
                            <li><a href="#">✔️ Products</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Address</h6>
                        <p class="text-white"> Velur ,
                            Paramathi-velur,
                            Tamil nadu,
                            India-638182
                        </p>
                        <ul>                       
                            <li><a href="tel:+917812887113" class="text-danger">📞 +91 7812887113</a></li>
                            <li><a href="mailto:hoodbrthrs@gmail.com" class="text-danger">📧 hoodbrthrs@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3   col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Our Location</h6>
                        <div class="footer__newslatter">
                            <iframe class="rounded shadow-lg"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4013074.29019782!2d75.64876363845956!3d10.809943625452718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0x559475cc463361f0!2sTamil%20Nadu!5e0!3m2!1sen!2sin!4v1737702269132!5m2!1sen!2sin"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <a class="rounded shadow-lg mt-3" href="https://web2export.com" target="_blank"><img
                                    src="image/logo/web2export.jpg" height="70px" width="200px" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved <a href="#" target="_blank">👕 Hood Brother’s </a> | This Website is made
                            by <a href="https://web2export.com" target="_blank">web2export.com</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

     

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>