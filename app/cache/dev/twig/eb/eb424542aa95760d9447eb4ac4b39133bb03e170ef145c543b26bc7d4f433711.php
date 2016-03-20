<?php

/* @CCIRamSco/Yasmina/indexPerso.html.twig */
class __TwigTemplate_cbdde7d398f1cf52aca26e70ded4145d1e818c9d61a206e0461ff15a895aacae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle:Yasmina:index.html.twig", "@CCIRamSco/Yasmina/indexPerso.html.twig", 1);
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
        $__internal_aa7362e5644fe6425e379b60b4732d09054eacb00fc06a9902e80b458f849bda = $this->env->getExtension("native_profiler");
        $__internal_aa7362e5644fe6425e379b60b4732d09054eacb00fc06a9902e80b458f849bda->enter($__internal_aa7362e5644fe6425e379b60b4732d09054eacb00fc06a9902e80b458f849bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/indexPerso.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa7362e5644fe6425e379b60b4732d09054eacb00fc06a9902e80b458f849bda->leave($__internal_aa7362e5644fe6425e379b60b4732d09054eacb00fc06a9902e80b458f849bda_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bac8d7920044d01c54a74a189b40d75d535ac38aee283bc66d1b96d8a2c39245 = $this->env->getExtension("native_profiler");
        $__internal_bac8d7920044d01c54a74a189b40d75d535ac38aee283bc66d1b96d8a2c39245->enter($__internal_bac8d7920044d01c54a74a189b40d75d535ac38aee283bc66d1b96d8a2c39245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bac8d7920044d01c54a74a189b40d75d535ac38aee283bc66d1b96d8a2c39245->leave($__internal_bac8d7920044d01c54a74a189b40d75d535ac38aee283bc66d1b96d8a2c39245_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a22198cf2bdb6dff0f5aa65ad0458019eae80b57934b7f983ef6a693e9ca4547 = $this->env->getExtension("native_profiler");
        $__internal_a22198cf2bdb6dff0f5aa65ad0458019eae80b57934b7f983ef6a693e9ca4547->enter($__internal_a22198cf2bdb6dff0f5aa65ad0458019eae80b57934b7f983ef6a693e9ca4547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a22198cf2bdb6dff0f5aa65ad0458019eae80b57934b7f983ef6a693e9ca4547->leave($__internal_a22198cf2bdb6dff0f5aa65ad0458019eae80b57934b7f983ef6a693e9ca4547_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/indexPerso.html.twig";
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
