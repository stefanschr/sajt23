<!doctype html>
<html>
<head>
<title>Naslov</title>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div ime="glavna">

<header ime="prvi" id="lip">
<div ime="p1" id="ewq">
<a href="index.php?opcija=reg" ime="ouy" >Registration</a>
<a href="index.php?opcija=reg" ime="ouy">Login</a>

</div>

<hgroup ime="grup">
<h1 ime="o">Let's learn</h1>
<h2 ime="o">web design</h2>
<h3 ime="o">togheter</h3>
</hgroup>
<div ime="p2" id="lop">
<marquee>
<nav ime="ds">
<a href="index.php?opcija=peha" ime="uy" class="fre">...HTML5...CSS3...</a>
<a href="index.php?opcija=peha" ime="uy" class="fre">...JAVASCRIPT...</a>
<a href="index.php?opcija=peha" ime="uy" class="fre">...PHP...</a>
</nav>
</marquee>
</div>
</header>
<nav ime="navv1">
<a href="index.php" ime="ae" id="ahj" onmouseover="fub();" onmouseleave="fubi();">Home page</a>
<a href="index.php?opcija=onama" ime="ae" id="dsf" onmouseover="fubd();" onmouseleave="fubis();">About</a>
<a href="index.php?opcija=peha" ime="ae" id="nmb" onmouseover="fubs();" onmouseleave="fubia();">HTML5 CSS3</a>
<a href="index.php?opcija=hate" ime="ae" id="nmbx" onmouseover="fubas();" onmouseleave="fubias();">PHP</a>
<a href="index.php?opcija=jav" ime="ae" id="nmbcd" onmouseover="fubas1();" onmouseleave="fubias2();">JAVASCRIPT</a>
<a href="index.php?opcija=conc" ime="ae" id="nmbde" onmouseover="fubas12();" onmouseleave="fubias21();">Contact</a>
</nav>
<?php
if(isset($_GET ["opcija"])) {
$html = $_GET ["opcija"];
$fajl = $html .".php";
include_once $fajl;
} else {
	echo (" "."
<section ime=r>
<article>
<aside ime=leva>
<form>
<input type=text value=Search>
<input type=submit value=Search>
</form>

</aside><br/>
<h2 ime=or>...HTML5...CSS3...</h2>
<p ime=fla>
HTML5 is a markup language used for structuring and presenting content
 on the World Wide Web. It is the fifth and current major version of the HTML standard.

It was published in October 2014 by the World Wide Web Consortium (W3C) to improve 
the language with support for the latest multimedia, while keeping it both easily readable by humans
 and consistently understood by computers and devices such as web browsers, parsers, etc. HTML5 is intended
 to subsume not only HTML 4, but also XHTML 1 and DOM Level 2 HTML.[5]

HTML5 includes detailed processing models to encourage more interoperable implementations; it extends, improves
 and rationalizes the markup available for documents, and introduces markup and application programming interfaces 
 (APIs) for complex web applications.[6] For the same reasons, HTML5 is also a candidate for cross-platform mobile applications,
 because it includes features designed with low-powered devices in mind.
<a href=index.php?opija=hate>read more</a>
</p>

</article>
<br>

<article ime=dsd>
<br><br>
<h2 ime=or>...JAVASCRIPT...</h2>
<p ime=fla>
If you downloaded it from somewhere else, please let us know: https://www.dll-files.com/support/

DLL-Files.com is owned and operated by Tilf AB, Sweden. The collection of DLL files as a whole (falls under the “collection copyright” laws) are © Copyright Tilf AB
The individual DLL files are provided free of charge with the understanding that the user is familiar with their use.
If you need help with installation, our recommendation is to use our DLL-files.com Client software.
You can fix any missing DLL error in a flash with this fast, simple and trusted solution.
Join more than 30 million users from around the world and get DLL-files.com Client to protect your PC from DLL errors. It's easy to use, No Technical knowledge required, and
 works with every Windows PC, 32-bit and 64-bit, from Windows 10 all the way back to Windows XP.
More in
All files are provided on
<a href=index.php?opcija=peha>read more</a>
 </p>
</article>
<br>
<article ime=i3>
<br><br>
<h2 ime=or>...PHP...</h2>
<p ime=fla>
If you downloaded it from somewhere else, please let us know: https://www.dll-files.com/support/

DLL-Files.com is owned and operated by Tilf AB, Sweden. The collection of DLL files as a whole (falls under the “collection copyright” laws) are © Copyright Tilf AB
The individual DLL files are provided free of charge with the understanding that the user is familiar with their use.
If you need help with installation, our recommendation is to use our DLL-files.com Client software.
You can fix any missing DLL error in a flash with this fast, simple and trusted solution.
Join more than 30 million users from around the world and get DLL-files.com Client to protect your PC from DLL errors. It's easy to use, No Technical knowledge required, and
 works with every Windows PC, 32-bit and 64-bit, from Windows 10 all the way back to Windows XP.
More in
All files are provided on 
<a href=index.php?opcija=jav>read more</a>
</p>
</article>
</section>
<section>
<div></div>
</section>");
}

?>


<footer ime="foow">
<ul ime="ulo">
<h1><a href="index.php?opcija=peha" ime="ae">...HTML5...CSS3...</a></h1>
<li>Exam</li>
<li>Tutorial</li>
<li>Script</li>
</ul>


<div ime="dd55">
<nav ime="oi">
<a href="index.php?opcija=coc" ime="e2"><i>Contact</i></a>
<a href="index.php?opcija=list" ime="e2"><i>List</i></a>
<a href="index.php?opcija=map" ime="e2"><i>Map</i></a>
<a href="index.php?opcija=peop" ime="e2"><i>People</i></a>
</nav>
</div>
<script>
function jyt() {
var c = document.getElementById("lop");
c.style.background = 'red';

function fun() {
c.style.background = 'lightblue';
}
var t = setTimeout(fun,2000);
var e = setInterval(jyt,4000);
}

jyt();

function jkl() {
var q = document.getElementsByClassName('fre');
q[0].style.color = 'white';
q[1].style.color = 'white';
q[2].style.color = 'white';

function opi() {
q[0].style.color = 'lawngreen';	
}
function api() {
q[1].style.color = 'lawngreen';
}
function mapi() {
q[2].style.color = 'lawngreen';
}

var j = setTimeout(opi,1000);
var b = setTimeout(api,2000);
var n = setTimeout(mapi,3000);
var xc = setInterval(jkl,4000);

}
jkl();

function dew() {
var cf = document.getElementById("ewq");
cf.style.background = 'red';

function funi() {
cf.style.background = 'lightblue';
}
var t = setTimeout(funi,2000);
var e = setInterval(dew,4000);
}

dew();

function fub() {
var navi = document.getElementById("ahj");
navi.style.border = '1px solid blue';
}
function fubi() {
var navi = document.getElementById("ahj");
navi.style.border = '1px solid yellow';

}

function fubd() {
var navi = document.getElementById("dsf");
navi.style.border = '1px solid blue';
navi.style.color = 'red';
}
function fubis() {
var navi = document.getElementById("dsf");
navi.style.border = '1px solid yellow';
navi.style.color = 'black';
}

function fubs() {
var navi = document.getElementById("nmb");
navi.style.border = '1px solid blue';
navi.style.color = 'red';
}
function fubia() {
var navi = document.getElementById("nmb");
navi.style.border = '1px solid yellow';
navi.style.color = 'black';
}

function fubas() {
var navi = document.getElementById("nmbx");
navi.style.border = '1px solid blue';
navi.style.color = 'red';
}
function fubias() {
var navi = document.getElementById("nmbx");
navi.style.border = '1px solid yellow';
navi.style.color = 'black';
}

function fubas1() {
var navi = document.getElementById("nmbcd");
navi.style.border = '1px solid blue';
navi.style.color = 'red';
}
function fubias2() {
var navi = document.getElementById("nmbcd");
navi.style.border = '1px solid yellow';
navi.style.color = 'black';
}

function fubas12() {
var navi = document.getElementById("nmbde");
navi.style.border = '1px solid blue';
navi.style.color = 'red';
}
function fubias21() {
var navi = document.getElementById("nmbde");
navi.style.border = '1px solid yellow';
navi.style.color = 'black';
}


</script>
</footer>







</div>
</body>
</html>