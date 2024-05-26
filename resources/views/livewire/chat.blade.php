<div class="flex flex-col p-5 box box--stacked">
    <div class="flex items-center gap-3.5 border-b border-dashed pb-5">
        <div>
            <div class="w-12 h-12 overflow-hidden rounded-full image-fit border-[3px] border-slate-200/70">
                <img alt="Tailwise - Admin Dashboard Template" src="{{asset('images/logo.jpg')}}">
            </div>
        </div>
        <div>
            <div class="font-medium truncate max-w-[9rem] md:max-w-none">Randap Chat groupe
            </div>
            <div class="text-slate-500 mt-0.5 truncate max-w-[9rem] md:max-w-none">
                Discussion</div>
        </div>
        <div class="flex gap-2 ml-auto"><a href="{{route('welcome')}}"
                class="cursor-pointer flex items-center justify-center border rounded-full w-9 h-9 border-primary/30 bg-primary/5">
                <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                  </svg>
            </a></div>
    </div>
    <div class="-mx-3 overflow-y-auto [&amp;:-webkit-scrollbar]:w-0 [&amp;:-webkit-scrollbar]:bg-transparent [&amp;_.simplebar-content]:p-0 [&amp;_.simplebar-track.simplebar-vertical]:w-[10px] [&amp;_.simplebar-track.simplebar-vertical]:mr-0.5 [&amp;_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/20 simplebar-scrollable-y"
        data-simplebar="init" style="height: 80vh;">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" id="simplebar-content" style="padding: 0px;">
                            <div class="flex flex-col gap-3.5 py-5 px-3" id="lastMessage">

                                @foreach ($messages as $message)

                                <div class=" @if ($message->user_id == $user_id)
                                    max-w-[85%] sm:max-w-none relative mr-auto group [&.right]:mr-0 [&.right]:ml-auto flex items-end gap-3 [&.right]:flex-row-reverse right

                                    @else
                                    max-w-[85%] sm:max-w-none relative mr-auto group [&amp;.right]:mr-0 [&amp;.right]:ml-auto flex items-end gap-3 [&amp;.right]:flex-row-reverse
                                        
                                    @endif " >
                                    <div class="hidden sm:block">
                                        {{-- <div
                                            class="w-12 h-12 overflow-hidden rounded-full image-fit border-[3px] border-slate-200/70">
                                            <img alt="Tailwise - Admin Dashboard Template"
                                                src="{{asset('images/avatar/11.png')}}">
                                        </div> --}}
                                        <span
                                            class="inline-flex items-center justify-center size-[46px] rounded-full  font-semibold text-white leading-none  dark:text-neutral-800"
                                            style="background-color: magenta">
                                            {{ $message->user->initials }}
                                        </span>
                                    </div>
                                    <div style=" @if ($message->user_id == $user_id) background-color: rgba(255, 0, 255, 0.397) @endif "
                                        class="border px-4 pt-3 pb-4 rounded-r-xl rounded-tl-xl bg-slate-50/80 group-[.right]:text-right group-[.right]:rounded-l-xl group-[.right]:rounded-br-none border-slate-200/80">


                                        <div>{{$message->content}}</div>
                                        <div class="flex group-[.right]:flex-row-reverse items-center mt-4 gap-10">
                                            <div
                                                class="flex items-center gap-2 mr-auto group-[.right]:mr-0 group-[.right]:ml-auto group-[.right]:flex-row-reverse">
                                                <div class="text-xs text-slate-500/70">{{
                                                    \Carbon\Carbon::parse($message->created_at)->locale('fr')->isoFormat('D
                                                    MMM YYYY, H:mm') }}
                                                </div>
                                                <div class="flex items-center gap-1">
                                                    <div>@ ~ </div>
                                                    <div class="text-xs text-slate-500/70">{{$message->user->name}}
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                
                                @endforeach

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
    <div class="relative"><textarea wire:model="content" wire:keydown.enter="sendMessage"
            class="disabled:bg-slate-100  px-3 py-1 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-800/50 [&amp;[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 -mb-1.5 pr-16 rounded-xl resize-none"
            placeholder="Type a message..."></textarea>
        <div class="absolute inset-y-0 right-0 flex items-center justify-center w-[3.8rem]">
            <a wire:click.prevent="sendMessage"
                class="flex items-center justify-center border-transparent rounded-full cursor-pointer w-9 h-9 box from-theme-1/90 to-theme-2/90"
                style="background-color: magenta"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-send stroke-[1.3] w-4 h-4 -ml-0.5 text-white/70">
                    <path d="m22 2-7 20-4-9-9-4Z"></path>
                    <path d="M22 2 11 13"></path>
                </svg></a>
        </div>
    </div>

</div>

<script>
    setInterval(() => {
        @this.call('loadMessages');
    }, 3000); 

    const messagesContainer = document.getElementById('simplebar-content');
        const lastMessageContainer = document.getElementById('lastMessage');
        const lastMessage = lastMessageContainer.lastElementChild
    setTimeout(function() {
        

        if (lastMessage) {
            lastMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    }, 1000);

</script>