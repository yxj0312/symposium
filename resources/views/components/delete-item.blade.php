<form method="POST" action="{{ $route }}">
  @csrf

  <a :href="route('logout')"
    onclick="event.preventDefault();
        this.closest('form').submit();">
    {{ $text }}
  </a>
</form>