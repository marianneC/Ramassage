<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_12b4f0e09edc04fab4da7a47a9b63c8497c2db6e742d1e17df9d787990c82278 extends Twig_Template
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
        $__internal_fe84c1b5614d1354f94423ec1ec79c676a84e0edfc4bb7e13b3445aeef53bf5d = $this->env->getExtension("native_profiler");
        $__internal_fe84c1b5614d1354f94423ec1ec79c676a84e0edfc4bb7e13b3445aeef53bf5d->enter($__internal_fe84c1b5614d1354f94423ec1ec79c676a84e0edfc4bb7e13b3445aeef53bf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fe84c1b5614d1354f94423ec1ec79c676a84e0edfc4bb7e13b3445aeef53bf5d->leave($__internal_fe84c1b5614d1354f94423ec1ec79c676a84e0edfc4bb7e13b3445aeef53bf5d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
