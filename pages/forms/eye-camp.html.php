---
@layout: form
name: Eye camp Form
title: Eye camp
summary: Please complete this form to donate to Well foundation Eye camp. If you need more info please contact Fahim Baqir.
slug: eye-camp
visible: false
metadata:
    og:type: false
    robots: [none]
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
        CataractOperation: [string, required]
    redirect: https://justgiving.com/wfeye21
    honeypot: well_786d3z11
---
<!-- Form -->
<?=  partial('/forms/eye-camp'); ?>
<!-- end Form -->