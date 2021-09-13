<div>

    Hello {{ $user->name }} : {{ now() }}
    <button wire:click="$refresh">refresh</button>
</div>
