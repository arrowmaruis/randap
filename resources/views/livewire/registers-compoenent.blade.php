<div>
    <div class="flex min-h-full flex-col justify-center bg-pgray-50">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center">
            <a class=" py-1 inline-block font-bold text-3xl" href="{{route('welcome')}}" style="color:magenta">Randap</a>
            <h4 class="mt-5 mb-8 text-center font-medium text-gray-500">Finalisez votre Adhésion {{$name}} </h4>
        </div>
        <div class="shadow bg-white sm:mx-auto sm:w-full sm:max-w-sm px-6 py-6 lg:px-8 rounded-xl">
            @if (session()->has('error'))
            <div class="bg-red-500 p-2 rounded-full py-2 px-2">{{ session('error') }}</div>
            <br>
            @endif
            <form class="space-y-6" wire:submit.prevent="register">
                
                <div>
                    <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 "
                        disabled>Email</label><input class="block w-full input bg-primary-100 rounded-xl" type="text"
                        wire:model='email' disabled>
                        @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de
                        passe</label>
                    <div class="mt-2">
                        <input id="password" autocomplete="current-password" class="input bg-primary-100 w-full rounded-full"
                            type="password" wire:model="password">
                        @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Répéter le mote de passe</label>
                    <div class="mt-2">
                        <input id="password" autocomplete="current-password" class="input bg-primary-100 w-full rounded-full"
                            type="password" wire:model="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" wire:click.prevent="register" wire:loading.attr="disabled"
                        class="flex w-full justify-center rounded-full bg-primary-500 px-3 py-2  font-semibold leading-6 text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">
                        <div wire:loading wire:target="register"
                            class="inline-block size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>
                        <span wire:loading.remove> Terminer</span>
                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">Déjà membre ?<a class="font-semibold leading-6 text-primary-600 hover:text-primary-500 m-1" href="/signin">Se connecter</a></p>
        </div>
    </div>
</div>
