<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $_SERVER['HTTP_HOST']; ?></title>
<link rel="icon" href="favicon.svg" type="image/svg+xml">
<style>
:where( :not( iframe, canvas, img, svg, video ):not( svg *, symbol * ) ) {
    all: unset;
    display: revert;
    line-height: var( --font-line );
}
*, *::before, *::after {
    box-sizing: border-box;
}
:where( img, picture, video, canvas, svg ):where( :not( svg.icon ) ) {
    display: block;
    max-width: 100%;
    height: auto;
}
:where( a ) {
    --_default: var( --color-link, var( --default-link ) );
    --_hover: var( --color-hover, var( --default-hover ) );

    text-decoration: none;
    color: var( --_color, var( --_default ) );
    cursor: revert;
}
:where( a:focus, a:hover ) {
    --_color: var( --_hover );
}
html, body { height: 100%;}
html {
    -webkit-text-size-adjust: 100%;

    --default-surface: #eeebe3;
    --default-ink: #333;
    --font-line: calc( 1em + .35rem );

    --default-link: #00749d;
    --default-hover: #001d2a;

    --grad-1: hsl( 274 86% 37% );
    --grad-2: hsl( 8 77% 71% );

    --grad-1: hsl( 209 25% 36% );
    --grad-2: hsl( 211 28% 56% );
    --grad-3: hsl( 223 25% 29% );

}
body {
    display: grid;
    grid-auto-rows: auto 1fr;

    font: 1em/var( --font-line ) system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
    color: var( --default-ink );
    background: var( --default-surface );
    -webkit-font-smoothing: antialiased;
    text-decoration-thickness: from-font;

    background: linear-gradient( 180deg,#fff, var(--default-surface) 13em), var(--default-surface);
    background-repeat: no-repeat;
}
.header {
    display: flex;
    margin-bottom: 2em;
    padding: 1em;
    font-size: .8em;
    color: #eee;
    background: #062e03;
    background: linear-gradient(135deg, var( --grad-3 ) 10%, var( --grad-1) 55%, var( --grad-2 ) 90%);
    box-shadow: 0 -1px 3px 0 hsl( 0 0% 0% / .3) inset;
}
.title {
    font-weight: 700;
    text-transform: uppercase;
}
.main {
    display: flex;
}
.content {
    width: min( 90vw, 40ch );
    margin: auto;
    font-size: clamp( 1.2rem, 1.19vw + 0.96rem, 2rem );
}
.content > * + * {
    /* flow-space https://piccalil.li/quick-tip/flow-utility/ */
    margin-top: var( --flow-space, var( --font-line ) );
}
.content h2 {
    font-size: 1.9em;
    font-weight: 700;
}
.content h2 + * {
    --flow-space: calc( var( --font-line ) / 2 );
}
.content :where( a ) { text-decoration: underline; }
</style>
</head>
<body>
    <header class="header">
        <h1 class="title">
            <?php echo $_SERVER['HTTP_HOST']; ?>
        </h1>
    </header>
    <main class="main">
        <div class="content">
            <h2>Diese Domain sucht noch nach dem Sinn des Lebens</h2>
            <p>Hier ist noch nichts los. Aber wenn du diese Domain für eine gute oder verrückte Idee gebrauchen kannst, lass es mich wissen.</p>
            <p>
                <a href="https://sebastianlaube.de">sebastianlaube.de</a>
            </p>
        </div>
    </main>
    <?php echo $_SERVER['HTTP_HOST']; ?>
</body>
</html>