<div class="attribute-name">
  <span>{{ $attributeName }}</span>
  <div class="fff">
    @if($required)
    <div class="required">{{ __("必須") }}</div>
    @endif
    <i class="aaa"></i>
    <p class="bbb">{{ $attributeInfo }}</p>
  </div>
</div>