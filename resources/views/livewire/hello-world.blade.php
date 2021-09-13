<div>
    @foreach($users as $user)
        @livewire('say-hi',['user' => $user],key($user->id))
    @endforeach

    <hr>
    <button wire:click="$refresh">refresh</button>
    {{ now() }}
</div>
