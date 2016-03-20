<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_462b2451216d032d89fa66f3990df4713fd14b57028f1ab4d87258b1f956f676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_13a5a417dca5e20d21429f954e99000e0dd7d85149e34e30f4daafa2ddb1538e = $this->env->getExtension("native_profiler");
        $__internal_13a5a417dca5e20d21429f954e99000e0dd7d85149e34e30f4daafa2ddb1538e->enter($__internal_13a5a417dca5e20d21429f954e99000e0dd7d85149e34e30f4daafa2ddb1538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a5a417dca5e20d21429f954e99000e0dd7d85149e34e30f4daafa2ddb1538e->leave($__internal_13a5a417dca5e20d21429f954e99000e0dd7d85149e34e30f4daafa2ddb1538e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6fd871ba290f60e32ad87602736563b5f119a2077757692844e6434fd2eeade = $this->env->getExtension("native_profiler");
        $__internal_c6fd871ba290f60e32ad87602736563b5f119a2077757692844e6434fd2eeade->enter($__internal_c6fd871ba290f60e32ad87602736563b5f119a2077757692844e6434fd2eeade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6fd871ba290f60e32ad87602736563b5f119a2077757692844e6434fd2eeade->leave($__internal_c6fd871ba290f60e32ad87602736563b5f119a2077757692844e6434fd2eeade_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_955721448570545a6e37ee87a868d6b848a161a8ce32f6358ff54530c5f5ec1d = $this->env->getExtension("native_profiler");
        $__internal_955721448570545a6e37ee87a868d6b848a161a8ce32f6358ff54530c5f5ec1d->enter($__internal_955721448570545a6e37ee87a868d6b848a161a8ce32f6358ff54530c5f5ec1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_955721448570545a6e37ee87a868d6b848a161a8ce32f6358ff54530c5f5ec1d->leave($__internal_955721448570545a6e37ee87a868d6b848a161a8ce32f6358ff54530c5f5ec1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_11148bf7442a2c28a2b0a93c34e49c5c5fa688fce852d542391995e49ad762ef = $this->env->getExtension("native_profiler");
        $__internal_11148bf7442a2c28a2b0a93c34e49c5c5fa688fce852d542391995e49ad762ef->enter($__internal_11148bf7442a2c28a2b0a93c34e49c5c5fa688fce852d542391995e49ad762ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_11148bf7442a2c28a2b0a93c34e49c5c5fa688fce852d542391995e49ad762ef->leave($__internal_11148bf7442a2c28a2b0a93c34e49c5c5fa688fce852d542391995e49ad762ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
