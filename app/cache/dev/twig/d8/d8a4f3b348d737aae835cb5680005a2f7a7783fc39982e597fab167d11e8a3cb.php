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
        $__internal_413c12d358d783c7c9dec846a6e2c4df3d6b1c3e5b29c37faad8f4b2974942d0 = $this->env->getExtension("native_profiler");
        $__internal_413c12d358d783c7c9dec846a6e2c4df3d6b1c3e5b29c37faad8f4b2974942d0->enter($__internal_413c12d358d783c7c9dec846a6e2c4df3d6b1c3e5b29c37faad8f4b2974942d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413c12d358d783c7c9dec846a6e2c4df3d6b1c3e5b29c37faad8f4b2974942d0->leave($__internal_413c12d358d783c7c9dec846a6e2c4df3d6b1c3e5b29c37faad8f4b2974942d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4248416228ca88a7b818b544222e2700711a8b0172c4a40d026642ec89423503 = $this->env->getExtension("native_profiler");
        $__internal_4248416228ca88a7b818b544222e2700711a8b0172c4a40d026642ec89423503->enter($__internal_4248416228ca88a7b818b544222e2700711a8b0172c4a40d026642ec89423503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4248416228ca88a7b818b544222e2700711a8b0172c4a40d026642ec89423503->leave($__internal_4248416228ca88a7b818b544222e2700711a8b0172c4a40d026642ec89423503_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a84955925b98ea74a95be71fee0fea0ff97aafeb10bb922d9686f43d2c4fb5f = $this->env->getExtension("native_profiler");
        $__internal_3a84955925b98ea74a95be71fee0fea0ff97aafeb10bb922d9686f43d2c4fb5f->enter($__internal_3a84955925b98ea74a95be71fee0fea0ff97aafeb10bb922d9686f43d2c4fb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a84955925b98ea74a95be71fee0fea0ff97aafeb10bb922d9686f43d2c4fb5f->leave($__internal_3a84955925b98ea74a95be71fee0fea0ff97aafeb10bb922d9686f43d2c4fb5f_prof);

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
