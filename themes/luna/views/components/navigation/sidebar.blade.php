<aside class="ml-4 xl:ml-0 xl:mr-4 w-64 h-screen md:flex hidden flex-col justify-between rtl:right-0 z-10">
   <div>
    <x-navigation.sidebar-links />
      @if(theme('show-support-sidebar-widget', true))
        <div class="flex flex-col gap-2 bg-background-secondary border border-neutral rounded-2xl p-4 mt-4">
            <span class="text-lg font-semibold">Need some help?</span>
            <p class="text-sm text-muted-foreground">
                Join the Discord to get help with your purchase.
            </p>
            <a href="{{ theme('social-link-discord', 'https://discord.gg/buzz') }}" target="_blank" class="mt-2 text-primary underline font-medium">
                <button class="cursor-pointer bg-primary text-sm text-white px-3 py-2 rounded-xl">
                    <div class="flex items-center gap-2">
                       <i class="fa-brands fa-discord"></i>
                        <span>Join the Discord</span>
                    </div>
                </button>
            </a>
        </div>
        @endif
    </div>
</aside>
