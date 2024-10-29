<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard: Donate to charity projects around the world</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-accent px-10 h-48">
        <div class="flex justify-between items-center py-3">
            <div class="w-48">
                <a href="{{route('home')}}">
                    <img src="images/globalgiving logo.png" alt="" class="w-full">
                </a>
            </div>
            <div class="w-12 h-12 rounded-full bg-white"></div>
        </div>
    </nav>

    <main class="bg-slate-200 grid grid-cols-5 px-4 gap-5 pb-16">
        {{-- sidebar --}}
        <nav class="col-span-1 flex flex-col gap-5 mt-4">
                <a href="{{route('dashboard')}}" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Dashboard</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">GG Rewards</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Organization</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Projects</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Campaigns</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Thank you Notes</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Donations</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Fundraisers</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Project Appeals</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Reports</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Disbursements</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Users</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Applications</a>
                <a href="" class="hover:bg-slate-300 text-gray-700 py-2 px-2 hover:underline font-semibold text-lg">Analytics</a>
        </nav>

        {{-- mide div --}}
        <div class="col-span-3 -mt-28">

            <div>
                <h1 class="text-white text-4xl">Kole Intellectual Forum</h1>
                <div class="flex text-sm gap-10 py-3">
                    <p class="text-white">ORG #41267</p>
                    <p class="text-slate-400">VIEW ORG PAGE</p>
                    <p class="text-secondary">EDIT ORG INFO</p>
                </div>
            </div>

            <div class=" bg-white border border-slate-400 py-5 px-16 space-y-8">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <p>Summary of </p>
                        <select name="" id="">
                            <option value="">All time</option>
                            <option value="">Last 30 Days</option>
                            <option value="">Last 90 Days</option>
                            <option value="">Year to Date</option>
                        </select>
                    </div>
                    <div>
                        <a href="" class="uppercase text-sm hover:underline hover:text-primary text-slate-600">View Analytics</a>
                    </div>
                </div>

                <x-horizontal-line class=""/>

                <div class="flex justify-between items-center py-2 px-10 text-center">
                    <div>
                        <p class="text-3xl mb-2 font-semibold">2955</p>
                        <p class="text-xs text-slate-600">Donors</p>
                    </div>
                    <div>
                        <p class="text-3xl mb-2 font-semibold">$80,028</p>
                        <p class="text-xs text-slate-600">Raised by you</p>
                    </div>
                    <div>
                        <p class="text-3xl mb-2 font-semibold">$98,389</p>
                        <p class="text-xs text-slate-600">Driven By GlobalGiving</p>
                    </div>
                    <div>
                        <p class="text-3xl mb-2 font-semibold">$197,737</p>
                        <p class="text-xs text-slate-600">Total Donations</p>
                    </div>
                </div>
            </div>

            <div class="border border-slate-400 py-5 px-16 bg-white mt-8 space-y-8">
                <div class="flex justify-between text-slate-600 text-sm">
                    <p>GG Rewards</p>
                    <a href="" class="uppercase hover:text-primary hover:underline">view GG rewards</a>
                </div>

                <x-horizontal-line />

                <div class="flex justify-between">
                    <div>
                        <p class="text-xl font-semibold">Reward Status:</p>
                        <h1 class="text-3xl text-secondary font-bold">Super Star</h1>
                        <p class="text-secondary">1,225 points</p>
                    </div>
                    <div>
                        <p class="text-xl font-semibold">Search Rank:</p>
                        <h1 class="text-3xl text-secondary font-bold">2</h1>
                        <p class="text-secondary">of 9,076</p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <a href="" class="bg-secondary text-white uppercase w-full text-center py-2 px-8">Earn more points</a>
                        <a href="" class="bg-accent text-white uppercase w-full text-center py-2 px-8">get badges</a>
                    </div>
                </div>
            </div>

            <div class="border border-slate-400 py-5 px-16 bg-white mt-8 space-y-8">
                <p>Recent Activity</p>
                
                <x-horizontal-line />

                <div class="px-8">
                    <div class="flex justify-between items-center mb-8 bg-slate-200 p-2">
                        <div class="flex items-start gap-5 ">
                            <div class="bg-accent w-3 h-3 rounded-full"></div>
                            <div>
                                <p class="uppercase mb-2">oct 25, 2024</p>
                                <p>Edits approved on Active Project #345267</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="text-accent uppercase hover:underline hover:text-primary font-medium text-sm">view project</a>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center mb-8 bg-slate-200 p-2">
                        <div class="flex items-start gap-5 ">
                            <div class="bg-accent w-3 h-3 rounded-full"></div>
                            <div>
                                <p class="uppercase mb-2">oct 25, 2024</p>
                                <p>Edits approved on Active Project #345267</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="text-accent uppercase hover:underline hover:text-primary font-medium text-sm">view project</a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-8 bg-slate-200 p-2">
                        <div class="flex items-start gap-5 ">
                            <div class="bg-accent w-3 h-3 rounded-full"></div>
                            <div>
                                <p class="uppercase mb-2">oct 25, 2024</p>
                                <p>Edits approved on Active Project #345267</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="text-accent uppercase hover:underline hover:text-primary font-medium text-sm">view project</a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-8 bg-slate-200 p-2">
                        <div class="flex items-start gap-5 ">
                            <div class="bg-accent w-3 h-3 rounded-full"></div>
                            <div>
                                <p class="uppercase mb-2">oct 25, 2024</p>
                                <p>Edits approved on Active Project #345267</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="text-accent uppercase hover:underline hover:text-primary font-medium text-sm">view project</a>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-8 bg-slate-200 p-2">
                        <div class="flex items-start gap-5 ">
                            <div class="bg-accent w-3 h-3 rounded-full"></div>
                            <div>
                                <p class="uppercase mb-2">oct 25, 2024</p>
                                <p>Edits approved on Active Project #345267</p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="text-accent uppercase hover:underline hover:text-primary font-medium text-sm">view project</a>
                        </div>
                    </div>

                    
                </div>
                <div>
                    <a href="" class="text-primary font-bold underline text-2xl">Show More</a>
                </div>
            </div>


            {{-- projects --}}
            <div>
                <p class="flex justify-between my-8">
                    <span>2 Active Projects</span>
                    <span class="uppercase">
                        <a href="" class="uppercase hover:text-primary hover:underline  text-sm text-slate-600 font-medium">View all projects</a>
                    </span>
                </p>

                {{-- project cards --}}
                <div class="grid grid-cols-4 bg-white gap-5  border border-slate-400 mb-8">
                    <div class="col-span-1">
                        <a href="">
                            <img src="images/man holding cat.jpg" class="object-cover h-full" alt="">
                        </a>
                    </div>

                    <div class="col-span-2">
                        <div class="flex gap-5 items-center">
                            <p class="bg-secondary text-sm px-1 py-3 text-white">Active</p>
                            <p class="text-slate-600 text-sm uppercase">Project #31257</p>
                        </div>
                        <h1 class="text-xl font-bold text-slate-800 my-3">Empower a girl for self-reliance</h1>
                        <div>
                            <p class="text-slate-700 text-sm">$178,073 raised of $1200000 goal</p>
                            <div class="w-full h-2 bg-slate-300 mt-2">
                                <div class="w-[80%] bg-secondary h-2"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-1 mb-4">
                        <p class="text-sm italic font-semibold text-center py-2">Next report due: Feb 22</p>
                        <div class="flex flex-col gap-3 px-5">
                            <a href="" class="uppercase text-xs border border-primary text-primary text-center  py-2">edit project</a>
                            <a href="" class="uppercase text-xs border border-secondary text-secondary text-center  py-2">Donations</a>
                            <a href="" class="uppercase text-xs border border-accent text-accent text-center  py-2">reports</a>
                        </div>
                    </div>
                </div>


                <div class="grid grid-cols-4 bg-white gap-5  border border-slate-400 mb-8">
                    <div class="col-span-1">
                        <a href="">
                            <img src="images/man holding cat.jpg" class="object-cover h-full" alt="">
                        </a>
                    </div>

                    <div class="col-span-2">
                        <div class="flex gap-5 items-center">
                            <p class="bg-secondary text-sm px-1 py-3 text-white">Active</p>
                            <p class="text-slate-600 text-sm uppercase">Project #31257</p>
                        </div>
                        <h1 class="text-xl font-bold text-slate-800 my-3">Empower a girl for self-reliance</h1>
                        <div>
                            <p class="text-slate-700 text-sm">$178,073 raised of $1200000 goal</p>
                            <div class="w-full h-2 bg-slate-300 mt-2">
                                <div class="w-[80%] bg-secondary h-2"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-1 mb-4">
                        <p class="text-sm italic font-semibold text-center py-2">Next report due: Feb 22</p>
                        <div class="flex flex-col gap-3 px-5">
                            <a href="" class="uppercase text-xs border border-primary text-primary text-center  py-2">edit project</a>
                            <a href="" class="uppercase text-xs border border-secondary text-secondary text-center  py-2">Donations</a>
                            <a href="" class="uppercase text-xs border border-accent text-accent text-center  py-2">reports</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- add new project --}}
            <div class="flex justify-center items-center border-dashed bg-white py-8 border-slate-400 border-4">
                <a href="">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-primary">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 0 1 .75.75v6.75h6.75a.75.75 0 0 1 0 1.5h-6.75v6.75a.75.75 0 0 1-1.5 0v-6.75H4.5a.75.75 0 0 1 0-1.5h6.75V4.5a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-2xl text-primary capitalize">add new project</p>
                    </div>
                </a>
            </div>

        </div>


        {{-- left div --}}
        <div class="col-span-1 -mt-28">
            <div class="flex justify-end">
                <a href="" class="text-white border border-white px-4 py-2 uppercase">Thank Donors</a>
            </div>
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

    {{-- footer --}}
    <x-footer />
</body>
</html>