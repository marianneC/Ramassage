<?php

/* CCIRamScoBundle:Yasmina/Registration:email.txt.twig */
class __TwigTemplate_5d70ad01434fc1f347d4601f9965b8df5287ba0f24f4457b8db4e7dc27e81236 extends Twig_Template
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
        $__internal_0604c310511fdc9e84d8559a7ab37d6718fc121b583b66a0a26f383ecf351cba = $this->env->getExtension("native_profiler");
        $__internal_0604c310511fdc9e84d8559a7ab37d6718fc121b583b66a0a26f383ecf351cba->enter($__internal_0604c310511fdc9e84d8559a7ab37d6718fc121b583b66a0a26f383ecf351cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CCIRamScoBundle:Yasmina/Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0604c310511fdc9e84d8559a7ab37d6718fc121b583b66a0a26f383ecf351cba->leave($__internal_0604c310511fdc9e84d8559a7ab37d6718fc121b583b66a0a26f383ecf351cba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b696541f6a414d28a5e7cb937d10ef053b3227eb39f4b38fc85f14bb72c6696 = $this->env->getExtension("native_profiler");
        $__internal_0b696541f6a414d28a5e7cb937d10ef053b3227eb39f4b38fc85f14bb72c6696->enter($__internal_0b696541f6a414d28a5e7cb937d10ef053b3227eb39f4b38fc85f14bb72c6696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0b696541f6a414d28a5e7cb937d10ef053b3227eb39f4b38fc85f14bb72c6696->leave($__internal_0b696541f6a414d28a5e7cb937d10ef053b3227eb39f4b38fc85f14bb72c6696_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ebe9ba0a25060b54d3025a9752b55e67c0a3566f8e22e15ce0d2b3511d5ede08 = $this->env->getExtension("native_profiler");
        $__internal_ebe9ba0a25060b54d3025a9752b55e67c0a3566f8e22e15ce0d2b3511d5ede08->enter($__internal_ebe9ba0a25060b54d3025a9752b55e67c0a3566f8e22e15ce0d2b3511d5ede08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ebe9ba0a25060b54d3025a9752b55e67c0a3566f8e22e15ce0d2b3511d5ede08->leave($__internal_ebe9ba0a25060b54d3025a9752b55e67c0a3566f8e22e15ce0d2b3511d5ede08_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3fbb2ef1dee2321efb94793a8e76958830244b51b0507856f7b92de35200fff6 = $this->env->getExtension("native_profiler");
        $__internal_3fbb2ef1dee2321efb94793a8e76958830244b51b0507856f7b92de35200fff6->enter($__internal_3fbb2ef1dee2321efb94793a8e76958830244b51b0507856f7b92de35200fff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3fbb2ef1dee2321efb94793a8e76958830244b51b0507856f7b92de35200fff6->leave($__internal_3fbb2ef1dee2321efb94793a8e76958830244b51b0507856f7b92de35200fff6_prof);

    }

    public function getTemplateName()
    {
        return "CCIRamScoBundle:Yasmina/Registration:email.txt.twig";
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
