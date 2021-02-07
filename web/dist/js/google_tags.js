window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-174139974-1', {'send_page_view': false});

function initRingostat(){
    if (typeof(ga) !== 'undefined') {
        ga('gtag_UA_174139974_1.require','ringostat');
        gtag('event', 'page_view');
        (function (d,s,u,e,p) {
            p=d.getElementsByTagName(s)[0],e=d.createElement(s),e.async=1,e.src=u,p.parentNode.insertBefore(e, p);
        })(document, 'script', 'https://script.ringostat.com/v4/75/754c4a4c855e4009d2e0c7f96bd8949accc98b6e.js');
    } else {
        setTimeout(initRingostat,200);
    }
}

initRingostat();