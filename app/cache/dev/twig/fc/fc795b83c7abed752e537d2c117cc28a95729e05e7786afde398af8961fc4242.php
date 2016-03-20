<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e79a59187d916a18e12db94a70d0182a8fc70b8a0b8b9b6a20bb2aab645c3e37 extends Twig_Template
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
        $__internal_eee32107455ce26b558fbff0cce6ff8b2bd33e32d81f8d22729fe9d2b709c6ca = $this->env->getExtension("native_profiler");
        $__internal_eee32107455ce26b558fbff0cce6ff8b2bd33e32d81f8d22729fe9d2b709c6ca->enter($__internal_eee32107455ce26b558fbff0cce6ff8b2bd33e32d81f8d22729fe9d2b709c6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_eee32107455ce26b558fbff0cce6ff8b2bd33e32d81f8d22729fe9d2b709c6ca->leave($__internal_eee32107455ce26b558fbff0cce6ff8b2bd33e32d81f8d22729fe9d2b709c6ca_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
