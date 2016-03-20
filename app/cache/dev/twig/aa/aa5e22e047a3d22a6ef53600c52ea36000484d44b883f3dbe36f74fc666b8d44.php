<?php

/* @CCIRamSco/Yasmina/Resetting/reset.html.twig */
class __TwigTemplate_48a1e7049c6f9c7c45f4500981676ebe0c05767c98f9da698f72e57260c13710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Resetting/reset.html.twig", 1);
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
        $__internal_440d7cb29014df95165e09b300b5323fd153afb3927604fea40dc255e9bf0c55 = $this->env->getExtension("native_profiler");
        $__internal_440d7cb29014df95165e09b300b5323fd153afb3927604fea40dc255e9bf0c55->enter($__internal_440d7cb29014df95165e09b300b5323fd153afb3927604fea40dc255e9bf0c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_440d7cb29014df95165e09b300b5323fd153afb3927604fea40dc255e9bf0c55->leave($__internal_440d7cb29014df95165e09b300b5323fd153afb3927604fea40dc255e9bf0c55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ea97c6937a0b7ecbc9d67aee1e49b4cc18171f9ab847e3e3c63f24c60f6c802 = $this->env->getExtension("native_profiler");
        $__internal_9ea97c6937a0b7ecbc9d67aee1e49b4cc18171f9ab847e3e3c63f24c60f6c802->enter($__internal_9ea97c6937a0b7ecbc9d67aee1e49b4cc18171f9ab847e3e3c63f24c60f6c802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@CCIRamSco/Yasmina/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9ea97c6937a0b7ecbc9d67aee1e49b4cc18171f9ab847e3e3c63f24c60f6c802->leave($__internal_9ea97c6937a0b7ecbc9d67aee1e49b4cc18171f9ab847e3e3c63f24c60f6c802_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Resetting/reset.html.twig";
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
