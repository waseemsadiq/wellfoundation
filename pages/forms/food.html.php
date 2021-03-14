---
layout: form
name: Food Form
title: Feed the World
summary: Please complete this form to register as a fundraiser for The Well Foundation's food programme. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: food
visible: false
metadata:
    og:type: false
    robots: none
form:
    name: food-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Food Programme Form
            subject: New notification from the Well foundation Food Programme form
    schema:
        Name: [string, required]
        MobileNumber: [string, required]
        Town: [string, required]
    redirect: thank-you
    honeypot: well_786d3z18
---
<!-- Form -->
<?=  import('/partials/forms/food'); ?>
<!-- end Form -->