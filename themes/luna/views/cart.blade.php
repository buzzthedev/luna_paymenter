<div class="min-h-screen flex flex-col items-center py-10 px-2 md:px-0">
    <div class="container mx-auto">
        <div class="mb-10">
            <h1 class="text-4xl md:text-3xl font-bold tracking-tight mb-2">{{ __('product.order_summary') }}</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-2 flex flex-col gap-6">
                @if (Cart::get()->isEmpty())
                    <div class="flex flex-col items-center justify-center bg-background-secondary rounded-2xl shadow-lg p-12 mt-10 borderborder-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 text-primary mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3.75l1.5 16.5A2.25 2.25 0 005.985 22.5h12.03a2.25 2.25 0 002.235-2.25l1.5-16.5M2.25 3.75h19.5M2.25 3.75L6.75 7.5m14.25-3.75l-4.5 3.75" />
                        </svg>
                        <h2 class="text-2xl font-bold mb-2">{{ __('product.empty_cart') }}</h2>
                        <a href="/" class="mt-2 px-6 py-2 rounded-xl bg-primary text-white font-semibold shadow hover:bg-primary/90 transition">{{ __('product.view') }}</a>
                    </div>
                @endif
                @foreach (Cart::get() as $key => $item)
                    <div class="bg-background-secondary borderborder-none rounded-2xl shadow-lg p-6 flex flex-col md:flex-row gap-6 items-start md:items-center">
                        <div class="flex-1 flex flex-col gap-2 w-full">
                            <div class="flex justify-between items-start w-full mb-1">
                                <h2 class="text-xl font-semibold">{!! $item->product->name !!}</h2>
                                <div class="text-lg font-bold text-primary text-right">{{ $item->price->format($item->price->price * $item->quantity) }}
                                    @if ($item->quantity > 1)
                                    @endif
                                </div>
                            </div>
                            <h2 class="text-md text-muted-foreground font-medium mb-1">{!! $item->product->description !!}</h2>
                           <div class="flex gap-6 items-center justify-between">
                             @if ($item->product->allow_quantity == 'combined')
                                <div class="flex gap-2 w-fit">
                                    <x-button.secondary wire:click="updateQuantity({{ $key }}, {{ $item->quantity - 1 }})" class="h-10 w-10 flex items-center justify-center text-lg rounded-xl min-w-10 max-w-10">-</x-button.secondary>
                                    <x-form.input class="h-10 text-center text-base font-semibold min-w-14 max-w-14 rounded-xl" disabled divClass="!mt-0 !w-14" value="{!! $item->quantity !!}" name="quantity" />
                                    <x-button.secondary wire:click="updateQuantity({{ $key }}, {{ $item->quantity + 1 }})" class="h-10 w-10 flex items-center justify-center text-lg rounded-xl min-w-10 max-w-10">+</x-button.secondary>
                                </div>
                            @endif
                              <div class="flex gap-2 w-fit">
                                <a href="{{ route('products.checkout', [$item->product->category, $item->product, 'edit' => $key]) }}" wire:navigate>
                                    <x-button.primary class="h-fit w-fit px-4 py-2 rounded-lg text-base font-semibold flex items-center justify-center">
                                        <x-ri-edit-2-fill class="size-5" />
                                    </x-button.primary>
                                </a>
                                <x-button.danger wire:click="removeProduct({{ $key }})" class="h-fit w-fit px-4 py-2 rounded-lg text-base font-semibold flex items-center justify-center">
                                    <x-ri-delete-bin-6-fill class="size-5" />
                                </x-button.danger>
                            </div>
                          </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col gap-6">
                @if (!Cart::get()->isEmpty())
                    <div class="bg-background-secondary borderborder-none rounded-2xl shadow-lg p-6 flex flex-col gap-4">
                        <h2 class="text-xl font-bold mb-3">{{ __('product.order_summary') }}</h2>
                        <div class="flex items-end gap-2 mb-2">
                            @if(!$coupon)
                                <x-form.input wire:model="coupon" name="coupon" :label="__('product.apply')" />
                                <x-button.primary wire:click="applyCoupon" class="h-fit w-fit px-4 py-2 rounded-2xl font-semibold" wire:loading.attr="disabled">
                                    <x-loading target="applyCoupon" />
                                    <div wire:loading.remove wire:target="applyCoupon">{{ __('product.apply') }}</div>
                                </x-button.primary>
                            @else
                                <div class="flex justify-between items-center w-full">
                                    <h4 class="text-center w-full text-primary font-semibold">{{ $coupon->code }}</h4>
                                    <x-button.secondary wire:click="removeCoupon" class="h-fit w-fit px-4 py-2 rounded-lg font-semibold">{{ __('product.remove') }}</x-button.secondary>
                                </div>
                            @endif
                        </div>
                        <div class="flex justify-between font-semibold text-base py-2 border-bborder-none">
                            <span>{{ __('product.subtotal') }}:</span>
                            <span>{{ $total->format($total->price - $total->tax) }}</span>
                        </div>
                        <div class="border-t border-stone-700"></div>
                        @if ($total->tax > 0)
                            <div class="flex justify-between font-semibold text-base py-2 border-bborder-none">
                                <span>{{ \App\Classes\Settings::tax()->name }}:</span>
                                <span>{{ $total->formatted->tax }}</span>
                            </div>
                            <div class="border-t border-stone-700"></div>
                        @endif
                        <div class="flex justify-between text-lg font-bold py-2 mt-2">
                            <span>Total:</span>
                            <span>{{ $total }}</span>
                        </div>

                         @if($total->price > 0)
                            @if(count($gateways) > 1)
                                <x-form.select wire:model.live="gateway" name="gateway" :label="__('product.payment_method')">
                                    @foreach ($gateways as $gateway)
                                        <option value="{{ $gateway->id }}">{{ $gateway->name }}</option>
                                    @endforeach
                                </x-form.select>
                            @endif
                            @if(Auth::check() && Auth::user()->credits()->where('currency_code', Cart::get()->first()->price->currency->code)->exists() && Auth::user()->credits()->where('currency_code', Cart::get()->first()->price->currency->code)->first()->amount > 0)
                                <x-form.checkbox wire:model="use_credits" name="use_credits" :label="__('product.use_credits')" />
                            @endif
                        @endif
                        @if(config('settings.tos'))
                            <x-form.checkbox wire:model="tos" name="tos">
                                {{ __('product.tos') }}
                                <a href="{{ config('settings.tos') }}" target="_blank" class="text-primary hover:text-primary/80 underline">{{ __('product.tos_link') }}</a>
                            </x-form.checkbox>
                        @endif
                        <div class="flex flex-row justify-end gap-2 mt-2">
                            <x-button.primary wire:click="checkout" class="h-fit px-6 py-2 rounded-lg text-base font-bold shadow" wire:loading.attr="disabled">
                                <x-loading target="checkout" />
                                <div wire:loading.remove wire:target="checkout">{{ __('product.checkout') }}</div>
                            </x-button.primary>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
