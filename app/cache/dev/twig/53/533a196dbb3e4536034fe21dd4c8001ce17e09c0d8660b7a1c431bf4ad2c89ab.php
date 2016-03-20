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
        $__internal_597a7e0e29aeec672f1e33e97f8187b47dae83e94b39e1c98c73e52bc5885316 = $this->env->getExtension("native_profiler");
        $__internal_597a7e0e29aeec672f1e33e97f8187b47dae83e94b39e1c98c73e52bc5885316->enter($__internal_597a7e0e29aeec672f1e33e97f8187b47dae83e94b39e1c98c73e52bc5885316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_597a7e0e29aeec672f1e33e97f8187b47dae83e94b39e1c98c73e52bc5885316->leave($__internal_597a7e0e29aeec672f1e33e97f8187b47dae83e94b39e1c98c73e52bc5885316_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebefb1e474f6cf50b0494c5d661cd0b50df1452856311e1409faf84631bdd28f = $this->env->getExtension("native_profiler");
        $__internal_ebefb1e474f6cf50b0494c5d661cd0b50df1452856311e1409faf84631bdd28f->enter($__internal_ebefb1e474f6cf50b0494c5d661cd0b50df1452856311e1409faf84631bdd28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ebefb1e474f6cf50b0494c5d661cd0b50df1452856311e1409faf84631bdd28f->leave($__internal_ebefb1e474f6cf50b0494c5d661cd0b50df1452856311e1409faf84631bdd28f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f16f5abf554dcff9b7bb52faca2bea40bfc82cb916483d7d732c057554f2247 = $this->env->getExtension("native_profiler");
        $__internal_4f16f5abf554dcff9b7bb52faca2bea40bfc82cb916483d7d732c057554f2247->enter($__internal_4f16f5abf554dcff9b7bb52faca2bea40bfc82cb916483d7d732c057554f2247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f16f5abf554dcff9b7bb52faca2bea40bfc82cb916483d7d732c057554f2247->leave($__internal_4f16f5abf554dcff9b7bb52faca2bea40bfc82cb916483d7d732c057554f2247_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_306bc294cbf70d41e5461b36aac253bce3fc7f7ab02409e1692ff29f02395c28 = $this->env->getExtension("native_profiler");
        $__internal_306bc294cbf70d41e5461b36aac253bce3fc7f7ab02409e1692ff29f02395c28->enter($__internal_306bc294cbf70d41e5461b36aac253bce3fc7f7ab02409e1692ff29f02395c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_306bc294cbf70d41e5461b36aac253bce3fc7f7ab02409e1692ff29f02395c28->leave($__internal_306bc294cbf70d41e5461b36aac253bce3fc7f7ab02409e1692ff29f02395c28_prof);

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
