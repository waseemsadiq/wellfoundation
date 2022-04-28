---
@layout: form
name: Qurbani Form
title: Qurbani Program
summary: Please complete this form to donate to Well foundation Qurbani Program. If you need more info please contact Fahim Baqir.
slug: qurbani
visible: false
metadata:
    og:type: false
    robots: [none]
form:
    name: qurbani-form
    processors:
        - csv
        - 'email':
            recipients: 
                - info@wellfoundation.org.uk
            title: Well foundation Qurbani Form
            subject: New notification from the Well foundation Qurbani form
    schema:
        Name: [string, required]
        MobilePhoneNumber: [string, required]
        Postcode: [string, required]
        NamesofpeopleforQurbani: [string, required]
        IndiaCow: [string]
        PakistanCow: [string]
        PakistanSheep: [string]
        PalestineCow: [string]
        GhanaCow: [string]
        KenyaCow: [string]
    redirect: https://donate.justgiving.com/donation-amount?uri=aHR0cHM6Ly9kb25hdGUtYXBpLmp1c3RnaXZpbmcuY29tL2FwaS9kb25hdGlvbnMvZTkyNmZiOWYyN2E5NDVkZWI1NmI5YjQyOGE5OWZlZTk=
    honeypot: well_786d3z15
---
<!-- Form -->
<?=  partial('/forms/qurbani'); ?>
<!-- end Form -->