<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_edffe0ede8d855a08251c1bccb88fa19916d6de4a75c782d948fc2f8b0380f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3e86b551c3bc094abcada7605425ae8b89538b0a4647178567d8ad8cf7de522 = $this->env->getExtension("native_profiler");
        $__internal_c3e86b551c3bc094abcada7605425ae8b89538b0a4647178567d8ad8cf7de522->enter($__internal_c3e86b551c3bc094abcada7605425ae8b89538b0a4647178567d8ad8cf7de522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3e86b551c3bc094abcada7605425ae8b89538b0a4647178567d8ad8cf7de522->leave($__internal_c3e86b551c3bc094abcada7605425ae8b89538b0a4647178567d8ad8cf7de522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
