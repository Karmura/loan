var getarticle = document.getElementById('articlelink');
var getloan = document.getElementById('loan');
var getdownload = document.getElementById('download');
var getcarousel = document.getElementById('carousel');

let getarticlepage = document.getElementById('article_page');
let getloanpage = document.getElementById('loan_page');
let getdownloadpage = document.getElementById('download_page');
let getcarouselpage = document.getElementById('carousel_page');

getarticle.addEventListener('click', function(){
    getarticlepage.classList.remove('hide_blade');
    getloanpage.classList.add('hide_blade');
    getdownloadpage.classList.add('hide_blade');
    getcarouselpage.classList.add('hide_blade');

    getarticle.classList.add('activearticle');
    getloan.classList.remove('activearticle');
    getdownload.classList.remove('activearticle');
    getcarousel.classList.remove('activearticle');
});

getloan.addEventListener('click', function(){
    getarticlepage.classList.add('hide_blade');
    getloanpage.classList.remove('hide_blade');
    getdownloadpage.classList.add('hide_blade');
    getcarouselpage.classList.add('hide_blade');

    getarticle.classList.remove('activearticle');
    getloan.classList.add('activearticle');
    getdownload.classList.remove('activearticle');
    getcarousel.classList.remove('activearticle');
});
getdownload.addEventListener('click', function(){
    getarticlepage.classList.add('hide_blade');
    getloanpage.classList.add('hide_blade');
    getdownloadpage.classList.remove('hide_blade');
    getcarouselpage.classList.add('hide_blade');

    getarticle.classList.remove('activearticle');
    getloan.classList.remove('activearticle');
    getdownload.classList.add('activearticle');
    getcarousel.classList.remove('activearticle');
});
getcarousel.addEventListener('click', function(){
    getarticlepage.classList.add('hide_blade');
    getloanpage.classList.add('hide_blade');
    getdownloadpage.classList.add('hide_blade');
    getcarouselpage.classList.remove('hide_blade');

    getarticle.classList.remove('activearticle');
    getloan.classList.remove('activearticle');
    getdownload.classList.remove('activearticle');
    getcarousel.classList.add('activearticle');
});
