<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8922498e250329dfe90db404293ca86649b4d3b08bfe2fa692b979d3bd08539b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f2ec3b5b6b217be9a9174918c1ce31f8af378a856cc6b5d6b1bf888d4438224d = $this->env->getExtension("native_profiler");
        $__internal_f2ec3b5b6b217be9a9174918c1ce31f8af378a856cc6b5d6b1bf888d4438224d->enter($__internal_f2ec3b5b6b217be9a9174918c1ce31f8af378a856cc6b5d6b1bf888d4438224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ec3b5b6b217be9a9174918c1ce31f8af378a856cc6b5d6b1bf888d4438224d->leave($__internal_f2ec3b5b6b217be9a9174918c1ce31f8af378a856cc6b5d6b1bf888d4438224d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55dadc7f498d46f33d12e5e33e03898368157d23e9e8811b90aed9b8049e9462 = $this->env->getExtension("native_profiler");
        $__internal_55dadc7f498d46f33d12e5e33e03898368157d23e9e8811b90aed9b8049e9462->enter($__internal_55dadc7f498d46f33d12e5e33e03898368157d23e9e8811b90aed9b8049e9462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_55dadc7f498d46f33d12e5e33e03898368157d23e9e8811b90aed9b8049e9462->leave($__internal_55dadc7f498d46f33d12e5e33e03898368157d23e9e8811b90aed9b8049e9462_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
