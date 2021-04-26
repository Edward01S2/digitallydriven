<div class="">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')

    <main id="main" class="">
      @yield('content')
    </main>

    @if(!is_front_page())
      @include('partials.footer')
    @endif
</div>
