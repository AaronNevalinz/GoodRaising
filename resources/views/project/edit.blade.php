@extends('layout.user-dash')
@section('content')
    <div>
        <main class=" flex  max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />
            
            
            {{-- table starts here --}}
            <div class="pt-5 ml-[15rem] max-w-[48rem]">
                <div class="mt-2">
                    <h1 class="text-3xl uppercase text-white font-montserrat font-bold">Edit your project</h1>
                    <div class="h-72">
                        <img src="{{asset('storage/' . $project->cover_img)}}" class="w-full rounded-lg h-full object-cover my-5" alt="{{$project->title}}">
                    </div>
                    <p class="my-5 text-textColor">
                        Project reports must contain content specific to the project. While you may mention upcoming events like matching campaigns, reports cannot only contain solicitations for donations. GlobalGiving reserves the right to remove links to donation options other than GlobalGiving contained in yo
                    </p>

                    <form action="{{route('project.update', $project)}}" method="POST" enctype="multipart/form-data" class="py-10">
                        @csrf
                        @method('PUT')
                        
                        <div class="space-y-4">
                            <div class="flex flex-col gap-3 text-slat-600">
                                <label for="" class="font-bold uppercase text-secondary">Title: <span class="text-red-500">*</span></label>
                                <input type="text" name="title" id="" value="{{$project->title}}" class="text-textColor outline-none py-3 px-4 rounded-full bg-accent">
                                <p class="italic text-sm text-slate-500">
                                    Note: In not more than 120 words write the title of the report
                                </p>
                                @error('title')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-3 text-slat-600">
                                <label for="" class="font-medium uppercase text-secondary">Theme: <span class="text-red-500">*</span></label>
                                <input type="text" name="theme" id="" value="{{$project->theme}}" class="outline-none py-3 px-4 rounded-full bg-accent text-textColor">
                                <p class="italic text-sm text-slate-500">
                                    Note: In not more than 120 words write the title of the report
                                </p>
                                @error('title')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-3 text-slat-600">
                                <label for="" class="font-medium uppercase text-secondary">Funding goal: <span class="text-red-500">*</span></label>
                                <input type="text" name="funding_goal" id="" value="{{$project->funding_goal}}" class="outline-none py-3 px-4 rounded-full bg-accent text-textColor">
                                <p class="italic text-sm text-slate-500">
                                    Note: In not more than 120 words write the title of the report
                                </p>
                                @error('title')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
        
        
                            <div class="flex flex-col gap-3 text-slat-600">
                                <label for="" class="font-medium uppercase text-secondary">Cover Image: <span class="text-red-500">*</span></label>
                                <input type="file" name="cover_image"  class="outline-none py-3 px-4 rounded-full bg-accent text-textColor">
                                <p class="italic text-sm text-slate-500">
                                    Note: The image must be less than 2MB
                                </p>
                                @error('cover_image')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
        
                            
                            
                        </div>
                        <div class="flex gap-5 mt-5">
                            <a href="{{ route('project.index') }}" class="border border-secondary text-secondary rounded-full uppercase px-8 py-2 font-medium mt-8">Cancel</a>
                            <button type="submit" class="bg-secondary rounded-full text-white uppercase px-8 py-2 font-medium  mt-8">
                                Submit
                            </button>
                        </div>
                    </form>
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