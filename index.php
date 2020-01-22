<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("header.php");
    ?>
    <title>NaiHui Portfolio</title>
</head>

<body>
    <section class="header h-100">
        <!-- 導覽列 start -->
        <nav>
            <ul>
                <li><a href="#introduction" onmouseover="this.innerHTML='Introduction.'" onmouseout="this.innerHTML='簡介'">簡介</a></li>
                <li><a href="#resume" onmouseover="this.innerHTML='Resume.'" onmouseout="this.innerHTML='履歷'">履歷</a></li>
                <li><a href="#" onmouseover="this.innerHTML='Portfolio.'" onmouseout="this.innerHTML='作品集'">作品集</a></li>
                <li><a href="img/profile.jpg" onmouseover="this.innerHTML='Download CV.'" onmouseout="this.innerHTML='履歷下載'" download>履歷下載</a></li>
            </ul>
        </nav>
        <!-- 導覽列 end -->
        <div class="h-100 row d-flex flex-column justify-content-center align-items-center">
            <img class="img-fluid rounded-circle wow bounceInDown shadow-lg" src="img/profile_circle.jpg" alt="大頭照" title="大頭照">
            <div id="firstPageText" class="row d-flex align-items-center text-white wow bounceInUp">
                <div class="text-center my-3">
                    <p class="h2">廖乃慧<span class="h3 font-weight-bold"> Nai-Hui Liao</span></p>
                    <p>網頁程式設計師｜Web Designer</p>
                    <p>1994/04/19</p>
                    <p><i class="fas fa-globe-asia"></i> 現居新北三重｜New Taipei, Taiwan</p>
                    <p><a href="mailto:nainai0309@gmail.com"><i class="fas fa-envelope"></i> nainai0309@gmail.com</a>｜<a href="telto:+886975233340"><i class="fas fa-mobile"></i> (886)975233340</a>｜<a href="https://www.linkedin.com/in/naihui-liao-98349216b/" target="_blank"><i class="fab fa-linkedin"></i></a>｜<a href="https://github.com/nai0309" target="_blank"><i class="fab fa-github-square"></i></a></p>
                </div>
            </div>
            <div class="scroll d-flex flex-column">
                <a href="#introduction" class="text-white"><i class="fas fa-caret-down"></i></a>
            </div>
        </div>
        <div class="backToTop">
       <a href="#"><i class="fas fa-chevron-circle-up"></i></a>
       </div>
    </section>

    <!-- 關於 start -->
    <section id="introduction">
        <div class="navbarHeight"></div>
        <div class="container">
            <h1 class="text-uppercase my-5">Introduction.</h1>
            <p>
                任職關鍵字、原生等數位廣告文案編輯近3年，每日瀏覽大量網頁，撰寫的不只是引人注目的文案，更要從各式網頁中挖掘客戶優勢，發現許多客人產品市場競爭力強，但敗在網頁互動、呈現不夠完整，進而開始對網頁設計產生濃厚興趣。</p>
            <p>
                熱愛挑戰不一樣的人生，跨出舒適圈，故毅然決然轉換跑道，在進入網頁開發領域前，於泰山職訓局參加「前端網頁開發技術」全日制班，透過600小時的課程，習得HTML、CSS、PHP、JavaScript、jQuery、API串接、MYSQL資料庫建置、Photoshop、Illustrator視覺影像設計，精實技能彌補知識落差，並於網頁開發領域盡情發揮潛力，朝全端工程師目標邁進。
            </p>
        </div>
    </section>
    <!-- 關於 end -->

    <!-- 履歷 start -->
    <section id="resume">
    <div class="navbarHeight"></div>
        <div class="container">
            <h1 class="text-uppercase my-5">resume.</h1>
            <!-- 技能 start -->
            <h6 class="text-uppercase my-5">- 技能 Skills -</h6>
            <div class="row mb-8">
                <div class="col border-left">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h6 text-main">後端 Back-End</span>
                    </div>
                    <ul>
                        <li>PHP</li>
                        <li>MYSQL</li>
                    </ul>
                </div>
                <div class="col border-left">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h6 text-main">前端 Front-End</span>
                    </div>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Bootstrap</li>
                        <li>Javascript</li>
                        <li>JQuery</li>
                    </ul>
                </div>
                <div class="col border-left">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h6 text-main">視覺設計 Design</span>
                    </div>
                    <ul>
                        <li>Photoshop</li>
                        <li>Illustrator</li>
                    </ul>
                </div>
                <div class="col border-left">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h6 text-main">語言 Spoken Languages</span>
                    </div>
                    <ul>
                        <li>中文 Chinese - Native</li>
                        <li>英文 English - intermediate(TOEIC:610)</li>
                    </ul>
                </div>
            </div>
            <!-- 技能 end -->

            <!-- 學歷 start -->
            <h6 class="text-uppercase my-5">- 教育 EDUCATION -</h6>
            <div class="row border-left flex-column mb-8">
                <div class="col">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h5 text-main">
                            勞動部勞動力發展署 - 前端網頁開發技術（泰山）全日制職業訓練
                        </span>
                        <br>
                        <small class="ml-4 text-main">
                        Workforce Development Agency, MOL - Front-end Web Development Technology Training
                        </small>
                    </div>
                    <ul>
                        <li class="my-3 font-weight-bold text-num">2019/10 - 2020/01</li>
                        <li>- 習得HTML、CSS前端基礎網頁技術</li>
                        <li>- 使用JS、JQ為網頁增加動態效果</li>
                        <li>- 以Bootstrap框架實作專題網頁</li>
                        <li>- Photoshop ＆ Illustrator修圖設計應用</li>
                        <li>- PHP與MySQL後端資料管理串接實作</li>
                    </ul>
                </div>
                <div class="col">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h5 text-main">
                        國立臺北商業大學 - 資訊管理系
                        </span>
                        <br>
                        <small class="ml-4 text-main">
                        National Taipei University of Business - Bachelor of Information Management
                        </small>
                    </div>
                    <ul>
                        <li class="my-3 font-weight-bold text-num">2012/09 - 2016/06</li>
                    </ul>
                </div>
            </div>
            <!-- 學歷 end -->

            <!-- 經歷 start -->
            <h6 class="text-uppercase my-5">- 經歷 Experience -</h6>
            <div class="row border-left">
                <div class="col">
                    <div class="my-3">
                        <canvas class="mr-2"></canvas>
                        <span class="h5 text-main">
                            飛翱網訊股份有限公司 - Yahoo數位廣告文案編輯組長
                        </span>
                        <br>
                        <small class="ml-4 text-main">
                            800 TeleServices (Shanghai) Information Service Co., Ltd. - Team Leader Of Copywriter
                        </small>
                    </div>
                    <ul>
                        <li class="my-3 font-weight-bold text-num">2016/07 - 2019/05</li>
                        <li>- 4人以下團隊工作指派</li>
                        <li>- 部門專案進度監控</li>
                        <li>- 新人訓練：廣告規範、文案撰寫技巧</li>
                        <li>- 建議書內容校稿、品質控管</li>
                        <li>- 獨立作業執行關鍵字、原生廣告建議書規劃</li>
                        <li>- 跨部門溝通：廣告優化、執行方式建議</li>
                    </ul>
                </div>
            </div>
            <!-- 經歷 end -->
        </div>
    </section>
    <!-- 履歷 end -->

    <!-- 作品集 start -->
       <section id="portfolio">
    <div class="navbarHeight"></div>
        <div class="container">
            <h1 class="text-uppercase my-5">portfolio.</h1>
</section>
    <!-- 作品集 end -->





    <?php
    include("footer.php");
    ?>

    <script>
        // 導覽列滑動固定 start
        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $("nav").addClass("scroll_bg shadow-lg");
            } else {
                $("nav").removeClass("scroll_bg shadow-lg");
            }
        })
        // 導覽列滑動固定 end

        // first page scroll start
        var pageDown = document.querySelector('a[href="#introduction"]');
        var target = document.getElementById('introduction');
        pageDown.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                'top': target.offsetTop,
                'behavior': 'smooth'
            });
        });
        // first page scroll end
    </script>
</body>

</html>