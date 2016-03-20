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
        $__internal_dc9ef18aa1c3408ba8ce5563f7b78906f45a4a0414461d823ae769cdac956c5c = $this->env->getExtension("native_profiler");
        $__internal_dc9ef18aa1c3408ba8ce5563f7b78906f45a4a0414461d823ae769cdac956c5c->enter($__internal_dc9ef18aa1c3408ba8ce5563f7b78906f45a4a0414461d823ae769cdac956c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dc9ef18aa1c3408ba8ce5563f7b78906f45a4a0414461d823ae769cdac956c5c->leave($__internal_dc9ef18aa1c3408ba8ce5563f7b78906f45a4a0414461d823ae769cdac956c5c_prof);

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
