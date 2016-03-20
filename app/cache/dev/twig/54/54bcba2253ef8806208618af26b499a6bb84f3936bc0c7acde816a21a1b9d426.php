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
        $__internal_1687ee00c939bf96d5d1c180d7105f353b757d2a928686bb11a3a47d1d4ce51e = $this->env->getExtension("native_profiler");
        $__internal_1687ee00c939bf96d5d1c180d7105f353b757d2a928686bb11a3a47d1d4ce51e->enter($__internal_1687ee00c939bf96d5d1c180d7105f353b757d2a928686bb11a3a47d1d4ce51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1687ee00c939bf96d5d1c180d7105f353b757d2a928686bb11a3a47d1d4ce51e->leave($__internal_1687ee00c939bf96d5d1c180d7105f353b757d2a928686bb11a3a47d1d4ce51e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9477bc0368fb268756b33ba83ef744e009760d05cd321b09161adeb6e1205f09 = $this->env->getExtension("native_profiler");
        $__internal_9477bc0368fb268756b33ba83ef744e009760d05cd321b09161adeb6e1205f09->enter($__internal_9477bc0368fb268756b33ba83ef744e009760d05cd321b09161adeb6e1205f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9477bc0368fb268756b33ba83ef744e009760d05cd321b09161adeb6e1205f09->leave($__internal_9477bc0368fb268756b33ba83ef744e009760d05cd321b09161adeb6e1205f09_prof);

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
