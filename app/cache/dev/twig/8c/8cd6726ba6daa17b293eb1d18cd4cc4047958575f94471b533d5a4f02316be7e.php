<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8922498e250329dfe90db404293ca86649b4d3b08bfe2fa692b979d3bd08539b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9f902febc0ed076e4b2c3ef99e397a2427845e3193844e20479a73cff9133e9b = $this->env->getExtension("native_profiler");
        $__internal_9f902febc0ed076e4b2c3ef99e397a2427845e3193844e20479a73cff9133e9b->enter($__internal_9f902febc0ed076e4b2c3ef99e397a2427845e3193844e20479a73cff9133e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f902febc0ed076e4b2c3ef99e397a2427845e3193844e20479a73cff9133e9b->leave($__internal_9f902febc0ed076e4b2c3ef99e397a2427845e3193844e20479a73cff9133e9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee817e0f17f7b4c602b6e04fcb8aa20d38211b4d05eb098043bc219420e9af1e = $this->env->getExtension("native_profiler");
        $__internal_ee817e0f17f7b4c602b6e04fcb8aa20d38211b4d05eb098043bc219420e9af1e->enter($__internal_ee817e0f17f7b4c602b6e04fcb8aa20d38211b4d05eb098043bc219420e9af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ee817e0f17f7b4c602b6e04fcb8aa20d38211b4d05eb098043bc219420e9af1e->leave($__internal_ee817e0f17f7b4c602b6e04fcb8aa20d38211b4d05eb098043bc219420e9af1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
