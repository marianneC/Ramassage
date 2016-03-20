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
        $__internal_71cb044b31d6bfcf64f84e2855da7d9f6fd7bda3046438cfd5f645c61b566963 = $this->env->getExtension("native_profiler");
        $__internal_71cb044b31d6bfcf64f84e2855da7d9f6fd7bda3046438cfd5f645c61b566963->enter($__internal_71cb044b31d6bfcf64f84e2855da7d9f6fd7bda3046438cfd5f645c61b566963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/testpersonne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71cb044b31d6bfcf64f84e2855da7d9f6fd7bda3046438cfd5f645c61b566963->leave($__internal_71cb044b31d6bfcf64f84e2855da7d9f6fd7bda3046438cfd5f645c61b566963_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b7d54c20153e0d5a50f96a6675aec9b3e767c4f7d791bed872e93f262504ab6 = $this->env->getExtension("native_profiler");
        $__internal_6b7d54c20153e0d5a50f96a6675aec9b3e767c4f7d791bed872e93f262504ab6->enter($__internal_6b7d54c20153e0d5a50f96a6675aec9b3e767c4f7d791bed872e93f262504ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Modifier une annonce - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_6b7d54c20153e0d5a50f96a6675aec9b3e767c4f7d791bed872e93f262504ab6->leave($__internal_6b7d54c20153e0d5a50f96a6675aec9b3e767c4f7d791bed872e93f262504ab6_prof);

    }

    // line 11
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cf42416d2e71bdf19a33b6df8e84766e7a77bbaf9f40ea94bb51f08920b0e71f = $this->env->getExtension("native_profiler");
        $__internal_cf42416d2e71bdf19a33b6df8e84766e7a77bbaf9f40ea94bb51f08920b0e71f->enter($__internal_cf42416d2e71bdf19a33b6df8e84766e7a77bbaf9f40ea94bb51f08920b0e71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_cf42416d2e71bdf19a33b6df8e84766e7a77bbaf9f40ea94bb51f08920b0e71f->leave($__internal_cf42416d2e71bdf19a33b6df8e84766e7a77bbaf9f40ea94bb51f08920b0e71f_prof);

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
