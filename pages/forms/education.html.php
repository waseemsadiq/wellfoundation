---
layout: form
name: Education Form
title: Education Projects
summary: Please select the education project(s) that you would like to donate towards. If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: education
visible: false
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
<?=  import('/partials/forms/education'); ?>
<!-- end Form -->