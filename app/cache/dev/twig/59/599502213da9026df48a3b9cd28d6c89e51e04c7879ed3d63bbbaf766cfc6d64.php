<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_78fef75c458fcff425a6b8294f251a39694eddef4e55edc79e5102afcd2a5ad5 extends Twig_Template
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
        $__internal_05cf12771ffea9d7a4e5d189df63b352df7852d149ee1b2edecdc0b0ba1de2f5 = $this->env->getExtension("native_profiler");
        $__internal_05cf12771ffea9d7a4e5d189df63b352df7852d149ee1b2edecdc0b0ba1de2f5->enter($__internal_05cf12771ffea9d7a4e5d189df63b352df7852d149ee1b2edecdc0b0ba1de2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_05cf12771ffea9d7a4e5d189df63b352df7852d149ee1b2edecdc0b0ba1de2f5->leave($__internal_05cf12771ffea9d7a4e5d189df63b352df7852d149ee1b2edecdc0b0ba1de2f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
