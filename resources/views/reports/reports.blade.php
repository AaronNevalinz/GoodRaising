@extends('layout.user-dash')
@section('content')
    <div>
        <main class="max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />
            
            
            {{-- table starts here --}}
            <div class="pt-4 ml-[13.5rem]">
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
                                <div class="flex items-center gap-3 mt-2">
                                    <a href="{{route('report.edit', $report)}}" class="text-sm bg-pink-500 py-1 px-2 rounded-md text-white">Edit</a>
                                    <a href="{{ route('report.show', $report) }}" class="text-sm bg-green-500 py-1 px-2 rounded-md text-white">View</a>
                                    {{-- trigger the delete pop up --}}
                                    <a href="#" class="deleteButton text-sm bg-red-500 py-1 px-2 rounded-md text-white">Delete</a>
                                     <!-- Delete Confirmation Modal -->
                                    <div id="deletePopup" data-aos="fade-down" class="hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm bg-black/30">
                                        <div class="bg-white rounded-lg p-6 shadow-lg w-11/12 md:w-1/3">
                                        <h2 class="text-xl font-semibold mb-4">Are you sure you want to delete this?</h2>
                                        <p class="mb-6 text-gray-600">This action cannot be undone.</p>
                                        <div class="flex justify-end space-x-4">
                                            <button id="cancelButton" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Cancel</button>
                                            <form action="{{ route('report.destroy', $report) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 py-2 px-4 rounded-md text-white">Confirm</button>
                                            </form>        
                                        </div>
                                        </div>
                                    </div>                     
                                </div>
                            </td>
                            <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{Auth::user()->org->name}}</p>
                            </td>
                            <td class="p-4 py-5">
                            <p class="text-sm text-slate-500">{{ $report->created_at->diffForHumans() }}</p>
                            </td>
                            <td class="p-4 py-5">
                            <p class="text-sm text-slate-500">2024-08-15</p>
                            </td>
                            <td class="p-4 py-5">
                                <p class="text-sm text-slate-500">{{ $report->created_at->format('Y-m-d') }}</p>
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
            
           
        </main>
    </div>

    {{-- <style>
        .hidden {
          display: none;
        }
      </style> --}}
      
      <script>
        
        const deleteButtons = document.querySelectorAll('.deleteButton'); // Replace with your actual delete button selector
        const deletePopup = document.querySelector('#deletePopup');
        const cancelButton = document.querySelector('#cancelButton');
        
        deleteButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            deletePopup.classList.remove('hidden');
        });
        });

        cancelButton.addEventListener('click', () => {
        deletePopup.classList.add('hidden');
        });

        // Optionally, handle outside click to close
        deletePopup.addEventListener('click', (e) => {
        if (e.target === deletePopup) {
            deletePopup.classList.add('hidden');
        }
        });
      </script>
@endsection