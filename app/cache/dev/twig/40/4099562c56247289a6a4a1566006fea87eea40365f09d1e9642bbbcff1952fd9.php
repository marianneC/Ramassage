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
        $__internal_bf3cb0ab43d5e5186463d6d564265eeb807dbc0ad7b4bcb5bc4ce793864c42e5 = $this->env->getExtension("native_profiler");
        $__internal_bf3cb0ab43d5e5186463d6d564265eeb807dbc0ad7b4bcb5bc4ce793864c42e5->enter($__internal_bf3cb0ab43d5e5186463d6d564265eeb807dbc0ad7b4bcb5bc4ce793864c42e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf3cb0ab43d5e5186463d6d564265eeb807dbc0ad7b4bcb5bc4ce793864c42e5->leave($__internal_bf3cb0ab43d5e5186463d6d564265eeb807dbc0ad7b4bcb5bc4ce793864c42e5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f96159278c5f61a9d52dbbd38100641cb1d5a6cdccf8f3079469be6aa3bcb08 = $this->env->getExtension("native_profiler");
        $__internal_2f96159278c5f61a9d52dbbd38100641cb1d5a6cdccf8f3079469be6aa3bcb08->enter($__internal_2f96159278c5f61a9d52dbbd38100641cb1d5a6cdccf8f3079469be6aa3bcb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2f96159278c5f61a9d52dbbd38100641cb1d5a6cdccf8f3079469be6aa3bcb08->leave($__internal_2f96159278c5f61a9d52dbbd38100641cb1d5a6cdccf8f3079469be6aa3bcb08_prof);

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
