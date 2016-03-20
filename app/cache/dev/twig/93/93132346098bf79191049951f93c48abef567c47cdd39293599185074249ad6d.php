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
        $__internal_c76e5e5940bada5bf4c932697ea133bf7569f5d1ec80150c5bb13149f0c06145 = $this->env->getExtension("native_profiler");
        $__internal_c76e5e5940bada5bf4c932697ea133bf7569f5d1ec80150c5bb13149f0c06145->enter($__internal_c76e5e5940bada5bf4c932697ea133bf7569f5d1ec80150c5bb13149f0c06145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c76e5e5940bada5bf4c932697ea133bf7569f5d1ec80150c5bb13149f0c06145->leave($__internal_c76e5e5940bada5bf4c932697ea133bf7569f5d1ec80150c5bb13149f0c06145_prof);

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
