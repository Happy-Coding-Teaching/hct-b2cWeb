<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>線上報名HCT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/1.ico" rel="icon">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="index.html">HCT<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">主頁</a></li>
          <li><a class="nav-link scrollto" href="index.html">關於我們</a></li>
          <li><a class="nav-link scrollto" href="index.html">服務項目</a></li>
          <li><a class="nav-link scrollto " href="index.html">學生作品</a></li>
          <li><a class="nav-link scrollto" href="index.html">成員組成</a></li>
          <li><a class="nav-link scrollto" href="index.html">聯絡我們</a></li>
          <li><a class="nav-link scrollto" href="conference.html">參考資料</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="signup.html" class="get-started-btn scrollto " style="visibility: visible;">線上報名</a>
    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>報名表</h2>
          <ol>
            <li><a href="index.html">主頁</a></li>
            <li>線上報名</li>
            <li>報名表</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="pt-2" >
      <div class="container">
        <section class="h-100 h-custom">
          <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">

                  <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">報名表</h3>

                    <form method="post" action="app/recieveData" class="px-md-2">

                      <div class="d-flex justify-content-between">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">家長姓名</label>
                          <div class="d-flex">
                            <input type="text" id="form3Example1q" class="form-control" name="parentsName" />
                          </div>
                        </div>
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">家長電話</label>
                          <input type="text" id="form3Example1q" class="form-control" name="parentsPhone" />
                        </div>
                      </div>
                      <div class="d-flex justify-content-between">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">學生姓名</label>
                          <div class="d-flex">
                            <input type="text" id="form3Example1q" class="form-control" name="studentName" />
                          </div>
                        </div>
                        <div class="mb-4">

                          <label for="exampleDatepicker1" class="form-label">學生年齡</label>

                          <input type="text" class="form-control" id="exampleDatepicker1" name="studentGrade" />

                        </div>
                      </div>


                      <div class="mb-4">
                        <label for="exampleDatepicker1" class="form-label">報名課程</label>
                        <div class="d-flex">
                          <select class="form-select me-5" name="case" onchange="chooseClass()" id="mySelect"
                            aria-label="Default select example" >
                            <?php
                            if (isset($_GET["case"]) and $_GET["case"]!="" and isset($_GET["course"]) and $_GET["course"]!="" ){
                              require_once("app\control\courseController.php");
                              $course = New courseController($_GET["case"],$_GET["course"]);
                              $course->showCaseName();  
                            }
                            else{
                              echo'
                              <option selected>選擇班別</option>
                              <option value="APCS">APCS專案班</option>
                              <option value="adult">高中/成人</option>
                              <option value="junior">國小</option>
                              <option value="middle">國中</option>
                              <option value="winter">寒令營</option>';
                            }
                            ?>
                          </select>
                          <select class="form-select mr-2" name="course" onchange="chooseCourse()" id="selectCourse"
                            aria-label="Default select example">
                            <?php
                              if (isset($_GET["case"]) and $_GET["case"]!="" and isset($_GET["course"]) and $_GET["course"]!="" ){
                                // require_once("app\control\courseController.php");
                                // $course = New courseController($_GET["case"],$_GET["course"]);
                                $course->showCourseName();
                              }
                              else{
                                echo'
                                <option selected>選擇課程</option>
                                <option value="APCSAdvanced" class="APCS" style="display: none;">APCS菁英考照班</option>
                                <option value="APCSBasic" class="APCS" style="display: none;">APCS零基礎先修班</option>
                                <option value="APCSBasicExam" class="APCS" style="display: none;">APCS零基礎考照班</option>
                                <option value="AE" class="adult" style="display: none;">AE特效創作班</option>
                                <option value="AI" class="adult" style="display: none;">AI平面設計班</option>
                                <option value="CPS" class="adult" style="display: none;">C++基礎入門</option>
                                <option value="C" class="adult" style="display: none;">C語言基礎入門</option>
                                <option value="DATABASE" class="adult" style="display: none;">DATABASE</option>
                                <option value="EXCEL" class="adult" style="display: none;">EXCEL基礎班</option>
                                <option value="EXCELAdvanced" class="adult" style="display: none;">EXCEL檢定班</option>
                                <option value="HTML-CSS" class="adult" style="display: none;">HTML+CSS基礎入門</option>
                                <option value="nodejs" class="adult" style="display: none;">node.js</option>
                                <option value="PPT" class="adult" style="display: none;">PPT基礎班</option>
                                <option value="PPTAdvanced" class="adult" style="display: none;">PPT檢定班</option>
                                <option value="PR" class="adult" style="display: none;">PR導演養成班</option>
                                <option value="PS" class="adult" style="display: none;">PS影像合成班</option>
                                <option value="python-pygame" class="adult" style="display: none;">python-pygame</option>
                                <option value="python-server" class="adult" style="display: none;">python-server</option>
                                <option value="python" class="adult" style="display: none;">python基礎入門</option>
                                <option value="pythonScreen" class="adult" style="display: none;">python視窗應用設計</option>
                                <option value="WORD" class="adult" style="display: none;">WORD基礎班</option>
                                <option value="WORDAdvanced" class="adult" style="display: none;">WORD檢定班</option>
                                <option value="XAMARIN" class="adult" style="display: none;">XAMARIN基礎入門</option>
                                <option value="WD" class="adult" style="display: none;">威導影音剪輯班</option>
                                <option value="counseling" class="adult" style="display: none;">高中程式暨課業輔導專班</option>
                                <option value="computer" class="adult" style="display: none;">電腦技能專修班</option>
                                <option value="APP" class="junior" style="display: none;">APP基礎入門班</option>
                                <option value="EXCEL" class="junior" style="display: none;">EXCEL基礎班</option>
                                <option value="EXCELAdvanced" class="junior" style="display: none;">EXCEL檢定班</option>
                                <option value="Line" class="junior" style="display: none;">Line貼圖設計班</option>
                                <option value="PPT" class="junior" style="display: none;">PPT基礎班</option>
                                <option value="PPTAdvanced" class="junior" style="display: none;">PPT檢定班</option>
                                <option value="PS" class="junior" style="display: none;">PS影像合成班</option>
                                <option value="Python" class="junior" style="display: none;">Python基礎入門班</option>
                                <option value="ROBLOX" class="junior" style="display: none;">ROBLOX遊戲設計班</option>
                                <option value="SCRATCH" class="junior" style="display: none;">SCRATCH積木程式班</option>
                                <option value="WORD" class="junior" style="display: none;">WORD基礎班</option>
                                <option value="WORDAdvanced" class="junior" style="display: none;">WORD檢定班</option>
                                <option value="computer" class="junior" style="display: none;">電腦操作基礎特訓班</option>
                                <option value="APP" class="middle" style="display: none;">APP基礎入門班</option>
                                <option value="PS" class="middle" style="display: none;">PS影像合成班</option>
                                <option value="python" class="middle" style="display: none;">python程式設計</option>
                                <option value="ROBLOX" class="middle" style="display: none;">ROBLOX遊戲設計班</option>
                                <option value="WD" class="middle" style="display: none;">威導影音剪輯班</option>
                                <option value="computer" class="middle" style="display: none;">電腦技能全修班</option>
                                <option value="HTML-CSS" class="middle" style="display: none;">網頁設計班</option>
                                <option value="appinventor2" class="winter" style="display: none;">appinventor2</option>';
                              }
                            ?>
     
                          </select>
                        </div>
                      </div>
                      <div class="mb-5">
                        <label for="exampleDatepicker1" class="form-label">付款方式</label>
                        <div class="d-flex">
                          <select class="form-select " name="payment" 
                            aria-label="Default select example" >
                            <option selected>選擇付款方式</option>
                            <option value="creditcard">HCT教育中心刷卡或付現</option>
                            <option value="moneytransfer">匯款/轉帳</option>
                            <option value="linepay">LINE PAY</option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-success btn-lg mb-1">送出</button>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

  </main><!-- End #main -->



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="signup.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>