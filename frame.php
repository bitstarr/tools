<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mobile Frame</title>
<style>
 html {
    -ms-text-size-adjust: 100%; /* 1 */
    -webkit-text-size-adjust: 100%; /* 1 */
    box-sizing: border-box; /* 1 */
}
*, *:before, *:after { box-sizing: inherit; } /* 3 */

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, mark, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, figure { margin: 0; padding: 0; border: 0; outline: 0; font-weight: inherit; font-style: inherit; font-size: 100%; font-family: inherit; vertical-align: baseline; }

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section,summary { display: block; }
/* remember to define focus styles! */
:focus { outline: 0; }
ol, ul { list-style: none; }
/* tables still need 'cellspacing="0"' in the markup */
table { border-collapse: separate; border-spacing: 0; }
/* Webkit-Browser machen einen 2px margin außerhalb von Form-Elementen */
button, input, select, textarea { margin: 0; }
/* Scrollbar erzwingen für nicht IE, verhindert springen der Seite */
html { overflow: hidden; }

body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-width: 100vw;
    min-height: 100vh;
    font: 1em/1.2  BlinkMacSystemFont, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    background-color: rgb(237, 242, 247);
}
.sizer {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    padding: 1em;
    color: #fff;
    background: #111;
}
.button {
    padding: 1ex;
    color: inherit;
    background: none;
    border: 0;
    cursor: pointer;
}
.button + .button {
    margin-left: 1em;
}
.stage {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.device {
    position: relative;
    padding: 3em 1em 5em;
    margin: auto;
    background: #111;
    border-radius: 1em;
    box-shadow: inset 1px 1px rgba( 255, 255, 255, .5 ),
        0 2.8px 2.2px rgba(0, 0, 0, 0.02),
        0 6.7px 5.3px rgba(0, 0, 0, 0.028),
        0 12.5px 10px rgba(0, 0, 0, 0.035),
        0 22.3px 17.9px rgba(0, 0, 0, 0.042),
        0 41.8px 33.4px rgba(0, 0, 0, 0.05),
        0 100px 80px rgba(0, 0, 0, 0.07);
}
.device::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 1.5em;
    transform: translate( -50%, -50% );
    width: 8em;
    height: 6px;
    background: #444;
    border-radius: 5px;
    box-shadow: inset -1px -1px rgba( 255, 255, 255, .5 );
}
.frame {
    background: #fff;
    border-radius: 3px;
    transition: width .3s, height .3s;
}
</style>
</head>
<body>
    <div class="sizer">
        <button class="button" data-size="mini">Mini</button>
        <button class="button" data-size="bot">Bot</button>
        <button class="button" data-size="smart">Smart</button>
        <button class="button" data-size="pro">Pro</button>
        <button class="button" data-size="pad">Pad</button>
        <button class="button" data-size="lap">Lap</button>
    </div>
    <div class="stage">
    <div class="device">
        <iframe class="frame" id="frame" src="/" frameborder="0" width="360" height="640"></iframe>
    </div>
    </div>

<script>
    const sizes = {
            mini: [ 320, 568 ],
            bot: [ 360, 640 ],
            smart: [ 375, 667 ],
            pro: [ 414, 736 ],
            pad: [ 768, 1024 ],
            lap: [ 1500, 850 ],
        },
        frame = document.getElementById( 'frame' );

    document.querySelectorAll( 'button.button' ).forEach( function( button ) {
        button.addEventListener( 'click', function( ev ) {
            frame.width = sizes[ this.dataset.size ][0];
            frame.height = sizes[ this.dataset.size ][1];
        });
    });
</script>
</body>
</html>