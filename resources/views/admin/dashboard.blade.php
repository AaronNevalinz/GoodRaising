@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- admin sidebar --}}
            <x-admin-sidebar />

            {{-- mide div --}}
            <div class="pt-6 ml-[12rem] flex-1">
                <div class="bg-accent shadow-md rounded-lg p-6">
                    <h2 class="text-2xl font-semibold mb-4">Admin Dashboard</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <h3 class="text-xl font-medium">Total Organizations</h3>
                            <p class="text-3xl font-bold mt-2">{{$totalOrgs}}</p>
                        </div>
                        <div class="bg-green-100 p-4 rounded-lg">
                            <h3 class="text-xl font-medium">Active Projects</h3>
                            <p class="text-3xl font-bold mt-2">{{$totalProjects}}</p>
                        </div>
                        
                        <div class="bg-red-100 p-4 rounded-lg">
                            <h3 class="text-xl font-medium">Pending Approvals</h3>
                            <p class="text-3xl font-bold mt-2">5</p>
                        </div>
                        <div class="bg-purple-100 p-4 rounded-lg">
                            <h3 class="text-xl font-medium">Messages</h3>
                            <p class="text-3xl font-bold mt-2">12</p>
                        </div>
                        <div class="bg-indigo-100 p-4 rounded-lg">
                            <h3 class="text-xl font-medium">New Registrations</h3>
                            <p class="text-3xl font-bold mt-2">8</p>
                        </div>
                    </div>
                </div>

               

            </div>
        </main>
    </div>
@endsection