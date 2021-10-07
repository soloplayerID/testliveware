<div>
  <form wire:submit.prevent="store">
    <input class="bg-gray-100" placeholder="user" wire:model="name" type="text">
    @error('name') <span class="error">{{$message}}</span>@enderror
    <input class="bg-gray-100" placeholder="email" wire:model="email" type="text">
    @error('email') <span class="error">{{$message}}</span>@enderror
    <input class="bg-gray-100" placeholder="password" wire:model="password" type="password">
    @error('password') <span class="error">{{$message}}</span>@enderror
    <button>submit</button>
  </form>
</div>
