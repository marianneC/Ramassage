<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_073416bb5b045f20a52ea5eaf75d1a642c9dc52e77b0d569f65a83e4f539581d extends Twig_Template
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
        $__internal_ff3162d7d7b92c2b5d62b0b0e46552215e06e1f48d7ef14224a095726132e75b = $this->env->getExtension("native_profiler");
        $__internal_ff3162d7d7b92c2b5d62b0b0e46552215e06e1f48d7ef14224a095726132e75b->enter($__internal_ff3162d7d7b92c2b5d62b0b0e46552215e06e1f48d7ef14224a095726132e75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ff3162d7d7b92c2b5d62b0b0e46552215e06e1f48d7ef14224a095726132e75b->leave($__internal_ff3162d7d7b92c2b5d62b0b0e46552215e06e1f48d7ef14224a095726132e75b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
