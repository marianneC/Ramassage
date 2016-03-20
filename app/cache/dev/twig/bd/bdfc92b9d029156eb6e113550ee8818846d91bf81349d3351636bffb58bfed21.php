<?php

/* CCIRamScoBundle:Yasmina:indexPerso.html.twig */
class __TwigTemplate_b7c9f3be859f425d5e04bc7605df5c2caaf4f45ac1e5c303b1c9a5d5eae16444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "CCIRamScoBundle:Yasmina:indexPerso.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd3aa31e494674258edc1dccb2eeff4c8e11298807f21e4172a4524264dd7e63 = $this->env->getExtension("native_profiler");
        $__internal_dd3aa31e494674258edc1dccb2eeff4c8e11298807f21e4172a4524264dd7e63->enter($__internal_dd3aa31e494674258edc1dccb2eeff4c8e11298807f21e4172a4524264dd7e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina:indexPerso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3aa31e494674258edc1dccb2eeff4c8e11298807f21e4172a4524264dd7e63->leave($__internal_dd3aa31e494674258edc1dccb2eeff4c8e11298807f21e4172a4524264dd7e63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47f191f560a7ba302fd84599d24bdf6d909792807cd45e2860cb807c81f5f65b = $this->env->getExtension("native_profiler");
        $__internal_47f191f560a7ba302fd84599d24bdf6d909792807cd45e2860cb807c81f5f65b->enter($__internal_47f191f560a7ba302fd84599d24bdf6d909792807cd45e2860cb807c81f5f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47f191f560a7ba302fd84599d24bdf6d909792807cd45e2860cb807c81f5f65b->leave($__internal_47f191f560a7ba302fd84599d24bdf6d909792807cd45e2860cb807c81f5f65b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e2a103bc45a35a5d33d010482549ca959bfa1feb025b86102c65591030dd38d = $this->env->getExtension("native_profiler");
        $__internal_4e2a103bc45a35a5d33d010482549ca959bfa1feb025b86102c65591030dd38d->enter($__internal_4e2a103bc45a35a5d33d010482549ca959bfa1feb025b86102c65591030dd38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

\t <div class=\"row\">
\t\t<div class=\"col-sm-6 info\">
\t\t\t<h2>Infos</h2>
\t\t\t<div>
\t\t\t";
        // line 24
        echo "\t\t\t\t
\t\t\t\t";
        // line 26
        echo "\t\t\t\t<ul>
\t\t\t\t\t<li>Première info : ce site c'est trop de la balle !</li>
\t\t\t\t\t<li>Deuxième info : c'est super chiant à prendre en main</li>
\t\t\t\t\t<li>Troisième info : Je galère sur des trucs à la con...</li>
\t\t\t\t\t<li>Quatième info : FARYM c'est notre nouveau nom de crew ;)</li>
\t\t\t\t</ul> 
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t\t
\t\t
\t\t
\t\t<div class=\"col-sm-6 actu\">
\t\t\t<h2>Actualités</h2>
\t\t\t<div>
\t\t\t";
        // line 50
        echo "\t\t\t\t
\t\t\t\t";
        // line 52
        echo "\t\t\t\t<ul>
\t\t\t\t\t<li>Le 19/03/16 : Demain RDV chez Yasmina à 14h30</lih>
\t\t\t\t\t<li>Le 19/03/16 : Qui m'a piqué ma carotte ?</li>
\t\t\t\t\t<li>Le 18/03/16 : Rando roller pour les braves</li>
\t\t\t\t\t<li>Le 17/03/16 : Cours de Symfony annulé</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t
\t<p><img src=\"images/image_bus.jpg\" />image de bus</p>

 

";
        
        $__internal_4e2a103bc45a35a5d33d010482549ca959bfa1feb025b86102c65591030dd38d->leave($__internal_4e2a103bc45a35a5d33d010482549ca959bfa1feb025b86102c65591030dd38d_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina:indexPerso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 52,  86 => 50,  68 => 26,  65 => 24,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle::layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block title %}*/
/* 	Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* 	 <div class="row">*/
/* 		<div class="col-sm-6 info">*/
/* 			<h2>Infos</h2>*/
/* 			<div>*/
/* 			{# Liste des infos*/
/* 				<ul>*/
/* 				  {% for info in liste_infos %}*/
/* 					<li>{{ info.item }}</li>*/
/* 				  {% else %}*/
/* 					<li>Pas d'info trouvé.</li>*/
/* 				  {% endfor %}*/
/* 				</ul> #}*/
/* 				*/
/* 				{# Exemple #}*/
/* 				<ul>*/
/* 					<li>Première info : ce site c'est trop de la balle !</li>*/
/* 					<li>Deuxième info : c'est super chiant à prendre en main</li>*/
/* 					<li>Troisième info : Je galère sur des trucs à la con...</li>*/
/* 					<li>Quatième info : FARYM c'est notre nouveau nom de crew ;)</li>*/
/* 				</ul> */
/* 				*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		*/
/* 		*/
/* 		*/
/* 		<div class="col-sm-6 actu">*/
/* 			<h2>Actualités</h2>*/
/* 			<div>*/
/* 			{# Liste des actualités */
/* 				<ul>*/
/* 				  {% for actu in liste_actus %}*/
/* 					<li>{{ actu.item }}</li>*/
/* 				  {% else %}*/
/* 					<li>Pas d'actualité trouvé.</li>*/
/* 				  {% endfor %}*/
/* 				</ul> #}*/
/* 				*/
/* 				{# Exemple #}*/
/* 				<ul>*/
/* 					<li>Le 19/03/16 : Demain RDV chez Yasmina à 14h30</lih>*/
/* 					<li>Le 19/03/16 : Qui m'a piqué ma carotte ?</li>*/
/* 					<li>Le 18/03/16 : Rando roller pour les braves</li>*/
/* 					<li>Le 17/03/16 : Cours de Symfony annulé</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>		*/
/* 	</div>*/
/* 	*/
/* 	<p><img src="images/image_bus.jpg" />image de bus</p>*/
/* */
/*  */
/* */
/* {% endblock %}*/
/* */
