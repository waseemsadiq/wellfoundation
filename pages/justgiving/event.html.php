---
route: justgiving/[:slug]
layout: default
collection:
    extend: justgiving
metadata:
    'og:type': article
visible: false
jg_appid: data://config/justgiving[appid]
---
<? 
	$jgpage = collection(); 
	$content = data('https://api.justgiving.com/'.$jg_appid.'/v1/fundraising/pages/'.$jgpage->pageShortName)->find('fundraisingPage');
	$images = collection()->images['image'];
	//var_dump($content);return;
	$button_text = 'Donate now towards our ' . str_replace('Project', '', $content->title) . ' project'
?>


<article class="px-4 py-24 mx-auto max-w-7xl" itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="w-full mx-auto mb-6 text-left md:w-3/4 lg:w-1/2">
		
		<h1 class="w-full max-w-4xl px-5 px-8 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8" itemprop="headline" title="<?= isset($content->description) ? $content->description : ''; ?>">
			<?= $content->title ?> <?= (JDEBUG) ? $content->pageId : '' ; ?>
		</h1>

		<img src="<?= $content->image->absoluteUrl ?>" class="object-cover w-full h-64 bg-center rounded-lg" alt="<?= $content->title ?>" />
		<? 
			if(is_array($images) && isset($images[0])):
		?>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 md:gap-6 xl:gap-8 my-4 md:my-8">
            <!-- image - start -->
            <? 
                foreach ($images as $image): 
                    if(is_array($image) && isset($image['absoluteUrl'])):
            ?>
            <a href="#" class="group h-24 flex items-end bg-gray-100 overflow-hidden rounded-lg shadow-lg relative">
                <img class="w-full h-full object-cover object-center absolute inset-0 transform group-hover:scale-110 transition duration-200" loading="lazy" src="<?= $image['absoluteUrl']; ?>" alt="avatar">
                <div class="bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50 absolute inset-0 pointer-events-none"></div>
            </a>
            <?
                    endif;
                endforeach;
            ?>
            <!-- image - end -->
        </div>
        <? endif; ?>
		<p class="mt-6 mb-2 text-xs font-semibold tracking-wider uppercase text-gray-700 dark:text-gray-200">
			<?= $content->currencySymbol; ?><?= number_format($content->grandTotalRaisedExcludingGiftAid); ?> of <?= $content->currencySymbol; ?> <?= number_format($content->fundraisingTarget); ?> (<?= $content->totalRaisedPercentageOfFundraisingTarget; ?>&percnt;) of target already donated!
		</p>
	</div>

	<div class="w-full mx-auto prose md:w-3/4 lg:w-1/2">
		<?= str_replace('<br/>', '', preg_replace('/<div .*?>(.*?)<\/div>/','<p>$1</p>',$content->story)); // remove the <br /> and replace <div></div> with <p></p> tags from justgiving's content ?>
	</div>

	<div class="w-full mx-auto md:w-3/4 lg:w-1/2">

		<?= import('/partials/buttons/primary',[
			'button_text' 	=> $button_text,
			'button_url' 	=> 'https://justgiving.com/fundraising/' . strtolower($content->pageShortName),
			'button_class'	=> 'mt-8',
        ]); ?> 
	</div>

</article>


<!-- BEGIN HERO SECTION -->
<?
/*
= import('/partials/features/hero',[
  'title' 		=> $content->title,
  'hero_image'	=> $content->image->absoluteUrl,
  'summary' 	=> $content->story,
  'button_url' 	=> 'https://justgiving.com/fundraising/' . strtolower($content->pageShortName),
  'button_class'=> 'mt-8',
  'image' 		=> 'images://food-cover.jpg'
]); 
*/
?>
<!-- HERO SECTION END -->
