<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e86a2bca1a5056eaf1842a11d1362a470ccd093061b5de618053c7ae7a145e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6d4fc67e7ee3dd6bf72fb686c6a47f7e08c365aa03f54df9a3efacff3206ab52 = $this->env->getExtension("native_profiler");
        $__internal_6d4fc67e7ee3dd6bf72fb686c6a47f7e08c365aa03f54df9a3efacff3206ab52->enter($__internal_6d4fc67e7ee3dd6bf72fb686c6a47f7e08c365aa03f54df9a3efacff3206ab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4fc67e7ee3dd6bf72fb686c6a47f7e08c365aa03f54df9a3efacff3206ab52->leave($__internal_6d4fc67e7ee3dd6bf72fb686c6a47f7e08c365aa03f54df9a3efacff3206ab52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6b8376c0b26dc2cd1ed51aa0704bcfdf046eb192209d51805599cb29efddac1 = $this->env->getExtension("native_profiler");
        $__internal_c6b8376c0b26dc2cd1ed51aa0704bcfdf046eb192209d51805599cb29efddac1->enter($__internal_c6b8376c0b26dc2cd1ed51aa0704bcfdf046eb192209d51805599cb29efddac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c6b8376c0b26dc2cd1ed51aa0704bcfdf046eb192209d51805599cb29efddac1->leave($__internal_c6b8376c0b26dc2cd1ed51aa0704bcfdf046eb192209d51805599cb29efddac1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
