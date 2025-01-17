@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex  max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />
            
            
            {{-- table starts here --}}
            <div class="pt-5 ml-[13.5rem] min-w-[50rem]">
                <div class="flex justify-between items-center mb-4 mt-5">
                    <h1 class="text-2xl font-bold font-montserrat text-white">Reports</h1>
                    <a href="{{route('report.create')}}" class="text-sm bg-secondary py-1 px-2 rounded-md text-white">Add report</a>
                </div>
                <p class="text-textColor">All projects for empower a girl for self-reliance</p>

                <div class="relative mt-10 flex flex-col w-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                <table class="w-full text-left table-auto min-w-max">
                    <thead class="uppercase">
                        <tr>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                ID
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                Title and Project
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                Organization
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                Submmited
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                Approved
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                Send Date
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-sm font-normal leading-none text-slate-500">
                                Status
                            </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                        <tr class="hover:bg-slate-50 border-b border-slate-200">
                            <td class="p-4 py-5">
                                <p class="block font-semibold text-sm text-slate-800">{{$report->id + 50302}}</p>
                            </td>
                            <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$report->title}}</p>
                                <div class="flex items-center gap-3">
                                    <a href="{{route('report.edit', $report)}}" class="text-sm bg-pink-500 py-1 px-2 rounded-md text-white">Edit</a>
                                    <a href="" class="text-sm bg-red-500 py-1 px-2 rounded-md text-white">view</a>
                                </div>
                            </td>
                            <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{Auth::user()->org->name}}</p>
                            </td>
                            <td class="p-4 py-5">
                            <p class="text-sm text-slate-500">2024-08-01</p>
                            </td>
                            <td class="p-4 py-5">
                            <p class="text-sm text-slate-500">2024-08-15</p>
                            </td>
                            <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">2024-08-15</p>
                            </td>
                            <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">Approved</p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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