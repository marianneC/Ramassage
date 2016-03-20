<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_747e969167bd9e200d0af87f195aa5909bdeae9cca847e0d31750c1fa5f2ce50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8447cf86cd7b58e5a970e24f7625b955c29ed64420ea2403f92b0df6956cac5f = $this->env->getExtension("native_profiler");
        $__internal_8447cf86cd7b58e5a970e24f7625b955c29ed64420ea2403f92b0df6956cac5f->enter($__internal_8447cf86cd7b58e5a970e24f7625b955c29ed64420ea2403f92b0df6956cac5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8447cf86cd7b58e5a970e24f7625b955c29ed64420ea2403f92b0df6956cac5f->leave($__internal_8447cf86cd7b58e5a970e24f7625b955c29ed64420ea2403f92b0df6956cac5f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0b0dd64f54f7ae00a670047502f5e6a0b414358b14400a7e14d6bee16b5af05 = $this->env->getExtension("native_profiler");
        $__internal_b0b0dd64f54f7ae00a670047502f5e6a0b414358b14400a7e14d6bee16b5af05->enter($__internal_b0b0dd64f54f7ae00a670047502f5e6a0b414358b14400a7e14d6bee16b5af05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b0b0dd64f54f7ae00a670047502f5e6a0b414358b14400a7e14d6bee16b5af05->leave($__internal_b0b0dd64f54f7ae00a670047502f5e6a0b414358b14400a7e14d6bee16b5af05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
