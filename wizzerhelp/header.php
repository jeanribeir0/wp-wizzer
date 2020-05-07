<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/wizzer.svg" alt="Wizzer">
    <button>Entrar</button>
</header>
<form action="<?php echo get_home_url(); ?>/" class="search">
        <div class="wrap">
            <?php get_search_form (); ?>
        </div>
</form>
<?php wp_head(); ?>
<style>
/* 
Theme Name: Central de Ajuda
Theme URL: http://wizzerhelp.com
Description: Ajuda para usuários da Wizzer
Author: Designer Wizzer
Author URL: http://wizzerhelp.com
Version: 1.0
*/

html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  line-height: 1;
  touch-action: auto;
  height: auto;
  overscroll-behavior: auto;
  font-family: "Roboto", sans-serif;
  padding-top: 85px;
}
ol,
ul {
  list-style: none;
}
blockquote,
q {
  quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}

* {
  box-sizing: border-box;
  margin: 0;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  -webkit-appearance: none;
  -webkit-text-size-adjust: 100%;
  text-size-adjust: 100%;
  border-color: initial;
  border-image: initial;
  border-style: initial;
  border-width: 0;
  font-weight: inherit;
  outline: 0;
  padding: 0;
  text-rendering: optimizeLegibility;
}

header {
  height: 85px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #ffffff;
  box-shadow: 0px 4px 21px rgba(0, 0, 0, 0.15);
  position: fixed;
  top: 30px;
  width: 100vw;
  padding: 0 45px;
}

header img {
  width: 200px;
}

header button {
  font-size: 1em;
  cursor: pointer;
  height: 100%;
  border-bottom: 3px solid transparent;
  color: #353d40;
  font-weight: normal;
  padding: 0 15px;
  line-height: 140%;
}

header button:hover {
  color: #055eff;
  border-bottom: 3px solid #055eff;
  transition: all 300ms ease-in-out;
}

header button:active {
  color: #fff;
  background-color: #055eff;
  transition: all 300ms ease-in-out;
}

.wrap > div{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
}
.wrap > div label{
   display: none;
}
.wrap > div input[type="submit"]{
   flex: 0;
   height: 100%;
   background-color: #055eff;
   font-size: 16px;
   color: #fff;
   padding: 30px;
   cursor: pointer;
   padding: 20px;
}
</style>