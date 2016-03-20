<?php

/* CCIRamScoBundle:Yasmina/Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_c6bf847c8ee821833bc8681dab29335a511494262a2c4fcb56148b2826987e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2f6a9cb08b2698812a934305c6cee52564c30b4cc75298172f664b8436ec83f7 = $this->env->getExtension("native_profiler");
        $__internal_2f6a9cb08b2698812a934305c6cee52564c30b4cc75298172f664b8436ec83f7->enter($__internal_2f6a9cb08b2698812a934305c6cee52564c30b4cc75298172f664b8436ec83f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f6a9cb08b2698812a934305c6cee52564c30b4cc75298172f664b8436ec83f7->leave($__internal_2f6a9cb08b2698812a934305c6cee52564c30b4cc75298172f664b8436ec83f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2b8f0e3962bc5b7c2c7a3ac485b538220952f1ef414cac8b6e043d67277f990 = $this->env->getExtension("native_profiler");
        $__internal_b2b8f0e3962bc5b7c2c7a3ac485b538220952f1ef414cac8b6e043d67277f990->enter($__internal_b2b8f0e3962bc5b7c2c7a3ac485b538220952f1ef414cac8b6e043d67277f990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b2b8f0e3962bc5b7c2c7a3ac485b538220952f1ef414cac8b6e043d67277f990->leave($__internal_b2b8f0e3962bc5b7c2c7a3ac485b538220952f1ef414cac8b6e043d67277f990_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Resetting:passwordAlreadyRequested.html.twig";
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
