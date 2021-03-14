---
layout: form
name: Well foundation Hoodies Form
title: Well foundation Hoodies
summary: Please complete this form to request your Well foundation Hoodies. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: hoodies
visible: false
metadata:
    og:type: false
    robots: none
form:
    name: hoodies-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Hoodies Form
            subject: New request from the Well foundation Hoodies form
    schema:
        Name: [string, required]
        Address: [string, required]
        Addressline2: [string]
        TownCity: [string, required]
        Postcode: [string, required]
        MobileNumber: [string, required]
        Email: [email, required]
        Size: [string, required]
    redirect: thank-you
    honeypot: well_786d3z08
---
<!-- Form -->
<?=  import('/partials/forms/hoodies'); ?>
<!-- end Form -->