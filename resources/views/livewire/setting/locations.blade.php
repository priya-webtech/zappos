<x-admin-layout>
    <section class="full-width flex-wrap admin-body-width">
        <article class="full-width">
            <div class="columns">
                <div class="page_header justify-content-space-between d-flex align-item-center">
                    <div class="d-flex align-center">
                        <a href="{{ route('settings') }}">
                            <button class="secondary icon-arrow-left mr-2">
                                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
                            </button>
                        </a>
                        <h4 class="mb-0 fw-5">Locations</h4>
                    </div>
                    <div class="header-btn-group">
                       <a href="{{ route('locations-create') }}"> <button class="button green-btn fw-6">Add location</button></a>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="full-width flex-wrap admin-body-width setting-location-sec">
        <article class="full-width">
            <div class="columns ten">
                <article class="full-width">
                    <div class="columns four pt-3 pr-3">
                        <h4 class="fs-15 fw-5 mb-16">Locations</h4>
                        <p>Manage the places you stock inventory, fulfill orders, and sell products.</p>
                        <p class="mb-0 text-grey">You’re using <span class="fw-6">3 of 8</span> locations available on your plan.</p>
                        <a class="blue-color td-underline" href="#">Compare plans</a>
                    </div>                
                    <div class="columns eight">
                        <div class="card card-pd-0 lh-normal">
                            @foreach($location as $row)
                            <div class="ssd-local-delivery">
                                <div class="ssd-local-delivery-icon">
                                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path fill-rule="evenodd" d="M18 8c0-4.42-3.58-8-8-8S2 3.58 2 8c0 .15 0 .29.01.44.13 3.55 1.99 7.62 7.13 11.29.51.36 1.21.36 1.72 0 5.14-3.67 7-7.74 7.13-11.29.01-.15.01-.29.01-.44zm-5.879 2.121a2.996 2.996 0 0 0 0-4.242 2.996 2.996 0 0 0-4.242 0 2.996 2.996 0 0 0 0 4.242 2.996 2.996 0 0 0 4.242 0z"></path></svg>
                                </div>
                                <div class="ssd-local-delivery-tittle">
                                    <a href="{{ route('locations-detail', $row->id) }}"><h3 class="fs-14 fw-6 mb-0">{{$row->name}} </h3></a>
                                    <p class=" mb-0">Armada Society Road Hinjawadi Village Hinjawadi, 411057 Pune Maharashtra, India</p>
                                </div>    
                            </div>
                            @endforeach
                        </div>
                        <div class="card">
                            <h3 class="d-flex justify-content-space-between fs-16 fw-6">Default location</h3>
                            <p class="mb-16">Manage which location is used by Shopify and apps when no other location is specified.</p>
                            <div class="fex">
                                <button class="fw-6 secondary" onclick="document.getElementById('change-default-location-modal').style.display='block'">Change default location</button>
                            </div>
                        </div>
                        <div class="card">
                            <h3 class="d-flex justify-content-space-between fs-16 fw-6">Fulfillment priority</h3>
                            <p class="mb-16">Choose which locations are assigned new orders first. Learn more about <a class="arrow-with-link" href="#">assigning orders to locations<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M14 13v1a1 1 0 0 1-1 1H6c-.575 0-1-.484-1-1V7a1 1 0 0 1 1-1h1c1.037 0 1.04 1.5 0 1.5-.178.005-.353 0-.5 0v6h6V13c0-1 1.5-1 1.5 0zm-3.75-7.25A.75.75 0 0 1 11 5h4v4a.75.75 0 0 1-1.5 0V7.56l-3.22 3.22a.75.75 0 1 1-1.06-1.06l3.22-3.22H11a.75.75 0 0 1-.75-.75z"></path></svg></a></p>
                            <div class="fex">
                                <button class="fw-6 secondary" onclick="document.getElementById('edit-fulfillment-priority-modal').style.display='block'">View or edit fulfillment priority</button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    </section>
</x-admin-layout>

<!--Change default location modal-->
<div id="change-default-location-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Change default location</h2>
                <span onclick="document.getElementById('change-default-location-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body card-pd-0 ta-left">
                <div class="p-3">
                    <p class="black-color">Select the location that Shopify and apps will use when no other location is specified. Only locations that fulfill online orders can be used as your default location.</p>
                    <label class="lbl-tb-p row-m-0"><input type="radio" name="option1a" checked="checked">Armada</label>
                    <label class="lbl-tb-p row-m-0"><input type="radio" name="option1a">H-28, Sector 63</label>
                    <label class="lbl-tb-p row-m-0"><input type="radio" name="option1a">Rajkot</label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary green-btn" disabled="disabled">Save</button>
            </div>
        </div>
    </div>
</div>

<!--Edit fulfillment priority modal-->
<div id="edit-fulfillment-priority-modal" class="customer-modal-main">
    <div class="customer-modal-inner">
        <div class="customer-modal">
            <div class="modal-header">
                <h2>Edit fulfillment priority</h2>
                <span onclick="document.getElementById('edit-fulfillment-priority-modal').style.display='none'" class="modal-close-btn">
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true">
                        <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414L10 8.586 3.707 2.293a1 1 0 0 0-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 1 0 1.414 1.414L10 11.414l6.293 6.293A.998.998 0 0 0 18 17a.999.999 0 0 0-.293-.707L11.414 10z"></path>
                    </svg>
                </span>
            </div>
            <div class="modal-body card-pd-0 ta-left">
                <div class="p-3">
                    <p class="black-color">Drag locations to reorder them. Locations at the top of the list are assigned orders first. If one location can’t fulfill the whole order, it will get split and assigned to multiple locations.</p>
                    <ul class="dag-grop-sec">
                        <li draggable="true" ondragend="dragEnd()" ondragover="dragOver(event)" ondragstart="dragStart(event)"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg> H-28, Sector 63</li>
                        <li draggable="true" ondragend="dragEnd()" ondragover="dragOver(event)" ondragstart="dragStart(event)"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg> Armada</li>
                        <li draggable="true" ondragend="dragEnd()" ondragover="dragOver(event)" ondragstart="dragStart(event)"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M7 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 2zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 7 14zm6-8a2 2 0 1 0-.001-4.001A2 2 0 0 0 13 6zm0 2a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 8zm0 6a2 2 0 1 0 .001 4.001A2 2 0 0 0 13 14z"></path></svg> Rajkot</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="button secondary">Cancel</button>
                <button class="button secondary green-btn" disabled="disabled">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    let selected = null

function dragOver(e) {
  if (isBefore(selected, e.target)) {
    e.target.parentNode.insertBefore(selected, e.target)
  } else {
    e.target.parentNode.insertBefore(selected, e.target.nextSibling)
  }
}

function dragEnd() {
  selected = null
}

function dragStart(e) {
  e.dataTransfer.effectAllowed = 'move'
  e.dataTransfer.setData('text/plain', null)
  selected = e.target
}

function isBefore(el1, el2) {
  let cur
  if (el2.parentNode === el1.parentNode) {
    for (cur = el1.previousSibling; cur; cur = cur.previousSibling) {
      if (cur === el2) return true
    }
  }
  return false;
}
</script>