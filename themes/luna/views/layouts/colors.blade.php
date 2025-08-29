<style>
    @php
        $normalize = function ($v) {
            $v = trim($v);
            if (preg_match('/^hsla?\((.+)\)$/i', $v, $m)) {
                return $m[1];
            }
            return $v;
        };
    @endphp
    :root {
        --color-primary: {{  $normalize(theme('primary', 'hsl(229 100% 64%)')) }};
        --color-secondary: {{  $normalize(theme('secondary', 'hsl(237 33% 60%)')) }};
        --color-neutral: {{  $normalize(theme('neutral', 'hsl(220 25% 85%)')) }};
        --color-base: {{  $normalize(theme('base', 'hsl(0 0% 0%)')) }};
        --color-muted: {{  $normalize(theme('muted', 'hsl(220 28% 25%)')) }};
        --color-inverted: {{  $normalize(theme('inverted', 'hsl(100 100% 100%)')) }};
        --color-success: {{  $normalize(theme('success', 'hsl(142 71% 45%)')) }};
        --color-error: {{  $normalize(theme('error', 'hsl(0 75% 60%)')) }};
        --color-warning: {{  $normalize(theme('warning', 'hsl(25 95% 53%)')) }};
        --color-inactive: {{  $normalize(theme('inactive', 'hsl(0 0% 63%)')) }};
        --color-info: {{  $normalize(theme('info', 'hsl(210 100% 60%)')) }};
        --color-background: {{  $normalize(theme('background', 'hsl(100 100% 100%)')) }};
        --color-background-secondary: {{  $normalize(theme('background-secondary', 'hsl(0 0% 97%)')) }};
    }

    .dark {
        --color-primary: {{  $normalize(theme('dark-primary', 'hsl(229 100% 64%)')) }};
        --color-secondary: {{  $normalize(theme('dark-secondary', 'hsl(237 33% 60%)')) }};
        --color-neutral: {{  $normalize(theme('dark-neutral', 'hsl(220 25% 29%)')) }};
        --color-base: {{  $normalize(theme('dark-base', 'hsl(100 100% 100%)')) }};
        --color-muted: {{  $normalize(theme('dark-muted', 'hsl(220 28% 25%)')) }};
        --color-inverted: {{  $normalize(theme('dark-inverted', 'hsl(220 14% 60%)')) }};
        --color-background: {{  $normalize(theme('dark-background', 'hsl(221 39% 11%)')) }};
        --color-background-secondary: {{  $normalize(theme('dark-background-secondary', 'hsl(217 33% 16%)')) }};
    }
</style>