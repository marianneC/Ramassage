<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9bee906a721a39361cd46ad340770c181c6bc181dfe5c582e682c3d651ebb943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a934c853a3141504eaa1588073db41c359efee019c26de98597356ee844e7ea0 = $this->env->getExtension("native_profiler");
        $__internal_a934c853a3141504eaa1588073db41c359efee019c26de98597356ee844e7ea0->enter($__internal_a934c853a3141504eaa1588073db41c359efee019c26de98597356ee844e7ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a934c853a3141504eaa1588073db41c359efee019c26de98597356ee844e7ea0->leave($__internal_a934c853a3141504eaa1588073db41c359efee019c26de98597356ee844e7ea0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
