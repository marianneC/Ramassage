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
        $__internal_e92ca8d0ac6fd9a5be009da125eb4e0f2b27fe9bc44bea3c5c39426ef79a33be = $this->env->getExtension("native_profiler");
        $__internal_e92ca8d0ac6fd9a5be009da125eb4e0f2b27fe9bc44bea3c5c39426ef79a33be->enter($__internal_e92ca8d0ac6fd9a5be009da125eb4e0f2b27fe9bc44bea3c5c39426ef79a33be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e92ca8d0ac6fd9a5be009da125eb4e0f2b27fe9bc44bea3c5c39426ef79a33be->leave($__internal_e92ca8d0ac6fd9a5be009da125eb4e0f2b27fe9bc44bea3c5c39426ef79a33be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80c242bf690fd5e37291a263a54c90cef7bb270b5804852214f189c31f964e53 = $this->env->getExtension("native_profiler");
        $__internal_80c242bf690fd5e37291a263a54c90cef7bb270b5804852214f189c31f964e53->enter($__internal_80c242bf690fd5e37291a263a54c90cef7bb270b5804852214f189c31f964e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_80c242bf690fd5e37291a263a54c90cef7bb270b5804852214f189c31f964e53->leave($__internal_80c242bf690fd5e37291a263a54c90cef7bb270b5804852214f189c31f964e53_prof);

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
