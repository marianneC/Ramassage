<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_054d34afac81ada0b411ecd436e162f9a63e0e4039738612bcee1257cd7df27a extends Twig_Template
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
        $__internal_1f1bb3931e1e6d4797828b654ed1f8d5bbb2cfdb2da1e18cc864159832b2447a = $this->env->getExtension("native_profiler");
        $__internal_1f1bb3931e1e6d4797828b654ed1f8d5bbb2cfdb2da1e18cc864159832b2447a->enter($__internal_1f1bb3931e1e6d4797828b654ed1f8d5bbb2cfdb2da1e18cc864159832b2447a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f1bb3931e1e6d4797828b654ed1f8d5bbb2cfdb2da1e18cc864159832b2447a->leave($__internal_1f1bb3931e1e6d4797828b654ed1f8d5bbb2cfdb2da1e18cc864159832b2447a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_49cc0cd98e570db9eca061865a5f5955ff65a165292accc71003f987f61f2a3d = $this->env->getExtension("native_profiler");
        $__internal_49cc0cd98e570db9eca061865a5f5955ff65a165292accc71003f987f61f2a3d->enter($__internal_49cc0cd98e570db9eca061865a5f5955ff65a165292accc71003f987f61f2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_49cc0cd98e570db9eca061865a5f5955ff65a165292accc71003f987f61f2a3d->leave($__internal_49cc0cd98e570db9eca061865a5f5955ff65a165292accc71003f987f61f2a3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
