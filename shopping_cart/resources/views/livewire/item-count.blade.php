<div>
    <a href="{{route('cart.index')}}">My Cart <br>{{$itemCount}} Item</a>
</div>
@push('scripts')
<script>
   window.livewire.on('change-focus-other-field', function () {
        alert("hi");
    });

</script>
@endpush