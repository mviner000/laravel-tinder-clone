<div class="m-auto md:p-10 w-full h-full relative">
    <div class="relative h-full md:h-[600px] w-full md:w-96 m-auto">
        <div 
            x-data="{
                isSwiping: false,
                swipingLeft: false,
                swipingRight: false,
                swipingUp: false
            }"
            :class="{'transform-none cursor-grab':isSwiping}"
            class="absolute inset-0 m-auto transform ease-in-out duration-300 rounded-xl bg-gray-500 cursor-pointer z-50">
            <div class="h-full w-full">
                <div 
                    style="background-image:  url('https://picsum.photos/500/500?random=woman')"
                    class="relative overflow-hidden w-full h-full rounded-xl bg-cover">


                    {{-- swiper indicators --}}
                    <div class="pointer-events-none">
                        <span 
                            x-cloak
                            :class="{'invisible': !swipingRight}"
                            class="border-2 rounded-md p-1 px-2 border-green-500 text-green-500 text-4xl capitalize font-extrabold top-10 left-5 -rotate-12 absolute z-5">
                            LIKE
                        </span>
                        <span 
                            x-cloak
                            :class="{'invisible':!swipingLeft}"
                            class="border-2 rounded-md p-1 px-2 border-red-500 text-red-500 text-4xl capitalize font-extrabold top-10 right-5 rotate-12 absolute z-5">
                            NOPE
                        </span>
                        <span 
                            x-cloak
                            :class="{'invisible':!swipingUp}"
                            class="border-2 rounded-md p-1 px-2 border-green-500 text-green-500 text-4xl capitalize font-extrabold bottom-48 max-w-fit inset-x-0 mx-auto -rotate-12 absolute z-5">
                            SUPER LIKE
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
