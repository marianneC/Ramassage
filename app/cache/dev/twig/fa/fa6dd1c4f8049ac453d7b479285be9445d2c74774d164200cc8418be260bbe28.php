<?php

/* @CCIRamSco/layout.html.twig */
class __TwigTemplate_219b1547458162687534067320377353486114519b278976f061743a774ab8bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCIRamScoBundle:Yasmina:index.html.twig", "@CCIRamSco/layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCIRamScoBundle:Yasmina:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee6c7bb345f818c5f38f05f687f2b501b0814e91582ffb007db938560719deee = $this->env->getExtension("native_profiler");
        $__internal_ee6c7bb345f818c5f38f05f687f2b501b0814e91582ffb007db938560719deee->enter($__internal_ee6c7bb345f818c5f38f05f687f2b501b0814e91582ffb007db938560719deee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee6c7bb345f818c5f38f05f687f2b501b0814e91582ffb007db938560719deee->leave($__internal_ee6c7bb345f818c5f38f05f687f2b501b0814e91582ffb007db938560719deee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd325f962302ec453c48270055fa315a46e9409a9d0b34ebc58045a07a2de700 = $this->env->getExtension("native_profiler");
        $__internal_fd325f962302ec453c48270055fa315a46e9409a9d0b34ebc58045a07a2de700->enter($__internal_fd325f962302ec453c48270055fa315a46e9409a9d0b34ebc58045a07a2de700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Le tapis roulant";
        
        $__internal_fd325f962302ec453c48270055fa315a46e9409a9d0b34ebc58045a07a2de700->leave($__internal_fd325f962302ec453c48270055fa315a46e9409a9d0b34ebc58045a07a2de700_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af37bd82e4a357444fbd94bd721085dab982da70753b26731d805c6b5522ef9f = $this->env->getExtension("native_profiler");
        $__internal_af37bd82e4a357444fbd94bd721085dab982da70753b26731d805c6b5522ef9f->enter($__internal_af37bd82e4a357444fbd94bd721085dab982da70753b26731d805c6b5522ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_af37bd82e4a357444fbd94bd721085dab982da70753b26731d805c6b5522ef9f->leave($__internal_af37bd82e4a357444fbd94bd721085dab982da70753b26731d805c6b5522ef9f_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_510474c00082a794a886b89431fb2725c617bcab5befd99642765652f9312d4e = $this->env->getExtension("native_profiler");
        $__internal_510474c00082a794a886b89431fb2725c617bcab5befd99642765652f9312d4e->enter($__internal_510474c00082a794a886b89431fb2725c617bcab5befd99642765652f9312d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
  ";
        
        $__internal_510474c00082a794a886b89431fb2725c617bcab5befd99642765652f9312d4e->leave($__internal_510474c00082a794a886b89431fb2725c617bcab5befd99642765652f9312d4e_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  54 => 9,  48 => 8,  36 => 3,  11 => 1,);
    }
}
/* {% extends "CCIRamScoBundle:Yasmina:index.html.twig" %}*/
/* */
/*   {% block title %}Le tapis roulant{% endblock %}*/
/*    */
/*     */
/*   */
/*   */
/*   {% block fos_user_content %}*/
/* {% block content %}*/
/* */
/*   {% endblock %}*/
/* {% endblock %}*/
/* */
/* */
