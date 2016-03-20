<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_39e5894a61223ea9132f78c5e4aca7d28e0c59b39a77fa55d8982c38eefc8487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_d3c0f62bedce8e678d79d833d51f0ba7d1599d553c019e5ed9ba8405bd593109 = $this->env->getExtension("native_profiler");
        $__internal_d3c0f62bedce8e678d79d833d51f0ba7d1599d553c019e5ed9ba8405bd593109->enter($__internal_d3c0f62bedce8e678d79d833d51f0ba7d1599d553c019e5ed9ba8405bd593109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c0f62bedce8e678d79d833d51f0ba7d1599d553c019e5ed9ba8405bd593109->leave($__internal_d3c0f62bedce8e678d79d833d51f0ba7d1599d553c019e5ed9ba8405bd593109_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06f88458a9adf549b18e886e26b8565dab944346c3c8c03cab8536a40f5ada10 = $this->env->getExtension("native_profiler");
        $__internal_06f88458a9adf549b18e886e26b8565dab944346c3c8c03cab8536a40f5ada10->enter($__internal_06f88458a9adf549b18e886e26b8565dab944346c3c8c03cab8536a40f5ada10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_06f88458a9adf549b18e886e26b8565dab944346c3c8c03cab8536a40f5ada10->leave($__internal_06f88458a9adf549b18e886e26b8565dab944346c3c8c03cab8536a40f5ada10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
