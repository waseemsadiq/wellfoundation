---
layout: form
name: Monthly Donation Form
title: Monthly Donation
summary: You can set up a standing order of &pound;10 per month so you get Sadaqah to all of our monthly blessings projects, You will be whatsApp'ed all of the completed projects.<br><br><strong>Account name:</strong> Well Foundation<br> <strong>Sort code:</strong> 832226<br> <strong>Account number:</strong> 00629281<br> <strong>Reference:</strong> [YOUR NAME] / MB.
slug: donate-monthly
visible: false
form:
    name: donate-monthly-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Monthly Blessings Form
            subject: New notification from the Monthly Blessings form
    schema:
        Firstname: [string, required]
        Lastname: [string, required]
        Mobilenumber: [string, required]
    redirect: thank-you
    honeypot: well_786d3z14
---
<!-- Form -->
<?=  import('/partials/forms/donate-monthly'); ?>
<!-- end Form -->