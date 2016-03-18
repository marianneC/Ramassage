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
        $__internal_89e14083310ecca43f5939206d21d09ea5a97ed46558abf793291cf4db048db9 = $this->env->getExtension("native_profiler");
        $__internal_89e14083310ecca43f5939206d21d09ea5a97ed46558abf793291cf4db048db9->enter($__internal_89e14083310ecca43f5939206d21d09ea5a97ed46558abf793291cf4db048db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e14083310ecca43f5939206d21d09ea5a97ed46558abf793291cf4db048db9->leave($__internal_89e14083310ecca43f5939206d21d09ea5a97ed46558abf793291cf4db048db9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96c47e2241230c570d4acc6780641c3e143df0a6d8481c41f42e608bff671caf = $this->env->getExtension("native_profiler");
        $__internal_96c47e2241230c570d4acc6780641c3e143df0a6d8481c41f42e608bff671caf->enter($__internal_96c47e2241230c570d4acc6780641c3e143df0a6d8481c41f42e608bff671caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_96c47e2241230c570d4acc6780641c3e143df0a6d8481c41f42e608bff671caf->leave($__internal_96c47e2241230c570d4acc6780641c3e143df0a6d8481c41f42e608bff671caf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_15d57eb74e86c0478a7459dc8d98d1bee364cc7d4ac1cc9c6618b18866328816 = $this->env->getExtension("native_profiler");
        $__internal_15d57eb74e86c0478a7459dc8d98d1bee364cc7d4ac1cc9c6618b18866328816->enter($__internal_15d57eb74e86c0478a7459dc8d98d1bee364cc7d4ac1cc9c6618b18866328816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_15d57eb74e86c0478a7459dc8d98d1bee364cc7d4ac1cc9c6618b18866328816->leave($__internal_15d57eb74e86c0478a7459dc8d98d1bee364cc7d4ac1cc9c6618b18866328816_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54508fef00bb2345dc5f7d922b89827399398dd31009129e250a0f7bf5f5c250 = $this->env->getExtension("native_profiler");
        $__internal_54508fef00bb2345dc5f7d922b89827399398dd31009129e250a0f7bf5f5c250->enter($__internal_54508fef00bb2345dc5f7d922b89827399398dd31009129e250a0f7bf5f5c250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_54508fef00bb2345dc5f7d922b89827399398dd31009129e250a0f7bf5f5c250->leave($__internal_54508fef00bb2345dc5f7d922b89827399398dd31009129e250a0f7bf5f5c250_prof);

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
