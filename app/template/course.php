<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>課程表/線上報名</h2>
          <ol>
            <li><a href="index.html">主頁</a></li>
            <li>線上報名</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" >
      <div class="container">
        <div class="row gy-4 d-flex align-content-between">
          <div class="d-flex">
            <select class="form-select " onchange="chooseClass()" id="mySelect" aria-label="Default select example">
              <option selected>選擇班別</option>
              <?php
              foreach($course){
                echo '<option value="'.$course.'">APCS專案班</option>';
              }
              <option value="APCS">APCS專案班</option>
              <option value="adult">高中/成人</option>
              <option value="junior">國小</option>
              <option value="middle">國中</option>
              <option value="winter">寒令營</option>
              ?>
            </select>
            <select class="form-select" onchange="chooseCourse()" id="selectCourse" aria-label="Default select example">
              <option selected>選擇課程</option>
              <option value="APCSAdvanced" class="APCS" style="display: none;">APCS菁英考照班</option>
              <option value="APCSBasic" class="APCS" style="display: none;">APCS零基礎先修班</option>
              <option value="APCSBasicExam" class="APCS" style="display: none;">APCS零基礎考照班</option>
              <option value="AE" class="adult" style="display: none;">AE特效創作班</option>
              <option value="AI" class="adult" style="display: none;">AI平面設計班</option>
              <option value="CPS" class="adult" style="display: none;">C++基礎入門</option>
              <option value="CLG" class="adult" style="display: none;">C語言基礎入門</option>
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
              <option value="appinventor2" class="winter" style="display: none;">appinventor2</option>
            </select>
          </div>
          <div id="setPic">
             <?php
              if (isset($_GET["case"]) and $_GET["case"]!="" and isset($_GET["course"]) and $_GET["course"]!="" ){
                require_once("app/control/courseController.php");
                $course = New courseController($_GET["case"],$_GET["course"]);
                $course->layoutCourse();
              }
              else{
                echo"<h3>請選擇班別與課程</h3>";
              }
             ?>
          </div>
          <a href="registraction.php<?php if (isset($_GET["case"]) and isset($_GET["course"]))
          {echo '?case='.$_GET["case"].'&course='.$_GET["course"];}?>">
            <button type="button" class="btn btn-success btn-lg">填寫報名表</button>
          </a>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->
    <script src="public/js/signup.js"></script>
  </main><!-- End #main -->
