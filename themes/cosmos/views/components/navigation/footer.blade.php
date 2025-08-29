<footer class="mx-4 md:mx-auto max-w-[1320px] px-0 pt-10">
    <div class="container mx-auto">
        <div class="bg-[#1F1F1F] border border-neutral-700 rounded-2xl shadow-lg p-6 flex flex-col md:flex-row items-center justify-between gap-4 w-full">
           <div class="flex flex-col w-full">
             <div class="flex items-center gap-3">
                <x-logo />
                <a href="https://buzz.dev/shop" target="_blank" class="text-sm text-neutral-400 hover:text-white transition-colors">
                    {{ strtr(theme('footer_copyright_text', '© :year Buzz Development. | All rights reserved.'), [
                        ':year' => date('Y'),
                        ':app_name' => config('app.name')
                    ]) }}
                </a>
            </div>
                  <div class="flex items-center gap-3 mt-4 md:mt-2 w-full">
                @if (theme('social-link-instagram'))
                <a href="{{ theme('social-link-instagram') }}" target="_blank" class="group flex items-center justify-center w-9 h-9 rounded-full bg-neutral-800 hover:bg-[#E1306C] transition-colors border border-neutral-700">
                    <i class="fab fa-instagram flex items-center justify-center text-neutral-300 group-hover:text-white"></i>
                </a>
                @endif
                @if (theme('social-link-discord'))
                <a href="{{ theme('social-link-discord') }}" target="_blank" class="group flex items-center justify-center w-9 h-9 rounded-full bg-neutral-800 hover:bg-[#5865F2] transition-colors border border-neutral-700">
                    <i class="fab fa-discord flex items-center justify-center text-neutral-300 group-hover:text-white"></i>
                </a>
                @endif
                @if (theme('social-link-twitter'))
                <a href="{{ theme('social-link-twitter') }}" target="_blank" class="group flex items-center justify-center w-9 h-9 rounded-full bg-neutral-800 hover:bg-black transition-colors border border-neutral-700">
                    <i class="fab fa-x-twitter flex items-center justify-center text-neutral-300 group-hover:text-white"></i>
                </a>
                @endif
                @if (theme('social-link-linkedin'))
                <a href="{{ theme('social-link-linkedin') }}" target="_blank" class="group flex items-center justify-center w-9 h-9 rounded-full bg-neutral-800 hover:bg-[#0077B5] transition-colors border border-neutral-700">
                    <i class="fab fa-linkedin-in flex items-center justify-center text-neutral-300 group-hover:text-white"></i>
                </a>
                @endif
                @if (theme('social-link-youtube'))
                <a href="{{ theme('social-link-youtube') }}" target="_blank" class="group flex items-center justify-center w-9 h-9 rounded-full bg-neutral-800 hover:bg-[#FF0000] transition-colors border border-neutral-700">
                    <i class="fab fa-youtube flex items-center justify-center text-neutral-300 group-hover:text-white"></i>
                </a>
                @endif
            </div>
           </div>
            <a href="https://paymenter.org" target="_blank" class="group flex items-center gap-2 text-neutral-500 hover:text-[#4667FF] transition-colors whitespace-nowrap">
                <svg class="size-4 text-current group-hover:text-[#4667FF]" width="20" height="20" viewBox="0 0 150 205" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_17)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 107V205H42.8571V139.638H100C133.333 139.638 150 123 150 89.7246V69.5L75 107V69.5L148.227 32.8863C143.133 10.9621 127.057 0 100 0H0V107ZM0 107V69.5L75 32V69.5L0 107Z"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1_17">
                            <rect width="150" height="205"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-sm">{{ __('Powered by') }} Paymenter</span>
            </a>
          
        </div>
    </div>
</footer>