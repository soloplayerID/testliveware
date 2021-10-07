<div>
    <h2>Daftar user</h2>

    <input type="search" wire:model.defer="search" placeholder="search user..">
    <button wire:click="searchUser">Search User</button>

    <livewire:user.create >

    @foreach ($users as $user)
      <livewire:user.show :user="$user" :key="$user->id">
    @endforeach
</div>
