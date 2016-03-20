<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3a981ac0641e035da33edc218439db4fcc0752d1dffe42ca27fd4add610221ef extends Twig_Template
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
        $__internal_dfcb12b677056b19931435c20484d4a4a717126963474446d4fef334d2f40533 = $this->env->getExtension("native_profiler");
        $__internal_dfcb12b677056b19931435c20484d4a4a717126963474446d4fef334d2f40533->enter($__internal_dfcb12b677056b19931435c20484d4a4a717126963474446d4fef334d2f40533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dfcb12b677056b19931435c20484d4a4a717126963474446d4fef334d2f40533->leave($__internal_dfcb12b677056b19931435c20484d4a4a717126963474446d4fef334d2f40533_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
