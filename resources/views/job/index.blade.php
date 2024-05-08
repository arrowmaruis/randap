@extends('layouts.app')
@section('content')
<div class="section-padding">
    <div class="container">
        <div class="flex justify-between items-center my-5 border-b border-pgray-100 pb-5">
            <div class="text">Les Offres D'emploi </div>

        </div>
        @if ($jobs->isNotEmpty())

        <div class="grid md:grid-cols-3 gap-5">
            @foreach ($jobs as $item)
                
            <div class="group">
                <div class="relative px-6 pt-5 pb-5 rounded-xl bg-primary-50/50 group-hover:bg-primary-500 transition duration-150 wow animate__ animate__fadeInUp"
                    style="visibility: visible;">
                    <div class="flex items-center"><img alt="" loading="lazy" width="50" height="50" decoding="async"
                            data-nimg="1" class="rounded-xl" src="{{asset('storage/'.$item->logo.'')}}"
                            style="color: transparent;">
                        <div class="ml-4">
                            <h5 class="font-medium text-pgray-600 group-hover:text-pgray-200 transition duration-150">
                                {{$item->company}}</h5><span
                                class="flex items-center text-pgray-500 group-hover:text-pgray-300 transition duration-150"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                    fill="currentColor" class="mr-1">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                    </path>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z">
                                    </path>
                                </svg>Pereira</span>
                        </div>
                    </div><a href="{{ route('job.details', ['id_job' => $item->id]) }}">
                        <h4 class="mt-4 text-xl font-medium group-hover:text-white">{{$item->job_title}} </h4>
                    </a>

                    <div class="flex items-center justify-between mt-5">
                        <div class="flex items-center group-hover:text-pgray-50"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor">
                                <path
                                    d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z">
                                </path>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z">
                                </path>
                            </svg><span class="ml-2 text-sm text-gray-500 group-hover:text-pgray-300">Date limite :   {{$item->closing_date}}
                                </span></div>
                        <div class="group-hover:text-white">150.000 Fcfa <small
                                class="text-pgray-500 group-hover:text-pgray-300">/ Mois</small></div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        @else
        <p class="text-pgray-500 text-center">Aucun annonce disponible.</p>
        @endif
    </div>
</div>
@endsection