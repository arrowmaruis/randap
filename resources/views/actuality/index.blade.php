@extends('layouts.app')
@section('content')


<div class="section-padding">
    <div class="container">
        <div class="mb-5">
            <div class="flex justify-between items-center">
                <h4 class="text-pgray-500">Nos actualités</h4>
                *
            </div>
        </div>
        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5 mt-12">
            <div class="w-full mb-8 bg-primary-50/50 rounded-xl "><a href="/blog/1"><img alt="" loading="lazy"
                        width="300" height="200" decoding="async" data-nimg="1"
                        class="w-full rounded-tl-xl rounded-tr-xl"
                        src="{{asset('images/10d2ea.jpg')}}" style="color: transparent;">
                    <div class="py-8 px-5">
                        <p class="mb-3 text-sm text-primary-400 wow animate__ animate__fadeInUp"
                            style="visibility: visible;"><span
                                class="inline-block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">Event</span><span
                                class="text-pgray-400 text-xs">2023-01-05</span></p>
                        <h3 class="my-2 text-xl font-semibold wow animate__ animate__fadeInUp   animated"
                            style="visibility: visible;">Le 13 août 2017 s’est tenue à l’espace Coca Cola au Plateau</h3>
                       
                    </div>
                </a></div>

        </div>

    </div>
</div>


@endsection