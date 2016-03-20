<?php

/* @CCIRamSco/Yasmina/Group/show.html.twig */
class __TwigTemplate_298f3a7002f38e3928092d49ab8c234210cd45b7e71656bc9bc1fcde8f2bca5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Group/show.html.twig", 1);
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
        $__internal_8f1c09f1895e5d36cd0ade945b541f17cb2cb0e527577e4c81d5f1e9ed48563b = $this->env->getExtension("native_profiler");
        $__internal_8f1c09f1895e5d36cd0ade945b541f17cb2cb0e527577e4c81d5f1e9ed48563b->enter($__internal_8f1c09f1895e5d36cd0ade945b541f17cb2cb0e527577e4c81d5f1e9ed48563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1c09f1895e5d36cd0ade945b541f17cb2cb0e527577e4c81d5f1e9ed48563b->leave($__internal_8f1c09f1895e5d36cd0ade945b541f17cb2cb0e527577e4c81d5f1e9ed48563b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01e60cc4d1f64b31c2939e00eb9ff965b4b7bf6e59f1a948917c577287cad880 = $this->env->getExtension("native_profiler");
        $__internal_01e60cc4d1f64b31c2939e00eb9ff965b4b7bf6e59f1a948917c577287cad880->enter($__internal_01e60cc4d1f64b31c2939e00eb9ff965b4b7bf6e59f1a948917c577287cad880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@CCIRamSco/Yasmina/Group/show.html.twig", 4)->display($context);
        
        $__internal_01e60cc4d1f64b31c2939e00eb9ff965b4b7bf6e59f1a948917c577287cad880->leave($__internal_01e60cc4d1f64b31c2939e00eb9ff965b4b7bf6e59f1a948917c577287cad880_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
