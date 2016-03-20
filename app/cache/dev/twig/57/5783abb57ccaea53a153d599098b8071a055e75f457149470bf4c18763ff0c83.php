<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_a76c6d12c0a2c348ca032ddef1f291b1de084e56c1d63e20072dce1f75dfc5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_392a0deab7f5b305f658176ba2114fc00d438a6dfa5002af9ec33606392c5124 = $this->env->getExtension("native_profiler");
        $__internal_392a0deab7f5b305f658176ba2114fc00d438a6dfa5002af9ec33606392c5124->enter($__internal_392a0deab7f5b305f658176ba2114fc00d438a6dfa5002af9ec33606392c5124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392a0deab7f5b305f658176ba2114fc00d438a6dfa5002af9ec33606392c5124->leave($__internal_392a0deab7f5b305f658176ba2114fc00d438a6dfa5002af9ec33606392c5124_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cab0c23dbd1c7a48f05a7db58b8c3a12d9dfbc379c4868393b845ee5de6adb03 = $this->env->getExtension("native_profiler");
        $__internal_cab0c23dbd1c7a48f05a7db58b8c3a12d9dfbc379c4868393b845ee5de6adb03->enter($__internal_cab0c23dbd1c7a48f05a7db58b8c3a12d9dfbc379c4868393b845ee5de6adb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_cab0c23dbd1c7a48f05a7db58b8c3a12d9dfbc379c4868393b845ee5de6adb03->leave($__internal_cab0c23dbd1c7a48f05a7db58b8c3a12d9dfbc379c4868393b845ee5de6adb03_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
