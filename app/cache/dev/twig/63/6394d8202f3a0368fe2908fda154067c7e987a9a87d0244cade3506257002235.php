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
        $__internal_a9da1babdaebadcc25809adf8e55e5a721132c2ace29bfe121f23d2f1bf0a595 = $this->env->getExtension("native_profiler");
        $__internal_a9da1babdaebadcc25809adf8e55e5a721132c2ace29bfe121f23d2f1bf0a595->enter($__internal_a9da1babdaebadcc25809adf8e55e5a721132c2ace29bfe121f23d2f1bf0a595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_a9da1babdaebadcc25809adf8e55e5a721132c2ace29bfe121f23d2f1bf0a595->leave($__internal_a9da1babdaebadcc25809adf8e55e5a721132c2ace29bfe121f23d2f1bf0a595_prof);

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
