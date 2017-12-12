<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_affdeec0dbc5b729a7b5802a7549830b0a61ef9241bf1b33347c704439d90231 extends Twig_Template
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
        $__internal_4e32979c324963cc79c19553b2bacd36f611e53af67d0886055c6971ad7d6152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e32979c324963cc79c19553b2bacd36f611e53af67d0886055c6971ad7d6152->enter($__internal_4e32979c324963cc79c19553b2bacd36f611e53af67d0886055c6971ad7d6152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4e32979c324963cc79c19553b2bacd36f611e53af67d0886055c6971ad7d6152->leave($__internal_4e32979c324963cc79c19553b2bacd36f611e53af67d0886055c6971ad7d6152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
