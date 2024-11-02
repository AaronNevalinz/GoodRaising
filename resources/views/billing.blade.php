@extends('layout.layout')
@section('content')
    <section class="bg-slate-200">
        <div class="max-w-5xl mx-auto grid grid-cols-3 py-16 gap-10">
            <div class="col-span-1">
               <div class=" border border-slate-400">
                    <div class="w-full h-48">
                        <img src="images/man holding cat.jpg" class="h-full object-cover w-full" alt="">
                    </div>
                    <div class="bg-white px-4 py-2">
                        <div class="flex items-center justify-between pb-4">
                            <p>Donate</p>
                            <div class="flex items-center justify-end py-1 px-1 text-2xl border w-2/6 border-slate-400">
                                <p>$</p>
                                <input type="text" value="30" class="text-2xl w-full outline-none px-2">
                            </div>
                        </div>
                        <x-horizontal-line />
                        <div class="py-4 text-xs text-slate-600 flex gap-5 items-center">
                            <p class="italic">Add an optional donation to GlobalGiving to amplify my impact </p>
                            <select name="" id="" class="h-8 w-1/2 border border-slate-400 bg-transparent py-2">
                                <option value="">25%</option>
                                <option value="">15%</option>
                                <option value="">10%</option>
                                <option value="">5%</option>
                                <option value="">I don't wish to amplify</option>
                            </select>
                        </div>
                        <x-horizontal-line />
                        <div class="pt-4 flex justify-between items-center">
                            <p>Total:</p>
                            <div class="flex gap-3 items-center">
                                <select name="" id="" class="border border-slate-400 bg-transparent py-2">
                                    <option value="">UGX</option>
                                    <option value="">$KESH</option>
                                    <option value="">$TSH</option>
                                </select>
                                <p class="text-2xl font-bold">30</p>
                            </div>
                        </div>

                    </div>
               </div>
            </div>


            <div class="col-span-2">
                <div>
                    <h1  class="text-3xl font-semibold">Donate to Tropical Storm Trami Relief Fund</h1>
                    <p class="my-2 text-slate-600">and we'll send you updates from GlobalGiving about your impact!</p>
                </div>

                <div>
                    <p class="text-slate-600">Already have an account? <span class="font-bold underline"><a href="{{route('login')}}">Login</a></span></p>

                    <form action="">
                        <div class="flex flex-col gap-1 my-3" >
                            <input type="text" class="py-2 px-4 border border-slate-400 outline-none" placeholder="Full name">
                            <input type="text" class="py-2 px-4 border border-slate-400 outline-none" placeholder="Email Address">
                        </div>
                       <div class="text-sm space-y-2 mb-3">
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="">
                                <label for="">Donate anonymously</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="">
                                <label for=""> Share my contact information</label>
                            </div>
                       </div>
                        <div class="grid grid-cols-2 w-full">
                            <input type="text" class="col-span-1 py-2 border px-4 border-slate-400 outline-none" placeholder="Card Number">
                            <div class="col-span-1 flex">
                                <input type="text" class="w-full py-2 border px-4 border-slate-400 outline-none" placeholder="MM/YY">
                                <input type="text" class="w-full py-2 border px-4 border-slate-400 outline-none" placeholder="CVC">
                            </div>
                        </div>

                       <div class="my-4  space-y-2 text-slate-600">
                            <div class="flex gap-2 text-sm items-center">
                                <input type="checkbox" name="" id="">
                                <p>Email me reports from the project i supported</p>
                            </div>

                            <div class="flex gap-2 text-sm items-center">
                                <input type="checkbox" name="" id="">
                                <p>Plus, email me inspiring stories, exclusive promotions, and donation match opportunities to amplify my impact!</p>
                            </div>
                       </div>

                        <button type="submit" class="text-center bg-primary py-2 w-full text-lg uppercase font-medium mt-2">Submit</button>
                    </form>
                </div>
            </div>

        </div>

        <x-horizontal-line />

        <div class="w-[700px] text-center mx-auto py-8">
            <p class="text-xs italic text-slate-600">
                All donations are made to GlobalGiving Foundation, Inc., a registered 501(c)(3) charitable organization. Donations may be tax-deductible in the US. As required by law, GlobalGiving retains control and discretion of all donated funds.
            </p>
        </div>
    </section>
@endsection