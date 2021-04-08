---
layout: form
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
    redirect: https://link.justgiving.com/v1/fundraisingpage/donate/pageid/{PageId}?amount={Amount}&reference={Email}&ExitUrl=https%3A%2F%2Fwww.wellfoundation.org.uk%2F2health-and-livelihoods
    schema:
        Name: [string, required]
        MobileNumber: [string, required]
        Email: [email, required]
        Amount: [string, required]
        CataractOperation: [string, required]
        PageId: [string, required]
    honeypot: well_786d3z11
---
<!-- Form -->
<?=  import('/partials/forms/eye-camp'); ?>
<!-- end Form -->