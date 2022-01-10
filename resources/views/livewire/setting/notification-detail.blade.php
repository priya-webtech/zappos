<div>
	<x-admin-layout>
	<div wire:key="alert">

     @if (session()->has('message'))

     <div class="alert alert-success">

        {{ session('message') }}

     </div>

     @endif

    </div>
    {{-- Care about people's approval and you will be their prisoner. --}}

	    <div class="customer-modal-inner" wire:ignore>
	        <div class="customer-modal">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Change Notification</h4>
	                
	            </div>
	            <div class="modal-body">

	                <form autocomplete="off">
	                    <div class="form-group">
	                        <label>Title: {{$notification->title}}</label>
	                    </div>
	                    <div class="form-group">
	                        <label>Descripation:</label>
	                        <textarea wire:ignore wire:model.debounce.lazy="notification.discripation" class="form-control" required name="discripation" id="discripation"></textarea>
	                    </div>
	                </form>
	            </div>
	            <div class="modal-footer">
	                <button type="submit" wire:click="Update('usernotify')" class="site-btn blue-btn">Save Changes</button>
	            </div>
	        </div>
	    </div>
	
@livewireScripts
<script>
     var areas = Array('discripation');
    $.each(areas, function (i, area) {
    const editor = CKEDITOR.replace(area);
    editor.on('change', function (event) {
            // console.log(event.editor.getData())
    @this.set('notification.discripation', event.editor.getData());
        })
    }); 

</script>
</x-admin-layout>
</div>

