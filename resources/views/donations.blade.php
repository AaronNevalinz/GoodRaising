@extends('layout.user-dash')
@section('content')
    <div>
        <main class="max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />

            
            {{-- mide div --}}
            <div class="pt-10 ml-[15rem] min-w-[48rem]">
                <div class="mb-5">
                    <h1 class="text-right text-lg text-white">
                        Total Donations: UGX <span class="text-3xl font-bold">{{ number_format($totalDonations, 2) }}</span>
                    </h1>
                </div>
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
                            @foreach ($donations as $donation)
                            <tr class="hover:bg-slate-50 border-b border-slate-200">
                                <td class="p-4 py-5">
                                <p class="block font-semibold text-sm text-slate-800">PROJ-{{$donation->org_id}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$donation->full_name}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$donation->email}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$donation->phone}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{$donation->project_title}}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{ $donation->created_at->diffForHumans() }}</p>
                                </td>
                                <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">UGX {{number_format($donation->amount)}}</p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
@endsection