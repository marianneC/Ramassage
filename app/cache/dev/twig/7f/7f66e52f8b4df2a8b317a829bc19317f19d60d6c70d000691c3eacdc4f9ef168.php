<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9edeb894b402119aa69f6bdcbdf4f2c8e0923666e2958344178b647485ed0d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2440b7db395f6985dcd4d919ee2aac9616d94b1bd0077a831ceb1e73f615f686 = $this->env->getExtension("native_profiler");
        $__internal_2440b7db395f6985dcd4d919ee2aac9616d94b1bd0077a831ceb1e73f615f686->enter($__internal_2440b7db395f6985dcd4d919ee2aac9616d94b1bd0077a831ceb1e73f615f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2440b7db395f6985dcd4d919ee2aac9616d94b1bd0077a831ceb1e73f615f686->leave($__internal_2440b7db395f6985dcd4d919ee2aac9616d94b1bd0077a831ceb1e73f615f686_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_411551dabb9408eeec266e929a717c1dabf3628bc5beeba698765ebeca960e43 = $this->env->getExtension("native_profiler");
        $__internal_411551dabb9408eeec266e929a717c1dabf3628bc5beeba698765ebeca960e43->enter($__internal_411551dabb9408eeec266e929a717c1dabf3628bc5beeba698765ebeca960e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_411551dabb9408eeec266e929a717c1dabf3628bc5beeba698765ebeca960e43->leave($__internal_411551dabb9408eeec266e929a717c1dabf3628bc5beeba698765ebeca960e43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec6bd8078cc27bda907b29d3e97ef26ea7f4bd3e4ffe5819d03eb094222c67f = $this->env->getExtension("native_profiler");
        $__internal_5ec6bd8078cc27bda907b29d3e97ef26ea7f4bd3e4ffe5819d03eb094222c67f->enter($__internal_5ec6bd8078cc27bda907b29d3e97ef26ea7f4bd3e4ffe5819d03eb094222c67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5ec6bd8078cc27bda907b29d3e97ef26ea7f4bd3e4ffe5819d03eb094222c67f->leave($__internal_5ec6bd8078cc27bda907b29d3e97ef26ea7f4bd3e4ffe5819d03eb094222c67f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
