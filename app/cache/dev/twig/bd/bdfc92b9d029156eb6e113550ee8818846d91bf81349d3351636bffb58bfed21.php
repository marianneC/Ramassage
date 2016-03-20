<?php

/* CCIRamScoBundle:Yasmina:indexPerso.html.twig */
class __TwigTemplate_b7c9f3be859f425d5e04bc7605df5c2caaf4f45ac1e5c303b1c9a5d5eae16444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle:Yasmina:index.html.twig", "CCIRamScoBundle:Yasmina:indexPerso.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle:Yasmina:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_581312db81d43bda37c430de44b41dfdfa25fedd7733260749a19dc6c9c3637b = $this->env->getExtension("native_profiler");
        $__internal_581312db81d43bda37c430de44b41dfdfa25fedd7733260749a19dc6c9c3637b->enter($__internal_581312db81d43bda37c430de44b41dfdfa25fedd7733260749a19dc6c9c3637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina:indexPerso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581312db81d43bda37c430de44b41dfdfa25fedd7733260749a19dc6c9c3637b->leave($__internal_581312db81d43bda37c430de44b41dfdfa25fedd7733260749a19dc6c9c3637b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbac6bf90cad45213068ff507f5b2b6523cf59aeb1039190cfb0d7faf30b1d91 = $this->env->getExtension("native_profiler");
        $__internal_dbac6bf90cad45213068ff507f5b2b6523cf59aeb1039190cfb0d7faf30b1d91->enter($__internal_dbac6bf90cad45213068ff507f5b2b6523cf59aeb1039190cfb0d7faf30b1d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dbac6bf90cad45213068ff507f5b2b6523cf59aeb1039190cfb0d7faf30b1d91->leave($__internal_dbac6bf90cad45213068ff507f5b2b6523cf59aeb1039190cfb0d7faf30b1d91_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7cd9931bb41ccdd0c307c3adc5cf19ddb686451d167bf511d6471b449f3b838 = $this->env->getExtension("native_profiler");
        $__internal_d7cd9931bb41ccdd0c307c3adc5cf19ddb686451d167bf511d6471b449f3b838->enter($__internal_d7cd9931bb41ccdd0c307c3adc5cf19ddb686451d167bf511d6471b449f3b838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d7cd9931bb41ccdd0c307c3adc5cf19ddb686451d167bf511d6471b449f3b838->leave($__internal_d7cd9931bb41ccdd0c307c3adc5cf19ddb686451d167bf511d6471b449f3b838_prof);

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
/* {% extends "CCIRamScoBundle:Yasmina:index.html.twig" %}*/
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
