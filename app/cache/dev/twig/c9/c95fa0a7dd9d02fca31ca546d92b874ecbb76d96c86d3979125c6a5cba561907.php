<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_3d2cdc1941653e11b8655e2b3f0e9638c6befc651dc3e552cfd83495569b9f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_06f1681a8fd9f5866c47e8e0f10a38b6c02fb436247546a08691ba56748fe59c = $this->env->getExtension("native_profiler");
        $__internal_06f1681a8fd9f5866c47e8e0f10a38b6c02fb436247546a08691ba56748fe59c->enter($__internal_06f1681a8fd9f5866c47e8e0f10a38b6c02fb436247546a08691ba56748fe59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f1681a8fd9f5866c47e8e0f10a38b6c02fb436247546a08691ba56748fe59c->leave($__internal_06f1681a8fd9f5866c47e8e0f10a38b6c02fb436247546a08691ba56748fe59c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a97415823813a72ef06dd4a35e75db601cf98441c937642d7ee6752f1274fe2 = $this->env->getExtension("native_profiler");
        $__internal_7a97415823813a72ef06dd4a35e75db601cf98441c937642d7ee6752f1274fe2->enter($__internal_7a97415823813a72ef06dd4a35e75db601cf98441c937642d7ee6752f1274fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7a97415823813a72ef06dd4a35e75db601cf98441c937642d7ee6752f1274fe2->leave($__internal_7a97415823813a72ef06dd4a35e75db601cf98441c937642d7ee6752f1274fe2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
