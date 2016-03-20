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
        $__internal_5efab56b00dfbdd2f06b957de8cabf24d72cd42b90349a472bd3ec2075c9a12e = $this->env->getExtension("native_profiler");
        $__internal_5efab56b00dfbdd2f06b957de8cabf24d72cd42b90349a472bd3ec2075c9a12e->enter($__internal_5efab56b00dfbdd2f06b957de8cabf24d72cd42b90349a472bd3ec2075c9a12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5efab56b00dfbdd2f06b957de8cabf24d72cd42b90349a472bd3ec2075c9a12e->leave($__internal_5efab56b00dfbdd2f06b957de8cabf24d72cd42b90349a472bd3ec2075c9a12e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9be80f8af43cae12298f9e01b0f64be817995d00432e05d3841efb1b517314d = $this->env->getExtension("native_profiler");
        $__internal_e9be80f8af43cae12298f9e01b0f64be817995d00432e05d3841efb1b517314d->enter($__internal_e9be80f8af43cae12298f9e01b0f64be817995d00432e05d3841efb1b517314d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e9be80f8af43cae12298f9e01b0f64be817995d00432e05d3841efb1b517314d->leave($__internal_e9be80f8af43cae12298f9e01b0f64be817995d00432e05d3841efb1b517314d_prof);

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
