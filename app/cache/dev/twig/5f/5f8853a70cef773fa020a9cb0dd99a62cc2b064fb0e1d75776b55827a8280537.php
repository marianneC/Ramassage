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
        $__internal_2a209316db26fe3bcf1df64389a89429649bf7ce37520e4499b6f94c850b7034 = $this->env->getExtension("native_profiler");
        $__internal_2a209316db26fe3bcf1df64389a89429649bf7ce37520e4499b6f94c850b7034->enter($__internal_2a209316db26fe3bcf1df64389a89429649bf7ce37520e4499b6f94c850b7034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a209316db26fe3bcf1df64389a89429649bf7ce37520e4499b6f94c850b7034->leave($__internal_2a209316db26fe3bcf1df64389a89429649bf7ce37520e4499b6f94c850b7034_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b250e89270f6010ab31e28542963b93aa151a0aa102a85ebe8b0dd7f93dc248e = $this->env->getExtension("native_profiler");
        $__internal_b250e89270f6010ab31e28542963b93aa151a0aa102a85ebe8b0dd7f93dc248e->enter($__internal_b250e89270f6010ab31e28542963b93aa151a0aa102a85ebe8b0dd7f93dc248e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b250e89270f6010ab31e28542963b93aa151a0aa102a85ebe8b0dd7f93dc248e->leave($__internal_b250e89270f6010ab31e28542963b93aa151a0aa102a85ebe8b0dd7f93dc248e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4652ce178e35ad20b82ad7ae4b75d992577b409dd7383461766b54a485f78e53 = $this->env->getExtension("native_profiler");
        $__internal_4652ce178e35ad20b82ad7ae4b75d992577b409dd7383461766b54a485f78e53->enter($__internal_4652ce178e35ad20b82ad7ae4b75d992577b409dd7383461766b54a485f78e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4652ce178e35ad20b82ad7ae4b75d992577b409dd7383461766b54a485f78e53->leave($__internal_4652ce178e35ad20b82ad7ae4b75d992577b409dd7383461766b54a485f78e53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_808d82109584aa1daab3e96dbedba9bbe16616ae51ecd94b6b12797b0ded17c3 = $this->env->getExtension("native_profiler");
        $__internal_808d82109584aa1daab3e96dbedba9bbe16616ae51ecd94b6b12797b0ded17c3->enter($__internal_808d82109584aa1daab3e96dbedba9bbe16616ae51ecd94b6b12797b0ded17c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_808d82109584aa1daab3e96dbedba9bbe16616ae51ecd94b6b12797b0ded17c3->leave($__internal_808d82109584aa1daab3e96dbedba9bbe16616ae51ecd94b6b12797b0ded17c3_prof);

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
