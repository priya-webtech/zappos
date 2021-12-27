<div>
    <div>
	    <x-admin-layout>
	        <form name="role">
	           	<section class="full-width admin-body-width flex-wrap admin-full-width inventory-heading">
	                <article class="full-width">
	                    <div class="columns customers-details-heading">
	                        <div class="page_header d-flex  align-item-center">
	                            <a href="{{ route('role') }}">
	                                <button class="secondary icon-arrow-left mr-2">
			                            <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg_375hu" focusable="false" aria-hidden="true"><path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2z"></path></svg>
			                        </button>
	                            </a>
	                            <h4 class="mb-0 fw-5">View Role</h4>
	                        </div>
	                    </div>
	                </article>
	            </section>
	            <section class="full-width flex-wrap admin-body-width">
	                <article class="full-width">
	                    <div class="columns ten">
                        	<div class="card card-pd-0">
                        		<div class="card-header">
                        			<h3 class="fs-16 fw-6 lh-normal">Your Details</h3>
                        			<div class="info-row">
                        				<label>First Name</label>
                        				<span>Jasmin</span>
                        			</div>
                        			<div class="info-row">
                        				<label>Last Name</label>
                        				<span>Patel</span>
                        			</div>
                        			<div class="info-row">
                        				<label>Email</label>
                        				<span>jasminpatel@gmail.com</span>
                        			</div>
                        			<div class="info-row">
                        				<label>Role</label>
                        				<span>Manager</span>
                        			</div>
                        			<div class="info-row">
                        				<label>Phone Number</label>
                        				<span>1234567890</span>
                        			</div>
                        		</div>
                        		<div class="card-middle bd-border-none card-grey-bg">
                        			<h3 class="fs-16 fw-6 lh-normal">Your Role Permission</h3>
                                    <div class="role-permission-list">
                                  		<span class="tag green taxes-tag">List</span>	
                                        <span class="tag green taxes-tag">Create</span> 
                                        <span class="tag green taxes-tag">Update</span> 
                                        <span class="tag green taxes-tag">Delete</span> 
                                    </div>
                        		</div>
                        	</div>
	                    </div>
	                </article>
	            </section>
	        </form>
		</x-admin-layout>
	</div>
</div>