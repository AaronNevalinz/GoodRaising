<div class="bg-background shadow-accent shadow-lg py-3 fixed w-full z-50">
    <div class=" flex justify-between  max-w-[1360px] mx-auto items-center  ">
        <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
        <div class="">
            <a href="{{route('home')}}">
                <img src="{{asset('images/logo.png')}}" alt="" class="w-40">
            </a>
        </div>
    
        @auth                
            <div class="flex items-center gap-10">
                <a href="{{route('donations')}}" class="uppercase text-sm border py-1 px-2 font-medium border-secondary text-secondary rounded-lg">Thank Donors</a>
                <div class="w-10 h-10 relative grid place-items-center" x-data="{ open: false}">
                    {{-- dropdown menu button --}}
                    <img @click="open = !open" src="https://picsum.photos/200" alt="" class="w-full h-full rounded-full cursor-pointer">
                    
                    {{-- dropdown menu --}}
                    <div x-show="open" class="bg-accent absolute top-12 py-4 text-white right-0 rounded-lg overflow-hidden px-6 flex flex-col gap-3 z-50">
                        <p class="text-sm">{{auth()->user()->fname}}</p>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button href="{{route('logout')}}" class="uppercase text-slate-200 text-sm hover:underline hover:text-primary">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        @endauth
    </div>
</div>