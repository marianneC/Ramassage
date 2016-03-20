<?php

/* CCIRamScoBundle:Yasmina/Resetting:reset.html.twig */
class __TwigTemplate_d0dca1419835af77d3b410329aa1cabe7caef354357443c01b390bd2e7e4b7e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c30631d81a1dcf1065c70f60f0bc9e786f5615bb44103850a6570d625f25903 = $this->env->getExtension("native_profiler");
        $__internal_0c30631d81a1dcf1065c70f60f0bc9e786f5615bb44103850a6570d625f25903->enter($__internal_0c30631d81a1dcf1065c70f60f0bc9e786f5615bb44103850a6570d625f25903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c30631d81a1dcf1065c70f60f0bc9e786f5615bb44103850a6570d625f25903->leave($__internal_0c30631d81a1dcf1065c70f60f0bc9e786f5615bb44103850a6570d625f25903_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e41981e238560a9227502d6f333d2eee7e0ff68cf1aa8549f25cbc83c85d3c86 = $this->env->getExtension("native_profiler");
        $__internal_e41981e238560a9227502d6f333d2eee7e0ff68cf1aa8549f25cbc83c85d3c86->enter($__internal_e41981e238560a9227502d6f333d2eee7e0ff68cf1aa8549f25cbc83c85d3c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "CCIRamScoBundle:Yasmina/Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_e41981e238560a9227502d6f333d2eee7e0ff68cf1aa8549f25cbc83c85d3c86->leave($__internal_e41981e238560a9227502d6f333d2eee7e0ff68cf1aa8549f25cbc83c85d3c86_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
