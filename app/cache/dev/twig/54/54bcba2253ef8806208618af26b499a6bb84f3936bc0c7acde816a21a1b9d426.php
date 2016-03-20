<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8e65edc466ed6c4c420854a3311e414862f0bc8fb2663b0cd5bea36934feab7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3cd3dc95038d74a82c994b8c81c2664d679aa88c335a6b1678341e3b4a4d734 = $this->env->getExtension("native_profiler");
        $__internal_c3cd3dc95038d74a82c994b8c81c2664d679aa88c335a6b1678341e3b4a4d734->enter($__internal_c3cd3dc95038d74a82c994b8c81c2664d679aa88c335a6b1678341e3b4a4d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c3cd3dc95038d74a82c994b8c81c2664d679aa88c335a6b1678341e3b4a4d734->leave($__internal_c3cd3dc95038d74a82c994b8c81c2664d679aa88c335a6b1678341e3b4a4d734_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_51d11c3950abb23fa36f359b85bc90daeb2e31821ba8a8a26ccf450bbe2636ae = $this->env->getExtension("native_profiler");
        $__internal_51d11c3950abb23fa36f359b85bc90daeb2e31821ba8a8a26ccf450bbe2636ae->enter($__internal_51d11c3950abb23fa36f359b85bc90daeb2e31821ba8a8a26ccf450bbe2636ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_51d11c3950abb23fa36f359b85bc90daeb2e31821ba8a8a26ccf450bbe2636ae->leave($__internal_51d11c3950abb23fa36f359b85bc90daeb2e31821ba8a8a26ccf450bbe2636ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
