<!-- PRE LOADER -->
<section class="preloader">
  <div class="spinner">

    <span class="spinner-rotate"></span>

  </div>
</section>


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>

      <!-- lOGO TEXT HERE -->
      <a href="index.html" class="navbar-brand">TPA Aisyah</a>
    </div>

    <!-- MENU LINKS -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#home" class="smoothScroll">Home</a></li>
        <li><a href="#feature" class="smoothScroll">Santri</a></li>
        <li><a href="#about" class="smoothScroll">Guru</a></li>
        <li><a href="#pricing" class="smoothScroll">Jadwal</a></li>
        <li><a href="#contact" class="smoothScroll">Hubungi</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Kontak kami - <span>agus_sbn@poliban.ac.id</span></a></li>
      </ul>
    </div>

  </div>
</section>


<!-- FEATURE -->
<section id="home" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-3 col-md-6 col-sm-12">
        <div class="home-info">
          <h3>Mengantarkan Santri Terbiasa Membaca Al-Quran</h3>
          <h1>TPA - Taman Pendidikan Alquran - Aisyiah</h1>
          <form action="" method="get" class="online-form">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
            <button type="submit" class="form-control">Get started</button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- FEATURE -->
<section id="feature" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <h1>Data Santri</h1>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        <table id="datatable_01" class="table table-bordered">
          <thead>
            <tr>
              <th>Id Santri</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Guru</th>
            </tr>
          </thead>
          <?php
          foreach ($santri as $d) { ?>
            <tr>
              <td><?php echo $d['id_santri'] ?></td>
              <td><?php echo $d['nama_alias'] ?></td>
              <td><?php echo $d['nama_kelas'] ?></td>
              <td><?php echo $d['nama_guru'] ?></td>
            </tr>
          <?php
          }
          ?>
        </table>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="feature-image">
          <img src="<?php echo base_url(); ?>assets/landing/images/home-bg.jpg" class="img-responsive" alt="Thin Laptop">
        </div>
      </div>
    </div>
  </div>
</section>



<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-3 col-md-6 col-sm-12">
        <div class="section-title">
          <h1>Guru Mengaji Terbaik</h1>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="team-thumb">
          <img src="<?php echo base_url(); ?>assets/landing/images/guru01.jpg" class="img-responsive" alt="Andrew Orange">
          <div class="team-info team-thumb-up">
            <h2>Abdus Salam</h2>
            <small>Senior Tutor</small>
            <p>Selain sebagai pendiri, Abdus Salah juga adalah guru paling senior di TPA Aisyah ini.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="team-thumb">
          <div class="team-info team-thumb-down">
            <h2>M Somad</h2>
            <small>Yunior Tutor</small>
            <p>Guru yang juga ikut di awal pendirian TPA Aisyah.</p>
          </div>
          <img src="<?php echo base_url(); ?>assets/landing/images/guru02.jpg" class="img-responsive" alt="Catherine Soft">
        </div>
      </div>

      <div class="col-md-4 col-sm-4">
        <div class="team-thumb">
          <img src="<?php echo base_url(); ?>assets/landing/images/guru03.jpg" class="img-responsive" alt="Jack Wilson">
          <div class="team-info team-thumb-up">
            <h2>Rahman</h2>
            <small>Admin</small>
            <p>Sebagai tenaga operasional yang paling berperan dalam lancarnya kegiatan di TPA Aisyah</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- PRICING -->
<section id="pricing" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <div class="section-title">
          <h1>Jadwal Belajar Al-Quran</h1>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="pricing-thumb">
          <div class="pricing-title">
            <h2>TK</h2>
          </div>
          <div class="pricing-info">
            <p>Maksimal 30 santri per kelas</p>
            <p>Ada dua kelas</p>
            <p>Jadwal habis asyar</p>
            <p>Senin, Rabu, Jumat</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="pricing-thumb">
          <div class="pricing-title">
            <h2>SD sampai kelas 4</h2>
          </div>
          <div class="pricing-info">
            <p>Maksimal 30 santri per kelas</p>
            <p>Ada dua kelas</p>
            <p>Jadwal habis asyar</p>
            <p>Selasa, Kamis, Sabtu</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="pricing-thumb">
          <div class="pricing-title">
            <h2>Private</h2>
          </div>
          <div class="pricing-info">
            <p>Maksimal 5 santri per kelas</p>
            <p>Ada satu kelas</p>
            <p>Jadwal khusus hari Minggu</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12">
        <div class="section-title">
          <h1>TPA - Taman Pendidikan Alquran - Aisyiah</h1>
        </div>

        <div class="col-md-6 col-sm-6">
          <p>TPA - Aisyah bertempat di jalan... , yang merupakan bagian dari Langgar.. yang berada di Banjarmasin.
            TPA Aisya sudah berdiri sejak tahun 2010, dengan tenaga pengajar ngaji alumni dari ...
            yang merupakan warga setempat yang sudah menyelesaikan santrinya dan mengamalkan ilmunya di kampung halaman.
          </p>
          <p>
            Kontak WA kami di nomor 0812 xxxx xxxx, atau langsung ke tempat TPA Aisya di jalan... Banjarmasin.
          </p>
        </div>
        <div class="col-md-6 col-sm-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1225.9788923161066!2d114.58219360734677!3d-3.296317730821318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de4235ed24d6f7b%3A0xda02855136344eb0!2sUPT%20TIK%20Poliban%20(Gedung%20X)!5e0!3m2!1sen!2sid!4v1656401687338!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer id="footer" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row">

      <div class="copyright-text col-md-12 col-sm-12">
        <div class="col-md-6 col-sm-6">
          <p>Copyright &copy; 2022 Code agus_sbn@poliban.ac.id, template:
            <a rel="nofollow" href="http://tooplate.com">Tooplate</a>
          </p>
        </div>

        <div class="col-md-6 col-sm-6">
          <ul class="social-icon">
            <li><a href="https://web.facebook.com/agus.sbn" class="fa fa-facebook-square" attr="facebook icon"></a></li>
            <li><a href="https://youtube.com/agus_sbn" class="fa fa-youtube"></a></li>
            <li><a href="https://www.instagram.com/agus_setiyo_budi_n/" class="fa fa-instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>