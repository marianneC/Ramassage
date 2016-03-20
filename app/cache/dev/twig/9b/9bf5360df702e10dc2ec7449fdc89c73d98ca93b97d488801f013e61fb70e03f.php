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
        $__internal_e71500f6b3d7985737857472a9fd78bf8d26b24b3fa8593cf68e7b581f8e27ea = $this->env->getExtension("native_profiler");
        $__internal_e71500f6b3d7985737857472a9fd78bf8d26b24b3fa8593cf68e7b581f8e27ea->enter($__internal_e71500f6b3d7985737857472a9fd78bf8d26b24b3fa8593cf68e7b581f8e27ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e71500f6b3d7985737857472a9fd78bf8d26b24b3fa8593cf68e7b581f8e27ea->leave($__internal_e71500f6b3d7985737857472a9fd78bf8d26b24b3fa8593cf68e7b581f8e27ea_prof);

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
