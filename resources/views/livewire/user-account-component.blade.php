<div class="container pt-14 sm:pt-10 ">
    <div class="space-y-6 sm:space-y-8">
        <h2 class="text-3xl font-semibold">Informations sur le compte</h2>
        <div class="w-14 border-b border-neutral-200 dark:border-neutral-700"></div>
        <div class="md:flex  justify-around">
           
            <div class="flex-grow mt-10 md:mt-0 md:pl-16 max-w-3xl space-y-6">
                @if (session()->has('success'))
                <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
                    role="alert">
                    <span class="font-bold">Success</span> {{ session('success') }}
                </div>
                @endif
                <div><label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Nom
                        et prénom</label><input class="block w-full input bg-primary-100 rounded-xl" type="text"
                        wire:model='name'>
                    @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                </div>

                <div>
                    <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 "
                        disabled>Email</label><input class="block w-full input bg-primary-100 rounded-xl" type="text"
                        wire:model='email' disabled>
                </div>

                <div class="pt-2"><button wire:click.prevent="updateName" wire:loading.attr="disabled"
                        class="bg-primary-500 px-5  relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6  ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50  ">
                        <div wire:loading wire:target="updateName"
                            class=" inline-block size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                            role="status">
                            <span class="sr-only">Loading...</span>
                        </div>

                        <span wire:loading.remove>Sauvegarder</span>

                    </button>
                </div>

                <h2 class="text-2xl font-semibold">Changer de mot de passe</h2>
                @if (session()->has('success'))
                <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
                    role="alert">
                    <span class="font-bold">Success</span> {{ session('successpass') }}
                </div>
                @endif
                @if (session()->has('errorpass'))
                <div class="mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500"
                    role="alert">
                    <span class="font-bold">Attention</span> {{ session('errorpass') }}
                </div>
                @endif
                
                <div class="flex-grow mt-10 md:mt-0  max-w-3xl space-y-6">
                    <div><label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Anciens
                            mot de passe </label><input class="block w-full input bg-primary-100 rounded-xl"
                            type="password" wire:model='oldPassword'>
                        @error('oldPassword')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>


                    <div><label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Nouveau
                            mot de passe </label><input class="block w-full input bg-primary-100 rounded-xl"
                            type="password" wire:model='newPassword'>
                        @error('newPassword')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div><label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Confirmer</label><input
                            class="block w-full input bg-primary-100 rounded-xl" type="password"
                            wire:model='confirmPassword'>
                        @error('confirmPassword')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="pt-2"><button wire:click.prevent="updatePassword" wire:loading.attr="disabled"
                            class="bg-primary-500 px-5  relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium  py-3 sm:px-6  ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50  ">
                            <div wire:loading wire:target="updatePassword"
                                class=" inline-block size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                                role="status">
                                <span class="sr-only">Loading...</span>
                            </div>

                            <span wire:loading.remove>Sauvegarder</span>

                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>