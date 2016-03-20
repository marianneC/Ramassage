<?php

/* @CCIRamSco/Yasmina/ChangePassword/changePassword.html.twig */
class __TwigTemplate_5b31fe5d11297527914db90c57adf42bec9b3a519bb8bdbbad6a076657f8a3ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_ee4abe9c7f24c9d5c6200714cdf959fc13e299fa231180b9d36ed83b630edaba = $this->env->getExtension("native_profiler");
        $__internal_ee4abe9c7f24c9d5c6200714cdf959fc13e299fa231180b9d36ed83b630edaba->enter($__internal_ee4abe9c7f24c9d5c6200714cdf959fc13e299fa231180b9d36ed83b630edaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4abe9c7f24c9d5c6200714cdf959fc13e299fa231180b9d36ed83b630edaba->leave($__internal_ee4abe9c7f24c9d5c6200714cdf959fc13e299fa231180b9d36ed83b630edaba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ffa4cdf9dca75d585af6820e089fc2ae88bb787b778bf2e705680af905c30064 = $this->env->getExtension("native_profiler");
        $__internal_ffa4cdf9dca75d585af6820e089fc2ae88bb787b778bf2e705680af905c30064->enter($__internal_ffa4cdf9dca75d585af6820e089fc2ae88bb787b778bf2e705680af905c30064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@CCIRamSco/Yasmina/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ffa4cdf9dca75d585af6820e089fc2ae88bb787b778bf2e705680af905c30064->leave($__internal_ffa4cdf9dca75d585af6820e089fc2ae88bb787b778bf2e705680af905c30064_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/ChangePassword/changePassword.html.twig";
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
