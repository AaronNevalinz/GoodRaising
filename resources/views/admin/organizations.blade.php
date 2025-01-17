@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- admin sidebar --}}
            <x-admin-sidebar />

            {{-- mide div --}}
            <div class="pt-6 ml-[12rem] flex-1">
                <h1 class="text-white font-montserrat font-bold mb-4 text- text-3xl ">Total Number of Organizations: <span class="text-flamePea text-5xl"> {{ $orgs->count() }}</span></h1>
           
                <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                    <table class="w-full text-left table-auto min-w-max">
                        <thead>
                        <tr>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="leading-none text-textColor font-bold">
                                Project Id
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-textColor font-bold leading-none ">
                                Donor Name
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-textColor font-bold leading-none">
                                Donor Email
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class="text-textColor font-bold leading-none ">
                                Phone
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class=" leading-none text-textColor font-bold">
                                Project
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                                <p class=" leading-none text-textColor font-bold">
                                    Date
                                </p>
                                </th>
                            <th class="p-4 border-b border-slate-200 bg-accent">
                            <p class=" leading-none text-textColor font-bold">
                                Amount
                            </p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orgs as $org)
                            <tr class="hover:bg-slate-50 border-b border-slate-200">
                                <td class="p-4 py-5">
                                <p class="block font-semibold text-sm text-slate-800">PROJ-{{$org->org_id}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$org->name}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$org->address}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$org->state}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$org->location}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{ $org->created_at->diffForHumans() }}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">
                                    UGX 
                                    @php
                                        $totalDonations = $donations->where('org_id', $org->id)->sum('amount');
                                    @endphp
                                    {{ number_format($totalDonations, 2) }}
                                </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
               

            </div>
        </main>

        <div class="bg-black/50 absolute top-0 right-0 w-full h-full backdrop-blur-sm z-50 hidden">
            <div class="w-[40%] h-screen bg-textColor fixed right-0 px-8 py-4">
                <div class="h-[10rem]">
                    <img src="images/man holding cat.jpg" class="object-cover h-full w-full rounded-t-lg" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection