{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Task Position</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

        <nav class="navbar">
            <div class="logo-group">
              <img alt="UMY logo" src="https://storage.googleapis.com/a1aa/image/c2a97de8-9b92-4e2d-202a-f57c7d19b06d.jpg" width="90" height="30" />
              <img alt="CDC logo" src="https://storage.googleapis.com/a1aa/image/ab6d871b-0d75-4c28-d319-9f9ed5cf782f.jpg" width="120" height="30" />
            </div>
            <ul class="nav-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Information</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <div>
              <button class="sign-in-btn">Sign In</button>
            </div>
          </nav>

    <div class="parent">
        <div class="content">
            <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
            <article>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam facere hic est! Maxime cupiditate, unde sunt officiis harum dolorum nesciunt!
            </article>

        </div>
        <div class="image">
            <img src="images/guy.jpeg" alt="">
        </div>
    </div>


        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html> --}}






























{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>UMY Alumni Tracer</title>
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body class="body-bg">
  <header class="header">
    <nav class="nav">
      <div class="logo-group">
        <img src="https://storage.googleapis.com/a1aa/image/c2a97de8-9b92-4e2d-202a-f57c7d19b06d.jpg" alt="UMY logo" class="logo" />
        <img src="https://storage.googleapis.com/a1aa/image/ab6d871b-0d75-4c28-d319-9f9ed5cf782f.jpg" alt="CDC logo" class="logo" />
      </div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Information</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div>
        <button class="sign-in-btn">Sign In</button>
      </div>
    </nav>
  </header>

  <main class="main">
    
    <section class="hero-section">
      <div class="hero-text">
        <h1>Empowring<br />Alumni With<br />The University<br />Alumni Tracer</h1>
        <p>Tracer study is a tool to get information about the impact of education on graduates and the success of the education process.</p>
        <button class="primary-btn">Get Started</button>
      </div>
      <div class="hero-image">
        <img src="https://storage.googleapis.com/a1aa/image/f5767cbe-2a4c-4105-67c1-81943cf73a31.jpg" alt="Portrait" class="portrait" />
        <div class="hero-float-box">
          <div class="float-percent">50%</div>
          <div class="float-label">Happy Alumni</div>
        </div>
        <img src="https://storage.googleapis.com/a1aa/image/2b3bbe5a-a116-439a-71e4-b3b196f9cb79.jpg" class="float-icon icon-left-1" />
        <img src="https://storage.googleapis.com/a1aa/image/3e61212f-38db-4996-bcf8-ecf9f920abb5.jpg" class="float-icon icon-right-1" />
        <img src="https://storage.googleapis.com/a1aa/image/16ffc49d-7de9-4793-0a8d-14b4e6e48acd.jpg" class="float-icon icon-right-2" />
      </div>
    </section>


    <div class="divider"></div>

  
    <section class="question-section">
      <h2>Apa yang akan kamu dapatkan<br />di Tracer Study ?</h2>
      <p>Yuk! Ketahui yang bisa kamu dapatkan dari tracer study di bawah ini</p>
    </section>

   
    <section class="card-grid">
      <div class="card">
        <div class="card-icon bg-yellow"><i class="fas fa-file-alt text-yellow"></i></div>
        <h3>Data Kuesioner</h3>
        <p>Pengisian kuesioner yang digunakan untuk mendapatkan data alumni</p>
        <a href="#">Get Started <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="card">
        <div class="card-icon bg-blue"><i class="fas fa-file-signature text-blue"></i></div>
        <h3>CV Builder</h3>
        <p>Membuat riwayat hidup yang menarik dan profesional untuk melamar kerja</p>
        <a href="#">Get Started <i class="fas fa-arrow-right"></i></a>
      </div>
    </section>

    
    <section class="career-section">
      <div class="career-text">
        <h3>Career Development Center UMY</h3>
        <p>The Career Development Center (CDC) is a unit within the university that provides career services and support to students and alumni. CDC offers various programs, workshops, and resources to help students develop their career skills, explore job opportunities, and connect with potential employers.</p>
        <p>CDC aims to empower students and alumni to achieve their career goals by providing guidance, counseling, and access to a wide network of professionals.</p>
      </div>
      <div class="career-image">
        <img src="https://storage.googleapis.com/a1aa/image/946bab7d-2e0d-4428-c78b-c76e1cae2b6a.jpg" alt="Career Image" />
      </div>
    </section>

    
    <section class="stats">
      <div><div class="number">25</div><div>Years of Experience</div></div>
      <div><div class="number">120</div><div>Companies Partner</div></div>
      <div><div class="number">120</div><div>Students Traced</div></div>
      <div><div class="number">120</div><div>Alumni Registered</div></div>
      <div><div class="number">120</div><div>Job Vacancies</div></div>
    </section>
  </main>
</body>
</html> --}}


































<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>UMY Alumni Tracer</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <header class="header">
        <nav class="navigasi">
            <div class="grup-logo">
                <img src="https://storage.googleapis.com/a1aa/image/c2a97de8-9b92-4e2d-202a-f57c7d19b06d.jpg"
                    alt="Logo UMY" class="logo" />
                <img src="https://storage.googleapis.com/a1aa/image/ab6d871b-0d75-4c28-d319-9f9ed5cf782f.jpg"
                    alt="Logo CDC" class="logo" />
            </div>
            <ul class="link-navigasi">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <div>
                <button class="tombol-masuk">Masuk</button>
            </div>
        </nav>
    </header>

    <main class="utama">
        
        <section class="section-utama">
            <div class="teks-utama">
                <h1>Empowering<br />Alumni With<br />The University<br />Alumni Tracer</h1>
                <p>Tracer study adalah alat untuk mendapatkan informasi tentang dampak pendidikan terhadap lulusan dan
                    keberhasilan proses pendidikan.</p>
                <button class="tombol-utama">Mulai</button>
            </div>
            <div class="gambar-utama">
                <img src="https://storage.googleapis.com/a1aa/image/f5767cbe-2a4c-4105-67c1-81943cf73a31.jpg"
                    alt="Potret" class="potret" />
                <div class="kotak-tambahan">
                    <div class="persen-tambahan">↑</div>
                    <div class="label-tambahan"><h3>50% Puas</h3></div>
                </div>
                <img src="images/php.png"
                    class="ikon-tambahan ikon-kiri-1" />
                <img src="images/js.png"
                    class="ikon-tambahan ikon-kanan-1" />
                <img src="images/css.png"
                    class="ikon-tambahan ikon-kanan-2" />
            </div>
        </section>


        <section class="section-kedua">

        <section class="section-pertanyaan">
            <h2>Apa yang akan kamu dapatkan<br />di Tracer Study?</h2>
            <p>Yuk! Ketahui yang bisa kamu dapatkan dari tracer study di bawah ini</p>
        </section>

        <!-- Kartu -->
        <section class="grid-kartu">
            <div class="kartu">
                <div class="kartu-kiri"><img src="images/folder.png" alt=""></div>
                <h3>Data Kuesioner</h3>
                <p>Pengisian kuesioner yang digunakan untuk mendapatkan data alumni</p>
                <a href="#">Mulai <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="kartu">
                <div class="kartu-kanan"><img src="images/cv.png" alt=""></div> <h3>Pembuat CV</h3>
                <p>Membuat riwayat hidup yang menarik dan profesional untuk melamar kerja</p>
                <a href="#">Mulai <i class="fas fa-arrow-right"></i></a>
            </div>
        </section>

        <!-- Pusat Karier --> <section class="section-karier">
            <div class="teks-karier">
                <h3>Pusat Pengembangan Karier UMY</h3>
                <p>Pusat Pengembangan Karier (CDC) adalah unit di dalam universitas yang menyediakan layanan karier dan
                    dukungan bagi mahasiswa dan alumni. CDC menawarkan berbagai program, lokakarya, dan sumber daya
                    untuk membantu mahasiswa mengembangkan keterampilan karier mereka, menjelajahi peluang kerja, dan
                    terhubung dengan calon pemberi kerja.</p>
                <p>CDC bertujuan untuk memberdayakan mahasiswa dan alumni agar mencapai tujuan karier mereka dengan
                    memberikan bimbingan, konseling, dan akses ke jaringan profesional yang luas.</p>
            </div>
            <div class="gambar-karier">
                <img src="https://storage.googleapis.com/a1aa/image/946bab7d-2e0d-4428-c78b-c76e1cae2b6a.jpg"
                    alt="Gambar Karier" />
            </div>
        </section>

        <!-- Statistik -->
        <section class="statistik">
            <div>
                <div class="angka">25</div>
                <div>Tahun Pengalaman</div>
            </div>
            <div>
                <div class="angka">120</div>
                <div>Perusahaan Mitra</div>
            </div>
            <div>
                <div class="angka">120</div>
                <div>Mahasiswa Terdata</div>
            </div>
            <div>
                <div class="angka">120</div>
                <div>Alumni Terdaftar</div>
            </div>
            <div>
                <div class="angka">120</div>
                <div>Lowongan Kerja</div>
            </div>
        </section>


    </section>

    <section class="section-last">
        
    </section>
    
    </main>
</body>

</html>
