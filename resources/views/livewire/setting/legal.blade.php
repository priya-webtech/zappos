<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header d-flex  align-item-center">
                    <a href="{{ route('settings') }}">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Legal</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Legal pages</h4>
                        <p>You can create your own legal pages.</p>
                    </div>                
                    <div class="columns eight">
                        <div class="card">
                            <h3 class="fs-16 fw-6">Refund policy</h3>
                            <textarea class="form-control tinymce-editor" name="descripation" id="descripation" wire:model="product.descripation"></textarea>
                        </div>
                        <div class="card">
                            <h3 class="fs-16 fw-6">Privacy policy</h3>
                            <textarea class="form-control tinymce-editor" name="descripation" id="descripation" wire:model="product.descripation"></textarea>
                        </div>
                        <div class="card">
                            <h3 class="fs-16 fw-6">Terms of service</h3>
                            <textarea class="form-control tinymce-editor" name="descripation" id="descripation" wire:model="product.descripation"></textarea>
                        </div>
                        <div class="card">
                            <h3 class="fs-16 fw-6">Shipping policy</h3>
                            <textarea class="form-control tinymce-editor" name="descripation" id="descripation" wire:model="product.descripation"></textarea>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width">
        <div class="page-bottom-btn flex-end">
            <button disabled="disabled" class="button">Save</button>
        </div>
    </section>
</x-admin-layout>

<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
 <script>
    $('.tinymce-editor').each(function () {
        CKEDITOR.replace($(this).prop('id'));
    });
 </script>