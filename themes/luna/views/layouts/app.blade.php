<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(in_array(app()->getLocale(), config('app.rtl_locales'))) dir="rtl" @endif>
    
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Paymenter') }}
        @isset($title)
            - {{ $title }}
        @endisset
    </title>
    @vite(['themes/' . config('settings.theme') . '/js/app.js', 'themes/' . config('settings.theme') . '/css/app.css'], config('settings.theme'))
    @include('layouts.colors')

    @if (config('settings.logo'))
        <link rel="icon" href="{{ Storage::url(config('settings.logo')) }}" type="image/png">
    @endif
    @isset($title)
    <meta content="{{ isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter') }}" property="og:title">
    <meta content="{{ isset($title) ? config('app.name', 'Paymenter') . ' - ' . $title : config('app.name', 'Paymenter') }}" name="title">
    @endisset
    @isset($description)
    <meta content="{{ $description }}" property="og:description">
    <meta content="{{ $description }}" name="description">
    @endisset
    @isset($image)
    <meta content="{{ $image }}" property="og:image">
    <meta content="{{ $image }}" name="image">
    @endisset
   
    <meta name="theme-color" content="{{ theme('primary') }}">

    {!! hook('head') !!}
</head>

<body class="{{ theme('spotlight-enabled') ? 'page ' : '' }}bg-background text-base min-h-screen flex flex-col antialiased" x-cloak x-data="{darkMode: true}" :class="{'dark': darkMode}">
    {!! hook('body') !!}
    <x-navigation />
    <div class="relative z-1 max-w-[1320px] mx-auto pt-40 w-full">
         @if(isset($sidebar) && $sidebar && theme('global_broadcast_enabled'))
              <div
                x-data="{
                  get key() {
                    const raw = '{{ Str::slug(theme('global_broadcast_title')) }}';
                    return `alert_open_${raw}`;
                  },
                  get initial() {
                    return localStorage.getItem(this.key) !== 'false';
                  },
                  show: null,
                  close() {
                    this.show = false;
                    localStorage.setItem(this.key, 'false');
                  },
                  init() {
                    this.show = this.initial;
                  }
                }"
                x-init="init()"
                x-show="show"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="mb-6 bg-primary/10 border border-primary rounded-2xl px-6 py-4 flex flex-col gap-2 relative"
              >
                  <button @click="close()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors" type="button">
                      <i class="fa fa-times"></i>
                  </button>
                  <div class="flex items-center gap-2">
                      <x-ri-broadcast-fill class="size-5" />
                      <div class="text-lg font-semibold">{{ theme('global_broadcast_title') }}</div>
                  </div>
                  <div class="text-gray-400 max-w-none">{!! \Illuminate\Support\Str::markdown(theme('global_broadcast_content')) !!}</div>
              </div>
           @endif
        <div class="flex flex-grow w-full">
        @if (isset($sidebar) && $sidebar)
            <x-navigation.sidebar title="$title" />
        @endif
        <div class="{{ (isset($sidebar) && $sidebar) ? 'rtl:ml-0 rtl:md:mr-64' : '' }} mx-4 xl:mx-0 flex flex-col flex-grow overflow-auto">
            <main class="pb-8">
                {{ $slot }}
            </main>
           <div class="fixed bottom-0 right-0">
            <x-notification />
           </div>
        </div>
        <x-impersonating />
        </div>
    </div>
       <div class="pb-8">
                <x-navigation.footer />
            </div>
    {!! hook('footer') !!}
</body>

</html>
