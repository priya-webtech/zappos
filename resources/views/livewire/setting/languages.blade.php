<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width add-variant-header">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Store languages</h4>
                </div>
                <div class="header-btn-group">
                    <a class="link" data-toggle="modal" data-target="#export">Export</a>
                    <a class="link" data-toggle="modal" data-target="#import">Import</a>
                    <a class="button green-btn" onclick="document.getElementById('add-language-modal').style.display='block'">Add language</a>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width setting-store-lang-sec">
        <article class="full-width">
            <div class="columns one-third">
                <div class="card card-transparent-bg pl-0">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Default language</h3>
                    </div>
                    <p class="text-grey mb-0">This is the language that your online store visitors see if their preferred language isn't available.</p>
                </div>
            </div>
            <div class="columns two-thirds right-details">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="fs-16 fw-6 mb-0">Hindi</h3>
                            <button class="link" onclick="document.getElementById('change-theme-language-modal').style.display='block'">Change theme language</button>
                        </div>
                        <p class="text-grey mb-0">Online store theme and notification language.</p>
                    </div>
                </div>
            </div>
        </article> 
        <article class="full-width sec-border">
            <div class="columns one-third">
                <div class="card card-transparent-bg pl-0">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Translated languages</h3>
                    </div>
                    <p class="text-grey mb-0">These are the languages your online store has been translated into.</p>
                </div>
            </div>
            <div class="columns two-thirds right-details">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="fs-16 fw-6 mb-0">Unpublished languages</h3>
                        </div>
                        <p class="text-grey">These languages are only visible to you.</p>
                        <div class="alert-notice-msg">
                            <p><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 20c5.514 0 10-4.486 10-10S15.514 0 10 0 0 4.486 0 10s4.486 10 10 10zm1-6a1 1 0 1 1-2 0v-4a1 1 0 1 1 2 0v4zm-1-9a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path></svg> To work on translations, install a compatible translation app or export your translations.</p>
                            <button class="secondary">Visit the Shopify App Store</button>
                        </div>
                    </div>
                    <div class="card-middle list-btn-group-main">
                        <ul>
                            <li>
                                <span class="fw-6">Bulgarian</span>
                                <div class="list-btn-group">
                                    <button class="link">Preview</button>
                                    <span class="button-group">
                                        <button class="secondary" onclick="document.getElementById('publish-language-modal').style.display='block'">Publish</button>
                                        <button class="secondary" onclick="document.getElementById('delete-language-modal').style.display='block'"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M8 3.994C8 2.893 8.895 2 10 2s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997H4c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zM5 14.508V8h2v6.508a.5.5 0 0 0 .5.498H9V8h2v7.006h1.5a.5.5 0 0 0 .5-.498V8h2v6.508A2.496 2.496 0 0 1 12.5 17h-5C6.12 17 5 15.884 5 14.508z"></path></svg></button>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <span class="fw-6">Breton</span>
                                <div class="list-btn-group">
                                    <button class="link">Preview</button>
                                    <span class="button-group">
                                        <button class="secondary" onclick="document.getElementById('publish-language-modal').style.display='block'">Publish</button>
                                        <button class="secondary" onclick="document.getElementById('delete-language-modal').style.display='block'"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M8 3.994C8 2.893 8.895 2 10 2s2 .893 2 1.994h4c.552 0 1 .446 1 .997a1 1 0 0 1-1 .997H4c-.552 0-1-.447-1-.997s.448-.997 1-.997h4zM5 14.508V8h2v6.508a.5.5 0 0 0 .5.498H9V8h2v7.006h1.5a.5.5 0 0 0 .5-.498V8h2v6.508A2.496 2.496 0 0 1 12.5 17h-5C6.12 17 5 15.884 5 14.508z"></path></svg></button>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
        <article class="full-width sec-border">
            <div class="columns one-third">
                <div class="card card-transparent-bg pl-0">
                    <div class="card-title">
                        <h3 class="fs-16 fw-6 mb-0">Account language</h3>
                    </div>
                    <p class="text-grey mb-0">When you're logged into Shopify, this is the language you see. This doesn't affect the language customers see on your online store.</p>
                </div>
            </div>
            <div class="columns two-thirds right-details">
                <div class="card">
                    <div class="card-middle bd_none">
                        <p>Your account language is set to <span class="fw-6">English (Netherlands)</span></p>
                        <button class="secondary fw-6">Change account language</button>
                    </div>
                </div>
            </div>
        </article>
    </section>
</x-admin-layout>

<!--Export modal-->
<div id="export" class="customer-modal-main in export-inventory">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Export language</h2>
                <button type="button" class="close modal-close-btn" data-dismiss="modal">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <form wire:submit.prevent="exportCustomers">
                <input type="hidden" name="_token">                    
                <div class="modal-body ta-left">
                    <div class="p-3">
                        <p>This CSV file can only be used to add or update translations.</p>
                        <p>
                            <label>Language</label>
                            <select>
                                <option>All languages</option>
                                <option>Bulgarian</option>
                                <option>Breton</option>
                            </select>
                        </p>
                        <ul style="list-style-type: none">
                            <label>Content</label>
                            <li>
                                <input value="Current Page" name="export" id="current_page" type="radio">
                                <label for="current_page">All</label>
                            </li>
                            <li>
                                <div class="setting-single-col">
                                    <label><input type="checkbox" name="option2a" checked="checked">Metafields</label>
                                    <p class="text-grey">Include metafields if you use them to add content to your store. For example, apps that add content to products.</p>
                                </div>                                
                            </li>
                            <li>
                                <input value="All Customers" name="export" id="all-customers" type="radio">
                                <label for="all-customers">Outdated</label>
                            </li>
                            <li>
                                <input value="All Customers" name="export" id="all-customers" type="radio">
                                <label for="all-customers">Untranslated</label>
                            </li>
                        </ul>
                        <label>File</label>
                        <ul style="margin-bottom: 0; list-style-type: none">
                            <li><input value="Csv" name="export_as" id="csv" type="radio">
                                <label for="csv">CSV for Excel, Numbers, or another spreadsheet program</label>
                            </li>
                            <li><input value="Plain Csv" name="export_as" id="plain_csv" type="radio"> <label for="plain_csv">CSV for text editors</label></li>
                        </ul>
                    </div>
                    <div class="modal-footer-link p-3">
                        <p>Your export will be sent to test@webkul.com. Learn more about <a class="arrow-with-link" hreft="#">exporting languages <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="button secondary">
                    Cancel
                    </button>
                    <button type="submit" class="button green-btn">
                    Export
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Import Modal-->
<div id="import" class="customer-modal-main import-inventory in">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Import language</h2>
                <button type="button" class="close modal-close-btn" data-dismiss="modal">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <form action="http://185.160.67.108/estore/public/import" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="VWAiD9EyZqX8gI9MQVQQlfzOATOFOTdo9nvAgLrx">                
                <div class="modal-body ta-left">
                    <div class="pt-3 pl-3 pr-3">
                        <div class="import-file-details">
                            <p>To import a language, upload a CSV file of your translations.</p>
                        </div>
                        <div class="import-file">
                            <!--<input type="file" name="file" class="form-control" id="import_customers" onchange="importCustomers()">-->
                            <label for="et_pb_contact_brand_file_request_0" class="et_pb_contact_form_label custome-file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 0c5.514 0 10 4.486 10 10s-4.486 10-10 10S0 15.514 0 10 4.486 0 10 0zm1 8.414l1.293 1.293a1 1 0 101.414-1.414l-3-3a.998.998 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 8.414V14a1 1 0 102 0V8.414z" fill="#5C5F62"></path>
                                </svg>
                                <p class="secondary">Add file</p>
                                <span>or drop file to upload</span>
                            </label>
                            <input type="file" name="file" id="et_pb_contact_brand_file_request_0" class="file-upload" onchange="importCustomers()">
                        </div>
                        <label class="import-checkbox"><input type="checkbox" name="overwrite_customers">Overwrite any existing translations for this language</label>
                    </div>
                    <div class="modal-footer-link p-3 ta-left">
                        <p>Learn more about <a hreft="#" class="arrow-with-link">importing languages <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="button-col">
                        <button data-dismiss="modal" class="button secondary">
                                Cancel
                        </button>
                        <button type="submit" class="button secondary import_customers" disabled="">
                            Upload and continue
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Change theme language modal-->
<div id="change-theme-language-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Change theme language</h2>
                <button type="button" class="close modal-close-btn" onclick="document.getElementById('change-theme-language-modal').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body ta-left">
                <div class="row">
                    <label>Language</label>
                    <select>
                        <option>English</option>
                        <option>Hindi</option>
                        <option>Dutch</option>
                    </select>
                </div>
                <div class="currect-div">
                    <svg id="next-checkmark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path></svg></svg>
                    <p>
                        <span class="fw-6">Checkout and system</span>
                        <span class="text-grey">The <b>Hindi</b> preset includes checkout and system translations</span>
                    </p>   
                </div>
                <div class="currect-div">
                    <svg id="next-checkmark"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7 18c-.265 0-.52-.105-.707-.293l-6-6c-.39-.39-.39-1.023 0-1.414s1.023-.39 1.414 0l5.236 5.236L18.24 2.35c.36-.42.992-.468 1.41-.11.42.36.47.99.11 1.41l-12 14c-.182.212-.444.338-.722.35H7z"></path></svg></svg>
                    <p>
                        <span class="fw-6">THEME</span>
                        <span class="text-grey">Your active theme includes <b>Hindi</b> translations</span>
                    </p>   
                </div>
            </div>
            <div class="modal-footer">
                <div class="button-col">
                    <button data-dismiss="modal" class="button secondary">
                        Cancel
                    </button>
                    <button type="submit" class="button secondary green-btn">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Add language modal-->
<div id="add-language-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Add language</h2>
                <button type="button" class="close modal-close-btn" onclick="document.getElementById('add-language-modal').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body ta-left">
                <div class="row row-m-0">
                    <label>Language</label>
                    <select>
                        <option value>select</option>
                        <option>English</option>
                        <option>Hindi</option>
                        <option>Dutch</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <div class="button-col">
                    <button data-dismiss="modal" class="button secondary">
                        Cancel
                    </button>
                    <button type="submit" class="button secondary" disabled="disabled">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Publish Bulgarian modal-->
<div id="publish-language-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Publish Bulgarian?</h2>
                <button type="button" class="close modal-close-btn" onclick="document.getElementById('publish-language-modal').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body ta-left">
                <p>Are you sure you want to publish Bulgarian? This will publish the language to your online store and customer notifications.</p>
                <p>When publishing languages to your online store a new URL will be generated for the language. Visitors will be able to view your Bulgarian site at <a href="#" class="blue-color td-underline">https://delivery-boy-demo.myshopify.com/bg</a></p>
            </div>
            <div class="modal-footer">
                <div class="button-col">
                    <button data-dismiss="modal" class="button secondary">
                        Cancel
                    </button>
                    <button type="submit" class="button secondary green-btn">
                        Publish
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--delete language modal-->
<div id="delete-language-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Delete Bulgarian?</h2>
                <button type="button" class="close modal-close-btn" onclick="document.getElementById('delete-language-modal').style.display='none'">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </button>
            </div>
            <div class="modal-body ta-left">
                <p>Deleting languages will remove all translated content, and cannot be recovered. Do you still want to continue?</p>
            </div>
            <div class="modal-footer">
                <div class="button-col">
                    <button data-dismiss="modal" class="button secondary">
                        Cancel
                    </button>
                    <button type="submit" class="button warning">
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>