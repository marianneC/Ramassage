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
        $__internal_77184be9d2075ffd5d74142831d825bff6d1269365f1300800ae5b28a75794ac = $this->env->getExtension("native_profiler");
        $__internal_77184be9d2075ffd5d74142831d825bff6d1269365f1300800ae5b28a75794ac->enter($__internal_77184be9d2075ffd5d74142831d825bff6d1269365f1300800ae5b28a75794ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77184be9d2075ffd5d74142831d825bff6d1269365f1300800ae5b28a75794ac->leave($__internal_77184be9d2075ffd5d74142831d825bff6d1269365f1300800ae5b28a75794ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83ca894d35de372933c1d72b555c83e5876ea78e7863b4b40d60ea8397ee0d99 = $this->env->getExtension("native_profiler");
        $__internal_83ca894d35de372933c1d72b555c83e5876ea78e7863b4b40d60ea8397ee0d99->enter($__internal_83ca894d35de372933c1d72b555c83e5876ea78e7863b4b40d60ea8397ee0d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_83ca894d35de372933c1d72b555c83e5876ea78e7863b4b40d60ea8397ee0d99->leave($__internal_83ca894d35de372933c1d72b555c83e5876ea78e7863b4b40d60ea8397ee0d99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8a0462ad1a4873e18fa83c287380dd10ddaf29f47c85ce2b2327847ed585b33 = $this->env->getExtension("native_profiler");
        $__internal_f8a0462ad1a4873e18fa83c287380dd10ddaf29f47c85ce2b2327847ed585b33->enter($__internal_f8a0462ad1a4873e18fa83c287380dd10ddaf29f47c85ce2b2327847ed585b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f8a0462ad1a4873e18fa83c287380dd10ddaf29f47c85ce2b2327847ed585b33->leave($__internal_f8a0462ad1a4873e18fa83c287380dd10ddaf29f47c85ce2b2327847ed585b33_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea30fc7012676bea8bfea39656af5de56931faa951826f45e4ad5a4c675a192e = $this->env->getExtension("native_profiler");
        $__internal_ea30fc7012676bea8bfea39656af5de56931faa951826f45e4ad5a4c675a192e->enter($__internal_ea30fc7012676bea8bfea39656af5de56931faa951826f45e4ad5a4c675a192e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ea30fc7012676bea8bfea39656af5de56931faa951826f45e4ad5a4c675a192e->leave($__internal_ea30fc7012676bea8bfea39656af5de56931faa951826f45e4ad5a4c675a192e_prof);

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
