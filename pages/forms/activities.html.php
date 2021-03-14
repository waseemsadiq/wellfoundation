---
layout: form
name: Activities Form
title: Activities
summary: Please complete this form to request your Well foundation Activities. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: activities
visible: false
metadata:
    og:type: false
    robots: [noindex, nofollow]
form:
    name: activities-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Activities Form
            subject: New request from the Well foundation Activities form
    schema:
        Name: [string, required]
        Email: [email, required]
        MobilePhoneNumber: [string, required]
        Postcode: [string, required]
        Signmeupto: [string, required]
        DoyouNeedaTshirt: [string, required]
    redirect: thank-you
    honeypot: well_786d3z09
---
<!-- Form -->
<?=  import('/partials/forms/activities'); ?>
<!-- end Form -->