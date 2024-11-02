@extends('layout.layout')
@section('content')
    <main class="bg-primary py-[4.5rem] pt-[8rem]">

        <div class="max-w-3xl mx-auto bg-white py-8 px-8 rounded-md" >

            <form action="/application" method="POST">
                @csrf
                <div class="space-y-4">
                    <h1 class="underline font-medium text-lg">Organization Basic Information</h1>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Name: <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="" value="{{old('name')}}" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        <p class="italic text-sm text-slate-500">
                            Note: The organization name cannot be changed without supporting legal documentation. Please contact us at projecthelp@globalgiving.org to send us legal documentation confirming a name change.
                        </p>
                        @error('name')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Address: <span class="text-red-500">*</span></label>
                        <input type="text" name="address" value="{{old('address')}}" id="" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        @error('address')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">City: <span class="text-red-500">*</span></label>
                        <input type="text" name="city" value="{{old('city')}}" id="" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        @error('city')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">State: <span class="text-red-500">*</span></label>
                        <input type="text" name="state" value="{{old('state')}}"  id="" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        @error('state')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Postal Code: <span class="text-red-500">*</span></label>
                        <input type="text" name="postal_code"  value="{{old('postal_code')}}" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                        @error('postal_code')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Location: <span class="text-red-500">*</span></label>
                        <input type="text" name="location"  value="{{old('location')}}" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">Phone: <span class="text-red-500">*</span></label>
                        <input type="text" name="phone"  value="{{old('phone')}}" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                    </div>
                    <div class="flex flex-col gap-3 text-slat-600">
                        <label for="" class="font-medium">URL:</label>
                        <input type="text" value="{{old('web_url')}}" name="web_url" id="" class="border border-slate-400 outline-none py-1 px-4 rounded-md">
                    </div>
                </div>

                {{-- location of operation --}}
                <div class="grid grid-cols-3 gap-10  items-start my-5">
                    <div class="col-span-1">
                        <p class="font-medium">Locations of Operation: <span class="text-red-500">*</span></p>
                    </div>
                    <div class="col-span-2 text-slate-600">
                        <p class="underline hover:text-primary">East Africa</p>
                        <ul class="grid grid-cols-3 justify-between gap-5 mt-5">
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Uganda</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Kenya</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Burundi</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Tanzania</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Sudan</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Rwanda</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <x-horizontal-line />

                {{-- Theme --}}
                <div class="grid grid-cols-3 gap-10  items-start my-5">
                    <div class="col-span-1">
                        <p class="font-medium">Themes: <span class="text-red-500">*</span></p>
                    </div>
                    <div class="col-span-2 text-slate-600">
                        <ul class="grid grid-cols-3 justify-between gap-5 mt-5">
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Clean Water</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Digital Literacy</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Economic Growth</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Gender Equality</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Mental Health</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Justice and Human Rights</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Reproductive Health</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Food Security</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Disaster Response</label>
                            </li>
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">Peace and Reconciliation</label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <h1 class="text-xl font-semibold underline">Organization programs and mission</h1>
                    <div class="grid grid-cols-3 items-center py-4">
                        <p class="font-medium col-span-1">Organization's Programs: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-400 col-span-2">
                            <p>Describe the programs that your organization conducts, oversees, or administers.</p>
                            <textarea name="programs" value="{{old('programs')}}" cols="20" rows="5" class="border border-slate-400 w-full rounded-md outline-none px-4 py-2"></textarea>
                            <p class="italic">Example: CHF helps rural families start small businesses... </p>
                            @error('programs')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <x-horizontal-line />
                    
                    <div class="grid grid-cols-3 items-center py-4">
                        <p class="font-medium col-span-1">Mission: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-400 col-span-2">
                            <p>Describe your organization's mission. You can provide your mission statement, founding principles, or goals.</p>
                            <textarea name="mission" value="{{old('mission')}}" cols="20" rows="5" class="border border-slate-400 w-full rounded-md outline-none px-4 py-2"></textarea>
                            <p class="italic">Example: Children First's mission is to help underserved children... </p>
                            @error('mission')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <x-horizontal-line />
                    
                    
                    <div class="grid grid-cols-3 items-center py-4">
                        <p class="font-medium col-span-1">Awards and Recognition: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-400 col-span-2">
                            <p>List awards, community support, or local government recognition your organization has received.</p>
                            <textarea name="awards_reg" id="" value="{{old('awards_reg')}}" cols="20" rows="5" class="border border-slate-400 w-full rounded-md outline-none px-4 py-2"></textarea>
                            <p class="italic">Example: Recognized by the Ministry of Territorial Administration... </p>
                            @error('awards_reg')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <x-horizontal-line />
                    
                    
                    <div class="grid grid-cols-3 items-center py-4">
                        <p class="font-medium col-span-1">Religious Affiliations: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-400 col-span-2">
                            <p>If your organization has a religious affliation, note what the affliation is and how it impacts your beneficiaries. If there is no affliation, write none.</p>
                            <input type="text" value="{{old('religious_affiliation')}}" name="religious_affiliation" id="" cols="20" rows="5" class="border border-slate-400 w-full rounded-md outline-none px-4 py-2"></textarea>
                            <p class="italic">Example: None, Christian - no descrimination of patients treated... </p>
                            @error('postal_code')
                                <p class="text-red-500">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <x-horizontal-line />                    
                </div>
                
                
                {{-- staff information --}}
                <div class="my-8">
                    <h1 class="text-xl font-semibold underline mb-4">Staff Infomation</h1>

                    <div class="grid grid-cols-3 items-center py-4">

                        <p class="font-medium col-span-1">Dircetor's Name: <span class="text-red-500">*</span></p>

                        <div class="text-sm text-slate-500 col-span-2 flex gap-5">
                            <div>
                                <p>
                                    Who is incharge of your organization?
                                </p>
                                <input type="text"  value="{{old('director_name')}}" name="director_name" class="border border-slate-400 w-full rounded-md outline-none px-4 py-1"></input>
                                @error('director_name')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <p>
                                    What is his or her title?
                                </p>
                                <input type="text" value="{{old('title')}}"  name="title" class="border border-slate-400 w-full rounded-md outline-none px-4 py-1">
                                <p class="italic">Example: President</p>
                                @error('title')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <x-horizontal-line />

                    <div class="grid grid-cols-3 items-center py-8">
                        <p class="font-medium col-span-1">Scope: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-500 col-span-2">
                                <p>
                                    Is your organization operating in a local village or town, in a region of a country, across a single country, or in multiple countries?
                                </p>
                                <select name="scope" id="" class="w-full py-2 px-4 outline-none border border-slate-400 mt-1">
                                    <option value="local">Local</option>    
                                    <option value="global">Global</option>    
                                    <option value="national">National</option>    
                                    <option value="regional">Regional</option>    
                                </select>    
                                @error('scope')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror                        
                        </div>
                    </div>

                    <x-horizontal-line />

                    <div class="grid grid-cols-3 items-center py-8">
                        <p class="font-medium col-span-1">Employees: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-500 col-span-2">
                                <p>
                                    How many people are currently employed by your organization?
                                </p>
                                <input type="text" value="{{old('employees')}}"  name="employees" class="border border-slate-400 w-full rounded-md outline-none px-4 py-1 my-2">
                                <p class="italic">Example: 10</p>     
                                @error('employees')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror                    
                        </div>
                    </div>

                    <x-horizontal-line />

                    <div class="grid grid-cols-3 items-center py-8">
                        <p class="font-medium col-span-1"># Volunteers: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-500 col-span-2">
                                <p>
                                    How many people volunteer with your organization on an on-going basis and function as unpaid staff, rather than one-time volunteers?
                                </p>
                                <input type="text" value="{{old('volunteers')}}" name="volunteers" class="border border-slate-400 w-full rounded-md outline-none px-4 py-1 my-2">
                                <p class="italic">Example: 10</p>   
                                @error('volunteers')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror                      
                        </div>
                    </div>

                    <x-horizontal-line />

                    <div class="grid grid-cols-3 items-center py-8">
                        <p class="font-medium col-span-1">#Year Founded: <span class="text-red-500">*</span></p>
                        <div class="text-sm text-slate-500 col-span-2">
                                <input type="text"  value="{{old('year_founded')}}" name="year_founded" class="border border-slate-400 w-full rounded-md outline-none px-4 py-1 my-2">
                                <p class="italic">Example: 1982</p>  
                                @error('year_founded')
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror                   
                        </div>
                    </div>

                    <x-horizontal-line />

                    
                </div>
                <button type="submit" class="bg-secondary text-white uppercase px-8 py-2 font-medium text-lg">
                    Submit
                </button>
            </form>
        </div>
    </main>
@endsection