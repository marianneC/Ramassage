<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_09cdb293ae80519cec662dc7fd90eead0494794fa355f97eb009edeb8a4218c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_2a71412e8daab9c731186d7d0ec1b87193e75753294e7b8f3882b79596eb5533 = $this->env->getExtension("native_profiler");
        $__internal_2a71412e8daab9c731186d7d0ec1b87193e75753294e7b8f3882b79596eb5533->enter($__internal_2a71412e8daab9c731186d7d0ec1b87193e75753294e7b8f3882b79596eb5533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a71412e8daab9c731186d7d0ec1b87193e75753294e7b8f3882b79596eb5533->leave($__internal_2a71412e8daab9c731186d7d0ec1b87193e75753294e7b8f3882b79596eb5533_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b20c0320ea252d8653b1f0d0f916130fd960f40d122bd7e8634217260a9f8a7f = $this->env->getExtension("native_profiler");
        $__internal_b20c0320ea252d8653b1f0d0f916130fd960f40d122bd7e8634217260a9f8a7f->enter($__internal_b20c0320ea252d8653b1f0d0f916130fd960f40d122bd7e8634217260a9f8a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_b20c0320ea252d8653b1f0d0f916130fd960f40d122bd7e8634217260a9f8a7f->leave($__internal_b20c0320ea252d8653b1f0d0f916130fd960f40d122bd7e8634217260a9f8a7f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
