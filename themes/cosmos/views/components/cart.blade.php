<div class="relative">
    <a href="/cart" class="w-10 h-10 flex items-center justify-center rounded-2xl hover:bg-neutral transition focus:outline-none">
        <x-ri-shopping-bag-4-fill class="size-4" />
        @if($cartCount > 0)
            <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-white bg-primary rounded-full transform translate-x-1/2 -translate-y-1/2">{{ $cartCount }}</span>
        @endif
    </a>
</div>