<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a9bef1e122644b17e2f47dfecffa7b66c8a9b89a01e23963bfc64a23dd078749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_80658f1cf119feedc3378195d98c0e217a94c7ff1a80bcef85034fc815a177b2 = $this->env->getExtension("native_profiler");
        $__internal_80658f1cf119feedc3378195d98c0e217a94c7ff1a80bcef85034fc815a177b2->enter($__internal_80658f1cf119feedc3378195d98c0e217a94c7ff1a80bcef85034fc815a177b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80658f1cf119feedc3378195d98c0e217a94c7ff1a80bcef85034fc815a177b2->leave($__internal_80658f1cf119feedc3378195d98c0e217a94c7ff1a80bcef85034fc815a177b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52e8334b171788d6b30a134b226c57338e13bac6610022edf54fd60c19f9cdf4 = $this->env->getExtension("native_profiler");
        $__internal_52e8334b171788d6b30a134b226c57338e13bac6610022edf54fd60c19f9cdf4->enter($__internal_52e8334b171788d6b30a134b226c57338e13bac6610022edf54fd60c19f9cdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_52e8334b171788d6b30a134b226c57338e13bac6610022edf54fd60c19f9cdf4->leave($__internal_52e8334b171788d6b30a134b226c57338e13bac6610022edf54fd60c19f9cdf4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
