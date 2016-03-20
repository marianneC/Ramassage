<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_7dc9499f28d49d1eb147f9154ce5c3bc5118e17c549ab7031a6c4ddaa8632b31 extends Twig_Template
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
        $__internal_b475684043a531582fea90415d838bfa7908df0c8a6857f94ccbf9004b0ca0b5 = $this->env->getExtension("native_profiler");
        $__internal_b475684043a531582fea90415d838bfa7908df0c8a6857f94ccbf9004b0ca0b5->enter($__internal_b475684043a531582fea90415d838bfa7908df0c8a6857f94ccbf9004b0ca0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_b475684043a531582fea90415d838bfa7908df0c8a6857f94ccbf9004b0ca0b5->leave($__internal_b475684043a531582fea90415d838bfa7908df0c8a6857f94ccbf9004b0ca0b5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
