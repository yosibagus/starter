var baseurl = "http://localhost/informatika.unibamadura.ac.id/";

function loadContent(hash) {
    if (hash == '') {
        hash = 'home';
    }
    $('#main').load(baseurl + 'user/' + hash);
}

$(window).on('hashchange', function () {
    loadContent(location.hash.slice(1));
});

var url = window.location.href;
var hash = url.substring(url.indexOf("#") + 1);

if (hash == url) {
    hash = 'home';
}

$(document).ready(function () {
    $('#main').load(baseurl + 'user/' + hash);
})