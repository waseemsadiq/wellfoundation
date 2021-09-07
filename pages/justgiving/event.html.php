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
	//var_dump($content);return;
	$button_text = 'Donate now towards our ' . str_replace('Project', '', $content->title) . ' project'
?>


<article class="px-4 py-24 mx-auto max-w-7xl" itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="w-full mx-auto mb-6 text-left md:w-3/4 lg:w-1/2">
		
		<h1 class="w-full max-w-4xl px-5 px-8 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0 mb-8" itemprop="headline" title="<?= isset($content->description) ? $content->description : ''; ?>">
			<?= $content->title ?> <?= (JDEBUG) ? $content->pageId : '' ; ?>
		</h1>

		<img src="<?= $content->image->absoluteUrl ?>" class="object-cover w-full h-64 bg-center rounded-lg" alt="<?= $content->title ?>" />
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
