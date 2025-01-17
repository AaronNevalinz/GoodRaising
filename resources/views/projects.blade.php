@extends('layout.layout')
@section('content')
    <section>
        <div class="h-[70px] w-full relative">
            <img src="images/man holding cat.jpg" class="w-full h-full object-cover" alt="">
            <div class="absolute bg-black/70 w-full h-[70px] top-0"></div>
            <div class="absolute top-0 text-white flex items-center w-full h-[70px] justify-center">
                <p class="text-3xl font-montserrat font-bold">Donate to Causes</p>
            </div>
        </div>
        
        {{-- <div class="bg-accent h-10 flex items-center justify-center">
            <nav class="flex gap-10 text-white uppercase font-medium text-sm">
                <a href="" class="text-secondary hover:underline">Donate to projects</a>
                <a href="">Gift cards</a>
                <a href="">project of the month club</a>
            </nav>
        </div> --}}

        <main class="py-8">
            <h1 class="text-xl font-bold text-center font-montserrat text-white">All Causes</h1>
            <div class="flex items-center justify-center my-8 text-textColor">
                <p>Found 7870 projects sorted by </p>
                <select name="" id="" class="bg-white text-black ml-2 rounded-lg py-1 px-2">
                    <option value="">Relevance</option>
                    <option value="">Funds raised</option>
                    <option value="">Closest to goal</option>
                    <option value="">Newest</option>
                </select>
            </div>

            {{-- projects --}}
           <div class="max-w-4xl mx-auto">

            
            @foreach ($projects as $project)
            <div class="grid grid-cols-3 bg-accent rounded-md mb-8">
                <div class="col-span-1 h-[15rem]">
                    <a href="{{route('project.show', $project)}}">
                        <img src="{{'storage/' . $project->cover_img}}"  class="w-full rounded-l-lg h-full object-cover">
                    </a>
                </div>
                <div class="col-span-2 px-8 py-2">
                    <div>
                        <p class="flex gap-3 text-xs font-medium uppercase text-accentGray">
                            <span class="  text-textColor font-medium ">{{$project->theme}}</span> |
                            <span class=" text-textColor font-medium ">{{$project->project_location}}</span>
                        </p>
                        <p class="text-lg my-1 text-white font-montserrat font-bold">
                            {{$project->title}}
                        </p>
                        <p class="text-xs font-bold text-secondary ">by {{$project->org->name}}</p>
                    </div>

                    <p class="my-4 text-textColor">{{Str::limit($project->project_summary, 100)}} 
                        <a href="{{route('project.show', $project)}}">
                            <span class="text-secondary capitalize cursor-pointer font-medium hover:underline">read more</span>
                        </a>
                    </p>

                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-textColor"><span class="text-xl text-flamePea font-bold ">{{number_format($project->funding_goal - 20000)}}</span> raised out of {{number_format($project->funding_goal)}}</p>
                            <div class="w-full h-2 bg-textColor my-4 rounded-full">
                                <div class="w-[80%] bg-green-600 h-2 rounded-full"></div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <a href="{{route('project.show', $project)}}" class="flex-1 bg-secondary py-1.5 rounded-full px-4 text-white">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                
            <p class="text-center uppercase my-10 cursor-pointer bg-gradient-to-r font-hanken from-purple-500  to-red-500 font-bold hover:underline text-transparent bg-clip-text">View More</p>
           </div>
        </main>
    </section>
@endsection