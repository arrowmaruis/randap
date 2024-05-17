<div>
    <div class="flex min-h-full flex-col justify-center  bg-pgray-50">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center"><a class=" py-1 inline-block font-bold text-3xl" href="{{route('welcome')}}" style="color:magenta">Randap</a>
            <h4 class="mt-5 mb-8 text-center font-medium  text-gray-500">Connectez-vous à votre compte</h4>
        </div>
        <div class="shadow bg-white sm:mx-auto sm:w-full sm:max-w-sm px-6 py-6 lg:px-8 rounded-xl">
            @if (session()->has('error'))
            <div class="bg-red-500 p-2 rounded-full py-2 px-2">{{ session('error') }}</div>
            <br>

            @endif

            @if (session()->has('succes'))
            <div class=" p-2 rounded-full py-2 px-2" style="background-color: rgb(8, 218, 8);">{{ session('succes') }}
            </div>
            <br>

            @endif
            <form class="space-y-6" wire:submit.prevent="login">

                <div><label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
                    <div class="mt-2"><input id="email" autocomplete="email"
                            class="input bg-primary-100 w-full rounded-full" type="email" wire:model="email"
                            wire:loading.attr="disabled"></div>
                </div>
                <div>
                    <div class="flex items-center justify-between"><label for="password"
                            class="block text-sm font-medium leading-6 text-gray-900">Mote de passe</label>
                        <div class="text-sm"><a href="#"
                                class="font-semibold text-primary-600 hover:text-primary-500">Mote de passe oublié?</a>
                        </div>
                    </div>
                    <div class="mt-2"><input id="password" autocomplete="current-password"
                            class="input bg-primary-100 w-full rounded-full" type="password" wire:model="password"
                            wire:loading.attr="disabled">
                    </div>
                </div>
                <div>
                    <button wire:click.prevent="login" wire:loading.attr="disabled"
                        class="flex w-full justify-center rounded-full bg-primary-600 px-3 py-2  font-semibold leading-6 text-white shadow-sm hover:bg-primary-500   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">

                        <div wire:loading wire:target="login"
                            class=" inline-block size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <span wire:loading.remove>Se connecter</span>
                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">Pas un membre?<a
                    class="font-semibold leading-6 text-primary-600 hover:text-primary-500 m-1"
                    href="{{route('auth.adhesionForm')}}">Faire une demande d'adhésion</a>
            </p>
        </div>
    </div>
</div>