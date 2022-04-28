---
@layout: form
name: Business Partners Form
title: Business Partners' registration
summary: Please click the Gift aid box as this is used for future repairs to any Water Wells, there is also a small percentage added to each project for the maintenance and upkeep of all water projects thus ensuring longevity of all projects. If you need more info please contact Fahim Baqir.
slug: business-partners
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: business-partners-signup-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Business Partners Signup Form
            subject: New enquiry from the business partners page
    schema:
        Name: [string, required]
        CompanyName: [string, required]
        Email: [email, required]
        MobileNumber: [string, required]
        WebsiteURL: [string]
        Where_would_you_like_to_get_involved: [string]
        Message: [string, required]
    redirect: thank-you
    honeypot: well_786d3z02
---
<!-- Form -->
<?=  partial('/forms/business-partners'); ?>
<!-- end Form -->