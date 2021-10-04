<x-admin-layout>
<!-- Main Menu page end -->
    <section class="full-width flex-wrap admin-body-width navigation-header">
        <article class="full-width">
            <div class="columns customers-details-heading">
                <div class="page_header d-flex  align-item-center mb-3">
                    <a href="http://185.160.67.108/estore/public/admin/products">
                        <button class="secondary icon-arrow-left mr-2">
                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                                <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path>
                            </svg>
                        </button>
                    </a>
                    <h4 class="mb-0 fw-5">Main Menu</h4>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap bd_none admin-body-width">
        <article class="full-width">
            <div class="columns two-thirds">
                <div class="card">
                    <div class="row row-mb-0 ">
                        <label class="lbl-mb-4">Title</label>
                        <input type="text" name="title" value="News">
                    </div>
                </div>
                <div class="card card-pd-0">
                    <h3 class="fs-16 fw-6 mb-0 lh-normal p-3">Menu items</h3>
                    <ul class="menu-items-list">
                        <li class="draggable" draggable="true">
                            <span class="drage-icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg></span>
                            <span class="menu-item-link">Home</span>
                            <span class="button-group">
                                <button class="secondary edit-menu-btn">Edit</button>
                                <button class="secondary edit-menu-btn" onclick="document.getElementById('remove-menu-item-modal').style.display='block'">Delete</button>
                            </span>
                        </li>
                        <li class="draggable" draggable="true">
                            <span class="drage-icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg></span>
                            <span class="menu-item-link">Catalog</span>
                            <span class="button-group">
                                <button class="secondary edit-menu-btn">Edit</button>
                                <button class="secondary" onclick="document.getElementById('remove-menu-item-modal').style.display='block'">Delete</button>
                            </span>
                        </li>
                        <li class="draggable" draggable="true">
                            <span class="drage-icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg></span>
                            <span class="menu-item-link">Blog</span>
                            <span class="button-group">
                                <button class="secondary edit-menu-btn">Edit</button>
                                <button class="secondary" onclick="document.getElementById('remove-menu-item-modal').style.display='block'">Delete</button>
                            </span>
                        </li>
                        <li class="draggable" draggable="true">
                            <span class="drage-icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg></span>
                            <span class="menu-item-link">About Us</span>
                            <span class="button-group">
                                <button class="secondary edit-menu-btn">Edit</button>
                                <button class="secondary" onclick="document.getElementById('remove-menu-item-modal').style.display='block'">Delete</button>
                            </span>
                        </li>
                        <li>
                            <button class="link add-menu-btn"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M3 3h1V1H2.5A1.5 1.5 0 0 0 1 2.5V4h2V3zm3 0h3V1H6v2zm5 0h3V1h-3v2zM9 19H6v-2h3v2zm2 0h3v-2h-3v2zm6-15V3h-1V1h1.5A1.5 1.5 0 0 1 19 2.5V4h-2zM3 17v-1H1v1.5A1.5 1.5 0 0 0 2.5 19H4v-2H3zm13 0h1v-1h2v1.5a1.5 1.5 0 0 1-1.5 1.5H16v-2zM10 6a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2H7a1 1 0 1 1 0-2h2V7a1 1 0 0 1 1-1zM1 9V6h2v3H1zm0 2v3h2v-3H1zm16-2V6h2v3h-2zm0 2v3h2v-3h-2z"></path></svg> Add menu item</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="columns one-third right-details">
                <div class="card">
                    <div class="p-3">
                        <h3 class="fs-16 fw-6 lh-normal">Handle</h3>
                        <p class="text-grey mb-16">A handle is used to reference a menu in Liquid. e.g. a menu with the title “Sidebar menu” would have the handle <code>sidebar-menu</code> by default. <a href="#" class="arrow-with-link">Learn more<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                        <input type="text" value="main-menu">
                    </div>
                </div>
                <div class="card menu-sidebar-list-card">
                    <ul class="menu-sidebar-list">
                        <li class="menu-sidebar-list-inner">
                            <h3 class="menu-sidebar-title">Page</h3>
                            <div class="accordion-section-content">
                                <div class="posttype-page">
                                    <ul id="posttype-page-tabs" class="posttype-tabs add-menu-item-tabs">
                                        <li class="tabs" class="tabs" id="tab1">
                                            <a class="nav-tab-link" data-type="tabs-panel-posttype-page-most-recent">Most Recent</a>
                                        </li>
                                        <li id="tab2">
                                            <a class="nav-tab-link" data-type="page-all">View All</a>
                                        </li>
                                        <li id="tab3">
                                            <a class="nav-tab-link" data-type="tabs-panel-posttype-page-search">Search</a>
                                        </li>
                                    </ul>
                                    <div class="tabs-cont-main">
                                        <div class="tabs-cont tabs" data-tab="tab1">
                                            <div class="posttype-page-most-recent">
                                                <ul class="pagechecklist-most-recent">
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">Home</label>
                                                    </li>
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">About</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-controls">
                                                <label><input type="checkbox" name="option2a">Select All</label>
                                                <button class="secondary">Add to Menu</button>
                                            </div>
                                        </div>
                                        <div class="tabs-cont" data-tab="tab2">
                                            <div class="posttype-page-most-recent">
                                                <ul class="pagechecklist-most-recent">
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">Home2</label>
                                                    </li>
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">About2</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-controls">
                                                <label><input type="checkbox" name="option2a">Select All</label>
                                                <button class="secondary">Add to Menu</button>
                                            </div>
                                        </div>
                                        <div class="tabs-cont" data-tab="tab3">
                                            <div class="posttype-page-most-recent">
                                                <ul class="pagechecklist-most-recent">
                                                    <li>
                                                        <input type="text">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-sidebar-list-inner">
                            <h3 class="menu-sidebar-title">Product</h3>
                            <div class="accordion-section-content">
                                <div class="posttype-page">
                                    <ul id="posttype-page-tabs" class="posttype-tabs add-menu-item-tabs">
                                        <li class="tabs" id="tab4">
                                            <a class="nav-tab-link" data-type="tabs-panel-posttype-page-most-recent">Most Recent</a>
                                        </li>
                                        <li id="tab5">
                                            <a class="nav-tab-link" data-type="page-all">View All</a>
                                        </li>
                                        <li id="tab6">
                                            <a class="nav-tab-link" data-type="tabs-panel-posttype-page-search">Search</a>
                                        </li>
                                    </ul>
                                    <div class="tabs-cont-main">
                                        <div class="tabs-cont tabs" data-tab="tab4">
                                            <div class="posttype-page-most-recent">
                                                <ul class="pagechecklist-most-recent">
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">Home4</label>
                                                    </li>
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">About4</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-controls">
                                                <label><input type="checkbox" name="option2a">Select All</label>
                                                <button class="secondary">Add to Menu</button>
                                            </div>
                                        </div>
                                        <div class="tabs-cont" data-tab="tab5">
                                            <div class="posttype-page-most-recent">
                                                <ul class="pagechecklist-most-recent">
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">Home5</label>
                                                    </li>
                                                    <li>
                                                        <label><input type="checkbox" name="option2a">About5</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="list-controls">
                                                <label><input type="checkbox" name="option2a">Select All</label>
                                                <button class="secondary">Add to Menu</button>
                                            </div>
                                        </div>
                                         <div class="tabs-cont" data-tab="tab6">
                                            <div class="posttype-page-most-recent">
                                                <ul class="pagechecklist-most-recent">
                                                    <li>
                                                        <input type="text">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width create-collection-footer">
        <div class="page-bottom-btn">
            <button disabled="disabled" class="button">Save menu</button>
        </div>
    </section>
</x-admin-layout>

<script type="text/javascript">
//   $('.menu-sidebar-title').on('click', function(){
  //     $(this).toggleClass('active-tab', 1500);
    //});
    // $(document).ready(function(){
    //     $('.menu-sidebar-title').click(function(){
    //         $('.menu-sidebar-title').next().removeClass("active-sidebar");
    //         $(this).next().addClass("active-sidebar");
    //     });
    //     $('ul.add-menu-item-tabs li').click(function(){
    //         var tab_id = $(this).attr('data-tab');

    //         $('ul.add-menu-item-tabs li').removeClass('current-tab');
    //         $('.tabs-cont').removeClass('current-tab');

    //         $(this).addClass('current-tab');
    //         $("#"+tab_id).addClass('current-tab');
    //     });
    // });

$(document).ready(function(){
    $('.menu-sidebar-title').on('click', function() {
        $('.menu-sidebar-title').next().removeClass('active-tab');
        $(this).next().addClass('active-tab');
    });
    $('ul.add-menu-item-tabs li').click(function(){
        var $this = $(this);
        var $theTab = $(this).attr('id');
        console.log($theTab);
        if($this.hasClass('tabs')){
        // do nothing
        } else{
            $this.closest('.menu-sidebar-list-inner').find('ul.add-menu-item-tabs li, .tabs-cont-main .tabs-cont').removeClass('tabs');
            $('.tabs-cont-main .tabs-cont[data-tab="'+$theTab+'"], ul.add-menu-item-tabs li[id="'+$theTab+'"]').addClass('tabs');
        }
    });
});

</script>
