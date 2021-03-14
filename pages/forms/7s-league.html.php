---
layout: form
name: Well foundation 7s league Form
title: Well foundation 7s league Registration
summary: Please complete this form to register for the Well foundation 7s league. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: 7s-league
visible: false
form:
    name: 7s-league-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation 7s league Registration Form
            subject: New registration from the Well foundation 7s league form
    schema:
        Name: [string, required]
        Address: [string, required]
        Addressline2: [string]
        TownCity: [string]
        Postcode: [string]
        Email: [email, required]
        PhoneNumber: [string, required]
        Dateofbirth: [string, required]
        MedicalConditions: [string, required]
        MedicalConditionsMessage: [string]
        Activities: [string, required]
    redirect: thank-you
    honeypot: well_786d3z07
---
<!-- Form -->
<?=  import('/partials/forms/7s-league'); ?>
<!-- end Form -->