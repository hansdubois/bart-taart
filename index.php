<?php
  $json = json_decode(file_get_contents('http://api.giphy.com/v1/gifs/search?q=birthday&api_key=dc6zaTOxFJmzC&limit=10'), true);

  $url = $json['data'][array_rand($json['data'])]['images']['fixed_height']['url'];
?><html>
<head>
  <title>Er is er een jarig!</title>
  <meta name="viewport" content="initial-width=device-width,initial-scale=1,user-scalable=no" />
  <meta charset="utf-8" />

  <style type="text/css">
  /* http://meyerweb.com/eric/tools/css/reset/
 v2.0 | 20110126
 License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
font-size: 100%;
font: inherit;
vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
display: block;
}
body {
line-height: 1;
}
ol, ul {
list-style: none;
}
blockquote, q {
quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
content: '';
content: none;
}
table {
border-collapse: collapse;
border-spacing: 0;
}

html {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,2290e5+100 */
  background: #1e5799; /* Old browsers */
  background: -moz-linear-gradient(top, #1e5799 0%, #2290e5 100%); /* FF3.6-15 */
  background: -webkit-linear-gradient(top, #1e5799 0%,#2290e5 100%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to bottom, #1e5799 0%,#2290e5 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#2290e5',GradientType=0 ); /* IE6-9 */
  background-attachment: fixed;

  font-family: "Ubuntu", sans-serif;

  width: 100%;
  height: 100%;
}

body {
  display: flex;
  width: 100%;
  height: 100%;
  flex-direction: column;

  align-items: center;
  justify-content: center;
}

article{
  color : #FFF;

  font-size: 5vw;
  text-align: center;
}

img {
  margin-top: 30px;
}

@media screen and (max-width:768px) {
  article {
    font-size: 10vw;
    padding : 20px;
  }
}


  </style>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99595493-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
  <article>
    Bart! Je bent jarig jongen! 🎂
    <br />
    <img src="<?= $url ?>" />
  </article>
</body>
</html>
