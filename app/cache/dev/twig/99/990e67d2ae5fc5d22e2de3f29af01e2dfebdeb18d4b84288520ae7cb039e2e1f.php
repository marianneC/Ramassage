<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7f6369deb47fce663ba3c2560d19934a1a5c7439ccba641b77a429da8b5eaec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cec6f3797b87970f0f7493943e569d0b5c37f4725a0fe0fdc2a68bd774bc1105 = $this->env->getExtension("native_profiler");
        $__internal_cec6f3797b87970f0f7493943e569d0b5c37f4725a0fe0fdc2a68bd774bc1105->enter($__internal_cec6f3797b87970f0f7493943e569d0b5c37f4725a0fe0fdc2a68bd774bc1105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec6f3797b87970f0f7493943e569d0b5c37f4725a0fe0fdc2a68bd774bc1105->leave($__internal_cec6f3797b87970f0f7493943e569d0b5c37f4725a0fe0fdc2a68bd774bc1105_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48371b63f731e79233cdf02605c22b177b9f130c80be20b30752b2e9b7e3564d = $this->env->getExtension("native_profiler");
        $__internal_48371b63f731e79233cdf02605c22b177b9f130c80be20b30752b2e9b7e3564d->enter($__internal_48371b63f731e79233cdf02605c22b177b9f130c80be20b30752b2e9b7e3564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_48371b63f731e79233cdf02605c22b177b9f130c80be20b30752b2e9b7e3564d->leave($__internal_48371b63f731e79233cdf02605c22b177b9f130c80be20b30752b2e9b7e3564d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
