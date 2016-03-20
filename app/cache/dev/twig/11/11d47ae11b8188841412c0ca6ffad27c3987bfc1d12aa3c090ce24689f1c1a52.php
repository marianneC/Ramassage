<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8392cf460559d37da62389003e2a66aa0cd81c8e2ca23277d4dc8cdf8a3e7057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3bb5b80ea697d73e7e179c04006346dfc0609a8e7ac83cc3322b5d14ca67ae4 = $this->env->getExtension("native_profiler");
        $__internal_f3bb5b80ea697d73e7e179c04006346dfc0609a8e7ac83cc3322b5d14ca67ae4->enter($__internal_f3bb5b80ea697d73e7e179c04006346dfc0609a8e7ac83cc3322b5d14ca67ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bb5b80ea697d73e7e179c04006346dfc0609a8e7ac83cc3322b5d14ca67ae4->leave($__internal_f3bb5b80ea697d73e7e179c04006346dfc0609a8e7ac83cc3322b5d14ca67ae4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc713c5eabaf7c21b149f58298074a2686810ad4c56f29cb1baa2acd93398ac9 = $this->env->getExtension("native_profiler");
        $__internal_bc713c5eabaf7c21b149f58298074a2686810ad4c56f29cb1baa2acd93398ac9->enter($__internal_bc713c5eabaf7c21b149f58298074a2686810ad4c56f29cb1baa2acd93398ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc713c5eabaf7c21b149f58298074a2686810ad4c56f29cb1baa2acd93398ac9->leave($__internal_bc713c5eabaf7c21b149f58298074a2686810ad4c56f29cb1baa2acd93398ac9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7514cb9e0725216b58cbb86a2d04d700146f9a566aebd8a046b5388e9bdd9a87 = $this->env->getExtension("native_profiler");
        $__internal_7514cb9e0725216b58cbb86a2d04d700146f9a566aebd8a046b5388e9bdd9a87->enter($__internal_7514cb9e0725216b58cbb86a2d04d700146f9a566aebd8a046b5388e9bdd9a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7514cb9e0725216b58cbb86a2d04d700146f9a566aebd8a046b5388e9bdd9a87->leave($__internal_7514cb9e0725216b58cbb86a2d04d700146f9a566aebd8a046b5388e9bdd9a87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1b821c5683ffb682fc533dc18f282e3701c48d2179691655a493362aa5f12af = $this->env->getExtension("native_profiler");
        $__internal_a1b821c5683ffb682fc533dc18f282e3701c48d2179691655a493362aa5f12af->enter($__internal_a1b821c5683ffb682fc533dc18f282e3701c48d2179691655a493362aa5f12af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1b821c5683ffb682fc533dc18f282e3701c48d2179691655a493362aa5f12af->leave($__internal_a1b821c5683ffb682fc533dc18f282e3701c48d2179691655a493362aa5f12af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
