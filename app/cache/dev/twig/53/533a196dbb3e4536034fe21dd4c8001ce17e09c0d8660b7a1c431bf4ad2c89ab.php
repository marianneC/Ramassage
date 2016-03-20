<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fd8675f7743fdcbe3877f7c65e18cff4ecd63aaacb3b28c36c133afcd8f6cb28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_e72234a969a22dda87c052cea8cbf12e6287e691c02017bdd5ffafc5130d3e05 = $this->env->getExtension("native_profiler");
        $__internal_e72234a969a22dda87c052cea8cbf12e6287e691c02017bdd5ffafc5130d3e05->enter($__internal_e72234a969a22dda87c052cea8cbf12e6287e691c02017bdd5ffafc5130d3e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72234a969a22dda87c052cea8cbf12e6287e691c02017bdd5ffafc5130d3e05->leave($__internal_e72234a969a22dda87c052cea8cbf12e6287e691c02017bdd5ffafc5130d3e05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d70fded1b083fb6fbc43971e540011618ddbe07b0bd3ec4da2a92f7083564d81 = $this->env->getExtension("native_profiler");
        $__internal_d70fded1b083fb6fbc43971e540011618ddbe07b0bd3ec4da2a92f7083564d81->enter($__internal_d70fded1b083fb6fbc43971e540011618ddbe07b0bd3ec4da2a92f7083564d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d70fded1b083fb6fbc43971e540011618ddbe07b0bd3ec4da2a92f7083564d81->leave($__internal_d70fded1b083fb6fbc43971e540011618ddbe07b0bd3ec4da2a92f7083564d81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_999e0923823c9a2c5758a6867c85933a677e00d64458ae2873a1e871c7190750 = $this->env->getExtension("native_profiler");
        $__internal_999e0923823c9a2c5758a6867c85933a677e00d64458ae2873a1e871c7190750->enter($__internal_999e0923823c9a2c5758a6867c85933a677e00d64458ae2873a1e871c7190750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_999e0923823c9a2c5758a6867c85933a677e00d64458ae2873a1e871c7190750->leave($__internal_999e0923823c9a2c5758a6867c85933a677e00d64458ae2873a1e871c7190750_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_648a4207478c3dc4d949088c1b5655b887e883504d2604fe74ff9b372dc54b01 = $this->env->getExtension("native_profiler");
        $__internal_648a4207478c3dc4d949088c1b5655b887e883504d2604fe74ff9b372dc54b01->enter($__internal_648a4207478c3dc4d949088c1b5655b887e883504d2604fe74ff9b372dc54b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_648a4207478c3dc4d949088c1b5655b887e883504d2604fe74ff9b372dc54b01->leave($__internal_648a4207478c3dc4d949088c1b5655b887e883504d2604fe74ff9b372dc54b01_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
