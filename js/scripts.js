/*!
* Start Bootstrap - Freelancer v7.0.7 (https://startbootstrap.com/theme/freelancer)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});


function diagnoseSymptoms(batuk, pilek, demam, demamValue, nyeri_otot, batuk_berdahak, sesak_napas, pilek_disertai_ingus_hijau, nyeri_wajah, batuk_disertai_gatal_tenggorokan, batuk_disertai_darah, demam_turun_naik, kelelahan_berlebih, pilek_berwarna_kuning_hijau, sakit_gigi, sakit_kepala_berat, batuk_kering_terus_menerus, batuk_malam_hari, pilek_hanya_pagi_hari, pilek_disertai_nyeri_tenggorokan, demam_disertai_ruam_kulit, demam_malam_hari) {

    if (batuk && pilek && demam) {
        console.log("Kemungkinan besar Anda mengalami Influenza atau infeksi saluran pernapasan berat. Jika gejala tidak membaik dalam 3 hari atau semakin parah, segera konsultasikan dengan dokter.");
        
        if (demamValue > 39 && nyeri_otot) {
            console.log("Kemungkinan besar ini Influenza berat. Segera periksa ke dokter.");
        } else if (batuk_berdahak && sesak_napas) {
            console.log("Kemungkinan Anda mengalami pneumonia. Segera konsultasikan dengan dokter.");
        }
    } else if (batuk && pilek) {
        console.log("Anda mungkin mengalami flu biasa atau alergi. Jika batuk berdahak atau pilek berlangsung lebih dari 7 hari, sebaiknya periksa ke dokter.");
        
        if (pilek_disertai_ingus_hijau && nyeri_wajah) {
            console.log("Kemungkinan Anda mengalami sinusitis. Sebaiknya konsultasi dengan dokter.");
        } else if (batuk_disertai_gatal_tenggorokan) {
            console.log("Kemungkinan ini alergi. Hindari pemicu alergi dan pantau gejala.");
        }
    } else if (batuk && demam) {
        console.log("Kemungkinan Anda mengalami bronkitis atau pneumonia. Jika demam tinggi (lebih dari 38.5°C) atau batuk semakin berat, segera konsultasikan dengan dokter.");
        
        if (batuk_disertai_darah) {
            console.log("Gejala serius. Segera periksa ke dokter untuk evaluasi lebih lanjut.");
        } else if (demam_turun_naik && kelelahan_berlebih) {
            console.log("Kemungkinan ini bronkitis kronis. Segera konsultasikan.");
        }
    } else if (pilek && demam) {
        console.log("Anda mungkin mengalami flu atau sinusitis. Jika pilek disertai nyeri wajah atau demam tidak turun dalam 3 hari, sebaiknya periksa ke dokter.");
        
        if (pilek_berwarna_kuning_hijau && sakit_gigi) {
            console.log("Kemungkinan besar sinusitis berat. Segera konsultasikan.");
        } else if (demamValue > 38 && sakit_kepala_berat) {
            console.log("Kemungkinan infeksi lebih serius. Periksa ke dokter.");
        }
    } else if (batuk) {
        console.log("Kemungkinan Anda mengalami infeksi saluran pernapasan atas ringan atau alergi. Jika batuk berlangsung lebih dari 10 hari, pertimbangkan untuk berkonsultasi dengan dokter.");
        
        if (batuk_kering_terus_menerus) {
            console.log("Kemungkinan Anda mengalami batuk alergi atau asma. Pertimbangkan konsultasi lebih lanjut.");
        } else if (batuk_malam_hari) {
            console.log("Ini bisa jadi asma. Periksa ke dokter jika sering terjadi.");
        }
    } else if (pilek) {
        console.log("Anda mungkin mengalami flu ringan atau alergi. Jika pilek berlangsung lebih dari seminggu atau disertai gejala lain, sebaiknya periksa ke dokter.");
        
        if (pilek_hanya_pagi_hari) {
            console.log("Kemungkinan pilek alergi. Hindari alergen yang memicu.");
        } else if (pilek_disertai_nyeri_tenggorokan) {
            console.log("Ini bisa jadi gejala awal flu. Perbanyak istirahat.");
        }
    } else if (demam) {
        console.log("Kemungkinan Anda mengalami infeksi bakteri atau virus. Jika demam tinggi tidak turun dalam 3 hari atau disertai gejala lain, segera konsultasikan dengan dokter.");
        
        if (demam_disertai_ruam_kulit) {
            console.log("Kemungkinan infeksi virus seperti demam berdarah. Segera periksa ke dokter.");
        } else if (demam_malam_hari) {
            console.log("Ini bisa jadi gejala malaria. Konsultasikan jika gejala menetap.");
        }
    } else {
        console.log("Anda tampaknya sehat atau tidak memiliki gejala terkait. Jika Anda merasa ada masalah yang tidak terdeteksi, pertimbangkan untuk berkonsultasi dengan dokter.");
    }
}

document.getElementById('diagnosisForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah form refresh
    alert('Form berhasil disubmit. Diagnosa akan diproses.');
});