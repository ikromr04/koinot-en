@props([
    'class' => '',
])

<ul class="{{ $class }} contacts-list">
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">General questions</h3>
    {{-- <a class="contacts-list__phone" href="https://t.me/hrkoinotinav" target="_blank">@hrkoinotinav</a> --}}
    <a class="contacts-list__email" href="mailto:info@koinotinav.tj">info@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="16" height="19">
        <use xlink:href="#file"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Staff</h3>
    {{-- <a class="contacts-list__phone" href="https://t.me/hrkoinotinav" target="_blank">@hrkoinotinav</a> --}}
    <a class="contacts-list__email" href="mailto:hr@koinotinav.tj">hr@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="18" height="18">
        <use xlink:href="#star"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Investment and development</h3>
    {{-- <a class="contacts-list__phone" href="https://t.me/hrkoinotinav" target="_blank">@hrkoinotinav</a> --}}
    <a class="contacts-list__email" href="mailto:marketing@koinotinav.tj">marketing@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="16" height="17">
        <use xlink:href="#search"></use>
      </svg>
    </span>
  </li>
</ul>
