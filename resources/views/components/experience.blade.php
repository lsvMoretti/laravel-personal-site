@props(['experience' => null])
@if($experience)
    <div {{$attributes->merge(['class' => 'pointer-events-auto grid grid-cols-[auto,1fr] gap-4 justify-start items-start lg:hover:!opacity-100 lg:group-hover/list:opacity-50 lg:hover:bg-indigo-950 px-4 py-4 rounded-lg transition-all duration-300 ease-in-out h-full'])}}>
        <div class="w-20 pt-1">
            <p class="leading-tight">{{$experience->start_date->format('Y')}}
                - {{empty($experience->end_date) ? 'Present' : $experience->end_date->format('Y')}}</p>
        </div>
        <div class="grid gap-2">
            <p class="text-2xl font-bold text-slate-300 pointer-events-none leading-tight">{{$experience->role}}</p>
            <a class="hover:text-slate-300 leading-tight" href="{{$experience->website}}">
                {{$experience->company}}
            </a>
            <p class="pointer-events-none">{{$experience->description}}</p>
            <div class="pointer-events-auto flex flex-row flex-wrap gap-2">
                @foreach($experience->tags as $tag)
                    <p class="border-2 border-cyan-600/50 rounded-full min-w-12 px-2 text-center font-bold cursor-default bg-cyan-600/30 hover:!text-slate-200">{{$tag}}</p>
                @endforeach
            </div>
        </div>
    </div>
@else
    <div></div>
@endif