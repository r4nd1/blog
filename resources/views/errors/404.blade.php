<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 | Page not Found</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="author" content="wachid" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/favicon.png') }}">
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style type="text/css">article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block;}audio,canvas,video{display:inline-block;}audio:not([controls]){display:none;height:0;}[hidden]{display:none;}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;}body{margin:0;}a:focus{outline:thin dotted;}a:active,a:hover{outline:0;}h1{font-size:2em;margin:0.67em 0;}abbr[title]{border-bottom:1px dotted;}b,strong{font-weight:bold;}dfn{font-style:italic;}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0;}mark{background:#ff0;color:#000;}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em;}pre{white-space:pre-wrap;}q{quotes:"\201C" "\201D" "\2018" "\2019";}small{font-size:80%;}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}sup{top:-0.5em;}sub{bottom:-0.25em;}img{border:0;}svg:not(:root){overflow:hidden;}figure{margin:0;}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em;}legend{border:0;padding:0;}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0;}button,input{line-height:normal;}button,select{text-transform:none;}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;}button[disabled],html input[disabled]{cursor:default;}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none;}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}textarea{overflow:auto;vertical-align:top;}table{border-collapse:collapse;border-spacing:0;}


/* Header */
.siji-header {
    padding: 3em 1em 4em;
    text-align: center;
}

.siji-header h1 {
    font-weight: 800;
    font-size: 3em;
    line-height: 1;
    margin-bottom: 0.5em;
    letter-spacing: -1px;
}

.siji-header h1 span {
    display: block;
    font-size: 0.45em;
    font-weight: 700;
    padding: 1em;
    opacity: 0.6;
}


/* Content */
.content {
    text-align: center;
    position: relative;
}



@media screen and (max-width: 50em) {
    .siji-header {
        padding: 3em 10% 4em;
    }
}

@media screen and (max-width: 40em) {
    .siji-header h1 {
        font-size: 2.8em;
    }
}

    /* Main stuff */
.text {
  fill: none;
  stroke-width: 6;
  stroke-linejoin: round;
  stroke-dasharray: 70 330;
  stroke-dashoffset: 0;
  -webkit-animation: stroke 6s infinite linear;
  animation: stroke 6s infinite linear; }
  .text:nth-child(5n + 1) {
    stroke: #F2385A;
    -webkit-animation-delay: -1.2s;
    animation-delay: -1.2s; }
  .text:nth-child(5n + 2) {
    stroke: #F5A503;
    -webkit-animation-delay: -2.4s;
    animation-delay: -2.4s; }
  .text:nth-child(5n + 3) {
    stroke: #E9F1DF;
    -webkit-animation-delay: -3.6s;
    animation-delay: -3.6s; }
  .text:nth-child(5n + 4) {
    stroke: #56D9CD;
    -webkit-animation-delay: -4.8s;
    animation-delay: -4.8s; }
  .text:nth-child(5n + 5) {
    stroke: #3aa1bf;
    -webkit-animation-delay: -6s;
    animation-delay: -6s; }

@-webkit-keyframes stroke {
  100% {
    stroke-dashoffset: -400; } }
@keyframes stroke {
  100% {
    stroke-dashoffset: -400; } }
/* Other stuff */
html,
body { background: #c0392b url("{{ URL::asset('assets/img/background.svg') }}") 50% 0 no-repeat;
  background-attachment: fixed;
  height: 100%; }

body {
  
  background: none;
  font-family: 'Lato';

    font-weight: 500;
    font-size: 1em;
     }
a {
    color: #fff;
    text-decoration: none;
    outline: none;
     font-family: 'Lato';
}    

.content {
  font: 800 14.5em/1  'Open Sans', Impact; }

svg {
  width: 50%;
  margin: 0 auto 10px;
  display: block;
  text-transform: uppercase; }

/*# sourceMappingURL=style12.css.map */

    </style>
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>
    <div class="container">
        <header class="siji-header">
            <h1><a href="{{ URL::to("/") }}">Setunggal</a>  <span style="color:white">{{ Inspiring::quote() }}</span></h1>
            
            
        </header>
        <div class="content">
            <svg viewBox="0 0 600 300">

                <!-- Symbol -->
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em">
                        404
                    </text>
                </symbol>

                <!-- Duplicate symbols -->
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>

            </svg>
        </div>
        <!-- Related demos -->
        
    </div>
    <!-- /container -->
</body>

</html>
