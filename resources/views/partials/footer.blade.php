
<div id="footer">
    <div class="wr-foot-top container-custom">
        <div class="footer-left">
            <div class="footer-left-logo">
                <img src="public/image/Layer_1.png">
            </div>

            <div class="footer-left-content">
                <p>Đừng bỏ lỡ bất kỳ thông tin hữu ích nào</p>

                <div class="footer-left-email">
                    <div class="footer-left-email-frame">
                        <input class="input-search" type="text" placeholder="Địa chỉ email đăng ký">
                    </div>
                    <button type="submit" class="btn-custom-regs-footer">ĐĂNG KÝ</button>
                </div>

            </div>
        </div>

        <div class="footer-right">
            <div class="footer-right-directional">
                <nav class="footer-right-links-menu">
                    <ul>
                        <a href="">Điều hướng</a>
                        <li><a href="#disorders">Rối loạn trầm cảm</a></li>
                        <li><a href="#signal">Dấu hiệu</a></li>
                        <li><a href="#causal">Nguyên nhân & Ảnh hưởng</a></li>
                        <li><a href="#solution">Gợi ý giải pháp</a></li>
                        <li><a href="#useful">Tin tức</a></li>
                    </ul>

                </nav>
            </div>

            <div class="footer-right-links">
                <nav class="footer-right-links-menu">
                    <ul>
                        <a href="">Chuyên trang</a>
                        <li><a href="">Link ngoài 1</a></li>
                        <li><a href="">Link ngoài 2</a></li>
                        <li><a href="">Link ngoài 3</a></li>
                        <li><a href="">Link ngoài 4</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="footer-bot container-custom">
        <hr>
        <div class="wr-foot-bottom">
            <div class="footer-bot-content-left">
                <p>© 2024 roiloantramcam.com | All rights reserved.</p>
            </div>
            <div class="footer-bot-content-right">
                <div class="footer-bot-content-right-text">
                    <p>Theo dõi chúng tôi</p>
                </div>
                <div class="footer-bot-content-right-menu">
                    <nav class="footer-bot-content-right-menu-list">
                        <ul>
                            <li>
                                <a href=""><img src="public/image/iconfb.png" alt=""></a>
                                <a href=""><img src="public/image/iconins.png" alt=""></a>
                                <a href=""><img src="public/image/iconytb.png" alt=""></a>
                                <a href=""><img src="public/image/icontik.png" alt=""></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="btn-top"onclick="topFunction()"><img src="{{ url('/public/image/To Top Button.png') }}" alt="" /></div>
<!-- <button onclick="topFunction()" id="btn-top" title="Go to top">Top</button> -->

<!-- <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
<div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible 
  <strong>when the user starts to scroll the page</strong>.</div> -->

<script>
// Get the button
let mybutton = document.getElementById("btn-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</div>
</body>
</html>