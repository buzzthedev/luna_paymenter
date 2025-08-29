<div>
    <div class="space-y-4">
        <x-navigation.breadcrumb />
        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 mb-6">
            <div class="bg-success/10 border border-success p-4 rounded-2xl flex flex-col items-center justify-center">
                <div class="text-success text-2xl font-bold">{{ $statusCounts['active'] }}</div>
                <div class="text-base font-medium mt-1">Active</div>
            </div>
            <div class="bg-warning/10 border border-warning p-4 rounded-2xl flex flex-col items-center justify-center">
                <div class="text-warning text-2xl font-bold">{{ $statusCounts['pending'] }}</div>
                <div class="text-base font-medium mt-1">Pending</div>
            </div>
            <div class="bg-inactive/10 border border-inactive p-4 rounded-2xl flex flex-col items-center justify-center">
                <div class="text-inactive text-2xl font-bold">{{ $statusCounts['suspended'] }}</div>
                <div class="text-base font-medium mt-1">Suspended</div>
            </div>
            <div class="bg-red-500/10 border border-red-500 p-4 rounded-2xl flex flex-col items-center justify-center">
                <div class="text-red-500 text-2xl font-bold">{{ $statusCounts['cancelled'] }}</div>
                <div class="text-base font-medium mt-1">Cancelled</div>
            </div>
        </div>
        @if(theme('enable-search-bars', false))
        <div class="mb-6 flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
            <form method="GET" action="" class="w-full flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search services..." class="w-full px-4 py-3 rounded-xl border border-neutral bg-background-secondary focus:outline-none text-base" />
                <button type="submit" class="px-4 py-3 bg-primary text-white font-semibold rounded-xl transition-colors duration-150 hover:bg-primary/90">Search</button>
            </form>
        </div>
        @endif
        @foreach ($services as $service)
        <a href="{{ route('services.show', $service) }}" wire:navigate>
            <div class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-2xl mb-4">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-3">
                <div class="bg-secondary/10 p-2 rounded-2xl">
                    <x-ri-instance-line class="size-5 text-secondary" />
                </div>
                <span class="font-medium">{{ $service->product->name }}</span>
                </div>
                <div class="size-5 rounded-2xl p-0.5
                    @if ($service->status == 'active') text-success bg-success/20 
                    @elseif($service->status == 'suspended' || $service->status == 'cancelled') text-inactive bg-inactive/20
                    @else text-warning bg-warning/20 
                    @endif">
                    @if ($service->status == 'active')
                        <x-ri-checkbox-circle-fill />
                    @elseif($service->status == 'suspended' || $service->status == 'cancelled')
                        <x-ri-forbid-fill />
                    @elseif($service->status == 'pending')
                        <x-ri-error-warning-fill />
                    @endif
                </div>
            </div>
            <p class="text-base text-sm">Product(s): {{ $service->product->category->name }} {{ in_array($service->plan->type, ['recurring']) ? ' - ' . __('services.every_period', [
                'period' => $service->plan->billing_period > 1 ? $service->plan->billing_period : '',
                'unit' => trans_choice(__('services.billing_cycles.' . $service->plan->billing_unit), $service->plan->billing_period)
            ]) : '' }}</p>
            </div>
        </a>
        @endforeach

        {{ $services->links() }}
    </div>
</div>
