---
layout: form
name: Hajj Form
title: Hajj
summary: Please complete this form for each person that you would like to send on Hajj. If you need more info please contact Fahim Baqir.
slug: hajj
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: hajj-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Hajj Form
            subject: New notification from the Well foundation Hajj form
    schema:
        Name: [string, required]
        MobileNumber: [string, required]
        Email: [email, required]
        NameofpersonHajjisfor: [string, required]
    redirect: thank-you
    honeypot: well_786d3z17
---
<!-- Form -->
<?=  import('/partials/forms/hajj'); ?>
<!-- end Form -->