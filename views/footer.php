<div class="footer-outline">
            <div class="footer">
                <div class="footer-content">
                    <div class="footer-section about">
                        <h3>About Us</h3>
                        <p>Bản quyền © 2024, Công Ty TNHH Âm Nhạc Swee Lee.
                            Giấy chứng nhận đăng ký kinh doanh số 0313059273 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp ngày 19/12/2014. Địa chỉ đăng ký kinh doanh: 44, Đường Số 2, Khu Dân Cư Him Lam, Phường Tân Hưng, Quận 7, TP.HCM.</p>
                    </div>
                    <div class="footer-section contact">
                        <h3>Contact Us</h3>
                        <p>Email: SweeLee@company.com</p>
                        <p>Phone: +65 1234 5678</p>
                    </div>
                    <div class="footer-section social">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 SweeLee. All rights reserved.</p>
                </div>
            </div>
        </div>

    </div>
    <script>
    let slideIndex = 0;
    showSlides();

    function plusSlides(n) {
        slideIndex += n;
        showSlides();
    }

    function currentSlide(n) {
        slideIndex = n - 1;
        showSlides();
    }

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");

        if (slideIndex >= slides.length) {
            slideIndex = 0;
        }

        if (slideIndex < 0) {
            slideIndex = slides.length - 1;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex].style.display = "block";
        dots[slideIndex].className += " active";
        
        slideIndex++;
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
</script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
