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
        $__internal_db0ed976eb7c6ecfce661505fe4f5d584cb5106813f0390eb769e9bdde862fc7 = $this->env->getExtension("native_profiler");
        $__internal_db0ed976eb7c6ecfce661505fe4f5d584cb5106813f0390eb769e9bdde862fc7->enter($__internal_db0ed976eb7c6ecfce661505fe4f5d584cb5106813f0390eb769e9bdde862fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db0ed976eb7c6ecfce661505fe4f5d584cb5106813f0390eb769e9bdde862fc7->leave($__internal_db0ed976eb7c6ecfce661505fe4f5d584cb5106813f0390eb769e9bdde862fc7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e39d5a48a8db6fd70d858c5d67f7ce757e35601f3a60c644aba3c1d839601fc2 = $this->env->getExtension("native_profiler");
        $__internal_e39d5a48a8db6fd70d858c5d67f7ce757e35601f3a60c644aba3c1d839601fc2->enter($__internal_e39d5a48a8db6fd70d858c5d67f7ce757e35601f3a60c644aba3c1d839601fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e39d5a48a8db6fd70d858c5d67f7ce757e35601f3a60c644aba3c1d839601fc2->leave($__internal_e39d5a48a8db6fd70d858c5d67f7ce757e35601f3a60c644aba3c1d839601fc2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6b2a63e492d396739f6e545f011ffe2aa86e1f2100d30666518540672a84f840 = $this->env->getExtension("native_profiler");
        $__internal_6b2a63e492d396739f6e545f011ffe2aa86e1f2100d30666518540672a84f840->enter($__internal_6b2a63e492d396739f6e545f011ffe2aa86e1f2100d30666518540672a84f840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6b2a63e492d396739f6e545f011ffe2aa86e1f2100d30666518540672a84f840->leave($__internal_6b2a63e492d396739f6e545f011ffe2aa86e1f2100d30666518540672a84f840_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71094369970d15ed5273d1ba8a62a3e2ddc475e283433f48de490b671bc7959f = $this->env->getExtension("native_profiler");
        $__internal_71094369970d15ed5273d1ba8a62a3e2ddc475e283433f48de490b671bc7959f->enter($__internal_71094369970d15ed5273d1ba8a62a3e2ddc475e283433f48de490b671bc7959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71094369970d15ed5273d1ba8a62a3e2ddc475e283433f48de490b671bc7959f->leave($__internal_71094369970d15ed5273d1ba8a62a3e2ddc475e283433f48de490b671bc7959f_prof);

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
