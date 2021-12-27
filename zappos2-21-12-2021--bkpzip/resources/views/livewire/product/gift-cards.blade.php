<x-admin-layout>
     <section class="full-width flex-wrap admin-full-width inventory-heading">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center">
                    <h4 class="mb-0 fw-5">Gift cards</h4>
                </div>
                <div class="header-btn-group">
                    <a href="{{ route('gift-cards-create') }}" class="link">Add gift card product</a>
                    <a href="{{ route('products') }}" class="link">View gift card products</a>
                    <a class="link disabled" data-toggle="modal" data-target="#export">Export</a>
                    <a href="{{ route('gift-cards-issue-gift-card-create') }}" class="button green-btn">Issue gift card</a>
                </div>
            </div>
        </article>
    </section> 
    <section class="full-width flex-wrap admin-full-width list-customers transfers-sec bd_none">
        <div class="card transfers-empty gift-cards-empty">
            <div class="transfers-empty-inner ta-center">
                <img src="https://cdn.shopify.com/shopifycloud/web/assets/v1/5a99d0c986799a601fe7c7fc0ba67797.svg">
                <h2>Digital gift cards</h2>
                <p>Gift cards can be sold as a product, or sent directly to customers.</p>
                <div class="digital-gift-cards-btn">
                    <p><a href="{{ route('gift-cards-create') }}" class="button green-btn">Add gift card product</a>Let customers buy gift cards from your store</p>
                    <p><a href="{{ route('gift-cards-issue-gift-card-create') }}" class="button green-btn">Issue gift card</a>Send a gift card code directly to a customer</p>
                </div>
                <p>By using gift cards, you agree to our <a href="#">Terms of Service.</a></p>
            </div>
        </div>
    </section>     
</x-admin-layout>
