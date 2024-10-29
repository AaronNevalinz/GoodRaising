@extends('layout.layout')
@section('content')
    <section>
        <div class="bg-accent flex items-center justify-center flex-col">
            <div class="max-w-3xl text-center space-y-8 py-16 text-lg text-slate-300">
                <h1 class="text-5xl text-secondary uppercase">Pathway to GlobalGiving</h1>
                <p class="font-semibold">Thank you for your interest in partnering with GlobalGiving!</p>
                <p>
                    Pathway to GlobalGiving is a community learning experience that welcomes potential nonprofit partners to GlobalGiving and helps them get fundraising-ready! Ready to get started? The first step: Complete our interest survey.
                </p>
                <p>
                    Please note: The interest survey is not an application to join GlobalGiving. GlobalGiving invites a small cohort of interested nonprofits to participate in Pathway on a bi-monthly basis. If we’re a good fit, you’ll hear from us via email.
                </p>
                <div>
                    <a href="{{route('application')}}" class="bg-secondary px-4 py-2 uppercase font-semibold text-gray-200">Start your pathway to GlobalGiving</a>
                </div>
            </div>
        </div>

        <div class="max-w-5xl mx-auto my-16">
            <div class="text-center space-y-4 mb-4">
                <h1 class="text-3xl font-medium">The Path way experience</h1>
                <p class="text-lg text-[#333]">Pathway to GlobalGiving is a community learning experience designed by GlobalGiving nonprofit partners to help potential GlobalGiving nonprofit partners:</p>
            </div>

            <div class="flex items-center gap-10 my-8 text-[#333]">
                <div class="flex flex-col text-center items-center gap-5 text-lg">
                    <img src="https://www.globalgiving.org/img/application/icon-fundraising.svg" class="w-" alt="">
                    <p>
                        Decide whether GlobalGiving is the right fundraising partner for you
                    </p>
                </div>
                <div class="flex flex-col text-center items-center gap-5 text-lg">
                    <img src="https://www.globalgiving.org/img/application/icon-partner.svg" alt="">
                    <p>
                        Get fundraising-ready with self-paced tools tailored to you
                    </p>
                </div>
                <div class="flex flex-col text-center items-center gap-5 text-lg">
                    <img src="https://www.globalgiving.org/img/application/icon-connect.svg" alt="">
                    <p>
                        Connect with amazing change leaders on your journey
                    </p>
                </div>
            </div>

            <div>
                <h2 class="text-lg font-medium mb-2">The experience includes</h2>
                <ul class="list-disc flex flex-col gap-3 text-[#333]">
                    <li>
                        Completing a digital Fundraising-Ready Workbook designed to help you start outlining your fundraising strategy. Submitting your workbook is required to access the due diligence application.
                    </li>
                    <li>
                        Submitting your due diligence application. Here’s an overview of the required application documents.
                    </li>
                    <li>
                        Fundraising, learning, and connecting as part of GlobalGiving’s vibrant community if your application is approved.
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection