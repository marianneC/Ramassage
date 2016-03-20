<?php

/* CCIRamScoBundle::layout.html.twig */
class __TwigTemplate_eb8ed3d21270fe1597a99da12b316964f86dab80c3c6859221bbeb964ff4f081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titreSite' => array($this, 'block_titreSite'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_191930978827d61d774f23ce3f63fe0c0e136c9cef47f71b50db4634a8dd7ae3 = $this->env->getExtension("native_profiler");
        $__internal_191930978827d61d774f23ce3f63fe0c0e136c9cef47f71b50db4634a8dd7ae3->enter($__internal_191930978827d61d774f23ce3f63fe0c0e136c9cef47f71b50db4634a8dd7ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle::layout.html.twig"));

        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_191930978827d61d774f23ce3f63fe0c0e136c9cef47f71b50db4634a8dd7ae3->leave($__internal_191930978827d61d774f23ce3f63fe0c0e136c9cef47f71b50db4634a8dd7ae3_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_630d4c488a222379b00ecd10c52abaa26335f34fd2fccfb902afadbbd7fa9b73 = $this->env->getExtension("native_profiler");
        $__internal_630d4c488a222379b00ecd10c52abaa26335f34fd2fccfb902afadbbd7fa9b73->enter($__internal_630d4c488a222379b00ecd10c52abaa26335f34fd2fccfb902afadbbd7fa9b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le tapis roulant";
        
        $__internal_630d4c488a222379b00ecd10c52abaa26335f34fd2fccfb902afadbbd7fa9b73->leave($__internal_630d4c488a222379b00ecd10c52abaa26335f34fd2fccfb902afadbbd7fa9b73_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1b0033cd01b07f169909b4358c02f5bd2c31710053ff47ddf43d450d61842fa = $this->env->getExtension("native_profiler");
        $__internal_f1b0033cd01b07f169909b4358c02f5bd2c31710053ff47ddf43d450d61842fa->enter($__internal_f1b0033cd01b07f169909b4358c02f5bd2c31710053ff47ddf43d450d61842fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_f1b0033cd01b07f169909b4358c02f5bd2c31710053ff47ddf43d450d61842fa->leave($__internal_f1b0033cd01b07f169909b4358c02f5bd2c31710053ff47ddf43d450d61842fa_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f882f235295a6fdd7d8a454060a458b8386dca762dddd6dc9f68a6a17ede54e3 = $this->env->getExtension("native_profiler");
        $__internal_f882f235295a6fdd7d8a454060a458b8386dca762dddd6dc9f68a6a17ede54e3->enter($__internal_f882f235295a6fdd7d8a454060a458b8386dca762dddd6dc9f68a6a17ede54e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t\t
  ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 66
        echo "  
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
        // line 116
        $this->displayBlock('titreSite', $context, $blocks);
        echo "</h1>\t
\t\t
\t</header>
\t\t
\t
\t<div class=\"contenu\">
        ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "\t</div>

\t\t
\t\t
\t\t
\t\t
\t<footer class=\"container-fluid text-center\">
\t  <p><a href=\"#\">FARYM</a> © ";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
\t</footer>
\t
\t
\t
\t
\t

  </div>
";
        
        $__internal_f882f235295a6fdd7d8a454060a458b8386dca762dddd6dc9f68a6a17ede54e3->leave($__internal_f882f235295a6fdd7d8a454060a458b8386dca762dddd6dc9f68a6a17ede54e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd65cd82590cfd0565a20f94166d1141ad2e3f3e0947a0b296a954a119e3fda7 = $this->env->getExtension("native_profiler");
        $__internal_cd65cd82590cfd0565a20f94166d1141ad2e3f3e0947a0b296a954a119e3fda7->enter($__internal_cd65cd82590cfd0565a20f94166d1141ad2e3f3e0947a0b296a954a119e3fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
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
        
        $__internal_cd65cd82590cfd0565a20f94166d1141ad2e3f3e0947a0b296a954a119e3fda7->leave($__internal_cd65cd82590cfd0565a20f94166d1141ad2e3f3e0947a0b296a954a119e3fda7_prof);

    }

    // line 116
    public function block_titreSite($context, array $blocks = array())
    {
        $__internal_47d8834e99e5acad578e4a51bed6c558911694c3c339882fffe0d50183c96681 = $this->env->getExtension("native_profiler");
        $__internal_47d8834e99e5acad578e4a51bed6c558911694c3c339882fffe0d50183c96681->enter($__internal_47d8834e99e5acad578e4a51bed6c558911694c3c339882fffe0d50183c96681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titreSite"));

        echo "Le tapis roulant";
        
        $__internal_47d8834e99e5acad578e4a51bed6c558911694c3c339882fffe0d50183c96681->leave($__internal_47d8834e99e5acad578e4a51bed6c558911694c3c339882fffe0d50183c96681_prof);

    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da1e9b74cb6e284e18967973ce415b5a733f8cafea06e8d2c9f22aca7148881 = $this->env->getExtension("native_profiler");
        $__internal_7da1e9b74cb6e284e18967973ce415b5a733f8cafea06e8d2c9f22aca7148881->enter($__internal_7da1e9b74cb6e284e18967973ce415b5a733f8cafea06e8d2c9f22aca7148881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "        ";
        
        $__internal_7da1e9b74cb6e284e18967973ce415b5a733f8cafea06e8d2c9f22aca7148881->leave($__internal_7da1e9b74cb6e284e18967973ce415b5a733f8cafea06e8d2c9f22aca7148881_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 123,  249 => 122,  237 => 116,  172 => 7,  166 => 6,  149 => 131,  140 => 124,  138 => 122,  129 => 116,  77 => 66,  75 => 6,  72 => 5,  59 => 4,  53 => 3,  41 => 1,  34 => 3,  28 => 1,);
    }
}
/* <title>{% block title %}Le tapis roulant{% endblock %}</title>*/
/* */
/* {% block content %}*/
/*     {% block fos_user_content %}*/
/* 		*/
/*   {% block stylesheets %}*/
/* */
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
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
/* {% endblock %}*/
/* {% endblock %}*/
/* */
