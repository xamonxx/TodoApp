<!DOCTYPE html>
<html data-theme="">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="./assets/css/custom.css" type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <!-- Tambahkan ini sebelum </body> -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<style type="text/tailwindCss"></style>

<body>
  <!-- start navbar -->
  <section class="fixed z-100 navbar glass shadow-md py-2 px-4 lg:px-12">
    <div class="flex-1">
      <a class="btn btn-ghost text-info text-2xl">TodoApp 📝</a>
    </div>
    <div class="flex-none">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul tabindex="0"
          class="lg:hidden menu menu-md dropdown-content bg-base-100 rounded-box z-1 mt-3 w-42 p-2 left-[-120px] absolute shadow z-100">
          <li><a href="#home">Home</a></li>
          <li><a href="#fitur">Fitur </a></li>
          <li><a href="#about">About </a></li>
          <li><a href="#testimoni">Testimonial </a></li>
          <li><a href="#contact">Conatct</a></li>
        </ul>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1 font-medium text-xl">
            <li><a href="#home">Home</a></li>
            <li><a href="#fitur">Fitur</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#testimoni">Testimonial</a></li>
            <li><a href="#contact">Conatct</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end navbar -->
  <section id="home" class="dots-pattern relative max-w-full pb-8 pt-20 lg:pt-48 lg:pb-[70px]">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
      <div
        class="absolute inset-0 -z-10 h-full w-full [background:radial-gradient(125%_125%_at_50%_10%,var(--color-base-300)_40%,var(--color-primary)_100%)]">
      </div>
    </div>

    <!-- Hero Content -->
    <div class="container mx-auto flex px-5 py-16 md:flex-row flex-col items-center justify-betweenz-10">
      <div class="lg:flex-grow md:w-1/2 mb-10 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="sm:text-4xl text-3xl mb-4 font-semibold">
          Todo App yang Bikin Kamu <span class="text-primary">#AntiLupa</span>
        </h1>
        <p class="mb-8 leading-relaxed">
          Aplikasi to-do list simpel tapi bertenaga, bantu kamu fokus,
          produktif, dan bebas dari drama lupa tugas. Cocok buat kamu yang
          ingin hidup lebih teratur tanpa ribet.
        </p>
        <div class="flex justify-center">
          <a href="https://github.com/xamonxx/TodoApp"
            class="mr-4 flex items-center gap-4 rounded-md bg-neutral px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-black z-60">
            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2005_10818)">
                <path
                  d="M12 0.674805C5.625 0.674805 0.375 5.8498 0.375 12.2998C0.375 17.3998 3.7125 21.7498 8.3625 23.3248C8.9625 23.4373 9.15 23.0623 9.15 22.7998C9.15 22.5373 9.15 21.7873 9.1125 20.7748C5.8875 21.5248 5.2125 19.1998 5.2125 19.1998C4.6875 17.8873 3.9 17.5123 3.9 17.5123C2.85 16.7623 3.9375 16.7623 3.9375 16.7623C5.1 16.7998 5.7375 17.9623 5.7375 17.9623C6.75 19.7623 8.475 19.2373 9.1125 18.8998C9.225 18.1498 9.525 17.6248 9.8625 17.3248C7.3125 17.0623 4.575 16.0498 4.575 11.6248C4.575 10.3498 5.0625 9.3373 5.775 8.5498C5.6625 8.2873 5.25 7.0873 5.8875 5.4748C5.8875 5.4748 6.9 5.1748 9.1125 6.6748C10.05 6.4123 11.025 6.2623 12.0375 6.2623C13.05 6.2623 14.0625 6.3748 14.9625 6.6748C17.175 5.2123 18.15 5.4748 18.15 5.4748C18.7875 7.0498 18.4125 8.2873 18.2625 8.5498C19.0125 9.3373 19.4625 10.3873 19.4625 11.6248C19.4625 16.0498 16.725 17.0623 14.175 17.3248C14.5875 17.6998 14.9625 18.4498 14.9625 19.4998C14.9625 21.0748 14.925 22.3123 14.925 22.6873C14.925 22.9873 15.15 23.3248 15.7125 23.2123C20.2875 21.6748 23.625 17.3623 23.625 12.2248C23.5875 5.8498 18.375 0.674805 12 0.674805Z" />
              </g>
              <defs>
                <clipPath id="clip0_2005_10818">
                  <rect width="24" height="24" fill="white" />
                </clipPath>
              </defs>
            </svg>
            Star on Github
          </a>
          <a href="app/index.php"
            class="text-white bg-primary py-4 px-6 hover:saturate-60 rounded font-medium z-50">Mulai Atur Harimu</a>
        </div>
      </div>
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 flex justify-center items-center">
        <img
          class="lg:hidden slide-top-alternate-reverse object-cover object-center lg:scale-90 drop-shadow-xl shadow-sky-500"
          width="" alt="hero" src="./assets/img/test3.PNG" />
        <!-- From Uiverse.io by andrew-demchenk0 -->
        <div class="pyramid-loader absolute z-10 lg:mt-[0px] mt-[800px]">
          <div class="wrapper">
            <span class="side side1"></span>
            <span class="side side2"></span>
            <span class="side side3"></span>
            <span class="side side4"></span>
            <span class="shadow"></span>
          </div>
        </div>
      </div>
      <!-- From Uiverse.io by andrew-demchenk0 -->
    </div>
  </section>
  <!-- About -->
  <section id="fitur" class="pb-8 pt-20 bg-base-200 lg:pb-[50px] lg:pt-[120px]">
    <div class="container px-4 mx-auto">
      <div data-aos="fade-down" class="-z-10 text-center mx-auto mb-12 max-w-[485px] lg:mb-[70px]">
        <span class="block mb-2 text-lg font-semibold text-primary">
          Features
        </span>
        <h2 class="mb-3 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2]">
          Fitur Utama
        </h2>
        <p class="text-base text-body-color">
          Dirancang untuk Mempermudah Aktivitas Harianmu dengan Berbagai Fitur
          Praktis, Cerdas, dan Mudah Digunakan Kelola tugas, atur prioritas,
          dan ubah tema sesuai mood—semua dalam satu aplikasi yang ringan dan
          intuitif.
        </p>
      </div>

      <!-- Grid layout start -->
      <div class="grid gap-8 grid-cols-2 lg:grid-cols-4 px-4">
        <!-- Item 1 -->
        <div>
          <div class="mb-12 group" data-aos="zoom-in">
            <div data-aos="zoom-n"
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="50px" src="assets/img/theme.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Ganti Tema</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Mengubah tampilan aplikasi ke mode terang atau gelap sesuai
              preferensi pengguna.
            </p>
          </div>
        </div>

        <!-- Item 2 -->
        <div>
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="45px" src="assets/img/Search.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Fitur Pencarian</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Memudahkan pengguna menemukan tugas dengan cepat berdasarkan
              kata kunci.
            </p>
          </div>
        </div>

        <!-- Item 3 -->
        <div>
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="40px" src="assets/img/add.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Pembuatan Tugas</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Menambahkan tugas baru ke dalam daftar dengan mudah dan cepat.
            </p>
          </div>
        </div>

        <!-- Item 4 -->
        <div>
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="40px" src="assets/img/sampah.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Hapus Tugas</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Menghapus tugas yang sudah tidak diperlukan dari daftar.
            </p>
          </div>
        </div>

        <!-- Item 5 -->
        <div>
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="40px" src="assets/img/pin.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Sematkan Tugas</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Menandai tugas penting agar selalu tampil di bagian atas daftar.
            </p>
          </div>
        </div>

        <!-- Item 6 -->
        <div>
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="40px" src="assets/img/ceklist.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Ceklist Tugas</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Menandai tugas yang telah selesai dikerjakan agar pengguna lebih mudah memantau progres daftar tugas.
            </p>
          </div>
        </div>

        <!-- Item 7 -->
        <div class="">
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="40px" src="assets/img/pagination.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Pagination</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Membagi daftar tugas menjadi beberapa halaman untuk memudahkan navigasi dan menjaga tampilan tetap rapi
            </p>
          </div>
        </div>

        <!-- Item 8 -->
        <div class="">
          <div class="mb-12 wow fadeInUp group" data-aos="zoom-in">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute left-0 top-0 -z-1 mb-8 h-[70px] w-[70px] rotate-[25deg] rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
              <img class="" width="40px" src="assets/img/update.png" />
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark">Ubah Tugas</h4>
            <p class="mb-8 text-body-color lg:mb-9">
              Mengedit isi tugas yang sudah dibuat sesuai kebutuhan.
            </p>
          </div>
        </div>
      </div>
      <!-- Grid layout end -->
    </div>
  </section>

  <!-- ====== About Section Start -->
  <section id="about"
    class="z-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-[#0f172a] to-[#334155] pb-8 pt-20 lg:pb-[70px]">
    <div class="container px-4 mx-auto">
      <div>
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 max-w-[540px] lg:mb-0">
              <h2 data-aos="fade-up" class="mb-5 text-3xl font-bold leading-tight sm:text-[40px] sm:leading-[1.2]">
                Tentang Aplikasi Ini
              </h2>
              <p data-aos="fade-right" class="mb-10 text-base leading-relaxed text-body-color">
                Aplikasi to-do list ini dirancang untuk bantu kamu tetap fokus
                dan produktif, tanpa bikin ribet. Selain mudah digunakan,
                aplikasi ini juga mendukung berbagai tema tampilan yang bisa
                kamu pilih sesuai mood dan selera — dari yang simpel sampai
                yang colorful, semua ada!
                <br />
                <br />
                Cocok untuk pelajar, pekerja, atau siapa pun yang ingin
                mengatur tugas harian dengan cara yang lebih personal dan
                menyenangkan.
              </p>
              <a data-aos="zoom-in-up" 
                href="app/index.php"
                class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark">
                Coba TodoApp
              </a>
            </div>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
              <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]" data-aos="zoom-in">
                  <img src="./assets/img/demoAbout.png" alt="about image"
                    class="object-cover object-center w-full h-full" />
                </div>
              </div>

              <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                <div data-aos="zoom-in"
                  class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                  <img src="./assets/img/demoAbout2.png" alt="about image"
                    class="object-cover object-center w-full h-full" />
                </div>

                <div data-aos="zoom-in-up"
                  class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                  <div>
                    <span class="block text-2xl font-extrabold text-white">
                      ILUSTRASI
                    </span>
                    <span class="block text-base font-semibold text-white">
                      Pengguna
                    </span>
                    <span class="block text-base font-medium text-white text-opacity-70">
                      Aplikasi
                    </span>
                  </div>
                  <div>
                    <span class="absolute top-0 left-0 -z-10">
                      <svg width="106" height="144" viewBox="0 0 106 144" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304"
                          transform="rotate(-42.8643 -67 47.127)" fill="url(#paint0_linear_1416_214)" />
                        <defs>
                          <linearGradient id="paint0_linear_1416_214" x1="-10.3111" y1="47.127" x2="-10.3111"
                            y2="178.431" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                    <span class="absolute top-0 right-0 -z-10">
                      <svg width="130" height="97" viewBox="0 0 130 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563" height="140.614"
                          transform="rotate(-42.8643 0.86792 -6.67725)" fill="url(#paint0_linear_1416_215)" />
                        <defs>
                          <linearGradient id="paint0_linear_1416_215" x1="78.6495" y1="-6.67725" x2="78.6495"
                            y2="133.937" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                    <span class="absolute bottom-0 right-0 -z-10">
                      <svg width="175" height="104" viewBox="0 0 175 104" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.1" x="175.011" y="108.611" width="101.246" height="148.179"
                          transform="rotate(137.136 175.011 108.611)" fill="url(#paint0_linear_1416_216)" />
                        <defs>
                          <linearGradient id="paint0_linear_1416_216" x1="225.634" y1="108.611" x2="225.634" y2="256.79"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" />
                            <stop offset="1" stop-color="white" stop-opacity="0" />
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->

  <section id="testimoni" class="dots-pattern relative max-w-full pb-16 pt-32 lg:pb-[70px]">
    <!-- Background Pattern -->
    <div class="absolute inset-0 -z-10">
      <div data-aos="zoom-in-" data-aos-easing="linear" data-aos-duration="3000"
        class="absolute inset-0 h-full w-full bg-base-100 linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] bg-[size:6rem_4rem] [&>div]:absolute [&>div]:inset-0 [&>div]:bg-[radial-gradient(circle_500px_at_50%_200px,color-mix(in_srgb,var(--color-primary)_80%,transparent),transparent)]">
        <div></div>
      </div>
    </div>

    <!-- Hero Content -->
    <div class="z-10 flex h-full flex-col items-center justify-center px-4">
      <div class="z-10 max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">
        <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
          <div data-aos="fade-down" class="mb-12 space-y-5 md:mb-16 md:text-center">
            <div
              class="inline-block px-3 py-1 text-sm font-semibold text-white rounded-lg md:text-center text-cn bg-primary bg-opacity-60 hover:cursor-pointer hover:bg-opacity-40">
              Kata Mereka, Bukti Nyata
            </div>
            <h1 class="mb-5 text-2xl font-semibold md:text-center md:text-5xl">
              Suara Nyata dari Pengguna Hebat ToDoApp
            </h1>
            <p class="text-md text-neutral-content md:text-center md:text-2xl">
              Dipercaya oleh Tokoh-Tokoh Terkenal Dunia Teknologi
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
          <ul class="space-y-8">
            <li data-aos="zoom-in-left" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/kanyewest" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West" />
                      <div>
                        <h3 class="text-lg font-semibold">Kanye West</h3>
                        <p class="text-md">Rapper & Entrepreneur</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      ToDoApp bikin hidup saya lebih rapi dan seru. Ganti tema
                      sesuka hati, tugas pun cepat selesai!
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li data-aos="zoom-in-left" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/tim_cook" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook" />
                      <div>
                        <h3 class="text-lg font-semibold">Tim Cook</h3>
                        <p class="text-md">CEO of Apple</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      ToDoApp bantu saya tetap fokus dan disiplin. Temanya
                      bikin semangat tiap hari!
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li data-aos="zoom-in-left" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/kanyewest" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West" />
                      <div>
                        <h3 class="text-lg font-semibold">Kanye West</h3>
                        <p class="text-md">Rapper & Entrepreneur</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Tampilannya keren, gampang dipakai. Sejak pakai ToDoApp,
                      kerjaan lebih cepat kelar!
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li data-aos="zoom-in-left" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/tim_cook" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook" />
                      <div>
                        <h3 class="text-lg font-semibold">Tim Cook</h3>
                        <p class="text-md">CEO of Apple</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Jadwal harian makin rapi. Tema banyak, tampilannya kece!
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>

          <ul class="hidden space-y-8 sm:block">
            <li class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/paraga" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg shadow-xl glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal" />
                      <div>
                        <h3 class="text-lg font-semibold">Parag Agrawal</h3>
                        <p class="text-md">CEO of Twitter</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Aplikasi ini sangat membantu saya menyusun jadwal kerja.
                      Notifikasinya akurat dan interface-nya simpel, cocok
                      untuk pemakaian harian.
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/tim_cook" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg glass ring-1 ring-gray-900/5 shadow-xl">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook" />
                      <div>
                        <h3 class="text-lg font-semibold">Tim Cook</h3>
                        <p class="text-md">CEO of Apple</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Fitur sinkronisasi antar perangkatnya luar biasa. Saya
                      bisa lanjut kerja dari HP ke laptop tanpa hambatan.
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/paraga" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg glass ring-1 ring-gray-900/5 shadow-xl">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal" />
                      <div>
                        <h3 class="text-lg font-semibold">Parag Agrawal</h3>
                        <p class="text-md">CEO of Twitter</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Saya suka dengan fitur pengingatnya. Membuat saya lebih
                      disiplin menyelesaikan pekerjaan tepat waktu.
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/tim_cook" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg glass ring-1 ring-gray-900/5 shadow-xl">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook" />
                      <div>
                        <h3 class="text-lg font-semibold">Tim Cook</h3>
                        <p class="text-md">CEO of Apple</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Dengan tampilan yang minimalis, aplikasi ini memudahkan
                      saya fokus hanya pada tugas penting setiap hari.
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>

          <ul class="hidden space-y-8 lg:block">
            <li data-aos="zoom-in-right" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/satyanadella" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella" />
                      <div>
                        <h3 class="text-lg font-semibold">Satya Nadella</h3>
                        <p class="text-md">CEO of Microsoft</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Semua tugas bisa saya kelola dalam satu aplikasi.
                      Membuat pekerjaan lebih terorganisir dan produktivitas
                      meningkat.
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li data-aos="zoom-in-right" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman" />
                      <div>
                        <h3 class="text-lg font-semibold">Dan Schulman</h3>
                        <p class="text-md">CEO of PayPal</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Saya sangat terbantu dengan fitur kategori tugas.
                      Sekarang semua agenda bisa saya kelola dengan mudah dan
                      efisien.
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li data-aos="zoom-in-right" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/satyanadella" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella" />
                      <div>
                        <h3 class="text-lg font-semibold">Satya Nadella</h3>
                        <p class="text-md">CEO of Microsoft</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Fitur tema gelap membuat pengalaman bekerja malam hari
                      jadi lebih nyaman. Aplikasi ini sangat memperhatikan
                      detail pengguna.
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li data-aos="zoom-in-right" class="text-sm leading-6">
              <div class="relative group">
                <div
                  class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                </div>
                <a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                  <div class="relative p-6 space-y-6 leading-none rounded-lg bg-glass ring-1 ring-gray-900/5">
                    <div class="flex items-center space-x-4">
                      <img src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                        class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman" />
                      <div>
                        <h3 class="text-lg font-semibold">Dan Schulman</h3>
                        <p class="text-md">CEO of PayPal</p>
                      </div>
                    </div>
                    <p class="leading-normal text-md">
                      Saya bisa langsung menambahkan dan menyusun tugas hanya
                      dalam hitungan detik. Aplikasi ini benar-benar efisien
                      dan user-friendly.
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="dots-pattern z-10 flex h-full flex-col items-center justify-center pb-8 pt-20 px-4">
    <div data-aos="zoom-in-up" class="my-10">
      <div
        class="grid sm:grid-cols-2 items-center gap-16 p-8 mx-auto max-w-4xl glass p-4 shadow-[0px_0px_300px_0px_var(--tw-shadow-color)] rounded-md text-base-content font-sans"
        style="
            --tw-shadow-color: color-mix(
              in srgb,
              var(--color-primary) 48%,
              transparent
            );
          ">
        <div>
          <h1 class="text-2xl font-extrabold">
            Butuh Bantuan atau Punya Masukan?
          </h1>
          <p class="text-sm mt-3">
            Kami senang mendengar dari kamu! Kalau ada pertanyaan, bug yang
            perlu diperbaiki, atau ide fitur keren buat ToDoApp ini, jangan
            ragu buat hubungi kami
          </p>

          <div class="mt-12">
            <h2 class="text-lg font-extrabold">Email</h2>
            <ul class="mt-3">
              <li class="flex items-center">
                <div class="bg-base-200 h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <!-- Email Icon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                    class="text-white" viewBox="0 0 479.058 479.058">
                    <path
                      d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z" />
                  </svg>
                </div>
                <a target="_blank" href="https://todoapp.solusikita.site" class="text-primary text-sm ml-3">
                  <small class="block">Mail</small>
                  <strong>https://todoapp.solusikita.site</strong>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <form class="space-y-4">
          <div class="mb-4">
            <label class="block mb-1" for="name">Nama </label>
            <input
              class="w-full px-4 py-2 bg-glass rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition duration-300"
              placeholder="Masukan nama " type="text" />
          </div>
          <div class="mb-4">
            <label class="block mb-1" for="email"> Email</label>
            <input
              class="w-full px-4 py-2 bg-glass rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition duration-300"
              placeholder="Masukan email" name="email" id="email" type="email" />
          </div>
          <div class="mb-4">
            <label class="block mb-1" for="message">Pesan</label>
            <textarea
              class="w-full px-4 py-2 bg-glass rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition duration-300"
              rows="4" placeholder="Ketik pesan anda di sini" name="message" id="message"></textarea>
          </div>
          <button class="w-full btn btn-active glass rounded-lg" type="submit">
            kirim
          </button>
        </form>
      </div>
    </div>
  </section>
  <footer class="dots-pattern pb-8 pt-20 text-gray-400 body-font">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <span class="ml-3 text-xl">TodoApp 📝 </span>
      </a>
      <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">
        © 2025 TodoApp —
        <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank"
          rel="noopener noreferrer">@amonxz___</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-primary">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5 text-primary" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5 text-primary" viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
            </path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-5 h-5 text-primary" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-400">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0"
            class="w-5 h-5 text-primary" viewBox="0 0 24 24">
            <path stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    // Fungsi untuk mengubah tema
    function setTheme(theme) {
      document.documentElement.setAttribute("data-theme", theme);
      localStorage.setItem("theme", theme); // Simpan tema yang dipilih
    }

    // Memuat tema yang tersimpan di localStorage saat halaman dimuat
    window.onload = function () {
      const savedTheme = localStorage.getItem("theme") || "default"; // Tema default jika tidak ada yang disimpan
      setTheme(savedTheme); // Terapkan tema yang tersimpan

      // Set input radio yang dipilih sesuai tema yang tersimpan
      const themeRadio = document.querySelector(
        `input[value="${savedTheme}"]`
      );
      if (themeRadio) {
        themeRadio.checked = true;
      }

      // Event listener untuk setiap radio button
      const themeControllers = document.querySelectorAll(".theme-controller");
      themeControllers.forEach((controller) => {
        controller.addEventListener("change", (e) => {
          setTheme(e.target.value);
        });
      });
    };
  </script>
</body>

</html>