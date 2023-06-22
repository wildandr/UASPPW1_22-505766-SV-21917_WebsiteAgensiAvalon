<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="web portofolio Avalon Agency" />
    <meta name="author" content="Avalon Agency" />
    <meta name="keywords" content="web portofolio Wildan Dzaky Ramadhani birul tailwindcss" />
    <link rel="stylesheet" href="dist/output.css" />
    <title>Portofolio | Avalon Agency</title>
  </head>
  <body>
    <!-- section hero -->
    <section id="home" class="pt-36 bg-black">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Driving Bussiness Transformation <span class="block font-bold text-dark text-4xl mt-1"> Unlocking Potential through 
              Digital Marketing and
              IT Consulting</span></h1>
            <h2 class="font-medium text-slate-500 text-lg mt-1 mb-5">Design |<span class="text-dark"> Develop |</span><span class="text-primary">Consultation</span></h2>
            <p class="font-medium text-slate-400 mb-10 leading-relaxed">Explore the possibilities with our comprehensive digital
              marketing and IT consulting solutions.</p>
            <a
              href="#hubungi"
              class="text-base font-semibold bg-primary text-white py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Contact Us</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:mt-9 lg:right-0">
              <img src="dist/img/galeri/scale.webp" alt="Avalon Agency" />
              <span class="absolute bottom-20 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                <svg width="400" class="animate-bounce-slow" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#A559FF"
                    d="M70.7,-17.1C80,5.6,67.8,41.1,46.7,54C25.6,66.9,-4.5,57.2,-25.3,40.7C-46.2,24.1,-58,0.7,-52.2,-17C-46.5,-34.8,-23.2,-46.9,3.7,-48.2C30.7,-49.4,61.5,-39.7,70.7,-17.1Z"
                    transform="translate(100 100) scale(1,1) "
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero section END -->
    <!-- tentang start -->
    <section id="tentang" class="pt-36 pb-32">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-md">Avalon Agency</h4>
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Who are we?</h2>
            <p class="font-medium text-base text-second max-w-xl lg:text-lg">
              We are a digital marketing agency and IT consultancy committed to helping businesses thrive and succeed in the digital era, providing expertise in digital marketing and IT solutions to optimize online presence and enhance technology systems.
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-8">Our Goals</h3>
            <p class="font-medium text-base text-second mb-6 lg:text-lg">Our goals at Avalon website are to provide clear and comprehensive information about the digital marketing and IT consulting services we offer to our clients.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- tentang end -->
    <!-- Headder section Start -->
    <header class="bg-black absolute top-0 left-0 w-full flex items-center z-10">
      <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <a href="#home" class="font-bold text-2xl block py-6 uppercase bg-clip-text text-transparent bg-gradient-to-r from-primary to-violet-500">Avalon</a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Home</a>
                </li>
                <li class="group">
                  <a href="#tentang" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">About</a>
                </li>
                <li class="group">
                  <a href="#galeri" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Project</a>
                </li>
                <li class="group">
                  <a href="#skill" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Clients</a>
                </li>
                <li class="group">
                  <a href="plan.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Plan</a>
                </li>
                <!-- <li class="group">
                  <a href="#hubungi" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Hubungi</a>
                </li> -->
                <li class="group">
                  <a href="#hubungi" class="text-base text-dark py-2 mx-4 flex bg-primary rounded-full hover:opacity-80 hover:shadow-lg font-semibold lg:py-4 px-6"
                    >Contact
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Headder Section END -->
    <!-- Our Project Start -->
    <section id="galeri" class="pt-36 pb-16 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary uppercase">Avalon Agency</h4>
            <h2 class="font-bold text-dark mt-2 text-3xl mb-4">Project Portofolio</h2>
            <p class="font-medium text-md text-second">Browse Our Recent Project
              for Knowing Our Ability </p>
          </div>
        </div>
        <div class="w-full py-8 px-6 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="mb-12 py-8 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="dist/img/galeri/Artboard 1 copy 2backron jadi 1.png" class="pb-5 scale-50 transition ease-in-out hover:scale-100" width="w-full" alt="dokumentasi proyek" />
              <h3 class="font-semibold text-xl text-dark mb-3 mt-5 mr-3 ">Design Website Kafe</h3>
              <p class="font-medium text-base text-second">Pembuatan desain website dengan goals website mengimplementasikan estetika kafe</p>
            </div>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden m-4">
              <img src="dist/img/galeri/issaonline 2.png" class="pb-5 scale-50 transition ease-in-out hover:scale-100" width="w-full" alt="dokumentasi proyek" />
              <h3 class="font-semibold text-xl text-dark mb-3 mt-5">issaonline certified website</h3>
              <p class="font-medium text-base text-second">Pembuatan website sertifikasi trainer fitnes. Terdapat dalam desain mobide dan dekstop.</p>
            </div>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="dist/img/galeri/mgmp2.png" class="pb-5 scale-50 transition ease-in-out hover:scale-100" width="w-full" alt="SFM 2015" />
              <h3 class="font-semibold text-xl text-dark mb-4 mt-5">Website Musyawarah Guru</h3>
              <p class="font-medium text-base text-second">Pembuatan design website untuk Musyawarah Guru Mata Pelajaran Sejarah Kebudayaan Islam (MGMP) MA SKI DIY</p>
            </div>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="dist/img/galeri/klansek.png" class="pb-5 scale-50 transition ease-in-out hover:scale-100" width="w-full" alt="SFM 2015" />
              <h3 class="font-semibold text-xl text-dark mb-3 mt-5"> Institusi Klansek</h3>
              <p class="font-medium text-base text-second">Pembuatan desain website untuk membantu anak-anak mendapatkan institusi pendidikan yang tepat. Klien berasal di Rusia sehingga menggunakan bahasa yang digunakan.</p>
            </div>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="rounded-md shadow-md overflow-hidden">
              <img src="dist/img/galeri/bookteraphy.png" class="pb-5 scale-50 transition ease-in-out hover:scale-100" width="w-full" alt="SFM 2015" />
              <h3 class="font-semibold text-xl text-dark mb-3 mt-5">BookTheraphy Website</h3>
              <p class="font-medium text-base text-second">Pembuatan Website yang bertujuan untuk melakukan kampanye membaca buku, serta menyediakan toko buku yang dapat di order secara daring </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Saya END -->
    <!-- my skill Start -->
    <section id="skill" class="pt-36 pb-32 bg-slate-900">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary uppercase">Avalon Agency</h4>
            <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Clients Record</h2>
            <p class="font-medium text-md text-second md:text-lg"></p>
          </div>
        </div>
        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center">
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Company logo-1.png" alt="Python" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Company logo-2.png" alt="boostrap" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Company logo-3.png" alt="Tailwindcss" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Company logo-4.png" alt="Debian" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Company logo.png" alt="mikrotik" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Vector-1.png" alt="Microsoft Office" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Vector-2.png" alt="HTML" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-20 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Vector.png" alt="Flask" />
            </a>
            <a href="#" class="max-w-[120px] mx-4 py-4 grayscale opacity-20 transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
              <img src="dist/img/logo/Vector-3.png" alt="Flask" />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- my skill END -->
    <!-- Hubungi Start -->
    <section id="hubungi" class="pt-36 pb-32">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Hubungi</h4>

            <p class="font-medium text-md text-second md:text-2xl">Silahkan isi form yang telah disediakan untuk menghubungi Saya</p>
          </div>
        </div>

        <form>
          <div class="w-full lg:w-2/3 mx-auto">
            <div class="w-full mb-8 px-4">
              <label for="nama" class="text-base text-primary font-bold">Nama</label>
              <input type="text" id="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" />
            </div>
            <div class="w-full mb-8 px-4">
              <label for="email" class="text-base text-primary font-bold">E-Mail</label>
              <input
                type="email"
                id="email"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
              />
            </div>
            <div class="w-full mb-8 px-4">
              <label for="pesan" class="text-base text-primary font-bold">Pesan</label>
              <textarea type="text" id="pesan" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
            </div>
            <div class="w-full">
              <button id="kirim" name="submit" onclick="notif()" class="text-base font-semibold bg-primary rounded-full py-3 px-8 w-full hover:opacity-80 hover:shadow-lg transition-500">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <script>
  function notif() {
    var nama = document.getElementById("nama").value;
    var email = document.getElementById("email").value;
    var pesan = document.getElementById("pesan").value;

    // Kirim formulir ke proses_formulir.php
    var xhr = new XMLHttpRequest();
    var url = "proses_formulir.php";
    var params = "nama=" + encodeURIComponent(nama) + "&email=" + encodeURIComponent(email) + "&pesan=" + encodeURIComponent(pesan);

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Tampilkan pesan atau respons dari proses_formulir.php
        alert(xhr.responseText);
      }
    };

    xhr.send(params);
  }
</script>


    <!-- Hubungi END -->
    <!-- footer start -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#0f172a"
        fill-opacity="1"
        d="M0,256L48,261.3C96,267,192,277,288,288C384,299,480,309,576,282.7C672,256,768,192,864,181.3C960,171,1056,213,1152,213.3C1248,213,1344,171,1392,149.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
    <footer class="bg-dark w-full md:text-center">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
            <h2 class="text-white mb-3">Eternal Noble Divine</h2>
            <h3>Kirim Email ke:</h3>
            <p>wildandzaky4@gmail.com</p>
            <p>Gang Sekolahan RT 008 RW 004 kec. Menganti Kab. Kebumen Jawa Tengah</p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-slate-200 mb-5">Kategori yang terhubung</h3>
            <ul class="text-slate-300">
              <li>
                <a href="#" class="inline-block text-base hover:text-primary">Hubungi</a>
              </li>
              <li>
                <a href="#" class="inline-block text-base hover:text-primary">Tentang Saya</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-slate-200 mb-5">Tautan</h3>
            <ul class="text-slate-300">
              <li>
                <a href="#home" class="inline-block text-base hover:text-primary">Beranda</a>
              </li>
              <li>
                <a href="#tentang" class="inline-block text-base hover:text-primary">Tentang Saya</a>
              </li>
              <li>
                <a href="#galeri" class="inline-block text-base hover:text-primary">Galeri</a>
              </li>
              <li>
                <a href="#skill" class="inline-block text-base hover:text-primary">Kemampuan</a>
              </li>
              <li>
                <a href="plan.php" class="inline-block text-base hover:text-primary">Plan</a>
              </li>
              <li>
                <a href="#hubungi" class="inline-block text-base hover:text-primary">Hubungi</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full pt-10 border-t border-slate-700">
          <p class="font-medium text-sm text-primary text-center pb-10">dibuat oleh wildandzaky4 menggunakan Tailwindcss</p>
        </div>
      </div>
    </footer>
    <!-- footer end -->
    <script src="dist/js/script.js"></script>
  </body>
</html>
