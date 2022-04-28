---
@layout: default
name: Mosques
title: Amazing sadaqah for you or your loved ones
summary: Once built, mosques offer all Namazes, Children’s Hifiz, Islamic Education, Trawia and Jumma
img: images://prayer-cover.jpg
slug: mosques
modalCount: 1
---

    <!-- BEGIN HERO SECTION -->
    <?= partial('/features/hero'); ?>
    <!-- HERO SECTION END -->

    <div class="relative px-8 py-10  border-t border-gray-200 xl:px-0">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 aspect-w-16 aspect-h-9">
                <video autoplay playsinline style="pointer-events: none;">
                    <source src="images://mosqueproject21.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video> 
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Pakistan Mosques are built in 
                    <br class="hidden lg:inline-block">Layyah area or Sindh
                </h1>
                <p class="mb-8 text-base   text-gray-600 md:text-lg xl:text-xl">Mosques are around the following size:</p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                    </span>Hall: 22x15
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                    </span>Veranda: 22x20
                </p>
                <p class="flex items-center text-gray-600 mb-6">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                    </span>Sahin: 22x20
                </p>
                <p class="pr-0 mb-8 text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">Please follow this link to:</p>
                <div class="flex justify-center">
                    <?= partial('/buttons/modal',[
                      'form' => 'education',
                      'form_title' => 'Please complete all sections',
                      'button_text' => 'Build a mosque or request more information',
                      'button_colour' => 'green'
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Testimonials -->
    <?= partial('/features/testimonials'); ?>
    <!-- End Testimonials-->
