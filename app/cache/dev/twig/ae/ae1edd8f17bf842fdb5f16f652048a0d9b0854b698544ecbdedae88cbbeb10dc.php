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
        $__internal_1771625a70b9bcfae2bb555ca309b615b7ff73074c3960c1c0373e45ee644cfb = $this->env->getExtension("native_profiler");
        $__internal_1771625a70b9bcfae2bb555ca309b615b7ff73074c3960c1c0373e45ee644cfb->enter($__internal_1771625a70b9bcfae2bb555ca309b615b7ff73074c3960c1c0373e45ee644cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1771625a70b9bcfae2bb555ca309b615b7ff73074c3960c1c0373e45ee644cfb->leave($__internal_1771625a70b9bcfae2bb555ca309b615b7ff73074c3960c1c0373e45ee644cfb_prof);

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
