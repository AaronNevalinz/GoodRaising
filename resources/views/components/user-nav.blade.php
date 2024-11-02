<div class="bg-accent flex justify-between h-16 fixed w-full items-center px-5">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="w-48">
        <a href="{{route('home')}}">
            <img src="images/globalgiving logo.png" alt="" class="w-full">
        </a>
    </div>

    @auth                
        <div class="flex items-center gap-10">
            <a href="{{route('org.index')}}" class="uppercase text-sm border py-1 px-2 font-medium text-secondary border-secondary">Thank Donors</a>
            <div class="w-10 h-10 relative grid place-items-center" x-data="{ open: false}">
                {{-- dropdown menu button --}}
                <img @click="open = !open" src="https://picsum.photos/200" alt="" class="w-full h-full rounded-full cursor-pointer">
                
                {{-- dropdown menu --}}
                <div x-sUsernamehow="open" class="bg-accent absolute top-12 py-4 text-white right-0 rounded-lg overflow-hidden px-6 flex flex-col gap-3">
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