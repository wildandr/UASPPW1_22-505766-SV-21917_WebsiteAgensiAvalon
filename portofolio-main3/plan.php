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
    <!-- proyek Start  -->
    <section id="proyek" class="pt-36 pb-32 bg-slate-100">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Avalon Agency</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Price List</h2>
            <p class="font-medium text-md text-second md:text-lg">Daftar harga yang dibuat dapat dikostumisasi jika terdapat suatu kebutuhan tertentu. untuk selengkapnya, dapat menghubungi terlebih dahulu pihak kami untuk melakukan diskusi maupun kostumisasi.</p>
          </div>
        </div>
        <div class="flex flex-wrap">
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden mb-10">
              <img src="dist/img/galeri/company-website.jpg" alt="Pengembangan Perangkat Lunak" class="w-full" />
              <div class="py-8 px-6">
                <h2 class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Pengembangan Aplikasi dan Design <br>
                  <span class="text-primary">Only Rp 1,500K</span></h2>
                <p class="font-medium text-base text-second mb-4">Konsultasikan kebutuhan pembuatan aplikasi anda. Kami siap membantu anda menyelesaikan permasalahan yang ada</p>
                <a
              href="#hubungi"
              class="text-base font-semibold bg-primary text-white max-xl: py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden mb-10">
              <img src="dist/img/galeri/it-consulting.webp" alt="Program Kasir" class="w-full" />
              <div class="py-8 px-6">
                <h2 class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Social Media Strategy Analyst <br>
                  <span class="text-primary">Only 500K</span></h2>
                <p class="font-medium text-base text-second mb-4">Lakukan analisis stategi pemasaran anda dan peroleh pendapatan yang lebih prima dengan prediksi yang kami berikan</p>
                <a
              href="#hubungi"
              class="text-base font-semibold bg-primary text-white max-xl: py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden mb-10">
              <img src="dist/img/galeri/download.jpg" alt="Program Kasir" class="w-full" />
              <div class="py-8 px-6">
                <h2 class="mb-3 font-semibold text-xl text-dark hover:text-primary truncate">IT Consulting <br>
                  <span class="text-primary">Only Rp 1000K</span></h2>
                <p class="font-medium text-base text-second mb-4">Konsultasikan kebutuhan informasi anda, awasi selalu keamanan siber anda. Kami siap membantu untuk itu</p>
                <a
              href="#hubungi"
              class="text-base font-semibold bg-primary text-white max-xl: py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
              >Choose Plan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Proyek END -->
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
                  <a href="#proyek" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Proyek</a>
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
    <!-- Hubungi Start -->
    <section id="hubungi" class="pt-36 pb-32">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h1 class="font-semibold text-lg text-primary mb-2">Hubungi</h1>

            <p class="font-medium text-md text-second md:text-2xl"> Segera hubungi kami agar dapat segera membantu menyelesaikan segala permasalahan anda</p>
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
    alert("apakah anda yakin dengan informasi yang anda masukkan?");
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
                <a href="#proyek" class="inline-block text-base hover:text-primary">Proyek</a>
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
