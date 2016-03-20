<?php

/* @CCIRamSco/Yasmina/Profile/edit.html.twig */
class __TwigTemplate_374a28e918ee1bce7f97276ee0581e764f76ddbaf24481084379d23ec85b37dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Profile/edit.html.twig", 1);
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
        $__internal_17b4356bfb0b908e8aebe26c2a3f88c3c9b8e1770f05e370e3edd102f8a149f7 = $this->env->getExtension("native_profiler");
        $__internal_17b4356bfb0b908e8aebe26c2a3f88c3c9b8e1770f05e370e3edd102f8a149f7->enter($__internal_17b4356bfb0b908e8aebe26c2a3f88c3c9b8e1770f05e370e3edd102f8a149f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17b4356bfb0b908e8aebe26c2a3f88c3c9b8e1770f05e370e3edd102f8a149f7->leave($__internal_17b4356bfb0b908e8aebe26c2a3f88c3c9b8e1770f05e370e3edd102f8a149f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a70f0e6ced3b16faafafd2036e7b2c4ea848b3a2d4db145759b24936bc52b59 = $this->env->getExtension("native_profiler");
        $__internal_1a70f0e6ced3b16faafafd2036e7b2c4ea848b3a2d4db145759b24936bc52b59->enter($__internal_1a70f0e6ced3b16faafafd2036e7b2c4ea848b3a2d4db145759b24936bc52b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@CCIRamSco/Yasmina/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_1a70f0e6ced3b16faafafd2036e7b2c4ea848b3a2d4db145759b24936bc52b59->leave($__internal_1a70f0e6ced3b16faafafd2036e7b2c4ea848b3a2d4db145759b24936bc52b59_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Profile/edit.html.twig";
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
