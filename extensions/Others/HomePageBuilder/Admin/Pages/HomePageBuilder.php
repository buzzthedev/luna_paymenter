<?php

namespace Paymenter\Extensions\Others\HomePageBuilder\Admin\Pages;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Components\Group;
use Filament\Actions\Action;
use Filament\Pages\Page;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use App\Models\Extension as ExtensionModel;
use Livewire\Attributes\On; 
use App\Models\Category;
use UnitEnum;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

class HomePageBuilder extends Page implements HasForms
{
    use InteractsWithForms;

  protected static string | BackedEnum | null $navigationIcon = Heroicon::OutlinedSquares2x2;
    protected static string | UnitEnum | null $navigationGroup = 'Extensions';
    protected static ?string $title = 'Homepage Builder';
    protected static ?string $slug = 'homepage-builder';

    protected string $view = 'homebuilder::home-page-builder';

    public ?array $data = [];
    public ?array $previewData = [];
    public string $activeTab = 'preview';

    public function mount(): void
    {
        $this->form->fill($this->getFormData());
    }

    public function setActiveTab(string $tab): void
    {
        $this->activeTab = $tab;
    }

    public function getViewData(): array
    {
        return [
            'homebuilderView' => $this->generatePreviewHtml(),
            'colors' => $this->form->getState()
        ];
    }

   protected function getFormSchema(): array
    {
    $sectionOptions = [
        'hero' => [
            'label' => 'Hero',
            'variations' => [
                '1' => 'Variation 1',
                '2' => 'Variation 2',
                '3' => 'Variation 3',
                '4' => 'Variation 4',
                '5' => 'Variation 5',
                '6' => 'Variation 6',
            ]
        ],
        'features' => [
            'label' => 'Features',
            'variations' => [
                '1' => 'Variation 1',
                '2' => 'Variation 2',
                '3' => 'Variation 3',
                '4' => 'Variation 4',
                '5' => 'Variation 5',
            ]
        ],
        'products' => [
            'label' => 'Products',
            'variations' => [
                '1' => 'Variation 1',
                '2' => 'Variation 2',
                '3' => 'Variation 3',
                '4' => 'Variation 4',
                '5' => 'Variation 5',
            ]
        ],
        'reviews' => [
            'label' => 'Reviews',
            'variations' => [
                '1' => 'Variation 1',
                '2' => 'Variation 2',
                '3' => 'Variation 3',
                '4' => 'Variation 4',
                '5' => 'Variation 5',
            ]
        ],
        'pricing' => [
            'label' => 'Pricing',
            'variations' => [
                '1' => 'Variation 1',
                '2' => 'Variation 2',
                '3' => 'Variation 3',
            ]
        ],
        'faq' => [
            'label' => 'FAQ',
            'variations' => [
                '1' => 'Variation 1',
                '2' => 'Variation 2',
                '3' => 'Variation 3',
                '4' => 'Variation 4',
                '5' => 'Variation 5',
                '6' => 'Variation 6',
            ]
        ],
    ];

     return [
            Section::make('General Settings')
                ->schema([
                    TextInput::make('products_category')
                        ->label('Products Category Slug')
                        ->helperText('Category slug to use for Products sections'),
                    
                    Section::make('Light Theme Colors')
                        ->schema([
                            ColorPicker::make('primary')
                                ->label('Primary - Brand Color (Light)')
                                ->hsl()
                                ->default('hsl(229, 100%, 64%)'),
                            ColorPicker::make('secondary')
                                ->label('Secondary - Brand Color (Light)')
                                ->hsl()
                                ->default('hsl(237, 33%, 60%)'),
                            ColorPicker::make('neutral')
                                ->label('Borders, Accents... (Light)')
                                ->hsl()
                                ->default('hsl(220, 25%, 85%)'),
                            ColorPicker::make('base')
                                ->label('Base - Text Color (Light)')
                                ->hsl()
                                ->default('hsl(0, 0%, 0%)'),
                            ColorPicker::make('muted')
                                ->label('Muted - Text Color (Light)')
                                ->hsl()
                                ->default('hsl(220, 28%, 25%)'),
                            ColorPicker::make('inverted')
                                ->label('Inverted - Text Color (Light)')
                                ->hsl()
                                ->default('hsl(100, 100%, 100%)'),
                            ColorPicker::make('background')
                                ->label('Background - Color (Light)')
                                ->hsl()
                                ->default('hsl(100, 100%, 100%)'),
                            ColorPicker::make('background-secondary')
                                ->label('Background - Secondary Color (Light)')
                                ->hsl()
                                ->default('hsl(0, 0%, 97%)'),
                        ])
                        ->columns(2),
                    
                    Section::make('Dark Theme Colors')
                        ->schema([
                            ColorPicker::make('dark-primary')
                                ->label('Primary - Brand Color (Dark)')
                                ->hsl()
                                ->default('hsl(229, 100%, 64%)'),
                            ColorPicker::make('dark-secondary')
                                ->label('Secondary - Brand Color (Dark)')
                                ->hsl()
                                ->default('hsl(237, 33%, 60%)'),
                            ColorPicker::make('dark-neutral')
                                ->label('Borders, Accents... (Dark)')
                                ->hsl()
                                ->default('hsl(220, 25%, 29%)'),
                            ColorPicker::make('dark-base')
                                ->label('Base - Text Color (Dark)')
                                ->hsl()
                                ->default('hsl(100, 100%, 100%)'),
                            ColorPicker::make('dark-muted')
                                ->label('Muted - Text Color (Dark)')
                                ->hsl()
                                ->default('hsl(220, 28%, 25%)'),
                            ColorPicker::make('dark-inverted')
                                ->label('Inverted - Text Color (Dark)')
                                ->hsl()
                                ->default('hsl(220, 14%, 60%)'),
                            ColorPicker::make('dark-background')
                                ->label('Background - Color (Dark)')
                                ->hsl()
                                ->default('hsl(60, 3%, 7%)'),
                            ColorPicker::make('dark-background-secondary')
                                ->label('Background - Secondary Color (Dark)')
                                ->hsl()
                                ->default('hsl(217, 33%, 16%)'),
                        ])
                        ->columns(2),
                ]),
            
            Section::make('Page Sections')
                ->schema([
                    Repeater::make('sections')
                        ->label('Sections')
                        ->schema([
                            Hidden::make('content')
                                ->default([
                                    'hero_data' => [],
                                    'features_data' => [],
                                    'reviews_data' => ['reviews' => []],
                                ]),
                            Select::make('type')
                                ->label('Section Type')
                                ->options([
                                    'hero' => 'Hero',
                                    'features' => 'Features',
                                    'products' => 'Products',
                                    'reviews' => 'Reviews',
                                    'pricing' => 'Pricing',
                                    'faq' => 'FAQ',
                                ])
                                ->required()
                                ->native(false)
                                ->default('hero')
                                ->live()
                                ->afterStateUpdated(function ($set, $get, $state) {
                                    $content = $get('content');
                                    if (!is_array($content)) {
                                        $content = [];
                                    }
                                    if ($state === 'reviews') {
                                        if (!array_key_exists('reviews_data', $content) || !is_array($content['reviews_data'])) {
                                            $content['reviews_data'] = [];
                                        }
                                        if (!array_key_exists('reviews', $content['reviews_data']) || !is_array($content['reviews_data']['reviews'])) {
                                            $content['reviews_data']['reviews'] = [];
                                        }
                                    } elseif ($state === 'features') {
                                        if (!array_key_exists('features_data', $content) || !is_array($content['features_data'])) {
                                            $content['features_data'] = [];
                                        }
                                    } elseif ($state === 'hero') {
                                        if (!array_key_exists('hero_data', $content) || !is_array($content['hero_data'])) {
                                            $content['hero_data'] = [];
                                        }
                                    }
                                    $set('content', $content);
                                }),
                            Select::make('variation')
                                ->label('Variation')
                                ->options(function ($get) use ($sectionOptions) {
                                    $type = $get('type');
                                    if (!$type || !isset($sectionOptions[$type])) {
                                        return [];
                                    }
                                    return $sectionOptions[$type]['variations'];
                                })
                                ->required()
                                ->native(false)
                                ->visible(fn ($get) => $get('type'))
                                ->default('1')
                                ->live(),

                            Fieldset::make('Content')
                                ->schema([
                                    Group::make()
                                        ->statePath('content.hero_data')
                                        ->columns(2)
                                        ->columnSpanFull()
                                        ->schema([
                                            TextInput::make('title')
                                                ->label('Title')
                                                ->columnSpan(1),
                                            Textarea::make('subtitle')
                                                ->label('Subtitle / Description')
                                                ->rows(3)
                                                ->columnSpan(1),
                                            TextInput::make('primary_label')
                                                ->label('Primary button label')
                                                ->columnSpan(1),
                                            TextInput::make('primary_link')
                                                ->label('Primary button link')
                                                ->columnSpan(1),
                                            TextInput::make('secondary_label')
                                                ->label('Secondary button label')
                                                ->columnSpan(1),
                                            TextInput::make('secondary_link')
                                                ->label('Secondary button link')
                                                ->columnSpan(1),

                                            Repeater::make('badges')
                                                ->label('Badges / Highlights')
                                                ->schema([
                                                    TextInput::make('text')->label('Text')->required(),
                                                ])
                                                ->default([
                                                    ['text' => '99.9% Uptime'],
                                                    ['text' => '24/7 Support'],
                                                    ['text' => 'Global Network'],
                                                    ['text' => 'DDoS Protection'],
                                                ])
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['2','4']))
                                                ->columnSpanFull(),

                                            Repeater::make('bullets')
                                                ->label('Bullet points')
                                                ->schema([
                                                    TextInput::make('text')->label('Text')->required(),
                                                ])
                                                ->default([
                                                    ['text' => 'NVMe SSD storage for lightning-fast I/O'],
                                                    ['text' => 'Global data centers with low-latency connections'],
                                                    ['text' => 'Enterprise-grade security and DDoS protection'],
                                                ])
                                                ->visible(fn ($get) => $get('../../variation') === '3')
                                                ->columnSpanFull(),
                                        ])
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'hero'),

                            Fieldset::make('Features Content')
                                ->schema([
                                    Group::make()
                                        ->statePath('content.features_data')
                                        ->columns(2)
                                        ->columnSpanFull()
                                        ->schema([
                                            TextInput::make('section_title')
                                                ->label('Section title')
                                                ->visible(fn ($get) => $get('type') === 'features')
                                                ->columnSpan(1),
                                            Textarea::make('section_description')
                                                ->label('Section description')
                                                ->rows(3)
                                                ->visible(fn ($get) => $get('type') === 'features')
                                                ->columnSpan(1),

                                            Repeater::make('items')
                                                ->label('Feature items (title & description)')
                                                ->schema([
                                                    TextInput::make('title')->label('Title')->required(),
                                                    Textarea::make('description')->label('Description')->rows(2)->required(),
                                                ])
                                                ->default([
                                                    ['title' => 'Blazing Fast', 'description' => 'Experience top-tier speed and performance for all your sites with our optimized infrastructure.'],
                                                    ['title' => 'Reliable Servers', 'description' => 'Our infrastructure is built for reliability and uptime, ensuring your services stay online.'],
                                                    ['title' => 'Advanced Security', 'description' => 'Protect your data with industry-leading security features and DDoS protection.'],
                                                    ['title' => 'Global Reach', 'description' => 'Serve your content quickly to users around the world with our global CDN.'],
                                                    ['title' => '24/7 Support', 'description' => 'Our expert team is always available to help you succeed with round-the-clock support.'],
                                                    ['title' => 'Cloud Backups', 'description' => 'Daily automated backups ensure your data is always safe and recoverable.'],
                                                ])
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['1','2','5']))
                                                ->columnSpanFull(),

                                            Fieldset::make('Core Features (Variation 3)')
                                                ->schema([
                                                    Repeater::make('items_main')
                                                        ->label('Main features (4)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'High Performance', 'description' => 'SSD storage and optimized servers for lightning-fast loading times.'],
                                                            ['title' => 'Security First', 'description' => 'DDoS protection, SSL certificates, and regular security updates.'],
                                                            ['title' => 'Global Network', 'description' => 'Data centers worldwide with CDN for optimal global performance.'],
                                                            ['title' => '24/7 Support', 'description' => 'Expert technical support available around the clock.'],
                                                        ])
                                                        ->columnSpanFull(),
                                                    Repeater::make('items_sub')
                                                        ->label('Additional features (3)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'Automated Backups', 'description' => 'Daily backups with instant restore capabilities.'],
                                                            ['title' => 'Quick Setup', 'description' => 'Get your server running in under 60 seconds.'],
                                                            ['title' => 'Real-time Monitoring', 'description' => 'Track performance and uptime in real-time.'],
                                                        ])
                                                        ->columnSpanFull(),
                                                ])
                                                ->visible(fn ($get) => $get('../../variation') === '3')
                                                ->columns(2),

                                            Fieldset::make('Enterprise Solutions (Variation 4)')
                                                ->schema([
                                                    Repeater::make('items_left')
                                                        ->label('Left column items (3)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'Scalable Infrastructure', 'description' => 'Grow your resources on-demand with our flexible cloud infrastructure that scales with your business needs.'],
                                                            ['title' => 'Advanced Security', 'description' => 'Multi-layer security including firewall rules, intrusion detection, and compliance-ready infrastructure.'],
                                                            ['title' => '99.99% Uptime SLA', 'description' => 'Enterprise-grade reliability with guaranteed uptime and compensation for any downtime.'],
                                                        ])
                                                        ->columnSpanFull(),
                                                    Repeater::make('metrics')
                                                        ->label('Right column metrics (3)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required(),
                                                            TextInput::make('value')->label('Value')->required(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'Performance Metrics', 'value' => '99.9%', 'description' => 'Average response time across all servers'],
                                                            ['title' => 'Global Coverage', 'value' => '15+', 'description' => 'Data centers across multiple continents'],
                                                            ['title' => 'Support Response', 'value' => '5min', 'description' => 'Average response time for urgent issues'],
                                                        ])
                                                        ->columnSpanFull(),
                                                ])
                                                ->visible(fn ($get) => $get('../../variation') === '4')
                                                ->columns(2),
                                        ])
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'features'),

                            Fieldset::make('Reviews Content')
                                ->schema([
                                    TextInput::make('content.reviews_data.section_title')
                                        ->label('Section title')
                                        ->columnSpan(1),
                                    Textarea::make('content.reviews_data.section_description')
                                        ->label('Section description')
                                        ->rows(3)
                                        ->columnSpan(1),

                                    Repeater::make('content.reviews_data.reviews')
                                        ->label('Reviews')
                                        ->addActionLabel('Add review')
                                        ->afterStateHydrated(function ($get, $set, $state) {
                                            if (!is_array($state)) {
                                                $set('content.reviews_data.reviews', []);
                                            }
                                        })
                                        ->schema([
                                            Textarea::make('quote')->label('Quote')->rows(3)->required(),
                                            TextInput::make('name')->label('Name')->required(),
                                            TextInput::make('title')->label('Title / Role')->required(),
                                            TextInput::make('initials')->label('Initials (2 letters)')->maxLength(4),
                                        ])
                                        ->reorderable(false)
                                        ->collapsible()
                                        ->default([])
                                        ->defaultItems(0)
                                        ->columnSpanFull(),
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'reviews'),
                        ])
                        ->default([
                            ['type' => 'hero', 'variation' => '1', 'content' => []]
                        ])
                        ->addActionLabel('Add section')
                        ->columns(2)
                        ->itemLabel(fn (array $state): ?string => 
                            isset($state['type']) ? ucfirst($state['type']) . ' Section' : null
                        )
                ]),
        ];
}


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components($this->getFormSchema())
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Configuration')
                ->submit('save')
                ->color('primary'),
        ];
    }

    private function generatePreviewHtml(): string
    {
        $data = $this->form->getState();
        $sections = $data['sections'] ?? [];
        
        $category = null;
        $products = collect();
        $productsCategory = $data['products_category'] ?? null;
        if ($productsCategory) {
            $category = Category::where('slug', $productsCategory)->first();
            if ($category) {
                $products = $category->products()->where('hidden', false)->orderBy('sort')->get();
            }
        }
        
        $cssVariables = $this->generateCssVariables($data);
        $fontAwesome = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">';
        $html = $fontAwesome . "<style>{$cssVariables}</style>";

        foreach ($sections as $section) {
            $type = $section['type'] ?? '';
            $variation = $section['variation'] ?? '1';
            $content = $section['content'] ?? [];
            $contentForView = $content;
            if ($type === 'hero' && isset($content['hero_data']) && is_array($content['hero_data'])) {
                $contentForView = array_merge($contentForView, $content['hero_data']);
            }
            if ($type === 'features' && isset($content['features_data']) && is_array($content['features_data'])) {
                $contentForView = array_merge($contentForView, $content['features_data']);
            }
            if ($type === 'reviews' && isset($content['reviews_data']) && is_array($content['reviews_data'])) {
                $contentForView = array_merge($contentForView, $content['reviews_data']);
                if (isset($content['reviews_data']['reviews']) && is_array($content['reviews_data']['reviews'])) {
                    $contentForView['reviews'] = $content['reviews_data']['reviews'];
                } elseif (!isset($contentForView['reviews'])) {
                    $contentForView['reviews'] = [];
                }
            }
            
            $viewPath = "homebuilder::sections.{$type}";
            if ($type && view()->exists($viewPath)) {
                $html .= view($viewPath, [
                    'variation' => $variation,
                    'colors' => $data,
                    'data' => [
                        'category' => $category,
                        'products' => $products,
                        'content' => $contentForView,
                    ],
                ])->render();
            }
        }

        if (empty($html)) {
            $html = '<div class="p-8 text-center text-gray-500 dark:text-gray-400">
                <h3 class="text-lg font-medium mb-2">No Sections Configured</h3>
                <p class="text-sm">Add sections to your homepage to see them here</p>
            </div>';
        }

        return $html;
    }

    private function generateCssVariables(array $data): string
    {
        $normalize = function ($v) {
            $v = trim((string) $v);
            if (preg_match('/^hsla?\((.+)\)$/i', $v, $m)) {
                return $m[1];
            }
            return $v;
        };

        $lightMap = [
            'primary' => $data['primary'] ?? null,
            'secondary' => $data['secondary'] ?? null,
            'neutral' => $data['neutral'] ?? null,
            'base' => $data['base'] ?? null,
            'muted' => $data['muted'] ?? null,
            'inverted' => $data['inverted'] ?? null,
            'background' => $data['background'] ?? null,
            'background-secondary' => $data['background-secondary'] ?? null,
        ];

        $darkMap = [
            'primary' => $data['dark-primary'] ?? null,
            'secondary' => $data['dark-secondary'] ?? null,
            'neutral' => $data['dark-neutral'] ?? null,
            'base' => $data['dark-base'] ?? null,
            'muted' => $data['dark-muted'] ?? null,
            'inverted' => $data['dark-inverted'] ?? null,
            'background' => $data['dark-background'] ?? null,
            'background-secondary' => $data['dark-background-secondary'] ?? null,
        ];

        $rootVars = [];
        foreach ($lightMap as $key => $value) {
            if ($value !== null && $value !== '') {
                $rootVars[] = "--color-{$key}: " . $normalize($value) . ";";
            }
        }

        $darkVars = [];
        foreach ($darkMap as $key => $value) {
            if ($value !== null && $value !== '') {
                $darkVars[] = "--color-{$key}: " . $normalize($value) . ";";
            }
        }

        $root = ':root { ' . implode(' ', $rootVars) . ' }';
        $dark = '.dark { ' . implode(' ', $darkVars) . ' }';

        return $root . ' ' . $dark;
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $ext = ExtensionModel::firstOrCreate(
            ['extension' => 'HomePageBuilder'],
            ['name' => 'HomePage Builder', 'type' => 'other', 'enabled' => true]
        );

        if ($ext) {
            $ext->settings()->updateOrCreate(
                ['key' => 'products_category'],
                ['value' => $data['products_category'] ?? '']
            );
            $ext->settings()->updateOrCreate(
                ['key' => 'sections'],
                ['value' => json_encode($data['sections'] ?? [])]
            );
            
            $colorSettings = [
                'primary', 'secondary', 'neutral', 'base', 'muted', 'inverted', 'background', 'background-secondary',
                'dark-primary', 'dark-secondary', 'dark-neutral', 'dark-base', 'dark-muted', 'dark-inverted', 'dark-background', 'dark-background-secondary'
            ];
            
            foreach ($colorSettings as $colorKey) {
                if (isset($data[$colorKey])) {
                    $ext->settings()->updateOrCreate(
                        ['key' => $colorKey],
                        ['value' => $data[$colorKey]]
                    );
                }
            }
        }

        Notification::make()
            ->title('Homepage configuration saved successfully')
            ->success()
            ->send();
    }

    protected function getFormData(): array
    {
        $ext = ExtensionModel::firstOrCreate(
            ['extension' => 'HomePageBuilder'],
            ['name' => 'HomePage Builder', 'type' => 'other', 'enabled' => true]
        );

        $productsCategory = '';
        $sections = [];
        $colorSettings = [];

        if ($ext) {
            $settings = $ext->settings->pluck('value', 'key')->toArray();
            $productsCategory = $settings['products_category'] ?? '';
            $sections = $settings['sections'] ?? '';
            if (is_string($sections)) {
                $sections = json_decode($sections, true) ?: [];
            }
            if (is_array($sections)) {
                $normalized = [];
                foreach ($sections as $s) {
                    if (!is_array($s)) {
                        continue;
                    }
                    if (!array_key_exists('content', $s) || !is_array($s['content'])) {
                        $s['content'] = [];
                    }
                    if (!array_key_exists('hero_data', $s['content']) || !is_array($s['content']['hero_data'])) {
                        $s['content']['hero_data'] = [];
                    }
                    if (!array_key_exists('features_data', $s['content']) || !is_array($s['content']['features_data'])) {
                        $s['content']['features_data'] = [];
                    }
                    if (!array_key_exists('reviews_data', $s['content']) || !is_array($s['content']['reviews_data'])) {
                        $s['content']['reviews_data'] = [];
                    }
                    if (!array_key_exists('reviews', $s['content']['reviews_data']) || !is_array($s['content']['reviews_data']['reviews'])) {
                        $s['content']['reviews_data']['reviews'] = [];
                    }
                    $normalized[] = $s;
                }
                $sections = $normalized;
            }
            
            $colorKeys = [
                'primary', 'secondary', 'neutral', 'base', 'muted', 'inverted', 'background', 'background-secondary',
                'dark-primary', 'dark-secondary', 'dark-neutral', 'dark-base', 'dark-muted', 'dark-inverted', 'dark-background', 'dark-background-secondary'
            ];
            
            foreach ($colorKeys as $colorKey) {
                $value = $settings[$colorKey] ?? $this->getDefaultColor($colorKey);
                if (is_string($value) && preg_match('/^\s*\d{1,3}\s*,\s*\d{1,3}%\s*,\s*\d{1,3}%\s*$/', $value)) {
                    $value = 'hsl(' . $value . ')';
                }
                $colorSettings[$colorKey] = $value;
            }
        }

        if (empty($sections)) {
            $sections = [
                ['type' => 'hero', 'variation' => '1', 'content' => [
                    'hero_data' => [],
                    'features_data' => [],
                    'reviews_data' => ['reviews' => []],
                ]]
            ];
        }

        return array_merge([
            'products_category' => $productsCategory,
            'sections' => $sections,
        ], $colorSettings);
    }
    
    private function getDefaultColor(string $colorKey): string
    {
        $defaults = [
            'primary' => 'hsl(229, 100%, 64%)',
            'secondary' => 'hsl(237, 33%, 60%)',
            'neutral' => 'hsl(220, 25%, 85%)',
            'base' => 'hsl(0, 0%, 0%)',
            'muted' => 'hsl(220, 28%, 25%)',
            'inverted' => 'hsl(100, 100%, 100%)',
            'background' => 'hsl(100, 100%, 100%)',
            'background-secondary' => 'hsl(0, 0%, 97%)',
            'dark-primary' => 'hsl(229, 100%, 64%)',
            'dark-secondary' => 'hsl(237, 33%, 60%)',
            'dark-neutral' => 'hsl(220, 25%, 29%)',
            'dark-base' => 'hsl(100, 100%, 100%)',
            'dark-muted' => 'hsl(220, 28%, 25%)',
            'dark-inverted' => 'hsl(220, 14%, 60%)',
            'dark-background' => 'hsl(60, 3%, 7%)',
            'dark-background-secondary' => 'hsl(217, 33%, 16%)',
        ];
        
        return $defaults[$colorKey] ?? 'hsl(0, 0%, 0%)';
    }
}
