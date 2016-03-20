<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d7902619c4356417d4e6dce1f2ea01013755ed125dbe4a0b59f0a7b6fc56fed8 extends Twig_Template
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
        $__internal_27b354068305ff420aeb2d82510032a06956d20adb2e80bc9eb8ee9f8f9962f5 = $this->env->getExtension("native_profiler");
        $__internal_27b354068305ff420aeb2d82510032a06956d20adb2e80bc9eb8ee9f8f9962f5->enter($__internal_27b354068305ff420aeb2d82510032a06956d20adb2e80bc9eb8ee9f8f9962f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_27b354068305ff420aeb2d82510032a06956d20adb2e80bc9eb8ee9f8f9962f5->leave($__internal_27b354068305ff420aeb2d82510032a06956d20adb2e80bc9eb8ee9f8f9962f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
