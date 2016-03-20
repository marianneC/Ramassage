<?php

/* CCIRamScoBundle:Yasmina:testpersonne.html.twig */
class __TwigTemplate_220ae3702dbb2186056e57519751b0214058bf4ee18556af2875957ba0ef33e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "CCIRamScoBundle:Yasmina:testpersonne.html.twig", 1);
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
        $__internal_3214708e844269cc7f36b4cad3b1ea77cbd12baf4fbfce97234c452f62fa7e29 = $this->env->getExtension("native_profiler");
        $__internal_3214708e844269cc7f36b4cad3b1ea77cbd12baf4fbfce97234c452f62fa7e29->enter($__internal_3214708e844269cc7f36b4cad3b1ea77cbd12baf4fbfce97234c452f62fa7e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina:testpersonne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3214708e844269cc7f36b4cad3b1ea77cbd12baf4fbfce97234c452f62fa7e29->leave($__internal_3214708e844269cc7f36b4cad3b1ea77cbd12baf4fbfce97234c452f62fa7e29_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_69f730adcb41ae41a24e25f1810a24bff7edaef038f6793959aded187bf972b1 = $this->env->getExtension("native_profiler");
        $__internal_69f730adcb41ae41a24e25f1810a24bff7edaef038f6793959aded187bf972b1->enter($__internal_69f730adcb41ae41a24e25f1810a24bff7edaef038f6793959aded187bf972b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
  Modifier une annonce - ";
        // line 6
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_69f730adcb41ae41a24e25f1810a24bff7edaef038f6793959aded187bf972b1->leave($__internal_69f730adcb41ae41a24e25f1810a24bff7edaef038f6793959aded187bf972b1_prof);

    }

    // line 11
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fd90dade6154ce9c50f69b6af3af8fb93c4cb571f36d7a8e5f04c6e627c9e8da = $this->env->getExtension("native_profiler");
        $__internal_fd90dade6154ce9c50f69b6af3af8fb93c4cb571f36d7a8e5f04c6e627c9e8da->enter($__internal_fd90dade6154ce9c50f69b6af3af8fb93c4cb571f36d7a8e5f04c6e627c9e8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_fd90dade6154ce9c50f69b6af3af8fb93c4cb571f36d7a8e5f04c6e627c9e8da->leave($__internal_fd90dade6154ce9c50f69b6af3af8fb93c4cb571f36d7a8e5f04c6e627c9e8da_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina:testpersonne.html.twig";
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
