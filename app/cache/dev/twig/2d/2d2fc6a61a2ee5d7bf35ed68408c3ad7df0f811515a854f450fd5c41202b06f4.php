<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_6a6c519ef686953b6397acbf74740508f90268b159304acd36118dc561c0c6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_37ebb76a7ebb5834ae6a43fc982da2fbc4db45164375cdf6afeae33d7763b47f = $this->env->getExtension("native_profiler");
        $__internal_37ebb76a7ebb5834ae6a43fc982da2fbc4db45164375cdf6afeae33d7763b47f->enter($__internal_37ebb76a7ebb5834ae6a43fc982da2fbc4db45164375cdf6afeae33d7763b47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37ebb76a7ebb5834ae6a43fc982da2fbc4db45164375cdf6afeae33d7763b47f->leave($__internal_37ebb76a7ebb5834ae6a43fc982da2fbc4db45164375cdf6afeae33d7763b47f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_400043c80cac3575023f90db5b36205c199b0d5669329afb1a40ad28be29074e = $this->env->getExtension("native_profiler");
        $__internal_400043c80cac3575023f90db5b36205c199b0d5669329afb1a40ad28be29074e->enter($__internal_400043c80cac3575023f90db5b36205c199b0d5669329afb1a40ad28be29074e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_400043c80cac3575023f90db5b36205c199b0d5669329afb1a40ad28be29074e->leave($__internal_400043c80cac3575023f90db5b36205c199b0d5669329afb1a40ad28be29074e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
