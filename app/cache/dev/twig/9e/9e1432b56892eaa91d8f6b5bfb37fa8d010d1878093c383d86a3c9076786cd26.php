<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fa6e6844fcc41acd81d6cb742621c318a84d2ebe2c63ff2b522190ae62742177 extends Twig_Template
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
        $__internal_eb519733351faaa9cf6a972991d0c622fbe6ca10f7b1694e900b101bdab35ed2 = $this->env->getExtension("native_profiler");
        $__internal_eb519733351faaa9cf6a972991d0c622fbe6ca10f7b1694e900b101bdab35ed2->enter($__internal_eb519733351faaa9cf6a972991d0c622fbe6ca10f7b1694e900b101bdab35ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eb519733351faaa9cf6a972991d0c622fbe6ca10f7b1694e900b101bdab35ed2->leave($__internal_eb519733351faaa9cf6a972991d0c622fbe6ca10f7b1694e900b101bdab35ed2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
