<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_adb2f06daab12684ad317a260c4489fd4a97d4eaed05a800cb8b06b34eeaff60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_bce1244c54cda8d138359a24d554857d19cdb12f335b537e8a789464564ba61b = $this->env->getExtension("native_profiler");
        $__internal_bce1244c54cda8d138359a24d554857d19cdb12f335b537e8a789464564ba61b->enter($__internal_bce1244c54cda8d138359a24d554857d19cdb12f335b537e8a789464564ba61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce1244c54cda8d138359a24d554857d19cdb12f335b537e8a789464564ba61b->leave($__internal_bce1244c54cda8d138359a24d554857d19cdb12f335b537e8a789464564ba61b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_918ff2b5d5eb2bfae2a0183376b018c1f5046e76e5584c1a08114810cd2df52a = $this->env->getExtension("native_profiler");
        $__internal_918ff2b5d5eb2bfae2a0183376b018c1f5046e76e5584c1a08114810cd2df52a->enter($__internal_918ff2b5d5eb2bfae2a0183376b018c1f5046e76e5584c1a08114810cd2df52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_918ff2b5d5eb2bfae2a0183376b018c1f5046e76e5584c1a08114810cd2df52a->leave($__internal_918ff2b5d5eb2bfae2a0183376b018c1f5046e76e5584c1a08114810cd2df52a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
