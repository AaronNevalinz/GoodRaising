<div class="flex items-center font-hanken justify-between border-slate-300 py-5 h-[4.5rem] fixed w-full px-32  bg-background z-20 top-0 shadow-lg shadow-accent">
    
    <div class="flex items-center gap-16">
        <ul class="flex items-center gap-x-10  font-medium uppercase">
            <li>
                <a href="{{route('projects')}}" class="text-textColor hover:text-white transition-all">Causes</a>
            </li>
            <li>
                <a href="{{route('projects')}}" class="text-textColor hover:text-white transition-all">Donate</a>
            </li>
            <li>
                <a href="" class="text-textColor hover:text-white transition-all">Blog</a>
            </li>
        </ul>
    </div>

    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <div class="flex justify-start">
        <a href="{{route('home')}}">
            {{-- <img src="images/globalgiving logo.png" class="w-[240px]" alt=""> --}}
            <img src="{{asset('images/logo.png')}}" class="w-36" alt="logo">
            {{-- <h1 class="text-3xl font-bold text-primary">Mpako-<span class="bg-accent text-secondary px-1">Nawe</span></h1> --}}
        </a>
    </div>


    <div class="flex items-center gap-x-5">
        @guest
            <a href="{{route('login')}}" class="bg-accent px-3 py-1.5 text-white rounded-lg">Login</a>
            <a href="{{route('register')}}" class="  px-3 rounded-lg py-1.5 text-white bg-secondary">Register</a>
            <a href="{{route('nonprofit')}}" class="  px-3 rounded-lg py-1.5 text-secondary border border-secondary">Start a GoodRaising</a>
        @endguest

        {{-- <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>                  
        </a> --}}
        @auth                
        <a href="{{route('dashboard.index')}}" class="uppercase rounded-md text-sm border py-2 px-4 font-medium text-secondary border-secondary mr-8">My Dashboard</a>

        <div class="w-12 h-12 relative grid place-items-center" x-data="{ open: false}">
            {{-- dropdown menu button --}}
            <img @click="open = !open" src="https://picsum.photos/200" alt="" class="w-full h-full rounded-full cursor-pointer">
            
            {{-- dropdown menu --}}
            <div x-show="open" class="bg-accent absolute top-12 py-4 text-white right-0 rounded-lg overflow-hidden px-6 flex flex-col gap-3">
                <p class="text-sm">{{auth()->user()->fname}}</p>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button href="{{route('logout')}}" class="uppercase text-slate-200 text-sm hover:underline hover:text-secondary">Logout</button>
                </form>
            </div>
        </div>
        @endauth
    </div>
</div>