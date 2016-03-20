<?php

/* @CCIRamSco/Yasmina/Registration/register.html.twig */
class __TwigTemplate_7f9acf9587853aac047cc20fb6e301ebee8906a07162870398a1da89639f41ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", "@CCIRamSco/Yasmina/Registration/register.html.twig", 1);
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
        $__internal_1e259f34bfbf0d69d9f23efed46e420787fe0d9b7016f4022de74fb4ee7c5244 = $this->env->getExtension("native_profiler");
        $__internal_1e259f34bfbf0d69d9f23efed46e420787fe0d9b7016f4022de74fb4ee7c5244->enter($__internal_1e259f34bfbf0d69d9f23efed46e420787fe0d9b7016f4022de74fb4ee7c5244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e259f34bfbf0d69d9f23efed46e420787fe0d9b7016f4022de74fb4ee7c5244->leave($__internal_1e259f34bfbf0d69d9f23efed46e420787fe0d9b7016f4022de74fb4ee7c5244_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1011e4898f6c144f7ee7a56b09537e97babed8a42d998b088dbbd33a6f69d2c = $this->env->getExtension("native_profiler");
        $__internal_b1011e4898f6c144f7ee7a56b09537e97babed8a42d998b088dbbd33a6f69d2c->enter($__internal_b1011e4898f6c144f7ee7a56b09537e97babed8a42d998b088dbbd33a6f69d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tDevenir adhérent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b1011e4898f6c144f7ee7a56b09537e97babed8a42d998b088dbbd33a6f69d2c->leave($__internal_b1011e4898f6c144f7ee7a56b09537e97babed8a42d998b088dbbd33a6f69d2c_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2425f8513efd3960f95ec8e288f08beb6863338b4bbbbfeb27260e3f00b6109d = $this->env->getExtension("native_profiler");
        $__internal_2425f8513efd3960f95ec8e288f08beb6863338b4bbbbfeb27260e3f00b6109d->enter($__internal_2425f8513efd3960f95ec8e288f08beb6863338b4bbbbfeb27260e3f00b6109d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@CCIRamSco/Yasmina/Registration/register.html.twig", 8)->display($context);
        // line 9
        echo "


";
        
        $__internal_2425f8513efd3960f95ec8e288f08beb6863338b4bbbbfeb27260e3f00b6109d->leave($__internal_2425f8513efd3960f95ec8e288f08beb6863338b4bbbbfeb27260e3f00b6109d_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Registration/register.html.twig";
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
