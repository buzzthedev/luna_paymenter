<?php

namespace Paymenter\Extensions\Others\HomePageBuilder;

use App\Classes\Extension\Extension;
use App\Models\Category;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;
use Illuminate\Support\HtmlString;


class HomePageBuilder extends Extension
{
    public function boot()
    {
        View::addNamespace('homebuilder', __DIR__ . '/resources/views');
        
        View::composer('home', function ($view) {
            $sections = [];
            $productsCategory = $this->config('products_category');
            $category = null;
            $products = collect();

            if ($productsCategory) {
                $category = Category::where('slug', $productsCategory)->first();
                if ($category) {
                    $products = $category->products()->where('hidden', false)->orderBy('sort')->get();
                }
            }

            $sectionsData = $this->config('sections');

            if ($sectionsData) {
                if (is_string($sectionsData)) {
                    $sectionsData = json_decode($sectionsData, true);
                }

                if (is_array($sectionsData)) {
                    foreach ($sectionsData as $item) {
                        if (!is_array($item) || !isset($item['type'])) {
                            continue;
                        }

                        $type = $item['type'];
                        $variation = $item['variation'] ?? null;
                        $rawContent = $item['content'] ?? [];
                        $contentForView = $rawContent;
                        if ($type === 'hero' && isset($rawContent['hero_data']) && is_array($rawContent['hero_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['hero_data']);
                        }
                        if ($type === 'features' && isset($rawContent['features_data']) && is_array($rawContent['features_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['features_data']);
                        }
                        if ($type === 'reviews' && isset($rawContent['reviews_data']) && is_array($rawContent['reviews_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['reviews_data']);
                            if (isset($rawContent['reviews_data']['reviews']) && is_array($rawContent['reviews_data']['reviews'])) {
                                $contentForView['reviews'] = $rawContent['reviews_data']['reviews'];
                            } elseif (!isset($contentForView['reviews'])) {
                                $contentForView['reviews'] = [];
                            }
                        }
                        if ($type === 'pricing' && isset($rawContent['pricing_data']) && is_array($rawContent['pricing_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['pricing_data']);
                        }
                        if ($type === 'faq' && isset($rawContent['faq_data']) && is_array($rawContent['faq_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['faq_data']);
                        }
                        if ($type === 'pricing' && isset($rawContent['pricing_data']) && is_array($rawContent['pricing_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['pricing_data']);
                        }

                        $data = [
                            'category' => $category,
                            'products' => $products,
                            'content' => $contentForView,
                        ];

                        $sections[] = [
                            'type' => $variation ? ($type . '_' . $variation) : $type,
                            'data' => $data,
                        ];
                    }
                }
            } else {
                for ($i = 1; $i <= 10; $i++) {
                    $sectionConfig = $this->config("section_{$i}");
                    if (!$sectionConfig) {
                        continue;
                    }

                    $data = [
                        'category' => $category,
                        'products' => $products,
                    ];

                    $sections[] = [
                        'type' => $sectionConfig,
                        'data' => $data,
                    ];
                }
            }

            if (empty($sections)) {
                $view->with('homebuilderView', new HtmlString(''));
                return;
            }

            $colorSettings = $this->getColorSettings();
            $cssVariables = $this->generateCssVariables($colorSettings);
            
            $rendered = "<style>{$cssVariables}</style>" . view('homebuilder::home', [
                'sections' => $sections,
                'colors' => $colorSettings,
            ])->render();

            $view->with('homebuilderView', new HtmlString($rendered));
        });

        Event::listen('pages.home', function () {
            $sections = [];
            $productsCategory = $this->config('products_category');
            $category = null;
            $products = collect();
            
            if ($productsCategory) {
                $category = Category::where('slug', $productsCategory)->first();
                if ($category) {
                    $products = $category->products()->where('hidden', false)->orderBy('sort')->get();
                }
            }
            
            $sectionsData = $this->config('sections');
            
            if ($sectionsData) {
                if (is_string($sectionsData)) {
                    $sectionsData = json_decode($sectionsData, true);
                }
                
                if (is_array($sectionsData)) {
                    foreach ($sectionsData as $item) {
                        if (!is_array($item) || !isset($item['type'])) {
                            continue;
                        }
                        
                        $type = $item['type'];
                        $variation = $item['variation'] ?? null;
                        $rawContent = $item['content'] ?? [];
                        $contentForView = $rawContent;
                        if ($type === 'hero' && isset($rawContent['hero_data']) && is_array($rawContent['hero_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['hero_data']);
                        }
                        if ($type === 'features' && isset($rawContent['features_data']) && is_array($rawContent['features_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['features_data']);
                        }
                        if ($type === 'reviews' && isset($rawContent['reviews_data']) && is_array($rawContent['reviews_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['reviews_data']);
                            if (isset($rawContent['reviews_data']['reviews']) && is_array($rawContent['reviews_data']['reviews'])) {
                                $contentForView['reviews'] = $rawContent['reviews_data']['reviews'];
                            } elseif (!isset($contentForView['reviews'])) {
                                $contentForView['reviews'] = [];
                            }
                        }
                        if ($type === 'pricing' && isset($rawContent['pricing_data']) && is_array($rawContent['pricing_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['pricing_data']);
                        }
                        if ($type === 'faq' && isset($rawContent['faq_data']) && is_array($rawContent['faq_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['faq_data']);
                        }
                        if ($type === 'pricing' && isset($rawContent['pricing_data']) && is_array($rawContent['pricing_data'])) {
                            $contentForView = array_merge($contentForView, $rawContent['pricing_data']);
                        }

                        $data = [
                            'category' => $category,
                            'products' => $products,
                            'content' => $contentForView,
                        ];

                        $sections[] = [
                            'type' => $variation ? ($type . '_' . $variation) : $type,
                            'data' => $data,
                        ];
                    }
                }
            } else {
                for ($i = 1; $i <= 10; $i++) {
                    $sectionConfig = $this->config("section_{$i}");
                    if (!$sectionConfig) {
                        continue;
                    }

                    $data = [
                        'category' => $category,
                        'products' => $products,
                    ];

                    $sections[] = [
                        'type' => $sectionConfig,
                        'data' => $data,
                    ];
                }
            }

            if (empty($sections)) {
                return;
            }

            $colorSettings = $this->getColorSettings();
            $cssVariables = $this->generateCssVariables($colorSettings);
            
            $view = view('homebuilder::home', [
                'sections' => $sections,
                'colors' => $colorSettings,
            ]);

            return [
                'view' => new HtmlString("<style>{$cssVariables}</style>" . $view->render()),
            ];
        });
    }

    private function getColorSettings(): array
    {
        $colorKeys = [
            'primary', 'secondary', 'neutral', 'base', 'muted', 'inverted', 'background', 'background-secondary',
            'dark-primary', 'dark-secondary', 'dark-neutral', 'dark-base', 'dark-muted', 'dark-inverted', 'dark-background', 'dark-background-secondary'
        ];
        
        $colors = [];
        foreach ($colorKeys as $colorKey) {
            $value = $this->config($colorKey);
            if ($value) {
                $colors[$colorKey] = $value;
            }
        }
        
        $cardRadius = $this->config('card_radius');
        if ($cardRadius === null || $cardRadius === '') {
            $cardRadius = 12;
        }
        $colors['card_radius'] = $cardRadius;

        $cardShadow = $this->config('card_shadow');
        if ($cardShadow === null || $cardShadow === '') {
            $cardShadow = '0 4px 12px rgba(0,0,0,0.08)';
        }
        $colors['card_shadow'] = $cardShadow;

        return $colors;
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

}


