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
        $__internal_d2f8c57dc09195d3fbd8e4786030fc777995e124cf2d3b2d5e7111f1695cceb5 = $this->env->getExtension("native_profiler");
        $__internal_d2f8c57dc09195d3fbd8e4786030fc777995e124cf2d3b2d5e7111f1695cceb5->enter($__internal_d2f8c57dc09195d3fbd8e4786030fc777995e124cf2d3b2d5e7111f1695cceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f8c57dc09195d3fbd8e4786030fc777995e124cf2d3b2d5e7111f1695cceb5->leave($__internal_d2f8c57dc09195d3fbd8e4786030fc777995e124cf2d3b2d5e7111f1695cceb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0289262403634d3e08b1496535f9c4cd05e82fe4ddbbad9f2b99fddb6b81cd7 = $this->env->getExtension("native_profiler");
        $__internal_b0289262403634d3e08b1496535f9c4cd05e82fe4ddbbad9f2b99fddb6b81cd7->enter($__internal_b0289262403634d3e08b1496535f9c4cd05e82fe4ddbbad9f2b99fddb6b81cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b0289262403634d3e08b1496535f9c4cd05e82fe4ddbbad9f2b99fddb6b81cd7->leave($__internal_b0289262403634d3e08b1496535f9c4cd05e82fe4ddbbad9f2b99fddb6b81cd7_prof);

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
