<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e0161b0a2b539389e7346707b3e0fd0c2b4f25c5ac5e55a22d86e2caff052a2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_af426ced46abaf6d95f57cd5a5799aea0cd056f04c587dfc08b4ea83d0fee36e = $this->env->getExtension("native_profiler");
        $__internal_af426ced46abaf6d95f57cd5a5799aea0cd056f04c587dfc08b4ea83d0fee36e->enter($__internal_af426ced46abaf6d95f57cd5a5799aea0cd056f04c587dfc08b4ea83d0fee36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af426ced46abaf6d95f57cd5a5799aea0cd056f04c587dfc08b4ea83d0fee36e->leave($__internal_af426ced46abaf6d95f57cd5a5799aea0cd056f04c587dfc08b4ea83d0fee36e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51e9701ce5bb427e7c692067d4a3d655c9b3d17394500d411e5f7fe4f601478e = $this->env->getExtension("native_profiler");
        $__internal_51e9701ce5bb427e7c692067d4a3d655c9b3d17394500d411e5f7fe4f601478e->enter($__internal_51e9701ce5bb427e7c692067d4a3d655c9b3d17394500d411e5f7fe4f601478e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_51e9701ce5bb427e7c692067d4a3d655c9b3d17394500d411e5f7fe4f601478e->leave($__internal_51e9701ce5bb427e7c692067d4a3d655c9b3d17394500d411e5f7fe4f601478e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
