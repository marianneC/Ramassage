<?php

/* :Registration:register.html.twig */
class __TwigTemplate_fa6008473e76c82dec3da1ea2732cbab09391731a37bbd46e7d1491ee7443463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle::layout.html.twig", ":Registration:register.html.twig", 1);
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
        $__internal_8ad3b19cc79270332a1db5edc4fe3a13436682c62618e9500c2911f4e03ddf02 = $this->env->getExtension("native_profiler");
        $__internal_8ad3b19cc79270332a1db5edc4fe3a13436682c62618e9500c2911f4e03ddf02->enter($__internal_8ad3b19cc79270332a1db5edc4fe3a13436682c62618e9500c2911f4e03ddf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ad3b19cc79270332a1db5edc4fe3a13436682c62618e9500c2911f4e03ddf02->leave($__internal_8ad3b19cc79270332a1db5edc4fe3a13436682c62618e9500c2911f4e03ddf02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c26de113b3bd93cab871ecc1eff87e4075121ef51060db10334876b1dcf807 = $this->env->getExtension("native_profiler");
        $__internal_89c26de113b3bd93cab871ecc1eff87e4075121ef51060db10334876b1dcf807->enter($__internal_89c26de113b3bd93cab871ecc1eff87e4075121ef51060db10334876b1dcf807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tDevenir adhérent - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_89c26de113b3bd93cab871ecc1eff87e4075121ef51060db10334876b1dcf807->leave($__internal_89c26de113b3bd93cab871ecc1eff87e4075121ef51060db10334876b1dcf807_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74f68c739a409359d87181d27e811101c53ca77e6c9729f8b002896236c47713 = $this->env->getExtension("native_profiler");
        $__internal_74f68c739a409359d87181d27e811101c53ca77e6c9729f8b002896236c47713->enter($__internal_74f68c739a409359d87181d27e811101c53ca77e6c9729f8b002896236c47713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", ":Registration:register.html.twig", 8)->display($context);
        // line 9
        echo "


";
        
        $__internal_74f68c739a409359d87181d27e811101c53ca77e6c9729f8b002896236c47713->leave($__internal_74f68c739a409359d87181d27e811101c53ca77e6c9729f8b002896236c47713_prof);

    }

    public function getTemplateName()
    {
        return ":Registration:register.html.twig";
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
