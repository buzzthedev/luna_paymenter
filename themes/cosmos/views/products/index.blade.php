<div class="grid md:grid-cols-4 gap-8">
    <div class="flex flex-col gap-2">
        <div class="flex flex-col gap-4 bg-background-secondary border border-neutral rounded-2xl p-2">
            @foreach ($categories as $ccategory)
                <a href="{{ route('category.show', ['category' => $ccategory->slug]) }}" wire:navigate
                   class="transition-all duration-150 px-4 py-2 rounded-xl font-medium flex items-center gap-2 group
                   @if ($category->id == $ccategory->id)
                       bg-primary/10 text-primary border border-primary shadow-sm
                   @else
                       hover:bg-neutral-100 dark:hover:bg-neutral-800 text-neutral-800 dark:text-neutral-200
                   @endif">
                    <span class="truncate">{{ $ccategory->name }}</span>
                    @if ($category->id == $ccategory->id)
                    @endif
                </a>
            @endforeach
        </div>
    </div>
    <div class="flex flex-col gap-6 col-span-3">
        @if (count($childCategories) >= 1)
            <div class="grid sm:grid-cols-2 md:grid-cols-2 gap-4 h-fit"
                style="grid-template-columns: repeat({{ theme('shop-product-grid-columns', 2) }}, minmax(0, 1fr));">
                @foreach ($childCategories as $childCategory)
                    <div class="flex flex-col bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-2xl">
                        @if(theme('small_images', false))
                            <div class="flex gap-x-3 items-center">
                        @endif
                        @if ($childCategory->image)
                            <div class="relative w-full aspect-[4/2] bg-neutral-100 overflow-hidden">
                                <img src="{{ Storage::url($childCategory->image) }}" alt="{{ $childCategory->name }}"
                                    class="absolute inset-0 w-full h-full object-cover object-center rounded-2xl" />
                            </div>
                        @endif
                        <h2 class="text-xl font-bold">{{ $childCategory->name }}</h2>
                        @if(theme('small_images', false))
                            </div>
                        @endif
                        @if(theme('show_category_description', true))
                            <article class="mt-2 prose dark:prose-invert">
                                {!! $childCategory->description !!}
                            </article>
                        @endif
                        <a href="{{ route('category.show', ['category' => $childCategory->slug]) }}" wire:navigate class="mt-2">
                            <x-button.primary>
                                {{ __('general.view') }}
                            </x-button.primary>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
        @if(theme('enable-search-bars', false))
         <div class="mx-auto container">
            <form method="GET" action="" class="mb-6 flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search products..." class="w-full px-4 py-3 rounded-xl border border-neutral bg-background-secondary focus:outline-none text-base" />
                <select name="sort" onchange="this.form.submit()" class="px-4 py-3 rounded-xl border border-neutral bg-background-secondary focus:outline-none text-base">
                    <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Sort by</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                </select>
                <button type="submit" class="px-4 py-3 bg-primary text-white font-semibold rounded-xl transition-colors duration-150 hover:bg-primary/90">Search</button>
            </form>
            <h1 class="text-2xl font-bold">{{ $category->name }}</h1>
            <article class="prose dark:prose-invert">
                {!! $category->description !!}
            </article>
        </div>
        @endif
        <div class="grid sm:grid-cols-2 md:grid-cols-2 gap-4 h-fit"
            style="grid-template-columns: repeat({{ theme('shop-product-grid-columns', 2) }}, minmax(0, 1fr));">
            @if(count($products) === 0)
                <div class="col-span-2 text-center text-lg text-neutral-500 py-12">
                    No products found.
                </div>
            @endif
            @foreach ($products as $product)
                <div class="flex flex-col bg-background-secondary border border-neutral rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-200 overflow-hidden group">
                    <div class="relative w-full aspect-[4/2] bg-neutral-100 flex items-center justify-center overflow-hidden">
                        @php
                            $productLink = ($product->stock > 0 || !$product->stock) && $product->price()->available && theme('direct_checkout', false)
                                ? route('products.checkout', ['category' => $category, 'product' => $product->slug])
                                : route('products.show', ['category' => $product->category, 'product' => $product->slug]);
                        @endphp
                        <a href="{{ $productLink }}" wire:navigate class="absolute inset-0 z-10"></a>
                        @if ($product->image)
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-200 group-hover:scale-105" />
                        @else
                            <div class="w-full h-full flex items-center justify-center text-neutral-400 text-4xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75V19.5A2.25 2.25 0 004.5 21.75h15a2.25 2.25 0 002.25-2.25V6.75M2.25 6.75A2.25 2.25 0 014.5 4.5h15a2.25 2.25 0 012.25 2.25M2.25 6.75l9.72 7.29a2.25 2.25 0 002.58 0l9.72-7.29" />
                                </svg>
                            </div>
                        @endif
                        @if($product->stock > 0 || !$product->stock)
                            <span class="absolute top-3 right-3 bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">{{ __('product.in_stock') }}</span>
                        @else
                            <span class="absolute top-3 right-3 bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full">{{ __('product.out_of_stock') }}</span>
                        @endif
                    </div>
                    <div class="flex flex-col flex-1 p-4 gap-2">
                        <h2 class="text-lg text-neutral-900 dark:text-white">{{ $product->name }}</h2>
                        @if(theme('direct_checkout', false) && $product->description)
                            <article class="prose dark:prose-invert text-sm line-clamp-3">{!! $product->description !!}</article>
                        @endif
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-lg font-semibold text-primary">{{ $product->price() }}</span>
                            @if (($product->stock > 0 || !$product->stock) && $product->price()->available && theme('direct_checkout', false))
                                <a href="{{ route('products.checkout', ['category' => $category, 'product' => $product->slug]) }}" wire:navigate>
                                    <x-button.primary size="md">{{ __('product.add_to_cart') }}</x-button.primary>
                                </a>
                            @else
                                <a href="{{ route('products.show', ['category' => $product->category, 'product' => $product->slug]) }}" wire:navigate>
                                    <x-button.primary size="md">{{ __('general.view') }}</x-button.primary>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
