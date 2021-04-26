<header class="relative z-40">
  <nav x-data="{ open: false, country: false }" class="fixed z-40 w-full bg-white shadow-md">
    <div class="container px-6 mx-auto lg:px-8">
      <div class="z-40 flex items-center justify-between py-4">
        <div class="flex items-center">
          <div class="w-4/5 md:w-full">
            <a href="{{ home_url('/') }}" class="block">
              <img class="w-auto h-6 transition duration-150" src="{!! $logo['url'] !!}" alt="{{ $siteName }}" />
            </a>
          </div>
        </div>


        

          {{-- <div class="hidden md:block">
            <a href="{!! $report['url'] !!}" class="inline-flex items-center h-12 px-6 text-sm font-bold text-center uppercase text-c-black-100 bg-c-tan-200 xl:px-8 hover:shadow-md" target="_blank">Download Report</a>
          </div> --}}
          <div class="hidden xl:flex xl:items-center">
            @foreach ($navi as $item)
              @if($item->label === 'Country Reports')
                <div class="">
                  <button x-on:mouseenter="country = true" class="inline-block text-sm py-3 md:pb-1 font-aktiv-ex font-semibold tracking-wider text-c-tan-100 transition duration-300 ease-in-out border-transparent border-b-2 hover:border-c-orange-100 focus:outline-none xl:ml-10 2xl:text-base {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
                    {{ $item->label }}  
                  </button>
                </div>

                <div x-on:mouseleave="country = false" :class="{'block': country, 'hidden': !country}" class="absolute top-0 left-0 right-0 z-20 w-full mt-[4.5rem] bg-gray-100 border-t border-b border-gray-200" x-cloak>
                  <div class="container px-6 mx-auto lg:px-8">
                    <div class="relative grid grid-cols-6 py-8 gap-x-8 gap-y-3">
                      @foreach($countries as $choice)
                        <div>
                          <a class="pb-1 border-b border-transparent hover:border-c-orange-100" href="{!! $choice['link'] !!}">{!! $choice['label'] !!}</a>
                        </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              
              @else
                <div class="">
                  <a @click="open = false" class="inline-block text-sm py-3 md:pb-1 font-aktiv-ex font-semibold tracking-wider text-c-tan-100 transition duration-300 ease-in-out border-transparent border-b-2 hover:border-c-orange-100 focus:outline-none xl:ml-10 2xl:text-base {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
                    {{ $item->label }}  
                  </a>
                </div>
              @endif
            @endforeach
            <div class="xl:ml-10">
              <a href="{!! $report['url'] !!}" class="inline-flex items-center justify-center px-4 py-3 text-sm font-black text-center text-white uppercase rounded bg-c-orange-100 hover:opacity-75" target="_blank">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
                <span>Report</span>
              </a>
            </div>
          </div>


          <div class="relative menu-btn xl:hidden">
            <button @click="open = !open" class="inline-flex items-center justify-center p-1 mr-auto text-white transition duration-150 ease-in-out rounded-md bg-c-blue-300 focus:outline-none hover:text-c-red-100" aria-label="Main menu" aria-expanded="false">
              <!-- Icon when menu is closed. -->
              <svg :class="{'hidden': open, 'block': !open }" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
              </svg>
              <!-- Icon when menu is open. -->
              <svg :class="{'block': open, 'hidden': !open }" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </button>
          </div>
          

       
      </div>
    </div>

    {{-- Mobile Menu --}}

    <div :class="{'block': open, 'hidden': !open }" class="px-6 bg-white border-t border-gray-300 shadow-md md:right-0 z-60 md:absolute md:w-full md:bg-transparent md:px-0 md:shadow-none" x-cloak>
      <div @click.away="open = false" class="py-8 pt-2 md:px-6 md:container md:mx-auto md:relative">
        <div class="md:bg-white md:absolute md:top-0 md:right-0 md:shadow md:px-10 md:py-6 md:pb-10 md:mr-6">
          <div>
            @foreach ($navi as $item)
              @if($item->label === 'Country Reports')
                <div>
                  <select id="country-select" class="text-lg py-3 pl-0 font-aktiv-ex font-semibold tracking-wider text-c-blue-600 transition duration-300 ease-in-out border-transparent border-b-3 cursor-pointer hover:border-white focus:outline-none focus:ring-0 focus:border-0 focus:ring-transparent md:text-base {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
                    <option value="">{{ $item->label }}</option>
                    @foreach($countries as $choice)
                      <option value="{!! $choice['link'] !!}">{!! $choice['label'] !!}</option>
                    @endforeach
                  </select>
                </div>
              @else
                <div class="md:pb-2">
                  <a @click="open = false" class="inline-block text-lg py-3 md:pb-1 font-aktiv-ex font-semibold tracking-wider text-c-tan-100 transition duration-300 ease-in-out border-transparent border-b-2 hover:border-c-orange-100 focus:outline-none md:text-base {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}" href="{{ $item->url }}">
                    {{ $item->label }}  
                  </a>
              </div>
              @endif
            @endforeach
            <div>
              <a href="{!! $report['url'] !!}" class="inline-flex items-center justify-center px-8 py-3 text-base font-black text-center text-white uppercase rounded bg-c-orange-100 hover:opacity-75" target="_blank">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
                <span>Download Report</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

   

  </nav>
</header>

{{-- @dump($countries) --}}

{{-- @dump($navi) --}}