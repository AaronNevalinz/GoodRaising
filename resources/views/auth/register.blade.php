@extends('layout.layout')

@section('content')
    <section class="h-screen bg-secondary flex w-full items-center justify-center">
        <div class="bg-white py-16 w-[450px] px-12">

            <h1 class="text-3xl text-slate-600 text-center">Register</h1>
            <p class="text-center my-4 text-slate-500 text-sm">Already have an account? <span class="underline hover:text-primary font-medium"><a href="{{route('login')}}">Login</a></span></p>
            <form action="/register" method="post" class="flex flex-col mt-4 space-y-4">
                @csrf
                <div class="flex justify-between gap-3">
                    <div class="flex flex-col gap-2 flex-1">
                        <label for="" class="uppercase text-sm">first name:</label>
                        <input type="text" name="fname" value="{{old('fname')}}" class="border w-full  border-slate-400 py-1 px-2 outline-none">
                        @error('fname')
                            <p class="text-red-500">First name required</p>
                        @enderror
                   </div>
                   <div class="flex flex-col gap-2 flex-1">
                        <label for="" class="uppercase text-sm">last name:</label>
                        <input type="text" name="lname" value="{{old('lname')}}" class="border border-slate-400 w-full py-1 px-2 outline-none">
                        @error('lname')
                            <p class="text-red-500">last name required</p>
                        @enderror
                    </div>
                </div>
               <div class="flex flex-col gap-2">
                    <label for="" class="uppercase text-sm">Email:</label>
                    <input type="email" name="email" value="{{old('email')}}" class="border border-slate-400 py-1 px-2 outline-none">
                    @error('email')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
               </div>

               <div  class="flex flex-col gap-2">
                    <label for="" class="uppercase text-sm">Password:</label>
                    <input type="password" name="password"  class="border border-slate-400 py-1 px-2 outline-none">
                    @error('password')
                        <p class="text-red-500">{{$message}}</p>
                    @enderror
               </div>

               <div  class="flex flex-col gap-2">
                    <label for="" class="uppercase text-sm">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="border border-slate-400 py-1 px-2 outline-none">
               </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" name="check" id="">
                    <p>Subscribe to our newsletter</p>
                </div>

                <button type="submit" class="text-white bg-primary px-4 py-2 mt-4 uppercase">Register</button>
            </form>
        </div>
    </section>
@endsection