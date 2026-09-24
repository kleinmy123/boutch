<!-- site/snippets/header.php -->
<header class="header">
    <nav>
        <ul>
            <li><a href="<?= $site->url() ?>"><?= $site->title() ?></a></li>
            <li><a href="<?= $site->find('innen')->url() ?>">innen</a></li>
            <li><a href="<?= $site->find('aussen')->url() ?>">außen</a></li>
            <li><a href="<?= $site->find('info')->url() ?>">Info</a></li>
        </ul>
    </nav>
</header>
    
<svg width="0" height="0">
    <filter id="warp1">
        <feTurbulence
        type="fractalNoise"
        baseFrequency="0.02"
        numOctaves="2"
        seed="2"
        result="noise" />

        <feDisplacementMap
        in="SourceGraphic"
        in2="noise"
        scale="20" />
    </filter>

    <filter id="warp2">
        <feTurbulence
        type="fractalNoise"
        baseFrequency="0.02"
        numOctaves="2"
        seed="3"
        result="noise" />

        <feDisplacementMap
        in="SourceGraphic"
        in2="noise"
        scale="30" />
    </filter>

    <filter id="warp3">
        <feTurbulence
        type="fractalNoise"
        baseFrequency="0.08"
        numOctaves="2"
        seed="2"
        result="noise" />

        <feDisplacementMap
        in="SourceGraphic"
        in2="noise"
        scale="10" />
    </filter>

    <filter id="warp4">
        <feTurbulence
        type="fractalNoise"
        baseFrequency="0.08"
        numOctaves="2"
        seed="4"
        result="noise" />

        <feDisplacementMap
        in="SourceGraphic"
        in2="noise"
        scale="30" />
    </filter>
</svg>