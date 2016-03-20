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
        $__internal_0910a7350d1ae5f0160f63e4c5424a98c788e29c8d7cf87a1638274b203b23b6 = $this->env->getExtension("native_profiler");
        $__internal_0910a7350d1ae5f0160f63e4c5424a98c788e29c8d7cf87a1638274b203b23b6->enter($__internal_0910a7350d1ae5f0160f63e4c5424a98c788e29c8d7cf87a1638274b203b23b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0910a7350d1ae5f0160f63e4c5424a98c788e29c8d7cf87a1638274b203b23b6->leave($__internal_0910a7350d1ae5f0160f63e4c5424a98c788e29c8d7cf87a1638274b203b23b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_de8bfbb4912e59b3009ae0d0f7391f50a78c409793d8a0e32e47f67796ffe320 = $this->env->getExtension("native_profiler");
        $__internal_de8bfbb4912e59b3009ae0d0f7391f50a78c409793d8a0e32e47f67796ffe320->enter($__internal_de8bfbb4912e59b3009ae0d0f7391f50a78c409793d8a0e32e47f67796ffe320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_de8bfbb4912e59b3009ae0d0f7391f50a78c409793d8a0e32e47f67796ffe320->leave($__internal_de8bfbb4912e59b3009ae0d0f7391f50a78c409793d8a0e32e47f67796ffe320_prof);

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
