const mix = require('laravel-mix');

/**
 * CSS ile yazdığımız kodlarda ihtiyaç duyduğumuz özellik ve eklentiler için saf CSS
 * kodlarına yapılacak tüm işlemleri PostCSS aracılığı ile yapmamız mümkün.
 * Ayrıca PostCSS bu işlemleri JavaScript yardımı ile yapmaktadır.
 * PostCSS ‘in birden fazla eklentisi mevcuttur Sass kodlarını CSS ‘e çevirmek
 * veya yazdığımız CSS kodlarından beğenmediğimiz satırları çıkarabilmek gibi aslında
 * bir sürü eklentiside mevcut. Autoprefixer ise bunlardan biri.
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
