//Cookie de session

// création du cookie à l'endroit où on veut. exemple : au clic sur la croix de fermeture du popin 
document.cookie = 'monCookieAmoi=1; path=/';

// au ready, on vérifie si le cookie existe ou non. Si oui, on cache la popin
if(document.cookie.match('monCookieAmoi=1')){
   $('.msg_old_navigator').hide();
}

// COOKIE AVEC UNE DATE d'expiration
var expires = new Date();
expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
document.cookie = 'monCookieAmoi=1;expires=' + expires.toUTCString()+'; path=/';