<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_be1f2160ab8cb74d9c8c79a3bee3f19a3ae75ed9fa545c243cfb960f7c47bb0e extends Twig_Template
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
        $__internal_66433425c0c66db3ca6c546a9a53ee28aaa98a3108b49cd28ca9dd960fb56f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66433425c0c66db3ca6c546a9a53ee28aaa98a3108b49cd28ca9dd960fb56f57->enter($__internal_66433425c0c66db3ca6c546a9a53ee28aaa98a3108b49cd28ca9dd960fb56f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_66433425c0c66db3ca6c546a9a53ee28aaa98a3108b49cd28ca9dd960fb56f57->leave($__internal_66433425c0c66db3ca6c546a9a53ee28aaa98a3108b49cd28ca9dd960fb56f57_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
