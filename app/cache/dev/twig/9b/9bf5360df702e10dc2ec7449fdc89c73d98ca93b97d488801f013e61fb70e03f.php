<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_960a9211d2be11521646071719327c32742a5f740da3f0dab8c187495318675a extends Twig_Template
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
        $__internal_1ac2eacb5ca0193d548197010be03e4b547b9191fa434632be9c55a2de54bbeb = $this->env->getExtension("native_profiler");
        $__internal_1ac2eacb5ca0193d548197010be03e4b547b9191fa434632be9c55a2de54bbeb->enter($__internal_1ac2eacb5ca0193d548197010be03e4b547b9191fa434632be9c55a2de54bbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1ac2eacb5ca0193d548197010be03e4b547b9191fa434632be9c55a2de54bbeb->leave($__internal_1ac2eacb5ca0193d548197010be03e4b547b9191fa434632be9c55a2de54bbeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
