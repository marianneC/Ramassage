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
        $__internal_4e46e22a7c0fb798f133600e394e23bba79222deb4a97a348a77545b17f50659 = $this->env->getExtension("native_profiler");
        $__internal_4e46e22a7c0fb798f133600e394e23bba79222deb4a97a348a77545b17f50659->enter($__internal_4e46e22a7c0fb798f133600e394e23bba79222deb4a97a348a77545b17f50659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e46e22a7c0fb798f133600e394e23bba79222deb4a97a348a77545b17f50659->leave($__internal_4e46e22a7c0fb798f133600e394e23bba79222deb4a97a348a77545b17f50659_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d27cdb3dd54fd3a5cad808afcd071bd73cddf44deb8ca8d1e8127a713067a57 = $this->env->getExtension("native_profiler");
        $__internal_5d27cdb3dd54fd3a5cad808afcd071bd73cddf44deb8ca8d1e8127a713067a57->enter($__internal_5d27cdb3dd54fd3a5cad808afcd071bd73cddf44deb8ca8d1e8127a713067a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d27cdb3dd54fd3a5cad808afcd071bd73cddf44deb8ca8d1e8127a713067a57->leave($__internal_5d27cdb3dd54fd3a5cad808afcd071bd73cddf44deb8ca8d1e8127a713067a57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f6065715af450db4baee0827d7666d410dfeab9a3647722c3351facdcbcc074 = $this->env->getExtension("native_profiler");
        $__internal_9f6065715af450db4baee0827d7666d410dfeab9a3647722c3351facdcbcc074->enter($__internal_9f6065715af450db4baee0827d7666d410dfeab9a3647722c3351facdcbcc074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f6065715af450db4baee0827d7666d410dfeab9a3647722c3351facdcbcc074->leave($__internal_9f6065715af450db4baee0827d7666d410dfeab9a3647722c3351facdcbcc074_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb84722bdab989fb6342c39f8699c7bfa8264350d8b260b2ab67882237f0f7e = $this->env->getExtension("native_profiler");
        $__internal_7bb84722bdab989fb6342c39f8699c7bfa8264350d8b260b2ab67882237f0f7e->enter($__internal_7bb84722bdab989fb6342c39f8699c7bfa8264350d8b260b2ab67882237f0f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bb84722bdab989fb6342c39f8699c7bfa8264350d8b260b2ab67882237f0f7e->leave($__internal_7bb84722bdab989fb6342c39f8699c7bfa8264350d8b260b2ab67882237f0f7e_prof);

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
