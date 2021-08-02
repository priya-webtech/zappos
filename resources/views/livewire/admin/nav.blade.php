<div class="panel_sidebar">
    <div class="admin_bar">
        <ul>
            <li class="active"><a href="/admin/"><i class="fas fa-home"></i> Home</a></li>
            <li>
                <a href="#"><i class="fab fa-first-order-alt"></i> Orders</a>
                <ul class="sub_items">
                    <li><a href="/admin/order">Orders</a></li>
                    <li><a href="/admin/draft_orders">Drafts</a></li>
                </ul>
            </li>
            <li class="have_sub_item">
                <a href="/admin/products"><i class="fab fa-product-hunt"></i> Products</a>
                <ul class="sub_items">
                    <li><a href="/admin/products">All Products</a></li>
                    <li><a href="/admin/inventory">Inventory</a></li>
                    <li><a href="/admin/transfers">Transfers</a></li>
                    <li><a href="/admin/collections">Collections</a></li>
                    <li><a href="/admin/giftcard">Gift Cards</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route('customers') }}"><i class="fas fa-user"></i> Customers</a>
            </li>
            <li>
                <a href="{{ route('users') }}"><i class="fas fa-user"></i>Administrators</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-chart-line"></i> Analytics</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-bullhorn"></i> Marketing</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-percent"></i> Discounts</a>
            </li>
            <li>
                <a href="{{ route('menu-list') }}"><i class="fa fa-bars"></i> Navigation</a>
            </li>
            <li>
                <a href="{{ route('settings') }}"><i class="fas fa-cog" aria-hidden="true"></i> Settings</a>
            </li>
        </ul>
    </div>
</div>
