<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_09cdb293ae80519cec662dc7fd90eead0494794fa355f97eb009edeb8a4218c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_6a1f463f0e468f341d32051860571cbc9058bac443347e4735cfafcc63f5e531 = $this->env->getExtension("native_profiler");
        $__internal_6a1f463f0e468f341d32051860571cbc9058bac443347e4735cfafcc63f5e531->enter($__internal_6a1f463f0e468f341d32051860571cbc9058bac443347e4735cfafcc63f5e531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1f463f0e468f341d32051860571cbc9058bac443347e4735cfafcc63f5e531->leave($__internal_6a1f463f0e468f341d32051860571cbc9058bac443347e4735cfafcc63f5e531_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_377932a6e60d2c4de34e75698a09ec5629666dce2a6b5c707993d96265aba31a = $this->env->getExtension("native_profiler");
        $__internal_377932a6e60d2c4de34e75698a09ec5629666dce2a6b5c707993d96265aba31a->enter($__internal_377932a6e60d2c4de34e75698a09ec5629666dce2a6b5c707993d96265aba31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_377932a6e60d2c4de34e75698a09ec5629666dce2a6b5c707993d96265aba31a->leave($__internal_377932a6e60d2c4de34e75698a09ec5629666dce2a6b5c707993d96265aba31a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
