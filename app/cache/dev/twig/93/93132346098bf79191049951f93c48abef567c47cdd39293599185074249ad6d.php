<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_897feb6b69a07ba208fe9123bb8d06d37df5857762c3ad885309a5699b155cb6 extends Twig_Template
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
        $__internal_e16adae44d7e6efaa41cd41faad3f7b4a353e0edbab52754a95da1dce0283902 = $this->env->getExtension("native_profiler");
        $__internal_e16adae44d7e6efaa41cd41faad3f7b4a353e0edbab52754a95da1dce0283902->enter($__internal_e16adae44d7e6efaa41cd41faad3f7b4a353e0edbab52754a95da1dce0283902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e16adae44d7e6efaa41cd41faad3f7b4a353e0edbab52754a95da1dce0283902->leave($__internal_e16adae44d7e6efaa41cd41faad3f7b4a353e0edbab52754a95da1dce0283902_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
