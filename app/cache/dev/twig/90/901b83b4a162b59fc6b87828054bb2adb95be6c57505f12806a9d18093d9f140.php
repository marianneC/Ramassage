<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3747bc129e28766e68aa10f666831e537a0185df34b83a1518d7b57b5459c882 extends Twig_Template
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
        $__internal_345e0f3a31e1bbe95555ef4f6c5034c2097e2bcf11ad7d008b3fa2717c702a03 = $this->env->getExtension("native_profiler");
        $__internal_345e0f3a31e1bbe95555ef4f6c5034c2097e2bcf11ad7d008b3fa2717c702a03->enter($__internal_345e0f3a31e1bbe95555ef4f6c5034c2097e2bcf11ad7d008b3fa2717c702a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_345e0f3a31e1bbe95555ef4f6c5034c2097e2bcf11ad7d008b3fa2717c702a03->leave($__internal_345e0f3a31e1bbe95555ef4f6c5034c2097e2bcf11ad7d008b3fa2717c702a03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
