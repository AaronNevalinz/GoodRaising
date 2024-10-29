@extends('layout.layout')
@section('content')
    <section class="bg-gray-100">
        <div class="h-[300px] w-full relative">
            <img src="images/man holding cat.jpg" class="w-full h-full object-cover" alt="">
            <div class="absolute bg-black/50 w-full h-[300px] top-0"></div>
        </div>

        <div class="w-full h-[12rem] flex justify-center items-center -mt-16 z-10 relative rounded-lg">
            <div class="w-[12rem] h-[12rem] bg-accent rounded-full shadow-xl">
                <img src="images/disaster.jpg" class="object-cover rounded-full w-full h-full" alt="">
            </div>
        </div>


        <main class="py-8 max-w-4xl mx-auto">
            <div class="text-center">
                <h1 class="uppercase text-3xl">Masarat Initiative</h1>
                <p class="text-secondary text-sm py-2">Org #182947</p>
                <a href="" class="uppercase bg-primary px-6 py-2 font-medium">Donate</a>
            </div>
            <div class="flex justify-between max-w-2xl mx-auto py-16">
                <p class="flex flex-col items-center">
                    <span class="text-secondary font-medium text-3xl">2022</span>
                    <span class="text-slate-600 text-sm">Year Founded</span>
                </p>
                <p class="flex flex-col items-center">
                    <span class="text-secondary font-medium text-3xl">$216,826</span>
                    <span class="text-slate-600 text-sm">Raised on GlobalGiving</span>
                </p>
                <p  class="flex flex-col items-center">
                    <span class="text-secondary font-medium text-3xl">1</span>
                    <span  class="text-slate-600 text-sm">Year Fundraising</span>
                </p>
                <p  class="flex flex-col items-center">
                    <span class="text-secondary font-medium text-3xl">0</span>
                    <span class="text-slate-600 text-sm">Projects funded</span>
                </p>
            </div>
            <x-horizontal-line />
            <div class="my-8">
                <h1 class="text-3xl font-medium mb-4">Mission:</h1>
                <p class="text-slate-700 leading-8">
                    Providing a high-quality educational experience for learners at all levels and to all members of the society, starting from primary school all the way through to continuous career development. We work hard to provide the learners with essential tools, materials and high-end technology to support their learning experience and ensure they have access to knowledge regardless of their geographical location. We aim to increase the learners' level of knowledge, skills and professionalism to the highest so they can contribute toward re-building the community.
                </p>
            </div>

            <div class="my-12">
                <h1 class="text-3xl font-medium mb-12 text-center">Projects (4)</h1>
                <div class="grid grid-cols-3 gap-10">
                    <div class="bg-gray-200">
                        <div class="h-[12rem]">
                            <img src="images/man holding cat.jpg" class="h-full object-cover" alt="">
                        </div>
                        <div class="px-4 py-6">
                            <p class="uppercase text-slate-600 text-xs">syrian arab republic / gender equality</p>
                            <p class="font-semibold my-2 text-slate-800">Empower 50 women in Syria with Education</p>
                            <a href="" class="bg-primary py-1 px-4 uppercase text-sm">Give Now</a>
                        </div>
                    </div>
                    
                    <div class="bg-gray-200">
                        <div class="h-[12rem]">
                            <img src="images/man holding cat.jpg" class="h-full object-cover" alt="">
                        </div>
                        <div class="px-4 py-6">
                            <p class="uppercase text-slate-600 text-xs">syrian arab republic / gender equality</p>
                            <p class="font-semibold my-2 text-slate-800">Empower 50 women in Syria with Education</p>
                            <a href="" class="bg-primary py-1 px-4 uppercase text-sm">Give Now</a>
                        </div>
                    </div>
                    
                    <div class="bg-gray-200">
                        <div class="h-[12rem]">
                            <img src="images/man holding cat.jpg" class="h-full object-cover" alt="">
                        </div>
                        <div class="px-4 py-6">
                            <p class="uppercase text-slate-600 text-xs">syrian arab republic / gender equality</p>
                            <p class="font-semibold my-2 text-slate-800">Empower 50 women in Syria with Education</p>
                            <a href="" class="bg-primary py-1 px-4 uppercase text-sm">Give Now</a>
                        </div>
                    </div>
                    
                    <div class="bg-gray-200">
                        <div class="h-[12rem]">
                            <img src="images/man holding cat.jpg" class="h-full object-cover" alt="">
                        </div>
                        <div class="px-4 py-6">
                            <p class="uppercase text-slate-600 text-xs">syrian arab republic / gender equality</p>
                            <p class="font-semibold my-2 text-slate-800">Empower 50 women in Syria with Education</p>
                            <a href="" class="bg-primary py-1 px-4 uppercase text-sm">Give Now</a>
                        </div>
                    </div>
                    
                   

                </div>
            </div>


            <div class="my-8">
                <h1 class="text-xl font-medium mb-2">Project Leaders</h1>
                <div class="flex gap-10 ml-8 my-2">
                    <div class="flex flex-col items-center">
                        <div class="w-24 h-24 mb-2">
                            <img src="images/nike.png" class="rounded-full shadow-md object-cover w-full h-full" alt="">
                        </div>
                        <div>
                            <p class="text-slate-500">ِAbdulrazak Madi</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div  class="w-24 h-24 mb-2">
                            <img src="images/nike.png" class="rounded-full shadow-md object-cover w-full h-full" alt="">
                        </div>
                        <div>
                            <p class="text-slate-500">ِAaron Nevalinz</p>
                        </div>
                    </div>

                </div>
                <div>
                    <h1 class="text-xl font-medium mb-2">Team</h1>
                    <p  class="text-slate-500">Abdulrazak Madi, Aaron Nevalinz</p>
                </div>
            </div>


            {{-- project reports --}}
            <div class="my-8 max-w-2xl mx-auto">
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-medium mb-2">Project Reports</h1>
                    <p class="text-slate-500">
                        Each of GlobalGiving’s nonprofit partners is required to send quarterly donor reports detailing the impact of their work. Here are some of their recent updates:
                    </p>
                </div>
                
                <div class="space-y-6">
                    <div class="px-8 py-2 border border-slate-400 bg-white">
                        <div>
                            <p class="text-xs">
                                <span class="text-secondary">Oct 28, 2024</span> | 
                                <span class="text-slate-500">Support Student Mental Health in Northern Syria</span>
                            </p>
                        </div>
                        <h1 class="text-xl font-medium my-1">Your Impact: Healing that Brings Back Smiles</h1>
                        <p class="text-xs">By Abdulrazak Madi | <span class="italic">Project Leader</span></p>
                        <p class="mt-2 text-slate-600 text-sm">
                            Have you ever wondered how your outstretched hand can wipe away a tear, bring back a smile, or offer a child the chance to heal from post-traumatic stress disorder? Our children in Northern Syria... <a href="" class="text-accent text-sm hover:text-primary hover:undeline font-medium">Read the full report ›</a>
                        </p>
                    </div>
                    
                    <div class="px-8 py-2 border border-slate-400 bg-white">
                        <div>
                            <p class="text-xs">
                                <span class="text-secondary">Oct 28, 2024</span> | 
                                <span class="text-slate-500">Support Student Mental Health in Northern Syria</span>
                            </p>
                        </div>
                        <h1 class="text-xl font-medium my-1">Your Impact: Healing that Brings Back Smiles</h1>
                        <p class="text-xs">By Abdulrazak Madi | <span class="italic">Project Leader</span></p>
                        <p class="mt-2 text-slate-600 text-sm">
                            Have you ever wondered how your outstretched hand can wipe away a tear, bring back a smile, or offer a child the chance to heal from post-traumatic stress disorder? Our children in Northern Syria... <a href="" class="text-accent text-sm hover:text-primary hover:undeline font-medium">Read the full report ›</a>
                        </p>
                    </div>
                    <div class="px-8 py-2 border border-slate-400 bg-white">
                        <div>
                            <p class="text-xs">
                                <span class="text-secondary">Oct 28, 2024</span> | 
                                <span class="text-slate-500">Support Student Mental Health in Northern Syria</span>
                            </p>
                        </div>
                        <h1 class="text-xl font-medium my-1">Your Impact: Healing that Brings Back Smiles</h1>
                        <p class="text-xs">By Abdulrazak Madi | <span class="italic">Project Leader</span></p>
                        <p class="mt-2 text-slate-600 text-sm">
                            Have you ever wondered how your outstretched hand can wipe away a tear, bring back a smile, or offer a child the chance to heal from post-traumatic stress disorder? Our children in Northern Syria... <a href="" class="text-accent text-sm hover:text-primary hover:undeline font-medium">Read the full report ›</a>
                        </p>
                    </div>
                    <div class="px-8 py-2 border border-slate-400 bg-white">
                        <div>
                            <p class="text-xs">
                                <span class="text-secondary">Oct 28, 2024</span> | 
                                <span class="text-slate-500">Support Student Mental Health in Northern Syria</span>
                            </p>
                        </div>
                        <h1 class="text-xl font-medium my-1">Your Impact: Healing that Brings Back Smiles</h1>
                        <p class="text-xs">By Abdulrazak Madi | <span class="italic">Project Leader</span></p>
                        <p class="mt-2 text-slate-600 text-sm">
                            Have you ever wondered how your outstretched hand can wipe away a tear, bring back a smile, or offer a child the chance to heal from post-traumatic stress disorder? Our children in Northern Syria... <a href="" class="text-accent text-sm hover:text-primary hover:undeline font-medium">Read the full report ›</a>
                        </p>
                    </div>
                    <div class="px-8 py-2 border border-slate-400 bg-white">
                        <div>
                            <p class="text-xs">
                                <span class="text-secondary">Oct 28, 2024</span> | 
                                <span class="text-slate-500">Support Student Mental Health in Northern Syria</span>
                            </p>
                        </div>
                        <h1 class="text-xl font-medium my-1">Your Impact: Healing that Brings Back Smiles</h1>
                        <p class="text-xs">By Abdulrazak Madi | <span class="italic">Project Leader</span></p>
                        <p class="mt-2 text-slate-600 text-sm">
                            Have you ever wondered how your outstretched hand can wipe away a tear, bring back a smile, or offer a child the chance to heal from post-traumatic stress disorder? Our children in Northern Syria... <a href="" class="text-accent text-sm hover:text-primary hover:undeline font-medium">Read the full report ›</a>
                        </p>
                    </div>

                </div>
                <div class="flex items-center justify-center my-8">
                    <a href="" class="text-center capitalize text-sm underline text-accent hover:text-primary font-medium">view more</a>
                </div>
            </div>
       </main>
    </section>
@endsection