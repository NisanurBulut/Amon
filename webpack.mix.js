const mix = require("laravel-mix");

/**
 * CSS ile yazdığımız kodlarda ihtiyaç duyduğumuz özellik ve eklentiler için saf CSS
 * kodlarına yapılacak tüm işlemleri PostCSS aracılığı ile yapmamız mümkün.
 * Ayrıca PostCSS bu işlemleri JavaScript yardımı ile yapmaktadır.
 * PostCSS ‘in birden fazla eklentisi mevcuttur Sass kodlarını CSS ‘e çevirmek
 * veya yazdığımız CSS kodlarından beğenmediğimiz satırları çıkarabilmek gibi aslında
 * bir sürü eklentiside mevcut. Autoprefixer ise bunlardan biri.
 */

mix.js("resources/js/app.js", "public/js")
    .copy("node_modules/jquery/dist/jquery.js", "public/js/jquery.js")
    .copy("semantic/dist/semantic.min.js", "public/js/semantic.min.js")
    .copy("node_modules/datatables.net/js/jquery.dataTables.min.js", "public/js/jquery.datatables.net.min.js")
    .copy('node_modules/datatables.net-se/js/dataTables.semanticui.min.js','public/js/dataTables.semanticui.min.js')
    .copy("node_modules/highcharts/highcharts.js", "public/js/highcharts.js")
    .copy("node_modules/highcharts/highcharts-3d.js", "public/js/highcharts-3d.js")
    .copy("node_modules/highcharts/modules/cylinder.js", "public/js/highcharts.cylinder.js")
    .copy("node_modules/highcharts/modules/funnel3d.js", "public/js/highcharts.funnel3d.js")
    .copy("node_modules/highcharts/modules/exporting.js", "public/js/highcharts.exporting.js")
    .copy("node_modules/highcharts/modules/accessibility.js", "public/js/highcharts.accessibility.js")
    .copy("node_modules/highcharts/modules/export-data.js", "public/js/highcharts.export-data.js")
    .copy("node_modules/highcharts/modules/pyramid3d.js", "public/js/highcharts.pyramid3d.js")

    .copy('node_modules/highcharts/css/highcharts.css','public/css/highcharts.css')
    .copy("semantic/dist/semantic.min.css", "public/css/semantic.min.css")
    .copy('node_modules/datatables.net-se/css/dataTables.semanticui.min.css','public/css/dataTables.semanticui.min.css')
    .copy('node_modules/semantic-ui-icon/icon.min.css','public/css/icon.min.css')
    .js('resources/js/settings.view.js','public/js/settings.view.js')
    .postCss("resources/css/app.css", "public/css", [
        //
    ]);
