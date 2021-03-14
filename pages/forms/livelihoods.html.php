---
layout: form
name: Livelihoods Form
title: Livelihoods
summary: Please complete this form to donate to Well foundation Livelihoods. If you need more info please contact Fahim Baqir.
slug: livelihoods
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: livelihoods-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Livelihoods Form
            subject: New notification from the Well foundation Livelihoods form
    schema:
        Name: [string, required]
        PhoneNumber: [string, required]
        Town: [string, required]
        FeedtheWorld: [string]
        OrphansEducation: [string]
        GettingBackintoWork: [string]
        Health: [string]
        Qurans: [string]
    redirect: https://www.justgiving.com/welllivelihoods
    honeypot: well_786d3z10
---
<!-- Form -->
<?=  import('/partials/forms/livelihoods'); ?>
<!-- end Form -->