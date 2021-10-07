<div>
  <form wire:submit.prevent="store">
    <input class="bg-gray-100" placeholder="user" wire:model="name" type="text">
    <input class="bg-gray-100" placeholder="email" wire:model="email" type="text">
    <input class="bg-gray-100" placeholder="password" wire:model="password" type="password">
    <div class="">
      @error('name') <span class="error">{{$message}}</span>@enderror
      @error('email') <span class="error">{{$message}}</span>@enderror
      @error('password') <span class="error">{{$message}}</span>@enderror
    </div>
    <button>submit</button>
  </form>
</div>
