<html lang="en" class="scroll-smooth hover:scroll-auto" id="top" style="">

<head>
    <meta charset="utf-8">
    <link rel="preload" as="font" href="/_next/static/media/c22ccc5eb58b83e1-s.p.woff2" crossorigin=""
        type="font/woff2">
    <link rel="preload" as="image" href="/images/icons/facebook-blue.svg">
    <link rel="preload" as="image" href="/images/icons/twitter-blue.svg">
    <link rel="preload" as="image" href="/images/icons/instagram-blue.svg">
    <link rel="preload" as="image" href="/images/icons/hand.svg">
    <link rel="preload" as="image" href="/images/about/1.png">
    <link rel="preload" as="image" href="/images/brand/1.svg">
    <link rel="preload" as="image" href="/images/brand/2.svg">
    <link rel="preload" as="image" href="/images/brand/3.svg">
    <link rel="preload" as="image" href="/images/brand/4.svg">
    <link rel="preload" as="image" href="/images/brand/5.svg">
    <link rel="stylesheet" href="{{asset('css/c2a3028c6deb1ca1.css')}}" data-precedence="next">
    <link rel="stylesheet" href="{{asset('css/b2c2cec9e7165a83.css')}}" data-precedence="next">
    <link rel="preload" href="{{asset('chunks/webpack-2b9edb1ce47cf5aa.js')}}" as="script" fetchpriority="low">
    <script src="{{asset('chunks/596-acdbb355c3044a49.js')}}" async=""></script>
    <script src="{{asset('chunks/596-acdbb355c3044a49.js')}}" async=""></script>
    <script src="{{asset('chunks/main-app-529f99db22ce146c.js')}}" async=""></script>
    <link rel="preload" as="image" href="{{asset('images/brand/6.svg')}}">
    <link rel="preload" as="image" href="{{asset('images/brand/7.svg')}}">
    <link rel="preload" as="image" href="{{asset('images/brand/8.svg')}}">
    <link rel="preload" as="image" href="{{asset('images/brand/9.svg')}}">
    <link rel="preload" as="image" href="{{asset('images/brand/10.svg')}}">
    <script src="{{asset('chunks/polyfills-78c92fac7aa8fdd8.js')}}" nomodule=""></script>

    @vite('resources/css/app.css')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="16x16">
    <meta name="next-size-adjust">
</head>

<body class="__className_127116">
 
    <div class="py-5 shadow-sm bg-white  z-50 fixed w-full left-0 right-0 top-0 transition-all bg-white">
        <div class="container">
            <div class="flex gap-4 items-center justify-between "><a class="logo py-1" href="/"><img alt=""
                        loading="lazy" width="134" height="29" decoding="async" data-nimg="1" sizes="50vw"
                        src="{{asset('images/logo2c77.png')}}"
                        style="color: transparent;"></a>
                <div
                    class="items-center justify-end header-right hidden lg:flex lg:items-center lg:w-auto lg:space-x-12">
                    <div class="navbar mr-4 flex">
                        <li class="dropdown relative"><a
                                class="mx-3 text-base font-medium text-pgray-600 hover:text-primary-500"
                                href="/">Accueil</a>
                           
                        </li>
                        <li><a class="mx-3 text-base font-medium text-pgray-600 hover:text-primary-500"
                                href="{{route('job.index')}}">Jobs</a></li>
                      
                        <li><a class="mx-3 text-base font-medium text-pgray-600 hover:text-primary-500"
                                href="{{route('actuality.index')}}">Actualités</a></li>
                       
                        <li><a class="mx-3 text-base font-medium text-pgray-600 hover:text-primary-500"
                                href="/admin">Dashboard</a></li>
                    </div><a
                        class="text-white btn bg-primary-500 hover:bg-primary-800 transition duration-150 rounded-md px-5 cursor-pointer"
                        href="{{route('auth.signin')}}">S'inscrire</a>
                </div>
                <div class="lg:hidden"><button
                        class="navbar-burger flex items-center py-2 px-3 text-primary-500 hover:text-primary-700 rounded border border-primary-200 hover:border-primary-300"><svg
                            class="fill-current h-4 w-4" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg></button></div>
            </div>
        </div>
    </div>
    <div class="hidden navbar-menu relative z-50 transition duration-300">
        <div class="navbar-backdrop fixed inset-0 bg-pgray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto transition duration-300">
            <div class="flex items-center mb-8 justify-between"><a
                    class="logo font-bold px-3 py-1 rounded-lg max-w-[100px] text-center text-2xl"
                    href="/">Prexjob</a><button class="navbar-close"><svg
                        class="h-6 w-6 text-pgray-400 cursor-pointer hover:text-primary-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg></button></div>
            <div>
                <ul class="mobile-menu">
                    <li class="mb-1 menu-item-has-children rounded-xl "><span class="menu-expand">+</span><a
                            class="block p-3 text-sm text-pgray-500 hover:bg-primary-50/50  hover:text-primary-500"
                            href="#">Acceuil</a>
                       
                    </li>
                    <li class="mb-1 rounded-xl"><a
                            class="block p-3 text-sm text-pgray-500 hover:bg-primary-50/50  hover:text-primary-500 rounded-xl"
                            href="/jobs">Jobs</a></li>
                    
                   
                    <li class="mb-1 rounded-xl"><a
                            class="block p-3 text-sm text-pgray-500 hover:bg-primary-50/50  hover:text-primary-500 rounded-xl"
                            href="/blog">Actualités</a></li>
                   
                    <li class="mb-1"><a
                            class="block p-3 text-sm text-pgray-500 hover:bg-primary-50/50  hover:text-primary-500"
                            href="/admin">Dashboard</a></li>
                </ul>
                <div class="mt-4 pt-6 border-t border-pgray-100"><a
                        class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-primary-400 hover:bg-primary-500   text-white rounded"
                        href="#">S'inscrire</a><a
                        class="block px-4 py-3 mb-2 text-xs text-center text-primary-500 hover:text-primary-700 font-semibold leading-none border border-primary-200 hover:border-primary-300 rounded"
                        href="#">Se connecter</a></div>
            </div>
            <div class="mt-auto">
                <p class="my-4 text-xs text-pgray-400"><span>Get in Touch</span><a
                        class="text-primary-500 hover:text-primary-500 underline" href="#"> contact@Prexjob.com</a></p>
                <a class="inline-block px-1" href="#"><img src="{{asset('images/icons/facebook-blue.svg')}}"
                        alt=""></a><a class="inline-block px-1" href="#"><img
                        src="{{asset('images/icons/twitter-blue.svg')}}" alt=""></a><a class="inline-block px-1"
                    href="#"><img src=" {{asset('images/icons/instagram-blue.svg')}} " alt=""></a>
            </div>
        </nav>
    </div>


