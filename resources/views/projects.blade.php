@extends('layout.layout')
@section('content')
    <section>
        <div class="h-[300px] w-full relative">
            <img src="images/man holding cat.jpg" class="w-full h-full object-cover" alt="">
            <div class="absolute bg-black/50 w-full h-[300px] top-0"></div>
            <div class="absolute top-0 text-white flex items-center w-full h-[300px] justify-center">
                <p class="text-5xl">Donate to projects</p>
            </div>
        </div>
        
        <div class="bg-accent h-16 flex items-center justify-center">
            <nav class="flex gap-10 text-white uppercase font-medium text-sm">
                <a href="" class="text-primary hover:underline">Donate to projects</a>
                <a href="">Gift cards</a>
                <a href="">project of the month club</a>
            </nav>
        </div>

        <main class="bg-slate-200 py-8">
            <h1 class="text-4xl  text-center">All projects</h1>
            <div class="flex items-center justify-center my-8">
                <p>Found 7870 projects sorted by </p>
                <select name="" id="" class="bg-white py-1 px-2">
                    <option value="">Relevance</option>
                    <option value="">Funds raised</option>
                    <option value="">Closest to goal</option>
                    <option value="">Newest</option>
                </select>
            </div>

            {{-- projects --}}
           <div class="px-60">

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/learn-feature-poetry-book.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/candles.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/disaster.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/running.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/us-election.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/kids.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 bg-white mb-4">
                    <div class="col-span-1 h-[15rem]">
                        <a href="">
                            <img src="images/ecovillage.jpg"  class="w-full h-full object-cover">
                        </a>
                    </div>
                    <div class="col-span-2 px-8 py-2">
                        <div>
                            <p class="flex gap-3 text-xs font-medium uppercase text-slate-500">
                                <span>Education</span>
                                <span>Syrian arab republic</span>
                            </p>
                            <p class="text-2xl my-1 text-slate-600 font-medium">
                                <a href="" class="hover:underline">Educate 500 orphans in syria</a>
                            </p>
                            <p class="text-xs">by Masarat Initiative</p>
                        </div>

                        <p class="my-4 text-slate-600">In Syria.. did you know that thousand of orphans are deprived of their fundamental right to education? They suffer poverty and displacement... 
                            <span class="text-blue-800 cursor-pointer font-medium hover:underline">read more</span>
                        </p>

                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm"><span class="text-xl text-secondary font-bold ">$63,707</span> raised of $100,000 goal</p>
                                <div class="w-full h-2 bg-slate-300 my-4">
                                    <div class="w-[80%] bg-secondary h-2"></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <input type="text" class="bg-white border-slate-400 border py-1 w-24 outline-none px-2">
                                <a href="" class="flex-1 bg-primary py-2 px-2 text-white uppercase text-sm">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>

           </div>
        </main>
    </section>
@endsection