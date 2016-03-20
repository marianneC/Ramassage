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
        $__internal_5aa4128e2a482d77f36faf569470876f5d63d848e317a437869812b421e94607 = $this->env->getExtension("native_profiler");
        $__internal_5aa4128e2a482d77f36faf569470876f5d63d848e317a437869812b421e94607->enter($__internal_5aa4128e2a482d77f36faf569470876f5d63d848e317a437869812b421e94607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa4128e2a482d77f36faf569470876f5d63d848e317a437869812b421e94607->leave($__internal_5aa4128e2a482d77f36faf569470876f5d63d848e317a437869812b421e94607_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eeabec9bff6f9b8b04ad37e76a6dad72286019ee9d513de382267a8e230c67bf = $this->env->getExtension("native_profiler");
        $__internal_eeabec9bff6f9b8b04ad37e76a6dad72286019ee9d513de382267a8e230c67bf->enter($__internal_eeabec9bff6f9b8b04ad37e76a6dad72286019ee9d513de382267a8e230c67bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_eeabec9bff6f9b8b04ad37e76a6dad72286019ee9d513de382267a8e230c67bf->leave($__internal_eeabec9bff6f9b8b04ad37e76a6dad72286019ee9d513de382267a8e230c67bf_prof);

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
