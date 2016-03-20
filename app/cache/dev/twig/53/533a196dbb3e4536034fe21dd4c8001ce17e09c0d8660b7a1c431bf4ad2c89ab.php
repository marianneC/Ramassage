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
        $__internal_2cd16fdaaf024239602fc2227dc56873fbeef1ea471df373a56a3ff7e5d3e9d8 = $this->env->getExtension("native_profiler");
        $__internal_2cd16fdaaf024239602fc2227dc56873fbeef1ea471df373a56a3ff7e5d3e9d8->enter($__internal_2cd16fdaaf024239602fc2227dc56873fbeef1ea471df373a56a3ff7e5d3e9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd16fdaaf024239602fc2227dc56873fbeef1ea471df373a56a3ff7e5d3e9d8->leave($__internal_2cd16fdaaf024239602fc2227dc56873fbeef1ea471df373a56a3ff7e5d3e9d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0dbe522d44c19fc5074cd29411f7163fdb296cfd55a9a74ca441979cb04a20e = $this->env->getExtension("native_profiler");
        $__internal_e0dbe522d44c19fc5074cd29411f7163fdb296cfd55a9a74ca441979cb04a20e->enter($__internal_e0dbe522d44c19fc5074cd29411f7163fdb296cfd55a9a74ca441979cb04a20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0dbe522d44c19fc5074cd29411f7163fdb296cfd55a9a74ca441979cb04a20e->leave($__internal_e0dbe522d44c19fc5074cd29411f7163fdb296cfd55a9a74ca441979cb04a20e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d0fb82d2775be9b96865837721d4003de20fa512a4d780f9b952b48036e9223 = $this->env->getExtension("native_profiler");
        $__internal_0d0fb82d2775be9b96865837721d4003de20fa512a4d780f9b952b48036e9223->enter($__internal_0d0fb82d2775be9b96865837721d4003de20fa512a4d780f9b952b48036e9223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0d0fb82d2775be9b96865837721d4003de20fa512a4d780f9b952b48036e9223->leave($__internal_0d0fb82d2775be9b96865837721d4003de20fa512a4d780f9b952b48036e9223_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3678eb1156ac87d819e040946294892ce74f29d0f99ea95c598294dd2e464463 = $this->env->getExtension("native_profiler");
        $__internal_3678eb1156ac87d819e040946294892ce74f29d0f99ea95c598294dd2e464463->enter($__internal_3678eb1156ac87d819e040946294892ce74f29d0f99ea95c598294dd2e464463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3678eb1156ac87d819e040946294892ce74f29d0f99ea95c598294dd2e464463->leave($__internal_3678eb1156ac87d819e040946294892ce74f29d0f99ea95c598294dd2e464463_prof);

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
