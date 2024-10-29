<div class="flex items-center justify-between border-b border-slate-300 py-5 h-[4.5rem] fixed w-full px-10  bg-white z-20 top-0 shadow-sm">
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <div class="flex items-center gap-10">
        <a href="{{route('home')}}">
            {{-- <img src="images/globalgiving logo.png" class="w-[240px]" alt=""> --}}
            <h1 class="text-3xl font-bold text-primary">Mpako-<span class="bg-accent text-secondary px-1">Nawe</span></h1>
        </a>
        <div class="flex items-center">
            <p class="uppercase font-bold text-primary">
                <a href="{{route('projects')}}" class="hover:underline">Donate to projects</a>
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </div>
    </div>

    <div class="flex items-center gap-16">
        <ul class="flex items-center gap-5 text-slate-500">
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="{{route('nonprofit')}}">Non Profits</a>
            </li>
            <li>
                <a href="">Companies</a>
            </li>
            <li>
                <a href="">Disaster</a>
            </li>
            <li>
                <a href="">Blog</a>
            </li>
            <li>
                <a href="">Gift cards</a>
            </li>
        </ul>
        <div class="flex items-center gap-5">
            @guest
                <a href="{{route('login')}}" class="uppercase text-slate-600 text-sm hover:underline hover:text-primary">login</a>
                <a href="{{route('register')}}" class="uppercase text-slate-600 text-sm hover:underline hover:text-primary">Regsiter</a>
            @endguest

            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>                  
            </a>
            @auth                
            <a href="{{route('dashboard')}}" class="uppercase text-sm border py-1 px-2 font-medium text-secondary border-secondary">My Dashboard</a>
            <a href="" class="w-10 h-10 rounded-full bg-accent"></a>
            @endauth
        </div>
    </div>
</div>