{{-- this file can be used to wrap around the items in files --}}

<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
  </div>

{{-- also, whatever the item we are wrapping with the card will be outputted Here --}}
