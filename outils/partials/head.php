<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <title><?php echo $title; ?> || Outils gratuits</title>
    <meta name="description" content="Votre guide voyageur gratuit pour vos locations courtes durées">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $site_url; ?>assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $site_url; ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $site_url; ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= $site_url; ?>assets/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#060719">



    <!-- CSS -->
    <!-- <link rel="stylesheet" href="<?= $site_url; ?>assets/css/vendor/bootstrap.min.css"> -->
<style>
@charset "UTF-8";/*!
 * Bootstrap v5.0.2 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-primary:#0d6efd;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#0dcaf0;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0))}*,::after,::before{-webkit-box-sizing:border-box;box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:var(--bs-font-sans-serif);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}hr{margin:1rem 0;color:inherit;background-color:currentColor;border:0;opacity:.25}hr:not([size]){height:1px}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){.h1,h1{font-size:2.5rem}}.h2,h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){.h2,h2{font-size:2rem}}.h3,h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){.h3,h3{font-size:1.75rem}}.h4,h4{font-size:calc(1.275rem + .3vw)}@media (min-width:1200px){.h4,h4{font-size:1.5rem}}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}p{margin-top:0;margin-bottom:1rem}abbr[data-bs-original-title],abbr[title]{-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}ol,ul{padding-left:2rem}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}.small,small{font-size:.875em}.mark,mark{padding:.2em;background-color:#fcf8e3}sub,sup{position:relative;font-size:.75em;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#0d6efd;text-decoration:underline}a:hover{color:#0a58ca}a:not([href]):not([class]),a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:var(--bs-font-monospace);font-size:1em;direction:ltr;unicode-bidi:bidi-override}pre{display:block;margin-top:0;margin-bottom:1rem;overflow:auto;font-size:.875em}pre code{font-size:inherit;color:inherit;word-break:normal}code{font-size:.875em;color:#d63384;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:.875em;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:1em;font-weight:700}figure{margin:0 0 1rem}img,svg{vertical-align:middle}table{caption-side:bottom;border-collapse:collapse}caption{padding-top:.5rem;padding-bottom:.5rem;color:#6c757d;text-align:left}th{text-align:inherit;text-align:-webkit-match-parent}tbody,td,tfoot,th,thead,tr{border-color:inherit;border-style:solid;border-width:0}label{display:inline-block}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}select:disabled{opacity:1}[list]::-webkit-calendar-picker-indicator{display:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}::-moz-focus-inner{padding:0;border-style:none}textarea{resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{float:left;width:100%;padding:0;margin-bottom:.5rem;font-size:calc(1.275rem + .3vw);line-height:inherit}@media (min-width:1200px){legend{font-size:1.5rem}}legend+*{clear:left}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:textfield}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::-webkit-file-upload-button{font:inherit}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}iframe{border:0}summary{display:list-item;cursor:pointer}progress{vertical-align:baseline}[hidden]{display:none!important}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:calc(1.625rem + 4.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-1{font-size:5rem}}.display-2{font-size:calc(1.575rem + 3.9vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-2{font-size:4.5rem}}.display-3{font-size:calc(1.525rem + 3.3vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-3{font-size:4rem}}.display-4{font-size:calc(1.475rem + 2.7vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-4{font-size:3.5rem}}.display-5{font-size:calc(1.425rem + 2.1vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-5{font-size:3rem}}.display-6{font-size:calc(1.375rem + 1.5vw);font-weight:300;line-height:1.2}@media (min-width:1200px){.display-6{font-size:2.5rem}}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:.875em;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote>:last-child{margin-bottom:0}.blockquote-footer{margin-top:-1rem;margin-bottom:1rem;font-size:.875em;color:#6c757d}.blockquote-footer::before{content:"— "}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:.875em;color:#6c757d}.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}@media (min-width:1400px){.container,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{max-width:1320px}}.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x) * -.5);margin-left:calc(var(--bs-gutter-x) * -.5)}.row>*{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-auto>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-1>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-2>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-3>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-4>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-5>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-6>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}@media (min-width:576px){.col-sm{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-sm-auto>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-sm-1>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-sm-2>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-sm-3>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-sm-4>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-sm-5>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-sm-6>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media (min-width:768px){.col-md{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-md-auto>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-md-1>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-md-2>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-md-3>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-md-4>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-md-5>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-md-6>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media (min-width:992px){.col-lg{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-lg-auto>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-lg-1>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-lg-2>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-lg-3>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-lg-4>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-lg-5>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-lg-6>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media (min-width:1200px){.col-xl{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-xl-auto>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-xl-1>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-xl-2>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-xl-3>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-xl-4>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-xl-5>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-xl-6>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}@media (min-width:1400px){.col-xxl{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%}.row-cols-xxl-auto>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.row-cols-xxl-1>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.row-cols-xxl-2>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.row-cols-xxl-3>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.3333333333%}.row-cols-xxl-4>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.row-cols-xxl-5>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:20%}.row-cols-xxl-6>*{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.6666666667%}}.col-auto{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-1{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-2{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-3{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-4{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-5{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-6{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-7{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-8{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-9{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-10{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-11{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-12{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-1{margin-left:8.33333333%}.offset-2{margin-left:16.66666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.33333333%}.offset-5{margin-left:41.66666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.33333333%}.offset-8{margin-left:66.66666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.33333333%}.offset-11{margin-left:91.66666667%}.g-0,.gx-0{--bs-gutter-x:0}.g-0,.gy-0{--bs-gutter-y:0}.g-1,.gx-1{--bs-gutter-x:0.25rem}.g-1,.gy-1{--bs-gutter-y:0.25rem}.g-2,.gx-2{--bs-gutter-x:0.5rem}.g-2,.gy-2{--bs-gutter-y:0.5rem}.g-3,.gx-3{--bs-gutter-x:1rem}.g-3,.gy-3{--bs-gutter-y:1rem}.g-4,.gx-4{--bs-gutter-x:1.5rem}.g-4,.gy-4{--bs-gutter-y:1.5rem}.g-5,.gx-5{--bs-gutter-x:3rem}.g-5,.gy-5{--bs-gutter-y:3rem}@media (min-width:576px){.col-sm-auto{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-sm-1{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-sm-2{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-sm-3{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-sm-4{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-sm-5{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-sm-6{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-sm-7{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-sm-8{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-sm-9{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-sm-10{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-sm-11{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-sm-12{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.33333333%}.offset-sm-2{margin-left:16.66666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.33333333%}.offset-sm-5{margin-left:41.66666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.33333333%}.offset-sm-8{margin-left:66.66666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.33333333%}.offset-sm-11{margin-left:91.66666667%}.g-sm-0,.gx-sm-0{--bs-gutter-x:0}.g-sm-0,.gy-sm-0{--bs-gutter-y:0}.g-sm-1,.gx-sm-1{--bs-gutter-x:0.25rem}.g-sm-1,.gy-sm-1{--bs-gutter-y:0.25rem}.g-sm-2,.gx-sm-2{--bs-gutter-x:0.5rem}.g-sm-2,.gy-sm-2{--bs-gutter-y:0.5rem}.g-sm-3,.gx-sm-3{--bs-gutter-x:1rem}.g-sm-3,.gy-sm-3{--bs-gutter-y:1rem}.g-sm-4,.gx-sm-4{--bs-gutter-x:1.5rem}.g-sm-4,.gy-sm-4{--bs-gutter-y:1.5rem}.g-sm-5,.gx-sm-5{--bs-gutter-x:3rem}.g-sm-5,.gy-sm-5{--bs-gutter-y:3rem}}@media (min-width:768px){.col-md-auto{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-md-1{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-md-2{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-md-3{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-md-4{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-md-5{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-md-6{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-md-7{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-md-8{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-md-9{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-md-10{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-md-11{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-md-12{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.33333333%}.offset-md-2{margin-left:16.66666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.33333333%}.offset-md-5{margin-left:41.66666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.33333333%}.offset-md-8{margin-left:66.66666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.33333333%}.offset-md-11{margin-left:91.66666667%}.g-md-0,.gx-md-0{--bs-gutter-x:0}.g-md-0,.gy-md-0{--bs-gutter-y:0}.g-md-1,.gx-md-1{--bs-gutter-x:0.25rem}.g-md-1,.gy-md-1{--bs-gutter-y:0.25rem}.g-md-2,.gx-md-2{--bs-gutter-x:0.5rem}.g-md-2,.gy-md-2{--bs-gutter-y:0.5rem}.g-md-3,.gx-md-3{--bs-gutter-x:1rem}.g-md-3,.gy-md-3{--bs-gutter-y:1rem}.g-md-4,.gx-md-4{--bs-gutter-x:1.5rem}.g-md-4,.gy-md-4{--bs-gutter-y:1.5rem}.g-md-5,.gx-md-5{--bs-gutter-x:3rem}.g-md-5,.gy-md-5{--bs-gutter-y:3rem}}@media (min-width:992px){.col-lg-auto{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-lg-1{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-lg-2{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-lg-3{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-lg-4{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-lg-5{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-lg-6{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-lg-7{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-lg-8{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-lg-9{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-lg-10{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-lg-11{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-lg-12{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.33333333%}.offset-lg-2{margin-left:16.66666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.33333333%}.offset-lg-5{margin-left:41.66666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.33333333%}.offset-lg-8{margin-left:66.66666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.33333333%}.offset-lg-11{margin-left:91.66666667%}.g-lg-0,.gx-lg-0{--bs-gutter-x:0}.g-lg-0,.gy-lg-0{--bs-gutter-y:0}.g-lg-1,.gx-lg-1{--bs-gutter-x:0.25rem}.g-lg-1,.gy-lg-1{--bs-gutter-y:0.25rem}.g-lg-2,.gx-lg-2{--bs-gutter-x:0.5rem}.g-lg-2,.gy-lg-2{--bs-gutter-y:0.5rem}.g-lg-3,.gx-lg-3{--bs-gutter-x:1rem}.g-lg-3,.gy-lg-3{--bs-gutter-y:1rem}.g-lg-4,.gx-lg-4{--bs-gutter-x:1.5rem}.g-lg-4,.gy-lg-4{--bs-gutter-y:1.5rem}.g-lg-5,.gx-lg-5{--bs-gutter-x:3rem}.g-lg-5,.gy-lg-5{--bs-gutter-y:3rem}}@media (min-width:1200px){.col-xl-auto{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-xl-1{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-xl-2{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-xl-3{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-xl-4{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-xl-5{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-xl-6{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-xl-7{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-xl-8{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-xl-9{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-xl-10{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-xl-11{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-xl-12{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.33333333%}.offset-xl-2{margin-left:16.66666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.33333333%}.offset-xl-5{margin-left:41.66666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.33333333%}.offset-xl-8{margin-left:66.66666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.33333333%}.offset-xl-11{margin-left:91.66666667%}.g-xl-0,.gx-xl-0{--bs-gutter-x:0}.g-xl-0,.gy-xl-0{--bs-gutter-y:0}.g-xl-1,.gx-xl-1{--bs-gutter-x:0.25rem}.g-xl-1,.gy-xl-1{--bs-gutter-y:0.25rem}.g-xl-2,.gx-xl-2{--bs-gutter-x:0.5rem}.g-xl-2,.gy-xl-2{--bs-gutter-y:0.5rem}.g-xl-3,.gx-xl-3{--bs-gutter-x:1rem}.g-xl-3,.gy-xl-3{--bs-gutter-y:1rem}.g-xl-4,.gx-xl-4{--bs-gutter-x:1.5rem}.g-xl-4,.gy-xl-4{--bs-gutter-y:1.5rem}.g-xl-5,.gx-xl-5{--bs-gutter-x:3rem}.g-xl-5,.gy-xl-5{--bs-gutter-y:3rem}}@media (min-width:1400px){.col-xxl-auto{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:auto}.col-xxl-1{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:8.33333333%}.col-xxl-2{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:16.66666667%}.col-xxl-3{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:25%}.col-xxl-4{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:33.33333333%}.col-xxl-5{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:41.66666667%}.col-xxl-6{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:50%}.col-xxl-7{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:58.33333333%}.col-xxl-8{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:66.66666667%}.col-xxl-9{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:75%}.col-xxl-10{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:83.33333333%}.col-xxl-11{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:91.66666667%}.col-xxl-12{-webkit-box-flex:0;-webkit-flex:0 0 auto;-ms-flex:0 0 auto;flex:0 0 auto;width:100%}.offset-xxl-0{margin-left:0}.offset-xxl-1{margin-left:8.33333333%}.offset-xxl-2{margin-left:16.66666667%}.offset-xxl-3{margin-left:25%}.offset-xxl-4{margin-left:33.33333333%}.offset-xxl-5{margin-left:41.66666667%}.offset-xxl-6{margin-left:50%}.offset-xxl-7{margin-left:58.33333333%}.offset-xxl-8{margin-left:66.66666667%}.offset-xxl-9{margin-left:75%}.offset-xxl-10{margin-left:83.33333333%}.offset-xxl-11{margin-left:91.66666667%}.g-xxl-0,.gx-xxl-0{--bs-gutter-x:0}.g-xxl-0,.gy-xxl-0{--bs-gutter-y:0}.g-xxl-1,.gx-xxl-1{--bs-gutter-x:0.25rem}.g-xxl-1,.gy-xxl-1{--bs-gutter-y:0.25rem}.g-xxl-2,.gx-xxl-2{--bs-gutter-x:0.5rem}.g-xxl-2,.gy-xxl-2{--bs-gutter-y:0.5rem}.g-xxl-3,.gx-xxl-3{--bs-gutter-x:1rem}.g-xxl-3,.gy-xxl-3{--bs-gutter-y:1rem}.g-xxl-4,.gx-xxl-4{--bs-gutter-x:1.5rem}.g-xxl-4,.gy-xxl-4{--bs-gutter-y:1.5rem}.g-xxl-5,.gx-xxl-5{--bs-gutter-x:3rem}.g-xxl-5,.gy-xxl-5{--bs-gutter-y:3rem}}.table{--bs-table-bg:transparent;--bs-table-accent-bg:transparent;--bs-table-striped-color:#212529;--bs-table-striped-bg:rgba(0, 0, 0, 0.05);--bs-table-active-color:#212529;--bs-table-active-bg:rgba(0, 0, 0, 0.1);--bs-table-hover-color:#212529;--bs-table-hover-bg:rgba(0, 0, 0, 0.075);width:100%;margin-bottom:1rem;color:#212529;vertical-align:top;border-color:#dee2e6}.table>:not(caption)>*>*{padding:.5rem .5rem;background-color:var(--bs-table-bg);border-bottom-width:1px;-webkit-box-shadow:inset 0 0 0 9999px var(--bs-table-accent-bg);box-shadow:inset 0 0 0 9999px var(--bs-table-accent-bg)}.table>tbody{vertical-align:inherit}.table>thead{vertical-align:bottom}.table>:not(:last-child)>:last-child>*{border-bottom-color:currentColor}.caption-top{caption-side:top}.table-sm>:not(caption)>*>*{padding:.25rem .25rem}.table-bordered>:not(caption)>*{border-width:1px 0}.table-bordered>:not(caption)>*>*{border-width:0 1px}.table-borderless>:not(caption)>*>*{border-bottom-width:0}.table-striped>tbody>tr:nth-of-type(odd){--bs-table-accent-bg:var(--bs-table-striped-bg);color:var(--bs-table-striped-color)}.table-active{--bs-table-accent-bg:var(--bs-table-active-bg);color:var(--bs-table-active-color)}.table-hover>tbody>tr:hover{--bs-table-accent-bg:var(--bs-table-hover-bg);color:var(--bs-table-hover-color)}.table-primary{--bs-table-bg:#cfe2ff;--bs-table-striped-bg:#c5d7f2;--bs-table-striped-color:#000;--bs-table-active-bg:#bacbe6;--bs-table-active-color:#000;--bs-table-hover-bg:#bfd1ec;--bs-table-hover-color:#000;color:#000;border-color:#bacbe6}.table-secondary{--bs-table-bg:#e2e3e5;--bs-table-striped-bg:#d7d8da;--bs-table-striped-color:#000;--bs-table-active-bg:#cbccce;--bs-table-active-color:#000;--bs-table-hover-bg:#d1d2d4;--bs-table-hover-color:#000;color:#000;border-color:#cbccce}.table-success{--bs-table-bg:#d1e7dd;--bs-table-striped-bg:#c7dbd2;--bs-table-striped-color:#000;--bs-table-active-bg:#bcd0c7;--bs-table-active-color:#000;--bs-table-hover-bg:#c1d6cc;--bs-table-hover-color:#000;color:#000;border-color:#bcd0c7}.table-info{--bs-table-bg:#cff4fc;--bs-table-striped-bg:#c5e8ef;--bs-table-striped-color:#000;--bs-table-active-bg:#badce3;--bs-table-active-color:#000;--bs-table-hover-bg:#bfe2e9;--bs-table-hover-color:#000;color:#000;border-color:#badce3}.table-warning{--bs-table-bg:#fff3cd;--bs-table-striped-bg:#f2e7c3;--bs-table-striped-color:#000;--bs-table-active-bg:#e6dbb9;--bs-table-active-color:#000;--bs-table-hover-bg:#ece1be;--bs-table-hover-color:#000;color:#000;border-color:#e6dbb9}.table-danger{--bs-table-bg:#f8d7da;--bs-table-striped-bg:#eccccf;--bs-table-striped-color:#000;--bs-table-active-bg:#dfc2c4;--bs-table-active-color:#000;--bs-table-hover-bg:#e5c7ca;--bs-table-hover-color:#000;color:#000;border-color:#dfc2c4}.table-light{--bs-table-bg:#f8f9fa;--bs-table-striped-bg:#ecedee;--bs-table-striped-color:#000;--bs-table-active-bg:#dfe0e1;--bs-table-active-color:#000;--bs-table-hover-bg:#e5e6e7;--bs-table-hover-color:#000;color:#000;border-color:#dfe0e1}.table-dark{--bs-table-bg:#212529;--bs-table-striped-bg:#2c3034;--bs-table-striped-color:#fff;--bs-table-active-bg:#373b3e;--bs-table-active-color:#fff;--bs-table-hover-bg:#323539;--bs-table-hover-color:#fff;color:#fff;border-color:#373b3e}.table-responsive{overflow-x:auto;-webkit-overflow-scrolling:touch}@media (max-width:575.98px){.table-responsive-sm{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:767.98px){.table-responsive-md{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:991.98px){.table-responsive-lg{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1199.98px){.table-responsive-xl{overflow-x:auto;-webkit-overflow-scrolling:touch}}@media (max-width:1399.98px){.table-responsive-xxl{overflow-x:auto;-webkit-overflow-scrolling:touch}}.form-label{margin-bottom:.5rem}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem}.form-text{margin-top:.25rem;font-size:.875em;color:#6c757d}.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem;-webkit-transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{-webkit-transition:none;transition:none}}.form-control[type=file]{overflow:hidden}.form-control[type=file]:not(:disabled):not([readonly]){cursor:pointer}.form-control:focus{color:#212529;background-color:#fff;border-color:#86b7fe;outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-control::-webkit-date-and-time-value{height:1.5em}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}.form-control::file-selector-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;-moz-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}.form-control::file-selector-button{-webkit-transition:none;transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control:hover:not(:disabled):not([readonly])::file-selector-button{background-color:#dde0e3}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;pointer-events:none;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control::-webkit-file-upload-button{-webkit-transition:none;transition:none}}.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button{background-color:#dde0e3}.form-control-plaintext{display:block;width:100%;padding:.375rem 0;margin-bottom:0;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{min-height:calc(1.5em + (.5rem + 2px));padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::file-selector-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;-moz-margin-end:.5rem;margin-inline-end:.5rem}.form-control-sm::-webkit-file-upload-button{padding:.25rem .5rem;margin:-.25rem -.5rem;-webkit-margin-end:.5rem;margin-inline-end:.5rem}.form-control-lg{min-height:calc(1.5em + (1rem + 2px));padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::file-selector-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;-moz-margin-end:1rem;margin-inline-end:1rem}.form-control-lg::-webkit-file-upload-button{padding:.5rem 1rem;margin:-.5rem -1rem;-webkit-margin-end:1rem;margin-inline-end:1rem}textarea.form-control{min-height:calc(1.5em + (.75rem + 2px))}textarea.form-control-sm{min-height:calc(1.5em + (.5rem + 2px))}textarea.form-control-lg{min-height:calc(1.5em + (1rem + 2px))}.form-control-color{max-width:3rem;height:auto;padding:.375rem}.form-control-color:not(:disabled):not([readonly]){cursor:pointer}.form-control-color::-moz-color-swatch{height:1.5em;border-radius:.25rem}.form-control-color::-webkit-color-swatch{height:1.5em;border-radius:.25rem}.form-select{display:block;width:100%;padding:.375rem 2.25rem .375rem .75rem;-moz-padding-start:calc(0.75rem - 3px);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right .75rem center;background-size:16px 12px;border:1px solid #ced4da;border-radius:.25rem;-webkit-transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;-webkit-appearance:none;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-select{-webkit-transition:none;transition:none}}.form-select:focus{border-color:#86b7fe;outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-select[multiple],.form-select[size]:not([size="1"]){padding-right:.75rem;background-image:none}.form-select:disabled{background-color:#e9ecef}.form-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #212529}.form-select-sm{padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem}.form-select-lg{padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem}.form-check{display:block;min-height:1.5rem;padding-left:1.5em;margin-bottom:.125rem}.form-check .form-check-input{float:left;margin-left:-1.5em}.form-check-input{width:1em;height:1em;margin-top:.25em;vertical-align:top;background-color:#fff;background-repeat:no-repeat;background-position:center;background-size:contain;border:1px solid rgba(0,0,0,.25);-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;color-adjust:exact}.form-check-input[type=checkbox]{border-radius:.25em}.form-check-input[type=radio]{border-radius:50%}.form-check-input:active{-webkit-filter:brightness(90%);filter:brightness(90%)}.form-check-input:focus{border-color:#86b7fe;outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.form-check-input:checked{background-color:#0d6efd;border-color:#0d6efd}.form-check-input:checked[type=checkbox]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e")}.form-check-input:checked[type=radio]{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")}.form-check-input[type=checkbox]:indeterminate{background-color:#0d6efd;border-color:#0d6efd;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")}.form-check-input:disabled{pointer-events:none;-webkit-filter:none;filter:none;opacity:.5}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{opacity:.5}.form-switch{padding-left:2.5em}.form-switch .form-check-input{width:2em;margin-left:-2.5em;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");background-position:left center;border-radius:2em;-webkit-transition:background-position .15s ease-in-out;transition:background-position .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-switch .form-check-input{-webkit-transition:none;transition:none}}.form-switch .form-check-input:focus{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e")}.form-switch .form-check-input:checked{background-position:right center;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.form-check-inline{display:inline-block;margin-right:1rem}.btn-check{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.btn-check:disabled+.btn,.btn-check[disabled]+.btn{pointer-events:none;-webkit-filter:none;filter:none;opacity:.65}.form-range{width:100%;height:1.5rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.form-range:focus{outline:0}.form-range:focus::-webkit-slider-thumb{-webkit-box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .25rem rgba(13,110,253,.25)}.form-range::-moz-focus-outer{border:0}.form-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#0d6efd;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.form-range::-webkit-slider-thumb:active{background-color:#b6d4fe}.form-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#0d6efd;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.form-range::-moz-range-thumb{-moz-transition:none;transition:none}}.form-range::-moz-range-thumb:active{background-color:#b6d4fe}.form-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.form-range:disabled{pointer-events:none}.form-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.form-range:disabled::-moz-range-thumb{background-color:#adb5bd}.form-floating{position:relative}.form-floating>.form-control,.form-floating>.form-select{height:calc(3.5rem + 2px);line-height:1.25}.form-floating>label{position:absolute;top:0;left:0;height:100%;padding:1rem .75rem;pointer-events:none;border:1px solid transparent;-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-transition:opacity .1s ease-in-out,-webkit-transform .1s ease-in-out;transition:opacity .1s ease-in-out,-webkit-transform .1s ease-in-out;transition:opacity .1s ease-in-out,transform .1s ease-in-out;transition:opacity .1s ease-in-out,transform .1s ease-in-out,-webkit-transform .1s ease-in-out}@media (prefers-reduced-motion:reduce){.form-floating>label{-webkit-transition:none;transition:none}}.form-floating>.form-control{padding:1rem .75rem}.form-floating>.form-control::-moz-placeholder{color:transparent}.form-floating>.form-control::-webkit-input-placeholder{color:transparent}.form-floating>.form-control:-ms-input-placeholder{color:transparent}.form-floating>.form-control::-ms-input-placeholder{color:transparent}.form-floating>.form-control::placeholder{color:transparent}.form-floating>.form-control:not(:-moz-placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:not(:-ms-input-placeholder){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:focus,.form-floating>.form-control:not(:placeholder-shown){padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:-webkit-autofill{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-select{padding-top:1.625rem;padding-bottom:.625rem}.form-floating>.form-control:not(:-moz-placeholder-shown)~label{opacity:.65;transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:not(:-ms-input-placeholder)~label{opacity:.65;-ms-transform:scale(.85) translateY(-.5rem) translateX(.15rem);transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:focus~label,.form-floating>.form-control:not(:placeholder-shown)~label,.form-floating>.form-select~label{opacity:.65;-webkit-transform:scale(.85) translateY(-.5rem) translateX(.15rem);-ms-transform:scale(.85) translateY(-.5rem) translateX(.15rem);transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.form-floating>.form-control:-webkit-autofill~label{opacity:.65;-webkit-transform:scale(.85) translateY(-.5rem) translateX(.15rem);transform:scale(.85) translateY(-.5rem) translateX(.15rem)}.input-group{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:stretch;-webkit-align-items:stretch;-ms-flex-align:stretch;align-items:stretch;width:100%}.input-group>.form-control,.input-group>.form-select{position:relative;-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;min-width:0}.input-group>.form-control:focus,.input-group>.form-select:focus{z-index:3}.input-group .btn{position:relative;z-index:2}.input-group .btn:focus{z-index:3}.input-group-text{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-lg>.btn,.input-group-lg>.form-control,.input-group-lg>.form-select,.input-group-lg>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.input-group-sm>.btn,.input-group-sm>.form-control,.input-group-sm>.form-select,.input-group-sm>.input-group-text{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.input-group-lg>.form-select,.input-group-sm>.form-select{padding-right:3rem}.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),.input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),.input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu){border-top-right-radius:0;border-bottom-right-radius:0}.input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback){margin-left:-1px;border-top-left-radius:0;border-bottom-left-radius:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#198754}.valid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(25,135,84,.9);border-radius:.25rem}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#198754;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#198754;-webkit-box-shadow:0 0 0 .25rem rgba(25,135,84,.25);box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-valid,.was-validated .form-select:valid{border-color:#198754}.form-select.is-valid:not([multiple]):not([size]),.form-select.is-valid:not([multiple])[size="1"],.was-validated .form-select:valid:not([multiple]):not([size]),.was-validated .form-select:valid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-valid:focus,.was-validated .form-select:valid:focus{border-color:#198754;-webkit-box-shadow:0 0 0 .25rem rgba(25,135,84,.25);box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid,.was-validated .form-check-input:valid{border-color:#198754}.form-check-input.is-valid:checked,.was-validated .form-check-input:valid:checked{background-color:#198754}.form-check-input.is-valid:focus,.was-validated .form-check-input:valid:focus{-webkit-box-shadow:0 0 0 .25rem rgba(25,135,84,.25);box-shadow:0 0 0 .25rem rgba(25,135,84,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#198754}.form-check-inline .form-check-input~.valid-feedback{margin-left:.5em}.input-group .form-control.is-valid,.input-group .form-select.is-valid,.was-validated .input-group .form-control:valid,.was-validated .input-group .form-select:valid{z-index:1}.input-group .form-control.is-valid:focus,.input-group .form-select.is-valid:focus,.was-validated .input-group .form-control:valid:focus,.was-validated .input-group .form-select:valid:focus{z-index:3}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:.875em;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;-webkit-box-shadow:0 0 0 .25rem rgba(220,53,69,.25);box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.form-select.is-invalid,.was-validated .form-select:invalid{border-color:#dc3545}.form-select.is-invalid:not([multiple]):not([size]),.form-select.is-invalid:not([multiple])[size="1"],.was-validated .form-select:invalid:not([multiple]):not([size]),.was-validated .form-select:invalid:not([multiple])[size="1"]{padding-right:4.125rem;background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"),url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-position:right .75rem center,center right 2.25rem;background-size:16px 12px,calc(.75em + .375rem) calc(.75em + .375rem)}.form-select.is-invalid:focus,.was-validated .form-select:invalid:focus{border-color:#dc3545;-webkit-box-shadow:0 0 0 .25rem rgba(220,53,69,.25);box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid,.was-validated .form-check-input:invalid{border-color:#dc3545}.form-check-input.is-invalid:checked,.was-validated .form-check-input:invalid:checked{background-color:#dc3545}.form-check-input.is-invalid:focus,.was-validated .form-check-input:invalid:focus{-webkit-box-shadow:0 0 0 .25rem rgba(220,53,69,.25);box-shadow:0 0 0 .25rem rgba(220,53,69,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-inline .form-check-input~.invalid-feedback{margin-left:.5em}.input-group .form-control.is-invalid,.input-group .form-select.is-invalid,.was-validated .input-group .form-control:invalid,.was-validated .input-group .form-select:invalid{z-index:2}.input-group .form-control.is-invalid:focus,.input-group .form-select.is-invalid:focus,.was-validated .input-group .form-control:invalid:focus,.was-validated .input-group .form-select:invalid:focus{z-index:3}.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;border-radius:.25rem;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{-webkit-transition:none;transition:none}}.btn:hover{color:#212529}.btn-check:focus+.btn,.btn:focus{outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.btn.disabled,.btn:disabled,fieldset:disabled .btn{pointer-events:none;opacity:.65}.btn-primary{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-primary:hover{color:#fff;background-color:#0b5ed7;border-color:#0a58ca}.btn-check:focus+.btn-primary,.btn-primary:focus{color:#fff;background-color:#0b5ed7;border-color:#0a58ca;-webkit-box-shadow:0 0 0 .25rem rgba(49,132,253,.5);box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-check:active+.btn-primary,.btn-check:checked+.btn-primary,.btn-primary.active,.btn-primary:active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0a58ca;border-color:#0a53be}.btn-check:active+.btn-primary:focus,.btn-check:checked+.btn-primary:focus,.btn-primary.active:focus,.btn-primary:active:focus,.show>.btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(49,132,253,.5);box-shadow:0 0 0 .25rem rgba(49,132,253,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5c636a;border-color:#565e64}.btn-check:focus+.btn-secondary,.btn-secondary:focus{color:#fff;background-color:#5c636a;border-color:#565e64;-webkit-box-shadow:0 0 0 .25rem rgba(130,138,145,.5);box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-check:active+.btn-secondary,.btn-check:checked+.btn-secondary,.btn-secondary.active,.btn-secondary:active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#565e64;border-color:#51585e}.btn-check:active+.btn-secondary:focus,.btn-check:checked+.btn-secondary:focus,.btn-secondary.active:focus,.btn-secondary:active:focus,.show>.btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(130,138,145,.5);box-shadow:0 0 0 .25rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-success{color:#fff;background-color:#198754;border-color:#198754}.btn-success:hover{color:#fff;background-color:#157347;border-color:#146c43}.btn-check:focus+.btn-success,.btn-success:focus{color:#fff;background-color:#157347;border-color:#146c43;-webkit-box-shadow:0 0 0 .25rem rgba(60,153,110,.5);box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-check:active+.btn-success,.btn-check:checked+.btn-success,.btn-success.active,.btn-success:active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#146c43;border-color:#13653f}.btn-check:active+.btn-success:focus,.btn-check:checked+.btn-success:focus,.btn-success.active:focus,.btn-success:active:focus,.show>.btn-success.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(60,153,110,.5);box-shadow:0 0 0 .25rem rgba(60,153,110,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#198754;border-color:#198754}.btn-info{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-info:hover{color:#000;background-color:#31d2f2;border-color:#25cff2}.btn-check:focus+.btn-info,.btn-info:focus{color:#000;background-color:#31d2f2;border-color:#25cff2;-webkit-box-shadow:0 0 0 .25rem rgba(11,172,204,.5);box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-check:active+.btn-info,.btn-check:checked+.btn-info,.btn-info.active,.btn-info:active,.show>.btn-info.dropdown-toggle{color:#000;background-color:#3dd5f3;border-color:#25cff2}.btn-check:active+.btn-info:focus,.btn-check:checked+.btn-info:focus,.btn-info.active:focus,.btn-info:active:focus,.show>.btn-info.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(11,172,204,.5);box-shadow:0 0 0 .25rem rgba(11,172,204,.5)}.btn-info.disabled,.btn-info:disabled{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-warning{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#000;background-color:#ffca2c;border-color:#ffc720}.btn-check:focus+.btn-warning,.btn-warning:focus{color:#000;background-color:#ffca2c;border-color:#ffc720;-webkit-box-shadow:0 0 0 .25rem rgba(217,164,6,.5);box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-check:active+.btn-warning,.btn-check:checked+.btn-warning,.btn-warning.active,.btn-warning:active,.show>.btn-warning.dropdown-toggle{color:#000;background-color:#ffcd39;border-color:#ffc720}.btn-check:active+.btn-warning:focus,.btn-check:checked+.btn-warning:focus,.btn-warning.active:focus,.btn-warning:active:focus,.show>.btn-warning.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(217,164,6,.5);box-shadow:0 0 0 .25rem rgba(217,164,6,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#bb2d3b;border-color:#b02a37}.btn-check:focus+.btn-danger,.btn-danger:focus{color:#fff;background-color:#bb2d3b;border-color:#b02a37;-webkit-box-shadow:0 0 0 .25rem rgba(225,83,97,.5);box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-check:active+.btn-danger,.btn-check:checked+.btn-danger,.btn-danger.active,.btn-danger:active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#b02a37;border-color:#a52834}.btn-check:active+.btn-danger:focus,.btn-check:checked+.btn-danger:focus,.btn-danger.active:focus,.btn-danger:active:focus,.show>.btn-danger.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(225,83,97,.5);box-shadow:0 0 0 .25rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-light{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:focus+.btn-light,.btn-light:focus{color:#000;background-color:#f9fafb;border-color:#f9fafb;-webkit-box-shadow:0 0 0 .25rem rgba(211,212,213,.5);box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-check:active+.btn-light,.btn-check:checked+.btn-light,.btn-light.active,.btn-light:active,.show>.btn-light.dropdown-toggle{color:#000;background-color:#f9fafb;border-color:#f9fafb}.btn-check:active+.btn-light:focus,.btn-check:checked+.btn-light:focus,.btn-light.active:focus,.btn-light:active:focus,.show>.btn-light.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(211,212,213,.5);box-shadow:0 0 0 .25rem rgba(211,212,213,.5)}.btn-light.disabled,.btn-light:disabled{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-dark{color:#fff;background-color:#212529;border-color:#212529}.btn-dark:hover{color:#fff;background-color:#1c1f23;border-color:#1a1e21}.btn-check:focus+.btn-dark,.btn-dark:focus{color:#fff;background-color:#1c1f23;border-color:#1a1e21;-webkit-box-shadow:0 0 0 .25rem rgba(66,70,73,.5);box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-check:active+.btn-dark,.btn-check:checked+.btn-dark,.btn-dark.active,.btn-dark:active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1a1e21;border-color:#191c1f}.btn-check:active+.btn-dark:focus,.btn-check:checked+.btn-dark:focus,.btn-dark.active:focus,.btn-dark:active:focus,.show>.btn-dark.dropdown-toggle:focus{-webkit-box-shadow:0 0 0 .25rem rgba(66,70,73,.5);box-shadow:0 0 0 .25rem rgba(66,70,73,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#212529;border-color:#212529}.btn-outline-primary{color:#0d6efd;border-color:#0d6efd}.btn-outline-primary:hover{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-check:focus+.btn-outline-primary,.btn-outline-primary:focus{-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.5);box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-check:active+.btn-outline-primary,.btn-check:checked+.btn-outline-primary,.btn-outline-primary.active,.btn-outline-primary.dropdown-toggle.show,.btn-outline-primary:active{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.btn-check:active+.btn-outline-primary:focus,.btn-check:checked+.btn-outline-primary:focus,.btn-outline-primary.active:focus,.btn-outline-primary.dropdown-toggle.show:focus,.btn-outline-primary:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.5);box-shadow:0 0 0 .25rem rgba(13,110,253,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#0d6efd;background-color:transparent}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:focus+.btn-outline-secondary,.btn-outline-secondary:focus{-webkit-box-shadow:0 0 0 .25rem rgba(108,117,125,.5);box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-check:active+.btn-outline-secondary,.btn-check:checked+.btn-outline-secondary,.btn-outline-secondary.active,.btn-outline-secondary.dropdown-toggle.show,.btn-outline-secondary:active{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-check:active+.btn-outline-secondary:focus,.btn-check:checked+.btn-outline-secondary:focus,.btn-outline-secondary.active:focus,.btn-outline-secondary.dropdown-toggle.show:focus,.btn-outline-secondary:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(108,117,125,.5);box-shadow:0 0 0 .25rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-success{color:#198754;border-color:#198754}.btn-outline-success:hover{color:#fff;background-color:#198754;border-color:#198754}.btn-check:focus+.btn-outline-success,.btn-outline-success:focus{-webkit-box-shadow:0 0 0 .25rem rgba(25,135,84,.5);box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-check:active+.btn-outline-success,.btn-check:checked+.btn-outline-success,.btn-outline-success.active,.btn-outline-success.dropdown-toggle.show,.btn-outline-success:active{color:#fff;background-color:#198754;border-color:#198754}.btn-check:active+.btn-outline-success:focus,.btn-check:checked+.btn-outline-success:focus,.btn-outline-success.active:focus,.btn-outline-success.dropdown-toggle.show:focus,.btn-outline-success:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(25,135,84,.5);box-shadow:0 0 0 .25rem rgba(25,135,84,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#198754;background-color:transparent}.btn-outline-info{color:#0dcaf0;border-color:#0dcaf0}.btn-outline-info:hover{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-check:focus+.btn-outline-info,.btn-outline-info:focus{-webkit-box-shadow:0 0 0 .25rem rgba(13,202,240,.5);box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-check:active+.btn-outline-info,.btn-check:checked+.btn-outline-info,.btn-outline-info.active,.btn-outline-info.dropdown-toggle.show,.btn-outline-info:active{color:#000;background-color:#0dcaf0;border-color:#0dcaf0}.btn-check:active+.btn-outline-info:focus,.btn-check:checked+.btn-outline-info:focus,.btn-outline-info.active:focus,.btn-outline-info.dropdown-toggle.show:focus,.btn-outline-info:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(13,202,240,.5);box-shadow:0 0 0 .25rem rgba(13,202,240,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#0dcaf0;background-color:transparent}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:focus+.btn-outline-warning,.btn-outline-warning:focus{-webkit-box-shadow:0 0 0 .25rem rgba(255,193,7,.5);box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-check:active+.btn-outline-warning,.btn-check:checked+.btn-outline-warning,.btn-outline-warning.active,.btn-outline-warning.dropdown-toggle.show,.btn-outline-warning:active{color:#000;background-color:#ffc107;border-color:#ffc107}.btn-check:active+.btn-outline-warning:focus,.btn-check:checked+.btn-outline-warning:focus,.btn-outline-warning.active:focus,.btn-outline-warning.dropdown-toggle.show:focus,.btn-outline-warning:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(255,193,7,.5);box-shadow:0 0 0 .25rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:focus+.btn-outline-danger,.btn-outline-danger:focus{-webkit-box-shadow:0 0 0 .25rem rgba(220,53,69,.5);box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-check:active+.btn-outline-danger,.btn-check:checked+.btn-outline-danger,.btn-outline-danger.active,.btn-outline-danger.dropdown-toggle.show,.btn-outline-danger:active{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-check:active+.btn-outline-danger:focus,.btn-check:checked+.btn-outline-danger:focus,.btn-outline-danger.active:focus,.btn-outline-danger.dropdown-toggle.show:focus,.btn-outline-danger:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(220,53,69,.5);box-shadow:0 0 0 .25rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:focus+.btn-outline-light,.btn-outline-light:focus{-webkit-box-shadow:0 0 0 .25rem rgba(248,249,250,.5);box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-check:active+.btn-outline-light,.btn-check:checked+.btn-outline-light,.btn-outline-light.active,.btn-outline-light.dropdown-toggle.show,.btn-outline-light:active{color:#000;background-color:#f8f9fa;border-color:#f8f9fa}.btn-check:active+.btn-outline-light:focus,.btn-check:checked+.btn-outline-light:focus,.btn-outline-light.active:focus,.btn-outline-light.dropdown-toggle.show:focus,.btn-outline-light:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(248,249,250,.5);box-shadow:0 0 0 .25rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-dark{color:#212529;border-color:#212529}.btn-outline-dark:hover{color:#fff;background-color:#212529;border-color:#212529}.btn-check:focus+.btn-outline-dark,.btn-outline-dark:focus{-webkit-box-shadow:0 0 0 .25rem rgba(33,37,41,.5);box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-check:active+.btn-outline-dark,.btn-check:checked+.btn-outline-dark,.btn-outline-dark.active,.btn-outline-dark.dropdown-toggle.show,.btn-outline-dark:active{color:#fff;background-color:#212529;border-color:#212529}.btn-check:active+.btn-outline-dark:focus,.btn-check:checked+.btn-outline-dark:focus,.btn-outline-dark.active:focus,.btn-outline-dark.dropdown-toggle.show:focus,.btn-outline-dark:active:focus{-webkit-box-shadow:0 0 0 .25rem rgba(33,37,41,.5);box-shadow:0 0 0 .25rem rgba(33,37,41,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#212529;background-color:transparent}.btn-link{font-weight:400;color:#0d6efd;text-decoration:underline}.btn-link:hover{color:#0a58ca}.btn-link.disabled,.btn-link:disabled{color:#6c757d}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;border-radius:.2rem}.fade{-webkit-transition:opacity .15s linear;transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{-webkit-transition:none;transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{height:0;overflow:hidden;-webkit-transition:height .35s ease;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{-webkit-transition:none;transition:none}}.dropdown,.dropend,.dropstart,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu[data-bs-popper]{top:100%;left:0;margin-top:.125rem}.dropdown-menu-start{--bs-position:start}.dropdown-menu-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-end{--bs-position:end}.dropdown-menu-end[data-bs-popper]{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-start{--bs-position:start}.dropdown-menu-sm-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-sm-end{--bs-position:end}.dropdown-menu-sm-end[data-bs-popper]{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-start{--bs-position:start}.dropdown-menu-md-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-md-end{--bs-position:end}.dropdown-menu-md-end[data-bs-popper]{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-start{--bs-position:start}.dropdown-menu-lg-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-lg-end{--bs-position:end}.dropdown-menu-lg-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-start{--bs-position:start}.dropdown-menu-xl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xl-end{--bs-position:end}.dropdown-menu-xl-end[data-bs-popper]{right:0;left:auto}}@media (min-width:1400px){.dropdown-menu-xxl-start{--bs-position:start}.dropdown-menu-xxl-start[data-bs-popper]{right:auto;left:0}.dropdown-menu-xxl-end{--bs-position:end}.dropdown-menu-xxl-end[data-bs-popper]{right:0;left:auto}}.dropup .dropdown-menu[data-bs-popper]{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-menu[data-bs-popper]{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropend .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropend .dropdown-toggle:empty::after{margin-left:0}.dropend .dropdown-toggle::after{vertical-align:0}.dropstart .dropdown-menu[data-bs-popper]{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropstart .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:""}.dropstart .dropdown-toggle::after{display:none}.dropstart .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropstart .dropdown-toggle:empty::after{margin-left:0}.dropstart .dropdown-toggle::before{vertical-align:0}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid rgba(0,0,0,.15)}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;clear:both;font-weight:400;color:#212529;text-align:inherit;text-decoration:none;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#1e2125;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#0d6efd}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1rem;color:#212529}.dropdown-menu-dark{color:#dee2e6;background-color:#343a40;border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item{color:#dee2e6}.dropdown-menu-dark .dropdown-item:focus,.dropdown-menu-dark .dropdown-item:hover{color:#fff;background-color:rgba(255,255,255,.15)}.dropdown-menu-dark .dropdown-item.active,.dropdown-menu-dark .dropdown-item:active{color:#fff;background-color:#0d6efd}.dropdown-menu-dark .dropdown-item.disabled,.dropdown-menu-dark .dropdown-item:disabled{color:#adb5bd}.dropdown-menu-dark .dropdown-divider{border-color:rgba(0,0,0,.15)}.dropdown-menu-dark .dropdown-item-text{color:#dee2e6}.dropdown-menu-dark .dropdown-header{color:#adb5bd}.btn-group,.btn-group-vertical{position:relative;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto}.btn-group-vertical>.btn-check:checked+.btn,.btn-group-vertical>.btn-check:focus+.btn,.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn-check:checked+.btn,.btn-group>.btn-check:focus+.btn,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:1}.btn-toolbar{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:nth-child(n+3),.btn-group>:not(.btn-check)+.btn{border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropend .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropstart .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn~.btn{border-top-left-radius:0;border-top-right-radius:0}.nav{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem;color:#0d6efd;text-decoration:none;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out}@media (prefers-reduced-motion:reduce){.nav-link{-webkit-transition:none;transition:none}}.nav-link:focus,.nav-link:hover{color:#0a58ca}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-link{margin-bottom:-1px;background:0 0;border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6;isolation:isolate}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{background:0 0;border:0;border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#0d6efd}.nav-fill .nav-item,.nav-fill>.nav-link{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item,.nav-justified>.nav-link{-webkit-flex-basis:0;-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;text-align:center}.nav-fill .nav-item .nav-link,.nav-justified .nav-item .nav-link{width:100%}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding-top:.5rem;padding-bottom:.5rem}.navbar>.container,.navbar>.container-fluid,.navbar>.container-lg,.navbar>.container-md,.navbar>.container-sm,.navbar>.container-xl,.navbar>.container-xxl{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:inherit;-ms-flex-wrap:inherit;flex-wrap:inherit;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;text-decoration:none;white-space:nowrap}.navbar-nav{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static}.navbar-text{padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-webkit-flex-basis:100%;-ms-flex-preferred-size:100%;flex-basis:100%;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem;-webkit-transition:-webkit-box-shadow .15s ease-in-out;transition:-webkit-box-shadow .15s ease-in-out;transition:box-shadow .15s ease-in-out;transition:box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.navbar-toggler{-webkit-transition:none;transition:none}}.navbar-toggler:hover{text-decoration:none}.navbar-toggler:focus{text-decoration:none;outline:0;-webkit-box-shadow:0 0 0 .25rem;box-shadow:0 0 0 .25rem}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;background-repeat:no-repeat;background-position:center;background-size:100%}.navbar-nav-scroll{max-height:var(--bs-scroll-height,75vh);overflow-y:auto}@media (min-width:576px){.navbar-expand-sm{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm .navbar-nav-scroll{overflow:visible}.navbar-expand-sm .navbar-collapse{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (min-width:768px){.navbar-expand-md{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md .navbar-nav-scroll{overflow:visible}.navbar-expand-md .navbar-collapse{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (min-width:992px){.navbar-expand-lg{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg .navbar-nav-scroll{overflow:visible}.navbar-expand-lg .navbar-collapse{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (min-width:1200px){.navbar-expand-xl{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl .navbar-nav-scroll{overflow:visible}.navbar-expand-xl .navbar-collapse{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}@media (min-width:1400px){.navbar-expand-xxl{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xxl .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand-xxl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xxl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xxl .navbar-nav-scroll{overflow:visible}.navbar-expand-xxl .navbar-collapse{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xxl .navbar-toggler{display:none}}.navbar-expand{-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand .navbar-nav{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand .navbar-nav-scroll{overflow:visible}.navbar-expand .navbar-collapse{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important;-webkit-flex-basis:auto;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.55)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.55);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.55)}.navbar-light .navbar-text a,.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.55)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.55);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.55)}.navbar-dark .navbar-text a,.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card>.card-header+.list-group,.card>.list-group+.card-footer{border-top:0}.card-body{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem 1rem}.card-title{margin-bottom:.5rem}.card-subtitle{margin-top:-.25rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1rem}.card-header{padding:.5rem 1rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-footer{padding:.5rem 1rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.5rem;margin-bottom:-.5rem;margin-left:-.5rem;border-bottom:0}.card-header-pills{margin-right:-.5rem;margin-left:-.5rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1rem;border-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom,.card-img-top{width:100%}.card-img,.card-img-top{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-group>.card{margin-bottom:.75rem}@media (min-width:576px){.card-group{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-flow:row wrap;-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.accordion-button{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;width:100%;padding:1rem 1.25rem;font-size:1rem;color:#212529;text-align:left;background-color:#fff;border:0;border-radius:0;overflow-anchor:none;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,border-radius .15s ease,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,border-radius .15s ease,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease,-webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.accordion-button{-webkit-transition:none;transition:none}}.accordion-button:not(.collapsed){color:#0c63e4;background-color:#e7f1ff;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.125);box-shadow:inset 0 -1px 0 rgba(0,0,0,.125)}.accordion-button:not(.collapsed)::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");-webkit-transform:rotate(-180deg);-ms-transform:rotate(-180deg);transform:rotate(-180deg)}.accordion-button::after{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:1.25rem;height:1.25rem;margin-left:auto;content:"";background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-size:1.25rem;-webkit-transition:-webkit-transform .2s ease-in-out;transition:-webkit-transform .2s ease-in-out;transition:transform .2s ease-in-out;transition:transform .2s ease-in-out, -webkit-transform .2s ease-in-out}@media (prefers-reduced-motion:reduce){.accordion-button::after{-webkit-transition:none;transition:none}}.accordion-button:hover{z-index:2}.accordion-button:focus{z-index:3;border-color:#86b7fe;outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.accordion-header{margin-bottom:0}.accordion-item{background-color:#fff;border:1px solid rgba(0,0,0,.125)}.accordion-item:first-of-type{border-top-left-radius:.25rem;border-top-right-radius:.25rem}.accordion-item:first-of-type .accordion-button{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.accordion-item:not(:first-of-type){border-top:0}.accordion-item:last-of-type{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-item:last-of-type .accordion-button.collapsed{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.accordion-item:last-of-type .accordion-collapse{border-bottom-right-radius:.25rem;border-bottom-left-radius:.25rem}.accordion-body{padding:1rem 1.25rem}.accordion-flush .accordion-collapse{border-width:0}.accordion-flush .accordion-item{border-right:0;border-left:0;border-radius:0}.accordion-flush .accordion-item:first-child{border-top:0}.accordion-flush .accordion-item:last-child{border-bottom:0}.accordion-flush .accordion-item .accordion-button{border-radius:0}.breadcrumb{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:0 0;margin-bottom:1rem;list-style:none}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{float:left;padding-right:.5rem;color:#6c757d;content:var(--bs-breadcrumb-divider, "/")}.breadcrumb-item.active{color:#6c757d}.pagination{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-left:0;list-style:none}.page-link{position:relative;display:block;color:#0d6efd;text-decoration:none;background-color:#fff;border:1px solid #dee2e6;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.page-link{-webkit-transition:none;transition:none}}.page-link:hover{z-index:2;color:#0a58ca;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;color:#0a58ca;background-color:#e9ecef;outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25)}.page-item:not(:first-child) .page-link{margin-left:-1px}.page-item.active .page-link{z-index:3;color:#fff;background-color:#0d6efd;border-color:#0d6efd}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;background-color:#fff;border-color:#dee2e6}.page-link{padding:.375rem .75rem}.page-item:first-child .page-link{border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.35em .65em;font-size:.75em;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.alert{position:relative;padding:1rem 1rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:3rem}.alert-dismissible .btn-close{position:absolute;top:0;right:0;z-index:2;padding:1.25rem 1rem}.alert-primary{color:#084298;background-color:#cfe2ff;border-color:#b6d4fe}.alert-primary .alert-link{color:#06357a}.alert-secondary{color:#41464b;background-color:#e2e3e5;border-color:#d3d6d8}.alert-secondary .alert-link{color:#34383c}.alert-success{color:#0f5132;background-color:#d1e7dd;border-color:#badbcc}.alert-success .alert-link{color:#0c4128}.alert-info{color:#055160;background-color:#cff4fc;border-color:#b6effb}.alert-info .alert-link{color:#04414d}.alert-warning{color:#664d03;background-color:#fff3cd;border-color:#ffecb5}.alert-warning .alert-link{color:#523e02}.alert-danger{color:#842029;background-color:#f8d7da;border-color:#f5c2c7}.alert-danger .alert-link{color:#6a1a21}.alert-light{color:#636464;background-color:#fefefe;border-color:#fdfdfe}.alert-light .alert-link{color:#4f5050}.alert-dark{color:#141619;background-color:#d3d3d4;border-color:#bcbebf}.alert-dark .alert-link{color:#101214}@-webkit-keyframes progress-bar-stripes{0%{background-position-x:1rem}}@keyframes progress-bar-stripes{0%{background-position-x:1rem}}.progress{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:#0d6efd;-webkit-transition:width .6s ease;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{-webkit-transition:none;transition:none}}.progress-bar-striped{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:1s linear infinite progress-bar-stripes;animation:1s linear infinite progress-bar-stripes}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.list-group{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-numbered{list-style-type:none;counter-reset:section}.list-group-numbered>li::before{content:counters(section, ".") ". ";counter-increment:section}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.5rem 1rem;color:#212529;text-decoration:none;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#0d6efd;border-color:#0d6efd}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.list-group-horizontal>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal>.list-group-item.active{margin-top:0}.list-group-horizontal>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-sm>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm>.list-group-item.active{margin-top:0}.list-group-horizontal-sm>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-md>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md>.list-group-item.active{margin-top:0}.list-group-horizontal-md>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-lg>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg>.list-group-item.active{margin-top:0}.list-group-horizontal-lg>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1200px){.list-group-horizontal-xl{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-xl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl>.list-group-item.active{margin-top:0}.list-group-horizontal-xl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1400px){.list-group-horizontal-xxl{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-xxl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xxl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xxl>.list-group-item.active{margin-top:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xxl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush{border-radius:0}.list-group-flush>.list-group-item{border-width:0 0 1px}.list-group-flush>.list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#084298;background-color:#cfe2ff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#084298;background-color:#bacbe6}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#084298;border-color:#084298}.list-group-item-secondary{color:#41464b;background-color:#e2e3e5}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#41464b;background-color:#cbccce}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#41464b;border-color:#41464b}.list-group-item-success{color:#0f5132;background-color:#d1e7dd}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#0f5132;background-color:#bcd0c7}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#0f5132;border-color:#0f5132}.list-group-item-info{color:#055160;background-color:#cff4fc}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#055160;background-color:#badce3}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#055160;border-color:#055160}.list-group-item-warning{color:#664d03;background-color:#fff3cd}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#664d03;background-color:#e6dbb9}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#664d03;border-color:#664d03}.list-group-item-danger{color:#842029;background-color:#f8d7da}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#842029;background-color:#dfc2c4}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#842029;border-color:#842029}.list-group-item-light{color:#636464;background-color:#fefefe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#636464;background-color:#e5e5e5}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#636464;border-color:#636464}.list-group-item-dark{color:#141619;background-color:#d3d3d4}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#141619;background-color:#bebebf}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#141619;border-color:#141619}.btn-close{-webkit-box-sizing:content-box;box-sizing:content-box;width:1em;height:1em;padding:.25em .25em;color:#000;background:transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;border:0;border-radius:.25rem;opacity:.5}.btn-close:hover{color:#000;text-decoration:none;opacity:.75}.btn-close:focus{outline:0;-webkit-box-shadow:0 0 0 .25rem rgba(13,110,253,.25);box-shadow:0 0 0 .25rem rgba(13,110,253,.25);opacity:1}.btn-close.disabled,.btn-close:disabled{pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;opacity:.25}.btn-close-white{-webkit-filter:invert(1) grayscale(100%) brightness(200%);filter:invert(1) grayscale(100%) brightness(200%)}.toast{width:350px;max-width:100%;font-size:.875rem;pointer-events:auto;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);-webkit-box-shadow:0 .5rem 1rem rgba(0,0,0,.15);box-shadow:0 .5rem 1rem rgba(0,0,0,.15);border-radius:.25rem}.toast:not(.showing):not(.show){opacity:0}.toast.hide{display:none}.toast-container{width:-webkit-max-content;width:-moz-max-content;width:max-content;max-width:100%;pointer-events:none}.toast-container>:not(:last-child){margin-bottom:.75rem}.toast-header{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:.5rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05);border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.toast-header .btn-close{margin-right:-.375rem;margin-left:.75rem}.toast-body{padding:.75rem;word-wrap:break-word}.modal{position:fixed;top:0;left:0;z-index:1060;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{-webkit-transition:-webkit-transform .3s ease-out;transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out, -webkit-transform .3s ease-out;-webkit-transform:translate(0,-50px);-ms-transform:translate(0,-50px);transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{-webkit-transition:none;transition:none}}.modal.show .modal-dialog{-webkit-transform:none;-ms-transform:none;transform:none}.modal.modal-static .modal-dialog{-webkit-transform:scale(1.02);-ms-transform:scale(1.02);transform:scale(1.02)}.modal-dialog-scrollable{height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:100%;overflow:hidden}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;min-height:calc(100% - 1rem)}.modal-content{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .btn-close{padding:.5rem .5rem;margin:-.5rem -.5rem -.5rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.modal-footer{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{height:calc(100% - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.modal-fullscreen{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen .modal-header{border-radius:0}.modal-fullscreen .modal-body{overflow-y:auto}.modal-fullscreen .modal-footer{border-radius:0}@media (max-width:575.98px){.modal-fullscreen-sm-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-sm-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-sm-down .modal-header{border-radius:0}.modal-fullscreen-sm-down .modal-body{overflow-y:auto}.modal-fullscreen-sm-down .modal-footer{border-radius:0}}@media (max-width:767.98px){.modal-fullscreen-md-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-md-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-md-down .modal-header{border-radius:0}.modal-fullscreen-md-down .modal-body{overflow-y:auto}.modal-fullscreen-md-down .modal-footer{border-radius:0}}@media (max-width:991.98px){.modal-fullscreen-lg-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-lg-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-lg-down .modal-header{border-radius:0}.modal-fullscreen-lg-down .modal-body{overflow-y:auto}.modal-fullscreen-lg-down .modal-footer{border-radius:0}}@media (max-width:1199.98px){.modal-fullscreen-xl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xl-down .modal-header{border-radius:0}.modal-fullscreen-xl-down .modal-body{overflow-y:auto}.modal-fullscreen-xl-down .modal-footer{border-radius:0}}@media (max-width:1399.98px){.modal-fullscreen-xxl-down{width:100vw;max-width:none;height:100%;margin:0}.modal-fullscreen-xxl-down .modal-content{height:100%;border:0;border-radius:0}.modal-fullscreen-xxl-down .modal-header{border-radius:0}.modal-fullscreen-xxl-down .modal-body{overflow-y:auto}.modal-fullscreen-xxl-down .modal-footer{border-radius:0}}.tooltip{position:absolute;z-index:1080;display:block;margin:0;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .tooltip-arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .tooltip-arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[data-popper-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,.bs-tooltip-top .tooltip-arrow{bottom:0}.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before,.bs-tooltip-top .tooltip-arrow::before{top:-1px;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[data-popper-placement^=right],.bs-tooltip-end{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,.bs-tooltip-end .tooltip-arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before,.bs-tooltip-end .tooltip-arrow::before{right:-1px;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[data-popper-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,.bs-tooltip-bottom .tooltip-arrow{top:0}.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before,.bs-tooltip-bottom .tooltip-arrow::before{bottom:-1px;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[data-popper-placement^=left],.bs-tooltip-start{padding:0 .4rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,.bs-tooltip-start .tooltip-arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before,.bs-tooltip-start .tooltip-arrow::before{left:-1px;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1070;display:block;max-width:276px;font-family:var(--bs-font-sans-serif);font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .popover-arrow{position:absolute;display:block;width:1rem;height:.5rem}.popover .popover-arrow::after,.popover .popover-arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow,.bs-popover-top>.popover-arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,.bs-popover-top>.popover-arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after,.bs-popover-top>.popover-arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow,.bs-popover-end>.popover-arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,.bs-popover-end>.popover-arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after,.bs-popover-end>.popover-arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,.bs-popover-bottom>.popover-arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,.bs-popover-bottom>.popover-arrow::before{top:0;border-width:0 .5rem .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after,.bs-popover-bottom>.popover-arrow::after{top:1px;border-width:0 .5rem .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f0f0f0}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow,.bs-popover-start>.popover-arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,.bs-popover-start>.popover-arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after,.bs-popover-start>.popover-arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem 1rem;margin-bottom:0;font-size:1rem;background-color:#f0f0f0;border-bottom:1px solid rgba(0,0,0,.2);border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:1rem 1rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{-ms-touch-action:pan-y;touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-transition:-webkit-transform .6s ease-in-out;transition:-webkit-transform .6s ease-in-out;transition:transform .6s ease-in-out;transition:transform .6s ease-in-out, -webkit-transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{-webkit-transition:none;transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-end,.carousel-item-next:not(.carousel-item-start){-webkit-transform:translateX(100%);-ms-transform:translateX(100%);transform:translateX(100%)}.active.carousel-item-start,.carousel-item-prev:not(.carousel-item-end){-webkit-transform:translateX(-100%);-ms-transform:translateX(-100%);transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;-webkit-transition-property:opacity;transition-property:opacity;-webkit-transform:none;-ms-transform:none;transform:none}.carousel-fade .carousel-item-next.carousel-item-start,.carousel-fade .carousel-item-prev.carousel-item-end,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{z-index:0;opacity:0;-webkit-transition:opacity 0s .6s;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-end,.carousel-fade .active.carousel-item-start{-webkit-transition:none;transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:15%;padding:0;color:#fff;text-align:center;background:0 0;border:0;opacity:.5;-webkit-transition:opacity .15s ease;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{-webkit-transition:none;transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:2rem;height:2rem;background-repeat:no-repeat;background-position:50%;background-size:100% 100%}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:2;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:0;margin-right:15%;margin-bottom:1rem;margin-left:15%;list-style:none}.carousel-indicators [data-bs-target]{-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-box-flex:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;width:30px;height:3px;padding:0;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border:0;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;-webkit-transition:opacity .6s ease;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators [data-bs-target]{-webkit-transition:none;transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:1.25rem;left:15%;padding-top:1.25rem;padding-bottom:1.25rem;color:#fff;text-align:center}.carousel-dark .carousel-control-next-icon,.carousel-dark .carousel-control-prev-icon{-webkit-filter:invert(1) grayscale(100);filter:invert(1) grayscale(100)}.carousel-dark .carousel-indicators [data-bs-target]{background-color:#000}.carousel-dark .carousel-caption{color:#000}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:-.125em;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}.offcanvas{position:fixed;bottom:0;z-index:1050;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;max-width:100%;visibility:hidden;background-color:#fff;background-clip:padding-box;outline:0;-webkit-transition:-webkit-transform .3s ease-in-out;transition:-webkit-transform .3s ease-in-out;transition:transform .3s ease-in-out;transition:transform .3s ease-in-out, -webkit-transform .3s ease-in-out}@media (prefers-reduced-motion:reduce){.offcanvas{-webkit-transition:none;transition:none}}.offcanvas-header{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;padding:1rem 1rem}.offcanvas-header .btn-close{padding:.5rem .5rem;margin-top:-.5rem;margin-right:-.5rem;margin-bottom:-.5rem}.offcanvas-title{margin-bottom:0;line-height:1.5}.offcanvas-body{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;padding:1rem 1rem;overflow-y:auto}.offcanvas-start{top:0;left:0;width:400px;border-right:1px solid rgba(0,0,0,.2);-webkit-transform:translateX(-100%);-ms-transform:translateX(-100%);transform:translateX(-100%)}.offcanvas-end{top:0;right:0;width:400px;border-left:1px solid rgba(0,0,0,.2);-webkit-transform:translateX(100%);-ms-transform:translateX(100%);transform:translateX(100%)}.offcanvas-top{top:0;right:0;left:0;height:30vh;max-height:100%;border-bottom:1px solid rgba(0,0,0,.2);-webkit-transform:translateY(-100%);-ms-transform:translateY(-100%);transform:translateY(-100%)}.offcanvas-bottom{right:0;left:0;height:30vh;max-height:100%;border-top:1px solid rgba(0,0,0,.2);-webkit-transform:translateY(100%);-ms-transform:translateY(100%);transform:translateY(100%)}.offcanvas.show{-webkit-transform:none;-ms-transform:none;transform:none}.clearfix::after{display:block;clear:both;content:""}.link-primary{color:#0d6efd}.link-primary:focus,.link-primary:hover{color:#0a58ca}.link-secondary{color:#6c757d}.link-secondary:focus,.link-secondary:hover{color:#565e64}.link-success{color:#198754}.link-success:focus,.link-success:hover{color:#146c43}.link-info{color:#0dcaf0}.link-info:focus,.link-info:hover{color:#3dd5f3}.link-warning{color:#ffc107}.link-warning:focus,.link-warning:hover{color:#ffcd39}.link-danger{color:#dc3545}.link-danger:focus,.link-danger:hover{color:#b02a37}.link-light{color:#f8f9fa}.link-light:focus,.link-light:hover{color:#f9fafb}.link-dark{color:#212529}.link-dark:focus,.link-dark:hover{color:#1a1e21}.ratio{position:relative;width:100%}.ratio::before{display:block;padding-top:var(--bs-aspect-ratio);content:""}.ratio>*{position:absolute;top:0;left:0;width:100%;height:100%}.ratio-1x1{--bs-aspect-ratio:100%}.ratio-4x3{--bs-aspect-ratio:calc(3 / 4 * 100%)}.ratio-16x9{--bs-aspect-ratio:calc(9 / 16 * 100%)}.ratio-21x9{--bs-aspect-ratio:calc(9 / 21 * 100%)}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}@media (min-width:576px){.sticky-sm-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:768px){.sticky-md-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:992px){.sticky-lg-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1200px){.sticky-xl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}@media (min-width:1400px){.sticky-xxl-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.visually-hidden,.visually-hidden-focusable:not(:focus):not(:focus-within){position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;content:""}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.float-start{float:left!important}.float-end{float:right!important}.float-none{float:none!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.overflow-visible{overflow:visible!important}.overflow-scroll{overflow:scroll!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-grid{display:grid!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-none{display:none!important}.shadow{-webkit-box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important;box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-sm{-webkit-box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow-lg{-webkit-box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important;box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{-webkit-box-shadow:none!important;box-shadow:none!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.top-0{top:0!important}.top-50{top:50%!important}.top-100{top:100%!important}.bottom-0{bottom:0!important}.bottom-50{bottom:50%!important}.bottom-100{bottom:100%!important}.start-0{left:0!important}.start-50{left:50%!important}.start-100{left:100%!important}.end-0{right:0!important}.end-50{right:50%!important}.end-100{right:100%!important}.translate-middle{-webkit-transform:translate(-50%,-50%)!important;-ms-transform:translate(-50%,-50%)!important;transform:translate(-50%,-50%)!important}.translate-middle-x{-webkit-transform:translateX(-50%)!important;-ms-transform:translateX(-50%)!important;transform:translateX(-50%)!important}.translate-middle-y{-webkit-transform:translateY(-50%)!important;-ms-transform:translateY(-50%)!important;transform:translateY(-50%)!important}.border{border:1px solid #dee2e6!important}.border-0{border:0!important}.border-top{border-top:1px solid #dee2e6!important}.border-top-0{border-top:0!important}.border-end{border-right:1px solid #dee2e6!important}.border-end-0{border-right:0!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-bottom-0{border-bottom:0!important}.border-start{border-left:1px solid #dee2e6!important}.border-start-0{border-left:0!important}.border-primary{border-color:#0d6efd!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#198754!important}.border-info{border-color:#0dcaf0!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#212529!important}.border-white{border-color:#fff!important}.border-1{border-width:1px!important}.border-2{border-width:2px!important}.border-3{border-width:3px!important}.border-4{border-width:4px!important}.border-5{border-width:5px!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.mw-100{max-width:100%!important}.vw-100{width:100vw!important}.min-vw-100{min-width:100vw!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mh-100{max-height:100%!important}.vh-100{height:100vh!important}.min-vh-100{min-height:100vh!important}.flex-fill{-webkit-box-flex:1!important;-webkit-flex:1 1 auto!important;-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-webkit-flex-direction:row!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:row-reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:column-reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-grow-0{-webkit-box-flex:0!important;-webkit-flex-grow:0!important;-ms-flex-positive:0!important;flex-grow:0!important}.flex-grow-1{-webkit-box-flex:1!important;-webkit-flex-grow:1!important;-ms-flex-positive:1!important;flex-grow:1!important}.flex-shrink-0{-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important}.flex-shrink-1{-webkit-flex-shrink:1!important;-ms-flex-negative:1!important;flex-shrink:1!important}.flex-wrap{-webkit-flex-wrap:wrap!important;-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-webkit-flex-wrap:nowrap!important;-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-webkit-flex-wrap:wrap-reverse!important;-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.gap-0{gap:0!important}.gap-1{gap:.25rem!important}.gap-2{gap:.5rem!important}.gap-3{gap:1rem!important}.gap-4{gap:1.5rem!important}.gap-5{gap:3rem!important}.justify-content-start{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-webkit-box-pack:end!important;-webkit-justify-content:flex-end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-webkit-box-pack:center!important;-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-webkit-box-pack:justify!important;-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-webkit-justify-content:space-around!important;-ms-flex-pack:distribute!important;justify-content:space-around!important}.justify-content-evenly{-webkit-box-pack:space-evenly!important;-webkit-justify-content:space-evenly!important;-ms-flex-pack:space-evenly!important;justify-content:space-evenly!important}.align-items-start{-webkit-box-align:start!important;-webkit-align-items:flex-start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-webkit-box-align:end!important;-webkit-align-items:flex-end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-webkit-box-align:center!important;-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-webkit-box-align:baseline!important;-webkit-align-items:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-webkit-box-align:stretch!important;-webkit-align-items:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-webkit-align-content:flex-start!important;-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-webkit-align-content:flex-end!important;-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-webkit-align-content:center!important;-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-webkit-align-content:space-between!important;-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-webkit-align-content:space-around!important;-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-webkit-align-content:stretch!important;-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-webkit-align-self:auto!important;-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-start{-webkit-align-self:flex-start!important;-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-webkit-align-self:flex-end!important;-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-webkit-align-self:center!important;-ms-flex-item-align:center!important;align-self:center!important}.align-self-baseline{-webkit-align-self:baseline!important;-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-webkit-align-self:stretch!important;-ms-flex-item-align:stretch!important;align-self:stretch!important}.order-first{-webkit-box-ordinal-group:0!important;-webkit-order:-1!important;-ms-flex-order:-1!important;order:-1!important}.order-0{-webkit-box-ordinal-group:1!important;-webkit-order:0!important;-ms-flex-order:0!important;order:0!important}.order-1{-webkit-box-ordinal-group:2!important;-webkit-order:1!important;-ms-flex-order:1!important;order:1!important}.order-2{-webkit-box-ordinal-group:3!important;-webkit-order:2!important;-ms-flex-order:2!important;order:2!important}.order-3{-webkit-box-ordinal-group:4!important;-webkit-order:3!important;-ms-flex-order:3!important;order:3!important}.order-4{-webkit-box-ordinal-group:5!important;-webkit-order:4!important;-ms-flex-order:4!important;order:4!important}.order-5{-webkit-box-ordinal-group:6!important;-webkit-order:5!important;-ms-flex-order:5!important;order:5!important}.order-last{-webkit-box-ordinal-group:7!important;-webkit-order:6!important;-ms-flex-order:6!important;order:6!important}.m-0{margin:0!important}.m-1{margin:.25rem!important}.m-2{margin:.5rem!important}.m-3{margin:1rem!important}.m-4{margin:1.5rem!important}.m-5{margin:3rem!important}.m-auto{margin:auto!important}.mx-0{margin-right:0!important;margin-left:0!important}.mx-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-3{margin-right:1rem!important;margin-left:1rem!important}.mx-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-5{margin-right:3rem!important;margin-left:3rem!important}.mx-auto{margin-right:auto!important;margin-left:auto!important}.my-0{margin-top:0!important;margin-bottom:0!important}.my-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-0{margin-top:0!important}.mt-1{margin-top:.25rem!important}.mt-2{margin-top:.5rem!important}.mt-3{margin-top:1rem!important}.mt-4{margin-top:1.5rem!important}.mt-5{margin-top:3rem!important}.mt-auto{margin-top:auto!important}.me-0{margin-right:0!important}.me-1{margin-right:.25rem!important}.me-2{margin-right:.5rem!important}.me-3{margin-right:1rem!important}.me-4{margin-right:1.5rem!important}.me-5{margin-right:3rem!important}.me-auto{margin-right:auto!important}.mb-0{margin-bottom:0!important}.mb-1{margin-bottom:.25rem!important}.mb-2{margin-bottom:.5rem!important}.mb-3{margin-bottom:1rem!important}.mb-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.mb-auto{margin-bottom:auto!important}.ms-0{margin-left:0!important}.ms-1{margin-left:.25rem!important}.ms-2{margin-left:.5rem!important}.ms-3{margin-left:1rem!important}.ms-4{margin-left:1.5rem!important}.ms-5{margin-left:3rem!important}.ms-auto{margin-left:auto!important}.p-0{padding:0!important}.p-1{padding:.25rem!important}.p-2{padding:.5rem!important}.p-3{padding:1rem!important}.p-4{padding:1.5rem!important}.p-5{padding:3rem!important}.px-0{padding-right:0!important;padding-left:0!important}.px-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-3{padding-right:1rem!important;padding-left:1rem!important}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-5{padding-right:3rem!important;padding-left:3rem!important}.py-0{padding-top:0!important;padding-bottom:0!important}.py-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-0{padding-top:0!important}.pt-1{padding-top:.25rem!important}.pt-2{padding-top:.5rem!important}.pt-3{padding-top:1rem!important}.pt-4{padding-top:1.5rem!important}.pt-5{padding-top:3rem!important}.pe-0{padding-right:0!important}.pe-1{padding-right:.25rem!important}.pe-2{padding-right:.5rem!important}.pe-3{padding-right:1rem!important}.pe-4{padding-right:1.5rem!important}.pe-5{padding-right:3rem!important}.pb-0{padding-bottom:0!important}.pb-1{padding-bottom:.25rem!important}.pb-2{padding-bottom:.5rem!important}.pb-3{padding-bottom:1rem!important}.pb-4{padding-bottom:1.5rem!important}.pb-5{padding-bottom:3rem!important}.ps-0{padding-left:0!important}.ps-1{padding-left:.25rem!important}.ps-2{padding-left:.5rem!important}.ps-3{padding-left:1rem!important}.ps-4{padding-left:1.5rem!important}.ps-5{padding-left:3rem!important}.font-monospace{font-family:var(--bs-font-monospace)!important}.fs-1{font-size:calc(1.375rem + 1.5vw)!important}.fs-2{font-size:calc(1.325rem + .9vw)!important}.fs-3{font-size:calc(1.3rem + .6vw)!important}.fs-4{font-size:calc(1.275rem + .3vw)!important}.fs-5{font-size:1.25rem!important}.fs-6{font-size:1rem!important}.fst-italic{font-style:italic!important}.fst-normal{font-style:normal!important}.fw-light{font-weight:300!important}.fw-lighter{font-weight:lighter!important}.fw-normal{font-weight:400!important}.fw-bold{font-weight:700!important}.fw-bolder{font-weight:bolder!important}.lh-1{line-height:1!important}.lh-sm{line-height:1.25!important}.lh-base{line-height:1.5!important}.lh-lg{line-height:2!important}.text-start{text-align:left!important}.text-end{text-align:right!important}.text-center{text-align:center!important}.text-decoration-none{text-decoration:none!important}.text-decoration-underline{text-decoration:underline!important}.text-decoration-line-through{text-decoration:line-through!important}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-break{word-wrap:break-word!important;word-break:break-word!important}.text-primary{color:#0d6efd!important}.text-secondary{color:#6c757d!important}.text-success{color:#198754!important}.text-info{color:#0dcaf0!important}.text-warning{color:#ffc107!important}.text-danger{color:#dc3545!important}.text-light{color:#f8f9fa!important}.text-dark{color:#212529!important}.text-white{color:#fff!important}.text-body{color:#212529!important}.text-muted{color:#6c757d!important}.text-black-50{color:rgba(0,0,0,.5)!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-reset{color:inherit!important}.bg-primary{background-color:#0d6efd!important}.bg-secondary{background-color:#6c757d!important}.bg-success{background-color:#198754!important}.bg-info{background-color:#0dcaf0!important}.bg-warning{background-color:#ffc107!important}.bg-danger{background-color:#dc3545!important}.bg-light{background-color:#f8f9fa!important}.bg-dark{background-color:#212529!important}.bg-body{background-color:#fff!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.bg-gradient{background-image:var(--bs-gradient)!important}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;-ms-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.pe-none{pointer-events:none!important}.pe-auto{pointer-events:auto!important}.rounded{border-radius:.25rem!important}.rounded-0{border-radius:0!important}.rounded-1{border-radius:.2rem!important}.rounded-2{border-radius:.25rem!important}.rounded-3{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-end{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-start{border-bottom-left-radius:.25rem!important;border-top-left-radius:.25rem!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media (min-width:576px){.float-sm-start{float:left!important}.float-sm-end{float:right!important}.float-sm-none{float:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-grid{display:grid!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-sm-none{display:none!important}.flex-sm-fill{-webkit-box-flex:1!important;-webkit-flex:1 1 auto!important;-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-sm-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-webkit-flex-direction:row!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:row-reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:column-reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-grow-0{-webkit-box-flex:0!important;-webkit-flex-grow:0!important;-ms-flex-positive:0!important;flex-grow:0!important}.flex-sm-grow-1{-webkit-box-flex:1!important;-webkit-flex-grow:1!important;-ms-flex-positive:1!important;flex-grow:1!important}.flex-sm-shrink-0{-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important}.flex-sm-shrink-1{-webkit-flex-shrink:1!important;-ms-flex-negative:1!important;flex-shrink:1!important}.flex-sm-wrap{-webkit-flex-wrap:wrap!important;-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-webkit-flex-wrap:nowrap!important;-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-webkit-flex-wrap:wrap-reverse!important;-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.gap-sm-0{gap:0!important}.gap-sm-1{gap:.25rem!important}.gap-sm-2{gap:.5rem!important}.gap-sm-3{gap:1rem!important}.gap-sm-4{gap:1.5rem!important}.gap-sm-5{gap:3rem!important}.justify-content-sm-start{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-webkit-box-pack:end!important;-webkit-justify-content:flex-end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-webkit-box-pack:center!important;-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-webkit-box-pack:justify!important;-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-webkit-justify-content:space-around!important;-ms-flex-pack:distribute!important;justify-content:space-around!important}.justify-content-sm-evenly{-webkit-box-pack:space-evenly!important;-webkit-justify-content:space-evenly!important;-ms-flex-pack:space-evenly!important;justify-content:space-evenly!important}.align-items-sm-start{-webkit-box-align:start!important;-webkit-align-items:flex-start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-webkit-box-align:end!important;-webkit-align-items:flex-end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-webkit-box-align:center!important;-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-webkit-box-align:baseline!important;-webkit-align-items:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-webkit-box-align:stretch!important;-webkit-align-items:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-webkit-align-content:flex-start!important;-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-webkit-align-content:flex-end!important;-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-webkit-align-content:center!important;-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-webkit-align-content:space-between!important;-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-webkit-align-content:space-around!important;-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-webkit-align-content:stretch!important;-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-webkit-align-self:auto!important;-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-sm-start{-webkit-align-self:flex-start!important;-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-webkit-align-self:flex-end!important;-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-webkit-align-self:center!important;-ms-flex-item-align:center!important;align-self:center!important}.align-self-sm-baseline{-webkit-align-self:baseline!important;-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-webkit-align-self:stretch!important;-ms-flex-item-align:stretch!important;align-self:stretch!important}.order-sm-first{-webkit-box-ordinal-group:0!important;-webkit-order:-1!important;-ms-flex-order:-1!important;order:-1!important}.order-sm-0{-webkit-box-ordinal-group:1!important;-webkit-order:0!important;-ms-flex-order:0!important;order:0!important}.order-sm-1{-webkit-box-ordinal-group:2!important;-webkit-order:1!important;-ms-flex-order:1!important;order:1!important}.order-sm-2{-webkit-box-ordinal-group:3!important;-webkit-order:2!important;-ms-flex-order:2!important;order:2!important}.order-sm-3{-webkit-box-ordinal-group:4!important;-webkit-order:3!important;-ms-flex-order:3!important;order:3!important}.order-sm-4{-webkit-box-ordinal-group:5!important;-webkit-order:4!important;-ms-flex-order:4!important;order:4!important}.order-sm-5{-webkit-box-ordinal-group:6!important;-webkit-order:5!important;-ms-flex-order:5!important;order:5!important}.order-sm-last{-webkit-box-ordinal-group:7!important;-webkit-order:6!important;-ms-flex-order:6!important;order:6!important}.m-sm-0{margin:0!important}.m-sm-1{margin:.25rem!important}.m-sm-2{margin:.5rem!important}.m-sm-3{margin:1rem!important}.m-sm-4{margin:1.5rem!important}.m-sm-5{margin:3rem!important}.m-sm-auto{margin:auto!important}.mx-sm-0{margin-right:0!important;margin-left:0!important}.mx-sm-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-sm-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-sm-3{margin-right:1rem!important;margin-left:1rem!important}.mx-sm-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-sm-5{margin-right:3rem!important;margin-left:3rem!important}.mx-sm-auto{margin-right:auto!important;margin-left:auto!important}.my-sm-0{margin-top:0!important;margin-bottom:0!important}.my-sm-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-sm-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-sm-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-sm-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-sm-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-sm-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-sm-0{margin-top:0!important}.mt-sm-1{margin-top:.25rem!important}.mt-sm-2{margin-top:.5rem!important}.mt-sm-3{margin-top:1rem!important}.mt-sm-4{margin-top:1.5rem!important}.mt-sm-5{margin-top:3rem!important}.mt-sm-auto{margin-top:auto!important}.me-sm-0{margin-right:0!important}.me-sm-1{margin-right:.25rem!important}.me-sm-2{margin-right:.5rem!important}.me-sm-3{margin-right:1rem!important}.me-sm-4{margin-right:1.5rem!important}.me-sm-5{margin-right:3rem!important}.me-sm-auto{margin-right:auto!important}.mb-sm-0{margin-bottom:0!important}.mb-sm-1{margin-bottom:.25rem!important}.mb-sm-2{margin-bottom:.5rem!important}.mb-sm-3{margin-bottom:1rem!important}.mb-sm-4{margin-bottom:1.5rem!important}.mb-sm-5{margin-bottom:3rem!important}.mb-sm-auto{margin-bottom:auto!important}.ms-sm-0{margin-left:0!important}.ms-sm-1{margin-left:.25rem!important}.ms-sm-2{margin-left:.5rem!important}.ms-sm-3{margin-left:1rem!important}.ms-sm-4{margin-left:1.5rem!important}.ms-sm-5{margin-left:3rem!important}.ms-sm-auto{margin-left:auto!important}.p-sm-0{padding:0!important}.p-sm-1{padding:.25rem!important}.p-sm-2{padding:.5rem!important}.p-sm-3{padding:1rem!important}.p-sm-4{padding:1.5rem!important}.p-sm-5{padding:3rem!important}.px-sm-0{padding-right:0!important;padding-left:0!important}.px-sm-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-sm-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-sm-3{padding-right:1rem!important;padding-left:1rem!important}.px-sm-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-sm-5{padding-right:3rem!important;padding-left:3rem!important}.py-sm-0{padding-top:0!important;padding-bottom:0!important}.py-sm-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-sm-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-sm-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-sm-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-sm-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-sm-0{padding-top:0!important}.pt-sm-1{padding-top:.25rem!important}.pt-sm-2{padding-top:.5rem!important}.pt-sm-3{padding-top:1rem!important}.pt-sm-4{padding-top:1.5rem!important}.pt-sm-5{padding-top:3rem!important}.pe-sm-0{padding-right:0!important}.pe-sm-1{padding-right:.25rem!important}.pe-sm-2{padding-right:.5rem!important}.pe-sm-3{padding-right:1rem!important}.pe-sm-4{padding-right:1.5rem!important}.pe-sm-5{padding-right:3rem!important}.pb-sm-0{padding-bottom:0!important}.pb-sm-1{padding-bottom:.25rem!important}.pb-sm-2{padding-bottom:.5rem!important}.pb-sm-3{padding-bottom:1rem!important}.pb-sm-4{padding-bottom:1.5rem!important}.pb-sm-5{padding-bottom:3rem!important}.ps-sm-0{padding-left:0!important}.ps-sm-1{padding-left:.25rem!important}.ps-sm-2{padding-left:.5rem!important}.ps-sm-3{padding-left:1rem!important}.ps-sm-4{padding-left:1.5rem!important}.ps-sm-5{padding-left:3rem!important}.text-sm-start{text-align:left!important}.text-sm-end{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.float-md-start{float:left!important}.float-md-end{float:right!important}.float-md-none{float:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-grid{display:grid!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-md-none{display:none!important}.flex-md-fill{-webkit-box-flex:1!important;-webkit-flex:1 1 auto!important;-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-md-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-webkit-flex-direction:row!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:row-reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:column-reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-grow-0{-webkit-box-flex:0!important;-webkit-flex-grow:0!important;-ms-flex-positive:0!important;flex-grow:0!important}.flex-md-grow-1{-webkit-box-flex:1!important;-webkit-flex-grow:1!important;-ms-flex-positive:1!important;flex-grow:1!important}.flex-md-shrink-0{-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important}.flex-md-shrink-1{-webkit-flex-shrink:1!important;-ms-flex-negative:1!important;flex-shrink:1!important}.flex-md-wrap{-webkit-flex-wrap:wrap!important;-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-webkit-flex-wrap:nowrap!important;-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-webkit-flex-wrap:wrap-reverse!important;-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.gap-md-0{gap:0!important}.gap-md-1{gap:.25rem!important}.gap-md-2{gap:.5rem!important}.gap-md-3{gap:1rem!important}.gap-md-4{gap:1.5rem!important}.gap-md-5{gap:3rem!important}.justify-content-md-start{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-webkit-box-pack:end!important;-webkit-justify-content:flex-end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-webkit-box-pack:center!important;-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-webkit-box-pack:justify!important;-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-webkit-justify-content:space-around!important;-ms-flex-pack:distribute!important;justify-content:space-around!important}.justify-content-md-evenly{-webkit-box-pack:space-evenly!important;-webkit-justify-content:space-evenly!important;-ms-flex-pack:space-evenly!important;justify-content:space-evenly!important}.align-items-md-start{-webkit-box-align:start!important;-webkit-align-items:flex-start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-webkit-box-align:end!important;-webkit-align-items:flex-end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-webkit-box-align:center!important;-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-webkit-box-align:baseline!important;-webkit-align-items:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-webkit-box-align:stretch!important;-webkit-align-items:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-webkit-align-content:flex-start!important;-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-webkit-align-content:flex-end!important;-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-webkit-align-content:center!important;-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-webkit-align-content:space-between!important;-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-webkit-align-content:space-around!important;-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-webkit-align-content:stretch!important;-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-webkit-align-self:auto!important;-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-md-start{-webkit-align-self:flex-start!important;-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-webkit-align-self:flex-end!important;-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-webkit-align-self:center!important;-ms-flex-item-align:center!important;align-self:center!important}.align-self-md-baseline{-webkit-align-self:baseline!important;-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-webkit-align-self:stretch!important;-ms-flex-item-align:stretch!important;align-self:stretch!important}.order-md-first{-webkit-box-ordinal-group:0!important;-webkit-order:-1!important;-ms-flex-order:-1!important;order:-1!important}.order-md-0{-webkit-box-ordinal-group:1!important;-webkit-order:0!important;-ms-flex-order:0!important;order:0!important}.order-md-1{-webkit-box-ordinal-group:2!important;-webkit-order:1!important;-ms-flex-order:1!important;order:1!important}.order-md-2{-webkit-box-ordinal-group:3!important;-webkit-order:2!important;-ms-flex-order:2!important;order:2!important}.order-md-3{-webkit-box-ordinal-group:4!important;-webkit-order:3!important;-ms-flex-order:3!important;order:3!important}.order-md-4{-webkit-box-ordinal-group:5!important;-webkit-order:4!important;-ms-flex-order:4!important;order:4!important}.order-md-5{-webkit-box-ordinal-group:6!important;-webkit-order:5!important;-ms-flex-order:5!important;order:5!important}.order-md-last{-webkit-box-ordinal-group:7!important;-webkit-order:6!important;-ms-flex-order:6!important;order:6!important}.m-md-0{margin:0!important}.m-md-1{margin:.25rem!important}.m-md-2{margin:.5rem!important}.m-md-3{margin:1rem!important}.m-md-4{margin:1.5rem!important}.m-md-5{margin:3rem!important}.m-md-auto{margin:auto!important}.mx-md-0{margin-right:0!important;margin-left:0!important}.mx-md-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-md-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-md-3{margin-right:1rem!important;margin-left:1rem!important}.mx-md-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-md-5{margin-right:3rem!important;margin-left:3rem!important}.mx-md-auto{margin-right:auto!important;margin-left:auto!important}.my-md-0{margin-top:0!important;margin-bottom:0!important}.my-md-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-md-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-md-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-md-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-md-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-md-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-md-0{margin-top:0!important}.mt-md-1{margin-top:.25rem!important}.mt-md-2{margin-top:.5rem!important}.mt-md-3{margin-top:1rem!important}.mt-md-4{margin-top:1.5rem!important}.mt-md-5{margin-top:3rem!important}.mt-md-auto{margin-top:auto!important}.me-md-0{margin-right:0!important}.me-md-1{margin-right:.25rem!important}.me-md-2{margin-right:.5rem!important}.me-md-3{margin-right:1rem!important}.me-md-4{margin-right:1.5rem!important}.me-md-5{margin-right:3rem!important}.me-md-auto{margin-right:auto!important}.mb-md-0{margin-bottom:0!important}.mb-md-1{margin-bottom:.25rem!important}.mb-md-2{margin-bottom:.5rem!important}.mb-md-3{margin-bottom:1rem!important}.mb-md-4{margin-bottom:1.5rem!important}.mb-md-5{margin-bottom:3rem!important}.mb-md-auto{margin-bottom:auto!important}.ms-md-0{margin-left:0!important}.ms-md-1{margin-left:.25rem!important}.ms-md-2{margin-left:.5rem!important}.ms-md-3{margin-left:1rem!important}.ms-md-4{margin-left:1.5rem!important}.ms-md-5{margin-left:3rem!important}.ms-md-auto{margin-left:auto!important}.p-md-0{padding:0!important}.p-md-1{padding:.25rem!important}.p-md-2{padding:.5rem!important}.p-md-3{padding:1rem!important}.p-md-4{padding:1.5rem!important}.p-md-5{padding:3rem!important}.px-md-0{padding-right:0!important;padding-left:0!important}.px-md-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-md-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-md-3{padding-right:1rem!important;padding-left:1rem!important}.px-md-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-md-5{padding-right:3rem!important;padding-left:3rem!important}.py-md-0{padding-top:0!important;padding-bottom:0!important}.py-md-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-md-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-md-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-md-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-md-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-md-0{padding-top:0!important}.pt-md-1{padding-top:.25rem!important}.pt-md-2{padding-top:.5rem!important}.pt-md-3{padding-top:1rem!important}.pt-md-4{padding-top:1.5rem!important}.pt-md-5{padding-top:3rem!important}.pe-md-0{padding-right:0!important}.pe-md-1{padding-right:.25rem!important}.pe-md-2{padding-right:.5rem!important}.pe-md-3{padding-right:1rem!important}.pe-md-4{padding-right:1.5rem!important}.pe-md-5{padding-right:3rem!important}.pb-md-0{padding-bottom:0!important}.pb-md-1{padding-bottom:.25rem!important}.pb-md-2{padding-bottom:.5rem!important}.pb-md-3{padding-bottom:1rem!important}.pb-md-4{padding-bottom:1.5rem!important}.pb-md-5{padding-bottom:3rem!important}.ps-md-0{padding-left:0!important}.ps-md-1{padding-left:.25rem!important}.ps-md-2{padding-left:.5rem!important}.ps-md-3{padding-left:1rem!important}.ps-md-4{padding-left:1.5rem!important}.ps-md-5{padding-left:3rem!important}.text-md-start{text-align:left!important}.text-md-end{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.float-lg-start{float:left!important}.float-lg-end{float:right!important}.float-lg-none{float:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-grid{display:grid!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-lg-none{display:none!important}.flex-lg-fill{-webkit-box-flex:1!important;-webkit-flex:1 1 auto!important;-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-lg-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-webkit-flex-direction:row!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:row-reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:column-reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-grow-0{-webkit-box-flex:0!important;-webkit-flex-grow:0!important;-ms-flex-positive:0!important;flex-grow:0!important}.flex-lg-grow-1{-webkit-box-flex:1!important;-webkit-flex-grow:1!important;-ms-flex-positive:1!important;flex-grow:1!important}.flex-lg-shrink-0{-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important}.flex-lg-shrink-1{-webkit-flex-shrink:1!important;-ms-flex-negative:1!important;flex-shrink:1!important}.flex-lg-wrap{-webkit-flex-wrap:wrap!important;-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-webkit-flex-wrap:nowrap!important;-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-webkit-flex-wrap:wrap-reverse!important;-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.gap-lg-0{gap:0!important}.gap-lg-1{gap:.25rem!important}.gap-lg-2{gap:.5rem!important}.gap-lg-3{gap:1rem!important}.gap-lg-4{gap:1.5rem!important}.gap-lg-5{gap:3rem!important}.justify-content-lg-start{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-webkit-box-pack:end!important;-webkit-justify-content:flex-end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-webkit-box-pack:center!important;-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-webkit-box-pack:justify!important;-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-webkit-justify-content:space-around!important;-ms-flex-pack:distribute!important;justify-content:space-around!important}.justify-content-lg-evenly{-webkit-box-pack:space-evenly!important;-webkit-justify-content:space-evenly!important;-ms-flex-pack:space-evenly!important;justify-content:space-evenly!important}.align-items-lg-start{-webkit-box-align:start!important;-webkit-align-items:flex-start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-webkit-box-align:end!important;-webkit-align-items:flex-end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-webkit-box-align:center!important;-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-webkit-box-align:baseline!important;-webkit-align-items:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-webkit-box-align:stretch!important;-webkit-align-items:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-webkit-align-content:flex-start!important;-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-webkit-align-content:flex-end!important;-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-webkit-align-content:center!important;-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-webkit-align-content:space-between!important;-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-webkit-align-content:space-around!important;-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-webkit-align-content:stretch!important;-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-webkit-align-self:auto!important;-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-lg-start{-webkit-align-self:flex-start!important;-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-webkit-align-self:flex-end!important;-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-webkit-align-self:center!important;-ms-flex-item-align:center!important;align-self:center!important}.align-self-lg-baseline{-webkit-align-self:baseline!important;-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-webkit-align-self:stretch!important;-ms-flex-item-align:stretch!important;align-self:stretch!important}.order-lg-first{-webkit-box-ordinal-group:0!important;-webkit-order:-1!important;-ms-flex-order:-1!important;order:-1!important}.order-lg-0{-webkit-box-ordinal-group:1!important;-webkit-order:0!important;-ms-flex-order:0!important;order:0!important}.order-lg-1{-webkit-box-ordinal-group:2!important;-webkit-order:1!important;-ms-flex-order:1!important;order:1!important}.order-lg-2{-webkit-box-ordinal-group:3!important;-webkit-order:2!important;-ms-flex-order:2!important;order:2!important}.order-lg-3{-webkit-box-ordinal-group:4!important;-webkit-order:3!important;-ms-flex-order:3!important;order:3!important}.order-lg-4{-webkit-box-ordinal-group:5!important;-webkit-order:4!important;-ms-flex-order:4!important;order:4!important}.order-lg-5{-webkit-box-ordinal-group:6!important;-webkit-order:5!important;-ms-flex-order:5!important;order:5!important}.order-lg-last{-webkit-box-ordinal-group:7!important;-webkit-order:6!important;-ms-flex-order:6!important;order:6!important}.m-lg-0{margin:0!important}.m-lg-1{margin:.25rem!important}.m-lg-2{margin:.5rem!important}.m-lg-3{margin:1rem!important}.m-lg-4{margin:1.5rem!important}.m-lg-5{margin:3rem!important}.m-lg-auto{margin:auto!important}.mx-lg-0{margin-right:0!important;margin-left:0!important}.mx-lg-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-lg-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-lg-3{margin-right:1rem!important;margin-left:1rem!important}.mx-lg-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-lg-5{margin-right:3rem!important;margin-left:3rem!important}.mx-lg-auto{margin-right:auto!important;margin-left:auto!important}.my-lg-0{margin-top:0!important;margin-bottom:0!important}.my-lg-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-lg-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-lg-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-lg-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-lg-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-lg-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-lg-0{margin-top:0!important}.mt-lg-1{margin-top:.25rem!important}.mt-lg-2{margin-top:.5rem!important}.mt-lg-3{margin-top:1rem!important}.mt-lg-4{margin-top:1.5rem!important}.mt-lg-5{margin-top:3rem!important}.mt-lg-auto{margin-top:auto!important}.me-lg-0{margin-right:0!important}.me-lg-1{margin-right:.25rem!important}.me-lg-2{margin-right:.5rem!important}.me-lg-3{margin-right:1rem!important}.me-lg-4{margin-right:1.5rem!important}.me-lg-5{margin-right:3rem!important}.me-lg-auto{margin-right:auto!important}.mb-lg-0{margin-bottom:0!important}.mb-lg-1{margin-bottom:.25rem!important}.mb-lg-2{margin-bottom:.5rem!important}.mb-lg-3{margin-bottom:1rem!important}.mb-lg-4{margin-bottom:1.5rem!important}.mb-lg-5{margin-bottom:3rem!important}.mb-lg-auto{margin-bottom:auto!important}.ms-lg-0{margin-left:0!important}.ms-lg-1{margin-left:.25rem!important}.ms-lg-2{margin-left:.5rem!important}.ms-lg-3{margin-left:1rem!important}.ms-lg-4{margin-left:1.5rem!important}.ms-lg-5{margin-left:3rem!important}.ms-lg-auto{margin-left:auto!important}.p-lg-0{padding:0!important}.p-lg-1{padding:.25rem!important}.p-lg-2{padding:.5rem!important}.p-lg-3{padding:1rem!important}.p-lg-4{padding:1.5rem!important}.p-lg-5{padding:3rem!important}.px-lg-0{padding-right:0!important;padding-left:0!important}.px-lg-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-lg-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-lg-3{padding-right:1rem!important;padding-left:1rem!important}.px-lg-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-lg-5{padding-right:3rem!important;padding-left:3rem!important}.py-lg-0{padding-top:0!important;padding-bottom:0!important}.py-lg-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-lg-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-lg-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-lg-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-lg-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-lg-0{padding-top:0!important}.pt-lg-1{padding-top:.25rem!important}.pt-lg-2{padding-top:.5rem!important}.pt-lg-3{padding-top:1rem!important}.pt-lg-4{padding-top:1.5rem!important}.pt-lg-5{padding-top:3rem!important}.pe-lg-0{padding-right:0!important}.pe-lg-1{padding-right:.25rem!important}.pe-lg-2{padding-right:.5rem!important}.pe-lg-3{padding-right:1rem!important}.pe-lg-4{padding-right:1.5rem!important}.pe-lg-5{padding-right:3rem!important}.pb-lg-0{padding-bottom:0!important}.pb-lg-1{padding-bottom:.25rem!important}.pb-lg-2{padding-bottom:.5rem!important}.pb-lg-3{padding-bottom:1rem!important}.pb-lg-4{padding-bottom:1.5rem!important}.pb-lg-5{padding-bottom:3rem!important}.ps-lg-0{padding-left:0!important}.ps-lg-1{padding-left:.25rem!important}.ps-lg-2{padding-left:.5rem!important}.ps-lg-3{padding-left:1rem!important}.ps-lg-4{padding-left:1.5rem!important}.ps-lg-5{padding-left:3rem!important}.text-lg-start{text-align:left!important}.text-lg-end{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.float-xl-start{float:left!important}.float-xl-end{float:right!important}.float-xl-none{float:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-grid{display:grid!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-xl-none{display:none!important}.flex-xl-fill{-webkit-box-flex:1!important;-webkit-flex:1 1 auto!important;-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xl-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-webkit-flex-direction:row!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:row-reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:column-reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-grow-0{-webkit-box-flex:0!important;-webkit-flex-grow:0!important;-ms-flex-positive:0!important;flex-grow:0!important}.flex-xl-grow-1{-webkit-box-flex:1!important;-webkit-flex-grow:1!important;-ms-flex-positive:1!important;flex-grow:1!important}.flex-xl-shrink-0{-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xl-shrink-1{-webkit-flex-shrink:1!important;-ms-flex-negative:1!important;flex-shrink:1!important}.flex-xl-wrap{-webkit-flex-wrap:wrap!important;-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-webkit-flex-wrap:nowrap!important;-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-webkit-flex-wrap:wrap-reverse!important;-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.gap-xl-0{gap:0!important}.gap-xl-1{gap:.25rem!important}.gap-xl-2{gap:.5rem!important}.gap-xl-3{gap:1rem!important}.gap-xl-4{gap:1.5rem!important}.gap-xl-5{gap:3rem!important}.justify-content-xl-start{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-webkit-box-pack:end!important;-webkit-justify-content:flex-end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-webkit-box-pack:center!important;-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-webkit-box-pack:justify!important;-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-webkit-justify-content:space-around!important;-ms-flex-pack:distribute!important;justify-content:space-around!important}.justify-content-xl-evenly{-webkit-box-pack:space-evenly!important;-webkit-justify-content:space-evenly!important;-ms-flex-pack:space-evenly!important;justify-content:space-evenly!important}.align-items-xl-start{-webkit-box-align:start!important;-webkit-align-items:flex-start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-webkit-box-align:end!important;-webkit-align-items:flex-end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-webkit-box-align:center!important;-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-webkit-box-align:baseline!important;-webkit-align-items:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-webkit-box-align:stretch!important;-webkit-align-items:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-webkit-align-content:flex-start!important;-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-webkit-align-content:flex-end!important;-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-webkit-align-content:center!important;-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-webkit-align-content:space-between!important;-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-webkit-align-content:space-around!important;-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-webkit-align-content:stretch!important;-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-webkit-align-self:auto!important;-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xl-start{-webkit-align-self:flex-start!important;-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-webkit-align-self:flex-end!important;-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-webkit-align-self:center!important;-ms-flex-item-align:center!important;align-self:center!important}.align-self-xl-baseline{-webkit-align-self:baseline!important;-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-webkit-align-self:stretch!important;-ms-flex-item-align:stretch!important;align-self:stretch!important}.order-xl-first{-webkit-box-ordinal-group:0!important;-webkit-order:-1!important;-ms-flex-order:-1!important;order:-1!important}.order-xl-0{-webkit-box-ordinal-group:1!important;-webkit-order:0!important;-ms-flex-order:0!important;order:0!important}.order-xl-1{-webkit-box-ordinal-group:2!important;-webkit-order:1!important;-ms-flex-order:1!important;order:1!important}.order-xl-2{-webkit-box-ordinal-group:3!important;-webkit-order:2!important;-ms-flex-order:2!important;order:2!important}.order-xl-3{-webkit-box-ordinal-group:4!important;-webkit-order:3!important;-ms-flex-order:3!important;order:3!important}.order-xl-4{-webkit-box-ordinal-group:5!important;-webkit-order:4!important;-ms-flex-order:4!important;order:4!important}.order-xl-5{-webkit-box-ordinal-group:6!important;-webkit-order:5!important;-ms-flex-order:5!important;order:5!important}.order-xl-last{-webkit-box-ordinal-group:7!important;-webkit-order:6!important;-ms-flex-order:6!important;order:6!important}.m-xl-0{margin:0!important}.m-xl-1{margin:.25rem!important}.m-xl-2{margin:.5rem!important}.m-xl-3{margin:1rem!important}.m-xl-4{margin:1.5rem!important}.m-xl-5{margin:3rem!important}.m-xl-auto{margin:auto!important}.mx-xl-0{margin-right:0!important;margin-left:0!important}.mx-xl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xl-auto{margin-right:auto!important;margin-left:auto!important}.my-xl-0{margin-top:0!important;margin-bottom:0!important}.my-xl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xl-0{margin-top:0!important}.mt-xl-1{margin-top:.25rem!important}.mt-xl-2{margin-top:.5rem!important}.mt-xl-3{margin-top:1rem!important}.mt-xl-4{margin-top:1.5rem!important}.mt-xl-5{margin-top:3rem!important}.mt-xl-auto{margin-top:auto!important}.me-xl-0{margin-right:0!important}.me-xl-1{margin-right:.25rem!important}.me-xl-2{margin-right:.5rem!important}.me-xl-3{margin-right:1rem!important}.me-xl-4{margin-right:1.5rem!important}.me-xl-5{margin-right:3rem!important}.me-xl-auto{margin-right:auto!important}.mb-xl-0{margin-bottom:0!important}.mb-xl-1{margin-bottom:.25rem!important}.mb-xl-2{margin-bottom:.5rem!important}.mb-xl-3{margin-bottom:1rem!important}.mb-xl-4{margin-bottom:1.5rem!important}.mb-xl-5{margin-bottom:3rem!important}.mb-xl-auto{margin-bottom:auto!important}.ms-xl-0{margin-left:0!important}.ms-xl-1{margin-left:.25rem!important}.ms-xl-2{margin-left:.5rem!important}.ms-xl-3{margin-left:1rem!important}.ms-xl-4{margin-left:1.5rem!important}.ms-xl-5{margin-left:3rem!important}.ms-xl-auto{margin-left:auto!important}.p-xl-0{padding:0!important}.p-xl-1{padding:.25rem!important}.p-xl-2{padding:.5rem!important}.p-xl-3{padding:1rem!important}.p-xl-4{padding:1.5rem!important}.p-xl-5{padding:3rem!important}.px-xl-0{padding-right:0!important;padding-left:0!important}.px-xl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xl-0{padding-top:0!important;padding-bottom:0!important}.py-xl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xl-0{padding-top:0!important}.pt-xl-1{padding-top:.25rem!important}.pt-xl-2{padding-top:.5rem!important}.pt-xl-3{padding-top:1rem!important}.pt-xl-4{padding-top:1.5rem!important}.pt-xl-5{padding-top:3rem!important}.pe-xl-0{padding-right:0!important}.pe-xl-1{padding-right:.25rem!important}.pe-xl-2{padding-right:.5rem!important}.pe-xl-3{padding-right:1rem!important}.pe-xl-4{padding-right:1.5rem!important}.pe-xl-5{padding-right:3rem!important}.pb-xl-0{padding-bottom:0!important}.pb-xl-1{padding-bottom:.25rem!important}.pb-xl-2{padding-bottom:.5rem!important}.pb-xl-3{padding-bottom:1rem!important}.pb-xl-4{padding-bottom:1.5rem!important}.pb-xl-5{padding-bottom:3rem!important}.ps-xl-0{padding-left:0!important}.ps-xl-1{padding-left:.25rem!important}.ps-xl-2{padding-left:.5rem!important}.ps-xl-3{padding-left:1rem!important}.ps-xl-4{padding-left:1.5rem!important}.ps-xl-5{padding-left:3rem!important}.text-xl-start{text-align:left!important}.text-xl-end{text-align:right!important}.text-xl-center{text-align:center!important}}@media (min-width:1400px){.float-xxl-start{float:left!important}.float-xxl-end{float:right!important}.float-xxl-none{float:none!important}.d-xxl-inline{display:inline!important}.d-xxl-inline-block{display:inline-block!important}.d-xxl-block{display:block!important}.d-xxl-grid{display:grid!important}.d-xxl-table{display:table!important}.d-xxl-table-row{display:table-row!important}.d-xxl-table-cell{display:table-cell!important}.d-xxl-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-xxl-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-xxl-none{display:none!important}.flex-xxl-fill{-webkit-box-flex:1!important;-webkit-flex:1 1 auto!important;-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xxl-row{-webkit-box-orient:horizontal!important;-webkit-box-direction:normal!important;-webkit-flex-direction:row!important;-ms-flex-direction:row!important;flex-direction:row!important}.flex-xxl-column{-webkit-box-orient:vertical!important;-webkit-box-direction:normal!important;-webkit-flex-direction:column!important;-ms-flex-direction:column!important;flex-direction:column!important}.flex-xxl-row-reverse{-webkit-box-orient:horizontal!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:row-reverse!important;-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xxl-column-reverse{-webkit-box-orient:vertical!important;-webkit-box-direction:reverse!important;-webkit-flex-direction:column-reverse!important;-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xxl-grow-0{-webkit-box-flex:0!important;-webkit-flex-grow:0!important;-ms-flex-positive:0!important;flex-grow:0!important}.flex-xxl-grow-1{-webkit-box-flex:1!important;-webkit-flex-grow:1!important;-ms-flex-positive:1!important;flex-grow:1!important}.flex-xxl-shrink-0{-webkit-flex-shrink:0!important;-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xxl-shrink-1{-webkit-flex-shrink:1!important;-ms-flex-negative:1!important;flex-shrink:1!important}.flex-xxl-wrap{-webkit-flex-wrap:wrap!important;-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xxl-nowrap{-webkit-flex-wrap:nowrap!important;-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xxl-wrap-reverse{-webkit-flex-wrap:wrap-reverse!important;-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.gap-xxl-0{gap:0!important}.gap-xxl-1{gap:.25rem!important}.gap-xxl-2{gap:.5rem!important}.gap-xxl-3{gap:1rem!important}.gap-xxl-4{gap:1.5rem!important}.gap-xxl-5{gap:3rem!important}.justify-content-xxl-start{-webkit-box-pack:start!important;-webkit-justify-content:flex-start!important;-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xxl-end{-webkit-box-pack:end!important;-webkit-justify-content:flex-end!important;-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xxl-center{-webkit-box-pack:center!important;-webkit-justify-content:center!important;-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xxl-between{-webkit-box-pack:justify!important;-webkit-justify-content:space-between!important;-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xxl-around{-webkit-justify-content:space-around!important;-ms-flex-pack:distribute!important;justify-content:space-around!important}.justify-content-xxl-evenly{-webkit-box-pack:space-evenly!important;-webkit-justify-content:space-evenly!important;-ms-flex-pack:space-evenly!important;justify-content:space-evenly!important}.align-items-xxl-start{-webkit-box-align:start!important;-webkit-align-items:flex-start!important;-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xxl-end{-webkit-box-align:end!important;-webkit-align-items:flex-end!important;-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xxl-center{-webkit-box-align:center!important;-webkit-align-items:center!important;-ms-flex-align:center!important;align-items:center!important}.align-items-xxl-baseline{-webkit-box-align:baseline!important;-webkit-align-items:baseline!important;-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xxl-stretch{-webkit-box-align:stretch!important;-webkit-align-items:stretch!important;-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xxl-start{-webkit-align-content:flex-start!important;-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xxl-end{-webkit-align-content:flex-end!important;-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xxl-center{-webkit-align-content:center!important;-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xxl-between{-webkit-align-content:space-between!important;-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xxl-around{-webkit-align-content:space-around!important;-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xxl-stretch{-webkit-align-content:stretch!important;-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xxl-auto{-webkit-align-self:auto!important;-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xxl-start{-webkit-align-self:flex-start!important;-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xxl-end{-webkit-align-self:flex-end!important;-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xxl-center{-webkit-align-self:center!important;-ms-flex-item-align:center!important;align-self:center!important}.align-self-xxl-baseline{-webkit-align-self:baseline!important;-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xxl-stretch{-webkit-align-self:stretch!important;-ms-flex-item-align:stretch!important;align-self:stretch!important}.order-xxl-first{-webkit-box-ordinal-group:0!important;-webkit-order:-1!important;-ms-flex-order:-1!important;order:-1!important}.order-xxl-0{-webkit-box-ordinal-group:1!important;-webkit-order:0!important;-ms-flex-order:0!important;order:0!important}.order-xxl-1{-webkit-box-ordinal-group:2!important;-webkit-order:1!important;-ms-flex-order:1!important;order:1!important}.order-xxl-2{-webkit-box-ordinal-group:3!important;-webkit-order:2!important;-ms-flex-order:2!important;order:2!important}.order-xxl-3{-webkit-box-ordinal-group:4!important;-webkit-order:3!important;-ms-flex-order:3!important;order:3!important}.order-xxl-4{-webkit-box-ordinal-group:5!important;-webkit-order:4!important;-ms-flex-order:4!important;order:4!important}.order-xxl-5{-webkit-box-ordinal-group:6!important;-webkit-order:5!important;-ms-flex-order:5!important;order:5!important}.order-xxl-last{-webkit-box-ordinal-group:7!important;-webkit-order:6!important;-ms-flex-order:6!important;order:6!important}.m-xxl-0{margin:0!important}.m-xxl-1{margin:.25rem!important}.m-xxl-2{margin:.5rem!important}.m-xxl-3{margin:1rem!important}.m-xxl-4{margin:1.5rem!important}.m-xxl-5{margin:3rem!important}.m-xxl-auto{margin:auto!important}.mx-xxl-0{margin-right:0!important;margin-left:0!important}.mx-xxl-1{margin-right:.25rem!important;margin-left:.25rem!important}.mx-xxl-2{margin-right:.5rem!important;margin-left:.5rem!important}.mx-xxl-3{margin-right:1rem!important;margin-left:1rem!important}.mx-xxl-4{margin-right:1.5rem!important;margin-left:1.5rem!important}.mx-xxl-5{margin-right:3rem!important;margin-left:3rem!important}.mx-xxl-auto{margin-right:auto!important;margin-left:auto!important}.my-xxl-0{margin-top:0!important;margin-bottom:0!important}.my-xxl-1{margin-top:.25rem!important;margin-bottom:.25rem!important}.my-xxl-2{margin-top:.5rem!important;margin-bottom:.5rem!important}.my-xxl-3{margin-top:1rem!important;margin-bottom:1rem!important}.my-xxl-4{margin-top:1.5rem!important;margin-bottom:1.5rem!important}.my-xxl-5{margin-top:3rem!important;margin-bottom:3rem!important}.my-xxl-auto{margin-top:auto!important;margin-bottom:auto!important}.mt-xxl-0{margin-top:0!important}.mt-xxl-1{margin-top:.25rem!important}.mt-xxl-2{margin-top:.5rem!important}.mt-xxl-3{margin-top:1rem!important}.mt-xxl-4{margin-top:1.5rem!important}.mt-xxl-5{margin-top:3rem!important}.mt-xxl-auto{margin-top:auto!important}.me-xxl-0{margin-right:0!important}.me-xxl-1{margin-right:.25rem!important}.me-xxl-2{margin-right:.5rem!important}.me-xxl-3{margin-right:1rem!important}.me-xxl-4{margin-right:1.5rem!important}.me-xxl-5{margin-right:3rem!important}.me-xxl-auto{margin-right:auto!important}.mb-xxl-0{margin-bottom:0!important}.mb-xxl-1{margin-bottom:.25rem!important}.mb-xxl-2{margin-bottom:.5rem!important}.mb-xxl-3{margin-bottom:1rem!important}.mb-xxl-4{margin-bottom:1.5rem!important}.mb-xxl-5{margin-bottom:3rem!important}.mb-xxl-auto{margin-bottom:auto!important}.ms-xxl-0{margin-left:0!important}.ms-xxl-1{margin-left:.25rem!important}.ms-xxl-2{margin-left:.5rem!important}.ms-xxl-3{margin-left:1rem!important}.ms-xxl-4{margin-left:1.5rem!important}.ms-xxl-5{margin-left:3rem!important}.ms-xxl-auto{margin-left:auto!important}.p-xxl-0{padding:0!important}.p-xxl-1{padding:.25rem!important}.p-xxl-2{padding:.5rem!important}.p-xxl-3{padding:1rem!important}.p-xxl-4{padding:1.5rem!important}.p-xxl-5{padding:3rem!important}.px-xxl-0{padding-right:0!important;padding-left:0!important}.px-xxl-1{padding-right:.25rem!important;padding-left:.25rem!important}.px-xxl-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-xxl-3{padding-right:1rem!important;padding-left:1rem!important}.px-xxl-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-xxl-5{padding-right:3rem!important;padding-left:3rem!important}.py-xxl-0{padding-top:0!important;padding-bottom:0!important}.py-xxl-1{padding-top:.25rem!important;padding-bottom:.25rem!important}.py-xxl-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-xxl-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-xxl-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-xxl-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-xxl-0{padding-top:0!important}.pt-xxl-1{padding-top:.25rem!important}.pt-xxl-2{padding-top:.5rem!important}.pt-xxl-3{padding-top:1rem!important}.pt-xxl-4{padding-top:1.5rem!important}.pt-xxl-5{padding-top:3rem!important}.pe-xxl-0{padding-right:0!important}.pe-xxl-1{padding-right:.25rem!important}.pe-xxl-2{padding-right:.5rem!important}.pe-xxl-3{padding-right:1rem!important}.pe-xxl-4{padding-right:1.5rem!important}.pe-xxl-5{padding-right:3rem!important}.pb-xxl-0{padding-bottom:0!important}.pb-xxl-1{padding-bottom:.25rem!important}.pb-xxl-2{padding-bottom:.5rem!important}.pb-xxl-3{padding-bottom:1rem!important}.pb-xxl-4{padding-bottom:1.5rem!important}.pb-xxl-5{padding-bottom:3rem!important}.ps-xxl-0{padding-left:0!important}.ps-xxl-1{padding-left:.25rem!important}.ps-xxl-2{padding-left:.5rem!important}.ps-xxl-3{padding-left:1rem!important}.ps-xxl-4{padding-left:1.5rem!important}.ps-xxl-5{padding-left:3rem!important}.text-xxl-start{text-align:left!important}.text-xxl-end{text-align:right!important}.text-xxl-center{text-align:center!important}}@media (min-width:1200px){.fs-1{font-size:2.5rem!important}.fs-2{font-size:2rem!important}.fs-3{font-size:1.75rem!important}.fs-4{font-size:1.5rem!important}}@media print{.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-grid{display:grid!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-webkit-box!important;display:-webkit-flex!important;display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-webkit-inline-box!important;display:-webkit-inline-flex!important;display:-ms-inline-flexbox!important;display:inline-flex!important}.d-print-none{display:none!important}}


/*!
Animate.css - http://daneden.me/animate
Version - 3.4.0
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2015 Daniel Eden
*/

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s;
}

.animated.bounceIn,
.animated.bounceOut {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

.animated.flipOutX,
.animated.flipOutY {
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
}

@-webkit-keyframes bounce {
  from, 20%, 53%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
    transform: translate3d(0,-4px,0);
  }
}

@keyframes bounce {
  from, 20%, 53%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }

  40%, 43% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0);
  }

  70% {
    -webkit-animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0);
  }

  90% {
    -webkit-transform: translate3d(0,-4px,0);
    transform: translate3d(0,-4px,0);
  }
}

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  -ms-transform-origin: center bottom;
      transform-origin: center bottom;
}

@-webkit-keyframes flash {
  from, 50%, to {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

@keyframes flash {
  from, 50%, to {
    opacity: 1;
  }

  25%, 75% {
    opacity: 0;
  }
}

.flash {
  -webkit-animation-name: flash;
  animation-name: flash;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes pulse {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse;
}

@-webkit-keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
    transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
    transform: scale3d(1.05, .95, 1);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes rubberBand {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    -webkit-transform: scale3d(.95, 1.05, 1);
    transform: scale3d(.95, 1.05, 1);
  }

  75% {
    -webkit-transform: scale3d(1.05, .95, 1);
    transform: scale3d(1.05, .95, 1);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}

@-webkit-keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes shake {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

.shake {
  -webkit-animation-name: shake;
  animation-name: shake;
}

@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }

  to {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg);
  }

  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg);
  }

  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg);
  }

  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg);
  }

  to {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg);
  }
}

.swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
      transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing;
}

@-webkit-keyframes tada {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes tada {
  from {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }

  10%, 20% {
    -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
  }

  30%, 50%, 70%, 90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
  }

  40%, 60%, 80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
  }

  to {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.tada {
  -webkit-animation-name: tada;
  animation-name: tada;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes wobble {
  from {
    -webkit-transform: none;
    transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes wobble {
  from {
    -webkit-transform: none;
    transform: none;
  }

  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
  }

  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
  }

  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
  }

  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
  }

  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

.wobble {
  -webkit-animation-name: wobble;
  animation-name: wobble;
}

@-webkit-keyframes jello {
  from, 11.1%, to {
    -webkit-transform: none;
    transform: none;
  }

  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg);
  }

  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg);
  }

  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg);
  }

  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg);
  }

  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
    transform: skewX(-0.78125deg) skewY(-0.78125deg);
  }

  77.7% {
    -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
    transform: skewX(0.390625deg) skewY(0.390625deg);
  }

  88.8% {
    -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
  }
}

@keyframes jello {
  from, 11.1%, to {
    -webkit-transform: none;
    transform: none;
  }

  22.2% {
    -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
    transform: skewX(-12.5deg) skewY(-12.5deg);
  }

  33.3% {
    -webkit-transform: skewX(6.25deg) skewY(6.25deg);
    transform: skewX(6.25deg) skewY(6.25deg);
  }

  44.4% {
    -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
    transform: skewX(-3.125deg) skewY(-3.125deg);
  }

  55.5% {
    -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
    transform: skewX(1.5625deg) skewY(1.5625deg);
  }

  66.6% {
    -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
    transform: skewX(-0.78125deg) skewY(-0.78125deg);
  }

  77.7% {
    -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
    transform: skewX(0.390625deg) skewY(0.390625deg);
  }

  88.8% {
    -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
  }
}

.jello {
  -webkit-animation-name: jello;
  animation-name: jello;
  -webkit-transform-origin: center;
  -ms-transform-origin: center;
      transform-origin: center;
}

@-webkit-keyframes bounceIn {
  from, 20%, 40%, 60%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
    transform: scale3d(.97, .97, .97);
  }

  to {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

@keyframes bounceIn {
  from, 20%, 40%, 60%, 80%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  40% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }

  80% {
    -webkit-transform: scale3d(.97, .97, .97);
    transform: scale3d(.97, .97, .97);
  }

  to {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

.bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
}

@-webkit-keyframes bounceInDown {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes bounceInDown {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

.bounceInDown {
  -webkit-animation-name: bounceInDown;
  animation-name: bounceInDown;
}

@-webkit-keyframes bounceInLeft {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes bounceInLeft {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft;
}

@-webkit-keyframes bounceInRight {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  from {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes bounceInRight {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  from {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0);
  }

  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }

  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0);
  }

  to {
    -webkit-transform: none;
    transform: none;
  }
}

.bounceInRight {
  -webkit-animation-name: bounceInRight;
  animation-name: bounceInRight;
}

@-webkit-keyframes bounceInUp {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0);
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes bounceInUp {
  from, 60%, 75%, 90%, to {
    -webkit-animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
    animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
  }

  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0);
  }

  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0);
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.bounceInUp {
  -webkit-animation-name: bounceInUp;
  animation-name: bounceInUp;
}

@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  to {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }
}

@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(.9, .9, .9);
    transform: scale3d(.9, .9, .9);
  }

  50%, 55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }

  to {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }
}

.bounceOut {
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut;
}

@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
}

@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
}

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
  animation-name: bounceOutDown;
}

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft;
}

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
}

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
}

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
  animation-name: bounceOutRight;
}

@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
}

@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
  }

  40%, 45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
}

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
  animation-name: bounceOutUp;
}

@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }

  to {
    opacity: 1;
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
}

@-webkit-keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
}

@-webkit-keyframes fadeInDownBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDownBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig;
}

@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInLeftBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInLeftBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
}

@-webkit-keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight;
}

@-webkit-keyframes fadeInRightBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInRightBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes fadeInUpBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUpBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
}

@-webkit-keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
  }
}

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut;
}

@-webkit-keyframes fadeOutDown {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

@keyframes fadeOutDown {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown;
}

@-webkit-keyframes fadeOutDownBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
}

@keyframes fadeOutDownBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0);
  }
}

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig;
}

@-webkit-keyframes fadeOutLeft {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

@keyframes fadeOutLeft {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}

@-webkit-keyframes fadeOutLeftBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

@keyframes fadeOutLeftBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig;
}

@-webkit-keyframes fadeOutRight {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

@keyframes fadeOutRight {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  animation-name: fadeOutRight;
}

@-webkit-keyframes fadeOutRightBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
}

@keyframes fadeOutRightBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }
}

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig;
}

@-webkit-keyframes fadeOutUp {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

@keyframes fadeOutUp {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp;
}

@-webkit-keyframes fadeOutUpBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
}

@keyframes fadeOutUpBig {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0);
  }
}

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig;
}

@-webkit-keyframes flip {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
    transform: perspective(400px) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }

  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  80% {
    -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
    transform: perspective(400px) scale3d(.95, .95, .95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

.animated.flip {
  -webkit-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip;
}

@-webkit-keyframes flipInX {
  from {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

@keyframes flipInX {
  from {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
  }

  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX;
}

@-webkit-keyframes flipInY {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

@keyframes flipInY {
  from {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0;
  }

  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }

  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
  }

  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }
}

.flipInY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY;
}

@-webkit-keyframes flipOutX {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  to {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

@keyframes flipOutX {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1;
  }

  to {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0;
  }
}

.flipOutX {
  -webkit-animation-name: flipOutX;
  animation-name: flipOutX;
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
}

@-webkit-keyframes flipOutY {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  to {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

@keyframes flipOutY {
  from {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
  }

  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1;
  }

  to {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0;
  }
}

.flipOutY {
  -webkit-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
  animation-name: flipOutY;
}

@-webkit-keyframes lightSpeedIn {
  from {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1;
  }

  to {
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  from {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0;
  }

  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1;
  }

  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1;
  }

  to {
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
  animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out;
}

@-webkit-keyframes lightSpeedOut {
  from {
    opacity: 1;
  }

  to {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  from {
    opacity: 1;
  }

  to {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0;
  }
}

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
  animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in;
}

@-webkit-keyframes rotateIn {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateIn {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateIn {
  -webkit-animation-name: rotateIn;
  animation-name: rotateIn;
}

@-webkit-keyframes rotateInDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
  animation-name: rotateInDownLeft;
}

@-webkit-keyframes rotateInDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
  animation-name: rotateInDownRight;
}

@-webkit-keyframes rotateInUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
  animation-name: rotateInUpLeft;
}

@-webkit-keyframes rotateInUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
  animation-name: rotateInUpRight;
}

@-webkit-keyframes rotateOut {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0;
  }
}

.rotateOut {
  -webkit-animation-name: rotateOut;
  animation-name: rotateOut;
}

@-webkit-keyframes rotateOutDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0;
  }
}

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
  animation-name: rotateOutDownLeft;
}

@-webkit-keyframes rotateOutDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
  animation-name: rotateOutDownRight;
}

@-webkit-keyframes rotateOutUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  from {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0;
  }
}

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
  animation-name: rotateOutUpLeft;
}

@-webkit-keyframes rotateOutUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  from {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1;
  }

  to {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0;
  }
}

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
  animation-name: rotateOutUpRight;
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1;
  }

  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  20%, 60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }

  40%, 80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1;
  }

  to {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0;
  }
}

.hinge {
  -webkit-animation-name: hinge;
  animation-name: hinge;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes rollIn {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn;
}

/* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

@-webkit-keyframes rollOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

@keyframes rollOut {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
  }
}

.rollOut {
  -webkit-animation-name: rollOut;
  animation-name: rollOut;
}

@-webkit-keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

@keyframes zoomIn {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  50% {
    opacity: 1;
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
}

@-webkit-keyframes zoomInDown {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInDown {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown;
}

@-webkit-keyframes zoomInLeft {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInLeft {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
  animation-name: zoomInLeft;
}

@-webkit-keyframes zoomInRight {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInRight {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInRight {
  -webkit-animation-name: zoomInRight;
  animation-name: zoomInRight;
}

@-webkit-keyframes zoomInUp {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomInUp {
  from {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  60% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomInUp {
  -webkit-animation-name: zoomInUp;
  animation-name: zoomInUp;
}

@-webkit-keyframes zoomOut {
  from {
    opacity: 1;
  }

  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  to {
    opacity: 0;
  }
}

@keyframes zoomOut {
  from {
    opacity: 1;
  }

  50% {
    opacity: 0;
    -webkit-transform: scale3d(.3, .3, .3);
    transform: scale3d(.3, .3, .3);
  }

  to {
    opacity: 0;
  }
}

.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut;
}

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
  animation-name: zoomOutDown;
}

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
    transform: scale(.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center;
  }
}

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
    transform: scale(.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center;
  }
}

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft;
}

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
    transform: scale(.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center;
  }
}

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
    transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
  }

  to {
    opacity: 0;
    -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
    transform: scale(.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center;
  }
}

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
  animation-name: zoomOutRight;
}

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
    animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);
  }

  to {
    opacity: 0;
    -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);
  }
}

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp;
}

@-webkit-keyframes slideInDown {
  from {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInDown {
  from {
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInDown {
  -webkit-animation-name: slideInDown;
  animation-name: slideInDown;
}

@-webkit-keyframes slideInLeft {
  from {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInLeft {
  from {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInLeft {
  -webkit-animation-name: slideInLeft;
  animation-name: slideInLeft;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}

@-webkit-keyframes slideInUp {
  from {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInUp {
  from {
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInUp {
  -webkit-animation-name: slideInUp;
  animation-name: slideInUp;
}

@-webkit-keyframes slideOutDown {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

@keyframes slideOutDown {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
}

.slideOutDown {
  -webkit-animation-name: slideOutDown;
  animation-name: slideOutDown;
}

@-webkit-keyframes slideOutLeft {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

@keyframes slideOutLeft {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

.slideOutLeft {
  -webkit-animation-name: slideOutLeft;
  animation-name: slideOutLeft;
}

@-webkit-keyframes slideOutRight {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

@keyframes slideOutRight {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
  }
}

.slideOutRight {
  -webkit-animation-name: slideOutRight;
  animation-name: slideOutRight;
}

@-webkit-keyframes slideOutUp {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

@keyframes slideOutUp {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  to {
    visibility: hidden;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
}

.slideOutUp {
  -webkit-animation-name: slideOutUp;
  animation-name: slideOutUp;
}




.animated{
  opacity: 0;
  -ms-transform: translateY(200%);
      transform: translateY(200%);
  -webkit-transform: translateY(200%);
}

@font-face {
	font-family: 'Feather';
	src:
	url('../../fonts/Feather.ttf?sdxovp') format('truetype'),
	url('../../fonts/Feather.woff?sdxovp') format('woff'),
	url('../../fonts/Feather.svg?sdxovp#Feather') format('svg');
	font-weight: normal;
	font-style: normal;
}
[class^="feather-"], [class*=" feather-"] {
	font-family: 'feather' !important;
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.feather-activity:before {
	content: "\e900";
}
.feather-airplay:before {
	content: "\e901";
}
.feather-alecirclert-:before {
	content: "\e902";
}
.feather-alert-octagon:before {
	content: "\e903";
}
.feather-alert-triangle:before {
	content: "\e904";
}
.feather-align-center:before {
	content: "\e905";
}
.feather-align-justify:before {
	content: "\e906";
}
.feather-align-left:before {
	content: "\e907";
}
.feather-align-right:before {
	content: "\e908";
}
.feather-anchor:before {
	content: "\e909";
}
.feather-aperture:before {
	content: "\e90a";
}
.feather-archive:before {
	content: "\e90b";
}
.feather-arrow-down:before {
	content: "\e90c";
}
.feather-arrow-down-circle:before {
	content: "\e90d";
}
.feather-arrow-down-left:before {
	content: "\e90e";
}
.feather-arrow-down-right:before {
	content: "\e90f";
}
.feather-arrow-left:before {
	content: "\e910";
}
.feather-arrow-left-circle:before {
	content: "\e911";
}
.feather-arrow-right:before {
	content: "\e912";
}
.feather-arrow-right-circle:before {
	content: "\e913";
}
.feather-arrow-up:before {
	content: "\e914";
}
.feather-arrow-up-circle:before {
	content: "\e915";
}
.feather-arrow-up-left:before {
	content: "\e916";
}
.feather-arrow-up-right:before {
	content: "\e917";
}
.feather-at-sign:before {
	content: "\e918";
}
.feather-award:before {
	content: "\e919";
}
.feather-bar-chart:before {
	content: "\e91a";
}
.feather-bar-chart-2:before {
	content: "\e91b";
}
.feather-battery:before {
	content: "\e91c";
}
.feather-battery-charging:before {
	content: "\e91d";
}
.feather-bell:before {
	content: "\e91e";
}
.feather-bell-off:before {
	content: "\e91f";
}
.feather-bluetooth:before {
	content: "\e920";
}
.feather-bold:before {
	content: "\e921";
}
.feather-book:before {
	content: "\e922";
}
.feather-book-open:before {
	content: "\e923";
}
.feather-bookmark:before {
	content: "\e924";
}
.feather-box:before {
	content: "\e925";
}
.feather-briefcase:before {
	content: "\e926";
}
.feather-calendar:before {
	content: "\e927";
}
.feather-camera:before {
	content: "\e928";
}
.feather-camera-off:before {
	content: "\e929";
}
.feather-cast:before {
	content: "\e92a";
}
.feather-check:before {
	content: "\e92b";
}
.feather-check-circle:before {
	content: "\e92c";
}
.feather-check-square:before {
	content: "\e92d";
}
.feather-chevron-down:before {
	content: "\e92e";
}
.feather-chevron-left:before {
	content: "\e92f";
}
.feather-chevron-right:before {
	content: "\e930";
}
.feather-chevron-up:before {
	content: "\e931";
}
.feather-chevrons-down:before {
	content: "\e932";
}
.feather-chevrons-left:before {
	content: "\e933";
}
.feather-chevrons-right:before {
	content: "\e934";
}
.feather-chevrons-up:before {
	content: "\e935";
}
.feather-chrome:before {
	content: "\e936";
}
.feather-circle:before {
	content: "\e937";
}
.feather-clipboard:before {
	content: "\e938";
}
.feather-clock:before {
	content: "\e939";
}
.feather-cloud:before {
	content: "\e93a";
}
.feather-cloud-drizzle:before {
	content: "\e93b";
}
.feather-cloud-lightning:before {
	content: "\e93c";
}
.feather-cloud-off:before {
	content: "\e93d";
}
.feather-cloud-rain:before {
	content: "\e93e";
}
.feather-cloud-snow:before {
	content: "\e93f";
}
.feather-code:before {
	content: "\e940";
}
.feather-codepen:before {
	content: "\e941";
}
.feather-command:before {
	content: "\e942";
}
.feather-compass:before {
	content: "\e943";
}
.feather-copy:before {
	content: "\e944";
}
.feather-corner-down-left:before {
	content: "\e945";
}
.feather-corner-down-right:before {
	content: "\e946";
}
.feather-corner-left-down:before {
	content: "\e947";
}
.feather-corner-left-up:before {
	content: "\e948";
}
.feather-corner-right-down:before {
	content: "\e949";
}
.feather-corner-right-up:before {
	content: "\e94a";
}
.feather-corner-up-left:before {
	content: "\e94b";
}
.feather-corner-up-right:before {
	content: "\e94c";
}
.feather-cpu:before {
	content: "\e94d";
}
.feather-credit-card:before {
	content: "\e94e";
}
.feather-crop:before {
	content: "\e94f";
}
.feather-crosshair:before {
	content: "\e950";
}
.feather-database:before {
	content: "\e951";
}
.feather-delete:before {
	content: "\e952";
}
.feather-disc:before {
	content: "\e953";
}
.feather-dollar-sign:before {
	content: "\e954";
}
.feather-download:before {
	content: "\e955";
}
.feather-download-cloud:before {
	content: "\e956";
}
.feather-droplet:before {
	content: "\e957";
}
.feather-edit:before {
	content: "\e958";
}
.feather-edit-2:before {
	content: "\e959";
}
.feather-edit-3:before {
	content: "\e95a";
}
.feather-external-link:before {
	content: "\e95b";
}
.feather-eye:before {
	content: "\e95c";
}
.feather-eye-off:before {
	content: "\e95d";
}
.feather-facebook:before {
	content: "\e95e";
}
.feather-fast-forward:before {
	content: "\e95f";
}
.feather-feather:before {
	content: "\e960";
}
.feather-file:before {
	content: "\e961";
}
.feather-file-minus:before {
	content: "\e962";
}
.feather-file-plus:before {
	content: "\e963";
}
.feather-file-text:before {
	content: "\e964";
}
.feather-film:before {
	content: "\e965";
}
.feather-filter:before {
	content: "\e966";
}
.feather-flag:before {
	content: "\e967";
}
.feather-folder:before {
	content: "\e968";
}
.feather-folder-minus:before {
	content: "\e969";
}
.feather-folder-plus:before {
	content: "\e96a";
}
.feather-gift:before {
	content: "\e96b";
}
.feather-git-branch:before {
	content: "\e96c";
}
.feather-git-commit:before {
	content: "\e96d";
}
.feather-git-merge:before {
	content: "\e96e";
}
.feather-git-pull-request:before {
	content: "\e96f";
}
.feather-github:before {
	content: "\e970";
}
.feather-gitlab:before {
	content: "\e971";
}
.feather-globe:before {
	content: "\e972";
}
.feather-grid:before {
	content: "\e973";
}
.feather-hard-drive:before {
	content: "\e974";
}
.feather-hash:before {
	content: "\e975";
}
.feather-headphones:before {
	content: "\e976";
}
.feather-heart:before {
	content: "\e977";
}
.feather-help-circle:before {
	content: "\e978";
}
.feather-home:before {
	content: "\e979";
}
.feather-image:before {
	content: "\e97a";
}
.feather-inbox:before {
	content: "\e97b";
}
.feather-info:before {
	content: "\e97c";
}
.feather-instagram:before {
	content: "\e97d";
}
.feather-italic:before {
	content: "\e97e";
}
.feather-layers:before {
	content: "\e97f";
}
.feather-layout:before {
	content: "\e980";
}
.feather-life-buoy:before {
	content: "\e981";
}
.feather-link:before {
	content: "\e982";
}
.feather-link-2:before {
	content: "\e983";
}
.feather-linkedin:before {
	content: "\e984";
}
.feather-list:before {
	content: "\e985";
}
.feather-loader:before {
	content: "\e986";
}
.feather-lock:before {
	content: "\e987";
}
.feather-log-in:before {
	content: "\e988";
}
.feather-log-out:before {
	content: "\e989";
}
.feather-mail:before {
	content: "\e98a";
}
.feather-map:before {
	content: "\e98b";
}
.feather-map-pin:before {
	content: "\e98c";
}
.feather-maximize:before {
	content: "\e98d";
}
.feather-maximize-2:before {
	content: "\e98e";
}
.feather-menu:before {
	content: "\e98f";
}
.feather-message-circle:before {
	content: "\e990";
}
.feather-message-square:before {
	content: "\e991";
}
.feather-mic:before {
	content: "\e992";
}
.feather-mic-off:before {
	content: "\e993";
}
.feather-minimize:before {
	content: "\e994";
}
.feather-minimize-2:before {
	content: "\e995";
}
.feather-minus:before {
	content: "\e996";
}
.feather-minus-circle:before {
	content: "\e997";
}
.feather-minus-square:before {
	content: "\e998";
}
.feather-monitor:before {
	content: "\e999";
}
.feather-moon:before {
	content: "\e99a";
}
.feather-more-horizontal:before {
	content: "\e99b";
}
.feather-more-vertical:before {
	content: "\e99c";
}
.feather-move:before {
	content: "\e99d";
}
.feather-music:before {
	content: "\e99e";
}
.feather-navigation:before {
	content: "\e99f";
}
.feather-navigation-2:before {
	content: "\e9a0";
}
.feather-octagon:before {
	content: "\e9a1";
}
.feather-package:before {
	content: "\e9a2";
}
.feather-paperclip:before {
	content: "\e9a3";
}
.feather-pause:before {
	content: "\e9a4";
}
.feather-pause-circle:before {
	content: "\e9a5";
}
.feather-percent:before {
	content: "\e9a6";
}
.feather-phone:before {
	content: "\e9a7";
}
.feather-phone-call:before {
	content: "\e9a8";
}
.feather-phone-forwarded:before {
	content: "\e9a9";
}
.feather-phone-incoming:before {
	content: "\e9aa";
}
.feather-phone-missed:before {
	content: "\e9ab";
}
.feather-phone-off:before {
	content: "\e9ac";
}
.feather-phone-outgoing:before {
	content: "\e9ad";
}
.feather-pie-chart:before {
	content: "\e9ae";
}
.feather-play:before {
	content: "\e9af";
}
.feather-play-circle:before {
	content: "\e9b0";
}
.feather-plus:before {
	content: "\e9b1";
}
.feather-plus-circle:before {
	content: "\e9b2";
}
.feather-plus-square:before {
	content: "\e9b3";
}
.feather-pocket:before {
	content: "\e9b4";
}
.feather-power:before {
	content: "\e9b5";
}
.feather-printer:before {
	content: "\e9b6";
}
.feather-radio:before {
	content: "\e9b7";
}
.feather-refresh-ccw:before {
	content: "\e9b8";
}
.feather-refresh-cw:before {
	content: "\e9b9";
}
.feather-repeat:before {
	content: "\e9ba";
}
.feather-rewind:before {
	content: "\e9bb";
}
.feather-rotate-ccw:before {
	content: "\e9bc";
}
.feather-rotate-cw:before {
	content: "\e9bd";
}
.feather-rss:before {
	content: "\e9be";
}
.feather-save:before {
	content: "\e9bf";
}
.feather-scissors:before {
	content: "\e9c0";
}
.feather-search:before {
	content: "\e9c1";
}
.feather-send:before {
	content: "\e9c2";
}
.feather-server:before {
	content: "\e9c3";
}
.feather-settings:before {
	content: "\e9c4";
}
.feather-share:before {
	content: "\e9c5";
}
.feather-share-2:before {
	content: "\e9c6";
}
.feather-shield:before {
	content: "\e9c7";
}
.feather-shield-off:before {
	content: "\e9c8";
}
.feather-shopping-bag:before {
	content: "\e9c9";
}
.feather-shopping-cart:before {
	content: "\e9ca";
}
.feather-shuffle:before {
	content: "\e9cb";
}
.feather-sidebar:before {
	content: "\e9cc";
}
.feather-skip-back:before {
	content: "\e9cd";
}
.feather-skip-forward:before {
	content: "\e9ce";
}
.feather-slack:before {
	content: "\e9cf";
}
.feather-slash:before {
	content: "\e9d0";
}
.feather-sliders:before {
	content: "\e9d1";
}
.feather-smartphone:before {
	content: "\e9d2";
}
.feather-speaker:before {
	content: "\e9d3";
}
.feather-square:before {
	content: "\e9d4";
}
.feather-star:before {
	content: "\e9d5";
}
.feather-stop-circle:before {
	content: "\e9d6";
}
.feather-sun:before {
	content: "\e9d7";
}
.feather-sunrise:before {
	content: "\e9d8";
}
.feather-sunset:before {
	content: "\e9d9";
}
.feather-tablet:before {
	content: "\e9da";
}
.feather-tag:before {
	content: "\e9db";
}
.feather-target:before {
	content: "\e9dc";
}
.feather-terminal:before {
	content: "\e9dd";
}
.feather-thermometer:before {
	content: "\e9de";
}
.feather-thumbs-down:before {
	content: "\e9df";
}
.feather-thumbs-up:before {
	content: "\e9e0";
}
.feather-toggle-left:before {
	content: "\e9e1";
}
.feather-toggle-right:before {
	content: "\e9e2";
}
.feather-trash:before {
	content: "\e9e3";
}
.feather-trash-2:before {
	content: "\e9e4";
}
.feather-trending-down:before {
	content: "\e9e5";
}
.feather-trending-up:before {
	content: "\e9e6";
}
.feather-triangle:before {
	content: "\e9e7";
}
.feather-truck:before {
	content: "\e9e8";
}
.feather-tv:before {
	content: "\e9e9";
}
.feather-twitter:before {
	content: "\e9ea";
}
.feather-type:before {
	content: "\e9eb";
}
.feather-umbrella:before {
	content: "\e9ec";
}
.feather-underline:before {
	content: "\e9ed";
}
.feather-unlock:before {
	content: "\e9ee";
}
.feather-upload:before {
	content: "\e9ef";
}
.feather-upload-cloud:before {
	content: "\e9f0";
}
.feather-user:before {
	content: "\e9f1";
}
.feather-user-check:before {
	content: "\e9f2";
}
.feather-user-minus:before {
	content: "\e9f3";
}
.feather-user-plus:before {
	content: "\e9f4";
}
.feather-user-x:before {
	content: "\e9f5";
}
.feather-users:before {
	content: "\e9f6";
}
.feather-video:before {
	content: "\e9f7";
}
.feather-video-off:before {
	content: "\e9f8";
}
.feather-voicemail:before {
	content: "\e9f9";
}
.feather-volume:before {
	content: "\e9fa";
}
.feather-volume-1:before {
	content: "\e9fb";
}
.feather-volume-2:before {
	content: "\e9fc";
}
.feather-volume-x:before {
	content: "\e9fd";
}
.feather-watch:before {
	content: "\e9fe";
}
.feather-wifi:before {
	content: "\e9ff";
}
.feather-wifi-off:before {
	content: "\ea00";
}
.feather-wind:before {
	content: "\ea01";
}
.feather-x:before {
	content: "\ea02";
}
.feather-x-circle:before {
	content: "\ea03";
}
.feather-x-square:before {
	content: "\ea04";
}
.feather-youtube:before {
	content: "\ea05";
}
.feather-zap:before {
	content: "\ea06";
}
.feather-zap-off:before {
	content: "\ea07";
}
.feather-zoom-in:before {
	content: "\ea08";
}
.feather-zoom-out:before {
	content: "\ea09";
}

/* Magnific Popup CSS */
.mfp-bg {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 502;
    overflow: hidden;
    position: fixed;
    background: #0b0b0b;
    opacity: 0.8;
    filter: alpha(opacity=80);
}

.mfp-wrap {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 503;
    position: fixed;
    outline: none !important;
    -webkit-backface-visibility: hidden;
}

.mfp-container {
    height: 100%;
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    padding: 0 8px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.mfp-container:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.mfp-align-top .mfp-container:before {
    display: none;
}

.mfp-content {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin: 0 auto;
    text-align: left;
    z-index: 505;
}

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
    width: 100%;
    cursor: auto;
}

.mfp-ajax-cur {
    cursor: progress;
}

.mfp-zoom-out-cur,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: -webkit-zoom-out;
    cursor: zoom-out;
}

.mfp-zoom {
    cursor: pointer;
    cursor: -webkit-zoom-in;
    cursor: zoom-in;
}

.mfp-auto-cursor .mfp-content {
    cursor: auto;
}

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
        user-select: none;
}

.mfp-loading.mfp-figure {
    display: none;
}

.mfp-hide {
    display: none !important;
}

.mfp-preloader {
    color: #cccccc;
    position: absolute;
    top: 50%;
    width: auto;
    text-align: center;
    margin-top: -0.8em;
    left: 8px;
    right: 8px;
    z-index: 504;
}

.mfp-preloader a {
    color: #cccccc;
}

.mfp-preloader a:hover {
    color: white;
}

.mfp-s-ready .mfp-preloader {
    display: none;
}

.mfp-s-error .mfp-content {
    display: none;
}

button.mfp-close,
button.mfp-arrow {
    overflow: visible;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
    display: block;
    padding: 0;
    z-index: 506;
}

button::-moz-focus-inner {
    padding: 0;
    border: 0;
}

.mfp-close {
    width: 44px;
    height: 44px;
    line-height: 44px;
    position: absolute;
    right: 0;
    top: 0;
    text-decoration: none;
    text-align: center;
    opacity: 0.65;
    padding: 0 0 18px 10px;
    color: white;
    font-style: normal;
    font-size: 28px;
    font-family: Arial, Baskerville, monospace;
}

.mfp-close:hover,
.mfp-close:focus {
    opacity: 1;
}

.mfp-close:active {
    top: 1px;
}

.mfp-close-btn-in .mfp-close {
    color: #333333;
}

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
    color: white;
    right: -6px;
    text-align: right;
    padding-right: 6px;
    width: 100%;
}

.mfp-counter {
    position: absolute;
    top: 0;
    right: 0;
    color: #cccccc;
    font-size: 12px;
    line-height: 18px;
}

.mfp-arrow {
    position: absolute;
    top: 0;
    opacity: 0.65;
    margin: 0;
    top: 50%;
    margin-top: -55px;
    padding: 0;
    width: 90px;
    height: 110px;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.mfp-arrow:active {
    margin-top: -54px;
}

.mfp-arrow:hover,
.mfp-arrow:focus {
    opacity: 1;
}

.mfp-arrow:before,
.mfp-arrow:after,
.mfp-arrow .mfp-b,
.mfp-arrow .mfp-a {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: solid transparent;
}

.mfp-arrow:after,
.mfp-arrow .mfp-a {
    opacity: 0.8;
    border-top-width: 12px;
    border-bottom-width: 12px;
    top: 8px;
}

.mfp-arrow:before,
.mfp-arrow .mfp-b {
    border-top-width: 20px;
    border-bottom-width: 20px;
}

.mfp-arrow-left {
    left: 0;
}

.mfp-arrow-left:after,
.mfp-arrow-left .mfp-a {
    border-right: 12px solid black;
    left: 5px;
}

.mfp-arrow-left:before,
.mfp-arrow-left .mfp-b {
    border-right: 20px solid white;
}

.mfp-arrow-right {
    right: 0;
}

.mfp-arrow-right:after,
.mfp-arrow-right .mfp-a {
    border-left: 12px solid black;
    left: 3px;
}

.mfp-arrow-right:before,
.mfp-arrow-right .mfp-b {
    border-left: 20px solid white;
}

.mfp-iframe-holder {
    padding-top: 40px;
    padding-bottom: 40px;
}

.mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px;
}

.mfp-iframe-scaler {
    width: 100%;
    height: 0;
    overflow: hidden;
    padding-top: 56.25%;
}

.mfp-iframe-scaler iframe {
    position: absolute;
    top: -3px;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: black;
}

.mfp-iframe-holder .mfp-close {
    top: -43px;
}

/* Main image in popup */
img.mfp-img {
    width: auto;
    max-width: 100%;
    height: auto;
    display: block;
    line-height: 0;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 40px 0 40px;
    margin: 0 auto;
}

/* The shadow behind the image */
.mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
}

.mfp-figure {
    line-height: 0;
}

.mfp-bottom-bar {
    margin-top: -36px;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    cursor: auto;
}

.mfp-title {
    text-align: left;
    line-height: 18px;
    color: #f3f3f3;
    word-break: break-word;
    padding-right: 36px;
}

.mfp-figure small {
    color: #bdbdbd;
    display: block;
    font-size: 12px;
    line-height: 14px;
}

.mfp-image-holder .mfp-content {
    max-width: 100%;
}

.mfp-gallery .mfp-image-holder .mfp-figure {
    cursor: pointer;
}

@media screen and (max-width: 800px) and (orientation: landscape),
screen and (max-height: 300px) {

    /**
     * Remove all paddings around the image on small screen
     */
    .mfp-img-mobile .mfp-image-holder {
        padding-left: 0;
        padding-right: 0;
    }

    .mfp-img-mobile img.mfp-img {
        padding: 0;
    }

    /* The shadow behind the image */
    .mfp-img-mobile .mfp-figure:after {
        top: 0;
        bottom: 0;
    }

    .mfp-img-mobile .mfp-bottom-bar {
        background: rgba(0, 0, 0, 0.6);
        bottom: 0;
        margin: 0;
        top: auto;
        padding: 3px 5px;
        position: fixed;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .mfp-img-mobile .mfp-bottom-bar:empty {
        padding: 0;
    }

    .mfp-img-mobile .mfp-counter {
        right: 5px;
        top: 3px;
    }

    .mfp-img-mobile .mfp-close {
        top: 0;
        right: 0;
        width: 35px;
        height: 35px;
        line-height: 35px;
        background: rgba(0, 0, 0, 0.6);
        position: fixed;
        text-align: center;
        padding: 0;
    }

    .mfp-img-mobile .mfp-figure small {
        display: inline;
        margin-left: 5px;
    }
}

@media all and (max-width: 800px) {
    .mfp-arrow {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
            transform: scale(0.75);
    }

    .mfp-arrow-left {
        -webkit-transform-origin: 0;
        -ms-transform-origin: 0;
            transform-origin: 0;
    }

    .mfp-arrow-right {
        -webkit-transform-origin: 100%;
        -ms-transform-origin: 100%;
            transform-origin: 100%;
    }

    .mfp-container {
        padding-left: 6px;
        padding-right: 6px;
    }
}

.mfp-ie7 .mfp-img {
    padding: 0;
}

.mfp-ie7 .mfp-bottom-bar {
    width: 600px;
    left: 50%;
    margin-left: -300px;
    margin-top: 5px;
    padding-bottom: 5px;
}

.mfp-ie7 .mfp-container {
    padding: 0;
}

.mfp-ie7 .mfp-content {
    padding-top: 44px;
}

.mfp-ie7 .mfp-close {
    top: 0;
    right: 0;
    padding-top: 0;
}


/* Slider */
.slick-slider
{
    position: relative;

    display: block;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}

/* Slider */
.slick-loading .slick-list
{
    background: #fff url('../../images/ajax-loader.gif') center center no-repeat;
}


/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('../../fonts/slick.eot');
    src: url('../../fonts/slick.eot?#iefix') format('embedded-opentype'), url('../../fonts/slick.woff') format('woff'), url('../../fonts/slick.ttf') format('truetype'), url('../../fonts/slick.svg#slick') format('svg');
}

/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '←';
}
[dir='rtl'] .slick-prev:before
{
    content: '→';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '→';
}
[dir='rtl'] .slick-next:before
{
    content: '←';
}

/* Dots */
.slick-dotted.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '•';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}

@font-face {
    font-family: 'lg';
    src: url("../../images/icons/lg.eot?n1z373");
    src: url("../../images/icons/lg.eot?#iefixn1z373") format("embedded-opentype"), url("../../images/icons/lg.woff?n1z373") format("woff"), url("../../images/icons/lg.ttf?n1z373") format("truetype"), url("../fonts/lg.svg?n1z373#lg") format("svg");
    font-weight: normal;
    font-style: normal;
}

.lg-icon {
    font-family: 'lg';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    /* Better Font Rendering =========== */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.lg-actions .lg-next,
.lg-actions .lg-prev {
    background-color: rgba(0, 0, 0, 0.45);
    border-radius: 2px;
    color: #999;
    cursor: pointer;
    display: block;
    font-size: 22px;
    margin-top: -10px;
    padding: 8px 10px 9px;
    position: absolute;
    top: 50%;
    z-index: 1080;
}

.lg-actions .lg-next.disabled,
.lg-actions .lg-prev.disabled {
    pointer-events: none;
    opacity: 0.5;
}

.lg-actions .lg-next:hover,
.lg-actions .lg-prev:hover {
    color: #FFF;
}

.lg-actions .lg-next {
    right: 20px;
}

.lg-actions .lg-next:before {
    content: "\e095";
}

.lg-actions .lg-prev {
    left: 20px;
}

.lg-actions .lg-prev:after {
    content: "\e094";
}

@-webkit-keyframes lg-right-end {
    0% {
        left: 0;
    }

    50% {
        left: -30px;
    }

    100% {
        left: 0;
    }
}

@keyframes lg-right-end {
    0% {
        left: 0;
    }

    50% {
        left: -30px;
    }

    100% {
        left: 0;
    }
}

@-webkit-keyframes lg-left-end {
    0% {
        left: 0;
    }

    50% {
        left: 30px;
    }

    100% {
        left: 0;
    }
}

@keyframes lg-left-end {
    0% {
        left: 0;
    }

    50% {
        left: 30px;
    }

    100% {
        left: 0;
    }
}

.lg-outer.lg-right-end .lg-object {
    -webkit-animation: lg-right-end 0.3s;
    animation: lg-right-end 0.3s;
    position: relative;
}

.lg-outer.lg-left-end .lg-object {
    -webkit-animation: lg-left-end 0.3s;
    animation: lg-left-end 0.3s;
    position: relative;
}

.lg-toolbar {
    z-index: 1082;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.45);
}

.lg-toolbar .lg-icon {
    color: #999;
    cursor: pointer;
    float: right;
    font-size: 24px;
    height: 47px;
    line-height: 27px;
    padding: 10px 0;
    text-align: center;
    width: 50px;
    text-decoration: none !important;
    outline: medium none;
    -webkit-transition: color 0.2s linear;
    transition: color 0.2s linear;
}

.lg-toolbar .lg-icon:hover {
    color: #FFF;
}

.lg-toolbar .lg-close:after {
    content: "\e070";
}

.lg-toolbar .lg-download:after {
    content: "\e0f2";
}

.lg-sub-html {
    background-color: rgba(0, 0, 0, 0.45);
    bottom: 0;
    color: #EEE;
    font-size: 16px;
    left: 0;
    padding: 10px 40px;
    position: fixed;
    right: 0;
    text-align: center;
    z-index: 1080;
}

.lg-sub-html h4 {
    margin: 0;
    font-size: 13px;
    font-weight: bold;
}

.lg-sub-html p {
    font-size: 12px;
    margin: 5px 0 0;
}

#lg-counter {
    color: #999;
    display: inline-block;
    font-size: 16px;
    padding-left: 20px;
    padding-top: 12px;
    vertical-align: middle;
}

.lg-toolbar,
.lg-prev,
.lg-next {
    opacity: 1;
    -webkit-transition: -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
    -webkit-transition: opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear, -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear, -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
    transition: transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear, -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s;
}

.lg-hide-items .lg-prev {
    opacity: 0;
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
}

.lg-hide-items .lg-next {
    opacity: 0;
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
}

.lg-hide-items .lg-toolbar {
    opacity: 0;
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0);
}

body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-object {
    -webkit-transform: scale3d(0.5, 0.5, 0.5);
    transform: scale3d(0.5, 0.5, 0.5);
    opacity: 0;
    -webkit-transition: -webkit-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
    -webkit-transition: opacity 250ms cubic-bezier(0, 0, 0.25, 1), -webkit-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s !important;
    transition: opacity 250ms cubic-bezier(0, 0, 0.25, 1), -webkit-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s !important;
    transition: transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
    transition: transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1), -webkit-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s !important;
    -webkit-transform-origin: 50% 50%;
    -ms-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
}

body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-item.lg-complete .lg-object {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    opacity: 1;
}

.lg-outer .lg-thumb-outer {
    background-color: #0D0A0A;
    bottom: 0;
    position: absolute;
    width: 100%;
    z-index: 1080;
    max-height: 350px;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    -webkit-transition: -webkit-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: -webkit-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s, -webkit-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
}

.lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item {
    cursor: -webkit-grab;
    cursor: -o-grab;
    cursor: -ms-grab;
    cursor: grab;
}

.lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item {
    cursor: move;
    cursor: -webkit-grabbing;
    cursor: -o-grabbing;
    cursor: -ms-grabbing;
    cursor: grabbing;
}

.lg-outer .lg-thumb-outer.lg-dragging .lg-thumb {
    -webkit-transition-duration: 0s !important;
    transition-duration: 0s !important;
}

.lg-outer.lg-thumb-open .lg-thumb-outer {
    -webkit-transform: translate3d(0, 0%, 0);
    transform: translate3d(0, 0%, 0);
}

.lg-outer .lg-thumb {
    padding: 10px 0;
    height: 100%;
    margin-bottom: -5px;
}

.lg-outer .lg-thumb-item {
    border-radius: 5px;
    cursor: pointer;
    float: left;
    overflow: hidden;
    height: 100%;
    border: 2px solid #FFF;
    border-radius: 4px;
    margin-bottom: 5px;
}

@media (min-width: 1025px) {
    .lg-outer .lg-thumb-item {
        -webkit-transition: border-color 0.25s ease;
        transition: border-color 0.25s ease;
    }
}

.lg-outer .lg-thumb-item.active,
.lg-outer .lg-thumb-item:hover {
    border-color: #a90707;
}

.lg-outer .lg-thumb-item img {
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
       object-fit: cover;
}

.lg-outer.lg-has-thumb .lg-item {
    padding-bottom: 120px;
}

.lg-outer.lg-can-toggle .lg-item {
    padding-bottom: 0;
}

.lg-outer.lg-pull-caption-up .lg-sub-html {
    -webkit-transition: bottom 0.25s ease;
    transition: bottom 0.25s ease;
}

.lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html {
    bottom: 100px;
}

.lg-outer .lg-toggle-thumb {
    background-color: #0D0A0A;
    border-radius: 2px 2px 0 0;
    color: #999;
    cursor: pointer;
    font-size: 24px;
    height: 39px;
    line-height: 27px;
    padding: 5px 0;
    position: absolute;
    right: 20px;
    text-align: center;
    top: -39px;
    width: 50px;
}

.lg-outer .lg-toggle-thumb:after {
    content: "\e1ff";
}

.lg-outer .lg-toggle-thumb:hover {
    color: #FFF;
}

.lg-outer .lg-video-cont {
    display: inline-block;
    vertical-align: middle;
    max-width: 1140px;
    max-height: 100%;
    width: 100%;
    padding: 0 5px;
}

.lg-outer .lg-video {
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
    overflow: hidden;
    position: relative;
}

.lg-outer .lg-video .lg-object {
    display: inline-block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
}

.lg-outer .lg-video .lg-video-play {
    width: 84px;
    height: 59px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -42px;
    margin-top: -30px;
    z-index: 1080;
    cursor: pointer;
}

.lg-outer .lg-has-vimeo .lg-video-play {
    background: url("../../images/icons/vimeo-play.png") no-repeat scroll 0 0 transparent;
}

.lg-outer .lg-has-vimeo:hover .lg-video-play {
    background: url("../../images/icons/vimeo-play.png") no-repeat scroll 0 -58px transparent;
}

.lg-outer .lg-has-html5 .lg-video-play {
    background: transparent url("../../images/icons/video-play.png") no-repeat scroll 0 0;
    height: 64px;
    margin-left: -32px;
    margin-top: -32px;
    width: 64px;
    opacity: 0.8;
}

.lg-outer .lg-has-html5:hover .lg-video-play {
    opacity: 1;
}

.lg-outer .lg-has-youtube .lg-video-play {
    background: url("../../images/icons/youtube-play.png") no-repeat scroll 0 0 transparent;
}

.lg-outer .lg-has-youtube:hover .lg-video-play {
    background: url("../../images/icons/youtube-play.png") no-repeat scroll 0 -60px transparent;
}

.lg-outer .lg-video-object {
    width: 100% !important;
    height: 100% !important;
    position: absolute;
    top: 0;
    left: 0;
}

.lg-outer .lg-has-video .lg-video-object {
    visibility: hidden;
}

.lg-outer .lg-has-video.lg-video-playing .lg-object,
.lg-outer .lg-has-video.lg-video-playing .lg-video-play {
    display: none;
}

.lg-outer .lg-has-video.lg-video-playing .lg-video-object {
    visibility: visible;
}

.lg-progress-bar {
    background-color: #333;
    height: 5px;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1083;
    opacity: 0;
    -webkit-transition: opacity 0.08s ease 0s;
    transition: opacity 0.08s ease 0s;
}

.lg-progress-bar .lg-progress {
    background-color: #a90707;
    height: 5px;
    width: 0;
}

.lg-progress-bar.lg-start .lg-progress {
    width: 100%;
}

.lg-show-autoplay .lg-progress-bar {
    opacity: 1;
}

.lg-autoplay-button:after {
    content: "\e01d";
}

.lg-show-autoplay .lg-autoplay-button:after {
    content: "\e01a";
}

.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap,
.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image {
    -webkit-transition-duration: 0s;
    transition-duration: 0s;
}

.lg-outer.lg-use-transition-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
}

.lg-outer.lg-use-left-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
}

.lg-outer .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.lg-outer .lg-item.lg-complete.lg-zoomable .lg-image {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
    -webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
    -webkit-transition: opacity 0.15s, -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s !important;
    transition: opacity 0.15s, -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s !important;
    transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
    transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s, -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s !important;
    -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

#lg-zoom-in:after {
    content: "\e311";
}

#lg-actual-size {
    font-size: 20px;
}

#lg-actual-size:after {
    content: "\e033";
}

#lg-zoom-out {
    opacity: 0.5;
    pointer-events: none;
}

#lg-zoom-out:after {
    content: "\e312";
}

.lg-zoomed #lg-zoom-out {
    opacity: 1;
    pointer-events: auto;
}

.lg-outer .lg-pager-outer {
    bottom: 60px;
    left: 0;
    position: absolute;
    right: 0;
    text-align: center;
    z-index: 1080;
    height: 10px;
}

.lg-outer .lg-pager-outer.lg-pager-hover .lg-pager-cont {
    overflow: visible;
}

.lg-outer .lg-pager-cont {
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    position: relative;
    vertical-align: top;
    margin: 0 5px;
}

.lg-outer .lg-pager-cont:hover .lg-pager-thumb-cont {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.lg-outer .lg-pager-cont.lg-pager-active .lg-pager {
    -webkit-box-shadow: 0 0 0 2px white inset;
            box-shadow: 0 0 0 2px white inset;
}

.lg-outer .lg-pager-thumb-cont {
    background-color: #fff;
    color: #FFF;
    bottom: 100%;
    height: 83px;
    left: 0;
    margin-bottom: 20px;
    margin-left: -60px;
    opacity: 0;
    padding: 5px;
    position: absolute;
    width: 120px;
    border-radius: 3px;
    -webkit-transition: opacity 0.15s ease 0s, -webkit-transform 0.15s ease 0s;
    transition: opacity 0.15s ease 0s, -webkit-transform 0.15s ease 0s;
    transition: opacity 0.15s ease 0s, transform 0.15s ease 0s;
    transition: opacity 0.15s ease 0s, transform 0.15s ease 0s, -webkit-transform 0.15s ease 0s;
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0);
}

.lg-outer .lg-pager-thumb-cont img {
    width: 100%;
    height: 100%;
}

.lg-outer .lg-pager {
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    -webkit-box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.7) inset;
            box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.7) inset;
    display: block;
    height: 12px;
    -webkit-transition: box-shadow 0.3s ease 0s;
    -webkit-transition: -webkit-box-shadow 0.3s ease 0s;
    transition: -webkit-box-shadow 0.3s ease 0s;
    transition: box-shadow 0.3s ease 0s;
    transition: box-shadow 0.3s ease 0s, -webkit-box-shadow 0.3s ease 0s;
    width: 12px;
}

.lg-outer .lg-pager:hover,
.lg-outer .lg-pager:focus {
    -webkit-box-shadow: 0 0 0 8px white inset;
            box-shadow: 0 0 0 8px white inset;
}

.lg-outer .lg-caret {
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px dashed;
    bottom: -10px;
    display: inline-block;
    height: 0;
    left: 50%;
    margin-left: -5px;
    position: absolute;
    vertical-align: middle;
    width: 0;
}

.lg-fullscreen:after {
    content: "\e20c";
}

.lg-fullscreen-on .lg-fullscreen:after {
    content: "\e20d";
}

.lg-outer #lg-dropdown-overlay {
    background-color: rgba(0, 0, 0, 0.25);
    bottom: 0;
    cursor: default;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1081;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
    transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
}

.lg-outer.lg-dropdown-active .lg-dropdown,
.lg-outer.lg-dropdown-active #lg-dropdown-overlay {
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -ms-transform: translate3d(0, 0px, 0);
    -webkit-transform: translate3d(0, 0px, 0);
    transform: translate3d(0, 0px, 0);
    opacity: 1;
    visibility: visible;
}

.lg-outer.lg-dropdown-active #lg-share {
    color: #FFF;
}

.lg-outer .lg-dropdown {
    background-color: #fff;
    border-radius: 2px;
    font-size: 14px;
    list-style-type: none;
    margin: 0;
    padding: 10px 0;
    position: absolute;
    right: 0;
    text-align: left;
    top: 50px;
    opacity: 0;
    visibility: hidden;
    -ms-transform: translate3d(0, 5px, 0);
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0);
    -webkit-transition: -webkit-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
    -webkit-transition: visibility 0s linear 0.5s, opacity 0.18s linear 0s, -webkit-transform 0.18s linear 0s;
    transition: visibility 0s linear 0.5s, opacity 0.18s linear 0s, -webkit-transform 0.18s linear 0s;
    transition: transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
    transition: transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s, -webkit-transform 0.18s linear 0s;
}

.lg-outer .lg-dropdown:after {
    content: "";
    display: block;
    height: 0;
    width: 0;
    position: absolute;
    border: 8px solid transparent;
    border-bottom-color: #FFF;
    right: 16px;
    top: -16px;
}

.lg-outer .lg-dropdown>li:last-child {
    margin-bottom: 0px;
}

.lg-outer .lg-dropdown>li:hover a,
.lg-outer .lg-dropdown>li:hover .lg-icon {
    color: #333;
}

.lg-outer .lg-dropdown a {
    color: #333;
    display: block;
    white-space: pre;
    padding: 4px 12px;
    font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 12px;
}

.lg-outer .lg-dropdown a:hover {
    background-color: rgba(0, 0, 0, 0.07);
}

.lg-outer .lg-dropdown .lg-dropdown-text {
    display: inline-block;
    line-height: 1;
    margin-top: -3px;
    vertical-align: middle;
}

.lg-outer .lg-dropdown .lg-icon {
    color: #333;
    display: inline-block;
    float: none;
    font-size: 20px;
    height: auto;
    line-height: 1;
    margin-right: 8px;
    padding: 0;
    vertical-align: middle;
    width: auto;
}

.lg-outer #lg-share {
    position: relative;
}

.lg-outer #lg-share:after {
    content: "\e80d";
}

.lg-outer #lg-share-facebook .lg-icon {
    color: #3b5998;
}

.lg-outer #lg-share-facebook .lg-icon:after {
    content: "\e901";
}

.lg-outer #lg-share-twitter .lg-icon {
    color: #00aced;
}

.lg-outer #lg-share-twitter .lg-icon:after {
    content: "\e904";
}

.lg-outer #lg-share-googleplus .lg-icon {
    color: #dd4b39;
}

.lg-outer #lg-share-googleplus .lg-icon:after {
    content: "\e902";
}

.lg-outer #lg-share-pinterest .lg-icon {
    color: #cb2027;
}

.lg-outer #lg-share-pinterest .lg-icon:after {
    content: "\e903";
}

.group {
    *zoom: 1;
}

.group:before,
.group:after {
    display: table;
    content: "";
    line-height: 0;
}

.group:after {
    clear: both;
}

.lg-outer {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    opacity: 0;
    -webkit-transition: opacity 0.15s ease 0s;
    transition: opacity 0.15s ease 0s;
}

.lg-outer * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.lg-outer.lg-visible {
    opacity: 1;
}

.lg-outer.lg-css3 .lg-item.lg-prev-slide,
.lg-outer.lg-css3 .lg-item.lg-next-slide,
.lg-outer.lg-css3 .lg-item.lg-current {
    -webkit-transition-duration: inherit !important;
    transition-duration: inherit !important;
    -webkit-transition-timing-function: inherit !important;
    transition-timing-function: inherit !important;
}

.lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide,
.lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide,
.lg-outer.lg-css3.lg-dragging .lg-item.lg-current {
    -webkit-transition-duration: 0s !important;
    transition-duration: 0s !important;
    opacity: 1;
}

.lg-outer.lg-grab img.lg-object {
    cursor: -webkit-grab;
    cursor: -o-grab;
    cursor: -ms-grab;
    cursor: grab;
}

.lg-outer.lg-grabbing img.lg-object {
    cursor: move;
    cursor: -webkit-grabbing;
    cursor: -o-grabbing;
    cursor: -ms-grabbing;
    cursor: grabbing;
}

.lg-outer .lg {
    height: 100%;
    width: 100%;
    position: relative;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    max-height: 100%;
}

.lg-outer .lg-inner {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
}

.lg-outer .lg-item {
    background: url("../../images/icons/loading.gif") no-repeat scroll center center transparent;
    display: none !important;
}

.lg-outer.lg-css3 .lg-prev-slide,
.lg-outer.lg-css3 .lg-current,
.lg-outer.lg-css3 .lg-next-slide {
    display: inline-block !important;
}

.lg-outer.lg-css .lg-current {
    display: inline-block !important;
}

.lg-outer .lg-item,
.lg-outer .lg-img-wrap {
    display: inline-block;
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
}

.lg-outer .lg-item:before,
.lg-outer .lg-img-wrap:before {
    content: "";
    display: inline-block;
    height: 50%;
    width: 1px;
    margin-right: -1px;
}

.lg-outer .lg-img-wrap {
    position: absolute;
    padding: 0 5px;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}

.lg-outer .lg-item.lg-complete {
    background-image: none;
}

.lg-outer .lg-item.lg-current {
    z-index: 1060;
}

.lg-outer .lg-image {
    display: inline-block;
    vertical-align: middle;
    max-width: 100%;
    max-height: 100%;
    width: auto !important;
    height: auto !important;
}

.lg-outer.lg-show-after-load .lg-item .lg-object,
.lg-outer.lg-show-after-load .lg-item .lg-video-play {
    opacity: 0;
    -webkit-transition: opacity 0.15s ease 0s;
    transition: opacity 0.15s ease 0s;
}

.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object,
.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play {
    opacity: 1;
}

.lg-outer .lg-empty-html {
    display: none;
}

.lg-outer.lg-hide-download #lg-download {
    display: none;
}

.lg-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1040;
    background-color: #000;
    opacity: 0;
    -webkit-transition: opacity 0.15s ease 0s;
    transition: opacity 0.15s ease 0s;
}

.lg-backdrop.in {
    opacity: 1;
}

.lg-css3.lg-no-trans .lg-prev-slide,
.lg-css3.lg-no-trans .lg-next-slide,
.lg-css3.lg-no-trans .lg-current {
    -webkit-transition: none 0s ease 0s !important;
    transition: none 0s ease 0s !important;
}

.lg-css3.lg-use-css3 .lg-item {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.lg-css3.lg-use-left .lg-item {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.lg-css3.lg-fade .lg-item {
    opacity: 0;
}

.lg-css3.lg-fade .lg-item.lg-current {
    opacity: 1;
}

.lg-css3.lg-fade .lg-item.lg-prev-slide,
.lg-css3.lg-fade .lg-item.lg-next-slide,
.lg-css3.lg-fade .lg-item.lg-current {
    -webkit-transition: opacity 0.1s ease 0s;
    transition: opacity 0.1s ease 0s;
}

.lg-css3.lg-slide.lg-use-css3 .lg-item {
    opacity: 0;
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide,
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide,
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
    -webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
    -webkit-transition: opacity 0.1s ease 0s, -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: opacity 0.1s ease 0s, -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
    transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
    transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s, -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s;
}

.lg-css3.lg-slide.lg-use-left .lg-item {
    opacity: 0;
    position: absolute;
    left: 0;
}

.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
    left: -100%;
}

.lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide {
    left: 100%;
}

.lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
    left: 0;
    opacity: 1;
}

.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide,
.lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide,
.lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
    -webkit-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
    transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
}

/*!
 * Bootstrap-select v1.14.0-beta2 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2021 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */@-webkit-keyframes bs-notify-fadeOut{0%{opacity:.9}100%{opacity:0}}@keyframes bs-notify-fadeOut{0%{opacity:.9}100%{opacity:0}}.bootstrap-select>select.bs-select-hidden,select.bs-select-hidden,select.selectpicker{display:none!important}.bootstrap-select{width:220px\0;vertical-align:middle}.bootstrap-select>.dropdown-toggle{position:relative;width:100%;text-align:right;white-space:nowrap;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.bootstrap-select>.dropdown-toggle:after{margin-top:-1px}.bootstrap-select>.dropdown-toggle.bs-placeholder,.bootstrap-select>.dropdown-toggle.bs-placeholder:active,.bootstrap-select>.dropdown-toggle.bs-placeholder:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder:hover{color:#999}.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-danger:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-dark:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-info:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-primary:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-secondary:hover,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:active,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:focus,.bootstrap-select>.dropdown-toggle.bs-placeholder.btn-success:hover{color:rgba(255,255,255,.5)}.bootstrap-select>select{position:absolute!important;bottom:0;left:50%;display:block!important;width:.5px!important;height:100%!important;padding:0!important;opacity:0!important;border:none;z-index:0!important}.bootstrap-select>select.mobile-device{top:0;left:0;display:block!important;width:100%!important;z-index:2!important}.bootstrap-select.is-invalid .dropdown-toggle,.error .bootstrap-select .dropdown-toggle,.has-error .bootstrap-select .dropdown-toggle,.was-validated .bootstrap-select select:invalid+.dropdown-toggle{border-color:#b94a48}.bootstrap-select.is-valid .dropdown-toggle,.was-validated .bootstrap-select select:valid+.dropdown-toggle{border-color:#28a745}.bootstrap-select.fit-width{width:auto!important}.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn){width:220px}.bootstrap-select .dropdown-toggle:focus,.bootstrap-select>select.mobile-device:focus+.dropdown-toggle{outline:thin dotted #333!important;outline:5px auto -webkit-focus-ring-color!important;outline-offset:-2px}.bootstrap-select.form-control{margin-bottom:0;padding:0;border:none;height:auto}:not(.input-group)>.bootstrap-select.form-control:not([class*=col-]){width:100%}.bootstrap-select.form-control.input-group-btn{float:none;z-index:auto}.form-inline .bootstrap-select,.form-inline .bootstrap-select.form-control:not([class*=col-]){width:auto}.bootstrap-select:not(.input-group-btn),.bootstrap-select[class*=col-]{float:none;display:inline-block;margin-left:0}.bootstrap-select.dropdown-menu-right,.bootstrap-select[class*=col-].dropdown-menu-right,.row .bootstrap-select[class*=col-].dropdown-menu-right{float:right}.form-group .bootstrap-select,.form-horizontal .bootstrap-select,.form-inline .bootstrap-select{margin-bottom:0}.form-group-lg .bootstrap-select.form-control,.form-group-sm .bootstrap-select.form-control{padding:0}.form-group-lg .bootstrap-select.form-control .dropdown-toggle,.form-group-sm .bootstrap-select.form-control .dropdown-toggle{height:100%;font-size:inherit;line-height:inherit;border-radius:inherit}.bootstrap-select.form-control-lg .dropdown-toggle,.bootstrap-select.form-control-sm .dropdown-toggle{font-size:inherit;line-height:inherit;border-radius:inherit}.bootstrap-select.form-control-sm .dropdown-toggle{padding:.25rem .5rem}.bootstrap-select.form-control-lg .dropdown-toggle{padding:.5rem 1rem}.form-inline .bootstrap-select .form-control{width:100%}.bootstrap-select.disabled,.bootstrap-select>.disabled{cursor:not-allowed}.bootstrap-select.disabled:focus,.bootstrap-select>.disabled:focus{outline:0!important}.bootstrap-select.bs-container{position:absolute;top:0;left:0;height:0!important;padding:0!important}.bootstrap-select.bs-container .dropdown-menu{z-index:1060}.bootstrap-select .dropdown-toggle .filter-option{position:static;top:0;left:0;float:left;height:100%;width:100%;text-align:left;overflow:hidden;-webkit-box-flex:0;-webkit-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto}.bs3.bootstrap-select .dropdown-toggle .filter-option{padding-right:inherit}.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option{position:absolute;padding-top:inherit;padding-bottom:inherit;padding-left:inherit;float:none}.input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option .filter-option-inner{padding-right:inherit}.bootstrap-select .dropdown-toggle .filter-option-inner-inner{overflow:hidden}.bootstrap-select .dropdown-toggle .filter-expand{width:0!important;float:left;opacity:0!important;overflow:hidden}.bootstrap-select .dropdown-toggle .caret{position:absolute;top:50%;right:12px;margin-top:-2px;vertical-align:middle}.bootstrap-select .dropdown-toggle .bs-select-clear-selected{position:relative;display:block;margin-right:5px;text-align:center}.bs3.bootstrap-select .dropdown-toggle .bs-select-clear-selected{padding-right:inherit}.bootstrap-select .dropdown-toggle .bs-select-clear-selected span{position:relative;top:calc(((-1em / 1.5) + 1ex)/ 2);pointer-events:none}.bs3.bootstrap-select .dropdown-toggle .bs-select-clear-selected span{top:auto}.bootstrap-select .dropdown-toggle.bs-placeholder .bs-select-clear-selected{display:none}.input-group .bootstrap-select.form-control .dropdown-toggle{border-radius:inherit}.bootstrap-select[class*=col-] .dropdown-toggle{width:100%}.bootstrap-select .dropdown-menu{min-width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.bootstrap-select .dropdown-menu>.inner:focus{outline:0!important}.bootstrap-select .dropdown-menu.inner{position:static;float:none;border:0;padding:0;margin:0;border-radius:0;-webkit-box-shadow:none;box-shadow:none}.bootstrap-select .dropdown-menu li{position:relative}.bootstrap-select .dropdown-menu li.active small{color:rgba(255,255,255,.5)!important}.bootstrap-select .dropdown-menu li.disabled a{cursor:not-allowed}.bootstrap-select .dropdown-menu li a{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.bootstrap-select .dropdown-menu li a.opt{position:relative;padding-left:2.25em}.bootstrap-select .dropdown-menu li a span.check-mark{display:none}.bootstrap-select .dropdown-menu li a span.text{display:inline-block}.bootstrap-select .dropdown-menu li small{padding-left:.5em}.bootstrap-select .dropdown-menu .notify{position:absolute;bottom:5px;width:96%;margin:0 2%;min-height:26px;padding:3px 5px;background:#f5f5f5;border:1px solid #e3e3e3;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05);pointer-events:none;opacity:.9;-webkit-box-sizing:border-box;box-sizing:border-box}.bootstrap-select .dropdown-menu .notify.fadeOut{-webkit-animation:.3s linear 750ms forwards bs-notify-fadeOut;animation:.3s linear 750ms forwards bs-notify-fadeOut}.bootstrap-select .no-results{padding:3px;background:#f5f5f5;margin:0 5px;white-space:nowrap}.bootstrap-select.fit-width .dropdown-toggle .filter-option{position:static;display:inline;padding:0}.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,.bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner{display:inline}.bootstrap-select.fit-width .dropdown-toggle .bs-caret:before{content:'\00a0'}.bootstrap-select.fit-width .dropdown-toggle .caret{position:static;top:auto;margin-top:-1px}.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark{position:absolute;display:inline-block;right:15px;top:5px}.bootstrap-select.show-tick .dropdown-menu li a span.text{margin-right:34px}.bootstrap-select .bs-ok-default:after{content:'';display:block;width:.5em;height:1em;border-style:solid;border-width:0 .26em .26em 0;-webkit-transform-style:preserve-3d;transform-style:preserve-3d;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}.bootstrap-select.show-menu-arrow.open>.dropdown-toggle,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle{z-index:1061}.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before{content:'';border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid rgba(204,204,204,.2);position:absolute;bottom:-4px;left:9px;display:none}.bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after{content:'';border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #fff;position:absolute;bottom:-4px;left:10px;display:none}.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before{bottom:auto;top:-4px;border-top:7px solid rgba(204,204,204,.2);border-bottom:0}.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after{bottom:auto;top:-4px;border-top:6px solid #fff;border-bottom:0}.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before{right:12px;left:auto}.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after{right:13px;left:auto}.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:after,.bootstrap-select.show-menu-arrow.open>.dropdown-toggle .filter-option:before,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:after,.bootstrap-select.show-menu-arrow.show>.dropdown-toggle .filter-option:before{display:block}.bs-actionsbox,.bs-donebutton,.bs-searchbox{padding:4px 8px}.bs-actionsbox{width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.bs-actionsbox .btn-group{display:block}.bs-actionsbox .btn-group button{width:50%}.bs-donebutton{float:left;width:100%;-webkit-box-sizing:border-box;box-sizing:border-box}.bs-donebutton .btn-group{display:block}.bs-donebutton .btn-group button{width:100%}.bs-searchbox+.bs-actionsbox{padding:0 8px 4px}.bs-searchbox .form-control{margin-bottom:0;width:100%;float:none}


/* PrismJS 1.29.0
https://prismjs.com/download.html#themes=prism-okaidia&languages=markup+css+clike+javascript+abap+abnf+actionscript+ada+agda+al+antlr4+apacheconf+apex+apl+applescript+aql+arduino+arff+armasm+arturo+asciidoc+aspnet+asm6502+asmatmel+autohotkey+autoit+avisynth+avro-idl+awk+bash+basic+batch+bbcode+bbj+bicep+birb+bison+bnf+bqn+brainfuck+brightscript+bro+bsl+c+csharp+cpp+cfscript+chaiscript+cil+cilkc+cilkcpp+clojure+cmake+cobol+coffeescript+concurnas+csp+cooklang+coq+crystal+css-extras+csv+cue+cypher+d+dart+dataweave+dax+dhall+diff+django+dns-zone-file+docker+dot+ebnf+editorconfig+eiffel+ejs+elixir+elm+etlua+erb+erlang+excel-formula+fsharp+factor+false+firestore-security-rules+flow+fortran+ftl+gml+gap+gcode+gdscript+gedcom+gettext+gherkin+git+glsl+gn+linker-script+go+go-module+gradle+graphql+groovy+haml+handlebars+haskell+haxe+hcl+hlsl+hoon+http+hpkp+hsts+ichigojam+icon+icu-message-format+idris+ignore+inform7+ini+io+j+java+javadoc+javadoclike+javastacktrace+jexl+jolie+jq+jsdoc+js-extras+json+json5+jsonp+jsstacktrace+js-templates+julia+keepalived+keyman+kotlin+kumir+kusto+latex+latte+less+lilypond+liquid+lisp+livescript+llvm+log+lolcode+lua+magma+makefile+markdown+markup-templating+mata+matlab+maxscript+mel+mermaid+metafont+mizar+mongodb+monkey+moonscript+n1ql+n4js+nand2tetris-hdl+naniscript+nasm+neon+nevod+nginx+nim+nix+nsis+objectivec+ocaml+odin+opencl+openqasm+oz+parigp+parser+pascal+pascaligo+psl+pcaxis+peoplecode+perl+php+phpdoc+php-extras+plant-uml+plsql+powerquery+powershell+processing+prolog+promql+properties+protobuf+pug+puppet+pure+purebasic+purescript+python+qsharp+q+qml+qore+r+racket+cshtml+jsx+tsx+reason+regex+rego+renpy+rescript+rest+rip+roboconf+robotframework+ruby+rust+sas+sass+scss+scala+scheme+shell-session+smali+smalltalk+smarty+sml+solidity+solution-file+soy+sparql+splunk-spl+sqf+sql+squirrel+stan+stata+iecst+stylus+supercollider+swift+systemd+t4-templating+t4-cs+t4-vb+tap+tcl+tt2+textile+toml+tremor+turtle+twig+typescript+typoscript+unrealscript+uorazor+uri+v+vala+vbnet+velocity+verilog+vhdl+vim+visual-basic+warpscript+wasm+web-idl+wgsl+wiki+wolfram+wren+xeora+xml-doc+xojo+xquery+yaml+yang+zig&plugins=line-highlight+line-numbers+show-invisibles+autolinker+wpd+custom-class+file-highlight+show-language+jsonp-highlight+highlight-keywords+remove-initial-line-feed+inline-color+previewers+autoloader+keep-markup+command-line+unescaped-markup+normalize-whitespace+data-uri-highlight+toolbar+copy-to-clipboard+download-button+match-braces+diff-highlight+filter-highlight-all+treeview */
code[class*=language-],pre[class*=language-]{color:#f8f8f2;background:0 0;text-shadow:0 1px rgba(0,0,0,.3);font-family:Consolas,Monaco,'Andale Mono','Ubuntu Mono',monospace;font-size:1em;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none}pre[class*=language-]{padding:1em;margin:.5em 0;overflow:auto;border-radius:.3em}:not(pre)>code[class*=language-],pre[class*=language-]{background:#070710}:not(pre)>code[class*=language-]{padding:.1em;border-radius:.3em;white-space:normal}.token.cdata,.token.comment,.token.doctype,.token.prolog{color:#8292a2}.token.punctuation{color:#f8f8f2}.token.namespace{opacity:.7}.token.constant,.token.deleted,.token.property,.token.symbol,.token.tag{color:#f92672}.token.boolean,.token.number{color:#ae81ff}.token.attr-name,.token.builtin,.token.char,.token.inserted,.token.selector,.token.string{color:#a6e22e}.language-css .token.string,.style .token.string,.token.entity,.token.operator,.token.url,.token.variable{color:#f8f8f2}.token.atrule,.token.attr-value,.token.class-name,.token.function{color:#e6db74}.token.keyword{color:#66d9ef}.token.important,.token.regex{color:#fd971f}.token.bold,.token.important{font-weight:700}.token.italic{font-style:italic}.token.entity{cursor:help}
pre[data-line]{position:relative;padding:1em 0 1em 3em}.line-highlight{position:absolute;left:0;right:0;padding:inherit 0;margin-top:1em;background:hsla(24,20%,50%,.08);background:-webkit-gradient(linear,left top, right top,color-stop(70%, hsla(24,20%,50%,.1)),to(hsla(24,20%,50%,0)));background:-webkit-linear-gradient(left,hsla(24,20%,50%,.1) 70%,hsla(24,20%,50%,0));background:linear-gradient(to right,hsla(24,20%,50%,.1) 70%,hsla(24,20%,50%,0));pointer-events:none;line-height:inherit;white-space:pre}@media print{.line-highlight{-webkit-print-color-adjust:exact;color-adjust:exact}}.line-highlight:before,.line-highlight[data-end]:after{content:attr(data-start);position:absolute;top:.4em;left:.6em;min-width:1em;padding:0 .5em;background-color:hsla(24,20%,50%,.4);color:#f4f1ef;font:bold 65%/1.5 sans-serif;text-align:center;vertical-align:.3em;border-radius:999px;text-shadow:none;-webkit-box-shadow:0 1px #fff;box-shadow:0 1px #fff}.line-highlight[data-end]:after{content:attr(data-end);top:auto;bottom:.4em}.line-numbers .line-highlight:after,.line-numbers .line-highlight:before{content:none}pre[id].linkable-line-numbers span.line-numbers-rows{pointer-events:all}pre[id].linkable-line-numbers span.line-numbers-rows>span:before{cursor:pointer}pre[id].linkable-line-numbers span.line-numbers-rows>span:hover:before{background-color:rgba(128,128,128,.2)}
pre[class*=language-].line-numbers{position:relative;padding-left:3.8em;counter-reset:linenumber}pre[class*=language-].line-numbers>code{position:relative;white-space:inherit}.line-numbers .line-numbers-rows{position:absolute;pointer-events:none;top:0;font-size:100%;left:-3.8em;width:3em;letter-spacing:-1px;border-right:1px solid #999;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.line-numbers-rows>span{display:block;counter-increment:linenumber}.line-numbers-rows>span:before{content:counter(linenumber);color:#999;display:block;padding-right:.8em;text-align:right}
.token.cr,.token.lf,.token.space,.token.tab:not(:empty){position:relative}.token.cr:before,.token.lf:before,.token.space:before,.token.tab:not(:empty):before{color:grey;opacity:.6;position:absolute}.token.tab:not(:empty):before{content:'\21E5'}.token.cr:before{content:'\240D'}.token.crlf:before{content:'\240D\240A'}.token.lf:before{content:'\240A'}.token.space:before{content:'\00B7'}
.token a{color:inherit}
code[class*=language-] a[href],pre[class*=language-] a[href]{cursor:help;text-decoration:none}code[class*=language-] a[href]:hover,pre[class*=language-] a[href]:hover{cursor:help;text-decoration:underline}
div.code-toolbar{position:relative}div.code-toolbar>.toolbar{position:absolute;z-index:10;top:.3em;right:.2em;-webkit-transition:opacity .3s ease-in-out;transition:opacity .3s ease-in-out;opacity:0}div.code-toolbar:hover>.toolbar{opacity:1}div.code-toolbar:focus-within>.toolbar{opacity:1}div.code-toolbar>.toolbar>.toolbar-item{display:inline-block}div.code-toolbar>.toolbar>.toolbar-item>a{cursor:pointer}div.code-toolbar>.toolbar>.toolbar-item>button{background:0 0;border:0;color:inherit;font:inherit;line-height:normal;overflow:visible;padding:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}div.code-toolbar>.toolbar>.toolbar-item>a,div.code-toolbar>.toolbar>.toolbar-item>button,div.code-toolbar>.toolbar>.toolbar-item>span{color:#bbb;font-size:.8em;padding:0 .5em;background:#f5f2f0;background:rgba(224,224,224,.2);-webkit-box-shadow:0 2px 0 0 rgba(0,0,0,.2);box-shadow:0 2px 0 0 rgba(0,0,0,.2);border-radius:.5em}div.code-toolbar>.toolbar>.toolbar-item>a:focus,div.code-toolbar>.toolbar>.toolbar-item>a:hover,div.code-toolbar>.toolbar>.toolbar-item>button:focus,div.code-toolbar>.toolbar>.toolbar-item>button:hover,div.code-toolbar>.toolbar>.toolbar-item>span:focus,div.code-toolbar>.toolbar>.toolbar-item>span:hover{color:inherit;text-decoration:none}
span.inline-color-wrapper{background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyIDIiPjxwYXRoIGZpbGw9ImdyYXkiIGQ9Ik0wIDBoMnYySDB6Ii8+PHBhdGggZmlsbD0id2hpdGUiIGQ9Ik0wIDBoMXYxSDB6TTEgMWgxdjFIMXoiLz48L3N2Zz4=);background-position:center;background-size:110%;display:inline-block;height:1.333ch;width:1.333ch;margin:0 .333ch;-webkit-box-sizing:border-box;box-sizing:border-box;border:1px solid #fff;outline:1px solid rgba(0,0,0,.5);overflow:hidden}span.inline-color{display:block;height:120%;width:120%}
.prism-previewer,.prism-previewer:after,.prism-previewer:before{position:absolute;pointer-events:none}.prism-previewer,.prism-previewer:after{left:50%}.prism-previewer{margin-top:-48px;width:32px;height:32px;margin-left:-16px;z-index:10;opacity:0;-webkit-transition:opacity .25s;transition:opacity .25s}.prism-previewer.flipped{margin-top:0;margin-bottom:-48px}.prism-previewer:after,.prism-previewer:before{content:'';position:absolute;pointer-events:none}.prism-previewer:before{top:-5px;right:-5px;left:-5px;bottom:-5px;border-radius:10px;border:5px solid #fff;-webkit-box-shadow:0 0 3px rgba(0,0,0,.5) inset,0 0 10px rgba(0,0,0,.75);box-shadow:0 0 3px rgba(0,0,0,.5) inset,0 0 10px rgba(0,0,0,.75)}.prism-previewer:after{top:100%;width:0;height:0;margin:5px 0 0 -7px;border:7px solid transparent;border-color:rgba(255,0,0,0);border-top-color:#fff}.prism-previewer.flipped:after{top:auto;bottom:100%;margin-top:0;margin-bottom:5px;border-top-color:rgba(255,0,0,0);border-bottom-color:#fff}.prism-previewer.active{opacity:1}.prism-previewer-angle:before{border-radius:50%;background:#fff}.prism-previewer-angle:after{margin-top:4px}.prism-previewer-angle svg{width:32px;height:32px;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg)}.prism-previewer-angle[data-negative] svg{-webkit-transform:scaleX(-1) rotate(-90deg);-ms-transform:scaleX(-1) rotate(-90deg);transform:scaleX(-1) rotate(-90deg)}.prism-previewer-angle circle{fill:transparent;stroke:#2d3438;stroke-opacity:.9;stroke-width:32;stroke-dasharray:0,500}.prism-previewer-gradient{background-image:-webkit-linear-gradient(45deg,#bbb 25%,transparent 25%,transparent 75%,#bbb 75%,#bbb),-webkit-linear-gradient(45deg,#bbb 25%,#eee 25%,#eee 75%,#bbb 75%,#bbb);background-image:linear-gradient(45deg,#bbb 25%,transparent 25%,transparent 75%,#bbb 75%,#bbb),linear-gradient(45deg,#bbb 25%,#eee 25%,#eee 75%,#bbb 75%,#bbb);background-size:10px 10px;background-position:0 0,5px 5px;width:64px;margin-left:-32px}.prism-previewer-gradient:before{content:none}.prism-previewer-gradient div{position:absolute;top:-5px;left:-5px;right:-5px;bottom:-5px;border-radius:10px;border:5px solid #fff;-webkit-box-shadow:0 0 3px rgba(0,0,0,.5) inset,0 0 10px rgba(0,0,0,.75);box-shadow:0 0 3px rgba(0,0,0,.5) inset,0 0 10px rgba(0,0,0,.75)}.prism-previewer-color{background-image:-webkit-linear-gradient(45deg,#bbb 25%,transparent 25%,transparent 75%,#bbb 75%,#bbb),-webkit-linear-gradient(45deg,#bbb 25%,#eee 25%,#eee 75%,#bbb 75%,#bbb);background-image:linear-gradient(45deg,#bbb 25%,transparent 25%,transparent 75%,#bbb 75%,#bbb),linear-gradient(45deg,#bbb 25%,#eee 25%,#eee 75%,#bbb 75%,#bbb);background-size:10px 10px;background-position:0 0,5px 5px}.prism-previewer-color:before{background-color:inherit;background-clip:padding-box}.prism-previewer-easing{margin-top:-76px;margin-left:-30px;width:60px;height:60px;background:#333}.prism-previewer-easing.flipped{margin-bottom:-116px}.prism-previewer-easing svg{width:60px;height:60px}.prism-previewer-easing circle{fill:#2d3438;stroke:#fff}.prism-previewer-easing path{fill:none;stroke:#fff;stroke-linecap:round;stroke-width:4}.prism-previewer-easing line{stroke:#fff;stroke-opacity:.5;stroke-width:2}@-webkit-keyframes prism-previewer-time{0%{stroke-dasharray:0,500;stroke-dashoffset:0}50%{stroke-dasharray:100,500;stroke-dashoffset:0}100%{stroke-dasharray:0,500;stroke-dashoffset:-100}}@keyframes prism-previewer-time{0%{stroke-dasharray:0,500;stroke-dashoffset:0}50%{stroke-dasharray:100,500;stroke-dashoffset:0}100%{stroke-dasharray:0,500;stroke-dashoffset:-100}}.prism-previewer-time:before{border-radius:50%;background:#fff}.prism-previewer-time:after{margin-top:4px}.prism-previewer-time svg{width:32px;height:32px;-webkit-transform:rotate(-90deg);-ms-transform:rotate(-90deg);transform:rotate(-90deg)}.prism-previewer-time circle{fill:transparent;stroke:#2d3438;stroke-opacity:.9;stroke-width:32;stroke-dasharray:0,500;stroke-dashoffset:0;-webkit-animation:prism-previewer-time linear infinite 3s;animation:prism-previewer-time linear infinite 3s}
.command-line-prompt{border-right:1px solid #999;display:block;float:left;font-size:100%;letter-spacing:-1px;margin-right:1em;pointer-events:none;text-align:right;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.command-line-prompt>span:before{opacity:.7;content:' ';display:block;padding-right:.8em}.command-line-prompt>span[data-user]:before{content:"[" attr(data-user) "@" attr(data-host) "] $"}.command-line-prompt>span[data-user=root]:before{content:"[" attr(data-user) "@" attr(data-host) "] #"}.command-line-prompt>span[data-prompt]:before{content:attr(data-prompt)}.command-line-prompt>span[data-continuation-prompt]:before{content:attr(data-continuation-prompt)}.command-line span.token.output{opacity:.7}
[class*=lang-] script[type='text/plain'],[class*=language-] script[type='text/plain'],script[type='text/plain'][class*=lang-],script[type='text/plain'][class*=language-]{display:block;font:100% Consolas,Monaco,monospace;white-space:pre;overflow:auto}
.token.punctuation.brace-hover,.token.punctuation.brace-selected{outline:solid 1px}.rainbow-braces .token.punctuation.brace-level-1,.rainbow-braces .token.punctuation.brace-level-5,.rainbow-braces .token.punctuation.brace-level-9{color:#e50;opacity:1}.rainbow-braces .token.punctuation.brace-level-10,.rainbow-braces .token.punctuation.brace-level-2,.rainbow-braces .token.punctuation.brace-level-6{color:#0b3;opacity:1}.rainbow-braces .token.punctuation.brace-level-11,.rainbow-braces .token.punctuation.brace-level-3,.rainbow-braces .token.punctuation.brace-level-7{color:#26f;opacity:1}.rainbow-braces .token.punctuation.brace-level-12,.rainbow-braces .token.punctuation.brace-level-4,.rainbow-braces .token.punctuation.brace-level-8{color:#e0e;opacity:1}
pre.diff-highlight>code .token.deleted:not(.prefix),pre>code.diff-highlight .token.deleted:not(.prefix){background-color:rgba(255,0,0,.1);color:inherit;display:block}pre.diff-highlight>code .token.inserted:not(.prefix),pre>code.diff-highlight .token.inserted:not(.prefix){background-color:rgba(0,255,128,.1);color:inherit;display:block}
.token.treeview-part .entry-line{position:relative;text-indent:-99em;display:inline-block;vertical-align:top;width:1.2em}.token.treeview-part .entry-line:before,.token.treeview-part .line-h:after{content:"";position:absolute;top:0;left:50%;width:50%;height:100%}.token.treeview-part .line-h:before,.token.treeview-part .line-v:before{border-left:1px solid #ccc}.token.treeview-part .line-v-last:before{height:50%;border-left:1px solid #ccc;border-bottom:1px solid #ccc}.token.treeview-part .line-h:after{height:50%;border-bottom:1px solid #ccc}.token.treeview-part .entry-name{position:relative;display:inline-block;vertical-align:top}.token.treeview-part .entry-name.dotfile{opacity:.5}@font-face{font-family:PrismTreeview;src:url(data:application/font-woff;base64,d09GRgABAAAAAAgYAAsAAAAAEGAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAABHU1VCAAABCAAAADsAAABUIIslek9TLzIAAAFEAAAAPwAAAFY1UkH9Y21hcAAAAYQAAAB/AAACCtvO7yxnbHlmAAACBAAAA+MAAAlACm1VqmhlYWQAAAXoAAAAKgAAADZfxj5jaGhlYQAABhQAAAAYAAAAJAFbAMFobXR4AAAGLAAAAA4AAAA0CGQAAGxvY2EAAAY8AAAAHAAAABwM9A9CbWF4cAAABlgAAAAfAAAAIAEgAHZuYW1lAAAGeAAAATcAAAJSfUrk+HBvc3QAAAewAAAAZgAAAIka0DSfeJxjYGRgYOBiMGCwY2BycfMJYeDLSSzJY5BiYGGAAJA8MpsxJzM9kYEDxgPKsYBpDiBmg4gCACY7BUgAeJxjYGRYyjiBgZWBgaGQoRZISkLpUAYOBj0GBiYGVmYGrCAgzTWFweEV4ysehs1ArgDDFgZGIA3CDAB2tQjAAHic7ZHLEcMwCESfLCz/VEoKSEE5parURxMOC4c0Ec283WGFdABgBXrwCAzam4bOK9KWeefM3Hhmjyn3ed+hTRq1pS7Ra/HjYGPniHcXMy4G/zNTP7/KW5HTXArkvdBW3ArN19dCG/NRIN8K5HuB/CiQn4U26VeBfBbML9NEH78AeJyVVc1u20YQ3pn905JcSgr/YsuSDTEg3cR1bFEkYyS1HQcQ2jQF2hot6vYSoECKnnPLA/SWUy9NTr31Bfp+6azsNI0SGiolzu7ODnfn+2Z2lnHG3rxhr9nfLGKbLGesncAYYnUHpsVnMG/uwyzNdFIVd6HI6twp8+R3LpT4TSglLoTHwwJgG2/dFvKrl9yI507/p5CCq4LTxB/PlPjkFaMHnWB/0S9je7RTPS+utnGtom1T2q5pk/e3H0M1S18rsXAL7wgpxQuhAmteGGvNjmcfGXuwnFNOPCXxeOGmnjrBLWNyBeNtVq2Hs03yus1aPS3mzSyNVSfu588iW1Q93x/4fjcHn+5EkS2tMxr4xIRa8ese+4L9uKZnxEqs8+ldyN9atU02a5t5uQ8hZGms1QTKpaKYqnipiNNOAIeIADC0JNEOYY+jtSgFoOchiAjRGFACpUTRje8bwIYWGCDEgENY8MEu9bnCYCdAxftoNg0KiSpUtPaHcanYwzXRu6T4r40b5npal3V7UHWCPJW9niyl1vIHgoujEXZjudBkeWkOeMQBRmbEPhKzij1i52t6/TadL+3q7H0U1eq4E8cG4gIIwQLx8VX7ToPXgPrehVc5QXHR7gMSmwjKfaYAP4KvZV+yn9bE18y2IY37LvtyrSg3i7ZK++B603ndlg/gBJpZRsfpBI6hyiaQ6FjlnThz8lAC3LgBIMnXDOAXxBQ4SIgiEhx2AcGCAwAhwjXRpCQms42bwAUt75BvAwgONzdgOfWEwzk4Ylzj4mz+5YEzzXzWX9aNlk7ot65y5QnBHsNlm6zDTu7sspRqG4V+fgJ1lVBZ07Nm7s5nemo3Lf3PO7iwtnroQ5/YDGwPRUip6fV6L+27p+wCHwSvPs85UnHqId8NAn5IBsKdv95KrL9m31Gsf2a/rluDslk1y1J9GE+LUmmVT/OyOHaFKGnapt2H5XeJTmKd6qYNoVVZOy+pWzr7rMip3ndG/4mQSoUcMbAqG/YNIAdXhkAqTVruXhocSKN0iS4Rwj7vSS4fcF/La07BfeQSuRAcFeW+9igjwPhhYPpGCBCBHhxiKMyFMFT7ziRH7RtfIWdiha+TdW+Rqs7bLHdN2ZJIKl0um0x3op9saYr0REeRdj09pl43pMzz4tjztrY8L4o8bzT+oLY27PR/eFtXs/YY5vtwB5Iqad14eYN0ujveMaGWqkdU3TKbQSC5Uvxaf4fA7SAQ3r2tEfIhd4duld91bwMisjqBw22orthNcroXl7KqO1329HBgAexgoCfGAwiDPoBnriki3lmNojrzvD0tjo6E3vPYP6E2BMIAeJxjYGRgYADiY8t3FsTz23xl4GbYzIAB/v9nWM6wBcjgYGAC8QH+QQhZAAB4nGNgZGBg2MzAACeXMzAyoAJeADPyAh14nGNgAILNpGEA0fgIZQAAAAAAAAA2AHIAvgE+AZgCCAKMAv4DlgPsBEYEoHicY2BkYGDgZchi4GQAASYg5gJCBob/YD4DABTSAZcAeJx9kU1uwjAQhV/4qwpqhdSqi67cTTeVEmBXDgBbhBD7AHYISuLUMSD2PUdP0HNwjp6i676k3qQS9Ujjb968mYUNoI8zPJTHw02Vy9PAFatfbpLuHbfIT47b6MF33KH+6riLF0wc93CHN27wWtdUHvHuuIFbfDhuUv903CKfHbfxgC/HHerfjrtYen3HPTx7ambiIl0YKQ+xPM5ltE9CU9NqxVKaItaZGPqDmj6VmTShlRuxOoniEI2sVUIZnYqJzqxMEi1yo3dybf2ttfk4CJTT/bVOMYNBjAIpFiTJOLCWOGLOHGGPBCE7l32XO0tmw04MjQwCQ7774B//lDmrZkJY3hvOrHBiLuiJMKJqoVgrejQ3CP5Yubt0JwxNJa96Oypr6j621VSOMQKG+uP36eKmHylcb0MAeJxtwdEOgjAMBdBeWEFR/Mdl7bTJtMsygc/nwVfPoYF+QP+tGDAigDFhxgVXLLjhjhUPCtmKTtmLaGN7x6dy/Io5bybqoevRQ3LRObb0sk3HKpn1SFqW6ru26vbpYfcmRCccJhqsAAA=) format("woff")}.token.treeview-part .entry-name:before{content:"\ea01";font-family:PrismTreeview;font-size:inherit;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;width:2.5ex;display:inline-block}.token.treeview-part .entry-name.dir:before{content:"\ea02"}.token.treeview-part .entry-name.ext-bmp:before,.token.treeview-part .entry-name.ext-eps:before,.token.treeview-part .entry-name.ext-gif:before,.token.treeview-part .entry-name.ext-jpe:before,.token.treeview-part .entry-name.ext-jpeg:before,.token.treeview-part .entry-name.ext-jpg:before,.token.treeview-part .entry-name.ext-png:before,.token.treeview-part .entry-name.ext-svg:before,.token.treeview-part .entry-name.ext-tiff:before{content:"\ea03"}.token.treeview-part .entry-name.ext-cfg:before,.token.treeview-part .entry-name.ext-conf:before,.token.treeview-part .entry-name.ext-config:before,.token.treeview-part .entry-name.ext-csv:before,.token.treeview-part .entry-name.ext-ini:before,.token.treeview-part .entry-name.ext-log:before,.token.treeview-part .entry-name.ext-md:before,.token.treeview-part .entry-name.ext-nfo:before,.token.treeview-part .entry-name.ext-txt:before{content:"\ea06"}.token.treeview-part .entry-name.ext-asp:before,.token.treeview-part .entry-name.ext-aspx:before,.token.treeview-part .entry-name.ext-c:before,.token.treeview-part .entry-name.ext-cc:before,.token.treeview-part .entry-name.ext-cpp:before,.token.treeview-part .entry-name.ext-cs:before,.token.treeview-part .entry-name.ext-css:before,.token.treeview-part .entry-name.ext-h:before,.token.treeview-part .entry-name.ext-hh:before,.token.treeview-part .entry-name.ext-htm:before,.token.treeview-part .entry-name.ext-html:before,.token.treeview-part .entry-name.ext-jav:before,.token.treeview-part .entry-name.ext-java:before,.token.treeview-part .entry-name.ext-js:before,.token.treeview-part .entry-name.ext-php:before,.token.treeview-part .entry-name.ext-rb:before,.token.treeview-part .entry-name.ext-xml:before{content:"\ea07"}.token.treeview-part .entry-name.ext-7z:before,.token.treeview-part .entry-name.ext-bz2:before,.token.treeview-part .entry-name.ext-bz:before,.token.treeview-part .entry-name.ext-gz:before,.token.treeview-part .entry-name.ext-rar:before,.token.treeview-part .entry-name.ext-tar:before,.token.treeview-part .entry-name.ext-tgz:before,.token.treeview-part .entry-name.ext-zip:before{content:"\ea08"}.token.treeview-part .entry-name.ext-aac:before,.token.treeview-part .entry-name.ext-au:before,.token.treeview-part .entry-name.ext-cda:before,.token.treeview-part .entry-name.ext-flac:before,.token.treeview-part .entry-name.ext-mp3:before,.token.treeview-part .entry-name.ext-oga:before,.token.treeview-part .entry-name.ext-ogg:before,.token.treeview-part .entry-name.ext-wav:before,.token.treeview-part .entry-name.ext-wma:before{content:"\ea04"}.token.treeview-part .entry-name.ext-avi:before,.token.treeview-part .entry-name.ext-flv:before,.token.treeview-part .entry-name.ext-mkv:before,.token.treeview-part .entry-name.ext-mov:before,.token.treeview-part .entry-name.ext-mp4:before,.token.treeview-part .entry-name.ext-mpeg:before,.token.treeview-part .entry-name.ext-mpg:before,.token.treeview-part .entry-name.ext-ogv:before,.token.treeview-part .entry-name.ext-webm:before{content:"\ea05"}.token.treeview-part .entry-name.ext-pdf:before{content:"\ea09"}.token.treeview-part .entry-name.ext-xls:before,.token.treeview-part .entry-name.ext-xlsx:before{content:"\ea0a"}.token.treeview-part .entry-name.ext-doc:before,.token.treeview-part .entry-name.ext-docm:before,.token.treeview-part .entry-name.ext-docx:before{content:"\ea0c"}.token.treeview-part .entry-name.ext-pps:before,.token.treeview-part .entry-name.ext-ppt:before,.token.treeview-part .entry-name.ext-pptx:before{content:"\ea0b"}

@charset "UTF-8";
/**************************************
 CSS Index  
****************************

/--- Default Styles -----/

01.Variables
02.Mixins
03.Reset
04.Typography
05.Extend
06.Animations
07.Shortcode
08.Spacing
09.Common
10.Forms
11.Sal
12.Text Animation
13.Themebg

/--- Header Styles -----/

01.Headerdefault
02.Nav
03.Header Top
04.HeaderTopBar
05.Mobilemenu

/--- Elements -----/

01.Breadcrumb
02.Sectiontitle
03.Button
04.Service
05.Card
06.Counter
07.Progressbar
08.Accordion
09.Social Share
10.Team
11.Portfolio
12.Testimonial
13.Slickslide
14.Timeline
15.Call to Action
16.Tab
17.Pricing
18.Split
19.Vedio
20.Gallery
21.Contact
22.Brand
23.404
24.Advance Tab
25.Advancepricing
26.Contact Form
27.Swicher
28.Backto Top
29.About
30.Newsletter

/--- Blog -----/
01.Blog
02.Sidebar
03.Blog Details

/--- Footer -----/
01.Footer
02.Copyright

/--- Template -----/
01.Banner
02.Portfoliodetails
03.Splash
04.Lightmode

***************************************/
/**************************************
    Default Styles
***************************************/
/*-- Variables --*/
@import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap");
:root {
  --color-primary: #7064e9;
  --color-primary-alt: #35316f;
  --color-secondary: #410093;
  --color-tertiary: #F2CD25;
  --color-primary-gradient-start: #4179FE;
  --color-primary-gradient-end: #36F5FF;
  --color-secondary-gradient-start: #F850FF;
  --color-secondary-gradient-end: #147EF3;
  --color-tertiary-gradient-start: #FD6221;
  --color-tertiary-gradient-end: #F2CD25;
  --color-primary-darker: #011827;
  --color-tertiary-darker: #150b40;
  --color-secondary-darker: #190301;
  --color-heading: #ccceef;
  --color-body: #7376aa;
  --color-text-off: #565e78;
  --color-dark: #070710;
  --color-darker: rgba(6, 6, 6, 0.7);
  --color-darkest: rgba(0, 0, 0, 0.3);
  --color-black: #000000;
  --color-black-off: rgba(0,0,0,0.2);
  --color-blacker: rgba(15, 15, 17, 0);
  --color-blackest: #0f1021;
  --color-border: hsla(0,0%,100%,0.1);
  --color-border-light: #e5e7eb;
  --color-lessdark: #1e1e1e;
  --color-gray: #7376aa;
  --color-midgray: #878787;
  --color-light: #E4E6EA;
  --color-lighter: #CED0D4;
  --color-lightest: #F0F2F5;
  --color-white: #ffffff;
  --color-white-off: rgba(255,255,255,0.05);
  --color-success: #3EB75E;
  --color-danger: #FF0003;
  --color-warning: #FF8F3C;
  --color-info: #1BA2DB;
  --color-facebook: #3B5997;
  --color-twitter: #1BA1F2;
  --color-youtube: #ED4141;
  --color-linkedin: #0077B5;
  --color-pinterest: #E60022;
  --color-instagram: #C231A1;
  --color-vimeo: #00ADEF;
  --color-twitch: #6441A3;
  --color-discord: #7289da;
  --color-extra01: #666666;
  --color-extra02: #606770;
  --color-extra03: #FBFBFD;
  --color-extra04: #1A1A1A;
  --color-extra05: #242424;
  --color-extra06: #111424;
  --border-width: 2px;
  --radius-small: 6px;
  --radius: 10px;
  --radius-big: 16px;
  --radius-bigger: 50px;
  --p-light: 300;
  --p-regular: 400;
  --p-medium: 500;
  --p-semi-bold: 600;
  --p-bold: 700;
  --p-extra-bold: 800;
  --p-black: 900;
  --shadow-primary: 0 0 20px 5px rgba(20, 126, 243, 0.1);
  --shadow-light: 1px 1px 6px rgba(0,0,0,0.25);
  --shadow-lighter: 4px 4px 20px 20px rgba(0,0,0,0.01);
  --transition: 0.3s;
  --transition-transform: transform .65s cubic-bezier(.23,1,.32,1);
  --font-primary: "Inter", sans-serif;
  --secondary-font: "Inter", sans-serif;
  --font-awesome: "Font Awesome 5 Pro";
  --font-size-b1: 18px;
  --font-size-b2: 16px;
  --font-size-b3: 14px;
  --font-size-b4: 12px;
  --line-height-b1: 1.67;
  --line-height-b2: 1.7;
  --line-height-b3: 1.6;
  --line-height-b4: 1.3;
  --h1: 56px;
  --h2: 44px;
  --h3: 36px;
  --h4: 24px;
  --h5: 18px;
  --h6: 16px;
}

/**
 * Reset Styels
 */
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
nav,
section,
summary {
  display: block;
}

audio,
canvas,
video {
  display: inline-block;
}

audio:not([controls]) {
  display: none;
  height: 0;
}

[hidden] {
  display: none;
}

a {
  color: var(--color-heading);
  text-decoration: none;
  outline: none;
}

a:hover,
a:focus,
a:active {
  text-decoration: none;
  outline: none;
  color: var(--color-primary);
}

a:focus {
  outline: none;
}

address {
  margin: 0 0 24px;
}

abbr[title] {
  border-bottom: 1px dotted;
}

b,
strong {
  font-weight: bold;
}

mark {
  background: var(--color-primary);
  color: #ffffff;
}

code,
kbd,
pre,
samp {
  font-size: var(--font-size-b3);
  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
  color: var(--color-primary);
}

kbd,
ins {
  color: #ffffff;
}

pre,
pre.wp-block-code {
  font-family: "Courier 10 Pitch", Courier, monospace !important;
  font-size: 15px !important;
  margin: 20px 0 !important;
  overflow: auto;
  padding: 20px !important;
  white-space: pre !important;
  white-space: pre-wrap !important;
  word-wrap: break-word !important;
  color: var(--color-body) !important;
  background: var(--color-light);
  border-radius: 4px;
}

small {
  font-size: smaller;
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

dl {
  margin-top: 0;
  margin-bottom: 10px;
}

dd {
  margin: 0 15px 15px;
}

dt {
  font-weight: bold;
  color: var(--color-heading);
}

menu,
ol,
ul {
  margin: 16px 0;
  padding: 0 0 0 40px;
}

nav ul,
nav ol {
  list-style: none;
  list-style-image: none;
}

li > ul,
li > ol {
  margin: 0;
}

ol ul {
  margin-bottom: 0;
}

img {
  -ms-interpolation-mode: bicubic;
  border: 0;
  vertical-align: middle;
  max-width: 100%;
  height: auto;
}

svg:not(:root) {
  overflow: hidden;
}

figure {
  margin: 0;
}

form {
  margin: 0;
}

fieldset {
  border: 1px solid var(--color-border);
  margin: 0 2px;
  min-width: inherit;
  padding: 0.35em 0.625em 0.75em;
}

legend {
  border: 0;
  padding: 0;
  white-space: normal;
}

button,
input,
select,
textarea {
  font-size: 100%;
  margin: 0;
  max-width: 100%;
  vertical-align: baseline;
}

button,
input {
  line-height: normal;
}

button,
html input[type=button],
input[type=reset],
input[type=submit] {
  -webkit-appearance: button;
  -moz-appearance: button;
  appearance: button;
  cursor: pointer;
}

button[disabled],
input[disabled] {
  cursor: default;
}

input[type=checkbox],
input[type=radio] {
  padding: 0;
}

input[type=search] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
  appearance: textfield;
  padding-right: 2px;
}

input[type=search]::-webkit-search-decoration {
  -webkit-appearance: none;
  appearance: none;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

textarea {
  overflow: auto;
  vertical-align: top;
}

caption,
th,
td {
  font-weight: normal;
}

table thead th {
  font-weight: 700;
}

td,
.wp-block-calendar tfoot td {
  border: 1px solid var(--color-border);
  padding: 7px 10px;
}

del {
  color: #333;
}

ins {
  background: rgba(56, 88, 246, 0.6);
  text-decoration: none;
  padding: 0 5px;
}

hr {
  background-size: 4px 4px;
  border: 0;
  height: 1px;
  margin: 0 0 24px;
  opacity: 0.6;
}

table a,
table a:link,
table a:visited {
  text-decoration: underline;
}

dt {
  font-weight: bold;
  margin-bottom: 10px;
}

dd {
  margin: 0 15px 15px;
}

caption {
  caption-side: top;
}

kbd {
  background: var(--heading-color);
}

dfn,
cite,
em {
  font-style: italic;
}

/* BlockQuote  */
blockquote,
q {
  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
  quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}

blockquote {
  font-size: var(--font-size-b1);
  font-style: italic;
  font-weight: var(--p-light);
  margin: 24px 40px;
}

blockquote blockquote {
  margin-right: 0;
}

blockquote cite,
blockquote small {
  font-size: var(--font-size-b3);
  font-weight: normal;
}

blockquote strong,
blockquote b {
  font-weight: 700;
}

/**
 * Typography
 */
* {
  box-sizing: border-box;
}

html {
  overflow: hidden;
  overflow-y: auto;
  margin: 0;
  padding: 0;
  font-size: 10px;
}

body {
  overflow: hidden;
  font-size: var(--font-size-b2);
  line-height: var(--line-height-b2);
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: var(--font-primary);
  color: var(--color-body);
  font-weight: var(--p-regular);
  background-color: var(--color-dark);
  margin: 0;
  padding: 0;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
address,
p,
pre,
blockquote,
menu,
ol,
ul,
table,
hr {
  margin: 0;
  margin-bottom: 20px;
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  word-break: break-word;
  font-family: var(--secondary-font);
  line-height: 1.4074;
  color: var(--color-heading);
}

h1,
.h1 {
  font-size: var(--h1);
  line-height: 1.19;
}

h2,
.h2 {
  font-size: var(--h2);
  line-height: 1.23;
}

h3,
.h3 {
  font-size: var(--h3);
  line-height: 1.4;
}

h4,
.h4 {
  font-size: var(--h4);
  line-height: 1.25;
}

h5,
.h5 {
  font-size: var(--h5);
  line-height: 1.24;
}

h6,
.h6 {
  font-size: var(--h6);
  line-height: 1.25;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a,
.h1 a,
.h2 a,
.h3 a,
.h4 a,
.h5 a,
.h6 a {
  color: inherit;
  transition: 0.5s;
}

a {
  color: var(--color-body);
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  h1,
  .h1 {
    font-size: 38px;
  }
  h2,
  .h2 {
    font-size: 32px;
  }
  h3,
  .h3 {
    font-size: 28px;
  }
  h4,
  .h4 {
    font-size: 24px;
  }
  h5,
  .h5 {
    font-size: 18px;
  }
}
@media only screen and (max-width: 767px) {
  h1,
  .h1 {
    font-size: 34px;
  }
  h2,
  .h2 {
    font-size: 28px;
  }
  h3,
  .h3 {
    font-size: 24px;
  }
  h4,
  .h4 {
    font-size: 20px;
  }
  h5,
  .h5 {
    font-size: 16px;
  }
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  font-weight: var(--p-bold);
}

h4,
.h4,
h5,
.h5 {
  font-weight: var(--p-bold);
}

h6,
.h6 {
  font-weight: var(--p-medium);
}

p {
  font-size: var(--font-size-b2);
  line-height: var(--line-height-b2);
  font-weight: var(--p-regular);
  color: var(--color-body);
  margin: 0 0 30px;
}
@media only screen and (max-width: 767px) {
  p {
    margin: 0 0 20px;
    font-size: var(--font-size-b2);
    line-height: var(--line-height-b2);
  }
}
p.has-large-font-size {
  line-height: 1.5;
  font-size: 36px;
}
p.has-medium-font-size {
  font-size: 24px;
  line-height: 36px;
}
p.has-small-font-size {
  font-size: 13px;
}
p.has-very-light-gray-color {
  color: var(--color-white);
}
p.has-background {
  padding: 20px 30px;
}
p.b1 {
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
}
p.b2 {
  font-size: var(--font-size-b2);
  line-height: var(--line-height-b2);
}
p.b3 {
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
}
p.b4 {
  font-size: var(--font-size-b4);
  line-height: var(--line-height-b4);
}

.b1 {
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
}

.b2 {
  font-size: var(--font-size-b2);
  line-height: var(--line-height-b2);
}

.b3 {
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
}

.b4 {
  font-size: var(--font-size-b4);
  line-height: var(--line-height-b4);
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  margin: 0 0 40px;
  width: 100%;
}

table a,
table a:link,
table a:visited {
  text-decoration: none;
}

cite,
.wp-block-pullquote cite,
.wp-block-pullquote.is-style-solid-color blockquote cite,
.wp-block-quote cite {
  color: var(--color-heading);
}

var {
  font-family: "Courier 10 Pitch", Courier, monospace;
}

/*---------------------------
	List Style 
---------------------------*/
ul,
ol {
  padding-left: 18px;
}

ul {
  list-style: square;
  margin-bottom: 30px;
  padding-left: 20px;
}
ul.liststyle.bullet li {
  font-size: 18px;
  line-height: 30px;
  color: var(--color-body);
  position: relative;
  padding-left: 30px;
}
@media only screen and (max-width: 767px) {
  ul.liststyle.bullet li {
    padding-left: 19px;
  }
}
ul.liststyle.bullet li::before {
  position: absolute;
  content: "";
  width: 6px;
  height: 6px;
  border-radius: 100%;
  background: var(--color-body);
  left: 0;
  top: 10px;
}
ul.liststyle.bullet li + li {
  margin-top: 8px;
}
ul li {
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
  margin-top: 10px;
  margin-bottom: 10px;
  color: var(--color-body);
  font-weight: 400;
}
ul li a {
  text-decoration: none;
  color: var(--color-body);
}
ul li a:hover {
  color: var(--color-primary);
}
ul ul {
  margin-bottom: 0;
}

ol {
  margin-bottom: 30px;
}
ol li {
  color: var(--color-gray);
  margin-top: 10px;
  margin-bottom: 10px;
  font-weight: 400;
}
ol li a {
  color: var(--heading-color);
  text-decoration: none;
}
ol li a:hover {
  color: var(--color-primary);
}
ol ul {
  padding-left: 30px;
}

hr {
  display: block;
  height: 0;
  margin: 15px 0;
  border-top: 1px solid var(--color-border);
  background: transparent;
}

kbd {
  background: var(--color-primary);
}

/*=====================
All Extend Here
=======================*/
.color-primary {
  color: var(--color-primary) !important;
}

.color-primary {
  color: var(--color-primary) !important;
}

.color-primary {
  color: var(--color-primary) !important;
}

.color-secondary {
  color: var(--color-secondary) !important;
}

.color-tertiary {
  color: var(--color-tertiary) !important;
}

.color-primary {
  color: var(--color-primary) !important;
}

.color-primary {
  color: var(--color-primary) !important;
}

.color-primary {
  color: var(--color-primary) !important;
}

.color-primary-darker {
  color: var(--color-primary-darker) !important;
}

.color-secondary-darker {
  color: var(--color-secondary-darker) !important;
}

.color-primary-darker {
  color: var(--color-primary-darker) !important;
}

.color-primary-darker {
  color: var(--color-primary-darker) !important;
}

.color-heading {
  color: var(--color-heading) !important;
}

.color-body {
  color: var(--color-body) !important;
}

.color-dark {
  color: var(--color-dark) !important;
}

.color-darker {
  color: var(--color-darker) !important;
}

.color-darkest {
  color: var(--color-darkest) !important;
}

.color-black {
  color: var(--color-black) !important;
}

.color-blacker {
  color: var(--color-blacker) !important;
}

.color-blackest {
  color: var(--color-blackest) !important;
}

.color-border {
  color: var(--color-border) !important;
}

.color-gray {
  color: var(--color-gray) !important;
}

.color-midgray {
  color: var(--color-midgray) !important;
}

.color-light {
  color: var(--color-light) !important;
}

.color-lighter {
  color: var(--color-lighter) !important;
}

.color-lightest {
  color: var(--color-lightest) !important;
}

.color-white {
  color: var(--color-white) !important;
}

[data-overlay]:before {
  background: var(--color-primary);
}

/* Radius */
.filter-button-default button, .rainbow-card .inner .thumbnail .card-image img, .rainbow-card .inner .thumbnail .card-image a, .radius-small {
  border-radius: var(--radius-small) !important;
}

.radius-small {
  border-radius: var(--radius-small) !important;
}

.radius, .post-scale {
  border-radius: var(--radius) !important;
}

.radius-big {
  border-radius: var(--radius-big) !important;
}

.radius-bigger {
  border-radius: var(--radius-bigger) !important;
}

/* Font Weight */
.w-300 {
  font-weight: 300 !important;
}

.w-400 {
  font-weight: 400 !important;
}

.w-500 {
  font-weight: 500 !important;
}

.w-600 {
  font-weight: 600 !important;
}

.w-700 {
  font-weight: 700 !important;
}

.w-800 {
  font-weight: 800 !important;
}

.w-900 {
  font-weight: 900 !important;
}

/* Shadows */
.shadow-primary {
  box-shadow: var(--shadow-primary);
}

.shadow-light {
  box-shadow: var(--shadow-light);
}

.shadow-lighter {
  box-shadow: var(--shadow-lighter);
}

/*=============== Style Css =============*/
.settings-area .user-nav, .rbt-course-details-list-wrapper,
.rbt-default-sidebar-list, .rainbow-meta-list, .advance-pricing .pricing-right .plan-offer-list, .advance-brand, .breadcrumb-inner ul.page-list {
  padding: 0;
  margin: 0;
  list-style: none;
}

.tagcloud a,
.wp-block-tag-cloud a, .rbt-single-widget.widget_recent_comments ul li span, .rbt-single-widget.widget_recent_entries ul li span, .rbt-single-widget.widget_archive ul li span, .rbt-single-widget.widget_categories ul li span, .rbt-single-widget.widget_meta ul li span, .rbt-single-widget.widget_pages ul li span, .rbt-single-widget.widget_nav_menu ul li span, .rbt-single-widget.widget_recent_comments ul li a, .rbt-single-widget.widget_recent_entries ul li a, .rbt-single-widget.widget_archive ul li a, .rbt-single-widget.widget_categories ul li a, .rbt-single-widget.widget_meta ul li a, .rbt-single-widget.widget_pages ul li a, .rbt-single-widget.widget_nav_menu ul li a, .rainbow-address .inner p a, .rainbow-slick-dot .slick-dots li button::after, .filter-button-default button, .rainbow-card .inner .content .title a, .rainbow-card .inner .thumbnail .card-image img, .rainbow-card, .card-box .inner .content .title a, .service.service__style--2 .content p, .service.service__style--2 .content .title a, .service.service__style--2 .content .title, .service.gallery-style .content p, .service.gallery-style .content .title a, .service.gallery-style .content .title, .service.service__style--1 .content p, .service.service__style--1 .content .title a, .service.service__style--1 .content .title, .service.service__style--1 .icon, .mainmenu-nav .mainmenu li.has-droupdown .submenu li a, .form-group textarea, .form-group input, #scrollUp, ul li a, ol li a {
  transition: var(--transition);
}

.bg_image, .bgImagePosition {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}

.rbt-user-wrapper .rbt-user-menu-list-wrapper {
  position: absolute;
  top: 100%;
  left: 0;
  visibility: hidden;
  clip: rect(0px, 200vw, 0, 0px);
  opacity: 0;
  transition: opacity 0.4s linear, clip 0.6s linear, visibility 0s 0.4s;
  transform: translateZ(0);
}

.rbt-user-wrapper:hover .rbt-user-menu-list-wrapper {
  top: 100%;
  visibility: visible;
  opacity: 1;
  clip: rect(0px, 100vw, 200vh, -30px);
  transition: clip 0.6s linear, opacity 0.4s linear;
}

/*----------------------
    Animation Css  
-----------------------*/
.post-scale {
  overflow: hidden;
}
.post-scale img {
  transition: 0.5s;
}
.post-scale:hover img {
  transform: scale(1.1);
}

@keyframes customOne {
  from {
    transform: scale(1);
  }
  50% {
    transform: scale(0.9);
  }
  to {
    transform: scale(1);
  }
}
@keyframes customTwo {
  0% {
    transform: translate(0px, 0px);
  }
  50% {
    transform: translate(100px, 0px);
  }
  100% {
    transform: translate(50px, 50px);
  }
}
.customOne {
  animation: customOne 2s infinite;
}

/* ------------------------
    Custom Animation 01 
----------------------------*/
@-webkit-keyframes headerSlideDown {
  0% {
    margin-top: -100px;
  }
  to {
    margin-top: 0;
  }
}
@keyframes headerSlideDown {
  0% {
    margin-top: -100px;
  }
  to {
    margin-top: 0;
  }
}
/*------------------------
	slidefadeinup
--------------------------*/
@-webkit-keyframes slideFadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 20%, 0);
    transform: translate3d(0, 20%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
@keyframes slideFadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 20%, 0);
    transform: translate3d(0, 20%, 0);
  }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
.slideFadeInUp {
  -webkit-animation-name: slideFadeInUp;
  animation-name: slideFadeInUp;
}

/* -----------------------------------
    Custom Animation For All Page
---------------------------------------*/
@-webkit-keyframes moveVertical {
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@keyframes moveVertical {
  to {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}
/*--------------------------------
Scroll Down Button Animation  
----------------------------------*/
@keyframes scrollDown {
  0% {
    opacity: 0;
  }
  10% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(10px);
    opacity: 0;
  }
}
/*==============================
 *  Utilities
=================================*/
/* 
font-family: 'Inter', sans-serif;
*/
@media only screen and (max-width: 767px) {
  .container,
  .container-fluid,
  .container-lg,
  .container-md,
  .container-sm,
  .container-xl,
  .container-xxl {
    padding-right: 15px;
    padding-left: 15px;
  }
}

iframe {
  width: 100%;
}

.clearfix:before,
.clearfix:after {
  content: " ";
  display: table;
}

.clearfix:after {
  clear: both;
}

.fix {
  overflow: hidden;
}

/*===============================
    Background Color 
=================================*/
.bg-color-primary {
  background: var(--color-primary);
}

.bg-color-secondary {
  background: var(--color-secondary);
}

.bg-color-tertiary {
  background: var(--color-tertiary);
}

.bg-color-grey {
  background: #F0F2F5;
}

.bg-color-white {
  background: #FFFFFF;
}

.bg-color-black {
  background: #1A1A1A;
}

.bg-color-extra03 {
  background: var(--color-extra03);
}

.bg-color-lessdark {
  background: var(--color-lessdark);
}

.bg-color-2 {
  backdrop-filter: saturate(180%) blur(8px);
  background-color: var(--color-darker);
  background-image: linear-gradient(180deg, var(--color-black), transparent);
}

/*===========================
    Background Image 
=============================*/
.bg_image_fixed {
  background-attachment: fixed !important;
}

.bg_image--1 {
  background-image: url(../images/bg/bg-image-1.jpg);
}

.bg_image--2 {
  background-image: url(../images/bg/bg-image-2.jpg);
}

.bg_image--3 {
  background-image: url(../images/bg/bg-image-3.jpg);
}

.bg_image--4 {
  background-image: url(../images/bg/bg-image-4.jpg);
}

.bg_image--5 {
  background-image: url(../images/bg/bg-image-5.jpg);
}

.bg_image--6 {
  background-image: url(../images/bg/bg-image-6.jpg);
}

.bg_image--7 {
  background-image: url(../images/bg/bg-image-7.jpg);
}

.bg_image--8 {
  background-image: url(../images/bg/bg-image-8.jpg);
}

.bg_image--9 {
  background-image: url(../images/bg/bg-image-9.jpg);
}

.bg_image--10 {
  background-image: url(../images/bg/bg-image-10.jpg);
}

.bg_image--11 {
  background-image: url(../images/bg/bg-image-11.jpg);
}

.bg_image--12 {
  background-image: url(../images/bg/bg-image-12.jpg);
}

.bg_image--13 {
  background-image: url(../images/bg/bg-image-13.jpg);
}

.bg_image--14 {
  background-image: url(../images/bg/bg-image-14.jpg);
}

.bg_image--15 {
  background-image: url(../images/bg/bg-image-15.jpg);
}

.bg_image--16 {
  background-image: url(../images/bg/bg-image-16.jpg);
}

.bg_image--17 {
  background-image: url(../images/bg/bg-image-17.jpg);
}

.bg_image--18 {
  background-image: url(../images/bg/bg-image-18.jpg);
}

.bg_image--19 {
  background-image: url(../images/bg/bg-image-19.jpg);
}

.bg_image--20 {
  background-image: url(../images/bg/bg-image-20.jpg);
}

.bg_image--21 {
  background-image: url(../images/bg/bg-image-21.jpg);
}

.bg_image--22 {
  background-image: url(../images/bg/bg-image-22.jpg);
}

.bg_image--23 {
  background-image: url(../images/bg/bg-image-23.jpg);
}

.bg_image--24 {
  background-image: url(../images/bg/bg-image-24.jpg);
}

.bg_image--25 {
  background-image: url(../images/bg/bg-image-25.jpg);
}

.bg_image--26 {
  background-image: url(../images/bg/bg-image-26.jpg);
}

.bg_image--27 {
  background-image: url(../images/bg/bg-image-27.jpg);
}

.bg_image--28 {
  background-image: url(../images/bg/bg-image-28.jpg);
}

.bg_image--29 {
  background-image: url(../images/bg/bg-image-29.jpg);
}

.bg_image--30 {
  background-image: url(../images/bg/bg-image-30.jpg);
}

/* Height and width */
.fullscreen {
  min-height: 100vh;
  width: 100%;
}

/*===================
Custom Row
======================*/
.row--0 {
  margin-left: 0px;
  margin-right: 0px;
}
.row--0 > [class*=col] {
  padding-left: 0px;
  padding-right: 0px;
}

.row--5 {
  margin-left: -5px;
  margin-right: -5px;
}
.row--5 > [class*=col] {
  padding-left: 5px;
  padding-right: 5px;
}

.row--10 {
  margin-left: -10px;
  margin-right: -10px;
}
.row--10 > [class*=col] {
  padding-left: 10px;
  padding-right: 10px;
}

.row--15 {
  margin-left: -15px;
  margin-right: -15px;
}
.row--15 > [class*=col] {
  padding-left: 15px;
  padding-right: 15px;
}

.row--20 {
  margin-left: -20px;
  margin-right: -20px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--20 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--20 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--20 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .row--20 {
    margin-left: -15px !important;
    margin-right: -15px !important;
  }
}
.row--20 > [class*=col], .row--20 > [class*=col-] {
  padding-left: 20px;
  padding-right: 20px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--20 > [class*=col], .row--20 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--20 > [class*=col], .row--20 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--20 > [class*=col], .row--20 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
@media only screen and (max-width: 767px) {
  .row--20 > [class*=col], .row--20 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

.row--25 {
  margin-left: -25px;
  margin-right: -25px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--25 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--25 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--25 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .row--25 {
    margin-left: -15px !important;
    margin-right: -15px !important;
  }
}
.row--25 > [class*=col], .row--25 > [class*=col-] {
  padding-left: 25px;
  padding-right: 25px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--25 > [class*=col], .row--25 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--25 > [class*=col], .row--25 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--25 > [class*=col], .row--25 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
@media only screen and (max-width: 767px) {
  .row--25 > [class*=col], .row--25 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

.row--30 {
  margin-left: -30px;
  margin-right: -30px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--30 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--30 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--30 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .row--30 {
    margin-left: -15px !important;
    margin-right: -15px !important;
  }
}
.row--30 > [class*=col], .row--30 > [class*=col-] {
  padding-left: 30px;
  padding-right: 30px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--30 > [class*=col], .row--30 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--30 > [class*=col], .row--30 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--30 > [class*=col], .row--30 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
@media only screen and (max-width: 767px) {
  .row--30 > [class*=col], .row--30 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

.row--45 {
  margin-left: -45px;
  margin-right: -45px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--45 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--45 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--45 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .row--45 {
    margin-left: -15px !important;
    margin-right: -15px !important;
  }
}
.row--45 > [class*=col], .row--45 > [class*=col-] {
  padding-left: 45px;
  padding-right: 45px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--45 > [class*=col], .row--45 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--45 > [class*=col], .row--45 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--45 > [class*=col], .row--45 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
@media only screen and (max-width: 767px) {
  .row--45 > [class*=col], .row--45 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

.row--40 {
  margin-left: -40px;
  margin-right: -40px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--40 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--40 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--40 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .row--40 {
    margin-left: -15px !important;
    margin-right: -15px !important;
  }
}
.row--40 > [class*=col], .row--40 > [class*=col-] {
  padding-left: 40px;
  padding-right: 40px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--40 > [class*=col], .row--40 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--40 > [class*=col], .row--40 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--40 > [class*=col], .row--40 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
@media only screen and (max-width: 767px) {
  .row--40 > [class*=col], .row--40 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

.row--60 {
  margin-left: -60px;
  margin-right: -60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--60 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--60 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--60 {
    margin-left: -15px;
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .row--60 {
    margin-left: -15px !important;
    margin-right: -15px !important;
  }
}
.row--60 > [class*=col], .row--60 > [class*=col-] {
  padding-left: 60px;
  padding-right: 60px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .row--60 > [class*=col], .row--60 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .row--60 > [class*=col], .row--60 > [class*=col-] {
    padding-left: 15px;
    padding-right: 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .row--60 > [class*=col], .row--60 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}
@media only screen and (max-width: 767px) {
  .row--60 > [class*=col], .row--60 > [class*=col-] {
    padding-left: 15px !important;
    padding-right: 15px !important;
  }
}

/*===========================
    Input Placeholder
=============================*/
input:-moz-placeholder,
textarea:-moz-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input::-moz-placeholder,
textarea::-moz-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  opacity: 1;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

/*=============================
	Overlay styles 
==============================*/
[data-overlay],
[data-black-overlay],
[data-white-overlay] {
  position: relative;
}

[data-overlay] > div,
[data-overlay] > *,
[data-black-overlay] > div,
[data-black-overlay] > *,
[data-white-overlay] > div,
[data-white-overlay] > * {
  position: relative;
  z-index: 2;
}

[data-overlay]:before,
[data-black-overlay]:before,
[data-white-overlay]:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
}

[data-black-overlay]:before {
  background-color: #000000;
}

[data-white-overlay]:before {
  background-color: #ffffff;
}

[data-overlay="1"]:before,
[data-black-overlay="1"]:before,
[data-white-overlay="1"]:before {
  opacity: 0.1;
}

[data-overlay="2"]:before,
[data-black-overlay="2"]:before,
[data-white-overlay="2"]:before {
  opacity: 0.2;
}

[data-overlay="3"]:before,
[data-black-overlay="3"]:before,
[data-white-overlay="3"]:before {
  opacity: 0.3;
}

[data-overlay="4"]:before,
[data-black-overlay="4"]:before,
[data-white-overlay="4"]:before {
  opacity: 0.4;
}

[data-overlay="5"]:before,
[data-black-overlay="5"]:before,
[data-white-overlay="5"]:before {
  opacity: 0.5;
}

[data-overlay="6"]:before,
[data-black-overlay="6"]:before,
[data-white-overlay="6"]:before {
  opacity: 0.6;
}

[data-overlay="7"]:before,
[data-black-overlay="7"]:before,
[data-white-overlay="7"]:before {
  opacity: 0.7;
}

[data-overlay="8"]:before,
[data-black-overlay="8"]:before,
[data-white-overlay="8"]:before {
  opacity: 0.8;
}

[data-overlay="9"]:before,
[data-black-overlay="9"]:before,
[data-white-overlay="9"]:before {
  opacity: 0.9;
}

[data-overlay="10"]:before,
[data-black-overlay="10"]:before,
[data-white-overlay="10"]:before {
  opacity: 1;
}

/*------------------------------
    Scroll Up 
--------------------------------*/
#scrollUp {
  width: 70px;
  height: 80px;
  right: 100px;
  bottom: 60px;
  text-align: center;
  z-index: 9811 !important;
  text-decoration: none;
  background: #fff;
  line-height: 80px;
  color: #757589;
  font-size: 15px;
  font-weight: 400;
  display: inline-block;
  background: #ffffff;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  #scrollUp {
    right: 20px;
    bottom: 40px;
  }
}
@media only screen and (max-width: 767px) {
  #scrollUp {
    right: 20px;
    bottom: 40px;
  }
}
#scrollUp::before {
  width: 100%;
  height: 100%;
  left: 0;
  bottom: 0;
  background: rgba(0, 2, 72, 0.1);
  content: "";
  position: absolute;
  z-index: -1;
  transform-style: preserve-3d;
  transform: rotateY(-10deg);
  filter: blur(50px);
}
#scrollUp::after {
  background: #ffffff;
  position: absolute;
  content: "";
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  transform-style: preserve-3d;
  transform: rotateY(-10deg);
}
@media only screen and (max-width: 767px) {
  #scrollUp {
    right: 20px;
    bottom: 30px;
    width: 50px;
    height: 60px;
    line-height: 60px;
  }
}
#scrollUp span.text {
  position: relative;
  display: inline-block;
  margin-top: 7px;
}
@media only screen and (max-width: 767px) {
  #scrollUp span.text {
    margin-top: 3px;
  }
}
#scrollUp span.text::after {
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0 5px 7px 5px;
  border-color: transparent transparent var(--color-primary) transparent;
  position: absolute;
  content: "";
  left: 50%;
  top: 21%;
  transform: translateX(-50%);
}
#scrollUp:hover span.text {
  color: var(--color-primary);
}

/*--------------------
    Contact Form 
----------------------*/
.form-message {
  margin-bottom: 0;
  text-align: center;
}
.form-message.error {
  margin-top: 20px;
  color: #f80707;
}
.form-message.success {
  margin-top: 20px;
  color: #0d8d2d;
}

.slick-gutter-15 {
  margin: 0 -15px;
}
.slick-gutter-15 .slick-slide {
  padding: 0 15px;
}

.rbt-alignwide {
  margin-left: -144px;
  margin-right: -144px;
  max-width: 1600px;
  width: auto;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .rbt-alignwide {
    margin-left: -110px;
    margin-right: -110px;
    max-width: 1400px;
    width: auto;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rbt-alignwide {
    margin-left: -50px;
    margin-right: -50px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-alignwide {
    margin-left: -50px;
    margin-right: -50px;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}

.rbt-inner-alignwide {
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media only screen and (min-width: 1400px) {
  .rbt-inner-alignwide {
    max-width: 1290px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .rbt-inner-alignwide {
    max-width: 985px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rbt-inner-alignwide {
    max-width: 948px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-inner-alignwide {
    max-width: 708px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-inner-alignwide {
    max-width: 708px;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-inner-alignwide {
    max-width: 100%;
    padding-right: 15px;
    padding-left: 15px;
  }
}

.padding-top-left-50 {
  padding-top: 50px;
  padding-left: 50px;
}

/*=========================
    Section Separation 
==========================*/
.mt_dec--30 {
  margin-top: -30px;
}

.mt_dec--10 {
  margin-top: -10px;
}

.mb---120 {
  margin-bottom: -120px;
}

.mb---70 {
  margin-bottom: -70px;
}

.rainbow-section-gap {
  padding: 60px 0 !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-section-gap {
    padding: 40px 0 !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-section-gap {
    padding: 30px 0 !important;
  }
}

.rainbow-section-gap-big {
  padding: 120px 0 !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-section-gap-big {
    padding: 80px 0 !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-section-gap-big {
    padding: 60px 0 !important;
  }
}

.rainbow-section-gapBottom {
  padding-bottom: 60px !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-section-gapBottom {
    padding-bottom: 40px !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-section-gapBottom {
    padding-bottom: 30px !important;
  }
}

.rainbow-section-gapBottom-big {
  padding-bottom: 120px !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-section-gapBottom-big {
    padding-bottom: 80px !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-section-gapBottom-big {
    padding-bottom: 60px !important;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .pb--165,
  .pb--85 {
    padding-bottom: 80px !important;
  }
}
@media only screen and (max-width: 767px) {
  .pb--165,
  .pb--85 {
    padding-bottom: 60px !important;
  }
}

.rainbow-section-gapTop {
  padding-top: 60px !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-section-gapTop {
    padding-top: 40px !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-section-gapTop {
    padding-top: 30px !important;
  }
}

.rainbow-section-gapTop-big {
  padding-top: 120px !important;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-section-gapTop-big {
    padding-top: 80px !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-section-gapTop-big {
    padding-top: 60px !important;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .ptb--120 {
    padding: 80px 0 !important;
  }
}
@media only screen and (max-width: 767px) {
  .ptb--120 {
    padding: 60px 0 !important;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .pb--165,
  .pb--120,
  .pb--85,
  .pb--165 {
    padding-bottom: 80px !important;
  }
}
@media only screen and (max-width: 767px) {
  .pb--165,
  .pb--120,
  .pb--85,
  .pb--165 {
    padding-bottom: 60px !important;
  }
}

@media only screen and (max-width: 767px) {
  .pb--70 {
    padding-bottom: 60px !important;
  }
}

.pl--0 {
  padding-left: 0 !important;
}

.pr--0 {
  padding-right: 0 !important;
}

.pt--0 {
  padding-top: 0 !important;
}

.pb--0 {
  padding-bottom: 0 !important;
}

.mr--0 {
  margin-right: 0 !important;
}

.ml--0 {
  margin-left: 0 !important;
}

.mt--0 {
  margin-top: 0 !important;
}

.mb--0 {
  margin-bottom: 0 !important;
}

.pt--260 {
  padding-top: 260px !important;
}

.pt--250 {
  padding-top: 250px !important;
}

.pb--240 {
  padding-bottom: 240px !important;
}

.pb--220 {
  padding-bottom: 220px !important;
}

.plr--270 {
  padding: 0 270px !important;
}

.plr--300 {
  padding: 0 300px !important;
}

.plr--340 {
  padding: 0 340px !important;
}

.ptb--300 {
  padding: 300px 0 !important;
}

.ptb--340 {
  padding: 340px 0 !important;
}

.ptb--450 {
  padding: 450px 0 !important;
}

.plr_dec--15 {
  margin: 0 -15px !important;
}

.pt--300 {
  padding-top: 300px !important;
}

.ptb--5 {
  padding: 5px 0 !important;
}

.plr--5 {
  padding: 0 5px !important;
}

.pt--5 {
  padding-top: 5px !important;
}

.pb--5 {
  padding-bottom: 5px !important;
}

.pl--5 {
  padding-left: 5px !important;
}

.pr--5 {
  padding-right: 5px !important;
}

.mt--5 {
  margin-top: 5px !important;
}

.mb--5 {
  margin-bottom: 5px !important;
}

.mr--5 {
  margin-right: 5px !important;
}

.ml--5 {
  margin-left: 5px !important;
}

.ptb--10 {
  padding: 10px 0 !important;
}

.plr--10 {
  padding: 0 10px !important;
}

.pt--10 {
  padding-top: 10px !important;
}

.pb--10 {
  padding-bottom: 10px !important;
}

.pl--10 {
  padding-left: 10px !important;
}

.pr--10 {
  padding-right: 10px !important;
}

.mt--10 {
  margin-top: 10px !important;
}

.mb--10 {
  margin-bottom: 10px !important;
}

.mr--10 {
  margin-right: 10px !important;
}

.ml--10 {
  margin-left: 10px !important;
}

.ptb--15 {
  padding: 15px 0 !important;
}

.plr--15 {
  padding: 0 15px !important;
}

.pt--15 {
  padding-top: 15px !important;
}

.pb--15 {
  padding-bottom: 15px !important;
}

.pl--15 {
  padding-left: 15px !important;
}

.pr--15 {
  padding-right: 15px !important;
}

.mt--15 {
  margin-top: 15px !important;
}

.mb--15 {
  margin-bottom: 15px !important;
}

.mr--15 {
  margin-right: 15px !important;
}

.ml--15 {
  margin-left: 15px !important;
}

.ptb--20 {
  padding: 20px 0 !important;
}

.plr--20 {
  padding: 0 20px !important;
}

.pt--20 {
  padding-top: 20px !important;
}

.pb--20 {
  padding-bottom: 20px !important;
}

.pl--20 {
  padding-left: 20px !important;
}

.pr--20 {
  padding-right: 20px !important;
}

.mt--20 {
  margin-top: 20px !important;
}

.mb--20 {
  margin-bottom: 20px !important;
}

.mr--20 {
  margin-right: 20px !important;
}

.ml--20 {
  margin-left: 20px !important;
}

.ptb--25 {
  padding: 25px 0 !important;
}

.plr--25 {
  padding: 0 25px !important;
}

.pt--25 {
  padding-top: 25px !important;
}

.pb--25 {
  padding-bottom: 25px !important;
}

.pl--25 {
  padding-left: 25px !important;
}

.pr--25 {
  padding-right: 25px !important;
}

.mt--25 {
  margin-top: 25px !important;
}

.mb--25 {
  margin-bottom: 25px !important;
}

.mr--25 {
  margin-right: 25px !important;
}

.ml--25 {
  margin-left: 25px !important;
}

.ptb--30 {
  padding: 30px 0 !important;
}

.plr--30 {
  padding: 0 30px !important;
}

.pt--30 {
  padding-top: 30px !important;
}

.pb--30 {
  padding-bottom: 30px !important;
}

.pl--30 {
  padding-left: 30px !important;
}

.pr--30 {
  padding-right: 30px !important;
}

.mt--30 {
  margin-top: 30px !important;
}

.mb--30 {
  margin-bottom: 30px !important;
}

.mr--30 {
  margin-right: 30px !important;
}

.ml--30 {
  margin-left: 30px !important;
}

.ptb--35 {
  padding: 35px 0 !important;
}

.plr--35 {
  padding: 0 35px !important;
}

.pt--35 {
  padding-top: 35px !important;
}

.pb--35 {
  padding-bottom: 35px !important;
}

.pl--35 {
  padding-left: 35px !important;
}

.pr--35 {
  padding-right: 35px !important;
}

.mt--35 {
  margin-top: 35px !important;
}

.mb--35 {
  margin-bottom: 35px !important;
}

.mr--35 {
  margin-right: 35px !important;
}

.ml--35 {
  margin-left: 35px !important;
}

.ptb--40 {
  padding: 40px 0 !important;
}

.plr--40 {
  padding: 0 40px !important;
}

.pt--40 {
  padding-top: 40px !important;
}

.pb--40 {
  padding-bottom: 40px !important;
}

.pl--40 {
  padding-left: 40px !important;
}

.pr--40 {
  padding-right: 40px !important;
}

.mt--40 {
  margin-top: 40px !important;
}

.mb--40 {
  margin-bottom: 40px !important;
}

.mr--40 {
  margin-right: 40px !important;
}

.ml--40 {
  margin-left: 40px !important;
}

.ptb--45 {
  padding: 45px 0 !important;
}

.plr--45 {
  padding: 0 45px !important;
}

.pt--45 {
  padding-top: 45px !important;
}

.pb--45 {
  padding-bottom: 45px !important;
}

.pl--45 {
  padding-left: 45px !important;
}

.pr--45 {
  padding-right: 45px !important;
}

.mt--45 {
  margin-top: 45px !important;
}

.mb--45 {
  margin-bottom: 45px !important;
}

.mr--45 {
  margin-right: 45px !important;
}

.ml--45 {
  margin-left: 45px !important;
}

.ptb--50 {
  padding: 50px 0 !important;
}

.plr--50 {
  padding: 0 50px !important;
}

.pt--50 {
  padding-top: 50px !important;
}

.pb--50 {
  padding-bottom: 50px !important;
}

.pl--50 {
  padding-left: 50px !important;
}

.pr--50 {
  padding-right: 50px !important;
}

.mt--50 {
  margin-top: 50px !important;
}

.mb--50 {
  margin-bottom: 50px !important;
}

.mr--50 {
  margin-right: 50px !important;
}

.ml--50 {
  margin-left: 50px !important;
}

.ptb--55 {
  padding: 55px 0 !important;
}

.plr--55 {
  padding: 0 55px !important;
}

.pt--55 {
  padding-top: 55px !important;
}

.pb--55 {
  padding-bottom: 55px !important;
}

.pl--55 {
  padding-left: 55px !important;
}

.pr--55 {
  padding-right: 55px !important;
}

.mt--55 {
  margin-top: 55px !important;
}

.mb--55 {
  margin-bottom: 55px !important;
}

.mr--55 {
  margin-right: 55px !important;
}

.ml--55 {
  margin-left: 55px !important;
}

.ptb--60 {
  padding: 60px 0 !important;
}

.plr--60 {
  padding: 0 60px !important;
}

.pt--60 {
  padding-top: 60px !important;
}

.pb--60 {
  padding-bottom: 60px !important;
}

.pl--60 {
  padding-left: 60px !important;
}

.pr--60 {
  padding-right: 60px !important;
}

.mt--60 {
  margin-top: 60px !important;
}

.mb--60 {
  margin-bottom: 60px !important;
}

.mr--60 {
  margin-right: 60px !important;
}

.ml--60 {
  margin-left: 60px !important;
}

.ptb--65 {
  padding: 65px 0 !important;
}

.plr--65 {
  padding: 0 65px !important;
}

.pt--65 {
  padding-top: 65px !important;
}

.pb--65 {
  padding-bottom: 65px !important;
}

.pl--65 {
  padding-left: 65px !important;
}

.pr--65 {
  padding-right: 65px !important;
}

.mt--65 {
  margin-top: 65px !important;
}

.mb--65 {
  margin-bottom: 65px !important;
}

.mr--65 {
  margin-right: 65px !important;
}

.ml--65 {
  margin-left: 65px !important;
}

.ptb--70 {
  padding: 70px 0 !important;
}

.plr--70 {
  padding: 0 70px !important;
}

.pt--70 {
  padding-top: 70px !important;
}

.pb--70 {
  padding-bottom: 70px !important;
}

.pl--70 {
  padding-left: 70px !important;
}

.pr--70 {
  padding-right: 70px !important;
}

.mt--70 {
  margin-top: 70px !important;
}

.mb--70 {
  margin-bottom: 70px !important;
}

.mr--70 {
  margin-right: 70px !important;
}

.ml--70 {
  margin-left: 70px !important;
}

.ptb--75 {
  padding: 75px 0 !important;
}

.plr--75 {
  padding: 0 75px !important;
}

.pt--75 {
  padding-top: 75px !important;
}

.pb--75 {
  padding-bottom: 75px !important;
}

.pl--75 {
  padding-left: 75px !important;
}

.pr--75 {
  padding-right: 75px !important;
}

.mt--75 {
  margin-top: 75px !important;
}

.mb--75 {
  margin-bottom: 75px !important;
}

.mr--75 {
  margin-right: 75px !important;
}

.ml--75 {
  margin-left: 75px !important;
}

.ptb--80 {
  padding: 80px 0 !important;
}

.plr--80 {
  padding: 0 80px !important;
}

.pt--80 {
  padding-top: 80px !important;
}

.pb--80 {
  padding-bottom: 80px !important;
}

.pl--80 {
  padding-left: 80px !important;
}

.pr--80 {
  padding-right: 80px !important;
}

.mt--80 {
  margin-top: 80px !important;
}

.mb--80 {
  margin-bottom: 80px !important;
}

.mr--80 {
  margin-right: 80px !important;
}

.ml--80 {
  margin-left: 80px !important;
}

.ptb--85 {
  padding: 85px 0 !important;
}

.plr--85 {
  padding: 0 85px !important;
}

.pt--85 {
  padding-top: 85px !important;
}

.pb--85 {
  padding-bottom: 85px !important;
}

.pl--85 {
  padding-left: 85px !important;
}

.pr--85 {
  padding-right: 85px !important;
}

.mt--85 {
  margin-top: 85px !important;
}

.mb--85 {
  margin-bottom: 85px !important;
}

.mr--85 {
  margin-right: 85px !important;
}

.ml--85 {
  margin-left: 85px !important;
}

.ptb--90 {
  padding: 90px 0 !important;
}

.plr--90 {
  padding: 0 90px !important;
}

.pt--90 {
  padding-top: 90px !important;
}

.pb--90 {
  padding-bottom: 90px !important;
}

.pl--90 {
  padding-left: 90px !important;
}

.pr--90 {
  padding-right: 90px !important;
}

.mt--90 {
  margin-top: 90px !important;
}

.mb--90 {
  margin-bottom: 90px !important;
}

.mr--90 {
  margin-right: 90px !important;
}

.ml--90 {
  margin-left: 90px !important;
}

.ptb--95 {
  padding: 95px 0 !important;
}

.plr--95 {
  padding: 0 95px !important;
}

.pt--95 {
  padding-top: 95px !important;
}

.pb--95 {
  padding-bottom: 95px !important;
}

.pl--95 {
  padding-left: 95px !important;
}

.pr--95 {
  padding-right: 95px !important;
}

.mt--95 {
  margin-top: 95px !important;
}

.mb--95 {
  margin-bottom: 95px !important;
}

.mr--95 {
  margin-right: 95px !important;
}

.ml--95 {
  margin-left: 95px !important;
}

.ptb--100 {
  padding: 100px 0 !important;
}

.plr--100 {
  padding: 0 100px !important;
}

.pt--100 {
  padding-top: 100px !important;
}

.pb--100 {
  padding-bottom: 100px !important;
}

.pl--100 {
  padding-left: 100px !important;
}

.pr--100 {
  padding-right: 100px !important;
}

.mt--100 {
  margin-top: 100px !important;
}

.mb--100 {
  margin-bottom: 100px !important;
}

.mr--100 {
  margin-right: 100px !important;
}

.ml--100 {
  margin-left: 100px !important;
}

.ptb--105 {
  padding: 105px 0 !important;
}

.plr--105 {
  padding: 0 105px !important;
}

.pt--105 {
  padding-top: 105px !important;
}

.pb--105 {
  padding-bottom: 105px !important;
}

.pl--105 {
  padding-left: 105px !important;
}

.pr--105 {
  padding-right: 105px !important;
}

.mt--105 {
  margin-top: 105px !important;
}

.mb--105 {
  margin-bottom: 105px !important;
}

.mr--105 {
  margin-right: 105px !important;
}

.ml--105 {
  margin-left: 105px !important;
}

.ptb--110 {
  padding: 110px 0 !important;
}

.plr--110 {
  padding: 0 110px !important;
}

.pt--110 {
  padding-top: 110px !important;
}

.pb--110 {
  padding-bottom: 110px !important;
}

.pl--110 {
  padding-left: 110px !important;
}

.pr--110 {
  padding-right: 110px !important;
}

.mt--110 {
  margin-top: 110px !important;
}

.mb--110 {
  margin-bottom: 110px !important;
}

.mr--110 {
  margin-right: 110px !important;
}

.ml--110 {
  margin-left: 110px !important;
}

.ptb--115 {
  padding: 115px 0 !important;
}

.plr--115 {
  padding: 0 115px !important;
}

.pt--115 {
  padding-top: 115px !important;
}

.pb--115 {
  padding-bottom: 115px !important;
}

.pl--115 {
  padding-left: 115px !important;
}

.pr--115 {
  padding-right: 115px !important;
}

.mt--115 {
  margin-top: 115px !important;
}

.mb--115 {
  margin-bottom: 115px !important;
}

.mr--115 {
  margin-right: 115px !important;
}

.ml--115 {
  margin-left: 115px !important;
}

.ptb--120 {
  padding: 120px 0 !important;
}

.plr--120 {
  padding: 0 120px !important;
}

.pt--120 {
  padding-top: 120px !important;
}

.pb--120 {
  padding-bottom: 120px !important;
}

.pl--120 {
  padding-left: 120px !important;
}

.pr--120 {
  padding-right: 120px !important;
}

.mt--120 {
  margin-top: 120px !important;
}

.mb--120 {
  margin-bottom: 120px !important;
}

.mr--120 {
  margin-right: 120px !important;
}

.ml--120 {
  margin-left: 120px !important;
}

.ptb--125 {
  padding: 125px 0 !important;
}

.plr--125 {
  padding: 0 125px !important;
}

.pt--125 {
  padding-top: 125px !important;
}

.pb--125 {
  padding-bottom: 125px !important;
}

.pl--125 {
  padding-left: 125px !important;
}

.pr--125 {
  padding-right: 125px !important;
}

.mt--125 {
  margin-top: 125px !important;
}

.mb--125 {
  margin-bottom: 125px !important;
}

.mr--125 {
  margin-right: 125px !important;
}

.ml--125 {
  margin-left: 125px !important;
}

.ptb--130 {
  padding: 130px 0 !important;
}

.plr--130 {
  padding: 0 130px !important;
}

.pt--130 {
  padding-top: 130px !important;
}

.pb--130 {
  padding-bottom: 130px !important;
}

.pl--130 {
  padding-left: 130px !important;
}

.pr--130 {
  padding-right: 130px !important;
}

.mt--130 {
  margin-top: 130px !important;
}

.mb--130 {
  margin-bottom: 130px !important;
}

.mr--130 {
  margin-right: 130px !important;
}

.ml--130 {
  margin-left: 130px !important;
}

.ptb--135 {
  padding: 135px 0 !important;
}

.plr--135 {
  padding: 0 135px !important;
}

.pt--135 {
  padding-top: 135px !important;
}

.pb--135 {
  padding-bottom: 135px !important;
}

.pl--135 {
  padding-left: 135px !important;
}

.pr--135 {
  padding-right: 135px !important;
}

.mt--135 {
  margin-top: 135px !important;
}

.mb--135 {
  margin-bottom: 135px !important;
}

.mr--135 {
  margin-right: 135px !important;
}

.ml--135 {
  margin-left: 135px !important;
}

.ptb--140 {
  padding: 140px 0 !important;
}

.plr--140 {
  padding: 0 140px !important;
}

.pt--140 {
  padding-top: 140px !important;
}

.pb--140 {
  padding-bottom: 140px !important;
}

.pl--140 {
  padding-left: 140px !important;
}

.pr--140 {
  padding-right: 140px !important;
}

.mt--140 {
  margin-top: 140px !important;
}

.mb--140 {
  margin-bottom: 140px !important;
}

.mr--140 {
  margin-right: 140px !important;
}

.ml--140 {
  margin-left: 140px !important;
}

.ptb--145 {
  padding: 145px 0 !important;
}

.plr--145 {
  padding: 0 145px !important;
}

.pt--145 {
  padding-top: 145px !important;
}

.pb--145 {
  padding-bottom: 145px !important;
}

.pl--145 {
  padding-left: 145px !important;
}

.pr--145 {
  padding-right: 145px !important;
}

.mt--145 {
  margin-top: 145px !important;
}

.mb--145 {
  margin-bottom: 145px !important;
}

.mr--145 {
  margin-right: 145px !important;
}

.ml--145 {
  margin-left: 145px !important;
}

.ptb--150 {
  padding: 150px 0 !important;
}

.plr--150 {
  padding: 0 150px !important;
}

.pt--150 {
  padding-top: 150px !important;
}

.pb--150 {
  padding-bottom: 150px !important;
}

.pl--150 {
  padding-left: 150px !important;
}

.pr--150 {
  padding-right: 150px !important;
}

.mt--150 {
  margin-top: 150px !important;
}

.mb--150 {
  margin-bottom: 150px !important;
}

.mr--150 {
  margin-right: 150px !important;
}

.ml--150 {
  margin-left: 150px !important;
}

.ptb--155 {
  padding: 155px 0 !important;
}

.plr--155 {
  padding: 0 155px !important;
}

.pt--155 {
  padding-top: 155px !important;
}

.pb--155 {
  padding-bottom: 155px !important;
}

.pl--155 {
  padding-left: 155px !important;
}

.pr--155 {
  padding-right: 155px !important;
}

.mt--155 {
  margin-top: 155px !important;
}

.mb--155 {
  margin-bottom: 155px !important;
}

.mr--155 {
  margin-right: 155px !important;
}

.ml--155 {
  margin-left: 155px !important;
}

.ptb--160 {
  padding: 160px 0 !important;
}

.plr--160 {
  padding: 0 160px !important;
}

.pt--160 {
  padding-top: 160px !important;
}

.pb--160 {
  padding-bottom: 160px !important;
}

.pl--160 {
  padding-left: 160px !important;
}

.pr--160 {
  padding-right: 160px !important;
}

.mt--160 {
  margin-top: 160px !important;
}

.mb--160 {
  margin-bottom: 160px !important;
}

.mr--160 {
  margin-right: 160px !important;
}

.ml--160 {
  margin-left: 160px !important;
}

.ptb--165 {
  padding: 165px 0 !important;
}

.plr--165 {
  padding: 0 165px !important;
}

.pt--165 {
  padding-top: 165px !important;
}

.pb--165 {
  padding-bottom: 165px !important;
}

.pl--165 {
  padding-left: 165px !important;
}

.pr--165 {
  padding-right: 165px !important;
}

.mt--165 {
  margin-top: 165px !important;
}

.mb--165 {
  margin-bottom: 165px !important;
}

.mr--165 {
  margin-right: 165px !important;
}

.ml--165 {
  margin-left: 165px !important;
}

.ptb--170 {
  padding: 170px 0 !important;
}

.plr--170 {
  padding: 0 170px !important;
}

.pt--170 {
  padding-top: 170px !important;
}

.pb--170 {
  padding-bottom: 170px !important;
}

.pl--170 {
  padding-left: 170px !important;
}

.pr--170 {
  padding-right: 170px !important;
}

.mt--170 {
  margin-top: 170px !important;
}

.mb--170 {
  margin-bottom: 170px !important;
}

.mr--170 {
  margin-right: 170px !important;
}

.ml--170 {
  margin-left: 170px !important;
}

.ptb--175 {
  padding: 175px 0 !important;
}

.plr--175 {
  padding: 0 175px !important;
}

.pt--175 {
  padding-top: 175px !important;
}

.pb--175 {
  padding-bottom: 175px !important;
}

.pl--175 {
  padding-left: 175px !important;
}

.pr--175 {
  padding-right: 175px !important;
}

.mt--175 {
  margin-top: 175px !important;
}

.mb--175 {
  margin-bottom: 175px !important;
}

.mr--175 {
  margin-right: 175px !important;
}

.ml--175 {
  margin-left: 175px !important;
}

.ptb--180 {
  padding: 180px 0 !important;
}

.plr--180 {
  padding: 0 180px !important;
}

.pt--180 {
  padding-top: 180px !important;
}

.pb--180 {
  padding-bottom: 180px !important;
}

.pl--180 {
  padding-left: 180px !important;
}

.pr--180 {
  padding-right: 180px !important;
}

.mt--180 {
  margin-top: 180px !important;
}

.mb--180 {
  margin-bottom: 180px !important;
}

.mr--180 {
  margin-right: 180px !important;
}

.ml--180 {
  margin-left: 180px !important;
}

.ptb--185 {
  padding: 185px 0 !important;
}

.plr--185 {
  padding: 0 185px !important;
}

.pt--185 {
  padding-top: 185px !important;
}

.pb--185 {
  padding-bottom: 185px !important;
}

.pl--185 {
  padding-left: 185px !important;
}

.pr--185 {
  padding-right: 185px !important;
}

.mt--185 {
  margin-top: 185px !important;
}

.mb--185 {
  margin-bottom: 185px !important;
}

.mr--185 {
  margin-right: 185px !important;
}

.ml--185 {
  margin-left: 185px !important;
}

.ptb--190 {
  padding: 190px 0 !important;
}

.plr--190 {
  padding: 0 190px !important;
}

.pt--190 {
  padding-top: 190px !important;
}

.pb--190 {
  padding-bottom: 190px !important;
}

.pl--190 {
  padding-left: 190px !important;
}

.pr--190 {
  padding-right: 190px !important;
}

.mt--190 {
  margin-top: 190px !important;
}

.mb--190 {
  margin-bottom: 190px !important;
}

.mr--190 {
  margin-right: 190px !important;
}

.ml--190 {
  margin-left: 190px !important;
}

.ptb--195 {
  padding: 195px 0 !important;
}

.plr--195 {
  padding: 0 195px !important;
}

.pt--195 {
  padding-top: 195px !important;
}

.pb--195 {
  padding-bottom: 195px !important;
}

.pl--195 {
  padding-left: 195px !important;
}

.pr--195 {
  padding-right: 195px !important;
}

.mt--195 {
  margin-top: 195px !important;
}

.mb--195 {
  margin-bottom: 195px !important;
}

.mr--195 {
  margin-right: 195px !important;
}

.ml--195 {
  margin-left: 195px !important;
}

.ptb--200 {
  padding: 200px 0 !important;
}

.plr--200 {
  padding: 0 200px !important;
}

.pt--200 {
  padding-top: 200px !important;
}

.pb--200 {
  padding-bottom: 200px !important;
}

.pl--200 {
  padding-left: 200px !important;
}

.pr--200 {
  padding-right: 200px !important;
}

.mt--200 {
  margin-top: 200px !important;
}

.mb--200 {
  margin-bottom: 200px !important;
}

.mr--200 {
  margin-right: 200px !important;
}

.ml--200 {
  margin-left: 200px !important;
}

@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .ptb_lp--5 {
    padding: 5px 0 !important;
  }
  .plr_lp--5 {
    padding: 0 5px !important;
  }
  .pt_lp--5 {
    padding-top: 5px !important;
  }
  .pb_lp--5 {
    padding-bottom: 5px !important;
  }
  .pl_lp--5 {
    padding-left: 5px !important;
  }
  .pr_lp--5 {
    padding-right: 5px !important;
  }
  .mt_lp--5 {
    margin-top: 5px !important;
  }
  .mb_lp--5 {
    margin-bottom: 5px !important;
  }
  .ptb_lp--10 {
    padding: 10px 0 !important;
  }
  .plr_lp--10 {
    padding: 0 10px !important;
  }
  .pt_lp--10 {
    padding-top: 10px !important;
  }
  .pb_lp--10 {
    padding-bottom: 10px !important;
  }
  .pl_lp--10 {
    padding-left: 10px !important;
  }
  .pr_lp--10 {
    padding-right: 10px !important;
  }
  .mt_lp--10 {
    margin-top: 10px !important;
  }
  .mb_lp--10 {
    margin-bottom: 10px !important;
  }
  .ptb_lp--15 {
    padding: 15px 0 !important;
  }
  .plr_lp--15 {
    padding: 0 15px !important;
  }
  .pt_lp--15 {
    padding-top: 15px !important;
  }
  .pb_lp--15 {
    padding-bottom: 15px !important;
  }
  .pl_lp--15 {
    padding-left: 15px !important;
  }
  .pr_lp--15 {
    padding-right: 15px !important;
  }
  .mt_lp--15 {
    margin-top: 15px !important;
  }
  .mb_lp--15 {
    margin-bottom: 15px !important;
  }
  .ptb_lp--20 {
    padding: 20px 0 !important;
  }
  .plr_lp--20 {
    padding: 0 20px !important;
  }
  .pt_lp--20 {
    padding-top: 20px !important;
  }
  .pb_lp--20 {
    padding-bottom: 20px !important;
  }
  .pl_lp--20 {
    padding-left: 20px !important;
  }
  .pr_lp--20 {
    padding-right: 20px !important;
  }
  .mt_lp--20 {
    margin-top: 20px !important;
  }
  .mb_lp--20 {
    margin-bottom: 20px !important;
  }
  .ptb_lp--25 {
    padding: 25px 0 !important;
  }
  .plr_lp--25 {
    padding: 0 25px !important;
  }
  .pt_lp--25 {
    padding-top: 25px !important;
  }
  .pb_lp--25 {
    padding-bottom: 25px !important;
  }
  .pl_lp--25 {
    padding-left: 25px !important;
  }
  .pr_lp--25 {
    padding-right: 25px !important;
  }
  .mt_lp--25 {
    margin-top: 25px !important;
  }
  .mb_lp--25 {
    margin-bottom: 25px !important;
  }
  .ptb_lp--30 {
    padding: 30px 0 !important;
  }
  .plr_lp--30 {
    padding: 0 30px !important;
  }
  .pt_lp--30 {
    padding-top: 30px !important;
  }
  .pb_lp--30 {
    padding-bottom: 30px !important;
  }
  .pl_lp--30 {
    padding-left: 30px !important;
  }
  .pr_lp--30 {
    padding-right: 30px !important;
  }
  .mt_lp--30 {
    margin-top: 30px !important;
  }
  .mb_lp--30 {
    margin-bottom: 30px !important;
  }
  .ptb_lp--35 {
    padding: 35px 0 !important;
  }
  .plr_lp--35 {
    padding: 0 35px !important;
  }
  .pt_lp--35 {
    padding-top: 35px !important;
  }
  .pb_lp--35 {
    padding-bottom: 35px !important;
  }
  .pl_lp--35 {
    padding-left: 35px !important;
  }
  .pr_lp--35 {
    padding-right: 35px !important;
  }
  .mt_lp--35 {
    margin-top: 35px !important;
  }
  .mb_lp--35 {
    margin-bottom: 35px !important;
  }
  .ptb_lp--40 {
    padding: 40px 0 !important;
  }
  .plr_lp--40 {
    padding: 0 40px !important;
  }
  .pt_lp--40 {
    padding-top: 40px !important;
  }
  .pb_lp--40 {
    padding-bottom: 40px !important;
  }
  .pl_lp--40 {
    padding-left: 40px !important;
  }
  .pr_lp--40 {
    padding-right: 40px !important;
  }
  .mt_lp--40 {
    margin-top: 40px !important;
  }
  .mb_lp--40 {
    margin-bottom: 40px !important;
  }
  .ptb_lp--45 {
    padding: 45px 0 !important;
  }
  .plr_lp--45 {
    padding: 0 45px !important;
  }
  .pt_lp--45 {
    padding-top: 45px !important;
  }
  .pb_lp--45 {
    padding-bottom: 45px !important;
  }
  .pl_lp--45 {
    padding-left: 45px !important;
  }
  .pr_lp--45 {
    padding-right: 45px !important;
  }
  .mt_lp--45 {
    margin-top: 45px !important;
  }
  .mb_lp--45 {
    margin-bottom: 45px !important;
  }
  .ptb_lp--50 {
    padding: 50px 0 !important;
  }
  .plr_lp--50 {
    padding: 0 50px !important;
  }
  .pt_lp--50 {
    padding-top: 50px !important;
  }
  .pb_lp--50 {
    padding-bottom: 50px !important;
  }
  .pl_lp--50 {
    padding-left: 50px !important;
  }
  .pr_lp--50 {
    padding-right: 50px !important;
  }
  .mt_lp--50 {
    margin-top: 50px !important;
  }
  .mb_lp--50 {
    margin-bottom: 50px !important;
  }
  .ptb_lp--55 {
    padding: 55px 0 !important;
  }
  .plr_lp--55 {
    padding: 0 55px !important;
  }
  .pt_lp--55 {
    padding-top: 55px !important;
  }
  .pb_lp--55 {
    padding-bottom: 55px !important;
  }
  .pl_lp--55 {
    padding-left: 55px !important;
  }
  .pr_lp--55 {
    padding-right: 55px !important;
  }
  .mt_lp--55 {
    margin-top: 55px !important;
  }
  .mb_lp--55 {
    margin-bottom: 55px !important;
  }
  .ptb_lp--60 {
    padding: 60px 0 !important;
  }
  .plr_lp--60 {
    padding: 0 60px !important;
  }
  .pt_lp--60 {
    padding-top: 60px !important;
  }
  .pb_lp--60 {
    padding-bottom: 60px !important;
  }
  .pl_lp--60 {
    padding-left: 60px !important;
  }
  .pr_lp--60 {
    padding-right: 60px !important;
  }
  .mt_lp--60 {
    margin-top: 60px !important;
  }
  .mb_lp--60 {
    margin-bottom: 60px !important;
  }
  .ptb_lp--65 {
    padding: 65px 0 !important;
  }
  .plr_lp--65 {
    padding: 0 65px !important;
  }
  .pt_lp--65 {
    padding-top: 65px !important;
  }
  .pb_lp--65 {
    padding-bottom: 65px !important;
  }
  .pl_lp--65 {
    padding-left: 65px !important;
  }
  .pr_lp--65 {
    padding-right: 65px !important;
  }
  .mt_lp--65 {
    margin-top: 65px !important;
  }
  .mb_lp--65 {
    margin-bottom: 65px !important;
  }
  .ptb_lp--70 {
    padding: 70px 0 !important;
  }
  .plr_lp--70 {
    padding: 0 70px !important;
  }
  .pt_lp--70 {
    padding-top: 70px !important;
  }
  .pb_lp--70 {
    padding-bottom: 70px !important;
  }
  .pl_lp--70 {
    padding-left: 70px !important;
  }
  .pr_lp--70 {
    padding-right: 70px !important;
  }
  .mt_lp--70 {
    margin-top: 70px !important;
  }
  .mb_lp--70 {
    margin-bottom: 70px !important;
  }
  .ptb_lp--75 {
    padding: 75px 0 !important;
  }
  .plr_lp--75 {
    padding: 0 75px !important;
  }
  .pt_lp--75 {
    padding-top: 75px !important;
  }
  .pb_lp--75 {
    padding-bottom: 75px !important;
  }
  .pl_lp--75 {
    padding-left: 75px !important;
  }
  .pr_lp--75 {
    padding-right: 75px !important;
  }
  .mt_lp--75 {
    margin-top: 75px !important;
  }
  .mb_lp--75 {
    margin-bottom: 75px !important;
  }
  .ptb_lp--80 {
    padding: 80px 0 !important;
  }
  .plr_lp--80 {
    padding: 0 80px !important;
  }
  .pt_lp--80 {
    padding-top: 80px !important;
  }
  .pb_lp--80 {
    padding-bottom: 80px !important;
  }
  .pl_lp--80 {
    padding-left: 80px !important;
  }
  .pr_lp--80 {
    padding-right: 80px !important;
  }
  .mt_lp--80 {
    margin-top: 80px !important;
  }
  .mb_lp--80 {
    margin-bottom: 80px !important;
  }
  .ptb_lp--85 {
    padding: 85px 0 !important;
  }
  .plr_lp--85 {
    padding: 0 85px !important;
  }
  .pt_lp--85 {
    padding-top: 85px !important;
  }
  .pb_lp--85 {
    padding-bottom: 85px !important;
  }
  .pl_lp--85 {
    padding-left: 85px !important;
  }
  .pr_lp--85 {
    padding-right: 85px !important;
  }
  .mt_lp--85 {
    margin-top: 85px !important;
  }
  .mb_lp--85 {
    margin-bottom: 85px !important;
  }
  .ptb_lp--90 {
    padding: 90px 0 !important;
  }
  .plr_lp--90 {
    padding: 0 90px !important;
  }
  .pt_lp--90 {
    padding-top: 90px !important;
  }
  .pb_lp--90 {
    padding-bottom: 90px !important;
  }
  .pl_lp--90 {
    padding-left: 90px !important;
  }
  .pr_lp--90 {
    padding-right: 90px !important;
  }
  .mt_lp--90 {
    margin-top: 90px !important;
  }
  .mb_lp--90 {
    margin-bottom: 90px !important;
  }
  .ptb_lp--95 {
    padding: 95px 0 !important;
  }
  .plr_lp--95 {
    padding: 0 95px !important;
  }
  .pt_lp--95 {
    padding-top: 95px !important;
  }
  .pb_lp--95 {
    padding-bottom: 95px !important;
  }
  .pl_lp--95 {
    padding-left: 95px !important;
  }
  .pr_lp--95 {
    padding-right: 95px !important;
  }
  .mt_lp--95 {
    margin-top: 95px !important;
  }
  .mb_lp--95 {
    margin-bottom: 95px !important;
  }
  .ptb_lp--100 {
    padding: 100px 0 !important;
  }
  .plr_lp--100 {
    padding: 0 100px !important;
  }
  .pt_lp--100 {
    padding-top: 100px !important;
  }
  .pb_lp--100 {
    padding-bottom: 100px !important;
  }
  .pl_lp--100 {
    padding-left: 100px !important;
  }
  .pr_lp--100 {
    padding-right: 100px !important;
  }
  .mt_lp--100 {
    margin-top: 100px !important;
  }
  .mb_lp--100 {
    margin-bottom: 100px !important;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .ptb_lg--5 {
    padding: 5px 0 !important;
  }
  .plr_lg--5 {
    padding: 0 5px !important;
  }
  .pt_lg--5 {
    padding-top: 5px !important;
  }
  .pb_lg--5 {
    padding-bottom: 5px !important;
  }
  .pl_lg--5 {
    padding-left: 5px !important;
  }
  .pr_lg--5 {
    padding-right: 5px !important;
  }
  .mt_lg--5 {
    margin-top: 5px !important;
  }
  .mb_lg--5 {
    margin-bottom: 5px !important;
  }
  .ml_lg--5 {
    margin-left: 5px !important;
  }
  .ptb_lg--10 {
    padding: 10px 0 !important;
  }
  .plr_lg--10 {
    padding: 0 10px !important;
  }
  .pt_lg--10 {
    padding-top: 10px !important;
  }
  .pb_lg--10 {
    padding-bottom: 10px !important;
  }
  .pl_lg--10 {
    padding-left: 10px !important;
  }
  .pr_lg--10 {
    padding-right: 10px !important;
  }
  .mt_lg--10 {
    margin-top: 10px !important;
  }
  .mb_lg--10 {
    margin-bottom: 10px !important;
  }
  .ml_lg--10 {
    margin-left: 10px !important;
  }
  .ptb_lg--15 {
    padding: 15px 0 !important;
  }
  .plr_lg--15 {
    padding: 0 15px !important;
  }
  .pt_lg--15 {
    padding-top: 15px !important;
  }
  .pb_lg--15 {
    padding-bottom: 15px !important;
  }
  .pl_lg--15 {
    padding-left: 15px !important;
  }
  .pr_lg--15 {
    padding-right: 15px !important;
  }
  .mt_lg--15 {
    margin-top: 15px !important;
  }
  .mb_lg--15 {
    margin-bottom: 15px !important;
  }
  .ml_lg--15 {
    margin-left: 15px !important;
  }
  .ptb_lg--20 {
    padding: 20px 0 !important;
  }
  .plr_lg--20 {
    padding: 0 20px !important;
  }
  .pt_lg--20 {
    padding-top: 20px !important;
  }
  .pb_lg--20 {
    padding-bottom: 20px !important;
  }
  .pl_lg--20 {
    padding-left: 20px !important;
  }
  .pr_lg--20 {
    padding-right: 20px !important;
  }
  .mt_lg--20 {
    margin-top: 20px !important;
  }
  .mb_lg--20 {
    margin-bottom: 20px !important;
  }
  .ml_lg--20 {
    margin-left: 20px !important;
  }
  .ptb_lg--25 {
    padding: 25px 0 !important;
  }
  .plr_lg--25 {
    padding: 0 25px !important;
  }
  .pt_lg--25 {
    padding-top: 25px !important;
  }
  .pb_lg--25 {
    padding-bottom: 25px !important;
  }
  .pl_lg--25 {
    padding-left: 25px !important;
  }
  .pr_lg--25 {
    padding-right: 25px !important;
  }
  .mt_lg--25 {
    margin-top: 25px !important;
  }
  .mb_lg--25 {
    margin-bottom: 25px !important;
  }
  .ml_lg--25 {
    margin-left: 25px !important;
  }
  .ptb_lg--30 {
    padding: 30px 0 !important;
  }
  .plr_lg--30 {
    padding: 0 30px !important;
  }
  .pt_lg--30 {
    padding-top: 30px !important;
  }
  .pb_lg--30 {
    padding-bottom: 30px !important;
  }
  .pl_lg--30 {
    padding-left: 30px !important;
  }
  .pr_lg--30 {
    padding-right: 30px !important;
  }
  .mt_lg--30 {
    margin-top: 30px !important;
  }
  .mb_lg--30 {
    margin-bottom: 30px !important;
  }
  .ml_lg--30 {
    margin-left: 30px !important;
  }
  .ptb_lg--35 {
    padding: 35px 0 !important;
  }
  .plr_lg--35 {
    padding: 0 35px !important;
  }
  .pt_lg--35 {
    padding-top: 35px !important;
  }
  .pb_lg--35 {
    padding-bottom: 35px !important;
  }
  .pl_lg--35 {
    padding-left: 35px !important;
  }
  .pr_lg--35 {
    padding-right: 35px !important;
  }
  .mt_lg--35 {
    margin-top: 35px !important;
  }
  .mb_lg--35 {
    margin-bottom: 35px !important;
  }
  .ml_lg--35 {
    margin-left: 35px !important;
  }
  .ptb_lg--40 {
    padding: 40px 0 !important;
  }
  .plr_lg--40 {
    padding: 0 40px !important;
  }
  .pt_lg--40 {
    padding-top: 40px !important;
  }
  .pb_lg--40 {
    padding-bottom: 40px !important;
  }
  .pl_lg--40 {
    padding-left: 40px !important;
  }
  .pr_lg--40 {
    padding-right: 40px !important;
  }
  .mt_lg--40 {
    margin-top: 40px !important;
  }
  .mb_lg--40 {
    margin-bottom: 40px !important;
  }
  .ml_lg--40 {
    margin-left: 40px !important;
  }
  .ptb_lg--45 {
    padding: 45px 0 !important;
  }
  .plr_lg--45 {
    padding: 0 45px !important;
  }
  .pt_lg--45 {
    padding-top: 45px !important;
  }
  .pb_lg--45 {
    padding-bottom: 45px !important;
  }
  .pl_lg--45 {
    padding-left: 45px !important;
  }
  .pr_lg--45 {
    padding-right: 45px !important;
  }
  .mt_lg--45 {
    margin-top: 45px !important;
  }
  .mb_lg--45 {
    margin-bottom: 45px !important;
  }
  .ml_lg--45 {
    margin-left: 45px !important;
  }
  .ptb_lg--50 {
    padding: 50px 0 !important;
  }
  .plr_lg--50 {
    padding: 0 50px !important;
  }
  .pt_lg--50 {
    padding-top: 50px !important;
  }
  .pb_lg--50 {
    padding-bottom: 50px !important;
  }
  .pl_lg--50 {
    padding-left: 50px !important;
  }
  .pr_lg--50 {
    padding-right: 50px !important;
  }
  .mt_lg--50 {
    margin-top: 50px !important;
  }
  .mb_lg--50 {
    margin-bottom: 50px !important;
  }
  .ml_lg--50 {
    margin-left: 50px !important;
  }
  .ptb_lg--55 {
    padding: 55px 0 !important;
  }
  .plr_lg--55 {
    padding: 0 55px !important;
  }
  .pt_lg--55 {
    padding-top: 55px !important;
  }
  .pb_lg--55 {
    padding-bottom: 55px !important;
  }
  .pl_lg--55 {
    padding-left: 55px !important;
  }
  .pr_lg--55 {
    padding-right: 55px !important;
  }
  .mt_lg--55 {
    margin-top: 55px !important;
  }
  .mb_lg--55 {
    margin-bottom: 55px !important;
  }
  .ml_lg--55 {
    margin-left: 55px !important;
  }
  .ptb_lg--60 {
    padding: 60px 0 !important;
  }
  .plr_lg--60 {
    padding: 0 60px !important;
  }
  .pt_lg--60 {
    padding-top: 60px !important;
  }
  .pb_lg--60 {
    padding-bottom: 60px !important;
  }
  .pl_lg--60 {
    padding-left: 60px !important;
  }
  .pr_lg--60 {
    padding-right: 60px !important;
  }
  .mt_lg--60 {
    margin-top: 60px !important;
  }
  .mb_lg--60 {
    margin-bottom: 60px !important;
  }
  .ml_lg--60 {
    margin-left: 60px !important;
  }
  .ptb_lg--65 {
    padding: 65px 0 !important;
  }
  .plr_lg--65 {
    padding: 0 65px !important;
  }
  .pt_lg--65 {
    padding-top: 65px !important;
  }
  .pb_lg--65 {
    padding-bottom: 65px !important;
  }
  .pl_lg--65 {
    padding-left: 65px !important;
  }
  .pr_lg--65 {
    padding-right: 65px !important;
  }
  .mt_lg--65 {
    margin-top: 65px !important;
  }
  .mb_lg--65 {
    margin-bottom: 65px !important;
  }
  .ml_lg--65 {
    margin-left: 65px !important;
  }
  .ptb_lg--70 {
    padding: 70px 0 !important;
  }
  .plr_lg--70 {
    padding: 0 70px !important;
  }
  .pt_lg--70 {
    padding-top: 70px !important;
  }
  .pb_lg--70 {
    padding-bottom: 70px !important;
  }
  .pl_lg--70 {
    padding-left: 70px !important;
  }
  .pr_lg--70 {
    padding-right: 70px !important;
  }
  .mt_lg--70 {
    margin-top: 70px !important;
  }
  .mb_lg--70 {
    margin-bottom: 70px !important;
  }
  .ml_lg--70 {
    margin-left: 70px !important;
  }
  .ptb_lg--75 {
    padding: 75px 0 !important;
  }
  .plr_lg--75 {
    padding: 0 75px !important;
  }
  .pt_lg--75 {
    padding-top: 75px !important;
  }
  .pb_lg--75 {
    padding-bottom: 75px !important;
  }
  .pl_lg--75 {
    padding-left: 75px !important;
  }
  .pr_lg--75 {
    padding-right: 75px !important;
  }
  .mt_lg--75 {
    margin-top: 75px !important;
  }
  .mb_lg--75 {
    margin-bottom: 75px !important;
  }
  .ml_lg--75 {
    margin-left: 75px !important;
  }
  .ptb_lg--80 {
    padding: 80px 0 !important;
  }
  .plr_lg--80 {
    padding: 0 80px !important;
  }
  .pt_lg--80 {
    padding-top: 80px !important;
  }
  .pb_lg--80 {
    padding-bottom: 80px !important;
  }
  .pl_lg--80 {
    padding-left: 80px !important;
  }
  .pr_lg--80 {
    padding-right: 80px !important;
  }
  .mt_lg--80 {
    margin-top: 80px !important;
  }
  .mb_lg--80 {
    margin-bottom: 80px !important;
  }
  .ml_lg--80 {
    margin-left: 80px !important;
  }
  .ptb_lg--85 {
    padding: 85px 0 !important;
  }
  .plr_lg--85 {
    padding: 0 85px !important;
  }
  .pt_lg--85 {
    padding-top: 85px !important;
  }
  .pb_lg--85 {
    padding-bottom: 85px !important;
  }
  .pl_lg--85 {
    padding-left: 85px !important;
  }
  .pr_lg--85 {
    padding-right: 85px !important;
  }
  .mt_lg--85 {
    margin-top: 85px !important;
  }
  .mb_lg--85 {
    margin-bottom: 85px !important;
  }
  .ml_lg--85 {
    margin-left: 85px !important;
  }
  .ptb_lg--90 {
    padding: 90px 0 !important;
  }
  .plr_lg--90 {
    padding: 0 90px !important;
  }
  .pt_lg--90 {
    padding-top: 90px !important;
  }
  .pb_lg--90 {
    padding-bottom: 90px !important;
  }
  .pl_lg--90 {
    padding-left: 90px !important;
  }
  .pr_lg--90 {
    padding-right: 90px !important;
  }
  .mt_lg--90 {
    margin-top: 90px !important;
  }
  .mb_lg--90 {
    margin-bottom: 90px !important;
  }
  .ml_lg--90 {
    margin-left: 90px !important;
  }
  .ptb_lg--95 {
    padding: 95px 0 !important;
  }
  .plr_lg--95 {
    padding: 0 95px !important;
  }
  .pt_lg--95 {
    padding-top: 95px !important;
  }
  .pb_lg--95 {
    padding-bottom: 95px !important;
  }
  .pl_lg--95 {
    padding-left: 95px !important;
  }
  .pr_lg--95 {
    padding-right: 95px !important;
  }
  .mt_lg--95 {
    margin-top: 95px !important;
  }
  .mb_lg--95 {
    margin-bottom: 95px !important;
  }
  .ml_lg--95 {
    margin-left: 95px !important;
  }
  .ptb_lg--100 {
    padding: 100px 0 !important;
  }
  .plr_lg--100 {
    padding: 0 100px !important;
  }
  .pt_lg--100 {
    padding-top: 100px !important;
  }
  .pb_lg--100 {
    padding-bottom: 100px !important;
  }
  .pl_lg--100 {
    padding-left: 100px !important;
  }
  .pr_lg--100 {
    padding-right: 100px !important;
  }
  .mt_lg--100 {
    margin-top: 100px !important;
  }
  .mb_lg--100 {
    margin-bottom: 100px !important;
  }
  .ml_lg--100 {
    margin-left: 100px !important;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .ptb_md--0 {
    padding: 0 !important;
  }
  .pl_md--0 {
    padding-left: 0 !important;
  }
  .pr_md--0 {
    padding-right: 0 !important;
  }
  .pt_md--0 {
    padding-top: 0 !important;
  }
  .pb_md--0 {
    padding-bottom: 0 !important;
  }
  .mr_md--0 {
    margin-right: 0 !important;
  }
  .ml_md--0 {
    margin-left: 0 !important;
  }
  .mt_md--0 {
    margin-top: 0 !important;
  }
  .mb_md--0 {
    margin-bottom: 0 !important;
  }
  .ptb_md--250 {
    padding: 250px 0 !important;
  }
  .ptb_md--5 {
    padding: 5px 0 !important;
  }
  .plr_md--5 {
    padding: 0 5px !important;
  }
  .pt_md--5 {
    padding-top: 5px !important;
  }
  .pb_md--5 {
    padding-bottom: 5px !important;
  }
  .pl_md--5 {
    padding-left: 5px !important;
  }
  .pr_md--5 {
    padding-right: 5px !important;
  }
  .mt_md--5 {
    margin-top: 5px !important;
  }
  .mb_md--5 {
    margin-bottom: 5px !important;
  }
  .ptb_md--10 {
    padding: 10px 0 !important;
  }
  .plr_md--10 {
    padding: 0 10px !important;
  }
  .pt_md--10 {
    padding-top: 10px !important;
  }
  .pb_md--10 {
    padding-bottom: 10px !important;
  }
  .pl_md--10 {
    padding-left: 10px !important;
  }
  .pr_md--10 {
    padding-right: 10px !important;
  }
  .mt_md--10 {
    margin-top: 10px !important;
  }
  .mb_md--10 {
    margin-bottom: 10px !important;
  }
  .ptb_md--15 {
    padding: 15px 0 !important;
  }
  .plr_md--15 {
    padding: 0 15px !important;
  }
  .pt_md--15 {
    padding-top: 15px !important;
  }
  .pb_md--15 {
    padding-bottom: 15px !important;
  }
  .pl_md--15 {
    padding-left: 15px !important;
  }
  .pr_md--15 {
    padding-right: 15px !important;
  }
  .mt_md--15 {
    margin-top: 15px !important;
  }
  .mb_md--15 {
    margin-bottom: 15px !important;
  }
  .ptb_md--20 {
    padding: 20px 0 !important;
  }
  .plr_md--20 {
    padding: 0 20px !important;
  }
  .pt_md--20 {
    padding-top: 20px !important;
  }
  .pb_md--20 {
    padding-bottom: 20px !important;
  }
  .pl_md--20 {
    padding-left: 20px !important;
  }
  .pr_md--20 {
    padding-right: 20px !important;
  }
  .mt_md--20 {
    margin-top: 20px !important;
  }
  .mb_md--20 {
    margin-bottom: 20px !important;
  }
  .ptb_md--25 {
    padding: 25px 0 !important;
  }
  .plr_md--25 {
    padding: 0 25px !important;
  }
  .pt_md--25 {
    padding-top: 25px !important;
  }
  .pb_md--25 {
    padding-bottom: 25px !important;
  }
  .pl_md--25 {
    padding-left: 25px !important;
  }
  .pr_md--25 {
    padding-right: 25px !important;
  }
  .mt_md--25 {
    margin-top: 25px !important;
  }
  .mb_md--25 {
    margin-bottom: 25px !important;
  }
  .ptb_md--30 {
    padding: 30px 0 !important;
  }
  .plr_md--30 {
    padding: 0 30px !important;
  }
  .pt_md--30 {
    padding-top: 30px !important;
  }
  .pb_md--30 {
    padding-bottom: 30px !important;
  }
  .pl_md--30 {
    padding-left: 30px !important;
  }
  .pr_md--30 {
    padding-right: 30px !important;
  }
  .mt_md--30 {
    margin-top: 30px !important;
  }
  .mb_md--30 {
    margin-bottom: 30px !important;
  }
  .ptb_md--35 {
    padding: 35px 0 !important;
  }
  .plr_md--35 {
    padding: 0 35px !important;
  }
  .pt_md--35 {
    padding-top: 35px !important;
  }
  .pb_md--35 {
    padding-bottom: 35px !important;
  }
  .pl_md--35 {
    padding-left: 35px !important;
  }
  .pr_md--35 {
    padding-right: 35px !important;
  }
  .mt_md--35 {
    margin-top: 35px !important;
  }
  .mb_md--35 {
    margin-bottom: 35px !important;
  }
  .ptb_md--40 {
    padding: 40px 0 !important;
  }
  .plr_md--40 {
    padding: 0 40px !important;
  }
  .pt_md--40 {
    padding-top: 40px !important;
  }
  .pb_md--40 {
    padding-bottom: 40px !important;
  }
  .pl_md--40 {
    padding-left: 40px !important;
  }
  .pr_md--40 {
    padding-right: 40px !important;
  }
  .mt_md--40 {
    margin-top: 40px !important;
  }
  .mb_md--40 {
    margin-bottom: 40px !important;
  }
  .ptb_md--45 {
    padding: 45px 0 !important;
  }
  .plr_md--45 {
    padding: 0 45px !important;
  }
  .pt_md--45 {
    padding-top: 45px !important;
  }
  .pb_md--45 {
    padding-bottom: 45px !important;
  }
  .pl_md--45 {
    padding-left: 45px !important;
  }
  .pr_md--45 {
    padding-right: 45px !important;
  }
  .mt_md--45 {
    margin-top: 45px !important;
  }
  .mb_md--45 {
    margin-bottom: 45px !important;
  }
  .ptb_md--50 {
    padding: 50px 0 !important;
  }
  .plr_md--50 {
    padding: 0 50px !important;
  }
  .pt_md--50 {
    padding-top: 50px !important;
  }
  .pb_md--50 {
    padding-bottom: 50px !important;
  }
  .pl_md--50 {
    padding-left: 50px !important;
  }
  .pr_md--50 {
    padding-right: 50px !important;
  }
  .mt_md--50 {
    margin-top: 50px !important;
  }
  .mb_md--50 {
    margin-bottom: 50px !important;
  }
  .ptb_md--55 {
    padding: 55px 0 !important;
  }
  .plr_md--55 {
    padding: 0 55px !important;
  }
  .pt_md--55 {
    padding-top: 55px !important;
  }
  .pb_md--55 {
    padding-bottom: 55px !important;
  }
  .pl_md--55 {
    padding-left: 55px !important;
  }
  .pr_md--55 {
    padding-right: 55px !important;
  }
  .mt_md--55 {
    margin-top: 55px !important;
  }
  .mb_md--55 {
    margin-bottom: 55px !important;
  }
  .ptb_md--60 {
    padding: 60px 0 !important;
  }
  .plr_md--60 {
    padding: 0 60px !important;
  }
  .pt_md--60 {
    padding-top: 60px !important;
  }
  .pb_md--60 {
    padding-bottom: 60px !important;
  }
  .pl_md--60 {
    padding-left: 60px !important;
  }
  .pr_md--60 {
    padding-right: 60px !important;
  }
  .mt_md--60 {
    margin-top: 60px !important;
  }
  .mb_md--60 {
    margin-bottom: 60px !important;
  }
  .ptb_md--65 {
    padding: 65px 0 !important;
  }
  .plr_md--65 {
    padding: 0 65px !important;
  }
  .pt_md--65 {
    padding-top: 65px !important;
  }
  .pb_md--65 {
    padding-bottom: 65px !important;
  }
  .pl_md--65 {
    padding-left: 65px !important;
  }
  .pr_md--65 {
    padding-right: 65px !important;
  }
  .mt_md--65 {
    margin-top: 65px !important;
  }
  .mb_md--65 {
    margin-bottom: 65px !important;
  }
  .ptb_md--70 {
    padding: 70px 0 !important;
  }
  .plr_md--70 {
    padding: 0 70px !important;
  }
  .pt_md--70 {
    padding-top: 70px !important;
  }
  .pb_md--70 {
    padding-bottom: 70px !important;
  }
  .pl_md--70 {
    padding-left: 70px !important;
  }
  .pr_md--70 {
    padding-right: 70px !important;
  }
  .mt_md--70 {
    margin-top: 70px !important;
  }
  .mb_md--70 {
    margin-bottom: 70px !important;
  }
  .ptb_md--75 {
    padding: 75px 0 !important;
  }
  .plr_md--75 {
    padding: 0 75px !important;
  }
  .pt_md--75 {
    padding-top: 75px !important;
  }
  .pb_md--75 {
    padding-bottom: 75px !important;
  }
  .pl_md--75 {
    padding-left: 75px !important;
  }
  .pr_md--75 {
    padding-right: 75px !important;
  }
  .mt_md--75 {
    margin-top: 75px !important;
  }
  .mb_md--75 {
    margin-bottom: 75px !important;
  }
  .ptb_md--80 {
    padding: 80px 0 !important;
  }
  .plr_md--80 {
    padding: 0 80px !important;
  }
  .pt_md--80 {
    padding-top: 80px !important;
  }
  .pb_md--80 {
    padding-bottom: 80px !important;
  }
  .pl_md--80 {
    padding-left: 80px !important;
  }
  .pr_md--80 {
    padding-right: 80px !important;
  }
  .mt_md--80 {
    margin-top: 80px !important;
  }
  .mb_md--80 {
    margin-bottom: 80px !important;
  }
  .ptb_md--85 {
    padding: 85px 0 !important;
  }
  .plr_md--85 {
    padding: 0 85px !important;
  }
  .pt_md--85 {
    padding-top: 85px !important;
  }
  .pb_md--85 {
    padding-bottom: 85px !important;
  }
  .pl_md--85 {
    padding-left: 85px !important;
  }
  .pr_md--85 {
    padding-right: 85px !important;
  }
  .mt_md--85 {
    margin-top: 85px !important;
  }
  .mb_md--85 {
    margin-bottom: 85px !important;
  }
  .ptb_md--90 {
    padding: 90px 0 !important;
  }
  .plr_md--90 {
    padding: 0 90px !important;
  }
  .pt_md--90 {
    padding-top: 90px !important;
  }
  .pb_md--90 {
    padding-bottom: 90px !important;
  }
  .pl_md--90 {
    padding-left: 90px !important;
  }
  .pr_md--90 {
    padding-right: 90px !important;
  }
  .mt_md--90 {
    margin-top: 90px !important;
  }
  .mb_md--90 {
    margin-bottom: 90px !important;
  }
  .ptb_md--95 {
    padding: 95px 0 !important;
  }
  .plr_md--95 {
    padding: 0 95px !important;
  }
  .pt_md--95 {
    padding-top: 95px !important;
  }
  .pb_md--95 {
    padding-bottom: 95px !important;
  }
  .pl_md--95 {
    padding-left: 95px !important;
  }
  .pr_md--95 {
    padding-right: 95px !important;
  }
  .mt_md--95 {
    margin-top: 95px !important;
  }
  .mb_md--95 {
    margin-bottom: 95px !important;
  }
  .ptb_md--100 {
    padding: 100px 0 !important;
  }
  .plr_md--100 {
    padding: 0 100px !important;
  }
  .pt_md--100 {
    padding-top: 100px !important;
  }
  .pb_md--100 {
    padding-bottom: 100px !important;
  }
  .pl_md--100 {
    padding-left: 100px !important;
  }
  .pr_md--100 {
    padding-right: 100px !important;
  }
  .mt_md--100 {
    margin-top: 100px !important;
  }
  .mb_md--100 {
    margin-bottom: 100px !important;
  }
}
@media only screen and (max-width: 767px) {
  .ptb_sm--250 {
    padding: 250px 0 !important;
  }
  .ptb_sm--0 {
    padding: 0 !important;
  }
  .pl_sm--0 {
    padding-left: 0 !important;
  }
  .pr_sm--0 {
    padding-right: 0 !important;
  }
  .pt_sm--0 {
    padding-top: 0 !important;
  }
  .pb_sm--0 {
    padding-bottom: 0 !important;
  }
  .mr_sm--0 {
    margin-right: 0 !important;
  }
  .ml_sm--0 {
    margin-left: 0 !important;
  }
  .mt_sm--0 {
    margin-top: 0 !important;
  }
  .mb_sm--0 {
    margin-bottom: 0 !important;
  }
  .pt_sm--150 {
    padding-top: 150px !important;
  }
  .pb_sm--110 {
    padding-bottom: 110px !important;
  }
  .ptb_sm--5 {
    padding: 5px 0 !important;
  }
  .plr_sm--5 {
    padding: 0 5px !important;
  }
  .pt_sm--5 {
    padding-top: 5px !important;
  }
  .pb_sm--5 {
    padding-bottom: 5px !important;
  }
  .pl_sm--5 {
    padding-left: 5px !important;
  }
  .pr_sm--5 {
    padding-right: 5px !important;
  }
  .mt_sm--5 {
    margin-top: 5px !important;
  }
  .ml_sm--5 {
    margin-left: 5px !important;
  }
  .mr_sm--5 {
    margin-right: 5px !important;
  }
  .mb_sm--5 {
    margin-bottom: 5px !important;
  }
  .ptb_sm--10 {
    padding: 10px 0 !important;
  }
  .plr_sm--10 {
    padding: 0 10px !important;
  }
  .pt_sm--10 {
    padding-top: 10px !important;
  }
  .pb_sm--10 {
    padding-bottom: 10px !important;
  }
  .pl_sm--10 {
    padding-left: 10px !important;
  }
  .pr_sm--10 {
    padding-right: 10px !important;
  }
  .mt_sm--10 {
    margin-top: 10px !important;
  }
  .ml_sm--10 {
    margin-left: 10px !important;
  }
  .mr_sm--10 {
    margin-right: 10px !important;
  }
  .mb_sm--10 {
    margin-bottom: 10px !important;
  }
  .ptb_sm--15 {
    padding: 15px 0 !important;
  }
  .plr_sm--15 {
    padding: 0 15px !important;
  }
  .pt_sm--15 {
    padding-top: 15px !important;
  }
  .pb_sm--15 {
    padding-bottom: 15px !important;
  }
  .pl_sm--15 {
    padding-left: 15px !important;
  }
  .pr_sm--15 {
    padding-right: 15px !important;
  }
  .mt_sm--15 {
    margin-top: 15px !important;
  }
  .ml_sm--15 {
    margin-left: 15px !important;
  }
  .mr_sm--15 {
    margin-right: 15px !important;
  }
  .mb_sm--15 {
    margin-bottom: 15px !important;
  }
  .ptb_sm--20 {
    padding: 20px 0 !important;
  }
  .plr_sm--20 {
    padding: 0 20px !important;
  }
  .pt_sm--20 {
    padding-top: 20px !important;
  }
  .pb_sm--20 {
    padding-bottom: 20px !important;
  }
  .pl_sm--20 {
    padding-left: 20px !important;
  }
  .pr_sm--20 {
    padding-right: 20px !important;
  }
  .mt_sm--20 {
    margin-top: 20px !important;
  }
  .ml_sm--20 {
    margin-left: 20px !important;
  }
  .mr_sm--20 {
    margin-right: 20px !important;
  }
  .mb_sm--20 {
    margin-bottom: 20px !important;
  }
  .ptb_sm--25 {
    padding: 25px 0 !important;
  }
  .plr_sm--25 {
    padding: 0 25px !important;
  }
  .pt_sm--25 {
    padding-top: 25px !important;
  }
  .pb_sm--25 {
    padding-bottom: 25px !important;
  }
  .pl_sm--25 {
    padding-left: 25px !important;
  }
  .pr_sm--25 {
    padding-right: 25px !important;
  }
  .mt_sm--25 {
    margin-top: 25px !important;
  }
  .ml_sm--25 {
    margin-left: 25px !important;
  }
  .mr_sm--25 {
    margin-right: 25px !important;
  }
  .mb_sm--25 {
    margin-bottom: 25px !important;
  }
  .ptb_sm--30 {
    padding: 30px 0 !important;
  }
  .plr_sm--30 {
    padding: 0 30px !important;
  }
  .pt_sm--30 {
    padding-top: 30px !important;
  }
  .pb_sm--30 {
    padding-bottom: 30px !important;
  }
  .pl_sm--30 {
    padding-left: 30px !important;
  }
  .pr_sm--30 {
    padding-right: 30px !important;
  }
  .mt_sm--30 {
    margin-top: 30px !important;
  }
  .ml_sm--30 {
    margin-left: 30px !important;
  }
  .mr_sm--30 {
    margin-right: 30px !important;
  }
  .mb_sm--30 {
    margin-bottom: 30px !important;
  }
  .ptb_sm--35 {
    padding: 35px 0 !important;
  }
  .plr_sm--35 {
    padding: 0 35px !important;
  }
  .pt_sm--35 {
    padding-top: 35px !important;
  }
  .pb_sm--35 {
    padding-bottom: 35px !important;
  }
  .pl_sm--35 {
    padding-left: 35px !important;
  }
  .pr_sm--35 {
    padding-right: 35px !important;
  }
  .mt_sm--35 {
    margin-top: 35px !important;
  }
  .ml_sm--35 {
    margin-left: 35px !important;
  }
  .mr_sm--35 {
    margin-right: 35px !important;
  }
  .mb_sm--35 {
    margin-bottom: 35px !important;
  }
  .ptb_sm--40 {
    padding: 40px 0 !important;
  }
  .plr_sm--40 {
    padding: 0 40px !important;
  }
  .pt_sm--40 {
    padding-top: 40px !important;
  }
  .pb_sm--40 {
    padding-bottom: 40px !important;
  }
  .pl_sm--40 {
    padding-left: 40px !important;
  }
  .pr_sm--40 {
    padding-right: 40px !important;
  }
  .mt_sm--40 {
    margin-top: 40px !important;
  }
  .ml_sm--40 {
    margin-left: 40px !important;
  }
  .mr_sm--40 {
    margin-right: 40px !important;
  }
  .mb_sm--40 {
    margin-bottom: 40px !important;
  }
  .ptb_sm--45 {
    padding: 45px 0 !important;
  }
  .plr_sm--45 {
    padding: 0 45px !important;
  }
  .pt_sm--45 {
    padding-top: 45px !important;
  }
  .pb_sm--45 {
    padding-bottom: 45px !important;
  }
  .pl_sm--45 {
    padding-left: 45px !important;
  }
  .pr_sm--45 {
    padding-right: 45px !important;
  }
  .mt_sm--45 {
    margin-top: 45px !important;
  }
  .ml_sm--45 {
    margin-left: 45px !important;
  }
  .mr_sm--45 {
    margin-right: 45px !important;
  }
  .mb_sm--45 {
    margin-bottom: 45px !important;
  }
  .ptb_sm--50 {
    padding: 50px 0 !important;
  }
  .plr_sm--50 {
    padding: 0 50px !important;
  }
  .pt_sm--50 {
    padding-top: 50px !important;
  }
  .pb_sm--50 {
    padding-bottom: 50px !important;
  }
  .pl_sm--50 {
    padding-left: 50px !important;
  }
  .pr_sm--50 {
    padding-right: 50px !important;
  }
  .mt_sm--50 {
    margin-top: 50px !important;
  }
  .ml_sm--50 {
    margin-left: 50px !important;
  }
  .mr_sm--50 {
    margin-right: 50px !important;
  }
  .mb_sm--50 {
    margin-bottom: 50px !important;
  }
  .ptb_sm--55 {
    padding: 55px 0 !important;
  }
  .plr_sm--55 {
    padding: 0 55px !important;
  }
  .pt_sm--55 {
    padding-top: 55px !important;
  }
  .pb_sm--55 {
    padding-bottom: 55px !important;
  }
  .pl_sm--55 {
    padding-left: 55px !important;
  }
  .pr_sm--55 {
    padding-right: 55px !important;
  }
  .mt_sm--55 {
    margin-top: 55px !important;
  }
  .ml_sm--55 {
    margin-left: 55px !important;
  }
  .mr_sm--55 {
    margin-right: 55px !important;
  }
  .mb_sm--55 {
    margin-bottom: 55px !important;
  }
  .ptb_sm--60 {
    padding: 60px 0 !important;
  }
  .plr_sm--60 {
    padding: 0 60px !important;
  }
  .pt_sm--60 {
    padding-top: 60px !important;
  }
  .pb_sm--60 {
    padding-bottom: 60px !important;
  }
  .pl_sm--60 {
    padding-left: 60px !important;
  }
  .pr_sm--60 {
    padding-right: 60px !important;
  }
  .mt_sm--60 {
    margin-top: 60px !important;
  }
  .ml_sm--60 {
    margin-left: 60px !important;
  }
  .mr_sm--60 {
    margin-right: 60px !important;
  }
  .mb_sm--60 {
    margin-bottom: 60px !important;
  }
  .ptb_sm--65 {
    padding: 65px 0 !important;
  }
  .plr_sm--65 {
    padding: 0 65px !important;
  }
  .pt_sm--65 {
    padding-top: 65px !important;
  }
  .pb_sm--65 {
    padding-bottom: 65px !important;
  }
  .pl_sm--65 {
    padding-left: 65px !important;
  }
  .pr_sm--65 {
    padding-right: 65px !important;
  }
  .mt_sm--65 {
    margin-top: 65px !important;
  }
  .ml_sm--65 {
    margin-left: 65px !important;
  }
  .mr_sm--65 {
    margin-right: 65px !important;
  }
  .mb_sm--65 {
    margin-bottom: 65px !important;
  }
  .ptb_sm--70 {
    padding: 70px 0 !important;
  }
  .plr_sm--70 {
    padding: 0 70px !important;
  }
  .pt_sm--70 {
    padding-top: 70px !important;
  }
  .pb_sm--70 {
    padding-bottom: 70px !important;
  }
  .pl_sm--70 {
    padding-left: 70px !important;
  }
  .pr_sm--70 {
    padding-right: 70px !important;
  }
  .mt_sm--70 {
    margin-top: 70px !important;
  }
  .ml_sm--70 {
    margin-left: 70px !important;
  }
  .mr_sm--70 {
    margin-right: 70px !important;
  }
  .mb_sm--70 {
    margin-bottom: 70px !important;
  }
  .ptb_sm--75 {
    padding: 75px 0 !important;
  }
  .plr_sm--75 {
    padding: 0 75px !important;
  }
  .pt_sm--75 {
    padding-top: 75px !important;
  }
  .pb_sm--75 {
    padding-bottom: 75px !important;
  }
  .pl_sm--75 {
    padding-left: 75px !important;
  }
  .pr_sm--75 {
    padding-right: 75px !important;
  }
  .mt_sm--75 {
    margin-top: 75px !important;
  }
  .ml_sm--75 {
    margin-left: 75px !important;
  }
  .mr_sm--75 {
    margin-right: 75px !important;
  }
  .mb_sm--75 {
    margin-bottom: 75px !important;
  }
  .ptb_sm--80 {
    padding: 80px 0 !important;
  }
  .plr_sm--80 {
    padding: 0 80px !important;
  }
  .pt_sm--80 {
    padding-top: 80px !important;
  }
  .pb_sm--80 {
    padding-bottom: 80px !important;
  }
  .pl_sm--80 {
    padding-left: 80px !important;
  }
  .pr_sm--80 {
    padding-right: 80px !important;
  }
  .mt_sm--80 {
    margin-top: 80px !important;
  }
  .ml_sm--80 {
    margin-left: 80px !important;
  }
  .mr_sm--80 {
    margin-right: 80px !important;
  }
  .mb_sm--80 {
    margin-bottom: 80px !important;
  }
  .ptb_sm--85 {
    padding: 85px 0 !important;
  }
  .plr_sm--85 {
    padding: 0 85px !important;
  }
  .pt_sm--85 {
    padding-top: 85px !important;
  }
  .pb_sm--85 {
    padding-bottom: 85px !important;
  }
  .pl_sm--85 {
    padding-left: 85px !important;
  }
  .pr_sm--85 {
    padding-right: 85px !important;
  }
  .mt_sm--85 {
    margin-top: 85px !important;
  }
  .ml_sm--85 {
    margin-left: 85px !important;
  }
  .mr_sm--85 {
    margin-right: 85px !important;
  }
  .mb_sm--85 {
    margin-bottom: 85px !important;
  }
  .ptb_sm--90 {
    padding: 90px 0 !important;
  }
  .plr_sm--90 {
    padding: 0 90px !important;
  }
  .pt_sm--90 {
    padding-top: 90px !important;
  }
  .pb_sm--90 {
    padding-bottom: 90px !important;
  }
  .pl_sm--90 {
    padding-left: 90px !important;
  }
  .pr_sm--90 {
    padding-right: 90px !important;
  }
  .mt_sm--90 {
    margin-top: 90px !important;
  }
  .ml_sm--90 {
    margin-left: 90px !important;
  }
  .mr_sm--90 {
    margin-right: 90px !important;
  }
  .mb_sm--90 {
    margin-bottom: 90px !important;
  }
  .ptb_sm--95 {
    padding: 95px 0 !important;
  }
  .plr_sm--95 {
    padding: 0 95px !important;
  }
  .pt_sm--95 {
    padding-top: 95px !important;
  }
  .pb_sm--95 {
    padding-bottom: 95px !important;
  }
  .pl_sm--95 {
    padding-left: 95px !important;
  }
  .pr_sm--95 {
    padding-right: 95px !important;
  }
  .mt_sm--95 {
    margin-top: 95px !important;
  }
  .ml_sm--95 {
    margin-left: 95px !important;
  }
  .mr_sm--95 {
    margin-right: 95px !important;
  }
  .mb_sm--95 {
    margin-bottom: 95px !important;
  }
  .ptb_sm--100 {
    padding: 100px 0 !important;
  }
  .plr_sm--100 {
    padding: 0 100px !important;
  }
  .pt_sm--100 {
    padding-top: 100px !important;
  }
  .pb_sm--100 {
    padding-bottom: 100px !important;
  }
  .pl_sm--100 {
    padding-left: 100px !important;
  }
  .pr_sm--100 {
    padding-right: 100px !important;
  }
  .mt_sm--100 {
    margin-top: 100px !important;
  }
  .ml_sm--100 {
    margin-left: 100px !important;
  }
  .mr_sm--100 {
    margin-right: 100px !important;
  }
  .mb_sm--100 {
    margin-bottom: 100px !important;
  }
  .pl_sm--0 {
    padding-left: 0 !important;
  }
  .pr_sm--0 {
    padding-right: 0 !important;
  }
  .pt_sm--0 {
    padding-top: 0 !important;
  }
  .pb_sm--0 {
    padding-bottom: 0 !important;
  }
  .mr_sm--0 {
    margin-right: 0 !important;
  }
  .ml_sm--0 {
    margin-left: 0 !important;
  }
  .mt_sm--0 {
    margin-top: 0 !important;
  }
  .mb_sm--0 {
    margin-bottom: 0 !important;
  }
}
@media only screen and (max-width: 575px) {
  .ptb_mobile--5 {
    padding: 5px 0 !important;
  }
  .plr_mobile--5 {
    padding: 0 5px !important;
  }
  .pt_mobile--5 {
    padding-top: 5px !important;
  }
  .pb_mobile--5 {
    padding-bottom: 5px !important;
  }
  .pl_mobile--5 {
    padding-left: 5px !important;
  }
  .pr_mobile--5 {
    padding-right: 5px !important;
  }
  .mt_mobile--5 {
    margin-top: 5px !important;
  }
  .mb_mobile--5 {
    margin-bottom: 5px !important;
  }
  .ptb_mobile--10 {
    padding: 10px 0 !important;
  }
  .plr_mobile--10 {
    padding: 0 10px !important;
  }
  .pt_mobile--10 {
    padding-top: 10px !important;
  }
  .pb_mobile--10 {
    padding-bottom: 10px !important;
  }
  .pl_mobile--10 {
    padding-left: 10px !important;
  }
  .pr_mobile--10 {
    padding-right: 10px !important;
  }
  .mt_mobile--10 {
    margin-top: 10px !important;
  }
  .mb_mobile--10 {
    margin-bottom: 10px !important;
  }
  .ptb_mobile--15 {
    padding: 15px 0 !important;
  }
  .plr_mobile--15 {
    padding: 0 15px !important;
  }
  .pt_mobile--15 {
    padding-top: 15px !important;
  }
  .pb_mobile--15 {
    padding-bottom: 15px !important;
  }
  .pl_mobile--15 {
    padding-left: 15px !important;
  }
  .pr_mobile--15 {
    padding-right: 15px !important;
  }
  .mt_mobile--15 {
    margin-top: 15px !important;
  }
  .mb_mobile--15 {
    margin-bottom: 15px !important;
  }
  .ptb_mobile--20 {
    padding: 20px 0 !important;
  }
  .plr_mobile--20 {
    padding: 0 20px !important;
  }
  .pt_mobile--20 {
    padding-top: 20px !important;
  }
  .pb_mobile--20 {
    padding-bottom: 20px !important;
  }
  .pl_mobile--20 {
    padding-left: 20px !important;
  }
  .pr_mobile--20 {
    padding-right: 20px !important;
  }
  .mt_mobile--20 {
    margin-top: 20px !important;
  }
  .mb_mobile--20 {
    margin-bottom: 20px !important;
  }
  .ptb_mobile--25 {
    padding: 25px 0 !important;
  }
  .plr_mobile--25 {
    padding: 0 25px !important;
  }
  .pt_mobile--25 {
    padding-top: 25px !important;
  }
  .pb_mobile--25 {
    padding-bottom: 25px !important;
  }
  .pl_mobile--25 {
    padding-left: 25px !important;
  }
  .pr_mobile--25 {
    padding-right: 25px !important;
  }
  .mt_mobile--25 {
    margin-top: 25px !important;
  }
  .mb_mobile--25 {
    margin-bottom: 25px !important;
  }
  .ptb_mobile--30 {
    padding: 30px 0 !important;
  }
  .plr_mobile--30 {
    padding: 0 30px !important;
  }
  .pt_mobile--30 {
    padding-top: 30px !important;
  }
  .pb_mobile--30 {
    padding-bottom: 30px !important;
  }
  .pl_mobile--30 {
    padding-left: 30px !important;
  }
  .pr_mobile--30 {
    padding-right: 30px !important;
  }
  .mt_mobile--30 {
    margin-top: 30px !important;
  }
  .mb_mobile--30 {
    margin-bottom: 30px !important;
  }
  .ptb_mobile--35 {
    padding: 35px 0 !important;
  }
  .plr_mobile--35 {
    padding: 0 35px !important;
  }
  .pt_mobile--35 {
    padding-top: 35px !important;
  }
  .pb_mobile--35 {
    padding-bottom: 35px !important;
  }
  .pl_mobile--35 {
    padding-left: 35px !important;
  }
  .pr_mobile--35 {
    padding-right: 35px !important;
  }
  .mt_mobile--35 {
    margin-top: 35px !important;
  }
  .mb_mobile--35 {
    margin-bottom: 35px !important;
  }
  .ptb_mobile--40 {
    padding: 40px 0 !important;
  }
  .plr_mobile--40 {
    padding: 0 40px !important;
  }
  .pt_mobile--40 {
    padding-top: 40px !important;
  }
  .pb_mobile--40 {
    padding-bottom: 40px !important;
  }
  .pl_mobile--40 {
    padding-left: 40px !important;
  }
  .pr_mobile--40 {
    padding-right: 40px !important;
  }
  .mt_mobile--40 {
    margin-top: 40px !important;
  }
  .mb_mobile--40 {
    margin-bottom: 40px !important;
  }
  .ptb_mobile--45 {
    padding: 45px 0 !important;
  }
  .plr_mobile--45 {
    padding: 0 45px !important;
  }
  .pt_mobile--45 {
    padding-top: 45px !important;
  }
  .pb_mobile--45 {
    padding-bottom: 45px !important;
  }
  .pl_mobile--45 {
    padding-left: 45px !important;
  }
  .pr_mobile--45 {
    padding-right: 45px !important;
  }
  .mt_mobile--45 {
    margin-top: 45px !important;
  }
  .mb_mobile--45 {
    margin-bottom: 45px !important;
  }
  .ptb_mobile--50 {
    padding: 50px 0 !important;
  }
  .plr_mobile--50 {
    padding: 0 50px !important;
  }
  .pt_mobile--50 {
    padding-top: 50px !important;
  }
  .pb_mobile--50 {
    padding-bottom: 50px !important;
  }
  .pl_mobile--50 {
    padding-left: 50px !important;
  }
  .pr_mobile--50 {
    padding-right: 50px !important;
  }
  .mt_mobile--50 {
    margin-top: 50px !important;
  }
  .mb_mobile--50 {
    margin-bottom: 50px !important;
  }
  .ptb_mobile--55 {
    padding: 55px 0 !important;
  }
  .plr_mobile--55 {
    padding: 0 55px !important;
  }
  .pt_mobile--55 {
    padding-top: 55px !important;
  }
  .pb_mobile--55 {
    padding-bottom: 55px !important;
  }
  .pl_mobile--55 {
    padding-left: 55px !important;
  }
  .pr_mobile--55 {
    padding-right: 55px !important;
  }
  .mt_mobile--55 {
    margin-top: 55px !important;
  }
  .mb_mobile--55 {
    margin-bottom: 55px !important;
  }
  .ptb_mobile--60 {
    padding: 60px 0 !important;
  }
  .plr_mobile--60 {
    padding: 0 60px !important;
  }
  .pt_mobile--60 {
    padding-top: 60px !important;
  }
  .pb_mobile--60 {
    padding-bottom: 60px !important;
  }
  .pl_mobile--60 {
    padding-left: 60px !important;
  }
  .pr_mobile--60 {
    padding-right: 60px !important;
  }
  .mt_mobile--60 {
    margin-top: 60px !important;
  }
  .mb_mobile--60 {
    margin-bottom: 60px !important;
  }
  .ptb_mobile--65 {
    padding: 65px 0 !important;
  }
  .plr_mobile--65 {
    padding: 0 65px !important;
  }
  .pt_mobile--65 {
    padding-top: 65px !important;
  }
  .pb_mobile--65 {
    padding-bottom: 65px !important;
  }
  .pl_mobile--65 {
    padding-left: 65px !important;
  }
  .pr_mobile--65 {
    padding-right: 65px !important;
  }
  .mt_mobile--65 {
    margin-top: 65px !important;
  }
  .mb_mobile--65 {
    margin-bottom: 65px !important;
  }
  .ptb_mobile--70 {
    padding: 70px 0 !important;
  }
  .plr_mobile--70 {
    padding: 0 70px !important;
  }
  .pt_mobile--70 {
    padding-top: 70px !important;
  }
  .pb_mobile--70 {
    padding-bottom: 70px !important;
  }
  .pl_mobile--70 {
    padding-left: 70px !important;
  }
  .pr_mobile--70 {
    padding-right: 70px !important;
  }
  .mt_mobile--70 {
    margin-top: 70px !important;
  }
  .mb_mobile--70 {
    margin-bottom: 70px !important;
  }
  .ptb_mobile--75 {
    padding: 75px 0 !important;
  }
  .plr_mobile--75 {
    padding: 0 75px !important;
  }
  .pt_mobile--75 {
    padding-top: 75px !important;
  }
  .pb_mobile--75 {
    padding-bottom: 75px !important;
  }
  .pl_mobile--75 {
    padding-left: 75px !important;
  }
  .pr_mobile--75 {
    padding-right: 75px !important;
  }
  .mt_mobile--75 {
    margin-top: 75px !important;
  }
  .mb_mobile--75 {
    margin-bottom: 75px !important;
  }
  .ptb_mobile--80 {
    padding: 80px 0 !important;
  }
  .plr_mobile--80 {
    padding: 0 80px !important;
  }
  .pt_mobile--80 {
    padding-top: 80px !important;
  }
  .pb_mobile--80 {
    padding-bottom: 80px !important;
  }
  .pl_mobile--80 {
    padding-left: 80px !important;
  }
  .pr_mobile--80 {
    padding-right: 80px !important;
  }
  .mt_mobile--80 {
    margin-top: 80px !important;
  }
  .mb_mobile--80 {
    margin-bottom: 80px !important;
  }
  .ptb_mobile--85 {
    padding: 85px 0 !important;
  }
  .plr_mobile--85 {
    padding: 0 85px !important;
  }
  .pt_mobile--85 {
    padding-top: 85px !important;
  }
  .pb_mobile--85 {
    padding-bottom: 85px !important;
  }
  .pl_mobile--85 {
    padding-left: 85px !important;
  }
  .pr_mobile--85 {
    padding-right: 85px !important;
  }
  .mt_mobile--85 {
    margin-top: 85px !important;
  }
  .mb_mobile--85 {
    margin-bottom: 85px !important;
  }
  .ptb_mobile--90 {
    padding: 90px 0 !important;
  }
  .plr_mobile--90 {
    padding: 0 90px !important;
  }
  .pt_mobile--90 {
    padding-top: 90px !important;
  }
  .pb_mobile--90 {
    padding-bottom: 90px !important;
  }
  .pl_mobile--90 {
    padding-left: 90px !important;
  }
  .pr_mobile--90 {
    padding-right: 90px !important;
  }
  .mt_mobile--90 {
    margin-top: 90px !important;
  }
  .mb_mobile--90 {
    margin-bottom: 90px !important;
  }
  .ptb_mobile--95 {
    padding: 95px 0 !important;
  }
  .plr_mobile--95 {
    padding: 0 95px !important;
  }
  .pt_mobile--95 {
    padding-top: 95px !important;
  }
  .pb_mobile--95 {
    padding-bottom: 95px !important;
  }
  .pl_mobile--95 {
    padding-left: 95px !important;
  }
  .pr_mobile--95 {
    padding-right: 95px !important;
  }
  .mt_mobile--95 {
    margin-top: 95px !important;
  }
  .mb_mobile--95 {
    margin-bottom: 95px !important;
  }
  .ptb_mobile--100 {
    padding: 100px 0 !important;
  }
  .plr_mobile--100 {
    padding: 0 100px !important;
  }
  .pt_mobile--100 {
    padding-top: 100px !important;
  }
  .pb_mobile--100 {
    padding-bottom: 100px !important;
  }
  .pl_mobile--100 {
    padding-left: 100px !important;
  }
  .pr_mobile--100 {
    padding-right: 100px !important;
  }
  .mt_mobile--100 {
    margin-top: 100px !important;
  }
  .mb_mobile--100 {
    margin-bottom: 100px !important;
  }
}
.slick-gutter-5 {
  margin-left: -5px !important;
  margin-right: -5px !important;
}
.slick-gutter-5 .slick-slide {
  padding-left: 5px !important;
  padding-right: 5px !important;
}

.slick-gutter-10 {
  margin-left: -10px !important;
  margin-right: -10px !important;
}
.slick-gutter-10 .slick-slide {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.slick-gutter-15 {
  margin-left: -15px !important;
  margin-right: -15px !important;
}
.slick-gutter-15 .slick-slide {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

.slick-gutter-20 {
  margin-left: -20px !important;
  margin-right: -20px !important;
}
.slick-gutter-20 .slick-slide {
  padding-left: 20px !important;
  padding-right: 20px !important;
}

.slick-gutter-25 {
  margin-left: -25px !important;
  margin-right: -25px !important;
}
.slick-gutter-25 .slick-slide {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.slick-gutter-30 {
  margin-left: -30px !important;
  margin-right: -30px !important;
}
.slick-gutter-30 .slick-slide {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

.slick-gutter-35 {
  margin-left: -35px !important;
  margin-right: -35px !important;
}
.slick-gutter-35 .slick-slide {
  padding-left: 35px !important;
  padding-right: 35px !important;
}

.slick-gutter-40 {
  margin-left: -40px !important;
  margin-right: -40px !important;
}
.slick-gutter-40 .slick-slide {
  padding-left: 40px !important;
  padding-right: 40px !important;
}

.slick-gutter-45 {
  margin-left: -45px !important;
  margin-right: -45px !important;
}
.slick-gutter-45 .slick-slide {
  padding-left: 45px !important;
  padding-right: 45px !important;
}

.slick-gutter-50 {
  margin-left: -50px !important;
  margin-right: -50px !important;
}
.slick-gutter-50 .slick-slide {
  padding-left: 50px !important;
  padding-right: 50px !important;
}

.slick-gutter-55 {
  margin-left: -55px !important;
  margin-right: -55px !important;
}
.slick-gutter-55 .slick-slide {
  padding-left: 55px !important;
  padding-right: 55px !important;
}

.slick-gutter-60 {
  margin-left: -60px !important;
  margin-right: -60px !important;
}
.slick-gutter-60 .slick-slide {
  padding-left: 60px !important;
  padding-right: 60px !important;
}

.slick-gutter-65 {
  margin-left: -65px !important;
  margin-right: -65px !important;
}
.slick-gutter-65 .slick-slide {
  padding-left: 65px !important;
  padding-right: 65px !important;
}

.slick-gutter-70 {
  margin-left: -70px !important;
  margin-right: -70px !important;
}
.slick-gutter-70 .slick-slide {
  padding-left: 70px !important;
  padding-right: 70px !important;
}

.slick-gutter-75 {
  margin-left: -75px !important;
  margin-right: -75px !important;
}
.slick-gutter-75 .slick-slide {
  padding-left: 75px !important;
  padding-right: 75px !important;
}

.slick-gutter-80 {
  margin-left: -80px !important;
  margin-right: -80px !important;
}
.slick-gutter-80 .slick-slide {
  padding-left: 80px !important;
  padding-right: 80px !important;
}

.slick-gutter-85 {
  margin-left: -85px !important;
  margin-right: -85px !important;
}
.slick-gutter-85 .slick-slide {
  padding-left: 85px !important;
  padding-right: 85px !important;
}

.slick-gutter-90 {
  margin-left: -90px !important;
  margin-right: -90px !important;
}
.slick-gutter-90 .slick-slide {
  padding-left: 90px !important;
  padding-right: 90px !important;
}

.slick-gutter-95 {
  margin-left: -95px !important;
  margin-right: -95px !important;
}
.slick-gutter-95 .slick-slide {
  padding-left: 95px !important;
  padding-right: 95px !important;
}

.slick-gutter-100 {
  margin-left: -100px !important;
  margin-right: -100px !important;
}
.slick-gutter-100 .slick-slide {
  padding-left: 100px !important;
  padding-right: 100px !important;
}

.max-width-160 {
  max-width: 160px;
}

.collaborate-plr-60 {
  padding-left: 60px !important;
  padding-right: 60px !important;
}

/*======================== 
    Common Style Css
==========================*/
/* Theme Gradient */
.theme-gradient, .counter-style-1 .count-number {
  background: linear-gradient(90deg, #12B5DE -30%, #7130C3 30%, #FF3BD4 90%);
  text-transform: capitalize;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.theme-gradient-secondary {
  background: linear-gradient(to right, var(--color-secondary-gradient-start), var(--color-secondary-gradient-end));
  text-transform: capitalize;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.theme-gradient-tertiary {
  background: linear-gradient(to right, var(--color-tertiary-gradient-start), var(--color-tertiary-gradient-end));
  text-transform: capitalize;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}

.bg-lessdark-gradient {
  background: linear-gradient(180deg, var(--color-lessdark) 20%, rgba(19, 19, 19, 0.4));
}

.bg-theme-gradient {
  background-color: transparent;
  background-image: linear-gradient(90deg, var(--color-primary) 10%, var(--color-primary) 50%, var(--color-primary) 90%);
}

.bg-primary-gradient {
  background-color: var(--color-primary);
  background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-primary) 75%, var(--color-secondary) 100%) 95%/200% 100%;
}

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .theme-gradient, .counter-style-1 .count-number {
    color: var(--color-secondary);
    background: none !important;
  }
}
/* Heading Font  */
.h1 {
  font-size: var(--h1) !important;
}

.h2 {
  font-size: var(--h2) !important;
}

.h3 {
  font-size: var(--h3) !important;
}

.h4 {
  font-size: var(--h4) !important;
}

.h5 {
  font-size: var(--h5) !important;
}

.h6 {
  font-size: var(--h6) !important;
}

/* Text Color  */
.bg-primary-color {
  background: var(--color-primary);
}

.bg-secondary-color {
  background: var(--color-secondary);
}

.bg-tertiary-color {
  background-color: var(--color-tertiary);
}

.bg-color-primary {
  background-color: var(--color-primary) !important;
}

.bg-color-primary {
  background-color: var(--color-primary) !important;
}

.bg-color-primary {
  background-color: var(--color-primary) !important;
}

.bg-color-secondary {
  background-color: var(--color-secondary) !important;
}

.bg-color-tertiary {
  background-color: var(--color-tertiary) !important;
}

.bg-color-primary {
  background-color: var(--color-primary) !important;
}

.bg-color-primary {
  background-color: var(--color-primary) !important;
}

.bg-color-primary {
  background-color: var(--color-primary) !important;
}

.bg-color-primary-darker {
  background-color: var(--color-primary-darker) !important;
}

.bg-color-secondary-darker {
  background-color: var(--color-secondary-darker) !important;
}

.bg-color-primary-darker {
  background-color: var(--color-primary-darker) !important;
}

.bg-color-primary-darker {
  background-color: var(--color-primary-darker) !important;
}

.bg-color-heading {
  background-color: var(--color-heading) !important;
}

.bg-color-body {
  background-color: var(--color-body) !important;
}

.bg-color-dark {
  background-color: var(--color-dark) !important;
}

.bg-color-darker {
  background-color: var(--color-darker) !important;
}

.bg-color-darkest {
  background-color: var(--color-darkest) !important;
}

.bg-color-black {
  background-color: var(--color-black) !important;
}

.bg-color-blacker {
  background-color: var(--color-blacker) !important;
}

.bg-color-blackest {
  background-color: var(--color-blackest) !important;
}

.bg-color-border {
  background-color: var(--color-border) !important;
}

.bg-color-gray {
  background-color: var(--color-gray) !important;
}

.bg-color-midgray {
  background-color: var(--color-midgray) !important;
}

.bg-color-light {
  background-color: var(--color-light) !important;
}

.bg-color-lighter {
  background-color: var(--color-lighter) !important;
}

.bg-color-lightest {
  background-color: var(--color-lightest) !important;
}

.bg-color-white {
  background-color: var(--color-white) !important;
}

/* Radius */
/* Font Weight */
/* Shadows */
/* Others  */
.liststyle {
  padding: 0;
  margin: 0;
  list-style: none;
}

.transition-transform {
  transition: var(--transition-transform);
}

.list-icon {
  list-style: none;
  padding: 0;
  margin: 0;
}
.list-icon li {
  display: flex;
  align-items: center;
  margin: 15px 0;
}
@media only screen and (max-width: 767px) {
  .list-icon li {
    font-size: 16px;
  }
}
.list-icon li .icon {
  width: 30px;
  background-color: var(--color-blackest);
  height: 30px;
  border-radius: 100%;
  display: inline-block;
  position: relative;
  margin-right: 9px;
  min-width: 30px;
  min-height: 30px;
}
.list-icon li .icon.background-transparent {
  background-color: transparent;
}
.list-icon li .icon i {
  width: 20px;
  height: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.rainbow-sub-badge {
  font-weight: 600;
  letter-spacing: 0.5px;
  line-height: 18px;
  font-size: 16px;
  border-radius: 4px;
  margin-bottom: 12px;
  display: inline-block;
  padding: 7px 14px;
  background-color: var(--color-blackest);
  box-shadow: var(--shadow-lighter);
}

.max-width-800 {
  max-width: 800px;
}

.bg_dot-mask {
  position: absolute !important;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  pointer-events: none;
  background-image: url(../images/bg/dot-bg.png);
  background-position: center;
}

.bg-blend-top {
  -webkit-mask-image: linear-gradient(180deg, transparent 0, #000 40%);
  mask-image: linear-gradient(180deg, transparent 0, #000 40%);
}

.feature-list {
  padding: 0;
  margin: 0;
  list-style: none;
}
.feature-list li {
  display: flex;
  align-items: center;
}
.feature-list li .icon {
  background: var(--color-secondary);
  width: 20px;
  height: 20px;
  border-radius: 100%;
  color: var(--color-white);
  text-align: center;
  min-width: 20px;
  font-size: 12px;
}
.feature-list li .icon i {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  font-size: 14px;
}
.feature-list li .title-wrapper {
  margin-left: 13px;
}
.feature-list li .title-wrapper .title {
  font-size: 16px;
  margin: 0;
}
.feature-list li .title-wrapper .text {
  margin-bottom: 0;
}

.rainbow-callto-action .feature-list {
  display: flex;
  margin-top: 10px;
}
.rainbow-callto-action .feature-list li + li {
  margin-left: 30px;
}

.chatenai-separator.has-position-bottom {
  position: absolute;
  width: 100%;
  height: auto;
  bottom: -2px;
  left: 0;
  right: 0;
}
@media only screen and (max-width: 767px) {
  .chatenai-separator.has-position-bottom {
    bottom: -5px;
  }
}
.chatenai-separator.has-position-top {
  position: absolute;
  width: 100%;
  height: auto;
  left: 0;
  right: 0;
  bottom: 100%;
  top: auto;
}

.separator-animated {
  position: relative;
  overflow: hidden;
  height: 2px;
  width: 100%;
  background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(255, 255, 255, 0) 0%, rgba(111, 100, 233, 0.6) 50%, rgba(0, 0, 0, 0) 100%);
}
.separator-animated.animated-true::before {
  content: "";
  position: absolute;
  width: 3%;
  height: 100%;
  background: linear-gradient(90deg, rgba(0, 0, 0, 0) 0%, rgba(255, 255, 255, 0) 0%, var(--color-primary) 50%, rgba(0, 0, 0, 0) 100%);
  backdrop-filter: blur(20px);
  animation: separateline 5s ease-in-out infinite;
}

@keyframes separateline {
  0% {
    left: 0;
  }
  100% {
    left: 110%;
  }
}
.bg-blur-filter {
  position: absolute;
  left: 0;
  top: 50%;
  z-index: -1;
  width: 100%;
  height: 500px;
  transform: translate(-50%, -50%);
  background-image: linear-gradient(45deg, var(--color-primary), var(--color-primary));
  opacity: 0.25;
  -webkit-filter: blur(100px);
  filter: blur(100px);
}

.theme-shape {
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.theme-shape::before {
  position: absolute;
  left: -250px;
  top: 250px;
  right: auto;
  bottom: auto;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  background-image: linear-gradient(45deg, var(--color-primary), var(--color-primary));
  opacity: 0.2;
  filter: blur(100px);
  content: "";
}
.theme-shape::after {
  position: absolute;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  opacity: 0.2;
  filter: blur(100px);
  content: "";
  left: auto;
  top: -250px;
  right: -250px;
  bottom: auto;
  background-image: linear-gradient(45deg, var(--color-secondary), var(--color-tertiary));
}

.gradient-btn-shadow {
  box-shadow: inset 0 0 60px whitesmoke, inset 20px 0 80px #f0f, inset -20px 0 80px #0ff, inset 20px 0 300px #f0f, inset -20px 0 300px #0ff, 0 0 50px #fff, -10px 0 80px #f0f, 10px 0 80px #0ff;
}

.chatai-sec {
  position: relative;
  width: 100vw;
  height: 100vh;
  display: flex;
  flex-wrap: wrap;
  overflow: hidden;
  background-color: var(--color-blackest);
  gap: 0 5px;
}
.chatai-sec .box {
  position: relative;
  font-weight: var(--p-bold);
  text-transform: uppercase;
  font-size: var(--font-size-b3);
  color: var(--color-dark);
}
.chatai-sec .box:nth-child(odd):before {
  content: " chaten AI ";
}
.chatai-sec .box:nth-child(even):before {
  content: "Text transform";
  filter: hue-rotate(180deg);
}
.chatai-sec .box.coloranimate {
  color: rgba(172, 172, 172, 0.2);
  text-shadow: 0 0 5px rgba(172, 172, 172, 0.2), 0 0 20px rgba(172, 172, 172, 0.2), 0 0 50px rgba(172, 172, 172, 0.2);
}
.chatai-sec .frame-image {
  position: absolute;
  z-index: 10;
  width: 50%;
  height: auto;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) !important;
}

.color-off {
  opacity: 0.5;
}

.top-flashlight {
  position: relative;
}
.top-flashlight::before {
  content: "";
  width: 150px;
  height: 150px;
  background: var(--color-primary);
  position: absolute;
  left: 50%;
  top: -60px;
  transform: translateY(-50%) translateX(-50%);
  border-radius: 100%;
  filter: blur(70px);
}
.top-flashlight.leftside::before {
  left: 0;
  top: 0;
}
.top-flashlight.light-xl::before {
  width: 300px;
  filter: blur(140px);
}

.bottom-flashlight {
  position: relative;
}
.bottom-flashlight::before {
  content: "";
  width: 50px;
  height: 50px;
  background: var(--color-primary);
  position: absolute;
  left: 50%;
  bottom: -50%;
  transform: translateY(-50%) translateX(-50%);
  filter: blur(20px);
}

.border-gradient {
  position: relative;
  overflow: hidden;
}
.border-gradient::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: linear-gradient(94deg, #dd00ac 10.66%, #7130c3 53.03%, #410093 96.34%, rgba(255, 0, 238, 0.26) 191.41%, rgba(255, 59, 212, 0) 191.43%);
  width: 200%;
  height: 200%;
  transition: 0.5s, top 0s, left 0s;
  border-radius: var(--radius);
}
.border-gradient::after {
  content: "";
  position: absolute;
  inset: 2px;
  background: var(--color-blackest);
  border-radius: var(--radius);
}
.border-gradient > * {
  z-index: 2;
  position: relative;
}
.border-gradient.bg-secondary::before {
  background: radial-gradient(var(--color-secondary), transparent, transparent);
}
.border-gradient.bg-tertiary::before {
  background: radial-gradient(var(--color-tertiary), transparent, transparent);
}

.preloader {
  background: var(--color-dark);
  width: 100vw;
  height: 100vh;
  position: fixed;
  z-index: 9999999;
  top: 0;
  left: 0;
}

@keyframes bgg {
  0% {
    background: var(--color-primary-light);
  }
  50% {
    background: var(--color-primary);
  }
  100% {
    background: var(--color-primary);
  }
}
.loader {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: 70px;
  height: 70px;
  margin: auto;
}

.loader .circle {
  position: absolute;
  width: 50px;
  height: 50px;
  opacity: 0;
  transform: rotate(225deg);
  animation-iteration-count: infinite;
  animation-name: orbit;
  animation-duration: 5.5s;
  left: 3px;
  top: -5px;
}

.loader .circle:after {
  content: "";
  position: absolute;
  width: 8px;
  height: 8px;
  border-radius: 100%;
  animation: bgg 1500ms ease-in alternate infinite;
}

.loader .circle:nth-child(2) {
  animation-delay: 240ms;
}

.loader .circle:nth-child(3) {
  animation-delay: 480ms;
}

.loader .circle:nth-child(4) {
  animation-delay: 720ms;
}

.loader .circle:nth-child(5) {
  animation-delay: 960ms;
}

@keyframes orbit {
  0% {
    transform: rotate(225deg);
    opacity: 1;
    animation-timing-function: ease-out;
  }
  7% {
    transform: rotate(345deg);
    animation-timing-function: linear;
  }
  30% {
    transform: rotate(455deg);
    animation-timing-function: ease-in-out;
  }
  39% {
    transform: rotate(690deg);
    animation-timing-function: linear;
  }
  70% {
    transform: rotate(815deg);
    opacity: 1;
    animation-timing-function: ease-out;
  }
  75% {
    transform: rotate(945deg);
    animation-timing-function: ease-out;
  }
  76% {
    transform: rotate(945deg);
    opacity: 0;
  }
  100% {
    transform: rotate(945deg);
    opacity: 0;
  }
}
/* ========= Forms Styles ========= */
button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}

input,
select,
textarea {
  width: 100%;
  transition: 0.3s;
}

select {
  transition: 0.3s;
  height: 60px;
  line-height: 28px;
  padding: 10px 20px;
  outline: none;
  color: var(--color-body);
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  border: var(--border-width) solid var(--color-border);
  border-radius: var(--radius);
  font-size: 16px;
  line-height: 28px;
  font-weight: 400;
  padding-right: 30px;
}

input[type=text],
input[type=password],
input[type=email],
input[type=number],
input[type=tel],
textarea {
  font-size: 16px;
  font-weight: 400;
  height: auto;
  line-height: 28px;
  background: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
  padding: 0 15px;
  outline: none;
  border: var(--border-width) solid var(--color-border);
  border-radius: var(--radius);
  color: var(--color-body);
  /* -- Placeholder -- */
}
input[type=text]::placeholder,
input[type=password]::placeholder,
input[type=email]::placeholder,
input[type=number]::placeholder,
input[type=tel]::placeholder,
textarea::placeholder {
  color: var(--body-color);
  /* Firefox */
  opacity: 1;
}
input[type=text]:-ms-input-placeholder,
input[type=password]:-ms-input-placeholder,
input[type=email]:-ms-input-placeholder,
input[type=number]:-ms-input-placeholder,
input[type=tel]:-ms-input-placeholder,
textarea:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: var(--body-color);
  opacity: 1;
}
input[type=text]::-ms-input-placeholder,
input[type=password]::-ms-input-placeholder,
input[type=email]::-ms-input-placeholder,
input[type=number]::-ms-input-placeholder,
input[type=tel]::-ms-input-placeholder,
textarea::-ms-input-placeholder {
  /* Microsoft Edge */
  color: var(--body-color);
  opacity: 1;
}
input[type=text].p-holder__active, .input-active input[type=text], input[type=text].input-active,
input[type=password].p-holder__active,
.input-active input[type=password],
input[type=password].input-active,
input[type=email].p-holder__active,
.input-active input[type=email],
input[type=email].input-active,
input[type=number].p-holder__active,
.input-active input[type=number],
input[type=number].input-active,
input[type=tel].p-holder__active,
.input-active input[type=tel],
input[type=tel].input-active,
textarea.p-holder__active,
textarea.input-active {
  border-color: var(--color-primary);
  /* -- Placeholder -- */
}
input[type=text].p-holder__active::placeholder, .input-active input[type=text]::placeholder, input[type=text].input-active::placeholder,
input[type=password].p-holder__active::placeholder,
.input-active input[type=password]::placeholder,
input[type=password].input-active::placeholder,
input[type=email].p-holder__active::placeholder,
.input-active input[type=email]::placeholder,
input[type=email].input-active::placeholder,
input[type=number].p-holder__active::placeholder,
.input-active input[type=number]::placeholder,
input[type=number].input-active::placeholder,
input[type=tel].p-holder__active::placeholder,
.input-active input[type=tel]::placeholder,
input[type=tel].input-active::placeholder,
textarea.p-holder__active::placeholder,
textarea.input-active::placeholder {
  color: var(--color-primary);
  /* Firefox */
  opacity: 1;
}
input[type=text].p-holder__active:-ms-input-placeholder, .input-active input[type=text]:-ms-input-placeholder, input[type=text].input-active:-ms-input-placeholder,
input[type=password].p-holder__active:-ms-input-placeholder,
.input-active input[type=password]:-ms-input-placeholder,
input[type=password].input-active:-ms-input-placeholder,
input[type=email].p-holder__active:-ms-input-placeholder,
.input-active input[type=email]:-ms-input-placeholder,
input[type=email].input-active:-ms-input-placeholder,
input[type=number].p-holder__active:-ms-input-placeholder,
.input-active input[type=number]:-ms-input-placeholder,
input[type=number].input-active:-ms-input-placeholder,
input[type=tel].p-holder__active:-ms-input-placeholder,
.input-active input[type=tel]:-ms-input-placeholder,
input[type=tel].input-active:-ms-input-placeholder,
textarea.p-holder__active:-ms-input-placeholder,
textarea.input-active:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: var(--color-primary);
}
input[type=text].p-holder__active::-ms-input-placeholder, .input-active input[type=text]::-ms-input-placeholder, input[type=text].input-active::-ms-input-placeholder,
input[type=password].p-holder__active::-ms-input-placeholder,
.input-active input[type=password]::-ms-input-placeholder,
input[type=password].input-active::-ms-input-placeholder,
input[type=email].p-holder__active::-ms-input-placeholder,
.input-active input[type=email]::-ms-input-placeholder,
input[type=email].input-active::-ms-input-placeholder,
input[type=number].p-holder__active::-ms-input-placeholder,
.input-active input[type=number]::-ms-input-placeholder,
input[type=number].input-active::-ms-input-placeholder,
input[type=tel].p-holder__active::-ms-input-placeholder,
.input-active input[type=tel]::-ms-input-placeholder,
input[type=tel].input-active::-ms-input-placeholder,
textarea.p-holder__active::-ms-input-placeholder,
textarea.input-active::-ms-input-placeholder {
  /* Microsoft Edge */
  color: var(--color-primary);
}
input[type=text].p-holder__error, .input-error input[type=text], input[type=text].input-error,
input[type=password].p-holder__error,
.input-error input[type=password],
input[type=password].input-error,
input[type=email].p-holder__error,
.input-error input[type=email],
input[type=email].input-error,
input[type=number].p-holder__error,
.input-error input[type=number],
input[type=number].input-error,
input[type=tel].p-holder__error,
.input-error input[type=tel],
input[type=tel].input-error,
textarea.p-holder__error,
textarea.input-error {
  border-color: #f4282d;
  /* -- Placeholder -- */
}
input[type=text].p-holder__error::placeholder, .input-error input[type=text]::placeholder, input[type=text].input-error::placeholder,
input[type=password].p-holder__error::placeholder,
.input-error input[type=password]::placeholder,
input[type=password].input-error::placeholder,
input[type=email].p-holder__error::placeholder,
.input-error input[type=email]::placeholder,
input[type=email].input-error::placeholder,
input[type=number].p-holder__error::placeholder,
.input-error input[type=number]::placeholder,
input[type=number].input-error::placeholder,
input[type=tel].p-holder__error::placeholder,
.input-error input[type=tel]::placeholder,
input[type=tel].input-error::placeholder,
textarea.p-holder__error::placeholder,
textarea.input-error::placeholder {
  color: #f4282d;
  /* Firefox */
  opacity: 1;
}
input[type=text].p-holder__error:-ms-input-placeholder, .input-error input[type=text]:-ms-input-placeholder, input[type=text].input-error:-ms-input-placeholder,
input[type=password].p-holder__error:-ms-input-placeholder,
.input-error input[type=password]:-ms-input-placeholder,
input[type=password].input-error:-ms-input-placeholder,
input[type=email].p-holder__error:-ms-input-placeholder,
.input-error input[type=email]:-ms-input-placeholder,
input[type=email].input-error:-ms-input-placeholder,
input[type=number].p-holder__error:-ms-input-placeholder,
.input-error input[type=number]:-ms-input-placeholder,
input[type=number].input-error:-ms-input-placeholder,
input[type=tel].p-holder__error:-ms-input-placeholder,
.input-error input[type=tel]:-ms-input-placeholder,
input[type=tel].input-error:-ms-input-placeholder,
textarea.p-holder__error:-ms-input-placeholder,
textarea.input-error:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #f4282d;
}
input[type=text].p-holder__error::-ms-input-placeholder, .input-error input[type=text]::-ms-input-placeholder, input[type=text].input-error::-ms-input-placeholder,
input[type=password].p-holder__error::-ms-input-placeholder,
.input-error input[type=password]::-ms-input-placeholder,
input[type=password].input-error::-ms-input-placeholder,
input[type=email].p-holder__error::-ms-input-placeholder,
.input-error input[type=email]::-ms-input-placeholder,
input[type=email].input-error::-ms-input-placeholder,
input[type=number].p-holder__error::-ms-input-placeholder,
.input-error input[type=number]::-ms-input-placeholder,
input[type=number].input-error::-ms-input-placeholder,
input[type=tel].p-holder__error::-ms-input-placeholder,
.input-error input[type=tel]::-ms-input-placeholder,
input[type=tel].input-error::-ms-input-placeholder,
textarea.p-holder__error::-ms-input-placeholder,
textarea.input-error::-ms-input-placeholder {
  /* Microsoft Edge */
  color: #f4282d;
}
input[type=text].p-holder__error:focus, .input-error input[type=text]:focus, input[type=text].input-error:focus,
input[type=password].p-holder__error:focus,
.input-error input[type=password]:focus,
input[type=password].input-error:focus,
input[type=email].p-holder__error:focus,
.input-error input[type=email]:focus,
input[type=email].input-error:focus,
input[type=number].p-holder__error:focus,
.input-error input[type=number]:focus,
input[type=number].input-error:focus,
input[type=tel].p-holder__error:focus,
.input-error input[type=tel]:focus,
input[type=tel].input-error:focus,
textarea.p-holder__error:focus,
textarea.input-error:focus {
  border-color: #f4282d;
}
input[type=text]:focus,
input[type=password]:focus,
input[type=email]:focus,
input[type=number]:focus,
input[type=tel]:focus,
textarea:focus {
  border-color: var(--color-primary);
}

input[type=search] {
  background: transparent;
  border: 2px solid var(--color-border);
  padding: 5px 15px 5px 30px;
  border-radius: var(--radius);
  color: var(--color-body);
  font-size: var(--font-size-b3);
}
input[type=search]::placeholder {
  color: var(--color-body);
  font-size: var(--font-size-b3);
}
input[type=search]:focus, input[type=search]:focus-visible {
  border-color: var(--color-primary) !important;
  outline: none;
}
input[type=search] i {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
}

.form-group {
  margin-bottom: 20px;
}
.form-group input {
  border: var(--border-width) solid var(--color-border);
  border-radius: var(--radius);
  height: 50px;
  font-size: 16px;
  padding: 0 15px;
}
.form-group input:focus {
  border-color: var(--color-primary);
}
.form-group textarea {
  min-height: 193px;
  border: var(--border-width) solid var(--color-border);
  border-radius: var(--radius);
  resize: none;
  padding: 15px;
  font-size: 16px;
}
.form-group textarea:focus {
  border-color: var(--color-primary);
}

input[type=submit] {
  width: auto;
  font-size: 16px;
  letter-spacing: 2px;
  padding: 15px 20px;
  border-radius: 6px;
  display: block;
  font-weight: 500;
  transition: 0.3s;
  border: var(--border-width) solid var(--color-primary);
  background: var(--color-primary);
  color: #ffffff;
  height: 60px;
  margin-top: 30px;
}
input[type=submit]:hover {
  color: #ffffff;
  -webkit-box-shadow: 0 10px 15px 0 rgba(249, 0, 77, 0.1);
  box-shadow: 0 10px 15px 0 rgba(249, 0, 77, 0.1);
  -webkit-transform: translateY(-5px);
  -ms-transform: translateY(-5px);
  transform: translateY(-5px);
}

.contact-form--1 form input::-webkit-input-placeholder,
.contact-form--1 form textarea::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: var(--color-body) !important;
}

.contact-form--1 form input::-moz-placeholder,
.contact-form--1 form textarea::-moz-placeholder {
  /* Firefox 19+ */
  color: var(--color-body) !important;
}

.contact-form--1 form input:-ms-input-placeholder,
.contact-form--1 form textarea:-ms-input-placeholder {
  /* IE 10+ */
  color: var(--color-body) !important;
}

.contact-form--1 form input:-moz-placeholder,
.contact-form--1 form textarea:-moz-placeholder {
  /* Firefox 18- */
  color: var(--color-body) !important;
}

input[type=checkbox],
input[type=radio] {
  opacity: 0;
  position: absolute;
}
input[type=checkbox] ~ label,
input[type=radio] ~ label {
  position: relative;
  font-size: 15px;
  line-height: 25px;
  color: var(--color-body);
  font-weight: 400;
  cursor: pointer;
  margin-bottom: 0;
  padding: 2px 0;
  padding-left: 30px;
}
input[type=checkbox] ~ label::before,
input[type=radio] ~ label::before {
  content: " ";
  position: absolute;
  top: 6px;
  left: 0;
  width: 18px;
  height: 18px;
  background-color: var(--color-blackest);
  border: 2px solid var(--color-border);
  border-radius: 2px;
  transition: var(--transition);
}
input[type=checkbox] ~ label::after,
input[type=radio] ~ label::after {
  content: " ";
  position: absolute;
  top: 11px;
  left: 4px;
  width: 10px;
  height: 5px;
  background-color: transparent;
  border-bottom: 1px solid var(--color-white);
  border-left: 1px solid var(--color-white);
  border-radius: 2px;
  transform: rotate(-45deg);
  opacity: 0;
  transition: var(--transition);
}
input[type=checkbox]:checked ~ label::before,
input[type=radio]:checked ~ label::before {
  background-color: var(--color-primary);
  border-color: var(--color-primary);
}
input[type=checkbox]:checked ~ label::after,
input[type=radio]:checked ~ label::after {
  opacity: 1;
}

input[type=radio] ~ label::before {
  border-radius: 50%;
}
input[type=radio] ~ label::after {
  width: 8px;
  height: 8px;
  left: 3px;
  background: var(--color-white);
  border-radius: 50%;
}

.form-switch {
  display: flex;
  align-items: center;
}
.form-switch input[type=checkbox] {
  opacity: 1;
  position: relative;
  margin-left: 0 !important;
  margin-top: 0;
  outline: none;
  margin-bottom: 0;
  height: 18px;
  padding: 0;
}
.form-switch input[type=checkbox]:checked {
  background-color: var(--color-primary);
  border-color: var(--color-primary);
}
.form-switch input[type=checkbox]:focus {
  outline: 0;
  box-shadow: none;
}
.form-switch input[type=checkbox] ~ label {
  padding-left: 10px;
}
.form-switch input[type=checkbox] ~ label::before, .form-switch input[type=checkbox] ~ label::after {
  display: none;
}

/*-------------------
    Bootstrap Select  
----------------------*/
.rbt-modern-select .bootstrap-select button.btn-light {
  border: 0 none;
  box-shadow: var(--shadow-1);
  height: 50px;
  padding: 10px 20px;
  outline: none;
  color: var(--color-body);
  border-radius: var(--radius);
  font-size: 16px;
  line-height: 28px;
  font-weight: 400;
  padding-right: 30px;
  background-color: var(--color-white);
  outline: none;
}
.rbt-modern-select.bg-transparent .bootstrap-select button.btn-light {
  box-shadow: none;
  background-color: transparent;
  border: 1px solid var(--color-border);
}
.rbt-modern-select.height-45 .bootstrap-select button.btn-light {
  height: 45px;
}
.rbt-modern-select .bootstrap-select button.actions-btn {
  padding: 7px 6px;
  font-size: 13px;
  box-shadow: none;
  background: #f8f9fa;
  height: 38px;
  line-height: 24px;
  transition: 0.4s;
}
.rbt-modern-select .bootstrap-select button.actions-btn:hover {
  background: var(--color-primary);
  color: var(--color-white);
}
.rbt-modern-select .bootstrap-select .dropdown-menu.inner {
  display: block;
  padding: 10px;
  margin: 0;
}
.rbt-modern-select .bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
  top: 11px;
}
.rbt-modern-select .dropdown-menu {
  padding: 5px 10px !important;
  box-shadow: var(--shadow-1);
  border: 0 none;
  border-radius: 6px !important;
  background-color: var(--color-white);
  min-width: 100%;
  max-width: 100%;
}
.rbt-modern-select .dropdown-item {
  padding: 5px 10px;
  color: var(--color-body);
  border-radius: 4px;
}
.rbt-modern-select .bootstrap-select .dropdown-menu li {
  margin: 0;
  padding: 0;
}
.rbt-modern-select .bootstrap-select .dropdown-menu li.no-results {
  padding: 4px 8px;
  background: transparent;
  white-space: nowrap;
  font-size: 16px;
  color: var(--color-danger);
  padding-bottom: 10px;
}
.rbt-modern-select .dropdown-item.active,
.rbt-modern-select .dropdown-item:active {
  background-color: var(--black-opacity);
  color: var(--color-primary);
}
.rbt-modern-select .bootstrap-select .dropdown-menu li a span.text {
  font-size: 16px;
}
.rbt-modern-select .bootstrap-select .dropdown-menu li a span.text img {
  max-width: 18px;
  margin-right: 5px;
}
.rbt-modern-select .bootstrap-select .dropdown-toggle .filter-option {
  display: flex;
  width: 100%;
  position: relative;
  flex: inherit;
  min-width: 100%;
  align-items: center;
}
.rbt-modern-select .filter-option-inner {
  display: block;
  width: 100%;
}
.rbt-modern-select .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
  overflow: hidden;
  display: block;
  color: var(--color-heading);
}
.rbt-modern-select .bootstrap-select .dropdown-toggle .filter-option-inner-inner img {
  width: 20px;
}
.rbt-modern-select .bootstrap-select .dropdown-toggle:focus {
  outline: none !important;
}
.rbt-modern-select .dropdown-toggle::after {
  border-top: 5px solid;
  border-right: 5px solid transparent;
  border-bottom: 0;
  border-left: 5px solid transparent;
  opacity: 0.5;
}
.rbt-modern-select .btn-check:active + .btn-light:focus,
.rbt-modern-select .btn-check:checked + .btn-light:focus,
.rbt-modern-select .btn-light.active:focus,
.rbt-modern-select .btn-light:active:focus,
.rbt-modern-select .show > .btn-light.dropdown-toggle:focus {
  box-shadow: none;
}
.rbt-modern-select .bs-searchbox .form-control {
  outline: none;
  box-shadow: none;
  border: 2px solid var(--color-border);
  border-radius: 6px;
  margin-bottom: 2px;
  font-size: 16px;
}
.rbt-modern-select .dropdown-item:focus, .rbt-modern-select .dropdown-item:hover {
  color: var(--color-primary);
  background-color: var(--black-opacity);
}
.rbt-modern-select .btn-group > .btn-group:not(:last-child) > .btn,
.rbt-modern-select .btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: var(--radius);
  border-bottom-right-radius: var(--radius);
}
.rbt-modern-select .bs-actionsbox,
.rbt-modern-select .bs-donebutton,
.rbt-modern-select .bs-searchbox {
  padding: 10px;
  padding-bottom: 5px;
}
.rbt-modern-select .bs-searchbox + .bs-actionsbox {
  padding: 0 10px 4px;
}
.rbt-modern-select .bs-actionsbox .btn-group button {
  width: calc(50% - 10px);
  margin: 5px;
  margin-left: 5px !important;
}
.rbt-modern-select .bs-actionsbox .btn-group {
  display: block;
  margin: -5px;
}
.rbt-modern-select .bootstrap-select > select {
  left: 0;
}
.rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder, .rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder:active, .rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder:focus, .rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder:hover {
  color: var(--color-primary);
}
.rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder, .rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder:active, .rbt-modern-select .bootstrap-select > .dropdown-toggle.bs-placeholder:focus {
  border-color: var(--color-primary);
}
.rbt-modern-select .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
  width: 350px;
}

/**
 * Settings
 */
/**
  * Easings
  */
/**
  * Core
  */
[data-sal] {
  transition-duration: 0.2s;
  transition-delay: 0s;
  transition-duration: var(--sal-duration, 0.2s);
  transition-delay: var(--sal-delay, 0s);
  transition-timing-function: var(--sal-easing, ease);
}

[data-sal][data-sal-duration="200"] {
  transition-duration: 0.2s;
}

[data-sal][data-sal-duration="250"] {
  transition-duration: 0.25s;
}

[data-sal][data-sal-duration="300"] {
  transition-duration: 0.3s;
}

[data-sal][data-sal-duration="350"] {
  transition-duration: 0.35s;
}

[data-sal][data-sal-duration="400"] {
  transition-duration: 0.4s;
}

[data-sal][data-sal-duration="450"] {
  transition-duration: 0.45s;
}

[data-sal][data-sal-duration="500"] {
  transition-duration: 0.5s;
}

[data-sal][data-sal-duration="550"] {
  transition-duration: 0.55s;
}

[data-sal][data-sal-duration="600"] {
  transition-duration: 0.6s;
}

[data-sal][data-sal-duration="650"] {
  transition-duration: 0.65s;
}

[data-sal][data-sal-duration="700"] {
  transition-duration: 0.7s;
}

[data-sal][data-sal-duration="750"] {
  transition-duration: 0.75s;
}

[data-sal][data-sal-duration="800"] {
  transition-duration: 0.8s;
}

[data-sal][data-sal-duration="850"] {
  transition-duration: 0.85s;
}

[data-sal][data-sal-duration="900"] {
  transition-duration: 0.9s;
}

[data-sal][data-sal-duration="950"] {
  transition-duration: 0.95s;
}

[data-sal][data-sal-duration="1000"] {
  transition-duration: 1s;
}

[data-sal][data-sal-duration="1050"] {
  transition-duration: 1.05s;
}

[data-sal][data-sal-duration="1100"] {
  transition-duration: 1.1s;
}

[data-sal][data-sal-duration="1150"] {
  transition-duration: 1.15s;
}

[data-sal][data-sal-duration="1200"] {
  transition-duration: 1.2s;
}

[data-sal][data-sal-duration="1250"] {
  transition-duration: 1.25s;
}

[data-sal][data-sal-duration="1300"] {
  transition-duration: 1.3s;
}

[data-sal][data-sal-duration="1350"] {
  transition-duration: 1.35s;
}

[data-sal][data-sal-duration="1400"] {
  transition-duration: 1.4s;
}

[data-sal][data-sal-duration="1450"] {
  transition-duration: 1.45s;
}

[data-sal][data-sal-duration="1500"] {
  transition-duration: 1.5s;
}

[data-sal][data-sal-duration="1550"] {
  transition-duration: 1.55s;
}

[data-sal][data-sal-duration="1600"] {
  transition-duration: 1.6s;
}

[data-sal][data-sal-duration="1650"] {
  transition-duration: 1.65s;
}

[data-sal][data-sal-duration="1700"] {
  transition-duration: 1.7s;
}

[data-sal][data-sal-duration="1750"] {
  transition-duration: 1.75s;
}

[data-sal][data-sal-duration="1800"] {
  transition-duration: 1.8s;
}

[data-sal][data-sal-duration="1850"] {
  transition-duration: 1.85s;
}

[data-sal][data-sal-duration="1900"] {
  transition-duration: 1.9s;
}

[data-sal][data-sal-duration="1950"] {
  transition-duration: 1.95s;
}

[data-sal][data-sal-duration="2000"] {
  transition-duration: 2s;
}

[data-sal][data-sal-delay="50"] {
  transition-delay: 0.05s;
}

[data-sal][data-sal-delay="100"] {
  transition-delay: 0.1s;
}

[data-sal][data-sal-delay="150"] {
  transition-delay: 0.15s;
}

[data-sal][data-sal-delay="200"] {
  transition-delay: 0.2s;
}

[data-sal][data-sal-delay="250"] {
  transition-delay: 0.25s;
}

[data-sal][data-sal-delay="300"] {
  transition-delay: 0.3s;
}

[data-sal][data-sal-delay="350"] {
  transition-delay: 0.35s;
}

[data-sal][data-sal-delay="400"] {
  transition-delay: 0.4s;
}

[data-sal][data-sal-delay="450"] {
  transition-delay: 0.45s;
}

[data-sal][data-sal-delay="500"] {
  transition-delay: 0.5s;
}

[data-sal][data-sal-delay="550"] {
  transition-delay: 0.55s;
}

[data-sal][data-sal-delay="600"] {
  transition-delay: 0.6s;
}

[data-sal][data-sal-delay="650"] {
  transition-delay: 0.65s;
}

[data-sal][data-sal-delay="700"] {
  transition-delay: 0.7s;
}

[data-sal][data-sal-delay="750"] {
  transition-delay: 0.75s;
}

[data-sal][data-sal-delay="800"] {
  transition-delay: 0.8s;
}

[data-sal][data-sal-delay="850"] {
  transition-delay: 0.85s;
}

[data-sal][data-sal-delay="900"] {
  transition-delay: 0.9s;
}

[data-sal][data-sal-delay="950"] {
  transition-delay: 0.95s;
}

[data-sal][data-sal-delay="1000"] {
  transition-delay: 1s;
}

[data-sal][data-sal-easing=linear] {
  transition-timing-function: linear;
}

[data-sal][data-sal-easing=ease] {
  transition-timing-function: ease;
}

[data-sal][data-sal-easing=ease-in] {
  transition-timing-function: ease-in;
}

[data-sal][data-sal-easing=ease-out] {
  transition-timing-function: ease-out;
}

[data-sal][data-sal-easing=ease-in-out] {
  transition-timing-function: ease-in-out;
}

[data-sal][data-sal-easing=ease-in-cubic] {
  transition-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

[data-sal][data-sal-easing=ease-out-cubic] {
  transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}

[data-sal][data-sal-easing=ease-in-out-cubic] {
  transition-timing-function: cubic-bezier(0.645, 0.045, 0.355, 1);
}

[data-sal][data-sal-easing=ease-in-circ] {
  transition-timing-function: cubic-bezier(0.6, 0.04, 0.98, 0.335);
}

[data-sal][data-sal-easing=ease-out-circ] {
  transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
}

[data-sal][data-sal-easing=ease-in-out-circ] {
  transition-timing-function: cubic-bezier(0.785, 0.135, 0.15, 0.86);
}

[data-sal][data-sal-easing=ease-in-expo] {
  transition-timing-function: cubic-bezier(0.95, 0.05, 0.795, 0.035);
}

[data-sal][data-sal-easing=ease-out-expo] {
  transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);
}

[data-sal][data-sal-easing=ease-in-out-expo] {
  transition-timing-function: cubic-bezier(1, 0, 0, 1);
}

[data-sal][data-sal-easing=ease-in-quad] {
  transition-timing-function: cubic-bezier(0.55, 0.085, 0.68, 0.53);
}

[data-sal][data-sal-easing=ease-out-quad] {
  transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

[data-sal][data-sal-easing=ease-in-out-quad] {
  transition-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
}

[data-sal][data-sal-easing=ease-in-quart] {
  transition-timing-function: cubic-bezier(0.895, 0.03, 0.685, 0.22);
}

[data-sal][data-sal-easing=ease-out-quart] {
  transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
}

[data-sal][data-sal-easing=ease-in-out-quart] {
  transition-timing-function: cubic-bezier(0.77, 0, 0.175, 1);
}

[data-sal][data-sal-easing=ease-in-quint] {
  transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
}

[data-sal][data-sal-easing=ease-out-quint] {
  transition-timing-function: cubic-bezier(0.23, 1, 0.32, 1);
}

[data-sal][data-sal-easing=ease-in-out-quint] {
  transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
}

[data-sal][data-sal-easing=ease-in-sine] {
  transition-timing-function: cubic-bezier(0.47, 0, 0.745, 0.715);
}

[data-sal][data-sal-easing=ease-out-sine] {
  transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
}

[data-sal][data-sal-easing=ease-in-out-sine] {
  transition-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
}

[data-sal][data-sal-easing=ease-in-back] {
  transition-timing-function: cubic-bezier(0.6, -0.28, 0.735, 0.045);
}

[data-sal][data-sal-easing=ease-out-back] {
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

[data-sal][data-sal-easing=ease-in-out-back] {
  transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

/**
  * Animations
  */
[data-sal|=fade] {
  opacity: 0;
  transition-property: opacity;
}

[data-sal|=fade].sal-animate,
body.sal-disabled [data-sal|=fade] {
  opacity: 1;
}

[data-sal|=slide] {
  opacity: 0;
  transition-property: opacity, transform;
}

[data-sal=slide-up] {
  transform: translateY(20%);
}

[data-sal=slide-down] {
  transform: translateY(-20%);
}

[data-sal=slide-left] {
  transform: translateX(20%);
}

[data-sal=slide-right] {
  transform: translateX(-20%);
}

[data-sal|=slide].sal-animate,
body.sal-disabled [data-sal|=slide] {
  opacity: 1;
  transform: none;
}

[data-sal|=zoom] {
  opacity: 0;
  transition-property: opacity, transform;
}

[data-sal=zoom-in] {
  transform: scale(0.5);
}

[data-sal=zoom-out] {
  transform: scale(1.1);
}

[data-sal|=zoom].sal-animate,
body.sal-disabled [data-sal|=zoom] {
  opacity: 1;
  transform: none;
}

[data-sal|=flip] {
  backface-visibility: hidden;
  transition-property: transform;
}

[data-sal=flip-left] {
  transform: perspective(2000px) rotateY(-91deg);
}

[data-sal=flip-right] {
  transform: perspective(2000px) rotateY(91deg);
}

[data-sal=flip-up] {
  transform: perspective(2000px) rotateX(-91deg);
}

[data-sal=flip-down] {
  transform: perspective(2000px) rotateX(91deg);
}

[data-sal|=flip].sal-animate,
body.sal-disabled [data-sal|=flip] {
  transform: none;
}

.cd-intro {
  margin: 4em auto;
}

@media only screen and (min-width: 768px) {
  .cd-intro {
    margin: 5em auto;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-intro {
    margin: 6em auto;
  }
}
.cd-headline {
  font-size: 3rem;
  line-height: 1.2;
}

@media only screen and (min-width: 768px) {
  .cd-headline {
    font-size: 4.4rem;
    font-weight: 300;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-headline {
    font-size: 48px;
  }
}
@media only screen and (max-width: 768px) {
  .cd-headline {
    font-size: 40px;
  }
}
@media only screen and (max-width: 479px) {
  .cd-headline {
    font-size: 26px;
  }
}
.cd-words-wrapper {
  display: inline-block;
  position: relative;
  text-align: left;
}

.cd-words-wrapper b {
  display: inline-block;
  position: absolute;
  white-space: nowrap;
  left: 0;
  top: 0;
}

.cd-words-wrapper b.is-visible {
  position: relative;
}

.no-js .cd-words-wrapper b {
  opacity: 0;
}

.no-js .cd-words-wrapper b.is-visible {
  opacity: 1;
}

/* -------------------------------- 

xclip 

-------------------------------- */
.cd-headline.clip span {
  display: inline-block;
  padding: 0;
}

.cd-headline.clip .cd-words-wrapper {
  overflow: hidden;
  vertical-align: middle;
}

.cd-headline.clip .cd-words-wrapper::after {
  content: "";
  position: absolute;
  top: 50%;
  right: 0;
  width: 2px;
  height: 80%;
  background-color: var(--color-secondary);
  transform: translateY(-50%);
}

.cd-headline.clip b {
  opacity: 0;
}

.cd-headline.clip b.is-visible {
  opacity: 1;
}

/**************************************
    Theme Styles
***************************************/
/* Theme Bg Color  */
.rainbow-gradient-circle {
  position: fixed;
  left: -250px;
  top: 250px;
  right: auto;
  bottom: auto;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  background-image: linear-gradient(45deg, var(--color-primary), var(--color-primary));
  opacity: 0.25;
  -webkit-filter: blur(100px);
  filter: blur(100px);
}
.rainbow-gradient-circle.theme-pink {
  left: auto;
  top: -250px;
  right: -250px;
  bottom: auto;
  background-image: linear-gradient(45deg, var(--color-secondary), var(--color-tertiary));
}

.theme-shape {
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.theme-shape::before {
  position: absolute;
  left: -250px;
  top: 250px;
  right: auto;
  bottom: auto;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  background-image: linear-gradient(45deg, var(--color-primary), var(--color-primary));
  opacity: 0.2;
  filter: blur(100px);
  content: "";
}
.theme-shape::after {
  position: absolute;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  opacity: 0.2;
  filter: blur(100px);
  content: "";
  left: auto;
  top: -250px;
  right: -250px;
  bottom: auto;
  background-image: linear-gradient(45deg, var(--color-secondary), var(--color-tertiary));
}

.link-hover a {
  display: inline-block;
  position: relative;
}
.link-hover a::after {
  position: absolute;
  content: "";
  left: auto;
  bottom: 0;
  background: currentColor;
  width: 0;
  height: 2px;
  transition: 0.3s;
  right: 0;
}
.link-hover a:hover::after {
  width: 100%;
  left: 0;
  right: auto;
}

/**************************************
    Header Styles
***************************************/
/*--------------------------
    Header Styles  
 --------------------------*/
.logo-dark {
  display: none;
}

.header-default {
  max-width: 100%;
  border-bottom: 1px solid var(--color-border);
  background-color: var(--color-darker);
  color: #fff;
  font-size: 12px;
  z-index: 99;
  position: relative;
}
.header-default .logo a {
  display: flex;
  height: 80px;
  line-height: 80px;
  align-items: center;
}
.header-default .logo a img {
  max-height: 35px;
}
.header-default .header-right {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
.header-default.header-relative {
  position: relative;
}
.header-default .header-right {
  display: flex;
  justify-content: flex-end;
}
.header-default .header-right .header-btn {
  margin-left: 25px;
}
@media only screen and (max-width: 767px) {
  .header-default .header-right .header-btn {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .header-default a.btn-default,
  .header-default button.btn-default {
    height: 36px;
    line-height: 35px;
    padding: 0 10px;
    font-size: 12px;
  }
}
@media only screen and (max-width: 767px) {
  .header-default a.btn-default.btn-small,
  .header-default button.btn-default.btn-small {
    height: 36px;
    line-height: 35px;
    padding: 0 10px;
    font-size: 12px;
  }
}
.header-default.header-transparent {
  position: absolute;
  left: 0;
  right: 0;
  width: auto;
  background: transparent !important;
  backdrop-filter: inherit;
}

.header-transparent-with-topbar {
  position: absolute;
  left: 0;
  right: 0;
  width: auto;
  z-index: 99;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-with-topbar {
    position: relative;
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-with-topbar {
    position: relative;
  }
}
.header-transparent-with-topbar .header-top-bar {
  background-color: transparent;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-with-topbar .header-top-bar {
    background-color: var(--color-darker);
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-with-topbar .header-top-bar {
    background-color: var(--color-darker);
  }
}
.header-transparent-with-topbar .header-default {
  background-color: transparent;
  background-image: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-with-topbar .header-default {
    background-color: var(--color-darker);
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-with-topbar .header-default {
    background-color: var(--color-darker);
  }
}

.hamberger-button {
  background: var(--color-primary-alt);
  border: 0 none;
  color: var(--color-white);
  width: 40px;
  height: 40px;
  font-size: 21px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100%;
}

.header-left-align .mainmenu-nav {
  margin-left: 30px;
}

.rainbow-header.sticky {
  position: fixed;
  top: 0;
  left: 0;
  background-color: var(--color-dark) !important;
  width: 100%;
  height: 80px;
  animation: headerSticky 0.95s ease forwards;
  z-index: 9;
}

.rbt-fluid-header .container-wrapper {
  max-width: 1600px;
}

.mainmenu.one-menu-item {
  list-style: none;
  margin: 0;
  padding: 0;
}
.mainmenu.one-menu-item li a {
  display: flex !important;
  justify-content: center;
  align-items: center;
  padding: 0;
  padding-left: 17px;
}

@media only screen and (max-width: 767px) {
  .header-round-btn {
    padding: 5px !important;
  }
}
.header-round-btn span {
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--color-primary);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  color: var(--color-white);
  border: none;
  font-size: var(--font-size-b1);
}

@keyframes headerSticky {
  0% {
    transform: translateY(-100%);
  }
  100% {
    transform: translateY(0);
  }
}
/*--------------------------
    Navigation Styles 
----------------------------*/
.mainmenu-nav .mainmenu {
  display: flex;
  margin: 0;
  padding: 0;
}
.mainmenu-nav .mainmenu > li > a {
  color: var(--color-heading);
  font-size: 16px;
  font-weight: 500;
  padding: 0 17px;
  display: block;
  height: 80px;
  line-height: 80px;
  transition: 0.3s;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .mainmenu-nav .mainmenu > li > a {
    padding: 0 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .mainmenu-nav .mainmenu > li > a {
    padding: 0 12px;
  }
}
.mainmenu-nav .mainmenu > li > a:hover, .mainmenu-nav .mainmenu > li > a.active {
  color: #FF3BD4 !important;
}
.mainmenu-nav .mainmenu > li.current > a {
  color: #FF3BD4 !important;
}
.mainmenu-nav .mainmenu li {
  margin-top: 0;
  margin-bottom: 0;
  position: relative;
}
.mainmenu-nav .mainmenu li.has-droupdown .submenu {
  min-width: 260px;
  height: auto;
  position: absolute;
  top: 90%;
  left: 0;
  z-index: 90;
  opacity: 0;
  visibility: hidden;
  text-align: left;
  padding: 12px 0;
  transition: 0.3s;
  border-radius: 0 0 10px 10px;
  background-color: var(--color-blackest);
  box-shadow: var(--shadow-lighter);
}
.mainmenu-nav .mainmenu li.has-droupdown .submenu li a {
  font-weight: 500;
  padding: 5px 20px;
  font-size: 14px;
  display: block;
  color: var(--color-heading);
  margin: 0 10px;
  border-radius: 3px;
}
.mainmenu-nav .mainmenu li.has-droupdown .submenu li a:hover {
  color: #FF3BD4 !important;
  background: var(--color-darker);
}
.mainmenu-nav .mainmenu li.has-droupdown .submenu li a.active {
  color: #FF3BD4 !important;
  background: var(--color-darker);
}
.mainmenu-nav .mainmenu li.has-droupdown:hover .submenu {
  opacity: 1;
  visibility: visible;
  top: 100%;
}
.mainmenu-nav .mainmenu li.with-megamenu {
  position: static;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu {
  position: absolute;
  transition: 0.3s;
  top: 90%;
  width: 100%;
  left: 0;
  right: 0;
  padding: 0 7px;
  visibility: hidden;
  opacity: 0;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu.right-align {
  right: 0;
  left: unset;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper {
  border-radius: 0 0 10px 10px;
  background-color: var(--color-blackest);
  box-shadow: var(--shadow-lighter);
  border: 1px solid var(--color-border);
  border-top: none;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .rbt-short-title {
  padding: 15px 25px;
  text-align: left;
  margin-bottom: 0;
  border-bottom: 1px solid var(--color-border);
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item {
  padding: 15px 10px;
  border-right: 1px solid var(--color-extra04);
  height: 100%;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a {
  font-weight: 500;
  padding: 5px 14px;
  font-size: 15px;
  display: block;
  color: var(--color-heading);
  margin: 0 10px;
  border-radius: 4px;
  transition: 0.3s;
  display: flex;
  align-items: center;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a .rainbow-badge-card {
  margin-left: 10px;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a:hover, .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a.active {
  color: #FF3BD4 !important;
  background: var(--color-darker);
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu.with-mega-item-2 {
  width: 600px;
  margin: inherit;
}
.mainmenu-nav .mainmenu li.with-megamenu .single-mega-item:last-child .mega-menu-item {
  border-right: 0 none;
}
.mainmenu-nav .mainmenu li.with-megamenu:hover .rainbow-megamenu {
  opacity: 1;
  visibility: visible;
  top: 100%;
}

.one-menu .mainmenu li.with-megamenu .rainbow-megamenu .wrapper {
  padding: 15px 20px;
}

.rbt-short-title {
  font-size: 12px;
  padding-bottom: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  opacity: 0.5;
  margin-bottom: 6px;
  border-bottom: 1px solid var(--color-border);
}

/*--------------------------
    Header Top Styles  
-----------------------------*/
.header-top-news {
  position: relative;
  top: 0;
  left: 0;
  right: 0;
  width: auto;
  z-index: 99;
  transition: 0.4s;
  margin-bottom: -1px;
}
.header-top-news.bg-image1 {
  background-image: url(../images/header-top/top-banner.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}
.header-top-news .inner {
  display: flex;
  justify-content: center;
  padding: 8px 0;
  align-items: center;
  position: relative;
}
@media only screen and (max-width: 767px) {
  .header-top-news .inner {
    display: block;
    text-align: center;
    padding: 15px 0;
  }
}
.header-top-news .inner .content .news-text {
  display: inline-block;
  margin-left: 15px;
  color: var(--color-body);
  font-size: 14px;
}
@media only screen and (max-width: 575px) {
  .header-top-news .inner .content .news-text {
    margin-left: 0;
    margin-top: 10px;
    display: block;
  }
}
.header-top-news .inner .right-button {
  margin-left: 30px;
}
@media only screen and (max-width: 767px) {
  .header-top-news .inner .right-button {
    margin-left: 0;
  }
}
.header-top-news .icon-close {
  position: absolute;
  right: 30px;
  top: 50%;
  transform: translateY(-50%);
}
@media only screen and (max-width: 767px) {
  .header-top-news .icon-close {
    right: 10px;
    top: 9px;
    transform: none;
  }
}
.header-top-news .close-button {
  background: transparent;
  color: #fff;
  border: 2px solid var(--color-border);
  width: 35px;
  display: inline-block;
  height: 35px;
  border-radius: 100%;
  padding: 0;
  margin: 0;
  line-height: 30px;
  transition: 0.3s;
}
.header-top-news .close-button:hover {
  background: var(--color-primary);
  border-color: var(--color-primary);
  color: #fff;
}
.header-top-news.deactive {
  display: none;
}

/*----------------------------
    Header Top Bar  
----------------------------*/
.header-top-bar {
  padding: 10px 0;
  border-bottom: 1px solid var(--color-border);
  background-color: var(--color-darker);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-top-bar .header-left {
    text-align: center;
  }
}
@media only screen and (max-width: 767px) {
  .header-top-bar .header-left {
    text-align: center;
  }
}
.header-top-bar .header-left p {
  margin-bottom: 0;
}
.header-top-bar .header-left p a {
  transition: 0.3s;
}
.header-top-bar .header-left p a i {
  position: relative;
  top: 2px;
}
.header-top-bar .header-right {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  flex-wrap: wrap;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-top-bar .header-right {
    justify-content: center;
    margin-top: 6px;
  }
}
@media only screen and (max-width: 767px) {
  .header-top-bar .header-right {
    justify-content: center;
    margin-top: 6px;
  }
}
.header-top-bar .header-right .address-content {
  display: flex;
  align-items: center;
  margin: 0 -10px;
}
.header-top-bar .header-right .address-content p {
  margin-bottom: 0;
  padding: 0 10px;
  font-size: 14px;
  position: relative;
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 575px) {
  .header-top-bar .header-right .address-content p {
    padding: 0 8px;
  }
}
.header-top-bar .header-right .address-content p + p::before {
  position: absolute;
  content: "";
  height: 20px;
  width: 2px;
  background: var(--color-border);
  top: 50%;
  transform: translateY(-50%);
  left: -1px;
}
.header-top-bar .header-right .address-content p a {
  transition: 0.3s;
}
.header-top-bar .header-right .address-content p i {
  margin-right: 8px;
  font-size: 16px;
}
.header-top-bar .social-default.icon-naked li {
  margin: 1px;
}
.header-top-bar .social-default.icon-naked li a {
  color: var(--color-body);
  font-size: 15px;
  line-height: 26px;
}
.header-top-bar .social-icon-wrapper {
  position: relative;
  margin-left: 10px;
  padding-left: 10px;
}
@media only screen and (max-width: 575px) {
  .header-top-bar .social-icon-wrapper {
    margin-left: 0;
    padding-left: 0;
    flex-basis: 100%;
  }
}
.header-top-bar .social-icon-wrapper::before {
  position: absolute;
  content: "";
  height: 20px;
  width: 2px;
  background: var(--color-border);
  top: 50%;
  transform: translateY(-50%);
  left: -1px;
}
@media only screen and (max-width: 575px) {
  .header-top-bar .social-icon-wrapper::before {
    display: none;
  }
}

.header-transparent-with-topbar {
  position: absolute;
  left: 0;
  right: 0;
  width: auto;
  z-index: 99;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-with-topbar {
    position: relative;
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-with-topbar {
    position: relative;
  }
}
.header-transparent-with-topbar .header-top-bar {
  background-color: transparent;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-with-topbar .header-top-bar {
    background-color: var(--color-darker);
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-with-topbar .header-top-bar {
    background-color: var(--color-darker);
  }
}
.header-transparent-with-topbar .header-default {
  background-color: transparent;
  background-image: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .header-transparent-with-topbar .header-default {
    background-color: var(--color-darker);
  }
}
@media only screen and (max-width: 767px) {
  .header-transparent-with-topbar .header-default {
    background-color: var(--color-darker);
  }
}

/*------------------------------
    Popup Menu Styles  
--------------------------------*/
.popup-mobile-menu {
  z-index: 9999;
  position: fixed;
  content: "";
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.8);
  visibility: hidden;
  opacity: 0;
  transition: opacity 0.5s ease-out;
}
.popup-mobile-menu .inner-popup {
  width: 320px;
  z-index: 999;
  position: absolute;
  background-color: var(--color-blackest);
  height: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  opacity: 0;
  left: -150px;
  transition: all 0.5s ease-out;
}
.popup-mobile-menu .inner-popup .header-top {
  display: flex;
  border-bottom: 1px solid var(--color-border);
  align-items: center;
  justify-content: space-between;
  padding: 15px 20px;
}
.popup-mobile-menu .inner-popup .header-top .logo a img {
  max-height: 30px;
}
.popup-mobile-menu .inner-popup .header-top .close-menu .close-button {
  background: var(--color-primary);
  border: 0 none;
  color: var(--color-white);
  width: 40px;
  height: 40px;
  font-size: 21px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100%;
}
.popup-mobile-menu.active {
  visibility: visible;
  opacity: 1;
}
.popup-mobile-menu.active .inner-popup {
  opacity: 1;
  left: 0;
  overflow-y: auto;
}
.popup-mobile-menu .mainmenu {
  list-style: none;
  padding: 0;
  margin: 0;
}
.popup-mobile-menu .mainmenu li {
  margin: 5px 0;
}
.popup-mobile-menu .mainmenu li a {
  padding: 10px 12px;
  display: block;
  font-size: 16px;
  font-weight: 500;
}
.popup-mobile-menu .mainmenu li a.active {
  color: var(--color-primary) !important;
}
.popup-mobile-menu .mainmenu .has-droupdown .submenu {
  padding: 0;
  max-width: 100%;
  list-style: none;
  padding-left: 14px;
  display: none;
}
.popup-mobile-menu .mainmenu .has-droupdown .submenu li a {
  font-size: 15px;
}
.popup-mobile-menu .mainmenu .has-droupdown .submenu li a.active {
  color: var(--color-primary) !important;
}
.popup-mobile-menu .mainmenu .has-menu-child-item > a {
  position: relative;
}
.popup-mobile-menu .mainmenu .has-menu-child-item > a::after {
  position: absolute;
  content: "\e9b1";
  font-family: "feather" !important;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  transition: 0.4s;
  font-size: 18px;
}
.popup-mobile-menu .mainmenu .has-menu-child-item > a.open::after {
  content: "\e996";
}
.popup-mobile-menu .mainmenu .rainbow-megamenu {
  padding: 0;
  max-width: 100%;
  list-style: none;
  padding-left: 14px;
  display: none;
}
.popup-mobile-menu .mainmenu .mega-menu-item {
  list-style: none;
  padding: 0;
  margin: 0;
  padding-left: 0;
}
.popup-mobile-menu .mainmenu .mega-menu-item li a {
  font-size: 15px;
}
.popup-mobile-menu .mainmenu .mega-menu-item li:last-child {
  border-bottom: 1px solid var(--color-border);
}
.popup-mobile-menu .mainmenu .single-mega-item:last-child .mega-menu-item li:last-child {
  border-bottom-color: transparent;
}
.popup-mobile-menu .mainmenu .genarator-section .genarator-card-group li {
  flex-basis: 100%;
}
.popup-mobile-menu .mainmenu .genarator-section .genarator-card-group li + li {
  border-top: none;
}
.popup-mobile-menu .mainmenu .genarator-section .genarator-card-group .genarator-card {
  padding: 10px 15px 10px;
}
.popup-mobile-menu .mainmenu .header-menu-img {
  margin: 15px 0;
}
.popup-mobile-menu .header-btn {
  text-align: center;
  margin-bottom: 20px;
}
@media only screen and (max-width: 575px) {
  .popup-mobile-menu .header-btn .btn-default {
    display: block;
    margin: 0 20px;
  }
}
.popup-mobile-menu .content {
  padding: 10px 15px;
}
.popup-mobile-menu .content .description {
  margin-bottom: 10px;
}

/*----------------------
    One Page Nav 
------------------------*/
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: auto;
  }
}
.mainmenu-nav.onepagenav .mainmenu > li > a {
  position: relative;
  padding: 0;
}

.mainmenu-nav.onepagenav .mainmenu li {
  margin: 0 17px;
}

.mainmenu-nav.onepagenav .mainmenu > li > a::after {
  position: absolute;
  content: "";
  left: 0;
  background: var(--color-primary);
  width: 0;
  height: 2px;
  bottom: 0;
  opacity: 0;
  transition: 0.4s;
}

.mainmenu-nav.onepagenav .mainmenu > li.current > a::after {
  width: 100%;
  opacity: 1;
}

@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .header-default.header-center-align .header-right .header-btn {
    margin-left: 0;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .mainmenu-nav.onepagenav .mainmenu li {
    margin: 0 7px;
  }
}
/**************************************
            Elements 
***************************************/
/*====================
    Breadcrump Area 
======================*/
.breadcarumb-style-1 {
  border-bottom: 1px solid var(--color-border);
}

.breadcrumb-inner {
  text-align: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-inner .title br {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .breadcrumb-inner .title br {
    display: none;
  }
}
.breadcrumb-inner ul.page-list {
  margin-top: 16px;
}
.breadcrumb-inner ul.page-list li {
  display: inline-block;
  color: var(--color-body);
  padding: 0 12px;
  position: relative;
  font-size: 16px;
  margin: 0;
}
.breadcrumb-inner ul.page-list li::after {
  position: absolute;
  content: "";
  top: 50%;
  transform: translateY(-50%);
  background-color: var(--color-body);
  width: 5px;
  height: 5px;
  border-radius: 100%;
  opacity: 0.5;
  right: -5px;
}
.breadcrumb-inner ul.page-list li a {
  color: var(--color-body);
  transition: 0.5s;
}
.breadcrumb-inner ul.page-list li a:hover {
  color: var(--color-primary);
}
.breadcrumb-inner ul.page-list li.rainbow-breadcrumb-item.active {
  color: var(--color-body);
  opacity: 0.6;
}
.breadcrumb-inner ul.page-list li.rainbow-breadcrumb-item.active::after {
  display: none;
}

.section-title .subtitle {
  font-weight: 600;
  letter-spacing: 0.5px;
  line-height: 18px;
  font-size: 16px;
  border-radius: 4px;
  margin-bottom: 12px;
  display: inline-block;
  padding: 7px 14px;
  background-color: var(--color-blackest);
  box-shadow: var(--shadow-lighter);
}
.section-title .subtitle.radius-rounded {
  border-radius: 100px;
}
@media only screen and (max-width: 767px) {
  .section-title .description br {
    display: none;
  }
}
.section-title p:empty {
  display: none;
}

.contact-form-1 .form-group {
  display: block;
}

.section-title-2 .title {
  color: var(--color-body);
  display: block;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 19px;
  opacity: 0.6;
}

/* Button Styles  */
.button-group {
  margin: -10px;
}
.button-group a,
.button-group button {
  margin: 10px;
}

a.btn-default,
button.btn-default,
div.btn-default {
  padding: 0 28px;
  border-style: solid;
  border-width: 0px;
  border-color: transparent;
  border-radius: 8px;
  background-color: transparent;
  background: linear-gradient(94deg, #dd00ac 10.66%, #7130c3 53.03%, #410093 96.34%, rgba(255, 0, 238, 0.26) 191.41%, rgba(255, 59, 212, 0) 191.43%);
  background-size: 200% auto;
  transition-duration: 300ms;
  color: var(--color-white);
  font-size: 16px;
  font-weight: 400;
  text-align: center;
  text-decoration: none;
  text-shadow: var(--shadow-light);
  display: inline-block;
  height: 50px;
  line-height: 50px;
  letter-spacing: 0.5px;
  width: auto;
  transition: 0.4s;
}
a.btn-default.bg-solid-primary,
button.btn-default.bg-solid-primary,
div.btn-default.bg-solid-primary {
  background: var(--color-primary);
}
a.btn-default.bg-solid-primary:hover,
button.btn-default.bg-solid-primary:hover,
div.btn-default.bg-solid-primary:hover {
  box-shadow: 0 0 20px 5px rgba(112, 100, 233, 0.1);
}
a.btn-default.bg-gradient-secondary,
button.btn-default.bg-gradient-secondary,
div.btn-default.bg-gradient-secondary {
  background: linear-gradient(to right, var(--color-secondary-gradient-start), var(--color-secondary-gradient-end));
}
a.btn-default.bg-gradient-tertiary,
button.btn-default.bg-gradient-tertiary,
div.btn-default.bg-gradient-tertiary {
  background: linear-gradient(to right, var(--color-tertiary-gradient-start), var(--color-tertiary-gradient-end));
}
a.btn-default.bg-light-gradient,
button.btn-default.bg-light-gradient,
div.btn-default.bg-light-gradient {
  position: relative;
  background: radial-gradient(85% 120% at 50% 125%, #ff3bd4 0.74%, #7130c3 65%, #0f1021 100%);
  overflow: hidden;
  transition: var(--transition);
}
a.btn-default.bg-light-gradient .has-bg-light,
button.btn-default.bg-light-gradient .has-bg-light,
div.btn-default.bg-light-gradient .has-bg-light {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease-in-out;
  background: radial-gradient(85% 142% at 50% 75%, #ff3bd4 0.74%, #7130c3 65%, #0f1021 100%);
}
a.btn-default.bg-light-gradient > span,
button.btn-default.bg-light-gradient > span,
div.btn-default.bg-light-gradient > span {
  position: relative;
}
a.btn-default.bg-light-gradient:hover,
button.btn-default.bg-light-gradient:hover,
div.btn-default.bg-light-gradient:hover {
  transform: translateY(-5px);
  box-shadow: 0px 24px 25px -21px #CE38CF;
}
a.btn-default.bg-light-gradient:hover .has-bg-light,
button.btn-default.bg-light-gradient:hover .has-bg-light,
div.btn-default.bg-light-gradient:hover .has-bg-light {
  opacity: 1;
  visibility: visible;
}
a.btn-default.btn-icon .icon,
button.btn-default.btn-icon .icon,
div.btn-default.btn-icon .icon {
  position: relative;
  top: 2px;
  padding-left: 4px;
}
a.btn-default.btn-icon .icon i,
button.btn-default.btn-icon .icon i,
div.btn-default.btn-icon .icon i {
  width: 20px;
  height: 20px;
}
a.btn-default:hover,
button.btn-default:hover,
div.btn-default:hover {
  box-shadow: var(--shadow-primary);
  -webkit-filter: brightness(125%);
  filter: brightness(125%);
  color: var(--color-white);
  text-decoration: none;
}
a.btn-default.btn-small,
button.btn-default.btn-small,
div.btn-default.btn-small {
  height: 40px;
  line-height: 40px;
  padding: 0 20px;
  font-size: 14px;
  font-weight: 500;
}
a.btn-default.btn-medium,
button.btn-default.btn-medium,
div.btn-default.btn-medium {
  height: 65px;
  line-height: 65px;
  padding: 0 40px;
}
a.btn-default.btn-large,
button.btn-default.btn-large,
div.btn-default.btn-large {
  height: 60px;
  line-height: 60px;
  padding: 0 37px;
  font-size: 17px;
}
@media only screen and (max-width: 767px) {
  a.btn-default.btn-large,
  button.btn-default.btn-large,
  div.btn-default.btn-large {
    padding: 0 25px;
  }
}
a.btn-default.btn-extra-large,
button.btn-default.btn-extra-large,
div.btn-default.btn-extra-large {
  height: 90px;
  line-height: 90px;
  padding: 0 70px;
  font-size: 20px;
}
@media only screen and (max-width: 767px) {
  a.btn-default.btn-extra-large,
  button.btn-default.btn-extra-large,
  div.btn-default.btn-extra-large {
    padding: 0 44px;
  }
}
a.btn-default.btn-border,
button.btn-default.btn-border,
div.btn-default.btn-border {
  background-image: inherit;
  border-color: var(--color-border);
  color: var(--color-heading);
  border-width: 2px;
  border-style: solid;
  line-height: 46px;
}
a.btn-default.btn-border.btn-small,
button.btn-default.btn-border.btn-small,
div.btn-default.btn-border.btn-small {
  line-height: 37px;
}
a.btn-default.btn-border.btn-medium,
button.btn-default.btn-border.btn-medium,
div.btn-default.btn-border.btn-medium {
  line-height: 61px;
}
a.btn-default.btn-border.btn-large,
button.btn-default.btn-border.btn-large,
div.btn-default.btn-border.btn-large {
  line-height: 56px;
}
a.btn-default.btn-border.btn-extra-large,
button.btn-default.btn-border.btn-extra-large,
div.btn-default.btn-border.btn-extra-large {
  line-height: 87px;
}
a.btn-default.btn-border:hover,
button.btn-default.btn-border:hover,
div.btn-default.btn-border:hover {
  background-color: var(--color-primary);
  border-color: var(--color-primary);
  color: var(--color-heading);
}
a.btn-default.text-underline,
button.btn-default.text-underline,
div.btn-default.text-underline {
  background-image: inherit;
  border-color: var(--color-white);
}
a.btn-default.text-underline span,
button.btn-default.text-underline span,
div.btn-default.text-underline span {
  position: relative;
  display: inline-block;
  line-height: 30px;
}
a.btn-default.text-underline:hover,
button.btn-default.text-underline:hover,
div.btn-default.text-underline:hover {
  box-shadow: none;
  background-color: var(--color-primary);
  border-color: var(--color-primary);
}
a.btn-default.round,
button.btn-default.round,
div.btn-default.round {
  border-radius: 100px;
}
a.btn-default.square,
button.btn-default.square,
div.btn-default.square {
  border-radius: 0;
}
a.btn-default.rounded-player,
button.btn-default.rounded-player,
div.btn-default.rounded-player {
  border-radius: 100%;
  width: 100px;
  height: 100px;
  padding: 0;
  line-height: 100px;
  font-size: 30px;
  display: inline-block;
}
@media only screen and (max-width: 767px) {
  a.btn-default.rounded-player,
  button.btn-default.rounded-player,
  div.btn-default.rounded-player {
    width: 70px;
    height: 70px;
    line-height: 70px;
  }
}
a.btn-default.rounded-player span i,
button.btn-default.rounded-player span i,
div.btn-default.rounded-player span i {
  position: relative;
  top: 1px;
  left: 2px;
}
a.btn-default.rounded-player.border,
button.btn-default.rounded-player.border,
div.btn-default.rounded-player.border {
  background-image: inherit;
  border-color: var(--color-white) !important;
  border-width: 2px !important;
}
a.btn-default.rounded-player.border:hover,
button.btn-default.rounded-player.border:hover,
div.btn-default.rounded-player.border:hover {
  background-color: var(--color-primary);
  border-color: var(--color-primary) !important;
}
a.btn-default.rounded-player.sm-size,
button.btn-default.rounded-player.sm-size,
div.btn-default.rounded-player.sm-size {
  width: 70px;
  height: 70px;
  line-height: 70px;
}
a.btn-default.bg-white-dropshadow,
button.btn-default.bg-white-dropshadow,
div.btn-default.bg-white-dropshadow {
  background-color: rgba(255, 255, 255, 0.4);
  backdrop-filter: blur(7.5px);
}

.btn-read-more span {
  position: relative;
  color: var(--color-heading);
  display: inline-block;
  line-height: 35px;
  transition: 0.3s;
}
.btn-read-more span::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 2px;
  background-color: var(--color-border);
  transition: 0.3s;
  width: 100%;
  bottom: 3px;
}
.btn-read-more span::before {
  position: absolute;
  content: "";
  left: auto;
  bottom: 2px;
  background: var(--color-primary);
  width: 0;
  height: 2px;
  transition: 0.3s;
  right: 0;
}
.btn-read-more:hover span {
  color: var(--color-primary);
}
.btn-read-more:hover span::before {
  width: 100%;
  left: 0;
  right: auto;
}

.rainbow-badge {
  display: inline-block;
  background-color: var(--color-primary);
  padding: 0 16px;
  height: 30px;
  line-height: 30px;
  border-radius: 100px;
  color: #fff;
  font-size: 12px;
  letter-spacing: 0.5px;
}
.rainbow-badge.position-top-right {
  position: absolute;
  right: 10px;
  top: 10px;
}

.rainbow-badge-card {
  background-color: transparent;
  background: linear-gradient(94deg, #dd00ac 10.66%, #7130c3 53.03%, #410093 96.34%, rgba(255, 0, 238, 0.26) 191.41%, rgba(255, 59, 212, 0) 191.43%);
  padding: 1px 10px;
  border-radius: 100px;
  color: #fff;
  font-size: 12px;
  font-weight: 500;
  display: inline-block;
  position: relative;
  z-index: 2;
  letter-spacing: 0.5px;
}
.rainbow-badge-card.badge-border {
  border: 2px solid var(--color-border);
}
.rainbow-badge-card.badge-border::before {
  content: none;
}
.rainbow-badge-card.position-top-right {
  position: absolute;
  right: 10px;
  top: 10px;
}

.btn-collaborate-play i {
  height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  border-radius: 500px;
  display: inline-block;
  background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-primary) 75%, var(--color-secondary) 100%) 95%/200% 100%;
}
.btn-collaborate-play span {
  display: inline-block;
}

.btn-collaborate-play {
  height: 30px;
  width: 30px;
  line-height: 30px;
  align-items: center;
  transition: var(--transition);
}
.btn-collaborate-play span {
  margin-left: 15px;
}
.btn-collaborate-play:hover {
  color: var(--color-white);
}

/*--------------------
    Service Styles  
----------------------*/
.service.service__style--1 {
  padding: 50px 35px;
  padding-bottom: 55px;
  transition: transform 0.65s cubic-bezier(0.05, 0.2, 0.1, 1), box-shadow 0.65s cubic-bezier(0.05, 0.2, 0.1, 1);
  position: relative;
  z-index: 2;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .service.service__style--1 {
    padding: 30px 28px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1 {
    padding: 30px 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--1 {
    padding: 30px 25px;
  }
}
@media only screen and (max-width: 767px) {
  .service.service__style--1 {
    padding: 30px 14px;
  }
}
.service.service__style--1 .icon {
  font-size: 45px;
  font-weight: 400;
  margin-bottom: 23px;
  color: var(--color-primary);
  text-align: center;
  border-radius: 100%;
  display: flex;
  justify-content: center;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1 .icon {
    margin-bottom: 11px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--1 .icon {
    margin-bottom: 11px;
  }
}
.service.service__style--1 .icon i {
  stroke-width: 1 !important;
  font-size: 45px;
}
.service.service__style--1 .content .title {
  margin-bottom: 19px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1 .content .title {
    font-size: var(--h5);
    margin-bottom: 8px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--1 .content .title {
    margin-bottom: 8px;
  }
}
.service.service__style--1 .content .title a {
  color: inherit;
}
.service.service__style--1 .content .title a:hover {
  color: var(--color-primary);
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1 .content p {
    font-size: var(--font-size-b2);
    margin-bottom: 8px;
  }
}
.service.service__style--1:hover {
  transform: translateY(-5px);
}
.service.service__style--1.rbt-border-none {
  border: none;
}
.service.service__style--1.rbt-border {
  border: 1px solid var(--color-border);
}
.service.service__style--1.text-left, .service.service__style--1.text-start {
  padding: 50px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .service.service__style--1.text-left, .service.service__style--1.text-start {
    padding: 40px 30px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1.text-left, .service.service__style--1.text-start {
    padding: 40px 30px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--1.text-left, .service.service__style--1.text-start {
    padding: 40px 30px;
  }
}
@media only screen and (max-width: 767px) {
  .service.service__style--1.text-left, .service.service__style--1.text-start {
    padding: 30px 20px;
  }
}
.service.service__style--1.text-left .icon, .service.service__style--1.text-start .icon {
  justify-content: left;
}
.service.service__style--1.icon-circle-style {
  background-color: transparent;
  box-shadow: none;
  padding: 0px 35px;
  margin-top: 25px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .service.service__style--1.icon-circle-style {
    padding: 0px 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1.icon-circle-style {
    padding: 0px 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--1.icon-circle-style {
    padding: 0px 10px;
  }
}
@media only screen and (max-width: 767px) {
  .service.service__style--1.icon-circle-style {
    padding: 0px 10px;
  }
}
.service.service__style--1.icon-circle-style .icon {
  font-size: 39px;
  color: var(--color-primary);
  display: flex;
  justify-content: center;
  width: 90px;
  height: 90px;
  margin: 0 auto;
  margin-bottom: 23px;
  background-color: var(--color-primary-darker);
  line-height: 90px;
  align-items: center;
}
.service.service__style--1.with-working-process {
  position: relative;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--1.with-working-process {
    padding: 20px 0;
  }
}
.service.service__style--1.with-working-process .icon {
  width: 180px;
  height: 180px;
  line-height: 180px;
  font-size: 60px;
  position: relative;
}
.service.service__style--1.with-working-process .line {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 1px;
  width: 100%;
  left: 100%;
  background-color: var(--color-border);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--1.with-working-process .line {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .service.service__style--1.with-working-process .line {
    display: none;
  }
}
.service.service__style--1.with-working-process:hover {
  transform: none;
}
.service.service__style--1.variation-2 {
  padding-bottom: 0;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.service.service__style--1.variation-3 {
  padding-bottom: 50px;
}
.service.service__style--1.service-bg-transparent {
  padding: 0;
}
.service.service__style--1.service-bg-transparent .icon {
  margin-bottom: 12px;
}
.service.service__style--1.service-bg-transparent .content .title {
  margin-bottom: 12px;
}
.service.service__style--1.variation-4 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.service.gallery-style {
  padding: 40px 30px;
  background: var(--color-blackest);
  border-radius: 24px;
  box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1);
  margin-top: 30px;
}
.service.gallery-style .content .image img {
  border-radius: 5px;
}
.service.gallery-style .content .title {
  margin-bottom: 19px;
  font-weight: 600;
  font-size: 20px;
  margin-bottom: 10px;
}
.service.gallery-style .content .title a {
  color: inherit;
}
.service.gallery-style .content .title a:hover {
  color: var(--color-primary);
}
.service.gallery-style .content p {
  color: var(--color-body);
  margin-bottom: 20px;
}
.service.service__style--2 {
  padding: 50px 35px;
  padding-bottom: 55px;
  transition: transform 0.65s cubic-bezier(0.05, 0.2, 0.1, 1), box-shadow 0.65s cubic-bezier(0.05, 0.2, 0.1, 1);
  position: relative;
  z-index: 2;
  border-radius: 10px;
  margin-top: 30px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .service.service__style--2 {
    padding: 10px 28px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service.service__style--2 {
    padding: 10px 15px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service.service__style--2 {
    padding: 10px 25px;
  }
}
@media only screen and (max-width: 767px) {
  .service.service__style--2 {
    padding: 0px 18px;
  }
}
.service.service__style--2 .image {
  margin-bottom: 23px;
}
.service.service__style--2 .image img {
  max-height: 220px;
}
.service.service__style--2 .content .title a {
  color: inherit;
}
.service.service__style--2 .content .title a:hover {
  color: var(--color-primary);
}
.service.service__style--2 .content p {
  padding: 0 5%;
}
.service.service__style--2:hover {
  transform: translateY(-5px);
  box-shadow: 0 0 39px rgba(255, 101, 80, 0.1);
}
.service.service-eight {
  padding: 40px 30px;
  background: var(--color-lessdark);
  border-radius: var(--radius);
  box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.1);
}
.service.service-eight .inner {
  align-items: center;
}
.service.service-eight .inner .image {
  margin-right: 30px;
}
.service.service-eight .inner .image img {
  max-height: 100px;
  object-fit: cover;
  width: auto;
  min-width: 100px;
}
.service.service-eight .inner .content .title {
  margin-bottom: 0;
}

/*
    Card Styles  
*/
.card-box.card-style-1 {
  box-shadow: var(--shadow-lighter);
  background-color: var(--color-blackest);
  padding: 20px;
  border-radius: 5px;
  margin-top: 30px;
}
.card-box .inner .image a img {
  border-radius: 5px;
}
.card-box .inner .content {
  padding-top: 20px;
}
.card-box .inner .content .title {
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 14px;
}
.card-box .inner .content .title a {
  color: inherit;
}
.card-box .inner .content .title a:hover {
  color: var(--color-primary);
}
.card-box .inner .content .description {
  margin-bottom: 0;
}
.card-box .inner .content .btn-default {
  margin-top: 20px;
}

.bg-flashlight {
  position: relative;
  overflow: hidden;
}
.bg-flashlight::before {
  content: "";
  position: absolute;
  top: var(--y);
  left: var(--x);
  transform: translate(-50%, -50%);
  background: radial-gradient(var(--color-primary), transparent, transparent);
  width: 200%;
  height: 200%;
  opacity: 0;
  transition: 0.5s, top 0s, left 0s;
  border-radius: var(--radius);
}
.bg-flashlight:hover::before {
  opacity: 1;
}
.bg-flashlight::after {
  content: "";
  position: absolute;
  inset: 2px;
  background: var(--color-blackest);
  border-radius: var(--radius);
}
.bg-flashlight > * {
  z-index: 2;
  position: relative;
}
.bg-flashlight.bg-secondary::before {
  background: radial-gradient(var(--color-secondary), transparent, transparent);
}
.bg-flashlight.bg-tertiary::before {
  background: radial-gradient(var(--color-tertiary), transparent, transparent);
}

.bg-flashlight-static {
  position: relative;
  overflow: hidden;
}
.bg-flashlight-static::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: linear-gradient(to bottom, var(--color-primary), rgba(39, 39, 55, 0.2));
  opacity: 0.2;
  width: 100%;
  height: 100%;
  transition: 0.5s, top 0s, left 0s;
  border-radius: var(--radius);
  transition: all 0.3s ease-in-out;
}
.bg-flashlight-static::after {
  content: "";
  position: absolute;
  inset: 2px;
  background: var(--color-blackest);
  border-radius: var(--radius);
  transition: all 0.3s ease-in-out;
}
.bg-flashlight-static > * {
  z-index: 2;
  position: relative;
}
.bg-flashlight-static:hover::before {
  opacity: 1;
}
.bg-flashlight-static.bg-secondary::before {
  background: radial-gradient(var(--color-secondary), transparent, transparent);
}
.bg-flashlight-static.bg-tertiary::before {
  background: radial-gradient(var(--color-tertiary), transparent, transparent);
}

.blur-flashlight {
  position: relative;
  overflow: hidden;
}
.blur-flashlight::before {
  content: "";
  position: absolute;
  top: var(--y);
  left: var(--x);
  transform: translate(-50%, -50%);
  background: radial-gradient(650px at var(--x) var(--y), rgba(227, 227, 227, 0.1), transparent 50%);
  width: 200%;
  height: 200%;
  opacity: 0;
  transition: 0.5s, top 0s, left 0s;
  border-radius: var(--radius-big);
}
.blur-flashlight:hover::before {
  opacity: 1;
}
.blur-flashlight::after {
  content: "";
  position: absolute;
  background: var(--color-blackest);
  border-radius: var(--radius);
}
.blur-flashlight > * {
  z-index: 2;
  position: relative;
}

body.active-dark-mode.modal-open {
  padding-right: 0 !important;
}

/* Counter Style One  */
.counter-style-1 .count-number {
  font-size: 90px;
}
@media only screen and (max-width: 767px) {
  .counter-style-1 .count-number {
    font-size: 62px;
  }
}
@media only screen and (max-width: 575px) {
  .counter-style-1 .count-number {
    font-size: 45px;
  }
}
.counter-style-1 .title {
  font-size: 20px;
  line-height: 1.3em;
  font-weight: 500;
  margin-top: 0;
  margin-bottom: 0;
}

.counter-style-2 {
  margin-top: 30px;
}
.counter-style-2 .count-number {
  font-size: 44px;
  background-color: var(--color-blackest);
  display: inline-block;
  min-width: 150px;
  height: 150px;
  border-radius: 100%;
  text-align: center;
  line-height: 150px;
  margin-bottom: 20px;
  padding: 0 20px;
  font-weight: 500;
  color: var(--color-white);
}
.counter-style-2 .title {
  font-size: 20px;
  line-height: 1.3em;
  font-weight: 500;
  margin-top: 0;
  margin-bottom: 10px;
}
.counter-style-2 .description {
  line-height: 1.8;
  padding-right: 16%;
  margin: 0;
}
.counter-style-2.color-variation .count-number {
  background-color: var(--color-primary-darker);
  color: var(--color-primary);
}
.counter-style-2.border-style .count-number {
  background-color: transparent;
  border: 2px solid var(--color-border);
}
.counter-style-2.text-center .description {
  padding: 0 10%;
}

[class*=col]:nth-child(2) .counter-style-2.color-variation .count-number {
  background-color: var(--color-secondary-darker);
  color: var(--color-secondary);
}

[class*=col]:nth-child(3) .counter-style-2.color-variation .count-number {
  background-color: var(--color-primary-darker);
  color: var(--color-primary);
}

/*------------------------------
    Counterup Style Four  
-------------------------------*/
.counter-style-4 {
  text-align: left;
  margin-top: 30px;
}
.counter-style-4 .counter-title {
  margin-top: 8px;
  font-weight: 400;
  font-size: 24px;
}
.counter-style-4 .count-number {
  font-size: 35px;
  line-height: 1.2;
  font-weight: 700;
  color: var(--color-primary);
  display: inline-block;
  position: relative;
}
.counter-style-4 .count-number::after {
  content: "+";
}
.counter-style-4 .count-number span {
  display: inline-block;
}

/*-----------------------
    Progress Bar 
-----------------------*/
.single-progress + .single-progress {
  margin-top: 40px;
}

.single-progress {
  position: relative;
  overflow: hidden;
}
.single-progress .title {
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 0;
  color: #acacac;
  color: var(--color-body);
  letter-spacing: 0.5px;
  margin-bottom: 18px;
}

.progress {
  height: 6px;
  overflow: visible;
  background-color: var(--color-blackest);
  border-radius: 10px;
}
.progress .progress-bar {
  border-radius: 10px;
  width: 0;
  height: 100%;
  background-color: var(--color-primary);
  transition: width 0.5s ease;
  overflow: visible;
}
.progress .progress-bar.bar-color-2 {
  background: rgb(251, 83, 67);
}
.progress .progress-bar.bar-color-3 {
  background: #E33FA1;
}
.progress .progress-bar.bar-color-4 {
  background: #6549D5;
}
.progress .progress-bar.bar-gradiand {
  background: radial-gradient(circle farthest-corner at 0% 0%, var(--color-primary) 25%, var(--color-secondary) 45%, var(--color-primary) 65%, var(--color-primary) 85%);
}
.progress .progress-number {
  position: absolute;
  font-size: 14px;
  top: 0;
  line-height: 24px;
  right: 0;
  z-index: 1;
}

.progress-info {
  display: flex;
  justify-content: space-between;
  margin-bottom: 18px;
}
.progress-info .title {
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 0;
  color: var(--color-body);
  letter-spacing: 0.5px;
}
.progress-info span.progress-number {
  font-size: 14px;
  color: var(--color-body);
}

.no-radius .progress {
  border-radius: 0;
}
.no-radius .progress .progress-bar {
  border-radius: 0;
}

.large-size .progress {
  height: 20px;
}

/*-----------------------------------
    Radial Progress 
-----------------------------------*/
.radial-progress-single {
  text-align: center;
}
.radial-progress-single .circle-info {
  padding-top: 20px;
  text-align: center;
}
.radial-progress-single .circle-info .title {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 4px;
}
.radial-progress-single .circle-info .subtitle {
  font-style: italic;
  margin-bottom: 0;
  font-size: 14px;
  letter-spacing: 0.5px;
  color: var(--color-body);
}

.radial-progress {
  position: relative;
}
@media only screen and (max-width: 767px) {
  .radial-progress {
    display: inline-block;
  }
}
.radial-progress .circle-text {
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  transform: translateY(-50%);
}
.radial-progress .circle-text span.count {
  font-size: 28px;
  line-height: 1;
  font-weight: 600;
  color: var(--color-body);
  position: relative;
}
.radial-progress .circle-text span.count::after {
  position: absolute;
  content: "%";
  left: 100%;
  color: var(--color-body);
}

/*--------------------------
    Accordion Styles  
---------------------------*/
.rainbow-accordion-style .card {
  background: var(--color-blackest);
  border: 0;
  border-radius: var(--radius) !important;
}
.rainbow-accordion-style .card .card-header {
  background-color: transparent;
  border-bottom: 0 none;
  box-shadow: none;
  padding: 20px 30px;
  margin-bottom: 0;
}
.rainbow-accordion-style .card .card-header button {
  color: var(--color-heading);
  font-size: 18px;
  line-height: 27px;
  outline: none;
  text-decoration: none;
  box-shadow: none;
  width: 100%;
  text-align: left;
  padding: 0;
  background: transparent;
  position: relative;
}
.rainbow-accordion-style .card .card-header button::before {
  position: absolute;
  content: "\e996";
  font-family: "feather" !important;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  transition: 0.4s;
}
.rainbow-accordion-style .card .card-header button.collapsed::before {
  content: "\e9b1";
}
.rainbow-accordion-style .card .card-body {
  padding: 16px;
  padding-top: 0;
  font-size: var(--font-size-b2);
  line-height: var(--line-height-b2);
  font-weight: var(--p-regular);
  color: var(--color-body);
  padding: 30px 20px;
  border-top: 1px solid var(--color-border);
}
.rainbow-accordion-style .card + .card {
  margin-top: 20px;
}
.rainbow-accordion-style.rainbow-accordion-02 .card {
  background: transparent;
  border-radius: 0 !important;
}
.rainbow-accordion-style.rainbow-accordion-02 .card .card-header {
  border-bottom: 2px solid var(--color-border);
  padding: 0px 20px 10px 0;
}
.rainbow-accordion-style.rainbow-accordion-02 .card .card-header .accordion-button::after {
  display: none;
}
.rainbow-accordion-style.rainbow-accordion-02 .card .card-body {
  padding: 15px 20px 10px 0;
  border-top: 0;
}
.rainbow-accordion-style.rainbow-accordion-03 .card {
  background: transparent;
  border-radius: 0 !important;
}
.rainbow-accordion-style.rainbow-accordion-03 .card .card-header {
  border: 2px solid var(--color-border);
  padding: 15px 20px;
  border-radius: var(--radius) !important;
}
.rainbow-accordion-style.rainbow-accordion-03 .card .card-body {
  padding: 15px 20px 10px 0;
  border: 0;
}
.rainbow-accordion-style.rainbow-accordion-04 .card {
  border: 2px solid var(--color-border);
  background: transparent;
  border-radius: var(--radius) !important;
}
.rainbow-accordion-style.rainbow-accordion-04 .card .card-header {
  padding: 15px 20px;
  border-radius: var(--radius) !important;
}
.rainbow-accordion-style.rainbow-accordion-04 .card .card-body {
  border-top: 2px solid var(--color-border);
}

.accordion-button::after {
  visibility: hidden;
}

/*-----------------------
    Social Icons 
-------------------------*/
.social-default {
  display: flex;
  flex-wrap: wrap;
  padding: 0;
  margin: 0;
  list-style: none;
  justify-content: center;
  margin: -5px;
}
.social-default li {
  margin: 5px;
}
.social-default li a {
  width: 48px;
  background-color: var(--color-lessdark);
  height: 48px;
  line-height: 45px;
  text-align: center;
  display: inline-block;
  border-radius: 100%;
  transition: 0.3s;
  color: var(--color-white);
  z-index: 2;
  position: relative;
}
.social-default li a::after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: var(--color-primary);
  transform: scale(0.5);
  opacity: 0;
  transition: 0.3s;
  border-radius: 100%;
}
.social-default li a:hover {
  color: var(--color-white);
}
.social-default li a:hover::after {
  transform: scale(1);
  opacity: 1;
}
.social-default li a i {
  vertical-align: middle;
}
.social-default.transparent-with-border li a {
  line-height: 45px;
  background: transparent;
  border: 1px solid var(--color-border);
}
.social-default.transparent-with-border li a:hover {
  border-color: transparent;
}
.social-default.transparent-with-border li a::after {
  border: 1px solid var(--color-primary);
}
.social-default.with-gradient li a::after {
  background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-primary) 75%, var(--color-secondary) 100%) 95%/200% 100%;
}
.social-default.with-bg-primary li a {
  background-color: var(--color-primary);
  border: 2px solid var(--color-primary);
  transition: 0.5s;
  line-height: 44px;
}
.social-default.with-bg-primary li a::after {
  display: none;
}
.social-default.with-bg-primary li a:hover {
  background-color: transparent;
}
.social-default.icon-naked li a {
  background: transparent !important;
  width: 30px;
  height: 30px;
  line-height: 36px;
}
.social-default.icon-naked li a::after {
  display: none;
}
.social-default.icon-naked li a:hover {
  color: var(--color-primary) !important;
}

/*----------------------
    Team Style  
-------------------------*/
.rainbow-box-card,
.team-style-default {
  margin-top: 75px;
}
.rainbow-box-card .inner,
.team-style-default .inner {
  background: linear-gradient(180deg, var(--color-lessdark) 20%, rgba(19, 19, 19, 0.4));
  -webkit-backdrop-filter: blur(4px) opacity(0.95);
  backdrop-filter: blur(4px) opacity(0.95);
  border-radius: var(--radius-big);
}
.rainbow-box-card .inner .thumbnail,
.team-style-default .inner .thumbnail {
  max-width: 150px;
  max-height: 150px;
  border-radius: 100%;
  border: 6px solid var(--color-lessdark);
  top: -75px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  min-width: 150px;
  min-height: 150px;
  overflow: hidden;
}
.rainbow-box-card .inner .thumbnail img,
.team-style-default .inner .thumbnail img {
  border-radius: 100%;
}
.rainbow-box-card .inner .content,
.team-style-default .inner .content {
  text-align: center;
  padding: 20px;
  padding-top: 85px;
  padding-bottom: 35px;
}
.rainbow-box-card .inner .content .title,
.team-style-default .inner .content .title {
  font-size: 34px;
  line-height: 1.4;
  font-weight: 700;
  margin-bottom: 6px;
}
.rainbow-box-card .inner .content .subtitle,
.team-style-default .inner .content .subtitle {
  font-size: 20px;
  line-height: 1.4;
  margin-bottom: 15px;
  display: inline-block;
}
.rainbow-box-card .inner .content .team-form,
.team-style-default .inner .content .team-form {
  display: block;
  font-size: 14px;
  margin-bottom: 12px;
  letter-spacing: 0.6px;
  font-style: italic;
}
.rainbow-box-card .inner .content .team-form img,
.team-style-default .inner .content .team-form img {
  padding-right: 10px;
  max-height: 18px;
}
.rainbow-box-card .inner .content .description,
.team-style-default .inner .content .description {
  margin-bottom: 0;
  padding: 0 5%;
}
.rainbow-box-card .inner .social-icon li a,
.team-style-default .inner .social-icon li a {
  color: var(--color-body);
}
.rainbow-box-card.border-gradient .thumbnail,
.team-style-default.border-gradient .thumbnail {
  background: linear-gradient(to right, var(--color-primary-gradient-start), var(--color-primary-gradient-end));
  padding: 5px;
  border: 0 none;
  animation: rotateCircle 2s linear infinite;
}
.rainbow-box-card.border-gradient-secondary .thumbnail,
.team-style-default.border-gradient-secondary .thumbnail {
  background: linear-gradient(to right, var(--color-secondary-gradient-start), var(--color-secondary-gradient-end));
  padding: 5px;
  border: 0 none;
  animation: rotateCircle 2s linear infinite;
}
.rainbow-box-card.border-gradient-tertiary .thumbnail,
.team-style-default.border-gradient-tertiary .thumbnail {
  background: linear-gradient(to right, var(--color-tertiary-gradient-start), var(--color-tertiary-gradient-end));
  padding: 5px;
  border: 0 none;
  animation: rotateCircle 2s linear infinite;
}
.rainbow-box-card.style-two,
.team-style-default.style-two {
  margin-top: 30px;
}
.rainbow-box-card.style-two .inner,
.team-style-default.style-two .inner {
  padding-top: 35px;
}
.rainbow-box-card.style-two .inner .thumbnail,
.team-style-default.style-two .inner .thumbnail {
  top: 0;
  position: static;
  left: inherit;
  transform: none;
  min-width: 150px;
  min-height: 150px;
  margin: 0 auto;
}
.rainbow-box-card.style-two .inner .content,
.team-style-default.style-two .inner .content {
  padding-top: 10px;
}

/*---------------------
    Team Style Two  
-----------------------*/
.team-style-two .inner .thumbnail img {
  width: 100%;
  border-radius: var(--radius);
}
.team-style-two .inner .content {
  padding-top: 20px;
}
.team-style-two .inner .content .title {
  font-size: 28px;
  line-height: 1.4;
  font-weight: 500;
  margin-bottom: 0;
}
.team-style-two .inner .content .subtitle {
  font-size: 18px;
  line-height: 1.4;
  display: inline-block;
  margin-top: 4px;
  margin-bottom: 0;
  opacity: 0;
  transform: translateX(30px);
  transition: transform 0.45s cubic-bezier(0.16, 0.32, 0.26, 0.92), opacity 0.45s ease-out;
  transition-delay: 0.15s;
}
.team-style-two .inner .content .team-form {
  display: block;
  font-size: 14px;
  letter-spacing: 0.6px;
  font-style: italic;
  margin-top: 11px;
}
.team-style-two .inner .content .team-form img {
  padding-right: 10px;
  max-height: 18px;
}
.team-style-two:hover .inner .content .subtitle {
  opacity: 1;
  transform: none;
}

/*---------------------
    Team Style Three  
-----------------------*/
.team-style-three .inner {
  position: relative;
}
.team-style-three .inner .thumbnail img {
  width: 100%;
  border-radius: var(--radius);
}
.team-style-three .inner .content {
  position: absolute;
  bottom: 0;
  padding: 20px;
  width: 100%;
  transition: all 0.3s;
  opacity: 0;
}
.team-style-three .inner .content .team-info {
  padding: 20px;
  background-color: rgba(58, 58, 58, 0.85);
  border-radius: var(--radius-small);
}
.team-style-three .inner .content .title {
  font-size: 17px;
  line-height: 25px;
  color: var(--color-heading);
  margin-bottom: 4px;
}
.team-style-three .inner .content .subtitle {
  font-size: 16px;
  line-height: 25px;
  margin-bottom: 4px;
}
.team-style-three .inner .content .team-form {
  display: block;
  font-style: italic;
  font-size: 14px;
  color: #ADADAD;
  letter-spacing: 0.5px;
}
.team-style-three:hover .inner .content {
  opacity: 1;
}

@keyframes rotateCircle {
  0% {
    transform: rotate(0);
  }
  25% {
    transform: rotate(90deg);
  }
  50% {
    transform: rotate(180deg);
  }
  75% {
    transform: rotate(270deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/*---------------------
    Portfolio Styles  
-----------------------*/
.rainbow-portfolio-area {
  position: relative;
  overflow: hidden;
}

.rainbow-card {
  overflow: hidden;
}
.rainbow-card .inner .thumbnail {
  position: relative;
}
.rainbow-card .inner .thumbnail .card-image {
  overflow: hidden;
}
.rainbow-card .inner .thumbnail .card-image a {
  display: block;
  overflow: hidden;
}
.rainbow-card .inner .thumbnail .card-image img {
  overflow: hidden;
}
.rainbow-card .inner .content {
  padding-top: 20px;
}
.rainbow-card .inner .content .subtitle {
  text-transform: capitalize;
}
.rainbow-card:hover {
  transform: translateY(-4px);
}
.rainbow-card:hover .inner .thumbnail .card-image img {
  transform: scale(1.05);
}

/*------------------
    No Overlay  
--------------------*/
.no-overlay .rainbow-card .inner .thumbnail .rainbow-overlay {
  display: none;
}

/*----------------------
    Box Grid Layout  
------------------------*/
.box-grid-layout .rainbow-card {
  border-radius: var(--radius-small);
  background-color: var(--color-blackest);
}
.box-grid-layout .rainbow-card .inner .thumbnail .card-image a {
  border-radius: var(--radius-small) var(--radius-small) 0 0;
}
.box-grid-layout .rainbow-card .inner .thumbnail .card-image a img {
  border-radius: var(--radius-small) var(--radius-small) 0 0;
}
.box-grid-layout .rainbow-card .inner .content {
  padding: 25px;
}

/*-----------------------------
    Filter Button Style  
-------------------------------*/
.filter-button-default {
  display: flex;
  justify-content: center;
  margin: 0 -5px;
  flex-wrap: wrap;
}
.filter-button-default button {
  border: 0 none;
  padding: 10px 20px;
  text-transform: capitalize;
  background: transparent;
  color: var(--color-body);
  margin: 0 5px;
}
@media only screen and (max-width: 767px) {
  .filter-button-default button {
    padding: 10px 10px;
  }
}
.filter-button-default button.is-checked, .filter-button-default button:hover {
  background-color: var(--color-primary);
  color: var(--color-white) !important;
}

/*--------------------------------
    Portfolio Read More Icon  
---------------------------------*/
.rainbow-load-more a.btn-default.btn-icon .icon,
.rainbow-load-more button.btn-default.btn-icon .icon {
  top: 0px;
  margin-left: -2px;
}
.rainbow-load-more a.btn-default.btn-icon .icon svg,
.rainbow-load-more button.btn-default.btn-icon .icon svg {
  width: 14px;
  height: 20px;
}

/*----------------------------------
    Portfolio Grid Layout  
----------------------------------*/
.grid-metro2 {
  margin: 0 -15px;
}
.grid-metro2 .portfolio-2 {
  width: 50%;
  padding: 0 15px;
  margin-top: 30px;
}
@media only screen and (max-width: 575px) {
  .grid-metro2 .portfolio-2 {
    width: 100%;
  }
}
.grid-metro2 .resizer {
  width: 50%;
}
@media only screen and (max-width: 575px) {
  .grid-metro2 .resizer {
    width: 100%;
  }
}

.grid-metro3 {
  margin: 0 -15px;
}
.grid-metro3 .portfolio-3 {
  width: 33.33%;
  padding: 0 15px;
  margin-top: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .grid-metro3 .portfolio-3 {
    width: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .grid-metro3 .portfolio-3 {
    width: 50%;
  }
}
@media only screen and (max-width: 575px) {
  .grid-metro3 .portfolio-3 {
    width: 100%;
  }
}
.grid-metro3 .resizer {
  width: 33.33%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .grid-metro3 .resizer {
    width: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .grid-metro3 .resizer {
    width: 50%;
  }
}
@media only screen and (max-width: 575px) {
  .grid-metro3 .resizer {
    width: 100%;
  }
}

.grid-metro4 {
  margin: 0 -15px;
}
.grid-metro4 .portfolio-4 {
  width: 25%;
  padding: 0 15px;
  margin-top: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .grid-metro4 .portfolio-4 {
    width: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .grid-metro4 .portfolio-4 {
    width: 50%;
  }
}
@media only screen and (max-width: 575px) {
  .grid-metro4 .portfolio-4 {
    width: 100%;
  }
}
.grid-metro4 .resizer {
  width: 25%;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .grid-metro4 .resizer {
    width: 50%;
  }
}
@media only screen and (max-width: 767px) {
  .grid-metro4 .resizer {
    width: 50%;
  }
}
@media only screen and (max-width: 575px) {
  .grid-metro4 .resizer {
    width: 100%;
  }
}
.grid-metro4.no-gutter {
  margin: 0;
}
.grid-metro4.no-gutter .portfolio-4 {
  padding: 0;
  margin-top: 0;
}
.grid-metro4.no-gutter .rainbow-card {
  border-radius: 0;
  border: 0 none;
}

.no-gutter .rainbow-card .inner .thumbnail a img,
.no-gutter .rainbow-card .inner .thumbnail a {
  border-radius: 0;
}

.no-gutter .rainbow-card:hover {
  transform: none;
}

/*-------------------------
    Testimonial Styles  
--------------------------*/
.card-style-default.testimonial-style-one .inner .thumbnail {
  overflow: visible;
}
.card-style-default.testimonial-style-one .inner .thumbnail::after {
  position: absolute;
  content: "”";
  width: 40px;
  height: 40px;
  border-radius: 100%;
  background: var(--color-blackest);
  right: 0;
  top: 0;
  color: #fff;
  z-index: 2;
  text-align: center;
  line-height: 58px;
  font-size: 39px;
}
.card-style-default.testimonial-style-one .inner .content .description {
  margin-bottom: 14px;
  font-size: var(--font-size-b2) !important;
}
.card-style-default.testimonial-style-one .inner .content .title {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 2px;
  letter-spacing: 0.5px;
}
.card-style-default.testimonial-style-one .inner .content .subtitle {
  font-size: 16px;
  line-height: 1.2;
  margin-bottom: 0;
  letter-spacing: 0.5px;
}
.card-style-default.testimonial-style-one.style-two .inner .thumbnail {
  position: relative;
}
.card-style-default.testimonial-style-one.style-two .inner .description {
  margin-bottom: 19px;
  margin-top: 20px;
}

/*-----------------------------
    Testimonial Style Two  
-------------------------------*/
.testimonial-style-two .content {
  position: relative;
  z-index: 2;
}
.testimonial-style-two .content::after {
  position: absolute;
  content: "“";
  left: -20px;
  color: var(--color-lessdark);
  text-align: center;
  font-size: 320px;
  opacity: 0.7;
  line-height: 50px;
  top: 52px;
  z-index: -1;
}
.testimonial-style-two .content .form {
  display: block;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  margin-bottom: 20px;
}
.testimonial-style-two .content .description {
  line-height: 1.5;
  margin-bottom: 30px;
  font-size: 32px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .testimonial-style-two .content .description {
    margin-bottom: 25px;
    font-size: 24px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .testimonial-style-two .content .description {
    font-size: 24px;
  }
}
@media only screen and (max-width: 767px) {
  .testimonial-style-two .content .description {
    font-size: 24px;
  }
}
.testimonial-style-two .content .client-info .title {
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 8px;
}
.testimonial-style-two .content .client-info .subtitle {
  font-size: 16px;
  margin-bottom: 0;
  font-weight: 400;
  letter-spacing: 0.5px;
  color: var(--color-body);
  font-style: italic;
}
.testimonial-style-two .thumbnail {
  background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-primary) 75%, var(--color-secondary) 100%) 98%/200% 100%;
  border-radius: 100%;
  padding: 10px;
}
.testimonial-style-two .thumbnail img {
  border-radius: 100%;
}

.slick-initialized .slick-slide {
  margin-bottom: 0;
}

.slick-grid-15 {
  margin: 0 -15px;
}
.slick-grid-15 .slide-single-layout {
  padding: 0 15px;
}

/*----------------------
    Slick Dots  
------------------------*/
.rainbow-slick-dot .slick-dots {
  bottom: -60px;
}
@media only screen and (max-width: 575px) {
  .rainbow-slick-dot .slick-dots {
    bottom: -50px;
  }
}
.rainbow-slick-dot .slick-dots li {
  width: 30px;
  margin: 0;
  opacity: 1;
  position: relative;
}
.rainbow-slick-dot .slick-dots li button::before {
  display: none;
}
.rainbow-slick-dot .slick-dots li button::after {
  background: var(--color-lessdark);
  width: 100%;
  display: block;
  content: "";
  position: absolute;
  left: 0;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  margin-left: 11px;
  background-color: transparent;
  box-shadow: inset 0 0 0 5px var(--color-lessdark);
}
.rainbow-slick-dot .slick-dots li.slick-active {
  opacity: 1;
}
.rainbow-slick-dot .slick-dots li.slick-active button::after {
  -webkit-transform: scale(2);
  transform: scale(2);
  box-shadow: inset 0 0 0 1px var(--color-primary);
  background-color: transparent;
  background-color: transparent !important;
}
.rainbow-slick-dot.dot-light .slick-dots li button::after {
  background: #ffffff;
  box-shadow: inset 0 0 0 5px #ffffff;
}
.rainbow-slick-dot.dot-light .slick-dots li.slick-active {
  opacity: 1;
}
.rainbow-slick-dot.dot-light .slick-dots li.slick-active button::after {
  -webkit-transform: scale(2);
  transform: scale(2);
  box-shadow: inset 0 0 0 1px var(--color-primary);
  background-color: transparent;
  background-color: transparent !important;
}

/*----------------------
    Slick Arrow  
------------------------*/
.rainbow-slick-arrow {
  position: relative;
}
.rainbow-slick-arrow button.slick-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 2;
  transition: 0.5s;
  opacity: 0;
  width: 68px;
  height: 68px;
  border: 2px solid var(--color-border);
  border-radius: 100%;
  color: var(--color-border);
  background-color: transparent;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-slick-arrow button.slick-arrow {
    display: none !important;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-slick-arrow button.slick-arrow {
    display: none !important;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-slick-arrow button.slick-arrow {
    display: none !important;
  }
}
.rainbow-slick-arrow button.slick-arrow:hover {
  background: var(--color-primary);
  border-color: var(--color-primary);
}
.rainbow-slick-arrow button.slick-arrow::before {
  line-height: 1;
  opacity: 0.4;
  position: relative;
  top: -2px;
  transition: 0.5s;
  z-index: 2;
}
.rainbow-slick-arrow button.slick-arrow.prev-arrow {
  left: 15px;
}
@media only screen and (max-width: 767px) {
  .rainbow-slick-arrow button.slick-arrow.prev-arrow {
    left: 10px;
  }
}
.rainbow-slick-arrow button.slick-arrow.prev-arrow::before {
  content: url(../images/slick-arrow-left-small.png);
  vertical-align: middle;
}
.rainbow-slick-arrow button.slick-arrow.prev-arrow:hover {
  left: 10px;
}
.rainbow-slick-arrow button.slick-arrow.prev-arrow:hover::before {
  opacity: 1;
}
.rainbow-slick-arrow button.slick-arrow.next-arrow {
  left: auto;
  right: 15px;
}
@media only screen and (max-width: 767px) {
  .rainbow-slick-arrow button.slick-arrow.next-arrow {
    right: 10px;
  }
}
.rainbow-slick-arrow button.slick-arrow.next-arrow::before {
  content: url(../images/slick-arrow-right-small.png);
  vertical-align: middle;
}
.rainbow-slick-arrow button.slick-arrow.next-arrow:hover {
  right: 10px;
}
.rainbow-slick-arrow button.slick-arrow.next-arrow:hover::before {
  opacity: 1;
}
.rainbow-slick-arrow button.slick-arrow i {
  display: none;
}
.rainbow-slick-arrow.slick-arrow-alignwide button.slick-arrow.prev-arrow {
  left: -105px;
}
.rainbow-slick-arrow.slick-arrow-alignwide button.slick-arrow.next-arrow {
  right: -105px;
  left: auto;
}
.rainbow-slick-arrow:hover button.slick-arrow {
  opacity: 1;
}

/* -----------------------
Timeline Area  
--------------------------*/
.timeline-line {
  position: absolute;
  z-index: 0;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: hsla(0, 0%, 76.9%, 0.22);
}
.timeline-line::before, .timeline-line::after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
}
.timeline-line::before {
  height: 100%;
  bottom: 0;
  background: linear-gradient(180deg, var(var(--color-blackest)), rgba(19, 19, 19, 0));
}
.timeline-line::after {
  height: 200px;
  top: 0;
  background: linear-gradient(180deg, var(var(--color-blackest)), rgba(19, 19, 19, 0));
}

.timeline-dot {
  position: absolute;
  top: 50%;
  left: 0;
}
.timeline-dot::before, .timeline-dot::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  display: block;
  border-radius: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.timeline-dot::before {
  z-index: 1;
  width: 2.1rem;
  height: 2.1rem;
  border-radius: 50%;
  background: linear-gradient(180deg, var(--color-primary), var(--color-primary));
  box-shadow: 0 0 15px rgba(82, 56, 255, 0.5);
}
.timeline-dot::after {
  border: 5px solid var(var(--color-blackest));
  background: radial-gradient(50% 50% at 50% 50%, var(--color-lessdark) 48.96%, var(--color-lessdark) 100%);
  z-index: 0;
  width: 31px;
  height: 31px;
}
.timeline-dot .time-line-circle {
  position: absolute;
  top: 50%;
  border-radius: 50%;
  left: 50%;
  width: 100px;
  height: 100px;
  background: radial-gradient(50% 50% at 50% 50%, rgba(242, 201, 76, 0) 40.62%, rgba(82, 56, 255, 0.5) 100%);
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  will-change: transform;
  -webkit-animation: radialanimation 2.2s cubic-bezier(0.26, 1.04, 0.54, 1) infinite;
  animation: radialanimation 2.2s cubic-bezier(0.26, 1.04, 0.54, 1) infinite;
}

/*------------------------------
    Single Timeline Styles  
-------------------------------*/
.single-timeline {
  position: relative;
  padding-left: 100px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-timeline {
    padding-left: 54px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-timeline {
    padding-left: 50px;
  }
}
@media only screen and (max-width: 767px) {
  .single-timeline {
    padding-left: 30px;
  }
}
.single-timeline .single-content {
  background: linear-gradient(180deg, var(--color-darkest) 20%, rgba(19, 19, 19, 0.4));
  -webkit-backdrop-filter: blur(4px) opacity(0.95);
  backdrop-filter: blur(4px) opacity(0.95);
  border-radius: var(--radius-big);
}
.single-timeline .single-content .inner {
  padding: 50px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-timeline .single-content .inner {
    padding: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .single-timeline .single-content .inner {
    padding: 20px;
  }
}
.single-timeline .single-content .inner .content .date-of-timeline {
  color: var(--color-body);
  display: block;
  margin-bottom: 30px;
  letter-spacing: 0.5px;
  font-style: italic;
  font-size: 14px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-timeline .single-content .inner .content .date-of-timeline {
    margin-bottom: 14px;
  }
}
@media only screen and (max-width: 767px) {
  .single-timeline .single-content .inner .content .date-of-timeline {
    margin-bottom: 14px;
  }
}
.single-timeline .single-content .inner .content .date-of-timeline.theme-gradient, .single-timeline .single-content .inner .content .counter-style-1 .date-of-timeline.count-number, .counter-style-1 .single-timeline .single-content .inner .content .date-of-timeline.count-number {
  display: inline-block;
}
.single-timeline .single-content .inner .content .title {
  margin-bottom: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .single-timeline .single-content .inner .content .title {
    font-size: 32px;
  }
}
.single-timeline .single-content .inner .content .description {
  margin-top: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-timeline .single-content .inner .content .description {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .single-timeline .single-content .inner .content .description {
    margin-top: 15px;
  }
}
.single-timeline .single-content .thumbnail img {
  border-radius: var(--radius);
}
.single-timeline.variation-one .single-content .inner {
  padding: 30px;
}
.single-timeline.variation-one .single-content .inner .content .date-of-timeline {
  margin-bottom: 20px;
}
.single-timeline.variation-one .single-content .inner .content .title-sm {
  margin-bottom: 20px;
}
.single-timeline.variation-one .single-content .inner .content .description {
  margin: 0;
}
.single-timeline.variation-one.padding-variation {
  padding-left: 50px;
}

@-webkit-keyframes radialanimation {
  0% {
    opacity: 1;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(0.1);
    transform: translate3d(-50%, -50%, 0) scale(0.1);
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1);
    transform: translate3d(-50%, -50%, 0) scale(1);
  }
}
@keyframes radialanimation {
  0% {
    opacity: 1;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(0.1);
    transform: translate3d(-50%, -50%, 0) scale(0.1);
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-50%, -50%, 0) scale(1);
    transform: translate3d(-50%, -50%, 0) scale(1);
  }
}
/*----------------------------
    Timeline Style Two  
----------------------------*/
.timeline-style-two {
  position: relative;
  padding: 20px 50px 50px 50px;
  border-radius: var(--radius);
}

.rainbow-timeline-single {
  margin-top: 30px;
}
.rainbow-timeline-single .rainbow-timeline {
  text-align: center;
}
.rainbow-timeline-single .rainbow-timeline .progress-line {
  position: relative;
  border-radius: 0px;
  height: 6px;
  box-shadow: none;
  margin: 20px 0;
  width: 100%;
}
.rainbow-timeline-single .rainbow-timeline .progress-line .line-inner {
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  text-align: center;
  white-space: nowrap;
  transition: width 0.6s ease;
  background-image: radial-gradient(circle farthest-corner at 0%, var(--color-primary) 25%, var(--color-secondary) 45%, var(--color-primary) 65%, var(--color-primary) 85%);
  background-attachment: fixed;
  background-repeat: repeat-y;
  width: 100%;
  display: flex;
  height: 100%;
}
@media only screen and (max-width: 767px) {
  .rainbow-timeline-single .rainbow-timeline .progress-line .line-inner {
    display: none;
  }
}
.rainbow-timeline-single .rainbow-timeline .progress-dot {
  position: relative;
  height: 30px;
  display: block;
  width: 100%;
  margin-top: -39px;
  margin-left: -15px;
}
.rainbow-timeline-single .rainbow-timeline .progress-dot .dot-level {
  transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
  background: linear-gradient(to right, var(--color-primary), var(--color-secondary), var(--color-primary));
  background-attachment: fixed;
  background-repeat: repeat-y;
  position: absolute;
  width: 28px;
  height: 28px;
  display: block;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
}
.rainbow-timeline-single .rainbow-timeline .progress-dot .dot-level .dot-inner {
  width: 12px;
  height: 12px;
  border-radius: 50px;
  position: absolute;
  top: 8px;
  left: 8px;
  background-color: var(--color-darkest);
}
.rainbow-timeline-single:first-child .rainbow-timeline .progress-line {
  width: 50%;
  left: 50%;
}
.rainbow-timeline-single:last-child .rainbow-timeline .progress-line {
  width: 50%;
}
.rainbow-timeline-single .title {
  margin-bottom: 33px;
  font-size: 20px;
}
.rainbow-timeline-single .description {
  padding: 0 10%;
  margin-top: 15px;
  margin-bottom: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-timeline-single .description {
    padding: 0 10px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-timeline-single .description {
    padding: 0 10px;
  }
}
.rainbow-timeline-single.no-gradient .rainbow-timeline .progress-line .line-inner {
  background-image: inherit;
  background: var(--color-primary);
}
.rainbow-timeline-single.no-gradient .rainbow-timeline .progress-dot .dot-level {
  background-image: inherit;
  background: var(--color-primary);
}
.rainbow-timeline-single.dark-line .rainbow-timeline .progress-line .line-inner {
  background-image: inherit;
  background: var(--color-primary-alt);
}
.rainbow-timeline-single.dark-line .rainbow-timeline .progress-dot .dot-level {
  background-image: inherit;
  background: var(--color-primary-alt);
}
.rainbow-timeline-single.dark-line .rainbow-timeline .progress-dot .dot-level .dot-inner {
  background-color: var(--color-primary);
}

/*--------------------------------
    Call To Action Style  
--------------------------------*/
.clltoaction-style-default {
  padding: 250px 0;
}
.clltoaction-style-default .title {
  font-size: 52px;
  font-weight: 600;
  position: relative;
  margin-bottom: 10px;
  padding-bottom: 0;
  line-height: 1.4;
  color: var(--color-heading);
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default .title {
    font-size: 30px;
    line-height: 1.2;
  }
}
.clltoaction-style-default .subtitle {
  font-weight: 600;
  letter-spacing: 0.5px;
  line-height: 18px;
  font-size: 16px;
  border-radius: 4px;
  margin-bottom: 12px;
  display: inline-block;
  padding: 7px 14px;
  background-color: var(--color-dark);
  box-shadow: var(--shadow-lighter);
}
.clltoaction-style-default .subtitle.radius-rounded {
  border-radius: 100px;
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default .description br {
    display: none;
  }
}
.clltoaction-style-default p:empty {
  display: none;
}
@media only screen and (max-width: 479px) {
  .clltoaction-style-default .theme-gradient, .clltoaction-style-default .counter-style-1 .count-number, .counter-style-1 .clltoaction-style-default .count-number {
    margin-bottom: 10px !important;
  }
}
.clltoaction-style-default .content p {
  color: var(--color-body);
}
.clltoaction-style-default .call-to-btn {
  margin-top: 30px;
}
.clltoaction-style-default .content.text-left .title::before {
  left: 0;
  transform: none;
}
.clltoaction-style-default .content.text-left .subtitle {
  padding: 0 16% 0 0;
}
.clltoaction-style-default.style-2 {
  padding: 130px 0;
}
.clltoaction-style-default.style-3 {
  padding: 150px 0;
}
.clltoaction-style-default.style-3 .content-wrapper {
  background-color: var(--color-lessdark);
  border-radius: var(--radius);
  padding: 50px 40px;
}
.clltoaction-style-default.style-3 .content .title {
  font-size: 32px;
  margin-bottom: 18px;
  padding-bottom: 10px;
  color: var(--color-white);
}
.clltoaction-style-default.style-3 .content .subtitle {
  font-size: 16px;
  line-height: 1.4;
  letter-spacing: 0.5px;
}
.clltoaction-style-default.style-3 .call-to-btn {
  margin-top: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .clltoaction-style-default.style-3 .call-to-btn {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default.style-3 .call-to-btn {
    margin-top: 20px;
  }
}
.clltoaction-style-default.style-4 {
  padding: 0;
}
.clltoaction-style-default.style-4 .content-wrapper {
  background-color: var(--color-lessdark);
  border-radius: var(--radius);
  padding: 70px 50px;
}
.clltoaction-style-default.style-4 .content .title {
  font-size: 47px;
  margin-bottom: 33px;
  padding-bottom: 16px;
  line-height: 1.4;
}
.clltoaction-style-default.style-4 .content .subtitle {
  font-size: 16px;
  line-height: 1.4;
  letter-spacing: 0.5px;
}
.clltoaction-style-default.style-4 .call-to-btn {
  margin-top: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .clltoaction-style-default.style-4 .call-to-btn {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default.style-4 .call-to-btn {
    margin-top: 20px;
  }
}
.clltoaction-style-default.style-5 {
  padding: 0;
}
.clltoaction-style-default.style-5 .content-wrapper {
  background-color: var(--color-blackest);
  border-radius: var(--radius);
  padding: 70px 50px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .clltoaction-style-default.style-5 .content-wrapper {
    padding: 40px 20px;
  }
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default.style-5 .content-wrapper {
    padding: 40px 20px;
  }
}
.clltoaction-style-default.style-5 .content .title {
  font-size: 47px;
  margin-bottom: 20px;
  padding-bottom: 0;
  line-height: 1.4;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .clltoaction-style-default.style-5 .content .title {
    font-size: 38px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .clltoaction-style-default.style-5 .content .title {
    font-size: 34px;
  }
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default.style-5 .content .title {
    font-size: 34px;
  }
}
@media only screen and (max-width: 575px) {
  .clltoaction-style-default.style-5 .content .title {
    font-size: 26px;
  }
}
.clltoaction-style-default.style-5 .content .title::before {
  display: none;
}
.clltoaction-style-default.style-5 .content .subtitle {
  font-size: 16px;
  line-height: 1.4;
  letter-spacing: 0.5px;
}
.clltoaction-style-default.style-5 .call-to-btn {
  margin-top: 30px;
}
.clltoaction-style-default.style-6 {
  padding: 80px 0;
}
.clltoaction-style-default.style-6 .content .title {
  font-size: 36px;
  margin-bottom: 0;
  padding-bottom: 0;
  line-height: 1.4;
}
.clltoaction-style-default.style-6 .content .title::before {
  display: none;
}
.clltoaction-style-default.style-6 .call-to-btn {
  margin-top: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .clltoaction-style-default.style-6 .call-to-btn {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default.style-6 .call-to-btn {
    margin-top: 20px;
  }
}
.clltoaction-style-default.style-7 {
  padding: 0;
}
.clltoaction-style-default.style-7 .content-wrapper {
  padding: 40px 0;
  border-bottom: 1px solid var(--color-border);
}
.clltoaction-style-default.style-7 .content .subtitle {
  font-size: 16px;
  color: var(--color-body);
  max-width: 450px;
  line-height: 30px;
  margin-bottom: 0;
  margin-top: 13px;
  padding: 0;
}
.clltoaction-style-default.style-7 .call-to-btn {
  margin-top: 0;
  text-align: right;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .clltoaction-style-default.style-7 .call-to-btn {
    margin-top: 20px;
    text-align: left;
  }
}
@media only screen and (max-width: 767px) {
  .clltoaction-style-default.style-7 .call-to-btn {
    margin-top: 20px;
    text-align: left;
  }
}

.rainbow-call-to-action.style-8 {
  padding: 100px 0;
  background: var(--color-blackest);
}
.rainbow-call-to-action.style-8 .content-wrapper {
  padding: 40px 0;
  border-bottom: 1px solid var(--color-border);
}
.rainbow-call-to-action.style-8 .content .subtitle {
  font-size: 20px;
  color: var(--color-body);
  line-height: 1.5;
  margin-bottom: 0;
}
.rainbow-call-to-action.style-8 .call-to-btn {
  margin-top: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-call-to-action.style-8 .call-to-btn {
    margin-top: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-call-to-action.style-8 .call-to-btn {
    margin-top: 20px;
  }
}

.theme-shape {
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.theme-shape::before {
  position: absolute;
  left: -250px;
  top: 250px;
  right: auto;
  bottom: auto;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  background-image: linear-gradient(45deg, var(--color-primary), var(--color-primary));
  opacity: 0.2;
  filter: blur(100px);
  content: "";
}
.theme-shape::after {
  position: absolute;
  z-index: -1;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  opacity: 0.2;
  filter: blur(100px);
  content: "";
  left: auto;
  top: -250px;
  right: -250px;
  bottom: auto;
  background-image: linear-gradient(45deg, var(--color-secondary), var(--color-tertiary));
}

.bg-image {
  background-repeat: no-repeat;
  background-position: center center;
}
.bg-image.bg-image2 {
  background-image: url(../images/call-to-action/bg-image-1.jpg);
}
.bg-image.bg-image3 {
  background-image: url(../images/call-to-action/bg-image-2.jpg);
}

.data-black-overlay {
  position: relative;
}
.data-black-overlay::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  z-index: 2;
  background-color: #000000;
  opacity: 0.7;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .call-to-action-alignwide .template-slider-wrapper {
    padding: 0 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .call-to-action-alignwide .template-slider-wrapper {
    padding-right: 30px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .call-to-action-alignwide .sub-title {
    padding-top: 25px;
  }
}
.call-to-action-alignwide p {
  padding-bottom: 0;
}
.call-to-action-alignwide .thumbnail {
  margin-right: -142px;
  margin-top: 20px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .call-to-action-alignwide .thumbnail {
    margin-right: -15px;
  }
}
@media only screen and (max-width: 767px) {
  .call-to-action-alignwide .thumbnail {
    margin-right: -15px;
  }
}

.call-to-action-variation-6 {
  max-width: 600px;
}

.rainbow-callto-action-area.cta_bottom {
  margin-bottom: -200px;
}

.fancy-genearate-section {
  margin-top: 90px;
  margin-bottom: -150px;
  position: relative;
}
@media only screen and (max-width: 1199px) {
  .fancy-genearate-section {
    margin-top: 0;
    margin-bottom: 50px;
  }
}
@media only screen and (max-width: 479px) {
  .fancy-genearate-section {
    margin-bottom: 40px;
  }
}
.fancy-genearate-section .genarator-section .genarator-card-group {
  flex-wrap: nowrap;
}
@media only screen and (max-width: 1199px) {
  .fancy-genearate-section .genarator-section .genarator-card-group {
    flex-wrap: wrap;
    justify-content: center;
  }
}
.fancy-genearate-section .genarator-section .genarator-card-group li {
  padding: 0;
  position: relative;
  transition: var(--transition);
}
@media only screen and (max-width: 1199px) {
  .fancy-genearate-section .genarator-section .genarator-card-group li {
    top: 0 !important;
    margin: 10px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .fancy-genearate-section .genarator-section .genarator-card-group li {
    flex-basis: 30% !important;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .fancy-genearate-section .genarator-section .genarator-card-group li {
    flex-basis: 45% !important;
  }
}
@media only screen and (max-width: 767px) {
  .fancy-genearate-section .genarator-section .genarator-card-group li {
    flex-basis: 45% !important;
  }
}
@media only screen and (max-width: 479px) {
  .fancy-genearate-section .genarator-section .genarator-card-group li {
    flex-basis: 95% !important;
  }
}
.fancy-genearate-section .genarator-section .genarator-card-group li:hover {
  transform: translateY(-5px);
}
.fancy-genearate-section .genarator-section .genarator-card-group li:hover .rainbow-demo-btn {
  background: var(--color-primary);
  color: var(--color-white);
  border-color: var(--color-primary);
}
.fancy-genearate-section .genarator-section .genarator-card-group li:nth-child(1) {
  top: 0;
}
.fancy-genearate-section .genarator-section .genarator-card-group li:nth-child(2) {
  top: -30px;
}
.fancy-genearate-section .genarator-section .genarator-card-group li:nth-child(3) {
  top: -60px;
}
.fancy-genearate-section .genarator-section .genarator-card-group li:nth-child(4) {
  top: -30px;
}
.fancy-genearate-section .genarator-section .genarator-card-group li:nth-child(5) {
  top: 0;
}
.fancy-genearate-section .genarator-section .genarator-card-group li a {
  -webkit-backdrop-filter: blur(21px);
  backdrop-filter: blur(21px);
  background: var(--color-blackest);
  border: none;
  border-radius: var(--radius);
  padding: 24px;
  padding-bottom: 80px;
  overflow: hidden;
}
@media only screen and (max-width: 1199px) {
  .fancy-genearate-section .genarator-section .genarator-card-group li a {
    padding-bottom: 24px;
  }
}

span.rainbow-demo-btn {
  font-size: 14px;
  padding: 5px 15px;
  border: 2px solid var(--color-border);
  border-radius: 10px;
  line-height: 24px;
  margin-top: 20px;
  transition: var(--transition);
}

/*---------------------
    Tab Styles  
-----------------------*/
.rainbow-default-tab {
  position: relative;
}
.rainbow-default-tab .tab-button {
  padding: 0;
  margin: 0;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  cursor: pointer;
  border-bottom: none;
}
.rainbow-default-tab .tab-button .tabs__tab {
  margin: 0;
}
.rainbow-default-tab .tab-button .tabs__tab .nav-link {
  color: var(--color-white);
  padding: 24px 44px;
  margin-bottom: -2px;
  outline: none;
  border: 0 none;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-default-tab .tab-button .tabs__tab .nav-link {
    padding: 24px 24px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-default-tab .tab-button .tabs__tab .nav-link {
    padding: 24px 24px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-default-tab .tab-button .tabs__tab .nav-link {
    padding: 24px 20px;
  }
}
.rainbow-default-tab .tab-button .tabs__tab .nav-link.active {
  background: var(--color-lessdark);
  border-color: transparent;
}
.rainbow-default-tab .tab-button .rainbow-tab-button button {
  padding: 0;
  margin: 0;
  background: transparent;
  border: 0 none;
  color: var(--color-white);
}
.rainbow-default-tab .rainbow-tab-content {
  background: var(--color-lessdark);
  padding: 40px;
}
@media only screen and (max-width: 767px) {
  .rainbow-default-tab .rainbow-tab-content {
    padding: 30px;
  }
}
.rainbow-default-tab .rainbow-tab-content p:last-child {
  margin-bottom: 0;
}
.rainbow-default-tab.style-two .tab-button {
  margin-bottom: 30px;
}
.rainbow-default-tab.style-two .tab-button .tabs__tab button {
  border-radius: var(--radius-small);
}
.rainbow-default-tab.style-two .rainbow-tab-content {
  border-radius: var(--radius-small);
}

.rainbow-default-tab::before {
  background-color: var(--color-primary);
  background: linear-gradient(95deg, var(--color-primary) 15%, var(--color-tertiary) 45%, var(--color-primary) 75%, var(--color-secondary) 100%) 95%/200% 100%;
  width: 100%;
  height: 70%;
  content: "";
  left: 0;
  bottom: 0;
  position: absolute;
  z-index: -1;
  border-radius: 10px;
  opacity: 0.5;
  backdrop-filter: blur(20px);
}

.rainbow-no-padding {
  padding: 0 !important;
}

/*-------------------------
    Advance Tab Style Two  
--------------------------*/
.tab-button-style-2 {
  border-bottom: 1px solid var(--color-border);
  justify-content: center;
  margin-bottom: 30px;
  padding: 0;
  list-style: none;
}
@media only screen and (max-width: 767px) {
  .tab-button-style-2 {
    margin-bottom: 20px;
  }
}
.tab-button-style-2 li {
  margin-top: 0;
  margin-bottom: 0;
}
.tab-button-style-2 li a {
  position: relative;
  display: block;
  outline: none;
  padding: 16px 28px;
  border: 0 none;
  box-shadow: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tab-button-style-2 li a {
    padding: 16px 12px;
  }
}
@media only screen and (max-width: 767px) {
  .tab-button-style-2 li a {
    padding: 14px 10px;
  }
}
.tab-button-style-2 li a::after {
  content: "";
  display: inline-block;
  width: 100%;
  height: 2px;
  position: absolute;
  bottom: -2px;
  left: 0;
  background-color: var(--color-primary);
  transform: scaleX(0);
  transition: transform 0.3s;
}
.tab-button-style-2 li a.active {
  border: 0 none;
  outline: none;
  color: var(--color-primary);
}
.tab-button-style-2 li a.active::after {
  transform: scaleX(1);
}
.tab-button-style-2 li a .title {
  font-size: 18px;
  margin-bottom: 0;
  font-weight: 500;
}

.advance-tab-content-style-2 {
  text-align: center;
  padding: 0 15%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .advance-tab-content-style-2 {
    padding: 0 6%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .advance-tab-content-style-2 {
    padding: 0 7%;
  }
}
@media only screen and (max-width: 767px) {
  .advance-tab-content-style-2 {
    padding: 0;
  }
}
.advance-tab-content-style-2.text-start {
  padding: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .advance-tab-content-style-2.text-start {
    padding: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .advance-tab-content-style-2.text-start {
    padding: 0;
  }
}
@media only screen and (max-width: 767px) {
  .advance-tab-content-style-2.text-start {
    padding: 0;
  }
}

.rainbow-pricing {
  margin-top: 40px;
}
.rainbow-pricing .feather {
  width: 20px;
}
.rainbow-pricing .pricing-table-inner {
  padding: 40px;
  position: relative;
  z-index: 2;
  border: 2px solid var(--color-border);
  border-radius: var(--radius);
  transition: all 0.6s cubic-bezier(0.33, 0.84, 0.31, 0.98);
  transform-style: preserve-3d;
}
.rainbow-pricing .pricing-table-inner .pricing-header {
  text-align: center;
}
.rainbow-pricing .pricing-table-inner .pricing-header .title {
  margin-bottom: 20px;
}
.rainbow-pricing .pricing-table-inner .pricing-header .price-wrapper {
  display: flex;
  justify-content: center;
}
.rainbow-pricing .pricing-table-inner .pricing-header .pricing span {
  display: block;
}
.rainbow-pricing .pricing-table-inner .pricing-header .pricing span.currency {
  font-size: 28px;
  position: relative;
  top: -3px;
  left: -2px;
  opacity: 0.7;
}
.rainbow-pricing .pricing-table-inner .pricing-header .pricing span.price {
  font-size: 77px;
  color: var(--color-primary);
  line-height: 1;
  font-weight: 700;
  margin-bottom: 10px;
}
@media only screen and (max-width: 767px) {
  .rainbow-pricing .pricing-table-inner .pricing-header .pricing span.price {
    font-size: 54px;
  }
}
.rainbow-pricing .pricing-table-inner .pricing-header .pricing span.subtitle {
  font-size: 14px;
  color: var(--color-body);
}
.rainbow-pricing .pricing-table-inner .pricing-body {
  text-align: center;
  margin-bottom: 30px;
}
.rainbow-pricing .pricing-table-inner .pricing-body .list-style--1 {
  list-style: none;
  padding: 0;
  margin: 0;
}
.rainbow-pricing .pricing-table-inner .pricing-footer {
  text-align: center;
}
.rainbow-pricing.style-2 .pricing-table-inner {
  background-color: var(--color-blackest);
  border-color: transparent !important;
}
.rainbow-pricing.style-4 {
  margin-left: -1px;
  margin-right: -1px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-pricing.style-4 {
    margin-left: 15px;
    margin-right: 15px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-pricing.style-4 {
    margin-left: 15px;
    margin-right: 15px;
  }
}
.rainbow-pricing.active {
  overflow: hidden;
}
.rainbow-pricing.active .pricing-header {
  position: relative;
}
.rainbow-pricing.active .pricing-header::before {
  content: "";
  width: 150px;
  height: 150px;
  background: var(--color-primary);
  position: absolute;
  left: 50%;
  top: -60px;
  transform: translateY(-50%) translateX(-50%);
  border-radius: 100%;
  filter: blur(70px);
}
.rainbow-pricing.style-5 .pricing-table-inner {
  background-color: var(--color-blackest);
  border-color: transparent;
  padding: 0;
  padding-bottom: 40px;
  border: 0 none;
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing-header {
  margin-bottom: 30px;
  padding-bottom: 0;
  border-bottom: 0 none !important;
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing-header .title {
  padding: 30px 40px;
  margin-bottom: 0;
  font-size: 19px;
  font-weight: 500;
  letter-spacing: 0.5px;
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing-header .price-wrapper {
  margin-bottom: 5px;
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing-header .pricing span.currency {
  font-size: 40px;
  position: relative;
  top: 0px;
  left: 0;
  opacity: 1;
  color: var(--color-white);
  font-weight: 700;
  line-height: 7px;
  display: flex;
  align-items: center;
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing-header .pricing span.price {
  font-size: 50px;
  color: var(--color-white);
  line-height: 1;
  font-weight: 700;
  margin-bottom: 0;
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing-header .pricing span.subtitle {
  color: var(--color-white);
}
.rainbow-pricing.style-5 .pricing-table-inner .pricing {
  background-color: var(--color-lessdark);
  padding: 30px;
}
.rainbow-pricing.style-chatenai {
  height: 100%;
}
.rainbow-pricing.style-chatenai .pricing-table-inner {
  border: 0;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.rainbow-pricing.style-chatenai .pricing-header {
  text-align: left;
}
.rainbow-pricing.style-chatenai .pricing-header .price-wrapper {
  justify-content: flex-start;
}
.rainbow-pricing.style-chatenai .pricing-header .price-wrapper span.sm-text {
  font-size: 48px;
  line-height: 77px;
}
.rainbow-pricing.style-chatenai .pricing-body {
  margin-bottom: 0;
}
.rainbow-pricing.style-chatenai .pricing-body ul {
  text-align: left;
}
.rainbow-pricing.style-chatenai .pricing-footer .btn-default {
  display: block;
}

@media only screen and (max-width: 767px) {
  .rainbow-compare-table.style-1 {
    overflow-x: auto;
  }
}
.rainbow-compare-table.style-1 table {
  text-align: center;
  margin-bottom: 0;
}
.rainbow-compare-table.style-1 table th {
  border: 1px solid var(--color-border);
  z-index: 10;
  height: 60px;
}
.rainbow-compare-table.style-1 table th:nth-child(1) {
  border: none;
}
.rainbow-compare-table.style-1 table th.style-prymary {
  background-color: var(--color-blackest);
  color: var(--color-primary);
}
.rainbow-compare-table.style-1 table td {
  width: 20%;
}
.rainbow-compare-table.style-1 table td:nth-child(1) {
  border-left: 0;
  height: 60px;
  text-align: left;
}
.rainbow-compare-table.style-1 table td .icon {
  height: 25px;
  width: 25px;
  border-radius: 50%;
  background-color: var(--color-primary);
  color: var(--color-heading);
  font-size: var(--font-size-b2);
  display: inline-flex;
  justify-content: center;
  align-items: center;
}
.rainbow-compare-table.style-1 table td .icon.bg-dark {
  background-color: var(--color-gray);
}
.rainbow-compare-table.style-1 table .bdr-top-0 {
  border-top: 0;
}
.rainbow-compare-table.style-1 table h6 {
  margin-bottom: 0;
}
.rainbow-compare-table.style-1 table .heading-row td {
  height: 80px !important;
}

.submit-btn-row {
  margin-top: 30px;
}
.submit-btn-row td {
  border: 0;
  padding: 0 10px;
  height: 100px;
}
.submit-btn-row td .btn-default {
  display: block;
}

/*--------------------------
    split Area Styles  
----------------------------*/
.rainbow-splite-style .thumbnail img {
  border-radius: 0;
  width: 100%;
}
.rainbow-splite-style .thumbnail.image-left-content img {
  border-radius: 0 10px 10px 0;
}
.rainbow-splite-style .split-inner {
  padding: 30px 115px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-splite-style .split-inner {
    padding: 40px 80px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-splite-style .split-inner {
    padding: 40px 30px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-splite-style .split-inner {
    padding: 40px 30px;
  }
}
.rainbow-splite-style .split-inner .title {
  font-size: 36px;
  line-height: 50px;
  color: var(--color-heading);
  font-weight: var(--p-bold);
}
@media only screen and (max-width: 767px) {
  .rainbow-splite-style .split-inner .title {
    font-size: 24px;
    line-height: 30px;
  }
}
.rainbow-splite-style .split-inner .split-list {
  list-style: none;
  padding-left: 0;
  margin: 0;
}
.rainbow-splite-style .split-inner .split-list li {
  color: var(--color-dark-alt);
}
.rainbow-splite-style .split-inner .features-section .single-features {
  display: flex;
  align-items: center;
  margin: 5px 0;
}
.rainbow-splite-style .split-inner .features-section .single-features .icon {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 34px;
  width: 34px;
  line-height: 34px;
  font-size: 20px;
  margin-right: 10px;
}
.rainbow-splite-style .split-inner .features-section .single-features p {
  margin-bottom: 0;
}

/*----------------------------
    Video Popup Styles  
------------------------------*/
.video-popup,
.rainbow-gallery {
  position: relative;
  display: block;
}
.video-popup .thumbnail img,
.rainbow-gallery .thumbnail img {
  width: 100%;
}
.video-popup .video-icon,
.rainbow-gallery .video-icon {
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  margin-top: 10px;
  transition: 0.4s;
}

.rainbow-gallery .video-icon {
  opacity: 0;
  transition: 0.4s;
  transform: translate(-50%, -50%) scale(0.5);
}
.rainbow-gallery:hover .video-icon {
  opacity: 1;
  margin-top: 0;
  transform: translate(-50%, -50%) scale(1);
}

.video-gallery-content {
  border-radius: 10px;
  padding-top: 300px;
  padding-bottom: 60px;
  overflow: hidden;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .video-gallery-content {
    padding-bottom: 40px;
    padding-top: 150px;
  }
}
@media only screen and (max-width: 767px) {
  .video-gallery-content {
    padding-bottom: 40px;
    padding-top: 150px;
  }
}
.video-gallery-content .overlay-content {
  padding: 0 60px;
}
@media only screen and (max-width: 767px) {
  .video-gallery-content .overlay-content {
    padding: 0 20px;
  }
}
.video-gallery-content .overlay-content .title {
  margin-top: 15px;
  margin-bottom: 0;
  font-size: 30px;
  letter-spacing: 0.5px;
  line-height: 1.4;
  color: var(--color-white);
}
@media only screen and (max-width: 767px) {
  .video-gallery-content .overlay-content .title {
    font-size: 20px;
  }
}

.vedio-caption {
  margin-top: 20px;
}
.vedio-caption a {
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(to right, var(--color-secondary-gradient-start), var(--color-secondary-gradient-end));
  text-transform: capitalize;
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.vedio-caption a h4 {
  margin-bottom: 0;
  margin-right: 10px;
}
.vedio-caption a i {
  font-size: 30px;
}

/*----------------------
    RBT Video Styles  
-----------------------*/
.mfp-bg {
  z-index: 9999;
}

.mfp-wrap {
  z-index: 9999;
}

.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
  opacity: 1;
}

.mfp-with-zoom.mfp-ready.mfp-bg {
  opacity: 0.8;
}

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0;
}

html.picture {
  margin: 0 !important;
}

img.mfp-img {
  padding-bottom: 0;
}

.mfp-bg {
  background: rgba(0, 0, 0, 0.8);
  opacity: 1;
  backdrop-filter: blur(15px);
}

.mfp-iframe-scaler iframe {
  border-radius: 10px;
}

.mfp-with-zoom.mfp-ready.mfp-bg {
  opacity: 1;
}

.mfp-iframe-holder .mfp-close,
.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  top: -60px;
  right: -50px;
  font-size: 30px;
  font-weight: 400;
  transition: 0.4s;
  opacity: 1;
  width: 50px;
  height: 50px;
  background: var(--color-blackest);
  text-align: center;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0;
  color: var(--color-white);
}

.mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  top: -10px;
  right: -50px;
}

.side-nav-opened body::before,
.close_side_menu,
.popup-mobile-menu,
.rbt-offcanvas-side-menu {
  background: rgba(0, 0, 0, 0.8);
  backdrop-filter: blur(15px);
}

/*------------------------------
    Gallery Styles  
--------------------------------*/
.rbt-temaplte-gallery-wrapper .thumbnail img {
  width: 100%;
  border-radius: 10px;
}

.template-slider-wrapper .sub-title {
  color: var(--color-primary);
}
.template-slider-wrapper .title {
  font-weight: var(--p-black);
}
.template-slider-wrapper .description {
  max-width: 900px;
}

/*==========================
    Contact Address 
============================*/
.contact-form-1 .form-group input {
  height: 70px;
  padding: 0 20px;
}
.contact-form-1 .form-group textarea {
  padding-top: 20px;
  padding-left: 20px;
}

.contact-address-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

/*-------------------
    Address Area  
--------------------*/
.rainbow-address {
  margin-top: 30px;
  padding: 40px;
  border-radius: 10px;
  padding-top: 40px;
  background: var(--color-blackest);
  padding-bottom: 50px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
  transition: 0.3s;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-address {
    padding: 30px 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-address {
    padding: 30px 20px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-address {
    padding: 30px 20px;
  }
}
.rainbow-address .icon {
  color: var(--color-primary);
  border-radius: 100%;
  font-size: 40px;
  display: inline-block;
  margin-bottom: 17px;
  line-height: 6px;
}
.rainbow-address .inner h4.title {
  font-size: 18px;
  font-weight: 700;
}
.rainbow-address .inner p {
  font-size: 18px;
  margin-bottom: 0;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-address .inner p {
    font-size: 16px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-address .inner p {
    font-size: 16px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-address .inner p {
    font-size: 16px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-address .inner p br {
    display: none;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-address .inner p br {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-address .inner p br {
    display: none;
  }
}
.rainbow-address .inner p a {
  color: var(--color-body);
}
.rainbow-address .inner p a:hover {
  color: var(--color-primary);
}
.rainbow-address:hover {
  transform: translateY(-5px);
}

.google-map-style-1 {
  width: 100%;
  height: 500px;
}

.brand-carousel-activation {
  padding: 0 50px;
}
@media only screen and (max-width: 767px) {
  .brand-carousel-activation {
    padding: 0 10px;
  }
}
.brand-carousel-activation li {
  margin-top: 0;
  margin-bottom: 0;
}
.brand-carousel-activation li a {
  display: block;
}
.brand-carousel-activation li a img {
  opacity: 0.8;
  transition: 0.4s;
}
.brand-carousel-activation li:hover a img {
  opacity: 1;
  filter: contrast(0.5);
}
.brand-carousel-activation.rainbow-slick-arrow button.slick-arrow {
  width: 50px;
  height: 50px;
}
.brand-carousel-activation.rainbow-slick-arrow button.slick-arrow i {
  display: block;
  font-size: 24px;
  color: #fff;
}
.brand-carousel-activation.rainbow-slick-arrow button.slick-arrow::before {
  display: none;
}

.brand-style-1 {
  padding: 0;
  margin: 0;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.brand-style-1 li {
  flex-basis: 25%;
  border-width: 1px 1px 1px 1px;
  border-style: solid;
  margin: 0px 0px -2px -2px;
  border-color: var(--color-border);
  padding: 40px 0 40px 0;
  text-align: center;
}
@media only screen and (max-width: 575px) {
  .brand-style-1 li {
    flex-basis: 33.33%;
  }
}
@media only screen and (max-width: 479px) {
  .brand-style-1 li {
    flex-basis: 50%;
  }
}
.brand-style-1 li a {
  display: block;
}
.brand-style-1 li a img {
  opacity: 0.8;
  transition: 0.4s;
}
.brand-style-1 li:hover a img {
  opacity: 1;
  filter: contrast(0.5);
}

.brand-style-2 {
  padding: 0;
  margin: 0;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.brand-style-2 li {
  flex-basis: 16.666%;
  text-align: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .brand-style-2 li {
    flex-basis: 25%;
  }
}
@media only screen and (max-width: 767px) {
  .brand-style-2 li {
    flex-basis: 25%;
  }
}
@media only screen and (max-width: 575px) {
  .brand-style-2 li {
    flex-basis: 33.33%;
  }
}
@media only screen and (max-width: 479px) {
  .brand-style-2 li {
    flex-basis: 50%;
  }
}
.brand-style-2 li a {
  display: block;
}
.brand-style-2 li a img {
  opacity: 0.6;
  transition: 0.3s;
  max-height: 70px;
}
.brand-style-2 li:hover a img {
  opacity: 1;
}
.brand-style-2.variation-2 li {
  flex-basis: 25%;
  text-align: center;
}
@media only screen and (max-width: 767px) {
  .brand-style-2.variation-2 li {
    flex-basis: 33.33%;
  }
}
@media only screen and (max-width: 479px) {
  .brand-style-2.variation-2 li {
    flex-basis: 50%;
  }
}

/*---------------------------
    Error Styles Area  
-----------------------------*/
.error-inner {
  text-align: center;
}
.error-inner h1 {
  font-size: 200px;
  line-height: 1;
  color: var(--color-primary);
  font-weight: var(--p-bold);
}
@media only screen and (max-width: 767px) {
  .error-inner h1 {
    font-size: 100px;
    line-height: 1;
  }
}
.error-inner .title {
  line-height: 45px;
  font-weight: var(--p-bold);
}
.error-inner .description {
  font-size: var(--font-size-b2);
  line-height: 28px;
  color: var(--color-body);
  font-weight: var(--p-regular);
  margin-bottom: 30px;
}
.error-inner .blog-search {
  display: inline-block;
}
.error-inner .blog-search input {
  min-width: 500px;
}
.error-inner .view-more-button {
  margin-top: 30px;
}

.advance-tab-button-1 .tab-button-list {
  list-style: none;
  padding: 0;
  margin: -10px 0;
}
.advance-tab-button-1 .tab-button-list li {
  margin: 10px 0;
}
.advance-tab-button-1 .tab-button-list .tab-button {
  cursor: pointer;
  padding: 47px 27px;
  border-radius: 10px;
  position: relative;
  z-index: 2;
  background-color: transparent;
  border: 0 none;
  margin: 0;
}
.advance-tab-button-1 .tab-button-list .tab-button::before {
  position: absolute;
  content: "";
  background: var(--color-blackest);
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  transition: 0.3s;
  opacity: 0;
  transform: scale(0.9);
  z-index: -1;
  border-radius: 7px;
}
.advance-tab-button-1 .tab-button-list .tab-button:hover::before {
  opacity: 1;
  transform: scale(1);
}
.advance-tab-button-1 .tab-button-list .tab-button::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 100%;
  border-left: 20px solid var(--color-blackest);
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  margin-top: -20px;
  opacity: 0;
  transition: 0.3s;
  transform: scale(0.9);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .advance-tab-button-1 .tab-button-list .tab-button::after {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .advance-tab-button-1 .tab-button-list .tab-button::after {
    display: none;
  }
}
.advance-tab-button-1 .tab-button-list .tab-button .title {
  color: var(--color-body);
  font-size: 20px;
  margin-bottom: 10px;
  transition: 0.3s;
}
.advance-tab-button-1 .tab-button-list .tab-button .description {
  margin-bottom: 0;
  transition: 0.3s;
}
.advance-tab-button-1 .tab-button-list .tab-button.tab-with-icon {
  padding: 25px;
  border: 1px solid var(--color-white-off) !important;
}
.advance-tab-button-1 .tab-button-list .tab-button.tab-with-icon .tab {
  display: flex;
  height: 100%;
}
.advance-tab-button-1 .tab-button-list .tab-button.tab-with-icon .tab .icon {
  display: flex;
  width: 60px;
  border-radius: 5px;
  background: var(--color-primary-darker);
  color: var(--color-primary);
  text-align: center;
  font-size: 20px;
  justify-content: center;
  align-items: center;
  min-height: 100%;
}
.advance-tab-button-1 .tab-button-list .tab-button.tab-with-icon .tab .content {
  padding-right: 24px;
  padding-left: 24px;
}
.advance-tab-button-1 .tab-button-list .tab-button.tab-with-icon .tab .content .description {
  font-size: var(--font-size-b3);
}
.advance-tab-button-1 .tab-button-list .tab-button.bg-color-white-off::before {
  background: var(--color-white-off);
}
.advance-tab-button-1 .tab-button-list .tab-button.bg-color-white-off::after {
  border-left: 20px solid var(--color-white-off);
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}
.advance-tab-button-1 .tab-button-list .tab-button.tab-with-icon.active {
  border: 1px solid transparent !important;
}
.advance-tab-button-1 .tab-button-list .tab-button.active .title {
  color: var(--color-white);
}
.advance-tab-button-1 .tab-button-list .tab-button.active::before {
  opacity: 1;
  transform: scale(1);
}
.advance-tab-button-1 .tab-button-list .tab-button.active::after {
  opacity: 1;
  transform: scale(1);
}

.advance-tab-content-1 .thumbnail img {
  border-radius: 10px;
}

.advance-tab-button-1.right-align .tab-button-list .tab-button::after {
  transform: scale(0.9) rotate(-180deg);
  left: auto;
  right: 100%;
}

.advance-tab-button-1.right-align .tab-button-list .tab-button::after {
  transform: scale(1) rotate(-180deg);
}

.advance-tab-button-1.right-top .tab-button-list .tab-button::after {
  left: 50%;
  transform: scale(0.9) translateX(-50%) rotate(-92deg);
  bottom: 94%;
  top: auto;
}

.advance-tab-button-1.right-top .tab-button-list .tab-button::after {
  opacity: 0;
  transform: scale(1) translateX(-50%) rotate(-92deg);
}

.advance-tab-button-1.right-top .tab-button-list .tab-button.active::after {
  opacity: 1;
}

.nav-tabs .nav-item.show .nav-link,
.nav-tabs .nav-link.active,
.nav-tabs .nav-link:focus {
  color: #495057;
  background: transparent;
  border: 0 none;
  box-shadow: none;
}

.nav-tabs .nav-link:focus,
.nav-tabs .nav-link:hover {
  border-color: transparent;
}

.advance-tab-button-1 .tab-button-list .tab-button:focus {
  outline: none;
  border: 0 none;
  box-shadow: none;
}

.service-thumbnail-offset {
  margin-right: -50px;
  margin-bottom: -50px;
  border-radius: 10px 0 10px 0;
}
.service-thumbnail-offset img {
  border-radius: 10px 0 10px 0;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .service-thumbnail-offset {
    margin-right: -30px;
    margin-bottom: -40px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .service-thumbnail-offset {
    margin-right: -30px;
    margin-bottom: -40px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .service-thumbnail-offset {
    margin-right: -30px;
    margin-bottom: -40px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .advance-tab-four .tab-content .thumbnail {
    margin-top: 30px;
  }
}

/*----------------------------
    Advance Pricing Table  
------------------------------*/
.advance-pricing {
  background: var(--color-blackest);
  border-radius: 10px;
}
.advance-pricing .pricing-left {
  height: 100%;
  background: var(--color-lessdark);
  padding: 60px 50px;
  border-radius: 10px 0 0 10px;
}
@media only screen and (max-width: 767px) {
  .advance-pricing .pricing-left {
    padding: 30px 20px;
  }
}
.advance-pricing .pricing-left .main-title {
  margin-bottom: 10px;
}
.advance-pricing .pricing-left .price-wrapper .price-amount {
  font-size: 60px;
  text-align: center;
  display: block;
  color: var(--color-white);
  font-weight: 700;
}
.advance-pricing .pricing-left .price-wrapper .price-amount sup {
  font-size: 16px;
  top: -34px;
}
.advance-pricing .pricing-left .btn-default {
  width: 100%;
  margin: 10px 0;
}
.advance-pricing .pricing-left .rating {
  text-align: center;
  margin-top: 5px;
}
.advance-pricing .pricing-left .rating a {
  font-weight: 700;
  color: #f1b304;
}
.advance-pricing .pricing-left .rating a svg {
  fill: #f1b304;
}
.advance-pricing .pricing-left .subtitle {
  display: block;
  color: var(--color-body);
  text-align: center;
}
.advance-pricing .pricing-right {
  padding: 60px 30px;
}
.advance-pricing .pricing-right .price-title {
  font-size: 20px;
  margin-bottom: 10px;
}
.advance-pricing .pricing-right .price-title li {
  font-size: 16px;
  margin: 8px 0;
}

.rainbow-comment-form .section-title span.subtitle {
  font-weight: 600;
  letter-spacing: 0.5px;
  line-height: 18px;
  font-size: 16px;
  border-radius: 4px;
  margin-bottom: 12px;
}
.rainbow-comment-form .section-title .title {
  font-size: 50px;
  font-weight: 600;
  line-height: 62px;
  margin-bottom: 20px;
  color: var(--color-white);
}

iframe {
  border-radius: 10px;
}

.rnform-group {
  margin-bottom: 20px;
}
.rnform-group input {
  border: 2px solid var(--color-border);
  border-radius: 4px;
  height: 50px;
  font-size: 16px;
}

.rainbow-comment-form .inner .rnform-group textarea {
  min-height: 193px;
  border: 2px solid var(--color-border);
  border-radius: 4px;
  resize: none;
  padding: 15px;
  font-size: 16px;
}

/*--------------------------
    Swicher Styles  
----------------------------*/
.active-dark-mode .my_switcher ul li .setColor.dark {
  display: none;
}

.active-light-mode .my_switcher ul li .setColor.light {
  display: none;
}

.active-light-mode .my_switcher ul li a.dark img {
  display: block;
}

.my_switcher ul li a.dark img {
  display: none;
  filter: brightness(100);
}

.my_switcher {
  border: 0 none;
  padding: 0;
  margin-left: 10px;
  width: 40px;
  background: var(--color-secondary);
  display: flex;
  justify-content: center;
  height: 40px;
  align-items: center;
  border-radius: 100%;
}
@media only screen and (max-width: 767px) {
  .my_switcher {
    margin-left: 5px;
  }
}
.my_switcher ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  width: 100%;
  height: 100%;
  position: relative;
  border-radius: 100%;
}
.my_switcher ul li {
  margin-top: 0;
  margin-bottom: 0;
}
.my_switcher ul li a {
  display: block;
  position: relative;
  z-index: 2;
  background: var(--color-primary);
  width: 40px;
  height: 40px;
  border-radius: 100%;
}
.my_switcher ul li a img {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}
.my_switcher ul li a.active {
  display: none;
}

/*-------------------------
    Back To Top  
---------------------------*/
@-webkit-keyframes border-transform {
  0%, 100% {
    border-radius: 63% 37% 54% 46%/55% 48% 52% 45%;
  }
  14% {
    border-radius: 40% 60% 54% 46%/49% 60% 40% 51%;
  }
  28% {
    border-radius: 54% 46% 38% 62%/49% 70% 30% 51%;
  }
  42% {
    border-radius: 61% 39% 55% 45%/61% 38% 62% 39%;
  }
  56% {
    border-radius: 61% 39% 67% 33%/70% 50% 50% 30%;
  }
  70% {
    border-radius: 50% 50% 34% 66%/56% 68% 32% 44%;
  }
  84% {
    border-radius: 46% 54% 50% 50%/35% 61% 39% 65%;
  }
}
.paginacontainer {
  height: 3000px;
}

.rn-progress-parent {
  position: fixed;
  right: 30px;
  bottom: 30px;
  height: 46px;
  width: 46px;
  cursor: pointer;
  display: block;
  border-radius: 50px;
  box-shadow: inset 0 0 0 2px var(--color-gray);
  z-index: 10000;
  opacity: 0;
  visibility: hidden;
  transform: translateY(15px);
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
}
.rn-progress-parent.rn-backto-top-active {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}
.rn-progress-parent::after {
  position: absolute;
  font-family: "feather" !important;
  content: "\e914";
  text-align: center;
  line-height: 46px;
  font-size: 24px;
  color: var(--color-primary);
  left: 0;
  top: 0;
  height: 46px;
  width: 46px;
  cursor: pointer;
  display: block;
  z-index: 1;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
}
.rn-progress-parent:hover::after {
  color: var(--color-primary);
}
.rn-progress-parent::before {
  position: absolute;
  font-family: "feather" !important;
  content: "\e914";
  text-align: center;
  line-height: 46px;
  font-size: 24px;
  opacity: 0;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  left: 0;
  top: 0;
  height: 46px;
  width: 46px;
  cursor: pointer;
  display: block;
  z-index: 2;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
}
.rn-progress-parent:hover::before {
  opacity: 1;
}
.rn-progress-parent svg path {
  fill: none;
}
.rn-progress-parent svg.rn-back-circle path {
  stroke: var(--color-primary);
  stroke-width: 4;
  box-sizing: border-box;
  -webkit-transition: all 200ms linear;
  transition: all 200ms linear;
}

/*--------------------------
    About Styles  
---------------------------*/
.about-style-4 .title {
  font-weight: 400;
  margin-bottom: 35px;
}
.about-style-4 .title strong {
  color: var(--color-primary);
}
.about-style-4 .feature-list {
  padding: 0;
  margin: 0;
  list-style: none;
}
.about-style-4 .feature-list li {
  display: flex;
}
.about-style-4 .feature-list li .icon {
  background: var(--color-primary);
  width: 30px;
  height: 30px;
  border-radius: 100%;
  color: var(--color-white);
  text-align: center;
  min-width: 30px;
}
.about-style-4 .feature-list li .icon i {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
.about-style-4 .feature-list li .title-wrapper {
  margin-left: 13px;
}
.about-style-4 .feature-list li .title-wrapper .title {
  font-size: 18px;
  margin: 0;
}
.about-style-4 .feature-list li .title-wrapper .text {
  font-size: 16px;
  margin-bottom: 20px;
  max-width: 80%;
  margin-top: 13px;
}

.about-style-5 {
  position: relative;
  z-index: 2;
}
.about-style-5 .about-wrapper {
  margin-top: -150px;
  background: var(--color-blackest);
  border-radius: 10px;
  padding: 15px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .about-style-5 .about-wrapper {
    margin-top: 80px;
    padding: 15px 15px 30px 15px;
  }
}
@media only screen and (max-width: 767px) {
  .about-style-5 .about-wrapper {
    margin-top: 80px;
    padding: 15px 15px 30px 15px;
  }
}
.about-style-5 .about-wrapper .thumbnail img {
  border-radius: 10px;
}
.about-style-5 .about-wrapper .content .inner {
  padding: 0 40px;
}
@media only screen and (max-width: 767px) {
  .about-style-5 .about-wrapper .content .inner {
    padding: 0;
  }
}
.about-style-5 .about-wrapper .content .inner .title {
  font-size: 30px;
  margin-bottom: 13px;
}
.about-style-5 .about-wrapper .content .inner p {
  margin-bottom: 20px;
  width: 80%;
}

.contact-address {
  padding: 0;
  margin: 0;
  list-style: none;
}
.contact-address li {
  font-size: 16px;
}
.contact-address li i {
  color: var(--color-primary);
  margin-right: 10px;
}

.about-style-6 .rbt-progress-style-1,
.about-style-6 .wrapper {
  position: relative;
  z-index: 2;
  max-width: 850px;
  margin: 0 auto;
  border-radius: 10px;
}
.about-style-6 .wrapper {
  padding: 50px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .about-style-6 .wrapper {
    padding: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .about-style-6 .wrapper {
    padding: 20px;
  }
}
.about-style-6 .wrapper::after {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  background: var(--color-lessdark);
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.6;
  border-radius: 10px;
}
.about-style-6 .thumbnail img {
  max-height: 200px;
}
.about-style-6 .subtitle {
  font-size: 18px;
  font-weight: 500;
}
.about-style-6 .maintitle {
  font-size: 30px;
  line-height: 1.3;
  margin-top: 17px;
  margin-bottom: 25px;
}

/*---------------------------
    Newsletter Styles  
----------------------------*/
.border-top-bottom {
  border-top: 1px solid var(--color-border);
  border-bottom: 1px solid var(--color-border);
}

.newsletter-area .border-top-bottom {
  border-top: 1px solid var(--color-border);
  border-bottom: 1px solid var(--color-border);
}

.rainbow-newsletter-default .newsletter-wrapper {
  padding: 40px 0;
}
.rainbow-newsletter-default .newsletter-section-title .title {
  color: var(--color-body);
  margin-bottom: 7px;
}
.rainbow-newsletter-default .newsletter-section-title .description {
  color: var(--color-body);
  margin-bottom: 0;
}
.rainbow-newsletter-default .rainbow-newsletter {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin: 0 -10px;
}
@media only screen and (max-width: 575px) {
  .rainbow-newsletter-default .rainbow-newsletter {
    display: block;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-newsletter-default .rainbow-newsletter {
    justify-content: flex-start;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-newsletter-default .rainbow-newsletter {
    justify-content: flex-start;
  }
}
.rainbow-newsletter-default .rainbow-newsletter .form-group {
  margin-bottom: 0;
  margin: 0 10px;
}
.rainbow-newsletter-default .rainbow-newsletter .form-group input {
  height: 55px;
  padding: 0 24px;
  min-width: 500px;
  background: var(--color-blackest);
  border: 0 none;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-newsletter-default .rainbow-newsletter .form-group input {
    min-width: 400px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-newsletter-default .rainbow-newsletter .form-group input {
    min-width: 400px;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-newsletter-default .rainbow-newsletter .form-group input {
    min-width: 350px;
  }
}
@media only screen and (max-width: 575px) {
  .rainbow-newsletter-default .rainbow-newsletter .form-group input {
    min-width: 100%;
    margin-bottom: 20px;
  }
}
.rainbow-newsletter-default .rainbow-newsletter .form-group .btn-default {
  height: 55px;
}

/*------------------------
    Featue Styles  
--------------------------*/
.rbt-feature-main {
  padding-bottom: 0;
  border-radius: 10px;
}
.rbt-feature-main .feature-left-top {
  max-width: 500px;
}
.rbt-feature-main .feature-left-bottom {
  max-width: 500px;
}
.rbt-feature-main .feature-left-bottom .button-group {
  margin-bottom: 50px;
}
.signup-area {
  min-height: 100vh;
  height: auto;
}
.signup-area .signup-top {
  padding: 30px;
}
@media only screen and (max-width: 479px) {
  .signup-area .signup-top {
    padding: 20px;
    margin: 0;
    text-align: center;
  }
}
.signup-area .signup-top a {
  display: inline-block;
}
.signup-area .sign-up-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: auto;
}
@media only screen and (max-width: 479px) {
  .signup-area .sign-up-wrapper {
    margin: 0 10px;
  }
}

.sign-up-box {
  max-width: 480px;
  background-color: var(--color-blackest);
  border-radius: var(--radius);
}
.sign-up-box .signup-box-top {
  padding: 2px;
  border-radius: var(--radius);
}
.sign-up-box .signup-box-top img {
  border-radius: var(--radius);
}
.sign-up-box .signup-box-bottom {
  padding: 30px;
}
.sign-up-box .signup-box-bottom .signup-box-content {
  text-align: center;
}
.sign-up-box .signup-box-bottom .signup-box-content .social-btn-grp {
  display: flex;
  justify-content: space-between;
}
.sign-up-box .signup-box-bottom .signup-box-content .btn-default {
  flex-basis: 50%;
  padding: 0 12px;
  display: inline-block;
  text-shadow: none;
  font-weight: var(--p-medium);
  font-size: var(--font-size-b3);
}
@media only screen and (max-width: 479px) {
  .sign-up-box .signup-box-bottom .signup-box-content .btn-default {
    font-size: var(--font-size-b3);
  }
}
.sign-up-box .signup-box-bottom .signup-box-content .btn-default .icon-left {
  margin-right: 10px;
  display: inline-block;
  width: 18px;
  height: auto;
}
.sign-up-box .signup-box-bottom .signup-box-content .btn-default + .btn-default {
  margin-left: 10px;
}
.sign-up-box .signup-box-bottom .signup-box-content .text-social-area {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 20px 0;
}
@media only screen and (max-width: 479px) {
  .sign-up-box .signup-box-bottom .signup-box-content .text-social-area {
    margin: 10px 0;
  }
}
.sign-up-box .signup-box-bottom .signup-box-content .text-social-area hr {
  height: 1px;
  background: var(--color-border);
  width: 100%;
}
@media only screen and (max-width: 479px) {
  .sign-up-box .signup-box-bottom .signup-box-content .text-social-area hr {
    display: none;
  }
}
.sign-up-box .signup-box-bottom .signup-box-content .text-social-area span {
  width: 100%;
}
.sign-up-box .signup-box-bottom .signup-box-content form input {
  padding: 10px 15px;
  padding-left: 50px;
}
.sign-up-box .signup-box-bottom .signup-box-content form .input-section {
  position: relative;
}
.sign-up-box .signup-box-bottom .signup-box-content form .input-section.input-section {
  margin-top: 20px;
}
.sign-up-box .signup-box-bottom .signup-box-content form .icon {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
}
.sign-up-box .signup-box-bottom .signup-box-content form .forget-text {
  display: flex;
  justify-content: flex-end;
  margin-top: 20px;
}
.sign-up-box .signup-box-bottom .signup-box-content form .forget-text .btn-read-more {
  color: var(--color-primary);
  font-weight: var(--p-medium);
}
.sign-up-box .signup-box-bottom .signup-box-content form button {
  margin-top: 20px;
}
.sign-up-box .signup-box-bottom .signup-box-content form button.btn-default {
  display: block;
  width: 100%;
}
.sign-up-box .signup-box-bottom .signup-box-footer {
  text-align: center;
  margin-top: 15px;
}
.sign-up-box .signup-box-bottom .signup-box-footer a {
  color: var(--color-primary);
  font-weight: var(--p-medium);
}

body.active-light-mode .sign-up-box {
  background-color: var(--color-white);
}
body.active-light-mode .sign-up-box .signup-box-content .title {
  color: var(--color-dark);
}
body.active-light-mode .sign-up-box .signup-box-content .btn-border {
  color: var(--color-dark);
  border-color: var(--color-border-light);
}
body.active-light-mode .sign-up-box .signup-box-content .btn-border:hover {
  border-color: var(--color-primary);
}

/*============ changelog css ===========*/
.changelog_inner {
  padding-right: 30px;
  padding-bottom: 100px;
}

.changelog_info {
  padding-top: 15px;
}
.changelog_info .version_info {
  margin-right: 15px;
  position: relative;
  height: 100%;
}
.changelog_info .c_version {
  flex: 1;
  background: var(--color-primary-alt);
  text-align: center;
  font-size: 14px;
  font-weight: 400;
  height: 26px;
  line-height: 27px;
  border-radius: 3px;
  color: #fff;
  min-width: 50px;
  max-width: 60px;
  display: block;
  margin: 0 auto;
  z-index: 2;
  position: relative;
}
.changelog_info .changelog_date {
  display: flex;
  flex-direction: row-reverse;
  text-align: right;
}
.changelog_info .changelog_date .c_date h6 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 0;
}
.changelog_info .changelog_date .c_date p {
  font-size: 14px;
  margin-bottom: 0;
}
.changelog_info .line {
  height: calc(100% + 15px);
  width: 2px;
  background: var(--color-border);
  position: absolute;
  left: 50%;
  top: 0;
  transform: translateX(-50%);
  z-index: 1;
}
.changelog_info:last-child .line {
  height: 100%;
}
.changelog_info:last-child .changelog_content {
  padding-bottom: 0;
}

.changelog_content {
  padding-bottom: 60px;
}
.changelog_content p {
  display: flex;
  margin-bottom: 15px;
  font-size: 14px;
}
.changelog_content span {
  font-weight: 400;
  font-size: 10px;
  color: var(--color-white);
  padding: 0 10px;
  text-transform: uppercase;
  min-width: 110px;
  display: inline-block;
  text-align: center;
  line-height: 23px;
  border-radius: 3px;
  margin-right: 20px;
  height: 22px;
  flex: 0;
  letter-spacing: 0.8px;
}
.changelog_content span.improve {
  background: var(--color-info);
}
.changelog_content span.new {
  background: var(--color-success);
}
.changelog_content span.update {
  background: var(--color-warning);
}
.changelog_content span.fixed {
  background: var(--color-danger);
}
.changelog_content .download-links {
  border-top: 1px dotted rgba(51, 51, 51, 0.2);
}
.changelog_content .changelog_btn {
  font-size: 14px;
  color: #6b707f;
  font-weight: 500;
  margin-top: 12px;
  display: inline-block;
  opacity: 0.5;
}
.changelog_content .changelog_btn i {
  margin-right: 10px;
}
.changelog_content .changelog_btn:hover {
  color: var(--color-primary);
}
.changelog_content .changelog_btn + .changelog_btn {
  margin-left: 28px;
}
.changelog_content:hover .changelog_btn {
  opacity: 1;
}

/**************************************
            Blog 
***************************************/
/*----------------------
    Blog Styles  
-----------------------*/
.rainbow-card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: var(--color-blackest);
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: var(--radius);
  overflow: hidden;
  transition: all 0.5s;
}
.rainbow-card .inner .thumbnail {
  overflow: hidden;
}
.rainbow-card .inner .thumbnail a {
  display: block;
  overflow: hidden;
}
.rainbow-card .inner .thumbnail a img {
  width: 100%;
  transition: 0.5s;
  overflow: hidden;
}
.rainbow-card .inner .content {
  display: flex;
  flex-wrap: wrap;
  padding: 30px;
  padding-top: 22px;
}
@media only screen and (max-width: 767px) {
  .rainbow-card .inner .content {
    padding: 30px 20px;
  }
}
.rainbow-card .inner .content .descriptiion {
  margin-bottom: 0;
  margin-bottom: 13px;
}
.rainbow-card .inner .content .title {
  font-size: 20px;
  line-height: 1.5;
  transition: all 0.5s;
  margin-bottom: 0;
  margin-top: 15px;
  flex-basis: 100%;
}
.rainbow-card.card-list-view {
  height: 100%;
}
.rainbow-card.card-list-view .inner {
  display: flex;
  height: 100%;
}
@media only screen and (max-width: 575px) {
  .rainbow-card.card-list-view .inner {
    display: block;
  }
}
.rainbow-card.card-list-view .inner .thumbnail {
  flex-basis: 46%;
}
.rainbow-card.card-list-view .inner .thumbnail a {
  display: block;
  height: 100%;
}
.rainbow-card.card-list-view .inner .thumbnail a img {
  width: auto;
  object-fit: cover;
  height: 100%;
}
.rainbow-card.card-list-view .inner .content {
  flex-basis: 54%;
}
.rainbow-card.card-list-view .inner .content .title {
  margin-bottom: 10px;
}
.rainbow-card.card-list-view .inner .content .descriptiion {
  margin-bottom: 13px;
  margin-top: 12px;
}
.rainbow-card.content-transparent {
  position: relative;
  border: 0 none;
}
.rainbow-card.content-transparent .content {
  position: absolute;
  z-index: 2;
  bottom: 0;
  left: 0;
  z-index: 2;
  width: 100%;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0.6) 50%, rgba(0, 0, 0, 0.9) 100%);
  padding-top: 60px;
}
@media only screen and (max-width: 767px) {
  .rainbow-card.content-transparent .content {
    padding-top: 20px;
  }
}
.rainbow-card.content-transparent .content .title {
  margin-bottom: 10px;
}
@media only screen and (max-width: 767px) {
  .rainbow-card.content-transparent .content .title {
    font-size: 17px;
  }
}
.rainbow-card.content-transparent .content .title a {
  color: var(--color-white);
}
.rainbow-card.content-transparent .content .title:hover a {
  color: var(--color-primary);
}
.rainbow-card.content-transparent .content .rainbow-meta-list li {
  color: #acaeb1;
}
.rainbow-card.content-transparent .content .rainbow-meta-list li a {
  color: #acaeb1;
}
.rainbow-card.content-transparent.post-large .content .title {
  font-size: 32px;
}
@media only screen and (max-width: 767px) {
  .rainbow-card.content-transparent.post-large .content .title {
    font-size: 19px;
  }
}
.rainbow-card:hover .inner .thumbnail a img {
  transform: scale(1.1);
}

.rainbow-meta-list {
  font-size: 1.4rem;
  line-height: 2.2rem;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}
.rainbow-meta-list li {
  margin-top: 0;
  margin-bottom: 0;
  color: var(--color-gray);
  font-size: 14px;
}
.rainbow-meta-list li a {
  color: var(--color-gray);
  transition: 0.5s;
}
.rainbow-meta-list li.separator {
  margin: 0 0.8rem;
}

.blog-search {
  position: relative;
}
.blog-search input {
  height: 60px;
  padding: 0 20px;
  color: var(--color-body);
  padding-right: 80px;
}
.blog-search .search-button {
  position: absolute;
  right: 6px;
  top: 50%;
  transform: translateY(-50%);
  border: 0 none;
  background: var(--color-primary);
  height: 47px;
  padding: 0 20px;
  border-radius: 3px;
  text-align: center;
  font-size: 20px;
}
.blog-search .search-button i {
  color: var(--color-white);
  font-weight: 400;
}

.rbt-single-widget {
  border-radius: 4px;
  padding: 20px 20px;
  border: 1px solid var(--color-border);
  padding-top: 0;
}
.rbt-single-widget:first-child {
  margin-top: 0 !important;
}
.rbt-single-widget input,
.rbt-single-widget select {
  border: var(--border-width) solid var(--color-border);
}
.rbt-single-widget.widget_search {
  padding: 0;
  border: 0 none;
}
.rbt-single-widget.widget_search .title {
  margin: 0;
}
.rbt-single-widget p {
  font-size: 16px;
  line-height: 28px;
  color: #717173;
}
.rbt-single-widget .title {
  line-height: 26px;
  position: relative;
  padding-bottom: 6px;
  font-size: 18px;
  font-weight: 500;
  color: var(--color-white);
  background-color: var(--color-blackest);
  margin: -1px -22px 0;
  padding: 14px 24px;
  border-radius: 4px;
}
.rbt-single-widget .title a {
  color: var(--color-primary);
}
.rbt-single-widget .title a.rsswidget img {
  height: 13px;
  margin-right: 3px;
}
.rbt-single-widget .title img {
  vertical-align: 0px;
}
.rbt-single-widget ul {
  padding-left: 0;
  margin-bottom: -10px;
  list-style: none;
  padding-right: 0;
}
.rbt-single-widget ul ul {
  margin-bottom: 0;
}
.rbt-single-widget ul li {
  margin-top: 10px;
  margin-bottom: 10px;
  font-size: 16px;
  line-height: 28px;
  color: #717173;
}
.rbt-single-widget ul li a {
  transition: all 0.3s ease 0s;
  text-decoration: none;
  color: var(--color-heading);
  display: initial;
}
.rbt-single-widget ul li a:hover {
  color: var(--color-primary);
}
.rbt-single-widget.widget_categories ul li a {
  display: flex;
  justify-content: space-between;
}
.rbt-single-widget.widget_recent_comments ul li, .rbt-single-widget.widget_recent_entries ul li, .rbt-single-widget.widget_archive ul li, .rbt-single-widget.widget_categories ul li, .rbt-single-widget.widget_meta ul li, .rbt-single-widget.widget_pages ul li, .rbt-single-widget.widget_nav_menu ul li {
  position: relative;
  padding-top: 15px;
  padding-bottom: 15px;
  margin-top: 0;
  margin-bottom: 0;
  color: var(--color-body);
}
.rbt-single-widget.widget_recent_comments ul li a, .rbt-single-widget.widget_recent_entries ul li a, .rbt-single-widget.widget_archive ul li a, .rbt-single-widget.widget_categories ul li a, .rbt-single-widget.widget_meta ul li a, .rbt-single-widget.widget_pages ul li a, .rbt-single-widget.widget_nav_menu ul li a {
  color: var(--color-body);
}
.rbt-single-widget.widget_recent_comments ul li a:hover, .rbt-single-widget.widget_recent_entries ul li a:hover, .rbt-single-widget.widget_archive ul li a:hover, .rbt-single-widget.widget_categories ul li a:hover, .rbt-single-widget.widget_meta ul li a:hover, .rbt-single-widget.widget_pages ul li a:hover, .rbt-single-widget.widget_nav_menu ul li a:hover {
  color: var(--color-primary);
}
.rbt-single-widget.widget_recent_comments ul li span, .rbt-single-widget.widget_recent_entries ul li span, .rbt-single-widget.widget_archive ul li span, .rbt-single-widget.widget_categories ul li span, .rbt-single-widget.widget_meta ul li span, .rbt-single-widget.widget_pages ul li span, .rbt-single-widget.widget_nav_menu ul li span {
  color: var(--color-body);
}
.rbt-single-widget.widget_recent_comments ul li:hover a span, .rbt-single-widget.widget_recent_entries ul li:hover a span, .rbt-single-widget.widget_archive ul li:hover a span, .rbt-single-widget.widget_categories ul li:hover a span, .rbt-single-widget.widget_meta ul li:hover a span, .rbt-single-widget.widget_pages ul li:hover a span, .rbt-single-widget.widget_nav_menu ul li:hover a span {
  color: var(--color-primary);
}
.rbt-single-widget.widget_recent_comments ul li + li, .rbt-single-widget.widget_recent_entries ul li + li, .rbt-single-widget.widget_archive ul li + li, .rbt-single-widget.widget_categories ul li + li, .rbt-single-widget.widget_meta ul li + li, .rbt-single-widget.widget_pages ul li + li, .rbt-single-widget.widget_nav_menu ul li + li {
  border-top: 1px solid var(--color-border);
}
.rbt-single-widget.widget_recent_comments > ul > li, .rbt-single-widget.widget_recent_entries > ul > li, .rbt-single-widget.widget_archive > ul > li, .rbt-single-widget.widget_categories > ul > li, .rbt-single-widget.widget_meta > ul > li, .rbt-single-widget.widget_pages > ul > li {
  margin-top: 0;
  margin-bottom: 0;
}
.rbt-single-widget.widget_recent_comments > ul > li:first-child, .rbt-single-widget.widget_recent_entries > ul > li:first-child, .rbt-single-widget.widget_archive > ul > li:first-child, .rbt-single-widget.widget_categories > ul > li:first-child, .rbt-single-widget.widget_meta > ul > li:first-child, .rbt-single-widget.widget_pages > ul > li:first-child {
  margin-top: 0;
}
.rbt-single-widget.widget_recent_comments > ul > li:last-child, .rbt-single-widget.widget_recent_entries > ul > li:last-child, .rbt-single-widget.widget_archive > ul > li:last-child, .rbt-single-widget.widget_categories > ul > li:last-child, .rbt-single-widget.widget_meta > ul > li:last-child, .rbt-single-widget.widget_pages > ul > li:last-child {
  margin-bottom: 10px;
}
.rbt-single-widget.widget_recent_entries .inner a {
  color: var(--color-white);
  margin-bottom: 4px;
}
.rbt-single-widget.widget_recent_entries .inner span {
  color: var(--color-body);
  font-size: 14px;
  letter-spacing: 0.5px;
}

.alignwide {
  margin-left: -220px;
  margin-right: -220px;
  max-width: 1400px;
  width: auto;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}
@media only screen and (max-width: 767px) {
  .alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}

.alignfull {
  margin-left: calc(50% - 50vw);
  margin-right: calc(50% - 50vw);
  max-width: 100vw;
  width: 100vw;
}

.tagcloud,
.wp-block-tag-cloud {
  margin: -3px;
  padding-left: 0;
}
.tagcloud a,
.wp-block-tag-cloud a {
  background: transparent;
  display: inline-block;
  height: 40px;
  color: var(--color-body);
  font-size: 16px !important;
  line-height: 35px;
  text-decoration: none;
  margin: 3px;
  border: 2px solid var(--color-border);
  padding: 0 20px;
  border-radius: 3px;
}
.tagcloud a:hover,
.wp-block-tag-cloud a:hover {
  background: var(--color-primary);
  color: #ffffff;
  border-color: var(--color-primary);
}

/*------------------------------
    Blog Details 
----------------------------------*/
.post-page-banner .rainbow-meta-list {
  justify-content: center;
}
.post-page-banner .rainbow-meta-list li {
  color: var(--color-body);
  font-size: 20px;
  margin: 0 15px;
  margin-top: 38px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .post-page-banner .rainbow-meta-list li {
    font-size: 16px;
    margin-top: 8px;
  }
}
@media only screen and (max-width: 767px) {
  .post-page-banner .rainbow-meta-list li {
    font-size: 16px;
    margin-top: 8px;
  }
}
.post-page-banner .rainbow-meta-list li svg {
  margin-right: 10px;
}
.post-page-banner .rainbow-meta-list li a {
  color: var(--color-body);
  transition: 0.3s;
}
.post-page-banner .rainbow-meta-list li a:hover {
  color: var(--color-primary);
}
.post-page-banner .category-list {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  justify-content: center;
  margin: -10px;
  padding: 0;
  margin-top: 14px;
}
.post-page-banner .category-list li {
  margin: 10px;
  position: relative;
}
.post-page-banner .category-list li::after {
  position: absolute;
  content: ",";
  right: -9px;
}
.post-page-banner .category-list li:last-child::after {
  display: none;
}

.blog-details-content .category-meta {
  display: flex;
  padding: 42px 0;
  border-top: 1px solid var(--color-border);
  border-bottom: 1px solid var(--color-border);
  flex-wrap: wrap;
}
.blog-details-content .category-meta span.text {
  color: var(--color-white);
  font-size: 22px;
  display: inline-block;
  margin: 10px 0;
  margin-top: 0;
}

/**************************************
    Footer Styles
***************************************/
/*-----------------------
    Footer Style Here  
------------------------*/
.logo a img {
  max-height: 35px;
}

.footer-style-1 {
  background-color: var(--color-darkest);
  border-top: 1px solid var(--color-border);
  background-image: -webkit-gradient(linear, left bottom, left top, from(var(--color-black)), to(var(--color-blacker)));
  background-image: linear-gradient(0deg, var(--color-black), var(--color-blacker));
}
.footer-style-1 .footer-top {
  padding: 120px 0;
}
.footer-style-1 .footer-top .rainbow-footer-widget .text-big {
  font-size: 21px;
  margin-top: 30px;
  padding-right: 13%;
  line-height: 37px;
  font-weight: 500;
}
.footer-style-1 .footer-top .rainbow-footer-widget .title {
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  margin-bottom: 10px;
}
.footer-style-1 .footer-top .rainbow-footer-widget .subtitle {
  font-weight: 400;
  color: var(--color-body);
  font-size: 16px;
  padding-right: 31%;
  line-height: 28px;
  margin-bottom: 32px;
}
.footer-style-1 .footer-top .rainbow-footer-widget .inner {
  margin-top: 13px;
}
.footer-style-1 .footer-top .rainbow-footer-widget .footer-link {
  list-style: none;
  padding: 0;
}
.footer-style-1 .footer-top .rainbow-footer-widget .footer-link li {
  margin-top: 5px;
  margin-bottom: 5px;
}
.footer-style-1 .footer-top .rainbow-footer-widget .footer-link li a {
  font-size: 14px;
  display: block;
  color: var(--color-body);
  line-height: 25px;
}

.newsletter-form input {
  flex-grow: 1;
  width: auto;
  margin-right: 10px;
  height: 50px;
  font-size: 14px;
  font-weight: 400;
  letter-spacing: 0.5px;
}

.footer-style-default {
  border-top: 1px solid var(--color-border);
  background-color: var(--color-darkest);
  background-image: -webkit-gradient(linear, left bottom, left top, from(var(--color-black)), to(var(--color-blacker)));
  background-image: linear-gradient(0deg, var(--color-black), var(--color-blacker));
}
.footer-style-default .footer-top {
  padding: 100px 0;
  padding-bottom: 70px;
}
.footer-style-default .footer-top .rainbow-footer-widget .text-big {
  font-size: 21px;
  margin-top: 30px;
  padding-right: 13%;
  line-height: 1.7;
  font-weight: 500;
  color: var(--color-body);
  margin-bottom: 30px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .footer-style-default .footer-top .rainbow-footer-widget .text-big {
    font-size: 20px;
    padding-right: 0;
  }
}
@media only screen and (max-width: 767px) {
  .footer-style-default .footer-top .rainbow-footer-widget .text-big {
    font-size: 20px;
    padding-right: 0;
  }
}
.footer-style-default .footer-top .rainbow-footer-widget .title {
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  margin-bottom: 10px;
}
.footer-style-default .footer-top .rainbow-footer-widget .subtitle {
  font-weight: 400;
  color: var(--color-body);
  font-size: 16px;
  padding-right: 31%;
  line-height: 28px;
  margin-bottom: 32px;
}
@media only screen and (max-width: 767px) {
  .footer-style-default .footer-top .rainbow-footer-widget .subtitle {
    padding-right: 0;
  }
}
.footer-style-default .footer-top .rainbow-footer-widget .inner {
  margin-top: 13px;
}
.footer-style-default .footer-top .rainbow-footer-widget .footer-link {
  list-style: none;
  padding: 0;
}
.footer-style-default .footer-top .rainbow-footer-widget .footer-link li {
  margin-top: 5px;
  margin-bottom: 5px;
}
.footer-style-default .footer-top .rainbow-footer-widget .footer-link li a {
  font-size: 14px;
  display: inline-block;
  color: var(--color-body);
  line-height: 25px;
  transition: 0.3s;
  text-transform: capitalize;
}
.footer-style-default .footer-top .rainbow-footer-widget .footer-link li a:hover {
  color: var(--color-primary);
}
.footer-style-default .footer-top .rainbow-footer-widget .footer-link li a:hover::after {
  width: 100%;
  left: 0;
  right: auto;
}
.footer-style-default.variation-two {
  border-top: 0;
}
.footer-style-default.no-border {
  border-top: 0;
}

.footer-style-3 {
  background: none !important;
  border: none !important;
  margin-top: 96px;
  z-index: 5;
}
.footer-style-3 .footer-top {
  background: var(--color-dark);
  padding-top: 50px;
}
@media only screen and (max-width: 479px) {
  .footer-style-3 .separator-animated {
    margin: 20px !important;
  }
}
@media only screen and (max-width: 479px) {
  .footer-style-3 .newsletter-form input {
    margin-right: 0;
  }
}
.footer-style-3 .newsletter-form button {
  padding: 0 20px;
}

/*--------------------------
    Copyright Area  
---------------------------*/
.copyright-style-one {
  background: var(--color-darkest);
  padding: 20px 0;
  border-top: 1px solid var(--color-border);
}
.copyright-style-one .copyright-text {
  margin-bottom: 0;
  font-size: 14px;
}
.copyright-style-one .ft-menu {
  padding: 0;
  margin: 0 -10px;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}
@media only screen and (max-width: 767px) {
  .copyright-style-one .ft-menu {
    justify-content: center;
  }
}
.copyright-style-one .ft-menu li {
  margin: 0;
  padding: 0 10px;
  position: relative;
}
.copyright-style-one .ft-menu li + li::after {
  position: absolute;
  content: "";
  height: 14px;
  width: 1px;
  background: var(--color-border);
  left: -1px;
  top: 50%;
  transform: translateY(-50%);
}
.copyright-style-one .ft-menu li a {
  font-size: 14px;
}
.copyright-style-one.variation-two {
  background: var(--color-blackest);
}
.copyright-style-one.no-border {
  border-top: 0;
}

/**************************************
            Template
***************************************/
/*------------------------
    Banner Styles  
-------------------------*/
.slider-dot.rainbow-slick-dot .slick-dots {
  bottom: 60px;
}

.height-850 {
  height: 850px;
  display: flex;
  align-items: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .height-850 {
    height: auto;
    padding: 150px 0;
  }
}
@media only screen and (max-width: 767px) {
  .height-850 {
    height: auto;
    padding: 100px 0;
  }
}

.height-650 {
  height: 650px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
}

.height-750 {
  height: 750px;
  display: flex;
  align-items: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .height-750 {
    height: auto;
    padding: 150px 0;
  }
}
@media only screen and (max-width: 767px) {
  .height-750 {
    height: auto;
    padding: 100px 0;
  }
}

.height-950 {
  height: 950px;
  display: flex;
  align-items: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .height-950 {
    height: auto;
    padding: 150px 0;
  }
}
@media only screen and (max-width: 767px) {
  .height-950 {
    height: auto;
    padding: 150px 0;
  }
}

.display-one {
  font-size: 75px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .display-one {
    font-size: 70px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .display-one {
    font-size: 55px;
  }
}
@media only screen and (max-width: 767px) {
  .display-one {
    font-size: 40px;
  }
}
@media only screen and (max-width: 575px) {
  .display-one {
    font-size: 30px;
    margin-bottom: 15px !important;
  }
}
@media only screen and (max-width: 575px) {
  .display-one br {
    display: none;
  }
}

.display-two {
  font-size: 85px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .display-two {
    font-size: 70px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .display-two {
    font-size: 65px;
  }
}
@media only screen and (max-width: 767px) {
  .display-two {
    font-size: 65px;
  }
}
@media only screen and (max-width: 575px) {
  .display-two {
    font-size: 46px;
  }
}

@media only screen and (max-width: 767px) {
  .collaborate {
    padding-bottom: 30px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .collaborate .display-two {
    font-size: 40px;
  }
}
@media only screen and (max-width: 767px) {
  .collaborate .display-two {
    font-size: 40px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .collaborate .description {
    font-size: 14px;
  }
}
@media only screen and (max-width: 767px) {
  .collaborate .description {
    font-size: 14px;
  }
}

.bg-overlay {
  position: relative;
}
.bg-overlay::before {
  position: absolute;
  height: 100%;
  width: 100%;
  opacity: 1;
  top: 0;
  left: 0;
  background-color: transparent;
  background-image: linear-gradient(90deg, #060606 0%, rgba(6, 6, 6, 0) 90%);
  content: "";
}

.bg-overlay-solid {
  position: relative;
  z-index: 1;
}
.bg-overlay-solid::before {
  position: absolute;
  height: 100%;
  width: 40%;
  opacity: 1;
  top: 0;
  left: 0;
  content: "";
  background: var(--color-dark);
  z-index: -1;
}
.bg-overlay-solid::after {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 1000px;
  opacity: 0.5;
  filter: blur(100px);
  left: auto;
  top: -250px;
  left: -250px;
  bottom: auto;
  background-image: linear-gradient(45deg, var(--color-secondary), var(--color-tertiary));
  content: "";
  z-index: -1;
}

.slider-brand-section {
  text-align: center;
}
.slider-brand-section .lead-text {
  text-align: center;
  color: var(--color-body);
}

.frame-image {
  padding: 20px;
  position: relative;
  right: 0;
  border-radius: 10px;
  transition: var(--transition);
  height: 100%;
  background-color: var(--color-blackest);
}
@media only screen and (max-width: 575px) {
  .frame-image {
    padding: 10PX;
  }
}
.frame-image.frame-bg-gradient {
  padding: 10px;
  background: linear-gradient(to right, var(--color-primary-gradient-start), var(--color-primary-gradient-end));
}
.frame-image.frame-bg-gradient.gradient-secondary {
  background: linear-gradient(to right, var(--color-secondary-gradient-start), var(--color-secondary-gradient-end));
}
.frame-image.frame-bg-gradient.gradient-tertiary {
  background: linear-gradient(to right, var(--color-tertiary-gradient-start), var(--color-tertiary-gradient-end));
}
.frame-image img {
  width: 100%;
}
.frame-image:hover {
  transform: translateY(-5px);
}
.frame-image.frame-image-bottom {
  padding-bottom: 0;
  border-radius: 10px 10px 0 0;
  overflow: hidden;
}
.frame-image.frame-image-author {
  height: auto;
}
.frame-image.frame-image-author:hover {
  transform: none;
}
.frame-image.frame-image-author .author {
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.frame-image.frame-image-author .author .author-img {
  width: 72px;
  height: 72px;
  border-radius: 50%;
  overflow: hidden;
}
.frame-image.frame-image-author .author .author-badge {
  margin-top: 10px;
  padding: 5px 10px;
  border-radius: var(--radius-small);
  background: var(--color-border);
  font-size: 14px;
}
.frame-image.frame-image-author .author.topleft {
  top: 0;
  right: 100%;
  margin-right: 120px;
}
.frame-image.frame-image-author .author.topright {
  top: 0;
  left: 100%;
  margin-left: 120px;
}
.frame-image.frame-image-author .author.bottomleft {
  bottom: 0;
  right: 100%;
  margin-right: 80px;
}
.frame-image.frame-image-author .author.bottomright {
  bottom: 0;
  left: 100%;
  margin-left: 80px;
}

.slider-area .inner a.btn-default.btn-border,
.slider-area .inner button.btn-default.btn-border {
  border-color: var(--color-border);
  color: var(--color-white);
}

/*-----------------------
    Slider Style One  
-------------------------*/
.slider-style-1 .inner .subtitle {
  font-family: var(--font-primary);
  font-size: 18px;
  letter-spacing: 0.5px;
  display: block;
  margin-bottom: 18px;
  color: var(--color-body);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-1 .inner .subtitle {
    font-size: 16px;
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1 .inner .subtitle {
    font-size: 16px;
    margin-bottom: 10px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-1 .inner .subtitle {
    font-size: 14px;
  }
}
.slider-style-1 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: inline-block;
}
.slider-style-1 .inner .title span {
  display: inline-block;
}
.slider-style-1 .inner .title span label {
  margin-bottom: 0;
}
.slider-style-1 .inner .description {
  font-family: var(--font-primary);
  padding: 0 22%;
  font-size: 25px;
  line-height: 1.7;
  margin-bottom: 40px;
  color: var(--color-body);
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-1 .inner .description {
    padding: 0 14%;
    font-size: 22px;
    margin-bottom: 35px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-1 .inner .description {
    padding: 0 1%;
    font-size: 20px;
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1 .inner .description {
    padding: 0 1%;
    font-size: 20px;
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-1 .inner .description {
    font-size: 18px;
    margin-bottom: 25px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1 .inner .desc-text {
    font-size: var(--font-size-b2);
  }
}
.slider-style-1 .inner.text-left .description {
  padding: 0;
}
.slider-style-1 .inner .list-icon li {
  color: var(--color-body);
}
.slider-style-1 .inner .list-icon li .icon {
  background-color: var(--color-blackest) !important;
}
.slider-style-1 .inner .header-caption span {
  color: var(--color-white);
  font-size: 85px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-1 .inner .header-caption span {
    font-size: 70px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-1 .inner .header-caption span {
    font-size: 65px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1 .inner .header-caption span {
    font-size: 65px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-1 .inner .header-caption span {
    font-size: 46px;
  }
}
.slider-style-1.variation-default .inner {
  padding: 20px;
}
@media only screen and (max-width: 767px) {
  .slider-style-1.variation-default .inner {
    padding: 0px;
  }
}
@media only screen and (max-width: 479px) {
  .slider-style-1.variation-default .inner p.color-gray {
    color: var(--color-heading) !important;
    margin-bottom: 30px;
  }
}
.slider-style-1.variation-2 {
  position: relative;
}
.slider-style-1.variation-2 .thumbnail img {
  transform: scale(1.1);
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .slider-style-1.variation-3 .inner .display-two {
    font-size: 75px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-1.variation-3 .inner .display-two {
    font-size: 58px;
    margin-bottom: 30px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1.variation-3 .inner .display-two {
    font-size: 50px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-1.variation-3 .inner .display-two {
    font-size: 36px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .slider-style-1.variation-3 .inner .description {
    padding: 0px 10%;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-1.variation-3 .inner .description {
    font-size: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1.variation-3 .inner .description {
    font-size: 16px;
  }
}
.slider-style-1.variation-4 .inner {
  margin-top: 140px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-1.variation-4 .inner {
    margin-top: 80px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-1.variation-4 .inner {
    margin-top: 60px;
  }
}

.slider-style-2 {
  padding-top: 130px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-2 {
    padding-top: 150px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-2 {
    padding-top: 150px;
  }
}
.slider-style-2 .inner .subtitle {
  font-weight: 700;
  letter-spacing: 0.5px;
  line-height: 18px;
  font-size: 14px;
  border-radius: 4px;
  margin-bottom: 12px;
  display: inline-block;
  padding: 7px 14px;
  background-color: var(--color-blackest);
  box-shadow: var(--shadow-lighter);
}
.slider-style-2 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: block;
  color: var(--color-white);
}
@media only screen and (max-width: 767px) {
  .slider-style-2 .inner .title.display-one {
    font-size: 40px;
    margin-bottom: 15px !important;
  }
}
.slider-style-2 .inner .list-icon li {
  color: var(--color-body);
}
.slider-style-2.variation-2 {
  padding-top: 79px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-2.variation-2 {
    padding-top: 170px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-2.variation-2 {
    padding-top: 170px;
  }
}
.slider-style-2.variation-2 .inner .title {
  font-weight: 500;
  font-size: 75px;
  margin-top: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-2.variation-2 .inner .title {
    font-size: 54px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-2.variation-2 .inner .title {
    font-size: 54px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-2.variation-2 .inner .title {
    font-size: 40px;
  }
}
.slider-style-2.variation-2 .inner .tag-title {
  color: var(--color-secondary);
  margin: 0;
  letter-spacing: 1.5px;
  padding-left: 129px;
  position: relative;
  margin-top: 50px;
}
.slider-style-2.variation-2 .inner .tag-title::before {
  position: absolute;
  content: "";
  left: 0;
  width: 100px;
  height: 2px;
  background: var(--color-secondary);
  top: 50%;
  transform: translateY(-50%);
}
.slider-style-2.variation-3 {
  padding-top: 80px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-2.variation-3 {
    padding-top: 180px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-2.variation-3 {
    padding-top: 180px;
  }
}
.slider-style-2.variation-3 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: block;
  font-size: 80px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-2.variation-3 .inner .title {
    font-size: 60px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-2.variation-3 .inner .title {
    font-size: 50px;
  }
  .slider-style-2.variation-3 .inner .title br {
    display: none;
  }
}
.slider-style-2.variation-3 .inner .description {
  font-size: 20px;
  line-height: 37px;
  margin-bottom: 0;
  color: var(--color-body);
}
@media only screen and (max-width: 767px) {
  .slider-style-2.variation-3 .inner .description {
    font-size: 18px;
    line-height: 30px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-3 {
    padding: 100px 0;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-3 {
    padding: 100px 0;
  }
}
.slider-style-3 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: block;
  font-size: 130px;
  line-height: 1.1;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-3 .inner .title {
    font-size: 100px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-3 .inner .title {
    font-size: 80px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-3 .inner .title {
    margin-bottom: 20px;
    font-size: 50px;
  }
}
.slider-style-3 .inner .description {
  font-size: 22px;
  line-height: 43px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-3 .inner .description {
    font-size: 20px;
    line-height: 38px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-3 .inner .description {
    font-size: 18px;
    line-height: 30px;
  }
}
.slider-style-3 .thumbnail {
  position: relative;
  z-index: 2;
}
.slider-style-3 .thumbnail::after {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: calc(100% - 130px);
  content: "";
  left: 50%;
  bottom: 0;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
  background: var(--color-blackest);
  box-shadow: var(--shadow-1);
  border-radius: 6px;
}

.slider-style-4 .inner {
  padding-top: 80px;
}
@media only screen and (max-width: 767px) {
  .slider-style-4 .inner {
    padding-top: 50px;
  }
}
.slider-style-4 .inner > * {
  animation-name: fadeOutUp;
  animation-fill-mode: both;
  animation-duration: 1s;
}
.slider-style-4 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: block;
  font-size: 130px;
  line-height: 1.1;
  transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  color: var(--color-white);
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-4 .inner .title {
    font-size: 100px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-4 .inner .title {
    font-size: 100px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-4 .inner .title {
    font-size: 60px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-4 .inner .title {
    font-size: 55px;
  }
}
.slider-style-4 .inner .description {
  font-size: 22px;
  line-height: 43px;
  transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  color: var(--color-body);
}
@media only screen and (max-width: 767px) {
  .slider-style-4 .inner .description {
    font-size: 20px;
    line-height: 35px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-4 .inner .description br {
    display: none;
  }
}
.slider-style-4 .inner .button-group {
  transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}
.slider-style-4.variation-2 .inner .title {
  font-size: 70px;
}
@media only screen and (max-width: 767px) {
  .slider-style-4.variation-2 .inner .title {
    font-size: 42px;
  }
}
.slider-style-4.variation-2 .bg-overlay::before {
  background: #000000;
  content: "";
  opacity: 0.5;
  background-image: none;
}
.slider-style-4.variation-3 .inner .title {
  font-size: 70px;
}
.slider-style-4.variation-3 .bg-overlay::before {
  background: #000000;
  content: "";
  opacity: 0.5;
  background-image: none;
}

.slider-style-5 .inner .subtitle {
  font-weight: 400;
  font-size: 16px;
  letter-spacing: 0.5px;
  position: relative;
  padding-right: 20px;
  display: inline-block;
  color: var(--color-white);
}
.slider-style-5 .inner .subtitle::after {
  position: absolute;
  content: "";
  width: 120px;
  height: 2px;
  background: var(--color-primary);
  left: 100%;
  top: 50%;
  transform: translateY(-50%);
}
.slider-style-5 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: block;
  font-size: 64px;
  line-height: 1.4;
  color: var(--color-white);
}
@media only screen and (max-width: 767px) {
  .slider-style-5 .inner .title {
    font-size: 40px;
  }
}
@media only screen and (max-width: 575px) {
  .slider-style-5 .inner .title {
    font-size: 32px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-5 .inner .title br {
    display: none;
  }
}

.slider-style-6 {
  background-color: var(--color-blackest);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-6 {
    overflow: hidden;
    padding: 100px 0;
    padding-top: 170px;
  }
}
.slider-style-6.shape-right {
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.slider-style-6.shape-right .shape-image {
  position: absolute;
  right: 0;
  top: 0;
  opacity: 0.5;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-6.shape-right .shape-image {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-6.shape-right .shape-image {
    display: none;
  }
}
.slider-style-6.shape-left {
  position: relative;
}
.slider-style-6.shape-left .inner {
  position: relative;
  z-index: 2;
}
.slider-style-6.shape-left .shape-image {
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0.5;
  transform: rotate(180deg);
  height: 100%;
  bottom: 0;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-6.shape-left .shape-image {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-6.shape-left .shape-image {
    display: none;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-6.inheader-not-transparent {
    padding-top: 100px;
  }
}
.slider-style-6 .inner .title {
  font-family: var(--font-primary);
  margin-bottom: 25px;
  display: block;
  font-size: 80px;
  line-height: 1.1;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-6 .inner .title {
    font-size: 62px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-6 .inner .title {
    font-size: 60px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-6 .inner .title {
    font-size: 45px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-6 .inner .title br {
    display: none;
  }
}
.slider-style-6 .inner .description {
  font-size: 22px;
  line-height: 43px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-6 .inner .description {
    font-size: 20px;
    line-height: 38px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-6 .inner .description {
    font-size: 18px;
    line-height: 30px;
  }
}
.slider-style-6 .inner a.btn-default.btn-border {
  border-color: var(--color-border);
  color: var(--color-white);
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-perosonal-portfolio.height-750 {
    padding-top: 180px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-perosonal-portfolio.height-750 {
    padding-top: 180px;
  }
}
.slider-perosonal-portfolio .inner {
  margin-top: -100px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-perosonal-portfolio .inner {
    margin-top: 0;
  }
}
@media only screen and (max-width: 767px) {
  .slider-perosonal-portfolio .inner {
    margin-top: 0;
  }
}
.slider-perosonal-portfolio .inner .title {
  font-size: 100px;
  color: var(--color-white);
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-perosonal-portfolio .inner .title {
    font-size: 58px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-perosonal-portfolio .inner .title {
    font-size: 46px;
  }
}
.slider-perosonal-portfolio .inner a.btn-default.btn-border,
.slider-perosonal-portfolio .inner button.btn-default.btn-border {
  border-color: var(--color-border);
  color: var(--color-white);
}

.slider-style-7 .inner .title {
  font-size: 100px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-style-7 .inner .title {
    font-size: 60px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-7 .inner .title {
    font-size: 50px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-7 .inner .title {
    font-size: 32px;
  }
  .slider-style-7 .inner .title br {
    display: none;
  }
}

.slider-style-8 {
  justify-content: center;
}
.slider-style-8 .inner .title {
  font-size: 100px;
  line-height: 1.1;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-8 .inner .title {
    font-size: 60px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-8 .inner .title {
    font-size: 46px;
  }
}
.slider-style-8 .inner .description {
  font-size: 22px;
  line-height: 43px;
}
@media only screen and (max-width: 767px) {
  .slider-style-8 .inner .description {
    font-size: 20px;
    line-height: 38px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-style-8 .inner .description br {
    display: none;
  }
}
@media only screen and (max-width: 767px) {
  .slider-style-8 .inner .description br {
    display: none;
  }
}

.slider-style-4 .slick-active .inner > * {
  animation-name: fadeInUp;
}
.slider-style-4 .slick-active .inner .title {
  animation-delay: 0.5s;
}
.slider-style-4 .slick-active .inner .description {
  animation-delay: 1s;
}
.slider-style-4 .slick-active .inner .button-group {
  animation-delay: 1.2s;
}

.slider-bg-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
}
.slider-bg-image.bg-image-1 {
  background-image: url(../images/bg/bg-image-1.jpg);
}
.slider-bg-image.bg-image2 {
  background-image: url(../images/call-to-action/bg-image-1.jpg);
}
.slider-bg-image.bg-image3 {
  background-image: url(../images/slider-bg/bg-image-3.jpg);
}
.slider-bg-image.bg-image4 {
  background-image: url(../images/bg-video/bg-image-4.jpg);
}
.slider-bg-image.bg-image5 {
  background-image: url(../images/slider-bg/bg-image-4.jpg);
}
.slider-bg-image.bg-image5 {
  background-image: url(../images/slider-bg/bg-image-5.jpg);
}
.slider-bg-image.bg-image6 {
  background-image: url(../images/slider-bg/bg-image-6.jpg);
}
.slider-bg-image.bg-image10 {
  background-image: url(../images/bg/bg-image-10.jpg);
}
.slider-bg-image.bg-image11 {
  background-image: url(../images/bg/bg-image-11.jpg);
}
.slider-bg-image.bg-image13 {
  background-image: url(../images/slider-bg/bg-image-13.jpg);
}
.slider-bg-image.bg-image14 {
  background-image: url(../images/slider-bg/bg-image-14.jpg);
}
.slider-bg-image.bg-image15 {
  background-image: url(../images/slider-bg/bg-image-15.jpg);
}
.slider-bg-image.bg-image16 {
  background-image: url(../images/slider-bg/bg-image-16.jpg);
}
.slider-bg-image.bg-banner1 {
  background-image: url(../images/bg/main-banner-bg.png);
}
.slider-bg-image.bg-banner2 {
  background-image: url(../images/bg/main-banner-bg-2.png);
}

/* ----------------------
    Slider Video Bg 
------------------------*/
.slider-video-bg {
  position: relative;
  z-index: 2;
  padding-top: 230px;
  padding-bottom: 284px;
  overflow: hidden;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .slider-video-bg {
    padding-top: 100px;
    padding-bottom: 100px;
  }
}
@media only screen and (max-width: 767px) {
  .slider-video-bg {
    padding-top: 100px;
    padding-bottom: 100px;
  }
}
.slider-video-bg .video-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}
.slider-video-bg .inner {
  position: relative;
  z-index: 2;
}

.banner-search {
  position: relative;
  max-width: 50%;
  margin: 0 auto;
}
@media only screen and (max-width: 1199px) {
  .banner-search {
    max-width: 100%;
  }
}
.banner-search input {
  height: 60px;
  padding: 0 20px;
  color: var(--color-body);
  padding-right: 80px;
}
.banner-search input:focus {
  border-color: var(--color-secondary);
}
.banner-search .search-button {
  position: absolute;
  right: 6px;
  top: 50%;
  transform: translateY(-50%);
  border: 0 none;
  background: var(--color-secondary);
  height: 47px;
  padding: 0 20px;
  border-radius: 3px;
  text-align: center;
  font-size: 20px;
}
.banner-search .search-button.text-btn {
  color: var(--color-white);
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
}
.banner-search .search-button i {
  color: var(--color-white);
  font-weight: 400;
}

.slider-area .rainbow-box-card .inner .content, .slider-area .team-style-default .inner .content {
  padding-top: 0 !important;
}

.slider-area .img-crt-area {
  padding-top: 120px;
  padding-bottom: 50px;
}
@media only screen and (max-width: 767px) {
  .slider-area .img-crt-area {
    padding-top: 70px;
    padding-bottom: 30px;
  }
}

/*-----------------------------
    Portfolio details  
--------------------------------*/
.rainbow-portfolio-details .content-left .title {
  font-size: 38px;
  margin-bottom: 33px;
}
@media only screen and (max-width: 767px) {
  .rainbow-portfolio-details .content-left .title {
    font-size: 25px;
    margin-bottom: 20px;
  }
}
.rainbow-portfolio-details .content-left .single-list-wrapper {
  margin: -5px;
}
.rainbow-portfolio-details .content-left .single-list-wrapper .single-list {
  margin: 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
}
.rainbow-portfolio-details .content-left .single-list-wrapper .single-list + .single-list {
  border-top: 1px solid var(--color-border);
}
.rainbow-portfolio-details .content-left .single-list-wrapper .single-list label {
  font-size: 20px;
  color: #fff;
  display: inline-block;
  padding-right: 16px;
  margin: 0;
}
.rainbow-portfolio-details .content-left .single-list-wrapper .single-list span {
  font-size: 18px;
}
.rainbow-portfolio-details .content-right .subtitle {
  font-size: 25px;
  letter-spacing: 0.5px;
  font-weight: 500;
}
.rainbow-portfolio-details .content-right .description p {
  margin-bottom: 10px;
}

.rainbow-portfolio-details .alignwide {
  margin-left: -100px;
  margin-right: -100px;
  max-width: 1400px;
  width: auto;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rainbow-portfolio-details .alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rainbow-portfolio-details .alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}
@media only screen and (max-width: 767px) {
  .rainbow-portfolio-details .alignwide {
    margin-left: 0;
    margin-right: 0;
  }
}

/*--------------------------------
    Single Demo  
-------------------------------*/
.single-demo {
  text-align: center;
  background: var(--color-lessdark);
  border-radius: 10px;
  padding: 20px;
  transition: 0.3s;
  position: relative;
}
.single-demo a {
  display: block;
}
.single-demo .thumbnail {
  position: relative;
}
.single-demo .thumbnail img {
  border-radius: 10px;
  width: 100%;
}
.single-demo .thumbnail .image-light {
  display: none;
}
.single-demo .thumbnail .label-badge {
  position: absolute;
  right: 20px;
  border-radius: 5px;
  background-color: transparent;
  background: #fff700;
  padding: 0 12px;
  color: #000;
  font-size: 14px;
  height: 29px;
  line-height: 29px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-weight: 500;
  display: inline-block;
  width: 60px;
  bottom: 20px;
}
.single-demo .title {
  margin: 0;
  margin-top: 20px;
  font-size: 20px;
  letter-spacing: 0.5px;
  position: relative;
  display: inline-block;
}
.single-demo:hover {
  transform: translateY(-5px);
}

.react-image img {
  max-height: 150px;
}

/*-------------------------
    Darkmode Styles  
---------------------------*/
.rainbow-back-top i {
  transition: 0.3s;
}

.rainbow-back-top:hover i {
  color: var(--color-primary) !important;
}

body.active-light-mode {
  background-color: var(--color-white);
  color: #65676b;
}
body.active-light-mode h1,
body.active-light-mode h2,
body.active-light-mode h3,
body.active-light-mode h4,
body.active-light-mode h5,
body.active-light-mode h6,
body.active-light-mode .h1,
body.active-light-mode .h2,
body.active-light-mode .h3,
body.active-light-mode .h4,
body.active-light-mode .h5,
body.active-light-mode .h6,
body.active-light-mode .social-default li a,
body.active-light-mode .rbt-single-widget .title,
body.active-light-mode .rbt-single-widget.widget_recent_entries .inner a,
body.active-light-mode .tagcloud a,
body.active-light-mode .wp-block-tag-cloud a,
body.active-light-mode .rainbow-portfolio-details .content-left .single-list-wrapper .single-list label,
body.active-light-mode .blog-details-content .category-meta span.text,
body.active-light-mode .demo-slider-area.slider-style-1 .inner .title,
body.active-light-mode .rainbow-back-top svg,
body.active-light-mode .popup-mobile-menu .inner .header-top .close-menu .close-button,
body.active-light-mode .footer-style-default .footer-top .rainbow-footer-widget .title,
body.active-light-mode .rainbow-call-to-action.style-8 .title,
body.active-light-mode .rainbow-newsletter-default .newsletter-section-title .title,
body.active-light-mode .rainbow-default-tab .tab-button .tabs__tab .nav-link,
body.active-light-mode .rainbow-comment-form .section-title .title {
  color: #181818;
}
body.active-light-mode .slider-style-1.variation-3 .inner .title span,
body.active-light-mode .slider-style-1.variation-3 .inner .title {
  color: #181818 !important;
}
body.active-light-mode .rainbow-default-tab .tab-button .tabs__tab .nav-link.active,
body.active-light-mode .slider-style-3 .thumbnail::after {
  background: #f5f8fa;
}
body.active-light-mode .slider-style-8 .inner a.btn-default.btn-border,
body.active-light-mode .slider-style-8 .inner button.btn-default.btn-border {
  border-color: #d8d8d8;
  color: #65676b;
}
body.active-light-mode .rainbow-slick-arrow button.slick-arrow {
  border: 2px solid #d8d8d8;
  color: #65676b;
}
body.active-light-mode .rainbow-slick-arrow.testimonial-activation button.slick-arrow.prev-arrow::before,
body.active-light-mode .rainbow-slick-arrow.testimonial-activation button.slick-arrow.next-arrow::before {
  filter: brightness(0);
}
body.active-light-mode .rainbow-slick-arrow button.slick-arrow:hover {
  border-color: transparent !important;
}
body.active-light-mode .rainbow-slick-arrow.testimonial-activation button.slick-arrow.prev-arrow:hover::before,
body.active-light-mode .rainbow-slick-arrow.testimonial-activation button.slick-arrow.next-arrow:hover::before {
  filter: brightness(1);
}
body.active-light-mode .slider-style-8 .inner a.btn-default.btn-border:hover,
body.active-light-mode .slider-style-8 .inner button.btn-default.btn-border:hover {
  color: #fff;
  border-color: transparent;
}
body.active-light-mode .slider-style-1.banner-company .inner .list-icon li .icon {
  background-color: #f5f8fa !important;
}
body.active-light-mode .single-demo .thumbnail .image-light {
  display: block;
}
body.active-light-mode .single-demo .thumbnail .image-dark {
  display: none;
}
body.active-light-mode .mainmenu-nav .mainmenu li.has-droupdown .submenu li a.active {
  background: #d8d8d8;
}
body.active-light-mode .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a:hover,
body.active-light-mode .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a.active {
  background: #d8d8d8;
}
body.active-light-mode p,
body.active-light-mode input[type=text],
body.active-light-mode input[type=password],
body.active-light-mode input[type=email],
body.active-light-mode input[type=number],
body.active-light-mode input[type=tel],
body.active-light-mode textarea,
body.active-light-mode .breadcrumb-inner ul.page-list li a,
body.active-light-mode .rainbow-address .inner p a,
body.active-light-mode .error-inner .description,
body.active-light-mode .rbt-single-widget.widget_recent_comments ul li a,
body.active-light-mode .rbt-single-widget.widget_recent_entries ul li a,
body.active-light-mode .rbt-single-widget.widget_archive ul li a,
body.active-light-mode .rbt-single-widget.widget_categories ul li a,
body.active-light-mode .rbt-single-widget.widget_meta ul li a,
body.active-light-mode .rbt-single-widget.widget_pages ul li a,
body.active-light-mode .rbt-single-widget.widget_nav_menu ul li a,
body.active-light-mode .rbt-single-widget.widget_recent_entries .inner span,
body.active-light-mode .rbt-single-widget.widget_recent_comments ul li span,
body.active-light-mode .rbt-single-widget.widget_recent_entries ul li span,
body.active-light-mode .rbt-single-widget.widget_archive ul li span,
body.active-light-mode .rbt-single-widget.widget_categories ul li span,
body.active-light-mode .rbt-single-widget.widget_meta ul li span,
body.active-light-mode .rbt-single-widget.widget_pages ul li span,
body.active-light-mode .rbt-single-widget.widget_nav_menu ul li span,
body.active-light-mode .post-page-banner .rainbow-meta-list li a,
body.active-light-mode .post-page-banner .rainbow-meta-list li,
body.active-light-mode .breadcrumb-inner ul.page-list li.rainbow-breadcrumb-item.active,
body.active-light-mode .slider-style-1.bg-transparent .inner .subtitle,
body.active-light-mode .slider-style-1.bg-transparent .inner .description,
body.active-light-mode .popup-mobile-menu .mainmenu li a,
body.active-light-mode .footer-style-default .footer-top .rainbow-footer-widget .footer-link li a,
body.active-light-mode .footer-style-default .footer-top .rainbow-footer-widget .subtitle,
body.active-light-mode .rainbow-call-to-action.style-8 .content .subtitle,
body.active-light-mode .rainbow-newsletter-default .newsletter-section-title .description,
body.active-light-mode .slider-style-5 .inner .subtitle,
body.active-light-mode .slider-style-5 .inner .title,
body.active-light-mode .single-progress .title,
body.active-light-mode .radial-progress .circle-text span.count,
body.active-light-mode .radial-progress .circle-text span.count::after,
body.active-light-mode .radial-progress-single .circle-info .subtitle {
  color: #65676b;
}
body.active-light-mode .header-transparent.sticky .mainmenu-nav .mainmenu > li > a,
body.active-light-mode .clltoaction-style-default.style-7 .content .subtitle,
body.active-light-mode .copyright-style-one .ft-menu li a,
body.active-light-mode .footer-style-default .footer-top .rainbow-footer-widget .text-big {
  color: #65676b;
}
body.active-light-mode .form-group input,
body.active-light-mode .form-group textarea,
body.active-light-mode .rainbow-accordion-style.rainbow-accordion-02 .card .card-header,
body.active-light-mode .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item,
body.active-light-mode .breadcarumb-style-1,
body.active-light-mode .rainbow-accordion-style.rainbow-accordion-03 .card .card-header,
body.active-light-mode .rainbow-accordion-style.rainbow-accordion-04 .card,
body.active-light-mode .rainbow-pricing .pricing-table-inner,
body.active-light-mode input[type=text],
body.active-light-mode input[type=password],
body.active-light-mode input[type=email],
body.active-light-mode input[type=number],
body.active-light-mode input[type=tel],
body.active-light-mode textarea,
body.active-light-mode .rbt-single-widget,
body.active-light-mode .rbt-single-widget.widget_recent_comments ul li + li,
body.active-light-mode .rbt-single-widget.widget_recent_entries ul li + li,
body.active-light-mode .rbt-single-widget.widget_archive ul li + li,
body.active-light-mode .rbt-single-widget.widget_categories ul li + li,
body.active-light-mode .rbt-single-widget.widget_meta ul li + li,
body.active-light-mode .rbt-single-widget.widget_pages ul li + li,
body.active-light-mode .rbt-single-widget.widget_nav_menu ul li + li,
body.active-light-mode .tagcloud a,
body.active-light-mode .wp-block-tag-cloud a,
body.active-light-mode .section-title-2 .title,
body.active-light-mode .popup-mobile-menu .mainmenu li + li,
body.active-light-mode .clltoaction-style-default.style-7 .content-wrapper,
body.active-light-mode .copyright-style-one,
body.active-light-mode .footer-style-default .newsletter-form .form-group input,
body.active-light-mode .newsletter-area .border-top-bottom,
body.active-light-mode .rainbow-comment-form .inner .rnform-group textarea,
body.active-light-mode .rainbow-portfolio-details .content-left .single-list-wrapper .single-list + .single-list {
  border-color: rgba(0, 0, 0, 0.1411764706);
}
body.active-light-mode .service.service__style--1.with-working-process .line {
  background-color: rgba(0, 0, 0, 0.1411764706);
  width: 83%;
}
body.active-light-mode .mainmenu-nav .mainmenu li.has-droupdown .submenu li a:hover {
  background: #d8d8d8;
}
body.active-light-mode .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a:hover {
  background: #d8d8d8;
  color: var(--color-primary);
}
body.active-light-mode .btn-read-more span::after {
  background: rgba(0, 0, 0, 0.1411764706);
}
body.active-light-mode .breadcrumb-inner ul.page-list li a:hover,
body.active-light-mode .rainbow-address .inner p a:hover,
body.active-light-mode .post-page-banner .rainbow-meta-list li a:hover,
body.active-light-mode .header-top-bar .header-left p a:hover {
  color: var(--color-primary);
}
body.active-light-mode .social-default li a:hover,
body.active-light-mode .tagcloud a:hover,
body.active-light-mode .wp-block-tag-cloud a:hover,
body.active-light-mode .header-top-news .btn-read-more span {
  color: var(--color-white);
}
body.active-light-mode .tagcloud a:hover,
body.active-light-mode .wp-block-tag-cloud a:hover {
  border-color: var(--color-primary);
}
body.active-light-mode a.btn-default.text-underline,
body.active-light-mode button.btn-default.text-underline {
  border-color: #181818;
  color: #181818;
}
body.active-light-mode .single-demo .thumbnail .image-active-light-mode {
  display: block;
}
body.active-light-mode .single-demo .thumbnail .image-dark {
  display: none;
}
body.active-light-mode .footer-style-default .social-default li a,
body.active-light-mode .copyright-style-one .social-default.color-lessdark li a,
body.active-light-mode .rainbow-newsletter-default .rainbow-newsletter .form-group input {
  background: #fff;
}
body.active-light-mode .copyright-style-one .ft-menu li + li::after {
  background: #c5c1c1;
}
body.active-light-mode .copyright-style-one .ft-menu li a:hover,
body.active-light-mode .footer-style-default .footer-top .rainbow-footer-widget .footer-link li a:hover {
  color: var(--color-primary);
}
body.active-light-mode .header-transparent-with-topbar .header-top-bar,
body.active-light-mode .header-transparent-with-topbar .header-default {
  background: transparent;
}
body.active-light-mode [class*=col]:nth-child(2) .counter-style-2.color-variation .count-number {
  background-color: #f9f5f5;
}
body.active-light-mode [class*=col]:nth-child(3) .counter-style-2.color-variation .count-number {
  background-color: #eef2f3;
}
body.active-light-mode .service-wrapper > [class*=col]:nth-child(4) .service.service__style--1.icon-circle-style .icon {
  background-color: rgba(235, 0, 139, 0.1411764706);
}
body.active-light-mode .logo a img.logo-light {
  display: none;
}
body.active-light-mode .rainbow-back-top i {
  color: #333;
}
body.active-light-mode .service-wrapper > [class*=col]:nth-child(5) .service.service__style--1.icon-circle-style .icon {
  background-color: rgba(0, 154, 255, 0.1607843137);
}
body.active-light-mode .service-wrapper > [class*=col]:nth-child(6) .service.service__style--1.icon-circle-style .icon {
  background-color: rgba(48, 0, 255, 0.1607843137);
}

body.active-light-mode .service.service__style--1.icon-circle-style .icon {
  background-color: rgba(5, 157, 255, 0.0588235294);
}

body.active-light-mode .service-wrapper > [class*=col]:nth-child(2) .service.service__style--1.icon-circle-style .icon {
  background-color: rgba(251, 83, 67, 0.1019607843);
}

body.active-light-mode .service-wrapper > [class*=col]:nth-child(3) .service.service__style--1.icon-circle-style .icon {
  background-color: rgba(101, 73, 213, 0.1215686275);
}

body.active-light-mode .timeline-dot::after {
  background: radial-gradient(50% 50% at 50% 50%, #f5f8fa 48.96%, #f5f8fa 100%);
}

body.active-light-mode .header-top-bar {
  background-color: var(--color-white);
}

body.active-light-mode .single-timeline .single-content,
body.active-light-mode .rainbow-card,
body.active-light-mode .clltoaction-style-default.style-5 .content-wrapper,
body.active-light-mode .bg-flashlight::after,
body.active-light-mode .header-default,
body.active-light-mode .mainmenu-nav .mainmenu li.has-droupdown .submenu,
body.active-light-mode .service.gallery-style,
body.active-light-mode .rainbow-box-card .inner,
body.active-light-mode .team-style-default .inner,
body.active-light-mode .rainbow-accordion-style .card,
body.active-light-mode .section-title .subtitle,
body.active-light-mode .card-box.card-style-1,
body.active-light-mode .list-icon li .icon,
body.active-light-mode .counter-style-2 .count-number,
body.active-light-mode .rainbow-pricing.style-2 .pricing-table-inner,
body.active-light-mode .rainbow-default-tab .rainbow-tab-content,
body.active-light-mode .rainbow-default-tab .tab-button .react-tabs__tab.react-tabs__tab--selected,
body.active-light-mode .advance-tab-button-1 .tab-button-list .tab-button::before,
body.active-light-mode .advance-pricing .pricing-left,
body.active-light-mode .rainbow-pricing.style-5 .pricing-table-inner,
body.active-light-mode .about-style-5 .about-wrapper,
body.active-light-mode .rainbow-sub-badge,
body.active-light-mode .about-style-6 .wrapper::after,
body.active-light-mode .box-grid-layout .rainbow-card,
body.active-light-mode .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper,
body.active-light-mode .social-default li a,
body.active-light-mode .clltoaction-style-default.style-4 .content-wrapper,
body.active-light-mode .rainbow-address,
body.active-light-mode .rbt-single-widget .title,
body.active-light-mode .frame-image,
body.active-light-mode .rainbow-back-top,
body.active-light-mode .popup-mobile-menu .inner,
body.active-light-mode .rainbow-call-to-action.style-8,
body.active-light-mode .bg-overlay-solid::before {
  background: #f5f8fa;
}

body.active-light-mode .rainbow-header.sticky {
  background: #f5f8fa !important;
}

body.active-light-mode .bg-color-blackest {
  background: #f5f8fa !important;
}

body.active-light-mode .footer-style-default,
body.active-light-mode .copyright-style-one {
  background: #f5f8fa;
}

body.active-light-mode .slider-style-2 .list-icon li .icon {
  background: var(--color-blackest);
}

body.active-light-mode .rainbow-pricing .pricing-table-inner::before,
body.active-light-mode .rainbow-timeline-single.dark-line .rainbow-timeline .progress-dot .dot-level,
body.active-light-mode .rainbow-timeline-single.dark-line .rainbow-timeline .progress-line .line-inner,
body.active-light-mode .card-style-default.testimonial-style-one .inner .thumbnail::after,
body.active-light-mode .advance-pricing,
body.active-light-mode .rainbow-pricing.style-5 .pricing-table-inner .pricing,
body.active-light-mode .popup-mobile-menu .inner .header-top .close-menu .close-button,
body.active-light-mode .hamberger-button {
  background: #d8d8d8;
}

body.active-light-mode .single-demo {
  background: #e9f8fe;
}

body.active-light-mode .rainbow-accordion-style .card .card-body,
body.active-light-mode .brand-style-1 li {
  border-color: #d8d8d8;
}

body.active-light-mode hr {
  border-top: 1px solid rgba(0, 0, 0, 0.1411764706);
}

body.active-light-mode .rainbow-card {
  border-color: #f5f8fa;
}

body.active-light-mode .rainbow-pricing.active .pricing-table-inner .pricing-header,
body.active-light-mode .rainbow-pricing .pricing-table-inner .pricing-header {
  border-color: rgba(0, 0, 0, 0.0392156863);
}

body.active-light-mode .advance-tab-button-1 .tab-button-list .tab-button::after {
  border-left: 20px solid #f5f8fa;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
}

body.active-light-mode a.btn-default.btn-border,
body.active-light-mode button.btn-default.btn-border {
  border-color: rgba(0, 0, 0, 0.1411764706);
  color: #181818;
}

body.active-light-mode a.btn-default.btn-border:hover,
body.active-light-mode button.btn-default.btn-border:hover {
  border-color: var(--color-secondary);
  color: #fff;
}

body.active-light-mode .rainbow-box-card .inner .thumbnail,
body.active-light-mode .team-style-default .inner .thumbnail {
  border: 6px solid var(--color-white);
}

body.active-light-mode .filter-button-default button,
body.active-light-mode .testimonial-style-two .content .client-info .subtitle,
body.active-light-mode .single-timeline .single-content .inner .content .date-of-timeline,
body.active-light-mode .service.gallery-style .content p,
body.active-light-mode .rainbow-box-card .inner .social-icon li a,
body.active-light-mode .team-style-default .inner .social-icon li a,
body.active-light-mode .rainbow-accordion-style .card .card-body,
body.active-light-mode .mainmenu-nav .mainmenu > li > a,
body.active-light-mode .mainmenu-nav .mainmenu li.has-droupdown .submenu li a,
body.active-light-mode .list-icon li,
body.active-light-mode ul li,
body.active-light-mode .rainbow-pricing.active .pricing-table-inner .pricing-body ul.list-style--1 li,
body.active-light-mode .rainbow-pricing.active .pricing-table-inner .pricing-body ul.list-style--1 li svg,
body.active-light-mode .advance-tab-button-1 .tab-button-list .tab-button .title,
body.active-light-mode .advance-pricing .pricing-left .subtitle,
body.active-light-mode .header-top-bar .header-left p a,
body.active-light-mode .header-top-bar .header-right .address-content p a,
body.active-light-mode .header-top-bar .social-default.icon-naked li a,
body.active-light-mode .progress-info .title,
body.active-light-mode .progress-info span.progress-number,
body.active-light-mode .mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu .wrapper .mega-menu-item li a,
body.active-light-mode .clltoaction-style-default.style-4 .content .subtitle {
  color: #65676b;
}

body.active-light-mode .card-box.card-style-1 .inner .content .description {
  color: #65676b !important;
}

body.active-light-mode .clltoaction-style-default.style-5 .content .subtitle,
body.active-light-mode .rainbow-accordion-style .card .card-header button,
body.active-light-mode .counter-style-2 .count-number,
body.active-light-mode .rainbow-pricing .pricing-table-inner .pricing-header .pricing span.price,
body.active-light-mode .rainbow-pricing.active .pricing-table-inner .pricing-header .title,
body.active-light-mode .rainbow-pricing.active .pricing-table-inner .pricing-header .pricing span.currency,
body.active-light-mode .rainbow-pricing.active .pricing-table-inner .pricing-header .pricing span.subtitle,
body.active-light-mode .rainbow-pricing .pricing-table-inner .pricing-header .pricing span.subtitle,
body.active-light-mode .rainbow-default-tab .tab-button .rainbow-tab-button button,
body.active-light-mode .rainbow-pricing .pricing-table-inner .pricing-header .pricing span.currency,
body.active-light-mode .card-style-default.testimonial-style-one .inner .thumbnail::after,
body.active-light-mode .clltoaction-style-default.style-6 .content .title,
body.active-light-mode .rainbow-splite-style .split-inner .title,
body.active-light-mode .advance-tab-button-1 .tab-button-list .react-tabs__tab--selected .tab-button .title,
body.active-light-mode .advance-pricing .pricing-left .price-wrapper .price-amount,
body.active-light-mode .btn-read-more span,
body.active-light-mode .section-title-2 .title,
body.active-light-mode .box-grid-layout .rainbow-card .inner .content .title,
body.active-light-mode .clltoaction-style-default.style-5 .content .title,
body.active-light-mode .clltoaction-style-default.style-4 .content .title,
body.active-light-mode .hamberger-button {
  color: #181818;
}

body.active-light-mode .about-style-6 .maintitle {
  color: #181818 !important;
}

body.active-light-mode .slider-style-1 .inner .title {
  color: var(--color-white);
}

body.active-light-mode .testimonial-style-two .content::after {
  color: #f5f8fa;
}

body.active-light-mode .header-transparent .mainmenu-nav .mainmenu > li > a {
  color: var(--color-body);
}

body.active-light-mode .header-top-bar .header-right .address-content p a:hover {
  color: var(--color-primary);
}

body.active-light-mode .rainbow-pricing .pricing-table-inner .pricing-header .pricing span.currency {
  opacity: 0.8;
}

body.active-light-mode .mainmenu-nav .mainmenu li.has-droupdown .submenu li a:hover,
body.active-light-mode .btn-read-more:hover span {
  color: var(--color-primary);
}

body.active-light-mode .CircularProgressbar .CircularProgressbar-text {
  fill: #181818 !important;
}

body.active-light-mode .logo-active-light-mode {
  display: none;
}

body.active-light-mode .logo-dark {
  display: block;
}

body.active-light-mode .slider-area.bg-transparent .inner a.btn-default.btn-border,
body.active-light-mode .slider-area.bg-transparent .inner button.btn-default.btn-border {
  border-color: rgba(0, 0, 0, 0.1411764706);
  color: #181818;
}

body.active-light-mode .slider-area.bg-transparent .inner a.btn-default.btn-border:hover,
body.active-light-mode .slider-area.bg-transparent .inner button.btn-default.btn-border:hover {
  color: var(--color-white);
}

/* Advance Tab Style Four  */
.advance-tab-four {
  position: relative;
  padding: 48px;
  grid-column-gap: 48px;
  grid-row-gap: 48px;
  -ms-grid-rows: auto;
  grid-template-rows: auto;
  border: 1px solid var(--color-border);
  border-radius: 12px;
}
.advance-tab-four .advance-tab-top .description {
  font-size: var(--font-size-b3);
}

.rn-info-box {
  margin-top: 20px;
  background-color: var(--color-extra06);
  padding: 40px;
  border: 1px solid var(--color-border);
  border-radius: 12px;
}
.rn-info-box .box-inner .content {
  margin-top: 10px;
}

.service-thumbnail-offset-2 {
  margin-right: -60px;
  margin-bottom: -60px;
  border-radius: 10px 0 10px 0;
}

.inner.Collaborate-inner {
  padding: 0 50px 0 30px;
}
@media only screen and (max-width: 767px) {
  .inner.Collaborate-inner {
    padding: 30px 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .inner.Collaborate-inner .description {
    font-size: 14px;
  }
}

/**************************************
            Dashboard
***************************************/
:root {
  --sidebar-width: 320px;
}

.rbt-left-panel {
  width: var(--sidebar-width);
  background-color: var(--color-dark);
  position: fixed;
  top: 80px;
  left: 0;
  min-height: 450px;
  padding: 10px 20px 0 20px;
  padding-bottom: 0;
  border-right: 1px solid var(--color-border);
  height: calc(100% - 80px);
}
@media only screen and (max-width: 1199px) {
  .rbt-left-panel {
    z-index: 9;
  }
}
.rbt-left-panel .rbt-default-sidebar {
  position: relative;
  height: 100%;
}
.rbt-left-panel .rbt-default-sidebar .rbt-default-sidebar-wrapper {
  height: calc(100vh - 300px);
  overflow: scroll;
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.rbt-left-panel .rbt-default-sidebar .rbt-default-sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

.rbt-course-details-list-wrapper li,
.rbt-default-sidebar-list li {
  display: flex;
  justify-content: space-between;
  margin: 5px 0;
}
.rbt-course-details-list-wrapper li i,
.rbt-default-sidebar-list li i {
  color: var(--color-body);
  margin-right: 10px;
  font-size: 20px;
}
.rbt-course-details-list-wrapper li img,
.rbt-default-sidebar-list li img {
  width: 35px;
  height: auto;
  margin-right: 10px;
}
.rbt-course-details-list-wrapper li span,
.rbt-default-sidebar-list li span {
  font-weight: 500;
  font-size: 16px;
  line-height: 26px;
}
.rbt-course-details-list-wrapper li span.rbt-feature-value,
.rbt-default-sidebar-list li span.rbt-feature-value {
  font-size: 12px;
}
.rbt-course-details-list-wrapper li a,
.rbt-default-sidebar-list li a {
  display: flex;
  align-items: center;
  color: var(--color-body);
  transition: 0.4s;
  padding: 10px 12px;
  width: 100%;
  border-radius: var(--radius-small);
}
.rbt-course-details-list-wrapper li a:hover, .rbt-course-details-list-wrapper li a.active,
.rbt-default-sidebar-list li a:hover,
.rbt-default-sidebar-list li a.active {
  color: var(--color-primary);
  background: var(--color-blackest);
}
.rbt-course-details-list-wrapper li a:hover i, .rbt-course-details-list-wrapper li a.active i,
.rbt-default-sidebar-list li a:hover i,
.rbt-default-sidebar-list li a.active i {
  color: var(--color-primary);
}
.rbt-course-details-list-wrapper li.has-submenu,
.rbt-default-sidebar-list li.has-submenu {
  display: block;
}
.rbt-course-details-list-wrapper li.has-submenu .collapse-btn,
.rbt-default-sidebar-list li.has-submenu .collapse-btn {
  position: relative;
}
.rbt-course-details-list-wrapper li.has-submenu .collapse-btn::after,
.rbt-default-sidebar-list li.has-submenu .collapse-btn::after {
  position: absolute;
  content: "\e996";
  font-family: "feather" !important;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  transition: all 0.4s ease;
}
.rbt-course-details-list-wrapper li.has-submenu .collapse-btn.collapsed::after,
.rbt-default-sidebar-list li.has-submenu .collapse-btn.collapsed::after {
  content: "\e9b1";
}
.rbt-course-details-list-wrapper li.has-submenu .submenu,
.rbt-default-sidebar-list li.has-submenu .submenu {
  margin-left: 30px;
}

.subscription-box {
  position: absolute;
  bottom: 30px;
  left: 0;
  width: 100%;
  height: auto;
  z-index: 5;
  background-color: var(--color-blackest);
  border-radius: var(--radius);
}
.subscription-box .inner {
  display: flex;
  flex-direction: column;
  padding: 10px;
}
.subscription-box .inner .autor-info {
  display: flex;
  align-items: flex-start;
  margin-bottom: 10px;
  border-radius: var(--radius-small);
  padding: 10px;
  transition: all 0.3s;
  position: relative;
}
.subscription-box .inner .autor-info:hover {
  background-color: var(--color-dark);
}
.subscription-box .inner .autor-info .author-img {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  position: relative;
  overflow: hidden;
  margin-right: 10px;
}
.subscription-box .inner .autor-info .author-img.active::after {
  content: "";
  position: absolute;
  right: 5px;
  bottom: 5px;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  background: var(--color-success);
}
.subscription-box .inner .autor-info .author-desc h6 {
  margin-bottom: 2px;
}
.subscription-box .inner .autor-info .author-desc p {
  margin-bottom: 0;
}
.subscription-box .inner .autor-info .author-badge {
  position: absolute;
  top: 10px;
  right: 10px;
  padding: 0px 5px;
  border-radius: 4px;
  background: var(--color-primary);
  color: var(--color-white);
  font-size: var(--font-size-b4);
  list-style: var(--line-height-b4);
}
.subscription-box .inner .btn-default {
  display: block;
  cursor: pointer;
}

.subscription-copyright.copyright-text {
  position: absolute;
  bottom: 10px;
  z-index: 3;
  margin-bottom: 0;
  width: 100%;
}

.chat-content .title .rainbow-badge-card {
  margin-left: 5px;
}
.chat-content .download-btn {
  position: absolute;
  top: 30px;
  right: 30px;
}
.chat-content .download-btn i {
  margin-right: 5px;
}
.chat-content .edit-actions button + button {
  margin-left: 5px;
}

.rbt-sm-separator {
  margin: 20px 0;
  width: 100%;
  height: 1px;
  background-color: var(--color-border);
}

.rbt-main-content {
  background: var(--color-dark);
  margin-left: var(--sidebar-width);
  min-height: 450px;
  height: auto;
  margin-bottom: 150px;
  margin-right: var(--sidebar-width);
  margin-top: 80px;
}
@media only screen and (max-width: 1199px) {
  .rbt-main-content {
    margin-left: 0;
    margin-right: 0;
  }
}

.rbt-dashboard-content .content-page {
  padding: 0 190px;
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .rbt-dashboard-content .content-page {
    padding: 0 50px;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-dashboard-content .content-page {
    padding: 0 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-dashboard-content .content-page {
    padding: 0 40px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rbt-dashboard-content .content-page {
    padding: 0 50px;
  }
}
.rbt-dashboard-content .content-page .chat-box-list {
  padding-left: 0;
  list-style: none;
  margin: 0;
}
.rbt-dashboard-content .banner-area {
  padding: 30px 15px;
}

.chat-box {
  margin-bottom: 30px;
  padding: 30px;
  border-radius: var(--radius);
  background-color: var(--color-blackest);
  position: relative;
}
@media only screen and (max-width: 767px) {
  .chat-box {
    padding: 20px 10px;
  }
}
.chat-box:last-child {
  margin-bottom: 0;
}
.chat-box .inner .chat-section {
  display: flex;
  align-items: flex-start;
}
.chat-box .inner .chat-section .author {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 20px;
  background-color: transparent;
  color: var(--color-primary);
  display: flex;
  align-items: center;
  justify-content: center;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .author {
    height: 24px;
    width: 24px;
    margin-right: 5px;
  }
}
.chat-box .inner .chat-section .author svg {
  width: 24px;
  height: auto;
}
.chat-box .inner .chat-section .chat-content {
  max-width: calc(100% - 60px);
  width: 100%;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .chat-content {
    max-width: calc(100% - 30px);
  }
}
.chat-box .inner .chat-section .chat-content .title {
  margin-bottom: 10px;
}
.chat-box .inner .chat-section .chat-content .title.color-text-off {
  color: var(--color-text-off);
}
.chat-box .inner .chat-section .chat-content p {
  margin-bottom: 0;
}
.chat-box .inner .chat-section .chat-content .img-box {
  position: relative;
}
.chat-box .inner .chat-section .chat-content .img-box .download-btn {
  right: 20px;
  top: 20px;
}
@media only screen and (max-width: 479px) {
  .chat-box .inner .chat-section .chat-content .img-box .download-btn {
    right: 10px;
    top: 10px;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    font-size: var(--font-size-b4);
  }
}
.chat-box .inner .chat-section .chat-content .img-box-grp {
  display: flex;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .chat-content .img-box-grp {
    flex-wrap: wrap;
  }
}
.chat-box .inner .chat-section .chat-content .img-box-grp .img-box + .img-box {
  margin-left: 20px;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .chat-content .img-box-grp .img-box + .img-box {
    margin-left: 0;
    margin-top: 20px;
  }
}
.chat-box .inner .chat-section .chat-content .reaction-section .btn-grp {
  display: flex;
  justify-content: space-between;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .left-side-btn {
    display: flex;
  }
}
.chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .react-btn {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  padding: 0 10px;
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .react-btn {
    display: flex;
    margin: 0 5px;
    font-size: var(--font-size-b2);
    line-height: var(--line-height-b2);
  }
}
@media only screen and (max-width: 479px) {
  .chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .react-btn {
    padding: 0 6px;
    height: 30px;
    line-height: 30px;
    font-size: var(--font-size-b4);
  }
}
.chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .react-btn span {
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
  margin-left: 10px;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .react-btn span {
    display: none;
  }
}
.chat-box .inner .chat-section .chat-content .reaction-section .btn-grp .react-btn.show {
  background-color: var(--color-primary);
  border-color: var(--color-primary);
}
.chat-box .inner .chat-section .chat-content .video-popup.frame-image {
  background-color: var(--color-dark);
}
.chat-box .inner .chat-section .chat-content .typing-icon #iframe-icon {
  background: transparent;
  display: block;
  shape-rendering: auto;
  width: 50px;
  height: 50px;
  overflow: hidden;
}
.chat-box .inner .chat-section + .chat-section {
  margin-top: 10px;
}
.chat-box .inner .chat-section.generate-section {
  display: flex;
  align-items: center;
}
.chat-box .inner .chat-section.generate-section:nth-child(2) .author {
  color: var(--color-secondary);
}
.chat-box .inner .chat-section.generate-details-section .title {
  margin-top: 10px;
}
@media only screen and (max-width: 767px) {
  .chat-box .inner .chat-section.generate-details-section .title {
    margin-top: 0;
  }
}

.image-caption {
  padding: 15px 30px;
  border-radius: var(--radius);
  background: var(--color-dark);
}
.image-caption .caption-title {
  margin-bottom: 0;
}
@media only screen and (max-width: 479px) {
  .image-caption .caption-title {
    font-size: var(--font-size-b3);
  }
}
@media only screen and (max-width: 479px) {
  .image-caption {
    padding: 8px 15px;
  }
}

.rbt-right-side-panel {
  width: var(--sidebar-width);
  background: var(--color-dark);
  min-height: 450px;
  height: 100vh;
  position: fixed;
  overflow: scroll;
  -ms-overflow-style: none;
  scrollbar-width: none;
  right: 0;
  top: 80px;
  border-left: 1px solid var(--color-border);
}
@media only screen and (max-width: 1199px) {
  .rbt-right-side-panel {
    z-index: 999;
  }
}
.rbt-right-side-panel::-webkit-scrollbar {
  display: none;
}
.rbt-right-side-panel .right-side-top {
  padding: 20px;
  border-bottom: 1px solid var(--color-border);
  position: sticky;
  top: 0;
  z-index: 3;
  background: var(--color-dark);
}
.rbt-right-side-panel .right-side-top a {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding: 10px 20px;
  position: relative;
  font-weight: 500;
  text-transform: uppercase;
  font-size: 14px;
  border-radius: 5px;
  position: relative;
  cursor: pointer;
}
.rbt-right-side-panel .right-side-top a span {
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
}
.rbt-right-side-panel .right-side-top a .icon {
  margin-right: 10px;
}
.rbt-right-side-panel .right-side-bottom {
  padding: 20px;
}
.rbt-right-side-panel .right-side-bottom .title {
  padding: 0 12px;
  margin-bottom: 10px;
}

.chat-history-section {
  padding-bottom: 20px;
  border-bottom: 1px solid var(--color-border);
}
.chat-history-section .chat-history-list {
  padding-left: 0;
  list-style: none;
  margin: 0;
}
.chat-history-section .chat-history-list .history-box {
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 5px 5px 5px 10px;
  border-radius: 5px;
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
  font-weight: 400;
  letter-spacing: 0;
  position: relative;
  cursor: pointer;
  user-select: none;
  transition: all 0.3s ease;
  border: none;
  margin: 0;
}
.chat-history-section .chat-history-list .history-box .more-info-icon {
  background: transparent;
  border: none;
  color: var(--color-heading);
  opacity: 0;
  visibility: hidden;
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 25px;
  width: 25px;
  border-radius: 50%;
  background-color: transparent;
  transition: all 0.3s;
}
.chat-history-section .chat-history-list .history-box .more-info-icon.show {
  background-color: var(--color-dark);
}
.chat-history-section .chat-history-list .history-box:hover {
  background: var(--color-blackest);
}
.chat-history-section .chat-history-list .history-box:hover .more-info-icon {
  opacity: 0.8;
  visibility: visible;
}
.chat-history-section .chat-history-list .history-box:hover .more-info-icon:hover {
  opacity: 1;
}
.chat-history-section .chat-history-list .history-box.active {
  background: var(--color-blackest);
}
.chat-history-section .chat-history-list .history-box.active .more-info-icon {
  opacity: 0.8;
  visibility: visible;
}
.chat-history-section .chat-history-list .history-box.active .more-info-icon:hover {
  opacity: 1;
}
.chat-history-section + .chat-history-section {
  padding-top: 20px;
}
.chat-history-section:last-child {
  padding-bottom: 0;
  border: none;
}

.small-search.search-section {
  position: relative;
}
.small-search.search-section input {
  background: transparent;
  border: 2px solid var(--color-border);
  padding: 10px 15px 10px 30px;
  border-radius: var(--radius);
  color: var(--color-body);
  font-size: var(--font-size-b3);
}
.small-search.search-section input::placeholder {
  color: var(--color-body);
  font-size: var(--font-size-b3);
}
.small-search.search-section input:focus, .small-search.search-section input:focus-visible {
  border-color: var(--color-primary) !important;
  outline: none;
}
.small-search.search-section i {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
}

.rbt-dashboard-page .dropdown-toggle::after,
.rbt-dashboard-page .dropup .dropdown-toggle::after {
  display: none;
}
.rbt-dashboard-page .dropdown-menu {
  border-radius: var(--radius);
  padding: 10px 10px;
  background-color: var(--color-blackest);
  box-shadow: 2px 6px 20px 10px rgba(0, 0, 0, 0.5);
  z-index: 9999;
}
.rbt-dashboard-page .dropdown-menu li {
  margin: 0;
}
.rbt-dashboard-page .dropdown-menu li .dropdown-item {
  font-weight: 500;
  padding: 5px 20px;
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
  display: flex;
  align-items: center;
  color: var(--color-body);
  border-radius: 3px;
}
.rbt-dashboard-page .dropdown-menu li .dropdown-item svg {
  width: 15px;
  height: auto;
  margin-right: 10px;
}
.rbt-dashboard-page .dropdown-menu li .dropdown-item i {
  font-size: var(--line-height-b3);
  line-height: var(--line-height-b3);
  margin-right: 10px;
}
.rbt-dashboard-page .dropdown-menu li .dropdown-item:hover, .rbt-dashboard-page .dropdown-menu li .dropdown-item:active, .rbt-dashboard-page .dropdown-menu li .dropdown-item:focus {
  background-color: var(--color-dark);
  color: var(--color-primary);
}
.rbt-dashboard-page .dropdown-menu li .dropdown-item.delete-item:hover, .rbt-dashboard-page .dropdown-menu li .dropdown-item.delete-item:active, .rbt-dashboard-page .dropdown-menu li .dropdown-item.delete-item:focus {
  color: var(--color-danger);
}

.custom-tooltip .tooltip-inner {
  background-color: var(--color-primary);
  color: var(--color-white);
  font-size: var(--font-size-b4);
}
.custom-tooltip .tooltip-arrow::before {
  border-top-color: var(--color-primary);
}

.rbt-dashboard-header {
  position: fixed;
  text-align: center;
  width: 100%;
  margin-left: 0;
  top: 0;
  background-color: var(--color-dark);
  padding: 0 20px;
}
@media only screen and (max-width: 767px) {
  .rbt-dashboard-header {
    padding: 0;
  }
}
.rbt-dashboard-header .mainmenu-nav {
  margin-left: 0;
}
.rbt-dashboard-header .right-menu ul {
  display: flex;
  margin: 0;
  padding: 0;
  list-style: none;
}
.rbt-dashboard-header .right-menu ul li {
  margin: 0;
}
.rbt-dashboard-header .right-menu ul li a {
  color: var(--color-heading);
  font-size: 16px;
  font-weight: 500;
  padding: 0 17px;
  display: block;
  height: 80px;
  line-height: 80px;
  transition: 0.3s;
}
.rbt-dashboard-header .right-menu ul li a:hover {
  color: #FF3BD4;
}
.rbt-dashboard-header .genarator-card .title {
  font-size: var(--font-size-b3);
}
@media only screen and (max-width: 767px) {
  .rbt-dashboard-header .hamberger .hamberger-button {
    width: 35px;
    height: 35px;
    font-size: var(--font-size-b2);
    line-height: var(--line-height-b2);
  }
}
@media only screen and (max-width: 767px) {
  .rbt-dashboard-header .mobile-menu-bar {
    margin-left: 0 !important;
  }
}

.header-default .genarator-card .title {
  font-size: var(--font-size-b3);
}
.header-default .genarator-card .inner {
  padding: 30px 10px !important;
}

.rbt-content {
  width: 100%;
  position: relative;
  min-height: 450px;
}

.rbt-static-bar {
  position: fixed;
  width: calc(100% - 2 * var(--sidebar-width));
  margin-top: auto;
  z-index: 5;
  bottom: 0;
  padding: 15px 0;
  background-color: var(--color-dark);
  box-shadow: 0px -40px 55px -20px rgb(7, 7, 16);
  transition: all 0.4s ease;
  text-align: center;
}
.rbt-static-bar.area-left-expanded {
  width: calc(100% - var(--sidebar-width));
}
@media only screen and (max-width: 1199px) {
  .rbt-static-bar.area-left-expanded {
    width: 100%;
  }
}
.rbt-static-bar.area-right-expanded {
  width: calc(100% - var(--sidebar-width));
}
@media only screen and (max-width: 1199px) {
  .rbt-static-bar.area-right-expanded {
    width: 100%;
  }
}
.rbt-static-bar.area-right-expanded.area-left-expanded {
  width: 100%;
}
.rbt-static-bar .staticbar-btn-grp {
  margin: 0;
  padding: 0;
  list-style: none;
  width: 100%;
  justify-content: center;
  display: flex;
  background: var(--color-dark);
  flex-wrap: wrap;
}
.rbt-static-bar .staticbar-btn-grp li {
  margin-top: 15px;
  margin-bottom: 0;
}
@media only screen and (max-width: 767px) {
  .rbt-static-bar .staticbar-btn-grp li {
    margin-top: 10px;
    padding: 0 10px;
  }
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .staticbar-btn-grp li {
    margin-top: 5px;
    padding: 0 5px;
  }
}
.rbt-static-bar .staticbar-btn-grp li + li {
  margin-left: 10px;
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .staticbar-btn-grp li + li {
    margin-left: 5px;
  }
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .staticbar-btn-grp li button {
    height: 30px;
    padding: 0 5px;
    font-size: var(--font-size-b4);
    line-height: var(--line-height-b4) !important;
    margin: 0;
  }
}
.rbt-static-bar.collapse-width {
  width: calc(100% - var(--sidebar-width));
}
@media only screen and (max-width: 1199px) {
  .rbt-static-bar.collapse-width {
    width: 100%;
    padding-bottom: 50px;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-static-bar.collapse-width {
    padding: 10px;
    padding-bottom: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar.collapse-width {
    padding: 10px;
  }
}
@media only screen and (max-width: 1199px) {
  .rbt-static-bar {
    width: 100%;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-static-bar {
    padding: 10px;
  }
}
.rbt-static-bar .new-chat-form {
  margin: 0 190px;
  position: relative;
  border-radius: var(--radius);
}
@media only screen and (max-width: 767px) {
  .rbt-static-bar .new-chat-form {
    margin: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-static-bar .new-chat-form {
    margin: 0 50px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rbt-static-bar .new-chat-form {
    margin: 0 50px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .rbt-static-bar .new-chat-form {
    margin: 0 45px;
  }
}
.rbt-static-bar .new-chat-form textarea {
  border: 2px solid var(--color-border);
  background-color: transparent;
  border-radius: var(--radius);
  outline: 0;
  display: block;
  width: 100%;
  padding: 16px 130px 16px 60px;
  font-size: 16px;
  line-height: 22px;
  max-height: 200px;
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .new-chat-form textarea {
    padding: 12px 100px 12px 40px;
  }
}
.rbt-static-bar .new-chat-form .left-icons {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 20px;
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .new-chat-form .left-icons {
    left: 10px;
  }
}
.rbt-static-bar .new-chat-form .right-icons {
  right: 20px;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  display: flex;
  align-items: center;
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .new-chat-form .right-icons {
    right: 10px;
  }
}
.rbt-static-bar .new-chat-form .right-icons .form-icon + .form-icon {
  margin-left: 10px;
}
.rbt-static-bar .new-chat-form .form-icon {
  color: var(--color-body);
  height: 30px;
  width: 30px;
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
@media only screen and (max-width: 479px) {
  .rbt-static-bar .new-chat-form .form-icon {
    height: 20px;
    width: 20px;
  }
}
.rbt-static-bar .new-chat-form .form-icon:hover {
  background: var(--color-dark);
}
.rbt-static-bar .new-chat-form .form-icon i {
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
}
.rbt-static-bar .new-chat-form .form-icon.icon-plus {
  border: none;
  background: transparent;
  cursor: pointer;
  pointer-events: all;
  position: relative;
}
.rbt-static-bar .new-chat-form .form-icon.icon-plus .input-file {
  position: absolute;
  right: 0;
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}
.rbt-static-bar .new-chat-form .form-icon.icon-mic {
  background: transparent;
  color: var(--color-body);
  border: none;
}
.rbt-static-bar .new-chat-form .form-icon.icon-send {
  background: transparent;
  color: var(--color-body);
  border: none;
}
.rbt-static-bar .new-chat-form .form-icon:hover {
  background: var(--color-dark);
}
.rbt-static-bar .small-text {
  padding-top: 15px;
  margin-bottom: 0;
}

.popup-dashboardleft-section {
  transition: all 0.4s ease;
}
.popup-dashboardleft-section.collapsed {
  transform: translateX(-100%);
}

.popup-dashboardright-section {
  transition: all 0.4s ease;
}
.popup-dashboardright-section.collapsed {
  transform: translateX(100%);
}

.rbt-main-content {
  transition: all 0.4s ease;
}
.rbt-main-content.area-left-expanded {
  margin-left: 0;
}
.rbt-main-content.area-right-expanded {
  margin-right: 0;
}

.popup-dashboardleft-btn,
.popup-dashboardright-btn {
  transition: all 0.4s ease;
}
.popup-dashboardleft-btn.opened i.feather-menu.right::before,
.popup-dashboardright-btn.opened i.feather-menu.right::before {
  content: "\e910";
}
.popup-dashboardleft-btn.opened i.feather-menu.left::before,
.popup-dashboardright-btn.opened i.feather-menu.left::before {
  content: "\e912";
}

/*---------------------------
    Rbt Show More Button  
------------------------------*/
.rbt-show-more-btn {
  font-size: 14px;
  font-weight: 700;
  color: var(--color-primary);
  display: block;
  margin-top: 5px;
  position: relative;
  padding: 5px;
  cursor: pointer;
}
.rbt-show-more-btn::before {
  background: linear-gradient(rgba(7, 7, 16, 0) 0%, rgb(7, 7, 16) 100%);
  position: absolute;
  content: "";
  left: 0;
  bottom: 100%;
  width: 100%;
  height: 80px;
}
.rbt-show-more-btn::after {
  content: "\e92e";
  position: absolute;
  font-family: "feather";
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}
.rbt-show-more-btn.active::before {
  background: none;
  display: none;
}
.rbt-show-more-btn.active::after {
  content: "\e931";
}

.has-show-more .has-show-more-inner-content {
  max-height: 200px;
  overflow: hidden;
  position: relative;
  width: 100%;
  transition: all 0.4s;
}
.has-show-more.active .has-show-more-inner-content {
  max-height: inherit !important;
}

.chatenai-tab {
  display: flex;
  justify-content: center;
}
.chatenai-tab .tab-btn-grp {
  padding: 10px;
  border: 2px solid var(--color-border);
  border-radius: 100px;
  display: flex;
  justify-content: space-between !important;
}
@media only screen and (max-width: 767px) {
  .chatenai-tab .tab-btn-grp {
    flex-direction: column;
  }
}
.chatenai-tab .tab-btn-grp button {
  padding: 10px 35px;
  font-size: var(--font-size-b1);
  line-height: var(--line-height-b1);
  font-weight: 500;
  color: var(--color-heading);
  align-items: center;
  justify-content: center;
  display: flex;
  border-radius: 100px;
  transition: all 0.3s ease;
  border: none;
  outline: none;
}
@media only screen and (max-width: 479px) {
  .chatenai-tab .tab-btn-grp button {
    padding: 10px 15px;
  }
}
.chatenai-tab .tab-btn-grp button.active {
  background: var(--color-primary);
  color: var(--color-white);
}
.chatenai-tab .tab-btn-grp button:focus-visible, .chatenai-tab .tab-btn-grp button:focus-within, .chatenai-tab .tab-btn-grp button:focus {
  color: var(--color-white);
}
.chatenai-tab .tab-btn-grp button .rainbow-badge-card {
  margin-left: 10px;
  font-size: var(--font-size-b4);
  line-height: var(--line-height-b4);
  background: none;
}

.expand-btn-grp {
  display: flex;
  justify-content: center;
  align-items: center;
}
.expand-btn-grp button {
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 2;
  background: var(--color-blackest);
  width: 40px;
  height: 40px;
  border-radius: 100%;
  color: var(--color-primary);
  border: none;
  font-size: var(--font-size-b1);
  border: 2px solid var(--color-border);
}
@media only screen and (max-width: 767px) {
  .expand-btn-grp button {
    width: 35px;
    height: 35px;
    font-size: var(--font-size-b2);
    line-height: var(--line-height-b2);
  }
}
@media only screen and (max-width: 479px) {
  .expand-btn-grp button.popup-dashboardright-btn {
    margin-right: 0;
    margin-left: 3px;
  }
}
.expand-btn-grp button.popup-dashboardleft-btn {
  margin-right: 20px;
}
@media only screen and (max-width: 767px) {
  .expand-btn-grp button.popup-dashboardleft-btn {
    margin-right: 10px;
  }
}
.expand-btn-grp button:hover, .expand-btn-grp button.collapsed {
  background: var(--color-primary);
  color: var(--color-white);
  border-color: var(--color-primary);
}

.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu.with-mega-item-2 {
  width: 600px;
  overflow: hidden;
  box-shadow: 0 0 20px 5px rgba(7, 7, 16, 0.1);
  padding: 0;
  border-top: none;
  border: none;
}
.mainmenu-nav .mainmenu li.with-megamenu .rainbow-megamenu.with-mega-item-2 .genarator-card:hover {
  transform: translateY(-5px);
}

.chatenai-small-slider .inner {
  background: var(--color-secondary);
  display: flex;
  border-radius: var(--radius);
  justify-content: space-between;
  overflow: hidden;
  align-items: flex-end;
}
@media only screen and (max-width: 767px) {
  .chatenai-small-slider .inner {
    flex-direction: column;
    align-items: flex-start;
  }
}
.chatenai-small-slider .inner.bg-one {
  background: var(--color-secondary);
}
.chatenai-small-slider .inner.bg-two {
  background: var(--color-primary);
}
.chatenai-small-slider .inner.bg-three {
  background: var(--color-primary-gradient-start);
}
.chatenai-small-slider .inner.bg-four {
  background: var(--color-primary-alt);
}
.chatenai-small-slider .inner .content {
  padding: 50px 30px;
  padding-right: 0;
}
.chatenai-small-slider .inner .content .title {
  margin-bottom: 10px;
  color: var(--color-white);
}
.chatenai-small-slider .inner .content p {
  color: var(--color-white);
}
.chatenai-small-slider .img-section {
  display: flex;
  max-width: 50%;
  height: 100%;
}
.chatenai-small-slider .img-section img {
  height: 100%;
  max-height: 165px;
}
@media only screen and (max-width: 767px) {
  .chatenai-small-slider .img-section {
    max-width: 100%;
  }
}

.rbt-dashboard-content .slick-dots {
  display: flex;
  position: absolute;
  bottom: 30px;
  left: 40px;
}
.rbt-dashboard-content .rainbow-slick-dot .slick-dots li button::after {
  background: var(--color-white);
  box-shadow: inset 0 0 0 5px var(--color-white);
  opacity: 0.6;
}
.rbt-dashboard-content .rainbow-slick-dot .slick-dots li.slick-active button::after {
  box-shadow: inset 0 0 0 1px var(--color-white);
  opacity: 0.8;
}

.welcome-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
.welcome-wrapper .content-section {
  display: flex;
  align-items: center;
}
.welcome-wrapper .content-section .icon {
  font-size: var(--h3);
  margin-right: 10px;
}
.welcome-wrapper .content-section .title {
  margin-bottom: 0;
}
.welcome-wrapper .btn-default {
  cursor: pointer;
}
@media only screen and (max-width: 479px) {
  .welcome-wrapper .btn-default {
    margin-top: 20px;
  }
}

/*-------------------------
    Admin User Settings
--------------------------*/
.rbt-admin-profile {
  display: flex;
}
.rbt-admin-profile .admin-thumbnail {
  margin-right: 12px;
}
.rbt-admin-profile .admin-thumbnail img {
  width: 40px;
  min-width: 40px;
  height: 40px;
  border-radius: 100%;
  border: 2px solid var(--color-border);
  padding: 3px;
}
@media only screen and (max-width: 479px) {
  .rbt-admin-profile .admin-thumbnail img {
    width: 30px;
    min-width: 30px;
    height: 30px;
    padding: 0;
  }
}
.rbt-admin-profile .admin-info {
  display: flex;
  flex-wrap: wrap;
}
.rbt-admin-profile .admin-info .name {
  color: var(--color-heading);
  font-weight: 500;
  display: block;
  line-height: 1;
  margin-bottom: 2px;
  font-size: var(--font-size-b1);
}
@media only screen and (max-width: 575px) {
  .rbt-admin-profile .admin-info .name {
    flex-basis: 100%;
    text-align: left;
  }
}
.rbt-admin-profile .admin-info .rbt-btn-link {
  font-size: var(--font-size-b3);
  color: var(--color-primary);
  position: relative;
}
.rbt-admin-profile .admin-info .rbt-btn-link::after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
  background: var(--color-primary);
  width: 0;
  height: 2px;
  transition: 0.3s;
}
.rbt-admin-profile .admin-info .rbt-btn-link:hover::after {
  width: 100%;
}

.rbt-user-menu-list-wrapper .user-list-wrapper {
  margin: 0 -12px;
  list-style: none;
  padding: 0;
}
.rbt-user-menu-list-wrapper .user-list-wrapper li {
  margin: 0;
}
.rbt-user-menu-list-wrapper .user-list-wrapper li a {
  display: flex;
  padding: 5px 12px;
  align-items: center;
  border-radius: 3px;
  color: var(--color-body);
}
.rbt-user-menu-list-wrapper .user-list-wrapper li a.active {
  color: var(--color-primary);
  background: var(--color-dark);
}
.rbt-user-menu-list-wrapper .user-list-wrapper li a img,
.rbt-user-menu-list-wrapper .user-list-wrapper li a i {
  max-height: 17px;
  margin-right: 7px;
}
.rbt-user-menu-list-wrapper .user-list-wrapper li a i {
  font-size: 17px;
}
.rbt-user-menu-list-wrapper .user-list-wrapper li a span {
  font-size: 14px;
}
.rbt-user-menu-list-wrapper .user-list-wrapper li:hover a {
  color: var(--color-primary);
  background: var(--color-dark);
}

.rbt-user {
  height: 80px;
  line-height: 80px;
  margin: 0 17px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}
@media only screen and (max-width: 479px) {
  .rbt-user {
    padding: 0;
    margin: 0;
    margin-left: 0;
    margin-left: 3px;
  }
}

.rbt-user-wrapper {
  position: relative;
  z-index: 2;
}
.rbt-user-wrapper .admin-img {
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
  border-radius: 100%;
  color: var(--color-primary);
  border: none;
  font-size: var(--font-size-b1);
  overflow: hidden;
}
.rbt-user-wrapper .admin-img img {
  width: 40px;
  height: 40px;
  border-radius: 100%;
  border: 2px solid var(--color-border);
  padding: 3px;
  min-width: 40px;
}
@media only screen and (max-width: 479px) {
  .rbt-user-wrapper .admin-img img {
    width: 35px;
    min-width: 35px;
    height: 35px;
    padding: 0;
  }
}
@media only screen and (max-width: 575px) {
  .rbt-user-wrapper {
    position: static;
  }
}
.rbt-user-wrapper .rbt-user-menu-list-wrapper {
  background: var(--color-blackest);
  min-width: 250px;
  border-radius: 0 0 10px 10px;
  border: 1px solid var(--color-border);
  border-top: none;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .rbt-user-wrapper .rbt-user-menu-list-wrapper {
    left: auto;
    right: 0;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-user-wrapper .rbt-user-menu-list-wrapper {
    left: auto;
    right: 0;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-user-wrapper .rbt-user-menu-list-wrapper {
    left: auto;
    right: 0;
  }
}
@media only screen and (max-width: 575px) {
  .rbt-user-wrapper .rbt-user-menu-list-wrapper {
    left: 20px;
    right: 20px;
    width: auto;
  }
}
.rbt-user-wrapper .rbt-user-menu-list-wrapper .inner {
  padding: 25px 30px;
}
.rbt-user-wrapper .rbt-user-menu-list-wrapper .inner hr {
  margin-left: -30px;
  margin-right: -30px;
}
.rbt-user-wrapper .rbt-user-menu-list-wrapper .inner .rbt-admin-profile {
  padding-bottom: 20px;
}
.rbt-user-wrapper.right-align-dropdown .rbt-user-menu-list-wrapper {
  right: 0;
  left: auto;
}
@media only screen and (max-width: 575px) {
  .rbt-user-wrapper.right-align-dropdown .rbt-user-menu-list-wrapper {
    right: 20px;
    left: 20px;
    width: auto;
  }
}

.rbt-modal-box {
  transition: all 0.3s ease;
}
.rbt-modal-box .modal-dialog {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 100%;
  background: transparent;
}
.rbt-modal-box .modal-dialog .wrapper {
  width: 850px;
  height: auto;
  padding: 70px;
  background: var(--color-blackest);
  border-radius: var(--radius);
  position: relative;
  overflow: hidden;
  border: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .rbt-modal-box .modal-dialog .wrapper {
    width: auto;
  }
}
@media only screen and (max-width: 767px) {
  .rbt-modal-box .modal-dialog .wrapper {
    padding: 40px;
    width: 100%;
  }
}
@media only screen and (max-width: 479px) {
  .rbt-modal-box .modal-dialog .wrapper {
    padding: 35px;
    width: auto;
  }
}
.rbt-modal-box .modal-dialog .wrapper.modal-small {
  width: 500px;
  align-items: flex-start;
}
.rbt-modal-box .modal-dialog .wrapper.modal-medium {
  width: 700px;
}
.rbt-modal-box .modal-dialog .wrapper.modal-large {
  width: 900px;
}
.rbt-modal-box .modal-dialog .wrapper select {
  background: transparent;
  overflow: auto;
  padding: 0;
  margin: 0;
  border: none;
}
.rbt-modal-box .modal-dialog .wrapper select:focus {
  border: none;
  outline: none;
  box-shadow: none;
}
.rbt-modal-box .modal-dialog .wrapper select option {
  display: inline-block;
  padding: 10px;
  cursor: pointer;
  border-radius: var(--radius-small);
  border: 2px solid var(--color-border);
  color: var(--color-heading);
  margin: 5px;
  font-size: var(--font-size-b3);
  line-height: var(--line-height-b3);
}
.rbt-modal-box .modal-dialog .wrapper select option:checked {
  background: var(--color-primary);
  color: var(--color-white);
}
.rbt-modal-box .modal-dialog .wrapper select option:focus, .rbt-modal-box .modal-dialog .wrapper select option:active {
  background: var(--color-primary);
  color: var(--color-white);
  outline: none;
}
.rbt-modal-box .modal-dialog .wrapper select option::selection {
  background: var(--color-primary);
  color: var(--color-white);
}
.rbt-modal-box .modal-dialog .wrapper .chat-form .title {
  color: var(--color-body);
}
.rbt-modal-box .modal-dialog .wrapper .chat-form .text-form {
  border-radius: var(--radius);
}
.rbt-modal-box .modal-dialog .wrapper .chat-form .text-form textarea,
.rbt-modal-box .modal-dialog .wrapper .chat-form .text-form input {
  border: none;
  padding: 10px 20px;
}
.rbt-modal-box .modal-dialog .wrapper .close-button {
  position: absolute;
  right: 15px;
  top: 15px;
  background: var(--color-primary);
  box-shadow: none;
  border: none;
  height: 40px;
  width: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  color: var(--color-white);
  transition: 0.4s;
}
.rbt-modal-box .modal-dialog .wrapper .close-button:hover {
  transform: scale(1.1);
}
.rbt-modal-box .form-select {
  background-color: var(--color-blackest);
  color: var(--color-primary);
  border: 2px solid var(--color-primary);
  margin-bottom: 20px;
  border-radius: var(--radius-small);
}
.rbt-modal-box .bootstrap-select > .dropdown-toggle {
  background-color: transparent;
  color: var(--color-heading);
  border: none;
  font-size: var(--font-size-b3);
}
.rbt-modal-box .bootstrap-select > .dropdown-toggle:hover {
  color: var(--color-heading);
}
.rbt-modal-box .bootstrap-select > .dropdown-toggle:focus, .rbt-modal-box .bootstrap-select > .dropdown-toggle:focus-visible {
  border: none;
  outline: none !important;
  box-shadow: none;
}
.rbt-modal-box .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
  width: 300px;
}
@media only screen and (max-width: 767px) {
  .rbt-modal-box .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%;
  }
}

.genarator-section {
  width: 100%;
  margin: 0 auto;
}
.genarator-section .genarator-form-top {
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.genarator-section .genarator-form-top .title {
  margin-bottom: 0;
}
.genarator-section .genarator-form-top .btn-transparent {
  background: transparent;
  border: none;
}
.genarator-section .genarator-form-top .btn-transparent span {
  color: var(--color-heading);
}

.genarator-card-group {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  margin-left: -10px;
  margin-right: -10px;
}
.genarator-card-group li {
  flex-basis: 50%;
  padding: 10px;
  margin: 0;
}
@media only screen and (max-width: 575px) {
  .genarator-card-group li {
    flex-basis: 100%;
  }
}

.genarator-card {
  padding: 10px 15px 10px;
  border: 2px solid var(--color-border);
  display: block;
  border-radius: var(--radius);
  transition: var(--transition);
}
.genarator-card .inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.genarator-card .inner .left-align {
  display: flex;
  align-items: center;
}
.genarator-card .inner .left-align .img-bar {
  height: 50px;
  width: 50px;
  overflow: hidden;
  margin-right: 10px;
  transition: var(--transition) all ease-in-out;
}
.genarator-card .inner .left-align .title {
  margin-bottom: 0;
  text-align: left;
  transition: var(--transition);
}
.genarator-card .inner .right-align .icon-bar {
  opacity: 0;
  visibility: hidden;
  transition: var(--transition);
}
.genarator-card:hover {
  background: var(--color-primary);
  border-color: var(--color-primary);
}
.genarator-card:hover .right-align .icon-bar {
  opacity: 1;
  visibility: visible;
  color: var(--color-white);
}
.genarator-card:hover .title {
  color: var(--color-white);
}
.genarator-card:hover .left-align .img-bar {
  background: rgba(0, 0, 0, 0.11);
}
.genarator-card.disabled {
  pointer-events: none;
  opacity: 0.5;
}

.modal-backdrop.show {
  opacity: 0.8;
}

.modal-backdrop {
  background-color: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(15px) !important;
  opacity: 1 !important;
}

.genarator-card-group.full-width-list li {
  flex-basis: 100%;
  margin: 0 10px;
}

.genarator-card.center-align {
  position: relative;
  padding: 0;
  overflow: hidden;
  border: 0;
}
.genarator-card.center-align .inner {
  padding: 15px 10px 25px;
  justify-content: center;
}
.genarator-card.center-align .left-align {
  flex-direction: column;
}
.genarator-card.center-align .left-align .img-bar {
  margin-right: 0;
  margin-bottom: 10px;
  background: none;
  padding: 0;
  height: unset;
  width: unset;
}
.genarator-card.center-align .left-align .img-bar img {
  max-height: 40px;
}
.genarator-card.center-align .left-align .title {
  text-align: center !important;
}
.genarator-card.center-align .rainbow-badge-card {
  position: absolute;
  right: 10px;
  top: 10px;
}
.genarator-card.center-align.bg-flashlight-static:hover {
  background: inherit;
}
.genarator-card.center-align.bg-flashlight-static:hover::before {
  background: linear-gradient(to bottom, var(--color-primary), rgba(39, 39, 55, 0.1803921569));
}

.rainbow-megamenu .genarator-card {
  padding-left: 0 !important;
}

.lanuage-form-box .languge-select-form {
  width: 50%;
  margin-top: 20px;
  border: 2px solid var(--color-border);
  background-color: var(--color-blackest);
  border-radius: var(--radius);
  color: var(--color-heading);
  font-size: var(--font-size-b2);
  padding: 10px 20px;
}
.lanuage-form-box .languge-select-form option {
  margin: 0;
  background: var(--color-blackest);
  box-shadow: var(--shadow-1);
  font-size: var(--font-size-b2);
  min-width: 170px;
  padding: 12px 0;
  margin: 0;
  list-style-type: none;
  z-index: 10;
  text-align: start;
  border-radius: var(--radius);
  border: none;
  outline: none;
  color: var(--color-heading);
}
.lanuage-form-box .languge-select-form option:hover {
  background-color: var(--color-dark);
}
.lanuage-form-box .form-select:focus {
  box-shadow: none;
}
.lanuage-form-box .select-area + .select-area {
  margin-top: 10px;
}

.settings-area {
  margin-bottom: 30px;
}
@media only screen and (max-width: 575px) {
  .settings-area {
    margin-bottom: 0;
  }
}
.settings-area .user-nav {
  display: flex;
  flex-wrap: wrap;
  border-bottom: 1px solid var(--color-border);
}
@media only screen and (max-width: 767px) {
  .settings-area .user-nav {
    display: block;
    border-bottom: 0;
  }
}
.settings-area .user-nav li {
  margin: 0;
}
@media only screen and (max-width: 767px) {
  .settings-area .user-nav li {
    border-top: 1px solid var(--color-border);
    border-bottom: 1px solid var(--color-border);
  }
}
.settings-area .user-nav li a {
  display: block;
  font-size: var(--font-size-b1);
  padding: 20px 0;
  position: relative;
}
@media only screen and (max-width: 767px) {
  .settings-area .user-nav li a {
    text-align: left;
    padding: 10px 0;
  }
}
.settings-area .user-nav li a::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  height: 2px;
  background: var(--color-primary);
  width: 0;
  transition: all 0.3s ease-in-out;
}
.settings-area .user-nav li a:hover, .settings-area .user-nav li a.active {
  color: var(--color-primary);
}
.settings-area .user-nav li a:hover::after, .settings-area .user-nav li a.active::after {
  width: 100%;
}
.settings-area .user-nav li + li {
  margin-left: 30px;
}
@media only screen and (max-width: 767px) {
  .settings-area .user-nav li + li {
    margin-left: 0;
  }
}

.single-settings-box {
  margin-bottom: 30px;
  padding: 30px;
  border-radius: var(--radius);
  background-color: var(--color-blackest);
  position: relative;
  overflow: hidden;
}
@media only screen and (max-width: 767px) {
  .single-settings-box {
    padding: 15px;
  }
}
.single-settings-box .rbt-default-form label {
  display: block;
  font-size: var(--font-size-b2);
  margin-bottom: 12px;
  font-weight: 600;
  text-transform: capitalize;
  color: var(--color-heading);
}
.single-settings-box .section-title {
  margin-bottom: 30px;
  align-items: center;
}
.single-settings-box .section-title .title {
  margin-bottom: 0;
}

.rbt-daynamic-page-content.center-width {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}
.rbt-daynamic-page-content.center-width .rbt-dashboard-content {
  padding: 0 290px;
  width: 100%;
}
@media only screen and (min-width: 1600px) and (max-width: 1919px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content {
    padding: 0 200px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1599px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content {
    padding: 0 50px;
  }
}
@media only screen and (max-width: 1199px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content {
    padding: 0 50px;
  }
}
@media only screen and (max-width: 575px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content {
    padding: 0 20px;
  }
}
.rbt-daynamic-page-content.center-width .rbt-dashboard-content .settings-area {
  text-align: center;
}
.rbt-daynamic-page-content.center-width .rbt-dashboard-content .content-page {
  padding: 0;
}
@media only screen and (max-width: 767px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content .content-page .rainbow-pricing.style-chatenai .pricing-header .price-wrapper span.sm-text {
    font-size: 42px;
    line-height: 56px;
  }
}
@media only screen and (max-width: 479px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content .content-page .chatenai-tab .tab-btn-grp {
    padding: 20px;
  }
}
@media only screen and (max-width: 479px) {
  .rbt-daynamic-page-content.center-width .rbt-dashboard-content .content-page .chatenai-tab .tab-btn-grp button {
    width: 100%;
  }
}

.notification-box-switch {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-left: 0;
  margin-bottom: 30px;
}
@media only screen and (max-width: 575px) {
  .notification-box-switch {
    width: 100%;
    margin-bottom: 15px;
  }
}
.notification-box-switch .title {
  margin-bottom: 0;
}

.rbt-checkbox-wrapper {
  margin-bottom: 10px;
}
.rbt-checkbox-wrapper input {
  width: auto;
}
.rbt-checkbox-wrapper label {
  width: auto;
  display: inline-block;
}
.rbt-checkbox-wrapper.style-2 label {
  display: flex;
  align-items: center;
  padding: 15px;
  border-radius: var(--radius);
  background: transparent;
  width: 100%;
}
.rbt-checkbox-wrapper.style-2 label .img-section {
  margin-right: 15px;
}
.rbt-checkbox-wrapper.style-2 label .img-section img {
  height: 40px;
  width: 40px;
  border-radius: 100%;
  padding: 3px;
  border: 2px solid var(--color-border);
}
.rbt-checkbox-wrapper.style-2 label .content-section .title {
  margin-bottom: 5px;
  display: block;
}
.rbt-checkbox-wrapper.style-2 label .content-section .radio-badge {
  margin-bottom: 0;
  padding: 3px 8px;
  background: var(--color-dark);
  font-size: var(--font-size-b4);
  line-height: var(--line-height-b4);
  display: inline-flex;
  align-items: center;
  border-radius: var(--radius-small);
}
.rbt-checkbox-wrapper.style-2 label::before {
  content: none;
}
.rbt-checkbox-wrapper.style-2 label::after {
  left: unset;
  right: 15px;
  top: 42%;
  transform: rotate(-45deg) translateY(-50%);
  width: 22px;
  height: 12px;
  border-bottom: 3px solid var(--color-primary);
  border-left: 3px solid var(--color-primary);
}
.rbt-checkbox-wrapper.style-2 input[type=checkbox]:checked ~ label {
  background: var(--color-dark);
}
.rbt-checkbox-wrapper.style-2 input[type=checkbox]:checked ~ label .radio-badge {
  background: var(--color-primary);
  color: var(--color-white);
}
.rbt-checkbox-wrapper.style-2 input {
  width: 100%;
}

.list-card-grp .toolbar {
  padding: 10px;
  background-color: var(--color-dark);
  border-radius: var(--radius-small);
  margin-bottom: 20px;
}
.list-card-grp .toolbar .icon {
  margin-right: 10px;
}
.list-card-grp .toolbar p {
  margin-bottom: 0;
}
.list-card-grp .list-card .inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 0;
  border-top: 1px solid var(--color-border);
  width: 100%;
}
.list-card-grp .list-card .inner .left-content {
  display: flex;
}
.list-card-grp .list-card .inner .left-content .img-section {
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 20px;
}
.list-card-grp .list-card .inner .left-content .title {
  margin-bottom: 5px;
}
.list-card-grp .list-card .inner .left-content p {
  margin-bottom: 0;
}
.list-card-grp .list-card.style-two .inner:hover .btn-default {
  opacity: 1;
  visibility: visible;
}
.list-card-grp .list-card.style-two .btn-default {
  opacity: 0;
  visibility: hidden;
}

.rbt-checkbox-grp .title {
  margin-bottom: 10px;
}
.rbt-checkbox-grp + .rbt-checkbox-grp {
  margin-top: 30px;
}

.switcher-btn-grp button {
  padding: 10px 10px 20px;
  border: 2px solid transparent;
  text-align: center;
  background-color: var(--color-dark);
  border-radius: var(--radius);
  position: relative;
}
.switcher-btn-grp button img {
  display: block;
  border-radius: var(--radius);
  max-height: 150px;
}
@media only screen and (max-width: 575px) {
  .switcher-btn-grp button img {
    max-height: 70px;
  }
}
.switcher-btn-grp button .text {
  display: block;
  padding-top: 10px;
  color: var(--color-heading);
  font-size: var(--font-size-b1);
}
@media only screen and (max-width: 575px) {
  .switcher-btn-grp button .text {
    font-size: var(--font-size-b2);
  }
}
.switcher-btn-grp button.active {
  border-color: var(--color-primary);
}
.switcher-btn-grp button + button {
  margin-left: 30px;
}
@media only screen and (max-width: 575px) {
  .switcher-btn-grp button + button {
    margin-left: 10px;
  }
}
.switcher-btn-grp button.disabled {
  pointer-events: none;
  opacity: 0.5;
}

/*# sourceMappingURL=style.css.map */


</style>

    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-T28GH99M');
    </script>
    <!-- End Google Tag Manager -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

</head>