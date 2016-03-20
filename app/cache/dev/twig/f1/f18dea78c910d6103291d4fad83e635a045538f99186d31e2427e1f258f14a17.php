<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e26e0bda137a9e4e8ef3681841b0172307d585becaf024e587dbc50ec383854c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_e8ad94b24001007e8c2686376248bdb93b6c415ca12176ea205181a90b4738b7 = $this->env->getExtension("native_profiler");
        $__internal_e8ad94b24001007e8c2686376248bdb93b6c415ca12176ea205181a90b4738b7->enter($__internal_e8ad94b24001007e8c2686376248bdb93b6c415ca12176ea205181a90b4738b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8ad94b24001007e8c2686376248bdb93b6c415ca12176ea205181a90b4738b7->leave($__internal_e8ad94b24001007e8c2686376248bdb93b6c415ca12176ea205181a90b4738b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d581e2167eba7b1dcd309dc529745c0bac1d978bd80f3b2506466e9b1faf2e6f = $this->env->getExtension("native_profiler");
        $__internal_d581e2167eba7b1dcd309dc529745c0bac1d978bd80f3b2506466e9b1faf2e6f->enter($__internal_d581e2167eba7b1dcd309dc529745c0bac1d978bd80f3b2506466e9b1faf2e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d581e2167eba7b1dcd309dc529745c0bac1d978bd80f3b2506466e9b1faf2e6f->leave($__internal_d581e2167eba7b1dcd309dc529745c0bac1d978bd80f3b2506466e9b1faf2e6f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
