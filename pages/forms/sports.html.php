---
layout: form
name: Sports Academy Form
title: Sports Academy Registration
summary: Please complete this form to register yourself, or your child, for the Well Foundation's sports and activities. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: sports
visible: false
metadata:
    og:type: false
    robots: [noindex, nofollow]
form:
    name: sports-academy-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Sports Academy Registration Form
            subject: New registration from the sports academy form
    schema:
        ParentName: [string, required]
        ChildName: [string]
        DateofBirth: [date, required]
        MaleFemale: [string, required]
        Email: [email, required]
        MobilePhone: [string, required]
        Address: [string, required]
        AddressLine2: [string]
        Postcode: [string, required]
        ExistingMedicalConditions: [string]
        DoctorsName: [string]
        DoctorsNumber: [string]
        Pleasetypeyourname: [string, required]
        MaleSports: [string]
        FemaleSports: [string]
        MonthlyEvents: [string]
    redirect: thank-you
    honeypot: well_786d3z04
---
<!-- Form -->
<?=  import('/partials/forms/sports'); ?>
<!-- end Form -->