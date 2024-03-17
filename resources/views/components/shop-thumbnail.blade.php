<div class="">
  @if (empty($filename))
    <img src="{{ asset('images/no_image.jpg') }}" alt="no_image">
  @else
    <img src="{{ asset('storage/shops/' . $filename) }}" alt="画像">
  @endif
</div>