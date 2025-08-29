<div>
    <x-navigation.breadcrumb />
    <p class="text-base text-base/60 font mt-2 mb-8">
        {{ __('dashboard.dashboard_description') }}
    </p>

    <div class="mt-8 flex flex-col lg:flex-row gap-8 items-start">
        <div class="flex-1 flex flex-col gap-8">
            <!-- Unpaid Invoices -->
            <div class="">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="bg-background-secondary border border-neutral p-2 rounded-2xl">
                            <x-ri-receipt-fill class="size-5" />
                        </div>
                        <h2 class="text-xl font-semibold">{{ __('dashboard.unpaid_invoices') }}</h2>
                    </div>
                    <span class="bg-primary flex items-center justify-center font-semibold rounded-2xl size-5 text-sm text-white">
                        {{ Auth::user()->invoices()->where('status', 'pending')->count() }}
                    </span>
                </div>
                <div class="space-y-4">
                    <livewire:invoices.widget :limit="3" />
                </div>
                <x-navigation.link class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral flex items-center justify-center rounded-2xl"
                    :href="route('invoices')">
                    {{ __('dashboard.view_all') }}
                    <x-ri-arrow-right-fill class="size-5" />
                </x-navigation.link>
            </div>
            <!-- Active Services -->
            <div class="">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="bg-background-secondary border border-neutral p-2 rounded-2xl">
                            <x-ri-archive-stack-fill class="size-5" />
                        </div>
                        <h2 class="text-xl font-semibold">{{ __('dashboard.active_services') }}</h2>
                    </div>
                    <span class="bg-primary flex items-center justify-center font-semibold rounded-2xl size-5 text-sm text-white">
                        {{ Auth::user()->services()->where('status', 'active')->count() }}
                    </span>
                </div>
                <div class="space-y-4">
                    <livewire:services.widget status="active" />
                </div>
                <x-navigation.link class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral flex items-center justify-center rounded-2xl"
                    :href="route('services')">
                    {{ __('dashboard.view_all') }}
                    <x-ri-arrow-right-fill class="size-5" />
                </x-navigation.link>
            </div>
        </div>
        <div class="w-full lg:w-1/3 flex flex-col gap-8">
            <!-- Open Tickets -->
            @if(!config('settings.tickets_disabled', false))
            <div class="">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <div class="bg-background-secondary border border-neutral p-2 rounded-2xl">
                            <x-ri-customer-service-fill class="size-5" />
                        </div>
                        <h2 class="text-xl font-semibold">{{ __('dashboard.open_tickets') }}</h2>
                        <a href="{{ route('tickets.create') }}" wire:navigate>
                            <x-ri-add-fill class="size-5 h-5" />
                        </a>
                    </div>
                    <span class="bg-primary flex items-center justify-center font-semibold rounded-2xl size-5 text-sm text-white">
                        {{ Auth::user()->tickets()->where('status', '!=', 'closed')->count() }}
                    </span>
                </div>
                <div class="space-y-4">
                    <livewire:tickets.widget />
                </div>
                <x-navigation.link class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral flex items-center justify-center rounded-2xl"
                    :href="route('tickets')">
                    {{ __('dashboard.view_all') }}
                    <x-ri-arrow-right-fill class="size-5 h-5" />
                </x-navigation.link>
            </div>
            @endif
            {!! hook('pages.dashboard') !!}
        </div>
    </div>
</div>
