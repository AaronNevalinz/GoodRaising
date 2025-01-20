@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex  max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />
            
            
            {{-- table starts here --}}
            <div class="pt-5 ml-[15rem] flex-1 min-w-[47rem]">
                <div class="w-2/3">
                    <h1 class="text-2xl text-white font-montserrat font-bold">Edit Project Report</h1>
                    

                    <form action="{{route('report.update', $report)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="space-y-4">
                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Title: <span class="text-red-500">*</span></label>
                                <input type="text" name="title" id="" value="{{$report->title}}" class="bg-accent text-textColor outline-none py-3 px-4 rounded-full">
                                <p class="italic text-sm text-slate-500">
                                    Note: In not more than 120 words write the title of the report
                                </p>
                                @error('title')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
        
                            
                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Project Report</label>
                              
                                <x-tiny-m-c-e_editor id="report_body" name="body" :value="$report->body" rows="15" class="w-full" />
                                <p class="italic text-slate-500 text-sm ">Tell us a story about your work. See what makes a great project report that will get your donors to give again. </p>
                                @error('body')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Report Photo:</label>
                                <input type="file" name="report_image" class="bg-accent rounded-full outline-none py-3 px-4  text-textColor  w-full" id="">
                                <p class="italic text-slate-500 text-sm ">Upload photos or documents that show donors and GlobalGiving staff the progress that your project has made.</p>
                                <p class="italic text-slate-500 text-sm ">Horizontal (i.e., landscape) photos are preferable </p>
                                @error('report_image')
                                    <p class="text-red-500">Report photo is required</p>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="flex gap-5 my-5 mb-20">
                            <a href="{{route('report.index')}}" class="border border-secondary rounded-full text-secondary uppercase px-8 py-2 font-medium mt-8">Cancel</a>
                            <button type="submit" class="bg-secondary text-white rounded-full uppercase px-8 py-2 font-medium mt-8">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>
@endsection