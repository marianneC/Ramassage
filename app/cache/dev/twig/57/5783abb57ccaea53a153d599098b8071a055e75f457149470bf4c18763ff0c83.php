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
        $__internal_f4cd2e48f504a16eda69e0665f10cfbc1b01c7eef8f36cfa58559aa8b2b81bac = $this->env->getExtension("native_profiler");
        $__internal_f4cd2e48f504a16eda69e0665f10cfbc1b01c7eef8f36cfa58559aa8b2b81bac->enter($__internal_f4cd2e48f504a16eda69e0665f10cfbc1b01c7eef8f36cfa58559aa8b2b81bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cd2e48f504a16eda69e0665f10cfbc1b01c7eef8f36cfa58559aa8b2b81bac->leave($__internal_f4cd2e48f504a16eda69e0665f10cfbc1b01c7eef8f36cfa58559aa8b2b81bac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91aa2b6f3c09c78780fe0885d1ea1616b0e2af52066c86cd345d764050b2a005 = $this->env->getExtension("native_profiler");
        $__internal_91aa2b6f3c09c78780fe0885d1ea1616b0e2af52066c86cd345d764050b2a005->enter($__internal_91aa2b6f3c09c78780fe0885d1ea1616b0e2af52066c86cd345d764050b2a005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_91aa2b6f3c09c78780fe0885d1ea1616b0e2af52066c86cd345d764050b2a005->leave($__internal_91aa2b6f3c09c78780fe0885d1ea1616b0e2af52066c86cd345d764050b2a005_prof);

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
