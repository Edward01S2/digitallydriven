<footer class="navigation">
  <div class="container px-6 pb-8 mx-auto lg:px-8">
    <div class="pt-12 sm:pt-16 lg:pt-20 xl:pt-24">
      <h3 class="text-3xl font-bold leading-none text-center uppercase font-prag sm:text-5xl lg:text-6xl">{!! $heading !!}</h3>
      <div class="py-8 sm:max-w-md sm:mx-auto lg:max-w-lg sm:py-12 lg:py-16 xl:py-20">
        <a class="flex items-center justify-center py-3 font-extrabold tracking-widest text-center text-white uppercase bg-c-orange-100 hover:opacity-75 lg:text-lg" target="_blank" href="{!! $report['url'] !!}">
          <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
          <span>Download Report</span>
        </a>
      </div>
    </div>
    <p class="text-sm leading-tight text-center">
      &copy; {!! esc_attr( date( 'Y' ) ); !!} {!! $copy !!}
    </p>
  </div>
</footer>