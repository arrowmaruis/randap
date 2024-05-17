<div>
    <div class=" pt-14 sm:pt-10 ">
        <div class="space-y-6 sm:space-y-8">
            <div class="w-14 border-b border-neutral-200 dark:border-neutral-700"></div>
            <div class="md:flex  justify-around">


                <div class="flex-grow mt-10 md:mt-0 md:pl-16 max-w-3xl space-y-6">
                    <h2 class="text-2xl font-semibold">Demande d'adhesion</h2>

                    @if (session()->has('success'))
                    <div class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500"
                        role="alert">
                        <span class="font-bold">Success</span> {{ session('success') }}
                    </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500"
                        role="alert">
                        <span class="font-bold">Attention</span> {{ session('error') }}
                    </div>
                    @endif


                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Nom</label>
                        <input wire:model="nom" class="block w-full input bg-primary-100 rounded-xl" type="text">
                        @error('nom')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Prénoms</label>
                        <input wire:model="prenoms" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            value="003 888 232">
                        @error('prenoms')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Email</label>
                        <input wire:model="email" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            value="003 888 232">
                        @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Numero de
                            téléphone</label>
                        <input wire:model="telephone" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            value="003 888 232">
                        @error('telephone')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Promotion</label>
                        <select wire:model="promotion" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($promotions_years as $items)
                            <option value="{{$items->year_of_promotion}}">{{$items->year_of_promotion}}</option>
                            @endforeach
                        </select>
                        @error('promotion')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300">Message</label>
                        <textarea wire:model="message" class=" block w-full input bg-primary-100 rounded-xl" cols="10"
                            rows="10"></textarea>
                        @error('message')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="mb-4 group wow animate__ animate__fadeInUp   animated" data-headlessui-state="open"
                        style="visibility: visible;">
                        <button
                            class="flex w-full justify-between rounded-xl  px-4 py-5 text-left text-lg text-red-600 font-semibold text-pgray-900 group-hover:text-primary-500 bg-pgray-50"
                            id="headlessui-disclosure-button-:r1g:" type="button" aria-expanded="true"
                            data-headlessui-state="open" aria-controls="headlessui-disclosure-panel-:r1q:">
                            <span>Le droit d'adhésion est de 5000 FCFA ; Cotisation mensuelle 2000 FCFA</span>
                        </button>
                        <div class="transform scale-100 opacity-100">
                            <div class="px-4 pb-6 text-base text-gray-600 leading-loose  bg-pgray-50"
                                id="headlessui-disclosure-panel-:r1q:" data-headlessui-state="open">
                                <p>Les  paiement se font par :</p>
                                <ul>
                                    <li>Virement bancaire ou Chèque</li>
                                    <li>Paiement mobile (ex. : Orange Money, MTN Money)</li>
                                    <li>Espèces (en personne)</li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <button wire:click.prevent="submit" wire:loading.attr="disabled"
                        class="bg-primary-500 px-5  relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium  py-3 sm:px-6  ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50  ">
                        <div wire:loading wire:target="submit"
                            class=" inline-block mx-3 size-6 border-[3px] border-current border-t-transparent text-gray-800 rounded-full dark:text-white"
                            role="status">
                            <span class="sr-only">Loading...</span>
                        </div>

                        <span>Soumettre</span>

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>