<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div id="header" style="display: block;">
    <div id="logo">
      <img src="images/logo.png">
    </div>
  </div>

  <div id="container">

    <table width="100%" borde="1" cellpadding="0" cellspacing="0">
      <tbody><tr valign="top">
        <td width="50%">
          <div id="login" style="display: block;">
            <h2 class="login"><img src="images/login.png">Login Form</h2>
            <br>
            <form id="myForm" action="process.php" method="post">
              <p><input type="text" name="username" size="50" placeholder="Username Login" required=""></p>
              <p><input type="password" name="password" size="50" placeholder="Password Login" required=""></p>
              <p><select name="level" style="width: 200px;">
                <option value="0">Pilih</option>
                <option value="1">Administrators</option>
                <option value="2">Kaprodi</option>
                <option value="3">Dosen</option>
                <option value="5">BAAK</option>
                <option value="6">Tata Usaha</option>
                <option value="7">Mahasiswa</option>
              </select></p>
              <button id="sub">Log In</button>
              <div id="pesan"></div>
            </form>

            <a class="icon-login" href="#" title="Lupa Password"><img src="images/lost-password.png"></a>
            <a class="icon-login" href="#" title="Hubungi Kami"><img src="images/contact.png"></a>
            <a class="icon-login" href="#" title="Bantuan Login"><img src="images/help.png"></a>
          </div>

          <div id="note" style="display: block;">
            <h2 class="note"><img src="images/note.png">Pengumuman</h2>
            <div class="content">
              
                  <div class="bubble clearfix">
                    <img src="images/user.png" alt="Person">
                    <div class="bubble-content">
                      <div class="point"></div>
                      <p>LOGIN MAHASISWA BARU : <br>Username : NIM<br>Password : Nomer Pendaftaran<br><br>Harap segera ganti password setelah berhasil Login, terima kasih<br></p>
                    </div>
                  </div>
                              </div>
          </div>
        </td>
        <td>
          <div id="icon" style="display: block;">
            <h2 class="icon"><img src="images/feature.png">Fitur SIAKAD UNISLA</h2>

            <div class="feature">
              <img src="images/support.png">
              <b>Laporan</b><br>
              <span><a href="http://lapor.unisla.ac.id" target="_blank"><button id="sub">LAPOR UNISLA - Laporan problem &amp; saran </button></a></span>
              <div class="bersih"></div>
            </div>
            <div class="feature">
              <img src="images/notepad.png">
              <b>KRS Online </b><br>
              <span>Fasilitas KRS Online yang memungkinkan user melakukan pengisian dimanapun dan kapanpun</span>
              <div class="bersih"></div>
            </div>
            <div class="feature">
              <img src="images/jadwal.png">
              <b>Kalender Akademik</b><br>
              <span>Kalender akedemik terbaru Universitas Islam Lamongan</span>
              <div class="bersih"></div>
            </div>
            <div class="feature">
              <img src="images/info.png">
              <b>Update Informasi</b><br>
              <span>Update informasi mahasiswa yang berhubungan dengan Pembayaran </span>
              <div class="bersih"></div>
            </div>
                        <div class="feature">
              <img src="images/khs.png">
              <b>KHS</b><br>
              <span>Mahasiswa bisa memantau hasil studi dari matakuliah yang telah ditempuh selama 24 jam </span>
              <div class="bersih"></div>
            </div>
          </div>

          <div id="social" style="display: block;">
            
            
            <a href="http://sisfo.unisla.ac.id/images/caldik.jpg" target="_blank"><button id="sub">Download Kalender Akademik</button></a>
          </div>

          <div id="footer" style="display: block;">
            Copyright © 2013 Universitas Islam Lamongan<br>
            Design &amp; Create By Team SIAKAD UNISLA
          </div>
        </td>
      </tr>
    </tbody></table>

  </div>

  <script type="text/javascript" src="users/js/jquery-1.3.2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#header").slideDown(300, function() {
        $("#login").slideDown(300, function() {
          $("#social").slideDown(300, function() {
            $("#icon").slideDown(300, function() {
              $("#note").slideDown(300, function() {
                $("#footer").slideDown(300);
              });
            });
          });
        });
      });
    });

    $("#sub").click(function() {
      $.post($("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) { $("#pesan").html(info); });
    });

    $("#myForm").submit(function(){
      return false;
    });
  </script>

</body>
</html>