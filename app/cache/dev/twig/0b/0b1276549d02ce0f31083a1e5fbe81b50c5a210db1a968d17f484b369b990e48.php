<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_3e09f0402a565ca2b4578321ae90e30ae114a7236bcb204e550ac7bbf2acabbf extends Twig_Template
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
        $__internal_b151e8149b544182fec82de794d58b4690ba62a11237a886011b6c5f138c6b17 = $this->env->getExtension("native_profiler");
        $__internal_b151e8149b544182fec82de794d58b4690ba62a11237a886011b6c5f138c6b17->enter($__internal_b151e8149b544182fec82de794d58b4690ba62a11237a886011b6c5f138c6b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b151e8149b544182fec82de794d58b4690ba62a11237a886011b6c5f138c6b17->leave($__internal_b151e8149b544182fec82de794d58b4690ba62a11237a886011b6c5f138c6b17_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
