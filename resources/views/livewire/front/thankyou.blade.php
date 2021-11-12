<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <x-customer-layout>


    	<h1>Thank you </h1>
    	<div wire:key="alert">

         @if (session()->has('success'))

         <div class="alert alert-success">

            {{ session('success') }}

         </div>

         @endif
 
      </div>

       <a href="{{url('/')}}"><button class="btn move-heart-button">Redirect home</button></a>
    </x-customer-layout>
</div>
