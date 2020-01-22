<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("header.php");
    ?>
    <title>NaiHui's portfolio</title>
</head>

<body onload="getpage('aboutme.php')">
    <!-- first page start-->
    <section id="firstPage" class="h-100 bg-blue">
       
    </section>
    <!-- first page edn-->

    <!-- left navbar start-->
    <section id="navbarLeft" class="h-100">
        <div class="row h-100">
            <div id="sidenav" class="col-2 bg-blue">
                <div class="row d-flex flex-column h-100 text-white">
                    <div id="profileImg" class="col p-4 d-flex flex-column">
                        <img class="img-fluid" src="img/profile.jpg" alt="大頭照" title="大頭照">
                        <br>
                        <h3 class="font-zh mb-0">廖乃慧</h3>
                        <h5 class="font-en">Liao Nai Hui</h5>
                        <small class="font-en">- 1994/04/19 -</small>
                        <small class="font-zh">文案編輯 / 網頁程式設計師</small>
                        <small class="font-en">Copywriter / Web Designer</small>
                    </div>
                    <div id="narbarList" class="col font-weight-bolder text-center my-4">
                        <ul>
                            <li class="font-zh" onclick="getpage('aboutme.php')">
                                關於我
                                <p class="font-en mb-4">About Me.</p>
                            </li>
                            <li class="font-zh" onclick="getpage('portfolio.php')">
                                作品集
                                <p class="font-en mb-4">Portfolio.</p>
                            </li>
                            <li class="font-zh" onclick="getpage('contactinfo.php')">
                                聯絡資訊
                                <p class="font-en mb-4">Contact Info.</p>
                            </li>
                        </ul>
                    </div>
                    <div id="copyright" class="col text-center font-en">
                        Copyright © 2020
                        <br>
                        NaiHui
                    </div>
                </div>
            </div>
            <div id="container" class="col-10 h-100 p-5 overflow-auto">
                <div class="container">
                </div>
            </div>
        </div>
    </section>
    <!-- left navbar end-->

    <!-- first page edn-->
    <?php
    include("footer.php");
    ?>

    <script>
        var pageDown = document.querySelector('a[href="#aboutMe"]');
        var target = document.getElementById('navbarLeft');
        var firstPage = document.getElementById('firstPage')

        pageDown.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                'top': target.offsetTop,
                'behavior': 'smooth'
            });
            firstPage.style.display = 'none';
        });

        function getpage(pageName) {
            var req = new XMLHttpRequest();
            req.open("get", pageName);
            req.onload = function() {
                var content = document.getElementById("container");
                content.innerHTML = this.responseText;
            };
            req.send();
        };
    </script>
</body>

</html>