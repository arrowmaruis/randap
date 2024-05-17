@extends('layouts.app')
@section('content')
{{--
<link href="{{ asset('build/assets/app-fNCE5DMw.js') }}" rel="stylesheet"> --}}
<script src="https://cdn.tailwindcss.com"></script>
@livewireStyles
@livewireScripts
<div class="section-padding">
    <div class="container">
        <main class="flex-1  md:px-5  pb-5 ">

            <livewire:AdhesionForm>
           

        </main>

    </div>
</div>

@endsection