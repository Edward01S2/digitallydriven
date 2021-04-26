<div class="{{ $block->classes }} pt-16 pb-8">
  <div class="bg-cover bg-center min-h-[15rem] sm:min-h-[20rem] lg:min-h-[25rem] xl:min-h-[32rem] 2xl:min-h-[35rem]" style="background-image:url({!! $bg['url'] !!})">
  </div>
  <div class="container px-6 mx-auto -mt-40 lg:px-8 md:-mt-56 sm:-mt-48 lg:-mt-64 xl:-mt-72">
    <div class="relative p-6 pb-12 bg-white md:p-8 md:pb-16 lg:p-12 lg:pb-20">
      <div class="relative z-20">
        <div class="mb-2 sm:mb-6 lg:mb-8 md:flex md:items-end">
          <h1 class="text-4xl font-bold uppercase sm:text-5xl font-prag md:text-5xl lg:text-6xl 2xl:text-7xl">{!! get_the_title() !!}</h1>
          <div class="text-xl font-bold tracking-widest text-gray-400 uppercase font-prag md:ml-3 md:text-2xl lg:text-3xl lg:pb-1 xl:text-4xl">Coming Soon</div>
        </div>
        <div class="relative z-20 w-full pt-8">
          <p class="text-center sm:text-base lg:text-xl">{!! $content !!}</p>
          <div class="mt-4 coming-form sm:max-w-md sm:mx-auto lg:max-w-lg">
            @php
              //gravity_form($form, false, false, false, '', true, 1);
              echo do_shortcode('[gravityforms title="false" description="false" id="' . $form . '" field_values="country=' . get_the_title() .'"]')
            @endphp
          </div>
        </div>
      </div>
      <div class="absolute top-0 right-0 z-10 mt-2 mr-2 md:mt-4 md:mr-4 lg:mt-6 lg:mr-6">
        <img class="w-24 h-24 opacity-25 sm:opacity-50 lg:opacity-100 2xl:h-28 2xl:w-28" src="{!! $country['url'] !!}" alt="">
      </div>
    </div>
  </div>
</div>
