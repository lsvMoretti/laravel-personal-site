@props(['title', 'tags' => [], 'link'])
<div {{$attributes->merge(['class' => 'h-full'])}}>
    <div class="pointer-events-auto flex flex-col gap-4 justify-start items-start p-4 rounded-lg transition-all duration-300 ease-in-out h-full lg:hover:!opacity-100 lg:group-hover/projects-opacity-50 lg:hover:bg-indigo-950 hover:cursor-default">
        <a href="{{$link}}"
           class="pointer-events-auto text-2xl font-bold text-slate-300 leading-tight hover:opacity-80">{{$title}}</a>
        <p class="flex-grow">{{$slot}}</p>
        @if($tags)
            <div class="flex flex-row flex-wrap gap-2">
                @foreach($tags as $tag)
                    <p class="border-2 border-cyan-600/50 rounded-full min-w-12 px-2 text-center font-bold cursor-default bg-cyan-600/30 hover:!text-slate-200">{{$tag}}</p>
                @endforeach
            </div>
        @endif
    </div>
</div>