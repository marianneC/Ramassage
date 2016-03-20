<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_96b013638dc8d1ae405978c5525e0113d5971675791e0aeb2bfad6822a7c07c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_23c95369f819ea0cd701112785dc892595ccdf3f37eebfb7217b115c6bd787e9 = $this->env->getExtension("native_profiler");
        $__internal_23c95369f819ea0cd701112785dc892595ccdf3f37eebfb7217b115c6bd787e9->enter($__internal_23c95369f819ea0cd701112785dc892595ccdf3f37eebfb7217b115c6bd787e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c95369f819ea0cd701112785dc892595ccdf3f37eebfb7217b115c6bd787e9->leave($__internal_23c95369f819ea0cd701112785dc892595ccdf3f37eebfb7217b115c6bd787e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8e4b674550cf20b3ec40bf53ae76a733233b4cbb0f0fda5b1f40b3697dde7b1 = $this->env->getExtension("native_profiler");
        $__internal_a8e4b674550cf20b3ec40bf53ae76a733233b4cbb0f0fda5b1f40b3697dde7b1->enter($__internal_a8e4b674550cf20b3ec40bf53ae76a733233b4cbb0f0fda5b1f40b3697dde7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_a8e4b674550cf20b3ec40bf53ae76a733233b4cbb0f0fda5b1f40b3697dde7b1->leave($__internal_a8e4b674550cf20b3ec40bf53ae76a733233b4cbb0f0fda5b1f40b3697dde7b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
