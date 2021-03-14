---
layout: form
name: Eye camp Form
title: Eye camp
summary: Please complete this form to donate to Well foundation Eye camp. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: eye-camp
visible: false
form:
    name: eye-camp-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Eye camp Form
            subject: New notification from the Well foundation Eye camp form
    schema:
        Name: [string, required]
        MobileNumber: [string, required]
        Email: [email, required]
        DonationAmount: [string]
        CataractOperation: [string]
    redirect: https://justgiving.com/wfeye20
    honeypot: well_786d3z11
---
<!-- Form -->
<?=  import('/partials/forms/eye-camp'); ?>
<!-- end Form -->