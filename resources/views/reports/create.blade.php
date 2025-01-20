@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex  max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />
            
            
            {{-- table starts here --}}
            <div class="pt-5 ml-[15rem] min-w-[47rem]">
                <div class="w-2/3">
                    <a href="{{route('report.index')}}" class="border border-secondary text-secondary uppercase px-4 py-1 font-medium rounded-full text-sm l mt-8">Cancel</a>
                    <h1 class="text-3xl  text-white font-bold font-montserrat mt-8">Add a New Project Report</h1>
                    <p class="my-5 text-textColor">
                        Project reports must contain content specific to the project. While you may mention upcoming events like matching campaigns, reports cannot only contain solicitations for donations. GoodRaising reserves the right to remove links to donation options other than GoodRaising contained in your report
                    </p>

                    <form action="{{route('report.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-4">
                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Title: <span class="text-red-500">*</span></label>
                                <input type="text" name="title" id="" value="{{old('title')}}" class="outline-none py-3 px-4 rounded-full bg-accent text-textColor">
                                <p class="italic text-sm text-slate-500">
                                    Note: In not more than 120 words write the title of the report
                                </p>
                                @error('title')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
        
                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Project: <span class="text-red-500">*</span></label>
                                <select name="project_id" id="" class="outline-none py-3 px-4 rounded-full bg-accent text-textColor uppercase">
                                    @foreach ($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>
                                @error('project_id')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>

                            

                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Report Photo</label>
                                <input type="file" name="report_image" class="rounded-full bg-accent text-textColor outline-none py-3 px-4 w-full" id="">
                                <p class="italic text-slate-500 text-sm ">Upload photos or documents that show donors and GoodRaising staff the progress that your project has made. Horizontal (i.e., landscape) photos are preferable</p>
                                @error('report_image')
                                    <p class="text-red-500">Report photo is required</p>
                                @enderror
                            </div>

                            <div class="flex flex-col gap-3 text-slate-600">
                                <label for="" class="font-medium uppercase text-secondary">Project Report</label>
                                <x-tiny-m-c-e_editor id="report_body" name="body" rows="15" class="w-full" />

                                {{-- <textarea id="report_body" name="report_body" cols="30" rows="10" class="bg-accent text-textColor outline-none py-3 px-4 rounded-md w-full"></textarea> --}}
                                <p class="italic text-slate-500 text-sm ">Tell us a story about your work. See what makes a great project report that will get your donors to give again. </p>
                                @error('body')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="flex gap-5 my-5 mb-20">
                            <a href="{{route('report.index')}}" class="border border-secondary text-secondary uppercase px-8 py-2 font-medium rounded-full mt-8">Cancel</a>
                            <button type="submit" class="bg-secondary rounded-full text-white uppercase px-8 py-2 font-medium mt-8">
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
        <script>
            tinymce.init({
              selector: '#report_body',
              plugins: 'advlist autolink link image lists charmap print preview hr anchor pagebreak',
              toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image',
              menubar: false
            });
          </script>
          
    </div>
@endsection