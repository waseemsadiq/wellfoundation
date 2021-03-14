---
layout: form
name: In loving memory Form
title: In loving memory Projects
summary: If you need more info please contact <a href="mailto:fahim.baqir@wellfoundation.org.uk" class="text-indigo-700 underline">Fahim Baqir</a>.
slug: loving-memory
visible: false
form:
    name: loving-memory-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: In loving memory Form
            subject: New notification from the In loving memory form
    schema:
        Name: [string, required]
        Email: [email, required]
        PhoneNumber: [string, required]
        Town: [string, required]
        NameonPlaque: [string, required]
        JustGivingPage: [string, required]
        Arrange: [string, required]
        Build: [string, required]
    redirect: thank-you
    honeypot: well_786d3z13
---
<!-- Form -->
<?=  import('/partials/forms/loving-memory'); ?>
<!-- end Form -->