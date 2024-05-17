<div>
    <div class=" pt-14 sm:pt-10 ">
        <div class="space-y-6 sm:space-y-8">
            <div class="w-14 border-b border-neutral-200 dark:border-neutral-700"></div>
            <div class="md:flex  justify-around">


                <div class="flex-grow mt-10 md:mt-0 md:pl-16 max-w-3xl space-y-6">
                    <h2 class="text-2xl font-semibold">Faire un don</h2>

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
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Nom personnel ou Société</label>
                        <input wire:model="nom" class="block w-full input bg-primary-100 rounded-xl" type="text">
                        @error('nom')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Prénoms</label>
                        <input wire:model="Prenoms" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            >
                        @error('Prenoms')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Nom de Société</label>
                        <input wire:model="societe" class="block w-full input bg-primary-100 rounded-xl" type="text">
                        @error('societe')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Email</label>
                        <input wire:model="email" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            >
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
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">J'autorise Randap a utiliser mon logo sur ses support de communication : </label>
                            <select wire:model="autorisation" class="block w-full input bg-primary-100 rounded-xl">
                                <option value="">Sélectionner</option>
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                                
                            </select>
                            
                        @error('autorisation')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Joindre mon logo par mail (png , jpg ou pdf) : </label>
                            <select wire:model="logo" class="block w-full input bg-primary-100 rounded-xl">
                                <option value="">Sélectionner</option>
                                <option value="1">Oui</option>
                                <option value="0">Non</option>
                                
                            </select>
                            
                        @error('logo')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Montant du Don</label>
                        <input wire:model="montantDon" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            >
                        @error('montantDon')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Le Don sera transmis le : </label>
                        <input wire:model="dateTransmission" class="block w-full input bg-primary-100 rounded-xl" type="date">
                        @error('dateTransmission')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Je verse le don par : </label>
                            <select wire:model="modePaiement" class="block w-full input bg-primary-100 rounded-xl">
                                <option value="">Sélectionner un moyen de paiement</option>
                                <option value="carte_bancaire">Carte bancaire</option>
                                <option value="paypal">PayPal</option>
                                <option value="virement_bancaire">Virement bancaire</option>
                                <option value="cheque">Chèque</option>
                            </select>
                            
                        @error('promotion')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <button wire:click.prevent="addDonation" wire:loading.attr="disabled"
                        class="bg-primary-500 px-5  relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium  py-3 sm:px-6  ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50  ">
                        <div wire:loading wire:target="addDonation"
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