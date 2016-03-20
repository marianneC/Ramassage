<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7331baac42d7e28a23e02e6ff7c497813764514f66c96ba83cdf40e63efaf364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40c01dd0921b2e26f296e31eb474bd62c4ef86841168eb904cbdda3bfdbf1041 = $this->env->getExtension("native_profiler");
        $__internal_40c01dd0921b2e26f296e31eb474bd62c4ef86841168eb904cbdda3bfdbf1041->enter($__internal_40c01dd0921b2e26f296e31eb474bd62c4ef86841168eb904cbdda3bfdbf1041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c01dd0921b2e26f296e31eb474bd62c4ef86841168eb904cbdda3bfdbf1041->leave($__internal_40c01dd0921b2e26f296e31eb474bd62c4ef86841168eb904cbdda3bfdbf1041_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34e1a164ef57245fb56f80dc27cc6a5ce257033f65866706dd64248bf3e10326 = $this->env->getExtension("native_profiler");
        $__internal_34e1a164ef57245fb56f80dc27cc6a5ce257033f65866706dd64248bf3e10326->enter($__internal_34e1a164ef57245fb56f80dc27cc6a5ce257033f65866706dd64248bf3e10326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_34e1a164ef57245fb56f80dc27cc6a5ce257033f65866706dd64248bf3e10326->leave($__internal_34e1a164ef57245fb56f80dc27cc6a5ce257033f65866706dd64248bf3e10326_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
