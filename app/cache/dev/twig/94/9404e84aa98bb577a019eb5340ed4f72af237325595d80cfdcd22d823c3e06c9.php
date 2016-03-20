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
        $__internal_e549f20a00fc29dfcbb233fc7cd55feef4639b121ec29fd7070ca135bef3822c = $this->env->getExtension("native_profiler");
        $__internal_e549f20a00fc29dfcbb233fc7cd55feef4639b121ec29fd7070ca135bef3822c->enter($__internal_e549f20a00fc29dfcbb233fc7cd55feef4639b121ec29fd7070ca135bef3822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e549f20a00fc29dfcbb233fc7cd55feef4639b121ec29fd7070ca135bef3822c->leave($__internal_e549f20a00fc29dfcbb233fc7cd55feef4639b121ec29fd7070ca135bef3822c_prof);

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
