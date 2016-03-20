<?php

/* @CCIRamSco/layout.html.twig */
class __TwigTemplate_219b1547458162687534067320377353486114519b278976f061743a774ab8bc extends Twig_Template
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
        $__internal_d1e5705571aee239b83dca0b3a8a12b46562a8225d48b5f93bb42be60e547d20 = $this->env->getExtension("native_profiler");
        $__internal_d1e5705571aee239b83dca0b3a8a12b46562a8225d48b5f93bb42be60e547d20->enter($__internal_d1e5705571aee239b83dca0b3a8a12b46562a8225d48b5f93bb42be60e547d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/layout.html.twig"));

        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d1e5705571aee239b83dca0b3a8a12b46562a8225d48b5f93bb42be60e547d20->leave($__internal_d1e5705571aee239b83dca0b3a8a12b46562a8225d48b5f93bb42be60e547d20_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_30e19ac0867b422482b2f98659f003d2100fe2ad2144b14f31684decb1fd03ac = $this->env->getExtension("native_profiler");
        $__internal_30e19ac0867b422482b2f98659f003d2100fe2ad2144b14f31684decb1fd03ac->enter($__internal_30e19ac0867b422482b2f98659f003d2100fe2ad2144b14f31684decb1fd03ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le tapis roulant";
        
        $__internal_30e19ac0867b422482b2f98659f003d2100fe2ad2144b14f31684decb1fd03ac->leave($__internal_30e19ac0867b422482b2f98659f003d2100fe2ad2144b14f31684decb1fd03ac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_60431a24a463625f8f318301744b6280ed3d06f2a23b1156d82d9a7c2712132f = $this->env->getExtension("native_profiler");
        $__internal_60431a24a463625f8f318301744b6280ed3d06f2a23b1156d82d9a7c2712132f->enter($__internal_60431a24a463625f8f318301744b6280ed3d06f2a23b1156d82d9a7c2712132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_60431a24a463625f8f318301744b6280ed3d06f2a23b1156d82d9a7c2712132f->leave($__internal_60431a24a463625f8f318301744b6280ed3d06f2a23b1156d82d9a7c2712132f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8af8fb7ab19cc141cb3dce205f1fa2e0831e6c1727acf5f0ada426a71104560c = $this->env->getExtension("native_profiler");
        $__internal_8af8fb7ab19cc141cb3dce205f1fa2e0831e6c1727acf5f0ada426a71104560c->enter($__internal_8af8fb7ab19cc141cb3dce205f1fa2e0831e6c1727acf5f0ada426a71104560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
\t\t\t  <a class=\"navbar-brand\" href=\"accueil\">Le tapis roulant</a>
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
\t\t\t\t  <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"/profile\">Adhérents <span class=\"caret\"></span></a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"/register\">Devenir adhérent</a></li>
\t\t\t\t\t<li><a href=\"/profile\">Accès espace membre</a></li>
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
\t\t\t\t<li><a href=\"/register\"><span class=\"glyphicon glyphicon-user\"></span> S'inscrire</a></li>
\t\t\t\t<li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a></li>
\t\t\t  </ul>
\t\t\t</div>
\t\t  </div>
\t\t</nav>
\t
\t

\t\t<h1>";
        // line 117
        $this->displayBlock('titreSite', $context, $blocks);
        echo "</h1>\t
\t\t
\t</header>
\t\t
\t
\t<div class=\"contenu\">
        ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "\t</div>

\t\t
\t\t
\t\t
\t\t
\t<footer class=\"container-fluid text-center\">
\t  <p><a href=\"#\">FARYM</a> © ";
        // line 132
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
        
        $__internal_8af8fb7ab19cc141cb3dce205f1fa2e0831e6c1727acf5f0ada426a71104560c->leave($__internal_8af8fb7ab19cc141cb3dce205f1fa2e0831e6c1727acf5f0ada426a71104560c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59fc75b95f5cea30482c186bb9cd2b3097536eee2ea06c015102b160f6223c19 = $this->env->getExtension("native_profiler");
        $__internal_59fc75b95f5cea30482c186bb9cd2b3097536eee2ea06c015102b160f6223c19->enter($__internal_59fc75b95f5cea30482c186bb9cd2b3097536eee2ea06c015102b160f6223c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_59fc75b95f5cea30482c186bb9cd2b3097536eee2ea06c015102b160f6223c19->leave($__internal_59fc75b95f5cea30482c186bb9cd2b3097536eee2ea06c015102b160f6223c19_prof);

    }

    // line 117
    public function block_titreSite($context, array $blocks = array())
    {
        $__internal_845870f99b2c630ab51527b4c16babf27b7bfcaf3f9159fc7acd473858edd37b = $this->env->getExtension("native_profiler");
        $__internal_845870f99b2c630ab51527b4c16babf27b7bfcaf3f9159fc7acd473858edd37b->enter($__internal_845870f99b2c630ab51527b4c16babf27b7bfcaf3f9159fc7acd473858edd37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titreSite"));

        echo "Le tapis roulant";
        
        $__internal_845870f99b2c630ab51527b4c16babf27b7bfcaf3f9159fc7acd473858edd37b->leave($__internal_845870f99b2c630ab51527b4c16babf27b7bfcaf3f9159fc7acd473858edd37b_prof);

    }

    // line 123
    public function block_body($context, array $blocks = array())
    {
        $__internal_31d66c0b7c8bfb6f7ba5ec1d06bcc94183bf785d681178fc22b09e45c83f5ac8 = $this->env->getExtension("native_profiler");
        $__internal_31d66c0b7c8bfb6f7ba5ec1d06bcc94183bf785d681178fc22b09e45c83f5ac8->enter($__internal_31d66c0b7c8bfb6f7ba5ec1d06bcc94183bf785d681178fc22b09e45c83f5ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "        ";
        
        $__internal_31d66c0b7c8bfb6f7ba5ec1d06bcc94183bf785d681178fc22b09e45c83f5ac8->leave($__internal_31d66c0b7c8bfb6f7ba5ec1d06bcc94183bf785d681178fc22b09e45c83f5ac8_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  256 => 124,  250 => 123,  238 => 117,  173 => 7,  167 => 6,  150 => 132,  141 => 125,  139 => 123,  130 => 117,  77 => 66,  75 => 6,  72 => 5,  59 => 4,  53 => 3,  41 => 1,  34 => 3,  28 => 1,);
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
/* 			  <a class="navbar-brand" href="accueil">Le tapis roulant</a>*/
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
/* 				  <a class="dropdown-toggle" data-toggle="dropdown" href="/profile">Adhérents <span class="caret"></span></a>*/
/* 				  <ul class="dropdown-menu">*/
/* 					<li><a href="/register">Devenir adhérent</a></li>*/
/* 					<li><a href="/profile">Accès espace membre</a></li>*/
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
/* 				<li><a href="/register"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>*/
/* 				<li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>*/
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
