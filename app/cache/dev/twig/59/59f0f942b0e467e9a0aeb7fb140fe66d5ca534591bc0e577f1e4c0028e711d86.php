<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_af16193164fdaf018e3303102f134cb3f3cae3bb692c2e50804863a67efe7802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ffd66f42c7008d8357edf9c08753a3b81f848bbfc7c37f7e1348fa97cd08f3c0 = $this->env->getExtension("native_profiler");
        $__internal_ffd66f42c7008d8357edf9c08753a3b81f848bbfc7c37f7e1348fa97cd08f3c0->enter($__internal_ffd66f42c7008d8357edf9c08753a3b81f848bbfc7c37f7e1348fa97cd08f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd66f42c7008d8357edf9c08753a3b81f848bbfc7c37f7e1348fa97cd08f3c0->leave($__internal_ffd66f42c7008d8357edf9c08753a3b81f848bbfc7c37f7e1348fa97cd08f3c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d23505a288be50b3ef3159f8e1d91392601f316b29cab2272998784969689c94 = $this->env->getExtension("native_profiler");
        $__internal_d23505a288be50b3ef3159f8e1d91392601f316b29cab2272998784969689c94->enter($__internal_d23505a288be50b3ef3159f8e1d91392601f316b29cab2272998784969689c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d23505a288be50b3ef3159f8e1d91392601f316b29cab2272998784969689c94->leave($__internal_d23505a288be50b3ef3159f8e1d91392601f316b29cab2272998784969689c94_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd26be831cb0fed6e2f0ddf2a0a66eee046dfd4cd2289a7f3aef4c5f573d8460 = $this->env->getExtension("native_profiler");
        $__internal_cd26be831cb0fed6e2f0ddf2a0a66eee046dfd4cd2289a7f3aef4c5f573d8460->enter($__internal_cd26be831cb0fed6e2f0ddf2a0a66eee046dfd4cd2289a7f3aef4c5f573d8460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cd26be831cb0fed6e2f0ddf2a0a66eee046dfd4cd2289a7f3aef4c5f573d8460->leave($__internal_cd26be831cb0fed6e2f0ddf2a0a66eee046dfd4cd2289a7f3aef4c5f573d8460_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f634e8792d23d5f0a904d3effbf2543077cf28ddc9215e7ff9416654dce04d69 = $this->env->getExtension("native_profiler");
        $__internal_f634e8792d23d5f0a904d3effbf2543077cf28ddc9215e7ff9416654dce04d69->enter($__internal_f634e8792d23d5f0a904d3effbf2543077cf28ddc9215e7ff9416654dce04d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f634e8792d23d5f0a904d3effbf2543077cf28ddc9215e7ff9416654dce04d69->leave($__internal_f634e8792d23d5f0a904d3effbf2543077cf28ddc9215e7ff9416654dce04d69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
