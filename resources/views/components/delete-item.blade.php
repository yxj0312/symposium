<form method="POST" action="{{ $route }}">
  @method('delete')
  @csrf

  <a :href="route('logout')"
    onclick="event.preventDefault();
        this.closest('form').submit();">
    {{ $text }}
  </a>
</form>