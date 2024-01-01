let clickCount = 0;
const searchForm = document.querySelector(".search-form");
const navbar = document.querySelector(".navbar");
const menuBtn = document.querySelector("#navbar-btn");
const searchBtn = document.querySelector("#search-btn");
const userIcon = document.getElementById("user-icon");
const userButtons = document.getElementById("user-buttons");
document.addEventListener("click", function (e) {
    const isClickInsideSearchBtn = e.composedPath().includes(searchBtn);
    const isClickInsideSearchForm = e.composedPath().includes(searchForm);
    const isClickInsidemenuBtn = e.composedPath().includes(menuBtn);
    const isClickInsidenavbar = e.composedPath().includes(navbar);
    const isClickInsideUserIcon = e.composedPath().includes(userIcon);

    if (!isClickInsideSearchBtn && !isClickInsideSearchForm) {
        searchForm.classList.remove("active");
        if (!isClickInsidemenuBtn && !isClickInsidenavbar && !isClickInsideUserIcon) {
            navbar.classList.remove("active");
            toggleButtons(false);
        }
    }

    if (!isClickInsideUserIcon && !isClickInsideSearchBtn) {
        toggleButtons(false);
        clickCount = 0;
    }
});

searchBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    searchForm.classList.toggle("active");
    if (searchForm.classList.contains("active")) {
        searchForm.style.zIndex = "1000";
    } else {
        searchForm.style.zIndex = "auto";
    }
    navbar.classList.remove("active");
    toggleButtons(false);
    clickCount = 0;
});

menuBtn.addEventListener("click", function (e) {
    e.stopPropagation();
    searchForm.classList.remove("active");
    navbar.classList.toggle("active");
    toggleButtons(false);
    clickCount = 0;
});

document.addEventListener("click", function (e) {
    if (!e.composedPath().includes(searchForm)) {
        searchForm.classList.remove("active");
    }
});
userIcon.addEventListener("click", function (e) {
    e.stopPropagation();
    userIcon.classList.toggle("active");
    toggleButtons(userIcon.classList.contains("active"));
});

document.addEventListener("click", function () {
    toggleButtons(false);
});

function toggleButtons(open = true) {
    userButtons.style.display = open ? "flex" : "none";
}

document.getElementById("button1").addEventListener("click", function () {
    window.location.href = "girisYap.php";
});

document.getElementById("button2").addEventListener("click", function () {
    window.location.href = "kayitOl.php";
});

document.addEventListener("click", function () {
    toggleButtons(false);
    clickCount = 0;
});
function urunSepeteEkle(urunAdi, urunAciklama, urunFiyati, urunResim) {

    var sepetUrun = {
        ad: urunAdi,
        aciklama: urunAciklama,
        fiyat: urunFiyati,
        resim: urunResim, 
        adet: 1 
    };
    var sepetIcerik = JSON.parse(localStorage.getItem('sepet')) || [];
    var urunVarMi = false;
    for (var i = 0; i < sepetIcerik.length; i++) {
        if (sepetIcerik[i].ad === urunAdi) {
            urunVarMi = true;
            sepetIcerik[i].adet += 1;
            sepetIcerik[i].fiyat += urunFiyati;
            break;
        }
    }
    if (!urunVarMi) {
        sepetIcerik.push(sepetUrun);
    }
    localStorage.setItem('sepet', JSON.stringify(sepetIcerik));
    guncelToplamFiyatiGoster();
}
document.addEventListener('DOMContentLoaded', function () {
    var sepetIcerik = JSON.parse(localStorage.getItem('sepet')) || [];
    if (sepetIcerik.length > 0) {
        var urunHTML = '';
        for (var i = 0; i < sepetIcerik.length; i++) {
            urunHTML += '<div class="urunler">';
            urunHTML += '<img src="' + (sepetIcerik[i].resim || 'varsayilan_resim_yolu.jpg') + '" alt="' + sepetIcerik[i].ad + '">';
            urunHTML += '<div class="urun-bilgileri">';
            urunHTML += '<h1>' + sepetIcerik[i].ad + '</h1>';
            urunHTML += '<p>Fiyat: ' + sepetIcerik[i].fiyat + ' TL</p>';
            urunHTML += '<p>Adet: ' + sepetIcerik[i].adet + '</p>';
            urunHTML += '</div>';
            urunHTML += '<i class="silme" onclick="urunuSil(' + i + ')">Sil</i>';
            urunHTML += '</div>';
        }
        document.getElementById('urun-listesi').innerHTML = urunHTML;
        guncelToplamFiyatiGoster();
        document.getElementById('toplam-fiyat-ve-odemeye-gec').style.display = 'block';
    } else {
        document.getElementById('sepet-bos-mesaj').style.display = 'block';
    }
});

function urunuSil(index) {
    var sepetIcerik = JSON.parse(localStorage.getItem('sepet')) || [];
    var silinecekUrun = sepetIcerik[index];
    sepetIcerik.splice(index, 1);
    if (silinecekUrun.adet > 1) {
        silinecekUrun.adet -= 1;
        silinecekUrun.fiyat -= silinecekUrun.fiyat / (silinecekUrun.adet + 1);
        sepetIcerik.push(silinecekUrun);
    }
    localStorage.setItem('sepet', JSON.stringify(sepetIcerik));
    location.reload();
    guncelToplamFiyatiGoster();
}
function guncelToplamFiyatiGoster() {
    var sepetIcerik = JSON.parse(localStorage.getItem('sepet')) || [];
    var toplamFiyat = sepetIcerik.reduce(function (acc, urun) {
        return acc + urun.fiyat * urun.adet;
    }, 0);
    document.getElementById('toplam-fiyat-span').textContent = toplamFiyat.toFixed(2);
}


function odemeyeGec() {
    alert("Ödeme sayfasına yönlendiriliyorsunuz...");
}
var resim = document.getElementsByClassName("resim");
var kutucuk = document.getElementsByTagName("li");
var index = 0;
galeri();
basla();
function galeri() {
    if (index >= resim.length) {
        index = 0;
    } else if (index < 0) {
        index = resim.length - 1;
    }
    for (i = 0; i < resim.length; i++) {
        resim[i].classList.remove("aktif2");
        kutucuk[i].classList.remove("aktiflist");
    }
    resim[index].classList.add("aktif2");
    kutucuk[index].classList.add("aktiflist");
}

function ileri() {
    index++;
    galeri();
}

function geri() {
    index--;
    galeri();
}

function dur() {
    clearInterval(sure);
}

function basla() {
    sure = setInterval(ileri, 2000);
}

function toggleButtons(open = true) {
    userButtons.style.display = open ? "flex" : "none";
}
        