---
@layout: default
name: Food
title: Food Programme
summary: Over 500m children, throughout the World, are going to sleep every night without having had a decent meal that day. With your help, The Well Foundation food programme aims to provide meals in 26 countries every 26 weeks
image: food-cover.jpg
slug: food
---

    <!-- BEGIN HERO SECTION -->
    <?= partial('/features/hero',[
      'title' => $title,
      'summary' => $summary,
      'slug' => $slug,
      'image' => $image,
      'form' => 'food',
      'form_title' => 'Feed the World',
      'button_text' => 'Register now!',
      'button_colour' => 'green',
    ]); ?>
    <!-- HERO SECTION END -->

    <div class="relative px-8 py-10  border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
      <!-- Countries Section -->
      <div id="countries" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
          <h2 class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
               Will you help us provide meals in these 26 countries every 26 weeks?</h2>
          <div class="flex px-5 py-24 md:flex-row flex-col items-center">
            <?=  import('/partials/images/images-data-grid', [
                'data' => 'food-countries',
                'columns' => 4
            ]); ?>
          </div>
          <div class="text-center">
            <a href="/forms/food" class="relative self-start inline-block w-auto px-8 py-4 mx-auto mt-0 text-base font-bold text-white bg-green-600 hover:bg-green-400 border-t border-gray-200 rounded-md sm:mt-1 lg:mx-0 fold-bold focus:ring shadow-lg hover:shadow-none transition-all duration-300">Register now!</a>
          </div>
      </div>
      <!-- End Countries Section -->

    </div>

    <!-- Start Testimonials -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- End Testimonials-->
