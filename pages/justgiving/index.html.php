---
route: justgiving/[digit:page]?
layout: default
summary: Just Giving test page
image: images://food-cover.jpg
visible: false
#collection:
#    model: justgiving
#    config:
#        url: https://api.justgiving.com/c529958f/v1/account/fahim.baqir@wellfoundation.org.uk/pages?charityid=187701
collection:
    model: justgiving
    state:
        jg_appid: data://config/justgiving[appid]
        jg_email: data://config/justgiving[email]
        jg_charityid: data://config/justgiving[charityid]
---
<? 
	//var_dump(count(collection()));return;
	//var_dump($event); return; 
?>

<style>
    @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css")
</style>

<div class="relative px-8 py-10 border-t border-gray-200 md:py-16 lg:py-24 xl:px-0">
	
	<div id="countries" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
		<h2 class="w-full max-w-4xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8">
			Our JustGiving.com projects
		</h2>
		<div class="grid grid-cols-3 gap-8 py-24">

			<article class="max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
			    <img class="object-cover object-center w-full h-56" src="<?= $image ?>" alt="avatar">
			    
			    <div class="flex items-center px-6 py-3 bg-green-500">
			        <h1 class="mx-3 text-lg font-semibold text-white">Want to fundraise with us?</h1>
			    </div>

			    <div class="px-6 py-4">
			        
			        <div class="text-gray-800 dark:text-white">
			            <p>You can fundraise with us, and help us install more water wells all around the World, just follw this link:</p>
			        </div>

			        <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
			            <svg class="w-6 h-6 fill-current" viewBox="0 0 98 92" xmlns="http://www.w3.org/2000/svg">
			                <g transform="matrix(1,0,0,1,948,-955.1)">
			                    <path d="M-893.6,1038.6L-895.5,1033.2C-896.9,1035.5 -898.5,1037.6 -900.2,1039.6C-900.3,1039.8 -900.5,1039.9 -900.6,1040.1C-901.3,1040.1 -902,1040.2 -902.7,1040.2L-904.8,1040.2C-904.9,1040 -905.1,1039.9 -905.2,1039.7C-909.3,1035 -912.7,1029.3 -915,1022.9C-911,1022.1 -906.9,1021.7 -902.6,1021.7C-901.5,1021.7 -900.4,1021.7 -899.3,1021.8L-901.2,1016.2L-902.5,1016.2C-907.4,1016.2 -912.1,1016.7 -916.6,1017.6C-917.8,1013.1 -918.6,1008.3 -918.8,1003.2L-905.7,1003.2L-906.6,1000.6C-906.9,999.7 -907.1,998.7 -907.1,997.7L-919,997.7C-918.8,992.7 -918.1,987.9 -916.8,983.3C-912.3,984.2 -907.6,984.7 -902.7,984.7C-897.9,984.7 -893.1,984.2 -888.6,983.3C-887.7,986.5 -887.1,989.9 -886.7,993.4L-881,995.4C-881.3,990.8 -882.1,986.3 -883.2,982C-878.9,980.8 -874.8,979.1 -871,977.1C-870.9,977 -870.7,977 -870.6,976.9C-866.3,982.8 -863.5,989.9 -863,997.7L-874.3,997.7L-858.2,1003.3C-858,1003.4 -857.7,1003.5 -857.5,1003.6C-857.4,1002.6 -857.4,1001.5 -857.4,1000.4C-857.4,975.4 -877.7,955.1 -902.7,955.1C-927.6,955.1 -948,975.4 -948,1000.4C-948,1025.3 -927.7,1045.6 -902.7,1045.6C-897.9,1045.6 -893.2,1044.8 -888.9,1043.4C-891,1042.6 -892.8,1040.8 -893.6,1038.6ZM-874.4,972.6C-874.5,972.7 -874.7,972.8 -874.8,972.8C-878,974.4 -881.4,975.7 -885,976.7C-886.9,971.5 -889.3,966.8 -892.3,962.6C-892.4,962.4 -892.6,962.2 -892.7,962C-885.6,963.8 -879.4,967.6 -874.4,972.6ZM-904.8,960.8C-904.1,960.8 -903.4,960.7 -902.7,960.7C-902,960.7 -901.3,960.7 -900.6,960.8C-900.5,960.9 -900.3,961.1 -900.2,961.3C-896.1,966 -892.7,971.7 -890.4,978.1C-894.4,978.9 -898.5,979.3 -902.8,979.3C-907.1,979.3 -911.2,978.9 -915.2,978.1C-912.8,971.7 -909.5,966 -905.4,961.3C-905.1,961.1 -905,960.9 -904.8,960.8ZM-912.8,962C-912.9,962.2 -913.1,962.4 -913.2,962.6C-916.2,966.8 -918.6,971.6 -920.5,976.8C-924.1,975.8 -927.5,974.5 -930.7,972.9C-930.8,972.8 -931,972.8 -931.1,972.7C-926.1,967.6 -919.8,963.8 -912.8,962ZM-934.7,976.9C-934.6,977 -934.4,977 -934.3,977.1C-930.5,979.1 -926.4,980.7 -922.1,982C-923.4,987 -924.3,992.2 -924.4,997.7L-942.3,997.7C-941.8,989.9 -939,982.8 -934.7,976.9ZM-934.7,1023.9C-939,1018 -941.8,1010.9 -942.3,1003.2L-924.4,1003.2C-924.2,1008.6 -923.4,1013.9 -922.1,1018.9C-926.4,1020.1 -930.5,1021.8 -934.3,1023.8C-934.5,1023.7 -934.6,1023.8 -934.7,1023.9ZM-931.1,1028.2C-931,1028.1 -930.8,1028.1 -930.7,1028C-927.5,1026.4 -924.1,1025.1 -920.5,1024.1C-918.6,1029.3 -916.2,1034 -913.2,1038.3C-913.1,1038.5 -912.9,1038.7 -912.8,1038.9C-919.8,1036.9 -926.1,1033.2 -931.1,1028.2Z"/>
			                    <path d="M-850.6,1036L-869.2,1017.4L-860.1,1012.8C-858.6,1012 -858.7,1009.8 -860.3,1009.2L-898.3,996C-899.8,995.5 -901.3,996.9 -900.8,998.5L-887.6,1036.5C-887,1038.1 -884.8,1038.3 -884,1036.7L-879.4,1027.6L-860.8,1046.2C-860,1047 -858.8,1047 -858.1,1046.2L-850.6,1038.7C-849.8,1038 -849.8,1036.8 -850.6,1036Z"/>
			                </g>
			            </svg>
			            
			            <h2 class="px-2 text-sm"><a href="https://www.justgiving.com/" rel="nofollow noreferrer" target="_blank">www.justgiving.com/</a></h2>
			        </div>
			    </div>
			</article>

			<!-- JustGiving Projects -->
			<? foreach(collection() as $event): ?>
				<? if($event->pageStatus === 'Active'): ?>
					<?= import('/partials/fundraising/page-card',['event'=>$event]); ?>
				<? endif; ?>
			<? endforeach; ?>
			<!-- End JustGiving Projects -->

		</div>
	</div>
	
</div>

<pre style="display:none;">
<? 
	//var_dump(count($event))
	//var_dump($event); return; 
?>
</pre>