<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_5d8e3f8b5613acd48acf199bcebd1fab086edd17154e8b1db5839d58d776f8ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_c5a332600b938ab57036181ef6ea7a95320874d30715df54878399de808b53b6 = $this->env->getExtension("native_profiler");
        $__internal_c5a332600b938ab57036181ef6ea7a95320874d30715df54878399de808b53b6->enter($__internal_c5a332600b938ab57036181ef6ea7a95320874d30715df54878399de808b53b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5a332600b938ab57036181ef6ea7a95320874d30715df54878399de808b53b6->leave($__internal_c5a332600b938ab57036181ef6ea7a95320874d30715df54878399de808b53b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_458af42c63ef78b6285ffb99da80c270d997a43cac12421fecd79f6d7b38b0b4 = $this->env->getExtension("native_profiler");
        $__internal_458af42c63ef78b6285ffb99da80c270d997a43cac12421fecd79f6d7b38b0b4->enter($__internal_458af42c63ef78b6285ffb99da80c270d997a43cac12421fecd79f6d7b38b0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_458af42c63ef78b6285ffb99da80c270d997a43cac12421fecd79f6d7b38b0b4->leave($__internal_458af42c63ef78b6285ffb99da80c270d997a43cac12421fecd79f6d7b38b0b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
