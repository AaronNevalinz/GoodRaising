@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex  max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />

            {{-- mide div --}}
            <div class="pt-5 ml-[15rem] max-w-[48rem]">

                {{-- projects --}}
                <div>
                    <p class="flex justify-between my-8 text-xl items-center text-textColor">
                        <span class="text-white font-bold">({{$projects->count()}}) Active Causes</span>
                        <a href="{{route('project.create')}}" class="underline font-medium text-sm uppercase hover:text-secondary transition-all">Create new Project</a>
                    </p>

                     {{-- project cards --}}
                     @foreach ($projects as $project)
                     <div class="grid grid-cols-4 bg-accent gap-5 rounded-lg mb-8">
                         <div class="col-span-1 h-[11.5rem]">
                             <a href="{{route('project.show', $project)}}">
                                 <img src="{{'storage/' . $project->cover_img}}"  class="w-full rounded-l-lg h-full object-cover">
                             </a>
                         </div>
 
                         <div class="col-span-2">
                             <div class="flex gap-5 items-center">
                                 <p class="bg-secondary text-sm px-1 py-3 capitalize text-white">{{$project->status}}</p>
                                 <p class="text-textColor text-sm uppercase ">Project #31257</p>
                             </div>
                             <h1 class="text-xl font-bold text-white font-montserrat my-3">{{$project->title}}</h1>
                             <div>
                                 <p class="text-textColor text-sm">$178,073 raised of ${{$project->goal}} goal</p>
                                 <div class="w-full h-2 bg-slate-300 mt-2 rounded-full">
                                     <div class="w-[80%] bg-green-500 rounded-full h-2"></div>
                                 </div>
                             </div>
                         </div>
                         
                         <div class="col-span-1 mb-4">
                             <p class="text-sm italic font-semibold text-center py-2">Next report due: Feb 22</p>
                             <div class="flex flex-col gap-3 px-5">
                                 <a href="{{route('project.edit', $project)}}" class="uppercase text-xs border border-flamePea text-flamePea text-center  py-2">edit project</a>
                                 <a href="" class="uppercase text-xs border border-secondary text-secondary text-center  py-2">Donations</a>
                                 <a href="{{route('report.index')}}" class="uppercase text-xs border border-yellow-500 text-yellow-500 text-center  py-2">reports</a>
                             </div>
                         </div>
                     </div>
                     @endforeach
                    
                </div>

                {{-- add new project --}}
                <div class="flex justify-center items-center border-dashed bg-accent py-8 rounded-lg border-slate-400 border-4">
                    <a href="{{route('project.create')}}">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-flamePea">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-2xl text-flamePea font-bold capitalize">add new project</p>
                        </div>
                    </a>
                </div>

            </div>


            {{-- left div --}}
            <div class="min-w-[20rem] fixed right-32 ">
                <div class="bg-accent rounded-lg  mt-[2.6rem] py-5 px-4 space-y-2">
                    <p class="flex text-xs  justify-between">
                        <span class="text-textColor">Due Diligence expiration date</span>
                        <span>
                            <a href="" class="uppercase text-slate-400 hover:text-secondary transition-all hover:underline">
                                view application
                            </a>
                        </span>
                    </p>
                    <p class="uppercase text-white">oct 15, 2026</p>
                </div>
            </div>
        </main>
    </div>
@endsection