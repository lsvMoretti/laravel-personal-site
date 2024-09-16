@props(['upButton' => null, 'downButton' => null, 'divId' => null])
<div id="{{$divId}}"
        {{$attributes->merge(['class' => 'relative mx-auto min-h-screen w-full px-4 bg-gradient-to-b', 'id' => $divId])}}>
    <div class="mx-auto min-h-screen flex flex-col justify-between items-center w-full lg:w-1/2">
        <!-- Up Arrow -->
        <div class="w-full flex justify-center items-center">
            @if($upButton)
                <a class="pointer-events-auto hover:opacity-80 hover:cursor-pointer" href="{{$upButton}}">
                    <i
                            class="fa-solid fa-arrow-up text-4xl"
                            style="color: #ffffff;">
                    </i>
                </a>
            @endif
        </div>
        <!-- Content -->
        {{$slot}}
        <!-- Down Arrow -->
        <div class="w-full flex justify-center items-center">
            @if($downButton)
                <a class="pointer-events-auto hover:opacity-80 hover:cursor-pointer" href="{{$downButton}}">
                    <i
                            class="fa-solid fa-arrow-down text-4xl animate-bounce"
                            style="color: #ffffff;">
                    </i>
                </a>
            @endif
        </div>
    </div>
</div>