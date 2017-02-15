<div class="box same-height">
    <p class="has-text-centered">
        <i class="fa {{ $icon }} fa-5x icon-block"></i>
    </p>
    <br/>
    <p class="control">{{ $slot }}</p>
    <br/>
    <p class="has-text-centered">
        <a href="{{ $linkUrl }}" class="button is-{{ $linkColor }} is-outlined">{{ $linkText }}</a>
    </p>
</div>