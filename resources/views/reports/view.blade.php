@extends('layout.user-dash')
@section('content')
    <div>
        <main class=" flex  max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />
            
            

            {{-- table starts here --}}
            <div class="pt-5 ml-[15rem] flex-1 max-w-[48rem]">
                <div class="mt-2">
                    <h1 class="text-4xl leading-12 text-white font-montserrat font-bold">{{$report->title}}</h1>
                    <div class="h-56">
                        <img src="{{ asset('storage/' . $report->report_image)}}" class="w-full rounded-lg h-full object-cover my-5" alt="{{$report->report_image}}">
                    </div>
                    <div class="my-5 report-body text-textColor">
                        {!! $report->body !!}
                    </div>

                    
                </div>
            </div>

            {{-- left div --}}
            <div class="min-w-[20rem] fixed right-32 ">
                <div class="bg-gradient-to-r from-secondary  to-accent rounded-lg  mt-[2.6rem] py-5 px-4 space-y-2">
                    <p class="flex text-xs  justify-between">
                        <span class="text-black font-bold">Due Diligence expiration date</span>
                        <span>
                            <a href="" class="uppercase text-slate-400 hover:text-flamePea transition-all hover:underline">
                                view application
                            </a>
                        </span>
                    </p>
                    <p class="uppercase text-black">oct 15, 2026</p>
                </div>
            </div>
        </main>
    </div>
@endsection