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
        $__internal_447e78f3e4624423fb3ebc181f474b315dd512578ec0f222ced769f63d2f8333 = $this->env->getExtension("native_profiler");
        $__internal_447e78f3e4624423fb3ebc181f474b315dd512578ec0f222ced769f63d2f8333->enter($__internal_447e78f3e4624423fb3ebc181f474b315dd512578ec0f222ced769f63d2f8333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_447e78f3e4624423fb3ebc181f474b315dd512578ec0f222ced769f63d2f8333->leave($__internal_447e78f3e4624423fb3ebc181f474b315dd512578ec0f222ced769f63d2f8333_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0aa91529a857d88a183724a6655eb9ba078c8b5e5abaa1a62114c904895b1c6 = $this->env->getExtension("native_profiler");
        $__internal_e0aa91529a857d88a183724a6655eb9ba078c8b5e5abaa1a62114c904895b1c6->enter($__internal_e0aa91529a857d88a183724a6655eb9ba078c8b5e5abaa1a62114c904895b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e0aa91529a857d88a183724a6655eb9ba078c8b5e5abaa1a62114c904895b1c6->leave($__internal_e0aa91529a857d88a183724a6655eb9ba078c8b5e5abaa1a62114c904895b1c6_prof);

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
