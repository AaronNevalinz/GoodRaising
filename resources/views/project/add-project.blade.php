@extends('layout.user-dash')
@section('content')
    <div>
        <main class="max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
        <x-user-sidebar />

        <div class="pt-5 ml-[15rem] max-w-[48rem]">

            <form action="/project" method="POST" class="pb-10" enctype="multipart/form-data">
                @csrf
                <div class="space-y-4">
                    <h1 class="underline text-white font-montserrat font-bold text-2xl">Add a new project to your organization</h1>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium uppercase text-secondary">Title: <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="" value="{{old('title')}}" class="bg-accent rounded-full py-2 text-textColor outline-none px-4">
                        <p class="italic text-sm text-slate-500">
                            Note: The organization name cannot be changed without supporting legal documentation. Please contact us at projecthelp@globalgiving.org to send us legal documentation confirming a name change.
                        </p>
                        @error('title')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium uppercase text-secondary">Theme: <span class="text-red-500">*</span></label>
                        <input type="text" name="theme" id="" value="{{old('theme')}}" class="bg-accent rounded-full py-2  outline-none px-4 text-textColor">
                        <p class="italic text-sm text-slate-500">
                            Note: The organization name cannot be changed without supporting legal documentation. Please contact us at projecthelp@globalgiving.org to send us legal documentation confirming a name change.
                        </p>
                        @error('theme')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium uppercase text-secondary">Funding Goal: <span class="text-red-500">*</span></label>
                        <input type="number" name="funding_goal" id="" value="{{old('funding_goal')}}" class="bg-accent rounded-full py-2  outline-none px-4 text-textColor">
                        <p class="italic text-sm text-slate-500">
                            Note: The goal of a project can always be edited. (min: $500, max $1,000,000,000)
                        </p>
                        @error('funding_goal')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium uppercase text-secondary">Cover Image: <span class="text-red-500">*</span></label>
                        <input type="file" name="cover_image"  class="bg-accent rounded-full py-2  outline-none px-4 text-textColor">
                        <p class="italic text-sm text-slate-500">
                            Note: The image must be less than 2MB
                        </p>
                        @error('cover_image')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium uppercase text-secondary">Project Summary: <span class="text-red-500">*</span></label>
                        <textarea name="project_summary" value="{{old('project_summary')}}" cols="20" rows="5" class="bg-accent rounded-md py-2  w-full text-textColor outline-none px-4"></textarea>
                        <p class="italic text-sm text-slate-500">
                            Note: The organization name cannot be changed without supporting legal documentation. Please contact us at projecthelp@globalgiving.org to send us legal documentation confirming a name change.
                        </p>
                        @error('project_summary')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium uppercase text-secondary">Project location: <span class="text-red-500">*</span></label>
                        <input type="text" name="project_location" id="" value="{{old('project_location')}}" class="bg-accent rounded-full py-2 text-textColor outline-none px-4">
                        <p class="italic text-sm text-slate-500">
                            Note: The location of our operation is limited to East African countries
                        </p>
                        @error('project_location')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>


                
                <button type="submit" class="bg-secondary rounded-full text-white uppercase px-8 py-2 font-medium mt-8">
                    Submit
                </button>
            </form>
        </div>
    </main>
@endsection