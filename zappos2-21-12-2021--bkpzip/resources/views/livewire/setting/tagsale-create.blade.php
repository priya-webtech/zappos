<div>
   <div>
<x-admin-layout>


    <div wire:key="main">
    <section class="full-width flex-wrap admin-body-width add-customer-head-sec product-details-header">

        <article class="full-width">

            <div class="columns customers-details-heading">

                <div class="page_header d-flex  align-item-center mb-3">

                    <a href="{{ route('Channels') }}">

                        <button class="secondary icon-arrow-left mr-2">

                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>

                        </button>

                    </a>

                    <h4 class="mb-0 fw-5">Add Tag Sale</h4>

                </div>

            </div>

        </article>

    </section>

<form action="{{ route('tagsale-store') }}" method="POST" enctype="multipart/form-data" id="add_people_form" autocomplete="off">
    @csrf
    <section class="full-width flex-wrap admin-body-width customers-details-sec product-details-sec">

         <article class="full-width">

            <div class="columns two-thirds">

                <div class="card">

                     <label>Title</label>

                    <input type="text" name="title" placeholder="Short sleeve t-shirt">
                     @error('title') <span class="text-danger">{{ $message }}</span>@enderror

                </div>

              

                <div class="card product-media-card">
                    <div class="card-header upload-media-header">
                        <h3 class="fs-16 fw-6 m-0">Media</h3>
                        <button class="link add-media-url-btn">Add media from URL <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="m5 8 5 5 5-5H5z"></path></svg></button>
                        <ul class="add-media-dropdown">
                            <li><button class="link">Edit options</button></li>
                            <li><button class="link">Reorder variants</button></li>
                        </ul>
                    </div>
                    <div class="media-delete-option">
                        <label class="all-select-media"><input type="checkbox" name="option2a" id="select-all"><span class="count-image"></span> Media </label>
                        <a href="javascript:;" class="link warning delete-media">Delete media</a>
                    </div>
                    <div class="card-middle">
                        <div class="uplod-main-demo">
                            <input type="file" name="image" id="images"/>
                            <div class="import-file">
                                <div id="multiple-file-preview">
                                   <ul id="sortable">
                                       
                                        <label class="custome-file-upload" for="images">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0c5.514 0 10 4.486 10 10s-4.486 10-10 10S0 15.514 0 10 4.486 0 10 0zm1 8.414l1.293 1.293a1 1 0 101.414-1.414l-3-3a.998.998 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 8.414V14a1 1 0 102 0V8.414z" fill="#5C5F62"></path></svg>
                                            <p class="secondary">Add files</p>
                                            <span class="fs-14">or drop files to upload</span>
                                        </label>
                                         
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>

    </section>

    <section class="full-width flex-wrap admin-body-width create-collection-footer">

        <div class="page-bottom-btn">

            <input type="submit" class="button"id="master-save" value="save">

        </div>

    </section>

    

</form>


</x-admin-layout>

</div>
</div>
