<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3ba0675f4e26df5c4c841d91a2bf1ad3f02946f992c0f276eb9d5336cedda3fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_30db18ae30d5b1d575f449de77548de05cd8e3e73237f4cad90bbe0e374e9616 = $this->env->getExtension("native_profiler");
        $__internal_30db18ae30d5b1d575f449de77548de05cd8e3e73237f4cad90bbe0e374e9616->enter($__internal_30db18ae30d5b1d575f449de77548de05cd8e3e73237f4cad90bbe0e374e9616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30db18ae30d5b1d575f449de77548de05cd8e3e73237f4cad90bbe0e374e9616->leave($__internal_30db18ae30d5b1d575f449de77548de05cd8e3e73237f4cad90bbe0e374e9616_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_143ef30fc9c919df08a46a1ec1d0061ce5ec1ba229efe77ada624e0c6bf9d5cc = $this->env->getExtension("native_profiler");
        $__internal_143ef30fc9c919df08a46a1ec1d0061ce5ec1ba229efe77ada624e0c6bf9d5cc->enter($__internal_143ef30fc9c919df08a46a1ec1d0061ce5ec1ba229efe77ada624e0c6bf9d5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_143ef30fc9c919df08a46a1ec1d0061ce5ec1ba229efe77ada624e0c6bf9d5cc->leave($__internal_143ef30fc9c919df08a46a1ec1d0061ce5ec1ba229efe77ada624e0c6bf9d5cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
