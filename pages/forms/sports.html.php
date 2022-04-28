---
@layout: form
name: Sports Academy Form
title: Sports Academy Registration
summary: Please complete this form to register yourself, or your child, for the Well Foundation's sports and activities. If you need more info please contact Fahim Baqir.
slug: sports
visible: false
metadata:
    og:type: false
    robots: [none]
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
<?=  partial('/forms/sports'); ?>
<!-- end Form -->