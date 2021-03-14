---
layout: form
name: Humanitarian Cup Form
title: Humanitarian Cup Registration
summary: Please complete this form to register your team. If you need more info please contact Fahim Baqir.
slug: humanitarian-cup
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: humanitarian-cup-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Humanitarian Cup Registration Form
            subject: New registration from the humanitarian cup form
    schema:
        TeamName: [string, required]
        Player1: [string, required]
        Player2: [string, required]
        Player3: [string, required]
        Player4: [string, required]
        Player5: [string, required]
        Player6: [string, required]
        Player7: [string]
        FullName: [string, required]
        PhoneNumber: [string, required]
        Email: [email, required]
    redirect: thank-you
    honeypot: well_786d3z05
---
<!-- Form -->
<?=  import('/partials/forms/humanitarian-cup'); ?>
<!-- end Form -->