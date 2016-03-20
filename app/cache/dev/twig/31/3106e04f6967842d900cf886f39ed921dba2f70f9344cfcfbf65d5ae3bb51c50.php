<?php

/* @CCIRamSco/Yasmina/layoutPerso.html.twig */
class __TwigTemplate_13497aec969768bd6d2fb0a72bfc21939acf3328f1ca2763a9d68de25defbfaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titreSite' => array($this, 'block_titreSite'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5fc3c484f5058b41328ca10a765dffe39809bf6d990c6dd557b34d7e56b9e3b = $this->env->getExtension("native_profiler");
        $__internal_f5fc3c484f5058b41328ca10a765dffe39809bf6d990c6dd557b34d7e56b9e3b->enter($__internal_f5fc3c484f5058b41328ca10a765dffe39809bf6d990c6dd557b34d7e56b9e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/layoutPerso.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 68
        echo "  

</head>

<body>
\t<header>
\t\t
\t\t<nav class=\"navbar navbar-inverse\">
\t\t  <div class=\"container-fluid\">
\t\t\t<div class=\"navbar-header\">
\t\t\t  <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>                        
\t\t\t  </button>
\t\t\t  <a class=\"navbar-brand\" href=\"#\">Le tapis roulant</a>
\t\t\t</div>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#\">Accueil</a></li>
\t\t\t\t<li><a href=\"#\">L'association</a></li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Ramassage scolaire <span class=\"caret\"></span></a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"#\">Trajet</a></li>
\t\t\t\t\t<li><a href=\"#\">Horaires</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Adhérents <span class=\"caret\"></span></a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"#\">Devenir adhérent</a></li>
\t\t\t\t\t<li><a href=\"#\">Liste des adhérents</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Activités <span class=\"caret\"></span></a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"#\">Planifier une activité</a></li>
\t\t\t\t\t<li><a href=\"#\">Liste des activités</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\">Contacts</a></li>
\t\t\t  </ul>
\t\t\t  <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> S'inscrire</a></li>
\t\t\t\t<li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a></li>
\t\t\t  </ul>
\t\t\t</div>
\t\t  </div>
\t\t</nav>
\t
\t

\t\t<h1>";
        // line 122
        $this->displayBlock('titreSite', $context, $blocks);
        echo "</h1>\t
\t\t
\t</header>
\t\t
\t
\t<div class=\"contenu\">
        ";
        // line 128
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "\t</div>

\t\t
\t\t
\t\t
\t\t
\t<footer class=\"container-fluid text-center\">
\t  <p><a href=\"#\">FARYM</a> © ";
        // line 137
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
\t</footer>
\t
\t
\t
\t
\t

  </div>
</body>
</html>
";
        
        $__internal_f5fc3c484f5058b41328ca10a765dffe39809bf6d990c6dd557b34d7e56b9e3b->leave($__internal_f5fc3c484f5058b41328ca10a765dffe39809bf6d990c6dd557b34d7e56b9e3b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5c7be02b887f710e7e72592143c58d443a24c5744d5647b33912207820f948e = $this->env->getExtension("native_profiler");
        $__internal_c5c7be02b887f710e7e72592143c58d443a24c5744d5647b33912207820f948e->enter($__internal_c5c7be02b887f710e7e72592143c58d443a24c5744d5647b33912207820f948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le tapis roulant";
        
        $__internal_c5c7be02b887f710e7e72592143c58d443a24c5744d5647b33912207820f948e->leave($__internal_c5c7be02b887f710e7e72592143c58d443a24c5744d5647b33912207820f948e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1ce88b26f8ab92d69d18bd2064170010bc04b7d25721773afc3aeaa81cbb3a6 = $this->env->getExtension("native_profiler");
        $__internal_f1ce88b26f8ab92d69d18bd2064170010bc04b7d25721773afc3aeaa81cbb3a6->enter($__internal_f1ce88b26f8ab92d69d18bd2064170010bc04b7d25721773afc3aeaa81cbb3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
\t<script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
\t<link href='https://fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
\t<style>
\t\tbody {background-color: #FCFF76;}
\t\t
\t\t.navbar-inverse .navbar-brand, h1 { color : #FFA500; font-family: 'Indie Flower', cursive; }
\t\t
\t\t.navbar-inverse .navbar-nav li a { color : #FFA500; }
\t\t
\t\th1 {text-align: center;
\t\t\tcolor : #9C0000;
\t\t\tfont-family: 'Indie Flower', cursive;
\t\t}
\t\t
\t\th2 {text-align: center;
\t\t\tfont-family: 'Bree Serif', serif;
\t\t\tmargin-bottom: 50px;
\t\t}
\t\t\t
\t\t.navbar {
\t\t  margin-bottom: 0;
\t\t  border-width: 0;
\t\t  border-radius: 0;
\t\t  background-color: #AA0000;
\t\t  border-color: #AA0000;
\t\t  color : #9C0000;
\t\t}
\t\t
\t\t.dropdown-menu {background-color: #080808;}

\t\t.dropdown-menu li a:hover {background-color: #CF8C0B;}
\t\t
\t\t.contenu {
\t\t\twidth:90%;
\t\t\tmargin-left:5%;
\t\t\tmargin-right:5%;
\t\t}
\t\t
\t\t.col-sm-6 { 
\t\t\tbackground-color: #FEFFB0;
\t\t\t}
\t\t
\t\t
\t\tfooter {
\t\t\tposition: absolute;
\t\t\tbottom:0%;
\t\t\tleft:0%;
\t\t\twidth: 100%;
\t\t\ttext-align: center;
\t\t}
\t\t
\t</style>
  ";
        
        $__internal_f1ce88b26f8ab92d69d18bd2064170010bc04b7d25721773afc3aeaa81cbb3a6->leave($__internal_f1ce88b26f8ab92d69d18bd2064170010bc04b7d25721773afc3aeaa81cbb3a6_prof);

    }

    // line 122
    public function block_titreSite($context, array $blocks = array())
    {
        $__internal_672e6cf071bcc53415d38f4225c9a265bd9e0c34c459c98fb16cdf609f1315d4 = $this->env->getExtension("native_profiler");
        $__internal_672e6cf071bcc53415d38f4225c9a265bd9e0c34c459c98fb16cdf609f1315d4->enter($__internal_672e6cf071bcc53415d38f4225c9a265bd9e0c34c459c98fb16cdf609f1315d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titreSite"));

        echo "Le tapis roulant";
        
        $__internal_672e6cf071bcc53415d38f4225c9a265bd9e0c34c459c98fb16cdf609f1315d4->leave($__internal_672e6cf071bcc53415d38f4225c9a265bd9e0c34c459c98fb16cdf609f1315d4_prof);

    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ed7f3830a271bc31bb93cad97152deaf48cd3d41a82624fa50c8899dcb9f65 = $this->env->getExtension("native_profiler");
        $__internal_f8ed7f3830a271bc31bb93cad97152deaf48cd3d41a82624fa50c8899dcb9f65->enter($__internal_f8ed7f3830a271bc31bb93cad97152deaf48cd3d41a82624fa50c8899dcb9f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 129
        echo "        ";
        
        $__internal_f8ed7f3830a271bc31bb93cad97152deaf48cd3d41a82624fa50c8899dcb9f65->leave($__internal_f8ed7f3830a271bc31bb93cad97152deaf48cd3d41a82624fa50c8899dcb9f65_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/layoutPerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 129,  231 => 128,  219 => 122,  156 => 11,  154 => 10,  148 => 9,  136 => 7,  117 => 137,  108 => 130,  106 => 128,  97 => 122,  41 => 68,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}Le tapis roulant{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# Bootstap #}*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/* 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* 	<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>*/
/* 	<link href='https://fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/* 	<style>*/
/* 		body {background-color: #FCFF76;}*/
/* 		*/
/* 		.navbar-inverse .navbar-brand, h1 { color : #FFA500; font-family: 'Indie Flower', cursive; }*/
/* 		*/
/* 		.navbar-inverse .navbar-nav li a { color : #FFA500; }*/
/* 		*/
/* 		h1 {text-align: center;*/
/* 			color : #9C0000;*/
/* 			font-family: 'Indie Flower', cursive;*/
/* 		}*/
/* 		*/
/* 		h2 {text-align: center;*/
/* 			font-family: 'Bree Serif', serif;*/
/* 			margin-bottom: 50px;*/
/* 		}*/
/* 			*/
/* 		.navbar {*/
/* 		  margin-bottom: 0;*/
/* 		  border-width: 0;*/
/* 		  border-radius: 0;*/
/* 		  background-color: #AA0000;*/
/* 		  border-color: #AA0000;*/
/* 		  color : #9C0000;*/
/* 		}*/
/* 		*/
/* 		.dropdown-menu {background-color: #080808;}*/
/* */
/* 		.dropdown-menu li a:hover {background-color: #CF8C0B;}*/
/* 		*/
/* 		.contenu {*/
/* 			width:90%;*/
/* 			margin-left:5%;*/
/* 			margin-right:5%;*/
/* 		}*/
/* 		*/
/* 		.col-sm-6 { */
/* 			background-color: #FEFFB0;*/
/* 			}*/
/* 		*/
/* 		*/
/* 		footer {*/
/* 			position: absolute;*/
/* 			bottom:0%;*/
/* 			left:0%;*/
/* 			width: 100%;*/
/* 			text-align: center;*/
/* 		}*/
/* 		*/
/* 	</style>*/
/*   {% endblock %}*/
/*   */
/* */
/* </head>*/
/* */
/* <body>*/
/* 	<header>*/
/* 		*/
/* 		<nav class="navbar navbar-inverse">*/
/* 		  <div class="container-fluid">*/
/* 			<div class="navbar-header">*/
/* 			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>*/
/* 				<span class="icon-bar"></span>                        */
/* 			  </button>*/
/* 			  <a class="navbar-brand" href="#">Le tapis roulant</a>*/
/* 			</div>*/
/* 			<div class="collapse navbar-collapse" id="myNavbar">*/
/* 			  <ul class="nav navbar-nav">*/
/* 				<li class="active"><a href="#">Accueil</a></li>*/
/* 				<li><a href="#">L'association</a></li>*/
/* 				<li class="dropdown">*/
/* 				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ramassage scolaire <span class="caret"></span></a>*/
/* 				  <ul class="dropdown-menu">*/
/* 					<li><a href="#">Trajet</a></li>*/
/* 					<li><a href="#">Horaires</a></li>*/
/* 				  </ul>*/
/* 				</li>*/
/* 				<li class="dropdown">*/
/* 				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adhérents <span class="caret"></span></a>*/
/* 				  <ul class="dropdown-menu">*/
/* 					<li><a href="#">Devenir adhérent</a></li>*/
/* 					<li><a href="#">Liste des adhérents</a></li>*/
/* 				  </ul>*/
/* 				</li>*/
/* 				<li class="dropdown">*/
/* 				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activités <span class="caret"></span></a>*/
/* 				  <ul class="dropdown-menu">*/
/* 					<li><a href="#">Planifier une activité</a></li>*/
/* 					<li><a href="#">Liste des activités</a></li>*/
/* 				  </ul>*/
/* 				</li>*/
/* 				<li><a href="#">Contacts</a></li>*/
/* 			  </ul>*/
/* 			  <ul class="nav navbar-nav navbar-right">*/
/* 				<li><a href="#"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>*/
/* 				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>*/
/* 			  </ul>*/
/* 			</div>*/
/* 		  </div>*/
/* 		</nav>*/
/* 	*/
/* 	*/
/* */
/* 		<h1>{% block titreSite %}Le tapis roulant{% endblock %}</h1>	*/
/* 		*/
/* 	</header>*/
/* 		*/
/* 	*/
/* 	<div class="contenu">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/* 	</div>*/
/* */
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 	<footer class="container-fluid text-center">*/
/* 	  <p><a href="#">FARYM</a> © {{ 'now'|date('Y') }}</p>*/
/* 	</footer>*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* 	*/
/* */
/*   </div>*/
/* </body>*/
/* </html>*/
/* */
