@extends('layout.user-dash')
@section('content')
    <div>
        {{-- <nav class="bg-accent px-10 h-48 p-16">
            <div class="flex justify-between items-center py-3">
                <div class="w-48">
                    <a href="{{route('home')}}">
                        <img src="images/globalgiving logo.png" alt="" class="w-full">
                    </a>
                </div>
                <div class="w-12 h-12">
                    <img src="https://picsum.photos/200" alt="" class="w-full h-full rounded-full">
                </div>
            </div>
        </nav> --}}

        <main class="bg-slate-200 grid grid-cols-5 px-4 gap-5 pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />

            {{-- mide div --}}
            <div class="col-span-3 pt-5">

                Rport creating

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