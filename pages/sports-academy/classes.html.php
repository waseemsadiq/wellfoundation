---
layout: default
name: Sports Academy
title: Sports Academy
summary: Please check this page regularly to see our weekly sports academy events.
slug: events
modalCount: 1
---
<style type="text/css">
/*<![CDATA[*/
.journal-scroll::-webkit-scrollbar {
  width: 4px;
  cursor: pointer;
}
.journal-scroll::-webkit-scrollbar-track {
  background-color: rgba(229, 231, 235, var(--bg-opacity));
  cursor: pointer;
}
.journal-scroll::-webkit-scrollbar-thumb {
  cursor: pointer;
  background-color: #a0aec0;
}
/*]]>*/
</style>

<!-- Well Foundation Sports Academy  -->
<section class="text-gray-700 body-font">
  <div class="container px-8 pt-48 pb-24 mx-auto lg:px-4">
      <div class="flex flex-wrap">

          <div class="px-8 py-6 lg:pl-24 lg:w-1/2 md:w-full">
            <h1 class="px-5 mt-2 text-3xl font-black leading-tight text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl mb-4 xl:mb-8">
              <?= $title; ?>
            </h1>
            <p class="mb-8 text-base text-gray-600 sm:text-lg xl:text-xl">
              <?= $summary; ?>
            </p>
            <p class="mb-0">
              <?= import('/partials/buttons/modal',[
                'form' => 'sports',
                'form_title' => 'Please complete all sections',
                'button_text'=>'Register your child with Well Sports Academy',
                'button_colour' => 'green'
              ]); ?>
            </p>
          </div>

          <div class="px-8 py-6 lg:pr-24 justify-center h-128 flex flex-col lg:w-1/2 md:w-full">
            <div class="bg-indigo-500 text-white text-base font-bold px-5 py-2 shadow border-b border-gray-300 rounded-t-lg">
              Well Foundation Sports Academy
            </div>

            <div class="w-full h-128 overflow-auto shadow bg-white rounded-b-lg journal-scroll">
              <table class="w-full">
                <tbody class="">

                  <? foreach(data('sports-academy/academy') as $academy) : ?>
                  <tr class="relative transform scale-100 text-sm py-1 border-b-2 border-blue-100 cursor-default">
                  <td class="pl-5 pr-3 whitespace-no-wrap">
                      <div class="text-gray-400">
                        <?= $academy->day ?>
                      </div>

                      <div>
                        <?= ($academy->time_from && $academy->time_to) ? $academy->time_from . '-' . $academy->time_to : 'Time TBC' ;?>
                      </div>
                  </td>

                  <td class="px-2 py-2 whitespace-no-wrap hidden xl:block">
                    <img class="w-20 h-20 object-cover rounded border-2 border-indigo-500" src="<?= $academy->image ?>">
                  </td>

                  <td class="px-2 py-2 whitespace-no-wrap">
                    <div class="leading-5 text-gray-500 font-bold">
                      <?= $academy->title ?>
                    </div>

                    <div class="leading-5 text-gray-900">
                      <span class="font-medium">Venue:</span> <?= $academy->venue ?>
                    </div>

                    <? if($academy->age_group_from || $academy->age_group_to) { ?>
                      <div class="leading-5 text-gray-900">
                        <span class="font-medium">Ages:</span> <?= ($academy->age_group_from && $academy->age_group_to) ? $academy->age_group_from. 'yrs - ' . $academy->age_group_to . 'yrs' : $academy->age_group_to ;?>
                      </div>
                    <? } ?>

                    <? if($academy->class_price) { ?>
                    <div class="leading-5 text-gray-900">
                      <span class="font-medium">Price:</span> &pound;<?= $academy->class_price ?> per class
                    </div>
                    <? } ?>

                    <? if($academy->contact_name) { ?>
                    <div class="leading-5 text-gray-800">
                      <span class="font-medium">Contact:</span> <?= $academy->contact_name ?> <?= $academy->contact_number ?>
                    </div>
                    <? } ?>
                  </td>
                </tr>
                <? endforeach ?>

                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
</section>
<!-- / Well Foundation Sports Academy  -->

<!-- Clubs & Governing Bodies  -->
<section class="mx-auto border-t border-gray-200">
    <div class="container px-5 mx-auto py-24 lg:px-24">
        <div class="flex flex-col w-full mb-12 text-left lg:text-center">
            <h1 class="mb-6 text-2xl font-semibold text-blue-800 title-font">
                Some of the clubs and 
                <br class="md:hidden">
                governing bodies we work with
            </h1>
        </div>
        <div class="grid grid-cols-3 gap-16 my-16 text-center lg:grid-cols-6">
            <div class="flex items-center justify-center ">
                <img src="images://sports/logos/sfa.png"
                    alt="SFA Logo" class="block object-contain h-32" >
            </div>
            <div class="flex items-center justify-center ">
                <img src="images://sports/logos/motherwellfc.png"
                    alt="Motherwell F.C. logo" class="block object-contain h-32" >
            </div>
            <div class="flex items-center justify-center ">
                <img src="images://sports/logos/rangersfc.png"
                    alt="Rangers logo" class="block object-contain h-32" >
            </div>
            <div class="flex items-center justify-center ">
                <img src="images://sports/logos/holytown-colts.jpg"
                    alt="Holytown Colts logo" class="block object-contain h-32" >
            </div>
            <div class="flex items-center justify-center ">
                <img src="images://sports/logos/mossend-boys.jpg"
                    alt="Mossend Boys' Club logo" class="block object-contain h-32" >
            </div>
            <div class="flex items-center justify-center ">
                <img src="images://sports/logos/north-lanarkshire-leisure.png"
                    alt="North Lanarkshire Leisure logo" class="block object-contain h-32" >
            </div>
        </div>
    </div>
</section>
<!-- / Clubs & Governing Bodies  -->

<!-- Well Foundation Soccer Academy  -->
<section class="text-gray-700 body-font border-t border-gray-200">
  <div class="container px-8 pt-24 pb-24 mx-auto lg:px-4">
      <div class="flex flex-wrap">

          <div class="px-8 py-6 lg:pl-24 lg:w-1/2 md:w-full">
            <h1 class="px-5 mt-2 text-3xl font-black leading-tight text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl mb-4 xl:mb-8">
              Well Foundation Soccer Academy
            </h1>
            <p class="mb-2 text-base text-gray-600">
              Well Foundation Children Protection number: 1329
            </p>
            <p class="mb-2 text-base text-gray-600">
              Please make sure children are dropped off indoors and picked up indoors
            </p>
            <p class="mb-8 text-base text-gray-600">
              Make sure your child is registered.
            </p>
            <p class="mb-0">
              <span id="here"></span>
              <script data-inline>var elem = document.querySelector('#button1');var here = document.querySelector('#here');var clone = elem.cloneNode(true);clone.id = 'button2';here.after(clone);</script>
            </p>
          </div>

          <div class="px-8 py-6 lg:pr-24 justify-center h-128 flex flex-col lg:w-1/2 md:w-full">
            <div class="bg-indigo-500 text-white text-base font-bold px-5 py-2 shadow border-b border-gray-300 rounded-t-lg">
              Well Foundation Soccer Academy
            </div>

            <div class="w-full h-128 overflow-auto shadow bg-white rounded-b-lg journal-scroll">
              <table class="w-full">
                <tbody class="">

                <? foreach(data('sports-academy/soccer-academies') as $academy) : ?>
                <tr class="relative transform scale-100 text-sm py-1 border-b-2 border-blue-100 cursor-default">
                  <td class="pl-5 pr-3 py-2 whitespace-no-wrap align-top">
                      <div class="text-gray-400">
                        <?= $academy->day ?>
                      </div>

                      <div>
                        <?= ($academy->time_from && $academy->time_to) ? $academy->time_from . '-' . $academy->time_to : 'Time TBC' ;?>
                      </div>
                  </td>

                  <td class="px-2 py-2 whitespace-no-wrap">
                    <div class="leading-5 text-gray-500 font-bold">
                      <?= $academy->title ?>
                    </div>

                    <div class="leading-5 text-gray-900">
                      <span class="font-medium">Venue:</span> <?= $academy->venue ?>
                    </div>

                    <? if($academy->age_group_from || $academy->age_group_to) { ?>
                      <div class="leading-5 text-gray-900">
                        <span class="font-medium">Ages:</span> <?= ($academy->age_group_from && $academy->age_group_to) ? $academy->age_group_from. 'yrs - ' . $academy->age_group_to . 'yrs' : $academy->age_group_to ;?>
                      </div>
                    <? } ?>

                    <div class="leading-5 text-gray-900">
                      <?= $academy->class_desc ?>
                    </div>
                  </td>
                </tr>
                <? endforeach ?>

                </tbody>
              </table>
            </div>
          </div>
      </div>
  </div>
</section>
<!-- / Well Foundation Soccer Academy  -->
