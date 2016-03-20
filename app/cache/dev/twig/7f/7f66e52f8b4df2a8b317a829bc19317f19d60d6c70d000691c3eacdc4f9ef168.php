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
        $__internal_c7c85782010aca43a59660bee5a5dd641a104ec3217ab779ac26f5d61f46f53f = $this->env->getExtension("native_profiler");
        $__internal_c7c85782010aca43a59660bee5a5dd641a104ec3217ab779ac26f5d61f46f53f->enter($__internal_c7c85782010aca43a59660bee5a5dd641a104ec3217ab779ac26f5d61f46f53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c85782010aca43a59660bee5a5dd641a104ec3217ab779ac26f5d61f46f53f->leave($__internal_c7c85782010aca43a59660bee5a5dd641a104ec3217ab779ac26f5d61f46f53f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c19ca17cd9d2e8ac9bade9ada06d0b5d3633d3c492a4b792cebf52481d50679d = $this->env->getExtension("native_profiler");
        $__internal_c19ca17cd9d2e8ac9bade9ada06d0b5d3633d3c492a4b792cebf52481d50679d->enter($__internal_c19ca17cd9d2e8ac9bade9ada06d0b5d3633d3c492a4b792cebf52481d50679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c19ca17cd9d2e8ac9bade9ada06d0b5d3633d3c492a4b792cebf52481d50679d->leave($__internal_c19ca17cd9d2e8ac9bade9ada06d0b5d3633d3c492a4b792cebf52481d50679d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6620345bada89fb5f8335e05eff744aa09e3b73f8907ecb8185b35c87f43860 = $this->env->getExtension("native_profiler");
        $__internal_f6620345bada89fb5f8335e05eff744aa09e3b73f8907ecb8185b35c87f43860->enter($__internal_f6620345bada89fb5f8335e05eff744aa09e3b73f8907ecb8185b35c87f43860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6620345bada89fb5f8335e05eff744aa09e3b73f8907ecb8185b35c87f43860->leave($__internal_f6620345bada89fb5f8335e05eff744aa09e3b73f8907ecb8185b35c87f43860_prof);

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
