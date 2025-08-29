<div class="min-h-screen">
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


