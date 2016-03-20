<?php

/* @CCIRamSco/Yasmina/Registration/email.txt.twig */
class __TwigTemplate_e7377ebeb0b2070cbcc5534ad58b8d1cdf5e43fb27ec533c2ed637a619b44a96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e6ca1df0692478c78b1e45a8c542c4ae90bd12c19f1fdba6f2da5c558887766 = $this->env->getExtension("native_profiler");
        $__internal_2e6ca1df0692478c78b1e45a8c542c4ae90bd12c19f1fdba6f2da5c558887766->enter($__internal_2e6ca1df0692478c78b1e45a8c542c4ae90bd12c19f1fdba6f2da5c558887766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CCIRamSco/Yasmina/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2e6ca1df0692478c78b1e45a8c542c4ae90bd12c19f1fdba6f2da5c558887766->leave($__internal_2e6ca1df0692478c78b1e45a8c542c4ae90bd12c19f1fdba6f2da5c558887766_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f52e409822bb973eda07065b3682be18d17cd1a20f9245d98e0012a7129788ff = $this->env->getExtension("native_profiler");
        $__internal_f52e409822bb973eda07065b3682be18d17cd1a20f9245d98e0012a7129788ff->enter($__internal_f52e409822bb973eda07065b3682be18d17cd1a20f9245d98e0012a7129788ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f52e409822bb973eda07065b3682be18d17cd1a20f9245d98e0012a7129788ff->leave($__internal_f52e409822bb973eda07065b3682be18d17cd1a20f9245d98e0012a7129788ff_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_692c3bd52f60c934639d0cc42cd05466138f492d776c273a68d4779564900842 = $this->env->getExtension("native_profiler");
        $__internal_692c3bd52f60c934639d0cc42cd05466138f492d776c273a68d4779564900842->enter($__internal_692c3bd52f60c934639d0cc42cd05466138f492d776c273a68d4779564900842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_692c3bd52f60c934639d0cc42cd05466138f492d776c273a68d4779564900842->leave($__internal_692c3bd52f60c934639d0cc42cd05466138f492d776c273a68d4779564900842_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_deff7634d4ed2ffd35d09f84930c5bf81969fc462f09b4234d8e7c25e79b58ef = $this->env->getExtension("native_profiler");
        $__internal_deff7634d4ed2ffd35d09f84930c5bf81969fc462f09b4234d8e7c25e79b58ef->enter($__internal_deff7634d4ed2ffd35d09f84930c5bf81969fc462f09b4234d8e7c25e79b58ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_deff7634d4ed2ffd35d09f84930c5bf81969fc462f09b4234d8e7c25e79b58ef->leave($__internal_deff7634d4ed2ffd35d09f84930c5bf81969fc462f09b4234d8e7c25e79b58ef_prof);

    }

    public function getTemplateName()
    {
        return "@CCIRamSco/Yasmina/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
