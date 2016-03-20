<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_3d2cdc1941653e11b8655e2b3f0e9638c6befc651dc3e552cfd83495569b9f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_264415fa3c2c8fddf0ca57e3833e70b27c54e568f48938f752aee4381cb4ea3b = $this->env->getExtension("native_profiler");
        $__internal_264415fa3c2c8fddf0ca57e3833e70b27c54e568f48938f752aee4381cb4ea3b->enter($__internal_264415fa3c2c8fddf0ca57e3833e70b27c54e568f48938f752aee4381cb4ea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_264415fa3c2c8fddf0ca57e3833e70b27c54e568f48938f752aee4381cb4ea3b->leave($__internal_264415fa3c2c8fddf0ca57e3833e70b27c54e568f48938f752aee4381cb4ea3b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77c4479bdf7ee83929c85409d2130f32e40d85b5ab57e39ea8eaa45dc25e0e79 = $this->env->getExtension("native_profiler");
        $__internal_77c4479bdf7ee83929c85409d2130f32e40d85b5ab57e39ea8eaa45dc25e0e79->enter($__internal_77c4479bdf7ee83929c85409d2130f32e40d85b5ab57e39ea8eaa45dc25e0e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_77c4479bdf7ee83929c85409d2130f32e40d85b5ab57e39ea8eaa45dc25e0e79->leave($__internal_77c4479bdf7ee83929c85409d2130f32e40d85b5ab57e39ea8eaa45dc25e0e79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
