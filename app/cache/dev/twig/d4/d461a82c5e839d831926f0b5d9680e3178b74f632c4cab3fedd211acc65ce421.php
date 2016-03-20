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
        $__internal_ee645c806f23d5a3563ce597ddfcb4bb7b4b9718682b176288fbead6a16df93d = $this->env->getExtension("native_profiler");
        $__internal_ee645c806f23d5a3563ce597ddfcb4bb7b4b9718682b176288fbead6a16df93d->enter($__internal_ee645c806f23d5a3563ce597ddfcb4bb7b4b9718682b176288fbead6a16df93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee645c806f23d5a3563ce597ddfcb4bb7b4b9718682b176288fbead6a16df93d->leave($__internal_ee645c806f23d5a3563ce597ddfcb4bb7b4b9718682b176288fbead6a16df93d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd3e084dadbe14a8bf609d3746e83384bc4cffc348ea73d4507a6c9c0148f582 = $this->env->getExtension("native_profiler");
        $__internal_dd3e084dadbe14a8bf609d3746e83384bc4cffc348ea73d4507a6c9c0148f582->enter($__internal_dd3e084dadbe14a8bf609d3746e83384bc4cffc348ea73d4507a6c9c0148f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_dd3e084dadbe14a8bf609d3746e83384bc4cffc348ea73d4507a6c9c0148f582->leave($__internal_dd3e084dadbe14a8bf609d3746e83384bc4cffc348ea73d4507a6c9c0148f582_prof);

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
