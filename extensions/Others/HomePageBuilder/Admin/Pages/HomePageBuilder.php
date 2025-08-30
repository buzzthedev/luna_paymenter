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
use Filament\Forms\Components\Slider;
use Filament\Forms\Components\FileUpload;
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
use Illuminate\Support\Facades\Validator;

class HomePageBuilder extends Page implements HasForms
{
    use InteractsWithForms;

  protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedSquares2x2;
    protected static string | \UnitEnum | null $navigationGroup = 'Extensions';
    protected static ?string $title = 'Homepage Builder';
    protected static ?string $slug = 'homepage-builder';

    protected string $view = 'homebuilder::home-page-builder';

    public ?array $data = [];
    public ?array $previewData = [];
    public string $activeTab = 'settings';

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
        return [];
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
                                ->label('Background/Card Background - Secondary Color (Light)')
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
                                ->label('Background/Card Background - Secondary Color (Dark)')
                                ->hsl()
                                ->default('hsl(217, 33%, 16%)'),
                        ])
                        ->columns(2),
                    
                    Section::make('General Theme Settings')
                        ->schema([
                            TextInput::make('card_radius')
                                ->label('Card Border Radius')
                                ->placeholder('12')
                                ->default('12')
                                ->default(12),
                            TextInput::make('card_shadow')
                                ->label('Card Shadow (CSS)')
                                ->placeholder('0 4px 12px rgba(0,0,0,0.08)')
                                ->default('0 4px 12px rgba(0,0,0,0.08)'),
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
                                    'products_data' => [],
                                    'reviews_data' => ['reviews' => []],
                                    'pricing_data' => ['items' => []],
                                    'faq_data' => ['items' => [], 'groups' => []],
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
                                ->live(onBlur: true)
                                ->afterStateUpdated(function ($set, $get, $state) {
                                    $defaults = [
                                        'hero' => [
                                            'hero_data' => [],
                                        ],
                                        'features' => [
                                            'features_data' => [],
                                        ],
                                        'reviews' => [
                                            'reviews_data' => [
                                                'section_title' => null,
                                                'section_description' => null,
                                                'reviews' => [],
                                            ],
                                        ],
                                        'pricing' => [
                                            'pricing_data' => [
                                                'section_title' => null,
                                                'section_description' => null,
                                                'items' => [],
                                            ],
                                        ],
                                        'products' => [
                                            'products_data' => [
                                                'section_title' => null,
                                                'section_description' => null,
                                            ],
                                        ],
                                        'faq' => [
                                            'faq_data' => [
                                                'section_title' => null,
                                                'section_description' => null,
                                                'items' => [],
                                                'groups' => [],
                                            ],
                                        ],
                                    ];
                                    $set('content', $defaults[$state] ?? []);
                                    $set('variation', '1');
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
                                            TextInput::make('subtitle_strong')
                                                ->label('Subtitle strong')
                                                ->placeholder('Scale without limits.')
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['2','3','4','6']))
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
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

                                            FileUpload::make('image')
                                                ->label('Hero image')
                                                ->disk('public')
                                                ->directory('homebuilder')
                                                ->image()
                                                ->imageEditor()
                                                ->imageResizeMode('contain')
                                                ->imageResizeTargetWidth('1920')
                                                ->imageResizeTargetHeight('1080')
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['3']))
                                                ->columnSpanFull(),
                                            TextInput::make('image_alt')
                                                ->label('Hero image alt')
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['3']))
                                                ->columnSpanFull(),

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
                                                ->placeholder('Everything You Need')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),
                                            Textarea::make('section_description')
                                                ->label('Section description')
                                                ->rows(3)
                                                ->placeholder('Powerful features designed to help your business succeed online')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),

                                            Repeater::make('items')
                                                ->label('Feature items (title & description)')
                                                ->reorderable()
                                                ->schema([
                                                    TextInput::make('title')->label('Title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    Textarea::make('description')->label('Description')->rows(2)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                ])
                                                ->default([
                                                    ['title' => 'Blazing Fast', 'description' => 'Experience top-tier speed and performance for all your sites with our optimized infrastructure.'],
                                                    ['title' => 'Reliable Servers', 'description' => 'Our infrastructure is built for reliability and uptime, ensuring your services stay online.'],
                                                    ['title' => 'Advanced Security', 'description' => 'Protect your data with industry-leading security features and DDoS protection.'],
                                                    ['title' => 'Global Reach', 'description' => 'Serve your content quickly to users around the world with our global CDN.'],
                                                    ['title' => '24/7 Support', 'description' => 'Our expert team is always available to help you succeed with round-the-clock support.'],
                                                    ['title' => 'Cloud Backups', 'description' => 'Daily automated backups ensure your data is always safe and recoverable.'],
                                                ])
                                                ->collapsed()
                                                ->collapsible()
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['1','2','5']))
                                                ->columnSpanFull(),

                                            Fieldset::make('Core Features')
                                                ->schema([
                                                    Repeater::make('items_main')
                                                        ->label('Main features (4)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'High Performance', 'description' => 'SSD storage and optimized servers for lightning-fast loading times.'],
                                                            ['title' => 'Security First', 'description' => 'DDoS protection, SSL certificates, and regular security updates.'],
                                                            ['title' => 'Global Network', 'description' => 'Data centers worldwide with CDN for optimal global performance.'],
                                                            ['title' => '24/7 Support', 'description' => 'Expert technical support available around the clock.'],
                                                        ])
                                                        ->collapsed()
                                                        ->collapsible()
                                                        ->columnSpanFull(),
                                                    Repeater::make('items_sub')
                                                        ->label('Additional features (3)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'Automated Backups', 'description' => 'Daily backups with instant restore capabilities.'],
                                                            ['title' => 'Quick Setup', 'description' => 'Get your server running in under 60 seconds.'],
                                                            ['title' => 'Real-time Monitoring', 'description' => 'Track performance and uptime in real-time.'],
                                                        ])
                                                        ->collapsed()
                                                        ->collapsible()
                                                        ->columnSpanFull(),
                                                ])
                                                ->visible(fn ($get) => $get('../../variation') === '3')
                                                ->columns(2),

                                            Fieldset::make('Enterprise Solutions')
                                                ->schema([
                                                    Repeater::make('items_left')
                                                        ->label('Left column items (3)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'Scalable Infrastructure', 'description' => 'Grow your resources on-demand with our flexible cloud infrastructure that scales with your business needs.'],
                                                            ['title' => 'Advanced Security', 'description' => 'Multi-layer security including firewall rules, intrusion detection, and compliance-ready infrastructure.'],
                                                            ['title' => '99.99% Uptime SLA', 'description' => 'Enterprise-grade reliability with guaranteed uptime and compensation for any downtime.'],
                                                        ])
                                                        ->collapsed()
                                                        ->collapsible()
                                                        ->columnSpanFull(),
                                                    Repeater::make('metrics')
                                                        ->label('Right column metrics (3)')
                                                        ->schema([
                                                            TextInput::make('title')->label('Title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                            TextInput::make('value')->label('Value')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                            Textarea::make('description')->label('Description')->rows(2)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                        ])
                                                        ->default([
                                                            ['title' => 'Performance Metrics', 'value' => '99.9%', 'description' => 'Average response time across all servers'],
                                                            ['title' => 'Global Coverage', 'value' => '15+', 'description' => 'Data centers across multiple continents'],
                                                            ['title' => 'Support Response', 'value' => '5min', 'description' => 'Average response time for urgent issues'],
                                                        ])
                                                        ->collapsed()
                                                        ->collapsible()
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
                                        ->live(onBlur: true)
                                        ->partiallyRenderAfterStateUpdated()
                                        ->columnSpan(1),
                                    Textarea::make('content.reviews_data.section_description')
                                        ->label('Section description')
                                        ->rows(3)
                                        ->live(onBlur: true)
                                        ->partiallyRenderAfterStateUpdated()
                                        ->columnSpan(1),

                                    Repeater::make('content.reviews_data.reviews')
                                        ->label('Reviews')
                                        ->addActionLabel('Add review')
                                        ->schema([
                                            Textarea::make('quote')
                                                ->label('Quote')
                                                ->rows(3)
                                                ->required()
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated(),
                                            TextInput::make('name')
                                                ->label('Name')
                                                ->required()
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated(),
                                            TextInput::make('title')
                                                ->label('Title / Role')
                                                ->required()
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated(),
                                            TextInput::make('initials')
                                                ->label('Initials (2 letters)')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated(),
                                            TextInput::make('rating')
                                                ->label('Rating (e.g. 5.0)')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated(),
                                        ])
                                        ->collapsed()
                                        ->collapsible()
                                        ->maxItems(fn ($get) => match ($get('variation')) {
                                            '1' => 3,
                                            '2' => 2,
                                            '3' => 3,
                                            '4' => 2,
                                            '5' => 4,
                                            default => null,
                                        })
                                        ->default([])
                                        ->columnSpanFull(),

                                    Fieldset::make('Alternating Layout Aside')
                                        ->schema([
                                            TextInput::make('content.reviews_data.aside_1_title')->label('Aside 1 title'),
                                            Textarea::make('content.reviews_data.aside_1_text')->label('Aside 1 text')->rows(3),
                                            TextInput::make('content.reviews_data.aside_2_title')->label('Aside 2 title'),
                                            Textarea::make('content.reviews_data.aside_2_text')->label('Aside 2 text')->rows(3),
                                        ])
                                        ->columns(2)
                                        ->visible(fn ($get) => $get('variation') === '4')
                                        ->columnSpanFull(),

                                    Fieldset::make('Metrics')
                                        ->schema([
                                            TextInput::make('content.reviews_data.metrics.average_rating')->label('Average rating label'),
                                            TextInput::make('content.reviews_data.metrics.total_reviews')->label('Total reviews label'),
                                            TextInput::make('content.reviews_data.metrics.recommend_percent')->label('Recommend percent label'),
                                        ])
                                        ->columns(3)
                                        ->visible(fn ($get) => $get('variation') === '5')
                                        ->columnSpanFull(),
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'reviews'),

                            Fieldset::make('Pricing Content')
                                ->schema([
                                    Group::make()
                                        ->statePath('content.pricing_data')
                                        ->columns(2)
                                        ->columnSpanFull()
                                        ->schema([
                                            TextInput::make('section_title')
                                                ->label('Section title')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),
                                            Textarea::make('section_description')
                                                ->label('Section description')
                                                ->rows(3)
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),

                                            Repeater::make('items')
                                                ->label('Plans')
                                                ->schema([
                                                    TextInput::make('title')->label('Plan title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    TextInput::make('price')->label('Price (e.g. $19)')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    TextInput::make('period')->label('Billing period (e.g. /mo)')->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    Repeater::make('features')
                                                        ->label('Feature list')
                                                        ->schema([
                                                            TextInput::make('text')->label('Text')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                        ])
                                                        ->collapsed()
                                                        ->collapsible()
                                                        ->default([])
                                                        ->columnSpanFull(),
                                                    TextInput::make('cta_label')->label('Button label')->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    TextInput::make('cta_link')->label('Button link')->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    TextInput::make('badge')->label('Badge text (optional)')->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                ])
                                                ->collapsed()
                                                ->collapsible()
                                                ->maxItems(6)
                                                ->default([])
                                                ->columnSpanFull(),
                                        ])
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'pricing'),

                            Fieldset::make('Products Content')
                                ->schema([
                                    Group::make()
                                        ->statePath('content.products_data')
                                        ->columns(2)
                                        ->columnSpanFull()
                                        ->schema([
                                            TextInput::make('section_title')
                                                ->label('Section title')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),
                                            Textarea::make('section_description')
                                                ->label('Section description')
                                                ->rows(3)
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),
                                        ])
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'products'),

                            Fieldset::make('FAQ Content')
                                ->schema([
                                    Group::make()
                                        ->statePath('content.faq_data')
                                        ->columns(2)
                                        ->columnSpanFull()
                                        ->schema([
                                            TextInput::make('section_title')
                                                ->label('Section title')
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),
                                            Textarea::make('section_description')
                                                ->label('Section description')
                                                ->rows(3)
                                                ->live(onBlur: true)
                                                ->partiallyRenderAfterStateUpdated()
                                                ->columnSpan(1),

                                            Repeater::make('items')
                                                ->label('FAQ items')
                                                ->schema([
                                                    TextInput::make('question')->label('Question')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                    Textarea::make('answer')->label('Answer')->rows(3)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                ])
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['1','2','5']))
                                                ->collapsed()
                                                ->collapsible()
                                                ->default([])
                                                ->columnSpanFull(),

                                            Fieldset::make('Categorised FAQs')
                                                ->schema([
                                                    Repeater::make('groups')
                                                        ->label('Groups')
                                                        ->schema([
                                                            TextInput::make('title')->label('Group title')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                            Repeater::make('items')
                                                                ->label('Group items')
                                                                ->schema([
                                                                    TextInput::make('question')->label('Question')->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                                    Textarea::make('answer')->label('Answer')->rows(3)->required()->live(onBlur: true)->partiallyRenderAfterStateUpdated(),
                                                                ])
                                                                ->collapsed()
                                                                ->collapsible()
                                                                ->default([])
                                                                ->columnSpanFull(),
                                                        ])
                                                        ->collapsed()
                                                        ->collapsible()
                                                        ->default([])
                                                        ->columnSpanFull(),
                                                ])
                                                ->visible(fn ($get) => in_array($get('../../variation'), ['3','4','6']))
                                                ->columns(1),
                                        ])
                                ])
                                ->columns(2)
                                ->columnSpanFull()
                                ->hidden(fn ($get) => $get('type') !== 'faq'),
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
                $rootVars[] = "--hpb-color-{$key}: " . $normalize($value) . ";";
            }
        }

        $darkVars = [];
        foreach ($darkMap as $key => $value) {
            if ($value !== null && $value !== '') {
                $darkVars[] = "--hpb-color-{$key}: " . $normalize($value) . ";";
            }
        }

        $cardRadius = $data['card_radius'] ?? 12;
        if (!is_numeric($cardRadius)) {
            $cardRadius = 12;
        }
        $cardShadow = trim((string)($data['card_shadow'] ?? '0 4px 12px rgba(0,0,0,0.08)'));

        $rootVars[] = "--hpb-card-radius: " . ((int) $cardRadius) . "px;";
        $rootVars[] = "--hpb-card-shadow: " . $cardShadow . ";";

        $root = ':root { ' . implode(' ', $rootVars) . ' }';
        $dark = '.dark { ' . implode(' ', $darkVars) . ' }';

        return $root . ' ' . $dark;
    }

    public function save(): void
    {
        $data = $this->form->getState();

        $rules = [];
        $messages = [];
        $sections = $data['sections'] ?? [];
        foreach ((array) $sections as $i => $section) {
            if (($section['type'] ?? null) === 'reviews') {
                $base = "sections.$i.content.reviews_data";
                $rules[$base . '.section_title'] = ['required', 'string'];
                $rules[$base . '.section_description'] = ['required', 'string'];
                $rules[$base . '.reviews'] = ['array'];
                $rules[$base . '.reviews.*.quote'] = ['required', 'string'];
                $rules[$base . '.reviews.*.name'] = ['required', 'string'];
                $rules[$base . '.reviews.*.title'] = ['required', 'string'];

                $messages[$base . '.section_title.required'] = 'Reviews section title is required for section #' . ($i + 1) . '.';
                $messages[$base . '.section_description.required'] = 'Reviews section description is required for section #' . ($i + 1) . '.';
                $messages[$base . '.reviews.*.quote.required'] = 'Each review must have a quote in section #' . ($i + 1) . '.';
                $messages[$base . '.reviews.*.name.required'] = 'Each review must have a name in section #' . ($i + 1) . '.';
                $messages[$base . '.reviews.*.title.required'] = 'Each review must have a title/role in section #' . ($i + 1) . '.';
            }
        }

        if (!empty($rules)) {
            $validator = Validator::make($data, $rules, $messages);
            if ($validator->fails()) {
                foreach ($validator->errors()->toArray() as $field => $errs) {
                    foreach ((array) $errs as $err) {
                        $this->addError($field, $err);
                    }
                }

                Notification::make()
                    ->title('Please fix the highlighted errors before saving')
                    ->danger()
                    ->body(collect($validator->errors()->all())->map(fn($m) => "• $m")->implode("\n"))
                    ->send();
                return;
            }
        }

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

            if (array_key_exists('card_radius', $data)) {
                $ext->settings()->updateOrCreate(
                    ['key' => 'card_radius'],
                    ['value' => $data['card_radius']]
                );
            }
            if (array_key_exists('card_shadow', $data)) {
                $ext->settings()->updateOrCreate(
                    ['key' => 'card_shadow'],
                    ['value' => $data['card_shadow']]
                );
            }
        }

        $this->dispatch('hpb-preview-reload');

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
        $generalSettings = [];

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

            $generalSettings['card_radius'] = isset($settings['card_radius']) ? (int) $settings['card_radius'] : 12;
            $generalSettings['card_shadow'] = $settings['card_shadow'] ?? '0 4px 12px rgba(0,0,0,0.08)';
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
        ], $colorSettings, $generalSettings);
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
