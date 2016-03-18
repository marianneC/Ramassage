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
        $__internal_a04d3b16eee2fc27c6b88b3febaa4a4ed9bf5735a3006df9fa1c7c86c8a75477 = $this->env->getExtension("native_profiler");
        $__internal_a04d3b16eee2fc27c6b88b3febaa4a4ed9bf5735a3006df9fa1c7c86c8a75477->enter($__internal_a04d3b16eee2fc27c6b88b3febaa4a4ed9bf5735a3006df9fa1c7c86c8a75477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a04d3b16eee2fc27c6b88b3febaa4a4ed9bf5735a3006df9fa1c7c86c8a75477->leave($__internal_a04d3b16eee2fc27c6b88b3febaa4a4ed9bf5735a3006df9fa1c7c86c8a75477_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45a678777c0ee033e64cef45b65bb6a3a6bb82df3d80100e47acc036b9cc5fd7 = $this->env->getExtension("native_profiler");
        $__internal_45a678777c0ee033e64cef45b65bb6a3a6bb82df3d80100e47acc036b9cc5fd7->enter($__internal_45a678777c0ee033e64cef45b65bb6a3a6bb82df3d80100e47acc036b9cc5fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45a678777c0ee033e64cef45b65bb6a3a6bb82df3d80100e47acc036b9cc5fd7->leave($__internal_45a678777c0ee033e64cef45b65bb6a3a6bb82df3d80100e47acc036b9cc5fd7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ebb5b9289e4cbecfc690edbaaf03c283a1210f6e8300daa77b20e6dabb6dd53 = $this->env->getExtension("native_profiler");
        $__internal_5ebb5b9289e4cbecfc690edbaaf03c283a1210f6e8300daa77b20e6dabb6dd53->enter($__internal_5ebb5b9289e4cbecfc690edbaaf03c283a1210f6e8300daa77b20e6dabb6dd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5ebb5b9289e4cbecfc690edbaaf03c283a1210f6e8300daa77b20e6dabb6dd53->leave($__internal_5ebb5b9289e4cbecfc690edbaaf03c283a1210f6e8300daa77b20e6dabb6dd53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_faa34a6865b11cbdb4700d8e16edd2285c5bf350ed6a52257463a31301c0152d = $this->env->getExtension("native_profiler");
        $__internal_faa34a6865b11cbdb4700d8e16edd2285c5bf350ed6a52257463a31301c0152d->enter($__internal_faa34a6865b11cbdb4700d8e16edd2285c5bf350ed6a52257463a31301c0152d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_faa34a6865b11cbdb4700d8e16edd2285c5bf350ed6a52257463a31301c0152d->leave($__internal_faa34a6865b11cbdb4700d8e16edd2285c5bf350ed6a52257463a31301c0152d_prof);

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
