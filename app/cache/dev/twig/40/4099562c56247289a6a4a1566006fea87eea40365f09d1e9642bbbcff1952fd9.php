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
        $__internal_78d43e83c7c6ba35e7142e41a353585a55ee0e8d5a9b261efea01bb3f3d0ba58 = $this->env->getExtension("native_profiler");
        $__internal_78d43e83c7c6ba35e7142e41a353585a55ee0e8d5a9b261efea01bb3f3d0ba58->enter($__internal_78d43e83c7c6ba35e7142e41a353585a55ee0e8d5a9b261efea01bb3f3d0ba58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78d43e83c7c6ba35e7142e41a353585a55ee0e8d5a9b261efea01bb3f3d0ba58->leave($__internal_78d43e83c7c6ba35e7142e41a353585a55ee0e8d5a9b261efea01bb3f3d0ba58_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a80b8f72b02fa2c536a3a767b63a5e5363ddf631121f1bb4158c64b0c2904ff7 = $this->env->getExtension("native_profiler");
        $__internal_a80b8f72b02fa2c536a3a767b63a5e5363ddf631121f1bb4158c64b0c2904ff7->enter($__internal_a80b8f72b02fa2c536a3a767b63a5e5363ddf631121f1bb4158c64b0c2904ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a80b8f72b02fa2c536a3a767b63a5e5363ddf631121f1bb4158c64b0c2904ff7->leave($__internal_a80b8f72b02fa2c536a3a767b63a5e5363ddf631121f1bb4158c64b0c2904ff7_prof);

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
