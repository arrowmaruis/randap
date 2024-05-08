@extends('layouts.app')
@section('content')



<div class="pt-48 pb-24 breadcrumb">
    <div class="container text-center ">
        <h1 class="text-5xl font-bold tracking-[-2px] mb-3 text-white wow animate__animated animate__fadeInUp">Nos
            News</h1>
        <p class="text-lg text-pgray-400 wow animate__animated animate__fadeInUp">Pour vous tenir informer de toutes les actualité du randap</p>
    </div>
</div>
<section style="display: flex; flex-wrap: wrap;">
    <div class="section-padding" style="flex: 2; margin-right: 20px;">
        <div class="container">
            <div class="mb-5">
                <div class="flex justify-between items-center">
                    <h4 class="text-pgray-500" style="color: magenta;">Nos actualités</h4>
                </div>
            </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5 mt-12">
                <div class="w-full mb-8 bg-primary-50/50 rounded-xl "><a href="/blog/1"><img alt="" loading="lazy" width="900" height="900" decoding="async" data-nimg="1" class="w-full rounded-tl-xl rounded-tr-xl" src="{{asset('images/10d2ea.jpg')}}" style="color: transparent;">
                        <div class="py-8 px-5">
                            <p class="mb-3 text-sm text-primary-400 wow animate__ animate__fadeInUp" style="visibility: visible;"><span class="inline-block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">Event</span><span class="text-pgray-400 text-xs">2023-01-05</span></p>
                            <h3 class="my-2 text-xl font-semibold wow animate__ animate__fadeInUp   animated" style="visibility: visible; color:blue">Le 13 août 2017 s’est tenue à l’espace Coca Cola au Plateau</h3>

                        </div>
                    </a></div>
                <!-- Deuxième image -->
                <div class="w-full mb-8 bg-primary-50/50 rounded-xl "><a href="/blog/2"><img alt="" loading="lazy" width="900" height="900" decoding="async" data-nimg="1" class="w-full rounded-tl-xl rounded-tr-xl" src="{{asset('images/10d2ea.jpg')}}" style="color: transparent;">
                        <div class="py-8 px-5">
                            <p class="mb-3 text-sm text-primary-400 wow animate__ animate__fadeInUp" style="visibility: visible;"><span class="inline-block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">Event</span><span class="text-pgray-400 text-xs">2023-01-05</span></p>
                            <h3 class="my-2 text-xl font-semibold wow animate__ animate__fadeInUp   animated" style="visibility: visible;color:blue">Le 13 août 2017 s’est tenue à l’espace Coca Cola au Plateau</h3>

                        </div>
                    </a>
                </div>
                
                <!-- troisième image -->
                <div class="w-full mb-8 bg-primary-50/50 rounded-xl "><a href="/blog/2"><img alt="" loading="lazy" width="900" height="900" decoding="async" data-nimg="1" class="w-full rounded-tl-xl rounded-tr-xl" src="{{asset('images/10d2ea.jpg')}}" style="color: transparent;">
                        <div class="py-8 px-5">
                            <p class="mb-3 text-sm text-primary-400 wow animate__ animate__fadeInUp" style="visibility: visible;"><span class="inline-block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">Event</span><span class="text-pgray-400 text-xs">2023-01-05</span></p>
                            <h3 class="my-2 text-xl font-semibold wow animate__ animate__fadeInUp   animated" style="visibility: visible;color:blue">Le 13 août 2017 s’est tenue à l’espace Coca Cola au Plateau</h3>

                        </div>
                    </a>
                </div>
                
                <!-- quatrième image -->
                <div class="w-full mb-8 bg-primary-50/50 rounded-xl "><a href="/blog/2"><img alt="" loading="lazy" width="900" height="900" decoding="async" data-nimg="1" class="w-full rounded-tl-xl rounded-tr-xl" src="{{asset('images/10d2ea.jpg')}}" style="color: transparent;">
                        <div class="py-8 px-5">
                            <p class="mb-3 text-sm text-primary-400 wow animate__ animate__fadeInUp" style="visibility: visible;"><span class="inline-block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">Event</span><span class="text-pgray-400 text-xs">2023-01-05</span></p>
                            <h3 class="my-2 text-xl font-semibold wow animate__ animate__fadeInUp   animated" style="visibility: visible;color:blue">Le 13 août 2017 s’est tenue à l’espace Coca Cola au Plateau</h3>

                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>




</section>
