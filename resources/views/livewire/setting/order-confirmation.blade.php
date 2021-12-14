<x-admin-layout>
    <section class="full-width admin-body-width flex-wrap admin-full-width list-customers order-confirmation-header">
        <div class="page_header d-flex align-item-center justify-content-space-between full-width mb-2">
            <div class="d-flex  align-item-center">
                <a href="{{ route('settings') }}">
                    <button class="secondary icon-arrow-left mr-2">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                    </button>
                </a>
                <h4 class="mb-0 fw-5">Order confirmation</h4>
            </div>
            <div class="header-btn-group">
                <a class="link" onclick="document.getElementById('order-confirmation-preview-modal').style.display='block'">Preview</a>
                <button disabled="disabled" class="button">Save</button>
                <div class="pagination mt-0">
                    <span class="button-group">
                        <button class="secondary icon-prev"></button>
                        <button class="secondary icon-next"></button>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="full-width admin-body-width flex-wrap admin-body-width order-confirmation-sec mt-16">
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="columns has-sections card">
                    <ul class="tabs">
                        <li class="active"><a href="#">Email</a></li>
                    </ul>
                    <div class="card-section">
                        <div class="row">
                            <label class="lbl-mb-4">Email subject</label>
                            <input type="text" vlaue="Order name confirmedd">
                        </div>
                        <div class="row">
                            <label class="lbl-mb-4">Email body (HTML)</label>
                            <textarea class="email-body-html" onkeyup="textAreaAdjust(this)"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns one-third right-details">
                <div class="card">
                    <div class="card-header">
                        <h3 class="fw-6 fs-16">Liquid variables</h3>
                        <p class="mb-1">You can use liquid variables to output an accent colour and logo image in your templates. The available variables are:</p>
                        <ul class="mb-1">
                            <li class="black-color"><span>shop.email_logo_url</span></li>
                            <li class="black-color"><span>shop.email_logo_width</span></li>
                            <li class="black-color"><span>shop.email_accent_color</span></li>
                        </ul>
                        <a href="#" class="arrow-with-link">Read more about using liquid variables in notification templates<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a>
                    </div>
                </div>    
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width order-conf-footer-btn">
        <div class="page-bottom-btn">
            <button class="secondary" onclick="document.getElementById('revert-email-template-default-modal').style.display='block'">Revert to default</button>
            <button class="green-btn button">Save</button>
        </div>
    </section>
</x-admin-layout>
<!--Revert email template to default modal-->
<div id="revert-email-template-default-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <input type="hidden">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Revert email template to default?</h2>
                <span onclick="document.getElementById('revert-email-template-default-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body ta-left">
                <p class="black-color">Are you sure you want to revert this template to the default settings? This action cannot be reversed and any changes you have made to the subject or content will be lost.</p>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button red-btn">Revert to default</button>
            </div>
        </div>
    </div>
</div>

<!--Preview modal-->
<div id="order-confirmation-preview-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <input type="hidden">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Preview</h2>
                <div class="modal-header-btn-group">
                    <div class="modal-header-dropdown">
                        <button class="link modal-lung-btn"><svg id="language-minor"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M11.428 14L13 10.46 14.573 14h-3.145zm6.486 2.593l-4-9a1 1 0 0 0-1.828 0L10.128 12H10c-1.276 0-2.24-.3-2.965-.717l.012-.012C8.34 9.83 8.824 7.736 8.987 6H10a1.001 1.001 0 0 0 0-2h-.942a14.615 14.615 0 0 0-.064-1.11.997.997 0 0 0-1.103-.885c-.548.06-.943.555-.884 1.103 0 .013.035.36.05.89H3c-.552 0-1 .45-1 1s.448 1 1 1h3.98c-.143 1.37-.515 2.922-1.42 3.935-.424-.606-.575-1.125-.59-1.183a1 1 0 1 0-1.939.492c.12.474.374 1.07.78 1.68-.255.05-.523.077-.81.077a1 1 0 1 0 0 2c.856 0 1.628-.16 2.32-.468.963.734 2.254 1.303 3.933 1.435l-1.167 2.626a1.001 1.001 0 0 0 1.828.812L10.54 16h4.92l.626 1.405a.999.999 0 0 0 1.322.507c.504-.225.73-.815.507-1.32z"></path></svg></svg> <span>Hindi</span> <svg id="disclosure"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.28 9.28l3.366 3.366c.196.196.512.196.708 0L13.72 9.28c.293-.293.293-.767 0-1.06-.14-.14-.332-.22-.53-.22H6.81c-.414 0-.75.336-.75.75 0 .2.08.39.22.53z"></path></svg></svg></button>
                        <ul class="filter-dropdown">
                            <li>
                                <button class="link">Hindi</button>
                            </li>
                            <li>
                                <button class="link">Bulgarian</button>
                            </li>
                            <li>
                                <button class="link">Breton</button>
                            </li>
                        </ul>
                    </div>
                    <span onclick="document.getElementById('order-confirmation-preview-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body ta-left mb-16">
                <label class="lbl-mb-4">Subject Order #9999 confirmed</label>
                <textarea class="email-body-html" onkeyup="textAreaAdjust(this)"></textarea>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button red-btn">Revert to default</button>
            </div>
        </div>
    </div>
</div>


<script>
function textAreaAdjust(element) {
  element.style.height = "1px";
  element.style.height = (2+element.scrollHeight)+"px";
}

$(document).ready(function() {
    $('.modal-lung-btn').click(function() {
            $('.modal-header-dropdown .filter-dropdown').slideToggle("fast");
    });
});
</script>