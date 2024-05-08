<div>

    <div class="flex min-h-full flex-col justify-center  bg-pgray-50">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm text-center"><a class=" py-1 inline-block" href="/"><img alt=""
                    loading="lazy" width="134" height="29" decoding="async" data-nimg="1" sizes="50vw"
                    src="{{asset('images/logo2c77.png')}}" style="color: transparent;"></a>
            <h4 class="mt-5 mb-8 text-center font-medium  text-gray-500">Connectez-vous à votre compte</h4>
        </div>
        <div class="shadow bg-white sm:mx-auto sm:w-full sm:max-w-sm px-6 py-6 lg:px-8 rounded-xl">
            <form class="space-y-6" wire:submit.prevent="register">
                <div><label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nom et prénom</label>
                    <div class="mt-2"><input id="name" autocomplete="name"
                            class="input bg-primary-100 w-full rounded-full" type="text" wire:model="name"></div>
                </div>
                <div><label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
                    <div class="mt-2"><input id="email" autocomplete="email"
                            class="input bg-primary-100 w-full rounded-full" type="email" wire:model="email"></div>
                </div>
                <div><label for="email" class="block text-sm font-medium leading-6 text-gray-900">address</label>
                    <div class="mt-2"><input id="email" autocomplete="email"
                            class="input bg-primary-100 w-full rounded-full" type="email" wire:model="address"></div>
                </div>
                <div><label for="email" class="block text-sm font-medium leading-6 text-gray-900">Numéro de
                        téléphone</label>
                    <div class="mt-2"><input id="email" autocomplete="email"
                            class="input bg-primary-100 w-full rounded-full" type="email" wire:model="phone"></div>
                </div>
                <div class="mb-5"><label class="inline-block mb-2">Promotion</label><select wire:model="promotion_id"
                        class="input border bg-primary-50/50 rounded-full border-pgray-100 is-invalid">
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                    </select>

                </div>
                <div><label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2"><input id="password" autocomplete="current-password"
                            class="input bg-primary-100 w-full rounded-full" type="password" wire:model="password">
                    </div>
                </div>
                <div>
                    <button type="submit" wire:click.prevent="register" wire:loading.attr="disabled"
                        class="flex w-full justify-center rounded-full bg-primary-600 px-3 py-2  font-semibold leading-6 text-white shadow-sm hover:bg-primary-500   focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">
                        <div wire:loading wire:target="register"
                            class=" inline-block size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                            role="status" aria-label="loading">
                            <span class="sr-only">Loading...</span>
                        </div>

                        <span wire:loading.remove> S'inscrire</span>

                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">Déjà membre ?<a
                    class="font-semibold leading-6 text-primary-600 hover:text-primary-500 m-1" href="/signin">Se
                    connecter</a></p>
        </div>
    </div>
</div>