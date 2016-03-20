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
        $__internal_f0a52979aca7654753dd6f923c4b647c4dad39aa5f2df068fb2e495d5415c8cd = $this->env->getExtension("native_profiler");
        $__internal_f0a52979aca7654753dd6f923c4b647c4dad39aa5f2df068fb2e495d5415c8cd->enter($__internal_f0a52979aca7654753dd6f923c4b647c4dad39aa5f2df068fb2e495d5415c8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a52979aca7654753dd6f923c4b647c4dad39aa5f2df068fb2e495d5415c8cd->leave($__internal_f0a52979aca7654753dd6f923c4b647c4dad39aa5f2df068fb2e495d5415c8cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_186e13de2adf6e0ffebe50005233fef0772d355a3d5ffe4c940bfa7074200187 = $this->env->getExtension("native_profiler");
        $__internal_186e13de2adf6e0ffebe50005233fef0772d355a3d5ffe4c940bfa7074200187->enter($__internal_186e13de2adf6e0ffebe50005233fef0772d355a3d5ffe4c940bfa7074200187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_186e13de2adf6e0ffebe50005233fef0772d355a3d5ffe4c940bfa7074200187->leave($__internal_186e13de2adf6e0ffebe50005233fef0772d355a3d5ffe4c940bfa7074200187_prof);

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
