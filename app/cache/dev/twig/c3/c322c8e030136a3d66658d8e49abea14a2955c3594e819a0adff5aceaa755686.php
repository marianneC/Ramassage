<?php

/* CCIRamScoBundle:Yasmina/Resetting:checkEmail.html.twig */
class __TwigTemplate_8eb834595a9a711c662b74eff4c76c71f423807550d5017fabd02d7d8c7bd22b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CCIRamScoBundle:Yasmina/Resetting:checkEmail.html.twig", 1);
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
        $__internal_6551aeb6a07fbbfe198258d80509e8e7ae6e4af0cb816ea994cfe4d3f8af1205 = $this->env->getExtension("native_profiler");
        $__internal_6551aeb6a07fbbfe198258d80509e8e7ae6e4af0cb816ea994cfe4d3f8af1205->enter($__internal_6551aeb6a07fbbfe198258d80509e8e7ae6e4af0cb816ea994cfe4d3f8af1205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6551aeb6a07fbbfe198258d80509e8e7ae6e4af0cb816ea994cfe4d3f8af1205->leave($__internal_6551aeb6a07fbbfe198258d80509e8e7ae6e4af0cb816ea994cfe4d3f8af1205_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf525f16fa9bfae447f144d2b5aaa6ff6ce919bc7ceb7880cc92074a4f383741 = $this->env->getExtension("native_profiler");
        $__internal_bf525f16fa9bfae447f144d2b5aaa6ff6ce919bc7ceb7880cc92074a4f383741->enter($__internal_bf525f16fa9bfae447f144d2b5aaa6ff6ce919bc7ceb7880cc92074a4f383741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_bf525f16fa9bfae447f144d2b5aaa6ff6ce919bc7ceb7880cc92074a4f383741->leave($__internal_bf525f16fa9bfae447f144d2b5aaa6ff6ce919bc7ceb7880cc92074a4f383741_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Resetting:checkEmail.html.twig";
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
