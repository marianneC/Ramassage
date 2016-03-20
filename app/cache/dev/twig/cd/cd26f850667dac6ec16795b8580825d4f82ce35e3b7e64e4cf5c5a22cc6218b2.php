<?php

/* CCIRamScoBundle:Yasmina/Group:list.html.twig */
class __TwigTemplate_b90eb52909c26142b27c37f45af027633769d2d5cbf6fd39468886440788493a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Group:list.html.twig", 1);
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
        $__internal_c6e8a417d34a189e113c24d0baa7c03bf3d50c7c79419795e89179d3d5745319 = $this->env->getExtension("native_profiler");
        $__internal_c6e8a417d34a189e113c24d0baa7c03bf3d50c7c79419795e89179d3d5745319->enter($__internal_c6e8a417d34a189e113c24d0baa7c03bf3d50c7c79419795e89179d3d5745319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e8a417d34a189e113c24d0baa7c03bf3d50c7c79419795e89179d3d5745319->leave($__internal_c6e8a417d34a189e113c24d0baa7c03bf3d50c7c79419795e89179d3d5745319_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a267715a830660373c1ba7f5f1f6579732b542ffe3ff734875b2aa4a4052fff1 = $this->env->getExtension("native_profiler");
        $__internal_a267715a830660373c1ba7f5f1f6579732b542ffe3ff734875b2aa4a4052fff1->enter($__internal_a267715a830660373c1ba7f5f1f6579732b542ffe3ff734875b2aa4a4052fff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "CCIRamScoBundle:Yasmina/Group:list.html.twig", 4)->display($context);
        
        $__internal_a267715a830660373c1ba7f5f1f6579732b542ffe3ff734875b2aa4a4052fff1->leave($__internal_a267715a830660373c1ba7f5f1f6579732b542ffe3ff734875b2aa4a4052fff1_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Group:list.html.twig";
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
