<div class="min-h-screen">
    <style>
        .home-page-builder__card {
            background: hsl(var(--hpb-color-background-secondary)) !important;
            border: 1px solid hsl(var(--hpb-color-neutral));
            box-shadow: var(--hpb-card-shadow);
            border-radius: var(--hpb-card-radius);
        }

        @prefers-color-scheme: dark {
            .home-page-builder__card {
                background: hsl(var(--hpb-color-background-secondary)) !important;
                border: 1px solid hsl(var(--hpb-color-neutral));
                box-shadow: var(--hpb-card-shadow);
                border-radius: var(--hpb-card-radius);
            }
        }
    </style>
    @foreach(($sections ?? []) as $section)
        @php
            $type = $section['type'] ?? '';
            $data = $section['data'] ?? [];
            $base = $type;
            $variation = '1';
            if (is_string($type) && str_contains($type, '_')) {
                [$base, $variation] = explode('_', $type, 2);
            }
        @endphp
        @includeIf("homebuilder::sections.$base", ['variation' => $variation, 'data' => $data])
    @endforeach
</div>


