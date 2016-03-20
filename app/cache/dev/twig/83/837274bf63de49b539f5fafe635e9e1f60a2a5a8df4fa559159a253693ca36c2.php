<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_0e2bef6ce1353d67c112cb341c69f761c7460cebe243930e7655481792784273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_0cb1586cfe2a4f3a693e04245bb9523643628ddbf132f8dfd6fb5403a6dd8da2 = $this->env->getExtension("native_profiler");
        $__internal_0cb1586cfe2a4f3a693e04245bb9523643628ddbf132f8dfd6fb5403a6dd8da2->enter($__internal_0cb1586cfe2a4f3a693e04245bb9523643628ddbf132f8dfd6fb5403a6dd8da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb1586cfe2a4f3a693e04245bb9523643628ddbf132f8dfd6fb5403a6dd8da2->leave($__internal_0cb1586cfe2a4f3a693e04245bb9523643628ddbf132f8dfd6fb5403a6dd8da2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd805308fc076af2c23c84d231b1ec45ceaab7853d9463b2e735d335bb9830a2 = $this->env->getExtension("native_profiler");
        $__internal_bd805308fc076af2c23c84d231b1ec45ceaab7853d9463b2e735d335bb9830a2->enter($__internal_bd805308fc076af2c23c84d231b1ec45ceaab7853d9463b2e735d335bb9830a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bd805308fc076af2c23c84d231b1ec45ceaab7853d9463b2e735d335bb9830a2->leave($__internal_bd805308fc076af2c23c84d231b1ec45ceaab7853d9463b2e735d335bb9830a2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
