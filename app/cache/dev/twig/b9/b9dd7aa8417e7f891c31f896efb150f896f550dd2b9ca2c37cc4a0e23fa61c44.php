<?php

/* @CCIRamSco/Yasmina/Profile/show.html.twig */
class __TwigTemplate_f40409de44f839781b737e03b65e43030a21a8685c751597ca8d9ff6f3c72342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Profile/show.html.twig", 1);
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
        $__internal_0d4957f3d19d4f630bb7cae4e86147b0e66158cd880a73e55075f019a5d6e580 = $this->env->getExtension("native_profiler");
        $__internal_0d4957f3d19d4f630bb7cae4e86147b0e66158cd880a73e55075f019a5d6e580->enter($__internal_0d4957f3d19d4f630bb7cae4e86147b0e66158cd880a73e55075f019a5d6e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4957f3d19d4f630bb7cae4e86147b0e66158cd880a73e55075f019a5d6e580->leave($__internal_0d4957f3d19d4f630bb7cae4e86147b0e66158cd880a73e55075f019a5d6e580_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ef94bedfbda3221c5437f96230de84951c7c5673eb669433e3fd4d0a0f94ff9 = $this->env->getExtension("native_profiler");
        $__internal_6ef94bedfbda3221c5437f96230de84951c7c5673eb669433e3fd4d0a0f94ff9->enter($__internal_6ef94bedfbda3221c5437f96230de84951c7c5673eb669433e3fd4d0a0f94ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@CCIRamSco/Yasmina/Profile/show.html.twig", 4)->display($context);
        
        $__internal_6ef94bedfbda3221c5437f96230de84951c7c5673eb669433e3fd4d0a0f94ff9->leave($__internal_6ef94bedfbda3221c5437f96230de84951c7c5673eb669433e3fd4d0a0f94ff9_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
