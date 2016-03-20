<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9edeb894b402119aa69f6bdcbdf4f2c8e0923666e2958344178b647485ed0d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_71de5fb4648f38f3b762020420d11e2b14b554f3c8c64b1c3f17ab8a7551207a = $this->env->getExtension("native_profiler");
        $__internal_71de5fb4648f38f3b762020420d11e2b14b554f3c8c64b1c3f17ab8a7551207a->enter($__internal_71de5fb4648f38f3b762020420d11e2b14b554f3c8c64b1c3f17ab8a7551207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71de5fb4648f38f3b762020420d11e2b14b554f3c8c64b1c3f17ab8a7551207a->leave($__internal_71de5fb4648f38f3b762020420d11e2b14b554f3c8c64b1c3f17ab8a7551207a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b07411c9b41e1eb5cdacfed454ab7f90de3d867cfa3c817ab7ab4d0a8ec16dbb = $this->env->getExtension("native_profiler");
        $__internal_b07411c9b41e1eb5cdacfed454ab7f90de3d867cfa3c817ab7ab4d0a8ec16dbb->enter($__internal_b07411c9b41e1eb5cdacfed454ab7f90de3d867cfa3c817ab7ab4d0a8ec16dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b07411c9b41e1eb5cdacfed454ab7f90de3d867cfa3c817ab7ab4d0a8ec16dbb->leave($__internal_b07411c9b41e1eb5cdacfed454ab7f90de3d867cfa3c817ab7ab4d0a8ec16dbb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbc2a5beb042e00a52d5ebb132f6825521a66eb2708ea598fc4bc9f9d12794ec = $this->env->getExtension("native_profiler");
        $__internal_dbc2a5beb042e00a52d5ebb132f6825521a66eb2708ea598fc4bc9f9d12794ec->enter($__internal_dbc2a5beb042e00a52d5ebb132f6825521a66eb2708ea598fc4bc9f9d12794ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbc2a5beb042e00a52d5ebb132f6825521a66eb2708ea598fc4bc9f9d12794ec->leave($__internal_dbc2a5beb042e00a52d5ebb132f6825521a66eb2708ea598fc4bc9f9d12794ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
