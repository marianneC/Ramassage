<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a99817210dc5181e82485bc3e2479ed14b79939f60626c43cf1d494efdc4e6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bc32be04dc32abab28bcf8e161cf1e93c6ea748ee65f4e1ad99afa4019cdf54 = $this->env->getExtension("native_profiler");
        $__internal_8bc32be04dc32abab28bcf8e161cf1e93c6ea748ee65f4e1ad99afa4019cdf54->enter($__internal_8bc32be04dc32abab28bcf8e161cf1e93c6ea748ee65f4e1ad99afa4019cdf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bc32be04dc32abab28bcf8e161cf1e93c6ea748ee65f4e1ad99afa4019cdf54->leave($__internal_8bc32be04dc32abab28bcf8e161cf1e93c6ea748ee65f4e1ad99afa4019cdf54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83a0a0e253e9892106a3ba14880e644be0bdcc3db769b9c930ab272a246566c2 = $this->env->getExtension("native_profiler");
        $__internal_83a0a0e253e9892106a3ba14880e644be0bdcc3db769b9c930ab272a246566c2->enter($__internal_83a0a0e253e9892106a3ba14880e644be0bdcc3db769b9c930ab272a246566c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_83a0a0e253e9892106a3ba14880e644be0bdcc3db769b9c930ab272a246566c2->leave($__internal_83a0a0e253e9892106a3ba14880e644be0bdcc3db769b9c930ab272a246566c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9cea895e911d5570044ab8ede779c6ab4dea26f3bb2392f569711bb333bec414 = $this->env->getExtension("native_profiler");
        $__internal_9cea895e911d5570044ab8ede779c6ab4dea26f3bb2392f569711bb333bec414->enter($__internal_9cea895e911d5570044ab8ede779c6ab4dea26f3bb2392f569711bb333bec414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9cea895e911d5570044ab8ede779c6ab4dea26f3bb2392f569711bb333bec414->leave($__internal_9cea895e911d5570044ab8ede779c6ab4dea26f3bb2392f569711bb333bec414_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_200938b3b86e8bc0b879ebc46cf0395bbe8f8c8d089ed47b0daa35492e372b22 = $this->env->getExtension("native_profiler");
        $__internal_200938b3b86e8bc0b879ebc46cf0395bbe8f8c8d089ed47b0daa35492e372b22->enter($__internal_200938b3b86e8bc0b879ebc46cf0395bbe8f8c8d089ed47b0daa35492e372b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_200938b3b86e8bc0b879ebc46cf0395bbe8f8c8d089ed47b0daa35492e372b22->leave($__internal_200938b3b86e8bc0b879ebc46cf0395bbe8f8c8d089ed47b0daa35492e372b22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
