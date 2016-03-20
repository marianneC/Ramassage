<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8f479571cc286834a68f6b924ec4b5da6c340e82cc9865e88010f9cbd8eea094 extends Twig_Template
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
        $__internal_92d80869c438468cb1876bb7efe29613a03f4b78dc6551eda8b32973a795e149 = $this->env->getExtension("native_profiler");
        $__internal_92d80869c438468cb1876bb7efe29613a03f4b78dc6551eda8b32973a795e149->enter($__internal_92d80869c438468cb1876bb7efe29613a03f4b78dc6551eda8b32973a795e149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_92d80869c438468cb1876bb7efe29613a03f4b78dc6551eda8b32973a795e149->leave($__internal_92d80869c438468cb1876bb7efe29613a03f4b78dc6551eda8b32973a795e149_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bf9608e7fa54944eb1838eb89c93ae022752cecae27526116378d5c94a820637 = $this->env->getExtension("native_profiler");
        $__internal_bf9608e7fa54944eb1838eb89c93ae022752cecae27526116378d5c94a820637->enter($__internal_bf9608e7fa54944eb1838eb89c93ae022752cecae27526116378d5c94a820637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bf9608e7fa54944eb1838eb89c93ae022752cecae27526116378d5c94a820637->leave($__internal_bf9608e7fa54944eb1838eb89c93ae022752cecae27526116378d5c94a820637_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_13bd2e9a484660be3cebb81b07e4d437a8b8bcfdc0b102e0c0d88d8ba8ce3521 = $this->env->getExtension("native_profiler");
        $__internal_13bd2e9a484660be3cebb81b07e4d437a8b8bcfdc0b102e0c0d88d8ba8ce3521->enter($__internal_13bd2e9a484660be3cebb81b07e4d437a8b8bcfdc0b102e0c0d88d8ba8ce3521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_13bd2e9a484660be3cebb81b07e4d437a8b8bcfdc0b102e0c0d88d8ba8ce3521->leave($__internal_13bd2e9a484660be3cebb81b07e4d437a8b8bcfdc0b102e0c0d88d8ba8ce3521_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d999c6dcc93a488a100ee0185f847eb4b5507d9ea952d4cfba3bfbc5b13b8b5d = $this->env->getExtension("native_profiler");
        $__internal_d999c6dcc93a488a100ee0185f847eb4b5507d9ea952d4cfba3bfbc5b13b8b5d->enter($__internal_d999c6dcc93a488a100ee0185f847eb4b5507d9ea952d4cfba3bfbc5b13b8b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d999c6dcc93a488a100ee0185f847eb4b5507d9ea952d4cfba3bfbc5b13b8b5d->leave($__internal_d999c6dcc93a488a100ee0185f847eb4b5507d9ea952d4cfba3bfbc5b13b8b5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
