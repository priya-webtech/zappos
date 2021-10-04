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
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width create-collection-footer">
        <div class="page-bottom-btn">
            <button disabled="disabled" class="button">Save menu</button>
        </div>
    </section>
    <div class="menu-item-sidebar edit-menu-item-sidebar">
        <div class="card">
            <div class="modal-header">
                <h3 class="fs-16 fw-6 mb-0">Edit menu item</h2>
                <span class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label>Name</label>
                    <input type="text" value="Home">
                </div>
                <label class="ta-left">Link</label>
                <div class="row side-elements">
                    <div class="menu-input-icon">
                        <input type="text" value="Home page">
                        <span class="menu-icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M18 7.261V17.5c0 .841-.672 1.5-1.5 1.5h-2c-.828 0-1.5-.659-1.5-1.5V13H7v4.477C7 18.318 6.328 19 5.5 19h-2c-.828 0-1.5-.682-1.5-1.523V7.261a1.5 1.5 0 0 1 .615-1.21l6.59-4.82a1.481 1.481 0 0 1 1.59 0l6.59 4.82A1.5 1.5 0 0 1 18 7.26z"></path></svg></span>
                    </div>
                    <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zM7.707 6.293a1 1 0 0 0-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 1 0 1.414 1.414L10 11.414l2.293 2.293a1 1 0 1 0 1.414-1.414L11.414 10l2.293-2.293a1 1 0 0 0-1.414-1.414L10 8.586 7.707 6.293z"></path></svg></button>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary" disabled="disabled">Apply changes</button>
            </div>
        </div>
    </div>

    <div class="menu-item-sidebar add-menu-item-sidebar">
        <div class="card">
            <div class="modal-header">
                <h3 class="fs-16 fw-6 mb-0">Add menu item</h2>
                <span class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label>Name</label>
                    <input type="text" placeholder="e.g. About us">
                </div>
                <label class="ta-left">Link</label>
                <div class="row side-elements">
                    <div class="menu-input-icon">
                        <input type="text" placeholder="Search or paste a link">
                        <!-- <span class="menu-icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M18 7.261V17.5c0 .841-.672 1.5-1.5 1.5h-2c-.828 0-1.5-.659-1.5-1.5V13H7v4.477C7 18.318 6.328 19 5.5 19h-2c-.828 0-1.5-.682-1.5-1.523V7.261a1.5 1.5 0 0 1 .615-1.21l6.59-4.82a1.481 1.481 0 0 1 1.59 0l6.59 4.82A1.5 1.5 0 0 1 18 7.26z"></path></svg></span> -->
                    </div>
                    <button class="secondary"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zM7.707 6.293a1 1 0 0 0-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 1 0 1.414 1.414L10 11.414l2.293 2.293a1 1 0 1 0 1.414-1.414L11.414 10l2.293-2.293a1 1 0 0 0-1.414-1.414L10 8.586 7.707 6.293z"></path></svg></button>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary" disabled="disabled">Add</button>
            </div>
        </div>
    </div>

    <!-- Remove menu item modal -->
    <div id="remove-menu-item-modal" class="customer-modal-main">
        <div class="customer-modal-inner">
            <input type="hidden" wire:model="customer.id" value="">
            <div class="customer-modal">
                <div class="modal-header">
                    <h2>Remove menu item?</h2>
                    <span onclick="document.getElementById('remove-menu-item-modal').style.display='none'" class="modal-close-btn">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                            <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                        </svg>
                    </span>
                </div>
                <div class="modal-body">
                    <p class="ta-left black-color">This will remove the <span class="fw-6">Home</span> menu item.</p>                
                </div>
                <div class="modal-footer">
                    <button class="button secondary">Cancel</button>
                    <button class="button warning">Remove</button>
                </div>
            </div>
        </div>
    </div>


<!-- Dag and Drop js -->
<script type="text/javascript">
    var btn = document.querySelector('.add');
var remove = document.querySelector('.draggable');

function dragStart(e) {
  this.style.opacity = '0.4';
  dragSrcEl = this;
  e.dataTransfer.effectAllowed = 'move';
  e.dataTransfer.setData('text/html', this.innerHTML);
};

function dragEnter(e) {
  this.classList.add('over');
}

function dragLeave(e) {
  e.stopPropagation();
  this.classList.remove('over');
}

function dragOver(e) {
  e.preventDefault();
  e.dataTransfer.dropEffect = 'move';
  return false;
}

function dragDrop(e) {
  if (dragSrcEl != this) {
    dragSrcEl.innerHTML = this.innerHTML;
    this.innerHTML = e.dataTransfer.getData('text/html');
  }
  return false;
}

function dragEnd(e) {
  var listItens = document.querySelectorAll('.draggable');
  [].forEach.call(listItens, function(item) {
    item.classList.remove('over');
  });
  this.style.opacity = '1';
}

function addEventsDragAndDrop(el) {
  el.addEventListener('dragstart', dragStart, false);
  el.addEventListener('dragenter', dragEnter, false);
  el.addEventListener('dragover', dragOver, false);
  el.addEventListener('dragleave', dragLeave, false);
  el.addEventListener('drop', dragDrop, false);
  el.addEventListener('dragend', dragEnd, false);
}

var listItens = document.querySelectorAll('.draggable');
[].forEach.call(listItens, function(item) {
  addEventsDragAndDrop(item);
});

function addNewItem() {
  var newItem = document.querySelector('.input').value;
  if (newItem != '') {
    document.querySelector('.input').value = '';
    var li = document.createElement('li');
    var attr = document.createAttribute('draggable');
    var ul = document.querySelector('ul');
    li.className = 'draggable';
    attr.value = 'true';
    li.setAttributeNode(attr);
    li.appendChild(document.createTextNode(newItem));
    ul.appendChild(li);
    addEventsDragAndDrop(li);
  }
}

btn.addEventListener('click', addNewItem);

</script>

<script type="text/javascript">
    $('.edit-menu-btn').click(function() {
          $('.edit-menu-item-sidebar').toggle();
          return false;
    });
    $('.menu-item-sidebar .modal-close-btn').click(function() {
          $('.menu-item-sidebar').hide();
          return false;
    });
    $('.add-menu-btn').click(function() {
          $('.add-menu-item-sidebar').toggle();
          return false;
    });
</script>

</x-admin-layout>
