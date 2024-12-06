<div class="container d-flex align-items-center gap-3 justify-content-center mt-5">
    <button class="btn btn-danger" wire:click="decrement">-</button>
    <span>{{ $counter }}</span>
    <button class="btn btn-success" wire:click="increment">+</button>
</div>
