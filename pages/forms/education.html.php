---
@layout: form
name: Education Form
title: Education Projects
summary: Please select the education project(s) that you would like to donate towards. If you need more info please contact Fahim Baqir.
slug: education
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: education-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Education Form
            subject: New notification from the Well foundation Education form
    schema:
        Name: [string, required]
        Email: [email, required]
        PhoneNumber: [string, required]
        Town: [string, required]
        Classrooms: [string]
        Mosques: [string]
        SchoolEssentials: [string]
        MosqueEssentials: [string]
    redirect: thank-you
    honeypot: well_786d3z12
---
<!-- Form -->
<?=  partial('/forms/education'); ?>
<!-- end Form -->