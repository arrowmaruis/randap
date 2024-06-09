<div>
    <div class="flex min-h-full flex-col justify-center  bg-pgray-50">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center"><a class=" py-1 inline-block font-bold text-3xl" href="{{route('welcome')}}" style="color:magenta">Randap</a>
            <h4 class="mt-5 mb-8 text-center font-medium  text-gray-500">Trouvez votre compte</h4>
        </div>
        <div class="shadow bg-white sm:mx-auto sm:w-full sm:max-w-sm px-6 py-6 lg:px-8 rounded-xl">
            @if (session()->has('error'))
            <div class="bg-red-500 p-2 rounded-full py-2 px-2">{{ session('error') }}</div>
            <br>

            @endif

            @if (session()->has('status'))
            <div class=" p-2 rounded-full py-2 px-2 bg-green-500" >{{ session('status') }}
            </div>
            <br>

            @endif
            <form class="space-y-6" wire:submit.prevent="sendResetLink">

                <div><label for="email" class="block text-sm font-medium leading-6 text-gray-900">Veuillez entrer votre e-mail  pour rechercher votre compte. </label>
                    <div class="mt-2"><input id="email" autocomplete="email"
                            class="input bg-primary-100 w-full rounded-full" type="email" wire:model="email"
                            wire:loading.attr="disabled"></div>
                </div>

               
                
                <div>
                    <button wire:click.prevent="sendResetLink" wire:loading.attr="disabled"
                        class="flex w-full justify-center rounded-full bg-primary-600 px-3 py-2  font-semibold leading-6 text-white shadow-sm hover:bg-primary-500   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">

                        <div wire:loading wire:target="sendResetLink"
                            class=" inline-block size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <span wire:loading.remove>Envoyer</span>
                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">J'ai deja un compte?<a
                    class="font-semibold leading-6 text-primary-600 hover:text-primary-500 m-1"
                    href="{{route('auth.signin')}}">Me connecter</a>
            </p>
        </div>
    </div>
</div>