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
        identity_key: slug


#        url: https://api.justgiving.com/c529958f/v1/charity/187701
---

<?// foreach(collection()->get('charity')['categories']['a:string'] as $category): ?>
	<?// var_dump($category) ?>
<?// endforeach ?>

<? var_dump(collection()) ?>

<a 
	href="https://link.staging.justgiving.com/v1/charity/donate/charityId/187701?donationValue=25&currency=GBP&exiturl=http%3A%2F%2Fwww.wellfoundation.ork.uk?jgDonationId=JUSTGIVING-DONATION-ID&reference=demobutton" 
	class="
		button 
		<?= (isset($button_colour)) ? 'bg-'.$button_colour.'-600' : 'bg-indigo-600' ?> 
		<?= (isset($button_colour)) ? 'hover:bg-'.$button_colour.'-400' : 'hover:bg-indigo-400' ?>">
	<?= (isset($button_text)) ? $button_text : 'Donate Today!' ?>
</a>
