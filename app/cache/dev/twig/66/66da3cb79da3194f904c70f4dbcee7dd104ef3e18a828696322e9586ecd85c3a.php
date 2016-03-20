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
        $__internal_48e3d6cfb1c9f5c74392be674ea894baf73223fb2ba64f735356b8ee01c9974d = $this->env->getExtension("native_profiler");
        $__internal_48e3d6cfb1c9f5c74392be674ea894baf73223fb2ba64f735356b8ee01c9974d->enter($__internal_48e3d6cfb1c9f5c74392be674ea894baf73223fb2ba64f735356b8ee01c9974d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e3d6cfb1c9f5c74392be674ea894baf73223fb2ba64f735356b8ee01c9974d->leave($__internal_48e3d6cfb1c9f5c74392be674ea894baf73223fb2ba64f735356b8ee01c9974d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_65c70ba4c99e67231ae2ff1ad62d1ab25f579b36e7315d021afe5bae903c889d = $this->env->getExtension("native_profiler");
        $__internal_65c70ba4c99e67231ae2ff1ad62d1ab25f579b36e7315d021afe5bae903c889d->enter($__internal_65c70ba4c99e67231ae2ff1ad62d1ab25f579b36e7315d021afe5bae903c889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_65c70ba4c99e67231ae2ff1ad62d1ab25f579b36e7315d021afe5bae903c889d->leave($__internal_65c70ba4c99e67231ae2ff1ad62d1ab25f579b36e7315d021afe5bae903c889d_prof);

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
