@extends('layout.layout')
@section('content')
    <main class="bg-primary py-[4.5rem] pt-[8rem]">

        <div class="max-w-3xl mx-auto bg-white py-8 px-8 rounded-md" >

            <form action="/project" method="POST">
                @csrf
                <div class="space-y-4">
                    <h1 class="underline font-medium text-lg">Add a new project to your organization</h1>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Title: <span class="text-red-500">*</span></label>
                        <input type="text" name="title" id="" value="{{old('title')}}" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        <p class="italic text-sm text-slate-500">
                            Note: The organization name cannot be changed without supporting legal documentation. Please contact us at projecthelp@globalgiving.org to send us legal documentation confirming a name change.
                        </p>
                        @error('title')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Goal: <span class="text-red-500">*</span></label>
                        <input type="text" name="goal" id="" value="{{old('goal')}}" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        <p class="italic text-sm text-slate-500">
                            Note: The goal of a project can always be edited. (min: $500, max $1,000,000,000)
                        </p>
                        @error('goal')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Project Description: <span class="text-red-500">*</span></label>
                        <textarea name="desc" value="{{old('desc')}}" cols="20" rows="5" class="border border-slate-400 w-full rounded-md outline-none px-4 py-2"></textarea>
                        <p class="italic text-sm text-slate-500">
                            Note: The organization name cannot be changed without supporting legal documentation. Please contact us at projecthelp@globalgiving.org to send us legal documentation confirming a name change.
                        </p>
                        @error('desc')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                </div>


                
                <button type="submit" class="bg-secondary text-white uppercase px-8 py-2 font-medium text-lg mt-8">
                    Submit
                </button>
            </form>
        </div>
    </main>
@endsection