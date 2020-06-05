<a class="animate-top" style="cursor:pointer" wire:click="addToCart" title="Add To Cart">
    <i class="pe-7s-cart"></i>
</a>

@push('scripts')
<script type="text/javascript">
   window.livewire.on('itemAdded', function () {
        alert("hi2");
    });

</script>
@endpush



