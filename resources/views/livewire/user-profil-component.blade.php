<div>
    <div class=" pt-14 sm:pt-10 ">
        <div class="space-y-6 sm:space-y-8">
            <h2 class="text-3xl font-semibold">Informations sur le compte</h2>
            <div class="w-14 border-b border-neutral-200 dark:border-neutral-700"></div>
            <div class="md:flex  justify-around">
                <div x-data="{ imagePreview: null }" class="min-w-lg">
                    <div class="relative rounded-full overflow-hidden flex">
                        <div
                            class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-32 h-32 ring-1 ring-white dark:ring-neutral-900">
                            <img x-bind:src="imagePreview" alt="John Doe" loading="lazy" width="256" height="256"
                                decoding="async" data-nimg="1"
                                class="absolute inset-0 w-full h-full object-cover rounded-full"
                                style="color: transparent;">
                            <span x-show="!imagePreview" class="wil-avatar__name">J</span>
                        </div>
                        <div @click="$refs.fileInput.click()"
                            class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-neutral-50 cursor-pointer">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5 5H7.5C6.83696 5 6.20107 5.26339 5.73223 5.73223C5.26339 6.20107 5 6.83696 5 7.5V20M5 20V22.5C5 23.163 5.26339 23.7989 5.73223 24.2678C6.20107 24.7366 6.83696 25 7.5 25H22.5C23.163 25 23.7989 24.7366 24.2678 24.2678C24.7366 23.7989 25 23.163 25 22.5V17.5M5 20L10.7325 14.2675C11.2013 13.7988 11.8371 13.5355 12.5 13.5355C13.1629 13.5355 13.7987 13.7988 14.2675 14.2675L17.5 17.5M25 12.5V17.5M25 17.5L23.0175 15.5175C22.5487 15.0488 21.9129 14.7855 21.25 14.7855C20.5871 14.7855 19.9513 15.0488 19.4825 15.5175L17.5 17.5M17.5 17.5L20 20M22.5 5H27.5M25 2.5V7.5M17.5 10H17.5125"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                            <span class="mt-1 text-xs">Change Image</span>
                        </div>
                        <input x-ref="fileInput" @change="imagePreview = URL.createObjectURL($event.target.files[0])" wire:model="photo"
                            class="absolute inset-0 opacity-0 cursor-pointer" type="file">
                          
                    </div>
                    @error('photo')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>




                <div class="flex-grow mt-10 md:mt-0 md:pl-16 max-w-3xl space-y-6">
                    <h2 class="text-2xl font-semibold">Information personnelle</h2>

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

                    <div class="max-w-lg">
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Date de
                            naissance</label>
                        <input wire:model="date_naissance" class="block w-full input bg-primary-100 rounded-xl"
                            type="date" value="1990-07-22">
                        @error('date_naissance')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Ville de
                            résidence</label>
                        <input wire:model="ville_residence" class="block w-full input bg-primary-100 rounded-xl"
                            type="text">
                        @error('ville_residence')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300">Pays de
                            résidence</label>
                        <select wire:model="pays_residence" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option value="">Sélectionner</option>
                            @foreach($liste_pays as $pays)
                            <option value="{{ $pays }}">{{ $pays }}</option>
                            @endforeach
                        </select>
                        @error('pays_residence')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label
                            class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Nationalite</label>
                        <input wire:model="nationalite" class="block w-full input bg-primary-100 rounded-xl" type="text"
                            value="Eden Tuan">
                        @error('nationalite')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Numero de
                            téléphone</label>
                        <input wire:model="numero_telephone" class="block w-full input bg-primary-100 rounded-xl"
                            type="text" value="003 888 232">
                        @error('numero_telephone')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2 class="text-2xl font-semibold">Votre cursus a notre dame</h2>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Classe
                            entrée</label>
                        <select wire:model="classe_entree_ndp_id" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($classe_entree_ndp as $items)
                            <option value="{{$items->id}}">{{$items->classe}}</option>
                            @endforeach
                        </select>
                        @error('classe_entree_ndp_id')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Année
                            entrée</label>
                        <select wire:model="annee_entree_ndp" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($promotion as $items)
                            <option value="{{$items->year_of_promotion}}">{{$items->year_of_promotion}}</option>
                            @endforeach
                        </select>
                        @error('annee_entree_ndp')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Classe de
                            sortie</label>
                        <select wire:model="classe_sortie_ndp_id" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($classe_entree_ndp as $items)
                            <option value="{{$items->id}}">{{$items->classe}}</option>
                            @endforeach
                        </select>
                        @error('classe_sortie_ndp_id')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Année de
                            sortie</label>
                        <select wire:model="annee_sortie_ndp" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($promotion as $items)
                            <option value="{{$items->year_of_promotion}}">{{$items->year_of_promotion}}</option>
                            @endforeach
                        </select>
                        @error('annee_sortie_ndp')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <h2 class="text-2xl font-semibold">Votre parcour professsionnel</h2>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Statuts
                            Professionnels</label>
                        <select wire:model="statuts_professionnels_id"
                            class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($statuts_professionnels as $items)
                            <option value="{{$items->id}}">{{$items->statut}}</option>
                            @endforeach
                        </select>
                        @error('statuts_professionnels_id')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300">Niveau
                            d'études</label>
                        <select wire:model="diplome_certificat1" class="nblock w-full input bg-primary-100 rounded-xl">
                            <option value="">Sélectionner</option>
                            @foreach($niveaux_etudes as $niveau)
                            <option value="{{ $niveau }}">{{ $niveau }}</option>
                            @endforeach
                        </select>
                        @error('niveau_etudes')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Domaines
                            d'expertise</label>
                        <select wire:model="domaines_expertise_id"
                            class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($domaines_expertise as $items)
                            <option value="{{$items->id}}">{{$items->domaine}}</option>
                            @endforeach
                        </select>
                        @error('domaines_expertise_id')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="nc-Label text-sm font-medium text-neutral-700 dark:text-neutral-300 ">Secteurs
                            activites</label>
                        <select wire:model="secteurs_activites_id"
                            class="nblock w-full input bg-primary-100 rounded-xl">
                            <option selected>Slectionner</option>
                            @foreach ($secteurs_activites as $items)
                            <option value="{{$items->id}}">{{$items->secteur}}</option>
                            @endforeach
                        </select>
                        @error('secteurs_activites_id')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>



                    <button wire:click.prevent="save" wire:loading.attr="disabled"
                        class="bg-primary-500 px-5  relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium  py-3 sm:px-6  ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50  ">
                        <div wire:loading wire:target="save"
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