<!-- Einbindung des Cookie-Banner-Widgets -->
<section class="cookie-banner d-none" id="cookieBanner">
  <div class="container">
    <div class="row align-items-center d-flex">
      <div class="col-lg-2 text-center text-lg-start">
        <img src="/assets/logo/alcorlogoweiss.svg" alt="WebDesign Alcor Logo" class="img-fluid logo my-4">
      </div>
      <div class="col-lg-6 cookie-message">
        <p class="text-light mb-0">
          Wir verwenden Cookies, um Ihnen das beste Nutzererlebnis auf unserer Website zu bieten. Einige Cookies sind erforderlich, um die Funktionalität der Website zu gewährleisten, während andere uns helfen, die Nutzung unserer Website zu analysieren und unsere Marketingaktivitäten zu optimieren. <br>
          <a href="/impressum.php" target="_blank" class="text-light">Impressum</a> |
          <a href="/datenschutz.php" target="_blank" class="text-decoration-underline text-light">Datenschutz</a>
        </p>
      </div>
      <div class="col-lg-4 cookie-buttons text-center text-lg-end d-flex mt-4">
        <button class="btn btn-primary me-2" id="acceptCookies">Akzeptieren</button>
        <button class="btn btn-outline-light" id="settingsCookies">Einstellungen</button>
      </div>
    </div>
  </div>
</section>

<!-- Cookie Settings Modal -->
<div class="modal fade" id="cookieSettingsModal" tabindex="-1" aria-labelledby="cookieSettingsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="cookieSettingsModalLabel">Cookie-Einstellungen</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Hier können Sie die verschiedenen Arten von Cookies anpassen.</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="necessaryCookies" checked disabled>
          <label class="form-check-label" for="necessaryCookies">Notwendige Cookies</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="analyticsCookies">
          <label class="form-check-label" for="analyticsCookies">Analytische Cookies</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="marketingCookies">
          <label class="form-check-label" for="marketingCookies">Marketing Cookies</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
        <button type="button" class="btn btn-primary" id="saveCookieSettings">Speichern</button>
      </div>
    </div>
  </div>
</div>
