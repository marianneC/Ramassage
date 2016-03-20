<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_44d3abd6658a8cc9149743deb319867bf2cbb744727f89006f35d8c830d5ab8e extends Twig_Template
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
        $__internal_d7553cd5ec740ec1c28b427e7c1750577b940f442316ec832ceaca723a9d3024 = $this->env->getExtension("native_profiler");
        $__internal_d7553cd5ec740ec1c28b427e7c1750577b940f442316ec832ceaca723a9d3024->enter($__internal_d7553cd5ec740ec1c28b427e7c1750577b940f442316ec832ceaca723a9d3024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d7553cd5ec740ec1c28b427e7c1750577b940f442316ec832ceaca723a9d3024->leave($__internal_d7553cd5ec740ec1c28b427e7c1750577b940f442316ec832ceaca723a9d3024_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
