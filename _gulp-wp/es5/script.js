(function($) {

/* --------------------------------------------------
fitie : ie で object-fit 使用できるように
-------------------------------------------------- */
// IE11 object-fit 対策
// font-family: 'object-fit: cover;';
var objectFitImages=function(){"use strict";function t(t,e){return"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='"+t+"' height='"+e+"'%3E%3C/svg%3E"}function e(t){if(t.srcset&&!p&&window.picturefill){var e=window.picturefill._;t[e.ns]&&t[e.ns].evaled||e.fillImg(t,{reselect:!0}),t[e.ns].curSrc||(t[e.ns].supported=!1,e.fillImg(t,{reselect:!0})),t.currentSrc=t[e.ns].curSrc||t.src}}function i(t){for(var e,i=getComputedStyle(t).fontFamily,r={};null!==(e=u.exec(i));)r[e[1]]=e[2];return r}function r(e,i,r){var n=t(i||1,r||0);b.call(e,"src")!==n&&h.call(e,"src",n)}function n(t,e){t.naturalWidth?e(t):setTimeout(n,100,t,e)}function c(t){var c=i(t),o=t[l];if(c["object-fit"]=c["object-fit"]||"fill",!o.img){if("fill"===c["object-fit"])return;if(!o.skipTest&&f&&!c["object-position"])return}if(!o.img){o.img=new Image(t.width,t.height),o.img.srcset=b.call(t,"data-ofi-srcset")||t.srcset,o.img.src=b.call(t,"data-ofi-src")||t.src,h.call(t,"data-ofi-src",t.src),t.srcset&&h.call(t,"data-ofi-srcset",t.srcset),r(t,t.naturalWidth||t.width,t.naturalHeight||t.height),t.srcset&&(t.srcset="");try{s(t)}catch(t){window.console&&console.warn("https://bit.ly/ofi-old-browser")}}e(o.img),t.style.backgroundImage='url("'+(o.img.currentSrc||o.img.src).replace(/"/g,'\\"')+'")',t.style.backgroundPosition=c["object-position"]||"center",t.style.backgroundRepeat="no-repeat",t.style.backgroundOrigin="content-box",/scale-down/.test(c["object-fit"])?n(o.img,function(){o.img.naturalWidth>t.width||o.img.naturalHeight>t.height?t.style.backgroundSize="contain":t.style.backgroundSize="auto"}):t.style.backgroundSize=c["object-fit"].replace("none","auto").replace("fill","100% 100%"),n(o.img,function(e){r(t,e.naturalWidth,e.naturalHeight)})}function s(t){var e={get:function(e){return t[l].img[e?e:"src"]},set:function(e,i){return t[l].img[i?i:"src"]=e,h.call(t,"data-ofi-"+i,e),c(t),e}};Object.defineProperty(t,"src",e),Object.defineProperty(t,"currentSrc",{get:function(){return e.get("currentSrc")}}),Object.defineProperty(t,"srcset",{get:function(){return e.get("srcset")},set:function(t){return e.set(t,"srcset")}})}function o(){function t(t,e){return t[l]&&t[l].img&&("src"===e||"srcset"===e)?t[l].img:t}d||(HTMLImageElement.prototype.getAttribute=function(e){return b.call(t(this,e),e)},HTMLImageElement.prototype.setAttribute=function(e,i){return h.call(t(this,e),e,String(i))})}function a(t,e){var i=!y&&!t;if(e=e||{},t=t||"img",d&&!e.skipTest||!m)return!1;"img"===t?t=document.getElementsByTagName("img"):"string"==typeof t?t=document.querySelectorAll(t):"length"in t||(t=[t]);for(var r=0;r<t.length;r++)t[r][l]=t[r][l]||{skipTest:e.skipTest},c(t[r]);i&&(document.body.addEventListener("load",function(t){"IMG"===t.target.tagName&&a(t.target,{skipTest:e.skipTest})},!0),y=!0,t="img"),e.watchMQ&&window.addEventListener("resize",a.bind(null,t,{skipTest:e.skipTest}))}var l="bfred-it:object-fit-images",u=/(object-fit|object-position)\s*:\s*([-.\w\s%]+)/g,g="undefined"==typeof Image?{style:{"object-position":1}}:new Image,f="object-fit"in g.style,d="object-position"in g.style,m="background-size"in g.style,p="string"==typeof g.currentSrc,b=g.getAttribute,h=g.setAttribute,y=!1;return a.supportsObjectFit=f,a.supportsObjectPosition=d,o(),a}();

/* --------------------------------------------------
  global menu
-------------------------------------------------- */
const menuWrap = '.header-menu';
const BtnOpen = '.btn-menu';
const BtnClose = '.btn-menu' . isActive;
const isActive = 'is-active';
$(BtnOpen).on('tap click', function(){
  $(this).toggleClass( isActive );
  $(menuWrap).toggleClass( isActive );
});
$(BtnClose).on('tap click', function(){
  $(this).toggleClass( isActive );
  $(menuWrap).toggleClass( isActive );
});

/* --------------------------------------------------
  scroll action: view navi
-------------------------------------------------- */
const $headNav = $('.main-navi-wrap');
const $gNav = $('.header-menu');
const $scrollY = '200';
const $addclass = 'is-fixed';
const $rmvclass = 'is-fixed-rmv';
$(window).on('load scroll', function () {
  if( $(this).scrollTop() > $scrollY && $headNav.hasClass($addclass) == false ) {
    $headNav.removeClass($rmvclass);
    $headNav.addClass($addclass);
    $gNav.removeClass($rmvclass);
    $gNav.addClass($addclass);
  }
  else if( $(this).scrollTop() < $scrollY && $headNav.hasClass($addclass) == true ){
    $headNav.removeClass($addclass);
    $gNav.removeClass($addclass);
    $headNav.addClass($rmvclass).on('animationend webkitAnimationEnd',function(){
      $headNav.removeClass($rmvclass);
      $gNav.removeClass($rmvclass);
    });
  }
});

const pagetop = $('.pagetop');
const adclass2 = 'is-active';
const scrollY2 = 500;
$(window).scroll(function() {
  if ($(window).scrollTop() > scrollY2) {
    pagetop.addClass(adclass2);
  } else {
    pagetop.removeClass(adclass2);
  }
});

/* --------------------------------------------------
  Anchor Link
-------------------------------------------------- */
const $header = $('.main-navi-wrap');
const $anchor = 'a[href^="#"]';

$(function(){
  const urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      scrollToAnker(urlHash) ;
    }, 200);
  }
  $($anchor).click(function() {
    let href= $(this).attr("href");
    let hash = href == "#" || href == "" ? 'html' : href;
    scrollToAnker(hash);
    return false;
  });
  function scrollToAnker(hash) {
    let target = $(hash);
    let headerHeight = $header.height();
    let position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 500, 'swing');
  }
});

/* --------------------------------------------------
  form
-------------------------------------------------- */
const $checkinput = $('[name="koyokeitai"]:radio');
const $changetrg = $('.select-parttimer');

$checkinput.on('change', function () {
  if ($('[value="正社員"]').prop('checked')) {
    $changetrg.find('input').val('');
    $changetrg.css('display','none');
  } else if ($('[value="パート"]').prop('checked')) {
    $changetrg.css('display','flex');
  }
});

/* --------------------------------------------------
  scroll action : object fadein
-------------------------------------------------- */
const fadeInAct = function( entries, observer ) {
  for( let i = 0; i < entries.length; i++ ) {
    if( entries[i].isIntersecting ) {
      entries[i].target.style.cssText = 'visibility: visible; opacity: 1; transform: translateY(0); transition: .6s ease';
    }
  }
}
const options = {
  // root: $('.root'),
  rootMargin: '-25%',
};
const fadeObj = $('.js-fin-obj');
const fadeinAct = new IntersectionObserver( fadeInAct, options );

for( let i = 0; i < fadeObj.length; i++ ) {
  fadeObj[i].style.cssText = 'visivility: hidden; opacity: 0; transition: .35s ease; transform: translateY(30px);'
  fadeinAct.observe( fadeObj[i] );
}

})(jQuery);