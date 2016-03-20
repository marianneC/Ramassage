<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_93cbd8040812a75c62134717ceeec4e042a54c200b153e5a3ed1488249ca8e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_3dec3e4c6cb5e6f81452050e1052f67d341b0399eed7d2f538f8d1fe6b5416bc = $this->env->getExtension("native_profiler");
        $__internal_3dec3e4c6cb5e6f81452050e1052f67d341b0399eed7d2f538f8d1fe6b5416bc->enter($__internal_3dec3e4c6cb5e6f81452050e1052f67d341b0399eed7d2f538f8d1fe6b5416bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dec3e4c6cb5e6f81452050e1052f67d341b0399eed7d2f538f8d1fe6b5416bc->leave($__internal_3dec3e4c6cb5e6f81452050e1052f67d341b0399eed7d2f538f8d1fe6b5416bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5b7eac1c3a93b46657d02b551e7b1fb67e6964db448f2783279430b1f702621 = $this->env->getExtension("native_profiler");
        $__internal_f5b7eac1c3a93b46657d02b551e7b1fb67e6964db448f2783279430b1f702621->enter($__internal_f5b7eac1c3a93b46657d02b551e7b1fb67e6964db448f2783279430b1f702621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_f5b7eac1c3a93b46657d02b551e7b1fb67e6964db448f2783279430b1f702621->leave($__internal_f5b7eac1c3a93b46657d02b551e7b1fb67e6964db448f2783279430b1f702621_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
