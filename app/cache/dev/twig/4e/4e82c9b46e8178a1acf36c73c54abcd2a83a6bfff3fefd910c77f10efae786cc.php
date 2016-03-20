<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_a6906ed36622108db97e85ba4ed0607ec9248d10577055246a779ef68005eee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_cef19b75f2dcf31a5df214beab596bf7931effabc07ff51627e8a5bc4d9b3eee = $this->env->getExtension("native_profiler");
        $__internal_cef19b75f2dcf31a5df214beab596bf7931effabc07ff51627e8a5bc4d9b3eee->enter($__internal_cef19b75f2dcf31a5df214beab596bf7931effabc07ff51627e8a5bc4d9b3eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cef19b75f2dcf31a5df214beab596bf7931effabc07ff51627e8a5bc4d9b3eee->leave($__internal_cef19b75f2dcf31a5df214beab596bf7931effabc07ff51627e8a5bc4d9b3eee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38dfbfe7eb4b2629ff47d5d9a6fb2c7ca5a013a2f9642cd5ae7fededf15ec227 = $this->env->getExtension("native_profiler");
        $__internal_38dfbfe7eb4b2629ff47d5d9a6fb2c7ca5a013a2f9642cd5ae7fededf15ec227->enter($__internal_38dfbfe7eb4b2629ff47d5d9a6fb2c7ca5a013a2f9642cd5ae7fededf15ec227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_38dfbfe7eb4b2629ff47d5d9a6fb2c7ca5a013a2f9642cd5ae7fededf15ec227->leave($__internal_38dfbfe7eb4b2629ff47d5d9a6fb2c7ca5a013a2f9642cd5ae7fededf15ec227_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
