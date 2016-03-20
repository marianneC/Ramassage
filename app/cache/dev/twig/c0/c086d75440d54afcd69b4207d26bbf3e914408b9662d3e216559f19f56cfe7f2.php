<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0a0910b8cf789eca6f326c0d36efaefca56a4b78da3dac440e2dfc9d1cff8e74 extends Twig_Template
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
        $__internal_293b6503987dbf03e7e588a741302a4bcf4403e0c6a97e2cb09d0b4388b9cbdd = $this->env->getExtension("native_profiler");
        $__internal_293b6503987dbf03e7e588a741302a4bcf4403e0c6a97e2cb09d0b4388b9cbdd->enter($__internal_293b6503987dbf03e7e588a741302a4bcf4403e0c6a97e2cb09d0b4388b9cbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_293b6503987dbf03e7e588a741302a4bcf4403e0c6a97e2cb09d0b4388b9cbdd->leave($__internal_293b6503987dbf03e7e588a741302a4bcf4403e0c6a97e2cb09d0b4388b9cbdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
