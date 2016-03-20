<?php

/* CCIRamScoBundle:Yasmina/ChangePassword:changePassword.html.twig */
class __TwigTemplate_8707696e05080585d4da5de9ac3a570f765cd7eef28861410c13bd0a623d1e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/ChangePassword:changePassword.html.twig", 1);
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
        $__internal_a55fdb8ef5453ef9676ec4c0d956fab98d210b2d7853180fabf61ff382d9b271 = $this->env->getExtension("native_profiler");
        $__internal_a55fdb8ef5453ef9676ec4c0d956fab98d210b2d7853180fabf61ff382d9b271->enter($__internal_a55fdb8ef5453ef9676ec4c0d956fab98d210b2d7853180fabf61ff382d9b271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55fdb8ef5453ef9676ec4c0d956fab98d210b2d7853180fabf61ff382d9b271->leave($__internal_a55fdb8ef5453ef9676ec4c0d956fab98d210b2d7853180fabf61ff382d9b271_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e242900fa8f83125ddc11029250ed15d1fcef0683002c344068c4a66e711dbd1 = $this->env->getExtension("native_profiler");
        $__internal_e242900fa8f83125ddc11029250ed15d1fcef0683002c344068c4a66e711dbd1->enter($__internal_e242900fa8f83125ddc11029250ed15d1fcef0683002c344068c4a66e711dbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "CCIRamScoBundle:Yasmina/ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e242900fa8f83125ddc11029250ed15d1fcef0683002c344068c4a66e711dbd1->leave($__internal_e242900fa8f83125ddc11029250ed15d1fcef0683002c344068c4a66e711dbd1_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
