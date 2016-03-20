<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_aa1e6cd75df23af352c6212ef883fad8941596825f18902aad9ebf534b764bfa extends Twig_Template
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
        $__internal_1919dbf6d89a4595092c4ad6dbb330339571f0b6586559cbc63cd01abfb5e25c = $this->env->getExtension("native_profiler");
        $__internal_1919dbf6d89a4595092c4ad6dbb330339571f0b6586559cbc63cd01abfb5e25c->enter($__internal_1919dbf6d89a4595092c4ad6dbb330339571f0b6586559cbc63cd01abfb5e25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1919dbf6d89a4595092c4ad6dbb330339571f0b6586559cbc63cd01abfb5e25c->leave($__internal_1919dbf6d89a4595092c4ad6dbb330339571f0b6586559cbc63cd01abfb5e25c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_db29563f5bc4622a0c78785d554715491702c0d7d313a6c85f54a9c296c30983 = $this->env->getExtension("native_profiler");
        $__internal_db29563f5bc4622a0c78785d554715491702c0d7d313a6c85f54a9c296c30983->enter($__internal_db29563f5bc4622a0c78785d554715491702c0d7d313a6c85f54a9c296c30983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_db29563f5bc4622a0c78785d554715491702c0d7d313a6c85f54a9c296c30983->leave($__internal_db29563f5bc4622a0c78785d554715491702c0d7d313a6c85f54a9c296c30983_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9b37428b92190d339e1074c752a9b198bdaf1aecdc92e1d67d0ae4b3d8671dcf = $this->env->getExtension("native_profiler");
        $__internal_9b37428b92190d339e1074c752a9b198bdaf1aecdc92e1d67d0ae4b3d8671dcf->enter($__internal_9b37428b92190d339e1074c752a9b198bdaf1aecdc92e1d67d0ae4b3d8671dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9b37428b92190d339e1074c752a9b198bdaf1aecdc92e1d67d0ae4b3d8671dcf->leave($__internal_9b37428b92190d339e1074c752a9b198bdaf1aecdc92e1d67d0ae4b3d8671dcf_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_80ec3c4e146cb6bdefa784267ff60c3161d96aa527aa1bc70c4515c271faaa61 = $this->env->getExtension("native_profiler");
        $__internal_80ec3c4e146cb6bdefa784267ff60c3161d96aa527aa1bc70c4515c271faaa61->enter($__internal_80ec3c4e146cb6bdefa784267ff60c3161d96aa527aa1bc70c4515c271faaa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_80ec3c4e146cb6bdefa784267ff60c3161d96aa527aa1bc70c4515c271faaa61->leave($__internal_80ec3c4e146cb6bdefa784267ff60c3161d96aa527aa1bc70c4515c271faaa61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
