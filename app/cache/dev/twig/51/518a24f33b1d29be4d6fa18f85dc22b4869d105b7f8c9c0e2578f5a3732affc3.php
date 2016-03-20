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
        $__internal_80194019056ee3ce1d7f92f5bba546e89032050ff51404a648b6ca29c133c4c6 = $this->env->getExtension("native_profiler");
        $__internal_80194019056ee3ce1d7f92f5bba546e89032050ff51404a648b6ca29c133c4c6->enter($__internal_80194019056ee3ce1d7f92f5bba546e89032050ff51404a648b6ca29c133c4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_80194019056ee3ce1d7f92f5bba546e89032050ff51404a648b6ca29c133c4c6->leave($__internal_80194019056ee3ce1d7f92f5bba546e89032050ff51404a648b6ca29c133c4c6_prof);

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
