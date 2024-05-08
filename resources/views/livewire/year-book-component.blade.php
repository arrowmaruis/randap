<div>

    <div class="flex flex-col box box--stacked">
        <div class="flex flex-col p-5 sm:items-center sm:flex-row gap-y-2">
            <div>
                <div class="relative"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round"
                        class="lucide lucide-search absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3 stroke-[1.3] text-slate-500">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg><input wire:model.debounce.200ms="search" wire:input="filterYearBook" type="text" placeholder="Search users..."
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed border h-11 dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 pl-9 sm:w-64 rounded-[0.5rem]">
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-x-3 gap-y-2 sm:ml-auto">


            </div>
        </div>
        <div class="overflow-auto xl:overflow-visible">
            <table class="w-full text-left border-b border-slate-200/60">
                <thead class="">
                    <tr class="">
                        <td
                            class="px-5 border-b dark:border-darkmode-300 w-5 py-4 font-medium border-t bg-slate-50 border-slate-200/60 text-slate-500">
                            <input type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-300/80 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary/60 [&amp;[type='radio']]:checked:border-primary/50 [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary/60 [&amp;[type='checkbox']]:checked:border-primary/50 [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50">
                        </td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 py-4 font-medium border-t bg-slate-50 border-slate-200/60 text-slate-500">
                            Nom - Prénom</td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 py-4 font-medium border-t bg-slate-50 border-slate-200/60 text-slate-500">
                            Statut professionnel</td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 py-4 font-medium border-t w-52 bg-slate-50 border-slate-200/60 text-slate-500">
                            Année de Promotion </td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 py-4 font-medium text-center border-t bg-slate-50 border-slate-200/60 text-slate-500">
                            Status</td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 py-4 font-medium border-t bg-slate-50 border-slate-200/60 text-slate-500">
                            Date d'adhésion</td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 w-20 py-4 font-medium text-center border-t bg-slate-50 border-slate-200/60 text-slate-500">
                            Action</td>
                    </tr>
                </thead>
                <thead>
                    @foreach ($yearBook as $item)

                    <tr class="[&amp;_td]:last:border-b-0">
                        <td class="px-5 border-b dark:border-darkmode-300 py-4 border-dashed dark:bg-darkmode-600">
                            <input type="checkbox"
                                class="transition-all duration-100 ease-in-out shadow-sm border-slate-300/80 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;[type='radio']]:checked:bg-primary/60 [&amp;[type='radio']]:checked:border-primary/50 [&amp;[type='radio']]:checked:border-opacity-10 [&amp;[type='checkbox']]:checked:bg-primary/60 [&amp;[type='checkbox']]:checked:border-primary/50 [&amp;[type='checkbox']]:checked:border-opacity-10 [&amp;:disabled:not(:checked)]:bg-slate-100 [&amp;:disabled:not(:checked)]:cursor-not-allowed [&amp;:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&amp;:disabled:checked]:opacity-70 [&amp;:disabled:checked]:cursor-not-allowed [&amp;:disabled:checked]:dark:bg-darkmode-800/50">
                        </td>
                        <td class="px-5 border-b dark:border-darkmode-300 py-4 border-dashed w-80 dark:bg-darkmode-600">
                            <div class="flex items-center">
                                <div class="w-9 h-9 image-fit zoom-in"><img
                                        class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                        alt="Tailwise - Admin Dashboard Template"
                                        src="https://chisfis-nextjs.vercel.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FImage-9.400dc424.png&w=256&q=75">
                                </div>
                                <div class="ml-3.5"><a href="" class="font-medium whitespace-nowrap">
                                        {{$item->user->name}} </a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                        {{$item->user->email}}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 border-b dark:border-darkmode-300 py-4 border-dashed dark:bg-darkmode-600">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->statut->statut}}</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$item->secteur->secteur}}
                            </div>
                        </td>
                        <td class="px-5 border-b dark:border-darkmode-300 py-4 border-dashed dark:bg-darkmode-600">
                            <a href="" class="font-medium whitespace-nowrap">{{$item->annee_entree_ndp}}</a>
                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{$item->annee_sortie_ndp}}
                            </div>
                        </td>
                        <td class="px-5 border-b dark:border-darkmode-300 py-4 border-dashed dark:bg-darkmode-600">
                            <div class="flex items-center justify-center text-danger"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-database w-3.5 h-3.5 stroke-[1.7]">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                    <path d="M3 12A9 3 0 0 0 21 12"></path>
                                </svg>
                                <div class="ml-1.5 whitespace-nowrap"> @if ($item->user->statut==0)
                                    Inactive
                                    @else
                                    A ctive
                                    @endif </div>
                            </div>
                        </td>
                        <td class="px-5 border-b dark:border-darkmode-300 py-4 border-dashed dark:bg-darkmode-600">
                            <div class="whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($item->user->created_at)->locale('fr')->isoFormat('DD MMMM
                                YYYY') }}
                            </div>


                        </td>
                        <td
                            class="px-5 border-b dark:border-darkmode-300 relative py-4 border-dashed dark:bg-darkmode-600">
                            <div class="hover:cursor-pointer hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-eye">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>

                        </td>

                    </tr>
                    @endforeach


                </thead>
            </table>
        </div>
        <p class="mt-10"></p>
        {{-- <div class="flex flex-col-reverse flex-wrap items-center p-5 flex-reverse gap-y-2 sm:flex-row ">
            <nav class="flex-1 w-full mr-auto sm:w-auto">
                <ul class="flex w-full mr-0 sm:w-auto sm:mr-auto">
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevrons-left stroke-[1] w-4 h-4">
                                <path d="m11 17-5-5 5-5"></path>
                                <path d="m18 17-5-5 5-5"></path>
                            </svg></a></li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-left stroke-[1] w-4 h-4">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg></a></li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent">...</a>
                    </li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent">1</a>
                    </li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border shadow-sm py-2 cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 rounded-[0.5rem] bg-white font-medium dark:bg-darkmode-400">2</a>
                    </li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent">3</a>
                    </li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent">...</a>
                    </li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-right stroke-[1] w-4 h-4">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg></a></li>
                    <li class="flex-1 sm:flex-initial"><a
                            class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 shadow-none border-transparent"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevrons-right stroke-[1] w-4 h-4">
                                <path d="m6 17 5-5-5-5"></path>
                                <path d="m13 17 5-5-5-5"></path>
                            </svg></a></li>
                </ul>
            </nav><select
                class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 sm:w-20 rounded-[0.5rem]">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div> --}}
    </div>

</div>