<header class="page-header">
  <div class="page-header__top container">
    <a class="page-header__logo" href="{{ route('main') }}">
      <img
        src="{{ asset('img/main-logo.png') }}"
        width="190"
        height="41"
        alt="Коиноти нав">
    </a>

    <div class="page-header__details details">
      <a class="details__item" href="mailto:info@koinotinav.tj">
        <span class="details__icon">
          <svg width="18" height="16">
            <use xlink:href="#email"></use>
          </svg>
        </span>
        <span class="details__info">info@koinotinav.tj</span>
      </a>
      <a class="details__item" href="https://t.me/hrkoinotinav" target="_blank">
        <span class="details__icon">
          <svg width="16" height="16">
            <use xlink:href="#telegram"></use>
          </svg>
        </span>
        <span class="details__info">@hrkoinotinav</span>
      </a>
    </div>

    <div class="locales">
      <span class="locales__icon">
        <svg width="18" height="18">
          <use xlink:href="#global"></use>
        </svg>
      </span>
      <ul class="locales__list">
        <li class="locales__item">
          <a class="locales__link" href="https://koinotinav.tj">Ru</a>
        </li>
        <li class="locales__item locales__item--current">
          <a class="locales__link">En</a>
        </li>
      </ul>
    </div>
  </div>

  <nav class="page-nav">
    <div class="anim-container">
      <div class="anim"></div>
      <div class="anim second"></div>
      <div class="anim third"></div>
    </div>
    <div class="page-nav__container container">
      <ul class="page-nav__list">
        <li class="page-nav__item {{ $route == 'main' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('main') }}">
            Home
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'about' || $route == 'news' || $route == 'news.show' ? 'page-nav__item--current' : '' }}">
          <button class="page-nav__button">About us</button>

          <ul class="page-nav__sublist page-nav__sublist--hidden">
            <li class="page-nav__subitem {{ request('category') == 'history' ? 'page-nav__subitem--current' : '' }}">
              <a class="page-nav__sublink" href="{{ route('about', 'history') }}">
                History
              </a>
            </li>

            <li class="page-nav__subitem {{ request('category') == 'mission' ? 'page-nav__subitem--current' : '' }}">
              <a class="page-nav__sublink" href="{{ route('about', 'mission') }}">
                Mission, Vision, Values
              </a>
            </li>

            <li class="page-nav__subitem {{ $route == 'news' || $route == 'news.show' ? 'page-nav__subitem--current' : '' }}">
              <a class="page-nav__sublink" href="{{ route('news') }}">
                News
              </a>
            </li>
          </ul>

          <svg class="page-nav__icon" width="16" height="14">
            <use xlink:href="#triangle"></use>
          </svg>
        </li>

        <li class="page-nav__item {{ $route == 'projects' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('projects') }}">
            Companies
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'partnership' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('partnership') }}">
            Partnership
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'contribution' || $route == 'contribution.show' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('contribution') }}">
            Contribution to society
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'carrier' || $route == 'carrier.test' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="https://job.koinotinav.tj/" target="_blank">
            Career
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'contacts' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('contacts') }}">
            Contacts
          </a>
        </li>
      </ul>

      <a class="carrier-link {{ $route == 'carrier' || $route == 'carrier.test' ? 'carrier-link--current' : '' }}" href="https://job.koinotinav.tj/" target="_blank">
        <span class="carrier-link__icon">
          <svg width="18" height="18">
            <use xlink:href="#pero"></use>
          </svg>
        </span>
        Career
      </a>
    </div>
  </nav>
</header>
