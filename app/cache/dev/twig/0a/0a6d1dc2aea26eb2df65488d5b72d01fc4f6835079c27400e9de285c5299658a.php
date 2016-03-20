<?php

/* @CCIRamSco/Yasmina/Group/new.html.twig */
class __TwigTemplate_899787f46a261a3f453c4629b008b9238ef785f285a73337ebc2cf9cac8b0584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Group/new.html.twig", 1);
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
        $__internal_fcad37d98e61fd27a503d642d0c0177fa74f88241a6865fea197705d6bbede1f = $this->env->getExtension("native_profiler");
        $__internal_fcad37d98e61fd27a503d642d0c0177fa74f88241a6865fea197705d6bbede1f->enter($__internal_fcad37d98e61fd27a503d642d0c0177fa74f88241a6865fea197705d6bbede1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcad37d98e61fd27a503d642d0c0177fa74f88241a6865fea197705d6bbede1f->leave($__internal_fcad37d98e61fd27a503d642d0c0177fa74f88241a6865fea197705d6bbede1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af0cf17b7e59788a9773721d252c98d826d57390e244a5cc3558e31e828dbb82 = $this->env->getExtension("native_profiler");
        $__internal_af0cf17b7e59788a9773721d252c98d826d57390e244a5cc3558e31e828dbb82->enter($__internal_af0cf17b7e59788a9773721d252c98d826d57390e244a5cc3558e31e828dbb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@CCIRamSco/Yasmina/Group/new.html.twig", 4)->display($context);
        
        $__internal_af0cf17b7e59788a9773721d252c98d826d57390e244a5cc3558e31e828dbb82->leave($__internal_af0cf17b7e59788a9773721d252c98d826d57390e244a5cc3558e31e828dbb82_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
