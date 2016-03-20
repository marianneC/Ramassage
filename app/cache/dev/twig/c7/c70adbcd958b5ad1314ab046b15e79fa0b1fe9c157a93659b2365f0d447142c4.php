<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e0161b0a2b539389e7346707b3e0fd0c2b4f25c5ac5e55a22d86e2caff052a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_dc36aba69d5ef029dd5d0e94780ca7ac77ada714b798d3c07cf59b2029f981d4 = $this->env->getExtension("native_profiler");
        $__internal_dc36aba69d5ef029dd5d0e94780ca7ac77ada714b798d3c07cf59b2029f981d4->enter($__internal_dc36aba69d5ef029dd5d0e94780ca7ac77ada714b798d3c07cf59b2029f981d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc36aba69d5ef029dd5d0e94780ca7ac77ada714b798d3c07cf59b2029f981d4->leave($__internal_dc36aba69d5ef029dd5d0e94780ca7ac77ada714b798d3c07cf59b2029f981d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d55c3e7d17e3d51a025f7928f15a87697b0085581a151007f517e66eda79e551 = $this->env->getExtension("native_profiler");
        $__internal_d55c3e7d17e3d51a025f7928f15a87697b0085581a151007f517e66eda79e551->enter($__internal_d55c3e7d17e3d51a025f7928f15a87697b0085581a151007f517e66eda79e551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d55c3e7d17e3d51a025f7928f15a87697b0085581a151007f517e66eda79e551->leave($__internal_d55c3e7d17e3d51a025f7928f15a87697b0085581a151007f517e66eda79e551_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
