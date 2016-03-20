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
        $__internal_91eedc9c94ed985409cf8c4dfc831eb53d4debce9ae59b8e32161cc1f0ceac06 = $this->env->getExtension("native_profiler");
        $__internal_91eedc9c94ed985409cf8c4dfc831eb53d4debce9ae59b8e32161cc1f0ceac06->enter($__internal_91eedc9c94ed985409cf8c4dfc831eb53d4debce9ae59b8e32161cc1f0ceac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91eedc9c94ed985409cf8c4dfc831eb53d4debce9ae59b8e32161cc1f0ceac06->leave($__internal_91eedc9c94ed985409cf8c4dfc831eb53d4debce9ae59b8e32161cc1f0ceac06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1702b3f4d7d4ead240e4268ee0e2ddcbe0faa135e20e802856c0b0c958baa39b = $this->env->getExtension("native_profiler");
        $__internal_1702b3f4d7d4ead240e4268ee0e2ddcbe0faa135e20e802856c0b0c958baa39b->enter($__internal_1702b3f4d7d4ead240e4268ee0e2ddcbe0faa135e20e802856c0b0c958baa39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1702b3f4d7d4ead240e4268ee0e2ddcbe0faa135e20e802856c0b0c958baa39b->leave($__internal_1702b3f4d7d4ead240e4268ee0e2ddcbe0faa135e20e802856c0b0c958baa39b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de7c639069bfb5d8d9d2d4973a076cfb2562cb4c1655080e8f2b870c24db3d7e = $this->env->getExtension("native_profiler");
        $__internal_de7c639069bfb5d8d9d2d4973a076cfb2562cb4c1655080e8f2b870c24db3d7e->enter($__internal_de7c639069bfb5d8d9d2d4973a076cfb2562cb4c1655080e8f2b870c24db3d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de7c639069bfb5d8d9d2d4973a076cfb2562cb4c1655080e8f2b870c24db3d7e->leave($__internal_de7c639069bfb5d8d9d2d4973a076cfb2562cb4c1655080e8f2b870c24db3d7e_prof);

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
