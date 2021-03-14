---
layout: index
---
<?
$summary = str_replace('Fahim Baqir', '<a href="mailto:'.config()->site->contact_email.'" class="text-indigo-700 underline">Fahim Baqir</a>', $summary);
?>
<body class="overflow-x-hidden antialiased">
    <!-- main-content -->
    <div class="w-full bg-gray-100">
		<section class="flex flex-col items-center min-h-screen md:flex-row">
			<div class="container mx-auto">
				<div class="flex justify-center px-2 py-6 ">
					<div class="flex flex-col lg:flex-row w-full rounded-lg xl:w-3/4 lg:w-11/12 lg:shadow-xl ">
						<div class="relative w-full h-auto bg-white bg-cover border-b lg:border-r rounded-l-lg lg:w-1/4">
							<div class="relative z-10 m-12 text-left">
								<a class="mb-4 font-medium text-gray-900 title-font md:mb-10" href="/">
									<?= import('/partials/logos/wellfoundation'); ?>
								</a>
								<h2 class="mt-12 mb-2 text-2xl font-semibold tracking-tighter text-black sm:text-3xl title-font">
									<?= $title; ?>
								</h2>
								<div class="w-full mb-8 text-sm leading-relaxed text-gray-900 sm:md:w-3/3 lg:text-1xl">
									<?= $summary; ?>
								</div>
							</div>
						</div>

						<div class="w-full px-8 py-24 bg-white border-gray-100 rounded-lg lg:w-3/4 lg:py-4 lg:rounded-l-none s">
							<div class="relative z-10 text-left ">
								<!-- Form -->
        						<ktml:content>
								<!-- end Form -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    </div>
    <!-- /main-content -->
</body>