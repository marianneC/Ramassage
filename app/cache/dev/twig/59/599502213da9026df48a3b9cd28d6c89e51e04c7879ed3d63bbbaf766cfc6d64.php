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
        $__internal_cd16e23a03e55cb69411077c21799177b6d6de7edd2a4384d28023760de119dc = $this->env->getExtension("native_profiler");
        $__internal_cd16e23a03e55cb69411077c21799177b6d6de7edd2a4384d28023760de119dc->enter($__internal_cd16e23a03e55cb69411077c21799177b6d6de7edd2a4384d28023760de119dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_cd16e23a03e55cb69411077c21799177b6d6de7edd2a4384d28023760de119dc->leave($__internal_cd16e23a03e55cb69411077c21799177b6d6de7edd2a4384d28023760de119dc_prof);

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
