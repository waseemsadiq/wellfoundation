---
layout: form
name: Monthly Donation Form
title: Monthly Donation
summary: You can set up a standing order of &pound;10 per month so you get Sadaqah to all of our monthly blessings projects, You will be whatsApp'ed all of the completed projects.<br><br><strong>Account name:</strong> Well Foundation<br> <strong>Sort code:</strong> 832226<br> <strong>Account number:</strong> 00629281<br> <strong>Reference:</strong> [YOUR NAME] / MB.
slug: donate-monthly
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: donate-monthly-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Monthly Blessings Form
            subject: New notification from the Monthly Blessings form
    redirect: https://link.justgiving.com/v1/fundraisingpage/donate/pageid/{PageId}?amount={Amount}&reference={Name}&isRecurring=true&ExitUrl=https%3A%2F%2Fwww.wellfoundation.org.uk%2F26th-initiative-sadaqah-project
    schema:
        Name: [string, required]
        MobileNumber: [string, required]
        Amount: [string, required]
        PageId: [string, required]
    honeypot: well_786d3z14
---
<!-- Form -->
<?=  import('/partials/forms/donate-monthly'); ?>
<!-- end Form -->