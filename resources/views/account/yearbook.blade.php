@extends('layouts.app')
@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js" integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="section-padding">
    <div class="container">
        <div class="bg-red-500 rounded-xl mt-10">
            <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto text-center">
              <!-- Announcement Banner -->
              <a class="group inline-block bg-white/10 hover:bg-white/10 border border-white/10 p-1 ps-4 rounded-full shadow-md" href="{{route('account.user-profile')}}">
                <p class="me-2 inline-block text-white text-sm">
                  Renseigner vos informations sur votre profile pour terminer votre demande d'adhesion
                </p>
                <span class="group-hover:bg-white/10 py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-white/10 font-semibold text-white text-sm">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </span>
              </a>
              <!-- End Announcement Banner -->
            </div>
          </div>
        <div class=" my-3">
            <div class="flex justify-between items-center">
                <h4 class="text-pgray-500 font-normal text-2xl">Rechercher des anciens élèves</h4>

            </div>
        </div>
       

<livewire:YearBookComponent>

    </div>


</div>

@endsection