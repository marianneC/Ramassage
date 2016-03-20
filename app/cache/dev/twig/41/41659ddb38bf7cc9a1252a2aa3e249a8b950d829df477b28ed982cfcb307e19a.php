<?php

/* @CCIRamSco/Yasmina/Resetting/request.html.twig */
class __TwigTemplate_ffa67bb6703f69b6612842ef03dc0f4ba8151edb854267ace0ad605694fd019c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Resetting/request.html.twig", 1);
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
        $__internal_8ebb4bb89509873c39e312f4cf621627077da1cd741db5908d985ea13a211c71 = $this->env->getExtension("native_profiler");
        $__internal_8ebb4bb89509873c39e312f4cf621627077da1cd741db5908d985ea13a211c71->enter($__internal_8ebb4bb89509873c39e312f4cf621627077da1cd741db5908d985ea13a211c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebb4bb89509873c39e312f4cf621627077da1cd741db5908d985ea13a211c71->leave($__internal_8ebb4bb89509873c39e312f4cf621627077da1cd741db5908d985ea13a211c71_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e36105a6995d857f90c3ece6aa031aa43fd6c4f3b01416ff50804aa3d513139 = $this->env->getExtension("native_profiler");
        $__internal_3e36105a6995d857f90c3ece6aa031aa43fd6c4f3b01416ff50804aa3d513139->enter($__internal_3e36105a6995d857f90c3ece6aa031aa43fd6c4f3b01416ff50804aa3d513139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@CCIRamSco/Yasmina/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3e36105a6995d857f90c3ece6aa031aa43fd6c4f3b01416ff50804aa3d513139->leave($__internal_3e36105a6995d857f90c3ece6aa031aa43fd6c4f3b01416ff50804aa3d513139_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Resetting/request.html.twig";
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
