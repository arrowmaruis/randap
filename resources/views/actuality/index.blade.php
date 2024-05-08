@extends('layouts.app')
@section('content')


<div class="section-padding">
    <div class="container">
        <div class="mb-5">
            <div class="flex justify-between items-center">
                <h4 class="text-pgray-500">Nos actualités</h4>

            </div>
        </div>
        @if ($article->isNotEmpty())

        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5 mt-12">
            @foreach ($article as $item)

            <div class="w-full mb-8 bg-primary-50/50 rounded-xl ">
                <a href="{{ route('actuality.details', ['id_article' => $item->id]) }}">
                    <img alt="" loading="lazy" width="300" height="200" decoding="async" data-nimg="1"
                        class="w-full rounded-tl-xl rounded-tr-xl h-72" src="{{asset('storage/'.$item->image.'')}}"
                        style="color: transparent;">
                    <div class="py-4 px-3">
                        <p class="mb-3 text-sm text-primary-400 wow animate__ animate__fadeInUp flex justify-between"
                            style="visibility: visible;">
                            <span
                                class="block py-1 px-3 text-xs font-semibold bg-primary-100 text-primary-600 rounded-xl mr-3">{{$item->type}}</span>
                            <span class="block text-pgray-400 text-xs">{{$item->publication_date}}</span>
                        </p>
                        <h3 class="my-1 text-xl font-semibold wow animate__ animate__fadeInUp   animated"
                            style="visibility: visible;">{{$item->title}}</h3>
                        <p class="text-pgray-400 leading-loose wow animate__ animate__fadeInUp animated"
                            style="visibility: visible; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{$item->content}}
                        </p>


                    </div>
                </a>
            </div>
            @endforeach

        </div>
        @else
        <p class="text-pgray-500 text-center">Aucun article disponible.</p>
        @endif

    </div>
</div>


@endsection