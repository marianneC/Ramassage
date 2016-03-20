<?php

/* @CCIRamSco/Yasmina/testpersonne.html.twig */
class __TwigTemplate_e0a6a2cdb9a084294b6970ad14c6ae009ea2c5e90507ad4e86959c11a1be99ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@CCIRamSco/Yasmina/testpersonne.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5a9f99aeaf08b9ad19bbb6a575c16f6ca24f24bd1cb0534902313d28f4af8c2 = $this->env->getExtension("native_profiler");
        $__internal_b5a9f99aeaf08b9ad19bbb6a575c16f6ca24f24bd1cb0534902313d28f4af8c2->enter($__internal_b5a9f99aeaf08b9ad19bbb6a575c16f6ca24f24bd1cb0534902313d28f4af8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/testpersonne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5a9f99aeaf08b9ad19bbb6a575c16f6ca24f24bd1cb0534902313d28f4af8c2->leave($__internal_b5a9f99aeaf08b9ad19bbb6a575c16f6ca24f24bd1cb0534902313d28f4af8c2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d0e55ddfbb61d166b30bc5a9f468e83fa18b59f9eeaa1171c1751a11f9ee0e5 = $this->env->getExtension("native_profiler");
        $__internal_8d0e55ddfbb61d166b30bc5a9f468e83fa18b59f9eeaa1171c1751a11f9ee0e5->enter($__internal_8d0e55ddfbb61d166b30bc5a9f468e83fa18b59f9eeaa1171c1751a11f9ee0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Modifier une annonce - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_8d0e55ddfbb61d166b30bc5a9f468e83fa18b59f9eeaa1171c1751a11f9ee0e5->leave($__internal_8d0e55ddfbb61d166b30bc5a9f468e83fa18b59f9eeaa1171c1751a11f9ee0e5_prof);

    }

    // line 11
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fa733c059519e37d49d1947eb3fe0ed440a1417f1371e505ae7f440a497424ab = $this->env->getExtension("native_profiler");
        $__internal_fa733c059519e37d49d1947eb3fe0ed440a1417f1371e505ae7f440a497424ab->enter($__internal_fa733c059519e37d49d1947eb3fe0ed440a1417f1371e505ae7f440a497424ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 12
        echo "

  <h2>Modifier une annonce</h2>


  ";
        // line 17
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "


  <p>

    Vous éditez une annonce déjà existante, merci de ne pas changer

    l'esprit générale de l'annonce déjà publiée.

  </p>


  <p>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">

      <i class=\"glyphicon glyphicon-chevron-left\"></i>

      Retour à l'annonce

    </a>

  </p>


";
        
        $__internal_fa733c059519e37d49d1947eb3fe0ed440a1417f1371e505ae7f440a497424ab->leave($__internal_fa733c059519e37d49d1947eb3fe0ed440a1417f1371e505ae7f440a497424ab_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/testpersonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  67 => 17,  60 => 12,  54 => 11,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/* */
/*   Modifier une annonce - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block ocplatform_body %}*/
/* */
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* */
/*   <p>*/
/* */
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/* */
/*     l'esprit générale de l'annonce déjà publiée.*/
/* */
/*   </p>*/
/* */
/* */
/*   <p>*/
/* */
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* */
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/* */
/*       Retour à l'annonce*/
/* */
/*     </a>*/
/* */
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
