@php
  if ($type === 'shops') {
    $path = 'storage/shops/';
  }
  if ($type === 'products') {
    $path = 'storage/products/';
  }

@endphp

<div class="">
  @if (empty($filename))
    <img src="{{ asset('images/no_image.jpg') }}" alt="no_image">
  @else
    <img src="{{ asset($path . $filename) }}" alt="画像">
  @endif
</div>