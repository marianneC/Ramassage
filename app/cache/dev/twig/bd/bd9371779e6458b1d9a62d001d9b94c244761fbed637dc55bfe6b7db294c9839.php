<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bee72350b2c3a646c58878e6574dd535fdd879dbb9d8ccd62ba1e36bb6cf3507 extends Twig_Template
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
        $__internal_4d84ea7b8590b0312c41817df07220bb564c6fcd0da194c2cf0bb44f53698a48 = $this->env->getExtension("native_profiler");
        $__internal_4d84ea7b8590b0312c41817df07220bb564c6fcd0da194c2cf0bb44f53698a48->enter($__internal_4d84ea7b8590b0312c41817df07220bb564c6fcd0da194c2cf0bb44f53698a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4d84ea7b8590b0312c41817df07220bb564c6fcd0da194c2cf0bb44f53698a48->leave($__internal_4d84ea7b8590b0312c41817df07220bb564c6fcd0da194c2cf0bb44f53698a48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
