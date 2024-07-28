<div class="lang">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-globe"></i> {{ __('اللغة') }} 
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="{{ route('lang','en') }}">{{ __('أنجليزي') }} </a></li>
        <li><a class="dropdown-item" href="{{ route('lang','ar') }}">{{ __('عربي') }}</a></li>
      </ul>
    </div>
</div>
  