<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9c6917d3e5733e0c3eee04f1068200d130f32e20c86cc790a1f36aae117415a9 extends Twig_Template
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
        $__internal_5ad8e9ec1cf52133f4ce7f8777473c05c0a4d2a980ce9e96a259b37c8054f69a = $this->env->getExtension("native_profiler");
        $__internal_5ad8e9ec1cf52133f4ce7f8777473c05c0a4d2a980ce9e96a259b37c8054f69a->enter($__internal_5ad8e9ec1cf52133f4ce7f8777473c05c0a4d2a980ce9e96a259b37c8054f69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5ad8e9ec1cf52133f4ce7f8777473c05c0a4d2a980ce9e96a259b37c8054f69a->leave($__internal_5ad8e9ec1cf52133f4ce7f8777473c05c0a4d2a980ce9e96a259b37c8054f69a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
