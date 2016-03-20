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
        $__internal_faced58f390dc347ee875f5a6bf00c08055deaae4bb2cf2defc9a30aa0547909 = $this->env->getExtension("native_profiler");
        $__internal_faced58f390dc347ee875f5a6bf00c08055deaae4bb2cf2defc9a30aa0547909->enter($__internal_faced58f390dc347ee875f5a6bf00c08055deaae4bb2cf2defc9a30aa0547909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faced58f390dc347ee875f5a6bf00c08055deaae4bb2cf2defc9a30aa0547909->leave($__internal_faced58f390dc347ee875f5a6bf00c08055deaae4bb2cf2defc9a30aa0547909_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b63b8608fa51ec3ac6d82d756cc4b769f299dc2c30a351937ca529dff03950bf = $this->env->getExtension("native_profiler");
        $__internal_b63b8608fa51ec3ac6d82d756cc4b769f299dc2c30a351937ca529dff03950bf->enter($__internal_b63b8608fa51ec3ac6d82d756cc4b769f299dc2c30a351937ca529dff03950bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_b63b8608fa51ec3ac6d82d756cc4b769f299dc2c30a351937ca529dff03950bf->leave($__internal_b63b8608fa51ec3ac6d82d756cc4b769f299dc2c30a351937ca529dff03950bf_prof);

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
