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
        $__internal_cb36d309aa6fda8eec26e2fc79d6d8cabd5a414ed1cfc237ec6082903cc36f19 = $this->env->getExtension("native_profiler");
        $__internal_cb36d309aa6fda8eec26e2fc79d6d8cabd5a414ed1cfc237ec6082903cc36f19->enter($__internal_cb36d309aa6fda8eec26e2fc79d6d8cabd5a414ed1cfc237ec6082903cc36f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb36d309aa6fda8eec26e2fc79d6d8cabd5a414ed1cfc237ec6082903cc36f19->leave($__internal_cb36d309aa6fda8eec26e2fc79d6d8cabd5a414ed1cfc237ec6082903cc36f19_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a249ef91bbbb61cb3506d1f67e1a33f165850549c925b0f48af642d6babf5a74 = $this->env->getExtension("native_profiler");
        $__internal_a249ef91bbbb61cb3506d1f67e1a33f165850549c925b0f48af642d6babf5a74->enter($__internal_a249ef91bbbb61cb3506d1f67e1a33f165850549c925b0f48af642d6babf5a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a249ef91bbbb61cb3506d1f67e1a33f165850549c925b0f48af642d6babf5a74->leave($__internal_a249ef91bbbb61cb3506d1f67e1a33f165850549c925b0f48af642d6babf5a74_prof);

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
