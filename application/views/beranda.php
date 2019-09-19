<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dzulfikar Nurfikri | Ruang Belajar</title>
    <link rel="icon" href="<?php echo base_url('asset/bootstrap/img/favicon.png') ?>">
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap/css/animate.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap/css/style.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  </head>
  <body id="body">
    <div class="box-loader">
      <div class="loader text-center">
        <img src="<?php echo base_url('asset/bootstrap/img/load.gif') ?>" width="200">
      </div>
    </div>
    <?php $this->load->view('navbar') ?>
    <section class="banner text-white text-center">
      <img src="<?php echo base_url('asset/bootstrap/img/logo.png') ?>" class="wow zoomInDown slow">
      <h1 class="text-uppercase wow fadeInDown slow">dzulfikar nurfikri</h1>
      <h2 class="font-weight wow fadeInUp slow">Web Developer - Graphic Designer - Tutor - Traveller</h2>
    </section><!-- end /.banner -->
    <section class="section-1 text-center" id="tentang">
      <h1>TENTANG</h1><hr>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-2 text-justify">
            <p>Kami selalu berusaha mengembangkan sumber daya manusia yang ada di muka bumi ini termasuk kami di dalamnya dengan tujuan agar dapat bersaing di dunia bisnis.
            Teknologi saat ini sudah semakin canggih sehingga tidak dapat dipungkiri lagi, setiap orang atau kelompok yang menjalankan bisnis akan membutuhkan suatu teknologi yang canggih untuk membantu mengembangkan bisnisnya agar dapat bersaing dengan kompetitornya.
            Selain harus mengembangkan sumber daya manusia yang ada, kami juga membantu mengembangkan bisnis baik yang sedang berjalan maupun yang baru akan mulai.</p>
          </div>
          <div class="col-md-4 text-justify">
            <p>Sebuah sistem akan sangat dibutuhkan oleh sebuah perusahaan ataupun seorang pebisnis dalam menjalankan bisnisnya, kareana denga sistem pekerjaan akan lebih mudah dan lebih cepat untuk dikerjakan.
            Maka dari itu, sebelum membangun sebuah sistem yang bermanfaat, sebaiknya mempelajari terlebih dahulu tentang tata cara dalam membangun sebuah sistem untuk sebuah perusahaan ataupun pebisnis.
            Untuk itu di sini kami menyediakan jasa pembelajaran mengenai tata cara pembuatan sebuah sistem baik secara langsung maupun tidak langsung. Jika tertarik mempelajarinya, silahkan hubungi kami.</p>
          </div>
        </div>
      </div>
    </section><!-- end /.section-1 -->
    <section class="section-2 text-center" id="layanan">
      <h1>LAYANAN</h1><hr>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-user-friends fa-5x"></i>
            <h3>Langsung</h3>
            <p>Belajar secara langsung baik itu individu maupun kelompok, lokasi belajar bisa diatur dimana aja sesuai yang diinginkan.</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-tablet-alt fa-5x"></i>
            <h3>Chat</h3>
            <p>Belajar secara tidak langsung, melainkan lewat chat, biasanya metode ini digunakan untuk teman-teman yang memang lagi tidak bisa bertemu atau jarak yang jauh.</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-video fa-5x"></i>
            <h3>Video</h3>
            <p>Belajar lewat video tutorial yang kami buat, untuk lebih memudahkan belajar kapan aja dan dimana aja tanpa harus berhubungan langsung dengan pengajar.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-3 text-center" id="portfolio">
      <h1>PORTFOLIO</h1><hr>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://pakar-diabetes.com">
              <img src="<?php echo base_url('asset/bootstrap/img/pakar.png') ?>">
              <div class="caption">Sistem Informasi Pakar Diabetes Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://jne-asm.com">
              <img src="<?php echo base_url('asset/bootstrap/img/invent.png') ?>">
              <div class="caption">Sistem Informasi Inventory Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://devi-makeup.com">
              <img src="<?php echo base_url('asset/bootstrap/img/makeup.png') ?>">
              <div class="caption">Sistem Informasi Jasa Makeup Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://sidola.pakar-diabetes.com">
              <img src="<?php echo base_url('asset/bootstrap/img/gaji.png') ?>">
              <div class="caption">Sistem Informasi Penggajian Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://tanaman.pakar-diabetes.com">
              <img src="<?php echo base_url('asset/bootstrap/img/tanam.png') ?>">
              <div class="caption">Sistem Informasi Penjualan Tanaman Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://furnitur.pakar-diabetes.com">
              <img src="<?php echo base_url('asset/bootstrap/img/cart.png') ?>">
              <div class="caption">Sistem Informasi Penjualan Furnitur Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://perpustakaan.pakar-diabetes.com">
              <img src="<?php echo base_url('asset/bootstrap/img/perp.png') ?>">
              <div class="caption">Sistem Informasi Perpustakaan Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="box-card">
              <a target="_blank" href="http://koperasi.pakar-diabetes.com">
              <img src="<?php echo base_url('asset/bootstrap/img/kop.png') ?>">
              <div class="caption">Sistem Informasi Simpan Pinjam Berbasis Web</div>
              <div class="bg-thumb"><span><i class="fa fa-eye-slash"></i> Demo</span></div></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- end /.section-2 -->
    <section class="section-4 text-center" id="kontak">
      <h1>KONTAK</h1><hr>
      <h4>Siap belajar dan berkarya ? Tunggu apalagi, mulai belajar dan berkarya dari sekarang!<br>
      Teman-teman kamu sudah menunggu karyamu di luar sana.</h4><br>
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-offset-1">
            <div class="kontak-form">
              <form id="formEmail">
                <h4>Nama Kamu</h4>
                <input type="text" name="nama" autocomplete="off" placeholder="nama kamu" class="form-control" />
                <h4>Email Kamu</h4>
                <input type="text" name="email" autocomplete="off" placeholder="email kamu" class="form-control" />
                <h4>Subjek</h4>
                <input type="text" name="subjek" autocomplete="off" placeholder="subjek" class="form-control" />
                <h4>Pesan</h4>
                <textarea name="pesan" class="form-control" rows="10" cols="50" placeholder="isi pesan"></textarea>
                <button type="button" id="sendEmail" class="btn btn-primary">Kirim Pesan</button>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <a target="_blank" class="btn btn-success chat" href="https://api.whatsapp.com/send?phone=6282217604816&amp;text=Assalamu'alaikum, aku lihat web kamu, ada yang mau aku tanyakan."><i class="fab fa-whatsapp"></i> Chat via Whatsapp</a>
          </div>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15848.766361414719!2d108.31933172262086!3d-6.746472112760958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f27520b1a8667%3A0x87abcda1972200db!2sTanjungsari%2C+Leuwimunding%2C+Majalengka+Regency%2C+West+Java!5e0!3m2!1sen!2sid!4v1545206830774" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <?php
    $this->load->view('footer');
    $this->load->view('bundle-script');
    ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".box-loader").hide();
      });

      $("#sendEmail").on('click', function(e){
      var data = $("#formEmail").serialize();
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('beranda/send_email') ?>",
        data: data,
        dataType: "JSON",
        success:function(respon){
          if(respon.sukses == false){
            swal('Astaghfirullah', respon.notif, 'error');
          }else if(respon.sukses == true){
            $("#formEmail")[0].reset();
            swal('Alhamdulillah', respon.notif, 'success');
          }
        }
      })
    });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5c3471c412db2461b16b29b6/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  </body>
</html>
