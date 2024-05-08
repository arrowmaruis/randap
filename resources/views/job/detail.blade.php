@extends('layouts.app')
@section('content')

<div class="container pt-20">
    <div class="job-detail-banner h-72 mt-10 rounded-3xl relative"><img alt="" loading="lazy" width="100" height="100"
            decoding="async" data-nimg="1" class="rounded-2xl absolute -bottom-10 left-10 border-4 border-gray-100"
            src="{{asset('storage/'.$job->logo.'')}}" style="color: transparent;"></div>
    <div class="flex justify-between items-center mt-16 mb-16 wow animate__ animate__fadeInUp"
        style="visibility: visible;">
        <div><span class="text-pgray-400 text-base">{{$job->compagny}}</span>
            <h2>{{$job->job_title}}</h2>
            <div><span class=" flex items-center text-gray-500"><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor" class="mr-1">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                        </path>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                    </svg>Pereira</span></div>
        </div>
        <div>

        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-5 xl:grid-cols-6 gap-16 mb-24 ">
        <div class="lg:col-span-3 xl:col-span-4">
            <div class="overview wow animate__ animate__fadeInUp" style="visibility: visible;">
                <h4 class="mb-3">Aperçu</h4>
                <p class=" text-gray-500 leading-loose">{{$job->job_description}}</p>
            </div>

            <div class="overview wow animate__ animate__fadeInUp" style="visibility: visible;">
                <br>
                <h4 class="mb-3">Competences recherché</h4>
                <p class=" text-gray-500 leading-loose">{{$job->required_skills}}</p>
            </div>

            <button
                class="px-8 py-3 mt-20 bg-primary-500  hover:bg-primary-800 transition duration-150 text-white rounded-lg">Apply
                Now</button>
        </div>
        <div class="lg:col-span-2 xl:col-span-2">
            <div class="bg-primary-50/50 rounded-xl px-7 py-10 mb-8 wow animate__ animate__fadeInUp"
                style="visibility: visible;">
                <div class="mb-5"><span class="text-sm text-gray-500">Experience</span>
                    <h5 class="text-md font-medium">{{$job->expertise}} </h5>
                </div>
                
                <div class="mb-5"><span class="text-sm text-gray-500">Date limite</span>
                    <h5 class="text-md font-medium">{{$job->closing_date}} </h5>
                </div>
                <div class="mb-5"><span class="text-sm text-gray-500">Type d'emploi</span>
                    <h5 class="text-md font-medium">Plein temps</h5>
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection