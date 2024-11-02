@extends('layout.user-dash')
@section('content')
    <div>
        <main class="bg-slate-200 grid grid-cols-5 px-4 gap-5 pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />

            {{-- mide div --}}
            <div class="col-span-3 pt-5">
                {{-- GG rewards comes here --}}
                {{-- <x-user-rewards /> --}}
                {{-- GG rewards comes ends --}}

                {{-- projects --}}
                <div>
                    <p class="flex justify-between my-8 text-3xl items-center">
                        <span>({{$projects->count()}}) Active Projects</span>
                        <a href="{{route('project.create')}}" class="underline font-medium text-sm uppercase hover:text-primary">Create new Project</a>
                    </p>

                    {{-- project cards --}}
                    @foreach ($projects as $project)
                    <div class="grid grid-cols-4 bg-white gap-5  border border-slate-400 mb-8">
                        <div class="col-span-1">
                            <a href="">
                                <img src="images/man holding cat.jpg" class="object-cover h-full" alt="">
                            </a>
                        </div>

                        <div class="col-span-2">
                            <div class="flex gap-5 items-center">
                                <p class="bg-secondary text-sm px-1 py-3 capitalize text-white">{{$project->status}}</p>
                                <p class="text-slate-600 text-sm uppercase">Project #31257</p>
                            </div>
                            <h1 class="text-xl font-bold text-slate-800 my-3">{{$project->title}}</h1>
                            <div>
                                <p class="text-slate-700 text-sm">$178,073 raised of ${{$project->goal}} goal</p>
                                <div class="w-full h-2 bg-slate-300 mt-2">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-span-1 mb-4">
                            <p class="text-sm italic font-semibold text-center py-2">Next report due: Feb 22</p>
                            <div class="flex flex-col gap-3 px-5">
                                <a href="" class="uppercase text-xs border border-primary text-primary text-center  py-2">edit project</a>
                                <a href="" class="uppercase text-xs border border-secondary text-secondary text-center  py-2">Donations</a>
                                <a href="" class="uppercase text-xs border border-accent text-accent text-center  py-2">reports</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                {{-- add new project --}}
                <div class="flex justify-center items-center border-dashed bg-white py-8 border-slate-400 border-4">
                    <a href="{{route('project.create')}}">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-primary">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-2xl text-primary capitalize">add new project</p>
                        </div>
                    </a>
                </div>

            </div>


            {{-- left div --}}
            <div class="col-span-1">
                <div class="bg-white border border-slate-400 mt-[2.6rem] py-2 px-2 space-y-2">
                    <p class="flex text-xs  justify-between">
                        <span class="text-gray-500">Due Diligence expiration date</span>
                        <span>
                            <a href="" class="uppercase text-slate-400 hover:text-primary hover:underline">
                                view application
                            </a>
                        </span>
                    </p>
                    <p>oct 15, 2026</p>
                </div>
            </div>
        </main>
    </div>
@endsection