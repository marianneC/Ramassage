<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_25059279e5afa23b7ecef34f39eb5a09dd321ecf956158b85ea3e5d48288a677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8b13790e9cd4e7456363f017613b3aa02fa7e4576b50bdff1182b4e1673a66b5 = $this->env->getExtension("native_profiler");
        $__internal_8b13790e9cd4e7456363f017613b3aa02fa7e4576b50bdff1182b4e1673a66b5->enter($__internal_8b13790e9cd4e7456363f017613b3aa02fa7e4576b50bdff1182b4e1673a66b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b13790e9cd4e7456363f017613b3aa02fa7e4576b50bdff1182b4e1673a66b5->leave($__internal_8b13790e9cd4e7456363f017613b3aa02fa7e4576b50bdff1182b4e1673a66b5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a994401b0315cb868c22c34ff73e484570e6a59a09703fcec5154b3dab3d4081 = $this->env->getExtension("native_profiler");
        $__internal_a994401b0315cb868c22c34ff73e484570e6a59a09703fcec5154b3dab3d4081->enter($__internal_a994401b0315cb868c22c34ff73e484570e6a59a09703fcec5154b3dab3d4081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a994401b0315cb868c22c34ff73e484570e6a59a09703fcec5154b3dab3d4081->leave($__internal_a994401b0315cb868c22c34ff73e484570e6a59a09703fcec5154b3dab3d4081_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
