<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4ba4ece708f19390c397c675e054fc539a0ba83275cfacfe1b6129b16b9e3749 extends Twig_Template
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
        $__internal_ebbb966e3c53ba6a02728b0893d0f2a66d4ac808d7f79580a252ef125b190ac7 = $this->env->getExtension("native_profiler");
        $__internal_ebbb966e3c53ba6a02728b0893d0f2a66d4ac808d7f79580a252ef125b190ac7->enter($__internal_ebbb966e3c53ba6a02728b0893d0f2a66d4ac808d7f79580a252ef125b190ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ebbb966e3c53ba6a02728b0893d0f2a66d4ac808d7f79580a252ef125b190ac7->leave($__internal_ebbb966e3c53ba6a02728b0893d0f2a66d4ac808d7f79580a252ef125b190ac7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
