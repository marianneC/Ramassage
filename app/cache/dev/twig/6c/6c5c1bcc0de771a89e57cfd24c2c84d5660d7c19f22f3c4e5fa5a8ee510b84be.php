<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_96b013638dc8d1ae405978c5525e0113d5971675791e0aeb2bfad6822a7c07c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_838542e96bcef93afd54c82b8140d1ea5298e8656f03297c46adac1815c41a31 = $this->env->getExtension("native_profiler");
        $__internal_838542e96bcef93afd54c82b8140d1ea5298e8656f03297c46adac1815c41a31->enter($__internal_838542e96bcef93afd54c82b8140d1ea5298e8656f03297c46adac1815c41a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838542e96bcef93afd54c82b8140d1ea5298e8656f03297c46adac1815c41a31->leave($__internal_838542e96bcef93afd54c82b8140d1ea5298e8656f03297c46adac1815c41a31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03f4136e061e35dfc166cf1fb2851a6a90a511603364e82eed889377e9dfd695 = $this->env->getExtension("native_profiler");
        $__internal_03f4136e061e35dfc166cf1fb2851a6a90a511603364e82eed889377e9dfd695->enter($__internal_03f4136e061e35dfc166cf1fb2851a6a90a511603364e82eed889377e9dfd695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_03f4136e061e35dfc166cf1fb2851a6a90a511603364e82eed889377e9dfd695->leave($__internal_03f4136e061e35dfc166cf1fb2851a6a90a511603364e82eed889377e9dfd695_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
