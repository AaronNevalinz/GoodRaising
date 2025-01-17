@extends('layout.user-dash')
@section('content')
    <div>
        <main class="flex max-w-[1360px] mx-auto pb-16 pt-16">
            {{-- sidebar --}}
            <x-user-sidebar />

            {{-- mide div --}}
            <div class="pt-10 ml-[15rem] max-w-[48rem]">

                <div class=" border border-secondary px-8 py-4 rounded-lg mb-10">
                    <h3 class="text-white font-montserrat font-bold text-2xl">Organization Basic Information</h3>
                    <div class="text-textColor mt-4 flex flex-wrap items-center gap-x-10 gap-y-4 ">
                        <p>Name: <span class="text-white font-bold">Kole Intellectual Forum</span></p>
                        <p>Address: <span class="text-white font-bold">TeOkole</span></p>
                        <p>City: <span class="text-white font-bold">Lira</span></p>
                        <p>State: <span class="text-white font-bold">Kole</span></p>
                        <p>Postal Code: <span class="text-white font-bold">0000</span></p>
                        <p>Location: <span class="text-white font-bold">Northern Uganda</span></p>
                    </div>
                </div>


                <div class=" border border-secondary px-8 py-6 rounded-lg">
                    <h3 class="text-white font-montserrat font-bold text-2xl">Organization programs and mission</h3>
                    <div class="text-textColor mt-2 space-y-6">
                        <div>
                            <p class="text-white font-bold">Organization's Programs: </p>
                           
                            <div class="text-textColor bg-accent px-4 py-1.5 rounded-md mt-2">
                                <p class="">
                                    Kole Intellectual Forum is promoting quality education, empowering a girl child and youth to fight for her rights in Uganda; through, community Integration program, Home Economics, and Vocational training
                                </p>
                            </div>
                        </div>

                        <div>
                            <p class="text-white font-bold">Mission:</p>
                            <div class="text-textColor bg-accent px-4 py-1.5 rounded-md mt-2">
                                <p>
                                    To promote quality, sustainable and potential education in Uganda; through, action research, modern telecommunication system and entrepreneurship skills.
                                </p>
                            </div>
                        </div>

                        <div>
                            <p class="text-white font-bold">Awards and Recognition:</p>
                            <div class="text-textColor bg-accent px-4 py-1.5 rounded-md mt-2">
                                <p>
                                    Community support
                                    local government recognition
                                    Supperstar: GlobalGiving
                                    Twaweza East Africa: Kole District Partner Organization
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            {{-- left div --}}
            <div class="min-w-[20rem] fixed right-32 ">
                <div class="bg-accent rounded-lg  mt-[2.6rem] py-6 px-4">
                    <p class="text-white bg-secondary font-montserrat font-bold text-center text-sm py-1.5 rounded-md">
                        Disbursement Information
                    </p>
                    <div class="text-textColor mt-2 space-y-4">
                        <p>Account Name: <span class="text-white font-bold">Kole Intellectual Forum</span></p>
                        <p>Merchant Code: <span class="text-white font-bold">Skuh12H</span></p>
                        <p>Phone: <span class="text-white font-bold">+256777306662</span></p>
                        <p>State: <span class="text-white font-bold">Kole</span></p>
                        <p>Postal Code: <span class="text-white font-bold">0000</span></p>
                        <p>Location: <span class="text-white font-bold">Northern Uganda</span></p>
                    </div>
                </div>
                <div class="mt-5 bg-flamePea text-center py-2 rounded-lg text-white font-bold">
                    <button>Update Org Information</button>
                </div>
            </div>
        </main>
    </div>
@endsection