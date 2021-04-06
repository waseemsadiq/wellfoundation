---
route: justgiving/[digit:page]?
layout: default
summary: Just Giving test page
image: images://food-cover.jpg
visible: false
collection:
    model: justgiving
    config:
        url: https://api.justgiving.com/c529958f/v1/account/fahim.baqir@wellfoundation.org.uk/pages?charityid=187701
---
<? 
	//var_dump(count(collection()));return;
	//var_dump($event); return; 
?>
    <div class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:py-40 xl:px-0">
      <!-- JustGiving Projects -->
      <div id="countries" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
          <h2 class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
          	Our JustGiving.com projects
          </h2>
          <div class="flex px-5 py-24">
            <ul>
				<? foreach(collection() as $event): ?>
				    <li>
						<a href="https://justgiving.com/fundraising/<?= strtolower($event->pageShortName) ?>" rel="nofollow noreferrer" target="_blank">
							<?= $event->eventName ?>
						</a>
				    	<pre style="display:none;">
							<? 
								//var_dump(count($event))
								//var_dump($event); return; 
							?>
						</pre>
					</li>
				<? endforeach ?>
				</ul>
          </div>
      </div>
      <!-- End JustGiving Projects -->

    </div>

