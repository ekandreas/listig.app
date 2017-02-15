<?php $listig = listig(263); ?>

<div class="section main">
    <div class="container">
        <div class="columns">
            @foreach($listig as $section)
                <div class="column is-{{ 12/sizeof($listig) }}">
                    @component('views.front.panel', ['icon'=>'fa-user','linkUrl'=>$section->url,'linkText'=>$section->headline,'linkColor'=>'info',])
                        {{ $section->excerpt }}
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
</div>
