---
layout: default
name: Sports
title: Providing access to sports & activities
summary: The Well Foundation Community Sports hub and Sports academy has been incredibly successful in providing access which is often lacking to sports and activities to children within the BME community. The collaboration with youth football teams allows integration of children from all backgrounds to enjoy sport in safe and professional environments.
image: images://sports-cover.jpg
slug: sports-academy
modalCount: 1
---

    <!-- BEGIN HERO SECTION -->
    <?= import('/partials/features/hero',[
      'button_url'=>route('sports-academy/classes'),
      'button_text'=>'View all sports and activities',
    ]); ?>
    <!-- HERO SECTION END -->

    <div class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 lg:pb-40 lg:px-20 xl:py-40 xl:px-20">

      <div class="relative pb-20 lg:pb-40 lg:px-20">
          <p class="px-8 mb-6 text-base   text-gray-600 md:text-lg xl:text-xl lg:px-20">The Well Foundation works with a number of organisations including Scottish Football Association, Motherwell FC, The Rangers FC and The Princes' Trust, ensuring opportunities for sport and participation are made available to everyone regardless of their background or abilities.</p>
          <p class="mb-6 px-8 lg:px-20">
            <?= import('/partials/buttons/modal',[
              'type' => 'form',
              'form' => 'sports',
              'form_title' => 'Please complete all sections',
              'button_text' => 'Register for our sports and activities',
              'button_colour' => 'green',
              'modal_window' => 1
            ]); ?>
          </p>

          <h3 class="relative mt-16 mb-6 text-lg font-black leading-tight text-gray-900 sm:text-2xl px-8 lg:px-20">The Well Foundation's sports academy currently provides:</h3>

          <div class="container px-8 lg:px-20 projects-list">
              <? foreach (data('projects')->sports as $item) : ?>
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

          <p class="mt-16 mb-6 px-8 lg:px-20">
            <?= import('/partials/buttons/primary',[
              'button_url'=>route('sports-academy/classes'),
              'button_text'=>'View all sports and activities',
            ]); ?>
          </p>

        </div>
    </div>

    <div class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 lg:pb-40 lg:px-20 xl:py-40 xl:px-20">
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-16">
            <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Rangers FC training kit project</h3>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base  ">Well Foundation are working with Rangers FC delivering kit and training equipment, to countries in Asia and Africa, helping those communities with much needed sports equipment.</p>
          </div>

          <?=  import('/partials/images/random', [
            'folder' => 'images://sports/rangers-kits',
            'layout' => 'grid',
            'shuffle' => true,
            'limit' => 8,
            'columns' => 4,
          ]); ?>

          <div class="flex flex-col text-center w-full mt-24 mb-8">
            <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Cycle club</h3>
          </div>

          <?=  import('/partials/images/random', [
            'folder' => 'images://sports/cycle-club',
            'layout' => 'grid',
            'shuffle' => true,
            'limit' => 4,
            'columns' => 4,
          ]); ?>

          <div class="flex flex-col text-center w-full mt-24 mb-8">
            <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Walking club</h3>
          </div>

          <?=  import('/partials/images/random', [
            'folder' => 'images://sports/walking-club',
            'layout' => 'grid',
            'shuffle' => true,
            'limit' => 4,
            'columns' => 4,
          ]); ?>

          <p class="mt-24 text-center">
            <span id="here"></span>
          </p>
          <script data-inline>var elem = document.querySelector('#button1');var here = document.querySelector('#here');var clone = elem.cloneNode(true);clone.id = 'button2';here.after(clone);</script>

        </div>
      </section>
    </div>


    
    <!-- Start Testimonials -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- End Testimonials-->
