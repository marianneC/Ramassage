<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_adb2f06daab12684ad317a260c4489fd4a97d4eaed05a800cb8b06b34eeaff60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e4de64ff1cbd5b3ec600f42adca9fe720883dec0855b679aaa25dbcc2e9a6470 = $this->env->getExtension("native_profiler");
        $__internal_e4de64ff1cbd5b3ec600f42adca9fe720883dec0855b679aaa25dbcc2e9a6470->enter($__internal_e4de64ff1cbd5b3ec600f42adca9fe720883dec0855b679aaa25dbcc2e9a6470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4de64ff1cbd5b3ec600f42adca9fe720883dec0855b679aaa25dbcc2e9a6470->leave($__internal_e4de64ff1cbd5b3ec600f42adca9fe720883dec0855b679aaa25dbcc2e9a6470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a48852b4914b15d0d6aac4120aa96a5845090f809f6620a4bb5b96dde5f65ced = $this->env->getExtension("native_profiler");
        $__internal_a48852b4914b15d0d6aac4120aa96a5845090f809f6620a4bb5b96dde5f65ced->enter($__internal_a48852b4914b15d0d6aac4120aa96a5845090f809f6620a4bb5b96dde5f65ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a48852b4914b15d0d6aac4120aa96a5845090f809f6620a4bb5b96dde5f65ced->leave($__internal_a48852b4914b15d0d6aac4120aa96a5845090f809f6620a4bb5b96dde5f65ced_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
