<footer>
            <div class="lg" style="width: 320px;">
                <img src="./images/FPTShop_logo.jpg" alt=""
                    style="width: 200px; height: 100px; margin-top: 100px; margin-left: 100px;">
            </div>
            <div class="ft" style="width: 320px;">
                <h4 class="tieude">CÔNG TY ĐIỆN TỬ SỐ 1 VIỆT NAM</h4>
                <i class="fa-solid fa-location-dot"></i><span class="thongtin">Tầng 2 tòa nhà T10, Times city Vinh Tuy,
                    Hai Ba Trung, Ha Noi.</span><br>
                <i class="fa-solid fa-phone-flip"></i><span class="thongtin">Hotline: 1900.63.69.38</span><br>
                <i class="fa-solid fa-envelope"></i><span class="thongtin">Mail: info@tocotocotea.vn</span>
                <p class="thongtin">Số ĐKKD: 080759834768. Ngày cấp: 16/03/2017.</p>
                <p class="thongtin">Nơi cấp: Sở kế hoạch và đầu tư Hà Nội.</p>
                <div>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-square-twitter"></i>
                    <i class="fa-brands fa-google-plus"></i>
                </div><br>
                <img class="imgmin" src="./images/anh4.jpg" alt=""> <img class="imgmin" src="./images/anh1.jpg" alt=""><br>
                <img class="imgmin" src="./images/anh2.jpg" alt="">
            </div>
            <div class="ft">
                <h4 class="tieude">VỀ CHÚNG TÔI</h4>
                <p class="thongtin">Giới thiệu về Tocotoco</p>
                <p class="thongtin">Nhượng quyên</p>
                <p class="thongtin">Tin tức khuyến mại</p>
                <p class="thongtin">Cửa hàng</p>
                <p class="thongtin">Quy định chung</p>
                <p class="thongtin">TT liên hệ & ĐKKD</p>
            </div>
            <div class="ft">
                <h4 class="tieude">CHÍNH SÁCH</h4>
                <p class="thongtin">Chính sách thành viên</p>
                <p class="thongtin">Hình thức thanh toán</p>
                <p class="thongtin">Vận chuyển giao nhận</p>
                <p class="thongtin">ĐỔi trả và hoàn tiền</p>
                <p class="thongtin">Bảo vệ thông tin cá nhân</p>
                <p class="thongtin">Bỏa trì, Bảo hành</p>
            </div>
        </footer>
    </div>
</body>

</html>
<script>
            let arrayIMG = [];  // 
            let index = 0;

            function loadAnh() {
                for (let i = 0; i < 6; i++) {
                    arrayIMG[i] = new Image();
                    arrayIMG[i].src = './images/anh' + i + '.jpg';
                }
            }

            function next() {
                if (index < 5) {
                    index++;
                } else {
                    index = 0;
                }
                document.getElementById('imgbanner').src = arrayIMG[index].src;
            }
            loadAnh();
            setInterval(next, 1500);
        </script>