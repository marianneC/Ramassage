<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a06a6d627160ed7bd47a9a7ffc0a39e368f984936a651e66b5dbb848826e63a7 extends Twig_Template
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
        $__internal_f3d74ab4d65095a30e57a96ba34179d95e6332d90098b9264c6cef9676040cf3 = $this->env->getExtension("native_profiler");
        $__internal_f3d74ab4d65095a30e57a96ba34179d95e6332d90098b9264c6cef9676040cf3->enter($__internal_f3d74ab4d65095a30e57a96ba34179d95e6332d90098b9264c6cef9676040cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f3d74ab4d65095a30e57a96ba34179d95e6332d90098b9264c6cef9676040cf3->leave($__internal_f3d74ab4d65095a30e57a96ba34179d95e6332d90098b9264c6cef9676040cf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
