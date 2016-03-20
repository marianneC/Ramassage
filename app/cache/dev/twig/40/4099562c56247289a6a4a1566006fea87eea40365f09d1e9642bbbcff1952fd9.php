<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_d96f1b9d091ed5301954f39eac526f20a08c43634349a05c6dabbbabc3803a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_a30e2a20bb43973beedf79536a1f180a3972c2b190faf90d2125e9a3bf0ec492 = $this->env->getExtension("native_profiler");
        $__internal_a30e2a20bb43973beedf79536a1f180a3972c2b190faf90d2125e9a3bf0ec492->enter($__internal_a30e2a20bb43973beedf79536a1f180a3972c2b190faf90d2125e9a3bf0ec492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30e2a20bb43973beedf79536a1f180a3972c2b190faf90d2125e9a3bf0ec492->leave($__internal_a30e2a20bb43973beedf79536a1f180a3972c2b190faf90d2125e9a3bf0ec492_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83e1a1f261f68d6422bff622b9bf454f4980efe613ea2916a57f775a1d7e2c79 = $this->env->getExtension("native_profiler");
        $__internal_83e1a1f261f68d6422bff622b9bf454f4980efe613ea2916a57f775a1d7e2c79->enter($__internal_83e1a1f261f68d6422bff622b9bf454f4980efe613ea2916a57f775a1d7e2c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_83e1a1f261f68d6422bff622b9bf454f4980efe613ea2916a57f775a1d7e2c79->leave($__internal_83e1a1f261f68d6422bff622b9bf454f4980efe613ea2916a57f775a1d7e2c79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
