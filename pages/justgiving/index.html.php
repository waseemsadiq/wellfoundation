---
layout: default
summary: Just Giving test page 
image: images://food-cover.jpg
visible: false
collection:
    model: webservice
    config:
#        url: https://api.justgiving.com/c529958f/v1/charity/187701

        url: https://api.justgiving.com/c529958f/v1/account/fahim.baqir@wellfoundation.org.uk/pages?charityid=187701
---

<?// foreach(collection()->get('charity')['categories']['a:string'] as $category): ?>
	<?// var_dump($category) ?>
<?// endforeach ?>

<? var_dump(collection()->get('fundraisingPages')['fundraisingPage']) ?>