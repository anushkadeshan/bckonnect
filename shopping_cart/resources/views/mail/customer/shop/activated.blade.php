@component('mail::message')
# Congradulations

Your Shop is now Active

@component('mail::button', ['url' => route('shops.show',$shop->id)])
Access
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
