---
layout: default
name: Education
title: Education provides a path out of the poverty life-cycle.
summary: Many children come from families who struggle to feed themselves, they are forced to sell land and livestock to buy food. They have to cut back on education and often children are forced to work instead of going to school.We work with organisations to help provide safe environments for children’s free education, schools are built from scratch or buildings repaired. Children are provided with equipment and resources to give them the very best chance to succeed.
cover_img: images://education-cover.jpg
slug: education
modalCount: 1
---

    <!-- BEGIN HERO SECTION -->
    <?= import('/partials/page/hero',[
      'form' => 'education',
      'form_title' => 'Please complete all sections',
      'button_colour' => 'green'
    ]); ?>
    <!-- HERO SECTION END -->

    <!-- Pricing Section -->
    <div class="relative px-8 py-10  border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">

        <div id="education-projects" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
            <h2 class="my-5 text-base   font-medium tracking-tight text-indigo-700 uppercase">A path out of poverty.</h2>
            <div class="relative lg:px-20">
              <p class="pr-0 mb-8 text-center text-base   text-gray-600 md:text-lg xl:text-xl lg:pr-20">
                  At some stage in our lives we were afforded the opportunity by someone to get ahead in life. People struggling to make it are just looking for their chance and a helping hand. Our Education projects give children that opportunity and help restore self-confidence and pride.
              </p>
            </div>
            <h3 class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
                 Projects delivered</h3>
            <div class="flex flex-wrap -m-4">
              <div class="p-4 md:w-1/2 w-full">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                  <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">
                    Malawi
                  </h1>
                  <? foreach (data('education')->malawi as $item) : ?>
                    <div class="flex items-start text-gray-600 mb-2">
                        <p class="w-4 h-4 mr-2 mt-1 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </p>
                        <p><?= $item->title ?><?= ($item->summary) ? '<span class="block text-sm text-gray-600 pr-8">'. $item->summary . '</span>' : '' ?></p>
                    </div>
                  <? endforeach ?>
                </div>
              </div>
              <div class="p-4 md:w-1/2 w-full">
                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                  <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">
                    Pakistan
                  </h1>
                  <? foreach (data('education')->pakistan as $item) : ?>
                    <div class="flex items-start text-gray-600 mb-2">
                        <p class="w-4 h-4 mr-2 mt-1 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                          </svg>
                        </p>
                        <p><?= $item->title ?></p>
                    </div>
                  <? endforeach ?>
                </div>
              </div>
            </div>
          </div>

        </div>

    </div>
    <!-- End Pricing Section -->

    <!-- Start Testimonials -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- End Testimonials-->
