<?php

/* Registration/register.html.twig */
class __TwigTemplate_d752d34b4111dd14a6feb59910784bf45d08e5fd6eb1835a6076cd1a6804e542 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "Registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90444348dd496f0e62fab5456298314dc2124b76c628f9f6c263613643812320 = $this->env->getExtension("native_profiler");
        $__internal_90444348dd496f0e62fab5456298314dc2124b76c628f9f6c263613643812320->enter($__internal_90444348dd496f0e62fab5456298314dc2124b76c628f9f6c263613643812320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90444348dd496f0e62fab5456298314dc2124b76c628f9f6c263613643812320->leave($__internal_90444348dd496f0e62fab5456298314dc2124b76c628f9f6c263613643812320_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22c27f37b51dc16b2f6581214f3be61da8449a25de03f7d0a6e2515bf8125dbb = $this->env->getExtension("native_profiler");
        $__internal_22c27f37b51dc16b2f6581214f3be61da8449a25de03f7d0a6e2515bf8125dbb->enter($__internal_22c27f37b51dc16b2f6581214f3be61da8449a25de03f7d0a6e2515bf8125dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tDevenir adhérent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_22c27f37b51dc16b2f6581214f3be61da8449a25de03f7d0a6e2515bf8125dbb->leave($__internal_22c27f37b51dc16b2f6581214f3be61da8449a25de03f7d0a6e2515bf8125dbb_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c555fc04bee22e4f511773c9fde1b19c06ce59241bb4912599b8b393ea0a49d = $this->env->getExtension("native_profiler");
        $__internal_9c555fc04bee22e4f511773c9fde1b19c06ce59241bb4912599b8b393ea0a49d->enter($__internal_9c555fc04bee22e4f511773c9fde1b19c06ce59241bb4912599b8b393ea0a49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "Registration/register.html.twig", 8)->display($context);
        // line 9
        echo "


";
        
        $__internal_9c555fc04bee22e4f511773c9fde1b19c06ce59241bb4912599b8b393ea0a49d->leave($__internal_9c555fc04bee22e4f511773c9fde1b19c06ce59241bb4912599b8b393ea0a49d_prof);

    }

    public function getTemplateName()
    {
        return "Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Devenir adhérent - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
