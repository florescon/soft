
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Franco's - Restaurant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Food & Restaurant" name="description">
        <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, Restaurant, Admin, Landing" name="keywords">
        <meta name="author" content="Franco's">
        <meta name="website" content="https://francos.in">
        <meta name="email" content="support@francos.in">
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('/img/francos.png') }}">

        <!-- Css -->
        <link href="{{ asset('css_frontend') }}/tobii.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('css_frontend') }}/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('css_frontend') }}/tailwind.min.css" rel="stylesheet" type="text/css">

        <style>

        </style>


    <link href="{{ asset('assets') }}/css/styles.css?v=1.0.3" rel="stylesheet" />

    @vite('resources/css/app.css')

    @livewireStyles

    @stack('after-styles')


    </head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container relative">
                <!-- Logo container-->
                <a class="logo" href="{{ url('/') }}">
                    <span class="inline-block dark:hidden">
                        <img width="100" src="{{ asset('/img/francos.png') }}" class="l-dark" alt="">
                        <img width="100" src="{{ asset('/img/francos.png') }}" class="l-light" alt="">
                    </span>
                    <img width="100" src="{{ asset('/img/francos.png') }}" class="hidden dark:inline-block" alt="">
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="dropdown inline-block relative pe-1">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle align-middle inline-flex search-dropdown" type="button">
                            <i data-feather="search" class="size-5 dark-icon"></i>
                            <i data-feather="search" class="size-5 white-icon text-white"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-5 z-10 md:w-52 w-48 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <div class="relative">
                                <i data-feather="search" class="size-4 absolute top-[9px] end-3"></i>
                                <input type="text" class="h-9 px-3 pe-10 w-full border-0 focus:ring-0 outline-none bg-white dark:bg-slate-900 shadow dark:shadow-gray-800" name="s" id="searchItem" placeholder="Buscar...">
                            </div>
                        </div>
                    </li>

                    <li class="dropdown inline-block relative ps-0.5">
                        <button data-dropdown-toggle="dropdown" class="dropdown-toggle size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-amber-500 border border-amber-500 text-white" type="button">
                            <i data-feather="shopping-cart" class="h-4 w-4"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-64 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden" onclick="event.stopPropagation();">
                            <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                                <li class="py-1.5 px-4">Carrito Vacío</li>
                            </ul>
                        </div>
                    </li>

                    <li class="inline-block ps-0.5">
                        <a href="{{ route('login') }}" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-amber-500 text-white">
                            <i data-feather="life-buoy" class="h-4 w-4"></i>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu nav-light justify-end">
                        <li><a href="#" class="sub-menu-item">Reservaciones</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->
        
        <!-- Start Hero -->
        <section class="relative md:py-20 py-20 bg-[url('../../../public/img_frontend/pages.jpg')] bg-no-repeat bg-bottom bg-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 to-slate-900/70"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 text-center mt-6">
                    <div>
                        <h5 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white mb-0">Nuestro Menú</h5>
                    </div>

                    <ul class="tracking-[0.5px] mb-0 inline-block mt-5">
                        <li class="inline-block capitalize font-medium duration-500 ease-in-out text-white/50 hover:text-white"><a href="{{ url('/') }}">Franco's</a></li>
                        <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="mdi mdi-chevron-right"></i></li>
                        <li class="inline-block capitalize font-medium duration-500 ease-in-out text-white" aria-current="page">Menus</li>
                    </ul>
                </div>
            </div>
        </section><!--end section-->
        <div class="relative">
            <div class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
                <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 items-center gap-6">
                    <div class="filters-group-wrap text-center">
                        <div class="filters-group">
                            <ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500 active" data-group="todo">Todo</li>
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="Entremeses">Entremeses</li>
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="Fajitas">Fajitas</li>
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="Pastas">Pastas</li>
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="Carnes">Carnes</li>
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="Burritos">Burritos</li>
                                <li class="inline-block text-sm uppercase font-medium mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="Bebidas">Bebidas</li>
                            </ul>
                        </div>
                    </div>
                </div><!--grid-->
            </div><!--end container-->

            <div class="container relative ">   
                <div id="grid" class="md:flex justify-center">

                    @foreach($foods as $food)

                        <div class="group lg:w-1/5 md:w-1/3 picture-item p-3 " data-groups='["{{ optional($food->category)->name }}"]'>
                            <img src="{{ asset('/storage/' . $food->image) }}" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">

                            <div class="mt-4 text-center">
                                <a href="" class="text-lg h5 block hover:text-amber-500 duration-500">{{ $food->name }}</a>
                                <span class="text-slate-400 mt-2 block">{{ $food->description ?? 'Desc' }}</span>

                                <h5 class="text-amber-500 font-medium mt-4">${{ $food->price }}</h5>
                            </div>
                        </div><!--end col-->
                    
                    @endforeach

                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Footer Start -->
        <footer class="relative bg-slate-950 dark:bg-slate-950/20 text-gray-200">    
            <div class="container relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid lg:grid-cols-3 md:grid-cols-2 justify-center gap-6">
                                <div class="text-center">
                                    <h5 class="tracking-[1px] text-gray-100 font-medium text-lg mb-4">Horario</h5>
                                    <p class="mb-2 text-gray-200/80">Lunes - Domingo: 13:00PM - 21:20PM</p>
                                </div>
                    
                                <div class="text-center">
                                    <h5 class="tracking-[1px] text-gray-100 font-medium text-lg mb-4">Reservaciones</h5>
                                    <p class="mb-2"><a href="tel:+152534-468-854" class="text-gray-200/80">+52 47 474 28 783</a></p>
                                    <p class="mb-0"><a href="mailto:contact@example.com" class="text-gray-200/80">contact@example.com</a></p>
                                </div>

                                <div class="text-center">
                                    <h5 class="tracking-[1px] text-gray-100 font-medium text-lg mb-4">Dirección</h5>
                                    <p class="mb-0 text-gray-200/80">Calle República #425 <br> Lagos de Moreno, Mexico</p>
                                </div>
                            </div><!--end grid-->

                    
                            <div class="grid grid-cols-1 mt-12">
                                <div class="text-center">
                                    <img src="{{ asset('/img/francos.png') }}" class="block mx-auto" alt="">
                                    <p class="max-w-xl mx-auto mt-6">Somos una empresa comprometida en ofrecer productos con ingredientes frescos a nuestros clientes para satisfacer sus necesidades y pasen agradable momentos</p>
                                </div>

                                <ul class="list-none text-center mt-6">
                                    <li class="inline"><a href="https://dribbble.com" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 hover:border-amber-500 rounded-md hover:bg-amber-500"><i data-feather="dribbble" class="size-4 align-middle" title="dribbble"></i></a></li>
                                    <li class="inline"><a href="http://linkedin.com/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 hover:border-amber-500 rounded-md hover:bg-amber-500"><i data-feather="linkedin" class="size-4 align-middle" title="Linkedin"></i></a></li>
                                    <li class="inline"><a href="https://www.facebook.com/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 hover:border-amber-500 rounded-md hover:bg-amber-500"><i data-feather="facebook" class="size-4 align-middle" title="facebook"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 hover:border-amber-500 rounded-md hover:bg-amber-500"><i data-feather="instagram" class="size-4 align-middle" title="instagram"></i></a></li>
                                    <li class="inline"><a href="https://twitter.com" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 hover:border-amber-500 rounded-md hover:bg-amber-500"><i data-feather="twitter" class="size-4 align-middle" title="twitter"></i></a></li>
                                    <li class="inline"><a href="mailto:support@francos.com" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 hover:border-amber-500 rounded-md hover:bg-amber-500"><i data-feather="mail" class="size-4 align-middle" title="email"></i></a></li>
                                </ul><!--end icon-->
                            </div><!--end grid-->
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container relative text-center">
                    <div class="grid md:grid-cols-1">
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Franco's.</p>
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
        <!-- Footer End -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>

        <div class="fixed top-[40%] -left-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code --> 

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-amber-500 text-white justify-center items-center"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="{{ asset('js_frontend') }}/shuffle.min.js"></script>
        <script src="{{ asset('js_frontend') }}/tobii.min.js"></script>
        <script src="{{ asset('js_frontend') }}/feather.min.js"></script>
        <script src="{{ asset('js_frontend') }}/plugins.init.js"></script>
        <script src="{{ asset('js_frontend') }}/app.js"></script>

    </body>
</html>