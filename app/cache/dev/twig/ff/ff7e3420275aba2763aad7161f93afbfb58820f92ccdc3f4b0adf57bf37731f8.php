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
        $__internal_2aaf8c3101a8d270627822496ccdf7f0ac8172a511698943fb818a27ca0ea228 = $this->env->getExtension("native_profiler");
        $__internal_2aaf8c3101a8d270627822496ccdf7f0ac8172a511698943fb818a27ca0ea228->enter($__internal_2aaf8c3101a8d270627822496ccdf7f0ac8172a511698943fb818a27ca0ea228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aaf8c3101a8d270627822496ccdf7f0ac8172a511698943fb818a27ca0ea228->leave($__internal_2aaf8c3101a8d270627822496ccdf7f0ac8172a511698943fb818a27ca0ea228_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5c30c2c9342567ff91f30cc05e98586cffd6ecf0b3b0171b8c65d887dfcab87 = $this->env->getExtension("native_profiler");
        $__internal_a5c30c2c9342567ff91f30cc05e98586cffd6ecf0b3b0171b8c65d887dfcab87->enter($__internal_a5c30c2c9342567ff91f30cc05e98586cffd6ecf0b3b0171b8c65d887dfcab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a5c30c2c9342567ff91f30cc05e98586cffd6ecf0b3b0171b8c65d887dfcab87->leave($__internal_a5c30c2c9342567ff91f30cc05e98586cffd6ecf0b3b0171b8c65d887dfcab87_prof);

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
