<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>ASIANCE coding challenge</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="Asiance code challenge.">
    <link rel="shortcut icon" href="static/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="128x128" href="static/img/asiance-logo-colors-128.png">

    <style>
        /* FONTS */
@import url("https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400|Squada+One|Staatliches");

/* GLOBAL */


:root { font-size: 1em; }

@media (min-width: 30em){
	:root {
		font-size: calc(1em + (1.5 - 1) * ( (100vw - 30em) / ( 80 - 30)));
	}
}
@media (min-width: 80em) {
	:root {
		font-size: 1em;
	}

	body {
		padding: 0 5rem;
	}
}

body {
	font:1rem/1.5 "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
	color:#2C2C2C;
	font-weight:400;
	margin:1.5rem;
}

h1, h2, h3, h4, h5, h6 {
	font:1rem/1.5 "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
	color:#000;
	margin:0 0 1.25rem;
	font-weight: 700;
}

.subtitle {
    margin: 1rem 0;
}

p {
    text-align: justify;
}

p, ul, ol, table, pre, dl {
	margin:0 0 1.25rem;
}

h1, h2, h3 {
	line-height: 1.25;
}

h1 {
	font-size: 2rem;
}

a {
	color:#d20839;
	font-weight:400;
	text-decoration:none;
}

a small {
	font-size: 0.75rem;
	color:#777;
	display:block;
}

code, pre {
	font-family: Monaco, Bitstream Vera Sans Mono, Lucida Console, Terminal;
	color: #333;
	font-size: 1rem;
}

pre {
	padding: 0.5rem 1rem;
	background: #f8f8f8;
	border-radius:5px;
	border:1px solid #e5e5e5;
	overflow-x: auto;
}

ul {
	background: #f8f8f8;
	border-radius:5px;
	border:1px solid #e5e5e5;
	padding: 1rem 2rem;
}
img {
	max-width:100%;
}
.logo {
	text-align: center;
}

header {
	margin: 1.25rem 0;
}

.btn-outline {
    display: inline-block;
    margin: .5rem 0;
    padding: .5rem 1rem;
    background-color: white;
    color: #d20839;
    border: 1px solid #d20839;
    border-radius: .25rem;
    text-transform: uppercase;
}

.btn-outline:hover {
    background-color: #d20839;
    color: white;
    transition: background-color .2s linear;
}

strong {
	font-weight:bold;
}

section {
	padding-bottom: 3rem;
}

small {
	font-size:0.75rem;
}

hr {
	border:0;
	background:#e5e5e5;
	height:1px;
	margin:0 0 1.25rem;
}

footer {

}

.text-center {
	text-align: center;
}


    </style>
</head>
<body>
<header>
    <div class="logo"><a href="index.html"><img src="static/img/asiance-logo-colors-256.png"></a></div>
    <h1 class="subtitle">ASIANCE coding challenge</h1>
    <a class="btn-outline" href="index.html">Go back</a>

</header>
<section>

    <p>
    </p><p>Time: about 3h.</p>




    <h1>Part I: Create a REST API</h1>
    <hr>
    <p>Design a REST API that provides author's posts</p>

    <h3>Requirements</h3>

    <p>An author is defined as follows: </p>
    <ul>
        <li>name</li>
        <li>role</li>
        <li>avatar</li>
        <li>location</li>
        <li>created_at</li>
        <li>updated_at</li>
    </ul>
    <p>A post is defined as follow: </p>
    <ul>
        <li>author</li>
        <li>title</li>
        <li>body</li>
        <li>tags (can be empty)</li>
        <li>image_url</li>
        <li>created_at</li>
        <li>updated_at</li>
    </ul>

    <h1>Part II: Create a webpage</h1>
    <hr>
    <h3>Requirements</h3>
    <p>Retrieve a list of posts from the API (<span style="color:#d20839;">in JavaScript</span>) created in part I, and
        recreate the following reference image in HTML and CSS (The design should be a minimum responsive).</p>

    <h3>Optional requirements</h3>

    <ul>
        <li>Functional pagination</li>
    </ul>


    <a href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400|Squada+One|Staatliches" target="_blank">Get
        the fonts</a>

    <p><a href="static/img/asiance_test_sample.png" target="_blank"><img src="static/img/asiance_test_sample.png"></a>
    </p>

    <p>*Click the image for full-size version.</p>


    <h1>The rules</h1>

    <ul>
        <li>You can use the language and technology of your choosing. It's OK to try something new (tell us if you do), but
        feel free to use something you're comfortable with. We don't care if you use something we don't; the goal here
        is not to validate your knowledge of a particular technology</li>
        <li>End result should be deployed on a public Cloud (Heroku, AWS etc. all have free tiers you can use).</li>
        <li>End result should be versioned on a git repository. Send us the link to <a href="mailto:recruit@asiance.com">recruit@asiance.com</a></li>
    </ul>
    <p></p>

</section>

<hr>

<footer>© 2004 - 2019 <a href="https://www.asiance.com" target="_blank">Asiance</a>. All rights reserved.</footer>




<walnut-highlight-tool></walnut-highlight-tool></body></html>