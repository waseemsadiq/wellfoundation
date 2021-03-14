---
layout: default
name: Food
title: Food Programme
summary: Over 500m children, throughout the World, are going to sleep every night without having had a decent meal that day. With your help, The Well foundation food programme aims to provide meals in 26 countries every 26 weeks
cover_img: images://food-cover.jpg
slug: food
modalCount: 1
---

    <!-- BEGIN HERO SECTION -->
    <?= import('/partials/page/hero',[
      'form' => 'food',
      'form_title' => 'Feed the World',
      'button_text' => 'Register now!',
      'button_colour' => 'green'
    ]); ?>
    <!-- HERO SECTION END -->

    <div class="relative px-8 py-10  border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0 hidden">
      <!-- Pricing Section -->
      <div id="pricing" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
          <h2 class="my-5 text-base   font-medium tracking-tight text-indigo-700 uppercase">A contribution that goes a long way</h2>
          <h3
              class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
               Over 100 people contributing</h3>
          <div class="relative lg:px-20">
            <p class="pr-0 mb-8 text-center text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">Although we think that £10 is just right for making a wholesome difference, you can set up a Direct Debit for more or less. The Sadaqah projects are an amazing opportunity for you to contribute towards a collective goal and leave a little legacy of change. You can even set up the sadaqah for your loved ones.</p>
            <p class="pr-0 mb-8 text-center text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">This is an amazing opportunity to Build a well, Give someone Education and donate a livelihood project every year. Providing you with the rewards for the rest of your life.</p>
            <p class="pr-0 mb-8 text-center text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">Update reports are emailed every 4 months.</p>
          </div>
          <h3 class="relative mb-2 text-lg font-black leading-tight text-gray-900 sm:text-2xl xl:mb-4">£10 per month, where does it go?</h3>
          
          <div class="flex flex-wrap container mt-8 h-full max-w-7xl mx-auto lg:px-20">

            <div class="p-4 md:w-1/3 w-full">
              <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                <h2 class="text-sm tracking-widest title-font mb-1 font-medium upercase">Water Wells</h2>
                <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">
                  <span>&pound;3.00</span>
                  <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                </h1>

                <p class="flex items-center text-gray-600 mb-2">
                  <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Building deep bore Wells
                </p>
              </div>
            </div>

            <div class="p-4 md:w-2/3 w-full">
              <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                <h2 class="text-sm tracking-widest title-font mb-1 font-medium upercase">Monthly blessings livelihoods projects</h2>
                <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">
                  <span>&pound;7.00</span>
                  <span class="text-lg ml-1 font-normal text-gray-500">/mo</span>
                </h1>
                <div class="flex flex-wrap">
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Sewing machines
                  </p>
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Planting olive trees
                  </p>
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Providing fishing equipment
                  </p>
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Building women's centres etc
                  </p>
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Building Classrooms in Africa
                  </p>
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Building Classrooms in Pakistan
                  </p>
                  <p class="flex items-center text-gray-600 mb-2 w-full md:w-1/2">
                    <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                        <path d="M20 6L9 17l-5-5"></path>
                      </svg>
                    </span>Building small Mosques etc
                  </p>
                </div>
              </div>
            </div>

        </div>

      </div>
      <!-- End Pricing Section -->

    </div>

    <!-- Start Testimonials -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- End Testimonials-->
