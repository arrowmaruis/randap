@extends('layouts.app')
@section('content')

<section class="pt-20">
    <div class="pt-20 pb-8 mb-4 bg-cover bg-no-repeat">
        <div class="container">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-6 wow animate__ animate__fadeInUp" style="visibility: visible;"><span
                        class="text-base md:text-lg"><a class="text-pgray-200 hover:underline" href="#"><span
                                class="inline-block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">{{$article->type}}
                                </span></a><span class="text-pgray-500 text-sm">2023-04-20</span></span>
                    <h2 class="text-4xl md:text-5xl mt-4 font-bold">{{$article->title}}</h2>
                </div>
                <div class="flex justify-center mb-8 wow animate__ animate__fadeInUp" style="visibility: visible;"><img
                        class="w-12 h-12 object-cover rounded-full" src="/images/avatar/8.png" alt="">
                    <div class="pl-4">
                        <p class="text-pgray-500 mb-1">Randap</p>
                        <p class="text-xs text-pgray-500 font-semibold">Author</p>
                    </div>
                </div>
            </div>
            <div class="pt-48 pb-48 mb-12 bg-cover bg-no-repeat bg-center rounded-xl wow animate__ animate__fadeInUp"
                style="background-image: url({{asset('storage/'.$article->image.'')}}); visibility: visible;">
                <div class="max-w-2xl mx-auto">
                    <div class="text-center mb-6"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="max-w-3xl mx-auto">
            <p class="mb-6 leading-loose text-pgray-400">{{$article->content}}</p>
            <div class="w-full mx-auto px-12 pt-5 pb-10">
                <div class="w-full mb-6 border-l-4 border-pgray-100">
                    <p class="text-lg text-pgray-600 px-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam
                        obcaecati laudantium recusandae, debitis eum voluptatem ad, illo voluptatibus temporibus odio
                        provident.</p>
                </div>
                <div class="w-full pl-6">
                    <p class="text-md text-indigo-500 font-bold">Scott Windon</p>
                    <p class="text-xs text-pgray-500">@scott.windon</p>
                </div>
            </div>
           
        </div>
    </div>
</section>

@endsection