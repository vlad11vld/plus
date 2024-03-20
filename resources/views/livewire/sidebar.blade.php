<div>
  <div class="flex">
  <div class="relative flex flex-col bg-clip-border bg-blue-900 text-white h-[100vh] w-full max-w-[20rem] p-4 shadow-xl shadow-blue-gray-900/5">
    <div class="mb-2 p-4">
      <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-white">PLUS+</h5>
    </div>
    <div class="flex flex-col">
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
          <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
              {{ __('Dashboard') }}
          </x-sidebar-link>
      </div>
    </div>
  </div>
    <div class="w-full ml-[20rm] h-[100px">
      <livewire:layout.navigation /></div>
   </div>
</div>