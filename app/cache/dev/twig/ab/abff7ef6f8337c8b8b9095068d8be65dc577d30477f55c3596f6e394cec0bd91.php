<?php

/* CCIRamScoBundle:Yasmina/Group:new.html.twig */
class __TwigTemplate_b0979bb1445e2441274ac9c6116df3687bca8f5fd8089c148bd4add1d67e6ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Group:new.html.twig", 1);
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
        $__internal_bffd432026af1e31d56c4bd348419bd31d8a9c768ce549e0ff27f7699c3f2a2d = $this->env->getExtension("native_profiler");
        $__internal_bffd432026af1e31d56c4bd348419bd31d8a9c768ce549e0ff27f7699c3f2a2d->enter($__internal_bffd432026af1e31d56c4bd348419bd31d8a9c768ce549e0ff27f7699c3f2a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bffd432026af1e31d56c4bd348419bd31d8a9c768ce549e0ff27f7699c3f2a2d->leave($__internal_bffd432026af1e31d56c4bd348419bd31d8a9c768ce549e0ff27f7699c3f2a2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e499948bc1c1987cc2218ccbb3188f84f5d756c82915b9710aea8c527ea6871 = $this->env->getExtension("native_profiler");
        $__internal_1e499948bc1c1987cc2218ccbb3188f84f5d756c82915b9710aea8c527ea6871->enter($__internal_1e499948bc1c1987cc2218ccbb3188f84f5d756c82915b9710aea8c527ea6871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "CCIRamScoBundle:Yasmina/Group:new.html.twig", 4)->display($context);
        
        $__internal_1e499948bc1c1987cc2218ccbb3188f84f5d756c82915b9710aea8c527ea6871->leave($__internal_1e499948bc1c1987cc2218ccbb3188f84f5d756c82915b9710aea8c527ea6871_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Group:new.html.twig";
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
