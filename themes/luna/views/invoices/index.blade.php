<div class="space-y-4">
    <x-navigation.breadcrumb />
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-success/10 border border-success p-4 rounded-2xl flex flex-col items-center justify-center">
            <div class="text-success text-2xl font-bold">{{ $statusCounts['paid'] }}</div>
            <div class="text-base font-medium mt-1">Paid</div>
        </div>
        <div class="bg-warning/10 border border-warning p-4 rounded-2xl flex flex-col items-center justify-center">
            <div class="text-warning text-2xl font-bold">{{ $statusCounts['pending'] }}</div>
            <div class="text-base font-medium mt-1">Pending</div>
        </div>
        <div class="bg-red-500/10 border border-red-500 p-4 rounded-2xl flex flex-col items-center justify-center">
            <div class="text-red-500 text-2xl font-bold">{{ $statusCounts['cancelled'] }}</div>
            <div class="text-base font-medium mt-1">Cancelled</div>
        </div>
    </div>

    @if(theme('enable-search-bars', false))
    <div class="mb-6 flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
        <form method="GET" action="" class="w-full flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search invoices by ID..." class="w-full px-4 py-3 rounded-xl border border-neutral bg-background-secondary focus:outline-none text-base" />
            <button type="submit" class="px-4 py-3 bg-primary text-white font-semibold rounded-xl transition-colors duration-150 hover:bg-primary/90">Search</button>
        </form>
    </div>
    @endif
    @foreach ($invoices as $invoice)
    <a href="{{ route('invoices.show', $invoice) }}" wire:navigate>
        <div class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-2xl mb-4">
        <div class="flex items-center justify-between mb-2">
            <div class="flex items-center gap-3">
            <div class="bg-secondary/10 p-2 rounded-2xl">
                <x-ri-bill-line class="size-5 text-secondary" />
            </div>
            <span class="font-medium">Invoice #{{$invoice->number }}</span>
            <span class="text-base/50 font-semibold">
                <x-ri-circle-fill class="size-1 text-base/20" />
            </span>
            <span class="text-base text-sm">{{ $invoice->formattedTotal }}</span>
            </div>
            <div class="size-5 rounded-2xl p-0.5
                @if ($invoice->status == 'paid') text-success bg-success/20
                @elseif($invoice->status == 'cancelled') text-info bg-info/20
                @else text-warning bg-warning/20
                @endif">
                @if ($invoice->status == 'paid')
                    <x-ri-checkbox-circle-fill />
                @elseif($invoice->status == 'cancelled')
                    <x-ri-forbid-fill />
                @elseif($invoice->status == 'pending')
                    <x-ri-error-warning-fill />
                @endif
            </div>
        </div>
        @foreach ($invoice->items as $item)
            <p class="text-base text-sm">Item(s): {{ $item->description }} ({{ __('invoices.invoice_date')}}: {{ $invoice->created_at->format('d M Y') }})</p>
        @endforeach
        </div>
    </a>
    @endforeach

    {{ $invoices->links() }}
</div>
