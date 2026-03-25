---
@layout: default
name: About The Well Foundation
title: We are The Well Foundation
sub_title: Established December 2009
summary: Our primary aim is to raise money to install hand pumps, deep bore wells and establish health & sanitation programmes to provide safe, clean drinking Water for all. From our base in Bellshill, a small town in Scotland, we've raised hundreds of thousands of pounds to help those less fortunate around the world. The charity's running costs are in the met by the charity's board, core team of volunteers and a proportion of the gift aid that we collect.
image: about-well-cover.jpg
visible: false
@route: /about-well-foundation
slug: about
---

    <!-- BEGIN HERO SECTION -->
    <?= partial('/features/hero', [
        'title' => $title, 
        'summary' => $summary, 
        'slug' => $slug, 
        'image' => $image
    ]); ?>
    <!-- HERO SECTION END -->
    

    <!-- Start Testimonials -->
    <?= import('/partials/features/testimonials'); ?>
    <!-- End Testimonials-->
