<div class="space-y-4">
    <div class="flex flex-row justify-between">
        <x-navigation.breadcrumb />
        <x-navigation.link :href="route('tickets.create')" class="flex items-center gap-2 px-5 py-3 bg-primary text-white font-semibold rounded-xl shadow-md transition-colors duration-150 hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary/40">
            <x-ri-add-line class="size-5" />
            <span>{{ __('ticket.create_ticket') }}</span>
        </x-navigation.link>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
        <div class="bg-success/10 border border-success p-4 rounded-2xl flex flex-col items-center justify-center">
            <div class="text-success text-2xl font-bold">{{ $statusCounts['open'] }}</div>
            <div class="text-base font-medium mt-1">Open</div>
        </div>
        <div class="bg-info/10 border border-info p-4 rounded-2xl flex flex-col items-center justify-center">
            <div class="text-info text-2xl font-bold">{{ $statusCounts['replied'] }}</div>
            <div class="text-base font-medium mt-1">Replied</div>
        </div>
        <div class="bg-inactive/10 border border-inactive p-4 rounded-2xl flex flex-col items-center justify-center">
            <div class="text-inactive text-2xl font-bold">{{ $statusCounts['closed'] }}</div>
            <div class="text-base font-medium mt-1">Closed</div>
        </div>
    </div>
    @if(theme('enable-search-bars', false))
    <div class="mb-6 flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
        <form method="GET" action="" class="w-full flex flex-col sm:flex-row items-stretch sm:items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search tickets..." class="w-full px-4 py-3 rounded-xl border border-neutral bg-background-secondary focus:outline-none text-base" />
            <button type="submit" class="px-4 py-3 bg-primary text-white font-semibold rounded-xl transition-colors duration-150 hover:bg-primary/90">Search</button>
        </form>
    </div>
    @endif
    @foreach ($tickets as $ticket)
    <a href="{{ route('tickets.show', $ticket) }}" wire:navigate>
        <div class="bg-background-secondary hover:bg-background-secondary/80 border border-neutral p-4 rounded-2xl mb-4">
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-3">
                    <div class="bg-secondary/10 p-2 rounded-2xl">
                        <x-ri-ticket-line class="size-5 text-secondary" />
                    </div>
                    <span class="font-medium">{{ $ticket->subject }}</span>
                </div>
                <div class="size-5 rounded-2xl p-0.5
                    @if ($ticket->status == 'open') text-success bg-success/20 
                    @elseif($ticket->status == 'closed') text-inactive bg-inactive/20
                    @else text-info bg-info/20 
                    @endif"
                    @if ($ticket->status == 'open')
                        <x-ri-add-circle-fill />
                    @elseif($ticket->status == 'closed')
                        <x-ri-forbid-fill />
                    @elseif($ticket->status == 'replied')
                        <x-ri-chat-smile-2-fill />
                    @endif
                </div>
            </div>
            <p class="text-base text-sm">
                {{ __('ticket.last_activity') }}
                {{ $ticket->messages()->orderBy('created_at', 'desc')->first()->created_at->diffForHumans() }}
                {{ $ticket->department ? ' - ' . $ticket->department : '' }}
            </p>
        </div>
    </a>
    @endforeach
</div>