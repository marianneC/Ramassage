<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ef4dd9ffd27d3aad440ee45b83085153c2444aba77407b670dec39ecae945553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_cef6494abf95d28ade49a640e14c7631b7acde85abff7697cd4e2dfdcc3cc479 = $this->env->getExtension("native_profiler");
        $__internal_cef6494abf95d28ade49a640e14c7631b7acde85abff7697cd4e2dfdcc3cc479->enter($__internal_cef6494abf95d28ade49a640e14c7631b7acde85abff7697cd4e2dfdcc3cc479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef6494abf95d28ade49a640e14c7631b7acde85abff7697cd4e2dfdcc3cc479->leave($__internal_cef6494abf95d28ade49a640e14c7631b7acde85abff7697cd4e2dfdcc3cc479_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01235a6c99ab0c2946a58e1156b4e61ad05cf5fd02da8ad7f3abc8e30652f086 = $this->env->getExtension("native_profiler");
        $__internal_01235a6c99ab0c2946a58e1156b4e61ad05cf5fd02da8ad7f3abc8e30652f086->enter($__internal_01235a6c99ab0c2946a58e1156b4e61ad05cf5fd02da8ad7f3abc8e30652f086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_01235a6c99ab0c2946a58e1156b4e61ad05cf5fd02da8ad7f3abc8e30652f086->leave($__internal_01235a6c99ab0c2946a58e1156b4e61ad05cf5fd02da8ad7f3abc8e30652f086_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba2548959438ac59d092df7efc6e28193fd93eb072ff01c3fd0910d1f16d0a04 = $this->env->getExtension("native_profiler");
        $__internal_ba2548959438ac59d092df7efc6e28193fd93eb072ff01c3fd0910d1f16d0a04->enter($__internal_ba2548959438ac59d092df7efc6e28193fd93eb072ff01c3fd0910d1f16d0a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ba2548959438ac59d092df7efc6e28193fd93eb072ff01c3fd0910d1f16d0a04->leave($__internal_ba2548959438ac59d092df7efc6e28193fd93eb072ff01c3fd0910d1f16d0a04_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
