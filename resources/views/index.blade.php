@extends('layout.layout')
@section('content')
    <section class="">
        <div class="py-16 ">
            <div class="text-center">
                <h1 class="font-montserrat text-white text-5xl  font-bold">Successful fundraisers start here</h1>
                <p class="text-textColor text-lg mt-3">Leverage a vast agent network and global logistics expertise,  allowing you to expand your <br>operations and reachinternational markets with ease.</p>
                <div class="mt-10">
                    <a href="{{route('nonprofit')}}" class="bg-gradient-to-r from-purple-600 to-red-500 text-black px-4 py-2 text-xl rounded-lg font-semibold mt-8">Start a GoodRaising Now</a>
                </div>
            </div>

            <div class="px-32 mt-16 flex flex-wrap gap-10">
                @foreach ($projects as $project)
                <div class="bg-accent rounded-lg flex-1 max-w-[320px]">
                    <div>
                        <img src="{{asset('storage/' . $project->cover_img)}}" class="w-full h-[12rem] object-cover rounded-t-lg" alt="">
                    </div>
                    <div class="px-4 py-4">
                        <h4>
                            <a href="{{route('project.show', $project)}}"><p class="text-lg text-white font-montserrat font-bold">{{Str::limit($project->title, 45)}}</p></a>
                        </h4>

                        <p class="text-textColor py-2 text-sm">
                            {{Str::limit($project->project_summary, 100)}}
                        </p>

                        <a href="{{route('project.show', $project)}}" class="bg-gradient-to-r font-hanken from-purple-500  to-red-500 font-medim hover:underline text-transparent bg-clip-text border px-4 py-0.5 border-red-500 rounded-lg text-lg">Donate</a>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        {{-- <x-explore /> --}}

        <div class="py-16 max-w-3xl mx-auto text-center text-textColor">
            <p class="mb-10 leading-6 text-xl">
                <span class="bg-gradient-to-r font-montserrat from-red-500  to-green-500 text-transparent bg-clip-text font-bold tracking-wider uppercase">GoodRaising</span>  connects nonprofits, donors, and companies in nearly every country in the world. We help fellow nonprofits access the funding, tools, training, and support they need to serve their communities.
            </p>
            <x-button-learn-more />
        </div>

        {{-- more than 20 years --}}
        <div class="grid grid-cols-4">
            <div class="bg-slate-800 col-span-1 p-8">
                <img src="images/logo.png" class="w-48" alt="">
            </div>

            <div class="flex bg-primary col-span-3 items-center justify-between px-10 text-center text-gray-200">
                <div>
                    <p class="text-3xl font-medium">22</p>
                    <p>Years</p>
                </div>
                <div>
                    <p class="text-3xl font-medium">$960M</p>
                    <p>Dollars</p>
                </div>
                <div>
                    <p class="text-3xl font-medium">1,888,668</p>
                    <p>Donors</p>
                </div>
                <div>
                    <p class="text-3xl font-medium">38, 056</p>
                    <p>Projects</p>
                </div>
                <div>
                    <p class="text-3xl font-medium">175+</p>
                    <p>Countries</p>
                </div>
                <div>
                    <p class="text-3xl font-medium">576</p>
                    <p>Companies</p>
                </div>
            </div>
        </div>

        <div class="py-16 px-32 space-y-10 h-screen">
            <div>
                <h1 class="text-textColor font-bold text-3xl font-montserrat text-center">How it Works</h1>
                <p class="text-lg text-textColor max-w-5xl mx-auto text-center">Discover the transformative power of GoodRaising. Our platform bridges the gap between passionate nonprofits, generous donors, and forward-thinking companies, creating a ripple effect of positive change across the globe. </p>
            </div>

            <div class="flex gap-5 flex-nowrap">
                <div class="bg-accent rounded- flex flex-col items-center py-8  px-8 gap-y-8 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 fill-white">
                        <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0 1 12 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 0 1 3.498 1.307 4.491 4.491 0 0 1 1.307 3.497A4.49 4.49 0 0 1 21.75 12a4.49 4.49 0 0 1-1.549 3.397 4.491 4.491 0 0 1-1.307 3.497 4.491 4.491 0 0 1-3.497 1.307A4.49 4.49 0 0 1 12 21.75a4.49 4.49 0 0 1-3.397-1.549 4.49 4.49 0 0 1-3.498-1.306 4.491 4.491 0 0 1-1.307-3.498A4.49 4.49 0 0 1 2.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 0 1 1.307-3.497 4.49 4.49 0 0 1 3.497-1.307Zm7.007 6.387a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>
                                            
                    <p class="text-center py-3 text-textColor">
                        Nonprofits around the world apply and join GoodRaising to access more funding, to build new skills, and to make important connections.
                    </p>
                    <p class="uppercase text-white font-bold bg-gradient-to-r font-montserrat from-red-500  to-green-500 text-transparent bg-clip-text tracking-wider ">nonprofits</p>
                </div>
                
                <div class="bg-accent flex flex-col items-center py-8 px-8 gap-y-8 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 fill-white">
                        <path d="M11.25 3v4.046a3 3 0 0 0-4.277 4.204H1.5v-6A2.25 2.25 0 0 1 3.75 3h7.5ZM12.75 3v4.011a3 3 0 0 1 4.239 4.239H22.5v-6A2.25 2.25 0 0 0 20.25 3h-7.5ZM22.5 12.75h-8.983a4.125 4.125 0 0 0 4.108 3.75.75.75 0 0 1 0 1.5 5.623 5.623 0 0 1-4.875-2.817V21h7.5a2.25 2.25 0 0 0 2.25-2.25v-6ZM11.25 21v-5.817A5.623 5.623 0 0 1 6.375 18a.75.75 0 0 1 0-1.5 4.126 4.126 0 0 0 4.108-3.75H1.5v6A2.25 2.25 0 0 0 3.75 21h7.5Z" />
                        <path d="M11.085 10.354c.03.297.038.575.036.805a7.484 7.484 0 0 1-.805-.036c-.833-.084-1.677-.325-2.195-.843a1.5 1.5 0 0 1 2.122-2.12c.517.517.759 1.36.842 2.194ZM12.877 10.354c-.03.297-.038.575-.036.805.23.002.508-.006.805-.036.833-.084 1.677-.325 2.195-.843A1.5 1.5 0 0 0 13.72 8.16c-.518.518-.76 1.362-.843 2.194Z" />
                      </svg>
                                            
                    <p class="text-center py-3 text-textColor">
                        People like you give to your favorite projects; you feel great when you get updates about how your money is put to work by trusted organizations.
                    </p>
                    <p class="uppercase text-white font-bold bg-gradient-to-r font-montserrat from-red-500  to-green-500 text-transparent bg-clip-text tracking-wider ">Donors</p>
                </div>
                <div class="bg-accent flex flex-col items-center py-8 px-8 rounded-md gap-y-8">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 fill-white">
                        <path d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z" />
                        <path fill-rule="evenodd" d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z" clip-rule="evenodd" />
                      </svg>
                                           
                    <p class="text-center text-textColor">
                        Generous companies and their employees further support high-impact projects with donations and grants, helping local communities thrive.
                    </p>
                    <p class="uppercase text-white font-bold bg-gradient-to-r font-montserrat from-red-500  to-green-500 text-transparent bg-clip-text tracking-wider ">Companies</p>
                </div>
                <div class="bg-accent flex flex-col items-center py-8 px-8 gap-y-8 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 fill-white">
                        <path d="M15.75 8.25a.75.75 0 0 1 .75.75c0 1.12-.492 2.126-1.27 2.812a.75.75 0 1 1-.992-1.124A2.243 2.243 0 0 0 15 9a.75.75 0 0 1 .75-.75Z" />
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM4.575 15.6a8.25 8.25 0 0 0 9.348 4.425 1.966 1.966 0 0 0-1.84-1.275.983.983 0 0 1-.97-.822l-.073-.437c-.094-.565.25-1.11.8-1.267l.99-.282c.427-.123.783-.418.982-.816l.036-.073a1.453 1.453 0 0 1 2.328-.377L16.5 15h.628a2.25 2.25 0 0 1 1.983 1.186 8.25 8.25 0 0 0-6.345-12.4c.044.262.18.503.389.676l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.575 15.6Z" clip-rule="evenodd" />
                      </svg>
                                         
                    <p class="text-center py-3 text-textColor">
                        Nonprofits have the funding they need to listen to feedback and try out new ways to work; communities all over the globe get more awesome!
                    </p>
                    <p class="uppercase text-white font-bold bg-gradient-to-r font-montserrat from-red-500  to-green-500 text-transparent bg-clip-text tracking-wider ">Our impact</p>
                </div>

            </div>
        </div>

        {{-- discover disasters --}}
        <div class="flex bg-accent">
            <div class="flex-1 flex justify-center items-center">
                <div class="max-w-lg text-center space-y-8 text-textColor">
                    <h1 class="text-4xl">Disaster Recovery</h1>

                    <p class="text-lg leading-7">
                        GoodRaising it easy to donate to reliable, locally-led disaster relief and recovery efforts around the world.
                    </p>

                    <x-button-learn-more/>
                </div>
            </div>

            <div class="flex-1">
                <img class="h-full w-full object-cover" src="images/disaster.jpg" alt="">
            </div>
        </div>


        {{-- coporate partners --}}
        <div class="max-w-5xl mx-auto text-center space-y-8 py-16 text-textColor">
            <h1 class="text-3xl font-montserrat font-bold">Our Corporate Partners</h1>
            <p>
                We've made it possible for more than 570 companies to support local causes around the world. We help companies expand their philanthropic footprint with global nonprofit vetting, grantmaking, charitable gift cards, and digital campaigns to power cause marketing, disaster response, and employee giving.
            </p>
            <ul class="flex items-center gap-10">
                <li>
                    <img class="w-28" src="images/ford.png" alt="">
                </li>
                <li>
                    <img src="images/microsoft.png" alt="">
                </li>
                <li>
                    <img src="images/nbcuniversal.png" alt="">
                </li>
                <li>
                    <img class="w-16" src="images/vffoundation.png" alt="">
                </li>
                <li>
                    <img src="images/vmware.png" alt="">
                </li>
                <li>
                    <img src="images/nike.png" alt="">
                </li>
            </ul>
            <div>
                <a href="" class="border border-secondary text-secondary rounded-md px-4 py-2 uppercase font-medium">View all companies</a>
            </div>
        </div>

        {{-- gift card --}}
        <div class="relative h-screen">
            <img src="images/kids.jpg" class="w-full h-full object-cover" alt="">
            <div class="absolute right-0 top-0 backdrop-blur-3xl bottom-0 text-slate-950 max-w-xl flex justify-center items-center">
                <div class="text-center px-5 space-y-8">
                    <h1 class="text-white text-3xl font-bold">Buy a Gift Card</h1>
                    <p class="text-lg text-white">
                        Give the gift of giving with a GlobalGiving <br/> Card.
                    </p>
                    <x-button-learn-more/>
                    <div class="mt-5">
                        <a href="" class="border px-4 py-2 text-white">Redeem a gift card</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- news --}}
        <div class="h-screen py-10 pb-16">
            <h1 class="text-center text-4xl py-8 font-montserrat font-bold text-textColor">News</h1>
            <div class="flex items-center max-w-6xl mx-auto gap-5 mt-10">
                <div class="bg-accent">
                    <img src="images/learn-feature-poetry-book.jpg" alt="">
                    <div class="text-center px-8 py-5">
                        <p class="font-bold text-white text-xl">Together Under the Sky</p>
                        <p class="my-4 text-textColor">Explore poems from around the world written by change leaders from the GoodRaising community.</p>
                        <a href="" class="text-secondary hover:underline uppercase text-sm font-bold">Download the Book</a>
                    </div>
                </div>
                <div class="bg-accent scale-105">
                    <img src="images/us-election.jpg" alt="">
                    <div class="text-center px-8 py-5">
                        <p class="font-bold text-white text-xl">Together Under the Sky</p>
                        <p class="my-4 text-textColor">
                            Explore how to make a difference for climate, immigrants under threat, and more in this special series
                        </p>
                        <a href="" class="text-secondary hover:underline uppercase text-sm font-bold">Explore Now</a>
                    </div>
                </div>
                <div class="bg-accent">
                    <img src="images/disaster-white-paper.png" alt="">
                    <div class="text-center px-8 py-5">
                        <p class="font-bold text-white text-xl">Impact Beyond the polls</p>
                        <p class="my-4 text-textColor">
                            Our latest white paper uncover the hidden toll of disaster on vulnerable communities
                        </p>
                        <a href="" class="text-secondary hover:underline uppercase text-sm font-bold">Read Now</a>
                    </div>
                </div>
            </div>
        </div>


        {{-- subscribe --}}
       <div class="bg-accent">
            <div class="flex flex-col items-center py-28  space-y-10">
                <p class="text-2xl font-bold font-montserrat text-white">Get incredible stories, promotions, and matching offers in your inbox</p>
                <form action="" class="flex">
                    <input type="text" class="bg-slate-200 py-2 px-4 outline-none w-[25rem]">
                    <button class="uppercase bg-secondary text-white px-4 font-medium">Subscribe</button>
                </form>
            </div>
       </div>
    </section>
@endsection