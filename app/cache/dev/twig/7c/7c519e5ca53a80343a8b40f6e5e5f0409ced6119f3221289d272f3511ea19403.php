<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_554694c001b3b7b3f087efec4a46aa4e18938f5fd05d4490250f8695b978015d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_cd0fb5fbd4146aff1c30659a46bfe4ab1eeb86ffb0558e36bd6b893947377593 = $this->env->getExtension("native_profiler");
        $__internal_cd0fb5fbd4146aff1c30659a46bfe4ab1eeb86ffb0558e36bd6b893947377593->enter($__internal_cd0fb5fbd4146aff1c30659a46bfe4ab1eeb86ffb0558e36bd6b893947377593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0fb5fbd4146aff1c30659a46bfe4ab1eeb86ffb0558e36bd6b893947377593->leave($__internal_cd0fb5fbd4146aff1c30659a46bfe4ab1eeb86ffb0558e36bd6b893947377593_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a06d857d30935ecbb711304210a39327a00872f7a87736225901b6f95bf131ee = $this->env->getExtension("native_profiler");
        $__internal_a06d857d30935ecbb711304210a39327a00872f7a87736225901b6f95bf131ee->enter($__internal_a06d857d30935ecbb711304210a39327a00872f7a87736225901b6f95bf131ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_a06d857d30935ecbb711304210a39327a00872f7a87736225901b6f95bf131ee->leave($__internal_a06d857d30935ecbb711304210a39327a00872f7a87736225901b6f95bf131ee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
