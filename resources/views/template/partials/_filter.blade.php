<!-- FILTER -->

<div id="main-container-menu" class="object">
    <div class="container-menu">

        <div id="main-cross">
            <div id="cross-menu"></div>
        </div>

        <div id="main-small-logo">
            <div class="small-logo"></div>
        </div>

        <div id="main-premium-ressource">
            <div class="premium-ressource"><a href=" {{ Route('categories.show', ['category' => 1 ])}} ">Premium resources</a></div>
        </div>

        <div id="main-themes">
            <div class="themes"><a href="{{ Route('categories.show', ['category' => 4 ])}}">Latest themes</a></div>
        </div>

        <div id="main-psd">
            <div class="psd"><a href="{{ Route('categories.show', ['category' => 1 ])}}">PSD goodies</a></div>
        </div>

        <div id="main-ai">
            <div class="ai"><a href="{{ Route('categories.show', ['category' => 2 ])}}">Illustrator freebies</a></div>
        </div>

        <div id="main-font">
            <div class="font"><a href="{{ Route('categories.show', ['category' => 3 ])}}">Free fonts</a></div>
        </div>

        <div id="main-photo">
            <div class="photo"><a href="{{ Route('categories.show', ['category' => 5 ])}}">Free stock photos</a></div>
        </div>

    </div>
</div>