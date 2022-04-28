---
@layout: form
name: Water Wells Form
title: Donate a water well
summary: Please complete this form to purchase your water well(s) If you need more info please contact Fahim Baqir.
slug: water-wells
visible: false
metadata:
    og:type: false
    robots: [none]
@form:
    name: water-wells-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Water Wells Form
            subject: New donation from the water wells form
    schema:
        Name: [string, required]
        Email: [email, required]
        MobilePhone: [string, required]
        NameonPlaque: [string, required]
        Town: [string, required]
        HandPumps: [string]
        SolarPowerWaterWells: [string]
        DigaWell: [string]
        CommunityBoreWells: [string]
    redirect: https://justgiving.com/wfwells
---
<!-- Form -->
<?=  partial('/forms/water-wells'); ?>
<!-- end Form -->