@extends('layouts.app')
@section('content')

<div class="intro-search section-padding relative">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-0 lg:gap-5 items-center">
            <div class="col-span-3 relative z-[1] text-center lg:text-left ">
                <div class="flex items-center justify-center lg:justify-start mb-5 wow animate__ animate__fadeInUp"
                    style="visibility: visible;"><img src="/images/icons/hand.svg" width="20" alt=""><span
                        class="ml-2 font-semibold text-primary-500" style="color: magenta;">Salut! Nous sommes Randap</span></div>
                <h1 class="font-medium text-3xl sm:text-4xl md:text-5xl xl:text-[56px] 2xl:text-7xl  text-slate-900 wow animate__ animate__fadeInUp"
                    style="visibility: visible;">RANDAP <br class="lg:block hidden"> Le Réseau des Anciennes de Notre
                    Dame du Plateau
                </h1>
                <p class="py-4 sm:py-8 text-lg text-gray-500 lg:max-w-xl wow animate__ animate__fadeInUp"
                    style="visibility: visible; color:blue" style="color:blue">Le Réseau des Anciennes de Notre Dame du Plateau est née de la volonté
                    des anciennes de Notre Dame du Plateau, dispersées dans divers groupes, amicales et associations de
                    s’unir</p>
                <div class="items-center  sm:inline-flex my-3 rounded-xl border-pgray-200 wow animate__ animate__fadeInUp"
                    style="visibility: visible;">


                </div>

            </div>
            <div class="col-span-2 ">
                <div class="relative z-[1] mt-8 lg:mt-0 ">
                    <div style="transform: translate3d(-12.59px, 4.06px, 0px);"><img alt="" loading="lazy" width="0"
                            height="0" decoding="async" data-nimg="1" class="my-4 rounded-xl mx-auto" sizes="100vw"
                            src="{{asset('images/pattern/bg2.webp')}}"
                            style="color: transparent; width: auto; height: auto;"><img alt="" loading="lazy"
                            width="350" height="100" decoding="async" data-nimg="1"
                            class="my-4 rounded-xl mx-auto absolute top-0 left-0 right-0"
                            src="{{asset('images/3.webp')}}" style="color: transparent;">
                        <div class="hidden lg:block"><img alt="" loading="lazy" width="70" height="70" decoding="async"
                                data-nimg="1"
                                class="rounded-full bg-primary-300 absolute left-[7%] top-[7%]  p-3 border border-pgray-100"
                                src="{{asset('images/avatar/1.png')}}" style="color: transparent;"><img alt=""
                                loading="lazy" width="70" height="70" decoding="async" data-nimg="1"
                                class="rounded-full bg-blue-300 absolute -left-[7%] top-[40%]  p-3 border border-pgray-100"
                                src="{{asset('images/avatar/6.png')}}" style="color: transparent;"><img alt=""
                                loading="lazy" width="70" height="70" decoding="async" data-nimg="1"
                                class="rounded-full bg-orange-300 absolute left-[7%] bottom-[7%]  p-3 border border-pgray-100"
                                src="{{asset('images/avatar/3.png')}}" style="color: transparent;"><img alt=""
                                loading="lazy" width="70" height="70" decoding="async" data-nimg="1"
                                class="rounded-full bg-green-300 absolute right-[7%] top-[7%]  p-3 border border-pgray-100"
                                src="{{asset('images/avatar/2.png')}}" &amp;w=256&amp;q=75" style="color: transparent;">
                            <img alt="" loading="lazy" width="70" height="70" decoding="async" data-nimg="1"
                                class="rounded-full bg-amber-300 absolute right-[7%] bottom-[7%]  p-3 border border-pgray-100"
                                src="{{asset('images/avatar/8.png')}}" style=" color: transparent;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-5 ">
            <div class="group cursor-pointer">
                <div
                    class="bg-primary-50/50 group-hover:bg-primary-500 transition duration-200 flex items-center rounded-xl px-10 py-7">
                    <div class="text-primary-500 group-hover:text-white text-4xl mr-5 wow animate__ animate__fadeInUp"
                        style="visibility: visible;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                            width="1em" height="1em" fill="currentColor">
                            <path
                                d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z">
                            </path>
                            <path
                                d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z">
                            </path>
                        </svg></div>
                    <div><span class="sm:text-2xl font-bold group-hover:text-white wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:magenta">+ </span><span
                            class="sm:text-2xl font-bold group-hover:text-white count wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:magenta">100</span>
                        <p class="text-xs sm:text-base text-pgray-400 group-hover:text-gray-200 wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:blue">Le réseau</p>
                    </div>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div
                    class="bg-primary-50/50 group-hover:bg-primary-500 transition duration-200 flex items-center rounded-xl px-10 py-7">
                    <div class="text-primary-500 group-hover:text-white text-4xl mr-5 wow animate__ animate__fadeInUp"
                        style="visibility: visible;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                            width="1em" height="1em" fill="currentColor">
                            <path
                                d="M5 2V0H0v5h2v6H0v5h5v-2h6v2h5v-5h-2V5h2V0h-5v2H5zm6 1v2h2v6h-2v2H5v-2H3V5h2V3h6zm1-2h3v3h-3V1zm3 11v3h-3v-3h3zM4 15H1v-3h3v3zM1 4V1h3v3H1z">
                            </path>
                        </svg></div>
                    <div><span class="sm:text-2xl font-bold group-hover:text-white wow animate__ animate__fadeInUp"
                            style="visibility: visible;color:magenta">+ </span><span
                            class="sm:text-2xl font-bold group-hover:text-white count wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:magenta">90</span>
                        <p class="text-xs sm:text-base text-pgray-400 group-hover:text-gray-200 wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:blue">Nos activités</p>
                    </div>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div
                    class="bg-primary-50/50 group-hover:bg-primary-500 transition duration-200 flex items-center rounded-xl px-10 py-7">
                    <div class="text-primary-500 group-hover:text-white text-4xl mr-5 wow animate__ animate__fadeInUp"
                        style="visibility: visible;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                            width="1em" height="1em" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                            </path>
                            <path
                                d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z">
                            </path>
                        </svg></div>
                    <div><span class="sm:text-2xl font-bold group-hover:text-white wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:magenta">+ </span><span
                            class="sm:text-2xl font-bold group-hover:text-white count wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:magenta">75</span>
                        <p class="text-xs sm:text-base text-pgray-400 group-hover:text-gray-200 wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:blue">Nos projets</p>
                    </div>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div
                    class="bg-primary-50/50 group-hover:bg-primary-500 transition duration-200 flex items-center rounded-xl px-10 py-7">
                    <div class="text-primary-500 group-hover:text-white text-4xl mr-5 wow animate__ animate__fadeInUp"
                        style="visibility: visible;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                            width="1em" height="1em" fill="currentColor">
                            <path
                                d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z">
                            </path>
                        </svg></div>
                    <div><span class="sm:text-2xl font-bold group-hover:text-white wow animate__ animate__fadeInUp"
                            style="visibility: visible;color:magenta">+ </span><span
                            class="sm:text-2xl font-bold group-hover:text-white count wow animate__ animate__fadeInUp"
                            style="visibility: visible;color:magenta">25</span>
                        <p class="text-xs sm:text-base text-pgray-400 group-hover:text-gray-200 wow animate__ animate__fadeInUp"
                            style="visibility: visible; color:blue">Nos partenaire</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="py-12 md:py-16 lg:py-32 overflow-x-hidden" id="key-features">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-7 gap-0 lg:gap-7 items-center">
            <div class="col-1 lg:col-span-3 mb-12 lg:mb-0">
                <div class="wow animate__ animate__fadeInRight  relative mr-10" style="visibility: visible;"><img
                        class="jump relative mx-auto rounded-xl w-full z-10 bg-pgray-100" src="/images/about/4.png"
                        alt=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.05 50.27" id="null"
                        class="absolute top-0 left-0 w-40 -ml-12 -mt-12 pr-svg replaced-svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    opacity: 0.53;
                                }

                                .cls-2 {
                                    fill: #f4f2ff;
                                }
                            </style>
                        </defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g class="cls-1">
                                    <path class="cls-2"
                                        d="M20.21,2.36a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,20.21,2.36Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,10.34A1.15,1.15,0,1,0,19.06,9.2,1.14,1.14,0,0,0,20.21,10.34Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,18.33a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,20.21,18.33Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,26.31a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,20.21,26.31Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,34.3a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,20.21,34.3Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,42.28a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,20.21,42.28Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,50.27a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,20.21,50.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,2.36a1.15,1.15,0,1,0-1.14-1.15A1.14,1.14,0,0,0,13.85,2.36Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,10.34A1.15,1.15,0,1,0,12.71,9.2,1.14,1.14,0,0,0,13.85,10.34Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,18.33a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,13.85,18.33Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,26.31a1.15,1.15,0,1,0-1.14-1.14A1.14,1.14,0,0,0,13.85,26.31Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,34.3a1.15,1.15,0,1,0-1.14-1.15A1.14,1.14,0,0,0,13.85,34.3Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,42.28a1.15,1.15,0,1,0-1.14-1.14A1.14,1.14,0,0,0,13.85,42.28Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,50.27a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,13.85,50.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M7.5,2.36A1.15,1.15,0,1,0,6.35,1.21,1.14,1.14,0,0,0,7.5,2.36Z"></path>
                                    <path class="cls-2" d="M7.5,10.34a1.15,1.15,0,0,0,0-2.29,1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M7.5,18.33a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,7.5,18.33Z"></path>
                                    <path class="cls-2" d="M7.5,26.31A1.15,1.15,0,0,0,7.5,24a1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M7.5,34.3a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,7.5,34.3Z"></path>
                                    <path class="cls-2"
                                        d="M7.5,42.28a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,7.5,42.28Z"></path>
                                    <path class="cls-2"
                                        d="M7.5,50.27a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,7.5,50.27Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,2.36A1.15,1.15,0,1,0,0,1.21,1.14,1.14,0,0,0,1.15,2.36Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,10.34A1.15,1.15,0,1,0,0,9.2,1.14,1.14,0,0,0,1.15,10.34Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,18.33A1.15,1.15,0,1,0,0,17.18,1.15,1.15,0,0,0,1.15,18.33Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,26.31A1.15,1.15,0,1,0,0,25.17,1.14,1.14,0,0,0,1.15,26.31Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,34.3A1.15,1.15,0,1,0,0,33.15,1.14,1.14,0,0,0,1.15,34.3Z"></path>
                                    <circle class="cls-2" cx="1.15" cy="41.14" r="1.15"></circle>
                                    <path class="cls-2"
                                        d="M1.15,50.27A1.15,1.15,0,1,0,0,49.12,1.15,1.15,0,0,0,1.15,50.27Z"></path>
                                </g>
                                <g class="cls-1">
                                    <path class="cls-2"
                                        d="M44.9,2.29a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,44.9,2.29Z"></path>
                                    <path class="cls-2"
                                        d="M44.9,10.27a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,44.9,10.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,18.26a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,44.9,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,26.25a1.15,1.15,0,1,0-1.14-1.15A1.16,1.16,0,0,0,44.9,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,34.23a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,44.9,34.23Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,42.21a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,44.9,42.21Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,50.2a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,44.9,50.2Z"></path>
                                    <path class="cls-2"
                                        d="M38.55,2.29A1.15,1.15,0,1,0,37.4,1.14,1.14,1.14,0,0,0,38.55,2.29Z">
                                    </path>
                                    <path class="cls-2" d="M38.55,10.27a1.15,1.15,0,0,0,0-2.29,1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,18.26a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,38.55,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,26.25A1.15,1.15,0,1,0,37.4,25.1,1.15,1.15,0,0,0,38.55,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,34.23a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,38.55,34.23Z">
                                    </path>
                                    <path class="cls-2" d="M38.55,42.21a1.15,1.15,0,0,0,0-2.29,1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,50.2a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,38.55,50.2Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,2.29a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,32.2,2.29Z"></path>
                                    <path class="cls-2"
                                        d="M32.2,10.27a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,32.2,10.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,18.26a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,32.2,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,26.25a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,32.2,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,34.23a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,32.2,34.23Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,42.21a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,32.2,42.21Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,50.2a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,32.2,50.2Z"></path>
                                    <path class="cls-2"
                                        d="M25.84,2.29A1.15,1.15,0,1,0,24.7,1.14,1.15,1.15,0,0,0,25.84,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,10.27A1.15,1.15,0,1,0,24.7,9.13,1.15,1.15,0,0,0,25.84,10.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,18.26a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,25.84,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,26.25A1.15,1.15,0,1,0,24.7,25.1,1.16,1.16,0,0,0,25.84,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,34.23a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,25.84,34.23Z">
                                    </path>
                                    <circle class="cls-2" cx="25.84" cy="41.07" r="1.15"></circle>
                                    <path class="cls-2"
                                        d="M25.84,50.2a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,25.84,50.2Z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46.05 50.27" id="null"
                        class="absolute bottom-0 right-0 w-40 -mr-12 -mb-12 pr-svg replaced-svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    opacity: 0.53;
                                }

                                .cls-2 {
                                    fill: #f4f2ff;
                                }
                            </style>
                        </defs>
                        <title>Asset 1</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <g class="cls-1">
                                    <path class="cls-2"
                                        d="M20.21,2.36a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,20.21,2.36Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,10.34A1.15,1.15,0,1,0,19.06,9.2,1.14,1.14,0,0,0,20.21,10.34Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,18.33a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,20.21,18.33Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,26.31a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,20.21,26.31Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,34.3a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,20.21,34.3Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,42.28a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,20.21,42.28Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M20.21,50.27a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,20.21,50.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,2.36a1.15,1.15,0,1,0-1.14-1.15A1.14,1.14,0,0,0,13.85,2.36Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,10.34A1.15,1.15,0,1,0,12.71,9.2,1.14,1.14,0,0,0,13.85,10.34Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,18.33a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,13.85,18.33Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,26.31a1.15,1.15,0,1,0-1.14-1.14A1.14,1.14,0,0,0,13.85,26.31Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,34.3a1.15,1.15,0,1,0-1.14-1.15A1.14,1.14,0,0,0,13.85,34.3Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,42.28a1.15,1.15,0,1,0-1.14-1.14A1.14,1.14,0,0,0,13.85,42.28Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M13.85,50.27a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,13.85,50.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M7.5,2.36A1.15,1.15,0,1,0,6.35,1.21,1.14,1.14,0,0,0,7.5,2.36Z"></path>
                                    <path class="cls-2" d="M7.5,10.34a1.15,1.15,0,0,0,0-2.29,1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M7.5,18.33a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,7.5,18.33Z"></path>
                                    <path class="cls-2" d="M7.5,26.31A1.15,1.15,0,0,0,7.5,24a1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M7.5,34.3a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,7.5,34.3Z"></path>
                                    <path class="cls-2"
                                        d="M7.5,42.28a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,7.5,42.28Z"></path>
                                    <path class="cls-2"
                                        d="M7.5,50.27a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,7.5,50.27Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,2.36A1.15,1.15,0,1,0,0,1.21,1.14,1.14,0,0,0,1.15,2.36Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,10.34A1.15,1.15,0,1,0,0,9.2,1.14,1.14,0,0,0,1.15,10.34Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,18.33A1.15,1.15,0,1,0,0,17.18,1.15,1.15,0,0,0,1.15,18.33Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,26.31A1.15,1.15,0,1,0,0,25.17,1.14,1.14,0,0,0,1.15,26.31Z"></path>
                                    <path class="cls-2"
                                        d="M1.15,34.3A1.15,1.15,0,1,0,0,33.15,1.14,1.14,0,0,0,1.15,34.3Z"></path>
                                    <circle class="cls-2" cx="1.15" cy="41.14" r="1.15"></circle>
                                    <path class="cls-2"
                                        d="M1.15,50.27A1.15,1.15,0,1,0,0,49.12,1.15,1.15,0,0,0,1.15,50.27Z"></path>
                                </g>
                                <g class="cls-1">
                                    <path class="cls-2"
                                        d="M44.9,2.29a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,44.9,2.29Z"></path>
                                    <path class="cls-2"
                                        d="M44.9,10.27a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,44.9,10.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,18.26a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,44.9,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,26.25a1.15,1.15,0,1,0-1.14-1.15A1.16,1.16,0,0,0,44.9,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,34.23a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,44.9,34.23Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,42.21a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,44.9,42.21Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M44.9,50.2a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,44.9,50.2Z"></path>
                                    <path class="cls-2"
                                        d="M38.55,2.29A1.15,1.15,0,1,0,37.4,1.14,1.14,1.14,0,0,0,38.55,2.29Z">
                                    </path>
                                    <path class="cls-2" d="M38.55,10.27a1.15,1.15,0,0,0,0-2.29,1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,18.26a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,38.55,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,26.25A1.15,1.15,0,1,0,37.4,25.1,1.15,1.15,0,0,0,38.55,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,34.23a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,38.55,34.23Z">
                                    </path>
                                    <path class="cls-2" d="M38.55,42.21a1.15,1.15,0,0,0,0-2.29,1.15,1.15,0,1,0,0,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M38.55,50.2a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,38.55,50.2Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,2.29a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,32.2,2.29Z"></path>
                                    <path class="cls-2"
                                        d="M32.2,10.27a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,32.2,10.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,18.26a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,32.2,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,26.25a1.15,1.15,0,1,0-1.15-1.15A1.15,1.15,0,0,0,32.2,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,34.23a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,32.2,34.23Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,42.21a1.15,1.15,0,1,0-1.15-1.14A1.14,1.14,0,0,0,32.2,42.21Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M32.2,50.2a1.15,1.15,0,1,0-1.15-1.15A1.14,1.14,0,0,0,32.2,50.2Z"></path>
                                    <path class="cls-2"
                                        d="M25.84,2.29A1.15,1.15,0,1,0,24.7,1.14,1.15,1.15,0,0,0,25.84,2.29Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,10.27A1.15,1.15,0,1,0,24.7,9.13,1.15,1.15,0,0,0,25.84,10.27Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,18.26a1.15,1.15,0,1,0-1.14-1.14A1.15,1.15,0,0,0,25.84,18.26Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,26.25A1.15,1.15,0,1,0,24.7,25.1,1.16,1.16,0,0,0,25.84,26.25Z">
                                    </path>
                                    <path class="cls-2"
                                        d="M25.84,34.23a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,25.84,34.23Z">
                                    </path>
                                    <circle class="cls-2" cx="25.84" cy="41.07" r="1.15"></circle>
                                    <path class="cls-2"
                                        d="M25.84,50.2a1.15,1.15,0,1,0-1.14-1.15A1.15,1.15,0,0,0,25.84,50.2Z">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg></div>
            </div>
            <div class="col-span-4">
                <div class="grid grid-cols-2 gap-5">
                    <div class="group wow animate__ animate__fadeInUp" style="visibility: visible;">
                        <div
                            class="bg-primary-50/50 py-7 px-7 rounded-xl group-hover:bg-primary-500   transition duration-200 ease-out hover:ease-in">
                            <div class=" text-primary-500 rounded group-hover:text-white text-3xl mb-5"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                    fill="currentColor">
                                    <path
                                        d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z">
                                    </path>
                                    <path
                                        d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z">
                                    </path>
                                </svg></div>
                            <h3 class="mb-2 text-xl font-semibold group-hover:text-white" style="color:magenta">Le reseau</h3>
                            <div>
                                <p class="text-pgray-400 leading-loose group-hover:text-pgray-300" style="color:blue">Fondée en 2019, l’association RANDAP est née de la volonté des anciennes de Notre Dame du Plateau ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="group wow animate__ animate__fadeInUp" style="visibility: visible;">
                        <div
                            class="bg-primary-50/50 py-7 px-7 rounded-xl group-hover:bg-primary-500   transition duration-200 ease-out hover:ease-in">
                            <div class=" text-primary-500 rounded group-hover:text-white text-3xl mb-5"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                    fill="currentColor">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </path>
                                </svg></div>
                            <h3 class="mb-2 text-xl font-semibold group-hover:text-white" style="color:magenta">Nos Activités</h3>
                            <div>
                                <p class="text-pgray-400 leading-loose group-hover:text-pgray-300" style="color:blue">Le RANDAP a mené plusieurs activités sportives depuis sa mise en place, en l'occurrence, la ZUMBA DAY FITNESS, ... </p>
                            </div>
                        </div>
                    </div>
                    <div class="group wow animate__ animate__fadeInUp" style="visibility: visible;">
                        <div
                            class="bg-primary-50/50 py-7 px-7 rounded-xl group-hover:bg-primary-500   transition duration-200 ease-out hover:ease-in">
                            <div class=" text-primary-500 rounded group-hover:text-white text-3xl mb-5"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                    fill="currentColor">
                                    <path
                                        d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z">
                                    </path>
                                </svg></div>
                            <h3 class="mb-2 text-xl font-semibold group-hover:text-white" style="color:magenta">Notre Annuaire</h3>
                            <div>
                                <p class="text-pgray-400 leading-loose group-hover:text-pgray-300" style="color:blue">Un espace interactif et hergonomique où se trouvent tous les membres du RANDAP partout dans le monde ...  </p>
                            </div>
                        </div>
                    </div>
                    <div class="group wow animate__ animate__fadeInUp" style="visibility: visible;">
                        <div
                            class="bg-primary-50/50 py-7 px-7 rounded-xl group-hover:bg-primary-500   transition duration-200 ease-out hover:ease-in">
                            <div class=" text-primary-500 rounded group-hover:text-white text-3xl mb-5"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                    fill="currentColor">
                                    <path
                                        d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z">
                                    </path>
                                </svg></div>
                            <h3 class="mb-2 text-xl font-semibold group-hover:text-white" style="color:magenta">Nos partenaire</h3>
                            <div>
                                <p class="text-pgray-400 leading-loose group-hover:text-pgray-300" style="color:blue">Vous Partagez la vision de notre réseau et souhaitez contribuez à ses activités, nous avons besoin de vos contributions ... </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="">
    <div class="container">
        <div class="newsletter2 py-16 rounded-3xl px-10 text-center">
            
            <p class="text-lg text-gray-100  wow animate__ animate__fadeInUp" style="visibility: visible;">Subscribe
                to our newsletter to receive our weekly feed.</p>
            <div class="flex max-w-xl mx-auto rounded-xl bg-white mt-10 px-3 py-2 wow animate__ animate__fadeInUp"
                style="visibility: visible;"><input class="input w-full rounded-xl" placeholder="Enter your email"
                    type="text"><button
                    class="btn bg-primary-500 hover:bg-primary-800 transition duration-150  rounded-xl text-white shadow-sm px-7">Subscribe</button>
            </div>
        </div>
    </div>
</div>
@endsection