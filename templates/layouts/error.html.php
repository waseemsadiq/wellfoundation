---
layout: index
---
<!-- component -->
<style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
<div class="min-w-screen min-h-screen bg-gray-200 flex items-center p-5 lg:p-20 overflow-hidden relative">
    <div class="flex-1 min-h-full w-full max-w-6xl m-auto rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
        <div class="w-full md:w-1/2">
            <div class="mb-10 lg:mb-20">
               <?= partial('/logos/wellfoundation'); ?>
            </div>
            <div class="mb-10 md:mb-20 text-gray-600 font-light">
                <h1 class="font-black uppercase text-3xl lg:text-5xl mb-10">Sorry! <span class="hidden xl:block">We couldn't find this page</span></h1>
                <p>The page you are looking for might have been removed, had its name changed or it might be temporarily unavailable.</p>
                <p>Don't worry, you can find plenty of other things on <a href="/" class="text-indigo-500 underline">our homepage</a>.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 text-center">
            <img class="w-full object-cover object-fit" src="theme://images/error.png?auto=compress&q=10&w=650"/>
        </div>
    </div>
    <div class="w-64 md:w-96 h-96 md:h-full bg-blue-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform"></div>
    <div class="w-96 h-full bg-green-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform"></div>
</div>