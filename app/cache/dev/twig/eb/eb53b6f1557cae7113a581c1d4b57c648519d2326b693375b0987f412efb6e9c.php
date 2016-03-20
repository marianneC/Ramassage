<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_79a43caeacf1ae4071bc0c20f28d98601c708eb8c9ff80830c632050c3530ca3 extends Twig_Template
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
        $__internal_1c4c50d85c7938b4c98363a2d3e5b1fd6a0b8b3119ece06064ba5722e086057b = $this->env->getExtension("native_profiler");
        $__internal_1c4c50d85c7938b4c98363a2d3e5b1fd6a0b8b3119ece06064ba5722e086057b->enter($__internal_1c4c50d85c7938b4c98363a2d3e5b1fd6a0b8b3119ece06064ba5722e086057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1c4c50d85c7938b4c98363a2d3e5b1fd6a0b8b3119ece06064ba5722e086057b->leave($__internal_1c4c50d85c7938b4c98363a2d3e5b1fd6a0b8b3119ece06064ba5722e086057b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
