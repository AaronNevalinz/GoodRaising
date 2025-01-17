@extends('layout.layout')
@section('content')

<section class="">
   

   <main class="grid grid-cols-4 px-48 gap-5 pb-24">
        <div class="col-span-3">

            <div class="text-center pb-4">
                <div class="flex justify-between items-center w-[28rem] mx-auto text-textColor text-sm mt-8">
                    <p>{{$project->theme}}</p>
                    <p>{{$project->project_location}}</p>
                    <p>Project #67474</p>
                </div>
                <h1 class="text-5xl my-4 text-white font-montserrat font-bold">{{$project->title}}</h1>
                <p class="text-sm text-textColor">By 
                    <span class=" font-medium hover:text-white transition-all hover:underline">
                        <a href="">{{$project->org->name}}</a>
                    </span>
                </p>
           </div>

            <div class="h-[28rem]">
                <img src="{{asset('storage/' . $project->cover_img)}}" class="object-cover rounded-md w-full h-full" alt="{{$project->title}}">
            </div>
            <nav class="flex justify-between px-16 py-5 uppercase text-sm text-white">
                <a href="">Story</a>
                <a href="">projects</a>
                <a href="">report</a>
                <a href="">FAQs</a>
            </nav>

            {{-- story --}}
            <div class="rounded-md bg-accent py-4 px-6">
                <h1 class="text-lg font-bold my-2 text-white font-montserrat">Summary</h1>
                <p class="leading-7 text-textColor">
                    {{$project->project_summary}}
                </p>
                <ul class="flex justify-between px-8 items-center text-center py-4">
                    <li>
                        <p class="text-secondary text-2xl font-semibold">{{number_format($project->funding_goal)}}</p>
                        <p class="text-sm text-textColor">total goal</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">$2.56M</p>
                        <p class="text-sm text-textColor">Remaining</p>
                    </li>
                    <li>
                        <p class="text-secondary text-2xl font-semibold">764</p>
                        <p class="text-sm text-textColor">Donors</p>
                    </li>                    
                    <li>
                        <p class="text-secondary text-2xl font-semibold">17</p>
                        <p class="text-sm text-textColor">days</p>
                    </li>
                </ul>

                <h1 class="text-xl font-bold my-4 text-white font-montserrat">Challenge</h1>
                <p class="leading-7 text-textColor">
                    Hurricane Milton made landfall in Siesta Key, Florida, as a strong Category 3 storm. It prompted the largest evacuation in the Florida region since Hurricane Irma in 2017. Millions of people were in Milton's path, and now without power and dealing with historic rainfall and flooding. Communities affected by Milton need support, including access to shelter, food, water, and clothing. Many of those impacted are still reeling from Hurricane Helene, which hit some of the same areas as Milton.
                </p>

                <h1 class="text-xl font-bold my-4 text-white font-montserrat">Solution</h1>
                <p class="leading-7 text-textColor">
                    All donations to this fund will help Hurricane Milton survivors throughout Florida and affected areas of the Southeast. These efforts will be led by GlobalGiving's network of vetted partners. Initially, the fund will help meet survivors' immediate needs for food, fuel, clean water, hygiene products, and shelter. As needs evolve, the fund will transition to support longer-term recovery efforts run by local, vetted nonprofits.
                </p>

                <h1 class="text-xl text-white font-montserrat font-bold my-4">How Your Donation Will Be Used</h1>
                <p class="text-textColor">
                    When you donate to GlobalGiving's Hurricane Milton Relief Fund, your donation will be used to:
                </p>
                <ul class="text-textColor list-disc pl-8 space-y-4">
                    <li>Provide food, water, and emergency medical supplies to people and animals</li>
                    <li>Support temporary relief and emergency supplies for displaced families</li>
                    <li>Provide support to frontline workers</li>
                    <li>Meet other needs that emerge</li>
                </ul>

                <h1 class="text-xl font-bold my-4 text-white font-montserrat">Trusted and Reliable</h1>
                <p class="leading-7 text-textColor">
                    GlobalGiving is one of the most reliable and trustworthy charities in the world. We have a four-star rating and nearly perfect score from Charity Navigator due to our stability, efficiency, sustainability, and commitment to transparency.
                </p>
                <p class="leading-7 text-textColor">
                    Our disaster relief funds have been recommended by The New York Times, the Associated Press, NPR, Washington Post, Oprah, ABC News, and the US State Department.
                </p>

                <h1 class="text-xl font-bold my-4 text-white font-montserrat">GlobalGiving's Track Record</h1>
                <p class="leading-7 text-textColor">
                    GlobalGiving has been responding to disasters and supporting emergency aid and long-term relief programs since 2004. We have facilitated more than $275 million in disaster donations to funds just like this one.
                </p>

                <p class="leading-7 text-textColor my-4">See how we've responded to similar disasters like this, including:</p>
                <ul class="text-textColor list-disc pl-8 space-y-4">
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

                <p class="leading-7 my-4 text-white text-xl font-montserrat font-bold">Resources</p>
                <ul class="text-textColor list-disc pl-8 space-y-4">
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

        <div class="col-span-1 fixed right-32 top-28 w-[20rem]">
            <div class="bg-accent py-4 px-4 rounded-md">
                <p class="text-textColor">
                    <span class="text-flamePea font-bold">{{number_format($project->funding_goal - 20000)}}</span> 
                    raised of 
                    <span class="font-bold">{{number_format($project->funding_goal)}} </span>
                    goal
                </p>
                <div class="w-full h-2 bg-slate-300 my-4 rounded-full">
                    <div class="w-[80%] bg-green-500 h-2 rounded-full"></div>
                </div>
                <div class="flex justify-between text-textColor">
                    <p>793 donations</p>
                    <p>{{number_format($project->funding_goal - 80000)}} to go</p>
                </div>
            </div>

            <div class="flex w-full my-8">
                <a href="{{route('billing', $project)}}" class="text-white rounded-md bg-secondary text-center uppercase w-full text-sm py-2">Donate now</a>
            </div>

        </div>
   </main>
</section>

@endsection