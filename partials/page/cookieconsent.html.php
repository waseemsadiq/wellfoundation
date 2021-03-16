<ktml:style src="theme://css/cookieconsent.min.css" rel="preload" as="style" />
<div id="cookieconsent" class="text-center"></div>
<ktml:script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-inline />
<script data-inline>
  window.cookieconsent.initialise({
    container: document.getElementById("cookieconsent"),
    palette:{
     popup: {
      // green-500
      background: "<?= (isset($background_colour)) ? $background_colour : 'var(--green-500)'; ?>"<?= isset($font_color) ? ', text: "' . $font_color . '"' : '' ; ?>},
      // purple-700
      button: {background: "<?= isset($button_colour) ? $button_colour : 'var(--purple-700)' ?>"<?= isset($button_font_color) ? ', text: "' . $button_font_color . '"' : ', text: "#ffffff"' ; ?>}
    },
    revokable: true,
    onStatusChange: function(status) {
     console.log(this.hasConsented() ?
      'enable cookies' : 'disable cookies');
    },
    law: {
     regionalLaw: false,
    },
    location: true,
    position: "<?= isset($position) ? $position : 'bottom-right' ?>", // bottom / top {banner} top-left / top-right / bottom-left / bottom-right {pop up}
    theme: "<?= isset($theme) ? $position : 'classic' ?>", // block / edgeless/ classic
    domain: "<?= JUri::base() ?>",
    secure: true,
    content: {
      header: "<?= isset($header_text) ? htmlspecialchars($header_text) : 'Cookies used on the website!' ?>",
      message: "<?= isset($banner_text) ? htmlspecialchars($banner_text) : 'This website uses cookies to improve your experience.' ?>",
      dismiss: "<?= isset($close_button) ? htmlspecialchars($close_button) : 'Got it!' ?>",
      allow: "<?= isset($allow_cookies_text) ? $allow_cookies_text : 'Allow cookies' ?>",
      deny: "<?= isset($decline_cookies_text) ? $decline_cookies_text : 'Decline' ?>",
      link: "<?= isset($link_text) ? $link_text : 'Learn more' ?>",
      href: "<?= isset($link_url) ? $link_url : 'https://www.cookiesandyou.com' ?>",
      close: '&#x274c;',
      policy: "<?= isset($privacy_policy_text) ? $privacy_policy_text : 'Privacy Policy' ?>",
      target: "_blank",
      }
   });
</script>