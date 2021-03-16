<ktml:style src="theme://css/cookieconsent.min.css" rel="preload" as="style" />
<ktml:script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-inline />
<div id="cookieconsent"></div>
<script data-inline>
  window.cookieconsent.initialise({
    container: document.getElementById("cookieconsent"),
    palette:{
     // green-500
     popup: {background: "var(--green-500)"},
     // purple-700
     button: {background: "var(--purple-700)"},
    },
    revokable: true,
    onStatusChange: function(status) {
     console.log(this.hasConsented() ?
      'enable cookies' : 'disable cookies');
    },
    "position": "bottom-right",
    "theme": "classic",
    "domain": "<?= JUri::base() ?>",
    "secure": true,
    "content": {
      "header": 'Cookies used on the website!',
      "message": 'This website uses cookies to improve your experience.',
      "dismiss": 'Got it!',
      "allow": 'Allow cookies',
      "deny": 'Decline',
      "link": 'Learn more',
      "href": 'https://www.cookiesandyou.com',
      "close": '&#x274c;',
      "policy": 'Cookie Policy',
      "target": '_blank',
      }
   });
</script>