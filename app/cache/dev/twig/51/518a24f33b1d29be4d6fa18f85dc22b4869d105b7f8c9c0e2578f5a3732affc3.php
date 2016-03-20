<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_0efdb02208a8dbd789a8ffc43ca083ccb38c75e0bbb3650e149ada0c809ae921 extends Twig_Template
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
        $__internal_7aa4ed851444eace6a58c75aa7acc09cc5cb7b42410e2122fa9e10700d136827 = $this->env->getExtension("native_profiler");
        $__internal_7aa4ed851444eace6a58c75aa7acc09cc5cb7b42410e2122fa9e10700d136827->enter($__internal_7aa4ed851444eace6a58c75aa7acc09cc5cb7b42410e2122fa9e10700d136827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7aa4ed851444eace6a58c75aa7acc09cc5cb7b42410e2122fa9e10700d136827->leave($__internal_7aa4ed851444eace6a58c75aa7acc09cc5cb7b42410e2122fa9e10700d136827_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
