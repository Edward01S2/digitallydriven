<div class="{{ $block->classes }}">
  @foreach($posts as $post)
    <div class="flex flex-col md:mb-12 md:grid md:grid-cols-2 2xl:mb-16 story-post">
      <div class="relative w-full h-48 md:h-full split-img">
        <img class="absolute object-cover object-center w-full h-full" src="{!! $post['image'] !!}" alt="">
      </div>

      <div class="px-6 py-12 lg:py-16 lg:px-8 split-content md:w-md/2 lg:w-lg/2 xl:w-xl/2 2xl:w-2xl/2 md:flex xl:py-20 2xl:py-28">
        <div class="flex flex-col w-full">
          <div class="text-center">
            <h3 class="mb-4 text-2xl font-semibold lg:text-3xl">{!! $post['title'] !!}</h3>
            <div class="lg:max-w-sm lg:mx-auto lg:text-lg">{!! $post['excerpt'] !!}</div>
            <div class="mt-6">
              <a href="{!! $post['url'] !!}" class="inline-flex items-center px-8 py-3 text-xs font-black tracking-widest uppercase border rounded text-c-blue-150 border-c-blue-150 hover:text-white hover:bg-c-blue-150 xl:text-sm">
                <span>Learn More</span>
                <svg class="w-3 h-3 ml-1.5"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>
