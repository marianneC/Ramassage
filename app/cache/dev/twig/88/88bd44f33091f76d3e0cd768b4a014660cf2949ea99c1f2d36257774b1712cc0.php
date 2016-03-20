<?php

/* @CCIRamSco/Yasmina/Resetting/checkEmail.html.twig */
class __TwigTemplate_e67c1b7dd72529a8237b3961658e52796b357e97f3fd7557dfe92046426bfb03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CCIRamSco/Yasmina/Resetting/checkEmail.html.twig", 1);
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
        $__internal_0acaab1bb80724ef606642ddab92c0322a3f4484d8574b8b53a39891265b7267 = $this->env->getExtension("native_profiler");
        $__internal_0acaab1bb80724ef606642ddab92c0322a3f4484d8574b8b53a39891265b7267->enter($__internal_0acaab1bb80724ef606642ddab92c0322a3f4484d8574b8b53a39891265b7267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0acaab1bb80724ef606642ddab92c0322a3f4484d8574b8b53a39891265b7267->leave($__internal_0acaab1bb80724ef606642ddab92c0322a3f4484d8574b8b53a39891265b7267_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b9400e04509637cf3e49189e9f061b16b55c2b3577bca54e9e980fbde2fcb4a = $this->env->getExtension("native_profiler");
        $__internal_8b9400e04509637cf3e49189e9f061b16b55c2b3577bca54e9e980fbde2fcb4a->enter($__internal_8b9400e04509637cf3e49189e9f061b16b55c2b3577bca54e9e980fbde2fcb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8b9400e04509637cf3e49189e9f061b16b55c2b3577bca54e9e980fbde2fcb4a->leave($__internal_8b9400e04509637cf3e49189e9f061b16b55c2b3577bca54e9e980fbde2fcb4a_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Resetting/checkEmail.html.twig";
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
