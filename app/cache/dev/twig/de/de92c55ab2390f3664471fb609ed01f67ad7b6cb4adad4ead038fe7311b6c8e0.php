<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c16759b3b21e7da5e15ab5625a67fcdba80562402e89759c1126ebb022383d95 extends Twig_Template
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
        $__internal_f115062a7eb6d31ef7d6dcb3815ba45f918de70daf1ac3c2267368c9de9e73ac = $this->env->getExtension("native_profiler");
        $__internal_f115062a7eb6d31ef7d6dcb3815ba45f918de70daf1ac3c2267368c9de9e73ac->enter($__internal_f115062a7eb6d31ef7d6dcb3815ba45f918de70daf1ac3c2267368c9de9e73ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f115062a7eb6d31ef7d6dcb3815ba45f918de70daf1ac3c2267368c9de9e73ac->leave($__internal_f115062a7eb6d31ef7d6dcb3815ba45f918de70daf1ac3c2267368c9de9e73ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
