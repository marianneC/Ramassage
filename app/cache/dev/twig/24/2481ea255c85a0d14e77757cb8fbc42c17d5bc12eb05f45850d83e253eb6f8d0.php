<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6d0512bdb29107a0d56cf448774bc730dec66b846142926883a0d07ee6217026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_c3a02ea3c4c31f43df4881eeac3549226410d7beef80c641ce91a91519f4d4ab = $this->env->getExtension("native_profiler");
        $__internal_c3a02ea3c4c31f43df4881eeac3549226410d7beef80c641ce91a91519f4d4ab->enter($__internal_c3a02ea3c4c31f43df4881eeac3549226410d7beef80c641ce91a91519f4d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a02ea3c4c31f43df4881eeac3549226410d7beef80c641ce91a91519f4d4ab->leave($__internal_c3a02ea3c4c31f43df4881eeac3549226410d7beef80c641ce91a91519f4d4ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a09e7fbae3a412f40ca957ccc00fdc4b808de901bbca6f77b0bb2b05fb69d1f3 = $this->env->getExtension("native_profiler");
        $__internal_a09e7fbae3a412f40ca957ccc00fdc4b808de901bbca6f77b0bb2b05fb69d1f3->enter($__internal_a09e7fbae3a412f40ca957ccc00fdc4b808de901bbca6f77b0bb2b05fb69d1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a09e7fbae3a412f40ca957ccc00fdc4b808de901bbca6f77b0bb2b05fb69d1f3->leave($__internal_a09e7fbae3a412f40ca957ccc00fdc4b808de901bbca6f77b0bb2b05fb69d1f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
