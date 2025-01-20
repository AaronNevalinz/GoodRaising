@extends('layout.layout')
@section('content')
    <section class="">

        <form action="{{route('donate', $project)}}" method="post">
            @csrf
             <div class="max-w-5xl mx-auto grid grid-cols-3 py-16 gap-10">
            <div class="col-span-1">
               <div class="">
                    <div class="w-full h-48">
                        <img src="{{asset('storage/' . $project->cover_img)}}" class="h-full object-cover w-full" alt="">
                    </div>
                    <div class="bg-accent px-4 py-2">
                        <div class="flex gap-y-5 flex-col pb-4">
                            <p class="text-textColor">Amount to Donate</p>
                            <div class="flex items-center justify-end py-1 px-2 text-lg border border-primary rounded-lg text-textColor">
                                <p>ugx</p>
                                <input type="number" value="30,000" name="amount" class="text-lg ml-2 py-2 bg-primary text-textColor rounded-lg w-full outline-none px-2">
                            </div>
                        </div>
                    </div>
               </div>
            </div>


            <div class="col-span-2">
                <div>
                    <h1  class="text-3xl font-semibold text-white font-montserrat">{{$project->title}}</h1>
                    <p class="my-2 text-textColor">and we'll send you updates from GlobalGiving about your impact!</p>
                </div>

                <div>
                    <p class="text-textColor">Already have an account? <span class="font-bold text-white underline"><a href="{{route('login')}}">Login</a></span></p>

                    
                        <div class="flex flex-col gap-y-5 my-3" >
                            <input type="text" class="py-2 px-4 bg-accent rounded-full text-textColor placeholder:text-textColor outline-none" placeholder="Full name" name="full_name">
                            <input type="text" class="py-2 px-4 bg-accent rounded-full text-textColor placeholder:text-textColor outline-none" placeholder="Email Address" name="email">
                        </div>
                       <div class="text-sm space-y-2 mb-3 text-textColor">
                            <div class="flex gap-2 items-center ">
                                <input type="checkbox" name="" id="">
                                <label for="">Donate anonymously</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="">
                                <label for=""> Share my contact information</label>
                            </div>
                       </div>
                        <div class="grid grid-cols-2 gap-x-5 w-full">
                            <input type="text" class="col-span-1 py-2 border px-4 bg-accent rounded-full text-textColor placeholder:text-textColor outline-none" placeholder="Phone Number" name="phone">
                        </div>

                       <div class="my-4  space-y-2 text-textColor">
                            <div class="flex gap-2 text-sm items-center">
                                <input type="checkbox" name="" id="">
                                <p>Email me reports from the project i supported</p>
                            </div>

                            <div class="flex gap-2 text-sm items-center">
                                <input type="checkbox" name="" id="">
                                <p>Plus, email me inspiring stories, exclusive promotions, and donation match opportunities to amplify my impact!</p>
                            </div>
                       </div>

                        <button type="submit" class="text-center bg-secondary text-white py-2 w-full text-lg uppercase font-medium mt-2">Submit</button>
                    
                </div>
            </div>

        </div>
    </form>

        <x-horizontal-line />

        <div class="w-[700px] text-center mx-auto py-8">
            <p class="text-xs italic text-slate-600">
                All donations are made to GlobalGiving Foundation, Inc., a registered 501(c)(3) charitable organization. Donations may be tax-deductible in the US. As required by law, GlobalGiving retains control and discretion of all donated funds.
            </p>
        </div>
    </section>
@endsection