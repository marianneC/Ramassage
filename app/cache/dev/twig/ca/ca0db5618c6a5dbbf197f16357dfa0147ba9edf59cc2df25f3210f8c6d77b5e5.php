<?php

/* CCIRamScoBundle:Yasmina/Resetting:request.html.twig */
class __TwigTemplate_76fd9c6ecd3ca74252a06fc20e6b8b8941151fd04d586973b644ecbc9ad72858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Resetting:request.html.twig", 1);
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
        $__internal_40025d2159bcf4ed9901df8d413bcc4d0def0e3833a794d255833093460f1959 = $this->env->getExtension("native_profiler");
        $__internal_40025d2159bcf4ed9901df8d413bcc4d0def0e3833a794d255833093460f1959->enter($__internal_40025d2159bcf4ed9901df8d413bcc4d0def0e3833a794d255833093460f1959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40025d2159bcf4ed9901df8d413bcc4d0def0e3833a794d255833093460f1959->leave($__internal_40025d2159bcf4ed9901df8d413bcc4d0def0e3833a794d255833093460f1959_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01a4cf619ebfaedf8dfc08ee3be06361aa7a5a6db97fcca8b0b648747bb281df = $this->env->getExtension("native_profiler");
        $__internal_01a4cf619ebfaedf8dfc08ee3be06361aa7a5a6db97fcca8b0b648747bb281df->enter($__internal_01a4cf619ebfaedf8dfc08ee3be06361aa7a5a6db97fcca8b0b648747bb281df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "CCIRamScoBundle:Yasmina/Resetting:request.html.twig", 4)->display($context);
        
        $__internal_01a4cf619ebfaedf8dfc08ee3be06361aa7a5a6db97fcca8b0b648747bb281df->leave($__internal_01a4cf619ebfaedf8dfc08ee3be06361aa7a5a6db97fcca8b0b648747bb281df_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Resetting:request.html.twig";
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
