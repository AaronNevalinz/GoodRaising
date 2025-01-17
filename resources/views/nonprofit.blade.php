@extends('layout.layout')
@section('content')
    <section class="">
        <div class=" flex items-center justify-center flex-col">
            <div class="max-w-3xl text-center space-y-8 py-16 text-lg text-textColor">
                <h1 class="text-4xl text-white font-bold font-montserrat">Pathway to GoodRaising</h1>
                <p class="">Thank you for your interest in partnering with GoodRaising!</p>
                <p>
                    Pathway to GoodRaising is a community learning experience that welcomes potential nonprofit partners to GoodRaising and helps them get fundraising-ready! Ready to get started? The first step: Complete our interest survey.
                </p>
                <p>
                    Please note: The interest survey is not an application to join GoodRaising. GoodRaising invites a small cohort of interested nonprofits to participate in Pathway on a bi-monthly basis. If we’re a good fit, you’ll hear from us via email.
                </p>
                <div>
                    <a href="{{route('application')}}" class="bg-gradient-to-r from-purple-600 to-red-500 text-black px-4 py-2 text-xl rounded-lg font-semibold mt-8">Start your Pathway to GoodRaising</a>
                </div>
            </div>
        </div>

       <div class="bg-accent py-5 mt-16">
            <div class="max-w-5xl mx-auto my-16 ">
                <div class="text-center space-y-4 mb-4">
                    <h1 class="text-3xl font-medium text-white font-montserrat">The Path way experience</h1>
                    <p class="text-lg text-textColor">Pathway to GoodRaising is a community learning experience designed by GoodRaising nonprofit partners to help potential GoodRaising nonprofit partners:</p>
                </div>

                <div class="flex items-center gap-10 my-8 text-textColor">
                    <div class="flex flex-col text-center items-center gap-5 text-lg">
                        <img src="https://www.GlobalGiving.org/img/application/icon-fundraising.svg" class="w-" alt="">
                        <p>
                            Decide whether GoodRaising is the right fundraising partner for you
                        </p>
                    </div>
                    <div class="flex flex-col text-center items-center gap-5 text-lg">
                        <img src="https://www.GlobalGiving.org/img/application/icon-partner.svg" alt="">
                        <p>
                            Get fundraising-ready with self-paced tools tailored to you
                        </p>
                    </div>
                    <div class="flex flex-col text-center items-center gap-5 text-lg">
                        <img src="https://www.GlobalGiving.org/img/application/icon-connect.svg" alt="">
                        <p>
                            Connect with amazing change leaders on your journey
                        </p>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="text-xl font-bold mb-2 text-white font-montserrat">The experience includes:</h2>
                    <ul class="list-disc flex flex-col gap-3 text-textColor">
                        <li>
                            Completing a digital Fundraising-Ready Workbook designed to help you start outlining your fundraising strategy. Submitting your workbook is required to access the due diligence application.
                        </li>
                        <li>
                            Submitting your due diligence application. Here’s an overview of the required application documents.
                        </li>
                        <li>
                            Fundraising, learning, and connecting as part of GoodRaising’s vibrant community if your application is approved.
                        </li>
                    </ul>
                </div>
            </div>
       </div>
    </section>
@endsection