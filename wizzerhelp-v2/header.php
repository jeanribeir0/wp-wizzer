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
<header id="headerwizzer">
        <nav>
            <div id="logo">
            <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/wizzer.svg" alt="Wizzer">
            </div>
            <div id="header_links">
                <ul>
                 
                    <li>
                        <a href="#">Seja Corretor Parceiro</a>
                    </li>
                    <li>
                        <a href="#">Seja Inquilino</a>
                    </li>
                    <li>
                        <a href="#">Seja Proprietário</a>
                    </li>
                </ul>
            </div>
            <div id="menu">
                <button>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
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


#headerwizzer {
    height: 96px;
    border: 1px solid #e0e0e0;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 24px;
    position: fixed;
    width: 100%;
    background-color: #fff;
    z-index: 9999999999;
}

#headerwizzer nav {
    height: 100%;
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: space-between;
}

#headerwizzer nav #menu {
    display: none;
}

#headerwizzer nav ul {
    height: 100%;
    list-style-type: none;
    display: flex;
}

nav #header_links {
    height: 100%;
    list-style-type: none;
    display: flex;
}

#header_links ul li a {
    height: 100%;
    list-style-type: none;
    display: flex;
}

nav ul li {
    height: 100%;
    display: flex;
    list-style-type: none;
    justify-content: center;
    align-items: center;
    padding: 0 16px;
    margin-left: 10px;
    position: relative;
}

nav ul li::before {
    content: "";
    height: 4px;
    position: absolute;
    border-radius: 3px 3px 0px 0px;
    width: 10%;
    opacity: 0;
    bottom: 0;
    background-color: #055eff;
}

nav ul li:hover::before {
    width: 100%;
    opacity: 1;
    transition: all 300ms ease-in;
}

nav ul li:hover a {
    color: #055eff;
}

nav ul li a {
    height: 100%;
    list-style-type: none;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: #353d40;
}

#logo img{
  width: 200px;
}

#mobile_links {
    display: none;
}

#menu button {
    width: 30px;
    height: 30px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    cursor: pointer;
    background: transparent;
}

#menu span {
    width: 35px;
    height: 4px;
    background-color: #055eff;
    border-radius: 3px;
    margin-bottom: 7px;
}

#menu span:nth-child(2) {
    width: 30px;
}



@media screen and (max-width: 960px) {
    nav #header_links {
        display: none;
    }

    #headerwizzer nav #menu {
        display: flex;
    }
}


</style>