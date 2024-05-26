{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Randap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('css/chat.css')}}" data-precedence="next">

</head>

<body>


    <div class=" ">
        <div class="container">
            <div class="grid grid-cols-12 gap-y-10 gap-x-6 max-w-5xl mx-auto ">
                <div class="col-span-12">

                    <div class="mt-1 flex flex-col lg:flex-row gap-y-10 gap-x-6">

                        <div class="flex flex-col w-full  gap-y-7">
                            
                            @livewire('chat')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
{{-- @endsection --}}