---
layout: form
name: Outdoor Club Form
title: Outdoor Club
summary: Please complete this form to register your interest in the Well foundation's Outdoor Club. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: outdoor-club
visible: false
form:
    name: outdoor-club-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Outdoor Club Form
            subject: New notification from the Well foundation Outdoor Club form
    schema:
        Name: [string, required]
        Address: [string, required]
        Addressline2: [string]
        TownCity: [string, required]
        Postcode: [string, required]
        MobilePhoneNumber: [string, required]
        Email: [email, required]
        DoctorsName: [string]
        ExistingMedicalConditions: [string]
        TypedName: [string, required]
    redirect: thank-you
    honeypot: well_786d3z16
---
<!-- Form -->
<?=  import('/partials/forms/outdoor-club'); ?>
<!-- end Form -->