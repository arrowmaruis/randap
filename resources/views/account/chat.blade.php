{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<link rel="stylesheet" href="{{asset('css/chat.css')}}" data-precedence="next">

<div class=" ">
    <div class="container">
        <div class="grid grid-cols-12 gap-y-10 gap-x-6">
            <div class="col-span-12">
               
                <div class="mt-1 flex flex-col lg:flex-row gap-y-10 gap-x-6">
                    
                    <div class="flex flex-col w-full gap-y-7">
                        <div class="flex flex-col p-5 box box--stacked">
                            <div class="flex items-center gap-3.5 border-b border-dashed pb-5">
                                <div>
                                    <div
                                        class="w-12 h-12 overflow-hidden rounded-full image-fit border-[3px] border-slate-200/70">
                                        <img alt="Tailwise - Admin Dashboard Template"
                                            src="{{asset('images/avatar/12.png')}}"></div>
                                </div>
                                <div>
                                    <div class="font-medium truncate max-w-[9rem] md:max-w-none">Randap Chat groupe</div>
                                    <div class="text-slate-500 mt-0.5 truncate max-w-[9rem] md:max-w-none">Discussion</div>
                                </div>
                                <div class="flex gap-2 ml-auto"><a
                                        class="cursor-pointer flex items-center justify-center border rounded-full w-9 h-9 border-primary/30 bg-primary/5"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-phone stroke-[1] w-4 h-4 text-primary fill-primary/10">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg></a><a
                                        class="cursor-pointer flex items-center justify-center border rounded-full w-9 h-9 border-primary/30 bg-primary/5"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-mail stroke-[1] w-4 h-4 text-primary fill-primary/10">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg></a></div>
                            </div>
                            <div class="h-[42.6rem] -mx-3 overflow-y-auto [&amp;:-webkit-scrollbar]:w-0 [&amp;:-webkit-scrollbar]:bg-transparent [&amp;_.simplebar-content]:p-0 [&amp;_.simplebar-track.simplebar-vertical]:w-[10px] [&amp;_.simplebar-track.simplebar-vertical]:mr-0.5 [&amp;_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/20 simplebar-scrollable-y"
                                data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content"
                                                style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <div class="flex flex-col gap-3.5 py-5 px-3">
                                                    
                                                        <div
                                                            class="max-w-[85%] sm:max-w-none relative mr-auto group [&amp;.right]:mr-0 [&amp;.right]:ml-auto flex items-end gap-3 [&amp;.right]:flex-row-reverse">
                                                            <div class="hidden sm:block">
                                                                <div
                                                                    class="w-12 h-12 overflow-hidden rounded-full image-fit border-[3px] border-slate-200/70">
                                                                    <img alt="Tailwise - Admin Dashboard Template"
                                                                        src="{{asset('images/avatar/11.png')}}"></div>
                                                            </div>
                                                            <div
                                                                class="border px-4 pt-3 pb-4 rounded-r-xl rounded-tl-xl bg-slate-50/80 group-[.right]:text-right group-[.right]:rounded-l-xl group-[.right]:rounded-br-none border-slate-200/80">
                                                                <div>Hi James!</div>
                                                                <div
                                                                    class="flex group-[.right]:flex-row-reverse items-center mt-4 gap-10">
                                                                    <div
                                                                        class="flex items-center gap-2 mr-auto group-[.right]:mr-0 group-[.right]:ml-auto group-[.right]:flex-row-reverse">
                                                                        <div class="text-xs text-slate-500/70">03:00 PM
                                                                        </div>
                                                                        <div class="flex items-center gap-1"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="lucide lucide-eye w-3.5 h-3.5 stroke-[1] text-slate-500/80 fill-slate-100">
                                                                                <path
                                                                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z">
                                                                                </path>
                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                            </svg>
                                                                            <div class="text-xs text-slate-500/70">4
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex">
                                                                        <div class="w-5 h-5 image-fit zoom-in"><img
                                                                                class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                alt="Tailwise - Admin Dashboard Template"
                                                                                src="{{asset('images/avatar/1.png')}}">
                                                                        </div>
                                                                        <div class="w-5 h-5 -ml-0.5 image-fit zoom-in">
                                                                            <img class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                alt="Tailwise - Admin Dashboard Template"
                                                                                src="{{asset('images/avatar/10.png')}}">
                                                                        </div>
                                                                        <div class="w-5 h-5 -ml-0.5 image-fit zoom-in">
                                                                            <img class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                alt="Tailwise - Admin Dashboard Template"
                                                                                src="{{asset('images/avatar/3.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="absolute inset-y-0 right-0 w-5 h-5 my-auto -mr-8 group-[.right]:-ml-8 group-[.right]:left-0"
                                                                data-headlessui-state=""><button
                                                                    class="cursor-pointer w-5 h-5 text-slate-500"
                                                                    id="headlessui-menu-button-:rb:" type="button"
                                                                    aria-haspopup="menu" aria-expanded="false"
                                                                    data-headlessui-state=""><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-more-vertical stroke-[1] w-5 h-5 stroke-slate-400/70 fill-slate-400/70">
                                                                        <circle cx="12" cy="12" r="1"></circle>
                                                                        <circle cx="12" cy="5" r="1"></circle>
                                                                        <circle cx="12" cy="19" r="1"></circle>
                                                                    </svg></button></div>
                                                        </div>
                                                        <div
                                                            class="max-w-[85%] sm:max-w-none relative mr-auto group [&amp;.right]:mr-0 [&amp;.right]:ml-auto flex items-end gap-3 [&amp;.right]:flex-row-reverse">
                                                            <div class="hidden sm:block">
                                                                <div
                                                                    class="w-12 h-12 overflow-hidden rounded-full image-fit border-[3px] border-slate-200/70">
                                                                    <img alt="Tailwise - Admin Dashboard Template"
                                                                        src="{{asset('images/avatar/5.png')}}"></div>
                                                            </div>
                                                            <div
                                                                class="border px-4 pt-3 pb-4 rounded-r-xl rounded-tl-xl bg-slate-50/80 group-[.right]:text-right group-[.right]:rounded-l-xl group-[.right]:rounded-br-none border-slate-200/80">
                                                                <div>Hello, everyone!</div>
                                                                <div
                                                                    class="flex group-[.right]:flex-row-reverse items-center mt-4 gap-10">
                                                                    <div
                                                                        class="flex items-center gap-2 mr-auto group-[.right]:mr-0 group-[.right]:ml-auto group-[.right]:flex-row-reverse">
                                                                        <div class="text-xs text-slate-500/70">08:00 PM
                                                                        </div>
                                                                        <div class="flex items-center gap-1"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="lucide lucide-eye w-3.5 h-3.5 stroke-[1] text-slate-500/80 fill-slate-100">
                                                                                <path
                                                                                    d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z">
                                                                                </path>
                                                                                <circle cx="12" cy="12" r="3"></circle>
                                                                            </svg>
                                                                            <div class="text-xs text-slate-500/70">4
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex">
                                                                        <div class="w-5 h-5 image-fit zoom-in"><img
                                                                                class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                alt="Tailwise - Admin Dashboard Template"
                                                                                src="{{asset('images/avatar/8.png')}}">
                                                                        </div>
                                                                        <div class="w-5 h-5 -ml-0.5 image-fit zoom-in">
                                                                            <img class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                alt="Tailwise - Admin Dashboard Template"
                                                                                src="{{asset('images/avatar/11.png')}}">
                                                                        </div>
                                                                        <div class="w-5 h-5 -ml-0.5 image-fit zoom-in">
                                                                            <img class="cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]"
                                                                                alt="Tailwise - Admin Dashboard Template"
                                                                                src="{{asset('images/avatar/11.png')}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="absolute inset-y-0 right-0 w-5 h-5 my-auto -mr-8 group-[.right]:-ml-8 group-[.right]:left-0"
                                                                data-headlessui-state=""><button
                                                                    class="cursor-pointer w-5 h-5 text-slate-500"
                                                                    id="headlessui-menu-button-:rc:" type="button"
                                                                    aria-haspopup="menu" aria-expanded="false"
                                                                    data-headlessui-state=""><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="lucide lucide-more-vertical stroke-[1] w-5 h-5 stroke-slate-400/70 fill-slate-400/70">
                                                                        <circle cx="12" cy="12" r="1"></circle>
                                                                        <circle cx="12" cy="5" r="1"></circle>
                                                                        <circle cx="12" cy="19" r="1"></circle>
                                                                    </svg></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: 910px; height: 1142px;"></div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar"
                                        style="height: 487px; transform: translate3d(0px, 258px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="relative"><textarea
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 -mb-1.5 pr-16 rounded-xl resize-none"
                                    placeholder="Type a message..."></textarea>
                                <div class="absolute inset-y-0 right-0 flex items-center justify-center w-[3.8rem]"><a
                                        href=""
                                        class="flex items-center justify-center border-transparent rounded-full cursor-pointer w-9 h-9 box bg-gradient-to-b from-theme-1/90 to-theme-2/90"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-send stroke-[1.3] w-4 h-4 -ml-0.5 text-white/70">
                                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                                            <path d="M22 2 11 13"></path>
                                        </svg></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}