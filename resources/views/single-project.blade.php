@extends('layout.layout')
@section('content')

<section class="bg-slate-200">
   <div class="text-center pb-4">
        <div class="flex justify-between items-center w-[28rem] mx-auto text-slate-600 text-sm mt-8">
            <p>Disaster Response</p>
            <p>United States</p>
            <p>Project #67474</p>
        </div>
        <h1 class="text-5xl my-4">Hurricane Milton Relief Fund</h1>
        <p class="text-sm">By 
            <span class="text-accent font-medium hover:text-primary hover:underline">
                <a href="">GlobalGiving</a>
            </span>
        </p>
   </div>

   <main class="grid grid-cols-4 px-48 gap-5 pb-24">
        <div class="col-span-3">
            <div class="h-[28rem]">
                <img src="images/man holding cat.jpg" class="object-cover w-full h-full" alt="">
            </div>
            <nav class="flex justify-between px-16 py-5 uppercase text-sm">
                <a href="">Story</a>
                <a href="">projects</a>
                <a href="">report</a>
                <a href="">FAQs</a>
            </nav>

            {{-- story --}}
            <div class="border border-slate-400 bg-white py-4 px-6">
                <h1 class="text-xl font-bold my-2">Summary</h1>
                <p class="leading-7 text-slate-700">
                    Hurricane Milton is a ferocious storm that killed multiple people, displaced millions, and unleashed dangerous flooding and tornadoes after landing in Florida south of Tampa Bay. Your donation to the Hurricane Milton Relief Fund will help survivors who need emergency and long-term support.
                </p>
                <ul class="flex justify-between px-8 items-center text-center py-4">
                    <li>
                        <p class="text-secondary text-2xl font-semibold">$3M</p>
                        <p class="text-sm text-slate-500">total goal</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">$2.56M</p>
                        <p class="text-sm text-slate-500">Remaining</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">764</p>
                        <p class="text-sm text-slate-500">Donors</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">0</p>
                        <p class="text-sm text-slate-500">monthly donors</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">25</p>
                        <p class="text-sm text-slate-500">fundraisers</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">17</p>
                        <p class="text-sm text-slate-500">days</p>
                    </li>
                </ul>

                <h1 class="text-xl font-bold my-2">Challenge</h1>
                <p class="leading-7 text-slate-700">
                    Hurricane Milton made landfall in Siesta Key, Florida, as a strong Category 3 storm. It prompted the largest evacuation in the Florida region since Hurricane Irma in 2017. Millions of people were in Milton's path, and now without power and dealing with historic rainfall and flooding. Communities affected by Milton need support, including access to shelter, food, water, and clothing. Many of those impacted are still reeling from Hurricane Helene, which hit some of the same areas as Milton.
                </p>

                <h1 class="text-xl font-bold my-2">Solution</h1>
                <p class="leading-7 text-slate-700">
                    All donations to this fund will help Hurricane Milton survivors throughout Florida and affected areas of the Southeast. These efforts will be led by GlobalGiving's network of vetted partners. Initially, the fund will help meet survivors' immediate needs for food, fuel, clean water, hygiene products, and shelter. As needs evolve, the fund will transition to support longer-term recovery efforts run by local, vetted nonprofits.
                </p>

                <h1 class="text-xl font-bold my-2">How Your Donation Will Be Used</h1>
                <p>
                    When you donate to GlobalGiving's Hurricane Milton Relief Fund, your donation will be used to:
                </p>
                <ul class="text-slate-700 list-disc pl-8 space-y-4">
                    <li>Provide food, water, and emergency medical supplies to people and animals</li>
                    <li>Support temporary relief and emergency supplies for displaced families</li>
                    <li>Provide support to frontline workers</li>
                    <li>Meet other needs that emerge</li>
                </ul>

                <h1 class="text-xl font-bold my-2">Trusted and Reliable</h1>
                <p class="leading-7 text-slate-700">
                    GlobalGiving is one of the most reliable and trustworthy charities in the world. We have a four-star rating and nearly perfect score from Charity Navigator due to our stability, efficiency, sustainability, and commitment to transparency.
                </p>
                <p class="leading-7 text-slate-700">
                    Our disaster relief funds have been recommended by The New York Times, the Associated Press, NPR, Washington Post, Oprah, ABC News, and the US State Department.
                </p>

                <h1 class="text-xl font-bold my-2">GlobalGiving's Track Record</h1>
                <p class="leading-7 text-slate-700">
                    GlobalGiving has been responding to disasters and supporting emergency aid and long-term relief programs since 2004. We have facilitated more than $275 million in disaster donations to funds just like this one.
                </p>

                <p class="leading-7 text-slate-700 my-4">See how we've responded to similar disasters like this, including:</p>
                <ul class="text-slate-700 list-disc pl-8 space-y-4">
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">Hurricane Helene Relief Fund</a>
                    </li>
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">Hurricane Fiona Relief Fund</a>
                    </li>
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">Hurricane Ian Relief Fund</a>
                    </li>
                </ul>

                <p class="leading-7 text-slate-700 my-4">Resources</p>
                <ul class="text-slate-700 list-disc pl-8 space-y-4">
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">GlobalGiving.org</a>
                    </li>
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">4-star rating from Charity Navigator</a>
                    </li>
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">Top rating from Better Business Bureau</a>
                    </li>
                    <li>
                        <a href="" class="font-bold hover:underline hover:text-primary">Featured photo by Rebecca Blackwell for the AP</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-span-1">
            <div class="bg-white py-8 px-4">
                <p class="text-slate-700 text-sm"><span class="text-secondary font-semibold text-xl">$178,073</span> raised of $1200000 goal</p>
                <div class="w-full h-2 bg-slate-300 my-4">
                    <div class="w-[80%] bg-secondary h-2"></div>
                </div>
                <div class="flex justify-between text-slate-700">
                    <p>793 donations</p>
                    <p>$2,353,283 to go</p>
                </div>
            </div>

            <div class="flex w-full my-8">
                <a href="" class="text-white bg-primary text-center uppercase w-full text-sm py-2">Donate now</a>
            </div>

            <div class="border border-slate-400 bg-white">
                <nav class="flex items-center justify-between px-4">
                    <p>Donate Once</p> 
                    <p>Donate Monthly</p> 
                </nav>
                
                <div>

                    <a href="">
                        <div class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-1">
                                <div class="flex items-center gap-3">
                                    <p>
                                        <span class="text-lg font-medium">$30</span>
                                        <span>USD</span>
                                    </p>
                                    <p class="font-medium">
                                        emergency relief and long term recovery support
                                    </p>
                                </div>
                            </div>
        
                            <div class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-1">
                                <div class="flex items-center gap-3">
                                    <p>
                                        <span class="text-lg font-medium">$55</span>
                                        <span>USD</span>
                                    </p>
                                    <p class="font-medium">
                                        emergency relief and long term recovery support
                                    </p>
                                </div>
                            </div>
        
                            <div class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-1">
                                <div class="flex items-center gap-3">
                                    <p>
                                        <span class="text-lg font-medium">$100</span>
                                        <span>USD</span>
                                    </p>
                                    <p class="font-medium">
                                        emergency relief and long term recovery support
                                    </p>
                                </div>
                            </div>
        
                            <div class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-1">
                                <div class="flex items-center gap-3">
                                    <p>
                                        <span class="text-lg font-medium">$250</span>
                                        <span>USD</span>
                                    </p>
                                    <p class="font-medium">
                                        emergency relief and long term recovery support
                                    </p>
                                </div>
                            </div>
        
                            <div class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-1">
                                <div class="flex items-center gap-3">
                                    <p>
                                        <span class="text-lg font-medium">$500</span>
                                        <span>USD</span>
                                    </p>
                                    <p class="font-medium">
                                        emergency relief and long term recovery support
                                    </p>
                                </div>
                            </div>
        
                            <div class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-1">
                                <div class="flex items-center gap-3">
                                    <p>
                                        <span class="text-lg font-medium">$1000</span>
                                        <span>USD</span>
                                    </p>
                                    <p class="font-medium">
                                        emergency relief and long term recovery support
                                    </p>
                                </div>
                            </div>
        
                            <div class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </a>

                        <form method="" action="" class="flex mx-4 my-6">
                            <div class="bg-slate-300 text-xs px-2 py-3 flex-1">
                                <div class="flex items-center gap-3 justify-between">
                                    <p class="flex-1">
                                        <input type="text" class="border py-1 border-slate-400 outline-none px-3 w-24">
                                    </p>
                                    <p class="font-medium flex-1">
                                        other amout
                                    </p>
                                </div>
                            </div>
        
                            <button class="bg-primary flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-white">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                </div>
            </div>
        </div>
   </main>
</section>

@endsection