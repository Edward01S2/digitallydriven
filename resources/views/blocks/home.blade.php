<div class="{{ $block->classes }}" class="">

  <div class="w-full h-screen slide-wrapper"> <!-- overflow-hidden -->
    <div class="relative w-full h-full slide-container">

      {{-- SLIDE ONE --}}
      <div id="slide-1" class="relative pt-16 slide bg-c-blue-400 hero-home">
        <div class="absolute inset-0 w-full h-full bg-[#0C1E43] bg-opacity-70 z-20"></div>
        <div class="w-[250%] absolute inset-0 sm:w-[150%] lg:w-[125%] xl:w-full">
          <div class="aspect-w-16 aspect-h-9">
            @if($video)
              <video id="video" class="w-full h-full" poster="{!! $bg_1['url'] !!}" autoplay muted loop>
                <source src="{!! $video['url'] !!}" type="video/mp4">
              </video>
            @endif
          </div>
        </div>
        <img class="absolute inset-0 hidden object-cover object-center w-full h-full md:hidden" src="{!! $bg_1_mobile['url'] !!}" alt="">
        <div class="container z-30 flex items-end w-full h-full px-6 py-16 mx-auto md:items-center lg:px-8 sm:pt-36 lg:pt-56 xl:pt-72 2xl:pt-96">
          <div class="relative z-20 md:w-3/4 xl:w-3/4 sm:pb-0 md:ml-auto">
            <h1 class="mb-6 text-4xl font-bold text-center text-white uppercase font-prag lg:text-5xl sm:text-right lg:mb-8 xl:text-6xl">{!! $heading_1 !!}</h1>
            <div class="sm:text-right">
              <a href="{!! $report['url'] !!}" target="_blank" class="flex items-center justify-center px-8 py-3 text-sm font-black tracking-widest text-white uppercase rounded sm:inline-flex bg-c-orange-100 lg:py-4 lg:px-12 lg:text-base">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
                <span>Download Report</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="slide-2" class="relative slide bg-c-blue-400 sm:border-b sm:border-c-gray-600">
        {{-- <img class="absolute inset-0 object-cover object-center w-full h-full" src="{!! $bg_1['url'] !!}" alt=""> --}}
        <div class="relative z-20 flex items-center w-full h-full py-12 bg-white md:pt-16 md:py-16 lg:py-20">
          <div class="container px-6 mx-auto lg:px-8">
            <div class="mb-6 prose md:prose-lg max-w-none text-c-blue-600 xl:prose-xl lg:mb-12 xl:mb-16">
              {!! $content_2 !!}
            </div>
            <div>
              <div class="mb-4 font-semibold text-center uppercase lg:mb-8 sm:text-left">Presented By</div>
              <div class="grid grid-cols-1 max-w-[14rem] mx-auto sm:max-w-none logo-container sm:flex">
                @foreach($logos_2 as $item)
                  <div class="flex items-center logo">
                    <img class="w-full h-10 sm:w-auto sm:h-12 lg:h-14 xl:h-16" src="{!! $item['url'] !!}" alt="">
                  </div>
                @endforeach 
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="slide-3" class="relative slide">
        @if($findings)
          @foreach($findings as $finding)
            <div class="finding">
              <img class="object-cover object-center w-full h-56 mobile-img sm:hidden" src="{!! $finding['image']['url'] !!}" alt="">
              <div class="relative z-20 flex items-center w-full h-full py-12 bg-white sm:grid sm:grid-cols-4 sm:py-0 lg:grid-cols-2">
                <div class="px-6 lg:px-8 finding-content sm:col-span-3 lg:col-span-1 md:py-16 sm:max-w-[480px] sm:ml-auto md:max-w-[576px] md:pl-6 lg:py-20 lg:max-w-[512px] xl:pr-16 xl:max-w-screen-sm 2xl:max-w-screen-md">
                  @if($finding['heading'])
                    <h1 class="mb-6 text-5xl font-bold text-center uppercase font-prag sm:mb-8 sm:pt-12 sm:text-5xl md:text-6xl xl:text-7xl sm:text-left md:pt-0">{!! $finding['heading'] !!}</h1>
                  @endif

                  <div>
                    @foreach($finding['stats'] as $item)
                      <div class="stat-item">
                        <div class="mb-6">
                          @if($item['percent'])
                            <div class="text-3xl font-semibold text-center lg:mb-2 sm:text-left">{!! $item['percent'] !!}</div>
                          @endif
                          @if($item['heading'])
                            <div class="mb-2 text-lg font-semibold leading-tight text-center xl:text-xl sm:text-left">{!! $item['heading'] !!}</div>
                          @endif
                          @if($item['content'])
                            <div class="text-sm text-center xl:text-base sm:text-left">{!! $item['content'] !!}</div>
                          @endif
                        </div>
                      </div>
                    @endforeach
                  </div>

                  <div class="mt-8">
                    <a href="{!! $finding['link']['url'] !!}" class="flex items-center justify-center px-8 py-3 text-sm font-black tracking-widest text-center text-white uppercase rounded sm:inline-flex bg-c-orange-100 hover:opacity-75 xl:text-base">
                      <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
                      <span>{!! $finding['link']['title'] !!}</span>
                    </a>
                  </div>
                </div>
                <div class="hidden sm:block sm:w-full sm:h-full finding-img lg:relative lg:overflow-hidden">
                  <img class="object-cover object-center w-full h-full lg:absolute lg:inset-0" src="{!! $finding['image']['url'] !!}" alt="">
                </div>
              </div>

              {{-- @if(isset($findings[$loop->iteration]))
                <img class="object-cover object-center w-full h-48 sm:hidden" src="{!! $findings[$loop->iteration]['image']['url'] !!}" alt="">
              @endif --}}
              <div class="relative bg-white border-t border-b sm:my-12 xl:my-16 2xl:my-20 border-c-gray-600 sm:border-b-0 sm:border-t-0">
                <div class="container mx-auto sm:px-6 lg:px-8 xl:max-w-6xl">
                  <div class="relative px-6 pt-20 pb-10 sm:px-16 sm:py-3 md:px-20">
                    <div class="mb-6 text-xl prose text-c-blue-600 max-w-none sm:text-2xl md:text-3xl md:mb-8 lg:leading-normal xl:text-4xl xl:leading-normal">{!! $finding['quote'] !!}</div>
                    <div class="uppercase">{!! $finding['attrib'] !!}</div>
                    <div class="absolute top-0 left-0 right-0 mt-6 sm:right-auto">
                      @svg('images.3c-quotes', 'h-8 w-8 sm:w-12 sm:h-12 md:w-14 md:h-14 mx-auto')
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>


      <div id="slide-4" class="slide">
        @if($image_5)
          <img src="{!! $image_5['url'] !!}" class="object-cover object-center w-full h-56 sm:hidden"alt="">
        @endif
        <div>
          <div class="relative z-20 flex items-center w-full h-full py-12 bg-white sm:grid sm:grid-cols-4 sm:py-0 lg:grid-cols-2 sm:mt-8 lg:mt-12 xl:mt-16">
            <div class="px-6 lg:px-8 sm:col-span-3 lg:col-span-1 sm:py-8 md:py-12 sm:max-w-[480px] sm:ml-auto md:max-w-[576px] lg:max-w-[512px] xl:pr-12 xl:max-w-screen-sm 2xl:max-w-screen-md xl:py-24">
              <div>
                <h1 class="mb-6 text-4xl font-bold text-center uppercase font-prag sm:text-5xl xl:text-6xl sm:text-left">{!! $title_5 !!}</h1>
                <div class="mb-6 prose md:prose-lg max-w-none text-c-blue-600 xl:prose-xl">
                  {!! $content_5 !!}
                </div>
              </div>
            </div>
            <div class="hidden sm:block sm:w-full sm:h-full xl:h-full xl:relative xl:overflow-hidden">
              @if($image_5)
                <img class="object-cover object-center w-full h-full xl:h-auto xl:absolute xl:inset-0" src="{!! $image_5['url'] !!}" alt="">
              @endif
          </div>
        </div>

        @if($image_6)
          <img src="{!! $image_6['url'] !!}" class="object-cover object-center w-full h-48 sm:hidden"alt="">
        @endif
        <div>
          <div class="relative z-20 flex items-center w-full h-full py-12 bg-white sm:grid sm:grid-cols-4 sm:py-0 lg:grid-cols-2 sm:mt-8 lg:mt-12 xl:mt-16 lg:mb-12 xl:mb-16">
            <div class="px-6 lg:px-8 sm:order-2 sm:col-span-3 lg:col-span-1 sm:py-12 sm:pb-16 sm:max-w-[480px] sm:mr-auto md:max-w-[576px] sm:pl-8 md:pl-12 lg:max-w-[512px] xl:pl-12 xl:py-16 xl:pb-24 xl:pr-8 xl:max-w-screen-sm 2xl:max-w-screen-md">
              <div>
                <div class="mb-6 prose md:prose-lg max-w-none text-c-blue-600 xl:prose-xl lg:mb-12 xl:mb-16">
                  {!! $content_6 !!}
                </div>
              </div>

              @if($link_6)
              <div class="mt-8 text-center">
                <a href="{!! $link_6['url'] !!}" class="inline-flex items-center justify-center px-8 py-3 text-sm font-black tracking-widest text-white uppercase rounded sm:inline-flex bg-c-orange-100 hover:opacity-75 xl:text-base">
                  <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
                  <span>{!! $link_6['title'] !!}</span>
                </a>
              </div>
              @endif
            </div>
            <div class="hidden sm:block sm:w-full sm:h-full sm:order-1 xl:relative xl:overflow-hidden">
              @if($image_6)
                <img class="object-cover object-center w-full h-full xl:absolute xl:inset-0" src="{!! $image_6['url'] !!}" alt="">
              @endif
            </div>
          </div>
        </div>
      </div>

      @if($show_5)
      <div id="slide-5" class="slide">
        <div class="text-white bg-c-blue-500">
          <div class="container px-6 py-12 mx-auto lg:px-8 sm:py-16 md:py-20 lg:py-24">
            <h2 class="mb-6 text-4xl font-bold text-center uppercase font-prag lg:text-5xl xl:text-6xl">{!! $title_dd !!}</h2>
            <p class="text-center lg:text-lg xl:text-xl lg:text-left lg:leading-loose xl:leading-loose">{!! $content_dd !!}</p>
            <div class="mt-8 text-center">
              <a href="{!! $link_dd['url'] !!}" class="inline-flex items-center justify-center px-8 py-3 text-sm font-black tracking-widest text-white uppercase rounded sm:inline-flex bg-c-orange-100 hover:opacity-75 lg:text-base">
                <span>{!! $link_dd['title'] !!}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      @endif
      
      
      <div id="slide-6">
        @if($bg_10)
          <img src="{!! $bg_10['url'] !!}" class="object-cover object-center w-full h-56 sm:hidden"alt="">
        @endif
        <div id="slide-10" class="relative bg-center bg-cover sm:grid sm:grid-cols-2 bg-c-blue-400">
          <div class="relative sm:order-2">
            <img class="absolute inset-0 object-cover object-center w-full h-full" src="{!! $bg_10['url'] !!}" alt="">
          </div>
          <div class="relative z-20 flex items-center w-full h-full py-12 bg-white md:py-16 lg:py-20 xl:py-24 sm:order-1">
            <div class="px-6 text-center lg:px-8 sm:max-w-sm/2 sm:ml-auto md:max-w-md/2 lg:max-w-lg/2 xl:max-w-xl/2 2xl:max-w-screen-md sm:text-left">
              <h1 class="mb-6 text-5xl font-bold uppercase font-prag sm:text-5xl md:text-6xl lg:text-7xl">{!! $heading_10 !!}</h1>
              <div class="mb-6 prose md:prose-lg max-w-none text-c-blue-600 xl:prose-xl lg:mb-12 xl:mb-16">
                {!! $content_10 !!}
              </div>
              <div class="mt-8">
                <a href="{!! $link_10['url'] !!}" class="inline-flex items-center px-8 py-3 text-sm font-black tracking-widest text-white uppercase rounded bg-c-orange-100 hover:opacity-75 xl:text-base">
                  <span>{!! $link_10['title'] !!}</span>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div id="slide-7" class="relative py-12 md:py-16 slide bg-c-blue-500 lg:py-20">
        <div class="container z-0 flex items-center w-full h-full px-6 mx-auto lg:px-8">
          <div class="relative z-20 mx-auto">
            <h1 class="mb-2 text-3xl font-bold leading-none text-center text-white uppercase sm:mb-6 font-prag sm:text-5xl xl:text-6xl">{!! $heading_12 !!}</h1>
            <p class="text-sm text-center text-white sm:text-base lg:text-xl">{!! $content_12 !!}</p>
            <div class="mt-4 subscribe-form sm:max-w-md sm:mx-auto lg:max-w-lg">
              @include('partials.form', ['form' => $form])
            </div>
            <div class="pt-6 mt-6 text-center text-white border-t border-white sm:pt-10 sm:mt-10">
              <h3 class="mb-4 text-3xl font-prag sm:text-4xl md:text-5xl">{!! $past_title !!}</h3>
              <div>
                <a class="text-xl underline uppercase hover:text-c-orange-100 sm:text-2xl md:text-3xl" href="{!! $past_link['url'] !!}">{!! $past_link['title'] !!}</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

